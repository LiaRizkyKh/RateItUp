<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\ReviewDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ReviewController extends Controller
{

    public function storage($path)
    {
        return Storage::disk('public')->response($path);
    }

    public function index()
    {
        $posts = Review::with(['user', 'details'])->latest()->get();
        return view('welcome', ['posts' => $posts]);
    }

    public function show($id)
    {
        $post = Review::with(['user', 'details.user', 'visits'])->findOrFail($id);
        return view('welcome', ['post' => $post]);
    }

    public function edit($id)
    {
        $review = Review::findOrFail($id);

        if (auth()->id() !== $review->user_id && auth()->user()->role !== 'Admin') {
            abort(403, 'Unauthorized action.');
        }

        $posts = Review::with('user')->latest()->get();
        return view('welcome', compact('posts', 'review'));
    }

    public function update(Request $request, $id)
    {
        $review = Review::findOrFail($id);

        if (auth()->id() !== $review->user_id && auth()->user()->role !== 'Admin') {
            abort(403, 'Unauthorized action.');
        }

        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'maps_url' => 'required|url',
            'rating' => 'required|integer|min:1|max:5',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
        ]);

        $photoPaths = $review->photos ?? []; // Get existing photos

        if ($request->hasFile('photos')) {
            // Delete old photos if new ones are uploaded
            foreach ($photoPaths as $oldPhoto) {
                Storage::disk('public')->delete($oldPhoto);
            }
            $photoPaths = []; // Reset photoPaths for new uploads

            foreach ($request->file('photos') as $file) {
                $photoPaths[] = $file->store('reviews/photos', 'public');
            }
        }

        $review->update([
            'title' => $request->title,
            'content' => $request->content,
            'maps_url' => $request->maps_url,
            'rating' => $request->rating,
            'photos' => $photoPaths,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
        ]);

        return redirect('/')->with('success', 'Review berhasil diupdate.');
    }

    public function destroy($id)
    {
        $review = Review::findOrFail($id);

        if (auth()->id() !== $review->user_id && auth()->user()->role !== 'Admin') {
            abort(403, 'Unauthorized action.');
        }

        $review->delete();

        return redirect('/')->with('success', 'Review berhasil dihapus.');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title'     => 'required|string|max:255',
            'content'   => 'required|string',
            'maps_url'  => 'required|url',
            'rating'    => 'required|integer|min:1|max:5',
            'photos.*'  => 'image|mimes:jpeg,png,jpg,gif|max:5120',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
        ]);

        $photoPaths = [];

        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $file) {
                $photoPaths[] = $file->store('reviews/photos', 'public');
            }
        }

        Review::create([
            'user_id'    => Auth::id(),
            'title'      => $request->title,
            'content'    => $request->content,
            'rating'     => $request->rating,
            'photos'     => $photoPaths,
            'maps_url'   => $request->maps_url,
            'latitude'   => $request->latitude,
            'longitude'  => $request->longitude,
            'is_deleted' => false,
        ]);

        return redirect('/')->with('success', 'Review berhasil disimpan!');
    }

    public function reply(Request $request, $id)
    {
        $request->validate([
            'reply' => 'required|string',
        ]);

        ReviewDetail::create([
            'review_id' => $id,
            'user_id' => Auth::id(),
            'reply' => $request->reply,
        ]);

        return back()->with('success', 'Reply posted successfully!');
    }

    public function visit(Request $request, $id)
    {
        $review = Review::findOrFail($id);
        $user = Auth::user();

        $visit = \App\Models\ReviewVisit::where('user_id', $user->id)
            ->where('review_id', $review->id)
            ->first();

        if ($visit) {
            $visit->delete();
            return response()->json(['visited' => false]);
        } else {
            \App\Models\ReviewVisit::create([
                'user_id' => $user->id,
                'review_id' => $review->id,
            ]);
            return response()->json(['visited' => true]);
        }
    }
}

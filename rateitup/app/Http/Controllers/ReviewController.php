<?php

namespace App\Http\Controllers;

use App\Models\Review;
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
        $posts = Review::with('user')->latest()->get();
        return view('welcome', compact('posts'));
    }

    public function show($id)
    {
        $post = Review::with('user')->findOrFail($id);
        $posts = Review::with('user')->latest()->get();
        return view('welcome', compact('posts', 'post'));
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
        ]);

        $review->update([
            'title' => $request->title,
            'content' => $request->content,
            'maps_url' => $request->maps_url,
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
            'photos.*'  => 'image|mimes:jpeg,png,jpg,gif|max:5120',
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
            'photos'     => $photoPaths,
            'maps_url'   => $request->maps_url,
            'is_deleted' => false,
        ]);

        return redirect('/')->with('success', 'Review berhasil disimpan!');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'content',
        'photos',
        'maps_url',
        'is_deleted',
        'deleted_at',
    ];

    protected $casts = [
        'photos' => 'array',
        'is_deleted' => 'boolean',
        'deleted_at' => 'datetime',
    ];

    public function getPhotosAttribute($value)
    {
        $photos = json_decode($value, true);
        if (is_array($photos)) {
            return array_map(function ($photo) {
                return route('storage', ['path' => $photo]);
            }, $photos);
        }
        return [];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // public function replies()
    // {
    //     return $this->hasMany(Reply::class);
    // }

}

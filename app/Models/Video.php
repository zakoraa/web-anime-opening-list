<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $table = "videos";

    protected $fillable = [
        'title',
        'anime',
        'link_id',
        'thumbnail',
    ];

    public function user()
    {
        return $this->belongsToMany(User::class, "user_has_video");
    }
}

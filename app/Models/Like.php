<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Like extends Model
{
    use HasFactory;
    protected $table = 'likes';
    protected $guarded = ['id'];


    public function likeUser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function likePost(): BelongsTo
    {
        return $this->belongsTo(Post::class, 'id');
    }
}

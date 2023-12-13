<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comments';
    protected $guarded = ['id'];

    public function commentUser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function commentPost(): BelongsTo
    {
        return $this->belongsTo(Post::class, 'id');
    }
}

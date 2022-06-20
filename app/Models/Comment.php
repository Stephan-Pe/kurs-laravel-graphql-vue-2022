<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
        // use HasFactory;
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'nickname', 'body', 'post_id'
    ];

        /**
     * Get the post associated with the user.
     */
    public function post()
    {
        return $this->hasOne(Post::class);
    }
}

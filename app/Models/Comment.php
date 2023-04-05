<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';
    protected $appends = ['new_attribute'];


    protected $fillable = [
        'id','comment', 'user_id', 'post_id'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    // public function parent()
    // {
    //     return $this->belongsTo(Comment::class, 'parent_id');
    // }

    // public function children()
    // {
    //     return $this->hasMany(Comment::class, 'parent_id');
    // }

    // public function parentComment()
    // {
    //     return $this->belongsTo(Comment::class, 'parent_id');
    // }

    // public function replies()
    // {
    //     return $this->hasMany(Comment::class, 'parent_id')->with('replies');
    // }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';


    protected $fillable = [
        'title', 'slug', 'description', 'image_path', 'user_id', 'is_admin'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}

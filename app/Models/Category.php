<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['category'];

    public function articles(){
        return $this->hasMany(Post::class);
    }

    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }

}

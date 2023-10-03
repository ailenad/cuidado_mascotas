<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable= [
        'title',
        'content',
        'profile_id',
    ];
    public function categories(){
        return $this->belongsToMany(Category::class, 'post_category');
    }
    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}

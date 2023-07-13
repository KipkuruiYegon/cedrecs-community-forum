<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_post',
        'category_post',
        'profile_type',
        'profile_name',
        'user_email',
        'body_post',

    ];

    public function comments()
{
    return $this->hasMany(Comment::class);
}




}

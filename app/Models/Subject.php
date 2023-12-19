<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//N-M
use App\Models\Post;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    //N-M
    public function posts(){
        return $this->belongsToMany(Post::class);
    }
}

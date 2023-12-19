<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//1-N
use App\Models\User;

//N-M
use App\Models\Subject;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content'
    ];

    //1-N
    public function user(){
        return $this->belongsTo(User::class);
    }

    //N-M
    public function subjects(){
        return $this->belongsToMany(Subject::class);
    }
}

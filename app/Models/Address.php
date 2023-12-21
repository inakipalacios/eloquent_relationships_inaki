<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//1-1
use App\Models\User;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'municipality',
        'street',
        'number',
        'user_id'
    ];

    //1-1
    public function user(){
        return $this->belongsTo(User::class);
    }
}

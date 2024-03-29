<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'comment',
        'post_id',
        'user_id'
    ];

    public function userPost()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}

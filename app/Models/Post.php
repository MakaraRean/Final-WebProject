<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'title',
        'body',
        'category_id',
        'cover_path',
        'user_id'
    ];

    public function showDate(){
        return $this-> created_at->format('F d, y'); 
    }

    public function category() {
        return $this->belongsTo(Category::class,'category_id','id');
    }
    
    public function author(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'facebook',
        'faecbook_link',
        'instagram',
        'instagram_link',
        'website',
        'website_link',
        'github',
        'github_link',
        'twitter',
        'twitter_link'
    ];

    public function social() {
        return $this->belongsTo(SocialMedia::class,'user_id','id');

    }
}

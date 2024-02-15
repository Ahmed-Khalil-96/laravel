<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class Post extends Model
{     use SoftDeletes;

    protected $fillable = ['title', 'body', 'enabled', 'published_at', 'user_id', 'published_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}

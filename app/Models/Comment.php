<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['name','email','content','post_id','user_id','approved'];

    /**
     * Get the user that owns the Comment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id')->withDefault('Guest');
    }

    /**
     * Get the user that owns the Comment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id', 'id');
    }

    public function getApprovedAttribute($value)
    {
       return $value ? 'فعال' : 'قيد الانتظار';
    }

    // public function getApprovedAttribute()
    // {
    //     if(!$this->approved == 1){
    //         return 'قيد الانتظار';
    //     }
    //     return 'فعال';
    // //    return $this->approved == 0 ? 'قيد الانتظار' : 'فعال';
    // }

    protected static function booted()
    {


        static::creating(function(Comment $comment){
             if(Auth::user()) {
               return [
                $comment->email = $comment->user->email,
                $comment->name = $comment->user->name,
                $comment->user_id = Auth::user()->id

            ];

             }


        });
    }
    // public function getNameAttribute($value)
    // {
    //    return $this->user_id ? $this->user->name : $value;
    // }

    // public function getEmailAttribute($value)
    // {
    //    return $this->user_id ? $this->user->email : $value;
    // }

}

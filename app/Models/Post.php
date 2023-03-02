<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['name','slug','category_id','user_id','description','image','views'];

    public function category()
    {
        return $this->belongsTo(Category::class , 'category_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class , 'user_id')->withDefault();
    }

    protected static function booted()
    {
        static::creating(function(Post $post) {
            // 20220001, 20220002
            $post->user_id = Auth::user()->id;
        });
    }

    public function getImageUrlAttribute()
    {
        if (!$this->image) {
            return url('no_image.jpg');
        }
        if (Str::startsWith($this->image, ['http://', 'https://'])) {
            return $this->image;
        }
        return asset('storage/' . $this->image);
    }

}

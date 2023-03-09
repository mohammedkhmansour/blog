<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name','slug','status','parent_id'];

    protected static function booted()
    {
        static::addGlobalScope('parent-name',function(Builder $builder){

            $builder->leftJoin('categories as parents','parents.id','=','categories.parent_id')->select([
                'categories.*',
                'parents.name as parent_name'
            ]);
        });
    }

    // public function parent()
    // {
    //     return $this->belongsTo(Category::class,'parent_id','id')
    //     // ->withDefault(); هاد بتزبط ويلي تحت لو م في تصنيف اب يطبعلي هاد الكلمة
    //     ->withDefault([
    //         'name'  => 'تصنيف رئيسي'
    //     ]);

    // }

    public function scopeSearch(Builder $builder , $value){
        $builder->where('categories.name','LIKE',"%{$value}%");
    }
}

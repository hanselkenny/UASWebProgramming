<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    public function categoryName()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }
    public function userName()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}

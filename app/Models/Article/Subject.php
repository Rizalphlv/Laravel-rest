<?php

namespace App\Models\Article;

use Illuminate\Database\Eloquent\Model;


class Subject extends Model
{
    
    public function article()
    {
       return $this->hasMany(Article::class); 
    }
}

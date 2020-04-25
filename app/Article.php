<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded=[];



    //PAth Route
    public function path()
    {
      return route('articles.show', $this);
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    
    public function contents()
    {
        return $this->hasMany('App\Content', 'category_id');   
    }
}

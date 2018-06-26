<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    
    public function contents()
    {
        return $this->hasMany('App\Content', 'category_id');   
    }

    public function getSlugAttribute()
    {
        // if url_slug field empty in DB. update field in DB.
        if($this->url_slug == ""){
            $this->url_slug = str_slug($this->title);
            $this->save();
        }

        // if url_slug not empty, return it.
        return $this->url_slug;
    }
}

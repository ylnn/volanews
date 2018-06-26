<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class Content extends Model
{
    use Resizable;

    protected $table = "contents";

    protected $dispatchesEvents = [
        'created' => \App\Events\ContentCreated::class,
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');        
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

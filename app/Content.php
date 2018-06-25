<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class Content extends Model
{
    use Resizable;

    protected $table = "contents";

    public function category()
    {
        return $this->belongsTo('App\Category');        
    }
}

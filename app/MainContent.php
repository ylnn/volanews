<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;


class MainContent extends Model
{
    use Resizable;
    public function content()
    {
        return $this->belongsTo('App\Content');
    }
    
}

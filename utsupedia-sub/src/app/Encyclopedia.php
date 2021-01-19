<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encyclopedia extends Model
{
    protected $table = 'encyclopedia_t';
    protected $guarded = array('id');
    public static $rules = array(
        'title' => 'required|max:100',
        'contents' => 'required|max:1000'
    );

    function getData()
    {
        return $this->title . ':' . $this->contents; 
    }
}

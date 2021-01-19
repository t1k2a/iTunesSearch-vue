<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Column extends Model
{
    protected $table = 'column_t';
    protected $gurded = array('id');
    protected $fillable = ['title', 'contents'];
    public static $rules = array(
        'title' => 'required|max:100',
        'contents' => 'required|max:1000'
    );

    function getData()
    {
        return $this->title. ':' . $this->contents;
    }
}

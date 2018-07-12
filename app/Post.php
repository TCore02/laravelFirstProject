<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = ['title','body','email'];
    public $timestamp = true;
    public function setBodyAttribute($value)
    {
    	return $this->attributes['body'] = ucfirst($value);
    }
    public function setTitleAttribute($value)
    {
    	return $this->attributes['title'] = ucfirst($value);
    }
}

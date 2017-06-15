<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title','author_id','amount'];

       public function Books()
    {
    	return $this->belongsTo('App\Author');
    }
}

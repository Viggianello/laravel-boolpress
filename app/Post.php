<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //  le colonne con questi nomi possono essere riempite in maniera automatica
    protected $fillable = ['title', 'content', 'slug','category_id'];

    public function category() {
       return $this->belongsTo('App\Category');
   }
}

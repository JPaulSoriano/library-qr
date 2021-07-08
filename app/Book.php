<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title', 'author', 'category_id', 'isbn', 'publisher', 'year', 'quantity', 'ac_no'
    ];
    public function category(){
        return $this->belongsTo('App\Category');
    }
}

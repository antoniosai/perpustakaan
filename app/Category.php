<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function buku()
    {
        return $this->belongsToMany('App\Buku', 'buku_categories');
    }
}

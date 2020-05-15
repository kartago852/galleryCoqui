<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    public function roles()
    {
        return $this->belongsToMany(Categorias::Class)->withTimestamps();
    }
}

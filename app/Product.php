<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function asset()
    {
        return $this->belongsTo(Asset::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Product extends Model
{
    use Searchable;

    public function asset()
    {
        return $this->belongsTo(Asset::class);
    }
}

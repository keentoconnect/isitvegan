<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function providers()
    {
        return $this->belongsToMany(Provider::class);
    }
}

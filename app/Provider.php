<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Provider extends Model
{
    public function contracts()
    {
        return $this->hasMany(Contract::class);
    }

    /**
     * @return BelongsToMany
     */
    public function locations()
    {
        return $this->belongsToMany(Location::class);
    }

    /**
     * @return BelongsToMany
     */
    public function services()
    {
        return $this->belongsToMany(Service::class);
    }
}

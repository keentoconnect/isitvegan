<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Class Location
 * @package App
 */
class Location extends Model
{
    /**
     * @return BelongsToMany
     */
    public function providers()
    {
        return $this->belongsToMany('App\Provider');
    }
}

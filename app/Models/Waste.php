<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class Waste extends Model
{
    /**
     * Get category associated with waste
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->hasOne('App\Models\Category', 'waste_id', 'id');
    }
}
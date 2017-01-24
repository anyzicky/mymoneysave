<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class Category extends Model
{
    /**
     * Get category associated with waste
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function waste()
    {
        return $this->hasMany('App\Models\Waste', 'category_id');
    }

}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class Category extends Model
{
    public function waste()
    {
        return $this->belongsTo('App\Models\Category', 'waste_id', 'id');
    }
}
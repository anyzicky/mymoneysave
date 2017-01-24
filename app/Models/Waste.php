<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class Waste extends Model
{
    protected $table = 'wastes';

    public function categories()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
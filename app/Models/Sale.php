<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sale extends Model
{
    use SoftDeletes;

    /**
     * The ingredients that belong to the potion.
     */
    public function potions()
    {
        return $this->belongsToMany(Potion::class)->withPivot('amount');
    }
}

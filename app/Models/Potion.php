<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Potion extends Model
{
    use SoftDeletes;

    /**
     * The ingredients that belong to the potion.
     */
    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class)->withPivot('proportion');
    }
}

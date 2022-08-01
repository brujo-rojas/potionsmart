<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use SoftDeletes;

    /**
     * The sales that belong to the client.
     */
    public function sales()
    {
        return $this->hasMany(Sale::class);
    }

}

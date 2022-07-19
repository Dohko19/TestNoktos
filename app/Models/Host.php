<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Host extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function bedrooms()
    {
        return $this->hasMany(Bedroom::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bedroom extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function host()
    {
        return $this->belongsTo(Host::class);
    }

    public function bedroomsType()
    {
        return $this->hasMany(BedroomsType::class);
    }
}

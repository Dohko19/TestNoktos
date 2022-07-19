<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BedroomsType extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function bedroom()
    {
        return $this->belongsTo(Bedroom::class);
    }
}

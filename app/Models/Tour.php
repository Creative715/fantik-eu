<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Tour extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function tour_groups()
    {
        return $this->belongsToMany(TourGroup::class);
    }
}

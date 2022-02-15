<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourGroup extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function tours()
    {
        return $this->belongsToMany(Tour::class);
    }
}

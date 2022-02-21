<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Tour extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getContentPreview(){
        return Str::limit($this->content, 100);
    }
    public function createdAtForHumans(){
        return $this->created_at->diffForHumans();
    }
    public function scopeAllPaginate($query, $numbers)
    {
        return $query->with('tour_groups', 'comments', 'state')->orderBy('created_at', 'desc')->paginate($numbers);
    }

    public function scopeFindBySlug($query, $slug)
    {
        return $query->with('tour_groups', 'comments', 'state')->where('slug', $slug)->firstOrFail();
    }

    public function scopeFindByGroup($query)
    {
        return $query->with('tour_groups', 'state')->orderBy('created_at', 'desc')->paginate(12);
    }

    public function tour_groups()
    {
        return $this->belongsToMany(TourGroup::class, 'tour_tour_group');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function state()
    {
        return $this->hasOne(State::class);
    }
}

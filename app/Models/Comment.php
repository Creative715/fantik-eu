<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['subject', 'body', 'article_id'];

    public function createdAtForHumans(){
        return $this->created_at->diffForHumans();
    }
    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }
}
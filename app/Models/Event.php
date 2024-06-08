<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;


    protected $fillable = ['title', 'slug', 'description', 'banner', 'started', 'ended', 'fee', 'location', 'for', 'longitude', 'latitude'];
}

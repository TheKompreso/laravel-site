<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['name','image_url', 'platform', 'release_date'];
}

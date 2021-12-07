<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class passengers extends Model
{
    use HasFactory;
    protected $table = "passengers";
    public $fillable = ['name', 'car_id', 'travel_time'];
}

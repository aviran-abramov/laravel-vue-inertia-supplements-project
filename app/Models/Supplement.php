<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplement extends Model
{
    protected $fillable = ['name', 'description', 'additional_info_1', 'additional_info_2'];
}

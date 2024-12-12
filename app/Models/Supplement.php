<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Supplement extends Model
{
    protected $fillable = ['name', 'description', 'additional_info_1', 'additional_info_2'];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = Str::ucfirst($value);
    }

    public function setDescriptionAttribute($value)
    {
        $this->attributes['description'] = Str::ucfirst($value);
    }

    public function setAdditionalInfo1Attribute($value)
    {
        $this->attributes['additional_info_1'] = Str::ucfirst($value);
    }

    public function setAdditionalInfo2Attribute($value)
    {
        $this->attributes['additional_info_2'] = Str::ucfirst($value);
    }
}

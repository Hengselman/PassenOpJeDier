<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HuisdierSoorten extends Model
{
    protected $table = "huisdier_soorten";

    public function alleHuisdieren(){
        return $this->hasMany("\App\Models\Huisdier","soort","soort");
    }
}

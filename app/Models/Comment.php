<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'huisdier_id',
        'user',
        'content',
    ];

    protected $table = 'comments';

    public function idModel(){
        return $this->belongsTo("\App\Models\Huisdier","id","id");
    }

}

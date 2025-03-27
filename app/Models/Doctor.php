<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    // public function service(){
    //     return $this->belongsTo(service::class);
    // }

    public function major(){
        return $this->belongsTo(Major::class);
    }
}

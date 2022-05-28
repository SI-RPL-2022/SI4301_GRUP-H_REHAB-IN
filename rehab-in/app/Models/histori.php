<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class histori extends Model
{
    use HasFactory;

    public function orderk(){
        return $this->belongsTo(OrderK::class);
    }
    public function orderd(){
        return $this->belongsTo(OrderD::class);
    }
}

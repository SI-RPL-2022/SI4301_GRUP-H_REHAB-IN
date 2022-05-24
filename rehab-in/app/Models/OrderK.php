<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderK extends Model
{
    use HasFactory;
    public function User(){
        return $this->belongsTo(User::class);
    }    
    
    public function Kamar(){
        return $this->belongsTo(Kamar::class);
    }
}

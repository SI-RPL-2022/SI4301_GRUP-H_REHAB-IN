<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;
    protected $fillable = [
        'status',
    ];
    
    public function OrderK(){
        return $this->hasMany(OrderK::class);
    }
}

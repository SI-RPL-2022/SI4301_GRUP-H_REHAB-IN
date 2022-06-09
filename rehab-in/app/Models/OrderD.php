<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderD extends Model
{
    use HasFactory;
    protected $fillable = [
        'status',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }    
    
    public function dokter(){
        return $this->belongsTo(Dokter::class);
    }

    public function historik(){
        return $this->hasMany(histori::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function produk(){
        return $this->hasMany(Produk::class);
    }

    public function jasa(){
        return $this->hasMany(Jasa::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}

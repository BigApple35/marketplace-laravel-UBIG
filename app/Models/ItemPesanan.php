<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemPesanan extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function pesanan(){
        return $this->belongsTo(Pesanan::class);
    }

    public function produk(){
        return $this->hasOne(Produk::class);
    }

    public function jasa(){
        return $this->hasOne(Jasa::class);
    }
}

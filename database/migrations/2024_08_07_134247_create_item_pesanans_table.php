<?php

use App\Models\Jasa;
use App\Models\Pesanan;
use App\Models\Produk;
use App\Models\Service;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('item_pesanans', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Pesanan::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Produk::class)->nullable()->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Jasa::class)->nullable()->constrained()->cascadeOnDelete();
            $table->string("jumlah");
            $table->string("harga");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_pesanans');
    }
};

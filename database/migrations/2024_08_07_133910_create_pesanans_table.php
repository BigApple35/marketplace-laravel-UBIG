<?php

use App\Models\Toko;
use App\Models\User;
use App\Models\UserAlamat;
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
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained();;
            $table->foreignIdFor(Toko::class)->constrained();;
            $table->foreignIdFor(UserAlamat::class)->constrained();;
            $table->decimal("total_harga");
            $table->string("resi");
            $table->text("deskripsi");
            $table->string("status");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanans');
    }
};

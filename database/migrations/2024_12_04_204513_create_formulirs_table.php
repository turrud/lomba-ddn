<?php

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
        Schema::create('formulirs', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama peserta
            $table->string('phone'); // No telepon
            $table->string('institution'); // Instansi
            $table->string('domicile'); // Domisili

            $table->enum('event',
                [
                    'Flower Bouquet | 18 Dec | 13:00 | IDR 25.000','Flower Bouquet | 18 Dec | 14:00 | IDR 25.000',
                    'Lomba Sketsa A4 | 18 Dec | 15:00 | IDR 30.000',
                    'Lomba Poster A3 | 19 Dec | 09:00 | IDR 30.000',
                    'Mewarnai A | 19 Dec | 13:00 | IDR 30.000', 'Mewarnai B | 19 Dec | 15:00 | IDR 30.000',
                    'Painting Ashtray | 20 Dec | 13:00 | IDR 20.000',
                    'Lomba Puisi | 20 Dec | 15:00 | IDR 30.000',
                    'Mirror Decoration | 20 Dec | 15:00 | IDR 30.000']); // Pilih acara

            $table->string('image'); // Upload bukti transfer (path file)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formulirs');
    }
};
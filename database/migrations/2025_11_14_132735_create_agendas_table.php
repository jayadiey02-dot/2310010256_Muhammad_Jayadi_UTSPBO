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
        Schema::create('agenda', function (Blueprint $table) {
        $table->id();                      // id int auto increment primary
        $table->text('judul');             // judul text
        $table->text('keterangan')->nullable(); // keterangan text (boleh kosong)
        $table->timestamps();              // created_at & updated_at timestamps
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agendas');
    }
};

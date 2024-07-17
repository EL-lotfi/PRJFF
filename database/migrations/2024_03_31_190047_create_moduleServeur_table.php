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
        Schema::create('module_serveur', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idServeur')->constrained('serveurs','idServeur');
            $table->foreignId('idModule')->constrained('modules','idModule');
            $table->string('intitule');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */

    public function down(): void
    {
        Schema::dropIfExists('module_serveur');
    }
};

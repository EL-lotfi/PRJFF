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
        Schema::create('deploiment_requete_serveur', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idDeploiment')->constrained('deploiments','idDeploiment');
            $table->foreignId('idServeur')->constrained('serveurs','idServeur');
            $table->foreignId('idRequete')->constrained('requetes','idRequete');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deploiment_requete_serveur');
    }
};

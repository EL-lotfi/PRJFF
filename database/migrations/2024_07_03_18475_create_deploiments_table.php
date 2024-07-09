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
        Schema::create('deploiments', function (Blueprint $table) {
            $table->id('idDeploiment');
            $table->foreignId('idRequete')->constrained('requetes','idRequete');
            $table->foreignId('idServeur')->constrained('serveurs','idServeur');
            $table->string('typeDep');
            $table->string('descr');
            $table->json('listToDo')->nullable();
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deploiment');
    }
};

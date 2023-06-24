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
        Schema::create('soumissions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('prenom');
            $table->string('nom');
            $table->string('telephone');
            $table->string('type_batiment');
            $table->string('commune');
            $table->integer('niveau');
            $table->integer('dimensions');
            $table->binary('fichier_pdf');
            $table->integer('prix_total');
            $table->string('statut')->default('en cours');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soumissions');
    }
};

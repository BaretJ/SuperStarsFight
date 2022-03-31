<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnages', function (Blueprint $table) {
            $table->id();
            $table->string('Nom');
            $table->string('Prenom');
            $table->string('Image');
            $table->integer('Vie');
            $table->integer('Attaque');
            $table->integer('Defense');
            $table->integer('Vitesse');
            $table->integer('TypeId');
            $table->integer('Attaque1Id');
            $table->integer('Attaque2Id');
            $table->integer('Attaque3Id');
            $table->integer('AttaqueSpecialId');
            $table->integer('Sexe');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personnages');
    }
};

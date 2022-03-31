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
            $table->string('nom');
            $table->string('prenom');
            $table->string('image');
            $table->integer('vie');
            $table->integer('attaque');
            $table->integer('defense');
            $table->integer('vitesse');
            $table->integer('type_id');
            $table->integer('attaque1_id');
            $table->integer('attaque2_id');
            $table->integer('attaque3_id');
            $table->integer('attaque_special_id');
            $table->integer('sexe');
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

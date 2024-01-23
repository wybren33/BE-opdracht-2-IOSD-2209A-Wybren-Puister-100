<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('voertuiginstructeur', function (Blueprint $table) {
            $table->id('Id');
            $table->unsignedBigInteger('VoertuigId');
            $table->unsignedBigInteger('InstructeurId');
            $table->date('DatumToekenning');
            $table->boolean('IsActief')->default(true);
            $table->text('Opmerking')->nullable();
            $table->timestamps();

            // Voeg hier andere kolommen toe volgens je behoeften

            $table->foreign('VoertuigId')->references('Id')->on('voertuig');
            $table->foreign('InstructeurId')->references('Id')->on('instructeur');
        });
    }

    public function down()
    {
        Schema::dropIfExists('voertuiginstructeur');
    }
};

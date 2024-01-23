<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('voertuig', function (Blueprint $table) {
            $table->id('Id');
            $table->string('Kenteken');
            $table->string('Type');
            $table->date('Bouwjaar');
            $table->string('Brandstof');
            $table->unsignedBigInteger('TypeVoertuigId');
            $table->foreign('TypeVoertuigId')->references('Id')->on('typevoertuig');
            $table->boolean('IsActief')->default(true);
            $table->text('Opmerking')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('voertuig');
    }
};
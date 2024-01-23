<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('typevoertuig', function (Blueprint $table) {
            $table->id('Id');
            $table->string('TypeVoertuig');
            $table->string('Rijbewijscategorie');
            $table->boolean('IsActief')->default(true);
            $table->text('Opmerking')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('typevoertuig');
    }
};

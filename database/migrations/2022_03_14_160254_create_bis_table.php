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
        Schema::create('bis', function (Blueprint $table) {
            $table->id();
            $table->string('plat_bis', 20);
            $table->string('merk_bis', 30);
            $table->enum('tipe_bis', ['kecil', 'menengah', 'besar']);
            $table->unsignedBigInteger('id_supirs');
            $table->foreign('id_supirs')->references('id')->on('supirs');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bis');
    }
};

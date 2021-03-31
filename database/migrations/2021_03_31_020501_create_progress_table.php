<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('progress', function (Blueprint $table) {
            $table->id();
            $table->foreignId('letters_id')->unsigned();
            $table->enum('status',['Pelajari','Klarifikasi','Mediasi','PB','Anjuran']);
            $table->string('keterangan')->nullable();
            $table->timestamps();

            $table->foreign('letters_id')->references('id')->on('letters')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('progress');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLettersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('letters', function (Blueprint $table) {
            $table->id();
            $table->string('no_surat')->unique();
            $table->date('tgl_surat');
            $table->date('tgl_terima');
            $table->string('asal');
            // $table->enum('perselisihan',['Hak','Kepentingan','PHK','SP/SB']);
            $table->enum('seksi',['KHI','Syaker','Pengupahan']);
            $table->string('keterangan');
            $table->string('isi');
            $table->string('image')->nullable();
            $table->foreignId('user_id')->unsigned();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('letters');
    }
}

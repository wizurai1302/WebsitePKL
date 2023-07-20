<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerusahaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perusahaans', function (Blueprint $table) {
            $table->id();
            $table->biginteger('siswa_id')->unsigned();
            $table->string('nama');
            $table->text('about');
            $table->biginteger('category_id')->unsigned();
            $table->text('keunggulan');
            $table->enum('jurusan', ['RPL', 'MM', 'TKJ', 'BC', 'DKV']);
            $table->string('alamat');
            $table->string('photo');
            $table->timestamps();
        });

        Schema::table('perusahaans', function (Blueprint $table) {
         
            $table->foreign('siswa_id')->references('id')->on('siswas')->onupdate('cascade')->ondelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perusahaans');
    }
}

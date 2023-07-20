<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->String('Nisn');
            $table->String('Nama');
            $table->enum('JK',['Laki-Laki','Perempuan']);
            $table->enum('Kelas',['Rekayasa_Perangkat_Lunak','Multi_Media','Teknik_Komputer_Jaringan','BroadCasting']);
            $table->String('Kota');
            $table->String('Keahlian');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswas');
    }
}

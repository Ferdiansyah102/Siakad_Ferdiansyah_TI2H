<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TambahKolomTabelMahasiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mahasiswa', function(Blueprint $table){
            $table->string('email', 50)->after('id_mahasiswa')->nullable()->unique();
            $table->text('alamat')->after('jurusan')->nullable();
            $table->date('tanggallahir')->after('alamat')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mahasiswa', function(Blueprint $table){
            $table->dropColumn('email');
            $table->dropColumn('alamat');
            $table->dropColumn('tanggallahir');
        });
    }
}

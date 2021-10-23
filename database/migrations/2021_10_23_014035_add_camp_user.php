<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCampUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {           
            $table->string('nombre',100)->after('password');            
            $table->string('cedula',11)->after('nombre');
            $table->string('celular',10)->after('cedula');  
            $table->date('fec_nac')->after('nombre');
            $table->string('cod_ciudad')->after('celular');
            $table->enum('tipo_Usu',['Admin','User'])->after('cod_ciudad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('nombre');            
            $table->dropColumn('cedula');
            $table->dropColumn('celular');  
            $table->dropColumn('fec_nac');
            $table->dropColumn('cod_ciudad');
            $table->dropColumn('tipo_Usu');
        });
    }
}

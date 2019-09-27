<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //Felipe creacion tabla de clientes
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('Id');
            $table->string('Cedula_Nit')->unique();
            $table->string('Nombre');
            $table->string('Observaciones')->nullable();
            $table->string('Direccion')->nullable();
            $table->integer('Telefono')->nullable();
            $table->string('Email', 128)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    //Felipe creacion tabla de clientes
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('clients');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
      
    }
}

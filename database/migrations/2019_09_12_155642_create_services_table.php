<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //Felipe creacion tabla de servicios
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('Id');
            $table->string('Servicio');
            $table->string('Observacion');
            $table->string('Region');
            $table->string('Valor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     //Felipe borrar tabla de servicios
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('services');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}

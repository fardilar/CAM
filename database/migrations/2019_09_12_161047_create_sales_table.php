<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //Felipe crear tabla de ventas
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('Id');
            $table->integer('client_id')->unsigned();
            $table->integer('services_id')->unsigned();
            $table->string('fecha_venta');
            $table->string('fecha_pago');
            $table->string('nota_cobro');
            
            $table->timestamps();
            $table->foreign('client_id')->references('Id')->on('clients')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('services_id')->references('Id')->on('services')->onDelete('cascade')->onUpdate('cascade');
        
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    //Felipe Borrar tabla de ventas
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('sales');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        
    }
}

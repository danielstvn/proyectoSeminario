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
        Schema::create('product_types', function (Blueprint $table) {
            $table->id()-> autoIncrement();
            $table->String('tipo');
            $table->timestamps();
        });

        Schema::create('products', function (Blueprint $table) {
            $table->id()-> autoIncrement();
            $table->String('nombre');
            $table->String('detalle',500);
            $table->decimal('valor',16,2);
            $table->integer('tipo');
            $table->foreign('tipo')->references('id')-> on ('product_types');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_type');

        Schema::dropIfExists('products');

    }
};

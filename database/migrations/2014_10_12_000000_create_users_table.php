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

        // CREACION DE LA TABLA ROLES DE USUARIO
        Schema::create('user_rols', function (Blueprint $table) {
            $table->id()-> autoIncrement();;
            $table->string('rol')->unique();
            $table->timestamps();
        });

        // CREACION DE LA TABLA USUARIOS

        Schema::create('users', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('name');
            $table->string('last_name')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->String('role')->nullable('cliente')-> references('id')-> on ('user_rols');
            $table->rememberToken();
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
        Schema::dropIfExists('users_rol');

        Schema::dropIfExists('users');
    }
};

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\User_rol;
use App\Models\Products;
use App\Models\Product_type;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        self:: seedUser_Rol();
        self:: seedUser();
        self:: seedTipoProductos();
        self:: seedProductos();
         
  
    }

    private function seedUser_Rol(){
        DB:: table('user_rols') -> delete();

        $user_rol = new User_rol();
        
        User_rol::create([
            'rol' => 'Administrador'
        ]);

        User_rol::create([
            'rol' => 'Cliente'
        ]);
    }

    private function seedUser(){
        
        DB::table('users')->delete();
        $user = new User;
        $user->id = '1258453694';
        $user->name = 'admin';
        $user->last_name = 'super';
        $user->email = 'admin@gmail.com';
        $user->role = '1';
        $user->password = '1234';

        $user->save();
    }

    private function seedTipoProductos(){

        DB::table('product_types')->delete();
            
        Product_type::create([
            'tipo' => 'puerta'
        ]);

        Product_type::create([
            'tipo' => 'ventana'
        ]);

    }

    private function seedProductos(){

        DB::table('products')->delete();
 
        
        Products::create(
            [
            'nombre' => 'ventana corrediza',
            'detalle' => 'ventana en aluminio  ','valor' => 350000,
            'tipo' =>2]
        );

        Products::create(
            [
            'nombre' => 'ventana abatible',
            'detalle' => 'ventana en aluminio  ','valor' => 480000,
            'tipo' =>2]
        );

        Products::create(
            [
            'nombre' => 'puerto dormitorio',
            'detalle' => 'puerto  en aluminio  ','valor' => 720000,
            'tipo' =>1]
        );

        Products::create(
            [
            'nombre' => 'puerta corrediza',
            'detalle' => 'puerta en aluminio  ','valor' => 650000,
            'tipo' =>1]
        );

    }
    
}

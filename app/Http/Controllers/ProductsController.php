<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getIndex(){
        return view('productos.index');
    }

    public function getCreate(){

        return view('productos.create');
    }

    public function getEdit($id){
 
		return view('productos.edit') ;
			
    }

    public function getShow($id){
		
		return view('productos.show') ;
			
        
    }
}

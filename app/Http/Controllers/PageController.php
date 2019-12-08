<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getProduct(){
       
        return view('product' );
    }
    
    public function getDetail(){
       
        return view('detail' );
    }
    
    public function getCheckout(){
       
        return view('checkout' );
    }
    
    public function getContact(){
       
        return view('contact' );
    }

    public function getIndex(){
       
        return view('index' );
    }

}

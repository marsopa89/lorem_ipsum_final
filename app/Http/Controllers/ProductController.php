<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function show($id)
    {
      return view('product-detail', compact('id'));
    }

    public function list(){
    	/*$product = Product::all();*/
    	$products = [];
    	return view('products', compact('products'));
    }
}

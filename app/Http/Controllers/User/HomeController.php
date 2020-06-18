<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{
    

    function index() {
    	$products = Product::all();
    	return view("user.index", ["products" => $products]);
    }
}

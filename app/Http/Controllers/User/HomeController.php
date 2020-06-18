<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{
    
    function index(Request $request) {
    	$page = $request->page;
    	$products = Product::all()->skip($page*5)->take(5);

    	return view("user.index", ["products" => $products, "page" => $page]);
    }
}

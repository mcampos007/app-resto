<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Promotion;
class TestController extends Controller
{
    //
    function welcome(){
    	//$products = Product::paginate(9);
    	$categories = Category::has('products')->get();
    	$promotions = Promotion::paginate(6);
    	return view('welcome')->with(compact('categories','promotions'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function getProducts(Request $request)
    {
        $products = Product::where('live','=',1)->orderBy('quantity','DESC')->get();

        return response()->json([
           'products' => $products
        ]);
    }
}

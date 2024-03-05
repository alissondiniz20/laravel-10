<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function __construct(Product $product)
    {   
        $this->product = $product;
    }

    public function index(Request $request) {
        $findProduct = Product::all();
        
        return view('pages.products.pagination', compact('findProduct'));
    }
}

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

        $research = $request->research;
        $findProduct = $this->product->getProductResearchIndex(search: $research ?? '');
        
        return view('pages.products.pagination', compact('findProduct'));
    }

    public function delete(Request $request)
    {
        
    }
}

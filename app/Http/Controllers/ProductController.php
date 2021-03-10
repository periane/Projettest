<?php

use App\Models\Product;
use Illuminate\Http\Request;
namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
        
    }
}

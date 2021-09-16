<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Principal;

class FrontController extends Controller
{

    public function index()
    {
        return view('front.index');
    }
    public function about()
    {
        return view('front.about');
    }
    public function contact()
    {
        return view('front.contact');
    }
    public function product()
    {
        $products = Product::where('id','categoryId')->get();
        return view('front.analytical-products');

    }

    public function principal()
    {
        $principals = Principal::where('id','principalId')->get();
        return view('front.neosacn -bave');
    }
    // public function about()
    // {
    //     return view('front.about');
    // }
    // public function about()
    // {
    //     return view('front.about');
    // }
    // public function about()
    // {
    //     return view('front.about');
    // }
    // public function about()
    // {
    //     return view('front.about');
    // }
}

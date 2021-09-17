<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Principal;
use App\Models\Category;
use App\Models\PrincipalProduct;

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
    // public function product()
    // {
    //     $products = Product::where('id','categoryId')->get();
    //     return view('front.analytical-products');

    // }
    public function categorylWiseProduct($id)
    {
        $data = Product::where('categoryId', $id)
                ->get();

        $categoryName = Category::where('id', '=', $id)->select('name')->first();
        return view('front.products', compact('data','categoryName'));
    }
    public function ProductDetails($id)
    {
        $product = Product::where('categoryId', $id)->find($id);
        return view('front.product-details',compact('product'));
       
    }

    // public function principal()
    // {
    //     $principals = Principal::where('id','principalId')->get();
    //     return view('front.neosacn -bave');
    // }
   public function principalWiseProduct($id)
    {
        $data = PrincipalProduct::orderBy('id', 'desc')
                ->join('principals', 'principals.id', '=', 'principal_products.principalId')
                ->select('principals.*', 'principals.name as pri_name')
                ->where('principalId', $id)
                ->paginate(6);

        $principalName = Principal::where('id', '=', $id)->select('name')->first();
        return view('front.neosacn-bave', compact('data','principalName'));
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
}

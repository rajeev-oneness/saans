<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Principal;
use App\Models\Category;
use App\Models\PrincipalProduct;
use App\Models\companyManager;
use App\Models\Video;
use App\Models\AboutCompany;
use App\Models\AboutUs;
use App\Models\Banar;
class FrontController extends Controller
{

    public function index()
    {
        $banar = Banar::latest()->first();
        $aboutCompany = AboutCompany::latest()->first();
        $categories = Category::get();
        $categories_data = [];
        foreach($categories as $category){
            $category->latestProduct = Product::where('categoryId', $category->id)->latest()->first();
            if($category->latestProduct){
                $categories_data[] = $category;
            }
        }
        $products = Product::limit(10)->latest()->get();
        $logoes = companyManager::latest()->get();
        $videos = Video::latest()->get();
        $product = Product::first();
        return view('front.index',compact('logoes','videos','categories_data','aboutCompany','product','products','banar'));
    }
    public function about()
    {
        $aboutUs = AboutUs::latest()->first();
        $categories = Category::get();
        return view('front.about',compact('aboutUs','categories'));
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
        $product = Product::where('id', $id)->find($id);
        // dd($product);
        return view('front.product-details',compact('product'));
       
    }

    // public function principal()
    // {
    //     $principals = Principal::where('id','principalId')->get();
    //     return view('front.neosacn -bave');
    // }
   public function principalWiseProduct($id)
    {
        $data = PrincipalProduct::where('principalId', $id)
                ->paginate(6);

        $principalName = Principal::where('id', '=', $id)->select('name')->first();
        return view('front.principal-product-details', compact('data','principalName'));
    }

    public function PrincipalDetails($id)
    {
        // $priProduct = PrincipalProduct::where('id', $id)->find($id);
        // // dd($product);
        // return view('front.principal-product-details',compact('priProduct'));
       
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

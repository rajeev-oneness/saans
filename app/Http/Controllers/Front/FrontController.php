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
use App\Models\SubCategory;
use App\Models\ContactUs;
use App\Models\SubPrincipal;
use App\Models\NewsLetter;


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
        // dd($videos);
        $product = Product::first();
        return view('front.index',compact('logoes','videos','categories_data','aboutCompany','product','products','banar',));
    }
    public function about()
    {
        $aboutUs = AboutUs::latest()->first();
        $categories = Category::get();
        $products = Product::get();
        $productcount = count($products);
        return view('front.about',compact('aboutUs','categories','productcount'));
    }
    public function contact()
    {
        $contacts = ContactUs::where('type' ,'0')->where('key','other')->latest()->get();
        // dd($contacts);exit;
        $mainContacts = $contacts->first();
        $mainContactlocations = ContactUs::where('type','0')->where('key','location')->get();
        return view('front.contact',compact('mainContacts','contacts','mainContactlocations'));
    }
    public function category()
    {
        $categories = Category::get();
        return view('front.category',compact('categories'));

    }
    public function categoryWiseProduct($id)
    {
        $data = Product::where('categoryId', $id)
                ->get();
        $subCats = SubCategory::where('categoryId' , '=' , $id)
                ->get();
                // dd($subCats);exit;

        $categoryName = Category::where('id', '=', $id)->select('name')->first();
        //         $subCategories = SubCategory::where('id', '=', $id)->get();
        // dd($subCategories);exit;
        $sub_categories_data = [];
        foreach($subCats as $subCategory){
            $subCategory->allProductByCat = Product::where('subCategoryId', $subCategory->id)->get();
                $sub_categories_data[] = $subCategory;
        }
        return view('front.products', compact('data','categoryName','subCats','sub_categories_data'));
    }
    public function ProductDetails($id)
    {
        $product = Product::where('id', $id)->find($id);

        // $subCategoryName = SubCategory::where('categoryId',$product->categoryId)->select('sub_category_name')->get();
        // dd($subCategoryName);
        $contacts = ContactUs::where('type' ,'0')->where('key','other')->latest()->get();
        $mainContacts = $contacts->first();
        return view('front.product-details',compact('product','mainContacts'));
        // return view('front.product-details',compact('product','mainContacts','subCategoryName'));
       
    }

    // public function principal()
    // {
    //     $principals = Principal::where('id','principalId')->get();
    //     return view('front.neosacn -bave');
    // }
   public function principalWiseProduct($id)
    {
        // $subPrincipals = SubPrincipal::where('subPincipalId' , '=' , $id)
        //         ->get();
        $data = Product::where('principalId', $id)->where('subPrincipalId', '=', $id)
        ->paginate(6);
        // $data = PrincipalProduct::where('principalId', $id)
        // ->paginate(6);
        // $productData = Product::where('principalId', $id)
        //         ->paginate(6);

        $principalName = Principal::where('id', '=', $id)->select('name')->first();
        $subPrincipalName = SubPrincipal::where('id', '=', $id)->select('sub_principal')->first();
        return view('front.principal-product-details', compact('data','principalName','subPrincipalName'));
    }

    public function PrincipalDetails($id)
    {
        // $priProduct = PrincipalProduct::where('id', $id)->find($id);
        // // dd($product);
        // return view('front.principal-product-details',compact('priProduct'));
       
    }
    public function addContactUsReport(Request $request)
    {
        $contactUs = new ContactUs;
        $contactUs->name = $request->input('name');
        $contactUs->email = $request->input('email');
        $contactUs->phone = $request->input('phone');
        $contactUs->message = $request->input('message');
        $contactUs->save();
        return redirect('/contact')->with('success','Contact Added Successfully');
    }
    public function signUp()
    {
        return view('front.sign-up');
    }
    public function newsLetter(Request $request)
    {
        $newsLetter = new NewsLetter;
        $newsLetter->email = $request->input('email');
        $newsLetter->save();
        return redirect('/')->with('success','Subscribe Successfully');
    }
    // public function about()
    // {
    //     return view('front.about');
    // }

}

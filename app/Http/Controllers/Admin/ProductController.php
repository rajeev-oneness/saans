<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Principal;
use App\Models\SubPrincipal;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = Product::orderBy('id', 'DESC')->get();
        // dd($products);
        return view('admin.product.index', compact('products'));
    }

    // public function getSubCat(Request $request)
    // {
    //     $data[] = SubCategory::where("categoryId",$request->categoryId)
    //                 ->get(["sub_category_name","id"]);
    //     return response()->json($data);
    // }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        $principals = Principal::get();
        return view('admin.product.add', compact('categories', 'principals'));
    }

    public function manage(Request $request)
    {
        $categoryid = $request->val;
        // dd($categoryid);
        $subcategories = SubCategory::where('categoryId', $categoryid)->get();
        return response()->json(['sub' => $subcategories]);
    }

    public function managePrincipal(Request $request)
    {
        $principalid = $request->val;
        $subPrincipals = SubPrincipal::where('principalId', $principalid)->get();
        return response()->json(['sub' => $subPrincipals]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|max:200',
            'categoryId' => 'required',
            'subCategoryId' => 'required',
            'principalId' => 'required',
            'subPrincipalId' => 'required',
            'feature' => 'required',
            'larger_specification' => 'required',
            'redirect_link' => 'required',
            'image1' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'pdf' => 'required|mimes:pdf',
            // 'image2' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'image3' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'image4' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'image5' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $fileName = time() . '.' . $request->image1->extension();
        $request->image1->move(public_path('uploads/product/'), $fileName);
        $image1 = 'uploads/product/' . $fileName;

        $fileName = time() . '.' . $request->pdf->extension();
        $request->pdf->move(public_path('uploads/product/pdf/'), $fileName);
        $pdf = 'uploads/product/pdf/' . $fileName;
        // if($request->hasFile('image1')) {


        // $fileName = time().'.'.$request->image1->extension();
        // $request->image1->move(public_path('uploads/product/'), $fileName);
        // $image1 ='uploads/product/'.$fileName;
        // }

        // $fileName = time().'.'.$request->image2->extension();
        // $request->image2->move(public_path('uploads/product/'), $fileName);
        // $image2 ='uploads/product/'.$fileName;

        // $fileName = time().'.'.$request->image3->extension();
        // $request->image3->move(public_path('uploads/product/'), $fileName);
        // $image3 ='uploads/product/'.$fileName;

        // $fileName = time().'.'.$request->image4->extension();
        // $request->image4->move(public_path('uploads/product/'), $fileName);
        // $image4 ='uploads/product/'.$fileName;

        // $fileName = time().'.'.$request->image5->extension();
        // $request->image5->move(public_path('uploads/product/'), $fileName);
        // $image5 ='uploads/product/'.$fileName;

        $product = new Product;
        $product->categoryId = $request->categoryId;
        $product->subCategoryId = $request->subCategoryId;
        $product->principalId = $request->principalId;
        $product->subPrincipalId = $request->subPrincipalId;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->feature = $request->feature;
        $product->larger_specification = $request->larger_specification;
        $product->redirect_link = $request->redirect_link;
        $product->image1 = $image1;
        $product->pdf = $pdf;
        // $product->image2 = $image2;
        // $product->image3 = $image3;

        // $product->image4 = $image4;
        // $product->image5 = $image5;
        $product->save();

        // return redirect()->route('product.view');
        return redirect('admin/product')->with('success', 'Product Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function pdfview(Request $request)
    {
        $items = Product::get();
        view()->share('items', $items);


        if ($request->has('download')) {
            $pdf = PDF::loadView('admin/product');
            return $pdf->download('pdfview.pdf');
        }


        return view('pdfview');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        $subCategories = SubCategory::where('categoryId', $product->categoryId)->get();
        $principals = Principal::all();
        $subPrincipals = SubPrincipal::where('principalId', $product->principalId)->get();
        return view('admin.product.edit', compact('product', 'categories', 'subCategories', 'principals', 'subPrincipals'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|max:200',
            'categoryId' => 'required',
            'subCategoryId' => 'required',
            'principalId' => 'required',
            'subPrincipalId' => 'required',
            'feature' => 'required|max:200',
            'larger_specification' => 'required|max:200',
            'redirect_link' => 'required',
            'pdf' => 'mimes:pdf',
            // 'image2' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'image3' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'image4' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'image5' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);


        if ($request->hasFile('image1')) {

            $fileName = time() . '.' . $request->image1->extension();
            $request->image1->move(public_path('uploads/product/'), $fileName);
            $image1 = 'uploads/product/' . $fileName;
            Product::where('id', $id)->update([
                'image1' => $image1,
            ]);
        }

        if ($request->hasFile('pdf')) {

            $fileName = time() . '.' . $request->pdf->extension();
            $request->pdf->move(public_path('uploads/product/pdf/'), $fileName);
            $pdf = 'uploads/product/pdf/' . $fileName;
            Product::where('id', $id)->update([
                'pdf' => $pdf,
            ]);
        }

        // if($request->hasFile('image2')) {

        //    $fileName = time().'.'.$request->image2->extension();
        //     $request->image2->move(public_path('uploads/product/'), $fileName);
        //     $image2 ='uploads/product/'.$fileName;

        //     Product::where('id', $id)->update([
        //         'image2' => $image2,
        //     ]);
        // }


        // if($request->hasFile('image3')) {

        //     $fileName = time().'.'.$request->image3->extension();
        //     $request->image3->move(public_path('uploads/product/'), $fileName);
        //     $image3 ='uploads/product/'.$fileName;

        //     Product::where('id', $id)->update([
        //         'image3' => $image3,
        //     ]);
        // }


        // if($request->hasFile('image4')) {

        //     $fileName = time().'.'.$request->image4->extension();
        //     $request->image4->move(public_path('uploads/product/'), $fileName);
        //     $image4 ='uploads/product/'.$fileName;

        //     Product::where('id', $id)->update([
        //         'image4' => $image4,
        //     ]);
        // }

        // if($request->hasFile('image5')) {

        //     $fileName = time().'.'.$request->image5->extension();
        //     $request->image5->move(public_path('uploads/product/'), $fileName);
        //     $image5 ='uploads/product/'.$fileName;
        //     Product::where('id', $id)->update([
        //         'image5' => $image5,
        //     ]);
        // }




        Product::where('id', $id)->update([
            'categoryId' => $request->categoryId,
            'subCategoryId' => $request->subCategoryId,
            'principalId' => $request->principalId,
            'subPrincipalId' => $request->subPrincipalId,
            'name' => $request->name,
            'description' => $request->description,
            'feature' => $request->feature,
            'larger_specification' => $request->larger_specification,
            'redirect_link' => $request->redirect_link,
        ]);
        // return redirect()->route('product.view');
        return redirect('admin/product')->with('success', 'Product Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('product.view');
    }
}

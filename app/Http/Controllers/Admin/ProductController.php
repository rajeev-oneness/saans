<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::get();
        return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $categories=Category::get();
        return view('admin.product.add',compact('categories'));
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
            'description' => 'required',
            'categoryId' => 'required',
            'feature' => 'required',
            'larger_specification' => 'required',
            'image1' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image2' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image3' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image4' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image5' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $fileName = time().'.'.$request->image1->extension();
        $request->image1->move(public_path('uploads/'), $fileName);
        $image1 ='uploads/'.$fileName;

        $fileName = time().'.'.$request->image2->extension();
        $request->image2->move(public_path('uploads/'), $fileName);
        $image2 ='uploads/'.$fileName;

        $fileName = time().'.'.$request->image3->extension();
        $request->image3->move(public_path('uploads/'), $fileName);
        $image3 ='uploads/'.$fileName;

        $fileName = time().'.'.$request->image4->extension();
        $request->image4->move(public_path('uploads/'), $fileName);
        $image4 ='uploads/'.$fileName;

        $fileName = time().'.'.$request->image5->extension();
        $request->image5->move(public_path('uploads/'), $fileName);
        $image5 ='uploads/'.$fileName;

        $product = new Product;
        $product->categoryId = $request->categoryId;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->feature = $request->feature;
        $product->larger_specification = $request->larger_specification;
        $product->image1 = $image1;
        $product->image2 = $image2;
        $product->image3 = $image3;

        $product->image4 = $image4;
        $product->image5 = $image5;
        $product->save();

        // return redirect()->route('product.view');
        return redirect('admin/product/add')->with('success','Product Added Successfully');
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $product = Product::find($id);
        return view('admin.product.edit',compact('product','categories'));
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
            'description' => 'required',
            'categoryId' => 'required',
            'feature' => 'required',
            'larger_specification' => 'required',
            'image1' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image2' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image3' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image4' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image5' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
       

        if($request->hasFile('image1')) {
           
            $fileName = time().'.'.$request->image1->extension();
            $request->image1->move(public_path('uploads/'), $fileName);
            $image1 ='uploads/'.$fileName;
            Product::where('id', $id)->update([
                'image1' => $image1,
            ]);
        }

        if($request->hasFile('image2')) {
           
           $fileName = time().'.'.$request->image2->extension();
            $request->image2->move(public_path('uploads/'), $fileName);
            $image2 ='uploads/'.$fileName;

            Product::where('id', $id)->update([
                'image2' => $image2,
            ]);
        }


        if($request->hasFile('image3')) {
           
            $fileName = time().'.'.$request->image3->extension();
            $request->image3->move(public_path('uploads/'), $fileName);
            $image3 ='uploads/'.$fileName;

            Product::where('id', $id)->update([
                'image3' => $image3,
            ]);
        }


        if($request->hasFile('image4')) {
           
            $fileName = time().'.'.$request->image4->extension();
            $request->image4->move(public_path('uploads/'), $fileName);
            $image4 ='uploads/'.$fileName;

            Product::where('id', $id)->update([
                'image4' => $image4,
            ]);
        }

        if($request->hasFile('image5')) {
           
            $fileName = time().'.'.$request->image5->extension();
            $request->image5->move(public_path('uploads/'), $fileName);
            $image5 ='uploads/'.$fileName;
            Product::where('id', $id)->update([
                'image5' => $image5,
            ]);
        }




        Product::where('id', $id)->update([
        'categoryId' => $request->categoryId,
        'name' =>$request->name,
        'description' => $request->description,
        'feature' => $request->feature,
        'larger_specification' => $request->larger_specification,
        ]);
        // return redirect()->route('product.view');
        return redirect('admin/product')->with('success','Product Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=Product::findOrFail($id);
        $product->delete();
        return redirect()->route('product.view');
    }
}


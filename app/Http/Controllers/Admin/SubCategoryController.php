<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Category;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subCategories=SubCategory::paginate(10);
        return view('admin.sub-category.index',compact('subCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::get();
        return view('admin.sub-category.add',compact('categories'));
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
            'sub_category_name' => 'required|unique:sub_categories,name',
            'categoryId' => 'required'
        ]);
      

        $subCartegory = new SubCategory;
        $subCartegory->categoryId = $request->categoryId;
        $subCartegory->sub_category_name = $request->sub_category_name;
        $subCartegory->save();

        // return redirect()->route('product.view');
        return redirect('admin/sub-category')->with('success','Sub-Category Added Successfully');
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
        $categories=Category::get();
        $subCategory = SubCategory::find($id);
        return view('admin.sub-category.edit',compact('categories','subCategory'));
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
            'sub_category_name' => 'required|unique:sub_categories,name',
            'categoryId' => 'required'
        ]);
      
        SubCategory::where('id', $id)->update([
        'categoryId' => $request->categoryId,
        'sub_category_name' =>$request->sub_category_name,
        ]);
        // return redirect()->route('product.view');
        return redirect('admin/sub-category')->with('success','Sub-Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subCategory=SubCategory::findOrFail($id);
        $subCategory->delete();
        return redirect()->route('sub-category.view');
    }
}

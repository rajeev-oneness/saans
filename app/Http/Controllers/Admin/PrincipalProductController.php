<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PrincipalProduct;
use App\Models\Principal;

class PrincipalProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $priproducts = PrincipalProduct::orderBy('id', 'DESC')->get();
        return view('admin.principal-product.index',compact('priproducts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $principals = Principal::all();
        return view('admin.principal-product.add',compact('principals'));
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
            'principalId' => 'required',
            'redirect_link' => 'required',
            'image' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $fileName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads/'), $fileName);
        $image ='uploads/'.$fileName;
        $principalPro = new PrincipalProduct;
        $principalPro->principalId = $request->principalId;
        $principalPro->name = $request->name;
        $principalPro->description = $request->description;
        $principalPro->redirect_link = $request->redirect_link;
        $principalPro->image = $image;
        // $fileName = time().'.'.$request->image->extension();
        // $request->image->move(public_path('uploads/'), $fileName);
        // $image ='uploads/'.$fileName;
        $principalPro->save();

        // return redirect()->route('principal.product.view');
        return redirect('admin/principal-product')->with('success','Principal Product Added Successfully');

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
        $principals = Principal::all();
        $PrincipalPro = PrincipalProduct::find($id);
        return view('admin.principal-product.edit',compact('PrincipalPro','principals'));
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
            'image' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
            'redirect_link' => 'required',
            'principalId' => 'required'
        ]);
        if($request->hasFile('image')) {
           
            $fileName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/'), $fileName);
            $image ='uploads/'.$fileName;
            PrincipalProduct::where('id', $id)->update([
                'image' => $image,
            ]);
        }
        PrincipalProduct::where('id', $id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'redirect_link' => $request->redirect_link,
            'principalId' => $request->principalId
        ]);
        // return redirect()->route('principal.product.view');
        return redirect('admin/principal-product')->with('success','Principal Product Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $principal=PrincipalProduct::findOrFail($id);
        $principal->delete();
        return redirect()->route('principal.product.view');
    }
}

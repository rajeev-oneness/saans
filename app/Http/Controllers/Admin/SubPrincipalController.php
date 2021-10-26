<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubPrincipal;
use App\Models\Principal;

class SubPrincipalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subPrincipals=SubPrincipal::orderBy('id', 'DESC')->get();
        return view('admin.sub-principal.index',compact('subPrincipals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $principals=Principal::get();
        return view('admin.sub-principal.add',compact('principals'));
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
            'sub_principal' => 'required|unique:sub_principals,sub_principal',
            'principalId' => 'required'
        ]);
      

        $subPrincipal = new SubPrincipal;
        $subPrincipal->principalId = $request->principalId;
        $subPrincipal->sub_principal = $request->sub_principal;
        $subPrincipal->save();

        // return redirect()->route('product.view');
        return redirect('admin/sub-principal')->with('success','Sub-Principal Added Successfully');
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
        $principals=Principal::get();
        $subPrincipal = SubPrincipal::find($id);
        return view('admin.sub-principal.edit',compact('principals','subPrincipal'));
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
            'sub_principal' => 'required|unique:sub_principals,sub_principal',
            'principalId' => 'required'
        ]);
      
        SubPrincipal::where('id', $id)->update([
        'principalId' => $request->principalId,
        'sub_principal' =>$request->sub_principal,
        ]);
        // return redirect()->route('product.view');
        return redirect('admin/sub-principal')->with('success','Sub-Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subPrincipal=SubPrincipal::findOrFail($id);
        $subPrincipal->delete();
        return redirect()->route('sub-principal.view');
    }
}

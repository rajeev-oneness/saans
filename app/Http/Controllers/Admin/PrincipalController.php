<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Principal;

class PrincipalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $principals = Principal::paginate(10);
        return view('admin.principal.index',compact('principals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.principal.add');
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
            'name' => 'required|unique:categories,name'
        ]);
        $principal = new Principal;
        $principal->name = $request->input('name');
        $principal->save();
        return redirect('admin/principal/add')->with('success','Principal Added Successfully');
        // return redirect()->back()->with('success','Principal Added Successfully');
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
        $principal = Principal::find($id);
        return view('admin.principal.edit',compact('principal'));
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
            'name' => 'required|string'
        ]);
        Principal::where('id', $id)->update([
            'name' => $request->name
        ]);
        // return redirect()->route('principal.view');
        return redirect('admin/principal')->with('success','Principal Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $principal=Principal::findOrFail($id);
        $principal->delete();
        return redirect()->route('principal.view');
    }
}

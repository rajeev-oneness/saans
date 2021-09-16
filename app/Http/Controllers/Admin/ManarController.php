<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Manar;

class ManarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manars = Manar::paginate(10);
        return view('admin.manar.index',compact('manars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.manar.add');
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
            'title' => 'required',
            'sub_title' => 'required',
            'image' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $fileName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads/'), $fileName);
        $image ='uploads/'.$fileName;
        $manar = new Manar;
        $manar->title = $request->input('title');
        $manar->sub_title = $request->input('sub_title');
        $manar->image = $image;
        // $category->status = 1;
        $manar->save();
        return redirect('admin/manar/add')->with('success','Manar Added Successfully');
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
        $manar = Manar::find($id);
        return view('admin.manar.edit',compact('manar'));
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
            'title' => 'required',
            'sub_title' => 'required',
            'image' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
         if($request->hasFile('image')) {
           
            $fileName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/'), $fileName);
            $image ='uploads/'.$fileName;
            Manar::where('id', $id)->update([
                'image' => $image,
            ]);
        }
        Manar::where('id', $id)->update([
            'title' => $request->title,
            'sub_title' => $request->sub_title
        ]);
        return redirect('admin/manar')->with('success','Manar Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Manar::where('id', $id)->delete();
        return redirect()->route('manar.view');
    }
}

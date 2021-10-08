<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutCompany;

class AboutCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aboutCompanies= AboutCompany::paginate();
        return view('admin.about-company.index',compact('aboutCompanies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about-company.add');
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
            'content' => 'required|max:1000',
            'extra_info' => 'required|max:10',
            'image' => 'required|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $fileName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads/about-company/'), $fileName);
        $image ='uploads/about-company/'.$fileName;
        $manar = new AboutCompany;
        $manar->content = $request->input('content');
        $manar->extra_info = $request->input('extra_info');
        $manar->image = $image;
        // $category->status = 1;
        $manar->save();
        return redirect('admin/about-company')->with('success','About Company Added Successfully');
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
        $aboutCompany = AboutCompany::find($id);
        return view('admin.about-company.edit',compact('aboutCompany'));
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
            'content' => 'required|max:300',
            'extra_info' => 'required|max:10',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
         if($request->hasFile('image')) {
           
            $fileName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/about-company/'), $fileName);
            $image ='uploads/about-company/'.$fileName;
            AboutCompany::where('id', $id)->update([
                'image' => $image,
            ]);
        }
        AboutCompany::where('id', $id)->update([
            'content' => $request->content,
            'extra_info' => $request->extra_info
        ]);
        return redirect('admin/about-company')->with('success','About Company Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AboutCompany::where('id', $id)->delete();
        return redirect()->route('about.company.view');
    }
}

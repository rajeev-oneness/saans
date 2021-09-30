<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutUs;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aboutus= AboutUs::paginate();
        return view('admin.about_us.index',compact('aboutus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about_us.add');
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
            'content1' => 'required|string',
            'content2' => 'required',
            'experience' => 'required',
            'winning_awards' => 'required',
            'image1' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image2' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
            'main_banar' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $fileName = time().'.'.$request->main_banar->extension();
        $request->main_banar->move(public_path('uploads/about_us/'), $fileName);
        $main_banar ='uploads/about_us/'.$fileName;

        $fileName = time().'.'.$request->image1->extension();
        $request->image1->move(public_path('uploads/about_us/'), $fileName);
        $image1 ='uploads/about_us/'.$fileName;

        $fileName = time().'.'.$request->image2->extension();
        $request->image2->move(public_path('uploads/about_us'), $fileName);
        $image2 ='uploads/about_us/'.$fileName;

        $aboutus = new AboutUs;
        $aboutus->content1 = $request->content1;
        $aboutus->content2 = $request->content2;
        $aboutus->experience = $request->experience;
        $aboutus->winning_awards = $request->winning_awards;
        $aboutus->image1 = $image1;
        $aboutus->image2 = $image2;
        $aboutus->main_banar = $main_banar;
        $aboutus->save();

        // return redirect()->route('product.view');
        return redirect('admin/about_us/add')->with('success','About Us Added Successfully');
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
        $aboutus = AboutUs::find($id);
        return view('admin.about_us.edit',compact('aboutus'));
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
            'content1' => 'required|string',
            'content2' => 'required',
            'experience' => 'required',
            'winning_awards' => 'required',
            'image1' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image2' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
            'main_banar' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
       

        if($request->hasFile('image1')) {
           
            $fileName = time().'.'.$request->image1->extension();
            $request->image1->move(public_path('uploads/about_us/'), $fileName);
            $image1 ='uploads/about_us/'.$fileName;
            AboutUs::where('id', $id)->update([
                'image1' => $image1,
            ]);
        }

        if($request->hasFile('image2')) {
           
           $fileName = time().'.'.$request->image2->extension();
            $request->image2->move(public_path('uploads/about_us/'), $fileName);
            $image2 ='uploads/about_us/'.$fileName;

            AboutUs::where('id', $id)->update([
                'image2' => $image2,
            ]);
        }


        if($request->hasFile('image3')) {
           
            $fileName = time().'.'.$request->main_banar->extension();
            $request->main_banar->move(public_path('uploads/about_us/'), $fileName);
            $main_banar ='uploads/about_us/'.$fileName;

            AboutUs::where('id', $id)->update([
                'image3' => $image3,
            ]);
        }

        AboutUs::where('id', $id)->update([
        'content1' => $request->content1,
        'content2' =>$request->content2,
        'experience' => $request->experience,
        'winning_awards' => $request->winning_awards,
        ]);
        // return redirect()->route('product.view');
        return redirect('admin/about_us')->with('success','About Us Updated Successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AboutUs::where('id', $id)->delete();
        return redirect()->route('about_us.view');
    }
}

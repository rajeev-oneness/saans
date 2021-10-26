<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactDetails;

class ContactDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactDetails = ContactDetails::orderBy('id', 'DESC')->get();
        return view('admin.contact-details.index',compact('contactDetails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contact-details.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'email' => 'required|email',
            'phone' => 'required',
            'blog_link' => 'url',
            'google_link' => 'url',
            'facebook_link' => 'url',
            'twiter_link' => 'url',
            'banar' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        $fileName = time().'.'.$request->banar->extension();
        $request->banar->move(public_path('uploads/'), $fileName);
        $banar ='uploads/'.$fileName;

        $contactDetail = new ContactDetails;
        $contactDetail->banar = $banar;
        $contactDetail->email = implode(",", $request->get('email'));
        $contactDetail->phone = $request->input('phone');
        $contactDetail->blog_link = $request->input('blog_link');
        $contactDetail->google_link = $request->input('google_link');
        $contactDetail->facebook_link = $request->input('facebook_link');
        $contactDetail->twiter_link = $request->input('twiter_link');
        // $category->status = 1;
        $contactDetail->save();
        return redirect('admin/contact-details')->with('success','Contact Details Added Successfully');
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
        $contactDetails = ContactDetails::find($id);
        return view('admin.contact-details.edit', compact('contactDetails'));
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
            'email' => 'required',
            'phone' => 'required',
            'blog_link' => 'url',
            'google_link' => 'url',
            'facebook_link' => 'url',
            'twiter_link' => 'url',
            'banar' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($request->hasFile('banar')) {
           
            $fileName = time().'.'.$request->banar->extension();
            $request->banar->move(public_path('uploads/'), $fileName);
            $banar ='uploads/'.$fileName;
            ContactDetails::where('id', $id)->update([
                'banar' => $banar,
            ]);
        }
        ContactDetails::where('id', $id)->update([
            'email' => $request->email,
            'phone' => $request->phone,
            'blog_link' => $request->blog_link,
            'google_link' => $request->google_link,
            'google_link' => $request->google_link,
            'facebook_link' => $request->facebook_link,
            'twiter_link' => $request->twiter_link
        ]);

        return redirect('admin/contact-details')->with('success','Contact Details Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ContactDetails::where('id', $id)->delete();
        return redirect()->route('contact.details.view');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactUs;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $contactUs = ContactUs::paginate(10);
        // return view('admin.contact_us.index',compact('contactUs'));

        $contactUs = ContactUs::where('type' ,  "0")->paginate(10);
        // dd($contactUs);exit;
        return view('admin.contact_us.index',compact('contactUs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('admin.contact_us.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'email',
    //         'name' => 'required|exists:contact_us',
    //         'blog_link' => 'required|url|exists:contact_us',
    //         'google_link' => 'required|url|exists:contact_us',
    //         'facebook_link' => 'required|url|exists:contact_us',
    //         'twiter_link' => 'required|url|exists:contact_us',
    //     ]);
    //     $contactUs = new ContactUs;
    //     $contactUs->contact_type = "0";
    //     $contactUs->name = $request->input('name');
    //     $contactUs->email = $request->input('email');
    //     $contactUs->phone = $request->input('phone');
    //     $contactUs->office_type = $request->input('office_type');
    //     $contactUs->address = $request->input('address');
    //     $contactUs->blog_link = $request->input('blog_link');
    //     $contactUs->google_link = $request->input('google_link');
    //     $contactUs->facebook_link = $request->input('facebook_link');
    //     $contactUs->twiter_link = $request->input('twiter_link');
    //     $contactUs->message = $request->input('message');
    //     $contactUs->email_us = "salse@saansanalytical.com / support@saansanalytical.com";
    //     // $category->status = 1;
    //     $contactUs->save();
    //     return redirect('admin/contact_us/add')->with('success','Contact Added Successfully');
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $contactUs = ContactUs::where('type',"0")->where('key','other')->first();
        // if($contactUs->location ){
        $contactUs->location = ContactUs::where('type',"0")->where('key','location')->get();
        return view('admin.contact_us.edit',compact('contactUs'));
        //  }
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
            'contactUsId' => 'required|min:1|numeric|in:'.$id,
            'email' => 'email',
            'blog_link' => 'url',
            'google_link' => 'url',
            'facebook_link' => 'url',
            'twiter_link' => 'url',
            'address_type' => 'nullable|array',
            'address_type.*' => 'required|string|max:255',
        ]);

        ContactUs::where('id',$id)->where('type',0)->where('key', 'other')->update([
            'name' => $request->name,
            'blog_link' => $request->blog_link,
            'google_link' => $request->google_link,
            'facebook_link' => $request->facebook_link,
            'twiter_link' => $request->twiter_link,
        ]);

        if(!empty($request->address_type) && count($request->address_type) > 0){
            ContactUs::where('type',0)->where('key', 'location')->delete();
            foreach($request->address_type as $key => $address){
                $newLocation = new ContactUs();
                $newLocation->type = 0;
                $newLocation->key = 'location';
                $newLocation->name = ($address ?? '');
                $newLocation->address = ($request->address[$key] ?? '');
                $newLocation->phone = ($request->address_phone[$key] ?? '');
                $newLocation->save();
            }
        }
        return redirect('admin/contact_us/edit')->with('success','Contact Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ContactUs::where('id', $id)->delete();
        return redirect()->route('contact_us.view');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\companyManager;

class CompanyManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comManagers = companyManager::paginate(10);
        return view('admin.company-manager.index',compact('comManagers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.company-manager.add');
    
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
            'redirect_link' => 'required|url',
            'logo' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $fileName = time().'.'.$request->logo->extension();
        $request->logo->move(public_path('uploads/'), $fileName);
        $logo ='uploads/'.$fileName;
        $comManager = new companyManager;
        $comManager->redirect_link = $request->redirect_link;
        $comManager->logo = $logo;
        $comManager->save();

        return redirect('admin/company-manager/add')->with('success','Company Manager Added Successfully');
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
        $comManager = companyManager::find($id);
        return view('admin.company-manager.edit',compact('comManager'));
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
            'logo' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
            'redirect_link' => 'required|url',
        ]);
        if($request->hasFile('logo')) {
           
            $fileName = time().'.'.$request->logo->extension();
            $request->logo->move(public_path('uploads/'), $fileName);
            $logo ='uploads/'.$fileName;
            companyManager::where('id', $id)->update([
                'logo' => $logo,
            ]);
        }
        companyManager::where('id', $id)->update([
            'redirect_link' => $request->redirect_link,
        ]);
        return redirect('admin/company-manager')->with('success','Company Mnager Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $principal=companyManager::findOrFail($id);
        $principal->delete();
        return redirect()->route('company.manager.view');
    }
}

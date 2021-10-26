<?php

namespace App\Http\Controllers\Salse;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SalseReport;

class SalseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salseReports = SalseReport::get();
        return view('salse.salse.index', compact('salseReports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('salse.salse.add');
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
            'customer_name' => 'required',
            'contact_person' => 'required',
            'email' => 'required',
            'phone' => 'required|min:11|numeric',
            'value_inr' => 'required',
            'remarks' => 'required'
        ]);
        $salse = new SalseReport;
        $salse->customer_name = $request->input('customer_name');
        $salse->contact_person = $request->input('contact_person');
        $salse->email = $request->input('email');
        $salse->phone = $request->input('phone');
        $salse->value_inr = $request->input('value_inr');
        $salse->remarks = $request->input('remarks');
        $salse->save();
        return redirect('sales/sales-report')->with('success','Report Added Successfully');
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
        $salseReport = SalseReport::find($id);
        return view('salse.salse.edit', compact('salseReport'));
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
            'customer_name' => 'required',
            'contact_person' => 'required',
            'email' => 'required',
            'phone' => 'required|min:11|numeric',
            'value_inr' => 'required',
            'remarks' => 'required'
        ]);
        SalseReport::where('id', $id)->update([
            'customer_name' => $request->customer_name,
            'contact_person' => $request->contact_person,
            'email' => $request->email,
            'phone' => $request->phone,
            'value_inr' => $request->value_inr,
            'remarks' => $request->remarks
        ]);

        return redirect('sales/sales-report')->with('success','Report Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SalseReport::where('id', $id)->delete();
        return redirect()->route('salse.report.view');
    }
}

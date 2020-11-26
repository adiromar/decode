<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use Session;
use Image;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Patients Information';
        $patient = Patient::get();

        return view('patient.index', compact('title','patient'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Add New Patients Information';
        $patient = Patient::get();

        return view('patient.create', compact('title','patient'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateWith([
            'patient_name' => 'required',
            'gender' => 'required'
        ]);

        $pat = new Patient;

        $pat->lab_id = $request->lab_id;
        $pat->patient_name = $request->patient_name;
        $pat->patient_age = $request->patient_age;
        $pat->gender = $request->gender;
        $pat->phone = $request->phone;

        $pat->save();

        Session::flash('success', 'Succesfully created Patient Information.');
        return redirect()->back();
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
        $patient = Patient::findorfail($id);
        
        $title = 'Edit Patients Information';
        return view('admin.editPatient', compact('title','patient'));
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
        $this->validateWith([
            'patient_name' => 'required',
            'gender' => 'required'
        ]);
        
        // dd($request);

        $pat = Patient::findOrFail($id);

        $pat->lab_id = $request->lab_id;
        $pat->patient_name = $request->patient_name;
        $pat->patient_age = $request->patient_age;
        $pat->gender = $request->gender;
        $pat->phone = $request->phone;

        $pat->result = $request->result;
        $pat->e_gene = $request->e_gene;
        $pat->n_gene = $request->n_gene;
        $pat->orf_lb = $request->orf_lb;

        $pat->save();

        Session::flash('success', 'Succesfully Updated Patient Information.');
        return view('admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use Session;
use Auth;
use PDF;


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $title = 'Dashboard';
        $patient = Patient::get();
        $p_count = $patient->count();
        $data['p_count'] = $p_count;

        return view('admin.index', compact('title','patient','data'));
    }

    public function printPdf(Request $request, $id){
        // $pdf = PDF::make('dompdf.wrapper');
        // $pdf->loadHTML('<h1>Test</h1>');
        // return $pdf->stream();

        // $pdf = PDF::loadView('pdf.invoice', $data);
        // return $pdf->download('invoice.pdf');

        $data['patient'] = Patient::find($id);

        $pdf = PDF::loadView('admin.pdfview', $data);
        return $pdf->stream();
        // return view('admin.pdfview')->with($data);
    }

    public function downloadPdf(Request $request, $id){

        $data['patient'] = Patient::find($id);
        $n = time() . 'patient_report.pdf';
        $pdf = PDF::loadView('admin.pdfview', $data);
        return $pdf->download($n);
    }

    public function printhtml(Request $request){
        $data['patient'] = Patient::find($id);
        $n = time() . 'patient_report.pdf';
        $homepage = file_get_contents('filename.txt');

        return view('admin.pdfview', compact('data'));
    }
}

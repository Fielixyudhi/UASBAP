<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Viewlistfeed;
use PDF;


class listfeedController extends Controller
{
    //
    public function index()
    {  
        $listfeed = Viewlistfeed::all();
        return view('admin.listfeed.index', ['title' => 'listfeed'],compact('listfeed'));
    }

    public function print_pdf()
    {
    	$listfeed = Viewlistfeed::all();
 
    	$pdf = PDF::loadView('admin.listfeed.print_pdf',compact('listfeed'));
        $pdf->setPaper('A4','potrait');
    	return $pdf->download('listfeed-pdf.pdf');
    }
}

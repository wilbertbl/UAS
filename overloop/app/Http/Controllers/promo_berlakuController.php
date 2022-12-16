<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Viewpromo_berlaku;
use PDF;

class promo_berlakuController extends Controller
{
    public function index()
    {
        $promo_berlaku = Viewpromo_berlaku::all();
        return view('admin.promo_berlaku.index', ['title' => 'Promo Berlaku'],compact('promo_berlaku'));
    }

    public function print_pdf()
    {
    	$promo_berlaku = Viewpromo_berlaku::all();

    	$pdf = PDF::loadView('admin.promo_berlaku.print_pdf',compact('promo_berlaku'));
        $pdf->setPaper('A4','potrait');
    	return $pdf->download('promo_berlaku-pdf.pdf');
    }
}

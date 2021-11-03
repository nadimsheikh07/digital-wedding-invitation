<?php

namespace App\Http\Controllers;

use niklasravnsborg\LaravelPdf\Facades\Pdf;

class HomeController extends Controller
{
    public function index()
    {
        // $data = [
        //     'foo' => 'bar'
        // ];

        // $pdf = Pdf::loadView('welcome', $data);
        // $pdf->save('document.pdf');
        // return $pdf->stream('document.pdf');
        // return $pdf->download('document.pdf');
        return view('welcome');
    }
}

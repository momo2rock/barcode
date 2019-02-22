<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barcode;

class TestController extends Controller
{
    //

    public function index()
    {
        $barcodes = Barcode::all();
        return view('test',['barcodes'=>$barcodes]);
    }
}

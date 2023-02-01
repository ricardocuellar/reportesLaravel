<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function export(){
        return view('invoice.export');
    }

    public function import(){
        return view('invoice.import');
    }
}

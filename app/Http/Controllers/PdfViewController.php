<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdfViewController extends Controller
{
    public function show()
    {
        return view('pdf-viewer');
    }
}

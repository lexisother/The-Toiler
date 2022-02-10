<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SourceController extends Controller
{
    public function dump()
    {
        return view('source', ['sourceData' => null]);
    }

    public function aly()
    {
        return view('source', ['sourceData' => null]);
    }
}

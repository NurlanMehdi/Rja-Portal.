<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RjaController extends Controller
{
    public function newRja()
    {
        return view('rja.rja');
    }

    public function listRja()
    {
        return view('rja.submittedRja');
    }
}

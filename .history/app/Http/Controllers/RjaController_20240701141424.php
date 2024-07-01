<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RjaController extends Controller
{
    public function newRja()
    {
        return view('rja.rja');
    }

    public function listRja($key)
    {
        return view('rja.submittedRja',['key'=>$key]);
    }

    public function RjaDetail($id)
    {
        return view('rja.detail-rja',['id'=>$id]);
    }
}

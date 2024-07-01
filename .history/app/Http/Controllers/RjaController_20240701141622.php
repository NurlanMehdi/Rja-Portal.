<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Rja;
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
        $rja = Rja::findOrFail($id);
        return view('rja.detail-rja', compact('rja'));
    }
}

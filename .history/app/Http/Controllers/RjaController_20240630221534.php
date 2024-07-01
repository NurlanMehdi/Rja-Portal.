<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RjaController extends Controller
{
    public function newRja()
    {
        return view('livewire.rja-form');
    }

    public function submittedRja()
    {
        return view('rja.submittedRja');
    }
}

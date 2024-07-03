<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rja;

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
        $rja = Rja::with(['items' => function($query) {
            $query->orderBy('type');
        },'companies'])->findOrFail($id);
        
        return view('rja.detail-rja', compact('rja'));
    }

    public function approve($id)
    {
        $rja = Rja::find($id);
        if ($rja) {
            $rja->status = Rja::STATUS_APPROVED; // Approved
            $rja->save();
            return redirect()->back()->with('message', 'RJA approved successfully.');
        }
        return redirect()->back()->with('error', 'RJA not found.');
    }

    public function reject($id)
    {
        $rja = Rja::find($id);
        if ($rja) {
            $rja->status = Rja::STATUS_REJECTED; // Rejected
            $rja->save();
            return redirect()->back()->with('message', 'RJA rejected successfully.');
        }
        return redirect()->back()->with('error', 'RJA not found.');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rja;
use Illuminate\Support\Facades\Mail;
use App\Mail\RjaMail;

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
        
        $emails = $rja->company->emails ?? $rja->emails;

        return view('rja.detail-rja', compact('rja', 'emails'));
    }

    public function approve($id)
    {
        $rja = Rja::find($id);
        if ($rja && $rja->status == Rja::STATUS_SUBMITTED) {
            $rja->status = Rja::STATUS_APPROVED; // Approved
            $rja->save();
            Rja::sendRjaEmail($id);
            return redirect()->back()->with('message', 'RJA approved successfully.');
        }else{
            $message = 'Action already taken, cannot take another action at this time';
            return view('rja.error', compact('message'));
        }
        return redirect()->back()->with('error', 'RJA not found.');
    }

    public function sendEmail($id)
    {
        Rja::sendRjaEmail($id);
        return redirect()->back()->with('message', 'Email sent successfully.');
    }
    
    public function reject($id)
    {
        $rja = Rja::find($id);
        if ($rja && $rja->status == Rja::STATUS_SUBMITTED) {
            $rja->status = Rja::STATUS_REJECTED; // Rejected
            $rja->save();
            Rja::sendRjaEmail($id);
            return redirect()->back()->with('message', 'RJA rejected successfully.');
        }else{
            $message = 'Action already taken, cannot take another action at this time';
            return view('rja.error', compact('message'));
        }
        
        return redirect()->back()->with('error', 'RJA not found.');
    }

}

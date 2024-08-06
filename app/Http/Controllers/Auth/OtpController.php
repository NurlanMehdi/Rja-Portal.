<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Models\Otp;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Mail\OtpMail;

class OtpController extends Controller
{
    // Method to send OTP
    public function sendOtp(Request $request)
    {
        // Validate the email address
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        // Retrieve the user by email
        $user = User::where('email', $request->email)->first();
        if ($user) {
            // Generate a random OTP
            $otp = random_int(100000, 999999);
            $subject = 'Your OTP Code';

            // Save or update the OTP in the database
            Otp::updateOrCreate(
                ['email' => $request->email],
                ['otp' => bcrypt($otp)]
            );

            // Send the OTP to the user's email
            Mail::to($user->email)->send(new OtpMail($otp, $subject));

            // Store the email in session
            Session::put('otp_email', $request->email);
            Session::flash('success', 'OTP sent to your email');

            return redirect()->route('otp-form');
        }

        // If the user is not found, display an error message
        return redirect()->route('login')->withErrors(['email' => 'This email address is not registered.']);
    }

    public function showOtpForm()
    {
        // If the email is not found in session, display an error message
        if (!Session::has('otp_email')) {
            return redirect()->route('login')->withErrors(['email' => 'Session expired. Please re-enter your email.']);
        }

        return view('otp-form');
    }

    // Method to verify OTP
    public function verifyOtp(Request $request)
    {
        // Validate the OTP
        $request->validate([
            'otp' => 'required|numeric',
        ]);

        // Retrieve the email from session
        $email = Session::get('otp_email');

        // If the email is not found in session, display an error message
        if (!$email) {
            return redirect()->route('login')->withErrors(['email' => 'Session expired. Please re-enter your email.']);
        }

        // Retrieve the OTP record from the database
        $otpRecord = Otp::where('email', $email)->first();

        // Check if the OTP is valid
        if ($otpRecord && Hash::check($request->otp, $otpRecord->otp)) {
            // If OTP is valid, log in the user
            $user = User::where('email', $email)->first();
            Auth::login($user);

            // Delete the OTP record from the database
            $otpRecord->delete();

            return redirect()->route('dashboard');
        } else {
            // If OTP is invalid, display an error message
            return redirect()->back()->withErrors(['otp' => 'Invalid OTP'])->withInput();
        }
    }
}
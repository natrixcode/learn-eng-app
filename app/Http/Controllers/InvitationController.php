<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\InvitationEmail;

class InvitationController extends Controller
{
    public function showForm()
    {
        return view('invite');
    }

    public function sendInvitation(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
        ]);

        $email = $validatedData['email'];

        // Send the invitation email
        Mail::to($email)->send(new InvitationEmail());

        return redirect('/invite')->with('success', 'Invitation sent!');
    }
}

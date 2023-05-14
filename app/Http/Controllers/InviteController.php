<?php

namespace App\Http\Controllers;

use App\Mail\InviteFriendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Invitation;
use App\Models\InvitedEmail;


class InviteController extends Controller
{

    
    /**
     * Display the invite form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showInviteForm()
    {
        return view('invite');
    }

    /**
     * Send an invitation email.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sendInvitation(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'invitation_text' => 'required',
        ]);

        $email = $request->input('email');
        
    
        $invitationText = $request->input('invitation_text');

        // Відправка листа
        Mail::to($email)->send(new InviteFriendMail($invitationText));


        // Invited friends list

        $email = $request->input('email');

        // Retrieve the existing email array from the session or initialize an empty array
        $emails = $request->session()->get('emails', []);
    
        // Add the new email to the array
        $emails[] = $email;
    
        // Store the updated email array in the session
        $request->session()->put('emails', $emails);

        return redirect()->back()->with('success', 'Invitation sent successfully.');
    }
}

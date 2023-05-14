<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InviteFriendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $invitationText;

    /**
     * Create a new message instance.
     *
     * @param  string  $invitationText
     * @return void
     */
    public function __construct($invitationText)
    {
        $this->invitationText = $invitationText;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $invitationText = $_POST['invitation_text'];
        
        return $this->view('invite')
                    ->subject($invitationText);
    }
}

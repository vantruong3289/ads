<?php

namespace App\Mail;

use App\Models\Invite;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\URL;

class ConsumerEmailInvite extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $invite;
    public $url;

    public function __construct(Invite $invite)
    {
        $this->invite = $invite;
        $this->url = URL::temporarySignedRoute('consumer.sign-up', now()->addMinutes(30), ['id' => $invite->id]);
    }

    public function envelope()
    {
        return new Envelope(
            subject:'Consumer Email Invite',
        );
    }

    public function content()
    {
        return new Content(
            view:'consumers.mails.invite',
        );
    }

    public function attachments()
    {
        return [];
    }
}

<?php

namespace App\Mail;

use App\Models\Advertiser;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\URL;

class AdvertiserEmailResetPassword extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public Advertiser $advertiser;
    public $url;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Advertiser $advertiser)
    {
        $this->advertiser = $advertiser;
        $this->url = URL::temporarySignedRoute('advertiser.password.reset', now()->addMinutes(30), ['id' => $advertiser->id]);
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject:'Email Reset Password',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view:'advertisers.mails.reset-password',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}

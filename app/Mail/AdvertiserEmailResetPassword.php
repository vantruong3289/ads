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
    
    public function __construct(Advertiser $advertiser)
    {
        $this->advertiser = $advertiser;
        $this->url = URL::temporarySignedRoute('advertiser.password.reset', now()->addMinutes(30), ['id' => $advertiser->id]);
    }

    
    public function envelope()
    {
        return new Envelope(
            subject:'Email Reset Password',
        );
    }

    
    public function content()
    {
        return new Content(
            view:'advertisers.mails.reset-password',
        );
    }

    
    public function attachments()
    {
        return [];
    }
}

<?php

namespace App\Mail;

use App\Models\Consumer;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\URL;

class ConsumerEmailResetPassword extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public Consumer $consumer;
    public $url;
    
    public function __construct(Consumer $consumer)
    {
        $this->consumer = $consumer;
        $this->url = URL::temporarySignedRoute('consumer.password.reset', now()->addMinutes(30), ['id' => $consumer->id]);
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
            view:'consumers.mails.reset-password',
        );
    }

    
    public function attachments()
    {
        return [];
    }
}

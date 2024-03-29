<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Subscribe extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $message ;
    
    public function __construct($message)
    {
        $this->message=$message;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\
     */
    // public function envelope()
    // {
    //     return new Envelope(
    //         subject: 'Subscribe',
    //     );
    // }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\
     */
    // public function content()
    // {
    //     return new Content(
    //         markdown: 'emails.subscribers',
    //     );
    // }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    // public function attachments()
    // {
    //     return [];
    // }
    public function build()
{
    return $this
        ->subject('Thank you for signing in Nuqeiti Training Platform')
        ->markdown('emails.subscribers',[$this->message]);

}

}

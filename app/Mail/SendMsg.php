<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class SendMsg extends Mailable
{
    use Queueable, SerializesModels;

    protected $name_;
    protected $email_;
    public $msg_;

    /**
     * Create a new message instance.
     */
    public function __construct($name, $email, $msg)
    {
    
        $this->name_ = $name;
        $this->email_ = $email;
        $this->msg_ = $msg;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Send Msg',
            from: new Address($this->email_, $this->name_),
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(

            view: 'mail',
            
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}

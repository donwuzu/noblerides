<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class BookingConfirmation extends Mailable
{
    use Queueable, SerializesModels;

     public $data;
    /**
     * Create a new message instance.
     */
    public function __construct(array $data)
    {
         $this->data = $data;
    }


      public function build()
    {
        return $this->subject('New Booking Request')
                    ->view('emails.booking_confirmation');
    }
    /**
     * Get the message envelope.
     */
   

    /**
     * Get the message content definition.
     */
   

  
}

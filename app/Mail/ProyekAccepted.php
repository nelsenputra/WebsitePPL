<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ProyekAccepted extends Mailable
{
    use Queueable, SerializesModels;

    public $proyek;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($proyek)
    {
        $this->proyek = $proyek;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Proyek Diterima',
        );
    }

    public function build()
    {
        return $this->subject('Proyek Diterima')
                    ->view('proyek-accepted');
    }
}

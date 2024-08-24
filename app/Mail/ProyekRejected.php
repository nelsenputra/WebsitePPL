<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ProyekRejected extends Mailable
{
    use Queueable, SerializesModels;

    public $proyek;

    public function __construct($proyek)
    {
        $this->proyek = $proyek;
    }

    public function build()
    {
        return $this->subject('Proyek Ditolak')
                    ->view('proyek-rejected');
    }
}

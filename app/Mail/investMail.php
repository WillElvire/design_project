<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class investMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

     protected $pack;
     protected $montant;
     protected $duree;
    public function __construct($pack,$montant,$duree)
    {
        
        $this->pack=$pack;
        $this->montant=$montant;
        $this->duree=$duree;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.welcome-investment')->withPack($this->pack)->withMontant($this->montant)->withDuree($this->duree);
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class welcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $mdp;
    protected $nom;
    protected $prenom;
    public function __construct($mdp,$nom,$prenom)
    {
        //
        $this->mdp=$mdp;
        $this->nom=$nom;
        $this->prenom=$prenom;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.welcome-user')->withPassword($this->mdp)->withName($this->nom)->withPrenom($this->prenom);
    }
}

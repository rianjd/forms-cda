<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class newChamados extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this
            ->from ( config('mail.from.address'))
            ->subject("Filial ".$this->data['filial']." - ".$this->data['tipo']. "/".$this->data['categoria'])
            ->view('sender.mailChamado')
            ->with('data',$this->data);
    }
}

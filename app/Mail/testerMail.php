<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class testerMail extends Mailable
{
    use Queueable, SerializesModels;

    private $name;
    private $sex;
    private $age;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $sex, $age)
    {
        $this-> name = $name;
        $this-> sex = $sex;
        $this-> age = $age;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {   $name = $this -> name;
        $sex = $this -> sex;
        $age = $this -> age;
        return $this->view('mails.testerMail', compact('name','sex','age'));
    }
}

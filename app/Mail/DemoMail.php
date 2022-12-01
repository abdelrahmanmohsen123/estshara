<?php
  
namespace App\Mail;
  
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
  
class DemoMail extends Mailable
{
    use Queueable, SerializesModels;
  
    public $mailData;
    public $name;
  
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailData,$name)
    {
        $this->mailData = $mailData;
        $this->name = $name;
    }
  
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Mail from '. $this->name)
                    ->view('contact_email');
    }
}
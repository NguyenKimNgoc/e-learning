<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 30-May-19
 * Time: 11:15 AM
 */

namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailable;

class sendMailReplyContacts extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $contacts;
    public $reContacts;
    public $full_name;
    public function __construct($contacts,$reContacts,$full_name)
    {
        $this->contacts = $contacts;
        $this->reContacts = $reContacts;
        $this->full_name = $full_name;
    }

    public function build()
    {
        return $this->subject('[E-LEARNING RELY-CONTACTS] ')
            ->view('Backend.Email.sendMailRelyContacts');
    }
}

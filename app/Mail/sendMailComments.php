<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 19-May-19
 * Time: 12:42 AM
 */

namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
class sendMailComments extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $c_title;
    public $comment;
    public $full_name;
    public function __construct($c_title,$comment,$full_name)
    {
        $this->comment = $comment;
        $this->c_title =$c_title;
        $this->full_name = $full_name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('[E-LEARNING NOTIFICATION] ')
            ->view('Frontend.Email.sendMailComments');
    }
}
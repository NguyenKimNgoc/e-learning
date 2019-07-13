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
class MailChangeStatus extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $c_title;
    public $route;
    public $full_name;
    public function __construct($c_title,$route,$full_name)
    {
        $this->c_title = $c_title;
        $this->route = $route;
        $this->full_name = $full_name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('[E-LEARNING STATUS] ')
            ->view('Backend.Email.sendMailStatusCourse');
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 19-May-19
 * Time: 10:57 AM
 */

namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailChangeStatusNews extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $news_name;
    public $c_title;
    public $route;
    public $user_name;
    public function __construct($news_name,$c_title,$route,$user_name)
    {
        $this->news_name = $news_name;
        $this->c_title = $c_title;
        $this->route = $route;
        $this->user_name = $user_name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('[E-LEARNING STATUS-NEWS-IN-COURSE] ')
            ->view('Backend.Email.sendMailStatusNews');
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 01-Jun-19
 * Time: 3:57 PM
 */

namespace App\Mail;


use Illuminate\Mail\Mailable;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;

class sendMailToCustomers extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $course;
    public $urlCourse;
    public $username;
    public $cate_group;
    public function __construct($course,$urlCourse,$username,$cate_group)
    {
        $this->course = $course;
        $this->urlCourse = $urlCourse;
        $this->username = $username;
        $this->cate_group = $cate_group;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('[E-LEARNING NO-REPLY] ')
            ->view('Backend.Email.sendMailToCustomers');
    }
}
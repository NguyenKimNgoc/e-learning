<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 18-Jun-19
 * Time: 2:38 PM
 */

namespace App\Mail;


use Illuminate\Mail\Mailable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Carbon\Carbon;
class sendMailAutoOrdersMonthly extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;
    /**
     * Create a new message instance.
     *
     * @return void
     */



    public function __construct()
    {


    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('[E-Learning] Monthly Report '.Carbon::now()->startOfMonth()->format('d-m-Y'). ' đến '.' '.Carbon::now()->endOfMonth()->format('d-m-Y').'')
            ->view('Backend.Email.sendMailAutoOrderMonthly');
    }
}
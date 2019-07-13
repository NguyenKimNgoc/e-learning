<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 18-Jun-19
 * Time: 8:58 PM
 */

namespace App\Mail;


use Illuminate\Mail\Mailable;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
class sendMailPaymentSuccess extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $dataCustomer;
    public $dataSendMail;
    public $id;
    public $total_number;
    public $created_at;

    public function __construct($dataCustomer,$dataSendMail,$id,$total_number,$created_at)
    {
        $this->dataCustomer = $dataCustomer;
        $this->dataSendMail = $dataSendMail;
        $this->id = $id;
        $this->total_number = $total_number;
        $this->created_at = $created_at;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('[ E-LEARNING PAYMENT SUCCESS ]')
            ->view('Frontend.Email.sendMailPaymentSuccess');
    }
}
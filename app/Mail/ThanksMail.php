<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
//use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ThanksMail extends Mailable
{
    //use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    use Queueable, SerializesModels;

    public $products;
    public $user;

    public function __construct($products,$user)
    {
        $this->products = $products;
        $this->user = $user;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function build()
    {
        return $this->view('emails.thanks')
        ->subject('ご購入ありがとうございます。');

    }
}

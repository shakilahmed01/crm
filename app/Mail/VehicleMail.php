<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VehicleMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
public  $product_name="";
public  $price="";
public  $from="";
public  $product_description="";

    public function __construct($product_name,$price,$from,$product_description)
    {
        $this-> product_name = $product_name;
        $this-> product_name = $price;
        $this-> product_name = $from;
        $this-> product_name = $product_description;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $product_name=" ";
        $price="";
        $from="";
        $product_description="";
        return $this->view('email.vehicle_mail',compact('product_name','price','from','product_description'));
    }
}

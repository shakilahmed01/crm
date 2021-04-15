<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe;
use Session;
class StripePaymentController extends Controller
{
  /**
* success response method.
*
* @return \Illuminate\Http\Response
*/
public function stripe()
{
  return view('stripe');
}

function stripepayment(Request $request)
{
  $product_name = $request->product_name;
  $usernumber = $request->usernumber;
  $quantity = $request->quantity;
  $from = $request->from;
  $to = $request->to;
  $booked_price = $request->booked_price;


return view('stripe',compact('product_name','usernumber','quantity','from','to','booked_price'));
}

/**
* success response method.
*
* @return \Illuminate\Http\Response
*/
public function stripePost(Request $request)
{
  $product_name = $request->product_name;
  $usernumber = $request->usernumber;
  $quantity = $request->quantity;
  $from = $request->from;
  $to = $request->to;
  $booked_price = $request->booked_price;

  Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
  Stripe\Charge::create ([
          "amount" =>100 * $booked_price ,
          "currency" => "bdt",
          "source" => $request->stripeToken,
          "description" => "Payment by ".$usernumber,
  ]);

  Session::flash('success', 'Payment successful!');

   return redirect('/');
}
}

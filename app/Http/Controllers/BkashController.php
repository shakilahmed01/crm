<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BkashController extends Controller
{
  public function bkash()
  {

      // Merchant Info

      $msisdn = "01200000000"; // bKash Merchant Number.

      $user = "Xyz"; // bKash Merchant Username.

      $pass = "123"; // bKash Merchant Password.

      $url = "https://www.bkashcluster.com:9081"; // bKash API URL with Port Number.

      $trxid = "66666AAAAA"; // bKash Transaction ID : TrxID.


// Final URL for getting response from bKash.

      $bkash_url = $url.'/dreamwave/merchant/trxcheck/sendmsg?user='.$user.'&pass='.$pass.'&msisdn='.$msisdn.'&trxid='.$trxid;


      $curl = curl_init();

      curl_setopt_array($curl, array(

          CURLOPT_PORT => 9081,

          CURLOPT_URL => $bkash_url,

          CURLOPT_RETURNTRANSFER => true,

          CURLOPT_ENCODING => "",

          CURLOPT_MAXREDIRS => 10,

          CURLOPT_TIMEOUT => 30,

          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,

          CURLOPT_CUSTOMREQUEST => "GET",

          CURLOPT_HTTPHEADER => array(

              "cache-control: no-cache",

              "content-type: application/json"

          ),

      ));


      $response = curl_exec($curl);

      $err = curl_error($curl);

      $http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);

      curl_close($curl);

          //print_r($response); // For Getting all Response Data.

          $api_response = json_decode ($response, true);  // Getting Response from bKash API.

          $transaction_status = $api_response['transaction']['trxStatus']; // Transaction Status Codes


      if ($err || $transaction_status == "4001") {
              echo 'Problem for Sending Response to bKash API ! Try Again after fews minutes.';
          }
      else
      {
// Assign Transaction Information

          $transaction_amount = $api_response['transaction']['amount']; // bKash Payment Amount.

          $transaction_reference = $api_response['transaction']['reference']; // bKash Reference for Invoice ID.

          $transaction_time = $api_response['transaction']['trxTimestamp']; // bKash Transaction Time & Date.


// Return Transaction Information into Your Blade Template.

          return view('transaction.bkash', compact('transaction_status', 'transaction_amount', 'transaction_reference', 'transaction_time'));

      }
  }

}

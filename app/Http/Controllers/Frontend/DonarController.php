<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Library\SslCommerz\SslCommerzNotification;
use App\Models\Donar;
use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DonarController extends Controller
{
   public function create($crisis_id){

    return view('frontend.pages.donar',compact('crisis_id'));
   }
  
   public function store(Request $request)
   {
      //  dd($request->all());
      $validation=Validator::make($request->all(),[
         'name' =>'required|string|max:255',
         'email' =>'required|email|max:255',
         'mobile' =>'required|string|max:20',
         'address' =>'required|string|max:500',
         'amount' =>'required|numeric|min:1|max:10000000',
         'crisis_id'=>'required|exists:crises,id',
      ]);
      if($validation->fails())
      {
         // dd($validation->getMessageBag());
         notify()->error('input field is empty');
         return redirect()->back();
       }

      // session()->put('donar_data', $request->all());

      $donar=Donar::create([
    'name' => $request->name,
    'email' => $request->email,
    'mobile'=> $request->mobile,
    'amount' => $request->amount,
    'address' => $request->address,
    'crisis_id'=>$request->crisis_id
]);

// Create Donation
$donation = Donation::create([  
   'donar_id' => $donar->id,
   'crisis_id' => $donar->crisis_id,
   'amount' => $donar->amount,
   'payment_method' => 'SSLCommerz',
]);

// Initiate Payment
$this->initiatePayment($donar);

notify()->success('added successfully');
   

   // return redirect()->route('frontend.home');
       
   }
   public function initiatePayment($donar)
   { # Here you have to receive all the order data to initate the payment.
      # Let's say, your oder transaction informations are saving in a table called "orders"
      # In "orders" table, order unique identity is "transaction_id". "status" field contain status of the transaction, "amount" is the order amount to be paid and "currency" is for storing Site Currency which will be checked with paid currency.

      $post_data = array();
      $post_data['total_amount'] = $donar->amount; # You cant not pay less than 10
      $post_data['currency'] = "BDT";
      $post_data['tran_id'] = $donar->id; // tran_id must be unique

     

      # CUSTOMER INFORMATION
      $post_data['cus_name'] = $donar->name;
      $post_data['cus_email'] =  $donar->email;
      $post_data['cus_add1'] =  $donar->address;
      $post_data['cus_add2'] = "";
      $post_data['cus_city'] = "";
      $post_data['cus_state'] = "";
      $post_data['cus_postcode'] = "";
      $post_data['cus_country'] = "Bangladesh";
      $post_data['cus_phone'] =  $donar->mobile;
      $post_data['cus_fax'] = "";

      # SHIPMENT INFORMATION
      $post_data['ship_name'] = "Store Test";
      $post_data['ship_add1'] = "Dhaka";
      $post_data['ship_add2'] = "Dhaka";
      $post_data['ship_city'] = "Dhaka";
      $post_data['ship_state'] = "Dhaka";
      $post_data['ship_postcode'] = "1000";
      $post_data['ship_phone'] = "";
      $post_data['ship_country'] = "Bangladesh";

      $post_data['shipping_method'] = "NO";
      $post_data['product_name'] = "Computer";
      $post_data['product_category'] = "Goods";
      $post_data['product_profile'] = "physical-goods";

      # OPTIONAL PARAMETERS
      $post_data['value_a'] = "ref001";
      $post_data['value_b'] = "ref002";
      $post_data['value_c'] = "ref003";
      $post_data['value_d'] = "ref004";


      $sslc = new SslCommerzNotification();
      # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
      $payment_options = $sslc->makePayment($post_data, 'hosted');

      if (!is_array($payment_options)) {
          print_r($payment_options);
          $payment_options = array();
      }
   }
   
}
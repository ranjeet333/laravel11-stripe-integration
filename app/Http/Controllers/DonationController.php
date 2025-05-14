<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe;
use Illuminate\View\View;

class DonationController extends Controller
{
	public function donation_checkout(Request $request)
	{
		//validate here request paramater

		$stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
		$redirectUrl = route('checkout.success').'?session_id={CHECKOUT_SESSION_ID}';

		$response =  $stripe->checkout->sessions->create([
                'success_url' => $redirectUrl,
                'customer_email' => $request->donation_email,
                'payment_method_types' => ['card'],
                'billing_address_collection'=> 'auto',
                'line_items' => [
                    [
                        'price_data'  => [
                            'product_data' => [
                                'name' => 'Donation',
                            ],
                            'unit_amount'  => 100 * $request->donation_amount,
                            'currency'     => 'USD',
                        ],
                        'quantity' => 1
                    ],
                    [
                        'price_data'  => [
                            'product_data' => [
                                'name' => 'Processing fee',
                            ],
                            'unit_amount'  => 100 * $request->proccess_amount,
                            'currency'     => 'USD',
                        ],
                        'quantity' => 1
                    ],
                    [
                        'price_data'  => [
                            'product_data' => [
                                'name' => 'Tip',
                            ],
                            'unit_amount'  => 100 * $request->tip_amount,
                            'currency'     => 'USD',
                        ],
                        'quantity' => 1
                    ],
                ],
                'mode' => 'payment',
                'allow_promotion_codes' => true
            ]);
		// here save record in db

        return redirect($response['url']);
	}

	public function donation_checkout_success(Request $request)
	{
		$stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));

        $session = $stripe->checkout->sessions->retrieve($request->session_id);

        if($session['payment_status'] == 'paid')
        {
        	$message = 'Thank you! Your Donation has been received successfully.';
        }
        else
        {
        	$message = 'Something problem, Please retry';
        }

		return view('donation_done')->with('message',$message);
	}
}

?>
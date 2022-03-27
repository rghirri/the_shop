<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Mail;
use Cart;
use Stripe\Charge;
use Stripe\Stripe;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('front.products.checkout');

    }

    public function pay()
    {

         Stripe::setApiKey("sk_test_51Hfob3BhIJ1kVATVzouYZFsDMQHGBqaInA5D7OACQ42r0CTCsHKVnYz1cokr1r1mtOqqDlHzKDT2qi6x9mBJ60Ak00xa6UzUKu");

        $charge = Charge::create([
            'amount' => \Cart::getSubTotal() * 100,
            'currency' => 'usd',
            'description' => 'udemy course practice selling books',
            'source' => request()->stripeToken
        ]);

        //dd('Purchase successfull. wait for our email.');


        Session::flash('success', 'Purchase successfull. wait for our email.');

        Cart::destroy();

        Mail::to(request()->stripeEmail)->send(new \App\Mail\PurchaseSuccessful);

       return redirect('/');

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
<?php

namespace App\Http\Controllers;

use App\Bid;
use App\Notifications\BidAccept;
use App\Notifications\BidOn;
use App\Notifications\BidNotification;
use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Notification;

class BidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Product $product, Request $request)
    {

        $bidding = auth()->user()->bids->where('product_id', $product->id);
        if (auth()->user()->role == 1) {

            toastr()->warning('Attempt to bid as a seller, Please use a Buyer Account');
            return  redirect('/singleitem/' . $product->id);
        } else if ($product->user_id == auth()->user()->id) {
            return "Attempt to bid on your product Exception, Please use a Buyer Account";
        } else if (count($bidding) != 0) {

            toastr()->warning('you already have a bid on this product');
            return  redirect('/singleitem/' . $product->id);
        } else {
            $pbids = $product->bids;
            $bid = new Bid();
            $bid->product_id = $product->id;
            $bid->user_id = auth()->user()->id;
            $bid->bid_amount = $request->input('quantity');
            $bid->status = 0;
            $bid->save();


            // Create product user notification

            Notification::send($bid->product->user, new BidNotification($bid));


            // $product->user->notify(new BidOn($bid));



            foreach ($pbids as $pbid) {

                Notification::send($pbid->user, new BidOn($bid));
            }


            toastr()->success("bid palced successfully");

            return redirect('/singleitem/' . $product->id);
        }

        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function show(Bid $bid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function edit(Bid $bid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bid $bid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bid $bid)
    {
        //
    }

    public function accept(Bid $bid)
    {


        $product = Product::find($bid->product_id);
        $product->status = 0;
        $product->save();

        $bid->status = 1;
        $bid->save();

        Notification::send($bid->user, new BidAccept($bid));



        $products = Product::orderBy('id', 'desc')->get();
        $bids = auth()->user()->products->where("status", 1);

        toastr()->success("Bid Accepted Successfully");
        return view('backend.sellerbids')->with('bids', $bids)->with('products', $products);
    }
}

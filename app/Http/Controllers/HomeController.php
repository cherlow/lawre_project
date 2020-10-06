<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\Category;
use App\Product;
use App\Bid;
use App\User;
use App\Image;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (auth()->user()->role == 1) {
            // return auth()->user()->unreadNotifications;
            return view('backend.sellers');
        } else if (auth()->user()->role == 2) {



            return view('backend.buyers');
        }

        $sellers=User::where('role',1)->get();
        $buyers=User::where('role',2)->get();
        $products=Product::all();
        $bids=Bid::all();
        return view('home')->with('sellers',$sellers)->with('buyers',$buyers)->with('products',$products)->with('bids',$bids);
    }
    public function roles()
    {
        return auth()->user()->role()->get();
        $roles = Role::all();
        return view('backend.roles')->with('roles', $roles);
    }

    public function sellerproducts()
    {
        $products = auth()->user()->products;
        return view('backend.sellerproducts')->with('products', $products);
    }

    public function selleraddproducts()
    {
        $categories = Category::all();

        return view('backend.selleraddproduct')->with('categories', $categories);
    }

    public function sellereditproducts(Product $product)
    {

        $categories = Category::all();


        return view('backend.sellereditproduct')->with('product', $product)->with('categories', $categories);
    }

    public function bids()
    {
        $products = Product::all();

        if (auth()->user()->role == 2) {
            $bids = auth()->user()->bids;
            return view('backend.buyerbids')->with('bids', $bids)->with('products', $products);
        } else  if (auth()->user()->role == 1) {

            $bids = auth()->user()->products;
            return view('backend.sellerbids')->with('bids', $bids)->with('products', $products);
        }
        else{
           return redirect("/home");
        }
    }
    public function reviews()
    {

        $products = Product::all();

        if (auth()->user()->role == 2) {
            $users = User::all();
            $reviews = DB::table('reviews')->where('author_id', auth()->user()->id)->get();
            $bids = auth()->user()->bids->where('status', 1)->where('reviewed', 0);
            return view('backend.buyerreviews')->with('bids', $bids)->with('products', $products)->with('reviews', $reviews)->with('users', $users);
        } else if (auth()->user()->role == 1) {
            $users = User::all();
            $reviews = auth()->user()->getAllRatings(auth()->user()->id, 'desc');
            $bids = auth()->user()->bids->where('status', 1)->where('reviewed', 0);
            return view('backend.sellerreviews')->with('bids', $bids)->with('products', $products)->with('reviews', $reviews)->with('users', $users);
        }
    }

    public function leavereview(Bid $bid)
    {

        return view('backend.createreview')->with('bid', $bid);
    }

    public function reviewsave(Request $request, Bid $bid)
    {

        $product = Product::find($bid->product_id);
        $user = $product->user;



        $rating = $user->rating([
            'title' => $request->input('title'),
            'body' => $request->input('review'),
            'customer_service_rating' => $request->input('service'),
            'quality_rating' => $request->input('quality'),
            'friendly_rating' => $request->input('friendly'),
            'pricing_rating' => $request->input('pricing'),
            'rating' => $request->input('Seller'),
            'recommend' => 'Yes',
            'approved' => true, // This is optional and defaults to false
        ], auth()->user());

        $rating->save();

        $bid->reviewed = 1;
        $bid->save();
        return redirect('/reviews');
    }

    public function imagedelete(Image $image){
        $product=$image->product_id;

        $image->delete();

        toastr()->success("Image Deleted Successfully");

        return redirect("/sellereditproducts/".$product);
        return $image;
    }

    public function productupdate(Request $request, Product $product){



        $product->name = $request->input('name');
        $product->category_id = $request->input('category');
        $product->price = $request->input('price');
        $product->desc = $request->input('editor1');
        $product->user_id = auth()->user()->id;
        $product->status = 1;
        $product->save();

        if ($request->hasFile('images')) {


            $file = $request->file('images');

            foreach ($file as $item) {
                $extension = $item->getClientOriginalExtension(); // getting image extension

                $filename = time() . '.' . $extension;
                $item->move('uploads/', $filename);

                $image = new Image();
                $image->image_name = $filename;
                $image->product_id = $product->id;
                $image->save();
            }
        }



        $products = auth()->user()->products;

        toastr()->success("Product Updated Successfully");
        return redirect('/sellerproducts')->with('products', $products);
    }
}

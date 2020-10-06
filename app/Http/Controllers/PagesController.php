<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $categories = Category::take(4)->get();

        $products = Product::where('status', 1)->orderBy('id', 'desc')->take(20)->get();
        // $populars=Product::where('status',1);

        return view('pages.index')->with('products', $products)->with('categories', $categories);
    }
    public function singleitem(Product $product)
    {
        // return $product->user->ratings;
        $users = User::all();

        $categories = Category::take(4)->get();


        return view('pages.singleitem')->with('product', $product)->with('categories', $categories)->with('users', $users);
    }
    public function allitems()
    {

        $products = Product::where("status",1)->paginate(24);
        $categories = Category::take(4)->get();
        return view('pages.allitems')->with('categories', $categories)->with('products', $products);
    }


    public function categoryproducts(Category $category)
    {
        $products = Product::where("category_id", $category->id)->where("status",1)->paginate(24);
        $categories = Category::take(4)->get();
        return view('pages.allitems')->with('categories', $categories)->with('products', $products);
    }
}

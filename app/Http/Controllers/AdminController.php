<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    //


    public function __construct()
    {
        $this->middleware('auth');
    }




    public function getbuyers()
    {
        $buyers = User::where('role', 2)->get();

        return view('backend.adminbuyer')->with('buyers', $buyers);
    }
    public function getsellers()
    {
        $sellers = User::where('role', 1)->get();
        return view('backend.adminseller')->with('sellers', $sellers);
    }
    public function getproducts()
    {
        $products = Product::all();
        return view('backend.adminproducts')->with('products', $products);
    }

    public function getcategories()
    {
        $categories = Category::all();
        return view('backend.admincategories')->with('categories', $categories);
    }

    public function addcategories(Request $request)
    {



        $category = new Category();
        $category->name = $request->name;

        $category->save();
        return redirect("/admincategories");
    }

    public function deletecategories(Category $category)
    {



        $category->delete();

        return redirect("/admincategories");
    }
}

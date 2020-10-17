<?php

namespace App\Http\Controllers;

use App\User;
use datatables;
use App\Product;
use Illuminate\Http\Request;

class DataTablesController extends Controller
{

    public function index()
    {

        return datatables()->collection(Product::all())->toJson();
    }
}

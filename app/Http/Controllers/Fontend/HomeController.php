<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use App\Models\Desktop;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Get All Home Page Product
        $featured = Desktop::query()->latest()->limit(5)->get();
        $latest =   Desktop::query()->skip(5)->limit(5)->get();
        $most_sales = Desktop::orderBy('id','desc')->limit(5)->get();


        return view('welcome', [
            'featured' => $featured,
            'latest' => $latest,
            'most_sales' => $most_sales
        ]);
    }

    public function search(Request $request)
    {
        if ($request->search){
            $products = Product::where("name", 'like', '%'. $request->search .'%')->take(5)->get();
        }
        return $products;
    }

}

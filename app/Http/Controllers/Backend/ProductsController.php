<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Desktop;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductsController extends Controller
{
    public function index ()
    {
        $products = Product::all();
        return view('admin.products.index', [
            'products' => $products
        ]);
    }


    public function add()
    {
        $categories = Category::tree()->get()->toTree();
        $brands = Brand::all();
        return view('admin.products.add', [
            'categories' => $categories,
            'brands' => $brands
        ]);
    }
    public function store(Request $request)
    {
        //Validate Request Data
        $path = "String";
        if($request->has('imgage_i')){
            $path = $request->file('image_1')->store('/image/new');
        }
        $product = Product::create([
            "category_id" => $request->category_id,
            "brand_id" => $request->brand_id,
            "name" => $request->title,
            "slug" =>  Str::slug($request->title),
            "type" => "Desktop",
            "in_stock" => 1,
            "views" => 0,
            "sales" => 0,
            "image" => $path,
        ]);

        $desktop =  Desktop::create([
            "product_id" => $product->id,
            "category_id" => $request->category_id,
            "brand_id" => $request->brand_id,
            "title" => $request->title,
            "slug" => Str::slug($request->title),
            "model" => $request->model,
            "processor" => $request->processor,
            "motherboard" => $request->motherboard,
            "ram" => "DDR4 8GB",
            "storage" => "Storage",
        ]);

        return redirect('/admin/products');

    }
}

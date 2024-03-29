<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Desktop;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\View;

class ProductsController extends Controller
{
    public function index(Product $product)
    {
        $model = "App\Models\\". $product->type;
        $product_desc = $model::where('product_id', $product->id )->first();

        return view("products.product", [
            'product' => $product,
            'description' => $product_desc
        ]);
    }

    public function allProducts() {
        $products = Product::orderBy("id", "desc")->take(12)->get();
        return view('products.products',[
            'products' => $products
        ]);
    }
    
    public function filter(Request $request)  {
        $output = "";
        if (in_array( "in_stock", $request->data)) {
            $products = Product::where('in_stock', 1)->take(12)->get();
            foreach ($products as $product) {
                $output .= View::make("components.products.shop-product-item")
                ->with("product", $product)
                ->render();
            }
           
        }else{
            $products = Null;
        }
        return $output;
    }
}

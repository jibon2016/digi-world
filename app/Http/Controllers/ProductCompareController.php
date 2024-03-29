<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Validation\Rules\Can;

class ProductCompareController extends Controller
{
    public function index ()
    {
        $products = Cache::get('cmpr-prod');

        // dd($products);
        if (Cache::has('cmpr-prod')) {
            return redirect('/');
        }
        return view('product-compare', [
            'products' => $products
        ]);
    }


    public function searchCompareProduct(Request $request)
    {
        if ($request->keyword){
            $products = Product::select('products.name as label', 'products.item_code as value')->where("name", 'like', '%'. $request->keyword .'%')->take(5)->get();
        }else{
            return json_decode( 'Not Found', true);
        }
        return json_decode($products, true);
    }

    public function add(Request $request)
    {
        $products = Product::whereIn('item_code', explode(',', $request->product_id))->get();

        if (Cache::has('cmpr-prod')) {
            $cacheProducts = Cache::get('cmpr-prod');
            $item_codes = array_merge($cacheProducts->pluck('item_code')->all(), explode(',', $request->product_id));
            $products = Product::whereIn('item_code', $item_codes)->get();
        }
        Cache::add('cmpr-prod', $products, now()->addMinutes(15));

        return view('product-compare', [
            'products' => $products
        ]);
    }

    public function remove($itemCode){
        // dd(Cache::get('cmpr-prod'));
        if (Cache::has('cmpr-prod')) {
            $cacheProducts = Cache::get('cmpr-prod');
//            if($cacheProducts->count() < 2){
//                return redirect('/');
//            }
            $allItemCode = $cacheProducts->pluck('item_code')->all();
            if (($key = array_search($itemCode, $allItemCode )) !== false) {
                unset($allItemCode[$key]);
            }
            // dd($allItemCode);
            $products = Product::whereIn('item_code', $allItemCode)->get();
//             dd($products);
            Cache::put('cmpr-prod', $products, now()->addMinutes(15));
//            dd(Cache::get('cmpr-prod'));
            return view('product-compare', [
                'products' => $products
            ]);
        } else {
            return redirect('/');
        }
    }
}

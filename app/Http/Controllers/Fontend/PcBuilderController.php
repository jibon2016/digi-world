<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Cache;
use function PHPUnit\Framework\isEmpty;

class PcBuilderController extends Controller
{
    public function pcBuilder()
    {
        if (!Cache::has('builder-prod')){
            return redirect('/pc-build-product');
        }
        return view('pc-build');
    }
     public function pcBuilderWithProduct()
    {
        return view('pc-build-product');
    }

    public  function builderProductSearch($key)
    {
        $products =  Product::where('name', 'like', '%'. $key . '%')->latest()->get();

        return view('products.builder-products',[
            'products' => $products,
            'key' => $key
        ]);
    }

    public function builderProductAdd( $key, Product $product)
    {
        if (Cache::has('builder-prod')){
            //check the Key Contains in Collection
            $builderProduct = Cache::get('builder-prod');
            if ($builderProduct->has($key)){
                //Check the Key Value null in Collection
                if (is_null($builderProduct[$key])){
                    $builderProduct[$key] = $product;
                    Cache::put('builder-prod', $builderProduct, now()->addHour(1));
                    return redirect('/pc-builder');
                } else {
                    //This key All ready has a Value
                    return redirect('/pc-builder');
                }
            } else {
                //if Key Not found
                return redirect()->back();
            }
        }
        $builderProduct = collect([
            'processor' => null,
            'cpu_cooler' => null,
            'motherboard' => null,
            'ram' => null,
            'storage' => null,
            'graphics_card' => null,
            'power_supply' => null,
            'casing' => null,
            'monitor' => null,
            'casing_cooler' => null,
            'keyboard' => null,
            'mouse' => null,
            'anti_virus' => null,
            'headphone' => null,
            'ups' => null,
        ]);
        //check the Key Contains in Collection
        if ($builderProduct->has($key)){
            //Check the Key Value null in Collection
            if (is_null($builderProduct[$key])){
                $builderProduct[$key] = $product;
                Cache::put('builder-prod', $builderProduct, now()->addHour(1));
                return redirect('/pc-builder');
            } else {
                //This key All ready has a Value
                return redirect('/pc-builder');
            }
        } else {
            //if Key Not found
            return redirect()->back();
        }
    }

    public function builderProductRemove($key)
    {
        $builderProduct = Cache::get('builder-prod');
        $builderProduct[$key] = null;
        Cache::put('builder-prod',$builderProduct, now()->addHour(1));
        return redirect()->back();
    }

    public function pcBuilderPdf()
    {
//        $pdf = Pdf::loadView('pdf.pc-builder');
//        return $pdf->stream();
        return view('pdf.pc-builder');
    }
}

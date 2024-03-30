<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\ProductsController as BackendProductsController;
use App\Http\Controllers\Fontend\HomeController;
use App\Http\Controllers\Fontend\PcBuilderController;
use App\Http\Controllers\Fontend\ProductsController;
use App\Http\Controllers\ProductCompareController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);
Route::get('/search/{search}', [HomeController::class, 'search']);



/*------------------------------------------------------- General Pages Routes -------------------------------------------------*/
Route::view('/about', 'about');
Route::view('/contact-us', 'contact-us');
Route::view('/checkout', 'checkout');
Route::view('/checkout/cart', 'shopping-cart');


Route::get('/pc-builder', [PcBuilderController::class,'pcBuilder']);
Route::get('/products/{key}', [PcBuilderController::class,'builderProductSearch']);
Route::get('/products/{key}', [PcBuilderController::class,'builderProductSearch']);
Route::get('/builder-products/add/{key}/{product:slug}', [PcBuilderController::class,'builderProductAdd']);
Route::get('/builder-products/remove/{key}', [PcBuilderController::class,'builderProductRemove']);
Route::get('/pc-build-product', [PcBuilderController::class, 'pcBuilderWithProduct']);
Route::get('/pc-builder/pdf', [PcBuilderController::class, 'pcBuilderPdf']);

Route::get('/product-compare', [ProductCompareController::class, 'index']);
Route::get('/compare-product', [ProductCompareController::class, 'searchCompareProduct']);
Route::post('/product/compare/add', [ProductCompareController::class, 'add']);
Route::get('/product/compare/remove/{itemCode}', [ProductCompareController::class, 'remove']);


Route::view('/offers', 'offers');
Route::view('/offer-details', 'offer-details');
Route::view('/terms-conditions', 'terms-conditions');
Route::view('/privacy-policy', 'privacy-policy');
Route::view('/refund-policy', 'refund-policy');


/*------------------------------------------------------- Products Pages Routes -------------------------------------------------*/
Route::get('/products', [ProductsController::class, 'allProducts']);
Route::get('/filter', [ProductsController::class, 'filter']);
Route::get('/product/{product:slug}', [ProductsController::class, 'index']);

/*------------------------------------------------------- Users Routes -------------------------------------------------*/
Route::view('/user/login', 'user.login');
Route::view('/account', 'auth.dashboard');
Route::view('/edit-profile', 'auth.profile');
Route::view('/edit-password', 'auth.edit-password');
Route::view('/orders', 'auth.orders');



/*------------------------------------------------------- Admin Routes -------------------------------------------------*/

Route::get('/admin/login', [AdminController::class, 'loginFrom']);
Route::post('/admin/login', [AdminController::class, 'login']);

Route::middleware(['admin'])->group(function(){
    Route::view('/admin/dashboard', 'admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'logout']);


    //Products
    Route::get('/admin/products',[BackendProductsController::class, "index"]);
    Route::get('/admin/products/add',[BackendProductsController::class, "add"] );
    Route::post('/admin/product/store',[BackendProductsController::class, "store"] );


    //Categories
    Route::view('/admin/category', 'admin.category.index');
    Route::view('/admin/category/add', 'admin.category.add');

    //Coupon
    Route::view('/admin/coupon', 'admin.coupon.index');
    Route::view('/admin/coupon/add', 'admin.coupon.add');

    //Brand
    Route::view('/admin/brand', 'admin.brand.index');
    Route::view('/admin/brand/add', 'admin.brand.add');

    //Orders
    Route::view('/admin/orders', 'admin.orders.index');

    //Reviews
    Route::view('/admin/reviews', 'admin.reviews.index');

    //Users
    Route::view('/admin/users', 'admin.user.index');

    //Offers
    Route::view('/admin/offers', 'admin.offers.index');
    Route::view('/admin/offers/add', 'admin.offers.add');

    //Shopping Rules
    Route::view('/admin/shopping_rule', 'admin.shopping_rule.index');
    Route::view('/admin/shopping_rule/add', 'admin.shopping_rule.add');

    //Settings
    Route::view('/admin/settings', 'admin.settings.index');

});

Route::get('/storage-link', function(){
    Artisan::call('storage:link');

    Alert::success('Storage linked')->persistent('Close')->autoclose(6000);

    return back();
});






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

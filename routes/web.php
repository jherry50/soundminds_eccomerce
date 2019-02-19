<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Cat@index');

Route::get('audio_visuals', 'Cat@audio');
Route::get('video_and_camera_security', 'Cat@video');
Route::get('hardware_building_and_repair', 'Cat@hardware');
Route::get('laptops_and_phones', 'Cat@laptopPhone');
Route::get('networking_service', 'Cat@net');
Route::get('accessories', 'Cat@accessories');
Route::view('register', 'register');
Route::get('login',function (){
    if(session()->has('logged_in')){
         return redirect()->action('Cat@index');
    }
    else{
        return view('login');
    }
});
Route::post('login','Cat@validLogin');
Route::post('register','Cat@register');
Route::get('logout','Cat@logout');
Route::get('cart', 'Cat@cart');
Route::post('add_to_cart', 'Cat@addToCart');
Route::post('delete_item', 'Cat@deleteItem');
Route::get('cart_no','Cat@cartNo');
Route::get('checkout', 'Cat@checkOut');
Route::get('admin', function (){
  $categories = \App\Categories::all();
  return view('admin', ['categories'=>$categories]);
}
);
Route::post('add','Cat@addProduct');
Route::get('admin/edit/phones', function (){
    $phones = \App\Products::join('categories','products.categoryId','=','categories.id')->where('products.categoryId', 1)->select('products.*')->paginate(10);
    return view('edit_phone',['phones'=>$phones]);

});
Route::get('admin/edit/laptops', function (){
    $lp = \App\Products::join('categories','products.categoryId','=','categories.id')->where('products.categoryId', 2)->select('products.*')->paginate(10);
    return view('edit_laptop',['laptops'=>$lp]);


});
Route::get('admin/edit/accessories', function (){
    $a= \App\Products::join('categories','products.categoryId','=','categories.id')->where('products.categoryId', 3)->select('products.*')->paginate(10);
    return view('edit_accessories',['accessories'=>$a]);

});

Route::post('admin/edit/phones','Cat@editPhone');
Route::get('admin/edit/phones/{id}', function (){

    $product = new \App\Products();
    if ($product->destroy(19)){
        return 'yes';
    }
    else{
        return 'no';
    }
});
Route::post('admin/edit/laptops','Cat@editLaptop');
Route::post('admin/edit/accessories','Cat@editAccessories');

// paystack integration
Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');
Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');
//

Route::view('a', 'a');







<?php

namespace App\Http\Controllers;

use App\Cart;
use App\products;
use App\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\DocBlock\Tags\Method;

class Cat extends Controller
{
    function  index (){
        return view('home');
    }

    function  audio(){
        return view('categories.audio');
    }
    function  video(){
        return view('categories.video');
    }
    function  hardware(){
        return view('categories.hardware');
    }
    function  net(){
        return view('categories.net');
    }
    function  accessories(Request $request){
        $per_page = $request->post('per_page') ? $request->post('per_page'): 6;
        $product = Products::join('categories','products.categoryId','=','categories.id')
            ->select('products.*','categories.categoryName')
            ->where('products.soldOut',0)
            ->whereIn('products.categoryId',[3])
            ->getQuery()
            ->paginate($per_page);

        return view('categories.accessories',['product'=>$product]);
    }
    function  laptopPhone(Request $request){
        $per_page = $request->post('per_page') ? $request->post('per_page'): 6;
        $product = Products::join('categories','products.categoryId','=','categories.id')
            ->where('products.soldOut',0)
            ->select('products.*','categories.categoryName')
            ->whereIn('products.categoryId',[1,2])
            ->getQuery()
            ->paginate($per_page);
        return view('categories.lp',['product'=>$product]);
    }
    function validLogin(Request $request){

        $username= $request->input('email');
        $password= sha1($request->input('password'));
        $user= \App\Users::where(['email'=>$username,'password'=>$password])->get()->count();


        if($user==1){
            $id = \App\Users::where('email',$username)->first()->id;
            $user=\App\Users::where(['email'=>$username,'password'=>$password])->select('firstName','lastName')->first();
            $request->session()->put(['logged_in'=>'true','user_id'=>$id,'user'=>$user->firstName.' '.$user->lastName]);
            return redirect()->action('Cat@index');
        }
        else{
            return redirect()->back()->withErrors(['fail'=>'Email/Password incorrect'])->withInput(['email'=>$request->input('email')]);
        }
    }

    function register(Request $request){
        $user= new Users();
        $this->validate($request,[
            'email'=>'required|email|unique:users',
            'firstname'=>'required',
            'lastname'=>'required',
            'password'=>'required',
            'confirm_password'=>'required|same:password',
            'address'=>'required',
            'phone_no'=>'required',

        ]);
        $user->email = $request->input('email');
        $user->firstName = $request->input('firstname');
        $user->lastName = $request->input('lastname');
        $user->password = sha1($request->input('password'));
        $user->address =  $request->input('address');
        $user->phoneNo = $request->input('phone_no');
        $user->role = 'customer';


        if ($user->save()){

            return back()->with('success', 'Successfully registered');

        }
        else{
            return back()->with("fail","There was an error ,please try again ");
        }


    }
     function  logout(Request $request){
        $request->session()->forget(['logged_in','user','user_id']);
        return redirect()->action('Cat@index');


     }

     function  cart(Request $request){
        if(session()->has('logged_in')){
//            $product_ids = $request->get('product_id');
            $total =$product = Cart::join('products','cart.productId','=','products.id')
                ->select('products.*','categories.categoryName')
                ->getQuery()
                ->where('cart.userId',session('user_id'))
                ->sum('products.currentPrice');

            $product = Cart::join('products','cart.productId','=','products.id')
                ->join('categories', 'products.categoryId', '=', 'categories.id')
                ->select('products.*','categories.categoryName', 'cart.id as cartId','cart.quantity')
                ->where('cart.userId',session('user_id'))
                ->getQuery()
                ->get();
            return view('cart', ['product'=>$product, 'total'=>$total]);
        }
        elseif($request->hasCookie('cart') != false){
            $ids = json_decode($request->cookie('cart'));
//             dd($ids);

            $total = $product = Products::join('categories','products.categoryId','=','categories.id')
                ->select('products.*','categories.categoryName')
                ->whereIn('products.id',$ids)
                ->getQuery()
                ->sum('products.currentPrice');
            $product = Products::join('categories','products.categoryId','=','categories.id')
                ->select('products.*','categories.categoryName')
                ->whereIn('products.id',$ids)
                ->getQuery()
                ->get();
            return view('cart', ['product'=>$product, 'total'=> $total]);
        }

     }
      function  cartNo(){

          $cart = new Cart();
           return $cart->where('userId',session('user_id'))
               ->get()
               ->count();
      }

     function  addToCart(Request $request){

        if(session()->has('logged_in')){
            $user_id= session('user_id');
            $product_id= $request->post('product_id');
            $cart = new Cart();
            $cart->userId = $user_id;
            $cart->productId= $product_id;
            if ($cart->where('userId',$user_id)
                ->where('productId',$product_id)
                    ->get()
                ->count() ==0
            ){
                if($cart->save()){
                    $count = $cart->where('userId',$user_id)
                        ->get()
                        ->count();
                    return $count;
                }
            }


        }
     }

     function  deleteItem(Request $request){
         if(session()->has('logged_in')){
             $cart_id= $request->post('product_id');
             $cart = new Cart();
             if( $cart->destroy($cart_id)){
                 return "success";
             }



         }

     }
      function  checkOut(){

          if(session()->has('logged_in')){
//            $product_ids = $request->get('product_id');
              $total =$product = Cart::join('products','cart.productId','=','products.id')
                  ->select('products.*','categories.categoryName')
                  ->getQuery()
                  ->where('cart.userId',session('user_id'))
                  ->sum('products.currentPrice');

              $product = Cart::join('products','cart.productId','=','products.id')
                  ->join('categories', 'products.categoryId', '=', 'categories.id')
                  ->select('products.*','categories.categoryName', 'cart.id as cartId')
                  ->where('cart.userId',session('user_id'))
                  ->getQuery()
                  ->get();
              return view('checkout', ['product'=>$product, 'total'=>$total]);
          }


      }
      function  addProduct(Request $request){
          $this->validate($request,[
              'categories'=>'required',
              'product_name'=>'required',
              'price'=>'required',
              'previous_price'=>'required',
              'discount'=>'required',
              'upload'=>'image|required'

          ]);
          $file = $request->file('upload');
          $filename = $file->getClientOriginalName();
           if($request->post('categories') == 1){
               $path= 'phone';
           }
           elseif($request->post('categories') ==2){
               $path= 'laptop';
           }
           elseif($request->post('categories') ==3){
               $path= 'accessories';
           }
          $destinationPath='uploads/'.$path;
            if (($file_uploaded=$file->move($destinationPath,$filename))){
                $product = new Products();
                $product->categoryId = $request->post('categories');
                $product->productPath=$file_uploaded;
                $product->productName = $request->post('product_name');
                $product->currentPrice = $request->post('price');;
                $product->previousPrice = $request->post('previous_price');;
                $product->discountRate = $request->post('discount');;
                $product->soldOut = 0;
                 if($product->save()){
                     return back()->with('response','successful');
                 }
                 else{
                     return back()->with('response','Failed');
                 }

            }

      }

      function editPhone(Request $request){

        if ( $request->has('delete_id')){
            $product =  \App\Products::destroy($request->post('delete_id'));
            if( $product){
                return 'Deleted successful';
            } else {
                return 'not successful';
            }


        }
        else {
            $product = \App\Products::find($request->post('id'));
            $product->productName = $request->post('productName');
            $product->currentPrice = $request->post('currentPrice');
            $product->previousPrice = $request->post('previousPrice');
            $product->discountRate = $request->post('discountRate');
            $product->soldOut = $request->post('soldOut');
            if ($product->save()) {
                return 'successful';
            } else {
                return 'not successful';
            }
        }



      }
    function editLaptop(Request $request){

        if ( $request->has('delete_id')){
            $product =  \App\Products::destroy($request->post('delete_id'));
            if( $product){
                return 'Deleted successful';
            } else {
                return 'not successful';
            }


        } {
            $product = \App\Products::find($request->post('id'));
            $product->productName = $request->post('productName');
            $product->currentPrice = $request->post('currentPrice');
            $product->previousPrice = $request->post('previousPrice');
            $product->discountRate = $request->post('discountRate');
            $product->soldOut = $request->post('soldOut');
            if ($product->save()) {
                return 'successful';
            } else {
                return 'not successful';
            }
        }



    }
    function EditAccessories(Request $request){
        if ( $request->has('delete_id')){
            $product =  \App\Products::destroy($request->post('delete_id'));
            if( $product){
                return 'Deleted successful';
            } else {
                return 'not successful';
            }


        }
        else {
            $product = \App\Products::find($request->post('id'));
            $product->productName = $request->post('productName');
            $product->currentPrice = $request->post('currentPrice');
            $product->previousPrice = $request->post('previousPrice');
            $product->discountRate = $request->post('discountRate');
            $product->soldOut = $request->post('soldOut');
            if ($product->save()) {
                return 'successful';
            } else {
                return 'not successful';
            }
        }



    }





}

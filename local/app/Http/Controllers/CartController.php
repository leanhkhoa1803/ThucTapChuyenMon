<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use Mail;
use App\Models\ProductModel;
class CartController extends Controller
{
    public function getAddCart($id){
        $product = ProductModel::find($id);
        Cart::instance('cart')->add(['id' => $id, 'name' => $product->prod_name, 'qty' => 1, 'price' => $product->prod_price, 
        'options' => ['img' => $product->prod_img,'slug'=>$product->prod_slug]]);

        return redirect('cart/show');
       
    }

    public function getShowCart(){
        
        $data['cart_item'] = Cart::instance('cart')->content();
        $data['total'] = Cart::instance('cart')->total();
        $data['subtotal'] = Cart::instance('cart')->subtotal();
        return view('frontend.shopping-cart',$data);
    }

    public function getDeleteCart($id){
        Cart::instance('cart')->remove($id);
        return back();
    }

    public function getUpdateCart(Request $request){
        Cart::instance('cart')->update($request->rowId,$request->qty);

    }

    public function getCheckout(){
        $data['cart_item'] = Cart::instance('cart')->content();
        $data['total'] = Cart::instance('cart')->total();
        $data['subtotal']= Cart::instance('cart')->subtotal();
        return view('frontend.checkout',$data);
    }
    public function postCheckout(Request $request){
        $data['info'] = $request->all();
        $email = $request->email;
        $data['cart'] = Cart::content();
        $data['total'] = Cart::total();
        Mail::send('frontend.email', $data, function ($message) use ($email) {
            $message->from('leanhkhoa2205@gmail.com', 'Lê Anh Khoa');
            
            $message->to($email, $email);
            $message->cc('leanhkhoa2205@gmail.com', 'Anh Khoa 5851071036');
            
            
            $message->subject('Xác nhận đơn đặt hàng !');
            
        });
        return redirect('success');
    }

    public function getSuccess(){
        return view('frontend.success');
    }

    public function getAddWishlist($id){
        $product = ProductModel::find($id);
        Cart::instance('wishlist')->add(['id' => $id, 'name' => $product->prod_name, 'qty' => 1, 'price' => $product->prod_price, 
        'options' => ['img' => $product->prod_img,'status'=>$product->prod_status,'slug'=>$product->prod_slug]]);

        // return redirect('cart/showWishlist');
        return back();
    }

    public function showWishlist(){
        
        $data['wistlist'] = Cart::instance('wishlist')->content();
        $data['total'] = Cart::instance('wishlist')->total();
        $data['subtotal'] = Cart::instance('wishlist')->subtotal();
        return view('frontend.wish-list',$data);
    }

    public function getDeleteWishlist($id){
        Cart::instance('wishlist')->remove($id);
        return back();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
        return view('page.home');
    }
    public function getProduct(){
        return view('page.product');
    }
    public function getProductDetail(){
        return view('page.product-detail');
    }
    public function getShopingCart(){
        return view('page.shopping-cart');
    }
    public function getLogin(){
        return view('page.login');
    }
    public function getContact(){
        return view('page.contact');
    }
    public function getWishList(){
        return view('page.wish-list');
    }
    public function getAbout(){
        return view('page.about');
    }
    public function getCompare(){
        return view('page.compare');
    }
    public function getCheckOut(){
        return view('page.checkout');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;
use App\Models\CategoryModel;
use App\Models\ProductImageModel;
use App\Models\Comment;
use DB;
class FrontendController extends Controller
{
    public function getHome(){
        //$data['featured'] = ProductModel::where('prod_featured',1)->orderBy('prod_id','desc')->take(8)->get();
        //$data['new'] = ProductModel::all()->orderBy('prod_id','desc')->take(8)->get();
        $data['prod_list']= DB::table('products')
        ->join('category','products.prod_cate','=','category.cate_id')
        ->orderBy('prod_id','asc')->take(8)->get();

        $data['featured']= DB::table('products')
        ->join('category','products.prod_cate','=','category.cate_id')->where('prod_featured','=',1)
        ->get();

        $data['rom']= DB::table('products')
        ->join('category','products.prod_cate','=','category.cate_id')->where('prod_rom','>',64)
        ->get();

        return view('frontend.home',$data);
    }

    public function getDetailProduct($id){
        $data['prod_detail'] = ProductModel::find($id);
        $data['product_ram'] = DB::table('products')->select('prod_ram')->distinct()->get();
        $data['product_rom'] = DB::table('products')->select('prod_rom')->distinct()->get();
        $data['prod_random'] = ProductModel::orderByRaw('RAND()')->take(10)->get();
        $data['comment'] = Comment::where('com_product',$id)->get();
        $imgName = DB::table('product_image')->select('image')->where('prod_img_id','=',$id)->get();
        //$data['prod_list']= DB::table('category')->select('cate_name')->where('cate_id','=','products.prod_cate')->get();
        $data['prod_list'] = CategoryModel::all();
        
        
        return view('frontend.product-detail',$data,['imgName'=>$imgName]);
    }

    public function getCategory($id){
        $data['product'] = ProductModel::where('prod_cate',$id)->paginate(6);
        $data['product_ram'] = DB::table('products')->select('prod_ram')->distinct()->orderBy('prod_ram','asc')->get();
        $data['product_rom'] = DB::table('products')->select('prod_rom')->distinct()->orderBy('prod_rom','asc')->get();
        return view('frontend.product',$data);
    }

    public function postComment(Request $request,$id){
        $comment = new Comment;
        $comment->com_name = $request->author;
        $comment->com_email = $request->email;
        $comment->com_content = $request->comment;
        $comment->com_product = $id;
        $comment->com_rating = $request->rating;
        $comment->save();

        return back();
    }
    
    public function getSearch(Request $request){
        $result = $request->result;
        $result = str_replace(' ','%',$result);
        $data['product'] = ProductModel::where('prod_name','like','%'.$result.'%')->paginate(9);
        return view('frontend.search',$data);      
    }

    public function getSearchPrice(Request $request){
        $result = $request->result;
        $data['product_ram'] = DB::table('products')->select('prod_ram')->distinct()->orderBy('prod_ram','asc')->get();
        $data['product_rom'] = DB::table('products')->select('prod_rom')->distinct()->orderBy('prod_rom','asc')->get();
        $ram = $request->ram;
        $rom = $request->rom;
        if($ram == NULL and $rom == NULL and $result == NULL){
            $data['product'] = ProductModel::all();
            return view('frontend.search',$data);
        }
        else{
            if($result == NULL){
                if ($ram == NULL) {
                    $data['product'] = ProductModel::where(('prod_rom'),'=',$rom)
                    ->orderBy('prod_price','asc')->get();
                    return view('frontend.search',$data);
                }
                elseif ($rom == NULL) {
                    $data['product'] = ProductModel::where(('prod_ram'),'=',$ram)
                    ->orderBy('prod_price','asc')->get();
                    return view('frontend.search',$data);
                }
                else {
                    $data['product'] = ProductModel::where(('prod_rom'),'=',$rom)
                    ->where(('prod_ram'),'=',$ram)
                    ->orderBy('prod_price','asc')->get();
                    return view('frontend.search',$data);
                }
            }
            elseif ($ram == NULL) {
                if ($result == NULL) {
                    $data['product'] = ProductModel::where(('prod_rom'),'=',$rom)
                    ->orderBy('prod_price','asc')->get();
                    return view('frontend.search',$data);
                }
                
                elseif ($rom == NULL) {
                    if($result=='<3'){
                        $result = 3000000;
                        $data['product'] = ProductModel::where(('prod_price'),'<',$result)
                        ->orderBy('prod_price','asc')->get();
                        return view('frontend.search',$data);
                    }
                    if($result =='3-6'){
                        $result = 3100000;
                        $data['product'] = ProductModel::whereBetween(('prod_price'),[$result,6000000])
                        ->orderBy('prod_price','asc')->get();
                        return view('frontend.search',$data);
                    }
                    if($result =='6-12'){
                        $result = 6000000;
                        $data['product'] = ProductModel::whereBetween(('prod_price'),[$result,12000000])
                        ->orderBy('prod_price','asc')->get();
                        return view('frontend.search',$data);
                    }
                    if($result =='>13'){
                        $result = 13000000;
                        $data['product'] = ProductModel::where(('prod_price'),'>',$result)
                        ->orderBy('prod_price','asc')->get();
                        return view('frontend.search',$data);
                    }
                }
                else {
                    if($result=='<3'){
                        $result = 3000000;
                        $data['product'] = ProductModel::where(('prod_price'),'<',$result)
                        ->where(('prod_rom'),'=',$rom)
                        ->orderBy('prod_price','asc')->get();
                        return view('frontend.search',$data);
                    }
                    if($result =='3-6'){
                        $result = 3100000;
                        $data['product'] = ProductModel::whereBetween(('prod_price'),[$result,6000000])
                        ->where(('prod_rom'),'=',$rom)
                        ->orderBy('prod_price','asc')->get();
                        return view('frontend.search',$data);
                    }
                    if($result =='6-12'){
                        $result = 6000000;
                        $data['product'] = ProductModel::whereBetween(('prod_price'),[$result,12000000])
                        ->where(('prod_rom'),'=',$rom)
                        ->orderBy('prod_price','asc')->get();
                        return view('frontend.search',$data);
                    }
                    if($result =='>13'){
                        $result = 13000000;
                        $data['product'] = ProductModel::where(('prod_price'),'>',$result)
                        ->where(('prod_rom'),'=',$rom)
                        ->orderBy('prod_price','asc')->get();
                        return view('frontend.search',$data);
                    }
                    
                }
            }
            elseif($rom == NULL){
                if ($result == NULL) {
                    $data['product'] = ProductModel::where(('prod_ram'),'=',$ram)
                    ->orderBy('prod_price','asc')->get();
                    return view('frontend.search',$data);
                }
                
                elseif ($ram == NULL) {
                    if($result=='<3'){
                        $result = 3000000;
                        $data['product'] = ProductModel::where(('prod_price'),'<',$result)
                        ->orderBy('prod_price','asc')->get();
                        return view('frontend.search',$data);
                    }
                    if($result =='3-6'){
                        $result = 3100000;
                        $data['product'] = ProductModel::whereBetween(('prod_price'),[$result,6000000])
                        ->orderBy('prod_price','asc')->get();
                        return view('frontend.search',$data);
                    }
                    if($result =='6-12'){
                        $result = 6000000;
                        $data['product'] = ProductModel::whereBetween(('prod_price'),[$result,12000000])
                        ->orderBy('prod_price','asc')->get();
                        return view('frontend.search',$data);
                    }
                    if($result =='>13'){
                        $result = 13000000;
                        $data['product'] = ProductModel::where(('prod_price'),'>',$result)
                        ->orderBy('prod_price','asc')->get();
                        return view('frontend.search',$data);
                    }
                }
                else {
                    if($result=='<3'){
                        $result = 3000000;
                        $data['product'] = ProductModel::where(('prod_price'),'<',$result)
                        ->where(('prod_ram'),'=',$ram)
                        ->orderBy('prod_price','asc')->get();
                        return view('frontend.search',$data);
                    }
                    if($result =='3-6'){
                        $result = 3100000;
                        $data['product'] = ProductModel::whereBetween(('prod_price'),[$result,6000000])
                        ->where(('prod_ram'),'=',$ram)
                        ->orderBy('prod_price','asc')->get();
                        return view('frontend.search',$data);
                    }
                    if($result =='6-12'){
                        $result = 6000000;
                        $data['product'] = ProductModel::whereBetween(('prod_price'),[$result,12000000])
                        ->where(('prod_ram'),'=',$ram)
                        ->orderBy('prod_price','asc')->get();
                        return view('frontend.search',$data);
                    }
                    if($result =='>13'){
                        $result = 13000000;
                        $data['product'] = ProductModel::where(('prod_price'),'>',$result)
                        ->where(('prod_ram'),'=',$ram)
                        ->orderBy('prod_price','asc')->get();
                        return view('frontend.search',$data);
                    }
                    
                }
            }
            else{
                if($result=='<3'){
                    $result = 3000000;
                    $data['product'] = ProductModel::where(('prod_price'),'<',$result)
                    ->where(('prod_ram'),'=',$ram)
                    ->where(('prod_rom'),'=',$rom)
                    ->orderBy('prod_price','asc')->get();
                    return view('frontend.search',$data);
                }
                if($result =='3-6'){
                    $result = 3100000;
                    $data['product'] = ProductModel::whereBetween(('prod_price'),[$result,6000000])
                    ->where(('prod_ram'),'=',$ram)
                    ->where(('prod_rom'),'=',$rom)
                    ->orderBy('prod_price','asc')->get();
                    return view('frontend.search',$data);
                }
                if($result =='6-12'){
                    $result = 6000000;
                    $data['product'] = ProductModel::whereBetween(('prod_price'),[$result,12000000])
                    ->where(('prod_ram'),'=',$ram)
                    ->where(('prod_rom'),'=',$rom)
                    ->orderBy('prod_price','asc')->get();
                    return view('frontend.search',$data);
                }
                if($result =='>13'){
                    $result = 13000000;
                    $data['product'] = ProductModel::where(('prod_price'),'>',$result)
                    ->where(('prod_ram'),'=',$ram)
                    ->where(('prod_rom'),'=',$rom)
                    ->orderBy('prod_price','asc')->get();
                    return view('frontend.search',$data);
                }
            }
        }
        
        
    }
    
    public function getAbout(){
        return view('frontend.about');
    }
    public function getContact(){
        
        return view('frontend.contact');
    }
}

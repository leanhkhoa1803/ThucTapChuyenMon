<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\rqAddProduct;
use App\Models\ProductModel;
use App\Models\CategoryModel;
use App\Models\ProductImageModel;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function getProduct(){
        $data['prod_list']= DB::table('products')
        ->join('category','products.prod_cate','=','category.cate_id')
        
        ->orderBy('prod_id','asc')->get();
        return view('backend.product',$data);
    }
    //add product
    public function getAddProduct(){
        $data['cate_list'] = CategoryModel::all();
        $dt_prod['prod_list'] = ProductModel::all();
        return view('backend.addproduct',$data,$dt_prod);
    }   
   
    public function postAddProduct(rqAddProduct $request){
        $imgName =$request->img->getClientOriginalName();
        $product = new ProductModel;
        $product_img = new ProductImageModel;

        $product->prod_name = $request->name;
        $product->prod_slug = \Str::slug($request->name);
        $product->prod_img = $imgName;
        $product->prod_accessories = $request->accessories;
        $product->prod_price = $request->price;
        $product->prod_warranty = $request->warranty;
        $product->prod_promotion = $request->promotion;
        $product->prod_status = $request->status;
        $product->prod_condition = $request->condition;
        $product->prod_description = $request->description;
        $product->prod_featured = $request->featured;
        $product->prod_cate = $request->cate;
        $product->prod_ram = $request->ram;
        $product->prod_rom = $request->rom;
        $product->prod_screen = $request->screen;
        $product->save();

        //add bang product_image
        $img_list1 =$request->img_list;
        $product_img->image = $img_list1;
                $product_img->prod_img_id=$product->prod_id;
                 $product_img->save();


        return back();
    }
    //edit product
    public function getEditProduct($id){
        $data['product'] = ProductModel::find($id);
        $dt_prod = ProductModel::all();
        $dt_cate = CategoryModel::all();
        $imgName = DB::table('product_image')->select('image')->where('prod_img_id','=',$id)->get();
        
        return view('backend.editproduct',$data,['cate'=>$dt_cate,'pro_img'=>$imgName,'prod_detail'=>$dt_prod]);
    }
    public function postEditProduct(Request $request,$id){
        $product = new ProductModel;
        $product_img = new ProductImageModel;

        $arr['prod_name'] = $request->name;
        $arr['prod_slug'] = \Str::slug($request->name);
        $arr['prod_accessories'] = $request->accessories;
        $arr['prod_price'] = $request->price;
        $arr['prod_warranty'] = $request->warranty;
        $arr['prod_promotion'] = $request->promotion;
        $arr['prod_status'] = $request->status;
        $arr['prod_condition'] = $request->condition;
        $arr['prod_description'] = $request->description;
        $arr['prod_featured'] = $request->featured;
        $arr['prod_cate'] = $request->cate;
        $arr['prod_ram'] = $request->ram;
        $arr['prod_rom'] = $request->rom;
        $arr['prod_screen'] = $request->screen;
        
        if($request->hasFile('img')){
            $img = $request->img->getClientOriginalName();
            $arr['prod_img'] = $img;
        }

        $product::where('prod_id',$id)->update($arr);

        $img_list1 =$request->img_list;
        $arr_img['image'] = $img_list1;       

        $product_img::where('prod_img_id',$id)->update($arr_img);

        return redirect('admin/product');
    }
    //delete product
    public function getDeleteProduct($id){
        ProductModel::destroy($id);
        DB::table('product_image')->where('prod_img_id','=',$id)->delete();
        return back();
    }
    
}

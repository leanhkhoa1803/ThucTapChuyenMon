<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CategoryModel;
use App\Http\Requests\rqAddCategory;
use App\Http\Requests\rqEditCategory;
class CategoryController extends Controller
{
    public function getCategory(){
        $data['cate_list'] = CategoryModel::all();

        return view('backend.category',$data);
    }

    public function postCategory(rqAddCategory $request){
        $CategoryModel = new CategoryModel;

        $CategoryModel->cate_name = $request->name;
        $CategoryModel->cate_slug = \Str::slug($request->name);

        $CategoryModel->save();
        return back();
    }

    public function getEditCategory($id){
        $data['cate'] = CategoryModel::find($id);
        return view('backend.editcategory',$data);
    }

    public function postEditCategory(rqEditCategory $request, $id){
        $CategoryModel = CategoryModel::find($id);

        $CategoryModel->cate_name = $request->name;
        $CategoryModel->cate_slug = \Str::slug($request->name);

        $CategoryModel->save();
        return redirect()->intended('admin/category');
    }

    public function getDeleteCategory($id){
        CategoryModel::destroy($id);
        return back();
    }
}

<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if(auth()->id())
        {
            return view('backend.dashboard');
        }else
        {
            return redirect('login');
        }
    }
    public function category()
    {
        if(auth()->id())
        {
            return view('backend.category.index');
        }else
        {
            return redirect('login');
        }

    }

    public function store(Request $request)
    {
        $category = new Category();
        $category->category_name = $request->cat_name;
        $category->category_description = $request->cat_descrip;
        $category->save();
        return redirect()->back();
    }

    public function show(){
        if(auth()->id())
        {
            $category = Category::get();
            return view('backend.category.allCategory',compact('category'));
        }else
        {
            return redirect('login');
        }

    }

    public function edit($id){
        $category = Category::find($id);
        return view('backend.category.update',compact('category'));
    }

    public function update(Request $request , $id){
        $category = Category::find($id);
        $category->category_name = $request->cat_name;
        $category->category_description = $request->cat_descrip;
        $category->update();
        return redirect('admin/allCategory');
    }

    public function delete($id){
        $category = Category::find($id);
        $category->delete();
        return redirect()->back();

    }
}

<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('backend.dashboard');
    }
    public function category()
    {
        return view('backend.category.index');
    }
    public function store(Request $request)
    {
        $category = new Category();
        $category->category_name = $request->cat_name;
        $category->category_description = $request->cat_descrip;
        $category->save();
        return redirect()->back();
    }
}

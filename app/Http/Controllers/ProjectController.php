<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        if(auth()->id())
        {
            return view('backend.project.index');
        }
        else
        {
            return redirect('login');
        }
    }
    public function project(){
        $category = Category::get();
        return view('backend.project.add',compact('category'));
    }
    public function store(Request $request){
        $project = new project();
        $project->project_name = $request->project_name;
        $project->cat_id = $request->cat_id;
        $project->languages = $request->languages;
        $project->description = $request->description;
        if ($request->hasFile('project_image'))
        {
            $file = $request->file('project_image');
            $extention =$file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file -> move('product/',$filename);
            $project->project_image=$filename;
        }
        $project->save();
        return redirect()->back();
    }
    public function show(){
        $projects = Project::all();
        return view('backend.project.index',compact('projects'));
    }
}

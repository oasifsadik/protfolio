<?php

namespace App\Http\Controllers;

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
        return view('backend.project.add');
    }
    public function store(Request $request){
        $project = new project();
        $project->project_name = $request->project_name;
        $project->project = $request->project;
        $project->languages = $request->languages;
        $project->description = $request->description;
            if($image = $request->file('project_image')){
                $customimage = uniqid().'.'.$image->getClientOriginalExtension();
                $image->move("product/" , $customimage);
            }
        $project->project_image = $request->project_image;
        $project->save();
        return redirect()->back();
    }
}

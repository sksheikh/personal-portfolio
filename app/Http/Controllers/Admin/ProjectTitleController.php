<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProjectTitle;
use Illuminate\Http\Request;

class ProjectTitleController extends Controller
{
    public function index()
    {
        return view('admin.project.project-title.index',[
            'projectTitle'=> ProjectTitle::first(),
        ]);
    }

    public function update(Request $request)
    {
        $validateData = $request->validate([
            'name'=>'required|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
        ]);
//        return $request->all();
        ProjectTitle::updateProjectTitle($request);
        return redirect()->route('project-title.index')->with('success','Project Title updated successfully');
    }
}

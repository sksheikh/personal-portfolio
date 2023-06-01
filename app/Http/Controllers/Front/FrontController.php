<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Banner;
use App\Models\Header;
use App\Models\Project;
use App\Models\ProjectCategory;
use App\Models\ProjectTitle;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        $banner = Banner::first();
        $about= About::first();
        $projectTitle = ProjectTitle::first();
        $projectCategories = ProjectCategory::where('status',1)->get();
        $projects = Project::where('status',1)->get();

        return view('front.home.home',compact('banner','about','projectTitle','projectCategories','projects'));
    }

    public function download()
    {
        $banner = Banner::first();
        $file = public_path('upload/banner/').$banner->resume;
        return response()->download($file,'sheikh_salah_uddin_resume.pdf');
    }
}

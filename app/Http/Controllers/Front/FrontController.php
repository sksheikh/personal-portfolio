<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Header;
use App\Models\Project;
use App\Models\ProjectCategory;
use App\Models\ProjectTitle;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        return view('front.home.home',[
            'header'=>Header::first(),
            'about'=>About::first(),
            'projectTitle'=>ProjectTitle::first(),
            'projectCategories'=>ProjectCategory::where('status',1)->get(),
            'projects'=>Project::where('status',1)->get(),
        ]);
    }
}

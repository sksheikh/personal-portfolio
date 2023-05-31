<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Banner;

class BannerController extends Controller
{

    public function index()
    {
        $banner = Banner::first();
        return view('admin.banner.index',compact('banner'));
    }


    public function store(Request $request)
    {
        //
    }


}

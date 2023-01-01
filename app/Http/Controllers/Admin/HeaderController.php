<?php

namespace App\Http\Controllers\Admin;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Models\Header;
use Illuminate\Http\Request;

class HeaderController extends Controller
{

    public function index()
    {
//        return Header::first();
        return view('admin.header.index',[
            'header'=>Header::first(),
        ]);
    }


    public function update(Request $request)
    {
        $validatedData = $request->validate([
           'bg_image'=>'required',
            'profile_image'=>'required',
            'name',
            'designation',
            'resume' =>'required',
            'social_github',
            'social_linkedin',

        ]);
        Header::createOrUpdateHeader($request);
        return redirect()->route('headers.index')->with('success','Updated information successfully');
    }


}

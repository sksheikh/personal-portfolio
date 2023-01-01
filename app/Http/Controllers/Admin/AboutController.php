<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('admin.about.index',[
            'about'=>About::first(),
        ]);
    }

    public function update(Request $request)
    {
        $validateDate = $request->validate([
            'image' => 'required',
        ]);
        About::updateAbout($request);
        return redirect()->route('about.index')->with('success','About updated successfully' );
    }

}

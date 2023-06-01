<?php

namespace App\Http\Controllers\Admin;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AboutController extends Controller
{

    public function index()
    {
        $about = About::first();
        return view('admin.about.index',compact('about'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        try {
            $about = About::first();
            $about->update([
                'title' => $request->title,
                'description' => $request->description,
                'image' => Helper::fileUpload($request->file('image'),'about',$about->image ?? null),
            ]);

            notify()->success('success','About updated successfully');
            return redirect()->route('abouts.index');

        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            notify()->error('error','About update failed');
            return redirect()->back();

        }
    }


}

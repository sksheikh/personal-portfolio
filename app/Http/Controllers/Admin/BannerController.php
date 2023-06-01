<?php

namespace App\Http\Controllers\Admin;

use App\Helper\Helper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Support\Facades\Log;

class BannerController extends Controller
{

    public function index()
    {
        $banner = Banner::first();
        return view('admin.banner.index',compact('banner'));
    }


    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'github_link' => 'required',
            'linkedin_link' => 'required'
        ]);

        try {
            $banner = Banner::first();
            $banner->update([
                'name' => $request->name,
                'titile' => $request->title,
                'github_link' => $request->github_link,
                'linkedin_link' => $request->linkedin_link,
                'bg_image' => Helper::fileUpload($request->file('bg_image'),'banner',$banner->bg_image ?? null),
                'profile_image' => Helper::fileUpload($request->file('profile_image'),'banner',$banner->profile_image ?? null),
                'resume' => Helper::fileUpload($request->file('resume'),'banner',$banner->resume ?? null),
            ]);
            notify()->success('success','Banner updated successfully');
            return redirect()->route('banners.index');
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            notify()->error('success','Banner update failed');
            return redirect()->back();

        }
    }


}

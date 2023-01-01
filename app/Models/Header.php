<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Helper\Helper;

class Header extends Model
{
    use HasFactory;
    protected $fillable=[
        'bg_image',
        'profile_image',
        'name',
        'designation',
        'resume',
        'social_github',
        'social_linkedin',

    ];
    protected static $data;


//    public static function fileUpload($request,$fileObject = null)
//    {
//        if($fileObject)
//        {
//            if(file_exists($fileObject))
//            {
//                unlink($fileObject);
//            }
//            $fileName = time().$fileObject->getClientOriginalName();
//            $fileDirectory ='admin/assets/img/upload-image/';
//            $fileObject->move($fileDirectory,$fileName);
//            $fileUrl = $fileDirectory.$fileName;
//        }else{
//            if($fileObject)
//            {
//                $fileUrl =  $fileObject;
//            }else{
//                $fileUrl = null;
//            }
//        }
//        return $fileUrl;
//
//    }
    public static function createOrUpdateHeader($request)
    {
        self::$data = Header::first();
        self::$data->bg_image = Helper::fileUpload($request->file('bg_image'),'header');
        self::$data->profile_image = Helper::fileUpload($request->file('profile_image'),'header');
        self::$data->name = $request->name;
        self::$data->designation =$request->designation;
        self::$data->resume = Helper::fileUpload($request->file('resume'),'header');
        self::$data->social_github = $request->social_github;
        self::$data->social_linkedin = $request->social_linkedin;
        self::$data->save();

//        Header::updateOrcreate([
//            'bg_image' =>Helper::fileUpload($request->file('bg_image'),'header'),
//            'profile_image' =>Helper::fileUpload($request->file('profile_image'),'header'),
//            'name' =>$request->name,
//            'designation' =>$request->designation,
//            'resume' =>Helper::fileUpload($request->file('resume'),'resume'),
//            'social_github' =>$request->social_github,
//            'social_linkedin' =>$request->social_linkedin,
//        ]);


    }
}

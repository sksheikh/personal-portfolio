<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Helper\Helper;
use PHPUnit\TextUI\Help;

class About extends Model
{
    use HasFactory;
    protected $fillable=[
        'image',
        'title',
        'description'
    ];
    private static $about;

    public static function updateAbout($request)
    {
//        self::$about = new About();
        self::$about = About::first();
        self::$about->image = Helper::fileUpload($request->file('image'),'about');
        self::$about->title = $request->title;
        self::$about->description = $request->description;
        self::$about->save();

    }
}

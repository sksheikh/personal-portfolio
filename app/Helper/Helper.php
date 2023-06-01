<?php


namespace App\Helper;


class Helper
{
    public static function fileUpload($fileObject, $directory, $existFileUrl = null)
    {
        if ($fileObject)
        {
            $fileDirectory = 'upload/'.$directory.'/';
            if ($existFileUrl)
            {
                unlink(public_path($fileDirectory).$existFileUrl);
            }
            $fileName = time().rand(10, 1000).'_'.$fileObject->getClientOriginalName();

            $fileObject->move($fileDirectory, $fileName);
        } else {
            if ($existFileUrl)
            {
                $fileName = $existFileUrl;
            } else {
                $fileName = null;
            }
        }
        return $fileName;
    }


}

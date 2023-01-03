<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Termwind\ValueObjects\pr;

class ProjectTitle extends Model
{
    use HasFactory;
    protected static $projectTitle;

    public static function updateProjectTitle($request)
    {
        self::$projectTitle = ProjectTitle::first();
        self::$projectTitle->name = $request->name;
        self::$projectTitle->save();

    }
}

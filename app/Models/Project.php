<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Helper\Helper;

class Project extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'category_id',
        'image',
        'project_url',
        'slug',
        'status',
    ];

    public static function createOrUpdateProject($request,$id=null)
    {
        Project::updateOrcreate(['id'=>$id],[
            'name' =>$request->name,
            'category_id' =>$request->category_id,
            'image' =>Helper::fileUpload($request->file('image'),'project',isset($id) ? Project::find($id)->image : null),
            'project_url' =>$request->project_url,
            'slug' =>strtolower(str_replace(' ','-',$request->name)),
            'status' =>$request->status,
        ]);
    }


    public function category()
    {
        return $this->belongsTo(ProjectCategory::class,'category_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectCategory extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'status',
        'data_filter'
    ];

    public static function createOrUpdateProjectCategory($request,$id=null){
        ProjectCategory::updateOrcreate(['id'=>$id],[
            'name'=>$request->name,
            'status'=>$request->status,
            'data_filter'=>strtolower(str_replace(' ','-',$request->name)),
        ]);
    }
}

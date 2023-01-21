<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
    ];


    public static function createOrUpdateContact($request,$id = null)
    {
        Contact::updateOrCreate(['id'=>$id],[
            'name' =>$request->name,
            'email' =>$request->email,
            'subject' =>$request->subject,
            'message' =>$request->message,
        ]);
    }
}

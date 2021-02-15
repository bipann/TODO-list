<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function uploadImage(Request $request)
    {
        if($request->hasFile('image')){
            User::uploadImage($request->image);
            return redirect()->back()->with('message', 'Image Uploaded');
        }
            return redirect()->back()->with('error', 'Image Upload Failed'); 
    }

    
    public function index()
    {
        // $data = [
        //     'name'=>'abc',
        //     'email'=>'abc@gmail.com',
        //     'password'=>bcrypt('password'),
        // ];
        // User::create($data);
        $user = User::all();
        return $user;
    }
}

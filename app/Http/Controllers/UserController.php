<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserInfo;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function get_users()
    {
        return response()->json(User::get());
    }
    public function store(Request $request)
    {
        return dd($request->files);

        // dd($request->file->extension());
        $files=$request->files;
        if($request->hasFile('files'))
        {
            foreach ($files as $file) {
                echo '1';
                // Log::info($file->extension());
            }
        }



        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
        return $validator->errors();
        }

      $user=  new User();
      $user->name=$request->name;
      $user->email=$request->name;
      $user->password=$request->name;
      $user->save();
      return response()->json($user);

    }
    public function delete(User $id)
    {
        return $id->delete();
        return 'success';
    }



    //crud
    public function store_form_data(Request $request)
    {
        // return 11;
       $user= new UserInfo();
        $user->username=$request->username;
        $user->recipientName=$request->recipient;
        $user->url=$request->url;
        $user->cost=$request->amount;
        $user->discreption=$request->textarea;
        $user->save();
        return true;
    }
    public function get_form_data()
    {
       return response()->json(UserInfo::all());
    }



}

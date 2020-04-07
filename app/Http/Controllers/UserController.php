<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Subject;
use App\Post;

class UserController extends Controller
{
    public function show($user_id) {
        $user = User::findOrFail($user_id);

        // $user->subjects = Subject::find($user_id);
       
        // foreach ($subjects as $subject) {
            
        // }
        

        //var_dump($user->subject->subject_title);
        return view('users.show',[
            'user'=> $user,
        ]);
    }
     
}

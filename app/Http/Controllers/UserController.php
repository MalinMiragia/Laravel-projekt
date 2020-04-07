<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function show($user_id) {
        $user = User::findOrFail($user_id);

        var_dump($user->subject->subj_title);
        return view('welcome',[
            'user'=> $user,
            'subject'=> $user->subject,
        ]);
    }
}

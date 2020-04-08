<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use App\Post;
use APP\User;

class SubjectController extends Controller
 {
    public function index() {
        $subjects = Subject::all();

        return view('subjects.indexsubject', [
            'subjects' => $subjects,
        ]);
 }

    public function show($subject_id)  {
        $subject = Subject::findOrFail($subject_id);
        // $user = User::findOrFail($user_name);

        return view('subjects.showsubject', [
            'subject'=> $subject,
            // 'user'=> $user,
        ]);
    }

    public function create()     {
        return view('subjects.createsubject');
    }

    public function store() {

        $subject = new Subject();

        $subject->subj_title = request('subject_title');
        $subject->subj_name = request('subject_name');
        

        $subject->save();

        return redirect('/subjects');
    }

    public function destroy($id) {

        $subject = Subject::findOrFail($id);
        $subject->delete();

        return  redirect('/subjects')->with('msg', $subject->subject_title . ' was deleted');
    }

    public function edit($id) {
        $subject = Subject::find($id);
        print_r($subject->subject_title);
        return view('subjects.editsubject')->with('subject', $subject);
    }

    public function update($id) {
        $subject = Subject::find($id);

        $subject->subj_title = request('subject_title');
        $subject->subj_name = request('subject_name');
        

        $subject->save();

        return redirect('subjects/' . $subject->id);
    }
}


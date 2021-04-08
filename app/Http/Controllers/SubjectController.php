<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use App\Post;
use APP\User;
use APP\Tag;
use Illuminate\Support\Facades\Auth;

class SubjectController extends Controller
 {
    public function index() {

        if(request('tag')) {
            $subjects = Tag::where('name', request('tag'))->firstOrFail()->subjects;
        }else {
            $subjects = Subject::latest()->get();
        }

        return view('subjects.indexsubject', [
            'subjects' => $subjects,
        ]);
 }


    public function show($subject_id)  {
        $subject = Subject::findOrFail($subject_id);
        

        return view('subjects.showsubject', [
            'subject'=> $subject,
        ]);
    }

    public function create()     {

        return view('subjects.createsubject');    
    }

    public function store() {

        $subject = new Subject();
        $subject->user_id = Auth::user()->id;
        $subject->subject_title = request('subject_title');
        $subject->subject_name = request('subject_name');
        $subject->tags()->attach(request('tags'));
        

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

        $subject->subject_title = request('subject_title');
        $subject->subject_name = request('subject_name');
        

        $subject->save();

        return redirect('subjects/' . $subject->id);
    }
}


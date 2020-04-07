<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;

class SubjectController extends Controller
{
    public function index() {
        $subjects = Subject::all();

        return view('subjects.indexsubj', [
            'subjects' => $subjects,
        ]);
    }

    public function show($id)  {
        $subject = Subject::findOrFail($id);

        return view('welcome', [
            'subject' => $subject
        ]);
    }

    public function create()     {
        return view('subjects.createsubj');
    }

    public function store() {

        $subject = new Subject();

        $subject->subj_title = request('subj_title');
        $subject->subj_name = request('subj_name');
        

        $subject->save();

        return redirect('/subjects');
    }

    public function destroy($id) {

        $subject = Subject::findOrFail($id);
        $subject->delete();

        return  redirect('/subjects')->with('msg', $subject->subj_title . ' was deleted');
    }

    public function edit($id) {
        $subject = Subject::find($id);
        print_r($subject->subj_title);
        return view('subjects.editsubj')->with('subject', $subject);
    }

    public function update($id) {
        $subject = Subject::find($id);

        $subject->subj_title = request('subj_title');
        $subject->subj_name = request('subj_name');
        

        $subject->save();

        return redirect('subjects/' . $subject->id);
    }
}


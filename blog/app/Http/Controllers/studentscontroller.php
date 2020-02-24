<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\students;
use DB;
class studentscontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$student =students::all();
        //return students::where('title','student two');
        $student = students::orderBy('created_at','desc')->paginate(9);
        //$student = students::orderBy('created_at','desc')->get();
        //return students::orderBy('title','desc')->take(1)->get();
        //$student = DB::select('SELECT* from students');
        return view('students.index')->with('students',$student);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('students.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['title'=>'required',
            'body'=>'required']);
        //$user = (object) null;
        $student = new students;
        $student->title = $request->input('title');
        $student->body = $request->input('body');
        $student->user_id = auth()->user()->id;
        $student->user_id = auth()->user()->id;
        $student->save();
        return redirect('/students')->with('success','student data is inserted');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $student = students::find($id);
        return view('students.show')->with('students',$student);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
     $student = students::find($id);
     return view('/students.edit')->with('students',$student);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,['title'=>'required',
            'body'=>'required']);

        $student = students::find($id);
        $student->title = $request->input('title');
        $student->body = $request->input('body');
        $student->save();
        return redirect('/students')->with('success','student data is updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $student = students::find($id);
        $student->delete();
        return redirect('/students')->with('success','student data is removed');
    }
}

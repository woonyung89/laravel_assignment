<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Club;

class StudentController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index(Request $request)
  {
    $students = Student::orderBy('student_id','asc')
    -> when($request -> query('name'), function($query) use ($request){
      return $query -> where('name','like','%'.$request -> query('name').'%');
    })
    -> paginate(10);
    return view('students.index',[
      'students'=>$students
    ]);

  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    $student = new Student();


    return view('students.create',[
      'student'=>$student,
    ]);
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    $student = new Student();
    $student->fill($request->all());
    $student->save();

    return redirect()->route('student.index');
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
    $student = Student::find($id);
    if(!$student) throw new ModelNotFoundException;
    return view('students.show',  [
      'student'=>$student
    ]);
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
    $student = Student::find($id);
    $club = Club::orderBy('code','asc')->get();

    if(!$student) throw new ModelNotFoundException;

    return view('students.edit',[
      'student'=>$student,
      'club'=>$club,

    ]);
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
    $student = Student::find($id);
    if(!$student) throw new ModelNotFoundException;
    $student->fill($request->all());
    $student->save();
    return redirect()->route('student.index');
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
  }

  public function join($id)
  {
    $club = Club::orderBy('code','asc')->get();
    $student = Student::find($id);
    if(!$student) throw new ModelNotFoundException;
    return view('students.join',  [
      'student'=>$student,
      'club'=>$club
    ]);
  }

  public function updateJoin(Request $request, $id)
  {
    $student = Student::find($id);
    if(!$student) throw new ModelNotFoundException;
    $student->fill($request->all());
    $club_code = $request->input('club_code');
    $student->clubs()->sync($club_code);
    $student->save();
    return redirect()->route('student.index');
  }
  public function __construct()
  {
    $this->middleware('auth');
  }
}

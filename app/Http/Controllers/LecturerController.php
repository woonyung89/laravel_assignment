<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lecturer;
use App\Club;

class LecturerController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index(Request $request)
  {
    $lecturers = Lecturer::orderBy('lecturer_id','asc')
    -> when($request -> query('name'), function($query) use ($request){
      return $query -> where('name','like','%'.$request -> query('name').'%');
    })
    -> paginate(10);
    return view('lecturers.index',[
      'lecturers'=>$lecturers
    ]);
  }


  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    $lecturer = new Lecturer();
    return view('lecturers.create',[
      'lecturer'=>$lecturer,
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
    $lecturer = new Lecturer();
    $lecturer->fill($request->all());
    $lecturer->save();

    return redirect()->route('lecturer.index');
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
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    $lecturer = Lecturer::find($id);
    $club = Club::orderBy('code','asc')->get();

    if(!$lecturer) throw new ModelNotFoundException;

    return view('lecturers.edit',[
      'lecturer'=>$lecturer,
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
    $lecturer = Lecturer::find($id);
    if(!$lecturer) throw new ModelNotFoundException;
    $lecturer->fill($request->all());
    $club_code = $request->input('club_code');
    $lecturer->clubs()->sync($club_code);

    $lecturer->save();

    return redirect()->route('lecturer.index');
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
    $lecturer = Lecturer::find($id);
    if(!$lecturer) throw new ModelNotFoundException;
    return view('lecturers.join',  [
      'lecturer'=>$lecturer,
      'club'=>$club
    ]);
  }

  public function __construct()
  {
    $this->middleware('auth');
  }
}

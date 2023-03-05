<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;


class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $students=new Student();
        $students->fname=$request->input('fname');
        $students->lname=$request->input('lname');
        $students->email=$request->input('email');
        $students->password=$request->input('password');

        $students->save();
        return response()->json($students);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $students=Student::all();
        return response()->json($students);
    }
      
    public function showbyid($id)
     
    {
        $students=Student::find($id);
        return response()->json($students);
    }



    public function updatebyid( Request $request, $id)
{

    $students=Student::find($id);

    $students->fname=$request->input('fname');
    $students->lname=$request->input('lname');
    $students->email=$request->input('email');
    $students->password=$request->input('password');

    $students->save();
    return response()->json($students);
}
   

public function deletebyid( Request $request, $id)
{


    $students=Student::find($id);
    $students->delete();
    return response()->json($students);

}

    }


    
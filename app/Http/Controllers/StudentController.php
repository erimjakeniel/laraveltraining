<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Human;
use DB;
class StudentController extends Controller
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
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'email' => 'required','unique',
            'age' => 'required',
            'gender' => 'required',
            'address' => 'required',

        ]);
        $human = new Human([
            'first_name' => $request->get('first_name'),
            'middle_name' => $request->get('middle_name'),
            'last_name' => $request->get('last_name'),
            'email' => $request->get('email'),
            'age' => $request->get('age'),
            'gender' => $request->get('gender'),
            'address' => $request->get('address'),
            
        ]);
        $human->save();
        // return redirect()->route('welcome');
        return redirect('/retrieve');
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
        $human = Human::find($id);
        if(!$human){
            return abort(404);
        }
        // DB::table('students')->where('id',$id)->update();
        return view('edit',compact('human'));
        // return view('student.edit');
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
      
        $this->validate($request,[
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'email' => 'required','unique',
            'age' => 'required',
            'gender' => 'required',
            'address' => 'required',

        ]); 
        // dd($request->all());
        $human = Human::find($id);
        $human->first_name = $request->get('first_name');
        $human->middle_name= $request->get('middle_name');
        $human->last_name = $request->get('last_name');
        $human->email = $request->get('email');
        $human->age =$request->get('age');
        $human->gender = $request->get('gender');
        $human->address = $request->get('address');
        $human->save();
        return redirect('retrieve')->with('success','Student Updated');
        // $student = new Student([
        //     'first_name' => $request->get('first_name'),
        //     'middle_name' => $request->get('middle_name'),
        //     'last_name' => $request->get('last_name'),
        //     'email' => $request->get('email'),
        //     'age' => $request->get('age'),
        //     'gender' => $request->get('gender'),
        //     'address' => $request->get('address'),
            
        // ]);
        // $student->save();
        // // return redirect()->route('welcome');
        // return redirect('/student/id/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('humans')->where('id',$id)->delete();
        return redirect('retrieve');
    }

    public function welcome(Request $request){
        // dd(Human::get());
        $human = Human::all();
        // $humans =Human::where('id',$request->id)->get();
        return view('retrieve',['humans'=>$human]);
    }
}

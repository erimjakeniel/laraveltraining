<?php

namespace App\Http\Controllers;
use App\Models\Humans;
use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    public function show(){

        return view('welcome');
    }
    public function laravel(){
        return view('laravel');
    }

public function controller(Request $request){
    $human = Humans::all(); ///----getting all
   // $human = Human::whereId($request->id)->get();  ---getting by ID
   //$human = Human::whereFirstName($request->id)->get(); --getting firstname
    //$human = Human::where('first_name','=',$request->id)->get(); --getting firstname having equal
    //$human = Human::where('first_name',$request->id)->get(); --getting firstname having no equal 

    return view('retrieve',['humans'=>$human]);
                            //,compact('humans)
}



// public function adddata(){
//      $data = ['first_name'=>'Jakeniel','middle_name'=> 'Remitre','last_name'=> 'Erim','email'=>'jknlxcx@gmail.com','age'=>'20','gender'=>'1','address'=>'Negros Oriental Philippines'];
//      $data = ['first_name'=>'Mellyne','middle_name'=> 'Rebuyas','last_name'=> 'Nadela','email'=>'nadelamg@gmail.com','age'=>'20','gender'=>'2','address'=>'Negros Oriental Philippines'];
//      $data = ['first_name'=>'Grace','middle_name'=> 'Paredes','last_name'=> 'Laborada','email'=>'laboradag@gmail.com','age'=>'20','gender'=>'2','address'=>'Negros Oriental Philippines'];
//      $data = ['first_name'=>'Raul','middle_name'=> 'Empiales','last_name'=> 'Flores','email'=>'floresr@gmail.com','age'=>'20','gender'=>'1','address'=>'Negros Oriental Philippines'];
//      $data = ['first_name'=>'Mhar','middle_name'=> 'Edullantes','last_name'=> 'Oyangoren','email'=>'jknlxcx@gmail.com','age'=>'20','gender'=>1,'address'=>'Negros Oriental Philippines'];
//      $data = ['first_name'=>'Abdul','middle_name'=> 'Aziz','last_name'=> 'Mamarinta','email'=>'mamarintaz@gmail.com','age'=>'20','gender'=>1,'address'=>'Cebu Philippines'];
//      $data = ['first_name'=>'Harvey','middle_name'=> 'Bohol','last_name'=> 'Aparece','email'=>'aparecehar@gmail.com','age'=>'19','gender'=>1,'address'=>'Bohol Philippines'];
     
//      DB::table('humans')->insert($data);
// }



}
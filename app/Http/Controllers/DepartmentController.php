<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    //

    public function index(){

        $departments = DB::table('content')->select('departament')->distinct('departament')->orderBy('departament')->get();
        $doctors = DB::table('content')->select('doctor', 'specialitati', 'departament')->distinct('specialitati')->distinct('doctor')->get();
        // var_dump($departments);
       
        return view('departments', ['departments'=>$departments, 'doctors'=>$doctors]);

    }



    public function populateNavigation(){


        function array_push_assoc($array, $key, $value){
            $array[$key] = $value;
            return $array;
            }

        $departments = DB::table('content')->select('departament')->distinct('departament')->orderBy('departament')->get();
        $doctorsMeniu = array();


        foreach ($departments as $department) {
           
            $doctors = DB::table('content')->select('doctor')->distinct('doctor')->where('departament','=', $department->departament)->get();
            $doctorsArr = array();
            foreach($doctors as $doctor){

               array_push($doctorsArr, $doctor->doctor);
                
                
             }

            $doctorsMeniu = array_push_assoc($doctorsMeniu, $department->departament , $doctorsArr);

        }



        $specialsMeniu = array();
        foreach($departments as $department){
            $specials = DB::table('content')->select('specialitati')->distinct('specialitati')->where('departament','=', $department->departament)->get();

            $specialsArr = array();
            foreach($specials as $special){
                array_push($specialsArr, $special->specialitati);


            }

            $specialsMeniu = array_push_assoc($specialsMeniu, $department->departament, $specialsArr);

        }









        
        session(['doctorsMeniu'=>$doctorsMeniu]);
        session(['specialsMeniu'=>$specialsMeniu]);

        return view('index');

    }


    
    
}

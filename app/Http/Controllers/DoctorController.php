<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class DoctorController extends Controller
{
    public function index(){


        function array_push_assoc($array, $key, $value){
            $array[$key] = $value;
            return $array;
            }


        $doctors = DB::table('content')->select(['doctor',  'photo_path'])->distinct('doctor')->orderby('doctor')->get();
            // var_dump($doctors);
        $departmentsDocs = array();


        foreach ($doctors as $doctor ) {
     
            $departments = DB::table('content')->select('departament')->distinct('departament')->where('doctor','=', $doctor->doctor)->get();
            $departmentsArr = array();
            foreach($departments as $department){

               array_push($departmentsArr, $department->departament);
          
                
             }
         
            $departmentsDocs = array_push_assoc($departmentsDocs, $doctor->doctor , $departmentsArr);
         
            
        }

        
        session(['depDocs' => $departmentsDocs]);

            return view('doctors', ['doctors'=>$doctors]);
    }





    public function displayProfile(Request $request){

        function array_push_assoc($array, $key, $value){
            $array[$key] = $value;
            return $array;
            }


        $doctorName = $request->doctor ;

        $specials = DB::table('content')->select('specialitati')->distinct('specialitati')->where('doctor', '=', $doctorName)->get();
        $specialsArr = array();
        
        foreach($specials as $special){
            if($special->specialitati == null){
                $procedures = DB::table('content')->select('procedura', 'price')->where('doctor', '=', $doctorName)->get();
            } else {
            $procedures = DB::table('content')->select('procedura', 'price')->where('specialitati', '=', $special->specialitati)->get();
            }
            // var_dump($procedures);
            $proceduresArr = array();
            foreach($procedures as $procedure){

                    array_push($proceduresArr, $procedure);
            }
            
            $specialsArr  = array_push_assoc($specialsArr, $special->specialitati, $proceduresArr);

        }
        // var_dump($specialsArr);
        $doctor = DB::table('doctors')->select('*')->distinct()->where('nume', '=', $doctorName)->limit(1)->get();
    
        
        
    return view('profile',['specials'=>$specialsArr, 'doctor'=>$doctor]);

    }

    
}

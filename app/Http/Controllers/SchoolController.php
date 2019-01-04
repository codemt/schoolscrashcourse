<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schools;
class SchoolController extends Controller
{
    

        function getSchools(){

                    $allSchools = Schools::all();

                  //  return view('schools.index')->compact('id','name','')
                    return view('schools.index')->with('schools',$allSchools);

        }

        function editSchools($id){

                $school = Schools::find($id);
                
                return view('schools.edit')->with('school',$school);
            
        }

        function updateSchools(Request $request){


                    $school_id = $request->id;

                    $update_school = Schools::find($school_id);

                    $update_school->school_name = $request->name;
                    $update_school->school_address = $request->address;
                    $update_school->school_description = $request->description;


                    $update_school->save();

                    return  $update_school;
        }

        function deleteSchools(){


            
        }





}

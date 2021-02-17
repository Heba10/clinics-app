<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clinic;
use App\Branch;

class ClinicController extends Controller
{
       //index
       public function index() {
        $clinics = Clinic::paginate(3);
        return view('clinics.index', [
            'clinics'=> $clinics,
            ]);
        }


    //show
    public function show()
    {
        $branchs = Branch::all();
        //first 
       //take the id from url param
       $request = request();
       $clinicId = $request->clinic;
        //sec
       //query to retrieve the clinic by id
       $clinic = Clinic::find($clinicId);
      
        //theard
        //key->value 
       //send the value to the view
       return view('clinics.show',[
           'clinic' => $clinic,
            'branchs' => $branchs,
      
       ]);

       }

}

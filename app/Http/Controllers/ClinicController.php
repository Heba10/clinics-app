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
       
       $request = request();
       $clinicId = $request->clinic;
       
       $clinic = Clinic::find($clinicId);
       
       $branchs= Branch::where('clinic_id',$clinicId)->get();
       //dd($branchs);
        
       //send the value to the view
       return view('clinics.show',[
           'clinic' => $clinic,
            'branchs' => $branchs,
      
       ]);

       }

}

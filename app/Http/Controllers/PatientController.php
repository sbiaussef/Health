<?php

namespace App\Http\Controllers;

use App\RendezVous;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    //

    public function rendezvous()
    {
        return view('rendezvous');
    }


    public function addrv(Request $request)
    {
        $this->validate(
            dt=> 'required|date_format:d/m/Y|after:tomorrow',

        )
        if($request->isMethod('post')&& $request->dt!=null && $request->tm!=null && $request->remarque!=null)
        {
            $rendezvous=new Rendezvous();

            $rendezvous->date=$request->dt;
            $rendezvous->time=$request->tm;

            $rendezvous->remarque=$request->remarque;
            $rendezvous->patient_id=$request->id;
            $rendezvous->save();
            return redirect('home');
        }
        else{echo '<script> alert ("remplir tout les champs!!");</script>';}



    }
}

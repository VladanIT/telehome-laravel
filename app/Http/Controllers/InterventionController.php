<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Intervention;

class InterventionController extends Controller
{
    public function store(Request $request){

        $intervention = new Intervention();
        $intervention->description = $request->get('descriptionIntervention');
        $intervention->date = $request->get('dateIntervention');
        $intervention->consumer_id = $request->get('consumerIdIntervention');

        $intervention->store();

        return redirect()->route('home');
    }
}

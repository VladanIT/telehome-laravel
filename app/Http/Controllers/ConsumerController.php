<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consumer;
use App\Models\Intervention;

class ConsumerController extends Controller
{
    public function __construct(){
        $consumers = new Consumer();
        $this->consumers['consumers'] = $consumers->getAll();
    }

    public function getAllConsumers(){
        return view('pages.home', $this->consumers);
    }

    public function getConsumerInfo($id){

        // GETTING A CERTAIN CONSUMER
        $consumer = new Consumer();
        $this->consumerData['consumer'] = $consumer->getConsumerById($id);


        // GETTING ALL INTERVENTIONS FOR A CERTAIN CONSUMER
        $interventions = new Intervention();
        $this->interventionData['intervention'] = $interventions->getIntervention($id);


        return view('pages.info', $this->consumerData, $this->interventionData);
    }

    public function delete($id){
        $consumer = new Consumer();
        $this->consumer['consumer'] = $consumer->getConsumerById($id);
        $consumerID = $this->consumer['consumer']->id_consumer;

        $intervention = new Intervention();
        $intervention->deleteIntervention($id);
        $consumer->deleteConsumer($consumerID);

        return redirect()->route('home');
    }

    public function greska(){
        return view('pages.greska');
    }

    public function store(Request $request){
        $consumers = new Consumer();
        $consumers->consumerId = $request->get('consumerId');
        $consumers->first_name = $request->get('firstName');
        $consumers->last_name = $request->get('lastName');
        $consumers->address = $request->get('address');
        $consumers->place = $request->get('place');
        $consumers->packet = $request->get('packet');

        $consumers->store();

        return redirect()->route('home');
    }
}

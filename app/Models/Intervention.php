<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Intervention extends Model
{
    public $description;
    public $date;
    public $consumer_id;

    public function getIntervention($id){
        $data = DB::table('th_interventions')
            ->where('consumer_id', $id)
            ->get();
        return $data;
    }

    public function deleteIntervention($id){
        $data = DB::table("th_interventions")
            ->where('consumer_id', $id)
            ->delete();

        return $data;
    }

    public function store(){
        $rez = DB::table('th_interventions')
            ->insert([
            'description' => $this->description,
            'date' => $this->date,
            'consumer_id' => $this->consumer_id
        ]);
        return $rez;
    }
}

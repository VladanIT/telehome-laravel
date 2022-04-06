<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Intervention extends Model
{
    public $description;
    public $date;
    public $type_id;
    public $consumer_id;

    public function getIntervention($id){
        $data = DB::table('th_interventions')
            ->join('th_type', 'th_type.id_type', '=', 'th_interventions.type_id')
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
        $data = DB::table('th_interventions')
            ->insert([
            'description' => $this->description,
            'date' => $this->date,
            'type_id' => $this->type_id,
            'consumer_id' => $this->consumer_id
        ]);
        return $data;
    }

    public function getTypes(){
        $data = DB::table('th_type')
            ->get();

        return $data;
    }
}

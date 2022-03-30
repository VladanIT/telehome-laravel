<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Consumer extends Model
{
    public $first_name;
    public $last_name;
    public $consumerId;
    public $address;
    public $place;
    public $packet;


    public function getAll(){
        $data = DB::table('th_consumers')
            ->get();
        return $data;
    }

    public function getConsumerById($consumerId){
        $data = DB::table('th_consumers')
            ->get()
            ->first();
        return $data;
    }

    public function deleteConsumer($id){
        return \DB::table("th_consumers")
            ->where('id_consumer', $id)
            ->delete();
    }

    public function store(){
        $rez = DB::table('th_consumers')
            ->insert([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'consumerId' => $this->consumerId,
            'address' => $this->address,
            'place' => $this->place,
            'packet' => $this->packet
        ]);
        return $rez;
    }
}

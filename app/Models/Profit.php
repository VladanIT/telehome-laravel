<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Profit extends Model
{
    public function getProfit(){
        $data = DB::table('th_interventions')
            ->join('th_type', 'th_type.id_type', '=', 'th_interventions.type_id')
            ->get();
        return $data;

    }

    public function getProfitForMonth(){

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profit;

class ProfitController extends Controller
{
    public function getProfit(){
        $profit = new Profit();
        $this->profit['intervention'] = $profit->getProfit();

        return view('pages.profit', $this->profit);
    }
}

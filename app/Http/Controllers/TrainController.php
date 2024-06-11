<?php

namespace App\Http\Controllers;

use App\Models\train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index() {
        //$trainList = train::all();
        //dd($trainList);
        $trainList = Train::whereDate('departure_date', now()->toDateString())->get();
        
        return view('home_train', compact('trainList'));
    }
}

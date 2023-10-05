<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Week;

class WeekController extends Controller
{
    public function index() {
    foreach (Week::all() as $week) {
        echo $week->day." - ";
        // echo (' - ');
        echo $week->discription."<br />"; 
        
                
    }
}
//      {
//    // for ($i = 1; i<6; $i++){
//     $week=Week::find(1);
//     dump($week);
//     //}
//     }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sport;

class sportController extends Controller
{
    public function index() {
        $sport=sport::find(1);
        dd($sport);
       
        
    }
}

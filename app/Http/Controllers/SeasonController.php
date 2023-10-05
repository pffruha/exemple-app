<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Season;

class SeasonController extends Controller
{
    public function index() { 
        $season=Season::find(1);
        dd($season);

    }
}

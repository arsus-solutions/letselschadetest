<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccidentController extends Controller
{
    public function verkeersongeval()
    {
        return view('accidents.verkeersongeval');
    }

    public function bedrijfsongeval()
    {
        return view('accidents.bedrijfsongeval');
    }

    public function ongevalDoorDieren()
    {
        return view('accidents.ongeval-door-dieren');
    }

    public function ongevalDoorWegdek()
    {
        return view('accidents.ongeval-door-wegdek');
    }
} 
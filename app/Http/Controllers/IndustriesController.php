<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndustriesController extends Controller
{
    public function residential()
    {
        return view('Industries.residential');
    }

    public function commercial()
    {
        return view('Industries.commercial');
    }

    public function industrial()
    {
        return view('Industries.industrial');
    }

    public function healthcare()
    {
        return view('Industries.healthcare');
    }

    public function education()
    {
        return view('Industries.education');
    }

    public function retail()
    {
        return view('Industries.retail');
    }
}
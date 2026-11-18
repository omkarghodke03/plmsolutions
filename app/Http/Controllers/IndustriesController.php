<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndustriesController extends Controller
{
    public function Residential()
    {
        return view('industries.Residential');
    }
    public function Commercial()
    {
        return view('industries.Commercial');
    }
    public function Educational()
    {
        return view('industries.Educational');
    }

    public function HealthCare()
    {
        return view('industries.HealthCare');
    }
    public function Retail()
    {
        return view('industries.Retail');
    }
    public function Infrastructure()
    {
        return view('industries.Infrastructure');
    }
    
    
    public function Automotive()
    {
        return view('industries.Automotive');
    }
    public function HeavyEngineering()
    {
        return view('industries.HeavyEngineering');
    }
    public function IndustrialAndHeavyEquipment()
    {
        return view('industries.IndustrialAndHeavyEquipment');
    }
    public function MedicalDevices()
    {
        return view('industries.MedicalDevices');
    }
    public function MachineryAndRobotics()
    {
        return view('industries.MachineryAndRobotics');
    }
    
    
    public function PrecisionManufacturing()
    {
        return view('industries.PrecisionManufacturing');
    }
    public function ConsumerProducts()
    {
        return view('industries.ConsumerProducts');
    }
    public function ElectricEnclosure()
    {
        return view('industries.ElectricEnclosure');
    }
    public function Transformer()
    {
        return view('industries.Transformer');
    }
    
}
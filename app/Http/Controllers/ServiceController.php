<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    // BIM Services
    public function architecturalBim()   { return view('service.architectural-bim'); }
    public function structuralBim()      { return view('service.structural-bim'); }
    public function mepBim()             { return view('service.mep-bim'); }
    public function asBuiltDocumentation() { return view('service.as-built-documentation'); }
    public function clashDetection()     { return view('service.clash-detection'); }
    public function scheduling4d5d()     { return view('service.4d-5d-scheduling'); }
    public function lodManagement()      { return view('service.lod-management'); }
    public function scanToBim()          { return view('service.scan-to-bim'); }

    // CAD/Engineering Services
    public function drafting2d()         { return view('service.2d-drafting'); }
    public function modeling3d()         { return view('service.3d-modeling'); }
    public function productDesign()      { return view('service.product-design'); }
    public function feaAnalysis()        { return view('service.fea-analysis'); }
    public function cfdSimulation()      { return view('service.cfd-simulation'); }
    public function thermalAnalysis()    { return view('service.thermal-analysis'); }

    // Staffing & PLM Services
    public function contractStaffing()   { return view('service.contract-staffing'); }
    public function permanentStaffing()  { return view('service.permanent-staffing'); }
    public function plmImplementation()  { return view('service.plm-implementation'); }
    public function cadMigration()       { return view('service.cad-migration'); }
}
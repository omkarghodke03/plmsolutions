<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupportTicketController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndustriesController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\CookieConsentController;
use App\Http\Controllers\LinkedInOAuthController;
use App\Http\Controllers\CaseStudypostController;

Route::get('/case-studies', [CaseStudypostController::class, 'index']) ->name('case-studies.index');
Route::get('/case-studies/{slug}', [CaseStudypostController::class, 'show']) ->name('case-studies.show');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [PageController::class, 'aboutUs'])->name('about-us');
Route::get('/leadership', [PageController::class, 'leadership'])->name('leadership');
Route::get('/work-culture', [PageController::class, 'workCulture'])->name('workculture');
Route::get('/why-milestone', [PageController::class, 'whyMilestone'])->name('whymilestone');

// Category Pages
Route::get('/aec-solutions', [ServiceController::class, 'AECSolutions'])->name('aec-solutions');
Route::get('/engineering-solutions', [ServiceController::class, 'EngineeringSolutions'])->name('engineering-solutions');
Route::get('/data-analytics-solutions', [ServiceController::class, 'DataAnalyticsSolutions'])->name('data-analytics-solutions');
Route::get('/digital-twin-solutions', [ServiceController::class, 'DigitalTwinSolutions'])->name('digital-twin-solutions');

// Sub-Category Pages AEC
Route::get('/aec-solutions/architecture', [ServiceController::class, 'Architecture'])->name('architecture');
Route::get('/aec-solutions/structural', [ServiceController::class, 'Structural'])->name('structural');
Route::get('/aec-solutions/mep', [ServiceController::class, 'MEP'])->name('mep');
Route::get('/aec-solutions/bim', [ServiceController::class, 'BIM'])->name('bim');

// Sub-Category Pages ES
Route::get('/engineering-solutions/mechanical-design', [ServiceController::class, 'MechanicalDesign'])->name('mechanical-design');
Route::get('/engineering-solutions/electrical-design', [ServiceController::class, 'ElectricalDesign'])->name('electrical-design');
Route::get('/engineering-solutions/millwork-design', [ServiceController::class, 'MillworkDesign'])->name('millwork-design');

// Sub-Category Pages Data Analytics
Route::get('/data-analytics-solutions/data-analytics', [ServiceController::class, 'DataAnalytics'])->name('data-analytics');
Route::get('/data-analytics-solutions/bi-reporting', [ServiceController::class, 'BiReporting'])->name('bi-reporting');

// Specific Pages AEC-Architecture
Route::get('/aec-solutions/architecture/architectural-3d-modeling-services', [ServiceController::class, 'Architectural3DModeling'])->name('architectural-3d-modeling-services');
Route::get('/aec-solutions/architecture/architectural-2d-drafting-services', [ServiceController::class, 'Architectural2DDrafting'])->name('architectural-2d-drafting-services');
Route::get('/aec-solutions/architecture/architectural-bim-modeling-services', [ServiceController::class, 'ArchitecturalBimModeling'])->name('architectural-bim-modeling-services');
Route::get('/aec-solutions/architecture/revit-bim-services', [ServiceController::class, 'RevitBim'])->name('revit-bim-services');
Route::get('/aec-solutions/architecture/architectural-construction-services', [ServiceController::class, 'ArchitecturalConstruction'])->name('architectural-construction-services');
Route::get('/aec-solutions/architecture/architectural-permit-services', [ServiceController::class, 'ArchitecturalPermit'])->name('architectural-permit-services');
Route::get('/aec-solutions/architecture/modular-bim-services', [ServiceController::class, 'ModularBim'])->name('modular-bim-services');
Route::get('/aec-solutions/architecture/3d-rendering-services', [ServiceController::class, 'Rendering3D'])->name('3d-rendering-services');
Route::get('/aec-solutions/architecture/lighting-design-services', [ServiceController::class, 'LightingDesign'])->name('lighting-design-services');
Route::get('/aec-solutions/architecture/as-built-drawing-services', [ServiceController::class, 'AsBuiltDrawing'])->name('as-built-drawing-services');


// Specific Pages AEC-Structural
Route::get('/aec-solutions/structural/structural-bim-services', [ServiceController::class, 'StructuralBim'])->name('structural-bim-services');
Route::get('/aec-solutions/structural/precast-detailing-services', [ServiceController::class, 'PrecastDetailing'])->name('precast-detailing-services');
Route::get('/aec-solutions/structural/structural-3d-modeling-services', [ServiceController::class, 'Structural3DModeling'])->name('structural-3d-modeling-services');
Route::get('/aec-solutions/structural/structural-2d-drafting-services', [ServiceController::class, 'Structural2DDrafting'])->name('structural-2d-drafting-services');
Route::get('/aec-solutions/structural/structural-construction-documentation-services', [ServiceController::class, 'StructuralConstructionDocumentation'])->name('structural-construction-documentation-services');

// Specific Pages AEC-MEP
Route::get('/aec-solutions/mep/mep-bim-modeling-services', [ServiceController::class, 'MepBimModeling'])->name('mep-bim-modeling-services');
Route::get('/aec-solutions/mep/mep-drafting-services', [ServiceController::class, 'MepDrafting'])->name('mep-drafting-services');
Route::get('/aec-solutions/mep/mep-coordination-services', [ServiceController::class, 'MepCoordination'])->name('mep-coordination-services');
Route::get('/aec-solutions/mep/mep-shop-drawing-services', [ServiceController::class, 'MepShopDrawing'])->name('mep-shop-drawing-services');
Route::get('/aec-solutions/mep/hvac-drafting-services', [ServiceController::class, 'HvacDrafting'])->name('hvac-drafting-services');
Route::get('/aec-solutions/mep/electrical-drafting-services', [ServiceController::class, 'ElectricalDrafting'])->name('electrical-drafting-services');
Route::get('/aec-solutions/mep/fire-fighting-shop-drawing-services', [ServiceController::class, 'FireFightingShopDrawing'])->name('fire-fighting-shop-drawing-services');

// Specific Pages AEC-BIM
Route::get('/aec-solutions/bim/bim-modeling-services', [ServiceController::class, 'BimModeling'])->name('bim-modeling-services');
Route::get('/aec-solutions/bim/bim-coordination-services', [ServiceController::class, 'BimCoordination'])->name('bim-coordination-services');
Route::get('/aec-solutions/bim/revit-family-creation-services', [ServiceController::class, 'RevitFamilyCreation'])->name('revit-family-creation-services');
Route::get('/aec-solutions/bim/shop-drawing-services', [ServiceController::class, 'ShopDrawings'])->name('shop-drawing-services');
Route::get('/aec-solutions/bim/scan-to-bim-services', [ServiceController::class, 'ScanToBim'])->name('scan-to-bim-services');
Route::get('/aec-solutions/bim/4d-bim-services', [ServiceController::class, 'Bim4D'])->name('4d-bim-services');
Route::get('/aec-solutions/bim/5d-bim-services', [ServiceController::class, 'Bim5D'])->name('5d-bim-services');

// Specific Pages ES-MechanicalDesign
Route::get('/engineering-solutions/mechanical-design/product-design-and-development-services', [ServiceController::class, 'ProductDesignAndDevelopment'])->name('product-design-and-development-services');
Route::get('/engineering-solutions/mechanical-design/cad-drafting-and-detailing-services', [ServiceController::class, 'CadAndDetailing'])->name('cad-drafting-and-detailing-services');
Route::get('/engineering-solutions/mechanical-design/manufacturing-support-services', [ServiceController::class, 'ManufacturingSupport'])->name('manufacturing-support-services');
Route::get('/engineering-solutions/mechanical-design/automotive-design-services', [ServiceController::class, 'AutomotiveDesign'])->name('automotive-design-services');
Route::get('/engineering-solutions/mechanical-design/finite-element-analysis-services', [ServiceController::class, 'FiniteElementAnalysis'])->name('finite-element-analysis-services');
Route::get('/engineering-solutions/mechanical-design/engineering-documentation-services', [ServiceController::class, 'EngineeringDocumentation'])->name('engineering-documentation-services');
Route::get('/engineering-solutions/mechanical-design/value-engineering-value-analysis-services', [ServiceController::class, 'ValueEngineeringValueAnalysis'])->name('value-engineering-value-analysis-services');
Route::get('/engineering-solutions/mechanical-design/rapid-prototyping-services', [ServiceController::class, 'RapidPrototyping'])->name('rapid-prototyping-services');

// Specific Pages ES-ElectricalDesign
Route::get('/engineering-solutions/electrical-design/electrical-system-design-services', [ServiceController::class, 'ElectricalSystemDesign'])->name('electrical-system-design-services');
Route::get('/engineering-solutions/electrical-design/electrical-panel-design-services', [ServiceController::class, 'ElectricalPanelDesign'])->name('electrical-panel-design-services');
Route::get('/engineering-solutions/electrical-design/automation-design-services', [ServiceController::class, 'AutomationDesign'])->name('automation-design-services');

//Route::get('/engineering-solutions/electrical-design/schematics-services', [ServiceController::class, 'Schematics'])->name('schematics-services');
//Route::get('/engineering-solutions/electrical-design/3d-routing-services', [ServiceController::class, 'Routing3D'])->name('3d-routing-services');
//Route::get('/engineering-solutions/electrical-design/hmi-design-services', [ServiceController::class, 'HmiDesign'])->name('hmi-design-services');
//Route::get('/engineering-solutions/electrical-design/plc-programming-services', [ServiceController::class, 'PlcProgramming'])->name('plc-programming-services');

// Specific Pages ES-MillworkDesign
Route::get('/engineering-solutions/millwork-design/commercial-millwork-services', [ServiceController::class, 'CommercialMillwork'])->name('commercial-millwork-services');
Route::get('/engineering-solutions/millwork-design/residential-millwork-services', [ServiceController::class, 'ResidentialMillwork'])->name('residential-millwork-services');
Route::get('/engineering-solutions/millwork-design/hospitality-millwork-services', [ServiceController::class, 'HospitalityMillwork'])->name('hospitality-millwork-services');
Route::get('/engineering-solutions/millwork-design/retail-and-store-millwork-services', [ServiceController::class, 'RetailAndStoreMillwork'])->name('retail-and-store-millwork-services');
Route::get('/engineering-solutions/millwork-design/healthcare-and-institutional-millwork-services', [ServiceController::class, 'HealthcareAndInstitutionalMillwork'])->name('healthcare-and-institutional-millwork-services');
Route::get('/engineering-solutions/millwork-design/custom-cabinetry-and-casework-millwork-services', [ServiceController::class, 'CustomCabinetryAndCaseworkMillwork'])->name('custom-cabinetry-and-casework-millwork-services');
Route::get('/engineering-solutions/millwork-design/custom-furniture-millwork-services', [ServiceController::class, 'CustomFurnitureMillwork'])->name('custom-furniture-millwork-services');
Route::get('/engineering-solutions/millwork-design/architectural-millwork-services', [ServiceController::class, 'ArchitecturalMillwork'])->name('architectural-millwork-services');
Route::get('/engineering-solutions/millwork-design/interior-fit-out-millwork-services', [ServiceController::class, 'InteriorFitOutMillwork'])->name('interior-fit-out-millwork-services');
Route::get('/engineering-solutions/millwork-design/specialty-and-custom-millwork-services', [ServiceController::class, 'SpecialtyAndCustomMillwork'])->name('specialty-and-custom-millwork-services');

// Specific Pages DA-DataAnalytics
Route::get('/data-analytics-solutions/data-analytics/campaign-analysis-services', [ServiceController::class, 'CampaignAnalysis'])->name('campaign-analysis-services');
Route::get('/data-analytics-solutions/data-analytics/competitor-intelligence-services', [ServiceController::class, 'CompetitorIntelligence'])->name('competitor-intelligence-services');
Route::get('/data-analytics-solutions/data-analytics/sales-analytics-services', [ServiceController::class, 'SalesAnalytics'])->name('sales-analytics-services');
Route::get('/data-analytics-solutions/data-analytics/customer-analytics-services', [ServiceController::class, 'CustomerAnalytics'])->name('customer-analytics-services');
Route::get('/data-analytics-solutions/data-analytics/demand-planning-services', [ServiceController::class, 'DemandPlanning'])->name('demand-planning-services');
Route::get('/data-analytics-solutions/data-analytics/sentimental-analysis-services', [ServiceController::class, 'SentimentalAnalysis'])->name('sentimental-analysis-services');

// Specific Pages DA-BIReporting
Route::get('/data-analytics-solutions/bi-reporting/data-preparation-services', [ServiceController::class, 'DataPreparation'])->name('data-preparation-services');
Route::get('/data-analytics-solutions/bi-reporting/data-integration-services', [ServiceController::class, 'DataIntegration'])->name('data-integration-services');
Route::get('/data-analytics-solutions/bi-reporting/dashboard-services', [ServiceController::class, 'Dashboard'])->name('dashboard-services');

// Specific Pages DigitalTwin
Route::get('/digital-twin-solutions/revit-bim-model-enhancement-services', [ServiceController::class, 'RevitBimModelEnhancement'])->name('revit-bim-model-enhancement-services');
Route::get('/digital-twin-solutions/asset-tagging-services', [ServiceController::class, 'AssetTagging'])->name('asset-tagging-services');
Route::get('/digital-twin-solutions/cobie-data-creation-services', [ServiceController::class, 'CobieDataCreation'])->name('cobie-data-creation-services');
Route::get('/digital-twin-solutions/equipment-metadata-integration-services', [ServiceController::class, 'EquipmentMetadataIntegration'])->name('equipment-metadata-integration-services');
Route::get('/digital-twin-solutions/qr-code-integration-services', [ServiceController::class, 'QrCodeIntegration'])->name('qr-code-integration-services');
Route::get('/digital-twin-solutions/facility-database-creation-services', [ServiceController::class, 'FacilityDatabaseCreation'])->name('facility-database-creation-services');
Route::get('/digital-twin-solutions/custom-dashboard-development-services', [ServiceController::class, 'CustomDashboardDevelopment'])->name('custom-dashboard-development-services');




Route::prefix('industries')->group(function () {

    Route::get('/residential', [IndustriesController::class, 'Residential']);
    Route::get('/commercial', [IndustriesController::class, 'Commercial']);
    Route::get('/educational', [IndustriesController::class, 'Educational']);
    
    Route::get('/health-care', [IndustriesController::class, 'HealthCare']);
    Route::get('/retail', [IndustriesController::class, 'Retail']);
    Route::get('/infrastructure', [IndustriesController::class, 'Infrastructure']);
    
    Route::get('/automotive', [IndustriesController::class, 'Automotive']);
    Route::get('/heavy-engineering', [IndustriesController::class, 'HeavyEngineering']);
    Route::get('/industrial-and-heavy-equipment', [IndustriesController::class, 'IndustrialAndHeavyEquipment']);
    Route::get('/medical-devices', [IndustriesController::class, 'MedicalDevices']);
    Route::get('/machinery-and-robotics', [IndustriesController::class, 'MachineryAndRobotics']);
    
    Route::get('/precision-manufacturing', [IndustriesController::class, 'PrecisionManufacturing']);
    Route::get('/consumer-products', [IndustriesController::class, 'ConsumerProducts']);
    Route::get('/electric-enclosure', [IndustriesController::class, 'ElectricEnclosure']);
    Route::get('/transformer', [IndustriesController::class, 'Transformer']);

});
// Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/careers', [JobController::class, 'index'])->name('jobs.index');
Route::get('/careers/{slug}', [JobController::class, 'show'])->name('jobs.show');




Route::middleware(['web'])->group(function () {
    Route::get('/linkedin/connect', [LinkedInOAuthController::class, 'connect'])
        ->name('linkedin.connect');

    Route::get('/linkedin/callback', [LinkedInOAuthController::class, 'callback'])
        ->name('linkedin.callback');

  
    Route::get('/linkedin/status', function () {
        return response()->json([
            'linkedin_connected' => session()->has('linkedin_token'),
            'linkedin_person_id' => session('linkedin_sub'),
            'linkedin_profile'   => session('linkedin_profile'),
        ]);
    });
});



Route::post('/job-application/apply', [JobApplicationController::class, 'apply'])
    ->name('job.application.apply');


Route::get('/search', [SearchController::class, 'index'])->name('search');
Route::get('/search/suggestions', [SearchController::class, 'suggestions'])->name('search.suggestions');

Route::post('/cookie-consent/save',[CookieConsentController::class, 'save'])->name('cookie-consent.save');


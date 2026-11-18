<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class ServiceController extends Controller
{
    
        // Category Pages
    public function AECSolutions() { return view('category/AECSolutions'); }
    public function EngineeringSolutions() { return view('category/EngineeringSolutions'); }
    public function DataAnalyticsSolutions() { return view('category/DataAnalyticsSolutions'); }
    public function DigitalTwinSolutions() { return view('category/DigitalTwinSolutions'); }

    // Sub-Category Pages AEC
    public function Architecture() { return view('subcategory/Architecture'); }
    public function Structural() { return view('subcategory/Structural'); }
    public function MEP() { return view('subcategory/MEP'); }
    public function BIM() { return view('subcategory/BIM'); }

    // Sub-Category Pages ES
    public function MechanicalDesign() { return view('subcategory/MechanicalDesign'); }
    public function ElectricalDesign() { return view('subcategory/ElectricalDesign'); }
    public function MillworkDesign() { return view('subcategory/MillworkDesign'); }

    // Sub-Category Pages Data Analytics
    public function DataAnalytics() { return view('subcategory/DataAnalytics'); }
    public function BiReporting() { return view('subcategory/BiReporting'); }

    // Specific Pages AEC-Architecture
    public function Architectural3DModeling() { return view('service/Architectural3DModeling'); }
    public function Architectural2DDrafting() { return view('service/Architectural2DDrafting'); }
    public function ArchitecturalBimModeling() { return view('service/ArchitecturalBimModeling'); }
    public function RevitBim() { return view('service/RevitBim'); }
    public function ArchitecturalConstruction() { return view('service/ArchitecturalConstruction'); }
    public function ArchitecturalPermit() { return view('service/ArchitecturalPermit'); }
    public function ModularBim() { return view('service/ModularBim'); }
    public function Rendering3D() { return view('service/Rendering3D'); }
    public function LightingDesign() { return view('service/LightingDesign'); }
    public function AsBuiltDrawing() { return view('service/AsBuiltDrawing'); }

    // Specific Pages AEC-Structural
    public function StructuralBim() { return view('service/StructuralBim'); }
    public function PrecastDetailing() { return view('service/PrecastDetailing'); }
    public function Structural3DModeling() { return view('service/Structural3DModeling'); }
    public function Structural2DDrafting() { return view('service/Structural2DDrafting'); }
    public function StructuralConstructionDocumentation() { return view('service/StructuralConstructionDocumentation'); }

    // Specific Pages AEC-MEP
    public function MepBimModeling() { return view('service/MepBimModeling'); }
    public function MepDrafting() { return view('service/MepDrafting'); }
    public function MepCoordination() { return view('service/MepCoordination'); }
    public function MepShopDrawing() { return view('service/MepShopDrawing'); }
    public function HvacDrafting() { return view('service/HvacDrafting'); }
    public function ElectricalDrafting() { return view('service/ElectricalDrafting'); }
    public function FireFightingShopDrawing() { return view('service/FireFightingShopDrawing'); }

    // Specific Pages AEC-BIM
    public function BimModeling() { return view('service/BimModeling'); }
    public function BimCoordination() { return view('service/BimCoordination'); }
    public function RevitFamilyCreation() { return view('service/RevitFamilyCreation'); }
    public function ShopDrawings() { return view('service/ShopDrawings'); }
    public function ScanToBim() { return view('service/ScanToBim'); }
    public function Bim4D() { return view('service/Bim4D'); }
    public function Bim5D() { return view('service/Bim5D'); }

    // Specific Pages ES-MechanicalDesign
    public function ProductDesignAndDevelopment() { return view('service/ProductDesignAndDevelopment'); }
    public function CadAndDetailing() { return view('service/CadAndDetailing'); }
    public function ManufacturingSupport() { return view('service/ManufacturingSupport'); }
    public function AutomotiveDesign() { return view('service/AutomotiveDesign'); }
    public function FiniteElementAnalysis() { return view('service/FiniteElementAnalysis'); }
    public function EngineeringDocumentation() { return view('service/EngineeringDocumentation'); }
    public function ValueEngineeringValueAnalysis() { return view('service/ValueEngineeringValueAnalysis'); }
    public function RapidPrototyping() { return view('service/RapidPrototyping'); }

    // Specific Pages ES-ElectricalDesign
    public function ElectricalSystemDesign() { return view('service/ElectricalSystemDesign'); }
    public function ElectricalPanelDesign() { return view('service/ElectricalPanelDesign'); }
    public function AutomationDesign() { return view('service/AutomationDesign'); }
    
    //public function Schematics() { return view('service/Schematics'); }
    //public function Routing3D() { return view('service/Routing3D'); }
    //public function HmiDesign() { return view('service/HmiDesign'); }
    //public function PlcProgramming() { return view('service/PlcProgramming'); }

    // Specific Pages ES-MillworkDesign
    public function CommercialMillwork() { return view('service/CommercialMillwork'); }
    public function ResidentialMillwork() { return view('service/ResidentialMillwork'); }
    public function HospitalityMillwork() { return view('service/HospitalityMillwork'); }
    public function RetailAndStoreMillwork() { return view('service/RetailAndStoreMillwork'); }
    public function HealthcareAndInstitutionalMillwork() { return view('service/HealthcareAndInstitutionalMillwork'); }
    public function CustomCabinetryAndCaseworkMillwork() { return view('service/CustomCabinetryAndCaseworkMillwork'); }
    public function CustomFurnitureMillwork() { return view('service/CustomFurnitureMillwork'); }
    public function ArchitecturalMillwork() { return view('service/ArchitecturalMillwork'); }
    public function InteriorFitOutMillwork() { return view('service/InteriorFitOutMillwork'); }
    public function SpecialtyAndCustomMillwork() { return view('service/SpecialtyAndCustomMillwork'); }

    // Specific Pages DA-DataAnalytics
    public function CampaignAnalysis() { return view('service/CampaignAnalysis'); }
    public function CompetitorIntelligence() { return view('service/CompetitorIntelligence'); }
    public function SalesAnalytics() { return view('service/SalesAnalytics'); }
    public function CustomerAnalytics() { return view('service/CustomerAnalytics'); }
    public function DemandPlanning() { return view('service/DemandPlanning'); }
    public function SentimentalAnalysis() { return view('service/SentimentalAnalysis'); }

    // Specific Pages DA-BIReporting
    public function DataPreparation() { return view('service/DataPreparation'); }
    public function DataIntegration() { return view('service/DataIntegration'); }
    public function Dashboard() { return view('service/Dashboard'); }

    // Specific Pages DigitalTwin
    public function RevitBimModelEnhancement() { return view('service/RevitBimModelEnhancement'); }
    public function AssetTagging() { return view('service/AssetTagging'); }
    public function CobieDataCreation() { return view('service/CobieDataCreation'); }
    public function EquipmentMetadataIntegration() { return view('service/EquipmentMetadataIntegration'); }
    public function QrCodeIntegration() { return view('service/QrCodeIntegration'); }
    public function FacilityDatabaseCreation() { return view('service/FacilityDatabaseCreation'); }
    public function CustomDashboardDevelopment() { return view('service/CustomDashboardDevelopment'); }
    
    
    
}
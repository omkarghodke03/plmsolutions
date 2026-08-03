<?php

namespace Database\Seeders;

use App\Models\CaseStudy;
use Illuminate\Database\Seeder;

class CaseStudySeeder extends Seeder
{
    public function run(): void
    {
        $studies = [
            [

'title'=>'Highway Cable-Stay Bridge — Steel Detailing',

'slug'=>'highway-cable-stay-bridge-steel-detailing',

'category'=>'Structural Services',

'industry_tag'=>'Transportation',

'cover_image'=>'/service-img/highway.jfif',

'short_description'=>'100% first-submission fabricator approval on shop drawings for a 420 m cable-stay bridge, delivered in 6 weeks.',

'client'=>'State Transport Authority',

'location'=>'Mumbai, India',

'service'=>'Structural Services',

'industry'=>'Transportation',

'timeline'=>'6 months',

'team_size'=>'8 engineers',



'project_overview'=>'Milestone PLM was engaged to deliver the full structural steel shop drawing package for a 420-metre cable-stay highway bridge — a prestige infrastructure project on one of India\'s high-speed national corridors. With a fabrication window locked to a 6-week delivery schedule and a zero-resubmission commitment to the client, every drawing had to be fabrication-ready on first issue.',



'challenge_heading'=>'What made this project complex',



'challenge_body'=>'Cable-stay bridges present some of the most demanding steel detailing challenges in the industry. The complex geometry of the pylon, stay anchors, deck sections, and connection nodes had to be modelled and detailed to millimetric precision — any error cascades directly to fabrication and site erection sequences.',



'challenge_points'=>[

'420-metre main span with asymmetric pylon geometry and 56 individual stay cable anchors',

'Non-prismatic deck sections requiring individual connection drawings for each panel',

'6-week delivery window with zero tolerance for fabrication-stage revisions',

'All drawings required to comply with IS 800:2007 and client-specific connection standards',

'Fabricator required SDS/2 connection files in addition to shop drawings'

],



'solution'=>'Milestone PLM deployed an eight-person structural detailing team led by a senior bridge specialist. We built the full Tekla Structures model from the engineer\'s structural analysis package, parameterising all connection types to allow rapid adjustment across repeated geometry. SDS/2 connection design files were delivered alongside each drawing issue.',



'results'=>'100% first-submission approval with zero RFIs from the fabricator.',



'approach_heading'=>'How Milestone PLM delivered',



'approach_body'=>'Milestone PLM deployed an eight-person structural detailing team led by a senior bridge specialist. We built the full Tekla Structures model from the engineer\'s structural analysis package, parameterising all connection types to allow rapid adjustment across repeated geometry. SDS/2 connection design files were delivered alongside each drawing issue.',



'key_deliverables'=>[

'Complete Tekla Structures fabrication model for the 420 m cable-stay bridge',

'Pylon, deck, stay anchor and approach span shop drawings — 347 sheets',

'SDS/2 connection design files for all primary connections',

'Erection sequencing drawings coordinating with the contractor\'s lift plan',

'Bolt and weld schedules in client format',

'3D DXF export files for CNC cutting profiles'

],



'delivery_process'=>[

['step'=>'01','title'=>'Model Build','body'=>'Developed the full Tekla Structures parametric model from the structural engineer\'s analysis files, establishing a single-source geometry for all disciplines.'],

['step'=>'02','title'=>'Connection Design','body'=>'Designed and modelled all primary and secondary connections in SDS/2, with peer review by the resident bridge specialist before incorporation into the Tekla model.'],

['step'=>'03','title'=>'Drawing Production','body'=>'Generated fabrication and erection drawings from the Tekla model, applying client title block standards and IS 800 annotation conventions across all 347 sheets.'],

['step'=>'04','title'=>'Review & Issue','body'=>'Conducted a three-pass internal QA review before first issue. All 347 sheets were approved by the fabricator on first submission with no revisions required.']

],



'gallery_images'=>['/service-img/highway-one.jfif','/service-img/highway-two.jfif','/service-img/highway-three.jfif'],



'gallery_caption'=>'HIGHWAY CABLE-STAY BRIDGE — STEEL DETAILING',



'testimonial_quote'=>'Milestone PLM delivered an exceptional level of detailing accuracy under an aggressive schedule. Every fabrication drawing was approved on first submission.',



'testimonial_name'=>'Rajesh Sharma',



'testimonial_role'=>'Project Director, State Transport Authority',



'related_service_label'=>'Structural Services',



'related_service_url'=>'/services/structural-services',



'meta_title'=>'Highway Cable-Stay Bridge Steel Detailing | Milestone PLM',



'meta_description'=>'How Milestone PLM achieved 100% first-submission approval on a 420m cable-stay bridge.',



'meta_keywords'=>'bridge detailing, Tekla Structures, steel detailing, cable-stay bridge, structural engineering',



'og_title'=>'Highway Cable-Stay Bridge — Steel Detailing | Milestone PLM',



'og_description'=>'How Milestone PLM delivered fabrication-ready steel detailing for a 420m cable-stay bridge.',



'og_image'=>'bridge.png',



'image_alt'=>'Highway Cable-Stay Bridge Steel Detailing',



'image_title'=>'Highway Cable-Stay Bridge',



'schema_type'=>'Article',



'sitemap_include'=>true,



'robots_index'=>true,



'robots_follow'=>true,

],



            [

'title'=>'Data Centre MEP Coordination — Fast-Track',

'slug'=>'data-centre-mep-coordination-fast-track',

'category'=>'MEP Services',

'industry_tag'=>'Data Centres',

'cover_image'=>'case-study-one.png',

'short_description'=>'Scaled from 4 to 22 engineers in under two weeks for a 48 MW hyperscale facility — zero delays.',

'client'=>'Global Hyperscale Operator',

'location'=>'Frankfurt, Germany',

'service'=>'MEP Services',

'industry'=>'Data Centres',

'timeline'=>'4 months',

'team_size'=>'22 engineers',



'project_overview'=>'Fast-track MEP coordination for a 48 MW hyperscale data centre facility.',



'challenge_heading'=>'What made this project complex',



'challenge_body'=>'Extremely compressed schedule with multiple MEP systems requiring simultaneous coordination.',



'challenge_points'=>[

'48 MW critical power infrastructure',

'Fast-track programme with no float',

'14,000+ clash detections resolved'

],



'solution'=>'Rapid team scale-up from 4 to 22 engineers using federated BIM coordination.',



'results'=>'Zero programme delays, 94% clash reduction before site commencement.',



'approach_heading'=>'How Milestone PLM delivered',



'approach_body'=>'Milestone PLM rapidly expanded the engineering team and implemented a federated BIM workflow to coordinate all MEP systems within an aggressive delivery schedule.',



'key_deliverables'=>[

'48 MW MEP coordination model',

'Federated BIM environment',

'Clash detection reports',

'Coordination drawings',

'QA documentation',

'Client handover package'

],



'delivery_process'=>[

['step'=>'01','title'=>'Project Setup','body'=>'Established BIM standards and project coordination workflows.'],

['step'=>'02','title'=>'Model Coordination','body'=>'Integrated all MEP systems into a federated BIM model.'],

['step'=>'03','title'=>'Clash Resolution','body'=>'Resolved clashes through multidisciplinary coordination meetings.'],

['step'=>'04','title'=>'Delivery','body'=>'Delivered approved coordination package on schedule.']

],



'gallery_images'=>['datacentre-1.png','datacentre-2.png','datacentre-3.png'],



'gallery_caption'=>'DATA CENTRE — MEP COORDINATION',



'testimonial_quote'=>'Milestone PLM scaled resources rapidly and delivered exceptional coordination under an aggressive schedule.',



'testimonial_name'=>'Michael Anderson',



'testimonial_role'=>'Programme Director, Global Hyperscale Operator',



'related_service_label'=>'MEP Services',



'related_service_url'=>'/services/mep-services',



'meta_title'=>'Data Centre MEP Coordination Fast-Track | Milestone PLM',



'meta_description'=>'Milestone PLM scaled to 22 engineers delivering MEP coordination for a 48MW hyperscale data centre.',



'meta_keywords'=>'data centre, MEP coordination, BIM, hyperscale facility, clash detection',



'og_title'=>'Data Centre MEP Coordination — Fast-Track | Milestone PLM',



'og_description'=>'How Milestone PLM delivered fast-track MEP coordination for a hyperscale data centre.',



'og_image'=>'data-centre.png',



'image_alt'=>'Data Centre MEP Coordination',



'image_title'=>'Data Centre MEP Services',



'schema_type'=>'Article',



'sitemap_include'=>true,



'robots_index'=>true,



'robots_follow'=>true,

],


            [
                'title'=>'City Tower — Full Permit-Stage CD Package',
                'slug'=>'city-tower-full-permit-stage-cd-package',
                'category'=>'Architectural Services',
                'industry_tag'=>'Commercial',
                'cover_image'=>'Universal-Sheet-Metal-Fixture-Design-Delivering.jpg',
                'short_description'=>'Zero AHJ resubmissions on a full permit-stage CD package for a 38-storey Grade-A office tower.',
                'client'=>'Commercial Developer',
                'location'=>'Dubai, UAE',
                'service'=>'Architectural Services',
                'industry'=>'Commercial',
                'timeline'=>'8 months',
                'team_size'=>'12 engineers',
                'project_overview'=>'Complete permit-stage construction documentation for a 38-storey Grade-A office tower.',
                'challenge_heading'=>'What made this project complex',
                'challenge_body'=>'Strict AHJ requirements combined with complex facade geometry and tight submission deadlines.',
                'challenge_points'=>['38-storey mixed-use tower with complex facade','Multi-authority permit submission','Zero tolerance for resubmissions'],
                'solution'=>'Coordinated architectural and structural BIM models with integrated permit-ready documentation.',
                'results'=>'Zero AHJ resubmissions, permit granted on first submission.',
                'approach_heading'=>'How Milestone PLM delivered',
                'approach_body'=>'Milestone PLM assembled a dedicated architectural documentation team with BIM coordinators, QA reviewers and permit specialists to deliver authority-ready submissions.',
                'key_deliverables'=>[
                'Permit-stage CD package',
                'Architectural BIM coordination',
                'Facade documentation',
                'Authority submission package',
                'QA review checklist',
                'Revision tracking matrix'
                ],
                'delivery_process'=>[
                ['step'=>'01','title'=>'Planning','body'=>'Reviewed all authority requirements and submission criteria.'],
                ['step'=>'02','title'=>'Documentation','body'=>'Prepared permit-stage construction documents.'],
                ['step'=>'03','title'=>'Coordination','body'=>'Coordinated architectural and structural models.'],
                ['step'=>'04','title'=>'Submission','body'=>'Delivered authority-ready permit package.']
                ],
                'gallery_images'=>['citytower-1.png','citytower-2.png','citytower-3.png'],
                'gallery_caption'=>'CITY TOWER — PERMIT STAGE DOCUMENTATION',
                'testimonial_quote'=>'Milestone PLM delivered an authority-ready package with zero resubmissions and excellent coordination throughout the project.',
                'testimonial_name'=>'James Carter',
                'testimonial_role'=>'Project Director, Commercial Developer',
                'related_service_label'=>'Architectural Services',
                'related_service_url'=>'/services/architectural-services',
                'meta_title'=>'City Tower Permit Stage CD Package | Milestone PLM',
                'meta_description'=>'Zero AHJ resubmissions on a 38-storey Grade-A office tower permit package by Milestone PLM.',
                'meta_keywords'=>'architectural services, city tower, permit package, BIM coordination, commercial tower',
                'og_title'=>'City Tower — Full Permit-Stage CD Package | Milestone PLM',
                'og_description'=>'How Milestone PLM delivered a permit-ready package with zero AHJ resubmissions.',
                'og_image'=>'city-tower.png',
                'image_alt'=>'City Tower Permit Stage CD Package',
                'image_title'=>'City Tower Architectural Services',
                'schema_type'=>'Article',
                'sitemap_include'=>true,
                'robots_index'=>true,
                'robots_follow'=>true,
            ],
            [
                'title'=>'Hospital Campus — LOD 400 As-Built BIM',
                'slug'=>'hospital-campus-lod-400-as-built-bim',
                'category'=>'BIM Services',
                'industry_tag'=>'Healthcare',
                'cover_image'=>'case-study-one.png',
                'short_description'=>'LOD 400 as-built model across a 12-building healthcare campus, structured for COBie FM handover.',
                'client'=>'Regional Health Authority',
                'location'=>'London, United Kingdom',
                'service'=>'BIM Services',
                'industry'=>'Healthcare',
                'timeline'=>'9 months',
                'team_size'=>'14 engineers',
                'project_overview'=>'A regional health authority required a retroactive as-built BIM programme across a 12-building hospital campus ahead of a major facilities management system migration. With existing paper and CAD records spanning 40 years of phased construction, the challenge was to produce a single authoritative LOD 400 BIM environment that could serve as the digital backbone for the authority\'s CAFM platform.',
                'challenge_heading'=>'What made this project complex',
                'challenge_body'=>'The hospital campus had grown incrementally over four decades. Existing documentation ranged from original hand-drawn record drawings to partially-updated AutoCAD files — none of which reflected the as-built state accurately. The FM system migration had a hard go-live date, creating an immovable deadline for model delivery.',
                'challenge_points'=>['12 buildings spanning 40 years of phased and un-documented construction','Existing documentation accuracy estimated at 35-60% for any given building','COBie data required for 14,000+ maintainable assets across the campus'],
                'solution'=>'Milestone PLM deployed a dedicated BIM team with structured survey-to-model workflows. Each building was surveyed using point cloud scanning, with models built in Revit to LOD 400. COBie data was captured directly in the model and validated against the client\'s asset register.',
                'results'=>'All 12 buildings delivered to LOD 400 within the 9-month programme. COBie data validated for 14,000+ assets. Zero resubmissions required by the FM system integrator.',
                'approach_heading'=>'How Milestone PLM delivered',
                'approach_body'=>'Milestone PLM deployed a 14-person team combining remote modelling with on-site survey coordination. We partnered with the client\'s facilities team to conduct structured room-by-room surveys, resolving discrepancies between records and physical conditions. The BIM model was built in prioritised phases — critical clinical areas first, then support and administrative buildings.',
                'key_deliverables'=>['LOD 400 Revit as-built model across all 12 campus buildings','COBie data for 14,000+ maintainable assets in NHS-standard format','Room data sheets for 2,200 clinical and administrative spaces','Phased delivery schedule aligned to FM system migration milestones','Survey discrepancy log and resolution record for facilities team','Training package and model use guide for in-house FM team'],
            'delivery_process'=>[
                ['step'=>'01','title'=>'Survey & Audit','body'=>'Reviewed all existing documentation and coordinated structured physical surveys of every building, logging discrepancies and creating a prioritised remediation plan.'],
                ['step'=>'02','title'=>'Phased Modelling','body'=>'Built the LOD 400 model in clinical-priority phases, delivering critical clinical buildings first to enable early CAFM data import and FM team validation.'],
                ['step'=>'03','title'=>'COBie Population','body'=>'Populated COBie data for all 14,000+ maintainable assets, cross-referencing manufacturer records, maintenance schedules, and site survey data.'],
                ['step'=>'04','title'=>'FM Handover','body'=>'Delivered the complete LOD 400 model and COBie dataset to the FM system migration team on schedule.']
            ],
                'gallery_images'=>['hospital-1.png','hospital-2.png','hospital-3.png'],
                'gallery_caption'=>'SITE PHOTOGRAPHY — HOSPITAL CAMPUS — LOD 400 AS-BUILT BIM',
                'testimonial_quote'=>'Exceptional work. Milestone PLM delivered a 14,000-asset COBie-compliant model from near-zero records in nine months — exactly on time for our CAFM migration. An outstanding team.',
                'testimonial_name'=>'Lynette Matthews',
                'testimonial_role'=>'Director of Estates, Regional Health Authority',
                'related_service_label'=>'BIM Services',
                'related_service_url'=>'/services/bim-services',
                'meta_title'=>'Hospital Campus LOD 400 As-Built BIM | Milestone PLM',
                'meta_description'=>'LOD 400 as-built BIM across a 12-building hospital campus with full COBie FM handover by Milestone PLM Solutions.',
                'meta_keywords'=>'LOD 400, as-built BIM, hospital BIM, COBie, healthcare BIM, facilities management',
                'og_title'=>'Hospital Campus — LOD 400 As-Built BIM | Milestone PLM',
                'og_description'=>'How Milestone PLM delivered LOD 400 as-built models across a 12-building healthcare campus for FM handover.',
                'og_image'=>'hospital-campus.png',
                'image_alt'=>'Hospital Campus LOD 400 As-Built BIM Model',
                'image_title'=>'Hospital Campus BIM — Milestone PLM',
                'schema_type'=>'Article',
                'sitemap_include'=>true,
                'robots_index'=>true,
                'robots_follow'=>true,
            ],
[
    'title'=>'End-to-End Product Development & Manufacturing Engineering Support',
    'slug'=>'design-support-for-manufacturing-sheet-metal-fabrication',
    'category'=>'Design Support for Manufacturing',
    'industry_tag'=>'Sheet Metal Fabrication',
    'cover_image'=>'case-study-hero-section-banner.png',
    'short_description'=>'60% reduction in engineering costs delivering end-to-end CAD, fixture design and manufacturing documentation for a leading contract manufacturer.',
    'client'=>'Leading Contract Manufacturer for Caterpillar, Komatsu & John Deere',
    'location'=>'Michigan, USA',
    'service'=>'Design and Development Support',
    'industry'=>'Sheet Metal Fabrication',
    'timeline'=>'8 weeks',
    'team_size'=>'5 Engineers',
    'project_overview'=>'A contract manufacturing company specializing in fabricated and sheet metal products required a reliable engineering partner to support its growing product development and manufacturing operations. The client needed an experienced team capable of managing everything from quotation support and CAD development to production documentation and fixture design.',
    'challenge_heading'=>'What made this project complex',
    'challenge_body'=>'The client needed accurate, fast-turnaround engineering support across the full product lifecycle — from quotation to production — while managing complex fabrication and sheet metal designs under tight deadlines.',
    'challenge_points'=>[
        'Accurate quotations required based solely on customer drawings and specifications',
        'Complete product development support needed for fixtures, from concept through manufacturing',
        'Complex fabrication and sheet metal designs requiring detailed engineering expertise',
        'Assembly instructions, welding documentation and manufacturing process support required',
        'Custom fixtures needed to improve production efficiency',
        'Tight project deadlines demanding quick turnaround and continuous engineering support'
    ],
    'solution'=>'Milestone PLM acted as an extended engineering team, providing comprehensive design and manufacturing support throughout the product development lifecycle with a dedicated team of three Design Engineers and two CAD Specialists.',
    'results'=>'60% reduction in engineering costs, reduced manufacturing lead time, and improved production efficiency through complete CAD, documentation and fixture design support.',
    'approach_heading'=>'How Milestone PLM delivered',
    'approach_body'=>'Milestone PLM acted as an extended engineering team, providing mechanical concept development, 3D CAD modeling, DFM recommendations and sheet metal engineering, alongside manufacturing support including DXF generation, ECN management, ERP routing and BOM preparation, plus production engineering covering welding fixture design, assembly instructions and welding procedures.',
    'key_deliverables'=>[
        '3D CAD models and assemblies',
        'Production-ready manufacturing drawings',
        'DXF files for laser cutting and fabrication',
        'BOMs, routings and ECN documentation',
        'Welding fixture and jig design',
        'Assembly and welding work instructions'
    ],
    'delivery_process'=>[
        ['step'=>'01','title'=>'Design Review & Quotation Support','body'=>'Reviewed customer drawings, generated manufacturing feasibility assessments and prepared quotation support data.'],
        ['step'=>'02','title'=>'Product Development','body'=>'Created detailed 3D CAD models and assemblies, conducted design reviews and incorporated customer feedback.'],
        ['step'=>'03','title'=>'Manufacturing Documentation','body'=>'Developed production-ready engineering drawings, DXF files, BOMs, routings and technical documentation.'],
        ['step'=>'04','title'=>'Production Support','body'=>'Designed custom jigs and fixtures, developed assembly and welding instructions, and supported manufacturing teams with ECN management.'],
        ['step'=>'05','title'=>'Continuous Improvement','body'=>'Implemented design modifications based on production feedback, reducing unnecessary machining operations and improving manufacturability.']
    ],
    'gallery_images'=>['project-image-1.png','project-image-2.png','project-image-4.png'],
    'gallery_caption'=>'DESIGN SUPPORT FOR MANUFACTURING — SHEET METAL FABRICATION',
    'testimonial_quote'=>'TODO: Add client testimonial quote here.',
    'testimonial_name'=>'TODO: Client name',
    'testimonial_role'=>'TODO: Client role / title',
    'related_service_label'=>'Design and Development Support',
    'related_service_url'=>'/services/design-development-support',
    'meta_title'=>'Design Support for Manufacturing | Sheet Metal Fabrication | Milestone PLM',
    'meta_description'=>'60% reduction in engineering costs delivering end-to-end CAD, fixture design and manufacturing documentation for a leading contract manufacturer in Michigan, USA.',
    'meta_keywords'=>'design support for manufacturing, sheet metal fabrication, CAD development, fixture design, DFM, BOM, ECN management',
    'og_title'=>'Design Support for Manufacturing — Sheet Metal & Fabrication Engineering | Milestone PLM',
    'og_description'=>'How Milestone PLM delivered end-to-end product development and manufacturing engineering support, cutting engineering costs by 60%.',
    'og_image'=>'sheet-metal-fabrication.png',
    'image_alt'=>'Design Support for Manufacturing Sheet Metal Fabrication',
    'image_title'=>'Sheet Metal Fabrication Design and Development Support',
    'schema_type'=>'Article',
    'sitemap_include'=>true,
    'robots_index'=>true,
    'robots_follow'=>true,
]
        ];
        foreach ($studies as $study) {
            CaseStudy::updateOrCreate(['slug' => $study['slug']], $study);
        }
    }
}
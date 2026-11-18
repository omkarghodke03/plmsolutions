<?php

namespace App\Http\Controllers;

class CaseStudypostController extends Controller
{
    public function index()
    {
        $caseStudies = $this->caseStudies();

        $categories = [
            'All',
            'AEC',
            'Enclosure',
            'Fabrication',
            'Millwork',
            'Static Quipment'
        ];

        return view('case-studies.index', [
            'caseStudies' => $caseStudies,
            'categories' => $categories,
            'totalProjects' => count($caseStudies),
        ]);
    }

    public function show($slug)
    {
        $caseStudies = $this->caseStudies();
        

        $currentIndex = collect($caseStudies)->search(function ($item) use ($slug) {
            return $item['slug'] === $slug;
        });

        if ($currentIndex === false) {
            abort(404);
        }

        $caseStudy = $caseStudies[$currentIndex];

        $total = count($caseStudies);

        $previousIndex = $currentIndex > 0
            ? $currentIndex - 1
            : $total - 1;

        $nextIndex = $currentIndex < $total - 1
            ? $currentIndex + 1
            : 0;

        $previous = $caseStudies[$previousIndex];
        $next = $caseStudies[$nextIndex];

        $caseStudy['service'] = $caseStudy['service']
            ?? ($caseStudy['services'][0]
            ?? $caseStudy['category']
            ?? 'Engineering Services');

        $caseStudy['industry'] = $caseStudy['industry']
            ?? ($caseStudy['tag']
            ?? $caseStudy['category']
            ?? 'Engineering');

        $caseStudy['related_service'] = $caseStudy['related_service']
            ?? ($caseStudy['service']
            ?? 'Engineering Services');

        $socials = [
            'linkedin' => 'https://www.linkedin.com/company/milestone-plm-solutions/',
            'instagram' => 'https://www.instagram.com/milestoneplmsolutions/',
            'youtube' => 'https://www.youtube.com/channel/UCE6GVls7KPoAsc1LNCWjzCw',
        ];

        return view('case-studies.show', [
            'caseStudy' => $caseStudy,
            'previous' => $previous,
            'next' => $next,
            'socials' => $socials,
        ]);
    }

    private function caseStudies()
    {
        $caseStudies = [

            [
                'id' => 1,

                'slug' => 'arm-assembly-welding-fixture-manual-robotic',

                'created_at' => '2026-08-02 10:00:00',
                'updated_at' => '2026-08-02 10:00:00',

                'category' => 'Fabrication',

                'tag' => 'Fabrication',

                'title' => 'Arm Assembly Welding Fixture – Manual & Robotic Fixture Development',

                'excerpt' => 'Manual and robotic welding fixture development for an arm assembly, including 10-part setup, fixture mechanisms, model modifications, and manufacturing-ready drawings.',

                'image' => 'casestudy/arm-assembly.webp',

                'featured' => true,

                'seo_title' => 'Arm Assembly Welding Fixture Design | Milestone PLM',

                'seo_description' => 'Explore manual and robotic welding fixture development for 10 arm assemblies, including fixture design, model modifications, and manufacturing drawings.',

                'seo_keywords' => 'welding fixture design, robotic welding fixture, manual welding fixture, fixture development, arm assembly fixture',

                'client' => 'Industrial Client',

                'location' => 'USA',

                'services' => [
                    'Fixture Design',
                    'Mechanical Design',
                    'Manufacturing Drawings',
                ],

                'overview' => 'The customer had an existing welded arm assembly and required modifications to the existing model along with new welding fixtures. The objective was to develop two fixture concepts: one for manual welding and another for robotic welding. A key requirement was to accommodate 10 arm assemblies in a single setup for efficient welding. We developed, reviewed, and refined the manual fixture before creating the robotic fixture with simplified handling. The finalized fixture designs and manufacturing drawings were delivered for fabrication.',

                'challenge_title' => 'What Made This Project Complex',

                'challenge' => [
                            'description' => 'The main challenge was to develop a fixture capable of accurately locating and holding 10 arm assemblies in one setup. The manual fixture needed to provide practical access for welding while maintaining proper part positioning. The robotic fixture required minimum operator handling and a simple mechanism suitable for automated welding. Both fixture concepts had to accommodate the existing arm assembly and incorporate the required model modifications. The final designs also needed to be practical for manufacturing and easy to operate.',

                            'items' => [
                                'Holding 10 arm assemblies in one setup.',
                                'Accurate and repeatable part location.',
                                'Providing easy welding access.',
                                'Minimizing manual handling.',
                                'Developing a simple robotic mechanism.',
                                'Incorporating customer feedback and modifications.',
                                'Preparing fabrication-ready fixture drawings.',
                            ],
                ],

                'approach_title' => 'How Milestone PLM delivered',

                'approach' => [
                    'description' => 'We first reviewed the existing arm assembly and incorporated the required modifications into the 3D model. A manual welding fixture was then designed to locate and hold 10 assemblies in a single setup. The fixture was reviewed with the customer and refined based on their requirements, including the mounting sequence. Based on the same part and welding requirements, we developed a robotic fixture focused on minimum handling and a simple operating mechanism. After finalizing both concepts, detailed fixture drawings were prepared and submitted for manufacturing.',
                ],

                'deliverables' => [
                    'Modified arm assembly 3D model',
                    '10-part manual welding fixture',
                    'Customer-reviewed manual fixture',
                    'Fixture mounting/loading sequence',
                    '10-part robotic welding fixture',
                    'Minimum-handling robotic fixture mechanism',
                    'Manufacturing-ready fixture drawings',
                ],

                'process_title' => 'How we structured the work',

                'process' => [
                    [
                        'title' => 'Existing Model Review',
                        'description' => 'Reviewed the existing arm welded assembly and incorporated the required model modifications.',
                    ],
                    [
                        'title' => 'Manual Fixture Design',
                        'description' => 'Developed a fixture capable of locating and holding 10 arm assemblies in one welding setup.',
                    ],
                    [
                        'title' => 'Customer Review & Refinement',
                        'description' => 'Reviewed the fixture concept, incorporated customer feedback, and established the mounting sequence.',
                    ],
                    [
                        'title' => 'Robotic Fixture Development',
                        'description' => 'Developed a robotic welding fixture with minimum handling and a simple operating mechanism.',
                    ],
                    [
                        'title' => 'Drawing & Manufacturing Support',
                        'description' => 'Finalized both fixture designs and submitted detailed manufacturing drawings for fabrication.',
                    ],
                ],

                'timeline' => '1 Month',

                'team' => '1 Engineer',

                'gallery' => [
                    'casestudy/arm-assembly-welding-fixture.webp',
                    'casestudy/arm-assembly-welding-fixture1.webp',
                    'casestudy/arm-assembly-welding-fixture2.webp',
                    'casestudy/arm-assembly-welding-fixture3.webp',
                    'casestudy/arm-assembly-welding-fixture4.webp',
                    'casestudy/arm-assembly-welding-fixture5.webp',
                ],
            ],

            [
                'id' => 2,

                'slug' => 'automated-mini-belt-conveyor-system',

                'created_at' => '2026-10-07 10:00:00',
                'updated_at' => '2026-10-07 10:00:00',

                'category' => 'Enclosure',

                'tag' => 'Enclosure',

                'title' => 'AUTOMATED MINI BELT CONVEYOR SYSTEM – PLC PROGRAMMING & HMI DESIGN ',

                'excerpt' => 'Developed PLC programming and HMI design for an automated mini belt conveyor, delivering precise motion control, sensor-based sequencing, safety interlocks, and real-time monitoring.',

                'image' => 'casestudy/automated-mini-belt.webp',

                'featured' => false,

                'seo_title' => 'Automated Mini Belt Conveyor System – PLC Programming & HMI Design Case Study',

                'seo_description' => 'Explore how Milestone PLM developed PLC programming and HMI design for an automated mini belt conveyor system, delivering reliable motion control, sensor-based product detection, sequence interlocks, real-time monitoring, and efficient pickup/drop operations for a USA-based logistics automation application.',

                'seo_keywords' => 'PLC Programming and HMI Design, Automated Conveyor System, Mini Belt Conveyor System, PLC Programming Services, HMI Design Services,Conveyor Automation',

                'client' => 'Industrial Client',

                'location' => 'USA',

                'services' => [
                    'PLC Programming ',
                    'HMI Design',
                   ],

                'overview' => 'Milestone PLM provided complete PLC programming and HMI interface design support for an Automated Mini Belt Conveyor System installed at remote logistic area. The scope focused on developing structured Ladder Logic routines for automated conveyor motion control, product presence detection, precise pickup/drop stop sequencing, timing interlocks, and operator screen visualization. ',

                'challenge_title' => 'What Made This Project Complex',

                'challenge' => [
                            'description' => 'Developing robust control logic for a mini belt conveyor operating in a high-throughput pickup and drop area required precise management of sensor inputs and multi-stage sequence timing. The key engineering challenges included establishing accurate product detection using photoelectric sensors at both pickup and drop locations, developing safe conveyor motor start/stop sequencing with interlocks to prevent belt overtravel and product accumulation jams, structuring Ladder Diagram (LD) code into modular routines for easier maintenance and troubleshooting, and designing intuitive HMI screens to support manual jog overrides, automatic cycle execution, real-time product counting, and alarm notifications.
',

    
                ],

                'approach_title' => 'How Milestone PLM delivered',

                'approach' => [
                    'description' => 'Milestone PLM applied a systematic automation logic engineering approach to develop a reliable, high-performance control package. The team developed structured Ladder Logic code covering the main conveyor drive logic, feeder interlocks, and pickup/drop sequence timers. Standardized I/O address mapping was implemented for digital sensors, including part presence, travel limits, and emergency stop signals, along with actuator outputs. Clear HMI screen layouts were designed with main process status views, product counter displays, fault indicators, and manual control functions. In addition, complete software documentation packages and fully commented source code files were prepared to support seamless deployment, maintenance, and future system modifications.',
                ],

                'deliverables' => [
                    'Complete automation software ownership eliminated client dependency on internal resources and accelerated overall project delivery.',
                    'Structured, well-commented Ladder Logic code enhanced system maintainability and simplified troubleshooting for maintenance technicians. ',
                    'Interlocked pickup/drop logic guaranteed zero product collisions and ensured smooth material transfer across operations.',
                    'User-friendly HMI interface gave operators clear real-time process visibility and flexible manual/auto operation controls',
                    'Detailed operational documentation provided a clear technical baseline for operator training and future conveyor system expansions. ',
                ],

                'process_title' => 'Project Execution Process ',

                'process' => [
                    [
                        'title' => 'Phase 1 - Sequence & Requirement Review',
                        'description' => 'Analyzed mechanical pickup/drop motion cycles, sensor positions, belt speed requirements, and control standards. ',
                    ],
                    [
                        'title' => 'Phase 2 - I/O Allocation & Mapping: ',
                        'description' => 'Created structured digital and analog I/O address assignment lists, mapping field sensors, pneumatic stoppers, and motor starter signals.',
                    ],
                    [
                        'title' => 'Phase 3 - Ladder Logic & HMI Development',
                        'description' => ' Wrote clean Ladder Diagram (LD) routines for sequential indexing, pickup/drop interlocks, timers, and HMI operational screens.',
                    ],
                    [
                        'title' => 'Phase 4 - Simulation & Logic Verification',
                        'description' => 'Performed rigorous offline software simulation tests to verify sequence timing. ',
                    ],
                    [
                        'title' => 'Phase 5 - Final Software Delivery',
                        'description' => 'Delivered fully commented source code with back ups files and HMI project backups. ',
                    ],
                ],

                'timeline' => '6 week ',

                'team' => '1 Engineer',

                'gallery' => [
                    'casestudy/automated-mini-belt.webp',
                ],
            ],


            [
                'id' => 3,

                'slug' => 'blower-housing-inspection-gage',

                'created_at' => '2026-08-02 10:00:00',
                'updated_at' => '2026-08-02 10:00:00',

                'category' => 'Enclosure',

                'tag' => 'Enclosure',

                'title' => 'Design Support for Blower Housing Inspection Gage',

                'excerpt' => 'the design and development of two blower housing inspection gages with repeatable checking features, inspection guidance, and detailed manufacturing drawings.',

                'image' => 'casestudy/blower-housing-inspection.webp',

                'featured' => false,

                'seo_title' => 'Design Support for Blower Housing Inspection Gage | Milestone PLM',

                'seo_description' => 'Developed two inspection gages for a blower housing, delivering accurate feature checking, design revisions, inspection guidance, and manufacturing-ready drawings.',

                'seo_keywords' => 'Blower Housing Inspection Gage Design, Inspection Gage Design, Inspection Gauge Design, Blower Housing Inspection, Inspection Fixture Design',

                'client' => 'Leading U.S. Manufacturer of Plastic Products',

                'location' => 'USA',

                'services' => [
                    'Fixture Design',
                    'Mechanical Design',
                    'Manufacturing Drawings',
                ],

                'overview' => 'Milestone PLM was engaged to develop two inspection gages for a blower housing, enabling accurate verification of critical features including mounting-hole positions, front-side maximum length, and overall dimensions. We developed an initial concept and demo model, incorporated customer feedback through design revisions, and finalized the gages with dedicated checking features for simple, accurate, and repeatable inspection.',

                'challenge_title' => 'What Made This Project Complex',

                'challenge' => [
                            'description' => 'Developing inspection gages for a blower housing required precise verification of critical features while ensuring consistent part positioning and operator-friendly inspection. The gages had to accommodate customer revisions, provide repeatable dimensional checks, and be fully detailed for manufacturing.',

                            'items' => [
                                'Two inspection gages required to verify critical blower housing characteristics and mounting-hole locations .',
                                'Accurate checking required for hole positions, dimensions, and front-side maximum component length.',
                                'Gage design had to incorporate inspection features, press-fitted ejector pins, and proper part positioning for repeatable checking .',
                                'Design revisions required to incorporate customer feedback on hole locations and dimensions, with directional arrows clearly identifying checking positions.',
                                'Complete inspection documentation and manufacturing-ready drawings required, including a user-friendly operator instruction manual.',
                                
                            ],
                ],

                'approach_title' => 'How Milestone PLM delivered the blower housing inspection gages',

                'approach' => [
                    'description' => 'The project started with a detailed review of the customer’s inspection requirements for the Blower Housing. Based on the specified inspection parameters, two gage concepts were developed to verify mounting hole positions, hole locations, front-side maximum length, and other critical characteristics. An initial demo model and design concept were submitted for customer review and subsequently refined based on their feedback.To improve inspection accuracy and repeatability, press-fitted ejector pins were incorporated at the required checking locations, while directional arrows were added to clearly indicate checking positions and part orientation. Following design finalization, a checking instruction manual was prepared in PowerPoint to illustrate the inspection sequence, part positioning, and checking procedure. Detailed manufacturing drawings were then prepared for the approved gage design and submitted to the customer for manufacturing.We first reviewed the existing arm assembly and incorporated the required modifications into the 3D model. A manual welding fixture was then designed to locate and hold 10 assemblies in a single setup. The fixture was reviewed with the customer and refined based on their requirements, including the mounting sequence. Based on the same part and welding requirements, we developed a robotic fixture focused on minimum handling and a simple operating mechanism. After finalizing both concepts, detailed fixture drawings were prepared and submitted for manufacturing.',
                ],

                'deliverables' => [
                    'Two inspection gage designs',
                    'Initial concept and demo models ',
                    'Revised inspection gage models  ',
                    'Press-fitted ejector pin checking features ',
                    'Hole-position inspection provisions  ',
                    'Front-side maximum-length checking arrangement ',
                    'Part positioning and orientation indicators  ',
                    'Directional inspection arrows  ',
                    'Inspection checking instruction manual  ',
                    'Detailed manufacturing drawings ',
                    'Final CAD models and engineering documentation  ',
                    
                ],

                'process_title' => 'How we structured the work',

                'process' => [
                    [
                        'title' => 'Requirement Analysis ',
                        'description' => 'Reviewed the customers requirements for checking blower housing mounting-hole positions hole locations front-side maximum length and weight-related inspection requirements.',
                    ],
                    [
                        'title' => 'Concept & Demo Model',
                        'description' => 'Developed two initial inspection gage concepts and demo models based on the customers inspection requirements and submitted them for review.',
                    ],
                    [
                        'title' => 'Engineering Revisions',
                        'description' => 'Incorporated customer feedback and modified hole positions, dimensions, and inspection features according to the revised requirements.',
                    ],
                    [
                        'title' => 'Inspection Feature Development',
                        'description' => 'Added press-fitted ejector pins at the required locations to provide accurate and repeatable checking of holes and dimensional positions.',
                    ],
                    [
                        'title' => 'Visual Inspection Guidance',
                        'description' => 'Added directional arrows and identification features to clearly indicate the checking positions and correct part orientation.',
                    ],
                     [
                        'title' => 'Inspection Instruction Manual',
                        'description' => 'Prepared a PowerPoint-based inspection instruction manual explaining the correct part positioning and step-by-step checking procedure.',
                    ],
                     [
                        'title' => 'Manufacturing Documentation',
                        'description' => 'Prepared detailed manufacturing drawings for the finalized inspection gages and submitted the approved design data for fabrication. ',
                    ],
                    
                ],

                'timeline' => '3 week',

                'team' => '1 Design Engineer',

                'gallery' => [
                    'casestudy/blower-housing-inspection1.webp',
                    'casestudy/blower-housing-inspection2.webp',
                    'casestudy/blower-housing-inspection3.webp',
                    'casestudy/blower-housing-inspection4.webp',
                    'casestudy/blower-housing-inspection5.webp',
                    'casestudy/blower-housing-inspection6.webp',
                    'casestudy/blower-housing-inspection7.webp',
                    'casestudy/blower-housing-inspection8.webp',
                ],
            ],


            [
                'id' => 4,

                'slug' => 'bolted-front-loader-bucket-structure',

                'created_at' => '2026-08-02 10:00:00',
                'updated_at' => '2026-08-02 10:00:00',

                'category' => 'Enclosure',

                'tag' => 'Enclosure',

                'title' => 'Bolted Front Loader Bucket Design & Manufacturing Documentation',

                'excerpt' => 'the design and manufacturing documentation of a custom bolted front loader bucket, delivered from concept development to production-ready drawings.',

                'image' => 'casestudy/bolted-front-loader-bucket-structure.webp',

                'featured' => false,

                'seo_title' => 'Bolted Front Loader Bucket Design | Milestone PLM',

                'seo_description' => 'Developed a custom bolted front loader bucket with 3D CAD modeling, structural design, fabrication drawings, and manufacturing documentation for a vehicle manufacturer.',

                'seo_keywords' => 'Bolted Front Loader Bucket Design, Front Loader Bucket Design, Utility Vehicle Design, 3D CAD Modeling Services, Manufacturing Drawing Services',

                'client' => ' Leading North American Utility Vehicle Manufacturer',

                'location' => 'USA',

                'services' => [
                    'Fixture Design',
                    'Mechanical Design',
                    'Manufacturing Drawings',
                ],

                'overview' => 'Milestone PLM was engaged to deliver the complete product development and manufacturing documentation package for a custom bolted front loader bucket and truck bed accessories. Operating under a tight 3-week delivery window, Milestone PLM provided end-to-end engineering support from initial concept CAD modeling to final shop-floor drawings cutting engineering costs by 60% while ensuring immediate, production-ready manufacturing.',

                'challenge_title' => 'What Made This Project Complex',

                'challenge' => [
                            'description' => 'Developing the bolted front loader bucket as a new product concept required extensive research to understand customer-specific requirements, industry design standards, and structural component specifications. The project involved generating multiple CAD concept models, developing innovative bolted connections for structural member assembly, and optimizing the design for ease of fabrication and assembly. Detailed fabrication and assembly drawings were prepared while ensuring manufacturability, structural integrity, and adherence to project timelines.',

                            'items' => [
                                'Understanding the project scope and customer requirements for a new truck bed concept.',
                                'Researching reference designs and interpreting customer-provided reference data.',
                                'Identifying applicable design and manufacturing standards for project components.  ',
                                'Exploring suitable connection arrangements for the assembly of structural components. ',
                                'Developing, verifying, and validating designs and manufacturing drawings in accordance with the clients engineering standards. ',
                                
                            ],
                ],

                'approach_title' => 'How Milestone PLM delivered',

                'approach' => [
                    'description' => 'We first reviewed the existing arm assembly and incorporated the required modifications into the 3D model. A manual welding fixture was then designed to locate and hold 10 assemblies in a single setup. The fixture was reviewed with the customer and refined based on their requirements, including the mounting sequence. Based on the same part and welding requirements, we developed a robotic fixture focused on minimum handling and a simple operating mechanism. After finalizing both concepts, detailed fixture drawings were prepared and submitted for manufacturing.',
                ],

                'deliverables' => [
                    'Complete engineering ownership reduced dependency on in-house design resources',
                    '60% Reduction in Engineering Costs',
                    'Accelerated design-to-manufacturing transition through dedicated engineering suppor',
                    'Optimized processes and documentation enabled quicker production execution',
                    'Reduced Manufacturing Lead Time ',
                    'Fixture design and process improvements increased manufacturing productivity',
                    ' Improved Production Efficiency',
                    ' Complete support for CAD models, drawings, DXFs, ECNs, routings, BOMs, assembly instructions, and welding procedures',
                   
                ],

                'process_title' => 'How we structured the work',

                'process' => [
                    [
                        'title' => ' Understanding the concept for the project',
                        'description' => 'We reviewed the client-provided reference sites and data to understand the project requirements, industry-specific terminology, and key considerations related to truck bed design and fabrication.',
                    ],
                    [
                        'title' => 'Product Development',
                        'description' => 'The truck bed design was revised based on client feedback, with detailed 3D CAD models and assemblies developed for the mounted accessories. Design reviews and engineering revisions were completed to finalize the product.',
                    ],
                    [
                        'title' => 'Manufacturing Documentation',
                        'description' => 'Developed production-ready engineering, fabrication, and assembly drawings to support accurate fabrication and efficient truck bed manufacturing.',
                    ],
                   
                ],

                'timeline' => '3 week',

                'team' => '1 Design Engineer',

                'gallery' => [
                    'casestudy/bolted-front-loader-bucket-structure1.webp',
                    'casestudy/bolted-front-loader-bucket-structure2.webp',
                    'casestudy/bolted-front-loader-bucket-structure3.webp',
                   
                ],
            ],


            [
                'id' => 5,

                'slug' => 'modular-pickup-towed-trailer-design',

                'created_at' => '2026-08-02 10:00:00',
                'updated_at' => '2026-08-02 10:00:00',

                'category' => 'Enclosure',

                'tag' => 'Enclosure',

                'title' => 'Modular Pickup Towed Trailer Design & Manufacturing Documentation',

                'excerpt' => 'Developing a modular pickup towed trailer concept from scratch with production-ready CAD models, structural assemblies, and fabrication drawings.',

                'image' => 'casestudy/pickup-towed-trailer.webp',

                'featured' => false,

                'seo_title' => 'Modular Pickup Towed Trailer Design| Milestone PLM',

                'seo_description' => 'Developed a modular pickup towed trailer concept from scratch, delivering 3D CAD models, structural design, fabrication drawings, and manufacturing documentation.',

                'seo_keywords' => 'Modular Pickup Towed Trailer, Pickup Trailer Design, Modular Trailer Design, 3D CAD Modeling, Trailer CAD Design',

                'client' => ' Utility Vehicle Manufacturer',

                'location' => 'USA',

                'services' => [
                    'Fixture Design',
                    'Mechanical Design',
                    'Manufacturing Drawings',
                ],

                'overview' => 'Milestone PLM was engaged to deliver full product development and manufacturing documentation for a new Modular Pickup Towed Trailer Concept from scratch. Operating under a tight 3-week delivery schedule with a commitment to complete engineering ownership, every 3D CAD model, structural assembly, and fabrication drawing was developed to be production-ready on first release cutting engineering costs by 60% and accelerating the transition to manufacturing.',

                'challenge_title' => 'What Made This Project Complex',

                'challenge' => [
                            'description' => 'Developing the Modular Pickup Towed Trailer Concept  from scratch presented a unique engineering challenge, as it was a completely new concept for the team. The project required extensive research of reference designs, engineering standards and customer-provided resources to establish the concept. Based on these references, the team developed the product design and prepared complete fabrication and assembly drawings, ensuring the concept was ready for manufacturing. ',

                            'items' => [
                                'Understanding the project scope and client requirements for a Modular Towed Trailer Concept.',
                                'Researching reference designs for inspiration. ',
                                'Identifying applicable design from manufacturability point of view.',
                                'Exploring and applying the structural connection concept to achieve the required design concept.',
                                'Researching suitable standards and sizes for the structural elements.',
                                'Exploring options for connecting structural members.',
                                'Finding standards and sizes for hardware for the connections.',
                                'Developing, verifying, and validating designs and manufacturing drawings in accordance with the clients engineering standards.',
                            ],
                ],

                'approach_title' => 'How Milestone PLM delivered',

                'approach' => [
                    'description' => 'Milestone acted as an extended engineering team, providing comprehensive design and manufacturing support in the product development lifecycle. A dedicated team consisting of ONE Design Engineer AND CAD Specialists was assigned to the project to deliver',
                ],

                'deliverables' => [
                    'Complete engineering ownership reduced dependency on in-house design resources',
                    '60% Reduction in Engineering Costs',
                    'Accelerated design-to-manufacturing transition through dedicated engineering support. ',
                    'Optimized processes and documentation enabled quicker production execution',
                    'Reduced Manufacturing Lead Time',
                    'Fixture design and process improvements increased manufacturing productivity',
                    'Improved Production Efficiency',
                    'Complete support for CAD models, drawings, DXFs, ECNs, routings, BOMs, assembly instructions, and welding procedures',
                ],

                'process_title' => 'How we structured the work',

                'process' => [
                    [
                        'title' => 'Understanding the concept for the project',
                        'description' => 'Reviewed the client’s reference websites and design inputs, evaluated suitable concepts from both design and manufacturability perspectives, and finalized the most appropriate reference for product development and fabrication.',
                    ],
                    [
                        'title' => ' Product Development',
                        'description' => 'Created detailed 3D CAD components and assemblies, conducted design reviews and optimization with the client, and incorporated client feedback and required engineering revisions to finalize the product design.',
                    ],
                    [
                        'title' => ' Manufacturing Documentation',
                        'description' => 'Production-ready engineering, fabrication, and assembly drawings were developed to support the truck bed manufacturing process, ensuring clear fabrication requirements and efficient production execution.',
                    ],
                    
                ],

                'timeline' => '3 weeks ',

                'team' => '1 Design Engineer',

                'gallery' => [
                    'casestudy/pickup-towed-trailer1.webp',
                    'casestudy/pickup-towed-trailer2.webp',
                    'casestudy/pickup-towed-trailer3.webp',
                
                ],
            ],


             [
                'id' => 6,

                'slug' => 'tab-slot-fire-pit-design-manufacturing',

                'created_at' => '2026-08-02 10:00:00',
                'updated_at' => '2026-08-02 10:00:00',

                'category' => 'Enclosure',

                'tag' => 'Enclosure',

                'title' => 'Tab and Slot Fire Pit Design & Manufacturing Documentation',

                'excerpt' => 'A complete case study on tab-and-slot fire pit design, sheet metal CAD modeling, fabrication drawings, and manufacturing documentation for a U.S. client.',

                'image' => 'casestudy/tab-and-slot-grill-stove-fire.webp',

                'featured' => false,

                'seo_title' => 'Tab and Slot Fire Pit Design | Milestone PLM',

                'seo_description' => 'Developed a production-ready tab-and-slot fire pit using Solid Edge, delivering 3D CAD models, sheet metal designs, fabrication drawings, and manufacturing documentation.',

                'seo_keywords' => 'Tab and Slot Fire Pit Design, Fire Pit Design Services, Sheet Metal CAD Design, 3D CAD Modeling, CAD Design Services',

                'client' => ' Utility Vehicle Manufacturer',

                'location' => 'USA',

                'services' => [
                    'Fixture Design',
                    'Mechanical Design',
                    'Manufacturing Drawings',
                ],

                'overview' => 'Milestone PLM was engaged to deliver the complete product development and manufacturing documentation package for a new tab-and-slot fire pit concept from scratch. Operating under a tight 3-week delivery window with a commitment to full engineering ownership, every sheet metal 3D CAD model, flat pattern, and fabrication drawing was engineered to be production-ready on first release—cutting engineering costs by 60% and enabling rapid shop-floor execution.',

                'challenge_title' => 'What Made This Project Complex',

                'challenge' => [
                            'description' => 'Developing the tab-and-slot fire pit from scratch presented a unique engineering challenge, as it was a completely new concept for the team. The project required  research of reference designs for similar products and customer-provided resources to establish the concept. Based on these references, the team developed the product design and prepared complete fabrication drawings, ensuring the concept was ready for manufacturing. ',

                            'items' => [
                                'Understanding the project scope and client requirements for a new tab and slot fire pit concept.',
                                'Researching reference designs for inspiration. ',
                                'Identifying applicable design from manufacturability point of view. ',
                                'Exploring and applying Solid Edge sheet metal features to achieve the required design concept.',
                                'Developing, verifying, and validating designs and manufacturing drawings in accordance with the clients engineering standards. ',
                                
                            ],
                ],

                'approach_title' => 'How Milestone PLM delivered',

                'approach' => [
                    'description' => 'Milestone acted as an extended engineering team, providing comprehensive design and manufacturing support in the product development life cycle. A dedicated team consisting of ONE Design Engineer AND CAD Specialists was assigned to the project to deliver',
                ],

                'deliverables' => [
                    'Complete engineering ownership reduced dependency on in-house design resources',
                    '60% Reduction in Engineering Costs',
                    'Accelerated design-to-manufacturing transition through dedicated engineering support. ',
                    'Optimized processes and documentation enabled quicker production execution',
                    'Reduced Manufacturing Lead Time',
                    'Fixture design and process improvements increased manufacturing productivity',
                    'Improved Production Efficiency',
                    'Complete support for CAD models, drawings, DXFs, ECNs, routings, BOMs, assembly instructions, and welding procedures',
                ],

                'process_title' => 'How we structured the work',

                'process' => [
                    [
                        'title' => 'Understanding the concept for the project',
                        'description' => 'Reviewed the client’s reference websites and design inputs, evaluated suitable concepts from both design and manufacturability perspectives, and finalized the most appropriate reference for product development and fabrication.',
                    ],
                    [
                        'title' => ' Product Development',
                        'description' => 'Created detailed 3D CAD components and assemblies, conducted design reviews and optimization with the client, and incorporated client feedback and required engineering revisions to finalize the product design.',
                    ],
                    [
                        'title' => ' Manufacturing Documentation',
                        'description' => 'Production-ready engineering and detailed fabrication drawings were developed to support accurate manufacturing and efficient fabrication processes.',
                    ],
                    
                ],

                'timeline' => '3 weeks ',

                'team' => '1 Design Engineer',

                'gallery' => [
                    'casestudy/tab-and-slot-grill-stove-fire1.webp',
                    'casestudy/tab-and-slot-grill-stove-fire2.webp',
                    'casestudy/tab-and-slot-grill-stove-fire3.webp',
                    'casestudy/tab-and-slot-grill-stove-fire4.webp',
                   
                    
                ],
            ],


            [
                'id' => 7,

                'slug' => 'tab-slot-grill-stove-design',

                'created_at' => '2026-08-02 10:00:00',
                'updated_at' => '2026-08-02 10:00:00',

                'category' => 'Enclosure',

                'tag' => 'Enclosure',

                'title' => 'Tab and Slot Grill Stove Design & Manufacturing Documentation',

                'excerpt' => 'Explore how Milestone PLM developed a tab-and-slot grill stove concept with 3D CAD modeling, sheet metal design, and production-ready manufacturing documentation.',

                'image' => 'casestudy/tab-and-slot-grill-stove.webp',

                'featured' => false,

                'seo_title' => 'Tab and Slot Grill Stove Design | Milestone PLM',

                'seo_description' => 'Developed a tab-and-slot grill stove from concept to production-ready CAD models, sheet metal designs, fabrication drawings, and manufacturing documentation.',

                'seo_keywords' => 'Tab and Slot Grill Design, Grill Stove Design, Fabrication Drawing Services, Sheet Metal CAD Design, 3D CAD Modeling, CAD Design Services',

                'client' => ' Utility Vehicle Manufacturer',

                'location' => 'USA',

                'services' => [
                    'Fixture Design',
                    'Mechanical Design',
                    'Manufacturing Drawings',
                ],

                'overview' => 'Milestone PLM was engaged to deliver the complete product development and manufacturing documentation package for a new tab-and-slot grill stove concept engineered from scratch. Operating under a tight 3-week delivery schedule with full engineering ownership, every sheet metal 3D CAD model, flat pattern, and fabrication drawing was engineered to be production-ready on first release—cutting engineering costs by 60% and enabling rapid shop-floor execution.',

                'challenge_title' => 'What Made This Project Complex',

                'challenge' => [
                            'description' => 'Developing the tab-and-slot grill stove from scratch presented a unique engineering challenge, as it was a completely new concept for the team. The project required  research of reference designs for similar products and customer-provided resources to establish the concept. Based on these references, the team developed the product design and prepared complete fabrication drawings, ensuring the concept was ready for manufacturing. ',

                            'items' => [
                                'Understanding the project scope and client requirements for a new tab and slot fire pit concept.',
                                'Researching reference designs for inspiration. ',
                                'Identifying applicable design from manufacturability point of view. ',
                                'Exploring and applying Solid Edge sheet metal features to achieve the required design concept. ',
                                'Developing, verifying, and validating designs and manufacturing drawings in accordance with the client engineering standards. ',
                                
                            ],
                ],

                'approach_title' => 'How Milestone PLM delivered',

                'approach' => [
                    'description' => 'Milestone acted as an extended engineering team, providing comprehensive design and manufacturing support in the product development life cycle. A dedicated team consisting of ONE Design Engineer AND CAD Specialists was assigned to the project to deliver',
                ],

                'deliverables' => [
                    'Complete engineering ownership reduced dependency on in-house design resources',
                    '60% Reduction in Engineering Costs',
                    'Accelerated design-to-manufacturing transition through dedicated engineering support. ',
                    'Optimized processes and documentation enabled quicker production execution',
                    'Reduced Manufacturing Lead Time',
                    'Fixture design and process improvements increased manufacturing productivity',
                    'Improved Production Efficiency',
                    'Complete support for CAD models, drawings, DXFs, ECNs, routings, BOMs, assembly instructions, and welding procedures',
                ],

                'process_title' => 'How we structured the work',

                'process' => [
                    [
                        'title' => 'Understanding the concept for the project',
                        'description' => 'Reviewed the client’s reference websites and design inputs, evaluated suitable concepts from both design and manufacturability perspectives, and finalized the most appropriate reference for product development and fabrication.',
                    ],
                    [
                        'title' => ' Product Development',
                        'description' => 'Created detailed 3D CAD components and assemblies, conducted design reviews and optimization with the client, and incorporated client feedback and required engineering revisions to finalize the product design.',
                    ],
                    [
                        'title' => ' Manufacturing Documentation',
                        'description' => 'Production-ready engineering and detailed fabrication drawings were developed to support accurate manufacturing and efficient fabrication processes.',
                    ],
                    
                ],

                'timeline' => '3 weeks ',

                'team' => '1 Design Engineer',

                'gallery' => [
                    'casestudy/tab-slot-grill-stove1.webp',
                    'casestudy/tab-slot-grill-stove2.webp',
                    'casestudy/tab-slot-grill-stove3.webp',
                    'casestudy/tab-slot-grill-stove4.webp',
                    
                ],
            ],


             [
                'id' => 8,

                'slug' => 'customized-pick-up-truck-bed-design',

                'created_at' => '2026-08-02 10:00:00',
                'updated_at' => '2026-08-02 10:00:00',

                'category' => 'Enclosure',

                'tag' => 'Enclosure',

                'title' => 'Customized Pick-Up Truck Bed Design & Manufacturing Documentation',

                'excerpt' => 'A case study showcasing the development of a customized pick-up truck bed, including 3D CAD modeling, assembly design, fabrication drawings, BOMs, and manufacturing documentation.',

                'image' => 'casestudy/customized-pickup-truck-bed.webp',

                'featured' => false,

                'seo_title' => 'Customized Pick-Up Truck Bed Design  | Milestone PLM',

                'seo_description' => 'Provided product development, 3D CAD modeling, fabrication drawings, and manufacturing documentation for a customized pick-up truck bed.',

                'seo_keywords' => 'Customized Pick-Up Truck Bed Design, Truck Bed CAD Design, Fabrication Drawing Services, Automotive Product Design, 3D CAD Modeling, CAD Design Services',

                'client' => ' Utility Vehicle Manufacturer',

                'location' => 'USA',

                'services' => [
                    'Fixture Design',
                    'Mechanical Design',
                    'Manufacturing Drawings',
                ],

                'overview' => 'Milestone PLM was engaged to deliver end-to-end product development and manufacturing documentation for a customized truck bed and bed-mounted accessory package. Operating under a tight 3-week delivery schedule with complete engineering ownership, every CAD model modification, weldment layout, and fabrication drawing was developed to be production-ready on first release—cutting engineering costs by 60% and enabling efficient, immediate manufacturing execution.',

                'challenge_title' => 'What Made This Project Complex',

                'challenge' => [
                            'description' => 'Developing the truck bed as a new product concept required extensive research to understand customer-specific terminology, design standards, and component requirements. The project also involved modifying existing CAD models, integrating new parts and assemblies, and preparing accurate fabrication and assembly drawings while ensuring manufacturability and meeting project timelines.  ',

                            'items' => [
                                'Understanding the project scope and customer requirements for a new truck bed concept.  ',
                                'Researching reference designs and interpreting customer-provided reference data. ',
                                'Learning industry-specific terminology used in truck bed design and fabrication.   ',
                                'Identifying applicable design and manufacturing standards for project components.  ',
                                'Exploring and applying advanced Solid Edge features to achieve the required design modifications.   ',
                                'Researching suitable weld-ment standards for truck bed-mounted accessories.    ',
                                'Developing, verifying, and validating designs and manufacturing drawings in accordance with the clients engineering standards.   ',
                                
                            ],
                ],

                'approach_title' => 'How Milestone PLM delivered',

                'approach' => [
                    'description' => 'Milestone acted as an extended engineering team, providing comprehensive design and manufacturing support in the product development life cycle. A dedicated team consisting of ONE Design Engineer AND CAD Specialists was assigned to the project to deliver',
                ],

                'deliverables' => [
                    'Complete engineering ownership reduced dependency on in-house design resources',
                    '60% Reduction in Engineering Costs',
                    'Accelerated design-to-manufacturing transition through dedicated engineering support. ',
                    'Optimized processes and documentation enabled quicker production execution',
                    'Reduced Manufacturing Lead Time',
                    'Fixture design and process improvements increased manufacturing productivity',
                    'Improved Production Efficiency',
                    'Complete support for CAD models, drawings, DXFs, ECNs, routings, BOMs, assembly instructions, and welding procedures',
                ],

                'process_title' => 'How we structured the work',

                'process' => [
                    [
                        'title' => 'Understanding the concept for the project',
                        'description' => 'Reviewed the reference sites and materials provided by the client to understand the project requirements, relevant industry terminology, and key considerations for truck bed design and fabrication.',
                    ],
                    [
                        'title' => ' Product Development',
                        'description' => 'The truck bed and mounted accessories were modified based on client requirements, with detailed 3D CAD models and assemblies developed. Design reviews were conducted to incorporate client feedback and finalize the engineering revisions.',
                    ],
                    [
                        'title' => ' Manufacturing Documentation',
                        'description' => 'Developed production-ready engineering, fabrication, and assembly drawings to support accurate truck bed fabrication and efficient manufacturing execution.',
                    ],
                    
                ],

                'timeline' => '3 weeks ',

                'team' => '1 Design Engineer',

                'gallery' => [
                    'casestudy/customized-pickup-truck-bed1.webp',
                    'casestudy/customized-pickup-truck-bed2.webp',
                    'casestudy/customized-pickup-truck-bed3.webp',
                    'casestudy/customized-pickup-truck-bed4.webp',
                   
                ],
            ],
            [
                'id' => 9,

                'slug' => 'transponder-sticker-enclosure-design',

                'created_at' => '2026-08-02 10:00:00',
                'updated_at' => '2026-08-02 10:00:00',

                'category' => 'Enclosure',

                'tag' => 'Enclosure',

                'title' => 'Transponder Sticker Enclosure Design & CAD Optimization Services',

                'excerpt' => 'Case study on optimizing a transponder sticker enclosure through reverse engineering, parametric CAD modeling, dimensional reduction, and manufacturing documentation.',

                'image' => 'casestudy/tranponder-sticker-enclosure.webp',

                'featured' => false,

                'seo_title' => 'Transponder Sticker Enclosure Design | Milestone PLM',

                'seo_description' => 'Optimized a transponder sticker enclosure by reverse-engineering the existing design, reducing dimensions, redesigning assembly features, and delivering production-ready CAD models and drawings.',

                'seo_keywords' => 'Transponder Sticker Enclosure Design, Enclosure Design Services, Enclosure Optimization, CAD Optimization Services, 3D CAD Modeling, CAD Design Services',

                'client' => ' Manufacturer of Plastic Products',

                'location' => 'USA',

                'services' => [
                    'Fixture Design',
                    'Mechanical Design',
                    'Manufacturing Drawings',
                ],

                'overview' => 'Milestone PLM was engaged to recreate and optimize an existing transponder sticker enclosure using a physical sample, STEP file, and manufacturing drawings. The objective was to develop a fully editable parametric CAD model with Drawings while reducing the overall enclosure dimensions without compromising functionality or assembly features. Through multiple design iterations and customer feedback, Milestone PLM refined the design into a compact, production-ready enclosure. ',

                'challenge_title' => 'What Made This Project Complex',

                'challenge' => [
                            'description' => 'The project focused on recreating and optimizing a fully editable CAD model of the transponder sticker enclosure. The enclosure dimensions, locking mechanism, tray, and internal clearances were redesigned to achieve a more compact and functional assembly. The transponder platform was removed to enable direct sticker mounting, while multiple customer revisions were incorporated. Final CAD models and manufacturing drawings were prepared for production. ',

                            'items' => [
                                'Recreate a fully editable CAD model from the customer-provided STEP file and engineering drawings.   ',
                                'Reduce the overall enclosure length, height, and thickness while maintaining its functionality and required features.  ',
                                'Redesign the locking mechanism to ensure secure and reliable assembly within the reduced enclosure dimensions.    ',
                                'Maintain proper component fit, clearances, and alignment throughout the enclosure assembly.  ',
                                'Preserve the sliding functionality of the internal tray while accommodating the reduced enclosure size.    ',
                                'Remove the transponder platform and modify the transponder tray to support direct mounting of the transponder sticker as per the revised requirement.   ',
                                'Further optimize the enclosure thickness while maintaining adequate structural integrity and functionality.    ',
                                'Incorporate multiple customer revisions and generate updated CAD models and manufacturing drawings at each design stage.   ',
                                
                            ],
                ],

                'approach_title' => 'How Milestone PLM delivered',

                'approach' => [
                    'description' => 'Milestone PLM recreated the customer-provided enclosure sample, STEP file, and engineering drawings into a fully editable parametric CAD model while maintaining the required functionality and assembly requirements. The enclosure was optimized by reducing its overall length, height, and thickness, with the locking mechanism redesigned for secure assembly and proper component clearances maintained. The transponder platform was removed, and the internal tray was modified to enable direct mounting of the transponder sticker while preserving smooth sliding operation. The enclosure thickness was further optimized to maintain structural integrity and functionality. Multiple customer revisions were incorporated, with updated CAD models, STEP files, and manufacturing drawings delivered at each stage through final design approval.',
                ],

                'deliverables' => [
                    'Editable parametric 3D CAD model',
                    'Reverse-engineered enclosure assembly  ',
                    'Optimized enclosure design ',
                    'Redesigned transponder tray ',
                    'Modified locking mechanism',
                    'Removal of transponder platform  ',
                    'Direct transponder sticker mounting design  ',
                    'Detailed manufacturing drawings  ',
                    'Assembly and exploded-view drawings   ',
                    'STEP files   ',
                    'Native CAD files  ',
                    'Engineering revision documentation   ',
                ],

                'process_title' => 'How we structured the work',

                'process' => [
                    [
                        'title' => 'Existing Product Analysis ',
                        'description' => 'Studied the physical sample, customer-provided STEP model, and manufacturing drawings to understand the existing design and assembly. ',
                    ],
                    [
                        'title' => 'Editable CAD Modeling ',
                        'description' => 'Recreated the entire enclosure as a fully editable parametric CAD model for efficient design modifications.',
                    ],
                    [
                        'title' => ' Design Optimization ',
                        'description' => 'Reduced the enclosures overall dimensions and redesigned the locking mechanism while preserving assembly and functionality. ',
                    ],
                     [
                        'title' => ' Engineering Revisions ',
                        'description' => 'Removed the transponder platform, modified the tray for direct sticker mounting, and further optimized the enclosure thickness while maintaining the sliding action. ',
                    ],
                    
                     [
                        'title' => ' Customer Review ',
                        'description' => 'Submitted updated STEP files and manufacturing drawings after each design iteration for customer review and approval.  ',
                    ],
                    
                     [
                        'title' => ' Final Delivery ',
                        'description' => 'Delivered the approved editable CAD models, STEP files, detailed drawings, and complete engineering documentation for manufacturing.  ',
                    ],
                    
                    
                ],

                'timeline' => '3 weeks ',

                'team' => '1 Design Engineer',

                'gallery' => [
                    'casestudy/tranponder-sticker-enclosure1.webp',
                    'casestudy/tranponder-sticker-enclosure2.webp',
                    'casestudy/tranponder-sticker-enclosure3.webp',
                    'casestudy/tranponder-sticker-enclosure4.webp',
                    
                ],
            ],
            [
                'id' => 10,

                'slug' => 'vfd-control-panel-design-electrical-engineering',

                'created_at' => '2026-08-02 10:00:00',
                'updated_at' => '2026-08-02 10:00:00',

                'category' => 'Enclosure',

                'tag' => 'Enclosure',

                'title' => 'VFD Control Panel Design & Electrical Engineering Services',

                'excerpt' => 'Case study showcasing VFD control panel design, electrical engineering, thermal management, safety integration, and manufacturing documentation for industrial automation.',

                'image' => 'casestudy/electrical-panel-design.webp',

                'featured' => false,

                'seo_title' => 'VFD Control Panel Design Services and Electrical Engineering | Milestone PLM',

                'seo_description' => 'Engineered a VFD control panel with electrical schematics, GA layout, thermal management, safety integration, network architecture, and manufacturing-ready documentation.',

                'seo_keywords' => 'Electrical Panel Design Services, Electrical Control Panel Design, Electrical Schematic Design, AutoCAD Electrical Services',

                'client' => 'QSPEC Solutions',

                'location' => 'USA',

                'services' => [
                    'Fixture Design',
                    'Mechanical Design',
                    'Manufacturing Drawings',
                ],

                'overview' => 'Milestone PLM provided end-to-end electrical design and control panel engineering support for a multi-drive VFD control system. The project included electrical schematics, 2D GA panel layout, thermal management, power distribution, safety interlocks, industrial network mapping, and manufacturing-ready documentation. The panel architecture was optimized for efficient space utilization, operator safety, signal integrity, serviceability, and seamless manufacturing handover.',

                'challenge_title' => 'What Made This Project Complex',

                'challenge' => [
                            'description' => 'The core engineering challenge was converting high-level automation requirements into a fully optimized, practical, and standard-compliant control panel design. Integrating multiple high-power drive modules alongside sensitive low-voltage control hardware within a single enclosure required overcoming distinct electrical, mechanical, and thermal obstacles. ',

                            'items' => [
                                'Electromagnetic Interference (EMI/RFI) Mitigation: Establishing strict physical and noise isolation between high-power VFD motor circuits and low-voltage control signals to prevent signal corruption over the industrial Ethernet communication backbone.  ',
                                'Enclosure Thermal Management: Planning proper component placement, airflow paths, and forced-air cooling calculations to effectively manage heat generated by multiple drive modules operating simultaneously.  ',
                                'Space Optimization & Ergonimics: Designing an ergonomic 2D General Arrangement layout that maximizes internal panel space while ensuring adequate wireway fill ratios, bending radiuses, and ease of maintenance.  ',
                                'Safety Logic & Interlock Integration: Incorporating fail-safe safety logic, Safe Torque Off (STO) functionality, door interlocks, and main circuit breaker protection to safeguard operators and machinery. ',
                                'Industrial Network Architecture: Establishing a robust, deterministic industrial network topology for real-time monitoring, parameter synchronization, and remote PLC diagnostics across all drive nodes.   ',
                                'Zero-Error Manufacturing Deliverables: Delivering an exhaustive, production-ready documentation package including detailed Bill of Materials (BOM), terminal block allocations, wire-run lists, and single-line diagrams.    ',
                            
                                
                            ],
                ],

                'approach_title' => 'How Milestone PLM delivered',

                'approach' => [
                    'description' => 'Milestone PLM applied a systematic control panel engineering methodology to transform complex drive specifications into a high-performance panel design. The panel architecture was optimized from the inside out to ensure seamless manufacturing, field installation, and long-term serviceability',
                ],

                'deliverables' => [
                    'Turnkey Engineering Ownership: Complete control panel engineering ownership freed client internal resources and accelerated time-to-market for panel assembly. ',
                    'Optimized Footprint & Thermal Safety: Integrated physical layout and thermal modeling eliminated component interference and heat-pocket risks prior to shop-floor fabrication. ',
                    'Reduced Assembly & Wiring Time: Standardized wire-run schedules, clear terminal tagging, and point-to-point schematics substantially reduced wiring errors and panel assembly time.',
                    'Regulatory Compliance: Strict adherence to international panel standards ensured smooth customer sign-off and safety compliance across deployment sites.',
                    'Enhanced Diagnostic & Maintenance Capability: Detailed network topology mapping enabled fast commissioning, simplified troubleshooting, and reduced operational downtime. ',

                ],

                'process_title' => 'How we structured the work',

                'process' => [
                    [
                        'title' => 'Requirement Analysis & System Architecture',
                        'description' => 'Evaluated drive load profiles, operating cycles, incoming power specifications, site environmental conditions, and customer design standards. ',
                    ],
                    [
                        'title' => ' Physical Panel Layout & Thermal Design ',
                        'description' => 'Developed 2D General Arrangement (GA) drawings, panel enclosure sizing, component mounting layouts, cable duct routing, and internal clearance verification. ',
                    ],
                    [
                        'title' => ' Schematics & Power Distribution Design',
                        'description' => 'Prepared single-line diagrams (SLD), multi-line power distribution schematics, protection device selection logic, and grounding layout details.',
                    ],
                    [
                        'title' => ' Network Integration & Safety Logic Design',
                        'description' => 'Mapped industrial Ethernet network connectivity across all drive control units and engineered hardwired Safe Torque Off (STO) emergency stop circuits.',
                    ],
                    [
                        'title' => ' Engineering Revisions & Design Review',
                        'description' => 'Submitted preliminary design drafts for client review, incorporating feedback regarding panel dimensions, component brands, and field wiring requirements.',
                    ],
                    [
                        'title' => ' Final Manufacturing Deliverables',
                        'description' => 'Delivered complete manufacturing drawings, structured wire-run lists, terminal strip diagrams, component tags, and comprehensive Bill of Materials (BOM). ',
                    ],
                  
                    
                ],

                'timeline' => '4 weeks ',

                'team' => '1 Design Engineer',

                'gallery' => [
                    'casestudy/eletrical-panel-design1.webp',
                    'casestudy/eletrical-panel-design2.webp',
                    'casestudy/eletrical-panel-design3.webp',
                    
                ],
            ],
            [
                'id' => 11,

                'slug' => 'concrete-batching-plant-electrical-design-engineering',

                'created_at' => '2026-08-02 10:00:00',
                'updated_at' => '2026-08-02 10:00:00',

                'category' => 'Enclosure',

                'tag' => 'Enclosure',

                'title' => 'Concrete Batching Plant Electrical Design & Engineering',

                'excerpt' => 'A case study showcasing complete electrical design and engineering support for a concrete batching plant, from power distribution and load calculations to panel schedules and grounding.',

                'image' => 'casestudy/concrete-batching-plant.webp',

                'featured' => false,

                'seo_title' => 'Concrete Batching Plant Electrical Design & Engineering | Milestone PLM',

                'seo_description' => 'Explore how Milestone PLM delivered complete electrical design and engineering support for a U.S. concrete batching plant, including power distribution, load calculations, panel schedules, feeder design, grounding, and construction documentation.',

                'seo_keywords' => 'Concrete Batching Plant Electrical Design, Panel Schedule Design, Electrical Design Engineering Services, AutoCAD Electrical Services, Electrical Load Calculation',

                'client' => 'TEC Electric & Engineering',

                'location' => 'USA',

                'services' => [
                    'Fixture Design',
                    'Mechanical Design',
                    'Manufacturing Drawings',
                ],

                'overview' => 'Milestone PLM provided complete electrical design and engineering support for a Concrete Batching Plant project in the USA, covering plant electrical distribution, equipment power distribution, load calculations, panel schedules, feeder and cable design, grounding and bonding, fault-current review, equipment foundations, structural supports, and electrical installation details. Using available equipment information and project requirements, the team developed detailed electrical drawings, performed engineering calculations, coordinated the overall design, and incorporated successive revisions to deliver a practical, coordinated, and construction-ready electrical design package for the concrete batching plant.',

                'challenge_title' => 'What Made This Project Complex',

                'challenge' => [
                            'description' => 'The project required developing the complete electrical design documentation from scratch, starting from the available project requirements and plant information. The challenge was to convert the initial project inputs into a coordinated and practical electrical design package covering the complete plant distribution and supporting documentation.  ',

                            'items' => [
                                'Establishing the overall electrical distribution and equipment hierarchy.  ',
                                'Developing coordinated panel schedules and feeder information for the plant equipment. ',
                                'Determining appropriate cable, conduit, protection, and grounding arrangements.  ',
                                'Coordinating available fault current and equipment rating requirements. ',
                                'Developing grounding, bonding, and grounding electrode details for the plant. ',
                                'Creating practical equipment foundation and structural support details for outdoor electrical equipment.   ',
                            
                                
                            ],
                ],

                'approach_title' => 'How Milestone PLM delivered',

                'approach' => [
                    'description' => 'Milestone PLM developed the electrical design package systematically from the initial project requirements, coordinating the plant distribution, equipment loads, protection, grounding, and installation details into a single coordinated design. ',
                ],

                'deliverables' => [
                    'Complete electrical design ownership reduced the clients dependency on additional in-house electrical design resources and supported end-to-end project execution.   ',
                    'Integrated electrical engineering support streamlined the transition from project requirements to detailed electrical drawings and construction documentation. ',
                    'Coordinated design and documentation helped improve project execution by bringing load calculations, panel schedules, feeder design, grounding, and equipment details into one coordinated package.',
                    'Constructability-focused engineering improved coordination between electrical equipment, foundations, structural supports, conduit routing, and field installation requirements.',
                    'Complete design documentation support covered electrical layouts, panel schedules, feeder schedules, grounding details, fault-current review, equipment foundations, structural support details, and installation notes. ',

                ],

                'process_title' => 'How we structured the work',

                'process' => [
                    [
                        'title' => 'Electrical System Development',
                        'description' => 'Developed the main power distribution system, feeder arrangement, grounding system, and electrical equipment layout. ',
                    ],
                    [
                        'title' => 'Load Calculation & Panel Schedule',
                        'description' => 'Prepared load calculations, demand assessment, feeder sizing, and panel schedules for the major plant equipment.  ',
                    ],
                    [
                        'title' => 'Engineering Revisions',
                        'description' => 'Updated the design based on revised client requirements, including the addition of the panels and corresponding changes to the power distribution arrangement.',
                    ],
                    [
                        'title' => ' Customer Review',
                        'description' => 'Submitted drawings and engineering details for customer review and incorporated required comments and design updates. ',
                    ],
                    [
                        'title' => ' Final Delivery',
                        'description' => 'Delivered the coordinated electrical drawings, panel schedules, calculations, grounding details, equipment support details, and engineering documentation for final review and IFC development. ',
                    ],
                   
                  
                    
                ],

                'timeline' => '4 weeks ',

                'team' => '1 Design Engineer',

                'gallery' => [
                    'casestudy/concrete-batching-plant1.webp',
                    'casestudy/concrete-batching-plant2.webp',
                    'casestudy/concrete-batching-plant3.webp',
                    'casestudy/concrete-batching-plant4.webp',
                    'casestudy/concrete-batching-plant5.webp',
                    'casestudy/concrete-batching-plant6.webp',
                ],
            ],
            
            [
                'id' => 12,

                'slug' => 'sheet-storage-rack-design-fabrication-support',

                'created_at' => '2026-08-02 10:00:00',
                'updated_at' => '2026-08-02 10:00:00',

                'category' => 'Fabrication',

                'tag' => 'Fabrication',

                'title' => '5 × 10 Sheet Storage Rack Design & Fabrication Support',

                'excerpt' => ' The design and fabrication support of a 5 × 10 sheet storage rack system, from single-rack development to a complete 10-rack structure.',

                'image' => 'casestudy/sheet-storage.webp',

                'featured' => false,

                'seo_title' => 'Sheet Storage Rack Design & Fabrication Support | Milestone PLM',

                'seo_description' => 'Milestone PLM developed a 5 × 10 sheet storage rack system, including 3D CAD design, 10-rack structure development, manufacturing drawings, welding fixtures, and fabrication support.',

                'seo_keywords' => 'Sheet Storage Rack Design, 3D CAD Design Services,Fabrication Support, CAD Design Services, Custom Storage Rack Design ',

                'client' => 'Industrial Client',

                'location' => 'USA',

                'services' => [
                    'Fixture Design',
                    'Mechanical Design',
                    'Manufacturing Drawings',
                ],

                'overview' => 'The customer required a storage rack system for handling and storing 5 × 10 sheets as per specified capacity and height requirements. We initially developed a single rack in 3D CAD to validate the concept and obtain customer feedback. After finalizing the individual rack, we developed the complete 10-rack storage structure and reviewed the concept with the customer. The design was optimized to meet the required strength and functionality while avoiding unnecessary structural weight. Manufacturing drawings, welding fixtures, and fabrication support were provided through to successful product development. ',

                'challenge_title' => 'What Made This Project Complex',

                'challenge' => [
                            'description' => 'The main challenge was to develop a practical rack that could safely accommodate the required 5 × 10 sheets and storage capacity.the structure needed to meet the specified height and configuration while keeping the overall weight within a practical limit.The concept also had to be developed progressively from a single rack to the complete 10-rack structure.Fabrication required clear manufacturing drawings and suitable welding fixtures for accurate and efficient assembly.Field issues identified during fabrication also required simple modifications without unnecessarily increasing the structure’s weight or complexity. ',

                            'items' => [
                                'Accommodating 5 × 10 sheets and required capacity.  ',
                                'Maintaining required height and rack configuration.  ',
                                'Optimizing strength while controlling structural weight.  ',
                                'Developing the complete 10-rack structure. ',
                                'Designing fabrication-friendly welding fixtures.  ',
                                'Addressing field issues during fabrication.  ',
                                'Implementing practical, lightweight modifications. ',
                                
                            ],
                ],

                'approach_title' => 'How Milestone PLM delivered',

                'approach' => [
                    'description' => 'We first studied the sheet dimensions, storage capacity, rack quantity, height, and structural weight requirements. A single rack was developed in 3D CAD and refined through customer reviews before proceeding with the complete structure. The finalized rack was then used to develop and review the 10-rack storage system while considering strength, functionality, and weight.Manufacturing drawings and three welding hand fixtures were developed to support accurate and efficient fabrication.During physical fabrication, field issues were reviewed and resolved through simple design modifications while maintaining the intended structural performance. ',
                ],

                'deliverables' => [
                    'Single rack 3D CAD model  ',
                    'Final 10-rack storage structure ',
                    'Weight-conscious structural design ',
                    'Customer review and design modifications ',
                    'Manufacturing drawings  ',
                    'Three welding hand fixtures  ',
                    'Fabrication and field support  ',

                ],

                'process_title' => 'How we structured the work',

                'process' => [
                    [
                        'title' => ' Requirement Study',
                        'description' => 'Understanding sheet dimensions, capacity, rack quantity, height, and structural weight requirements. ',
                    ],
                    [
                        'title' => 'Single Rack Design',
                        'description' => 'Developing and finalizing the individual rack through 3D modeling and customer review. ',
                    ],
                    [
                        'title' => '10-Rack Structure',
                        'description' => 'Creating the complete storage structure with focus on functionality, strength, and controlled weight.',
                    ],
                    [
                        'title' => 'Drawing & Fixture Design',
                        'description' => 'Preparing manufacturing drawings and three welding fixtures for accurate rack fabrication.  ',
                    ],
                    [
                        'title' => 'Fabrication Support',
                        'description' => 'Supporting physical fabrication and resolving field issues through practical design modifications. ',
                    ],
                   
                  
                    
                ],

                'timeline' => '4 weeks ',

                'team' => '1 Engineer',

                'gallery' => [
                    'casestudy/sheet-storage1.webp',
                    'casestudy/sheet-storage2.webp',
                    'casestudy/sheet-storage3.webp',
                    'casestudy/sheet-storage4.webp',
                    'casestudy/sheet-storage5.webp',
                    'casestudy/sheet-storage6.webp',
                ],
            ],
            [
                'id' => 13,

                'slug' => 'boot-glove-gear-drying-system-design',

                'created_at' => '2026-08-02 10:00:00',
                'updated_at' => '2026-08-02 10:00:00',

                'category' => 'Fabrication',

                'tag' => 'Fabrication',

                'title' => 'Boot, Glove & Gear Drying Systems Design & CFD Engineering',

                'excerpt' => ' Developed customized boot, glove, and gear drying systems using 3D design, CFD analysis, and manufacturing-ready engineering drawings.',

                'image' => 'casestudy/drying-system.webp',

                'featured' => false,

                'seo_title' => 'Boot, Glove & Gear Drying Systems | Milestone PLM',

                'seo_description' => 'Explore how Milestone PLM developed customized boot, glove, and gear drying systems using 3D design, CFD analysis, and manufacturing-ready engineering drawings.',

                'seo_keywords' => 'Boot Drying System Design, Drying System Design Services,Engineering Design Services,3D Product Design, ',

                'client' => 'Industrial Client',

                'location' => 'USA',

                'services' => [
                    'Fixture Design',
                    'Mechanical Design',
                    'Manufacturing Drawings',
                ],

                'overview' => 'We developed customized dryer systems for gloves, boots, and gear from raw customer concepts, creating and optimizing 3D designs based on functional, mechanical, and fabrication requirements. CFD analysis was performed to validate airflow and optimize performance, followed by final design validation and delivery of complete fabrication and assembly drawings for manufacturing. ',

                'challenge_title' => 'What Made This Project Complex',

                'challenge' => [
                            'description' => 'The project was complex because it required converting raw customer concepts into practical, manufacturable dryer designs while continuously balancing airflow performance, mechanical design, fabrication constraints, and customer requirements. Multiple design iterations and CFD simulations were required to achieve the desired performance.  ',

                            'items' => [
                                'Converting raw concepts into detailed 3D designs.  ',
                                'Managing continuous customer-driven design changes.',
                                'Optimizing airflow and velocity distribution through CFD simulation.  ',
                                'Balancing mechanical design with fabrication and assembly requirements. ',
                                'Developing new and customized dryer configurations.  ',
                                'Repeated design–simulation–modification cycles.  ',
                                'Preparing accurate fabrication and assembly drawings for production.  ',
                                
                            ],
                ],

                'approach_title' => 'How Milestone PLM delivered',

                'approach' => [
                    'description' => 'We followed an iterative design, review, simulation, and optimization approach, converting the customer’s raw concepts into practical and manufacturable dryer designs. We developed 3D models, incorporated customer feedback, provided mechanical and fabrication improvements, validated airflow performance through CFD simulation, and optimized the design accordingly. The final deliverables included validated 3D models, optimized designs, fabrication drawings, and assembly drawings ready for manufacturing.  ',
                ],

                'deliverables' => [
                    'Customer-approved 3D dryer designs for gloves, boots, and gear. ',
                    'Optimized mechanical and fabrication-ready designs. ',
                    'CFD-based airflow and velocity analysis. ',
                    'Final validated and optimized models. ',
                    'Detailed fabrication and assembly drawings.  ',
                    'Manufacturing-ready engineering documentation. ',
                
                ],

                'process_title' => 'How we structured the work',

                'process' => [
                    [
                        'title' => ' Concept & Requirement Review',
                        'description' => 'Understand the customer’s concept, application, and functional requirements. ',
                    ],
                    [
                        'title' => '3D Design & Development',
                        'description' => 'Develop the dryer design and incorporate mechanical and fabrication considerations.  ',
                    ],
                    [
                        'title' => 'Customer Review & Modification',
                        'description' => 'Review the design with the customer and implement required changes. ',
                    ],
                    [
                        'title' => 'Simulation & Optimization ',
                        'description' => 'Perform CFD airflow analysis and optimize the design based on simulation results. ',
                    ],
                    [
                        'title' => 'Final Engineering Delivery',
                        'description' => ' Release the finalized 3D model, fabrication drawings, and assembly drawings for manufacturing.  ',
                    ],
                   
                  
                    
                ],

                'timeline' => '4 weeks ',

                'team' => '1 Engineer',

                'gallery' => [
                    'casestudy/drying-system1.webp',
                    'casestudy/drying-system2.webp',
                    'casestudy/drying-system3.webp',
                    'casestudy/drying-system4.webp',
                    'casestudy/drying-system5.webp',
                   
                ],
            ],
            [
                'id' => 14,

                'slug' => 'commercial-casework-development-microvellum-cnc',

                'created_at' => '2026-08-02 10:00:00',
                'updated_at' => '2026-08-02 10:00:00',

                'category' => 'Millwork',

                'tag' => 'Millwork',

                'title' => 'Commercial Casework Development Using Microvellum for CNC Manufacturing',

                'excerpt' => 'Explore how Milestone PLM used Microvellum to develop production-ready commercial casework models and CNC-ready manufacturing data for a U.S. millwork manufacturer.',

                'image' => 'casestudy/commercial-casework.webp',

                'featured' => false,

                'seo_title' => 'Microvellum Casework Design for CNC Manufacturing | Milestone PLM',

                'seo_description' => 'Milestone PLM delivered Microvellum casework design and engineering support for commercial interiors, providing production-ready 3D models, manufacturing drawings, and CNC-ready data.',

                'seo_keywords' => ' Microvellum Casework Design, Microvellum 3D Modeling, CAD Design Services, Engineering Design Services',

                'client' => 'Manufacturer of Millwork',

                'location' => 'USA',

                'services' => [
                    'Fixture Design',
                    'Mechanical Design',
                    'Manufacturing Drawings',
                ],

                'overview' => 'Milestone PLM was engaged as an extended engineering resource to develop production-ready commercial casework solutions for CNC manufacturing, supporting multiple commercial interior and retail fit-out programs by creating detailed 3D casework assemblies using Microvellum with a focus on manufacturing accuracy, optimized material utilization, and a seamless transition from design to production. By engineering configurable casework units tailored for efficient fabrication and assembly and integrating design intent with manufacturing requirements, the solution streamlined production workflows, improved consistency across assemblies, and enabled faster delivery of high-quality custom millwork and business furnishings. ',

                'challenge_title' => 'What Made This Project Complex',

                'challenge' => [
                            'description' => 'Commercial casework and retail fit-out programs present demanding manufacturing challenges that require rigorous precision and efficient workflow integration. Translating diverse architectural designs into production-ready CNC outputs involves balancing tight tolerances, material optimization, and complex assembly constraints. Navigating these multi-program requirements leaves zero room for error from initial 3D modeling to final workshop fabrication. ',

                            'items' => [
                                'Developing highly accurate 3D casework models suitable for direct CNC machining.  ',
                                'Maintaining strict design consistency and layout standards across multiple commercial projects.',
                                'Optimizing cabinet construction and assembly methods to minimize production errors. ',
                                'Managing complex project revisions while safeguarding strict delivery schedules. ',
                                'Producing flawless, fabrication-ready outputs and engineering files for seamless manufacturing. ',
                                
                            ],
                ],

                'approach_title' => 'How Milestone PLM delivered',

                'approach' => [
                    'description' => 'Milestone PLM acted as an extended engineering team, providing comprehensive design and manufacturing support throughout the product development lifecycle. A dedicated team consisting of Design Engineers and CAD Specialists was assigned to the project. We developed detailed 3D casework models using Microvellum, parameterised cabinet configurations for efficient product development, and provided engineering support through manufacturing and production. ',
                ],

                'deliverables' => [
                    'Complete Microvellum 3D casework models for cabinet and millwork projects  ',
                    'Parametric cabinet models and product configurations for standardized manufacturing ',
                    'Engineering review and design validation for manufacturability  ',
                    'Production-ready cabinet assemblies and manufacturing drawings  ',
                    'CNC-ready engineering data and machining preparation   ',
                    'Material optimization and assembly sequence verification ',
                    'Component identification, labeling, and manufacturing change implementation ',
                    'Production issue resolution and continuous engineering support throughout fabrication ',
                    
                
                ],

                'process_title' => 'How we structured the work',

                'process' => [
                    [
                        'title' => ' Requirement Review & Project Planning',
                        'description' => 'Reviewed customer-provided architectural drawings, design specifications, casework requirements, materials, hardware, and project standards to establish the modeling scope, design requirements, and project workflow. ',
                    ],
                    [
                        'title' => '3D Casework Modeling & Design Development',
                        'description' => 'Developed detailed 3D casework models in Microvellum, including cabinet configurations, components, assemblies, hardware, and parametric elements. Standardized repeated casework components to maintain consistency and support efficient design revisions. ',
                    ],
                    [
                        'title' => 'Engineering Documentation & Design Updates',
                        'description' => 'Prepared detailed design and drafting documentation, including casework drawings, assembly details, component information, CNC-ready design data, and related project documentation. Incorporated customer comments, design revisions, and Engineering Change Notices (ECNs) across the project. ',
                    ],
                    [
                        'title' => 'Design Review & Final Delivery',
                        'description' => 'Performed quality checks on 3D models, drawings, assemblies, and design data to verify dimensional accuracy, design consistency, and compliance with customer requirements. Delivered complete design and drafting packages and provided ongoing engineering support for design clarifications and revisions. ',
                    ],
                    
                ],

                'timeline' => '4 weeks ',

                'team' => '3 Engineer',

                'gallery' => [
                   'casestudy/microvellum1.webp',
                   'casestudy/microvellum2.webp',
                   'casestudy/microvellum3.webp',
                   'casestudy/microvellum4.webp',

                    
                ],
            ],
            [
                'id' => 15,

                'slug' => 'custom-double-operator-styling-station-microvellum',

                'created_at' => '2026-08-02 10:00:00',
                'updated_at' => '2026-08-02 10:00:00',

                'category' => 'Millwork',

                'tag' => 'Millwork',

                'title' => 'Custom Double-Operator Styling Station Design in Microvellum',

                'excerpt' => 'A custom double-operator salon styling station engineered in Microvellum with detailed casework, drawer assemblies, and integrated appliance provisions.',

                'image' => 'casestudy/custom-double-operator.webp',

                'featured' => false,

                'seo_title' => 'Microvellum Casework Design for Custom Salon Furniture | Milestone PLM',

                'seo_description' => 'Explore how Milestone PLM engineered a custom double-operator styling station in Microvellum with detailed casework, drawers, and appliance provisions.',

                'seo_keywords' => ' Microvellum Casework Design, Custom Salon Furniture Design,Furniture CAD Design, CAD Design Services, Engineering Design Services',

                'client' => ' Manufacturer of Commercial Millwork ',

                'location' => 'USA',

                'services' => [
                    'Fixture Design',
                    'Mechanical Design',
                    'Manufacturing Drawings',
                ],

                'overview' => 'Milestone PLM partnered with a commercial millwork client to develop a fully custom double-operator styling station as part of a salon furniture unit. The project involved developing the complete casework design in Microvellum, including individual components, drawer assemblies, appliance provisions, and supporting cabinet elements. Each custom part was developed and defined using Microvellum Part Properties to achieve the required geometry, construction details, and design intent while maintaining consistency across the complete styling station.  ',

                'challenge_title' => 'What Made This Project Complex',

                'challenge' => [
                            'description' => 'The double-operator styling station required a highly customized casework design with multiple functional elements integrated into a single furniture unit. Each component had to be individually engineered in Microvellum to accommodate the unique design requirements while maintaining accurate relationships between cabinets, drawers, appliance provisions, and shared workstation elements.  ',

                            'items' => [
                                'Fully custom styling station requiring individual part development and engineering   ',
                                'Double-operator configuration requiring coordinated layouts and symmetrical functional areas ',
                                'Integrated drawer and appliance provisions requiring accurate component coordination  ',
                                'Custom part geometries requiring detailed Part Properties in Microvellum ',
                                'Design validation required to maintain dimensional accuracy and consistency across the complete unit  ',
                                
                            ],
                ],

                'approach_title' => 'How Milestone PLM delivered',

                'approach' => [
                    'description' => 'Milestone PLM developed the complete double-operator styling station as a custom Microvellum casework project. Each component was individually created and configured using Part Properties to capture the required dimensions, construction details, materials, and design intent. The overall unit was then coordinated as a complete assembly to ensure accurate relationships between the operator stations, drawers, appliance provisions, and supporting casework elements.  ',
                ],

                'deliverables' => [
                    'Complete Microvellum 3D model of the custom double-operator styling station ',
                    'Individually engineered casework components using Microvellum Part Properties',
                    'Custom drawer assemblies and integrated appliance provisions  ',
                    'Coordinated double-operator workstation configuration ',
                    'Detailed casework and component design supporting the clients custom requirements  ',
                    'Design documentation and engineering data for the complete salon furniture unit ',
                    
                ],

                'process_title' => 'How we structured the work',

                'process' => [
                    [
                        'title' => ' Client Inputs & Design Review ',
                        'description' => 'Received client-provided design information, drawings, dimensions, reference details, and functional requirements. Reviewed the inputs to understand the styling station layout, component requirements, and overall design intent.  ',
                    ],
                    [
                        'title' => 'Design Interpretation & Casework Setup ',
                        'description' => 'Translated the clients requirements into the Microvellum environment and established the overall casework structure. Defined the double-operator layout, storage areas, drawer locations, appliance provisions, and key dimensional relationships. ',
                    ],
                    [
                        'title' => 'Custom Part Development ',
                        'description' => 'Created the individual components required for the styling station and defined their geometry and construction characteristics using Microvellum Part Properties. Coordinated the components to form the complete custom furniture unit. ',
                    ],
                    [
                        'title' => 'Internal Review & Client Submission ',
                        'description' => 'Performed an internal review of the completed model to verify dimensions, component relationships, design consistency, and alignment with the clients requirements. Prepared and submitted the completed design package for client review and incorporated required feedback or revisions.',
                    ],
                    
                ],

                'timeline' => '1 weeks ',

                'team' => '1 Engineer',

                'gallery' => [
                    'casestudy/custom-double-operator1.webp',
                    'casestudy/custom-double-operator2.webp',
                    'casestudy/custom-double-operator3.webp',
                  
                ],
            ],
            [
                'id' => 16,

                'slug' => 'cabinet-vision-parametric-programming-cnc-production',

                'created_at' => '2026-08-02 10:00:00',
                'updated_at' => '2026-08-02 10:00:00',

                'category' => 'Millwork',

                'tag' => 'Millwork',

                'title' => 'Parametric Cabinet Vision Programming for Commercial Millwork',

                'excerpt' => 'A case study on parametric Cabinet Vision programming for commercial millwork, delivering configurable cabinet designs and CNC-ready production files..',

                'image' => 'casestudy/engineering-custom-furniture.webp',

                'featured' => false,

                'seo_title' => 'Cabinet Vision Parametric Programming | Milestone PLM',

                'seo_description' => 'Milestone PLM developed parametric Cabinet Vision programs for commercial millwork, generating CNC-ready files, cutting lists, labels, and production data.',

                'seo_keywords' => 'Cabinet Vision Programming, Commercial Millwork Design,Parametric Furniture Programming,Commercial Casework Design',

                'client' => ' Furniture Manufacturing / Mill-work ',

                'location' => 'USA',

                'services' => [
                    'Fixture Design',
                    'Mechanical Design',
                    'Manufacturing Drawings',
                ],

                'overview' => 'Milestone PLM partnered with a commercial millwork manufacturer to develop a parametric design solution for a range of custom cabinetry and casework applications. The project focused on creating configurable product programs in Cabinet Vision that could accommodate varying commercial casework requirements while maintaining consistent design standards. Through parametric programming, Milestone PLM developed accurate design models and generated CNC-ready production files, cutting lists, labels, and related documentation through S2M Center, creating a streamlined transition from design intent to production-ready data.	 ',

                'challenge_title' => 'What Made This Project Complex',

                'challenge' => [
                            'description' => 'Parametric modeling requires flexible programming that can accommodate multiple cabinet sizes, configurations, materials, and construction methods while maintaining consistent design and CNC-ready outputs. The programming logic had to support customization without creating separate programs for every product variation. ',

                            'items' => [
                                'Multiple cabinet sizes and configurations requiring flexible parametric logic   ',
                                'Different cabinet styles, materials, hardware, and construction methods requiring configurable parameters ',
                                'Accurate machining operations, drilling patterns, and cutting data across design variations  ',
                                'CNC-ready outputs, cutting lists, labels, and production documentation requiring consistent data ',
                                'Program testing and refinement to validate Cabinet Vision outputs against production requirements ',
                                
                            ],
                ],

                'approach_title' => 'How Milestone PLM delivered',

                'approach' => [
                    'description' => 'Milestone PLM deployed a dedicated Cabinet Vision programming team to develop parametric furniture programs for commercial casework applications. We built configurable cabinet programs covering multiple sizes, styles, materials, hardware, and construction methods, with programming logic designed to automate design variations and maintain consistent outputs. CNC-ready machining files and production documentation were generated through S2M Center for seamless integration into the clients production workflow. ',
                ],

                'deliverables' => [
                    'Complete parametric Cabinet Vision programs for commercial casework ',
                    'Configurable cabinet designs supporting multiple sizes, styles, materials, and hardware options',
                    'Automated machining operations, drilling patterns, and CNC-ready files through S2M Center ',
                    'Cutting lists, labels, and production documentation generated from programmed designs',
                    'Program testing and validation to ensure accurate design and CNC outputs ',
                    'Standardized program files and documentation for future product configurations and updates',
                    
                ],

                'process_title' => 'How we structured the work',

                'process' => [
                    [
                        'title' => ' Model Build  ',
                        'description' => 'Developed parametric commercial casework programs in Cabinet Vision, establishing configurable cabinet models for different sizes, materials, hardware, and construction methods.  ',
                    ],
                    [
                        'title' => 'Parametric Programming  ',
                        'description' => 'Defined product parameters and programming logic to automate cabinet variations while maintaining consistent design standards and machining requirements.  ',
                    ],
                    [
                        'title' => 'CNC Data & Documentation  ',
                        'description' => 'Generated CNC-ready machining files through S2M Center, along with cutting lists, labels, and related production documentation from the programmed designs. ',
                    ],
                    [
                        'title' => 'Review & Validation',
                        'description' => 'Conducted testing and quality checks on parametric programs and generated outputs to validate design accuracy, machining data, and consistency across different casework configurations. ',
                    ],
                    
                ],

                'timeline' => '1 weeks ',

                'team' => '1 Engineer',

                'gallery' => [
                    'casestudy/engineering-custom-furniture1.webp',
                    'casestudy/engineering-custom-furniture2.webp',
                    'casestudy/engineering-custom-furniture3.webp',
                    'casestudy/engineering-custom-furniture4.webp',
                    'casestudy/engineering-custom-furniture5.webp',
                ],
            ],
           
        ];


        usort($caseStudies, function ($a, $b) {

            $dateA = $a['updated_at']
                ?? $a['created_at']
                ?? '1970-01-01 00:00:00';

            $dateB = $b['updated_at']
                ?? $b['created_at']
                ?? '1970-01-01 00:00:00';

            return strtotime($dateB) <=> strtotime($dateA);
        });

        return $caseStudies;
    }
}


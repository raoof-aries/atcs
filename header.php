<?php
// Identify the current page from the script name
$currentPage = basename($_SERVER['SCRIPT_NAME']);

// Default SEO values (Fallback)
$metaTitle = "Aries Trading Contracting and Services - Professional Industrial Solutions";
$metaDescription = "Aries Trading Contracting and Services (ATCS) is a leading provider of precision engineering, repair, and maintenance services for the Oil & Gas, Offshore, Onshore, Marine, and petrochemical sectors in Qatar.";
$metaKeywords = "Aries Trading Contracting and Services, ATCS, OCTG maintenance, welding and fabrication, corrosion control, pressure testing, valve repair, load testing, wire rope socketing, industrial solutions, Qatar";

// Page-specific overrides mapping
$seoMap = [
    'index.php' => [
        'title' => 'Aries Trading Contracting and Services | Professional Industrial Solutions',
        'desc' => 'Trusted provider of precision repair, maintenance, and contracting services ensuring safety, efficiency, and lasting performance for the Oil & Gas, Offshore, Onshore, and Marine industries.',
        'keywords' => 'Aries Trading Contracting and Services, ATCS, industrial contracting, Qatar oil and gas services, engineering maintenance, professional repair services'
    ],
    'octg.php' => [
        'title' => 'OCTG Maintenance & Repair Services | ATCS',
        'desc' => 'High-quality, cost-effective Oil Country Tubular Goods (OCTG) inspection, maintenance, and repair services including thread repair, drill pipe straightening, and storage solutions.',
        'keywords' => 'OCTG maintenance, OCTG repair, drill pipe inspection, thread repair, drilling handling tools, casing inspection, refacing API connections'
    ],
    'welding-fab.php' => [
        'title' => 'Welding and Fabrication Services | ATCS',
        'desc' => 'Deployment-class certified welding and custom metal fabrication services for structural, piping, and process equipment in marine, offshore, and industrial sectors.',
        'keywords' => 'welding and fabrication, certified welding, structural steel repair, pre-fabrication, sea fastening, marine fabrication, process piping'
    ],
    'corrosion-control-services.php' => [
        'title' => 'Corrosion Control Services | ATCS',
        'desc' => 'Comprehensive corrosion control, abrasive blasting, protective coating, and painting solutions to extend the service life of marine, offshore, and industrial assets.',
        'keywords' => 'corrosion control, abrasive blasting, protective coating, sandblasting, industrial painting, asset preservation'
    ],
    'pressure-testing-valve-repair.php' => [
        'title' => 'Pressure Testing & Valve Repair Services | ATCS',
        'desc' => 'Hydrostatic and pneumatic pressure testing with certified valve repair, reconditioning, and servicing to the highest industry standards.',
        'keywords' => 'pressure testing, valve repair, valve servicing, hydrostatic testing, pneumatic pressure testing, valve calibration'
    ],
    'pressure-testing-services.php' => [
        'title' => 'Pressure Testing Services | ATCS',
        'desc' => 'Certified hydrostatic and pneumatic pressure testing services ensuring integrity and compliance for piping, vessels, and industrial equipment.',
        'keywords' => 'pressure testing services, hydrostatic test, pneumatic test, piping pressure test, pressure vessel testing'
    ],
    'load-testing.php' => [
        'title' => 'Load Testing & Calibration Services | ATCS',
        'desc' => 'Professional load testing for lifting equipment, water bag proof testing, load cell calibration, and structural testing with certified documentation.',
        'keywords' => 'load testing, water bags testing, load cell calibration, proof load test, lifting gear inspection, crane load testing'
    ],
    'wire-rope-services.php' => [
        'title' => 'Wire Rope Socketing & Spooling Services | ATCS',
        'desc' => 'Precision wire rope socketing, spooling, testing, and termination services for marine, offshore, and heavy-lifting industrial operations worldwide.',
        'keywords' => 'wire rope services, wire rope socketing, wire rope spooling, rigging services, wire rope termination, socketing and spooling'
    ],
    'contact.php' => [
        'title' => 'Contact Us | Aries Trading Contracting and Services',
        'desc' => 'Get in touch with Aries Trading Contracting and Services (ATCS) in Qatar. Contact our experts for industrial service inquiries, custom quotes, or support.',
        'keywords' => 'contact ATCS, Aries Trading contact, industrial services Qatar, request a quote, ATCS office, call ATCS'
    ],
    'abrasive-blasting.php' => [
        'title' => 'Abrasive Blasting Services | ATCS',
        'desc' => 'Professional abrasive blasting and sandblasting services to clean surfaces and prepare them for protective coating applications.',
        'keywords' => 'abrasive blasting, sandblasting, surface preparation, metal cleaning, industrial blasting'
    ],
    'bottom-hole-assembly-inspection.php' => [
        'title' => 'Bottom Hole Assembly (BHA) Inspection | ATCS',
        'desc' => 'Precision inspection services for Bottom Hole Assemblies (BHA) to identify fatigue and defects, preventing downhole failures.',
        'keywords' => 'BHA inspection, bottom hole assembly, drill collar inspection, non-destructive testing, NDT inspection'
    ],
    'deployment-class-certified.php' => [
        'title' => 'Deployment-Class Certified Welding | ATCS',
        'desc' => 'High-standard, certified welding services meeting strict deployment class regulations for offshore and heavy industrial applications.',
        'keywords' => 'certified welding, deployment class welding, ASME welding, AWS welding, structural welding'
    ],
    'drill-pipe-inspection.php' => [
        'title' => 'Drill Pipe Inspection & Straightening | ATCS',
        'desc' => 'Thorough inspection and precision straightening of drill pipes to ensure operational safety and compliance with API standards.',
        'keywords' => 'drill pipe inspection, drill pipe straightening, pipe inspection, API RP 7G, drilling tools'
    ],
    'drilling-handling-tools.php' => [
        'title' => 'Drilling Handling Tools Service & Repair | ATCS',
        'desc' => 'Expert maintenance, repair, and certified inspection for all types of drilling handling tools and equipment.',
        'keywords' => 'drilling handling tools, handling tool repair, manual tongs, elevators inspection, slips repair'
    ],
    'flow-meter-calibration.php' => [
        'title' => 'Flow Meter Calibration Services | ATCS',
        'desc' => 'Accurate calibration services for industrial flow meters to guarantee precise measurement and control in process systems.',
        'keywords' => 'flow meter calibration, meter calibration, flow measurement, calibration services'
    ],
    'helideck-maintenance.php' => [
        'title' => 'Helideck Maintenance & Inspection Services | ATCS',
        'desc' => 'Comprehensive helideck maintenance, friction testing, net installation, and compliance inspections according to CAP 437 regulations.',
        'keywords' => 'helideck maintenance, helideck friction testing, CAP 437, offshore helideck, helideck net'
    ],
    'high-pressure-washing.php' => [
        'title' => 'High-Pressure Washing & Pipe Storage | ATCS',
        'desc' => 'Industrial high-pressure internal and external pipe washing, cleaning, preservation, and secure storage services.',
        'keywords' => 'high pressure pipe washing, pipe cleaning, tubular storage, pipe preservation'
    ],
    'hydro-jetting-services.php' => [
        'title' => 'Hydro Jetting Services | ATCS',
        'desc' => 'High-pressure hydro jetting services for industrial tank, vessel, and pipeline cleaning and blockage removal.',
        'keywords' => 'hydro jetting, industrial cleaning, tank cleaning, high pressure water jetting, pipeline cleaning'
    ],
    'load-cell-calibration.php' => [
        'title' => 'Load Cell Calibration Services | ATCS',
        'desc' => 'Precision calibration services for load cells, tension links, and load monitoring equipment with certified documentation.',
        'keywords' => 'load cell calibration, tension link calibration, force calibration, load monitoring'
    ],
    'load-test-water-bags.php' => [
        'title' => 'Load Testing with Water Bags | ATCS',
        'desc' => 'Safe and efficient proof load testing services using certified water weight bags for cranes, davits, winches, and structures.',
        'keywords' => 'load testing water bags, water weight bags, crane testing, proof load testing'
    ],
    'load-testing-blocks.php' => [
        'title' => 'Load Testing Blocks | ATCS',
        'desc' => 'Proof load testing services using certified solid weights, test blocks, and concrete/steel cradles.',
        'keywords' => 'load testing blocks, concrete test weights, steel weights, solid weight load test'
    ],
    'marine-offshore-fabrication-services.php' => [
        'title' => 'Marine & Offshore Fabrication Services | ATCS',
        'desc' => 'Custom structural and piping fabrication services for marine vessels, offshore rigs, and coastal infrastructure.',
        'keywords' => 'marine fabrication, offshore fabrication, structural steel, marine engineering'
    ],
    'port-based-fabrication-services.php' => [
        'title' => 'Port-Based Fabrication Services | ATCS',
        'desc' => 'Rapid-response, port-based and shipyard structural fabrication, repair, and mobilization services.',
        'keywords' => 'port based fabrication, shipyard services, mobilization, seafastening, vessel repair'
    ],
    'pre-fabrication-offshore-installation.php' => [
        'title' => 'Pre-Fabrication & Offshore Installation | ATCS',
        'desc' => 'Precision onshore pre-fabrication followed by efficient offshore hook-up, installation, and commissioning.',
        'keywords' => 'pre fabrication, offshore installation, hook up, offshore commissioning'
    ],
    'refacing-service.php' => [
        'title' => 'Refacing of API Connections | ATCS',
        'desc' => 'On-site and workshop refacing of damaged API connection seal rings and shoulder faces to restore original integrity.',
        'keywords' => 'refacing API connections, connection refacing, shoulder refacing, thread repair'
    ],
    'riding-squad.php' => [
        'title' => 'Riding Squad Services | ATCS',
        'desc' => 'Highly skilled riding squads comprising welders, fitters, and technicians for voyage repairs and offshore projects.',
        'keywords' => 'riding squad, voyage repairs, ship repair squad, offshore technicians, marine welders'
    ],
    'sea-fastening-services.php' => [
        'title' => 'Sea Fastening Services | ATCS',
        'desc' => 'Engineering and installation of secure sea fastening solutions for heavy cargo, modules, and structures on vessels.',
        'keywords' => 'sea fastening, seafastening, cargo securing, marine transport engineering, deck welding'
    ],
    'structural-piping-modifications.php' => [
        'title' => 'Structural Piping Modifications | ATCS',
        'desc' => 'Certified structural piping modifications, tie-ins, and pipe class overrides for process systems and offshore plants.',
        'keywords' => 'piping modification, structural piping, pipe spool fabrication, piping tie ins'
    ],
    'structural-steel-repairs.php' => [
        'title' => 'Structural Steel Repairs | ATCS',
        'desc' => 'Complete structural steel inspection, repair, reinforcement, and renewal for offshore platforms, rigs, and industrial buildings.',
        'keywords' => 'structural steel repair, steel renewal, plate replacement, structural reinforcement'
    ],
    'test-bed-capacity.php' => [
        'title' => 'Test Bed Capacity & Proof Testing | ATCS',
        'desc' => 'Heavy-capacity horizontal and vertical test bed facilities for proof load testing of wire ropes, slings, and rigging gear.',
        'keywords' => 'test bed capacity, tensile testing, proof load testing, wire rope testing'
    ],
    'test-weight-and-tray.php' => [
        'title' => 'Test Weight & Tray Services | ATCS',
        'desc' => 'Certified test weight trays, cradle designs, and heavy weight rentals for structural and crane load testing.',
        'keywords' => 'test weight tray, test weights rental, solid load test weights'
    ],
    'thread-inspection.php' => [
        'title' => 'Thread Inspection & Repair | ATCS',
        'desc' => 'Thorough inspection of API and premium connection threads, with certified repair and preservation services.',
        'keywords' => 'thread inspection, thread repair, API threads, premium connections, NDT thread'
    ],
    'tubing-casing-inspection.php' => [
        'title' => 'Tubing & Casing Inspection Services | ATCS',
        'desc' => 'Electro-magnetic and ultrasonic inspection services for oil country tubing and casing to detect corrosion, wear, and flaws.',
        'keywords' => 'tubing inspection, casing inspection, EMI inspection, thickness measurement, OCTG'
    ],
    'valve-repair-servicing.php' => [
        'title' => 'Valve Repair & Servicing | ATCS',
        'desc' => 'Certified servicing, overhaul, and repair of gate, globe, ball, butterfly, control, and safety relief valves.',
        'keywords' => 'valve repair, valve servicing, valve overhaul, safety valve calibration, control valves'
    ],
    'yard-facility.php' => [
        'title' => 'Yard Facility & Pipe Storage Services | ATCS',
        'desc' => 'Spacious, secure yard facility equipped for tubular handling, long-term storage, inspection, and logistics.',
        'keywords' => 'yard facility, pipe yard, tubular storage, industrial logistics, tubular handling'
    ]
];

// Check if current page is in the map, override if so
if (isset($seoMap[$currentPage])) {
    $metaTitle = $seoMap[$currentPage]['title'];
    $metaDescription = $seoMap[$currentPage]['desc'];
    $metaKeywords = $seoMap[$currentPage]['keywords'];
}

// Open Graph details
$ogUrl = "https://ariestcs.com/" . ($currentPage === 'index.php' ? '' : str_replace('.php', '', $currentPage));
$ogImage = "https://ariestcs.com/assets/img/custom/og-image.png";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo htmlspecialchars($metaTitle); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($metaDescription); ?>" />
    <meta name="keywords" content="<?php echo htmlspecialchars($metaKeywords); ?>" />
    <meta name="author" content="Aries Trading Contracting and Services" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo htmlspecialchars($ogUrl); ?>" />
    <meta property="og:title" content="<?php echo htmlspecialchars($metaTitle); ?>" />
    <meta property="og:description" content="<?php echo htmlspecialchars($metaDescription); ?>" />
    <meta property="og:image" content="<?php echo htmlspecialchars($ogImage); ?>" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="<?php echo htmlspecialchars($ogUrl); ?>" />
    <meta property="twitter:title" content="<?php echo htmlspecialchars($metaTitle); ?>" />
    <meta property="twitter:description" content="<?php echo htmlspecialchars($metaDescription); ?>" />
    <meta property="twitter:image" content="<?php echo htmlspecialchars($ogImage); ?>" />

    <link rel="shortcut icon" href="./assets/img/custom/atcs-fav.png" />
    <link rel="stylesheet" href="./assets/css/plugins.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="./assets/css/colors/purple.css" />
    <link rel="stylesheet" href="./assets/css/custom.css" />
    <link
        rel="preload"
        href="./assets/css/fonts/urbanist.css"
        as="style"
        onload="this.rel='stylesheet'" />
    <link rel="stylesheet" href="cstm-styles.css">
</head>

<body>
    <div>
        <div class="content-wrapper">
            <header class="wrapper">
                <nav
                    class="navbar navbar-expand-lg center-nav navbar-light bg-white px-md-10 px-xxl-0">
                    <div class="container flex-lg-row flex-nowrap align-items-center py-0 py-lg-3">
                        <div class="navbar-brand w-100">
                            <a href="./">
                                <img
                                    class="header-logo"
                                    src="./assets/img/custom/logo.png"
                                    alt="" />
                            </a>
                        </div>
                        <div
                            class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                            <div class="offcanvas-header d-lg-none">
                                <img
                                    class="header-logo"
                                    src="./assets/img/custom/logo.png"
                                    alt="" />
                                <button
                                    type="button"
                                    class="btn-close btn-close-white"
                                    data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                                <ul class="navbar-nav gap-3">
                                    <li class="nav-item">
                                        <a
                                            class="nav-link fw-bold navBorder"
                                            href="./">Home</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a
                                            class="nav-link dropdown-toggle fw-bold navBorder"
                                            href="#"
                                            data-bs-toggle="dropdown">Services</a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown dropdown-submenu dropend dropBorder">
                                                <a
                                                    class="dropdown-item fw-bold"
                                                    href="octg">OCTG</a>
                                            </li>
                                            <li class="dropdown dropdown-submenu dropend dropBorder">
                                                <a
                                                    class="dropdown-item fw-bold"
                                                    href="welding-fab">Welding and fabrication</a>
                                            </li>
                                            <li class="dropdown dropdown-submenu dropend dropBorder">
                                                <a
                                                    class="dropdown-item fw-bold"
                                                    href="corrosion-control-services">Corrosion control services</a>
                                            </li>

                                            <!-- new -->
                                            <li class="dropdown dropdown-submenu dropend dropBorder">
                                                <a class="dropdown-item fw-bold" href="pressure-testing-valve-repair">
                                                    Pressure testing and valve repair
                                                </a>
                                            </li>
                                            <li class="nav-item dropBorder">
                                                <a class="dropdown-item fw-bold" href="load-testing">Load testing</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="dropdown-item fw-bold" href="wire-rope-services">Wire rope socketing and spooling</a>
                                            </li>
                                            <!-- end new -->
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a
                                            class="nav-link fw-bold navBorder"
                                            href="index#gallery">Gallery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a
                                            class="nav-link fw-bold navBorder"
                                            href="contact">Contact Us</a>
                                    </li>

                                    <!-- /.navbar-nav -->
                                    <div class="offcanvas-footer d-lg-none">
                                        <div>
                                            <a href="mailto:repairs.qa@ariesmar.com" class="link-inverse">repairs.qa@ariesmar.com</a>
                                            <br />
                                            00974 44174897 <br />
                                            <nav class="nav social social-white mt-4 d-none">
                                                <a href="#"><i class="uil uil-twitter"></i></a>
                                                <a href="#"><i class="uil uil-facebook-f"></i></a>
                                                <a href="#"><i class="uil uil-dribbble"></i></a>
                                                <a href="#"><i class="uil uil-instagram"></i></a>
                                                <a href="#"><i class="uil uil-youtube"></i></a>
                                            </nav>
                                            <!-- /.social -->
                                        </div>
                                    </div>
                                    <!-- /.offcanvas-footer -->
                            </div>
                            <!-- /.offcanvas-body -->
                        </div>
                        <!-- /.navbar-collapse -->

                        <div class="navbar-other w-100 d-flex ms-auto">
                            <ul class="navbar-nav flex-row align-items-center ms-auto">
                                <li class="nav-item d-lg-none">
                                    <button class="hamburger offcanvas-nav-btn"><span></span></button>
                                </li>
                            </ul>
                            <!-- /.navbar-nav -->
                        </div>

                        <!-- /.navbar-other -->
                    </div>
                    <!-- /.container -->
                </nav>
                <!-- /.navbar -->

                <!-- /.offcanvas -->
            </header>
            <!-- /header -->
<?php

$con = mysqli_connect('srv1328.hstgr.io', 'u629694569_vcpkacin_web', 'Kakatiya@1243', 'u629694569_vcpkacin_web');
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Array of criteria (you can add more as needed)
$criterions = [
    'Criterion 1',
    'Criterion 2',
    'Criterion 3',
    'Criterion 4',  // Add more criteria here
    'Criterion 5',
    'Criterion 6',
    'Criterion 7',
    'Extended Profile',
    // Continue adding as necessary
];

// Initialize an array to store all the data
$data = [];

foreach ($criterions as $criterion) {
    // Build the query for each criterion
    $query = "SELECT * FROM naac WHERE criterion LIKE '$criterion' AND status = 1 AND topic_parent != 0 AND type = 'SSR';";
    $result = mysqli_query($con, $query);

    // If the query returns results, fetch and store them in the $data array
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            // Add the criterion name to each row for identification
            $row['criterion_name'] = $criterion;
            $data[$criterion][] = $row;
        }
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <?php include('head_links.php') ?>
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/dist/css/commitee.css">
    <!-- <link rel="stylesheet" href="<?php echo $base_url; ?>assets/dist/css/about.css"> -->
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/dist/css/academic.css">

    <style>
        .committee-sec {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 100px 0px;
        }

        .cards-commitee {
            padding: 20px 50px;
            text-align: center;
            position: relative;
            overflow: hidden;
            transition: color 0.5s ease-in-out;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            background-image: linear-gradient(165deg, var(--white) 90%, var(--blue) 90%);
        }

        .cards-commitee a {
            color: black;
        }

        .cards-commitee:hover a {
            color: white;
            position: relative;
            z-index: 1;
        }

        .cards-commitee h2 {
            font-size: 20px;
            text-align: center;

        }

        .cards-commitee:hover h2 {
            color: white;
            position: relative;
            z-index: 1;
        }

        .committee-sec .row {
            row-gap: 20px;
        }

        .cards-commitee::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-image: linear-gradient(165deg, var(--white) 0%, var(--blue) 0%);
            transform: scaleX(0) scaleY(0);
            transform-origin: bottom right;
            transition: transform 0.5s ease-in-out;
            z-index: 1;
        }

        .cards-commitee:hover::before {
            transform: scaleX(1) scaleY(1);
        }

        .an_line {
            position: relative;
        }

        hr {
            margin: 1rem 0;
            color: inherit;
            border: 0;
            border-top: 1px solid;
            opacity: .25;
        }

        .cards-commitee:hover .an_line {
            background-color: white;
            position: relative;
            z-index: 1;
        }

        .cards-commitee:hover .an_line::after {
            background-color: white;
            position: relative;
            z-index: 1;
        }

        .an_line::after {
            position: absolute;
            content: '';
            height: 2px;
            width: 50px;
            background-color: var(--blue);
            left: 0;
            top: 0;
            bottom: 0;
            -webkit-transition: all 500ms ease;
            transition: all 500ms ease;
            z-index: 1;
        }

        .academic_reg_head h3 {
            font-size: 25px;
            color: var(--orange);
            font-weight: bold;
            border-bottom: solid 2px var(--orange);
            padding-bottom: 5px;
            margin-bottom: 30px;
        }

        #accordionExample {
            background-color: transparent !important;
        }

        .accordion {
            --bs-accordion-color: var(--bs-body-color);
            --bs-accordion-bg: var(--blue);
            --bs-accordion-border-width: none;
        }

        .accordion-button:not(.collapsed) {
            color: #fff;
            background-color: var(--orange);
            box-shadow: none;
            ;
        }

        .accordion-button.collapsed {
            margin-bottom: 3px;
            box-shadow: none;
            color: white;
            background-color: var(--orange);
        }

        .accordion-button::after {
            filter: brightness(0) invert(1);
        }

        .naac-sen p {
            padding: 10px 0px;

        }

        .naac-sen p a {
            color: var(--orange);
        }

        @media (max-width:1366px) {
            .cards-commitee {
                padding: 20px 25px
            }

            .committee-sec {
                padding: 50px 0px;
            }

            #committe_main {
                padding: 50px 0;
                padding-bottom: 80px;
            }
        }

        @media (max-width:1199px) {
            .cards-commitee h2 {
                font-size: 18px;
            }

        }

        @media (max-width:1024px) {
            .committee-sec {
                padding: 50px 0px 50px;
                ;
            }
        }

        @media (max-width:992px) {
            footer {
                margin-top: 156px;
            }
        }

        @media (max-width: 991px) {
            .cards-commitee {
                padding: 20px 30px
            }

            .cards-commitee h2 {
                font-size: 18px;
            }

            .committee-sec {
                padding: 50px 0px 50px;
                ;
            }
        }




        @media (max-width:432px) {

            .col-4,
            .col-6 {
                width: 33%;
            }

            #committe_main {
                padding: 50px 0;
                padding-bottom: 28px;
            }
        }
    </style>

</head>

<body>

    <?php include('head.php') ?>

    <!-- banner section -->
    <section id="department_bnr_main">
        <div class="bnr_img">
            <img src="<?php echo $base_url; ?>assets/images/department/department_banner_bg.webp" class="img-fluid" alt="banner" loading="lazy" decoding="async">
        </div>

        <div class="bnr_sec_df">
            <div class="bnr_sec_tt">
                <div class="head_tit">
                    <h4>NAAC</h4>
                </div>

                <div class="bnr_bredcrumb">
                    <div class="container">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index">Home</a></li>
                                <!-- <li class="breadcrumb-item"><a href="#">Programs</a></li> -->
                                <li class="breadcrumb-item active" aria-current="page">NAAC</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="bnr_scnd_img">
                <img src="<?php echo $base_url; ?>assets/images/department/department_banner.webp" class="img-fluid" alt="banner" loading="lazy" decoding="async">
            </div>
        </div>

    </section>

    <section class="committee-sec">
        <div class="container">
            <div class="academic_reg_head">
                <h3>NAAC</h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="cards-commitee">
                        <h2>Statutory Declaration</h2>
                        <div class="an_line">
                            <hr>
                        </div>
                        <a href="assets/pdfs/Satutory_Declaration_New.pdf" target="_blank">View/Download</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="cards-commitee">
                        <h2>College Undertaking</h2>
                        <div class="an_line">
                            <hr>
                        </div>
                        <a href="assets/pdfs/College_Undertaking.pdf" target="_blank">View/Download</a>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="cards-commitee">
                        <h2>AICTE Approval</h2>
                        <div class="an_line">
                            <hr>
                        </div>
                        <a href="assets/pdfs/AICTE_Approval.pdf" target="_blank">View/Download</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="cards-commitee">
                        <h2>JNTUH affiliation</h2>
                        <div class="an_line">
                            <hr>
                        </div>
                        <a href="assets/pdfs/JNTUH_Affiliation.pdf" target="_blank">View/Download</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="cards-commitee">
                        <h2>AISHE Certificate</h2>
                        <div class="an_line">
                            <hr>
                        </div>
                        <a href="assets/pdfs/AISHE_Certificate.pdf" target="_blank">View/Download</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="cards-commitee">
                        <h2>Self Declaration</h2>
                        <div class="an_line">
                            <hr>
                        </div>
                        <a href="assets/pdfs/Self-Declaration-New.pdf" target="_blank">View/Download</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="committe_main" class="naac-main">
        <div class="container">
            <div class="academic_reg_head">
                <h3>SSR / DVV / IIQA / NAAC </h3>
            </div>
            <div class="committee_sec">
                <div class="row  naac-row ">
                    <div class="col-lg-3">
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            SSR Files
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <button class="nav-link  active" id="v-Academic-Committee-tab" data-bs-toggle="pill" data-bs-target="#v-Academic-Committee" type="button" role="tab" aria-controls="v-Academic-Committee" aria-selected="true">Criterion 1</button>
                                            <button class="nav-link" id="v-Anti-bphram-Committee-tab" data-bs-toggle="pill" data-bs-target="#v-Anti-bphram-Committee" type="button" role="tab" aria-controls="v-Anti-bphram-Committee" aria-selected="false" tabindex="-1">Criterion 2</button>
                                            <button class="nav-link" id="v-Anti-mphram-Committee-tab" data-bs-toggle="pill" data-bs-target="#v-Anti-mphram-Committee" type="button" role="tab" aria-controls="v-Anti-mphram-Committee" aria-selected="false" tabindex="-1">Criterion 3</button>

                                            <button class="nav-link" id="v-Anti-phram-Committee-tab" data-bs-toggle="pill" data-bs-target="#v-Anti-phram-Committee" type="button" role="tab" aria-controls="v-Anti-phram-Committee" aria-selected="false" tabindex="-1">Criterion 4</button>
                                            <button class="nav-link" id="v-Anti-phramd-Committee-tab" data-bs-toggle="pill" data-bs-target="#v-Anti-phramd-Committee" type="button" role="tab" aria-controls="v-Anti-phramd-Committee" aria-selected="false" tabindex="-1">Criterion 5</button>

                                            <button class="nav-link" id="v-Anti-Ragging-Committee-tab" data-bs-toggle="pill" data-bs-target="#v-Anti-Ragging-Committee" type="button" role="tab" aria-controls="v-Anti-Ragging-Committee" aria-selected="false" tabindex="-1">Criterion 6</button>

                                            <button class="nav-link" id="v-Anti-Add-Committee-tab" data-bs-toggle="pill" data-bs-target="#v-Anti-Add-Committee" type="button" role="tab" aria-controls="v-Anti-Add-Committee" aria-selected="false" tabindex="-1">Criterion 7</button>
 <button class="nav-link" id="v-Anti-extra1-Committee-tab" data-bs-toggle="pill" data-bs-target="#v-Anti-extra1-Committeessr" type="button" role="tab" aria-controls="v-Anti-extra1-Committeessr" aria-selected="false" tabindex="-1">Extended Profile</button>
                                            <!-- 
                         <button class="nav-link" id="v-Anti-extra-Committee-tab" data-bs-toggle="pill" data-bs-target="#v-Anti-extra-Committee" 
                         type="button" role="tab" aria-controls="v-Anti-extra-Committee" aria-selected="false" tabindex="-1">Extended Profile</button> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            DVV Files
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <button class="nav-link" id="v-Academic1-Committee1-tab" data-bs-toggle="pill" data-bs-target="#v-Academic1-Committee1" type="button" role="tab" aria-controls="v-Academic1-Committee1" aria-selected="false" tabindex="-1">Criterion 1</button>




                                            <button class="nav-link" id="v-Anti-bphram1-Committee-tab" data-bs-toggle="pill" data-bs-target="#v-Anti-bphram1-Committee" type="button" role="tab" aria-controls="v-Anti-bphram1-Committee" aria-selected="false" tabindex="-1">Criterion 2</button>
                                            <button class="nav-link" id="v-Anti-mphram1-Committee-tab" data-bs-toggle="pill" data-bs-target="#v-Anti-mphram1-Committee" type="button" role="tab" aria-controls="v-Anti-mphram1-Committee" aria-selected="false" tabindex="-1">Criterion 3</button>
                                            <button class="nav-link" id="v-Anti-phram1-Committee-tab" data-bs-toggle="pill" data-bs-target="#v-Anti-phram1-Committee" type="button" role="tab" aria-controls="v-Anti-phram1-Committee" aria-selected="false" tabindex="-1">Criterion 4</button>
                                            <button class="nav-link" id="v-Anti-phramd1-Committee-tab" data-bs-toggle="pill" data-bs-target="#v-Anti-phramd1-Committee" type="button" role="tab" aria-controls="v-Anti-phramd1-Committee" aria-selected="false" tabindex="-1">Criterion 5</button>

                                            <button class="nav-link" id="v-Anti-Ragging1-Committee-tab" data-bs-toggle="pill" data-bs-target="#v-Anti-Ragging1-Committee" type="button" role="tab" aria-controls="v-Anti-Ragging1-Committee" aria-selected="false" tabindex="-1">Criterion 6</button>

                                            <button class="nav-link" id="v-Anti-Add1-Committee-tab" data-bs-toggle="pill" data-bs-target="#v-Anti-Add1-Committee" type="button" role="tab" aria-controls="v-Anti-Add1-Committee" aria-selected="false" tabindex="-1">Criterion 7</button>

                                            <button class="nav-link" id="v-Anti-extra1-Committee-tab" data-bs-toggle="pill" data-bs-target="#v-Anti-extra1-Committee" type="button" role="tab" aria-controls="v-Anti-extra1-Committee" aria-selected="false" tabindex="-1">Extended Profile</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                            IIQA
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <button class="nav-link" id="v-Aqar-Committee-tab" data-bs-toggle="pill" data-bs-target="#v-Aqar-Committee" type="button" role="tab"
                                                aria-controls="v-Aqar-Committee" aria-selected="false" tabindex="-1">Criterion </button>
                                            <!-- <button class="nav-link" id="v-Anti-Aqar-Committee-tab" data-bs-toggle="pill" data-bs-target="#v-Anti-Aqar-Committee" type="button" role="tab" aria-controls="v-Anti-Aqar-Committee" aria-selected="false" tabindex="-1">Criterion 2</button>
                         <button class="nav-link" id="v-Aqar-mphram-Committee-tab" data-bs-toggle="pill" data-bs-target="#v-Aqar-mphram-Committee" type="button" role="tab" aria-controls="v-Aqar-mphram-Committee" aria-selected="false" tabindex="-1">Criterion 3</button>
                            -->
                                            <!-- <button class="nav-link" id="v-Aqar-phram-Committee-tab" data-bs-toggle="pill" data-bs-target="#v-Aqar-phram-Committee" type="button" role="tab" aria-controls="v-Aqar-phram-Committee" aria-selected="false" tabindex="-1">Criterion 4</button>
                         <button class="nav-link" id="v-Aqar-phramd-Committee-tab" data-bs-toggle="pill" data-bs-target="#v-Aqar-phramd-Committee" type="button" role="tab" aria-controls="v-Aqar-phramd-Committee" aria-selected="false" tabindex="-1">Criterion 5</button>

                         <button class="nav-link" id="v-Aqar-Ragging-Committee-tab" data-bs-toggle="pill" data-bs-target="#v-Aqar-Ragging-Committee" type="button" role="tab" aria-controls="v-Aqar-Ragging-Committee" aria-selected="false" tabindex="-1">Criterion 6</button>

                         <button class="nav-link" id="v-Aqar-Add-Committee-tab" data-bs-toggle="pill" data-bs-target="#v-Aqar-Add-Committee" type="button" role="tab" aria-controls="v-Aqar-Add-Committee" aria-selected="false" tabindex="-1">Criterion 7</button>

                         <button class="nav-link" id="v-Aqar-extra-Committee-tab" data-bs-toggle="pill" data-bs-target="#v-Aqar-extra-Committee" type="button" role="tab" aria-controls="v-Aqar-extra-Committee" aria-selected="false" tabindex="-1">Extended Profile</button> -->
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                            NAAC
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <button class="nav-link" id="v-Aqar1-Committee-tab" data-bs-toggle="pill" data-bs-target="#v-Aqar1-Committee" type="button" role="tab"
                                                aria-controls="v-Aqar1-Committee" aria-selected="false" tabindex="-1">Criterion</button>
                                            <!-- <button class="nav-link" id="v-Anti-Aqar2-Committee-tab" data-bs-toggle="pill" data-bs-target="#v-Anti-Aqar2-Committee" type="button" 
      role="tab" aria-controls="v-Anti-Aqar2-Committee" aria-selected="false" tabindex="-1">Criterion 2</button>
                         <button class="nav-link" id="v-Aqar3-mphram-Committee-tab" data-bs-toggle="pill" data-bs-target="#v-Aqar3-mphram-Committee" 
                         type="button" role="tab" aria-controls="v-Aqar3-mphram-Committee" aria-selected="false" tabindex="-1">Criterion 3</button>
                           
                         <button class="nav-link" id="v-Aqar4-phram-Committee-tab" data-bs-toggle="pill" data-bs-target="#v-Aqar4-phram-Committee" 
                         type="button" role="tab" aria-controls="v-Aqar4-phram-Committee" aria-selected="false" tabindex="-1">Criterion 4</button>
                         <button class="nav-link" id="v-Aqar5-phramd-Committee-tab" data-bs-toggle="pill" data-bs-target="#v-Aqar5-phramd-Committee" 
                         type="button" role="tab" aria-controls="v-Aqar5-phramd-Committee" aria-selected="false" tabindex="-1">Criterion 5</button>

                         <button class="nav-link" id="v-Aqar6-Ragging-Committee-tab" data-bs-toggle="pill" data-bs-target="#v-Aqar6-Ragging-Committee" 
                         type="button" role="tab" aria-controls="v-Aqar6-Ragging-Committee" aria-selected="false" tabindex="-1">Criterion 6</button>

                         <button class="nav-link" id="v-Aqar7-Add-Committee-tab" data-bs-toggle="pill" data-bs-target="#v-Aqar7-Add-Committee" 
                         type="button" role="tab" aria-controls="v-Aqar7-Add-Committee" aria-selected="false" tabindex="-1">Criterion 7</button>

                         <button class="nav-link" id="v-Aqar8-extra-Committee-tab" data-bs-toggle="pill" data-bs-target="#v-Aqar8-extra-Committee" 
                         type="button" role="tab" aria-controls="v-Aqar8-extra-Committee" aria-selected="false" tabindex="-1">Extended Profile</button> -->
                                        </div>
                                    </div>
                                </div>

                            </div>












                        </div>
                    </div>

                    <div class="col-lg-9">
                        <div class="tab-content" id="v-pills-tabContent">

                            <div class="tab-pane animate__animated animate__fadeInUp show active" id="v-Academic-Committee" role="tabpanel" aria-labelledby="v-Academic-Committee-tab" tabindex="0">

                                <div class="committee_table" id="naac-first">
                                    <div class="committee_head">
                                        <h3>Criterion 1
                                        </h3>
                                    </div>
                                    <!-- <div class="row naac-sen naac-sen">
                                   
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.1.1 Proof 1</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="assets/pdfs/ssr/1.1.1_Summary_sheet_1.pdf" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                  
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.1.1 Proof 2</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="assets/pdfs/ssr/PROOF_-2.pdf" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.1.2 Proof 1</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="assets/pdfs/ssr/1.1.2_Proof1.pdf" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.1.2 Proof 2</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="assets/pdfs/ssr/1.1.2_FDP_-_PROOF_2.pdf" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.1.3 Excel</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="assets/pdfs/ssr/1.1.3_Excel.xlsx" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.1.3 Proof 1</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.2.1 Excel</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4 ">
                                        <div class="view">
                                            <p><a href="assets/pdfs/ssr/1.2.1_cljhesx5rxbz.xlsx" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.2.1 Proof 1</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4 ">
                                        <div class="view">
                                            <p><a href="assets/pdfs/ssr/1.2.1_3hy97zozxvsww.pdf" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.2.1 Proof 2</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.2.1 Proof 3</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4 ">
                                        <div class="view">
                                            <p><a href="assets/pdfs/ssr/1.2.1_proof_3.pdf" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.2.2 Excel</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="assets/pdfs/ssr/1.2.2_Excel_new.xlsx" target="_blank">Click here</a></p>
                                        </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.2.2 Proof 1</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="assets/pdfs/ssr/1.2.2_Summary_Sheet_1.pdf" target="_blank">Click here</a></p>
                                        </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.2.2 Proof 2</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="assets/pdfs/ssr/1.2.2_Summary_Sheet_-_Proof_2.pdf" target="_blank">Click here</a></p>
                                        </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.2.3 Excel</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="assets/pdfs/ssr/1.2.3_Excel_new.xlsx" target="_blank">Click here</a></p>
                                        </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.2.3 Proof1</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="assets/pdfs/ssr/1.2.3_Summary_SheetL_-_Proof_1.pdf" target="_blank">Click here</a></p>
                                        </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.3.1 Proof 1</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="assets/pdfs/ssr/1.3.1-Proof1.pdf" target="_blank">Click here</a></p>
                                        </div>
                                 </div>
                                 <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.3.1 Proof 2</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                 </div>
                                 <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.3.2 Excel</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                 </div>
                                 <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.3.2 Proof 2</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="assets/pdfs/ssr/1.3.2_proof_2.pdf" target="_blank">Click here</a></p>
                                        </div>
                                 </div>
                                 <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.3.3 Excel</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="assets/pdfs/ssr/1.3.3_Excel_cliw4ew9cqko.xlsx" target="_blank">Click here</a></p>
                                        </div>
                                 </div>
                                 <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.3.3 Proof</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="assets/pdfs/ssr/1.3.3_-Summary_sheet.pdf" target="_blank">Click here</a></p>
                                        </div>
                                 </div>
                                 <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.4.1 Proof 1</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                 </div>
                                 <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.4.2 Proof 1</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                 </div>
                                </div> -->
                                   
                        <div class="row naac-sen naac-sen">
                            <?php 
                            // Loop through the data for each criterion
                            foreach ($data as $criterion => $rows):
                                // Check if the criterion is "Criterion 1"
                                if ($criterion == 'Criterion 1'):
                            ?>
                                <div class="criterion-block">
                                    <!--<h3><?= htmlspecialchars($criterion) ?></h3>-->  <!-- Display the criterion name -->

                                    <div class="row naac-sen naac-sen">
                                        <?php 
                                        // Loop through all rows of "Criterion 1"
                                        foreach ($rows as $row): 
                                        ?>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                                <div class="criterion">
                                                    <p>Topic: <?= htmlspecialchars($row['topic']) ?></p>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                                <div class="view">
                                                    <p><a href="assets/pdfs/ssr/<?= htmlspecialchars($row['topic_file']) ?>" target="_blank">Click here</a></p>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php 
                                endif;  // Close the "if" condition for Criterion 1
                            endforeach; 
                            ?>
                        </div>


                                </div>
                            </div>

                            <div class="tab-pane animate__animated animate__fadeInUp" id="v-Anti-bphram-Committee" role="tabpanel" aria-labelledby="v-Anti-bphram-Committee-tab" tabindex="0">
                                <div class="committee_table" id="naac-first">
                                    <div class="committee_head">
                                        <h3>
                                            Criterion 2</h3>
                                    </div>
                                    <!-- <div class="row naac-sen">
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 2.1.1 Excel</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/2.1.1Excel_clcoqwr04nkg.xlsx" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 2.1.1 Proof</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/2.1.1_LIST_OF_ENCLOSURES_3hxj0s8wut0kw.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 2.1.2 Excel</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/2.1.2_EXCEL_3hxj0znfwlus8.xlsx" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 2.1.2 Proof</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/2.1.2_LIST_OF_ENCLOSURES.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 2.2.1 Proof</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/2.2.1_Enclosures.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 2.2.2 Proof</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/2.2.2_Enclosures.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 2.3.1 Proof</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/2.3.1_Enclosures.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 2.3.2 Proof</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/2.3.2_Enclosures.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 2.3.3 Proof 1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/2.3.3_CIRCULARS.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p> Criterion: 2.3.3 Proof 2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/2.3.3_Mentor_-_Mentee_Ratio_fiveyears.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 2.3.3 Proof 3</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/2.3.3_Mentor_-_Mentee_Ratio_fiveyears.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 2.4.1 Excel</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/2.4.1_Excel.xlsx" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 2.4.1 Proof-A</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/2.4.1_Summary_sheet_-Average_percentage_of_full_time_teachers.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 2.4.1 Proof-B</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/2.4.1_Summary_sheet_-Average_percentage_of_full_time_teachers.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 2.4.2 Excel</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/2.4.2.xlsx" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 2.4.2 Proof</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/2.4.2_Summary_sheet_-Average_percentage_of_full_time_teachers_with_Ph._D..pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 2.4.3 Excel</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/2.4.3_Excel.xlsx" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 2.4.3 Proof</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/2.4.3_SSummary_sheet_Average_Teaching_Exp.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 2.5.1 Proof</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/2.5.1_Summary_Sheet-Mechanism_of_internal_assessment.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 2.5.2 Proof</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/2.5.2_Summary_sheet-_Mechanism_of_internal_assessment_-_Copy.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 2.6.1 Proof 1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/2.6.1_Summary_Sheet-_COs_for_all_Courses.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 2.6.2 Proof</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/2.6.2_proof.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 2.6.3 Excel</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/2.6.3_excel.xlsx" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 2.6.3 Proof</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/2.6.3_LIST_OF_ENCLOSURES.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 2.7.1 Excel</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/2.7.1_Excel.xlsx" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 2.7.1 Proof</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/2.7.1_Summary_sheet-_Mechanism_of_internal_assessment_-_Copy.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>


                                    </div> -->
                                     <div class="row naac-sen naac-sen">
                                            <?php 
                                            // Loop through the data for each criterion
                                            foreach ($data as $criterion => $rows):
                                                // Check if the criterion is "Criterion 1"
                                                if ($criterion == 'Criterion 2'):
                                            ?>
                                                <div class="criterion-block">
                                                    <!--<h3><?= htmlspecialchars($criterion) ?></h3>-->  <!-- Display the criterion name -->

                                                    <div class="row naac-sen naac-sen">
                                                        <?php 
                                                        // Loop through all rows of "Criterion 1"
                                                        foreach ($rows as $row): 
                                                        ?>
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                                                <div class="criterion">
                                                                    <p>Topic: <?= htmlspecialchars($row['topic']) ?></p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                                                <div class="view">
                                                                    <p><a href="assets/pdfs/ssr/<?= htmlspecialchars($row['topic_file']) ?>" target="_blank">Click here</a></p>
                                                                </div>
                                                            </div>
                                                        <?php endforeach; ?>
                                                    </div>
                                                </div>
                                            <?php 
                                                endif;  // Close the "if" condition for Criterion 1
                                            endforeach; 
                                            ?>
                                        </div>

                                </div>
                            </div>


                            <div class="tab-pane animate__animated animate__fadeInUp" id="v-Anti-mphram-Committee" role="tabpanel" aria-labelledby="v-Anti-mphram-Committee-tab" tabindex="0">
                                <div class="committee_table" id="naac-first">
                                    <div class="committee_head">

                                        <h3>Criterion 3
                                        </h3>
                                    </div>
                                    <!-- <div class="row naac-sen">
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 3.1.1 Excel</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/3.1.1_2.xls" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 3.1.1 Proof 1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/3.1.1_Proof-1.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 3.1.1 Proof 2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/3.1.1_Proof-2.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 3.1.2 Excel</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/3.1.2.xls" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 3.1.2 Proof</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/3.1.2_Proof.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 3.1.3 Excel</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/3.1.3_Excel.xls" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 3.1.3 Proof 1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/3.1.3_proof_1.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 3.1.3 Proof 2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/3.1.3_proof_2.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 3.2.1 Proof</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/3.2.1_new.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 3.2.2 Excel</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/3.2.2_Excel.xls" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 3.2.2 Proof 1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/3.2.2_Proof-1.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 3.2.2 Proof 2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/3.2.2_proof2.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 3.3.1 Excel.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/3.3.1_-_DATA_Filled.xls" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 3.3.1 Proof</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/3.3.1_Proof.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 3.3.2 Excel</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/3.3.2_Excel.xlsx" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 3.3.2 Proof</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/3.3.2_Proof-1.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 3.3.3 Excel</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/3.3.3_Excel.xls" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 3.3.3 Proof</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/3.3.3_Proof_-_1_View_Doc..pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 3.4.1 Excel, 3.4.1 Proof</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/3.4.1.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 3.4.2 Excel</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/3.4.2_Excel.xls" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 3.4.2 Proof 1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/3.4.2_proof1.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 3.4.2 Proof 2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/3.4.2_proof2.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 3.4.3 Excel</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/3.4.3_excel.xls" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 3.4.3 Proof 1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/3.4.3_proof_1.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 3.4.3 Proof 2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/3.4.3_proof_2.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 3.4.4 Excel</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/3.4.4_Excel_1.xls" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 3.4.4 Proof 1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/3.4.4_proof_1.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 3.4.4 Proof 2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/3.4.4-Summary_Proof-2.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>

                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 3.5.1 Excel</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/3.5.1.Excel.xls" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 3.5.1 Proof 1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/3.5.1_Proof-1_clip7tlou1e8.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 3.5.1 Proof 2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/3.5.1_Proof_-_2.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 3.5.2 Excel</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/3.5.2_Excel.xlsx" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 3.5.2 Proof 1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/3.5.2__proof_1.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 3.5.2 Proof 2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/3.5.2_proof_2.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>

                                    </div> -->
                                    <div class="row naac-sen naac-sen">
                                        <?php 
                                        // Loop through the data for each criterion
                                        foreach ($data as $criterion => $rows):
                                            // Check if the criterion is "Criterion 1"
                                            if ($criterion == 'Criterion 3'):
                                        ?>
                                            <div class="criterion-block">
                                                <!--<h3><?= htmlspecialchars($criterion) ?></h3>-->  <!-- Display the criterion name -->

                                                <div class="row naac-sen naac-sen">
                                                    <?php 
                                                    // Loop through all rows of "Criterion 1"
                                                    foreach ($rows as $row): 
                                                    ?>
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                                            <div class="criterion">
                                                                <p>Topic: <?= htmlspecialchars($row['topic']) ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                                            <div class="view">
                                                                <p><a href="assets/pdfs/ssr/<?= htmlspecialchars($row['topic_file']) ?>" target="_blank">Click here</a></p>
                                                            </div>
                                                        </div>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                        <?php 
                                            endif;  // Close the "if" condition for Criterion 1
                                        endforeach; 
                                        ?>
                                    </div>

                                </div>
                            </div>


                            <div class="tab-pane animate__animated animate__fadeInUp" id="v-Anti-phram-Committee" role="tabpanel" aria-labelledby="v-Anti-phram-Committee-tab" tabindex="0">
                                <div class="committee_table" id="naac-first">
                                    <div class="committee_head">
                                        <h3>Criterion 4
                                        </h3>
                                    </div>
                                    <!-- <div class="row naac-sen">
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 4.1.1 Proof</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/4.1.1_proof1_compressed.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 4.1.2 Proof</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/4.1.2_sports_cultural_facilities.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 4.1.3 Excel</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/4.1.3.xlsx" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 4.1.3 Proof</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/4.1.3_ICT_classrooms_Proof.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 4.1.4 Excel</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/4.1.4__4.4.1.xlsx" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 4.1.4 Proof</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/4.1.4Audmit_Statements_Infra.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 4.2.1 Proof</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/4.2.1_ILMS_software.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 4.2.2 Proof</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/4.2.2._proof.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 4.2.3 Excel</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/4.2.3.xlsx" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 4.2.3 Proof</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/4.2.3Audmit_Statements_Library.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 4.2.4 Proof 1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/4.2.4_proof1.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 4.2.4 Proof 2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/4.2.4_proof2.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 4.3.1 Proof</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/4.3.1_proof1_1_compressed.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 4.3.2 Proof 1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/4.3.2_proof1.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 4.3.2 Proof 2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/4.3.2_proof2.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 4.3.3 Proof 1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/4.3.3_proof1.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 4.3.3 Proof 2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/4.3.3_proof2.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 4.4.1 Excel</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 4.4.1 Proof</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/4.1.4__4.4.1_cll6lxwb4vrs.xlsx" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 4.4.2 Proof</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/4.4.2_proof_1.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>




                                    </div> -->
                                    <div class="row naac-sen naac-sen">
                                            <?php 
                                            // Loop through the data for each criterion
                                            foreach ($data as $criterion => $rows):
                                                // Check if the criterion is "Criterion 1"
                                                if ($criterion == 'Criterion 4'):
                                            ?>
                                                <div class="criterion-block">
                                                    <!--<h3><?= htmlspecialchars($criterion) ?></h3>-->  <!-- Display the criterion name -->

                                                    <div class="row naac-sen naac-sen">
                                                        <?php 
                                                        // Loop through all rows of "Criterion 1"
                                                        foreach ($rows as $row): 
                                                        ?>
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                                                <div class="criterion">
                                                                    <p>Topic: <?= htmlspecialchars($row['topic']) ?></p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                                                <div class="view">
                                                                    <p><a href="assets/pdfs/ssr/<?= htmlspecialchars($row['topic_file']) ?>" target="_blank">Click here</a></p>
                                                                </div>
                                                            </div>
                                                        <?php endforeach; ?>
                                                    </div>
                                                </div>
                                            <?php 
                                                endif;  // Close the "if" condition for Criterion 1
                                            endforeach; 
                                            ?>
                                        </div>

                                </div>
                            </div>


                            <div class="tab-pane animate__animated animate__fadeInUp" id="v-Anti-phramd-Committee" role="tabpanel" aria-labelledby="v-Anti-phramd-Committee-tab" tabindex="0">
                                <div class="committee_table" id="naac-first">
                                    <div class="committee_head">
                                        <h3>Criterion 5
                                        </h3>
                                    </div>
                                    <!-- <div class="row naac-sen">
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 5.1.1 Excel</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/5.1.1_Excel.xlsx" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 5.1.1 Proof</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/SUMMARY__CASTE_WISE_5.1.1_Proof1.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 5.1.2 Excel</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/5.1.2.xlsx" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 5.1.2 Proof</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/5.1.2_proof_1.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 5.1.3 Excel</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/5.1.3.xlsx" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 5.1.3 Proof 1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/5.1.3_Proof1.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 5.1.3 Proof 2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/5.1.3-Proof2.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 5.1.4 Excel</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/5.1.4_cll6k5f3k6ke.xlsx" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 5.1.4 Proof</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/5.1.4_Sumary_Sheet.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p> Criterion: 5.1.5 Proof 1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/5.1.5-1.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 5.1.5 Proof 2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/5.1.5-2.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 5.1.5 Proof 3</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/5.1.5-3.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 5.2.1 Excel</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/5.2.1.xlsx" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 5.2.1 Proof 1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/5.2.1_Summary_Sheet.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 5.2.1 Proof 2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/5.2.1_Summary_Sheet2proof2.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 5.2.2 Excel</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/5.2.2.xlsx" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 5.2.2 Proof 1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/5.2.2-1.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 5.2.2 Proof 2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/5.2.2-2.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 5.2.3 Excel</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/5.2.3.xlsx" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 5.2.3 Proof 1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/5.2.3-proof_1.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 5.2.3 Proof 2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/5.2.3-_proof__2.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 5.3.1 Excel</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/5.3.1.xlsx" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 5.3.1 Proof 1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/5.3.1-1.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 5.3.1 Proof 2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/5.3.1-2.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 5.3.2 Proof</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/5.3.2_Proof_summary_sheet.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 5.3.3 Excel</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/5.3.3-.xlsx" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 5.3.3 Proof 1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/5.3.3_Summery.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 5.3.3 Proof 2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/5.3.3-proof-2.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 5.4.1 Proof 1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/5.4.1-1.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 5.4.1 Proof 2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/5.4.1.Proof2.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 5.4.2 Proof 1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/5.4.2_proof1.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 5.4.2 Proof 2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/audit_stmt_2016-21-alumni.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>

                                    </div> -->
                                    <div class="row naac-sen naac-sen">
                                                <?php 
                                                // Loop through the data for each criterion
                                                foreach ($data as $criterion => $rows):
                                                    // Check if the criterion is "Criterion 1"
                                                    if ($criterion == 'Criterion 5'):
                                                ?>
                                                    <div class="criterion-block">
                                                        <!--<h3><?= htmlspecialchars($criterion) ?></h3>-->  <!-- Display the criterion name -->

                                                        <div class="row naac-sen naac-sen">
                                                            <?php 
                                                            // Loop through all rows of "Criterion 1"
                                                            foreach ($rows as $row): 
                                                            ?>
                                                                <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                                                    <div class="criterion">
                                                                        <p>Topic: <?= htmlspecialchars($row['topic']) ?></p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                                                    <div class="view">
                                                                        <p><a href="assets/pdfs/ssr/<?= htmlspecialchars($row['topic_file']) ?>" target="_blank">Click here</a></p>
                                                                    </div>
                                                                </div>
                                                            <?php endforeach; ?>
                                                        </div>
                                                    </div>
                                                <?php 
                                                    endif;  // Close the "if" condition for Criterion 1
                                                endforeach; 
                                                ?>
                                            </div>

                                </div>
                            </div>


                            <div class="tab-pane animate__animated animate__fadeInUp" id="v-Anti-Ragging-Committee" role="tabpanel" aria-labelledby="v-Anti-Ragging-Committee-tab" tabindex="0">
                                <div class="committee_table" id="naac-first">
                                    <div class="committee_head">
                                        <h3>Criterion 6
                                        </h3>
                                    </div>
                                    <!-- <div class="row naac-sen">
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 6.1.1 Proof1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/6.1.1_Vision_Mission_Proof1 (1).pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 6.1.1 Proof2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/6.1.1_Minutes_All_Proof2_cljirrt2azuk.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 6.1.2 Proof</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/6.1.2_Committees.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 6.2.1 Proof 1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/6.2.1_Proof_1_19ckh8suyq05.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 6.2.1 Proof 2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/6.2.1_Proof2.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 6.2.1 Proof 3</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/6.2.1_Proof3.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 6.2.2 Proof 1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/6.2.2_Organogram_Proof1.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 6.2.2 Proof 2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/6.2.2_Proof2.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 6.2.2 Proof 3</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/6.2.2_Proof3_1.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 6.2.3 Excel</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/6.2.3.xlsx" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 6.2.3 Proof 1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/6.2.3_ERP_Audit.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 6.2.3 Proof 2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/6.2.3_ERP_Invoice_Proof2.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 6.2.3 Proof 3</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/6.2.3_ERP_Screenshots_Proof1.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 6.3.1 Proof 1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/6.3.1_Proof1.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 6.3.1 Proof 2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/6.3.1_Proof2.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 6.3.2 Excel</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/6.3.2_Excel.xlsx" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 6.3.2 Proof</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/6.3.2_Summary_Sheet_Proof1.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 6.3.3 Excel</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/6.3.3_Excel_19cqz8uwwgir.xlsx" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 6.3.3 Proof 1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/6.3.3_Summary_Sheet.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 6.3.4 Excel</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/6.3.4_Excel.xlsx" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 6.3.4 Proof 1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/6.3.4_IQAC_Report.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 6.3.4 Proof 2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/6.3.4_Summary_Sheet_3hzexjiunjggw.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 6.3.5 Proof 1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/6.3.5_Proof1.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 6.3.5 Proof 2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/6.3.5_Proof2.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 6.4.1 Proof</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/6.4.1_Audit_Statements.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 6.4.2 Proof</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/6.4.2_Proof.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 6.4.3 Proof 1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/6.4.3_Audit_Mobilization_of_Funds.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 6.5.1 Proof 1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/6.5.1_IQAC_Minutes.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 6.5.2 Proof</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/6.5.2_Text_Books_Proof1.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 6.5.3 Excel</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/6.5.3_Excel.xlsx" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 6.5.3 Proof 1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/6.5.3_Collaborative_Initiatives_cll9g3oiqyi2.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 6.5.3 Proof 2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/6.5.3_IQAC_Minutes_3hzwmoo2du680.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 6.5.3 Proof 3</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/6.5.3_ISO_NIRF_Audit.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>


                                    </div> -->
                                    <div class="row naac-sen naac-sen">
                                        <?php 
                                        // Loop through the data for each criterion
                                        foreach ($data as $criterion => $rows):
                                            // Check if the criterion is "Criterion 1"
                                            if ($criterion == 'Criterion 6'):
                                        ?>
                                            <div class="criterion-block">
                                                <!--<h3><?= htmlspecialchars($criterion) ?></h3>-->  <!-- Display the criterion name -->

                                                <div class="row naac-sen naac-sen">
                                                    <?php 
                                                    // Loop through all rows of "Criterion 1"
                                                    foreach ($rows as $row): 
                                                    ?>
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                                            <div class="criterion">
                                                                <p>Topic: <?= htmlspecialchars($row['topic']) ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                                            <div class="view">
                                                                <p><a href="assets/pdfs/ssr/<?= htmlspecialchars($row['topic_file']) ?>" target="_blank">Click here</a></p>
                                                            </div>
                                                        </div>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                        <?php 
                                            endif;  // Close the "if" condition for Criterion 1
                                        endforeach; 
                                        ?>
                                    </div>

                                </div>
                            </div>



                            <div class="tab-pane animate__animated animate__fadeInUp" id="v-Anti-Add-Committee" role="tabpanel" aria-labelledby="v-Anti-Add-Committee-tab" tabindex="0">
                                <div class="committee_table" id="naac-first">
                                    <div class="committee_head">
                                        <h3>Criterion 7
                                        </h3>

                                    </div>
                                    <!-- <div class="row naac-sen">
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 7.1.1 Proof 1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/7.1.1_proof_1_compressed.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 7.1.1 Proof 2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/7.1.1_proof_2_compressed.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 7.1.2 Proof 1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/7.1.2_proof_1.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 7.1.2 Proof 2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/7.1.2_proof_2.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 7.1.3 Proof 1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/7.1.3_proof_1_clhvaipd3y8o.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 7.1.3 Proof 2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/7.1.3_proof_2_3hyyp0lu8a688.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 7.1.3 Proof 3</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/7.1.3_proof_3.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 7.1.4 Proof 1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/7.1.4_proof_1.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 7.1.4 Proof 2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/7.1.4_proof_2.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 7.1.5 Proof 1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/7.1.5_new_proof1.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 7.1.5 Proof 2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/7.1.5_proof_2_compressed.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 7.1.5 Proof 3</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/7.1.5_proof3.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 7.1.6 Proof 1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/7.1.6_proof_1.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 7.1.6 Proof 2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/7.1.6_proof_2_compressed.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 7.1.6 Proof 3</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/7.1.6_proof_3_compressed.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 7.1.6 Proof 4</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/7.1.6proof4_compressed.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 7.1.6 Proof 5</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/7.1.6_PROOF_5_compressed.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 7.1.7 Proof 1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/7.1.7_proof_1_new.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 7.1.7 Proof 2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/7.1.7_proof2.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 7.1.7 Proof 3</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/7.1.7_proof_3.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 7.1.7 Proof 4</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/7.1.7_proof4.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 7.1.8 Proof 1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/7.1.8_PROOF_1_compressed.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 7.1.8 Proof 2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/7.1.8_PROOF_2_compressed.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 7.1.9 Proof 1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/7.1.9_proof_1_3hy8qokkxs84g_compressed.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 7.1.9 Proof 2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/7.1.9_PROOF_2.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 7.1.10 Proof 1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/7.1.10_proof_1._compressed.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 7.1.10 Proof 2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/7.1.10_proof_2_compressed.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 7.1.10 Proof 3</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/7.1.11_proof_3.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 7.1.11 Proof 1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/7.1.11_proof_1_compressed.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 7.1.11 Proof 2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/7.1.11_proof_2_compressed.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 7.1.11 Proof 3</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/7.1.11_proof_2_compressed.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 7.2.1 Proof 1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/7.2_proof_1_updated_compressed.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 7.2.1 Proof 2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/7.2_proof_2_final.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 7.3 Proof 1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/7.3_proof_1.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 7.3 Proof 2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/ssr/7.3_proof_2_1_compressed.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>




                                    </div> -->
                                    <div class="row naac-sen naac-sen">
                                             <?php 
                                            // Loop through the data for each criterion
                                            foreach ($data as $criterion => $rows):
                                                // Check if the criterion is "Criterion 1"
                                                if ($criterion == 'Criterion 7'):
                                            ?>
                                                <div class="criterion-block">
                                                    <!--<h3><?= htmlspecialchars($criterion) ?></h3>-->  <!-- Display the criterion name -->

                                                    <div class="row naac-sen naac-sen">
                                                        <?php 
                                                        // Loop through all rows of "Criterion 1"
                                                        foreach ($rows as $row): 
                                                        ?>
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                                                <div class="criterion">
                                                                    <p>Topic: <?= htmlspecialchars($row['topic']) ?></p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                                                <div class="view">
                                                                    <p><a href="assets/pdfs/ssr/<?= htmlspecialchars($row['topic_file']) ?>" target="_blank">Click here</a></p>
                                                                </div>
                                                            </div>
                                                        <?php endforeach; ?>
                                                    </div>
                                                </div>
                                            <?php 
                                                endif;  // Close the "if" condition for Criterion 1
                                            endforeach; 
                                            ?>
                                        </div>

                                </div>
                            </div>

                                            <!-- SSR Extended Profiles -->

                            <div class="tab-pane animate__animated animate__fadeInUp" id="v-Anti-extra1-Committeessr" role="tabpanel" aria-labelledby="v-Anti-extra1-Committeessr" tabindex="0">
                                <div class="committee_table" id="naac-first">
                                    <div class="committee_head">
                                        <h3>Extended Profiles
                                        </h3>

                                    </div>
                                    
                                    <div class="row naac-sen naac-sen">
                                             <?php 
                                            // Loop through the data for each criterion
                                            foreach ($data as $criterion => $rows):
                                                // Check if the criterion is "Criterion 1"
                                                if ($criterion == 'Extended Profile'):
                                            ?>
                                                <div class="criterion-block">
                                                    <!--<h3><?= htmlspecialchars($criterion) ?></h3>-->  <!-- Display the criterion name -->

                                                    <div class="row naac-sen naac-sen">
                                                        <?php 
                                                        // Loop through all rows of "Criterion 1"
                                                        foreach ($rows as $row): 
                                                        ?>
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                                                <div class="criterion">
                                                                    <p>Topic: <?= htmlspecialchars($row['topic']) ?></p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                                                <div class="view">
                                                                    <p><a href="assets/pdfs/ssr/<?= htmlspecialchars($row['topic_file']) ?>" target="_blank">Click here</a></p>
                                                                </div>
                                                            </div>
                                                        <?php endforeach; ?>
                                                    </div>
                                                </div>
                                            <?php 
                                                endif;  // Close the "if" condition for Criterion 1
                                            endforeach; 
                                            ?>
                                        </div>

                                </div>
                            </div>


                            <div class="tab-pane animate__animated animate__fadeInUp" id="v-dvv-Committee" role="tabpanel" aria-labelledby="v-dvv-Committee-tab" tabindex="0">
                                <div class="committee_table">
                                    <div class="committee_head">
                                        <h3>DVV Files
                                        </h3>

                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane animate__animated animate__fadeInUp" id="v-Academic1-Committee1" role="tabpanel" aria-labelledby="v-Academic1-Committee1-tab" tabindex="0">

                                <div class="committee_table" id="naac-first">
                                    <div class="committee_head">
                                        <h3>Criterion 1
                                        </h3>
                                    </div>
                                    <div class="row naac-sen">
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 1.2.1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 1.2.2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 1.3.2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 1.4.1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="" target="_blank">Click here</a></p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane animate__animated animate__fadeInUp" id="v-Anti-bphram1-Committee" role="tabpanel" aria-labelledby="v-Anti-bphram1-Committee-tab" tabindex="0">
                                <div class="committee_table" id="naac-first">
                                    <div class="committee_head">
                                        <h3>
                                            Criterion 2</h3>
                                    </div>
                                    <div class="row naac-sen">
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 2.1.1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 2.1.2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 2.2.1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 2.4.1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 2.4.2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 2.6.2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="" target="_blank">Click here</a></p>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane animate__animated animate__fadeInUp" id="v-Anti-mphram1-Committee" role="tabpanel" aria-labelledby="v-Anti-mphram1-Committee-tab" tabindex="0">
                                <div class="committee_table" id="naac-first">
                                    <div class="committee_head">

                                        <h3>Criterion 3
                                        </h3>
                                    </div>
                                    <div class="row naac-sen">
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 3.1.1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 3.2.2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 3.3.1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 3.3.2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 3.4.3</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 3.5.1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="" target="_blank">Click here</a></p>
                                            </div>
                                        </div>




                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane animate__animated animate__fadeInUp" id="v-Anti-phram1-Committee" role="tabpanel" aria-labelledby="v-Anti-phram1-Committee-tab" tabindex="0">
                                <div class="committee_table" id="naac-first">
                                    <div class="committee_head">
                                        <h3>Criterion 4
                                        </h3>
                                    </div>
                                    <div class="row naac-sen">
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 4.1.2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 4.3.2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 4.4.1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="" target="_blank">Click here</a></p>
                                            </div>
                                        </div>





                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane animate__animated animate__fadeInUp" id="v-Anti-phramd1-Committee" role="tabpanel" aria-labelledby="v-Anti-phramd1-Committee-tab" tabindex="0">
                                <div class="committee_table" id="naac-first">
                                    <div class="committee_head">
                                        <h3>Criterion 5
                                        </h3>
                                    </div>
                                    <div class="row naac-sen">
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 5.1.1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 5.1.2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 5.1.3</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 5.1.4</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 5.2.1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 5.2.2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 5.3.1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 5.3.2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="" target="_blank">Click here</a></p>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane animate__animated animate__fadeInUp" id="v-Anti-Ragging1-Committee" role="tabpanel" aria-labelledby="v-Anti-Ragging1-Committee-tab" tabindex="0">
                                <div class="committee_table" id="naac-first">
                                    <div class="committee_head">
                                        <h3>Criterion 6
                                        </h3>
                                    </div>
                                    <div class="row naac-sen">
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 6.2.2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 6.3.2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 6.3.3</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 6.5.2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="" target="_blank">Click here</a></p>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane animate__animated animate__fadeInUp" id="v-Anti-Add1-Committee" role="tabpanel" aria-labelledby="v-Anti-Add1-Committee-tab" tabindex="0">
                                <div class="committee_table" id="naac-first">
                                    <div class="committee_head">
                                        <h3>Criterion 7
                                        </h3>

                                    </div>
                                    <div class="row naac-sen">
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 7.1.2.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="" target="_blank">Click here</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Criterion: 7.1.3</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="" target="_blank">Click here</a></p>
                                            </div>
                                        </div>




                                    </div>
                                </div>
                            </div>



                            <div class="tab-pane animate__animated animate__fadeInUp" id="v-dvv-Committee" role="tabpanel" aria-labelledby="v-dvv-Committee-tab" tabindex="0">
                                <div class="committee_table">
                                    <div class="committee_head">
                                        <h3>IIQA
                                        </h3>

                                    </div>
                                </div>
                            </div>


                            <div class="tab-pane animate__animated animate__fadeInUp" id="v-Aqar-Committee" role="tabpanel" aria-labelledby="v-Aqar-Committee-tab" tabindex="0">

                                <div class="committee_table" id="naac-first">
                                    <div class="committee_head">
                                        <h3>Criterion
                                        </h3>
                                    </div>
                                    <div class="row naac-sen">
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>Institutional Information for Quality Assessment (IIQA)</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/iiqa.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <!-- <div class="tab-pane animate__animated animate__fadeInUp" id="v-Anti-Aqar-Committee" role="tabpanel" aria-labelledby="v-Anti-Aqar-Committee-tab" tabindex="0">

                        <div class="committee_table" id="naac-first">
                                <div class="committee_head">
                                    <h3>Criterion 2
                                    </h3>
                                </div>
                                <div class="row naac-sen">
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.2.1</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.2.2</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.3.2</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.4.1</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                   
                                </div>
                                </div>
                            </div>

                            
                            <div class="tab-pane animate__animated animate__fadeInUp" id="v-Aqar-mphram-Committee" role="tabpanel" aria-labelledby="v-Aqar-mphram-Committee-tab" tabindex="0">

                        <div class="committee_table" id="naac-first">
                                <div class="committee_head">
                                    <h3>Criterion 3
                                    </h3>
                                </div>
                                <div class="row naac-sen">
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.2.1</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.2.2</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.3.2</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.4.1</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                   
                                </div>
                                </div>
                            </div>

                            <div class="tab-pane animate__animated animate__fadeInUp" id="v-Aqar-phram-Committee" role="tabpanel" aria-labelledby="v-Aqar-phram-Committee-tab" tabindex="0">

                        <div class="committee_table" id="naac-first">
                                <div class="committee_head">
                                    <h3>Criterion 4
                                    </h3>
                                </div>
                                <div class="row naac-sen">
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.2.1</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.2.2</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.3.2</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.4.1</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                   
                                </div>
                                </div>
                            </div>
                            <div class="tab-pane animate__animated animate__fadeInUp" id="v-Aqar-phramd-Committee" role="tabpanel" aria-labelledby="v-Aqar-phramd-Committee-tab" tabindex="0">

                        <div class="committee_table" id="naac-first">
                                <div class="committee_head">
                                    <h3>Criterion 5
                                    </h3>
                                </div>
                                <div class="row naac-sen">
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.2.1</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.2.2</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.3.2</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.4.1</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                   
                                </div>
                                </div>
                            </div>
                            <div class="tab-pane animate__animated animate__fadeInUp" id="v-Aqar-Ragging-Committee" role="tabpanel" aria-labelledby="v-Aqar-Ragging-Committee-tab" tabindex="0">

                        <div class="committee_table" id="naac-first">
                                <div class="committee_head">
                                    <h3>Criterion 6
                                    </h3>
                                </div>
                                <div class="row naac-sen">
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.2.1</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.2.2</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.3.2</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.4.1</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                   
                                </div>
                                </div>
                            </div>

                            <div class="tab-pane animate__animated animate__fadeInUp" id="v-Aqar-Add-Committee" role="tabpanel" aria-labelledby="v-Aqar-Add-Committee-tab" tabindex="0">

                        <div class="committee_table" id="naac-first">
                                <div class="committee_head">
                                    <h3>Criterion 7
                                    </h3>
                                </div>
                                <div class="row naac-sen">
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.2.1</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.2.2</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.3.2</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.4.1</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                   
                                </div>
                                </div>
                            </div>
                            <div class="tab-pane animate__animated animate__fadeInUp" id="v-Aqar-extra-Committee" role="tabpanel" aria-labelledby="v-Aqar-extra-Committee-tab" tabindex="0">

                        <div class="committee_table" id="naac-first">
                                <div class="committee_head">
                                    <h3>Extended Profile
                                    </h3>
                                </div>
                                <div class="row naac-sen">
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.2.1</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.2.2</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.3.2</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.4.1</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                   
                                </div>
                                </div>
                            </div> -->

                            <div class="tab-pane animate__animated animate__fadeInUp" id="v-dvv-Committee" role="tabpanel" aria-labelledby="v-dvv-Committee-tab" tabindex="0">
                                <div class="committee_table">
                                    <div class="committee_head">
                                        <h3>NAAC
                                        </h3>

                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane animate__animated animate__fadeInUp" id="v-Aqar1-Committee" role="tabpanel" aria-labelledby="v-Aqar1-Committee-tab" tabindex="0">

                                <div class="committee_table" id="naac-first">
                                    <div class="committee_head">
                                        <h3>Criterion
                                        </h3>
                                    </div>
                                    <div class="row naac-sen">
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="criterion">
                                                <p>SSR VGSE PDF</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="view">
                                                <p><a href="assets/pdfs/SSR-VGSE_compressed.pdf" target="_blank">Click here</a></p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- <div class="tab-pane animate__animated animate__fadeInUp" id="v-Anti-Aqar2-Committee" role="tabpanel" aria-labelledby="v-Anti-Aqar2-Committee-tab" tabindex="0">

                        <div class="committee_table" id="naac-first">
                                <div class="committee_head">
                                    <h3>Criterion 2
                                    </h3>
                                </div>
                                <div class="row naac-sen">
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.2.1</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.2.2</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.3.2</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.4.1</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                   
                                </div>
                                </div>
                            </div>

                            
                            <div class="tab-pane animate__animated animate__fadeInUp" id="v-Aqar3-mphram-Committee" role="tabpanel" aria-labelledby="v-Aqar3-mphram-Committee-tab" tabindex="0">

                        <div class="committee_table" id="naac-first">
                                <div class="committee_head">
                                    <h3>Criterion 3
                                    </h3>
                                </div>
                                <div class="row naac-sen">
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.2.1</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.2.2</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.3.2</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.4.1</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                   
                                </div>
                                </div>
                            </div>

                            <div class="tab-pane animate__animated animate__fadeInUp" id="v-Aqar4-phram-Committee" role="tabpanel" aria-labelledby="v-Aqar4-phram-Committee-tab" tabindex="0">

                        <div class="committee_table" id="naac-first">
                                <div class="committee_head">
                                    <h3>Criterion 4
                                    </h3>
                                </div>
                                <div class="row naac-sen">
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.2.1</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.2.2</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.3.2</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.4.1</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                   
                                </div>
                                </div>
                            </div>
                            <div class="tab-pane animate__animated animate__fadeInUp" id="v-Aqar5-phramd-Committee" role="tabpanel" aria-labelledby="v-Aqar5-phramd-Committee-tab" tabindex="0">

                        <div class="committee_table" id="naac-first">
                                <div class="committee_head">
                                    <h3>Criterion 5
                                    </h3>
                                </div>
                                <div class="row naac-sen">
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.2.1</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.2.2</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.3.2</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.4.1</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                   
                                </div>
                                </div>
                            </div>
                            <div class="tab-pane animate__animated animate__fadeInUp" id="v-Aqar6-Ragging-Committee" role="tabpanel" aria-labelledby="v-Aqar6-Ragging-Committee-tab" tabindex="0">

                        <div class="committee_table" id="naac-first">
                                <div class="committee_head">
                                    <h3>Criterion 6
                                    </h3>
                                </div>
                                <div class="row naac-sen">
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.2.1</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.2.2</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.3.2</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.4.1</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                   
                                </div>
                                </div>
                            </div>

                            <div class="tab-pane animate__animated animate__fadeInUp" id="v-Aqar7-Add-Committee" role="tabpanel" aria-labelledby="v-Aqar7-Add-Committee-tab" tabindex="0">

                        <div class="committee_table" id="naac-first">
                                <div class="committee_head">
                                    <h3>Criterion 7
                                    </h3>
                                </div>
                                <div class="row naac-sen">
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.2.1</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.2.2</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.3.2</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.4.1</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                   
                                </div>
                                </div>
                            </div>
                            <div class="tab-pane animate__animated animate__fadeInUp" id="v-Aqar8-extra-Committee" role="tabpanel" aria-labelledby="v-Aqar8-extra-Committee-tab" tabindex="0">

                        <div class="committee_table" id="naac-first">
                                <div class="committee_head">
                                    <h3>Extended Profile
                                    </h3>
                                </div>
                                <div class="row naac-sen">
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.2.1</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.2.2</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.3.2</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="criterion">
                                        <p>Criterion: 1.4.1</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="view">
                                            <p><a href="" target="_blank">Click here</a></p>
                                        </div>
                                    </div>
                                   
                                </div>
                                </div>
                            </div> -->



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php include('footer.php') ?>
</body>

</html>
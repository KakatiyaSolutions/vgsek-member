<!doctype html>
<html lang="en">

<head>
    <?php include('../head_links.php') ?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/dist/css/cse2.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/dist/css/academic.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/dist/css/department.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
</head>
<style>
    #accordionExample_one .table-bordered td {
        text-transform: uppercase;
        font-size: 15px;
    }

    .table-bordered td {
        padding: 15px 2px;
        font-size: 15px;
    }

    #contact-info {
        margin: 20px;
    }

    #contact-info p {
        font-size: 15px !important;
        line-height: 30px !important;
        text-align: justify;
    }

    .hod-img {
        position: relative;
    }

    .hod-img img {
        border-radius: 20px;
        border: 5px solid var(--blue);

        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
    }

    .cse-hod {
        left: 11px;
        margin: auto;
        padding: 10px 20px;
        color: white;
        background-color: var(--orange);
        bottom: -24px;
        position: absolute;
        text-align: center;
    }

    .cse-hod h4 {
        font-size: 18px;
        font-weight: 700;
        line-height: 28px;
    }

    .cse-hod p {
        text-align: end;
        font-size: 15px;
        line-height: 28px;
    }

    .cse-hod2 {
        padding-left: 10px;
        border-left: 3px solid var(--orange);
        margin-left: 313px;
        margin-top: 30px;
    }

    .cse-hod2 h4 {
        color: var(--blue);
        font-size: 22px;
        font-weight: 700;
        line-height: 28px;
    }

    .cse-hod2 p {
        font-size: 16px;
        line-height: 28px;
    }

    .cse-hod2 p b {
        color: var(--blue);
    }

    .hod-start {
        margin-top: 50px;
        padding: 40px;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
        background: linear-gradient(90deg, #eee 96%, var(--blue) 94%);
    }

    #v-pills-profile1 table img {
        width: 100px !important;
        height: 124px !important;
    }
</style>

<body>

    <?php include('../head.php') ?>

    <!-- banner section -->
    <section id="department_bnr_main">
        <div class="bnr_img">
            <img src="<?php echo $base_url; ?>assets/images/department/department_banner_bg.webp" class="img-fluid" alt="banner" loading="lazy" decoding="async">
        </div>

        <div class="bnr_sec_df">
            <div class="bnr_sec_tt">
                <div class="head_tit">
                    <h4>ECE</h4>
                </div>

                <div class="bnr_bredcrumb">
                    <div class="container">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Departments</a></li>
                                <li class="breadcrumb-item active" aria-current="page">ECE</li>
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

    <section class="cse-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <!-- <div class="d-flex align-items-start"> -->

                    <h2 class="widget-title">ECE Department</h2>
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">



                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item departmnt_acord_item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button department_sccor_head" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse_overview"
                                        aria-expanded="true" aria-controls="collapse_overview">
                                        Program Overview
                                    </button>
                                </h2>
                                <div id="collapse_overview" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body department_accord_body">
                                        <button class="nav-link deprmnt_btn_act active" id="v-pills-home-tab"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button"
                                            role="tab" aria-controls="v-pills-home"
                                            aria-selected="true">Overview</button>
                                        <button class="nav-link deprmnt_btn_act" id="v-pills-profile-tab"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button"
                                            role="tab" aria-controls="v-pills-profile"
                                            aria-selected="false">Vision-Mission</button>

                                        <button class="nav-link deprmnt_btn_act" id="v-pills-messages-tab"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button"
                                            role="tab" aria-controls="v-pills-messages"
                                            aria-selected="false">PEO’s</button>
                                        <button class="nav-link deprmnt_btn_act" id="v-pills-settings-tab"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button"
                                            role="tab" aria-controls="v-pills-settings" aria-selected="false">PO’s &
                                            PSO’s</button>
                                        <button class="nav-link deprmnt_btn_act" id="v-pills-board-tab"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-board" type="button"
                                            role="tab" aria-controls="v-pills-board" aria-selected="false">Board of
                                            Studies</button>
                                        <button class="nav-link deprmnt_btn_act" id="v-pills-adv-tab"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-adv" type="button" role="tab"
                                            aria-controls="v-pills-adv" aria-selected="false">Advisory Board</button>
                                        <button class="nav-link deprmnt_btn_act" id="v-pills-achi-tab"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-achi" type="button"
                                            role="tab" aria-controls="v-pills-achi"
                                            aria-selected="false">Achievements</button>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item departmnt_acord_item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button department_sccor_head collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapsepos" aria-expanded="false"
                                        aria-controls="collapsepos">
                                        B.Tech Courses
                                    </button>
                                </h2>
                                <div id="collapsepos" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body department_accord_body">

                                        <button class="nav-link deprmnt_btn_act" id="v-pills-syllabus-tab"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-syllabus" type="button"
                                            role="tab" aria-controls="v-pills-syllabus"
                                            aria-selected="false">Syllabus</button>
                                        <button class="nav-link deprmnt_btn_act" id="v-pills-time-tab"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-time" type="button"
                                            role="tab" aria-controls="v-pills-time"
                                            aria-selected="false">Timetables</button>
                                        <button class="nav-link deprmnt_btn_act" id="v-pills-academic-tab"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-academic" type="button"
                                            role="tab" aria-controls="v-pills-academic" aria-selected="false">Academic
                                            Calendar</button>
                                        <button class="nav-link deprmnt_btn_act" id="v-pills-lab-tab"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-lab" type="button" role="tab"
                                            aria-controls="v-pills-lab" aria-selected="false">Laboratories</button>

                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item departmnt_acord_item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button department_sccor_head collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse_pso" aria-expanded="false"
                                        aria-controls="collapse_pso">
                                        M.Tech Courses
                                    </button>
                                </h2>
                                <div id="collapse_pso" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body department_accord_body">

                                        <button class="nav-link deprmnt_btn_act" id="v-pills-syllabus1-tab"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-syllabus1" type="button"
                                            role="tab" aria-controls="v-pills-syllabus1"
                                            aria-selected="false">Syllabus</button>
                                        <button class="nav-link deprmnt_btn_act" id="v-pills-time1-tab"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-time1" type="button"
                                            role="tab" aria-controls="v-pills-time1"
                                            aria-selected="false">Timetables</button>
                                        <button class="nav-link deprmnt_btn_act" id="v-pills-academic1-tab"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-academic1" type="button"
                                            role="tab" aria-controls="v-pills-academic1" aria-selected="false">Academic
                                            Calendar</button>
                                        <button class="nav-link deprmnt_btn_act" id="v-pills-lab1-tab"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-lab1" type="button"
                                            role="tab" aria-controls="v-pills-lab1"
                                            aria-selected="false">Laboratories</button>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-item departmnt_acord_item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button department_sccor_head collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse_faculty"
                                        aria-expanded="false" aria-controls="collapse_faculty">
                                        Faculty
                                    </button>
                                </h2>
                                <div id="collapse_faculty" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body department_accord_body">

                                        <button class="nav-link deprmnt_btn_act" id="v-pills-profile1-tab"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-profile1" type="button"
                                            role="tab" aria-controls="v-pills-profile" aria-selected="false">Faculty
                                            Profile</button>
                                        <button class="nav-link deprmnt_btn_act" id="v-pills-event-tab"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-event" type="button"
                                            role="tab" aria-controls="v-pills-event" aria-selected="false">Faculty
                                            Events</button>
                                        <button class="nav-link deprmnt_btn_act" id="v-pills-pub-tab"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-pub" type="button" role="tab"
                                            aria-controls="v-pills-pub" aria-selected="false">Publications</button>
                                        <button class="nav-link deprmnt_btn_act" id="v-pills-news-tab"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-news" type="button"
                                            role="tab" aria-controls="v-pills-news"
                                            aria-selected="false">Newsletter</button>
                                        <button class="nav-link deprmnt_btn_act" id="v-pills-inno-tab"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-inno" type="button"
                                            role="tab" aria-controls="v-pills-inno" aria-selected="false">Faculty
                                            Innovations</button>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item departmnt_acord_item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button department_sccor_head collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse_students"
                                        aria-expanded="false" aria-controls="collapse_students">
                                        Students
                                    </button>
                                </h2>
                                <div id="collapse_students" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body department_accord_body">

                                        <button class="nav-link deprmnt_btn_act" id="v-pills-stu-event-tab"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-stu-event" type="button"
                                            role="tab" aria-controls="v-pills-stu-event" aria-selected="false">Student
                                            Events</button>
                                        <button class="nav-link deprmnt_btn_act" id="v-pills-res-tab"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-res" type="button" role="tab"
                                            aria-controls="v-pills-res" aria-selected="false">Results</button>
                                        <button class="nav-link deprmnt_btn_act" id="v-pills-place-tab"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-place" type="button"
                                            role="tab" aria-controls="v-pills-place"
                                            aria-selected="false">Placements</button>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item departmnt_acord_item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button department_sccor_head collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse_contact"
                                        aria-expanded="false" aria-controls="collapse_contact">
                                        Contact Information
                                    </button>
                                </h2>
                                <div id="collapse_contact" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body department_accord_body">

                                        <button class="nav-link deprmnt_btn_act" id="v-pills-hod-tab"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-hod" type="button" role="tab"
                                            aria-controls="v-pills-hod" aria-selected="false">Contact HOD</button>
                                        <button class="nav-link deprmnt_btn_act" id="v-pills-co-tab"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-co" type="button" role="tab"
                                            aria-controls="v-pills-co" aria-selected="false">CO’s and PO’s</button>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
                <!-- dynamic displaying the all the data -->
                <?php
                //     if (session_status() == PHP_SESSION_NONE) {
                //     session_start();
                // }
                // Connect to the database
                $con = mysqli_connect('srv1328.hstgr.io', 'u629694569_vcpkacin_web', 'Kakatiya@1243', 'u629694569_vcpkacin_web');
                if (!$con) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                // Fetch images and titles from the database
                $query = "SELECT sno, department, description, status, vision, mission,peo,po,po_pso,advisory_board, achivements, board_of_studies FROM dep_about WHERE department_name = 'ECE'";

                $result = mysqli_query($con, $query);
                $query1 = "SELECT id, branch_name, lab_name, number_of_systems, lab_details, laboratories, syllabus, timetable, academic_calendar FROM dep_btech WHERE branch_name = 'ECE'";

                $result2 = mysqli_query($con, $query1);
                // for query Btech syllabus
                $query01 = "SELECT * FROM dep_btech_syllabus WHERE branch = 'ECE'";

                $result01 = mysqli_query($con, $query01);
                // for query btech timetable
                $query02 = "SELECT * FROM dep_btech_timetable WHERE branch = 'ECE'";

                $result02 = mysqli_query($con, $query02);

                // for query btech academic calendar

                $query03 = "SELECT * FROM dep_btech_academic_calendar WHERE branch = 'ECE'";

                $result03 = mysqli_query($con, $query03);

                // for query btech lab configurations

                $query04 = "SELECT * FROM laboratories_config WHERE department_name = 'ECE'";

                $result04 = mysqli_query($con, $query04);

                // for query btech lab details

                $query05 = "SELECT * FROM  labdetails WHERE department LIKE 'ECE' ORDER BY 	date_of_creation ASC";

                $result05 = mysqli_query($con, $query05);

                // for Mtech Tab impleementatios

                // for mtech Syllabus
                $query06 = "SELECT * FROM  mtech_syllabus WHERE department_name LIKE 'ECE'";

                $result06 = mysqli_query($con, $query06);

                // for mtech Timetable
                $query07 = "SELECT * FROM  mtech_timetable WHERE department_name LIKE 'ECE'";

                $result07 = mysqli_query($con, $query07);

                // for mtech Academic Calendar
                $query08 = "SELECT * FROM  mtech_academic_calendar WHERE department_name LIKE 'ECE'";

                $result08 = mysqli_query($con, $query08);
                // for mtech Academic Laboratories
                $query09 = "SELECT * FROM  mtech_laboratories WHERE department_name LIKE 'ECE'";

                $result09 = mysqli_query($con, $query09);






                $result2 = mysqli_query($con, $query1);

                $query2 = "SELECT lab_name, lab_details FROM dep_btech WHERE branch_name = 'ECE'";
                $result3 = mysqli_query($con, $query2);
                // Close the database connection
                // mysqli_close($con);
                $query3 = "SELECT id, branch_name, lab_name, number_of_systems, lab_details, laboratories, syllabus, timetable, academic_calendar FROM dep_mtech WHERE branch_name = 'ECE'";
                $result4 = mysqli_query($con, $query3);


                $query4 = "SELECT * FROM faculty_event2 WHERE department = 'ECE' ORDER BY date_of_creation DESC";
                $result5 = mysqli_query($con, $query4);


                $query5 = "SELECT * FROM dep_faculty_publications2 WHERE department LIKE 'ECE' ORDER BY date_of_creation DESC";
                $result6 = mysqli_query($con, $query5);

                $query6 = "SELECT * FROM dep_faculty_innovations2 WHERE department = 'ECE' ORDER BY date_of_creation DESC";
                $result7 = mysqli_query($con, $query6);
                // mysqli_close($con);
                // for student events
                $query7 = "SELECT * FROM student_events2 WHERE department = 'ECE' ORDER BY date_of_creation DESC";
                $result8 = mysqli_query($con, $query7);

                // for student placement

                $query8 = "SELECT * FROM student_placements2 WHERE department = 'ECE' ORDER BY date_of_creation DESC";
                $result9 = mysqli_query($con, $query8);

                // for contcat Hod Dynamic 


                $query9 = "SELECT * FROM contact_hod WHERE department = 'ECE' ORDER BY id ASC LIMIT 1";
                $result10 = mysqli_query($con, $query9);

                // for Co's Po's

                $query10 = "SELECT * FROM contact_hod WHERE department = 'ECE'";
                $result11 = mysqli_query($con, $query10);

                ?>

                <div class="col-lg-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active animate__animated animate__fadeInUp " id="v-pills-home"
                            role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                            <div class="pro-ove">

                                <section>
                                    <div class="col-lg-12">
                                        <div class="tab-content" id="v-pills-tabContent">
                                            <div class="tab-pane fade show active animate__animated animate__fadeInUp"
                                                id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"
                                                tabindex="0">
                                                <div class="pro-ove">

                                                    <section class="inner-gallery-page Department_main">

                                                        <div class="container">

                                                            <!-- <div class="title">
                                                                    <h2>Department About Section</h2>
                                                                </div> -->

                                                            <div class="row">
                                                                <?php
                                                                // Check if the result contains rows
                                                                if (mysqli_num_rows($result) > 0) {
                                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                                        // Extract department data
                                                                        $department = $row['department'];
                                                                        // $banner = $row['banner'];
                                                                        $vision = $row['vision'];
                                                                        $mission = $row['mission'];
                                                                        $description = $row['description'];
                                                                        $peo = $row['peo'];
                                                                        $po = $row['po'];
                                                                        $popso = $row['po_pso'];
                                                                        $advisory = $row['advisory_board'];
                                                                        $achivements = $row['achivements'];
                                                                        $board_of_studies = $row['board_of_studies'];
                                                                        // Encode image data for inline display
                                                                        // $imageSrc = 'data:image/png;base64,' . base64_encode($banner);
                                                                ?>

                                                                        <div class="col-lg-12">


                                                                        </div>


                                                            </div>

                                                        </div>
                                                        <p> <?php echo $description; ?></p>
                                                    </section>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <!-- <p><strong>Description:</strong> <?php echo $description; ?></p> -->

                                <!-- <h3>Programme Overview</h3>
                                <p>The Department of Computer Science and Engineering was established in the year 2005. with an intake of 60 students in B.Tech. it has become one of the most
                                    strongest and dynamic departments in the college and the computer science field with the distinguished and committed faculty members. The Computer
                                    Science and Engineering (CSE) department is dedicated in imparting quality education through well-designed and periodically upgraded curriculum
                                    in tune with the challenging software needs of the industry.</p>
                                <p>The intake currently is 180 in B.Tech. (CSE) Programme. The department is also successfully running post graduate programme M. Tech.
                                    (Computer Science and Engineering) with an intake of 36. There are eighteen Computer Laboratories in the department well and figured
                                    computer systems. The computer laboratories are equipped with state of the art facilities meeting the standards and well maintained
                                    by dedicated and competent teaching and non-teaching staff.</p>
                                <p>Computer Science and Engineering department is now home to several eminent and new faculty members, having rich experience in quads,
                                    industry and R&D. The department has grown to good number of faculty members who provide leadership and expertise in several areas of
                                    computer science and engineering.</p> -->
                            </div>
                        </div>
                        <div class="tab-pane fade animate__animated animate__fadeInUp" id="v-pills-profile"
                            role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                            <div class="pro-vision">
                                <div class="mission-total">
                                    <div class="vision order-lg-1">

                                        <h1>Vision</h1>
                                        <p> <?php echo $vision; ?></p>
                                    </div>
                                    <img src="http://kakatiyasolutions.in/vageshwari_clg/assets/images/logo/vision.png"
                                        class="img-fluid order-lg-2" loading="lazy" alt="mission-logo">
                                </div>

                                <div class="mission-total">

                                    <img src="http://kakatiyasolutions.in/vageshwari_clg/assets/images/logo/mission.png"
                                        class="img-fluid" loading="lazy" alt="mission-logo">

                                    <div class="mission">
                                        <h1>Mission</h1>
                                        <div> <?php echo $mission; ?></div>

                                        <!-- <div class="vns_depart_img">
                                            <img src="http://kakatiyasolutions.in/vageshwari_clg/assets/images/department/list_type_red1.webp" alt="list type image" class="img-fluid" loading="lazy">
                                            <li>To prepare Computer Science and Engineering graduates to be a lifelong learner
                                                with competence in basic science &amp; engineering and professional core, multidisciplinary
                                                areas, with continuous update of the syllabus, so that they can succeed in industry as
                                                an individual and as a team or to pursue higher studies or to become an entrepreneur.</li>
                                        </div>
                                        <div class="vns_depart_img">
                                            <img src="http://kakatiyasolutions.in/vageshwari_clg/assets/images/department/list_type_red1.webp" alt="list type image" class="img-fluid" loading="lazy">
                                            <li>To enable the graduates to use modern tools, design and create novelty-based products required for the society and communicate
                                                effectively with professional ethics</li>
                                        </div>
                                        <div class="vns_depart_img">
                                            <img src="http://kakatiyasolutions.in/vageshwari_clg/assets/images/department/list_type_red1.webp" alt="list type image" class="img-fluid" loading="lazy">
                                            <li>To achieve and impart holistic technical education using the best of infrastructure,
                                                outstanding technical and teaching expertise to establish the students into competent and confident engineers</li>
                                        </div> -->
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade animate__animated animate__fadeInUp" id="v-pills-messages"
                            role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">
                            <div class="peo">


                                <div class="committee_table">
                                    <div class="committee_head">
                                        <h3>PEO’s</h3>
                                    </div>
                                    <div class="committee_table_inn">
                                        <div class="table-responsive">
                                            <?php echo $peo; ?>
                                            <!-- <table class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>S.NO</th>
                                                        <th>PEO#</th>
                                                        <th>Program Educational Objectives</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td></td>
                                                        <td>Program Educational Objectives - 1</td>
                                                        <td>To promote industrial growth and social transformation students must practice their profession with ethics and
                                                            produce
                                                            responsible graduates within them</td>

                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Program Educational Objectives – 2</td>
                                                        <td>Apply fundamental knowledge for problem analysis and conduct computer science and engineering
                                                            research for continual progress</td>

                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Program Educational Objectives– 3</td>
                                                        <td>To adapt to a fast changing environment through acquisition and applications of skills and technologies
                                                            illustrated by students using their abilities</td>

                                                    </tr>

                                                </tbody>
                                            </table> -->
                                        </div>
                                    </div>
                                    <!--  -->
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade animate__animated animate__fadeInUp" id="v-pills-settings"
                            role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">
                            <div class="committee_head">
                                <h3>PO’s & PSO’s</h3>
                            </div>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Programme Outcomes (POs)
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="committee_table">
                                                <div class="committee_head">
                                                    <h3>Programme Outcomes (POs)</h3>
                                                </div>
                                                <div class="committee_table_inn">
                                                    <div class="table-responsive">
                                                        <?php echo $po; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            Program Specific Outcomes (PSOs)
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">

                                            <div class="committee_table">
                                                <div class="committee_head">
                                                    <h3>Program Specific Outcomes (PSOs)</h3>
                                                </div>
                                                <div class="committee_table_inn">
                                                    <div class="table-responsive">
                                                        <?php echo $popso; ?>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>







                        </div>

                        <div class="tab-pane fade animate__animated animate__fadeInUp " id="v-pills-board"
                            role="tabpanel" aria-labelledby="v-pills-board-tab" tabindex="0">
                            <div class="committee_head">
                                <h3>Board of Studies</h3>
                            </div>
                            <?php echo $board_of_studies; ?>
                        </div>
                        <div class="tab-pane fade animate__animated animate__fadeInUp " id="v-pills-adv" role="tabpanel"
                            aria-labelledby="v-pills-adv-tab" tabindex="0">
                            <div class="committee_head">
                                <h3>Advisory Board</h3>
                            </div>
                            <div class="committee_table_inn">

                                <div class="table-responsive">
                                    <?php echo $advisory; ?>
                                    <!-- <table class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>S.NO</th>
                                                        <th>Name of the Member</th>
                                                        <th>Designation</th>
                                                        <th>Position</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td></td>
                                                        <td>Dr. N.Chandamouli (Head, CSE)</td> 
                                                       <td>Professor & HoD</td>
                                                       <td>Chairperson</td>

                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Dr. D.Srinivas Reddy</td>
                                                        <td>Assistant Professor</td>
                                                        <td>Member Secretary</td>
                                                       

                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Dr.E.Srikanth reddy</td>
                                                        <td>Assistant Professor</td>
                                                        <td>Member</td>
                                                       

                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Dr. Gulab Singh</td>
                                                        <td>Assistant Professor</td>
                                                        <td>Member</td>
                                                       

                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Dr. Gulab Singh</td>
                                                        <td>Assistant Professor</td>
                                                        <td>Member</td>
                                                       

                                                    </tr>


                                                </tbody>
                                            </table> -->
                                </div>
                            </div>

                        </div>


                        <div class="tab-pane fade animate__animated animate__fadeInUp " id="v-pills-achi"
                            role="tabpanel" aria-labelledby="v-pills-achi-tab" tabindex="0">
                            <div class="committee_head">
                                <h3>Achievements</h3>
                            </div>
                            <?php echo $achivements; ?>
                        </div>
                    <?php
                                                                    }
                                                                } else {
                                                                    echo "<p>No department information found.</p>";
                                                                }

                                                                if (mysqli_num_rows($result01) > 0) {
                                                                    while ($row2 = mysqli_fetch_assoc($result01)) {
                                                                        // Extract department data
                                                                        $syllabus = $row2['syllabus'];
                                                                        // $banner = $row2['banner'];

                                                                        // $board_of_studies = $row['board_of_studies'];
                                                                        // Encode image data for inline display
                                                                        // $imageSrc = 'data:image/png;base64,' . base64_encode($banner);
                    ?>


                        <div class="tab-pane fade animate__animated animate__fadeInUp " id="v-pills-tech"
                            role="tabpanel" aria-labelledby="v-pills-tech-tab" tabindex="0">
                            <div class="committee_head">
                                <h3>B.Tech Courses</h3>
                            </div>
                            <h5>Coming Soon</h5>
                        </div>

                        <div class="tab-pane fade animate__animated animate__fadeInUp " id="v-pills-syllabus"
                            role="tabpanel" aria-labelledby="v-pills-syllabus-tab" tabindex="0">

                            <div class="peo">


                                <div class="committee_table">
                                    <div class="committee_head">
                                        <h3>Syllabus</h3>
                                    </div>
                                    <div class="committee_table_inn">
                                        <div class="table-responsive">


                                            <p> <?php echo $syllabus; ?></p>


                                            <!-- <table class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>S.NO</th>
                                                        <th>Regulation</th>
                                                        <th>Links</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td></td>
                                                        <td>R18</td>
                                                        <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/pdfs/R18B.Tech.CSESyllabus.pdf" target="_blank" rel="noopener">View</a></td>

                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>R22</td>
                                                        <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/pdfs/R22B.Tech.CSECourseStructureSyllabus2.pdf" target="_blank" rel="noopener">View</a></td>

                                                    </tr>


                                                </tbody>
                                            </table> -->
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    <?php
                                                                    }
                                                                } else {
                                                                    echo "<p>No department information found.</p>";
                                                                }

                                                                if (mysqli_num_rows($result02) > 0) {
                                                                    while ($row3 = mysqli_fetch_assoc($result02)) {
                                                                        // Extract department data

                                                                        $timetable = $row3['syllabus'];

                                                                        // $board_of_studies = $row['board_of_studies'];
                                                                        // Encode image data for inline display
                                                                        // $imageSrc = 'data:image/png;base64,' . base64_encode($banner);
                    ?>


                        <div class="tab-pane fade animate__animated animate__fadeInUp " id="v-pills-time"
                            role="tabpanel" aria-labelledby="v-pills-time-tab" tabindex="0">
                            <div class="peo">


                                <div class="committee_table">
                                    <div class="committee_head">
                                        <h3>Timetables</h3>
                                    </div>
                                    <div class="committee_table_inn">
                                        <div class="table-responsive">
                                            <p> <?php echo $timetable; ?></p>
                                            <!-- <table class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>S.NO</th>
                                                        <th>Academic Year</th>
                                                        
                                                        <th>Link</th>

                                                    </tr>
                                                </thead>


                                                <tbody>

                                                    <tr>
                                                        <td></td>
                                                        <td>2023-2024</td>
                                                        <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/pdfs/Time_tables.pdf" target="_blank" rel="noopener">View</a></td>
                                                    </tr>
                                                </tbody>
                                            </table> -->
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    <?php
                                                                    }
                                                                } else {
                                                                    echo "<p>No department information found.</p>";
                                                                }

                                                                if (mysqli_num_rows($result03) > 0) {
                                                                    while ($row4 = mysqli_fetch_assoc($result03)) {
                                                                        // Extract department data
                                                                        // $id = $row2['id'];
                                                                        // // $banner = $row2['banner'];
                                                                        // $branch_name = $row2['branch_name'];
                                                                        // $lab_name = $row2['lab_name'];
                                                                        // $lab_details = $row2['lab_details'];
                                                                        // $laboratories = $row2['laboratories'];
                                                                        // $syllabus = $row2['syllabus'];
                                                                        // $timetable = $row2['timetable'];
                                                                        $academic_calendar = $row4['syllabus'];
                    ?>

                        <div class="tab-pane fade animate__animated animate__fadeInUp " id="v-pills-academic"
                            role="tabpanel" aria-labelledby="v-pills-academic-tab" tabindex="0">


                            <div class="peo">


                                <div class="committee_table">
                                    <div class="committee_head">
                                        <h3>Academic Calendar</h3>
                                    </div>
                                    <div class="committee_table_inn">
                                        <div class="table-responsive">
                                            <p> <?php echo $academic_calendar; ?></p>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                <?php
                                                                    }
                                                                } else {
                                                                    echo "<p>No department information found.</p>";
                                                                }


                ?>
                <div class="tab-pane fade animate__animated animate__fadeInUp " id="v-pills-lab" role="tabpanel"
                    aria-labelledby="v-pills-lab-tab" tabindex="0">
                    <div class="committee_head">
                        <h3>Laboratories</h3>
                    </div>
                    <div class="committee_table_inn">
                        <?php
                        if (mysqli_num_rows($result04) > 0) {
                            while ($row5 = mysqli_fetch_assoc($result04)) {
                                $laboratories = $row5['description'];
                        ?>
                                <div class="table-responsive">
                                    <p> <?php echo $laboratories; ?></p>
                                    <!-- <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>S.NO</th>
                                                <th>Name of the Lab</th>
                                                <th>CONFIGURATION</th>
                                                <th>Area in sq.mt</th>
                                                <th>Number of Systems</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td>CSE LAB-1</td>
                                                <td>COMPUTER CONFIGURATION
                                                    Make: LENOVO THINKCENTER
                                                    Processor: 12TH GeN Intel(R) Core(TM) i5-12400
                                                    Speed:2.50 GHz
                                                    RAM:8GB
                                                    Hard Disk:250GB(SSD)
                                                    UPS:250KVA(CENTRAL)
                                                </td>
                                                <td>142</td>
                                                <td>33</td>

                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>CSE LAB-2</td>
                                                <td>COMPUTER CONFIGURATION
                                                    Make: LENOVO THINKCENTER
                                                    Processor: 12TH GeN Intel(R) Core(TM) i5-12400
                                                    Speed:2.50 GHz
                                                    RAM:8GB
                                                    Hard Disk:250GB(SSD)
                                                    UPS:250KVA(CENTRAL)

                                                </td>
                                                <td>142</td>
                                                <td>33</td>

                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>CSE LAB-3</td>
                                                <td>COMPUTER CONFIGURATION
                                                    Make: DELL
                                                    Processor: Intel® Core(TM) i5-6400T CPU @2020GHz 2.21 GHz
                                                    Speed:3.0 GHz
                                                    RAM:8GB
                                                    Hard Disk:250 GB(SSD)
                                                    UPS:250KVA(CENTRAL)

                                                </td>
                                                <td>142</td>
                                                <td>33</td>

                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>CSE LAB-4</td>
                                                <td>COMPUTER CONFIGURATION
                                                    Make: DELL
                                                    Processor: Intel® Core(TM) i5-6400T CPU @2020GHz 2.21 GHz
                                                    Speed:3.0 GHz
                                                    RAM:8GB
                                                    Hard Disk:250 GB(SSD)
                                                    UPS:250KVA(CENTRAL)
                                                </td>
                                                <td>142</td>
                                                <td>33</td>

                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>CSE LAB-5</td>
                                                <td>Make: DELL
                                                    Processor: i5,6TH GEN
                                                    Speed:2.3 GHz
                                                    RAM:8GB
                                                    Hard Disk:240 GB(HDD)
                                                    UPS:250KVA(CENTRAL)
                                                </td>
                                                <td>142</td>
                                                <td>33</td>

                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>CSE LAB-6</td>
                                                <td>Make: DELL
                                                    Processor: i5,6TH GEN
                                                    Speed:2.3 GHz
                                                    RAM:8GB
                                                    Hard Disk:240 GB(HDD)
                                                    UPS:250KVA(CENTRAL)

                                                </td>
                                                <td>142</td>
                                                <td>33</td>

                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>CSE LAB-7</td>
                                                <td>Make: DELL
                                                    Processor: i5,6TH GEN
                                                    Speed:2.3 GHz
                                                    RAM:8GB
                                                    Hard Disk:240 GB(HDD)
                                                    UPS:250KVA(CENTRAL)

                                                </td>
                                                <td>142</td>
                                                <td>33</td>

                                            </tr>


                                        </tbody>
                                    </table> -->
                                </div>
                        <?php
                            }
                        } else {
                            echo "";
                        }
                        ?>
                    </div>



                    <div class="lab-head">
                        <h1>Lab Details</h1>
                    </div>

                    <div class="accordion" id="accordionExample2">
                        <?php
                        if (mysqli_num_rows($result05) > 0) {
                            echo '<div class="accordion" id="accordionExample2">';
                            $count = 1;
                            while ($row = mysqli_fetch_assoc($result05)) {
                                $labName = $row['title'];
                                $labDetails = $row['description'];
                                $collapseId = "collapse" . $count;
                                $headingId = "heading" . $count;

                                echo '
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="' . $headingId . '">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#' . $collapseId . '" aria-expanded="false" aria-controls="' . $collapseId . '">
                                                            ' . ($labName) . '
                                                        </button>
                                                    </h2>
                                                    <div id="' . $collapseId . '" class="accordion-collapse collapse" aria-labelledby="' . $headingId . '" data-bs-parent="#accordionExample2">
                                                        <div class="accordion-body">
                                                            ' . ($labDetails) . '
                                                        </div>
                                                    </div>
                                                </div>';
                                $count++;
                            }
                            echo '</div>';
                        } else {
                            echo "<p>No lab details found for the selected branch.</p>";
                        }



                        ?>
                        <!-- <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne1">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                                            CSE LAB-1
                                        </button>
                                    </h2>
                                    <div id="collapseOne1" class="accordion-collapse collapse" aria-labelledby="headingOne1" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <div class="lab-full">


                                                <div class="committee_head">
                                                    <h3>CSE LAB-1</h3>
                                                </div>
                                                <div class="lab-min">
                                                    <h6>Data Structures Lab:-</h6>
                                                </div>
                                                <p>The objectives of the Data Structures Lab (DS Lab) are to introduce the fundamental concepts of data structures, including their design,
                                                    implementation, and application. In the DS Lab, students gain hands-on experience with various data structures such as arrays,
                                                    linked lists, stacks, queues, trees, graphs, and hash tables. This lab focuses on the practical implementation and manipulation
                                                    of these structures, as well as the development of algorithms for data processing and management.</p>

                                                <div class="lab-min">
                                                    <h6>OOPS Through JAVA Lab:-</h6>
                                                </div>
                                                <p>The objectives of the Object-Oriented Programming Systems (OOPS) Through Java Lab are to introduce the fundamental concepts of
                                                    object-oriented programming using Java, and to provide practical experience in designing and implementing object-oriented
                                                    applications. In the OOPS Through Java Lab, students will learn the principles of object-oriented design and programming,
                                                    including classes, objects, inheritance, polymorphism, and interfaces. This lab focuses on building robust, reusable,
                                                    and maintainable software using Java.</p>


                                                <div class="lab-min">
                                                    <h6>Data Visualization and R Programming Lab:-</h6>
                                                </div>
                                                <p>The objectives of the Data Visualization and R Programming Lab are to introduce students to the fundamental concepts and techniques
                                                    of data visualization and to develop proficiency in R programming for data analysis. This lab provides hands-on experience
                                                    in creating various types of visualizations, performing data manipulation, and analyzing data using R, which is a powerful
                                                    language and environment for statistical computing and graphics.</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                            CSE LAB-2
                                        </button>
                                    </h2>
                                    <div id="collapseTwo2" class="accordion-collapse collapse" aria-labelledby="headingTwo2" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <div class="lab-full">


                                                <div class="committee_head">
                                                    <h3>CSE LAB-2</h3>
                                                </div>
                                                <div class="lab-min">
                                                    <h6>Mobile Application Development:-</h6>
                                                </div>
                                                <p>The objectives of the Mobile Application Development Lab are to introduce students to the concepts and tools required for developing mobile applications,
                                                    and to provide hands-on experience in designing, implementing, and testing mobile applications. This lab focuses on building applications
                                                    for mobile platforms, primarily Android, and covers various aspects of mobile app development including user interface design,
                                                    user experience, networking, and data storage.</p>

                                                <div class="lab-min">
                                                    <h6>Software Testing Methodologies:-</h6>
                                                </div>
                                                <p>The objectives of the Software Testing Methodologies Lab are to introduce students to the principles and practices of
                                                    software testing, and to provide hands-on experience in various testing techniques and tools. This lab covers different
                                                    types of testing, test case design, test automation, and the use of testing tools to ensure software quality and reliability.</p>


                                                <div class="lab-min">
                                                    <h6>Database Management Lab:-</h6>
                                                </div>
                                                <p>The objectives of the Database Management Lab are to introduce students to the fundamental concepts of database systems,
                                                    and to provide hands-on experience in designing, implementing, and managing databases. This lab covers various aspects of d
                                                    atabase management including database design, SQL programming, transaction management, and database connectivity.</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            CSE LAB-3
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <div class="lab-full">


                                                <div class="committee_head">
                                                    <h3>CSE LAB-3</h3>
                                                </div>
                                                <div class="lab-min">
                                                    <h6>Computer Networks and Web Technologies Lab:-</h6>
                                                </div>
                                                <p>A computer networks laboratory enables users to share knowledge, data, voice, video, tools, and various resources efficiently.
                                                    It creates an environment conducive to extending, improving, integrating, and refining the learning and experimentation processes
                                                    across multiple subjects. This contributes to enhancing scientific research effectiveness and optimizing the use of expensive or
                                                    scarce equipment. Computer networking involves interconnected computing devices that exchange data and share resources using a
                                                    set of rules known as communication protocols. These protocols facilitate the transmission of information over both physical
                                                    and wireless technologies.</p>

                                                <p>The course is designed to prepare students for networking tasks using both IPv4
                                                    and IPv6. The lab encompasses various aspects of network configuration, including static, default, and dynamic
                                                    routing; setting up Layer 2 switching; configuring VLANs; and implementing network security and access controls.</p>
                                                <p>Web Technologies Lab are to provide students with hands-on experience in developing, designing, and implementing web applications
                                                    and services. This lab covers a range of web technologies, including front-end and back-end development,
                                                    web design principles, and server-side scripting, equipping students with the skills needed to build dynamic
                                                    and responsive web applications.</p>

                                                <div class="lab-min">
                                                    <h6>Software Engineering Lab:-</h6>
                                                </div>
                                                <p>Students will acquire essential software development skills throughout various stages of the software life cycle.
                                                    They will learn to ensure software quality by working within different protocol-based environments. Upon completing
                                                    the course, students will be capable of generating test cases for software testing and managing software
                                                    development models using a rational approach. The course employs Rational Rose Enterprise Edition software to achieve these objectives.</p>


                                                <div class="lab-min">
                                                    <h6>Computer Networks Lab:-</h6>
                                                </div>
                                                <p>A computer networks laboratory enables users to share knowledge, data, voice, video, tools, and various resources efficiently.
                                                    It creates an environment conducive to extending, improving, integrating, and refining the learning and experimentation processes
                                                    across multiple subjects. This contributes to enhancing scientific research effectiveness and optimizing the use of
                                                    expensive or scarce equipment. Computer networking involves interconnected computing devices that exchange data
                                                    and share resources using a set of rules known as communication protocols. These protocols facilitate the transmission
                                                    of information over both physical and wireless technologies.</p>
                                                <p>The course is designed to prepare students for networking tasks using both IPv4 and IPv6. The lab encompasses various aspects of network
                                                    configuration, including static, default, and dynamic routing; setting up Layer 2 switching; configuring VLANs; and implementing
                                                    network security and access controls.</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            CSE LAB-4
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <div class="lab-full">


                                                <div class="committee_head">
                                                    <h3>CSE LAB-4</h3>
                                                </div>
                                                <div class="lab-min">
                                                    <h6>Node Js:-</h6>
                                                </div>
                                                <p>The objectives of the Node.js Lab are to provide students with practical experience in server-side development using Node.js.
                                                    This lab focuses on building scalable, efficient, and real-time web applications and services using Node.js and its associated frameworks and libraries.</p>


                                                <div class="lab-min">
                                                    <h6>Network Programming Lab:-</h6>
                                                </div>
                                                <p>The Network Programming Lab is designed to provide students with practical experience in developing and implementing networked applications.
                                                    This lab focuses on understanding and applying network programming concepts, using various protocols, and developing applications
                                                    that communicate over networks.</p>


                                                <div class="lab-min">
                                                    <h6>Operating Systems Lab:-</h6>
                                                </div>
                                                <p>The Operating Systems Lab (OS Lab) aims to introduce students to fundamental concepts,
                                                    design principles, and implementations of operating systems. In this lab, students explore various
                                                    aspects of operating systems, including process management, memory management, file systems, virtualization, and distributed operating systems.
                                                    Practical sessions involve working with Linux-based systems such as Fedora and Ubuntu. </p>


                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            CSE LAB-5
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <div class="lab-full">


                                                <div class="committee_head">
                                                    <h3>CSE LAB-5</h3>
                                                </div>
                                                <div class="lab-min">
                                                    <h6>Data Communication and Computer Networks Lab:-</h6>
                                                </div>
                                                <p>The Data Communication and Computer Networks Lab aims to provide students with practical experience in understanding and implementing
                                                    key concepts of data communication and computer networking. This lab covers a range of topics, including network protocols,
                                                    data transmission, network configuration, and troubleshooting, to equip students with the skills needed for effective network management and analysis..</p>




                                                <div class="lab-min">
                                                    <h6>Scripting Languages Lab:-</h6>
                                                </div>
                                                <p>The Scripting Languages Lab is designed to provide students with hands-on experience in using various scripting languages for automating tasks,
                                                    developing applications, and processing data. This lab focuses on the practical application of scripting languages
                                                    to solve real-world problems and improve productivity in various domains.</p>


                                                <div class="lab-min">
                                                    <h6>Cryptography and Network Security Lab:-</h6>
                                                </div>
                                                <p>The Cryptography and Network Security Lab is designed to provide students with practical experience in implementing cryptographic techniques
                                                    and understanding network security principles. This lab focuses on the application of cryptographic algorithms, securing network communications,
                                                    and protecting data against various threats.</p>


                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSix">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            CSE LAB-6
                                        </button>
                                    </h2>
                                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <div class="lab-full">


                                                <div class="committee_head">
                                                    <h3>CSE LAB-6</h3>
                                                </div>
                                                <div class="lab-min">
                                                    <h6>Compiler Design Lab:-</h6>
                                                </div>
                                                <p>The Compiler Design Lab is aimed at providing students with hands-on experience in the theory and practical implementation
                                                    of compilers and related tools. This lab focuses on the design, construction, and analysis of compilers, including lexical analysis,
                                                    syntax analysis, semantic analysis, optimization, and code generation..</p>




                                                <div class="lab-min">
                                                    <h6>Machine Learning Lab:-</h6>
                                                </div>
                                                <p>The Machine Learning Lab is designed to provide students with hands-on experience in applying machine learning techniques to real-world problems.
                                                    This lab focuses on the practical implementation of machine learning algorithms, data preprocessing, model training, and evaluation..</p>


                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSeven">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                            Project Lab
                                        </button>
                                    </h2>
                                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <div class="lab-full">


                                                <div class="committee_head">
                                                    <h3>Project Lab</h3>
                                                </div>

                                                <p>The department's project laboratory provides students with a valuable opportunity to gain hands-on experience in a cutting-edge environment.
                                                    Here, students become proficient in both the technical and creative skills essential for success in the field of Computer Science and Engineering.
                                                    The Project Laboratory plays a crucial role in fostering practical learning, enabling students to develop innovative proposals and bring their
                                                    final projects to life.</p>

                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                        <!-- Btech lab images -->
                        <div class="lab-img">
                            <div class="your-slider">

                                <div>
                                    <a href="https://kakatiyasolutions.in/vageshwari_clg/assets/images/ece/ece-lab1.webp" data-fancybox="gallery" data-caption="Caption Images 1">
                                        <img src="https://kakatiyasolutions.in/vageshwari_clg/assets/images/ece/ece-lab1.webp" alt="Image 1" class="img-fluid" loading="lazy" decoding="async"></a>
                                    <div class="overlay">
                                        <p>Ece Lab-1 </p>
                                    </div>
                                </div>

                                <div>
                                    <a href="https://kakatiyasolutions.in/vageshwari_clg/assets/images/ece/ece-lab2.webp" data-fancybox="gallery" data-caption="Caption Images 1">
                                        <img src="https://kakatiyasolutions.in/vageshwari_clg/assets/images/ece/ece-lab2.webp" alt="Image 2" class="img-fluid" loading="lazy" decoding="async">
                                    </a>
                                    <div class="overlay">
                                        <p>EceLab-2 </p>
                                    </div>
                                </div>
                                <div>
                                    <a href="https://kakatiyasolutions.in/vageshwari_clg/assets/images/ece/ece-lab3.webp" data-fancybox="gallery" data-caption="Caption Images 1">
                                        <img src="https://kakatiyasolutions.in/vageshwari_clg/assets/images/ece/ece-lab3.webp" alt="Image 3" class="img-fluid" loading="lazy" decoding="async">
                                    </a>
                                    <div class="overlay">
                                        <p>Ece Lab-3 </p>
                                    </div>
                                </div>
                                <div>
                                    <a href="https://kakatiyasolutions.in/vageshwari_clg/assets/images/ece/ece-lab4.webp" data-fancybox="gallery" data-caption="Caption Images 1">
                                        <img src="https://kakatiyasolutions.in/vageshwari_clg/assets/images/ece/ece-lab4.webp" alt="Image 4" class="img-fluid" loading="lazy" decoding="async">
                                    </a>
                                    <div class="overlay">
                                        <p>Ece Lab-4 </p>
                                    </div>
                                </div>
                                <div>
                                    <a href="https://kakatiyasolutions.in/vageshwari_clg/assets/images/ece/ece-lab5.webp" data-fancybox="gallery" data-caption="Caption Images 1">
                                        <img src="https://kakatiyasolutions.in/vageshwari_clg/assets/images/ece/ece-lab5.webp" alt="Image 5" class="img-fluid" loading="lazy" decoding="async">
                                    </a>
                                    <div class="overlay">
                                        <p>Ece Lab-5 </p>
                                    </div>
                                </div>
                                <div>
                                    <a href="https://kakatiyasolutions.in/vageshwari_clg/assets/images/ece/ece-lab6.webp" data-fancybox="gallery" data-caption="Caption Images 1">
                                        <img src="https://kakatiyasolutions.in/vageshwari_clg/assets/images/ece/ece-lab6.webp" alt="Image 5" class="img-fluid" loading="lazy" decoding="async">
                                    </a>
                                    <div class="overlay">
                                        <p>Ece Lab-6 </p>
                                    </div>
                                </div>
                                <div>
                                    <a href="https://kakatiyasolutions.in/vageshwari_clg/assets/images/ece/ece-lab7.webp" data-fancybox="gallery" data-caption="Caption Images 1">
                                        <img src="https://kakatiyasolutions.in/vageshwari_clg/assets/images/ece/ece-lab7.webp" alt="Image 5" class="img-fluid" loading="lazy" decoding="async">
                                    </a>
                                    <div class="overlay">
                                        <p>Ece Lab-7 </p>
                                    </div>
                                </div>
                                <div>
                                    <a href="https://kakatiyasolutions.in/vageshwari_clg/assets/images/ece/ece-lab8.webp" data-fancybox="gallery" data-caption="Caption Images 1">
                                        <img src="https://kakatiyasolutions.in/vageshwari_clg/assets/images/ece/ece-lab8.webp" alt="Image 5" class="img-fluid" loading="lazy" decoding="async">
                                    </a>
                                    <div class="overlay">
                                        <p> Ece Lab-8 </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
                <!-- M.tech tab Details goes here -->

                <div class="tab-pane fade animate__animated animate__fadeInUp " id="v-pills-mtech"
                    role="tabpanel" aria-labelledby="v-pills-mtech-tab" tabindex="0">
                    <div class="committee_head">
                        <h3>M.Tech Courses</h3>
                    </div>
                    <!-- <h5>Coming Soon</h5> -->



                </div>
                <div class="tab-pane fade animate__animated animate__fadeInUp " id="v-pills-syllabus1"
                    role="tabpanel" aria-labelledby="v-pills-syllabus1-tab" tabindex="0">
                    <div class="committee_head">
                        <h3>Syllabus</h3>
                    </div>


                    <div class="committee_table_inn">
                        <?php
                        if (mysqli_num_rows($result06) > 0) {
                            while ($row6 = mysqli_fetch_assoc($result06)) {
                                // Extract department data
                                $mtech_syllabus = $row6['description'];
                        ?>
                                <!-- <div class="table-responsive">
                                                    <p> <?php echo $syllabus; ?></p>
                                                </div> -->
                        <?php
                            }
                        } else {
                            echo "<p>No department information found.</p>";
                        }
                        ?>
                    </div>
                    <div
                        class="<?php echo $mtech_syllabus != '<div><h3>Coming Soon</h3></div>' ? 'committee_table_inn' : ''; ?>">
                        <div
                            class="<?php echo $mtech_syllabus != '<div><h3>Coming Soon</h3></div>' ? 'table-responsive' : ''; ?>">
                            <p><?php echo $mtech_syllabus; ?></p>
                        </div>
                    </div>


                </div>
                <div class="tab-pane fade animate__animated animate__fadeInUp " id="v-pills-time1"
                    role="tabpanel" aria-labelledby="v-pills-time1-tab" tabindex="0">
                    <div class="committee_head">
                        <h3>Timetables</h3>
                    </div>

                    <!-- <h5>Coming Soon</h5> -->
                    <!-- <div class="committee_table_inn">
                                        <div class="table-responsive">
                                        <p> <?php echo $mtech_timetable; ?></p>
                                            
                                        </div>
                                    </div> -->

                    <div class="committee_table_inn">
                        <?php
                        if (mysqli_num_rows($result07) > 0) {
                            while ($row7 = mysqli_fetch_assoc($result07)) {
                                // Extract department data
                                $mtech_timetable = $row7['description'];
                        ?>
                                <!-- <div class="table-responsive">
                                                    <p> <?php echo $syllabus; ?></p>
                                                </div> -->

                    </div>
                    <div
                        class="<?php echo $mtech_timetable != '<div><h3>Coming Soon</h3></div>' ? 'committee_table_inn' : ''; ?>">
                        <div
                            class="<?php echo $mtech_timetable != '<div><h3>Coming Soon</h3></div>' ? 'table-responsive' : ''; ?>">
                            <p><?php echo $mtech_timetable; ?></p>
                        </div>
                    </div>
            <?php
                            }
                        } else {
                            echo "<p>No department information found.</p>";
                        }
            ?>
                </div>
                <div class="tab-pane fade animate__animated animate__fadeInUp " id="v-pills-academic1"
                    role="tabpanel" aria-labelledby="v-pills-academic1-tab" tabindex="0">
                    <div class="committee_head">
                        <h3>Academic Calendar</h3>
                    </div>

                    <!-- <h5>Coming Soon</h5>
                                <div class="committee_table_inn">
                                        <div class="table-responsive">
                                        <p> <?php echo $mtech_academic_calendar; ?></p>
                                            
                                        </div>
                                    </div> -->

                    <div class="committee_table_inn">
                        <?php
                        if (mysqli_num_rows($result08) > 0) {
                            while ($row8 = mysqli_fetch_assoc($result08)) {
                                // Extract department data
                                $mtech_academic_calendar = $row8['description'];
                        ?>
                                <!-- <div class="table-responsive">
                                                    <p> <?php echo $syllabus; ?></p>
                                                </div> -->

                    </div>
                    <div
                        class="<?php echo $mtech_academic_calendar != '<div><h3>Coming Soon</h3></div>' ? 'committee_table_inn' : ''; ?>">
                        <div
                            class="<?php echo $mtech_academic_calendar != '<div><h3>Coming Soon</h3></div>' ? 'table-responsive' : ''; ?>">
                            <p><?php echo $mtech_academic_calendar; ?></p>
                        </div>
                    </div>

            <?php
                            }
                        } else {
                            echo "<p>No department information found.</p>";
                        }
            ?>
                </div>
                <div class="tab-pane fade animate__animated animate__fadeInUp " id="v-pills-lab1"
                    role="tabpanel" aria-labelledby="v-pills-lab1-tab" tabindex="0">
                    <div class="committee_head">
                        <h3>Laboratories</h3>
                    </div>

                    <!-- <h5>Coming Soon</h5>
                                <div class="committee_table_inn">
                                        <div class="table-responsive">
                                        <p> <?php echo $mtech_laboratories; ?></p>
                                            
                                        </div>
                                    </div> -->

                    <div class="committee_table_inn">
                        <?php
                        if (mysqli_num_rows($result09) > 0) {
                            while ($row9 = mysqli_fetch_assoc($result09)) {
                                // Extract department data
                                $mtech_laboratories = $row9['description'];
                        ?>
                                <!-- <div class="table-responsive">
                                                    <p> <?php echo $syllabus; ?></p>
                                                </div> -->

                    </div>
                    <div
                        class="<?php echo $mtech_laboratories != '<div><h4>Coming Soon</h4></div>' ? 'committee_table_inn' : ''; ?>">
                        <div
                            class="<?php echo $mtech_laboratories != '<div><h4>Coming Soon</h4></div>' ? 'table-responsive' : ''; ?>">
                            <p><?php echo $mtech_laboratories; ?></p>
                        </div>
                    </div>

            <?php
                            }
                        } else {
                            echo "<p>No department information found.</p>";
                        }
            ?>
                </div>
                <?php

                $query = "SELECT * FROM dep_faculty_profile WHERE department = 'ECE' ORDER BY id ASC";
                $result = mysqli_query($con, $query);

                $data = [];
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        // If the image is not NULL, encode it as base64 or provide a URL
                        if (!empty($row['image'])) {
                            $row['image'] = base64_encode($row['image']);
                        } else {
                            $row['image'] = null; // No image available
                        }
                        $data[] = $row;
                    }
                } else {
                    echo "Error fetching data: " . mysqli_error($con);
                }
                mysqli_close($con);
                ?>

                <div class="tab-pane fade animate__animated animate__fadeInUp " id="v-pills-faculty"
                    role="tabpanel" aria-labelledby="v-pills-faculty-tab" tabindex="0">
                    <div class="committee_head">
                        <h3>Faculty</h3>
                    </div>
                    <h5>Coming Soon</h5>
                </div>
                <div class="tab-pane fade animate__animated animate__fadeInUp " id="v-pills-profile1"
                    role="tabpanel" aria-labelledby="v-pills-profile1-tab" tabindex="0">
                    <div class="committee_head">
                        <h3>Faculty Profile</h3>
                    </div>
                    <div class="committee_table_inn">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Name of the Faculty</th>

                                        <th>Qualification</th>
                                        <th>Designation</th>

                                        <th>Photo</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php if (!empty($data)): ?>
                                        <?php $i = 10; ?>
                                        <?php foreach ($data as $row): ?>
                                            <tr>
                                                <!-- <?php echo $i++; ?> -->
                                                <td></td>
                                                <td><?php echo htmlspecialchars($row['name']); ?></td>
                                                <td><?php echo htmlspecialchars($row['qualification']); ?></td>
                                                <td><?php echo htmlspecialchars($row['designation']); ?></td>
                                                <td>
                                                    <?php if ($row['image']): ?>
                                                        <!-- If image exists (encoded as base64) -->
                                                        <img src="data:image/jpeg;base64,<?php echo $row['image']; ?>"
                                                            alt="faculty_img" width="50" class="img-fluid faculty-img-sec" style="border-radius: 50%">
                                                    <?php else: ?>
                                                        <!-- Default image if no image is available -->
                                                        <img src="https://kakatiyasolutions.in/vageshwari_clg/assets/images/department/user-img.png"
                                                            alt="faculty_img" width="50" class="img-fluid faculty-img-sec" style="border-radius: 50%">
                                                    <?php endif; ?>
                                                </td>

                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="6">No data available.</td>
                                        </tr>
                                    <?php endif; ?>
                                    <!-- <tr>
                                                            <td></td>
                                                            <td>Name</td>
                                                            
                                                            <td>Qualification</td>
                                                        
                                                            <td>Designation</td>
                                                            
                                                            <td><img src="https://kakatiyasolutions.in/vageshwari_clg/assets/images/department/user-img.png" alt="faculty_img" width="100" loading="lazy" decoding="async" class="img-fluid faculty-img-sec"></td>
                                                        </tr> -->

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade animate__animated animate__fadeInUp " id="v-pills-event"
                    role="tabpanel" aria-labelledby="v-pills-event-tab" tabindex="0">
                    <!-- <div class="committee_head">
                                <h3>Faculty Events</h3>
                            </div> -->
                    <div class="peo">


                        <div class="committee_table">
                            <div class="committee_head">
                                <h3>Faculty Events</h3>
                            </div>
                            <!-- adding new faculty events dynamically -->
                            <div class="accordion" id="student-events">
                                <?php
                                if (mysqli_num_rows($result5) > 0) {
                                    echo '<div class="accordion" id="accordionExample2">';
                                    $count = 1;
                                    while ($row = mysqli_fetch_assoc($result5)) {
                                        $title = $row['title'];
                                        $description = $row['description'];
                                        $collapseId = "collapse" . $count;
                                        $headingId = "heading" . $count;

                                        echo '
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="' . $headingId . '">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#' . $collapseId . '" aria-expanded="false" aria-controls="' . $collapseId . '">
                                                            ' . ($title) . '
                                                        </button>
                                                    </h2>
                                                    <div id="' . $collapseId . '" class="accordion-collapse collapse" aria-labelledby="' . $headingId . '" data-bs-parent="#accordionExample2">
                                                        <div class="accordion-body">
                                                        <div class="committee_table_inn">
                                                             <div class="table-responsive">
                                                            ' . ($description) . '
                                                        </div>
                                                         </div>
                                                          </div>
                                                    </div>
                                                </div>';
                                        $count++;
                                    }
                                    echo '</div>';
                                } else {
                                    echo "<p>No event details found for the selected branch.</p>";
                                }



                                ?>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="tab-pane fade animate__animated animate__fadeInUp " id="v-pills-pub" role="tabpanel"
                    aria-labelledby="v-pills-pub-tab" tabindex="0">
                    <div class="committee_head">
                        <h3>Publications</h3>
                    </div>

                    <!-- adding new faculty events dynamically -->
                    <div class="accordion" id="faculty_list">
                        <?php
                        if (mysqli_num_rows($result6) > 0) {
                            echo '<div class="accordion" id="accordionExample2">';
                            $count = 1;
                            while ($row = mysqli_fetch_assoc($result6)) {
                                $title = $row['title'];
                                $description = $row['description'];
                                $collapseId = "collapse" . $count;
                                $headingId = "heading" . $count;

                                echo '
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="' . $headingId . '">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#' . $collapseId . '" aria-expanded="false" aria-controls="' . $collapseId . '">
                                                            ' . ($title) . '
                                                        </button>
                                                    </h2>
                                                    <div id="' . $collapseId . '" class="accordion-collapse collapse" aria-labelledby="' . $headingId . '" data-bs-parent="#accordionExample2">
                                                        <div class="accordion-body">
                                                        <div class="committee_table_inn">
                                                             <div class="table-responsive">
                                                            ' . ($description) . '
                                                        </div>
                                                         </div>
                                                          </div>
                                                    </div>
                                                </div>';
                                $count++;
                            }
                            echo '</div>';
                        } else {
                            echo "<p>No event details found for the selected branch.</p>";
                        }



                        ?>
                    </div>
                </div>
                <div class="tab-pane fade animate__animated animate__fadeInUp " id="v-pills-news"
                    role="tabpanel" aria-labelledby="v-pills-news-tab" tabindex="0">
                    <div class="committee_head">
                        <h3>Newsletter</h3>
                    </div>
                    <h5>Coming Soon</h5>
                </div>
                <div class="tab-pane fade animate__animated animate__fadeInUp " id="v-pills-inno"
                    role="tabpanel" aria-labelledby="v-pills-inno-tab" tabindex="0">



                    <div class="peo">


                        <div class="committee_table">
                            <div class="committee_head">
                                <h3>Faculty Innovations</h3>
                            </div>

                            <!-- adding fcaulty innovations -->
                            <div class="accordion" id="faculty_list">
                                <?php
                                if (mysqli_num_rows($result7) > 0) {
                                    echo '<div class="accordion" id="accordionExample2">';
                                    $count = 1;
                                    while ($row = mysqli_fetch_assoc($result7)) {
                                        $title = $row['title'];
                                        $description = $row['description'];
                                        $collapseId = "collapse" . $count;
                                        $headingId = "heading" . $count;

                                        echo '
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="' . $headingId . '">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#' . $collapseId . '" aria-expanded="false" aria-controls="' . $collapseId . '">
                                                            ' . ($title) . '
                                                        </button>
                                                    </h2>
                                                    <div id="' . $collapseId . '" class="accordion-collapse collapse" aria-labelledby="' . $headingId . '" data-bs-parent="#accordionExample2">
                                                        <div class="accordion-body">
                                                        <div class="committee_table_inn">
                                                             <div class="table-responsive">
                                                            ' . ($description) . '
                                                        </div>
                                                         </div>
                                                          </div>
                                                    </div>
                                                </div>';
                                        $count++;
                                    }
                                    echo '</div>';
                                } else {
                                    echo "<p>No event details found for the selected branch.</p>";
                                }



                                ?>
                            </div>


                        </div>


                    </div>

                </div>


                <div class="tab-pane fade animate__animated animate__fadeInUp " id="v-pills-student"
                    role="tabpanel" aria-labelledby="v-pills-student-tab" tabindex="0">
                    <div class="committee_head">
                        <h3> Students</h3>
                    </div>
                    <h5>Coming Soon</h5>
                </div>
                <div class="tab-pane fade animate__animated animate__fadeInUp " id="v-pills-stu-event"
                    role="tabpanel" aria-labelledby="v-pills-stu-event-tab" tabindex="0">
                    <div class="committee_head">
                        <h3>Student Events</h3>
                    </div>

                    <!-- adding student Events -->
                    <div class="accordion" id="student-events">
                        <?php
                        if (mysqli_num_rows($result8) > 0) {
                            echo '<div class="accordion" id="accordionExample2">';
                            $count = 1;
                            while ($row = mysqli_fetch_assoc($result8)) {
                                $title = $row['title'];
                                $description = $row['description'];
                                $collapseId = "collapse" . $count;
                                $headingId = "heading" . $count;

                                echo '
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="' . $headingId . '">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#' . $collapseId . '" aria-expanded="false" aria-controls="' . $collapseId . '">
                                                            ' . ($title) . '
                                                        </button>
                                                    </h2>
                                                    <div id="' . $collapseId . '" class="accordion-collapse collapse" aria-labelledby="' . $headingId . '" data-bs-parent="#accordionExample2">
                                                        <div class="accordion-body">
                                                        <div class="committee_table_inn">
                                                             <div class="table-responsive">
                                                            ' . ($description) . '
                                                        </div>
                                                         </div>
                                                          </div>
                                                    </div>
                                                </div>';
                                $count++;
                            }
                            echo '</div>';
                        } else {
                            echo "<p>No event details found for the selected branch.</p>";
                        }



                        ?>
                    </div>
                </div>
                <div class="tab-pane fade animate__animated animate__fadeInUp " id="v-pills-res" role="tabpanel"
                    aria-labelledby="v-pills-res-tab" tabindex="0">
                    <div class="committee_head">
                        <h3>Results</h3>
                    </div>
                    <h5>Coming Soon</h5>
                </div>
                <div class="tab-pane fade animate__animated animate__fadeInUp " id="v-pills-place"
                    role="tabpanel" aria-labelledby="v-pills-place-tab" tabindex="0">
                    <div class="committee_head">
                        <h3>Placements</h3>
                    </div>
                    <!-- adding student placement -->
                    <div class="accordion" id="student-events">
                        <?php
                        if (mysqli_num_rows($result9) > 0) {
                            echo '<div class="accordion" id="accordionExample2">';
                            $count = 1;
                            while ($row = mysqli_fetch_assoc($result9)) {
                                $title = $row['title'];
                                $description = $row['description'];
                                $collapseId = "collapse" . $count;
                                $headingId = "heading" . $count;

                                echo '
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="' . $headingId . '">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#' . $collapseId . '" aria-expanded="false" aria-controls="' . $collapseId . '">
                                                            ' . ($title) . '
                                                        </button>
                                                    </h2>
                                                    <div id="' . $collapseId . '" class="accordion-collapse collapse" aria-labelledby="' . $headingId . '" data-bs-parent="#accordionExample2">
                                                        <div class="accordion-body">
                                                        <div class="committee_table_inn">
                                                             <div class="table-responsive">
                                                            ' . ($description) . '
                                                        </div>
                                                         </div>
                                                          </div>
                                                    </div>
                                                </div>';
                                $count++;
                            }
                            echo '</div>';
                        } else {
                            echo "<p>No event details found for the selected branch.</p>";
                        }



                        ?>
                    </div>


                </div>

                <div class="tab-pane fade animate__animated animate__fadeInUp " id="v-pills-hod" role="tabpanel"
                    aria-labelledby="v-pills-hod-tab" tabindex="0">
                    <div class="committee_head">
                        <h3>Contact HOD</h3>
                    </div>
                    <!-- <div class="row hod-start">
                                <div class="col-lg-4">
                                    <div class="hod-img">
                                        <img src="<?php echo $base_url; ?>/assets/images/cse/Dr_ N_Chandramouli.webp"
                                            alt="contact_hod_img" class="img-fluid" loading="lazy" decoding="async">

                                        <div class="cse-hod">
                                            <h4>Dr. N. Chandramouli</h4>
                                            <p>HOD & Professor</p>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div id="contact-info">
                                        <p>It is a great privilege for me to be part of the Vaageswari College of
                                            Engineering. Welcome all the students & their parents
                                            to the Department of Computer Science and Engineering. Department of
                                            Computer Science & Engineering commits to work towards
                                            developing Engineers with a rich blend of competent, technical, managerial
                                            and social skills and contribute to nation building.
                                            Our Department has produced hundreds of professionals and has established a
                                            name for itself in the country and abroad.
                                            To meet the objectives, department focus special emphasis on teaching and
                                            hands on practical work. The excellent infrastructure,
                                            teaching faculty of the best kind of the Department ensuring quality
                                            education such as interaction among students,
                                            parents and staff, along with a Training and Placement Cell ensures a bright
                                            future to the students. I invite you to be part of
                                            our efforts as we propel the department of Computer Science & Engineering to
                                            ever-greater heights. I congratulate to the team of
                                            faculty members and the students for their brilliant and original efforts.
                                        </p>

                                        <div class="cse-hod2">
                                            <h4>Contact</h4>

                                            <p><b>Mobile Number:</b>9849750204</p>
                                            <p><b>Email:</b>cse.hod@vgsek.ac.in</p>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                    <!-- <div class="row hod-start"> -->
                    <?php
                    // $con = mysqli_connect('srv1328.hstgr.io', 'u629694569_vcpkacin_web', 'Kakatiya@1243', 'u629694569_vcpkacin_web');
                    // if (!$con) {
                    //     die("Connection failed: " . mysqli_connect_error());
                    // }

                    // $query9 = "SELECT * FROM contact_hod WHERE department = 'CSE'";
                    // $result10 = mysqli_query($con, $query9);

                    // Assuming the database connection has already been established
                    if (mysqli_num_rows($result10) > 0) {
                        echo '<div class="accordion" id="accordionExample2">';
                        $count = 1;

                        // Loop through the fetched data
                        while ($row = mysqli_fetch_assoc($result10)) {
                            // Fetching individual data fields
                            $name = $row['name'];
                            $designation = $row['designation'];

                            // Check if image exists and process it
                            if (!empty($row['image'])) {
                                // If the image is stored as BLOB, base64_encode it
                                $imageData = base64_encode($row['image']);
                                $imageSrc = "data:image/jpeg;base64," . $imageData;
                            } else {
                                // If no image, provide a default image or null
                                $imageSrc = "path/to/default/image.jpg"; // Update with your default image path
                            }

                            $message = $row['message'];
                            $phone = $row['phone'];
                            $email = $row['email'];

                            // Dynamically create collapse IDs for each HOD section
                            $collapseId = "collapse" . $count;
                            $headingId = "heading" . $count;

                            // Output each HOD section
                            echo '
        <div class="row hod-start">
            <div class="col-lg-4">
                <div class="hod-img">
                    <!-- Dynamically set image path -->
                    <img src="' . $imageSrc . '" 
                        alt="faculty_img" class="img-fluid" loading="lazy" decoding="async" class="img-fluid faculty-img-sec">
                    <div class="cse-hod">
                        <!-- Dynamically set name and designation -->
                        <h5>' . htmlspecialchars($name) . '</h5>
                        <p>' . htmlspecialchars($designation) . '</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div id="contact-info">
                    <!-- Dynamically set message -->
                    <p>' . nl2br(htmlspecialchars($message)) . '</p>

                    <div class="cse-hod2">
                        <h4>Contact</h4>
                        <!-- Dynamically set contact info -->
                        <p><b>Mobile Number:</b> ' . htmlspecialchars($phone) . '</p>
                        <p><b>Email:</b> ' . htmlspecialchars($email) . '</p>
                    </div>
                </div>
            </div>
        </div>';

                            $count++; // Increment the count for next iteration
                        }

                        echo '</div>'; // Close the accordion div
                    } else {
                        echo "<p>No event details found for the selected branch.</p>";
                    }
                    ?>

                    <!-- </div> -->



                    <!-- dynamic Contact HOD -->
                </div>
                <div class="tab-pane fade animate__animated animate__fadeInUp " id="v-pills-co" role="tabpanel"
                    aria-labelledby="v-pills-co-tab" tabindex="0">
                    <div class="committee_head">
                        <h3>CO’s and PO’s</h3>
                    </div>
                    <h5>Coming Soon</h5>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <?php include('../footer.php') ?>


    <script>
        $(document).ready(function() {
            $('.your-slider').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                dots: true,
                arrows: true,
                responsive: [{
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                        }
                    }
                ]
            });
        });
    </script>




    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" async=""></script>
    <script>
        $('[data-fancybox="gallery"]').fancybox({

            buttons: [

                "slideShow",

                "thumbs",

                "zoom",

                "fullScreen",

                "share",

                "close"

            ],

            loop: false,

            protect: true

        });
    </script>

</body>

</html>
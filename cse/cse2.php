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
    <style>
        figure.table {
            margin: 0;
            padding: 0;
            border: none;
        }

        figure.table table {
            width: 100%;
        }

        figure.table.table-bordered.table-striped {
            border: 1px solid #ddd;
            /* Add border to the table */
            border-collapse: collapse;
            /* Collapse adjacent borders */
            background-color: #f9f9f9;
            /* Background color for striped effect */
            text-align: left;
            /* Left-align text */
            font-size: 14px;
            /* Font size for table text */
        }

        figure.table.table-bordered.table-striped th,
        figure.table.table-bordered.table-striped td {
            border: 1px solid #ddd;
            /* Cell border */
            padding: 8px;
            /* Cell padding */
        }

        figure.table.table-bordered.table-striped tr:nth-child(even) {
            background-color: #f2f2f2;
            /* Striped rows (even rows) */
        }

        figure.table.table-bordered.table-striped tr:hover {
            background-color: #ddd;
            /* Hover effect */
        }

        figure.table.table-bordered.table-striped th {
            background-color: #4CAF50;
            /* Header background color */
            color: white;
            /* Header text color */
            font-weight: bold;
            /* Bold header text */
        }

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
            height: 400px;
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
            font-size: 23px;
            font-weight: 700;
            line-height: 28px;
        }

        .cse-hod p {
            text-align: end;
            font-size: 16px;
            line-height: 28px;
            ;
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


</head>

<body>

    <?php include('../head.php') ?>

    <!-- banner section -->
    <section id="department_bnr_main">
        <div class="bnr_img">
            <img src="<?php echo $base_url; ?>assets/images/department/department_banner_bg.webp" class="img-fluid"
                alt="banner" loading="lazy" decoding="async">
        </div>

        <div class="bnr_sec_df">
            <div class="bnr_sec_tt">
                <div class="head_tit">
                    <h4>CSE</h4>
                </div>

                <div class="bnr_bredcrumb">
                    <div class="container">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Departments</a></li>
                                <li class="breadcrumb-item active" aria-current="page">CSE</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="bnr_scnd_img">
                <img src="<?php echo $base_url; ?>assets/images/department/department_banner.webp" class="img-fluid"
                    alt="banner" loading="lazy" decoding="async">
            </div>
        </div>

    </section>

    <section class="cse-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <!-- <div class="d-flex align-items-start"> -->

                    <h2 class="widget-title">CSE Department Saitheja</h2>
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
                $query = "SELECT sno, department, description, status, vision, mission,peo,po,po_pso,advisory_board, achivements, board_of_studies FROM dep_about WHERE department_name = 'CSE'";

                $result = mysqli_query($con, $query);
                $query1 = "SELECT id, branch_name, lab_name, number_of_systems, lab_details, laboratories, syllabus, timetable, academic_calendar FROM dep_btech WHERE branch_name = 'CSE'";

                $result2 = mysqli_query($con, $query1);


                $query2 = "SELECT lab_name, lab_details FROM dep_btech WHERE branch_name = 'CSE'";
                $result3 = mysqli_query($con, $query2);
                // Close the database connection
                // mysqli_close($con);
                $query3 = "SELECT id, branch_name, lab_name, number_of_systems, lab_details, laboratories, syllabus, timetable, academic_calendar FROM dep_mtech WHERE branch_name = 'CSE'";
                $result4 = mysqli_query($con, $query3);

                // mysqli_close($con);
                ?>

                <div class="col-lg-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active animate__animated animate__fadeInUp " id="v-pills-home"
                            role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                            <div class="pro-ove">

                                <section>
                                    <div class="col-lg-9">
                                        <div class="tab-content" id="v-pills-tabContent">
                                            <div class="tab-pane fade show active animate__animated animate__fadeInUp"
                                                id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"
                                                tabindex="0">
                                                <div class="pro-ove">

                                                    <section class="inner-gallery-page Department_main">

                                                        <div class="container">

                                                            <div class="title">
                                                                <h2>Department About Section</h2>
                                                            </div>

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
                                                                <p><strong>Description:</strong> <?php echo $description; ?></p>
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

                                                                if (mysqli_num_rows($result2) > 0) {
                                                                    while ($row2 = mysqli_fetch_assoc($result2)) {
                                                                        // Extract department data
                                                                        $id = $row2['id'];
                                                                        // $banner = $row2['banner'];
                                                                        $branch_name = $row2['branch_name'];
                                                                        $lab_name = $row2['lab_name'];
                                                                        $lab_details = $row2['lab_details'];
                                                                        $laboratories = $row2['laboratories'];
                                                                        $syllabus = $row2['syllabus'];
                                                                        $timetable = $row2['timetable'];
                                                                        $academic_calendar = $row2['academic_calendar'];
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
                                                        <td>2023-24</td>
                                                        
                                                        <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/pdfs/Academic_Calenders.pdf" target="_blank" rel="noopener">View</a></td>

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
                                                                ?>
                        <div class="tab-pane fade animate__animated animate__fadeInUp " id="v-pills-lab" role="tabpanel"
                            aria-labelledby="v-pills-lab-tab" tabindex="0">
                            <div class="committee_head">
                                <h3>Laboratories</h3>
                            </div>
                            <div class="committee_table_inn">
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
                            </div>

                            <div class="lab-head">
                                <h1>Lab Details</h1>
                            </div>

                            <div class="accordion" id="accordionExample2">
                                <?php
                                if (mysqli_num_rows($result3) > 0) {
                                    echo '<div class="accordion" id="accordionExample2">';
                                    $count = 1;
                                    while ($row = mysqli_fetch_assoc($result3)) {
                                        $labName = $row['lab_name'];
                                        $labDetails = $row['lab_details'];
                                        $collapseId = "collapse" . $count;
                                        $headingId = "heading" . $count;

                                        echo '
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="' . $headingId . '">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#' . $collapseId . '" aria-expanded="false" aria-controls="' . $collapseId . '">
                                                            ' . htmlspecialchars($labName) . '
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
                                            <a href="https://kakatiyasolutions.in/vageshwari_clg/assets/images/cse/cse-lab1.webp"
                                                data-fancybox="gallery" data-caption="Caption Images 1">
                                                <img src="https://kakatiyasolutions.in/vageshwari_clg/assets/images/cse/cse-lab1.webp"
                                                    alt="Image 1" class="img-fluid" loading="lazy" decoding="async"></a>
                                            <div class="overlay">
                                                <p>Cse Lab-1 </p>
                                            </div>
                                        </div>

                                        <div>
                                            <a href="https://kakatiyasolutions.in/vageshwari_clg/assets/images/cse/cse-lab2.webp"
                                                data-fancybox="gallery" data-caption="Caption Images 1">
                                                <img src="https://kakatiyasolutions.in/vageshwari_clg/assets/images/cse/cse-lab2.webp"
                                                    alt="Image 2" class="img-fluid" loading="lazy" decoding="async"></a>
                                            <div class="overlay">
                                                <p>Cse Lab-2 </p>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="https://kakatiyasolutions.in/vageshwari_clg/assets/images/cse/cse-lab3.webp"
                                                data-fancybox="gallery" data-caption="Caption Images 1">
                                                <img src="https://kakatiyasolutions.in/vageshwari_clg/assets/images/cse/cse-lab3.webp"
                                                    alt="Image 3" class="img-fluid" loading="lazy" decoding="async"></a>
                                            <div class="overlay">
                                                <p>Cse Lab-3 </p>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="https://kakatiyasolutions.in/vageshwari_clg/assets/images/cse/cse-lab1.webp"
                                                data-fancybox="gallery" data-caption="Caption Images 1">
                                                <img src="https://kakatiyasolutions.in/vageshwari_clg/assets/images/cse/cse-lab4.webp"
                                                    alt="Image 4" class="img-fluid" loading="lazy" decoding="async">
                                            </a>
                                            <div class="overlay">
                                                <p>Cse Lab-4 </p>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="https://kakatiyasolutions.in/vageshwari_clg/assets/images/cse/cse-lab5.webp"
                                                data-fancybox="gallery" data-caption="Caption Images 1">
                                                <img src="https://kakatiyasolutions.in/vageshwari_clg/assets/images/cse/cse-lab5.webp"
                                                    alt="Image 5" class="img-fluid" loading="lazy" decoding="async">
                                            </a>
                                            <div class="overlay">
                                                <p>Cse Lab-5 </p>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="https://kakatiyasolutions.in/vageshwari_clg/assets/images/cse/cse-lab6.webp"
                                                data-fancybox="gallery" data-caption="Caption Images 1">
                                                <img src="https://kakatiyasolutions.in/vageshwari_clg/assets/images/cse/cse-lab6.webp"
                                                    alt="Image 5" class="img-fluid" loading="lazy" decoding="async">
                                            </a>
                                            <div class="overlay">
                                                <p>Cse Lab-6 </p>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="https://kakatiyasolutions.in/vageshwari_clg/assets/images/cse/project-img.webp"
                                                data-fancybox="gallery" data-caption="Caption Images 1">
                                                <img src="https://kakatiyasolutions.in/vageshwari_clg/assets/images/cse/project-img.webp"
                                                    alt="Image 5" class="img-fluid" loading="lazy" decoding="async">
                                            </a>
                                            <div class="overlay">
                                                <p>Project Lab </p>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="https://kakatiyasolutions.int/vageshwari_clg/assets/images/cse/project-img2.webp"
                                                data-fancybox="gallery" data-caption="Caption Images 1">
                                                <img src="https://kakatiyasolutions.in/vageshwari_clg/assets/images/cse/project-img2.webp"
                                                    alt="Image 5" class="img-fluid" loading="lazy" decoding="async">
                                            </a>
                                            <div class="overlay">
                                                <p> Project Lab </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                        <!-- M.tech tab Details goes here -->
                        <?php
                        if (mysqli_num_rows($result4) > 0) {
                            while ($row6 = mysqli_fetch_assoc($result4)) {
                                // Extract department data
                                $mtech_id = $row6['id'];
                                // $banner = $row6['banner'];
                                $mtech_branch_name = $row6['branch_name'];
                                $mtech_lab_name = $row6['lab_name'];
                                $mtech_lab_details = $row6['lab_details'];
                                $mtech_laboratories = $row6['laboratories'];
                                $mtech_syllabus = $row6['syllabus'];
                                $mtech_timetable = $row6['timetable'];
                                $mtech_academic_calendar = $row6['academic_calendar'];
                                // $board_of_studies = $row['board_of_studies'];
                                // Encode image data for inline display
                                // $imageSrc = 'data:image/png;base64,' . base64_encode($banner);
                                ?>

                                <div class="tab-pane fade animate__animated animate__fadeInUp " id="v-pills-mtech"
                                    role="tabpanel" aria-labelledby="v-pills-mtech-tab" tabindex="0">
                                    <div class="committee_head">
                                        <h3>M.Tech Courses</h3>
                                    </div>
                                    <h5>Coming Soon</h5>

                                </div>
                                <div class="tab-pane fade animate__animated animate__fadeInUp " id="v-pills-syllabus1"
                                    role="tabpanel" aria-labelledby="v-pills-syllabus1-tab" tabindex="0">
                                    <div class="committee_head">
                                        <h3>Syllabus</h3>
                                    </div>
                                    <!-- <p> <?php echo $mtech_syllabus; ?></p> -->
                                    <!-- <h5>Coming Soon</h5> -->
                                    <!-- <div class="committee_table_inn">
                                        <div class="table-responsive">
                                        <p> <?php echo $mtech_syllabus; ?></p>
                                            
                                        </div>
                                    </div> -->
                                    <div
                                        class="<?php echo $mtech_syllabus != '<div><h4>Coming Soon</h4></div>' ? 'committee_table_inn' : ''; ?>">
                                        <div
                                            class="<?php echo $mtech_syllabus != '<div><h4>Coming Soon</h4></div>' ? 'table-responsive' : ''; ?>">
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
                                    <div
                                        class="<?php echo $mtech_timetable != '<div><h4>Coming Soon</h4></div>' ? 'committee_table_inn' : ''; ?>">
                                        <div
                                            class="<?php echo $mtech_timetable != '<div><h4>Coming Soon</h4></div>' ? 'table-responsive' : ''; ?>">
                                            <p><?php echo $mtech_timetable; ?></p>
                                        </div>
                                    </div>
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
                                    <div
                                        class="<?php echo $mtech_academic_calendar != '<div><h4>Coming Soon</h4></div>' ? 'committee_table_inn' : ''; ?>">
                                        <div
                                            class="<?php echo $mtech_academic_calendar != '<div><h4>Coming Soon</h4></div>' ? 'table-responsive' : ''; ?>">
                                            <p><?php echo $mtech_academic_calendar; ?></p>
                                        </div>
                                    </div>
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
                                    <div
                                        class="<?php echo $mtech_laboratories != '<div><h4>Coming Soon</h4></div>' ? 'committee_table_inn' : ''; ?>">
                                        <div
                                            class="<?php echo $mtech_laboratories != '<div><h4>Coming Soon</h4></div>' ? 'table-responsive' : ''; ?>">
                                            <p><?php echo $mtech_laboratories; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        } else {
                            echo "<p>No department information found.</p>";
                        }
                        $query = "SELECT * FROM dep_faculty_profile WHERE department = 'CSE' ORDER BY id ASC";
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
                                                                    alt="faculty_img" width="100" class="img-fluid faculty-img-sec" style="border-radius: 50%">
                                                            <?php else: ?>
                                                                <!-- Default image if no image is available -->
                                                                <img src="https://kakatiyasolutions.in/vageshwari_clg/assets/images/department/user-img.png"
                                                                    alt="faculty_img" width="100" class="img-fluid faculty-img-sec" style="border-radius: 50%">
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
                                    <div class="accordion" id="student-events">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapsestudentsevents" aria-expanded="true"
                                                    aria-controls="collapsestudentsevents">
                                                    Details of courses delivered by industrial experts during the
                                                    academic year 2022-23
                                                </button>
                                            </h2>
                                            <div id="collapsestudentsevents" class="accordion-collapse collapse show"
                                                data-bs-parent="#student-events">
                                                <div class="accordion-body">
                                                    <div class="committee_table">
                                                        <div class="committee_head">
                                                            <h3>Academic Year 2022-23</h3>
                                                        </div>
                                                        <div class="committee_table_inn">
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered table-striped">
                                                                    <thead>
                                                                        <tr class="tableizer-firstrow">
                                                                            <th>S. No</th>
                                                                            <th>Topic</th>
                                                                            <th>Course</th>
                                                                            <th>Date/Month/Year</th>
                                                                            <th>Resource Person with Designation</th>
                                                                            <th>Number ofstudentsattended</th>

                                                                        </tr>
                                                                    </thead>

                                                                    <tbody>

                                                                        <tr>
                                                                            <td></td>
                                                                            <td>IoT Supply Chain andM2M Supply Chain
                                                                                -Internet of Things</td>
                                                                            <td>Workshop</td>
                                                                            <td>22/08/2022</td>
                                                                            <td>Mr. B Yakub, Junior ResearchEngineer at
                                                                                Cyberaegis ITSolutions Pvt.
                                                                                Limited,Hyderabad</td>
                                                                            <td>95</td>


                                                                        </tr>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td>Prevention of DigitalAttacks –
                                                                                CyberSecurity</td>
                                                                            <td>Workshop</td>
                                                                            <td>11/08/2022</td>
                                                                            <td>Mr. B Yakub, Junior ResearchEngineer at
                                                                                Cyberaegis ITSolutions Pvt.
                                                                                Limited,Hyderabad</td>
                                                                            <td>96 </td>


                                                                        </tr>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td>Advanced ComputerNetworks</td>
                                                                            <td>GuestLecturer</td>
                                                                            <td>03/09/2022</td>
                                                                            <td>Mr. M. Aravind Kumar,
                                                                                AssistantProfessor,
                                                                                Sri Chaitanya College ofEngineering,
                                                                                Karimnagar
                                                                            </td>
                                                                            <td>97</td>


                                                                        </tr>

                                                                        <tr>
                                                                            <td></td>
                                                                            <td>Process ImprovementDiscipline</td>
                                                                            <td>GuestLecturer</td>
                                                                            <td>16/09/2022</td>
                                                                            <td>Mr. Khaja Ziauddin,
                                                                                Associate Professor,
                                                                                Sri Chaitanya College of Engineering,
                                                                                Karimnagar</td>
                                                                            <td>96</td>


                                                                        </tr>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td>Real Time OperatingSystem</td>
                                                                            <td>Workshop</td>
                                                                            <td>26/09/2022</td>
                                                                            <td>Mr. B Yakub, Junior ResearchEngineer at
                                                                                Cyberaegis ITSolutions Pvt.
                                                                                Limited,Hyderabad</td>
                                                                            <td>98</td>


                                                                        </tr>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td>Essential elements of design patterns
                                                                                andhow to solve realworld problems using
                                                                                design</td>
                                                                            <td>GuestLecture</td>
                                                                            <td>24/09/2022</td>
                                                                            <td>Mr. Raghu Nagunoori,
                                                                                Assistant Professor,
                                                                                Kamala Institute of Technologyand
                                                                                Science, Singapur,Telangana
                                                                            </td>
                                                                            <td>97</td>


                                                                        </tr>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td>Mobile SecurityThreats</td>
                                                                            <td>GuestLecture</td>
                                                                            <td>10/10/2022</td>
                                                                            <td>Mr. Oggula Raju,
                                                                                Assistant Professor,
                                                                                JNTUH College of Engineering,Jagityal
                                                                            </td>
                                                                            <td>98</td>


                                                                        </tr>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td>Keras and Tensor flowfor developing
                                                                                theApplications ofMachine Learning</td>
                                                                            <td>Workshop</td>
                                                                            <td>18/10/2022</td>
                                                                            <td>Mrs. Drava Arpitha,
                                                                                Assistant Professor,
                                                                                Sri Chaitanya College ofEngineering,
                                                                                Karimnagar
                                                                            </td>
                                                                            <td>98</td>


                                                                        </tr>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td>Data Mining UsingWeka Tool</td>
                                                                            <td>Workshop</td>
                                                                            <td>11/11/2022</td>
                                                                            <td>Mr. Bhasker Prakash,
                                                                                Assistant Professor,
                                                                                Kamala Institute of TechnologyScience,
                                                                                Singapur, Telangana
                                                                            </td>
                                                                            <td>97</td>


                                                                        </tr>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td>Software Testing Tools</td>
                                                                            <td>GuestLecturer</td>
                                                                            <td>25/11/2022</td>
                                                                            <td>Dr. P. Sammulal, Professor,JNTUH College
                                                                                of Engineering,Jagityal
                                                                            </td>
                                                                            <td>98</td>


                                                                        </tr>


                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapsestudentseventsone" aria-expanded="false"
                                                    aria-controls="collapsestudentseventsone">

                                                    Details of courses delivered by industrial experts during the
                                                    academic year 2021-22

                                                </button>
                                            </h2>
                                            <div id="collapsestudentseventsone" class="accordion-collapse collapse"
                                                data-bs-parent="#student-events">
                                                <div class="accordion-body">

                                                    <div class="committee_table">
                                                        <div class="committee_head">
                                                            <h3>Academic Year: 2021-22</h3>
                                                        </div>
                                                        <div class="committee_table_inn">
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered table-striped">
                                                                    <thead>
                                                                        <tr class="tableizer-firstrow">
                                                                            <th>S. No</th>
                                                                            <th>Topic</th>
                                                                            <th>Course</th>
                                                                            <th>Date/Month/Year</th>
                                                                            <th>Resource Person with Designation</th>
                                                                            <th>Number ofstudentsattended</th>

                                                                        </tr>
                                                                    </thead>

                                                                    <tbody>

                                                                        <tr>
                                                                            <td></td>
                                                                            <td>Cloud Computing</td>
                                                                            <td>TrainingProgram</td>
                                                                            <td>12/07/2021</td>
                                                                            <td>Dr. B. Vishnuvardhan, Sr.Professor,
                                                                                JNTUH College ofEngineering, Jagityal
                                                                            </td>
                                                                            <td>98</td>


                                                                        </tr>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td>Front EndDevelopment</td>
                                                                            <td>Workshop</td>
                                                                            <td>20/10/2021 </td>
                                                                            <td>Mr. Sanjeevaraju Akinapalli,Assistant
                                                                                Professor,
                                                                                Kamala Institute of Technologyand
                                                                                Science, Singapur,Telangana
                                                                            </td>
                                                                            <td>97</td>


                                                                        </tr>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td>Context FreeGrammar</td>
                                                                            <td>GuestLecture</td>
                                                                            <td>30/10/2021</td>
                                                                            <td>Mr. Khaja Ziauddin, AssociateProfessor,
                                                                                Sri Chaitanya College ofEngineering,
                                                                                Karimnagar
                                                                            </td>
                                                                            <td>98</td>


                                                                        </tr>

                                                                        <tr>
                                                                            <td></td>
                                                                            <td>Data Mining UsingWeka Tool</td>
                                                                            <td>Workshop</td>
                                                                            <td>08/11/2021</td>
                                                                            <td>Mr. Raghu Nagunuri, AssistantProfessor,
                                                                                Kamala institute of Technologyand
                                                                                Science, Singapur,Telangana
                                                                            </td>
                                                                            <td>97 </td>


                                                                        </tr>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td>Real TimeOperating System</td>
                                                                            <td>GuestLecture</td>
                                                                            <td>18/11/2021</td>
                                                                            <td>Mr. P. Sreenivasa Rao,Associate
                                                                                Professor,
                                                                                JNTUH College of Engineering,Jagityal
                                                                            </td>
                                                                            <td>96</td>

                                                                        </tr>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td>Introduction toDatabases and its
                                                                                Connectivity</td>
                                                                            <td>TrainingProgram</td>
                                                                            <td>22/11/2021</td>
                                                                            <td>Mr. Kamarapu Naresh,Assistant Professor,
                                                                                Sri Chaitanya College ofEngineering,
                                                                                Karimnagar

                                                                            </td>
                                                                            <td>97</td>

                                                                        </tr>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td>Introduction toArtificial Intelligence
                                                                            </td>
                                                                            <td>Workshop</td>
                                                                            <td>02/12/2021</td>
                                                                            <td>Mr. Uday Kumar,
                                                                                Associate Professor,
                                                                                Sri Chaitanya </td>
                                                                            <td>96</td>

                                                                        </tr>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td>Introduction toArtificial Intelligence
                                                                            </td>
                                                                            <td>Workshop</td>
                                                                            <td>02/12/2021</td>
                                                                            <td>Mr. Uday Kumar,
                                                                                Associate Professor,
                                                                                Sri Chaitanya College ofEngineering,
                                                                                Karimnagar </td>
                                                                            <td>96</td>

                                                                        </tr>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td>AdvancedComputation andGraphics using
                                                                                C++</td>
                                                                            <td>GuestLecture</td>
                                                                            <td>17/12/2021</td>
                                                                            <td>Mr. Pavan Kumar Jamalpur,Assistant
                                                                                Professor,
                                                                                Kamala Institute of Technologyand
                                                                                Science, SingapurTelangana
                                                                            </td>
                                                                            <td>98</td>

                                                                        </tr>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td>Mobile Security Threats</td>
                                                                            <td>Training Program</td>
                                                                            <td>01/02/2022</td>
                                                                            <td>Mr. Mr. Rachakatla Saiteja,Assistant
                                                                                Professor,Jyothishmathi Institute
                                                                                ofTechnology and Science,Karimnagar
                                                                            </td>
                                                                            <td>98</td>

                                                                        </tr>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapsestudentseventstwo" aria-expanded="false"
                                                    aria-controls="collapsestudentseventstwo">
                                                    Details of courses delivered by industrial experts during the
                                                    academic year 2020-21
                                                </button>
                                            </h2>
                                            <div id="collapsestudentseventstwo" class="accordion-collapse collapse"
                                                data-bs-parent="#student-events">
                                                <div class="accordion-body">

                                                    <div class="committee_table">
                                                        <div class="committee_head">
                                                            <h3>Academic Year: 2020-21</h3>
                                                        </div>
                                                        <div class="committee_table_inn">
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered table-striped">
                                                                    <thead>
                                                                        <tr class="tableizer-firstrow">
                                                                            <th>S. No</th>
                                                                            <th>Topic</th>
                                                                            <th>Course</th>
                                                                            <th>Date/Month/Year</th>
                                                                            <th>Resource Person with Designation</th>
                                                                            <th>Number ofstudentsattended</th>

                                                                        </tr>
                                                                    </thead>

                                                                    <tbody>

                                                                        <tr>
                                                                            <td></td>
                                                                            <td>IDEA and BLOWFISH Algorithms</td>
                                                                            <td>Guestlecture</td>
                                                                            <td>01/12/2020</td>
                                                                            <td>Dr. Sunitha Dodda,
                                                                                Associate Professor,
                                                                                Kamala Institute of Technologyand
                                                                                Science, Singapur,Telangana
                                                                            </td>
                                                                            <td>97</td>


                                                                        </tr>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td>MVC Architecture inDesign Patterns
                                                                                andDescribing DesignPatterns</td>
                                                                            <td>Guestlecture</td>
                                                                            <td>04/12/2020</td>
                                                                            <td>Mr. Khaja Ziauddin, AssociateProfessor,
                                                                                Sri Chaitanya College ofEngineering,
                                                                                Karimnagar
                                                                            </td>
                                                                            <td>96</td>


                                                                        </tr>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td>Industry LevelProblems &, How toOrganize
                                                                                Data</td>
                                                                            <td>NPTEL</td>
                                                                            <td>07/12/2020</td>
                                                                            <td>Prof. Bala Raju, IIT Madras,Chennai</td>
                                                                            <td>98</td>


                                                                        </tr>

                                                                        <tr>
                                                                            <td></td>
                                                                            <td>The Concept of Real-Time OperatingSystem
                                                                            </td>
                                                                            <td>NPTEL</td>
                                                                            <td>28/12/2020</td>
                                                                            <td>Prof Rajib Mall, IIT, Kharagpur</td>
                                                                            <td>99</td>


                                                                        </tr>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td>Cray 1, Cyber 205,Super
                                                                                ComputerArchitecture</td>
                                                                            <td>Workshop</td>
                                                                            <td>08/02/2021</td>
                                                                            <td>Mr. B Yakub, Junior ResearchEngineer at
                                                                                Cyberaegis ITSolutions Pvt.
                                                                                Limited,Hyderabad</td>
                                                                            <td>97</td>


                                                                        </tr>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td>Towers of Hanoi andRB-Tree</td>
                                                                            <td>OnlineGuestLecture</td>
                                                                            <td>19/12/2020</td>
                                                                            <td>Mr. G Srinivasulu, Retired AirForce
                                                                                Officer, Senior Consultant,ISAC,
                                                                                Hyderabad</td>
                                                                            <td>98</td>


                                                                        </tr>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td>Development ofUpcoming Engineers</td>
                                                                            <td>OnlineGuestLecture</td>
                                                                            <td>26/12/2020</td>
                                                                            <td>Mr. B Yakub, Junior ResearchEngineer at
                                                                                Cyberaegis ITSolutions Pvt.
                                                                                Limited,Hyderabad</td>
                                                                            <td>97</td>


                                                                        </tr>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td>Internet of Things</td>
                                                                            <td>NPTEL</td>
                                                                            <td>04/01/2021</td>
                                                                            <td>Prof P Sudap Misra, IIT,Kharagpur, West
                                                                                Bengal</td>
                                                                            <td>99</td>


                                                                        </tr>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td>Practical Exposure ofPython
                                                                                Programming(DatabaseConnectivity)</td>
                                                                            <td>GuestLecturer</td>
                                                                            <td>05/01/2021</td>
                                                                            <td>Dr. P. Sammulal, Professor,JNTUH College
                                                                                of Engineering ,Jagityal</td>
                                                                            <td>98</td>


                                                                        </tr>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td>Python Using DataScience</td>
                                                                            <td>GuestLecturer</td>
                                                                            <td>08/01/2021</td>
                                                                            <td>Mr. Sanjeevaraju Akinapalli,Assistant
                                                                                Professor,
                                                                                Kamala institute of technologyand
                                                                                Science, Singapur,Telangana
                                                                            </td>
                                                                            <td>97</td>


                                                                        </tr>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapsestudentseventsthree" aria-expanded="false"
                                                    aria-controls="collapsestudentseventsthree">
                                                    Events for Career Guidance of Students for the A.Y. 2022-23
                                                </button>
                                            </h2>
                                            <div id="collapsestudentseventsthree" class="accordion-collapse collapse"
                                                data-bs-parent="#student-events">
                                                <div class="accordion-body">

                                                    <div class="committee_table">
                                                        <div class="committee_head">
                                                            <h3>Academic Year 2022-2023</h3>
                                                        </div>
                                                        <div class="committee_table_inn">
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered table-striped">
                                                                    <thead>
                                                                        <tr class="tableizer-firstrow">
                                                                            <th>S. No</th>
                                                                            <th>Name of Activity</th>
                                                                            <th>Date</th>
                                                                            <th>Event detail/speaker</th>
                                                                            <th>No. of Student</th>



                                                                        </tr>
                                                                    </thead>

                                                                    <tbody>

                                                                        <tr>
                                                                            <td></td>
                                                                            <td>One day Workshop on “CyberSecurity”</td>

                                                                            <td>09-11-2022</td>
                                                                            <td>Mr. K. Vasanth Kumar</td>
                                                                            <td>99</td>


                                                                        </tr>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td>One day Workshop on“Internet of Things”.
                                                                            </td>

                                                                            <td>21-01-2023</td>
                                                                            <td>Mr. R. Srinivas</td>
                                                                            <td>118</td>


                                                                        </tr>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td>One day Workshop on “SoftComputing
                                                                                Application inPower System”</td>

                                                                            <td>02-12-2022</td>
                                                                            <td>Mr. Kedam Ramesh</td>
                                                                            <td>31</td>


                                                                        </tr>

                                                                        <tr>
                                                                            <td></td>
                                                                            <td>Campus Recruitment Training</td>

                                                                            <td>13-02-2023
                                                                                to
                                                                                28-02-2023
                                                                            </td>
                                                                            <td>Mr. Lakshmannath A</td>
                                                                            <td>446</td>


                                                                        </tr>


                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapsestudentseventsfour" aria-expanded="false"
                                                    aria-controls="collapsestudentseventsfour">
                                                    Events for Career Guidance of Students for the A.Y. 2021-22
                                                </button>
                                            </h2>
                                            <div id="collapsestudentseventsfour" class="accordion-collapse collapse"
                                                data-bs-parent="#student-events">
                                                <div class="accordion-body">

                                                    <div class="committee_table">
                                                        <div class="committee_head">
                                                            <h3>Academic Year 2021-2022</h3>
                                                        </div>
                                                        <div class="committee_table_inn">
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered table-striped">
                                                                    <thead>
                                                                        <tr class="tableizer-firstrow">
                                                                            <th>S. No</th>
                                                                            <th>Name of Activity</th>
                                                                            <th>Date</th>
                                                                            <th>Event detail/speaker</th>
                                                                            <th>No. of Student</th>



                                                                        </tr>
                                                                    </thead>

                                                                    <tbody>

                                                                        <tr>
                                                                            <td></td>
                                                                            <td>One-day Workshop on“Python” </td>

                                                                            <td>24-11-2021 </td>
                                                                            <td>Mr. K. Sridhar Reddy </td>
                                                                            <td>100</td>


                                                                        </tr>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td>One-day Workshop on“Operation and
                                                                                Maintenanceof Power System</td>

                                                                            <td>23-11-2021 </td>
                                                                            <td>Mr. J. Raju </td>
                                                                            <td>32</td>


                                                                        </tr>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td>One-day Workshop on “Roleof MATLAB in
                                                                                ImageProcessing” </td>

                                                                            <td>26-11-2021 </td>
                                                                            <td>Dr. U. Rajendar </td>
                                                                            <td>117</td>


                                                                        </tr>

                                                                        <tr>
                                                                            <td></td>
                                                                            <td>One-day
                                                                                Workshop on “Language andCommunication
                                                                                skills- Englishfor Career Development”
                                                                            </td>

                                                                            <td>27-11-2021
                                                                            </td>
                                                                            <td>Mr. Madhu Kumar </td>
                                                                            <td>287</td>


                                                                        </tr>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td>Campus Recruitment Training
                                                                            </td>

                                                                            <td>08-02-2022
                                                                                to
                                                                                28-02-2022

                                                                            </td>
                                                                            <td>Mr. Lakshmannath A </td>
                                                                            <td>453</td>


                                                                        </tr>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td>GRE/TOFEL AwarenessProgram
                                                                            </td>

                                                                            <td>04-03-2022

                                                                            </td>
                                                                            <td>Mr. S. Sateesh Reddy </td>
                                                                            <td>258</td>


                                                                        </tr>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td>GATE Awareness Program
                                                                            </td>

                                                                            <td>23-03-2022

                                                                            </td>
                                                                            <td>Dr. Surendhar </td>
                                                                            <td>412</td>


                                                                        </tr>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td>One-day Workshop on“Mechatronics”
                                                                            </td>

                                                                            <td>09-11-2021

                                                                            </td>
                                                                            <td>Mr. N. Srinivas</td>
                                                                            <td>48</td>


                                                                        </tr>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td>One-day Workshop on“Application of GIS”
                                                                            </td>

                                                                            <td>11-11-2021

                                                                            </td>
                                                                            <td>Mr. K. Rajesh</td>
                                                                            <td>48</td>


                                                                        </tr>



                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>



                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapsestudentseventsfive" aria-expanded="false"
                                                    aria-controls="collapsestudentseventsfive">

                                                    Events for Career Guidance of Students for the A.Y. 2020-21

                                                </button>
                                            </h2>
                                            <div id="collapsestudentseventsfive" class="accordion-collapse collapse"
                                                data-bs-parent="#student-events">
                                                <div class="accordion-body">

                                                    <div class="committee_table">
                                                        <div class="committee_head">
                                                            <h3>Academic Year 2020-2021</h3>
                                                        </div>
                                                        <div class="committee_table_inn">
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered table-striped">
                                                                    <thead>
                                                                        <tr class="tableizer-firstrow">
                                                                            <th>S. No</th>
                                                                            <th>Name of Activity</th>
                                                                            <th>Date</th>
                                                                            <th>Event detail/speaker</th>
                                                                            <th>No. of Student</th>



                                                                        </tr>
                                                                    </thead>

                                                                    <tbody>

                                                                        <tr>
                                                                            <td></td>
                                                                            <td>Personality skill development</td>

                                                                            <td>07-02-2021</td>
                                                                            <td>MR. K. Pradeep Kumar</td>
                                                                            <td>504</td>


                                                                        </tr>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td>Campus recruitment training</td>

                                                                            <td>15-02-2021
                                                                                to
                                                                                22-02-2021
                                                                            </td>
                                                                            <td>Mr. Lakshmannath A</td>
                                                                            <td>649</td>


                                                                        </tr>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td>GRE/TOFEL Awarenessprogram</td>

                                                                            <td>18-03-2021</td>
                                                                            <td>A. Srinivas</td>
                                                                            <td>215</td>


                                                                        </tr>

                                                                        <tr>
                                                                            <td></td>
                                                                            <td>GATE Awareness program</td>

                                                                            <td>05-02-2021
                                                                            </td>
                                                                            <td>Dr. Dinesh Kumar</td>
                                                                            <td>230</td>


                                                                        </tr>


                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                            </div>
                        </div>
                        <div class="tab-pane fade animate__animated animate__fadeInUp " id="v-pills-pub" role="tabpanel"
                            aria-labelledby="v-pills-pub-tab" tabindex="0">
                            <div class="committee_head">
                                <h3>Publications</h3>
                            </div>

                            <div class="accordion" id="faculty_list">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapsefacultypublication" aria-expanded="true"
                                            aria-controls="collapsefacultypublication">
                                            Academic Year 2022-23
                                        </button>
                                    </h2>
                                    <div id="collapsefacultypublication" class="accordion-collapse collapse show"
                                        data-bs-parent="#faculty_list">
                                        <div class="accordion-body">
                                            <div class="committee_table">
                                                <div class="committee_head">
                                                    <h3>Academic Year 2022-23</h3>
                                                </div>
                                                <div class="committee_table_inn">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered table-striped">
                                                            <thead>
                                                                <tr class="tableizer-firstrow">
                                                                    <th>Sl. No.</th>
                                                                    <th>Title of paper</th>
                                                                    <th>Name of the author/s</th>
                                                                    <th>Name of journal</th>
                                                                    <th>Year of publication</th>
                                                                    <th>ISSN Number</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Social Media analysis with Active Online
                                                                        Learning to Support Crisis Management</td>
                                                                    <td>Dr. N. Chandra Mouli</td>
                                                                    <td>The International Journal of Analytical and
                                                                        Experimental Modal analysis</td>
                                                                    <td>2023</td>
                                                                    <td>0886-9367</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Biometric-Based Secure Access Mechanism for
                                                                        Cloud Services</td>
                                                                    <td>Dr. N. Chandra Mouli</td>
                                                                    <td>Journal of Engineering Sciences</td>
                                                                    <td>2023</td>
                                                                    <td>0377-9254</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Protection for Your Purchase Preferences with
                                                                        Differential Privacy</td>
                                                                    <td>Dr. G. S. Chowhan</td>
                                                                    <td>Journal of Science and Technology</td>
                                                                    <td>2023</td>
                                                                    <td>2456-5660</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Diabetes Prediction Using Machine Learning
                                                                        Algorithms</td>
                                                                    <td>Mr. Md. Sirajuddin</td>
                                                                    <td>The International Journal of Analytical and
                                                                        Experimental Modal analysis</td>
                                                                    <td>2023</td>
                                                                    <td>0886-9367</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Enabling Identity Based Integrity Auditing and
                                                                        Data Sharing with Sensitive Information Hiding
                                                                        for Secure Cloud Storage</td>
                                                                    <td>Dr. E. Srikanth Reddy</td>
                                                                    <td>The International Journal of Analytical and
                                                                        Experimental Modal analysis</td>
                                                                    <td>2023</td>
                                                                    <td>0886-9367</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Movie Recommendation system Using Sentiment
                                                                        Analysis from Microblogging Data</td>
                                                                    <td>Dr. Dinesh Kumar</td>
                                                                    <td>The International Journal of Analytical and
                                                                        Experimental Modal analysis</td>
                                                                    <td>2023</td>
                                                                    <td>0886-9367</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Secure Keyword Search and Data Sharing Mechanism
                                                                        for Cloud</td>
                                                                    <td>Mr. K. Sridhar Reddy</td>
                                                                    <td>The International Journal of Analytical and
                                                                        Experimental Modal analysis</td>
                                                                    <td>2023</td>
                                                                    <td>0886-9367</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Trust-Based Photo Sharing in Online Social
                                                                        Networks with Privacy Preserving</td>
                                                                    <td>Mr. S. Satish Reddy</td>
                                                                    <td>The International Journal of Analytical and
                                                                        Experimental Modal analysis</td>
                                                                    <td>2023</td>
                                                                    <td>0886-9367</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>A Three-Layer Privacy Preserving Cloud Storage
                                                                        Scheme Based on Computational Intelligence in
                                                                        Fog Computing</td>
                                                                    <td>Dr. G.S. Chowhan</td>
                                                                    <td>RB Journal of Lib & Information Science</td>
                                                                    <td>2023</td>
                                                                    <td>0972-2750</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Machine Learning Algorithms For Predicting
                                                                        Criminal Activity Nature And Frequency</td>
                                                                    <td>Mrs. Y. Susheela</td>
                                                                    <td>Industrial Engineering Journal</td>
                                                                    <td>2023</td>
                                                                    <td>0970-2555</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>An Efficient Pricing Scheme For Data Markets In
                                                                        Real Time Environment</td>
                                                                    <td>Dr. E. Srikanth Reddy</td>
                                                                    <td>Juni Khyat</td>
                                                                    <td>2023</td>
                                                                    <td>2278-4632</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>An Efficient Pricing Scheme For Data Markets In
                                                                        Real Time Environment</td>
                                                                    <td>Dr. N. Chandra Mouli</td>
                                                                    <td>Juni Khyat</td>
                                                                    <td>2023</td>
                                                                    <td>2278-4632</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Assessment of the Online ADMM-BASED Extreme
                                                                        Learning Machines Utilization for Partial
                                                                        Supervised Learning</td>
                                                                    <td>Dr. Gulab Singh</td>
                                                                    <td>Journal of Nonlinear Analysis and Optimization
                                                                    </td>
                                                                    <td>Jun-23</td>
                                                                    <td>1906-9685</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Assessment of the Online ADMM-BASED Extreme
                                                                        Learning Machines Utilization for Partial
                                                                        Supervised Learning</td>
                                                                    <td> Dr. N. Chandra Mouli</td>
                                                                    <td>Journal of Nonlinear Analysis and Optimization
                                                                    </td>
                                                                    <td>Jun-23</td>
                                                                    <td>1906-9685</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>E-Commerce Assessment Prediction Based On
                                                                        Sentiment Analysis Of Users And User Trust</td>
                                                                    <td>Dr. E. Srikanth Reddy</td>
                                                                    <td>Journal of Nonlinear Analysis and Optimization
                                                                    </td>
                                                                    <td>Jun-23</td>
                                                                    <td>1906-9685</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>The CNN employed in the elimination of
                                                                        background was cleaned using an innovative image
                                                                        proposal method.</td>
                                                                    <td>T. Ravi Kumar </td>
                                                                    <td>Mukt Shabd Journal</td>
                                                                    <td>2022-2023</td>
                                                                    <td>2347-3150</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Wireless Intrusion Detection system</td>
                                                                    <td>Dr. D. Srinivas Reddy</td>
                                                                    <td>The International Journal of Analytical and
                                                                        Experimental Modal analysis</td>
                                                                    <td>2022-2023</td>
                                                                    <td>0886-9367</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Assessment of the Online ADMM-BASED Extreme
                                                                        Learning Machines Utilization for Partial
                                                                        Supervised Learning</td>
                                                                    <td>Dr. D. Srinivas Reddy</td>
                                                                    <td>Journal of Nonlinear Analysis and Optimization
                                                                    </td>
                                                                    <td>2022-2023</td>
                                                                    <td>1906-9685</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Examination of the Block Chain for Secured EHR
                                                                        Sharing in Mobile Cloud-Based E-Health Systems
                                                                    </td>
                                                                    <td>Y. Susheela </td>
                                                                    <td>Mukt Shabd Journal</td>
                                                                    <td>2022-2023</td>
                                                                    <td>2347-3150</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>E-Commerce Assessment Prediction Based On
                                                                        Sentiment Analysis Of Users And User Trust</td>
                                                                    <td>Dr.D.Srinivas Reddy </td>
                                                                    <td>Journal of Nonlinear Analysis and Optimization
                                                                    </td>
                                                                    <td>2022-2023</td>
                                                                    <td>1906-9685</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Examination of the Block Chain for Secured EHR
                                                                        Sharing in Mobile Cloud-Based E-Health Systems
                                                                    </td>
                                                                    <td>T. Ravi Kumar</td>
                                                                    <td>Mukt Shabd Journal</td>
                                                                    <td>2022-2023</td>
                                                                    <td>2347-3150</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Examination and Determination of Customers
                                                                        Churns Using Data Mining Models in the Banking
                                                                        Industry</td>
                                                                    <td>Y. Susheela </td>
                                                                    <td>Mukt Shabd Journal</td>
                                                                    <td>2022-2023</td>
                                                                    <td>2347-3150</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Examination and Determination of Customers
                                                                        Churns Using Data Mining Models in the Banking
                                                                        Industry</td>
                                                                    <td>R. Sagar </td>
                                                                    <td>Mukt Shabd Journal</td>
                                                                    <td>2022-2023</td>
                                                                    <td>2347-3150</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Analysis on Identification and Categorization of
                                                                        Happ Systems for Smart Home Uses on Personal
                                                                        Activities</td>
                                                                    <td>A. Mahendar </td>
                                                                    <td>Mukt Shabd Journal</td>
                                                                    <td>2022-2023</td>
                                                                    <td>2347-3150</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Analysis on Identification and Categorization of
                                                                        Happ Systems for Smart Home Uses on Personal
                                                                        Activities</td>
                                                                    <td>E. Kiran Kumar</td>
                                                                    <td>Mukt Shabd Journal</td>
                                                                    <td>2022-2023</td>
                                                                    <td>2347-3150</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Analysis on Identification and Categorization of
                                                                        Happ Systems for Smart Home Uses on Personal
                                                                        Activities</td>
                                                                    <td>A.Kalpana</td>
                                                                    <td>Mukt Shabd Journal</td>
                                                                    <td>2022-2023</td>
                                                                    <td>2347-3150</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>A Significant Reduction of Counting Based Bloom
                                                                        Filtering for Secure Data Transfer in Cloud
                                                                        Computing</td>
                                                                    <td>S.Sateesh Reddy </td>
                                                                    <td>Industrial Engineering Journal</td>
                                                                    <td>2022-2023</td>
                                                                    <td> 0970-2555</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>A Significant Reduction of Counting Based Bloom
                                                                        Filtering for Secure Data Transfer in Cloud
                                                                        Computing</td>
                                                                    <td>Dr. Gulab Singh </td>
                                                                    <td>Industrial Engineering Journal</td>
                                                                    <td>2022-2023</td>
                                                                    <td> 0970-2555</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>A Significant Reduction of Counting Based Bloom
                                                                        Filtering for Secure Data Transfer in Cloud
                                                                        Computing</td>
                                                                    <td>K.Sridhar</td>
                                                                    <td>Industrial Engineering Journal</td>
                                                                    <td>2022-2023</td>
                                                                    <td> 0970-2555</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Data Security Control and Ground Performance in
                                                                        the Industrial IOT Platform by Employing a Safe
                                                                        and Fine Grained Systems</td>
                                                                    <td>Md.Sirajuddin</td>
                                                                    <td>Industrial Engineering Journal</td>
                                                                    <td>2022-2023</td>
                                                                    <td> 0970-2555</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Data Security Control and Ground Performance in
                                                                        the Industrial IOT Platform by Employing a Safe
                                                                        and Fine Grained Systems</td>
                                                                    <td>S.Sateesh Reddy</td>
                                                                    <td>Industrial Engineering Journal</td>
                                                                    <td>2022-2023</td>
                                                                    <td> 0970-2555</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>An Examination-Based Data Sharing Technique and
                                                                        Encryption-Based Secured Keyword Search for
                                                                        Cloud Computing Using CPAB-KSDS</td>
                                                                    <td>Dr.D.Srinivas Reddy </td>
                                                                    <td>Journal of Nonlinear Analysis and Optimization
                                                                    </td>
                                                                    <td>2022-2023</td>
                                                                    <td>1906-9685</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Approaches for Detecting Spammers and
                                                                        Identifying Fake Users on Social Networks that
                                                                        Rely on Random Forests and Naive Bays</td>
                                                                    <td>K.Sridhar</td>
                                                                    <td>Industrial Engineering Journal</td>
                                                                    <td>2022-2023</td>
                                                                    <td> 0970-2555</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Approaches for Detecting Spammers and
                                                                        Identifying Fake Users on Social Networks that
                                                                        Rely on Random Forests and Naive Bays</td>
                                                                    <td>T. Ravi Kumar</td>
                                                                    <td>Industrial Engineering Journal</td>
                                                                    <td>2022-2023</td>
                                                                    <td> 0970-2555</td>
                                                                </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapsefacultypublicationone"
                                            aria-expanded="false" aria-controls="collapsefacultypublicationone">
                                            Academic Year 2021-22
                                        </button>
                                    </h2>
                                    <div id="collapsefacultypublicationone" class="accordion-collapse collapse"
                                        data-bs-parent="#faculty_list">
                                        <div class="accordion-body">

                                            <div class="committee_table">
                                                <div class="committee_head">
                                                    <h3>Academic Year 2021-22</h3>
                                                </div>
                                                <div class="committee_table_inn">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered table-striped">
                                                            <thead>
                                                                <tr class="tableizer-firstrow">
                                                                    <th>Sl. No.</th>
                                                                    <th>Title of paper</th>
                                                                    <th>Name of the author/s</th>
                                                                    <th>Name of journal</th>
                                                                    <th>Year of publication</th>
                                                                    <th>ISSN Number</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Automate Multimedia Cloud Computing: A Computing
                                                                        Structure for Efficient Resource Allocation
                                                                        Based on Dynamic Priority</td>
                                                                    <td>A.Mahendar</td>
                                                                    <td>Science, Technology and Development</td>
                                                                    <td>2021-2022</td>
                                                                    <td>0950-0707</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>A Study on Employing the Adaptable Voting
                                                                        Classifier Combined Technique for Pre-Diagnosis
                                                                        of Breast Cancer</td>
                                                                    <td> K.Sridhar </td>
                                                                    <td>Industrial Engineering Journal</td>
                                                                    <td>2021-2022</td>
                                                                    <td> 0970-2555</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>A Study on Employing the Adaptable Voting
                                                                        Classifier Combined Technique for Pre-Diagnosis
                                                                        of Breast Cancer</td>
                                                                    <td>T. Ravi Kumar</td>
                                                                    <td>Industrial Engineering Journal</td>
                                                                    <td>2021-2022</td>
                                                                    <td> 0970-2555</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>A Data Sharing Protocol To Minimize Security And
                                                                        Privacy Risks Of Cloud Storage In Big Data Era
                                                                        2750 RB Journal of Lib & Information Sc</td>
                                                                    <td>Dr. D. Srinivas Reddy</td>
                                                                    <td>RB Journal of Lib & Information Science</td>
                                                                    <td>2021-2022</td>
                                                                    <td>0972-2750</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>An Accurate Designing and Developing Of
                                                                        Anti-Malware Systems To Ensure The Identified
                                                                        Threat Using LSTM</td>
                                                                    <td>Dr. D. Srinivas Reddy</td>
                                                                    <td>Journal of Nonlinear Analysis and Optimization
                                                                    </td>
                                                                    <td>2021-2022</td>
                                                                    <td>1906-9685</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Excellent Protection from Network Assaults on
                                                                        Effective Development of Organization Safety
                                                                        Concerns</td>
                                                                    <td>Dr. D. Srinivas Reddy</td>
                                                                    <td>Journal of Nonlinear Analysis and Optimization
                                                                    </td>
                                                                    <td>2021-2022</td>
                                                                    <td>1906-9685</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>A Dissertation to Improve Cloud Environment
                                                                        Safety by Utilizing Key Sharing and Two-Factor
                                                                        Authentication Mechanisms</td>
                                                                    <td>Dr. D. Srinivas Reddy</td>
                                                                    <td>Journal of Nonlinear Analysis and Optimization
                                                                    </td>
                                                                    <td>2021-2022</td>
                                                                    <td>1906-9685</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>A Deep Learning Model for Average Fuel Usage in
                                                                        Large Vehicles</td>
                                                                    <td>Dr. N. Chandra mouli</td>
                                                                    <td>International Journal of Research Publication
                                                                        and Reviews</td>
                                                                    <td>2021-2022</td>
                                                                    <td>2582-7421</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>An Accurate Designing and Developing Of
                                                                        Anti-Malware Systems To Ensure The Identified
                                                                        Threat Using LSTM</td>
                                                                    <td>Dr. N. Chandra mouli</td>
                                                                    <td>Journal of Nonlinear Analysis and Optimization
                                                                    </td>
                                                                    <td>2021-2022</td>
                                                                    <td>1906-9685</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Excellent Protection from Network Assaults on
                                                                        Effective Development of Organization Safety
                                                                        Concerns</td>
                                                                    <td>Dr. N. Chandra mouli</td>
                                                                    <td>Journal of Nonlinear Analysis and Optimization
                                                                    </td>
                                                                    <td>2021-2022</td>
                                                                    <td>1906-9685</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>A Dissertation to Improve Cloud Environment
                                                                        Safety by Utilizing Key Sharing and Two-Factor
                                                                        Authentication Mechanisms</td>
                                                                    <td>Dr. N. Chandra mouli</td>
                                                                    <td>Journal of Nonlinear Analysis and Optimization
                                                                    </td>
                                                                    <td>2021-2022</td>
                                                                    <td>1906-9685</td>
                                                                </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapsefaculty_publication_two"
                                            aria-expanded="false" aria-controls="collapsefaculty_publication_two">
                                            Academic Year 2020-21
                                        </button>
                                    </h2>
                                    <div id="collapsefaculty_publication_two" class="accordion-collapse collapse"
                                        data-bs-parent="#faculty_list">
                                        <div class="accordion-body">

                                            <div class="committee_table">
                                                <div class="committee_head">
                                                    <h3>Academic Year 2020-21</h3>
                                                </div>
                                                <div class="committee_table_inn">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered table-striped">
                                                            <thead>
                                                                <tr class="tableizer-firstrow">
                                                                    <th>Sl. No.</th>
                                                                    <th>Title of paper</th>
                                                                    <th>Name of the author/s</th>
                                                                    <th>Name of journal</th>
                                                                    <th>Year of publication</th>
                                                                    <th>ISSN Number</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>Enhancing The Privacy For Message Authentication
                                                                        Using Cryptographic Methods In Internet Of
                                                                        Things</td>
                                                                    <td>Dr. N. Chandra Mouli</td>
                                                                    <td>Design Engineering</td>
                                                                    <td>2020 - 21</td>
                                                                    <td>0011-9342</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Review of Dynamic Resource Distribution for
                                                                        Profit Maimization in Cloud Computing</td>
                                                                    <td>Dr. N. Chandra Mouli</td>
                                                                    <td>Journal of Critical Review</td>
                                                                    <td>2020 - 21</td>
                                                                    <td>2394-5125</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Consuming Big Data for Reporting Heavy Users in
                                                                        Top Video Apps</td>
                                                                    <td>Dr. N. Chandra Mouli</td>
                                                                    <td>Mukt Shabd Journal</td>
                                                                    <td>2020 - 21</td>
                                                                    <td>2347-3150</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Enhancing The Privacy For Message Authentication
                                                                        Using Cryptographic Methods In Internet of
                                                                        Things</td>
                                                                    <td>Dr. Gulab Singh Chowhan</td>
                                                                    <td>Design Engineering</td>
                                                                    <td>2020 - 21</td>
                                                                    <td>8302-8317</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Cloud Based Mechine Learning with Advanced
                                                                        Predictive Analytics Using Google Colaboratory
                                                                    </td>
                                                                    <td>Mr. T. Ravi Kumar</td>
                                                                    <td>Materials Today: Proceedings, Elsevier
                                                                        Publisher,</td>
                                                                    <td>2020 - 21</td>
                                                                    <td>2214-7853</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Enhancing The Privacy For Message Authentication
                                                                        Using Cryptographic Methods In Internet Of
                                                                        Things</td>
                                                                    <td>Dr. N. Chandra Mouli</td>
                                                                    <td>Design Engineering</td>
                                                                    <td>2020 - 21</td>
                                                                    <td>0011-9342</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Review of Dynamic Resource Distribution for
                                                                        Profit Maimization in Cloud Computing</td>
                                                                    <td>Dr. N. Chandra Mouli</td>
                                                                    <td>Journal of Critical Review</td>
                                                                    <td>2020 - 21</td>
                                                                    <td>2394-5125</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Consuming Big Data for Reporting Heavy Users in
                                                                        Top Video Apps</td>
                                                                    <td>Dr. N. Chandra Mouli</td>
                                                                    <td>Mukt Shabd Journal</td>
                                                                    <td>2020 - 21</td>
                                                                    <td>2347-3150</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Using Machine Learning Models to Predict Growth
                                                                        of Plant and Output in Greenhouse Environments
                                                                    </td>
                                                                    <td>Dr. G. S. Chauhan</td>
                                                                    <td>International Journal of Research Publication
                                                                        and Reviews</td>
                                                                    <td>2021-2022</td>
                                                                    <td>2582-7421</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Analysis of the Efficiency of Machine Learning
                                                                        Methods for Disease Prediction</td>
                                                                    <td>Dr. G. S. Chauhan</td>
                                                                    <td>International Journal of Research Publication
                                                                        and Reviews</td>
                                                                    <td>2021-2022</td>
                                                                    <td>2582-7421</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Using Machine Learning Models to Predict Growth
                                                                        of Plant and Output in Greenhouse Environments
                                                                    </td>
                                                                    <td>Dr. G. S. Chauhan</td>
                                                                    <td>International Journal of Research Publication
                                                                        and Reviews</td>
                                                                    <td>2021-2022</td>
                                                                    <td>2582-7421</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>An Accurate Designing and Developing Of
                                                                        Anti-Malware Systems To Ensure The Identified
                                                                        Threat Using LSTM</td>
                                                                    <td>Dr. Gulab Singh</td>
                                                                    <td>Journal of Nonlinear Analysis and Optimization
                                                                    </td>
                                                                    <td>2021-2022</td>
                                                                    <td>1906-9685</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>An Assessment on the Effectiveness and Precision
                                                                        of Many Machine Learning Techniques for the
                                                                        Naive Bayes Algorithm-Based Picture
                                                                        Classification</td>
                                                                    <td>Dr. Gulab Singh,</td>
                                                                    <td>Journal of Nonlinear Analysis and Optimization
                                                                    </td>
                                                                    <td>2021-2022</td>
                                                                    <td>1906-9685</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>A Evaluation of Machine Learning for Predicting
                                                                        the Risk for Acquiring a Chronic Disease System
                                                                    </td>
                                                                    <td>Dr. Gulab Singh</td>
                                                                    <td>Industrial Engineering Journal</td>
                                                                    <td>2021-2022</td>
                                                                    <td> 0970-2555</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>An Efficient Spam Detection Technique ForIot
                                                                        Devices Using Machine Learning</td>
                                                                    <td>MD. Sirajuddin</td>
                                                                    <td>RB Journal of Lib & Information Science</td>
                                                                    <td>2021-2022</td>
                                                                    <td>0972-2750</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>An Efficient and Effective Access Control Method
                                                                        for Mobile Cloud Computing Using MHABE Fine
                                                                        Grained Graining</td>
                                                                    <td>Md.Sirajuddin</td>
                                                                    <td>Industrial Engineering Journal</td>
                                                                    <td>2021-2022</td>
                                                                    <td> 0970-2555</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>A Unique Technique using Neural Network
                                                                        Approaches for the Detection and Recognition of
                                                                        Diabetic Retinopathy</td>
                                                                    <td>Md.Sirajuddin</td>
                                                                    <td>Industrial Engineering Journal</td>
                                                                    <td>2021-2022</td>
                                                                    <td> 0970-2555</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>IP-Mod: Secure Privilege-Based Multilevel
                                                                        Organizational Data-Sharing In Cloud Computing
                                                                    </td>
                                                                    <td>Dr. E. Srikanth Reddy</td>
                                                                    <td>RB Journal of Lib & Information Science</td>
                                                                    <td>2021-2022</td>
                                                                    <td>0972-2750</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Intelligent IOT Services Based on Artificial and
                                                                        Machine Learning Technology</td>
                                                                    <td>Dr. E. Srikanth Reddy</td>
                                                                    <td>Neuro Quantology</td>
                                                                    <td>2021-2022</td>
                                                                    <td>1303-5150</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>IOT Based Indoor And Outdoor Air Pollution
                                                                        Monitoring System Using Raspberry PI</td>
                                                                    <td>Dr. E. Srikanth Reddy</td>
                                                                    <td>Journal Of Pharmaceutical Negative Results</td>
                                                                    <td>2021-2022</td>
                                                                    <td> 4633-4643</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Excellent Protection from Network Assaults on
                                                                        Effective Development of Organization Safety
                                                                        Concerns</td>
                                                                    <td>Dr.Srikanth Reddy E</td>
                                                                    <td>Journal of Nonlinear Analysis and Optimization
                                                                    </td>
                                                                    <td>2021-2022</td>
                                                                    <td>1906-9685</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>A Dissertation to Improve Cloud Environment
                                                                        Safety by Utilizing Key Sharing and Two-Factor
                                                                        Authentication Mechanisms</td>
                                                                    <td>Dr.Srikanth Reddy E</td>
                                                                    <td>Journal of Nonlinear Analysis and Optimization
                                                                    </td>
                                                                    <td>2021-2022</td>
                                                                    <td>1906-9685</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>An Assessment on the Effectiveness and Precision
                                                                        of Many Machine Learning Techniques for the
                                                                        Naive Bayes Algorithm-Based Picture
                                                                        Classification</td>
                                                                    <td>Dr.Srikanth Reddy E</td>
                                                                    <td>Journal of Nonlinear Analysis and Optimization
                                                                    </td>
                                                                    <td>2021-2022</td>
                                                                    <td>1906-9685</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Ad Sherlock Efficient Deployable Click Fraud
                                                                        Detection for Mobile Applications</td>
                                                                    <td>Dr. Dinesh Kumar</td>
                                                                    <td>International Journal of Research Publication
                                                                        and Reviews</td>
                                                                    <td>2021-2022</td>
                                                                    <td>2582-7421</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>E-Agri Kit: Agricultural Aid Using Deep Learning
                                                                    </td>
                                                                    <td>Dr. Dinesh Kumar</td>
                                                                    <td>International Journal of Science, Engineering
                                                                        and Technology</td>
                                                                    <td>2021-2022</td>
                                                                    <td>2348-4098</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Scalable And Secure Big Data Iot System Based On
                                                                        Multifactor Authentication And Lightweight
                                                                        Cryptography</td>
                                                                    <td>Mr K.Srdhar Reddy</td>
                                                                    <td>RB Journal of Lib & Information Science</td>
                                                                    <td>2021-2022</td>
                                                                    <td>0972-2750</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>A Evaluation of Machine Learning for Predicting
                                                                        the Risk for Acquiring a Chronic Disease System
                                                                    </td>
                                                                    <td>K.Sridhar</td>
                                                                    <td>Industrial Engineering Journal</td>
                                                                    <td>2021-2022</td>
                                                                    <td> 0970-2555</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>The Assessment of Fuzzy Support Early Diabetes
                                                                        Prediction using Vector Regression Method</td>
                                                                    <td>K.Sridhar</td>
                                                                    <td>Industrial Engineering Journal</td>
                                                                    <td>2021-2022</td>
                                                                    <td> 0970-2555</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>A Unique Technique using Neural Network
                                                                        Approaches for the Detection and Recognition of
                                                                        Diabetic Retinopathy</td>
                                                                    <td>K.Sridhar</td>
                                                                    <td>Industrial Engineering Journal</td>
                                                                    <td>2021-2022</td>
                                                                    <td> 0970-2555</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Secure Data Transfer And Deletion Using Counter
                                                                        Blooming Filter By Cloud Computing</td>
                                                                    <td>S Sateesh Reddy</td>
                                                                    <td>RB Journal of Lib & Information Science</td>
                                                                    <td>2022</td>
                                                                    <td>0972-2750</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>An Assessment on the Effectiveness and Precision
                                                                        of Many Machine Learning Techniques for the
                                                                        Naive Bayes Algorithm-Based Picture
                                                                        Classification</td>
                                                                    <td>S.Sateesh Reddy</td>
                                                                    <td>Journal of Nonlinear Analysis and Optimization
                                                                    </td>
                                                                    <td>2022</td>
                                                                    <td>1906-9685</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>A Evaluation of Machine Learning for Predicting
                                                                        the Risk for Acquiring a Chronic Disease System
                                                                    </td>
                                                                    <td>S.Sateesh Reddy,</td>
                                                                    <td>Industrial Engineering Journal</td>
                                                                    <td>2021-2022</td>
                                                                    <td> 0970-2555</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>An Efficient and Effective Access Control Method
                                                                        for Mobile Cloud Computing Using MHABE Fine
                                                                        Grained Graining</td>
                                                                    <td>S.Sateesh Reddy</td>
                                                                    <td>Industrial Engineering Journal</td>
                                                                    <td>2021-2022</td>
                                                                    <td> 0970-2555</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>The Assessment of Fuzzy Support Early Diabetes
                                                                        Prediction using Vector Regression Method</td>
                                                                    <td>Dr.T.Ravi Kumar</td>
                                                                    <td>Industrial Engineering Journal</td>
                                                                    <td>2021-2022</td>
                                                                    <td> 0970-2555</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Imperative Length Extension of Encrypted Control
                                                                        System through Fog Computing</td>
                                                                    <td>Dr.T.Ravi Kumar</td>
                                                                    <td>Science, Technology and Development</td>
                                                                    <td>2021-2022</td>
                                                                    <td>0950-0707</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Integration of LSTM and Recurrent Neural
                                                                        Networks for the Prediction of Steel worker
                                                                        Dyslipidemic Risk</td>
                                                                    <td>Dr.T.Ravi Kumar</td>
                                                                    <td>Science, Technology and Development</td>
                                                                    <td>2021-2022</td>
                                                                    <td>0950-0707</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Cloud Based Mechine Learning with Advanced
                                                                        Predictive Analytics Using Google Colaboratory
                                                                    </td>
                                                                    <td>Mr. T. Ravi Kumar</td>
                                                                    <td>Materials Today: Proceedings, Elsevier
                                                                        Publisher,</td>
                                                                    <td>2020 - 21</td>
                                                                    <td>2214-7853</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>A Unique Technique using Neural Network
                                                                        Approaches for the Detection and Recognition of
                                                                        Diabetic Retinopathy</td>
                                                                    <td>Y.Susheela</td>
                                                                    <td>Industrial Engineering Journal</td>
                                                                    <td>2021-2022</td>
                                                                    <td> 0970-2555</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Integration of LSTM and Recurrent Neural
                                                                        Networks for the Prediction of Steel worker
                                                                        Dyslipidemic Risk</td>
                                                                    <td>Y.Susheela</td>
                                                                    <td>Science, Technology and Development</td>
                                                                    <td>2021-2022</td>
                                                                    <td>0950-0707</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Examination of the Structure and Evolution of a
                                                                        Deep Learning Framework for Converting Sign
                                                                        Language to Spoken English</td>
                                                                    <td>Y.Susheela</td>
                                                                    <td>Science, Technology and Development</td>
                                                                    <td>2021-2022</td>
                                                                    <td>0950-0707</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Examination of the Structure and Evolution of a
                                                                        Deep Learning Framework for Converting Sign
                                                                        Language to Spoken English</td>
                                                                    <td>R.Sagar</td>
                                                                    <td>Science, Technology and Development</td>
                                                                    <td>2021-2022</td>
                                                                    <td>0950-0707</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

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
                                    <div class="accordion" id="student-events">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapsestudentsevents" aria-expanded="true"
                                                    aria-controls="collapsestudentsevents">
                                                    Academic Year: 2022-23
                                                </button>
                                            </h2>
                                            <div id="collapsestudentsevents" class="accordion-collapse collapse show"
                                                data-bs-parent="#student-events">
                                                <div class="accordion-body">
                                                    <div class="committee_table">
                                                        <div class="committee_head">
                                                            <h3>Academic Year 2022-23</h3>
                                                        </div>
                                                        <div class="committee_table_inn">
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered table-striped">
                                                                    <thead>
                                                                        <tr class="tableizer-firstrow">
                                                                            <th>Sl. No.</th>
                                                                            <th>Name of the Faculty</th>
                                                                            <th>No. of Teaching Learning methodologies
                                                                                used</th>
                                                                            <th>Link of webpage/blog/ Google
                                                                                classroom/LMS etc.</th>

                                                                        </tr>
                                                                    </thead>

                                                                    <tbody>

                                                                        <tr>
                                                                            <td></td>
                                                                            <td>Dr. E. Srikanth Reddy</td>
                                                                            <td>1</td>
                                                                            <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/pdfs/faculty-innovations/PPL-TOTAL.pdf"
                                                                                    target="_blank">View</a></td>


                                                                        </tr>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td>Dr. Gulab Singh</td>
                                                                            <td>1</td>
                                                                            <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/pdfs/faculty-innovations/DAA_Complete_Notes.pdf"
                                                                                    target="_blank">View</a></td>


                                                                        </tr>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td>Mr.T.Ravikumar</td>
                                                                            <td>1</td>
                                                                            <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/pdfs/faculty-innovations/Data_Minin_(Hand_Written).pdf"
                                                                                    target="_blank">View</a></td>


                                                                        </tr>

                                                                        <tr>
                                                                            <td></td>
                                                                            <td>Mr. E. Kiran Kumar</td>
                                                                            <td>1</td>
                                                                            <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/pdfs/faculty-innovations/Cryptography_and_Network_Security_cmpltd.pdf"
                                                                                    target="_blank">
                                                                                    View</a></td>


                                                                        </tr>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td>Mr. Mahesh Thallapelly</td>
                                                                            <td>1</td>
                                                                            <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/pdfs/faculty-innovations/Java_BTech_CSE_2-2 Notes_241116_113337.pdf"
                                                                                    target="_blank">
                                                                                    View</a></td>


                                                                        </tr>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapsestudentseventsone" aria-expanded="false"
                                                    aria-controls="collapsestudentseventsone">
                                                    Academic Year 2021-22
                                                </button>
                                            </h2>
                                            <div id="collapsestudentseventsone" class="accordion-collapse collapse"
                                                data-bs-parent="#student-events">
                                                <div class="accordion-body">

                                                    <div class="committee_table">
                                                        <div class="committee_head">
                                                            <h3>Academic Year: 2021-22</h3>
                                                        </div>
                                                        <div class="committee_table_inn">
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered table-striped">
                                                                    <thead>
                                                                        <tr class="tableizer-firstrow">
                                                                            <th>Sl. No.</th>
                                                                            <th>Name of the Faculty</th>
                                                                            <th>No. of Teaching Learning methodologies
                                                                                used</th>
                                                                            <th>Link of webpage/blog/ Google
                                                                                classroom/LMS etc.</th>

                                                                        </tr>
                                                                    </thead>

                                                                    <tbody>

                                                                        <tr>
                                                                            <td></td>
                                                                            <td>Dr.Chandramouli Narasingoju</td>
                                                                            <td>1</td>
                                                                            <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/pdfs/faculty-innovations/DAA_Complete_Notes2.pdf"
                                                                                    target="_blank">
                                                                                    View</a></td>


                                                                        </tr>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td>Mrs. Vidya Kade</td>
                                                                            <td>1</td>
                                                                            <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/pdfs/faculty-innovations/IRS_Notes.pdf"
                                                                                    target="_blank">
                                                                                    View</a></td>


                                                                        </tr>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td>Mr. R. Sagar</td>
                                                                            <td>1</td>
                                                                            <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/pdfs/faculty-innovations/Cryptography_and_Network_Security_cmpltd2.pdf"
                                                                                    target="_blank">
                                                                                    View</a></td>


                                                                        </tr>

                                                                        <tr>
                                                                            <td></td>
                                                                            <td>Mr. Akoju Mahender</td>
                                                                            <td>1</td>
                                                                            <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/pdfs/faculty-innovations/Software_Engineering _notes.pdf"
                                                                                    target="_blank">
                                                                                    View</a></td>


                                                                        </tr>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td>Mrs .Kalpana SingiReddy</td>
                                                                            <td>1</td>
                                                                            <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/pdfs/faculty-innovations/Compiler-Design-Complete-notes_3.pdf"
                                                                                    target="_blank">
                                                                                    View</a></td>


                                                                        </tr>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapsestudentseventstwo" aria-expanded="false"
                                                    aria-controls="collapsestudentseventstwo">
                                                    Academic Year 2020-21
                                                </button>
                                            </h2>
                                            <div id="collapsestudentseventstwo" class="accordion-collapse collapse"
                                                data-bs-parent="#student-events">
                                                <div class="accordion-body">

                                                    <div class="committee_table">
                                                        <div class="committee_head">
                                                            <h3>Academic Year: 2020-21</h3>
                                                        </div>
                                                        <div class="committee_table_inn">
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered table-striped">
                                                                    <thead>
                                                                        <tr class="tableizer-firstrow">
                                                                            <th>Sl. No.</th>
                                                                            <th>Name of the Faculty</th>
                                                                            <th>No. of Teaching Learning methodologies
                                                                                used</th>
                                                                            <th>Link of webpage/blog/ Google
                                                                                classroom/LMS etc.</th>

                                                                        </tr>
                                                                    </thead>

                                                                    <tbody>

                                                                        <tr>
                                                                            <td></td>
                                                                            <td>Dr.Chandramouli Narasingoju</td>
                                                                            <td>1</td>
                                                                            <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/pdfs/faculty-innovations/Java_BTech_CSE_2-2 Notes_241116_113337.pdf"
                                                                                    target="_blank">
                                                                                    View</a></td>


                                                                        </tr>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td>Dr. Dinesh Sahni</td>
                                                                            <td>1</td>
                                                                            <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/pdfs/faculty-innovations/FLAT_COMPLETE_NOTES.pdf"
                                                                                    target="_blank">
                                                                                    View</a></td>


                                                                        </tr>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td>Mr.Mohammad Sirajuddin</td>
                                                                            <td>1</td>
                                                                            <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/pdfs/faculty-innovations/Cryptography_and_Network_Security_cmpltd3.pdf"
                                                                                    target="_blank">
                                                                                    View</a></td>


                                                                        </tr>

                                                                        <tr>
                                                                            <td></td>
                                                                            <td>Mr. Sateesh Reddy Singireddy</td>
                                                                            <td>1</td>
                                                                            <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/pdfs/faculty-innovations/HCI_Complete_notes.pdf"
                                                                                    target="_blank">
                                                                                    View</a></td>


                                                                        </tr>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td>Mrs.Gouri Charanya Kolanoori</td>
                                                                            <td>1</td>
                                                                            <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/pdfs/faculty-innovations/Compiler-Design-Complete-notes_3.pdf"
                                                                                    target="_blank">
                                                                                    View</a></td>


                                                                        </tr>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapsestudentseventsthree" aria-expanded="false"
                                                    aria-controls="collapsestudentseventsthree">
                                                    CSE Faculty YouTube Lecture Videos
                                                </button>
                                            </h2>
                                            <div id="collapsestudentseventsthree" class="accordion-collapse collapse"
                                                data-bs-parent="#student-events">
                                                <div class="accordion-body">

                                                    <div class="committee_table">
                                                        <div class="committee_head">
                                                            <h3>CSE Faculty YouTube Lecture Videos</h3>
                                                        </div>
                                                        <div class="committee_table_inn">
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered table-striped">
                                                                    <thead>
                                                                        <tr class="tableizer-firstrow">
                                                                            <th>Sl. No.</th>
                                                                            <th colspan="2">CSE Faculty YouTube Lecture
                                                                                Videos</th>


                                                                        </tr>
                                                                    </thead>

                                                                    <tbody>

                                                                        <tr>
                                                                            <td></td>
                                                                            <td>Hashing Techniques In DataStructures by
                                                                                Mr.E.Kiran Kumar</td>

                                                                            <td><a href="https://youtu.be/vfiN2Nuf5zo?si=ujmkeO_vv9ZzYzUR"
                                                                                    target="_blank">
                                                                                    View</a></td>


                                                                        </tr>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td>Relational Model in DBMS by Ms.Vidya
                                                                            </td>

                                                                            <td><a href="https://www.youtube.com/watch?v=Dft4EYN_j3A"
                                                                                    target="_blank">
                                                                                    View</a></td>


                                                                        </tr>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td>Routing Algorithms in ComputerNetworks
                                                                                by Mrs.A.Kalpana</td>

                                                                            <td><a href="https://www.youtube.com/watch?v=wMo5T7hUMSg"
                                                                                    target="_blank">
                                                                                    View</a></td>


                                                                        </tr>

                                                                        <tr>
                                                                            <td></td>
                                                                            <td>WebTechnologies by Mr.S.Sateesh Reddy
                                                                            </td>

                                                                            <td><a href="https://www.youtube.com/watch?v=BgpAVvwKjgw"
                                                                                    target="_blank">
                                                                                    View</a></td>


                                                                        </tr>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td>Cryptography and Network Security by
                                                                                MD.Sirajuddin</td>

                                                                            <td><a href="https://www.youtube.com/watch?v=0CoJxyKIVTc"
                                                                                    target="_blank">
                                                                                    View</a></td>


                                                                        </tr>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

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
                            <div class="accordion" id="student-events">
                                <div class="accordion-item">

                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapsestudentsevents" aria-expanded="true"
                                            aria-controls="collapsestudentsevents">
                                            Academic Year 2022-23
                                        </button>
                                    </h2>

                                    <div id="collapsestudentsevents" class="accordion-collapse collapse show"
                                        data-bs-parent="#student-events">
                                        <div class="accordion-body">
                                            <div class="committee_table">
                                                <div class="committee_head">
                                                    <h3>Academic Year 2022-23</h3>
                                                </div>
                                                <div class="committee_table_inn">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered table-striped">
                                                            <thead>
                                                                <tr class="tableizer-firstrow">
                                                                    <th>Sl. No.</th>
                                                                    <th>Topic</th>
                                                                    <th>Course</th>
                                                                    <th>Date/ Month/Year</th>
                                                                    <th>Resource Person with Designation</th>
                                                                    <th>Number of students attended</th>
                                                                </tr>
                                                            </thead>

                                                            <tbody>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>IoT Supply Chain and M2M Supply Chain - Internet
                                                                        of Things</td>
                                                                    <td>Workshop</td>
                                                                    <td>22/08/2022</td>
                                                                    <td>Mr. B Yakub, Junior Research Engineer at
                                                                        Cyberaegis IT Solutions Pvt. Limited, Hyderabad
                                                                    </td>
                                                                    <td>95</td>

                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Prevention of Digital Attacks – Cyber Security
                                                                    </td>
                                                                    <td>Workshop</td>
                                                                    <td>11/08/2022</td>
                                                                    <td>Mr. B Yakub, Junior Research Engineer at
                                                                        Cyberaegis IT Solutions Pvt. Limited, Hyderabad
                                                                    </td>
                                                                    <td>96</td>

                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Advanced Computer Networks</td>
                                                                    <td>Guest Lecturer</td>
                                                                    <td>03/09/2022</td>
                                                                    <td>Mr. M. Aravind Kumar, Assistant Professor,Sri
                                                                        Chaitanya College of Engineering, Karimnagar
                                                                    </td>
                                                                    <td>97</td>

                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>Process Improvement Discipline</td>
                                                                    <td>Guest Lecturer</td>
                                                                    <td>16/09/2022</td>
                                                                    <td>Mr. Khaja Ziauddin, Associate Professor, Sri
                                                                        Chaitanya College of Engineering, Karimnagar
                                                                    </td>
                                                                    <td>96</td>

                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Real Time Operating System</td>
                                                                    <td>Workshop</td>
                                                                    <td>26/09/2022</td>
                                                                    <td>Mr. B Yakub, Junior Research Engineer at
                                                                        Cyberaegis IT Solutions Pvt. Limited, Hyderabad
                                                                    </td>
                                                                    <td>98</td>

                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Essential elements of design patterns and how to
                                                                        solve real world problems using design</td>
                                                                    <td>Guest Lecture</td>
                                                                    <td>24/09/2022</td>
                                                                    <td>Mr. Raghu Nagunoori, Assistant Professor, Kamala
                                                                        Institute of Technology and Science, Singapur,
                                                                        Telangana</td>
                                                                    <td>97</td>

                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Mobile Security Threats</td>
                                                                    <td>Guest Lecture</td>
                                                                    <td>10/10/2022</td>
                                                                    <td>Mr. Oggula Raju, Assistant Professor, JNTUH
                                                                        College of Engineering, Jagityal</td>
                                                                    <td>98</td>

                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Keras and Tensor flow for developing the
                                                                        Applications of Machine Learning</td>
                                                                    <td>Workshop</td>
                                                                    <td>18/10/2022</td>
                                                                    <td>Mrs. Drava Arpitha, Assistant Professor, Sri
                                                                        Chaitanya College of Engineering, Karimnagar
                                                                    </td>
                                                                    <td>98</td>

                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Data Mining Using Weka Tool</td>
                                                                    <td>Workshop</td>
                                                                    <td>11/11/2022</td>
                                                                    <td>Mr. Bhasker Prakash, Assistant Professor, Kamala
                                                                        Institute of Technology Science, Singapur,
                                                                        Telangana</td>
                                                                    <td>97</td>

                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Software Testing</td>
                                                                    <td>Guest</td>
                                                                    <td>25/11/2022</td>
                                                                    <td>Dr. P. Sammulal, Professor,</td>
                                                                    <td>98</td>

                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapsestudentseventsone"
                                            aria-expanded="false" aria-controls="collapsestudentseventsone">
                                            Academic Year 2021-22
                                        </button>
                                    </h2>

                                    <div id="collapsestudentseventsone" class="accordion-collapse collapse"
                                        data-bs-parent="#student-events">
                                        <div class="accordion-body">

                                            <div class="committee_table">
                                                <div class="committee_head">
                                                    <h3>Academic Year 2021-22</h3>
                                                </div>
                                                <div class="committee_table_inn">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered table-striped">
                                                            <thead>
                                                                <tr class="tableizer-firstrow">
                                                                    <th>Sl. No.</th>
                                                                    <th>Topic</th>
                                                                    <th>Course</th>
                                                                    <th>Date/ Month/Year</th>
                                                                    <th>Resource Person with Designation</th>
                                                                    <th>Number of students attended</th>
                                                                </tr>
                                                            </thead>

                                                            <tbody>


                                                                <tr>
                                                                    <td></td>
                                                                    <td>Cloud Computing</td>
                                                                    <td>Training Program</td>

                                                                    <td>12/07/2021</td>

                                                                    <td>Dr. B. Vishnuvardhan, Sr. Professor, JNTUH
                                                                        College of Engineering, Jagityal</td>

                                                                    <td>98</td>

                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Front End Development</td>
                                                                    <td>Workshop</td>

                                                                    <td>20/10/2021</td>

                                                                    <td>Mr. Sanjeevaraju Akinapalli, Assistant
                                                                        Professor, Kamala Institute of Technology and
                                                                        Science, Singapur, Telangana</td>

                                                                    <td>97</td>

                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Context Free Grammar</td>
                                                                    <td>Guest Lecture</td>

                                                                    <td>30/10/2021</td>

                                                                    <td>Mr. Khaja Ziauddin, Associate Professor, Sri
                                                                        Chaitanya College of Engineering, Karimnagar
                                                                    </td>

                                                                    <td>98</td>

                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Data Mining Using Weka Tool</td>
                                                                    <td>Workshop</td>

                                                                    <td>08/11/2021</td>

                                                                    <td>Mr. Raghu Nagunuri, Assistant Professor, Kamala
                                                                        institute of Technology and Science, Singapur,
                                                                        Telangana</td>

                                                                    <td>97</td>

                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Real Time Operating System</td>
                                                                    <td>Guest Lecture</td>

                                                                    <td>18/11/2021</td>

                                                                    <td>Mr. P.Sreenivasa Rao, Associate Professor, JNTUH
                                                                        College of Engineering, Jagityal</td>

                                                                    <td>96</td>

                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Introduction to Databases and its Connectivity
                                                                    </td>
                                                                    <td>Training Program</td>

                                                                    <td>22/11/2021</td>

                                                                    <td>Mr. Kamarapu Naresh, Assistant Professor, Sri
                                                                        Chaitanya College of Engineering, Karimnagar
                                                                    </td>

                                                                    <td>97</td>

                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Introduction to Artificial Intelligence</td>
                                                                    <td>Workshop</td>

                                                                    <td>02/12/2021</td>

                                                                    <td>Mr. Uday Kumar, Associate Professor, Sri
                                                                        Chaitanya College of Engineering, Karimnagar
                                                                    </td>

                                                                    <td>96</td>

                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Advanced Computation and Graphics using C++</td>
                                                                    <td>Guest Lecture</td>

                                                                    <td>17/12/2021</td>

                                                                    <td>Mr. Pavan Kumar Jamalpur, Assistant
                                                                        Professor,Kamala Institute of Technology and
                                                                        Science, Singapur Telangana</td>

                                                                    <td>98</td>

                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Mobile Security Threats</td>
                                                                    <td>Guest Lecture</td>

                                                                    <td>29/12/2021</td>

                                                                    <td>Mr. Venkatesh Thudum, Assistant Professor, JNTUH
                                                                        College of Engineering, Jagityal</td>

                                                                    <td>97</td>

                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapsestudentseventstwo"
                                            aria-expanded="false" aria-controls="collapsestudentseventstwo">
                                            Academic Year 2020-21
                                        </button>
                                    </h2>
                                    <div id="collapsestudentseventstwo" class="accordion-collapse collapse"
                                        data-bs-parent="#student-events">
                                        <div class="accordion-body">

                                            <div class="committee_table">
                                                <div class="committee_head">
                                                    <h3>Academic Year 2020-21</h3>
                                                </div>
                                                <div class="committee_table_inn">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered table-striped">
                                                            <thead>
                                                                <tr class="tableizer-firstrow">
                                                                    <th>Sl. No.</th>
                                                                    <th>Topic</th>
                                                                    <th>Course</th>
                                                                    <th>Date/ Month/Year</th>
                                                                    <th>Resource Person with Designation</th>
                                                                    <th>Number of students attended</th>
                                                                </tr>
                                                            </thead>

                                                            <tbody>

                                                                <tr>
                                                                    <td></td>

                                                                    <td>IDEA and BLOWFISH<br>Algorithms</td>

                                                                    <td>Guest lecture</td>

                                                                    <td>01/12/2020</td>

                                                                    <td>Dr. Sunitha Dodda, Associate Professor,Kamala
                                                                        Institute of Technology and Science, Singapur,
                                                                        Telangana</td>

                                                                    <td>97</td>

                                                                </tr>
                                                                <tr>
                                                                    <td></td>

                                                                    <td>MVC Architecture in Design Patterns and
                                                                        Describing Design Patterns</td>

                                                                    <td>Guest lecture</td>

                                                                    <td>04/12/2020</td>

                                                                    <td>Mr. Khaja Ziauddin, Associate Professor,Sri
                                                                        Chaitanya College of Engineering, Karimnagar
                                                                    </td>

                                                                    <td>96</td>

                                                                </tr>
                                                                <tr>
                                                                    <td></td>

                                                                    <td>Industry Level Problems &amp;, How to Organize
                                                                        Data</td>

                                                                    <td>NPTEL</td>

                                                                    <td>07/12/2020</td>

                                                                    <td>Prof. Bala Raju, IIT Madras, Chennai</td>

                                                                    <td>98</td>

                                                                </tr>
                                                                <tr>
                                                                    <td></td>

                                                                    <td>The Concept of Real- Time</td>

                                                                    <td>NPTEL</td>

                                                                    <td>28/12/2020</td>

                                                                    <td>Prof Rajib Mall, IIT, Kharagpur Operating System
                                                                    </td>

                                                                    <td>99</td>

                                                                </tr>

                                                                <tr>
                                                                    <td></td>

                                                                    <td>Cray 1, Cyber 205, Super Computer Architecture
                                                                    </td>

                                                                    <td>Workshop</td>

                                                                    <td>08/02/2021</td>

                                                                    <td>Mr. B Yakub, Junior Research Engineer at
                                                                        Cyberaegis IT Solutions Pvt. Limited, Hyderabad
                                                                    </td>

                                                                    <td>97</td>

                                                                </tr>
                                                                <tr>
                                                                    <td></td>

                                                                    <td>Towers of Hanoi and RB-Tree</td>

                                                                    <td>Online Guest Lecture</td>

                                                                    <td>19/12/2020</td>

                                                                    <td>Mr. G Srinivasulu, Retired Air Force Officer,
                                                                        Senior Consultant, ISAC, Hyderabad</td>

                                                                    <td>98</td>

                                                                </tr>
                                                                <tr>
                                                                    <td></td>

                                                                    <td>Development of Upcoming Engineers</td>

                                                                    <td>Online Guest Lecture</td>

                                                                    <td>26/12/2020</td>

                                                                    <td>Mr. B Yakub, Junior Research Engineer at
                                                                        Cyberaegis IT Solutions Pvt. Limited, Hyderabad
                                                                    </td>

                                                                    <td>97</td>

                                                                </tr>
                                                                <tr>
                                                                    <td></td>

                                                                    <td>Internet of Things</td>

                                                                    <td>NPTEL</td>

                                                                    <td>04/01/2021</td>

                                                                    <td>Prof P Sudap Misra, IIT, Kharagpur, West Bengal
                                                                    </td>

                                                                    <td>99</td>

                                                                </tr>
                                                                <tr>
                                                                    <td></td>

                                                                    <td>Practical Exposure of Python Programming
                                                                        (Database Connectivity)</td>

                                                                    <td>Guest Lecturer</td>

                                                                    <td>05/01/2021</td>

                                                                    <td>Dr. P. Sammulal, Professor, JNTUH College of
                                                                        Engineering , Jagityal</td>

                                                                    <td>98</td>

                                                                </tr>
                                                                <tr>
                                                                    <td></td>

                                                                    <td>Python Using Data Science</td>

                                                                    <td>Guest Lecturer</td>

                                                                    <td>08/01/2021</td>

                                                                    <td>Mr. Sanjeevaraju Akinapalli, Assistant
                                                                        Professor,Kamala institute of technology and
                                                                        Science, Singapur, Telangana</td>

                                                                    <td>97</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

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
                            <div class="accordion" id="accordionExample_one">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#list_sec_one" aria-expanded="true"
                                            aria-controls="list_sec_one">
                                            2022-23
                                        </button>
                                    </h2>
                                    <div id="list_sec_one" class="accordion-collapse collapse show"
                                        data-bs-parent="#accordionExample_one">
                                        <div class="accordion-body">
                                            <div class="committee_table">
                                                <div class="committee_head">
                                                    <h3>Academic Year 2022-23</h3>
                                                </div>
                                                <div class="committee_table_inn">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th>S.No</th>
                                                                    <th>Student Name</th>
                                                                    <th>Enrollment No</th>
                                                                    <th>Employee Name</th>
                                                                    <th>Appointment No</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>AGGU PRATHYUSHA</td>
                                                                    <td>19S41A0503</td>
                                                                    <td>EINFRATECH SYSTEMS</td>
                                                                    <td>vgse/2023/CSE/001</td>

                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>BARIGELA SAI PRAKASH</td>
                                                                    <td>19S41A0510</td>
                                                                    <td>EINFRATECH SYSTEMS</td>
                                                                    <td>vgse/2023/CSE/002</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>ITTE SHRAVAN</td>
                                                                    <td>19S41A0534</td>
                                                                    <td>EINFRATECH SYSTEMS</td>
                                                                    <td>vgse/2023/CSE/004</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>KASANAGOTTU BHAVANA</td>
                                                                    <td>19S41A0542</td>
                                                                    <td>EINFRATECH SYSTEMS</td>
                                                                    <td>vgse/2023/CSE/005</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>NANDINI ARMOOR</td>
                                                                    <td>19S41A0508</td>
                                                                    <td>EINFRATECH SYSTEMS</td>
                                                                    <td>vgse/2023/CSE/006</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>SAIESHA GADDAM</td>
                                                                    <td>19S41A0526</td>
                                                                    <td>EINFRATECH SYSTEMS</td>
                                                                    <td>vgse/2023/CSE/008</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>SAIPRIYA BAIRI</td>
                                                                    <td>19S41A0509</td>
                                                                    <td>EINFRATECH SYSTEMS</td>
                                                                    <td>vgse/2023/CSE/009</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>SANKEESA KAVYA SREE</td>
                                                                    <td>19S41A0583</td>
                                                                    <td>EINFRATECH SYSTEMS</td>
                                                                    <td>vgse/2023/CSE/010</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>SHASHIVARDHAN METHUKU</td>
                                                                    <td>19S41A0551</td>
                                                                    <td>EINFRATECH SYSTEMS</td>
                                                                    <td>vgse/2023/CSE/011</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>UPPULA NIKHITHA</td>
                                                                    <td>19S41A0595</td>
                                                                    <td>EINFRATECH SYSTEMS</td>
                                                                    <td>vgse/2023/CSE/012</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>VAISHNAVI DURKUNALA</td>
                                                                    <td>19S41A0521</td>
                                                                    <td>EINFRATECH SYSTEMS</td>
                                                                    <td>vgse/2023/CSE/013</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>SREEHARSHA BONAGIRI</td>
                                                                    <td>19S41A0516</td>
                                                                    <td>TCS</td>
                                                                    <td>vgse/2023/CSE/014</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>TEJASWI PAMULAPARTHI</td>
                                                                    <td>19S41A0571</td>
                                                                    <td>TCS</td>
                                                                    <td>vgse/2023/CSE/015</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>E.SRILEKHA</td>
                                                                    <td>19S41A0525</td>
                                                                    <td>SONATA</td>
                                                                    <td>vgse/2023/CSE/016</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>S.AMULYA</td>
                                                                    <td>19S41A0584</td>
                                                                    <td>SONATA</td>
                                                                    <td>vgse/2023/CSE/018</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>DHARAM TEJASWINI </td>
                                                                    <td>19S41A0520</td>
                                                                    <td>VITA TECHNOLOGIES</td>
                                                                    <td>vgse/2023/CSE/019</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>RAMAKRISHNA KAKKERA</td>
                                                                    <td>19S41A0539</td>
                                                                    <td>VITA TECHNOLOGIES</td>
                                                                    <td>vgse/2023/CSE/020</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>N SHASHI KUMAR </td>
                                                                    <td>19S41A0564</td>
                                                                    <td>VITA TECHNOLOGIES</td>
                                                                    <td>vgse/2023/CSE/021</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>NIKHIL REDDY BOKKALA</td>
                                                                    <td>19S41A0513</td>
                                                                    <td>VITA TECHNOLOGIES</td>
                                                                    <td>vgse/2023/CSE/022</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>NEELA SOUMYA</td>
                                                                    <td>19S41A0566</td>
                                                                    <td>Ethon Health Care Solutions</td>
                                                                    <td>vgse/2023/CSE/023</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>RAGAM MONY</td>
                                                                    <td>19S41A0575</td>
                                                                    <td>Ethon Health Care Solutions</td>
                                                                    <td>vgse/2023/CSE/024</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>SYED TAUQEER</td>
                                                                    <td>19S41A0588</td>
                                                                    <td>Ethon Health Care Solutions</td>
                                                                    <td>vgse/2023/CSE/025</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>RATHNA SANVITHA</td>
                                                                    <td>19S41A0577</td>
                                                                    <td>Ethon Health Care Solutions</td>
                                                                    <td>vgse/2023/CSE/026</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>MOTURI KUSHAL KUMAR</td>
                                                                    <td>19S41A0562</td>
                                                                    <td>Ethon Health Care Solutions</td>
                                                                    <td>vgse/2023/CSE/027</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>NARNENI SUCHARITHA</td>
                                                                    <td>19S41A0565</td>
                                                                    <td>Ethon Health Care Solutions</td>
                                                                    <td>vgse/2023/CSE/029</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>KANKANALA ADHARSH</td>
                                                                    <td>19S41A0540</td>
                                                                    <td>Ethon Health Care Solutions</td>
                                                                    <td>vgse/2023/CSE/030</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>THIRUMALA JAYADEVA SAI</td>
                                                                    <td>19S41A0593</td>
                                                                    <td>Ethon Health Care Solutions</td>
                                                                    <td>vgse/2023/CSE/031</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>MOHAMMED SUFIYAN</td>
                                                                    <td>19S41A0559</td>
                                                                    <td>Ethon Health Care Solutionsh</td>
                                                                    <td>vgse/2023/CSE/033</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>MOHD ABDUL HALEEM</td>
                                                                    <td>19S41A0561</td>
                                                                    <td>Ethon Health Care Solutions</td>
                                                                    <td>vgse/2023/CSE/034</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>ANIREDDY MEGHANA</td>
                                                                    <td>19S41A0506</td>
                                                                    <td>Ethon Health Care Solutions</td>
                                                                    <td>vgse/2023/CSE/035</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>ADEPU AKANKSHA</td>
                                                                    <td>19S41A0502</td>
                                                                    <td>AMAZON</td>
                                                                    <td>vgse/2023/CSE/036</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>BEJJENKI SATHVIKA</td>
                                                                    <td>19S41A0511</td>
                                                                    <td>AMAZON</td>
                                                                    <td>vgse/2023/CSE/038</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>DANDU SHIRISHA</td>
                                                                    <td>19S41A0518</td>
                                                                    <td>AMAZON</td>
                                                                    <td>vgse/2023/CSE/039</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>GAJJELA ADITHYA</td>
                                                                    <td>19S41A0527</td>
                                                                    <td>AMAZON</td>
                                                                    <td>vgse/2023/CSE/040</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>JAKKI LAHARI</td>
                                                                    <td>19S41A0535</td>
                                                                    <td>CAPGEMINI</td>
                                                                    <td>vgse/2023/CSE/041</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>JONNALA SUPRIYA</td>
                                                                    <td>19S41A0538</td>
                                                                    <td>CAPGEMINI</td>
                                                                    <td>vgse/2023/CSE/042</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>KATTA SAHITH</td>
                                                                    <td>19S41A0544</td>
                                                                    <td>CAPGEMINI</td>
                                                                    <td>vgse/2023/CSE/043</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>MALLIPEDDI BHAVANA</td>
                                                                    <td>19S41A0549</td>
                                                                    <td>CAPGEMINI</td>
                                                                    <td>vgse/2023/CSE/044</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>MOHAMMAD MUZAMMIL KHAN</td>
                                                                    <td>19S41A0553</td>
                                                                    <td>GENPACT</td>
                                                                    <td>vgse/2023/CSE/047</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>MOHAMMAD SULEMAN AL</td>
                                                                    <td>19S41A0555</td>
                                                                    <td>GENPACT</td>
                                                                    <td>vgse/2023/CSE/048</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>MOHAMMED ZAKIUDDIN</td>
                                                                    <td>19S41A0560</td>
                                                                    <td>GENPACT</td>
                                                                    <td>vgse/2023/CSE/049</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>PADAM SRUJANA</td>
                                                                    <td>19S41A0569</td>
                                                                    <td>NJOY</td>
                                                                    <td>vgse/2023/CSE/050</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>POKALA SAI THARUN</td>
                                                                    <td>19S41A0572</td>
                                                                    <td>NJOY</td>
                                                                    <td>vgse/2023/CSE/051</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>RAMPELLY ROSHINI</td>
                                                                    <td>19S41A0576</td>
                                                                    <td>NJOY</td>
                                                                    <td>vgse/2023/CSE/052</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>S MALKEET SINGH</td>
                                                                    <td>19S41A0581</td>
                                                                    <td>NJOY</td>
                                                                    <td>vgse/2023/CSE/053</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>SOLEWAR HANISHA</td>
                                                                    <td>19S41A0585</td>
                                                                    <td>NJOY</td>
                                                                    <td>vgse/2023/CSE/054</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>SYEDA SUMAYYA AFREEN</td>
                                                                    <td>19S41A0590</td>
                                                                    <td>UBER</td>
                                                                    <td>vgse/2023/CSE/055</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>UZMA SULTANA</td>
                                                                    <td>19S41A0596</td>
                                                                    <td>UBER</td>
                                                                    <td>vgse/2023/CSE/056</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>JANGA LAXMINIVAS REDDY</td>
                                                                    <td>19S41A0536</td>
                                                                    <td>PIKE SOLUTIONS</td>
                                                                    <td>vgse/2023/CSE/060</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>MAZIA YAMEEN</td>
                                                                    <td>19S41A0550</td>
                                                                    <td>PIKE SOLUTIONS</td>
                                                                    <td>vgse/2023/CSE/061</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>BHAVANA GUMMADI</td>
                                                                    <td>20S45A0508</td>
                                                                    <td>EINFRATECH SYSTEMS</td>
                                                                    <td>vgse/2023/CSE/003</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>NAVYA SANKATI</td>
                                                                    <td>20S45A0516</td>
                                                                    <td>EINFRATECH SYSTEMS</td>
                                                                    <td>vgse/2023/CSE/007</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>P.PRANITHA </td>
                                                                    <td>20S45A0514</td>
                                                                    <td>SONATA</td>
                                                                    <td>vgse/2023/CSE/017</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>KANAVENI RAMESH </td>
                                                                    <td>20S45A0510</td>
                                                                    <td>Ethon Health care solutions</td>
                                                                    <td>vgse/2023/CSE/028</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>CH PRANAY KUMAR </td>
                                                                    <td>20S45A0506</td>
                                                                    <td>Ethon Health care solutions</td>
                                                                    <td>vgse/2023/CSE/032</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>AITLA SAIMADHAVAN </td>
                                                                    <td>20S45A0501</td>
                                                                    <td>GENPACT</td>
                                                                    <td>vgse/2023/CSE/045</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>BORUBONTHALA AJAY </td>
                                                                    <td>20S45A0505</td>
                                                                    <td>GENPACT</td>
                                                                    <td>vgse/2023/CSE/046</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>MAKKALA KRISHNAVENI </td>
                                                                    <td>20S45A0511</td>
                                                                    <td>UBER</td>
                                                                    <td>vgse/2023/CSE/057</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>MOHD SHOAIB </td>
                                                                    <td>20S45A0513</td>
                                                                    <td>UBER</td>
                                                                    <td>vgse/2023/CSE/058</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>SIRIPURAM SONY </td>
                                                                    <td>20S45A0517</td>
                                                                    <td>UBER</td>
                                                                    <td>vgse/2023/CSE/059</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>DOPPALA GAJALA </td>
                                                                    <td>20S45A0567</td>
                                                                    <td>PIKE SOLUTIONS</td>
                                                                    <td>vgse/2023/CSE/062</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>MARGAM MANEESHA</td>
                                                                    <td>20S45A0512</td>
                                                                    <td>PIKE SOLUTIONS</td>
                                                                    <td>vgse/2023/CSE/065</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>AGALDHIVITI BHANUTEJA</td>
                                                                    <td>19S41A0504</td>
                                                                    <td>UBER</td>
                                                                    <td>vgse/2023/CSE/070</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>AFAFF MAHEEN</td>
                                                                    <td>19S41A0568</td>
                                                                    <td>UBER</td>
                                                                    <td>vgse/2023/CSE/068</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>SYEDA AYESHA FATHIMA</td>
                                                                    <td>19S41A0589</td>
                                                                    <td>PIKE SOLUTIONS</td>
                                                                    <td>vgse/2023/CSE/089</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#list_sec_two"
                                            aria-expanded="false" aria-controls="list_sec_two">
                                            2021-22
                                        </button>
                                    </h2>
                                    <div id="list_sec_two" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample_one">
                                        <div class="accordion-body">
                                            <div class="accordion-body">
                                                <div class="committee_table">
                                                    <div class="committee_head">
                                                        <h3>Academic Year 2021-22</h3>
                                                    </div>
                                                    <div class="committee_table_inn">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered table-striped">
                                                                <thead>
                                                                    <tr>
                                                                        <th>S.No</th>
                                                                        <th>Student Name</th>
                                                                        <th>Enrollment No</th>
                                                                        <th>Employee Name</th>
                                                                        <th>Appointment No</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>ASHADAPU MANISHA</td>
                                                                        <td>18S41A0511</td>
                                                                        <td>AMAZON</td>
                                                                        <td>vgse/2022/CSE/070</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>BARLA RAMYA</td>
                                                                        <td>18S41A0517</td>
                                                                        <td>AMAZON</td>
                                                                        <td>vgse/2022/CSE/071</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>CHALLA KALPANA</td>
                                                                        <td>18S41A0523</td>
                                                                        <td>AMAZON</td>
                                                                        <td>vgse/2022/CSE/072</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>CHENNOJU GAYATHRI</td>
                                                                        <td>18S41A0528</td>
                                                                        <td>AMAZON</td>
                                                                        <td>vgse/2022/CSE/073</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>GADDAMEEDI ANUSHA</td>
                                                                        <td>18S41A0538</td>
                                                                        <td>AMAZON</td>
                                                                        <td>vgse/2022/CSE/074</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>GEEKURU SAITEJA</td>
                                                                        <td>18S41A0545</td>
                                                                        <td>CONCENTRIX</td>
                                                                        <td>vgse/2022/CSE/075</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>JUGINEPELLY RAMYA</td>
                                                                        <td>18S41A0553</td>
                                                                        <td>CONCENTRIX</td>
                                                                        <td>vgse/2022/CSE/076</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>KANKANALA SHIVANI</td>
                                                                        <td>18S41A0560</td>
                                                                        <td>CONCENTRIX</td>
                                                                        <td>vgse/2022/CSE/077</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>KONDA NITHYA</td>
                                                                        <td>18S41A0568</td>
                                                                        <td>CONCENTRIX</td>
                                                                        <td>vgse/2022/CSE/078</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>MAVURAM VARSHITHA</td>
                                                                        <td>18S41A0572</td>
                                                                        <td>CONCENTRIX</td>
                                                                        <td>vgse/2022/CSE/079</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>MUDRAKOLA BHARGAV</td>
                                                                        <td>18S41A0579</td>
                                                                        <td>CONCENTRIX</td>
                                                                        <td>vgse/2022/CSE/080</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>MANICHANDANA</td>
                                                                        <td>18S41A0590</td>
                                                                        <td>CONCENTRIX</td>
                                                                        <td>vgse/2022/CSE/081</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>RONDLA PADMARANI</td>
                                                                        <td>18S41A0598</td>
                                                                        <td>EXCERS</td>
                                                                        <td>vgse/2022/CSE/082</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>SANDI SAI KRISHNA</td>
                                                                        <td>18S41A05A4</td>
                                                                        <td>EXCERS</td>
                                                                        <td>vgse/2022/CSE/083</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>SUNKARI KALYAN</td>
                                                                        <td>18S41A05A8</td>
                                                                        <td>EXCERS</td>
                                                                        <td>vgse/2022/CSE/084</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>VAKITA ROHINI</td>
                                                                        <td>18S41A05B4</td>
                                                                        <td>EXCERS</td>
                                                                        <td>vgse/2022/CSE/085</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>BODDIREDDY NEERAJA</td>
                                                                        <td>19S45A0502</td>
                                                                        <td>TECH MAHINDRA</td>
                                                                        <td>vgse/2022/CSE/067</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>KALVA MANASA</td>
                                                                        <td>19S45A0503</td>
                                                                        <td>PACTERA EDGE</td>
                                                                        <td>vgse/2022/CSE/068</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>SARABUDLA HARITHA</td>
                                                                        <td>19S45A0507</td>
                                                                        <td>PACTERA EDGE</td>
                                                                        <td>vgse/2022/CSE/069</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>ABDUL ALMAS</td>
                                                                        <td>19S45A0501</td>
                                                                        <td>CONCENTRIX</td>
                                                                        <td>vgse/2022/CSE/087</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>KHAJA HASSNUDDIN</td>
                                                                        <td>19S45A0508</td>
                                                                        <td>CONCENTRIX</td>
                                                                        <td>vgse/2022/CSE/088</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>THOTAPALLI NITHISH</td>
                                                                        <td>19S45A0510</td>
                                                                        <td>CONCENTRIX</td>
                                                                        <td>vgse/2022/CSE/089</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>ADEPU BHAVANA</td>
                                                                        <td>18S41A0501</td>
                                                                        <td>Wipro </td>
                                                                        <td>vgse/2022/CSE/001</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>ALUVOJI JYOTHIRMAI</td>
                                                                        <td>18S41A0503</td>
                                                                        <td>Minfy ,Pactera Edge</td>
                                                                        <td>vgse/2022/CSE/002</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>AMULYA ENUMULA</td>
                                                                        <td>18S41A0504</td>
                                                                        <td>MPHASIS.Wipro</td>
                                                                        <td>vgse/2022/CSE/003</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>ANKALAPU VIVEK</td>
                                                                        <td>18S41A0507</td>
                                                                        <td>Mindtree,minfy,wipro</td>
                                                                        <td>vgse/2022/CSE/004</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>ANNAMANENI DHEEKSHITH</td>
                                                                        <td>18S41A0508</td>
                                                                        <td>Minfy,pactraedge,wipro</td>
                                                                        <td>vgse/2022/CSE/005</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>ANNAMANENI SRIJA</td>
                                                                        <td>18S41A0509</td>
                                                                        <td>Wipro</td>
                                                                        <td>vgse/2022/CSE/006</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>ASARI SAIKUMAR</td>
                                                                        <td>18S41A0510</td>
                                                                        <td>Tech Mahindra</td>
                                                                        <td>vgse/2022/CSE/007</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>BADAVATH VENNELA</td>
                                                                        <td>18S41A0512</td>
                                                                        <td>Infosys</td>
                                                                        <td>vgse/2022/CSE/008</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>BANDHAM SAISHMA</td>
                                                                        <td>18S41A0515</td>
                                                                        <td>MPHASIS</td>
                                                                        <td>vgse/2022/CSE/009</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>BANNA SAHITHYA</td>
                                                                        <td>18S41A0516</td>
                                                                        <td>Wipro</td>
                                                                        <td>vgse/2022/CSE/010</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>BHAIRI MEGHANA</td>
                                                                        <td>18S41A0518</td>
                                                                        <td>Capgemini,wipro</td>
                                                                        <td>vgse/2022/CSE/011</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>BITLA VANDANA</td>
                                                                        <td>18S41A0520</td>
                                                                        <td>Minfy,PACTERAEDGE</td>
                                                                        <td>vgse/2022/CSE/012</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>BOLGAM ROSHINI</td>
                                                                        <td>18S41A0521</td>
                                                                        <td>GLOBAL QUEST,minfy,pactraedge</td>
                                                                        <td>vgse/2022/CSE/013</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>CHANDRAGIRI RAMYA</td>
                                                                        <td>18S41A0524</td>
                                                                        <td>TCS</td>
                                                                        <td>vgse/2022/CSE/014</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>CHANDUPATLA SHALINI REDDY</td>
                                                                        <td>18S41A0525</td>
                                                                        <td>Wipro</td>
                                                                        <td>vgse/2022/CSE/015</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>CHEKOTI NARESH YADAV</td>
                                                                        <td>18S41A0526</td>
                                                                        <td>Wipro</td>
                                                                        <td>vgse/2022/CSE/016</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>CHILUMULA TEJASWI</td>
                                                                        <td>18S41A0529</td>
                                                                        <td>Wipro</td>
                                                                        <td>vgse/2022/CSE/017</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>DEEKONDA PRASANNA</td>
                                                                        <td>18S41A0531</td>
                                                                        <td>Wipro</td>
                                                                        <td>vgse/2022/CSE/018</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>DESHU SHRAVANI</td>
                                                                        <td>18S41A0532</td>
                                                                        <td>Wipro</td>
                                                                        <td>vgse/2022/CSE/019</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>DODDA SAI SURYA</td>
                                                                        <td>18S41A0533</td>
                                                                        <td>GLOBAL QUEST,Mphasis</td>
                                                                        <td>vgse/2022/CSE/020</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>DOODAM MITHRA SREE</td>
                                                                        <td>18S41A0534</td>
                                                                        <td>TCS.Wipro</td>
                                                                        <td>vgse/2022/CSE/021</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>DUSA SHIVARAM</td>
                                                                        <td>18S41A0535</td>
                                                                        <td>Wipro</td>
                                                                        <td>vgse/2022/CSE/022</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>DUVVA INDHUJA </td>
                                                                        <td>18S41A0536</td>
                                                                        <td>Wipro</td>
                                                                        <td>vgse/2022/CSE/023</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>ERVA SAIANUDEEP</td>
                                                                        <td>18S41A0537</td>
                                                                        <td>Wipro</td>
                                                                        <td>vgse/2022/CSE/024</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>GADDE SIRI CHANDANA</td>
                                                                        <td>18S41A0539</td>
                                                                        <td>GLOBAL QUEST,Wipro</td>
                                                                        <td>vgse/2022/CSE/025</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>GAMPA SAHITHI</td>
                                                                        <td>18S41A0540</td>
                                                                        <td>Infosys,Wipro</td>
                                                                        <td>vgse/2022/CSE/026</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>GANDE ANUSHYA</td>
                                                                        <td>18S41A0541</td>
                                                                        <td>Wipro</td>
                                                                        <td>vgse/2022/CSE/027</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>GANDRA SAIPAVAN</td>
                                                                        <td>18S41A0543</td>
                                                                        <td>Wipro</td>
                                                                        <td>vgse/2022/CSE/028</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>GOGIKARI THEJASWINI</td>
                                                                        <td>18S41A0546</td>
                                                                        <td>Wipro</td>
                                                                        <td>vgse/2022/CSE/029</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>GONE SHIVARAMA KRISHNA</td>
                                                                        <td>18S41A0547</td>
                                                                        <td>Wipro</td>
                                                                        <td>vgse/2022/CSE/030</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>GOURISHETTY KRISHNA SAKHI</td>
                                                                        <td>18S41A0548</td>
                                                                        <td>Infosys.tcs</td>
                                                                        <td>vgse/2022/CSE/031</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>IRUKULLA VEENA SRI</td>
                                                                        <td>18S41A0550</td>
                                                                        <td>Minfy,pactraedge</td>
                                                                        <td>vgse/2022/CSE/031</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>JILLA NIKHIL</td>
                                                                        <td>18S41A0551</td>
                                                                        <td>Infosys</td>
                                                                        <td>vgse/2022/CSE/033</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>JILLA SANGEETHA</td>
                                                                        <td>18S41A0552</td>
                                                                        <td>TCS</td>
                                                                        <td>vgse/2022/CSE/034</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>YEDULAPALLY ANISHA</td>
                                                                        <td>18S41A0554</td>
                                                                        <td>Wipro</td>
                                                                        <td>vgse/2022/CSE/035</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>KAIRAMKONDA BALAPRASAD</td>
                                                                        <td>18S41A0556</td>
                                                                        <td>Wipro</td>
                                                                        <td>vgse/2022/CSE/036</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>KALVA MANASA SHARANYA</td>
                                                                        <td>18S41A0557</td>
                                                                        <td>Wipro</td>
                                                                        <td>vgse/2022/CSE/037</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>KATIPELLI SAHITHI</td>
                                                                        <td>18S41A0561</td>
                                                                        <td>Wipro</td>
                                                                        <td>vgse/2022/CSE/038</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>KATKURI SHARMILA</td>
                                                                        <td>18S41A0562</td>
                                                                        <td>Wipro</td>
                                                                        <td>vgse/2022/CSE/039</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>YAMSANI AKHIL KRISHNA</td>
                                                                        <td>18S41A0563</td>
                                                                        <td>Wipro</td>
                                                                        <td>vgse/2022/CSE/040</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>HUDA FATHEEMA</td>
                                                                        <td>18S41A0564</td>
                                                                        <td>Minfy</td>
                                                                        <td>vgse/2022/CSE/041</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>KADARI VENKATSAI</td>
                                                                        <td>18S41A0565</td>
                                                                        <td>MPHASIS</td>
                                                                        <td>vgse/2022/CSE/042</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>KOLIPAKA CHANDANA RANI</td>
                                                                        <td>18S41A0566</td>
                                                                        <td>Wipro</td>
                                                                        <td>vgse/2022/CSE/043</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>KONDA VINISHA</td>
                                                                        <td>18S41A0569</td>
                                                                        <td>MPHASIS</td>
                                                                        <td>vgse/2022/CSE/044</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>LAKKA SRUJANA</td>
                                                                        <td>18S41A0570</td>
                                                                        <td>Infosys</td>
                                                                        <td>vgse/2022/CSE/045</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>MOHAMMAED AASIM</td>
                                                                        <td>18S41A0575</td>
                                                                        <td>MPHASIS</td>
                                                                        <td>vgse/2022/CSE/046</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>MUCHA SOUMYA SRI</td>
                                                                        <td>18S41A0576</td>
                                                                        <td>Wipro</td>
                                                                        <td>vgse/2022/CSE/047</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>MUDDASANI SRIVANI</td>
                                                                        <td>18S41A0578</td>
                                                                        <td>Minfy</td>
                                                                        <td>vgse/2022/CSE/048</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>MUSHANAM NAGABRUNDHA</td>
                                                                        <td>18S41A0580</td>
                                                                        <td>Wipro</td>
                                                                        <td>vgse/2022/CSE/049</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>MUSKAN KAZMI</td>
                                                                        <td>18S41A0581</td>
                                                                        <td>MPHASIS,Wipro</td>
                                                                        <td>vgse/2022/CSE/050</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>NARSINGOJU NIKITHA</td>
                                                                        <td>18S41A0584</td>
                                                                        <td>GLOBAL QUEST,MPHASIS</td>
                                                                        <td>vgse/2022/CSE/051</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>NEELAM JAHNAVI</td>
                                                                        <td>18S41A0585</td>
                                                                        <td>MPHASIS,Wipro</td>
                                                                        <td>vgse/2022/CSE/052</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>PALLA VYSHNAVI</td>
                                                                        <td>18S41A0587</td>
                                                                        <td>Wipro</td>
                                                                        <td>vgse/2022/CSE/053</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>PENTALA SRIVANI</td>
                                                                        <td>18S41A0588</td>
                                                                        <td>NTT Data,SONATA</td>
                                                                        <td>vgse/2022/CSE/054</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>POLASA AKANKSHA</td>
                                                                        <td>18S41A0591</td>
                                                                        <td>Wipro</td>
                                                                        <td>vgse/2022/CSE/055</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>PONNAM SARAYU</td>
                                                                        <td>18S41A0592</td>
                                                                        <td>Wipro</td>
                                                                        <td>vgse/2022/CSE/056</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>RANGU THIRUSHITHA</td>
                                                                        <td>18S41A0594</td>
                                                                        <td>SONATA,Wipro</td>
                                                                        <td>vgse/2022/CSE/057</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>RENIKUNTA SRAVANTHI</td>
                                                                        <td>18S41A0596</td>
                                                                        <td>SONATA,Wipro</td>
                                                                        <td>vgse/2022/CSE/058</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>SHYAMANAPALLY NAVEEN </td>
                                                                        <td>18S41A05A7</td>
                                                                        <td>Wipro</td>
                                                                        <td>vgse/2022/CSE/059</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>SYED SABOOR AHMED</td>
                                                                        <td>18S41A05A9</td>
                                                                        <td>Wipro</td>
                                                                        <td>vgse/2022/CSE/060</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>T. Mahathi</td>
                                                                        <td>18S41A05B1</td>
                                                                        <td>Wipro</td>
                                                                        <td>vgse/2022/CSE/061</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>UMERA NILOFER</td>
                                                                        <td>18S41A05B2</td>
                                                                        <td>MPHASIS,TCS</td>
                                                                        <td>vgse/2022/CSE/062</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>UZMA KAREEM</td>
                                                                        <td>18S41A05B3</td>
                                                                        <td>TCS</td>
                                                                        <td>vgse/2022/CSE/063</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>VINAY GUJJULA</td>
                                                                        <td>18S41A05B6</td>
                                                                        <td>MPHASIS</td>
                                                                        <td>vgse/2022/CSE/064</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>YAMSANI SRIJA</td>
                                                                        <td>18S41A05B8</td>
                                                                        <td>Wipro</td>
                                                                        <td>vgse/2022/CSE/065</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>ZOHA KHADEER</td>
                                                                        <td>18S41A05B9</td>
                                                                        <td>Wipro</td>
                                                                        <td>vgse/2022/CSE/066</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#list_sec_three"
                                            aria-expanded="false" aria-controls="list_sec_three">
                                            2020-21
                                        </button>
                                    </h2>
                                    <div id="list_sec_three" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample_one">
                                        <div class="accordion-body">
                                            <div class="accordion-body">
                                                <div class="committee_table">
                                                    <div class="committee_head">
                                                        <h3>Academic Year 2020-21</h3>
                                                    </div>
                                                    <div class="committee_table_inn">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered table-striped">
                                                                <thead>
                                                                    <tr>
                                                                        <th>S.No</th>
                                                                        <th>Student Name</th>
                                                                        <th>Enrollment No</th>
                                                                        <th>Employee Name</th>
                                                                        <th>Appointment No</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>AMIRISHETTY RISHIKESH PHANEENDRA</td>
                                                                        <td>17S41A0509</td>
                                                                        <td>CAPGEMNI</td>
                                                                        <td>vgse/2021/CSE/001</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>ANANTHOJU INDU</td>
                                                                        <td>17S41A0510</td>
                                                                        <td>SAVANTIS SOLUTION</td>
                                                                        <td>vgse/2021/CSE/002</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>BANDARI SREEJA</td>
                                                                        <td>17S41A0515</td>
                                                                        <td>SAVANTIS SOLUTION</td>
                                                                        <td>vgse/2021/CSE/003</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>BODDU SAIKRUPA</td>
                                                                        <td>17S41A0518</td>
                                                                        <td>ACCENTURE</td>
                                                                        <td>vgse/2021/CSE/004</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>BODLA ANUSHA</td>
                                                                        <td>17S41A0519</td>
                                                                        <td>INFOSYS</td>
                                                                        <td>vgse/2021/CSE/005</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>BOINI SOWMYASRI</td>
                                                                        <td>17S41A0520</td>
                                                                        <td>ACCENTURE</td>
                                                                        <td>vgse/2021/CSE/006</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>BOINPALLI VAMAN RAO</td>
                                                                        <td>17S41A0521</td>
                                                                        <td>ACCENTURE</td>
                                                                        <td>vgse/2021/CSE/007</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>BONALA SHRAVANI</td>
                                                                        <td>17S41A0522</td>
                                                                        <td>INFOSYS</td>
                                                                        <td>vgse/2021/CSE/008</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>CHIKKULAPALLI ALEKHYA</td>
                                                                        <td>17S41A0526</td>
                                                                        <td>ZENSAR</td>
                                                                        <td>vgse/2021/CSE/009</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>CHINTHALAPALLI SAICHANDRASHEKAR REDDY</td>
                                                                        <td>17S41A0527</td>
                                                                        <td>VETA TECHNOLOGIES</td>
                                                                        <td>vgse/2021/CSE/010</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>CHIPPARI JAHNAVI</td>
                                                                        <td>17S41A0528</td>
                                                                        <td>TECHMAHINDRA</td>
                                                                        <td>vgse/2021/CSE/011</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>DEVARAJU SRINIVAS ARUN KUMAR</td>
                                                                        <td>17S41A0530</td>
                                                                        <td>COGNIZANT</td>
                                                                        <td>vgse/2021/CSE/012</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>GADDAM AMULYA</td>
                                                                        <td>17S41A0534</td>
                                                                        <td>COGNIZANT</td>
                                                                        <td>vgse/2021/CSE/013</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>KAKERLA LAXMI GAYATHRI</td>
                                                                        <td>17S41A0540</td>
                                                                        <td>WIPRO</td>
                                                                        <td>vgse/2021/CSE/014</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>KALAKUNTLA PRAGATHI</td>
                                                                        <td>17S41A0541</td>
                                                                        <td>SAVANTIS SOLUTION</td>
                                                                        <td>vgse/2021/CSE/015</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>KAMUNI NIKHIL</td>
                                                                        <td>17S41A0543</td>
                                                                        <td>peopleLink unified communications Pvt .Ltd
                                                                        </td>
                                                                        <td>vgse/2021/CSE/016</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>KOTHA GANGA SAISHMA</td>
                                                                        <td>17S41A0548</td>
                                                                        <td>SMART IMS INDIA PVT LTD</td>
                                                                        <td>vgse/2021/CSE/017</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>MANDHA AKANKSHA REDDY</td>
                                                                        <td>17S41A0550</td>
                                                                        <td>WIPRO</td>
                                                                        <td>vgse/2021/CSE/018</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>MEHAR KHATOON</td>
                                                                        <td>17B71A0506</td>
                                                                        <td>SAVANTIS SOLUTION</td>
                                                                        <td>vgse/2021/CSE/019</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>MOHAMMAD DULEPASHA</td>
                                                                        <td>17S41A0554</td>
                                                                        <td>TCS</td>
                                                                        <td>vgse/2021/CSE/020</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>MUDDU SAI KRISHNA</td>
                                                                        <td>17S41A0556</td>
                                                                        <td>INFOSYS</td>
                                                                        <td>vgse/2021/CSE/021</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>NAKKA SAI RAM</td>
                                                                        <td>17S41A0559</td>
                                                                        <td>MPHASIS</td>
                                                                        <td>vgse/2021/CSE/022</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>NARLA NIKHITHA</td>
                                                                        <td>17S41A0562</td>
                                                                        <td>VETA TECHNOLOGIES</td>
                                                                        <td>vgse/2021/CSE/023</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>PAIDIPELLY TEJASWI</td>
                                                                        <td>17S41A0566</td>
                                                                        <td>PUBLICIS SAPIEN</td>
                                                                        <td>vgse/2021/CSE/024</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>PATHI NIKHITHA REDDY</td>
                                                                        <td>17S41A0568</td>
                                                                        <td>TCS</td>
                                                                        <td>vgse/2021/CSE/025</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>RANGA RAJA VAMSHI</td>
                                                                        <td>17S41A0575</td>
                                                                        <td>TCS</td>
                                                                        <td>vgse/2021/CSE/026</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>RAPOLU ANUSHA</td>
                                                                        <td>17S41A0576</td>
                                                                        <td>COGNIZANT</td>
                                                                        <td>vgse/2021/CSE/027</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>ROOHI</td>
                                                                        <td>17S41A0577</td>
                                                                        <td>WIPRO</td>
                                                                        <td>vgse/2021/CSE/028</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>SARDAR DHARAMVEER SINGH</td>
                                                                        <td>17S41A0580</td>
                                                                        <td>VETA TECHNOLOGIES</td>
                                                                        <td>vgse/2021/CSE/029</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>SEETHARAM MANOHAR</td>
                                                                        <td>17S41A0581</td>
                                                                        <td>COGNIZANT</td>
                                                                        <td>vgse/2021/CSE/030</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>SIDDAM SHRUTHI</td>
                                                                        <td>17S41A0584</td>
                                                                        <td>DXC</td>
                                                                        <td>vgse/2021/CSE/031</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>SRIPERUMBUDURI NAAGASREYA</td>
                                                                        <td>17S41A0585</td>
                                                                        <td>CAPGEMNI</td>
                                                                        <td>vgse/2021/CSE/032</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>SYED MUDASSER ALI</td>
                                                                        <td>17S41A0588</td>
                                                                        <td>INFOSYS</td>
                                                                        <td>vgse/2021/CSE/033</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>THATIPALLI SAI PRIYA</td>
                                                                        <td>17S41A0591</td>
                                                                        <td>INFOSYS</td>
                                                                        <td>vgse/2021/CSE/034</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>THODUPUNURI SATHWIK</td>
                                                                        <td>17S41A0595</td>
                                                                        <td>INFOSYS</td>
                                                                        <td>vgse/2021/CSE/035</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>VADLAKONDA RUCHITHA</td>
                                                                        <td>17S41A0596</td>
                                                                        <td>NTT DATA</td>
                                                                        <td>vgse/2021/CSE/036</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>VUTHOORI SAI PREETH</td>
                                                                        <td>17S41A0599</td>
                                                                        <td>TCS</td>
                                                                        <td>vgse/2021/CSE/037</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td>MANDA YASHWANTH RAJ</td>
                                                                        <td>18S45A0505</td>
                                                                        <td>VETA TECHNOLOGIES</td>
                                                                        <td>vgse/2021/CSE/038</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>MOHAMMED MUJEEBUDDIN</td>
                                                                        <td>18S45A0507</td>
                                                                        <td>WIPRO</td>
                                                                        <td>vgse/2021/CSE/039</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>VANGA UDAYKUMAR</td>
                                                                        <td>18S45A0510</td>
                                                                        <td>WIPRO</td>
                                                                        <td>vgse/2021/CSE/040</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>PABBOJI KALYANI</td>
                                                                        <td>18S45A0511</td>
                                                                        <td>VETA TECHNOLOGIES</td>
                                                                        <td>vgse/2021/CSE/041</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade animate__animated animate__fadeInUp " id="v-pills-hod" role="tabpanel"
                            aria-labelledby="v-pills-hod-tab" tabindex="0">
                            <div class="committee_head">
                                <h3>Contact HOD</h3>
                            </div>
                            <div class="row hod-start">
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
                            </div>
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
        $(document).ready(function () {
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
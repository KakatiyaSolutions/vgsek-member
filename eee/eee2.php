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
  margin:20px;
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
.cse-hod h4{
    font-size: 23px;
    font-weight: 700;
    line-height: 28px;
}
.cse-hod p{
    text-align: end;
    font-size: 16px;
    line-height: 28px;;
}
.cse-hod2 {
    padding-left: 10px;
    border-left: 3px solid var(--orange);
    margin-left: 313px;
    margin-top: 30px;
}
.cse-hod2 h4{
    color:var(--blue);
    font-size: 22px;
    font-weight: 700;
    line-height: 28px;
}
.cse-hod2 p{
    font-size: 16px;
    line-height: 28px;
}
.cse-hod2 p b{
    color:var(--blue);
}
.hod-start {
    margin-top: 50px;
    padding: 40px;
    box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
    background: linear-gradient(90deg, #eee 96%, var(--blue) 94%);
}
 #v-pills-profile1 table  img{
    width:100px !important;
    height:124px !important;
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
                    <h4>EEE</h4>
                </div>

                <div class="bnr_bredcrumb">
                    <div class="container">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Departments</a></li>
                                <li class="breadcrumb-item active" aria-current="page">EEE</li>
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

                    <h2 class="widget-title">EEE Department</h2>
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">





                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item departmnt_acord_item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button department_sccor_head" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_overview" aria-expanded="true" aria-controls="collapse_overview">
                                        Program Overview
                                    </button>
                                </h2>
                                <div id="collapse_overview" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                    <div class="accordion-body department_accord_body">
                                        <button class="nav-link deprmnt_btn_act active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab"
                                            aria-controls="v-pills-home" aria-selected="true">Overview</button>
                                        <button class="nav-link deprmnt_btn_act" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab"
                                            aria-controls="v-pills-profile" aria-selected="false">Vision-Mission</button>

                                        <button class="nav-link deprmnt_btn_act" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab"
                                            aria-controls="v-pills-messages" aria-selected="false">PEO’s</button>
                                        <button class="nav-link deprmnt_btn_act" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab"
                                            aria-controls="v-pills-settings" aria-selected="false">PO’s & PSO’s</button>
                                        <button class="nav-link deprmnt_btn_act" id="v-pills-board-tab" data-bs-toggle="pill" data-bs-target="#v-pills-board" type="button" role="tab"
                                            aria-controls="v-pills-board" aria-selected="false">Board of Studies</button>
                                        <button class="nav-link deprmnt_btn_act" id="v-pills-adv-tab" data-bs-toggle="pill" data-bs-target="#v-pills-adv" type="button" role="tab"
                                            aria-controls="v-pills-adv" aria-selected="false">Advisory Board</button>
                                        <button class="nav-link deprmnt_btn_act" id="v-pills-achi-tab" data-bs-toggle="pill" data-bs-target="#v-pills-achi" type="button" role="tab"
                                            aria-controls="v-pills-achieve" aria-selected="false">Achievements</button>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item departmnt_acord_item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button department_sccor_head collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsepos" aria-expanded="false" aria-controls="collapsepos">
                                        B.Tech Courses
                                    </button>
                                </h2>
                                <div id="collapsepos" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body department_accord_body">

                                        <button class="nav-link deprmnt_btn_act" id="v-pills-syllabus-tab" data-bs-toggle="pill" data-bs-target="#v-pills-syllabus" type="button" role="tab"
                                            aria-controls="v-pills-syllabus" aria-selected="false">Syllabus</button>
                                        <button class="nav-link deprmnt_btn_act" id="v-pills-time-tab" data-bs-toggle="pill" data-bs-target="#v-pills-time" type="button" role="tab"
                                            aria-controls="v-pills-time" aria-selected="false">Timetables</button>
                                        <button class="nav-link deprmnt_btn_act" id="v-pills-academic-tab" data-bs-toggle="pill" data-bs-target="#v-pills-academic" type="button" role="tab"
                                            aria-controls="v-pills-academic" aria-selected="false">Academic Calendar</button>
                                        <button class="nav-link deprmnt_btn_act" id="v-pills-lab-tab" data-bs-toggle="pill" data-bs-target="#v-pills-lab" type="button" role="tab"
                                            aria-controls="v-pills-lab" aria-selected="false">Laboratories</button>

                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item departmnt_acord_item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button department_sccor_head collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_pso" aria-expanded="false" aria-controls="collapse_pso">
                                        M.Tech Courses
                                    </button>
                                </h2>
                                <div id="collapse_pso" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body department_accord_body">

                                        <button class="nav-link deprmnt_btn_act" id="v-pills-syllabus1-tab" data-bs-toggle="pill" data-bs-target="#v-pills-syllabus1" type="button" role="tab"
                                            aria-controls="v-pills-syllabus1" aria-selected="false">Syllabus</button>
                                        <button class="nav-link deprmnt_btn_act" id="v-pills-time1-tab" data-bs-toggle="pill" data-bs-target="#v-pills-time1" type="button" role="tab"
                                            aria-controls="v-pills-time1" aria-selected="false">Timetables</button>
                                        <button class="nav-link deprmnt_btn_act" id="v-pills-academic1-tab" data-bs-toggle="pill" data-bs-target="#v-pills-academic1" type="button" role="tab"
                                            aria-controls="v-pills-academic1" aria-selected="false">Academic Calendar</button>
                                        <button class="nav-link deprmnt_btn_act" id="v-pills-lab1-tab" data-bs-toggle="pill" data-bs-target="#v-pills-lab1" type="button" role="tab"
                                            aria-controls="v-pills-lab1" aria-selected="false">Laboratories</button>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item departmnt_acord_item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button department_sccor_head collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_faculty" aria-expanded="false" aria-controls="collapse_faculty">
                                        Faculty
                                    </button>
                                </h2>
                                <div id="collapse_faculty" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body department_accord_body">

                                        <button class="nav-link deprmnt_btn_act" id="v-pills-profile1-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile1" type="button" role="tab"
                                            aria-controls="v-pills-profile" aria-selected="false">Faculty Profile</button>
                                        <button class="nav-link deprmnt_btn_act" id="v-pills-event-tab" data-bs-toggle="pill" data-bs-target="#v-pills-event" type="button" role="tab"
                                            aria-controls="v-pills-event" aria-selected="false">Faculty Events</button>
                                        <button class="nav-link deprmnt_btn_act" id="v-pills-pub-tab" data-bs-toggle="pill" data-bs-target="#v-pills-pub" type="button" role="tab"
                                            aria-controls="v-pills-pub" aria-selected="false">Publications</button>
                                        <button class="nav-link deprmnt_btn_act" id="v-pills-news-tab" data-bs-toggle="pill" data-bs-target="#v-pills-news" type="button" role="tab"
                                            aria-controls="v-pills-news" aria-selected="false">Newsletter</button>
                                        <button class="nav-link deprmnt_btn_act" id="v-pills-inno-tab" data-bs-toggle="pill" data-bs-target="#v-pills-inno" type="button" role="tab"
                                            aria-controls="v-pills-inno" aria-selected="false">Faculty Innovations</button>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item departmnt_acord_item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button department_sccor_head collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_students" aria-expanded="false" aria-controls="collapse_students">
                                        Students
                                    </button>
                                </h2>
                                <div id="collapse_students" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body department_accord_body">

                                        <button class="nav-link deprmnt_btn_act" id="v-pills-stu-event-tab" data-bs-toggle="pill" data-bs-target="#v-pills-stu-event" type="button" role="tab"
                                            aria-controls="v-pills-stu-event" aria-selected="false">Student Events</button>
                                        <button class="nav-link deprmnt_btn_act" id="v-pills-res-tab" data-bs-toggle="pill" data-bs-target="#v-pills-res" type="button" role="tab"
                                            aria-controls="v-pills-res" aria-selected="false">Results</button>
                                        <button class="nav-link deprmnt_btn_act" id="v-pills-place-tab" data-bs-toggle="pill" data-bs-target="#v-pills-place" type="button" role="tab"
                                            aria-controls="v-pills-place" aria-selected="false">Placements</button>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item departmnt_acord_item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button department_sccor_head collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_contact" aria-expanded="false" aria-controls="collapse_contact">
                                        Contact Information
                                    </button>
                                </h2>
                                <div id="collapse_contact" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body department_accord_body">

                                        <button class="nav-link deprmnt_btn_act" id="v-pills-hod-tab" data-bs-toggle="pill" data-bs-target="#v-pills-hod" type="button" role="tab"
                                            aria-controls="v-pills-hod" aria-selected="false">Contact HOD</button>
                                        <button class="nav-link deprmnt_btn_act" id="v-pills-co-tab" data-bs-toggle="pill" data-bs-target="#v-pills-co" type="button" role="tab"
                                            aria-controls="v-pills-co" aria-selected="false">CO’s and PO’s</button>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <!-- </div> -->
                </div>
                <div class="col-lg-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active animate__animated animate__fadeInUp " id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                            <div class="committee_head">
                                <h3>Program Overview</h3>
                            </div>
                            <h5>Coming Soon</h5>
                        </div>
                        <div class="tab-pane fade animate__animated animate__fadeInUp" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                            <div class="pro-vision">
                                <div class="mission-total">
                                    <div class="vision order-lg-1">
                                        <h1>Vision</h1>
                                        <p>Excellence in quality education by keeping pace with the rapidly changing technologies and to create a highly innovative
                                            and research oriented man power meeting the global standards in the field of Electrical and Electronics Engineering.</p>
                                    </div>
                                    <img src="http://kakatiyasolutions.in/vageshwari_clg/assets/images/logo/vision.png" class="img-fluid order-lg-2" loading="lazy" alt="mission-logo">
                                </div>

                                <div class="mission-total">

                                    <img src="http://kakatiyasolutions.in/vageshwari_clg/assets/images/logo/mission.png" class="img-fluid" loading="lazy" alt="mission-logo">

                                    <div class="mission">
                                        <h1>Mission</h1>

                                        <div class="vns_depart_img">
                                            <img src="http://kakatiyasolutions.in/vageshwari_clg/assets/images/department/list_type_red1.webp" alt="list type image" class="img-fluid" loading="lazy">
                                            <li>To create an excellent academic environment where a strong theoretical knowledge and practical skills can be imparted, further,
                                                the graduates will also be trained in interpersonal communication skills and teamwork along with an emphasis on ethics and morals
                                                for the sustainable development of the society.</li>
                                        </div>
                                        <div class="vns_depart_img">
                                            <img src="http://kakatiyasolutions.in/vageshwari_clg/assets/images/department/list_type_red1.webp" alt="list type image" class="img-fluid" loading="lazy">
                                            <li>Emphasis on providing Strong Theoretical Foundation & Engineering Leadership Eminence, infusion of Creativity and Management
                                                skill while maintaining Ethics and Moral for Sustainable Development. (Individual development) </li>
                                        </div>
                                        <div class="vns_depart_img">
                                            <img src="http://kakatiyasolutions.in/vageshwari_clg/assets/images/department/list_type_red1.webp" alt="list type image" class="img-fluid" loading="lazy">
                                            <li>Enable the Faculty and Student Interactions to trigger interest for Applied Multidisciplinary Research and Entrepreneurship Culture resulting
                                                in Significant Advancement of the field of Specialization with Involvement of Industries and Collaborative Educational Networks.</li>
                                        </div>
                                        <div class="vns_depart_img">
                                            <img src="http://kakatiyasolutions.in/vageshwari_clg/assets/images/department/list_type_red1.webp" alt="list type image" class="img-fluid" loading="lazy">
                                            <li>Extend the Conducive Neighborhoods for Innovation in frontier areas to keep pace with Environmental, Societal and Technological Developments
                                                of the National and International Community to Serve Humanity. </li>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade animate__animated animate__fadeInUp" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">
                            <div class="peo">


                                <div class="committee_table">
                                    <div class="committee_head">
                                        <h3>PEO’s</h3>
                                    </div>
                                    <div class="committee_table_inn">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped">
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
                                                        <td>To provide students with the knowledge of Basic Sciences in general and Electrical and electronics Engineering in particular
                                                            so as to acquire the necessary skills for analysis and synthesis of problems in generation, transmission and distribution..</td>

                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Program Educational Objectives – 2</td>
                                                        <td>To provide technical knowledge and skills to identify, comprehend and solve complex tasks in industry and research and
                                                            inspire the students to become future researchers / scientists with innovative ideas.

                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Program Educational Objectives – 3</td>
                                                        <td> To prepare the students for successful employment in various Industrial and Government organizations, both at the National
                                                            and International level, with professional competence and ethical administrative acumen so as to handle critical
                                                            situations and meet deadlines.</td>

                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Program Educational Objectives – 4</td>
                                                        <td>To train the students in basic human and technical communication skills so that they may be good team-members,
                                                            leaders and responsible citizen With a view to challenge ourselves and to nurture diverse capabilities for professional
                                                            and intellectual growth for our graduates it is important for the department to define departmental objectives in
                                                            generalized and broad format. Adherence to these objectives is proposed to be demonstrated through actions or achievements.</td>

                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade animate__animated animate__fadeInUp" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">

                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Programme Outcomes (POs)
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="committee_table">
                                                <div class="committee_head">
                                                    <h3>Programme Outcomes (POs)</h3>
                                                </div>
                                                <div class="committee_table_inn">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th>S.NO</th>
                                                                    <th>PO#</th>
                                                                    <th>Program Educational Objectives</th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Engineering Knowledge:</td>
                                                                    <td>Apply the knowledge of mathematics, science, engineering fundamentals, and an engineering specialization to the solution of complex engineering problems</td>

                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Problem Analysis:</td>
                                                                    <td>Identify, formulate, review research literature, and analyze complex engineering problems reaching substantiated conclusions using first principles of mathematics, natural sciences, and engineering sciences.</td>

                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Development of Solutions:</td>
                                                                    <td>Design solutions for complex engineering problems and design system components or processes that meet the specified needs with appropriate consideration for the public health and safety, and the cultural, societal, and environmental considerations</td>

                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Conduct Investigations of Complex Problems:</td>
                                                                    <td>Use research-based knowledge and research methods including design of experiments, analysis and interpretation of data,
                                                                        and synthesis of the information to provide valid conclusions.</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Modern Tool Usage:</td>
                                                                    <td>Create, select, and apply appropriate techniques, resources, and modern engineering and IT tools including prediction and modeling
                                                                        to complex engineering activities with an understanding of the limitations</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>The Engineer and Society:</td>
                                                                    <td>Apply reasoning informed by the contextual knowledge to assess societal, health, safety, legal and cultural issues and the consequent
                                                                        responsibilities relevant to the professional engineering practice</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Environment and sustainability:</td>
                                                                    <td>Understand the impact of the professional engineering solutions in societal and environmental contexts,
                                                                        and demonstrate the knowledge of, and need for sustainable development.</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Ethics:</td>
                                                                    <td>Apply ethical principles and commit to professional ethics and responsibilities and norms of the engineering practice.</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Individual and Team Work:</td>
                                                                    <td>Function effectively as an individual, and as a member or leader in diverse teams, and in multidisciplinary settings.</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Communication:</td>
                                                                    <td>Communicate effectively on complex engineering activities with the engineering community and with society at large, such as, being able to comprehend and write effective reports and design documentation, make effective presentations, and give and receive clear instructions.</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Project management and finance:</td>
                                                                    <td>Demonstrate knowledge and understanding of the engineering and management principles and apply these to one‟s own work, as a member and leader in a team, to manage projects and in multidisciplinary environments.</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Life-long learning:</td>
                                                                    <td>Recognize the need for, and have the preparation and ability to engage in independent and life-long learning in the broadest context of technological change</td>
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
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Program Specific Outcomes (PSOs)
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">

                                            <div class="committee_table">
                                                <div class="committee_head">
                                                    <h3>Program Specific Outcomes (PSOs)</h3>
                                                </div>
                                                <div class="committee_table_inn">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th>S.NO</th>
                                                                    <th>PSO#</th>
                                                                    <th>Program Specific Outcomes</th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Program Specific Outcomes - 1</td>
                                                                    <td>Able to utilize the knowledge of high voltage engineering in collaboration with power systems in innovative, dynamic and
                                                                        challenging environment, for the research based teamwork.</td>

                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Program Specific Outcomes -2</td>
                                                                    <td>Can explore the scientific theories, ideas, methodologies and the new cutting edge Technologies in renewable energy engineering,
                                                                        and use this erudition in their professional envelopment and gain sufficient competence to solve the current and future energy problems universally.</td>

                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Program Specific Outcomes -3</td>
                                                                    <td>The understanding of technologies like PLC, PMC, process controllers, transducers and HMI one can analyze, design electrical and
                                                                        electronics principles to install, test , maintain power system and applications</td>

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

                        <div class="tab-pane fade animate__animated animate__fadeInUp " id="v-pills-board" role="tabpanel" aria-labelledby="v-pills-board-tab" tabindex="0">
                            <div class="committee_head">
                                <h3>Board of Studies</h3>
                            </div>
                            <h5>Coming Soon</h5>
                        </div>
                        <div class="tab-pane fade animate__animated animate__fadeInUp " id="v-pills-adv" role="tabpanel" aria-labelledby="v-pills-adv-tab" tabindex="0">
                            <div class="committee_head">
                                <h3>Advisory Board</h3>
                            </div>
                            <div class="committee_table_inn">
                                       
                                       <div class="table-responsive">
                                           <table class="table table-bordered table-striped">
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
                                                       <td>Dr.K.Chandramouli</td> 
                                                      <td>Professor & HoD</td>
                                                      <td>Chairperson</td>

                                                   </tr>
                                                   <tr>
                                                       <td></td>
                                                       <td>Mr.S.Praveen</td>
                                                       <td>Assistant Professor</td>
                                                       <td>Member Secretary</td>
                                                      

                                                   </tr>
                                                   <tr>
                                                       <td></td>
                                                       <td>Er.Ch.Shekar</td>
                                                       <td>Alumni</td>
                                                       <td>Member</td>
                                                      

                                                   </tr>
                                                   <tr>
                                                       <td></td>
                                                       <td>Mrs.D.Karuna</td>
                                                       <td>Assistant Professor</td>
                                                       <td>Member</td>
                                                      

                                                   </tr>
                                                   <tr>
                                                       <td></td>
                                                       <td>Mr.P.Sampath Kumar</td>
                                                       <td>Assistant Professor</td>
                                                       <td>Member</td>
                                                      

                                                   </tr>
                                                   <tr>
                                                       <td></td>
                                                       <td>Mr.G.Rajashekar</td>
                                                       <td>Assistant Professor</td>
                                                       <td>Member</td>
                                                      

                                                   </tr>
                                                   <tr>
                                                       <td></td>
                                                       <td>Ms.R.Lavanya</td>
                                                       <td>Assistant Professor</td>
                                                       <td>Member</td>
                                                      

                                                   </tr>


                                               </tbody>
                                           </table>
                                       </div>
                                   </div>
                        </div>
                        <div class="tab-pane fade animate__animated animate__fadeInUp " id="v-pills-achi" role="tabpanel" aria-labelledby="v-pills-achi-tab" tabindex="0">
                            <div class="committee_head">
                                <h3>Achievements</h3>
                            </div>
                            <h5>Coming Soon</h5>
                        </div>



                        <div class="tab-pane fade animate__animated animate__fadeInUp " id="v-pills-tech" role="tabpanel" aria-labelledby="v-pills-tech-tab" tabindex="0">
                            <div class="committee_head">
                                <h3>B.Tech Courses</h3>
                            </div>
                            <h5>Coming Soon</h5>
                        </div>

                        <div class="tab-pane fade animate__animated animate__fadeInUp " id="v-pills-syllabus" role="tabpanel" aria-labelledby="v-pills-syllabus-tab" tabindex="0">
                            <!-- <div class="committee_head">
                    <h3>Syllabus</h3>
                </div> -->
                            <div class="peo">


                                <div class="committee_table">
                                    <div class="committee_head">
                                        <h3>Syllabus</h3>
                                    </div>
                                    <div class="committee_table_inn">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped">
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
                                                        <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/images/eee/R18B.Tech.EEESyllabus.pdf" target="_blank" rel="noopener">View</a></td>

                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>R22</td>
                                                        <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/images/eee/R22B.Tech.EEECourseStructureSyllabus1.pdf" target="_blank" rel="noopener">View</a></td>

                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="tab-pane fade animate__animated animate__fadeInUp " id="v-pills-time" role="tabpanel" aria-labelledby="v-pills-time-tab" tabindex="0">
                            <div class="peo">


                                <div class="committee_table">
                                    <div class="committee_head">
                                        <h3>Timetables</h3>
                                    </div>
                                    <div class="committee_table_inn">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>S.NO</th>
                                                        <th>Academic Year</th>
                                                        <th>Semester</th>
                                                        <th>Link</th>

                                                    </tr>
                                                </thead>


                                                <tbody>

                                                    <tr>
                                                        <td></td>
                                                        <td>2022-2023</td>
                                                        <td>Sem-I</td>
                                                        <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/images/eee/TIME TABLE 2022-23 I-SEM.pdf" target="_blank" rel="noopener">View</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>2022-2023</td>
                                                        <td>Sem-II</td>
                                                        <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/images/eee/Time Table 2022-23 II-sem.pdf" target="_blank" rel="noopener">View</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>2021-2022</td>
                                                        <td>Sem-I</td>
                                                        <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/images/eee/Time Tables  2021-22 I-SEM TT.pdf" target="_blank" rel="noopener">View</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>2021-2022</td>
                                                        <td>Sem-II</td>
                                                        <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/images/eee/TIME TABLE 2021-22 II-SEM.pdf" target="_blank" rel="noopener">View</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>2020-2021</td>
                                                        <td>Sem-I</td>
                                                        <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/images/eee/I SEM TT - 2020- 2021 ONLINE.pdf" target="_blank" rel="noopener">View</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>2020-2021</td>
                                                        <td>Sem-II</td>
                                                        <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/images/eee/II SEM TT-2020-2021 ONLINE.pdf" target="_blank" rel="noopener">View</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="tab-pane fade animate__animated animate__fadeInUp " id="v-pills-academic" role="tabpanel" aria-labelledby="v-pills-academic-tab" tabindex="0">


                            <div class="peo">


                                <div class="committee_table">
                                    <div class="committee_head">
                                        <h3>Academic Calendar</h3>
                                    </div>
                                    <div class="committee_table_inn">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped" id="no-counter-table">
                                                <thead>
                                                    <tr>
                                                        <th>S.NO</th>
                                                        <th>Academic Year/University</th>
                                                        <th>Year</th>
                                                        <th>Link</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td rowspan="4">1</td>
                                                        <td rowspan="4">2023-24</td>
                                                        <td>I st Year</td>
                                                        <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/images/eee/AcademicCalenderofB.Tech.IYEARI_IISEMESTERS.pdf" target="_blank" rel="noopener">View</a></td>

                                                    </tr>
                                                    <tr>

                                                        <td>II nd Year</td>
                                                        <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/images/eee/B.TechIIYEARIIISEMESTERS.pdf" target="_blank" rel="noopener">View</a></td>

                                                    </tr>
                                                    <tr>

                                                        <td>III rd Year</td>
                                                        <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/images/eee/B.Tech.B.Pharm.IIIYEARIIISEMESTERS 23-24.pdf" target="_blank" rel="noopener">View</a></td>

                                                    </tr>
                                                    <tr>

                                                        <td>IV th Year</td>
                                                        <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/images/eee/Revised_B._Tech_.B_._Pharm_._IV_YEAR_I_II_Semesters_Academic_Calendar_for_2023-24_.pdf" target="_blank" rel="noopener">View</a></td>

                                                    </tr>

                                                    <tr>
                                                        <td rowspan="4">2</td>
                                                        <td rowspan="4">2022-2023</td>
                                                        <td>I st Year </td>
                                                        <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/images/eee/Academic_Calendar_of_B.Tech_._I_Year_I_II_Semesters_page-0001_.pdf" target="_blank" rel="noopener">View</a>
                                                            <br><br>
                                                            <a href="http://kakatiyasolutions.in/vageshwari_clg/assets/images/eee/AcademicCalenderofB.Tech.IYEARI_IISEMESTERS.pdf" target="_blank" rel="noopener">View</a>
                                                        </td>
                                                    </tr>
                                                    <tr>

                                                        <td> IInd Year</td>
                                                        <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/images/eee/Academic_Calendar_for_B.Tech_.-B_.Pharm_._II_Year_I_II_Semesters_1.pdf" target="_blank" rel="noopener">View</a></td>

                                                    </tr>
                                                    <tr>

                                                        <td>III rd Year</td>
                                                        <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/images/eee/B.Tech_B_.Pharm_III_YEAR_I_II_SEMESTERS_.pdf" target="_blank" rel="noopener">View</a></td>

                                                    </tr>
                                                    <tr>

                                                        <td>IV th Year</td>
                                                        <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/images/eee/B.Tech_B_.Pharm_IV_YEAR_I_II_SEMESTERS_.pdf" target="_blank" rel="noopener">View</a></td>

                                                    </tr>

                                                    <tr>
                                                        <td rowspan="4">3</td>
                                                        <td rowspan="4">2021-2022</td>
                                                        <td>I st Year</td>
                                                        <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/images/eee/ACADEMIC_CALENDAR_2021-22_FOR_B._TECH_.-B_.PHARM_._I_YEAR_I_II_SEMESTERS_.pdf" target="_blank" rel="noopener">View</a>
                                                            <br><br>
                                                            <a href="http://kakatiyasolutions.in/vageshwari_clg/assets/images/eee/Academic_Calender-2021.pdf" target="_blank" rel="noopener">View</a>
                                                        </td>
                                                    <tr>

                                                        <td>II nd Year</td>
                                                        <td><a href="#" target="_blank" rel="noopener">View</a></td>

                                                    </tr>
                                                    <tr>

                                                        <td>III rd Year</td>
                                                        <td><a href="#" target="_blank" rel="noopener">View</a></td>

                                                    </tr>
                                                    <tr>

                                                        <td>IV th Year</td>
                                                        <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/images/eee/REVISED_ACADEMIC_CALENDAR_2021-22_B._Tech_._B_.Pharm_._IV_YEAR_II_SEMESTER_.pdf" target="_blank" rel="noopener">View</a></td>

                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="committee_table_inn">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>S.NO</th>
                                                        <th>Academic Year/Department</th>
                                                        <!-- <th>Year</th> -->
                                                        <th>Link</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td></td>
                                                        <td>2023-24</td>

                                                        <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/images/eee/EEE DEPRT ACADEMIC CALENDER 23-24.pdf" target="_blank" rel="noopener">View</a></td>

                                                    </tr>


                                                    <tr>
                                                        <td></td>
                                                        <td>2022-2023</td>

                                                        <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/images/eee/EEE DEPRT ACADEMIC CALENDER - 2022-23.pdf" target="_blank" rel="noopener">View</a>
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td></td>
                                                        <td>2021-2022</td>

                                                        <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/images/eee/EEE DEPRT ACADEMIC CALENDER 21-22.pdf" target="_blank" rel="noopener">View</a>
                                                        </td>



                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="tab-pane fade animate__animated animate__fadeInUp " id="v-pills-lab" role="tabpanel" aria-labelledby="v-pills-lab-tab" tabindex="0">
                            <div class="committee_head">
                                <h3>Laboratories</h3>
                            </div>


                            <div class="lab-head">
                                <h1>Lab Details</h1>
                            </div>

                            <div class="accordion" id="accordionExample2">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne1">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                                            EEE LAB-1
                                        </button>
                                    </h2>
                                    <div id="collapseOne1" class="accordion-collapse collapse show" aria-labelledby="headingOne1" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <div class="lab-full">


                                                <div class="committee_head">
                                                    <h3>EEE LAB-1</h3>
                                                </div>
                                                <div class="lab-min">
                                                    <h6>Electrical Circuits Analysis Laboratory:-</h6>
                                                </div>
                                                <p>Here students learn about locus diagram, Time response analysis of RLC, Two port networks and filters. </p>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                            EEE LAB-2
                                        </button>
                                    </h2>
                                    <div id="collapseTwo2" class="accordion-collapse collapse" aria-labelledby="headingTwo2" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <div class="lab-full">


                                                <div class="committee_head">
                                                    <h3>EEE LAB-2</h3>
                                                </div>
                                                <div class="lab-min">
                                                    <h6>Electrical Machines-I Laboratory.:-</h6>
                                                </div>
                                                <p>In this lab students learns about Generators, Motors and Transformers.</p>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            EEE LAB-3
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <div class="lab-full">


                                                <div class="committee_head">
                                                    <h3>EEE LAB-3</h3>
                                                </div>
                                                <div class="lab-min">
                                                    <h6>Electrical Machines-II Laboratory.:-</h6>
                                                </div>
                                                <p>In this lab students learns about synchronous generators and induction motors.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            EEE LAB-4
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <div class="lab-full">


                                                <div class="committee_head">
                                                    <h3>EEE LAB-4</h3>
                                                </div>
                                                <div class="lab-min">
                                                    <h6>Electrical Simulation Tools Laboratory:-</h6>
                                                </div>
                                                <p>In this lab students executes the circuit related experiments by using MATLAB, NGspice , Octave etc.</p>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            EEE LAB-5
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <div class="lab-full">


                                                <div class="committee_head">
                                                    <h3>EEE LAB-5</h3>
                                                </div>
                                                <div class="lab-min">
                                                    <h6>Control Systems Laboratory.:-</h6>
                                                </div>
                                                <p>In this lab students learn about Transfer function of DC Generator and motor and P,PI,PD,PID controllers. /p>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSix">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            EEE LAB-6
                                        </button>
                                    </h2>
                                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <div class="lab-full">
                                                <div class="committee_head">
                                                    <h3>EEE LAB-6</h3>
                                                </div>
                                                <div class="lab-min">
                                                    <h6>Power Electronics Laboratory:-</h6>
                                                </div>
                                                <p>In this lab students learns about Inverter, Rectifier circuits etc.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSeven">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                            EEE LAB-7
                                        </button>
                                    </h2>
                                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <div class="lab-full">
                                                <div class="committee_head">
                                                    <h3> EEE LAB-7</h3>
                                                </div>
                                                <div class="lab-min">
                                                    <h6>Power System Laboratory:-</h6>
                                                </div>
                                                <p>In this lab Students learns about A,B,C,D constants of long transmission line, Formulation of Ybus and Zbus. </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingEight">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                            EEE LAB-8
                                        </button>
                                    </h2>
                                    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <div class="lab-full">
                                                <div class="committee_head">
                                                    <h3> EEE LAB-8</h3>
                                                </div>
                                                <div class="lab-min">
                                                    <h6>Measurements & Instrumentation Laboratory:-</h6>
                                                </div>
                                                <p>In this lab students learns about single phase energy meter and various bridges. </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lab-img">
                                <div class="your-slider">
                                    <div>
                                        <a href="https://kakatiyasolutions.in/vageshwari_clg/assets/images/eee/eee-lab1.webp" data-fancybox="gallery" data-caption="Caption Images 1">
                                            <img src="https://kakatiyasolutions.in/vageshwari_clg/assets/images/eee/eee-lab1.webp" alt="Image 1" class="img-fluid" loading="lazy" decoding="async"></a>
                                        <div class="overlay">
                                            <p>Eee Lab-1 </p>
                                        </div>
                                    </div>

                                    <div>
                                        <a href="https://kakatiyasolutions.in/vageshwari_clg/assets/images/eee/eee-lab2.webp" data-fancybox="gallery" data-caption="Caption Images 1">
                                            <img src="https://kakatiyasolutions.in/vageshwari_clg/assets/images/eee/eee-lab2.webp" alt="Image 2" class="img-fluid" loading="lazy" decoding="async"></a>
                                        <div class="overlay">
                                            <p>Eee Lab-2 </p>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="https://kakatiyasolutions.in/vageshwari_clg/assets/images/eee/eee-lab3.webp" data-fancybox="gallery" data-caption="Caption Images 1">
                                            <img src="https://kakatiyasolutions.in/vageshwari_clg/assets/images/eee/eee-lab3.webp" alt="Image 3" class="img-fluid" loading="lazy" decoding="async"></a>
                                        <div class="overlay">
                                            <p>Eee Lab-3 </p>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="https://kakatiyasolutions.int/vageshwari_clg/assets/images/eee/eee-lab4.webp" data-fancybox="gallery" data-caption="Caption Images 1">
                                            <img src="https://kakatiyasolutions.in/vageshwari_clg/assets/images/eee/eee-lab4.webp" alt="Image 4" class="img-fluid" loading="lazy" decoding="async">
                                        </a>
                                        <div class="overlay">
                                            <p>Eee Lab-4 </p>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="https://kakatiyasolutions.in/vageshwari_clg/assets/images/eee/eee-lab5.webp" data-fancybox="gallery" data-caption="Caption Images 1">
                                            <img src="https://kakatiyasolutions.in/vageshwari_clg/assets/images/eee/eee-lab5.webp" alt="Image 5" class="img-fluid" loading="lazy" decoding="async">
                                        </a>
                                        <div class="overlay">
                                            <p>Eee Lab-5 </p>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="https://kakatiyasolutions.in/vageshwari_clg/assets/images/eee/eee-lab6.webp" data-fancybox="gallery" data-caption="Caption Images 1">
                                            <img src="https://kakatiyasolutions.in/vageshwari_clg/assets/images/eee/eee-lab6.webp" alt="Image 5" class="img-fluid" loading="lazy" decoding="async">
                                        </a>
                                        <div class="overlay">
                                            <p>Eee Lab-6 </p>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="https://kakatiyasolutions.in/vageshwari_clg/assets/images/eee/eee-lab7.webp" data-fancybox="gallery" data-caption="Caption Images 1">
                                            <img src="https://kakatiyasolutions.in/vageshwari_clg/assets/images/eee/eee-lab7.webp" alt="Image 5" class="img-fluid" loading="lazy" decoding="async">
                                        </a>
                                        <div class="overlay">
                                            <p>Eee Lab-7 </p>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="https://kakatiyasolutions.in/vageshwari_clg/assets/images/eee/eee-lab8.webp" data-fancybox="gallery" data-caption="Caption Images 1">
                                            <img src="https://kakatiyasolutions.in/vageshwari_clg/assets/images/eee/eee-lab8.webp" alt="Image 5" class="img-fluid" loading="lazy" decoding="async">
                                        </a>
                                        <div class="overlay">
                                            <p>Eee Lab-8 </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade animate__animated animate__fadeInUp " id="v-pills-mtech" role="tabpanel" aria-labelledby="v-pills-mtech-tab" tabindex="0">
                            <div class="committee_head">
                                <h3>M.Tech Courses</h3>
                            </div>
                            <h5>Coming Soon</h5>
                        </div>
                        <div class="tab-pane fade animate__animated animate__fadeInUp " id="v-pills-syllabus1" role="tabpanel" aria-labelledby="v-pills-syllabus1-tab" tabindex="0">
                            <div class="committee_head">
                                <h3>Syllabus</h3>
                            </div>
                            <h5>Coming Soon</h5>
                        </div>
                        <div class="tab-pane fade animate__animated animate__fadeInUp " id="v-pills-time1" role="tabpanel" aria-labelledby="v-pills-time1-tab" tabindex="0">
                            <div class="committee_head">
                                <h3>Timetables</h3>
                            </div>
                            <h5>Coming Soon</h5>
                        </div>
                        <div class="tab-pane fade animate__animated animate__fadeInUp " id="v-pills-academic1" role="tabpanel" aria-labelledby="v-pills-academic1-tab" tabindex="0">
                            <div class="committee_head">
                                <h3>Academic Calendar</h3>
                            </div>
                            <h5>Coming Soon</h5>
                        </div>
                        <div class="tab-pane fade animate__animated animate__fadeInUp " id="v-pills-lab1" role="tabpanel" aria-labelledby="v-pills-lab1-tab" tabindex="0">
                            <div class="committee_head">
                                <h3>Laboratories</h3>
                            </div>
                            <h5>Coming Soon</h5>
                        </div>
                        <div class="tab-pane fade animate__animated animate__fadeInUp " id="v-pills-faculty" role="tabpanel" aria-labelledby="v-pills-faculty-tab" tabindex="0">
                            <div class="committee_head">
                                <h3>Faculty</h3>
                            </div>
                            <h5>Coming Soon</h5>
                        </div>
                        <div class="tab-pane fade animate__animated animate__fadeInUp " id="v-pills-profile1" role="tabpanel" aria-labelledby="v-pills-profile1-tab" tabindex="0">
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
                                                                                                                <tr>
                                                            <td></td>
                                                            <td>Name</td>
                                                            
                                                            <td>Qualification</td>
														
                                                            <td>Designation</td>
                                                            
                                                            <td><img src="https://kakatiyasolutions.in/vageshwari_clg/assets/images/department/user-img.png" alt="faculty_img" width="100" loading="lazy" decoding="async" class="img-fluid faculty-img-sec"></td>
                                                        </tr>
                                                           
                                                                                                            </tbody></table>
                                    </div>
                                </div>
                        </div>
                        <div class="tab-pane fade animate__animated animate__fadeInUp " id="v-pills-event" role="tabpanel" aria-labelledby="v-pills-event-tab" tabindex="0">
                        <div class="peo">


<div class="committee_table">
<div class="committee_head">
<h3>Faculty Events</h3>
</div>
<div class="accordion" id="student-events">
<div class="accordion-item">
    <h2 class="accordion-header">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsestudentsevents" aria-expanded="true" aria-controls="collapsestudentsevents">
        Details of courses delivered by industrial experts during the academic year 2022-23
        </button>
    </h2>
    <div id="collapsestudentsevents" class="accordion-collapse collapse show" data-bs-parent="#student-events">
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
<td>Advances OnNonconventionalEnergy Sources</td>
<td>Add-On/Certificationprogram</td>
<td>11 
September2022
</td>
<td>N.Kiran Kumar
Asst. Professor, EEE

</td>
<td>94 </td>


</tr>
<tr>
<td></td>
<td>Power ElectronicsApplications inSmart Grids andElectric vehicles</td>
<td>Add-On/Certificationprogram</td>
<td>13 February2023
</td>
<td>K.Ramesh
Asst. Professor, EEE


</td>
<td>96 </td>


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
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsestudentseventsone" aria-expanded="false" aria-controls="collapsestudentseventsone">
            
Details of courses delivered by industrial experts during the academic year 2021-22 

        </button>
    </h2>
    <div id="collapsestudentseventsone" class="accordion-collapse collapse" data-bs-parent="#student-events">
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
<td>Smart EnergyDelivery Systems</td>
<td>Add-On/Certificationprogram</td>
<td>17 December2021</td>
<td>K.Ramesh
Asst. Professor, EEE

</td>
<td>98</td>


</tr>
<tr>
<td></td>
<td>Advances OnNonconventionalEnergy Sources</td>
<td>Add-On/Certificationprogram</td>
<td>15September2022 </td>
<td>N.Kiran Kumar
Asst. Professor, EEE


</td>
<td>99 </td>


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
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsestudentseventstwo" aria-expanded="false" aria-controls="collapsestudentseventstwo">
        Details of courses delivered by industrial experts during the academic year 2020-21 
        </button>
    </h2>
    <div id="collapsestudentseventstwo" class="accordion-collapse collapse" data-bs-parent="#student-events">
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
<td>Development ofSuperconductingrotating machines</td>
<td>Add on</td>
<td>29/12/2020</td>
<td>N.Kirankumar
Asst. Professor, EEE
D.Karuna
Asst. Professor, EEE


</td>
<td>97</td>


</tr>
<tr>
<td></td>
<td>Workshop onMATLAB</td>
<td>Add on</td>
<td>07/06/2021</td>
<td>M.Ramana Reddy
Asst. Professor, EEE
S.Praveen
Asst. Professor, EEE


</td>
<td>98 </td>


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
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
        data-bs-target="#collapsestudentseventsthree" aria-expanded="false" aria-controls="collapsestudentseventsthree">
        Events for Career Guidance of Students for the A.Y. 2022-23
        </button>
    </h2>
    <div id="collapsestudentseventsthree" class="accordion-collapse collapse" data-bs-parent="#student-events">
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
<td>One day Workshop on“Internet of Things”.</td>

<td>21-01-2023</td>
<td>Mr. R. Srinivas</td>
<td>118</td>


</tr>
<tr>
<td></td>
<td>One day Workshop on “SoftComputing Application inPower System”</td>

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
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
        data-bs-target="#collapsestudentseventsfour" aria-expanded="false" aria-controls="collapsestudentseventsfour">
        Events for Career Guidance of Students for the A.Y. 2021-22
        </button>
    </h2>
    <div id="collapsestudentseventsfour" class="accordion-collapse collapse" data-bs-parent="#student-events">
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
<td>One-day Workshop on“Operation and Maintenanceof Power System</td>

<td>23-11-2021 </td>
<td>Mr. J. Raju </td>
<td>32</td>


</tr>
<tr>
<td></td>
<td>One-day Workshop on “Roleof MATLAB in ImageProcessing” </td>

<td>26-11-2021 </td>
<td>Dr. U. Rajendar </td>
<td>117</td>


</tr>

<tr>
<td></td>
<td>One-day
Workshop on “Language andCommunication skills- Englishfor Career Development”
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
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
        data-bs-target="#collapsestudentseventsfive" aria-expanded="false" aria-controls="collapsestudentseventsfive">
       
Events for Career Guidance of Students for the A.Y. 2020-21

        </button>
    </h2>
    <div id="collapsestudentseventsfive" class="accordion-collapse collapse" data-bs-parent="#student-events">
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
                        <div class="tab-pane fade animate__animated animate__fadeInUp " id="v-pills-pub" role="tabpanel" aria-labelledby="v-pills-pub-tab" tabindex="0">
                            <div class="committee_head">
                                <h3>Publications</h3>
                            </div>
                            <div class="accordion" id="faculty_list">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefacultypublication" aria-expanded="true" aria-controls="collapsefacultypublication">
                                            Academic Year 2023-24
                                        </button>
                                    </h2>
                                    <div id="collapsefacultypublication" class="accordion-collapse collapse show" data-bs-parent="#faculty_list">
                                        <div class="accordion-body">
                                            <div class="committee_table">
                                                <div class="committee_head">
                                                    <h3>Academic Year 2023-24</h3>
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
                                                                    <td>Exploring the applications of Electric vehicles: A Comprehensive surevy</td>
                                                                    <td>Narsingoju Kiran Kumar,Kedam Ramesh,Mandati Ramana Reddy</td>
                                                                    <td>JETIR</td>
                                                                    <td>Aug 2024</td>
                                                                    <td>ISSN-2349-5162</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Performance Evaluation of Renewable Energy sources based grid connected system considering Unified Power Flow Controller</td>
                                                                    <td>Sripathi Mounika,Dr.Himanshu Sharma,Dr.A.Bala Krishna</td>
                                                                    <td>IOP conference series :</td>
                                                                    <td> Sep 2023</td>
                                                                    <td>Doi.10.1088/1755-1315/1285/1/0120089</td>
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
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefacultypublicationone" aria-expanded="false" aria-controls="collapsefacultypublicationone">
                                            Academic Year 2022-23
                                        </button>
                                    </h2>
                                    <div id="collapsefacultypublicationone" class="accordion-collapse collapse" data-bs-parent="#faculty_list">
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
                                                                    <td>A Unique 15-Level Annual Based Solar FED Cascaded Inverter Using PI, ANN, and FL Based Controllers to Improve Power Quality</td>
                                                                    <td>K.Ramesh,M.Ramana Reddy,Dr.K.Chandramouli</td>
                                                                    <td>Industrial Engineering Journal</td>
                                                                    <td>2022-2023</td>
                                                                    <td>0970-2555</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>An examination of the design and management of series resonant DC-DC converters in high voltage wind turbines, DC</td>
                                                                    <td>P.Sampath,M.Mamatha,S.Praveen</td>
                                                                    <td>Mukt Shabd Journal</td>
                                                                    <td>2022-2023</td>
                                                                    <td>2347-3150</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Investigating the Utilization of Multiport Converter in EV Car Design and Simulation for Effective grain and SIC device on power losses</td>
                                                                    <td>D.Karuna,S.Mounika,J.Raju</td>
                                                                    <td>Mukt Shabd Journal</td>
                                                                    <td>2022-2023</td>
                                                                    <td>2347-3150</td>
                                                                </tr>
                                                               <tr>
                                                                <td></td>
                                                                <td>An Incremental Method by Using Incremental Conductivity to Tracke the Maximum Power Through PV Systems</td>
                                                                <td>S.Mounika,Dr.K.Chandramouli,N.Kiran Kumar</td>
                                                                <td>Journal of Nonlinear Analysis and Optimization</td>
                                                                <td>Jun-23</td>
                                                                <td>1906-9685</td>
                                                               </tr>
                                                               <tr>
                                                                <td></td>
                                                                <td>Comparision of PI,Fuzzy and Sliding mode Control Techniques in Speed Control of Motor</td>
                                                                <td>Kedam.Ramesh,Dr.Rajender.Boini</td>
                                                                <td>International conference on contemporary challenges in management,educated,engineering and applied sciences</td>
                                                                <td>July 2022</td>
                                                                <td>ISBN: 978-93-91535-05-6</td>
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
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefaculty_publication_two" aria-expanded="false" aria-controls="collapsefaculty_publication_two">
                                            Academic Year 2021-22
                                        </button>
                                    </h2>
                                    <div id="collapsefaculty_publication_two" class="accordion-collapse collapse" data-bs-parent="#faculty_list">
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
                                                                    <td>An analytical study of power factor correction employing a CUK converter-fed  BLDC motor</td>
                                                                    <td>Dr.K.Chandramouli, K.Ramesh,M.Ramana Reddy</td>
                                                                    <td>Science, Technology and Development</td>
                                                                    <td>2021-2022</td>
                                                                    <td>ISSN-0950-0707</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>ANN Based UIPC Power Flow Analysis of Hybrid Micro Grids to Stabilize DC Connected Fluctuations</td>
                                                                    <td>J.Raju,P.Sampath,M.Mamatha</td>
                                                                    <td>Industrial Engineering Journal</td>
                                                                    <td>2021-2022 </td>
                                                                    <td>0970-2555</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>ADVANCED MODE: PV-Battery Based Microgrid Control And Power Management Scheme Emissioned, Using Both AC and DC Buses</td>
                                                                    <td>N.Kiran Kumar,Dr.K.Chandramouli,D.Karuna</td>
                                                                    <td>Industrial Engineering Journal</td>
                                                                    <td>2021-2022</td>
                                                                    <td>0970-2555</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>Optimization Techniques Assessed to Higher-Order Systems to Enhance System Performance with Minimum Faults.</td>
                                                                    <td>S.Praveen,S.Mounika,Dr.K.Chandramouli</td>
                                                                    <td>Journal of Nonlinear Analysis and Optimization</td>
                                                                    <td>2022</td>
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

                            </div>
                        </div>
                        <div class="tab-pane fade animate__animated animate__fadeInUp " id="v-pills-news" role="tabpanel" aria-labelledby="v-pills-news-tab" tabindex="0">
                            <div class="committee_head">
                                <h3>Newsletter</h3>
                            </div>
                            <h5>Coming Soon</h5>
                        </div>
                        <div class="tab-pane fade animate__animated animate__fadeInUp " id="v-pills-inno" role="tabpanel" aria-labelledby="v-pills-inno-tab" tabindex="0">
                            <div class="committee_head">
                                <h3>Faculty Innovations</h3>
                            </div>
                            <div class="accordion" id="student-events">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsestudentsevents" aria-expanded="true" aria-controls="collapsestudentsevents">
                                        Academic Year: 2023-24
                                        </button>
                                    </h2>
                                    <div id="collapsestudentsevents" class="accordion-collapse collapse show" data-bs-parent="#student-events">
                                        <div class="accordion-body">
                                            <div class="committee_table">
                                                <div class="committee_head">
                                                    <h3>Academic Year 2023-24</h3>
                                                </div>
                                                <div class="committee_table_inn">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered table-striped">
                                                            <thead>
                                                                <tr class="tableizer-firstrow">
                                                                    <th>Sl. No.</th>
                                                                    <th>Name of the Faculty</th>
                                                                    <th>Teaching Learning methodologies used</th>
                                                                    <th>Link of webpage/blog/ Google classroom/LMS etc.</th>
                                                                   
                                                                </tr>
                                                            </thead>
                                                         
                                                           <tbody>
    
    <tr>
        <td></td>
        <td>Mr.K.Ramesh</td>
        <td>Discussion</td>
        <td><a href="https://www.youtube.com/watch?v=1jz3Apb6Txs" target="_blank">View</a></td>
        
        
    </tr>
    <tr>
        <td></td>
        <td>Mr .S.Praveen</td>
        <td>Think pair share</td>
        <td><a href="https://www.youtube.com/watch?v=bpWiah5bi24" target="_blank">View</a></td>
      
        
    </tr>
    <tr>
        <td></td>
        <td>Mr.P.Sampath</td>
        <td>Discussion</td>
        <td><a href="https://youtu.be/o9k3NXhcOuM?si=67wyFVLo6r0WFIpt" target="_blank">View</a></td>
        
       
    </tr>

    <tr>
        <td></td>
        <td>Dr.K.Chandramouli</td>
        <td>Think pair share</td>
        <td><a href="https://www.youtube.com/watch?v=9kDGUSmoxlE" target="_blank">
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
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsestudentseventsone" aria-expanded="false" aria-controls="collapsestudentseventsone">
                                            Academic Year 2022-23
                                        </button>
                                    </h2>
                                    <div id="collapsestudentseventsone" class="accordion-collapse collapse" data-bs-parent="#student-events">
                                        <div class="accordion-body">

                                        <div class="committee_table">
                                                <div class="committee_head">
                                                    <h3>Academic Year: 2022-23</h3>
                                                </div>
                                                <div class="committee_table_inn">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered table-striped">
                                                            <thead>
                                                                <tr class="tableizer-firstrow">
                                                                    <th>Sl. No.</th>
                                                                    <th>Faculty Name</th>
                                                                    <th>Class-Year</th>
                                                                    <th>Course</th>
                                                                    <th>Topics</th>
                                                                    <th>Methodology/AID</th>
                                                                   
                                                                </tr>
                                                            </thead>
                                                         
                                                           <tbody>
    
    <tr>
        <td></td>
        <td>S. Praveen</td>
        <td>II-II</td>
        <td>Electrical Machines-II</td>
        <td>Synchronization of Alternators</td>
        <td>Experimental Demonstration of protection of alternators</td>
        
        
    </tr>
    <tr>
        <td></td>
        <td>Dr. K. Chandramouli</td>
        <td>III-I</td>
        <td>Power Electronics </td>
        <td>Different converter waveforms</td>
        <td>Slip Tests</td>
      
        
    </tr>
    <tr>
        <td></td>
        <td>J. Raju</td>
        <td>II-I</td>
        <td>Electro Magnetic Fields </td>
        <td>Coloumbs law</td>
        <td>Animation Video</td>
        
       
    </tr>

    <tr>
        <td></td>
        <td>S. Mounika</td>
        <td>II-I</td>
        <td>Electrical Circuit Analysis </td>
        <td>Circuit Theorems  </td>
        <td>Live Experimental demonstration</td>
        
        
    </tr>
    <tr>
        <td></td>
        <td>M. Ramana Reddy</td>
        <td>III-I</td>
        <td>High Voltage Engineering </td>
        <td>Measurement of Hig h voltages and currents</td>
        <td>Quiz </td>
       
       
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
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsestudentseventstwo" aria-expanded="false" aria-controls="collapsestudentseventstwo">
                                            Academic Year 2021-22
                                        </button>
                                    </h2>
                                    <div id="collapsestudentseventstwo" class="accordion-collapse collapse" data-bs-parent="#student-events">
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
                                                                    <th>Faculty Name</th>
                                                                    <th>Class-Year</th>
                                                                    <th>Course</th>
                                                                    <th>Topics</th>
                                                                    <th>Methodology/AID</th>
                                                                   
                                                                </tr>
                                                            </thead>
                                                         
                                                           <tbody>
    
    <tr>
        <td></td>
        <td>Dr. K. Chandramouli</td>
        <td>III-II</td>
        <td>PSD</td>
        <td>Speed Control methods of drives</td>
        <td>Discussion</td>
        
        
    </tr>
    <tr>
        <td></td>
        <td>M. Ramana Reddy</td>
        <td>III-II</td>
        <td>SGP</td>
        <td>Relays and circuit Breaker Operations</td>
        <td>Quiz</td>
      
        
    </tr>
    <tr>
        <td></td>
        <td>K. Ramesh</td>
        <td>II-II</td>
        <td>Control Systems</td>
        <td>Transfer function,
Time response, R-H Criteria Root Locus, Bode plot, Nyquist plot & state space analysis
</td>
        <td>Problem solving and exercises </td>
        
       
    </tr>

    <tr>
        <td></td>
        <td>J. Raju</td>
        <td>III-II</td>
        <td>Power System</td>
        <td>Economic Operation of power system</td>
        <td>Think pair share </td>
        
        
    </tr>
    <tr>
        <td></td>
        <td>B. Thirupathi</td>
        <td>III-II</td>
        <td>DSP</td>
        <td>DSP processors</td>
        <td>Think pair share </td>
       
       
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
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsestudentseventsfour"
                                         aria-expanded="false" aria-controls="collapsestudentseventsfour">
                                            Academic Year 2020-21
                                        </button>
                                    </h2>
                                    <div id="collapsestudentseventsfour" class="accordion-collapse collapse" data-bs-parent="#student-events">
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
                                                                    <th>Faculty Name</th>
                                                                    <th>Class-Year</th>
                                                                    <th>Course</th>
                                                                    <th>Topics</th>
                                                                    <th>Methodology/AID</th>
                                                                   
                                                                </tr>
                                                            </thead>
                                                         
                                                           <tbody>
    
    <tr>
        <td></td>
        <td>Dr. K. Chandramouli</td>
        <td>III-I</td>
        <td>Power Electronics</td>
        <td>Power Semiconductor devices</td>
        <td>Group Discussion</td>
        
        
    </tr>
    <tr>
        <td></td>
        <td>K. Ramesh</td>
        <td>II-I</td>
        <td>BEEE</td>
        <td>Electrical Circuit Theorems</td>
        <td>Problem Solving and Exercises</td>
      
        
    </tr>
    <tr>
        <td></td>
        <td>K. Ramesh</td>
        <td>II-II</td>
        <td>Control Systems</td>
        <td>Transfer function,
Time response, R-H Criteria Root Locus, Bode plot, Nyquist plot & state space analysis
</td>
        <td>Problem solving and exercises </td>
        
       
    </tr>

    <tr>
        <td></td>
        <td>J. Raju</td>
        <td>III-II</td>
        <td>Power System</td>
        <td>Economic Operation of power system</td>
        <td>Think pair share </td>
        
        
    </tr>
    <tr>
        <td></td>
        <td>B. Thirupathi</td>
        <td>III-II</td>
        <td>DSP</td>
        <td>DSP processors</td>
        <td>Think pair share </td>
       
       
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
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
                                        data-bs-target="#collapsestudentseventsthree" aria-expanded="false" aria-controls="collapsestudentseventsthree">
                                        EEE Faculty YouTube Lecture Videos
                                        </button>
                                    </h2>
                                    <div id="collapsestudentseventsthree" class="accordion-collapse collapse" data-bs-parent="#student-events">
                                        <div class="accordion-body">

                                        <div class="committee_table">
                                                <div class="committee_head">
                                                    <h3>EEE Faculty YouTube Lecture Videos</h3>
                                                </div>
                                                <div class="committee_table_inn">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered table-striped" id="no-counter-table">
                                                            <thead>
                                                                <tr class="tableizer-firstrow">
                                                                    <th>Sl. No.</th>
                                                                    <th colspan="2">EEE Faculty YouTube Lecture Videos</th>
                                                                  
                                                                   
                                                                </tr>
                                                            </thead>
                                                         
                                                           <tbody>
    
    <tr>
        <td rowspan="2">1</td>
        <td rowspan="2">Utilization of Electrical energy</td>
       
        <td><a href="https://www.youtube.com/watch?v=9kDGUSmoxlE" target="_blank">
        View</a></td>
        
        
    </tr>
    <tr>

    <td><a href="https://www.youtube.com/watch?v=o9k3NXhcOuM" target="_blank">
        View</a></td>
    </tr>
   
    <tr>
        <td>2</td>
        <td>Control Systems</td>
      
        <td><a href="https://www.youtube.com/watch?v=1jz3Apb6Txs" target="_blank">
        View</a></td>
        
       
    </tr>

    <tr>
        <td>3</td>
        <td>Electrical machines</td>
       
        <td><a href="https://youtu.be/bpWiah5bi24?si=PfKuxb5eBCG6Ibsv " target="_blank">
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
                        <div class="tab-pane fade animate__animated animate__fadeInUp " id="v-pills-student" role="tabpanel" aria-labelledby="v-pills-student-tab" tabindex="0">
                            <div class="committee_head">
                                <h3> Students</h3>
                            </div>
                            <h5>Coming Soon</h5>
                        </div>
                        <div class="tab-pane fade animate__animated animate__fadeInUp " id="v-pills-stu-event" role="tabpanel" aria-labelledby="v-pills-stu-event-tab" tabindex="0">
                            <div class="committee_head">
                                <h3>Student Events</h3>
                            </div>
                            <div class="accordion" id="student-events">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsestudentsevents" aria-expanded="true" aria-controls="collapsestudentsevents">
                                            Academic Year 2022-23
                                        </button>
                                    </h2>
                                    <div id="collapsestudentsevents" class="accordion-collapse collapse show" data-bs-parent="#student-events">
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
        <td>Advances On Nonconventional Energy Sources</td>
        <td>Add- On/Certification program</td>
        <td>11th<br>September 2022</td>
        <td>N.Kiran Kumar Asst. Professor, EEE</td>
        <td>120</td>
    </tr>
    <tr>
        <td></td>
        <td>Power Electronics Applications in Smart Grids and Electric vehicles</td>
        <td>Add- On/Certification program</td>
        <td>13th  February 2023</td>
        <td>K.Ramesh Asst. Professor, EEE</td>
        <td>120</td>
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
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsestudentseventsone" aria-expanded="false" aria-controls="collapsestudentseventsone">
                                            Academic Year 2021-22
                                        </button>
                                    </h2>
                                    <div id="collapsestudentseventsone" class="accordion-collapse collapse" data-bs-parent="#student-events">
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
        <td>Smart Energy Delivery Systems</td>
        <td>Add- On/Certification program</td>
        <td>17th  December 2021</td>
        <td>K.Ramesh Asst. Professor, EEE</td>
        <td>120</td>
    </tr>
    <tr>
        <td></td>
        <td>Advances On Nonconventional Energy Sources</td>
        <td>Add- On/Certification program</td>
        <td>15thSeptember 2022</td>
        <td>N.Kiran Kumar Asst. Professor, EEE</td>
        <td>120</td>
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
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsestudentseventstwo" aria-expanded="false" aria-controls="collapsestudentseventstwo">
                                            Academic Year 2020-21
                                        </button>
                                    </h2>
                                    <div id="collapsestudentseventstwo" class="accordion-collapse collapse" data-bs-parent="#student-events">
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
        <td>Development of Superconducting rotating machines</td>
        <td>Add on</td>
        <td>29/12/2020</td>
        <td>N.Kirankumar Asst. Professor, EEE D.Karuna  Asst. Professor, EEE</td>
        <td>60</td>
    </tr>
    <tr>
        <td></td>
        <td>Workshop on MATLAB</td>
        <td>Add on</td>
        <td>07/06/2021</td>
        <td>M.Ramana Reddy Asst. Professor, EEE S.Praveen Asst. Professor, EEE</td>
        <td>60</td>
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
                        <div class="tab-pane fade animate__animated animate__fadeInUp " id="v-pills-res" role="tabpanel" aria-labelledby="v-pills-res-tab" tabindex="0">
                            <div class="committee_head">
                                <h3>Results</h3>
                            </div>
                            <h5>Coming Soon</h5>
                        </div>
                        <div class="tab-pane fade animate__animated animate__fadeInUp " id="v-pills-place" role="tabpanel" aria-labelledby="v-pills-place-tab" tabindex="0">
                            <div class="accordion" id="accordionExample_one">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#list_sec_one" aria-expanded="true" aria-controls="list_sec_one">
                                            2022-23
                                        </button>
                                    </h2>
                                    <div id="list_sec_one" class="accordion-collapse collapse show" data-bs-parent="#accordionExample_one">
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
                                                                    <td>GOUTHAMI POTHARAVENA</td>
                                                                    <td>19S41A0224</td>
                                                                    <td>TCS</td>
                                                                    <td>vgse/2023/EEE/001</td>
                                                                   
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>BAKKI ABHILASH</td>
                                                                    <td>20S45A0204</td>
                                                                    <td>TECHNOLOGIES</td>
                                                                    <td>vgse/2023/EEE/002</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>BOJJAM SHANMUGAM</td>
                                                                    <td>19S41A0206</td>
                                                                    <td>VITA TECHNOLOGIES</td>
                                                                    <td>vgse/2023/EEE/003</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>CHIMMANI HARISH  </td>
                                                                    <td>20S45A0220</td>
                                                                    <td>VITA TECHNOLOGIES</td>
                                                                    <td>vgse/2023/EEE/005</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>VODNALA SAIKUMAR</td>
                                                                    <td>20S45A0298</td>
                                                                    <td>Ethon Health care solutions</td>
                                                                    <td>vgse/2023/EEE/006</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>PARAKALA SANDHYA</td>
                                                                    <td>20S45A0276</td>
                                                                    <td>Ethon Health care solutions</td>
                                                                    <td>vgse/2023/EEE/007</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>MAKKALA KRISHNARAJ</td>
                                                                    <td>20S45A0263</td>
                                                                    <td>Ethon Health care solutions</td>
                                                                    <td>vgse/2023/EEE/008</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>MOHAMMAD SHARMINA</td>
                                                                    <td>20S45A0265</td>
                                                                    <td>Ethon Health care solutions</td>
                                                                    <td>vgse/2023/EEE/009</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>KOKKU SANDEEP</td>
                                                                    <td>20S45A0255</td>
                                                                    <td>Ethon Health care solutions</td>
                                                                    <td>vgse/2023/EEE/010</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>GANDLA MALLIKARJUN</td>
                                                                    <td>20S45A0238</td>
                                                                    <td>Ethon Health care solutions</td>
                                                                    <td>vgse/2023/EEE/011</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>SHERU ANITHA</td>
                                                                    <td>20S45A0289</td>
                                                                    <td>Ethon Health care solutions</td>
                                                                    <td>vgse/2023/EEE/012</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>ANANTHOJU SHIVANI</td>
                                                                    <td>19S41A0203</td>
                                                                    <td>AMAZON</td>
                                                                    <td>vgse/2023/EEE/013</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>BUDDULA RENUKA</td>
                                                                    <td>19S41A0207</td>
                                                                    <td>AMAZON</td>
                                                                    <td>vgse/2023/EEE/014</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>ELLANDULA SARASWATHI</td>
                                                                    <td>19S41A0210</td>
                                                                    <td>AMAZON</td>
                                                                    <td>vgse/2023/EEE/015</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>GOKA CHANDANA</td>
                                                                    <td>19S41A0213</td>
                                                                    <td>AMAZON</td>
                                                                    <td>vgse/2023/EEE/016</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>KOTHAKONDA ANUSHA </td>
                                                                    <td>19S41A0217</td>
                                                                    <td>AMAZON</td>
                                                                    <td>vgse/2023/EEE/017</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>MARTHA CHANDANA</td>
                                                                    <td>19S41A0219</td>
                                                                    <td>CAPGEMINI</td>
                                                                    <td>vgse/2023/EEE/018</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>NAROJU ANUHYA</td>
                                                                    <td>19S41A0222</td>
                                                                    <td>CAPGEMINI</td>
                                                                    <td>vgse/2023/EEE/019</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>SHAIK AYUB ALI </td>
                                                                    <td>19S41A0227</td>
                                                                    <td>CAPGEMINI</td>
                                                                    <td>vgse/2023/EEE/020</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>SIDDI MANI CHANDANA</td>
                                                                    <td>19S41A0229</td>
                                                                    <td>CAPGEMINI</td>
                                                                    <td>vgse/2023/EEE/021</td>
                                                                </tr>
                                                               

                                                                <tr>
                                                                    <td></td>
                                                                    <td>ADEPU EKNATH</td>
                                                                    <td>20S45A0201</td>
                                                                    <td>CAPGEMINI</td>
                                                                    <td>vgse/2023/EEE/022</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>BALASANI PAVAN KUMAR</td>
                                                                    <td>20S45A0205</td>
                                                                    <td>GENPACT</td>
                                                                    <td>vgse/2023/EEE/023</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>BARIGELA VINAY</td>
                                                                    <td>20S45A0207</td>
                                                                    <td>GENPACT</td>
                                                                    <td>vgse/2023/EEE/024</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>BEJUGAM SAHITHI</td>
                                                                    <td>20S45A0209</td>
                                                                    <td>GENPACT</td>
                                                                    <td>vgse/2023/EEE/025</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>BOMMIDI VISHNU TEJA</td>
                                                                    <td>20S45A0214</td>
                                                                    <td>GENPACT</td>
                                                                    <td>vgse/2023/EEE/026</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>CHIKATLA SNEHA</td>
                                                                    <td>20S45A0218</td>
                                                                    <td>GENPACT</td>
                                                                    <td>vgse/2023/EEE/027</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>CHINTHAPOOLA SAIKUMAR</td>
                                                                    <td>20S45A0221</td>
                                                                    <td>NJOY</td>
                                                                    <td>vgse/2023/EEE/028</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>DEVASANI SAI THARUN</td>
                                                                    <td>20S45A0228</td>
                                                                    <td>NJOY</td>
                                                                    <td>vgse/2023/EEE/029</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>ERAVELLI RAJKUMAR</td>
                                                                    <td>20S45A0234</td>
                                                                    <td>NJOY</td>
                                                                    <td>vgse/2023/EEE/030</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>GADAVENA CHARANVAS</td>
                                                                    <td>20S45A0236</td>
                                                                    <td>NJOY</td>
                                                                    <td>vgse/2023/EEE/031</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>GOGULAKONDA SAI SHIVA</td>
                                                                    <td>20S45A0241</td>
                                                                    <td>NJOY</td>
                                                                    <td>vgse/2023/EEE/032</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>GUVVA AJAY</td>
                                                                    <td>20S45A0244</td>
                                                                    <td>NJOY</td>
                                                                    <td>vgse/2023/EEE/033</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>JANAGAM SRIKANTH</td>
                                                                    <td>20S45A0246</td>
                                                                    <td>NJOY</td>
                                                                    <td>vgse/2023/EEE/034</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>KADARI VENU</td>
                                                                    <td>20S45A0249</td>
                                                                    <td>NJOY</td>
                                                                    <td>vgse/2023/EEE/035</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>KASTURI ANUSHA</td>
                                                                    <td>20S45A0253</td>
                                                                    <td>NJOY</td>
                                                                    <td>vgse/2023/EEE/036</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>KOLUPULA AKHIL</td>
                                                                    <td>20S45A0256</td>
                                                                    <td>NJOY</td>
                                                                    <td>vgse/2023/EEE/037</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>MADISHETTY SRUJAN</td>
                                                                    <td>20S45A0262</td>
                                                                    <td>SLV</td>
                                                                    <td>vgse/2023/EEE/038</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>MOHAMMED SIDDIQ</td>
                                                                    <td>20S45A0266</td>
                                                                    <td>SLV</td>
                                                                    <td>vgse/2023/EEE/039</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>PADALA SHARATH CHANDRA</td>
                                                                    <td>20S45A0271</td>
                                                                    <td>SLV</td>
                                                                    <td>vgse/2023/EEE/040</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>PANJA BHARGAVI</td>
                                                                    <td>20S45A0274</td>
                                                                    <td>SLV</td>
                                                                    <td>vgse/2023/EEE/041</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>PONAGANTI VISHNUVARDHAN</td>
                                                                    <td>20S45A0281</td>
                                                                    <td>SLV</td>
                                                                    <td>vgse/2023/EEE/042</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>POTHARAVENI SHRAVANI</td>
                                                                    <td>20S45A0284</td>
                                                                    <td>SLV</td>
                                                                    <td>vgse/2023/EEE/043</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>RATE KANAKALAXMI</td>
                                                                    <td>20S45A0287</td>
                                                                    <td>SLV</td>
                                                                    <td>vgse/2023/EEE/044</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>SULTHAN SHIVA SAI</td>
                                                                    <td>20S45A0290</td>
                                                                    <td>SLV</td>
                                                                    <td>vgse/2023/EEE/045</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>THOUTU PAVAN</td>
                                                                    <td>20S45A0296</td>
                                                                    <td>SLV</td>
                                                                    <td>vgse/2023/EEE/046</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>YAMSANI SHIVA RAMA KRISHNA</td>
                                                                    <td>20S45A02A0</td>
                                                                    <td>SLV</td>
                                                                    <td>vgse/2023/EEE/047</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>GANTA RAKESH </td>
                                                                    <td>18S41A0226</td>
                                                                    <td>VITA TECHNOLOGIES</td>
                                                                    <td>vgse/2023/EEE/004</td>
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
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#list_sec_two" aria-expanded="false" aria-controls="list_sec_two">
                                            2021-22
                                        </button>
                                    </h2>
                                    <div id="list_sec_two" class="accordion-collapse collapse" data-bs-parent="#accordionExample_one">
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
                                                                    <td>BANDI PAVANI</td>
                                                                    <td>18S41A0205</td>
                                                                    <td>Wipro</td>
                                                                    <td>vgse/2022/EEE/001</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>B.SINDHUJA</td>
                                                                    <td>18S41A0208</td>
                                                                    <td>Wipro</td>
                                                                    <td>vgse/2022/EEE/002</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>BOJANAPALLI AKHILA</td>
                                                                    <td>18S41A0209</td>
                                                                    <td>TCS</td>
                                                                    <td>vgse/2022/EEE/003</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>BONAGIRI PRASHANTH	</td>
                                                                    <td>18S41A0210</td>
                                                                    <td>Infosys,wipro	</td>
                                                                    <td>vgse/2022/EEE/004</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>CHEPLURI VAMSHI KRISHNA	</td>
                                                                    <td>18S41A0214</td>
                                                                    <td>SONATA,wipro</td>
                                                                    <td>vgse/2022/EEE/005</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>DANAVENI RAVALI	</td>
                                                                    <td>18S41A0216</td>
                                                                    <td>Wipro	</td>
                                                                    <td>vgse/2022/EEE/006</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>DARAVENI MEGHANA</td>
                                                                    <td>18S41A0217</td>
                                                                    <td>Wipro	</td>
                                                                    <td>vgse/2022/EEE/007</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>ESLAVATH KALYANI	</td>
                                                                    <td>18S41A0224</td>
                                                                    <td>Infosys,ntt data</td>
                                                                    <td>vgse/2022/EEE/008</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>KOMMU HARISH	</td>
                                                                    <td>18S41A0234</td>
                                                                    <td>Wipro</td>
                                                                    <td>vgse/2022/EEE/009</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>LAKKU SANDHYA</td>
                                                                    <td>18S41A0238</td>
                                                                    <td>Wipro</td>
                                                                    <td>vgse/2022/EEE/010</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>MADUPALLI SANNIHITHA	</td>
                                                                    <td>18S41A0241</td>
                                                                    <td>Minfy,pacteraedge,sonata</td>
                                                                    <td>vgse/2022/EEE/011</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>MAHAMMAD SHAHEDA</td>
                                                                    <td>18S41A0242</td>
                                                                    <td>MPHASIS</td>
                                                                    <td>vgse/2022/EEE/012</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>MEDI KRITHIKA	</td>
                                                                    <td>18S41A0245</td>
                                                                    <td>SONATA</td>
                                                                    <td>vgse/2022/EEE/013</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>MEKALA SHIVANI</td>
                                                                    <td>18S41A0246</td>
                                                                    <td>Wipro</td>
                                                                    <td>vgse/2022/EEE/014</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>METHUKU MADHUSRI</td>
                                                                    <td>18S41A0247</td>
                                                                    <td>Minfy</td>
                                                                    <td>vgse/2022/EEE/015</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>MOHAMMAD SADAF 	</td>
                                                                    <td>18S41A0249</td>
                                                                    <td>Wipro	</td>
                                                                    <td>vgse/2022/EEE/016</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>ODELA SAI KUMAR	</td>
                                                                    <td>18S41A0254</td>
                                                                    <td>Pactera Edge</td>
                                                                    <td>vgse/2022/EEE/017</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>PITTALA MANASA</td>
                                                                    <td>18S41A0255</td>
                                                                    <td>MPHASIS</td>
                                                                    <td>vgse/2022/EEE/018</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>P.SUPRIYA	</td>
                                                                    <td>18S41A0257</td>
                                                                    <td>	Wipro	</td>
                                                                    <td>vgse/2022/EEE/019</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>SARDAR ARVINDER SINGH	</td>
                                                                    <td>18S41A0260</td>
                                                                    <td>TCS</td>
                                                                    <td>vgse/2022/EEE/020</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>SIDDAM YAMUNA	</td>
                                                                    <td>18S41A0264</td>
                                                                    <td>Wipro</td>
                                                                    <td>vgse/2022/EEE/021</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>SUNKI SINDHU</td>
                                                                    <td>18S41A0268</td>
                                                                    <td>MPHASIS,TCS</td>
                                                                    <td>vgse/2022/EEE/022</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>KOLA VAISHNAVI</td>
                                                                    <td>18S41A0271</td>
                                                                    <td>Wipro</td>
                                                                    <td>vgse/2022/EEE/023</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>VARUKOLU SAHITHYA</td>
                                                                    <td>18S41A0273</td>
                                                                    <td>Wipro</td>
                                                                    <td>vgse/2022/EEE/024</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>VEMULA CHANDANA</td>
                                                                    <td>18S41A0275</td>
                                                                    <td>Infosys,WIPRO</td>
                                                                    <td>vgse/2022/EEE/025</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>ANASURI ANUDEEP</td>
                                                                    <td>19S45A0203</td>
                                                                    <td>Wipro</td>
                                                                    <td>vgse/2022/EEE/026</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>BHIMANATHINI PRANATHI</td>
                                                                    <td>19S45A0206</td>
                                                                    <td>Wipro</td>
                                                                    <td>vgse/2022/EEE/027</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>CHERALA ARAVIND</td>
                                                                    <td>19S45A0207</td>
                                                                    <td>Infosys,sonata,wipro</td>
                                                                    <td>vgse/2022/EEE/028</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>DASARI SAIKRISHNA</td>
                                                                    <td>19S45A0210</td>
                                                                    <td>Infosys,sonata,wipro</td>
                                                                    <td>vgse/2022/EEE/029</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>DEBBATI RAGHU</td>
                                                                    <td>19S45A0211</td>
                                                                    <td>Wipro</td>
                                                                    <td>vgse/2022/EEE/030</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>GANDU VAMSHI</td>
                                                                    <td>19S45A0214</td>
                                                                    <td>Wipro</td>
                                                                    <td>vgse/2022/EEE/031</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>GUDA SAI KIRAN</td>
                                                                    <td>19S45A0218</td>
                                                                    <td>Pactera Edge</td>
                                                                    <td>vgse/2022/EEE/032</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>JOGINIPELLI UDAINI</td>
                                                                    <td>19S45A0221</td>
                                                                    <td>Infosys,tcs</td>
                                                                    <td>vgse/2022/EEE/033</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>KONTU NAVYA</td>
                                                                    <td>19S45A0223</td>
                                                                    <td>TCS,Wipro</td>
                                                                    <td>vgse/2022/EEE/034</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>KUNCHAM CHAITANYA</td>
                                                                    <td>19S45A0224</td>
                                                                    <td>Pactera Edge</td>
                                                                    <td>vgse/2022/EEE/035</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>METTA KALYAN</td>
                                                                    <td>19S45A0228</td>
                                                                    <td>Wipro</td>
                                                                    <td>vgse/2022/EEE/036</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>MITTAPALLY PRASHANTH</td>
                                                                    <td>19S45A0229</td>
                                                                    <td>Wipro</td>
                                                                    <td>vgse/2022/EEE/037</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>PISKA MANIKANTH</td>
                                                                    <td>19S45A0237</td>
                                                                    <td>SONATA</td>
                                                                    <td>vgse/2022/EEE/038</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>RUBEENA YASMIN</td>
                                                                    <td>19S45A0240</td>
                                                                    <td>Wipro</td>
                                                                    <td>vgse/2022/EEE/039</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>SANKENAPALLY DEEPAK</td>
                                                                    <td>19S45A0242</td>
                                                                    <td>Pactera Edge</td>
                                                                    <td>vgse/2022/EEE/040</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>THADAKA KALYAN</td>
                                                                    <td>19S45A0244</td>
                                                                    <td>Wipro</td>
                                                                    <td>vgse/2022/EEE/041</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>THUMMA ARAVIND</td>
                                                                    <td>19S45A0246</td>
                                                                    <td>Wipro</td>
                                                                    <td>vgse/2022/EEE/042</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>ANUMANDLA SUKANYA</td>
                                                                    <td>18S41A0202</td>
                                                                    <td>AMAZON</td>
                                                                    <td>vgse/2022/EEE/043</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>CHENNOJU KAVYANJALI</td>
                                                                    <td>18S41A0213</td>
                                                                    <td>AMAZON</td>
                                                                    <td>vgse/2022/EEE/044</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>DRAKSHAPELLI KAVITHA </td>
                                                                    <td>18S41A0219</td>
                                                                    <td>AMAZON</td>
                                                                    <td>vgse/2022/EEE/045</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>ENAGANDULA KEZIYA</td>
                                                                    <td>18S41A0221</td>
                                                                    <td>AMAZON</td>
                                                                    <td>vgse/2022/EEE/046</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>GADDAM SHIVA</td>
                                                                    <td>18S41A0225</td>
                                                                    <td>EXCERS</td>
                                                                    <td>vgse/2022/EEE/047</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>JADHAV SAVITHA</td>
                                                                    <td>18S41A0228</td>
                                                                    <td>EXCERS</td>
                                                                    <td>vgse/2022/EEE/048</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>JUNNUTHULA VIKIN REDDY</td>
                                                                    <td>18S41A0230</td>
                                                                    <td>HCL</td>
                                                                    <td>vgse/2022/EEE/049</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>KODAM PRIYANKA</td>
                                                                    <td>18S41A0233</td>
                                                                    <td>HCL</td>
                                                                    <td>vgse/2022/EEE/050</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>LONKOJU SAITHEJA</td>
                                                                    <td>18S41A0239</td>
                                                                    <td>HCL</td>
                                                                    <td>vgse/2022/EEE/051</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>AVUNOORI RAKESH KUMAR</td>
                                                                    <td>19S45A0204</td>
                                                                    <td>HCL</td>
                                                                    <td>vgse/2022/EEE/052</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>DARAVENI RUCHITHA</td>
                                                                    <td>19S45A0209</td>
                                                                    <td>HCL</td>
                                                                    <td>vgse/2022/EEE/053</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>KOLLURI SHANTHI RAJ</td>
                                                                    <td>19S45A0222</td>
                                                                    <td>LETSGETTIN</td>
                                                                    <td>vgse/2022/EEE/054</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>MYAKABOINA ANIL</td>
                                                                    <td>18S41A0251</td>
                                                                    <td>LETSGETTIN</td>
                                                                    <td>vgse/2022/EEE/055</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>RANGU SRIVIDYA</td>
                                                                    <td>18S41A0258</td>
                                                                    <td>LETSGETTIN</td>
                                                                    <td>vgse/2022/EEE/056</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>SIDDAM SRUTHI</td>
                                                                    <td>18S41A0263</td>
                                                                    <td>LETSGETTIN</td>
                                                                    <td>vgse/2022/EEE/057</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>VEMULA SAIKIRAN</td>
                                                                    <td>18S41A0276</td>
                                                                    <td>LETSGETTIN</td>
                                                                    <td>vgse/2022/EEE/058</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>MOHAMMAD NIYAMATHULLA</td>
                                                                    <td>19S45A0230</td>
                                                                    <td>LETSGETTIN</td>
                                                                    <td>vgse/2022/EEE/059</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>NALLA RAJKUMAR</td>
                                                                    <td>19S45A0234</td>
                                                                    <td>LETSGETTIN</td>
                                                                    <td>vgse/2022/EEE/060</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>RAPAKA ADITHYA</td>
                                                                    <td>19S45A0239</td>
                                                                    <td>LETSGETTIN</td>
                                                                    <td>vgse/2022/EEE/061</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>SRIRAM THARUN</td>
                                                                    <td>19S45A0243</td>
                                                                    <td>LETSGETTIN</td>
                                                                    <td>vgse/2022/EEE/062</td>
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
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#list_sec_three" aria-expanded="false" aria-controls="list_sec_three">
                                            2020-21
                                        </button>
                                    </h2>
                                    <div id="list_sec_three" class="accordion-collapse collapse" data-bs-parent="#accordionExample_one">
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
                                                                    <td>BANDARU AJAY KUMAR</td>
                                                                    <td>17S41A0202</td>
                                                                    <td>	TCS	</td>
                                                                    <td>vgse/2021/EEE/002</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>CHOUTAPELLI VENNELA</td>
                                                                    <td>17S41A0208</td>
                                                                    <td>RIALTO</td>
                                                                    <td>vgse/2021/EEE/003</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>DAIDA ANJALI</td>
                                                                    <td>17S41A0209</td>
                                                                    <td>RIALTO</td>
                                                                    <td>vgse/2021/EEE/004</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>GODUGU KOTI</td>
                                                                    <td>17S41A0212</td>
                                                                    <td>peopleLink unified communications Pvt .Ltd </td>
                                                                    <td>vgse/2021/EEE/005</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>GUDEPU NITHIN</td>
                                                                    <td>17S41A0213</td>
                                                                    <td>veta technologies</td>
                                                                    <td>vgse/2021/EEE/006</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>JINDAM LAHARI</td>
                                                                    <td>17S41A0215</td>
                                                                    <td>RIALTO</td>
                                                                    <td>vgse/2021/EEE/007</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>JUPAKA SAINIHARIKA</td>
                                                                    <td>17S41A0218</td>
                                                                    <td>SAVANTIS SOLUTION</td>
                                                                    <td>vgse/2021/EEE/008</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>KANAVENA MAMATHA</td>
                                                                    <td>17S41A0220</td>
                                                                    <td>veta technologies</td>
                                                                    <td>vgse/2021/EEE/009</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>KATHI SWETHA</td>
                                                                    <td>17S41A0221</td>
                                                                    <td>RIALTO</td>
                                                                    <td>vgse/2021/EEE/010</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>ADLA KAVYA</td>
                                                                    <td>18S45A0201</td>
                                                                    <td>RIALTO</td>
                                                                    <td>vgse/2021/EEE/011</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>CHALLA RAJU</td>
                                                                    <td>18S45A0210</td>
                                                                    <td>TCS</td>
                                                                    <td>vgse/2021/EEE/012</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>GADDI RAVITEJA</td>
                                                                    <td>18S45A0215</td>
                                                                    <td>TCS	</td>
                                                                    <td>vgse/2021/EEE/013</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>GANDLA RAJESH</td>
                                                                    <td>18S45A0216</td>
                                                                    <td>TCS</td>
                                                                    <td>vgse/2021/EEE/014</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>GOVIKARI SHIVA SAI</td>
                                                                    <td>18S45A0220</td>
                                                                    <td>TCS</td>
                                                                    <td>vgse/2021/EEE/015</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>KONTU SHIVANI</td>
                                                                    <td>17S41A0225</td>
                                                                    <td>SAVANTIS SOLUTION</td>
                                                                    <td>vgse/2021/EEE/016</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>MANDALA AKSHAYA	</td>
                                                                    <td>17S41A0226</td>
                                                                    <td>RIALTO</td>
                                                                    <td>vgse/2021/EEE/017</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>MARAVENI ANIL</td>
                                                                    <td>17S41A0227</td>
                                                                    <td>TCS</td>
                                                                    <td>vgse/2021/EEE/018</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>MASRATH TABASSUM</td>
                                                                    <td>17S41A0229</td>
                                                                    <td>SAVANTIS SOLUTION</td>
                                                                    <td>vgse/2021/EEE/019</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>MOGILIPALEM SOUMYA</td>
                                                                    <td>17S41A0231</td>
                                                                    <td>RIALTO	</td>
                                                                    <td>vgse/2021/EEE/020</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>NALLA RANJITH KUMAR</td>
                                                                    <td>17S41A0233</td>
                                                                    <td>peopleLink unified communications Pvt .Ltd 	</td>
                                                                    <td>vgse/2021/EEE/021</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>NERELLA AKHILA</td>
                                                                    <td>17S41A0234</td>
                                                                    <td>RIALTO</td>
                                                                    <td>vgse/2021/EEE/022</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>PITTALA ANUSHA</td>
                                                                    <td>17S41A0238</td>
                                                                    <td>INFOSYS</td>
                                                                    <td>vgse/2021/EEE/023</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>PONNALA VENKATESH</td>
                                                                    <td>17S41A0239</td>
                                                                    <td>TCS	</td>
                                                                    <td>vgse/2021/EEE/024</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>SIRIPURAM UMESH</td>
                                                                    <td>17S41A0241</td>
                                                                    <td>veta technologies</td>
                                                                    <td>vgse/2021/EEE/025</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>UDUTALA KEERTHANA</td>
                                                                    <td>17S41A0245</td>
                                                                    <td>RIALTO</td>
                                                                    <td>vgse/2021/EEE/026</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>OGGE PRAVALIKA</td>
                                                                    <td>18S45A0236</td>
                                                                    <td>TCS</td>
                                                                    <td>vgse/2021/EEE/028</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>PALAMAKULA RUCHITHA</td>
                                                                    <td>18S45A0237</td>
                                                                    <td>RIALTO</td>
                                                                    <td>vgse/2021/EEE/029</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>PALLERLA AVINASHGOUD</td>
                                                                    <td>18S45A0238</td>
                                                                    <td>veta technologies</td>
                                                                    <td>vgse/2021/EEE/030</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>PEDDAPELLI BHARATHWAJ</td>
                                                                    <td>18S45A0241</td>
                                                                    <td>vihawk teck solutions pvt ltd </td>
                                                                    <td>vgse/2021/EEE/031</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>PEDDI RAJU</td>
                                                                    <td>18S45A0242</td>
                                                                    <td>INFOSYS</td>
                                                                    <td>vgse/2021/EEE/032</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>POTHU HARITHA</td>
                                                                    <td>18S45A0245</td>
                                                                    <td>RIALTO </td>
                                                                    <td>vgse/2021/EEE/033</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>POTHU SHIRISHA</td>
                                                                    <td>18S45A0247</td>
                                                                    <td>veta technologies</td>
                                                                    <td>vgse/2021/EEE/034</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>PUNNAM VARTHIKA</td>
                                                                    <td>18S45A0249</td>
                                                                    <td>RIALTO</td>
                                                                    <td>vgse/2021/EEE/035</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>SANDIRI RASHMITHA</td>
                                                                    <td>18S45A0252</td>
                                                                    <td>OLA ELECTRONICS</td>
                                                                    <td>vgse/2021/EEE/036</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>SUNAKARI SANKEERTHANA</td>
                                                                    <td>18S45A0255</td>
                                                                    <td>veta technologies</td>
                                                                    <td>vgse/2021/EEE/037</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>TEKAM VIJAYALAXMI</td>
                                                                    <td>18S45A0256</td>
                                                                    <td>vihawk teck solutions pvt ltd </td>
                                                                    <td>vgse/2021/EEE/038</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>VEERLA SAI KUMAR</td>
                                                                    <td>18S45A0260</td>
                                                                    <td>	veta technologies	</td>
                                                                    <td>vgse/2021/EEE/039</td>
                                                                </tr>

                                                                <!-- <tr>
                                                                    <td></td>
                                                                    <td>KOYYADA SONY	</td>
                                                                    <td>18S45A0427</td>
                                                                    <td>vihawk teck solutions pvt ltd </td>
                                                                    <td>vgse/2021/ECE/038</td>
                                                                </tr> -->
                                                                <tr>
                                                                    <td></td>
                                                                    <td>VEMULA VIDYA</td>
                                                                    <td>18S45A0262</td>
                                                                    <td>RIALTO	</td>
                                                                    <td>vgse/2021/EEE/040</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>BUSA VIJAY</td>
                                                                    <td>17S41A0210</td>
                                                                    <td>TCS</td>
                                                                    <td>vgse/2021/EEE/027</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>KOLIPAKA VENKATESH </td>
                                                                    <td>15S41A0214</td>
                                                                    <td>vihawk teck solutions pvt ltd </td>
                                                                    <td>vgse/2021/EEE/001</td>
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
                        <div class="tab-pane fade animate__animated animate__fadeInUp " id="v-pills-hod" role="tabpanel" aria-labelledby="v-pills-hod-tab" tabindex="0">
                            <div class="committee_head">
                                <h3>Contact HOD</h3>
                            </div>
                            <div class="row hod-start">
                                <div class="col-lg-4">
                                   <div class="hod-img">
                                   <img src="<?php echo $base_url; ?>/assets/images/eee/K_Chandramouli.webp" alt="contact_hod_img" class="img-fluid" loading="lazy" decoding="async">
                            
                                 <div class="cse-hod">
                                    <h4>Dr. K. Chandramouli</h4>
                                    <p>HOD & Professor</p>
                                   
                                 </div>
                                
</div>
                                </div>
                                <div class="col-lg-8">
                                    <div id="contact-info" >
                                        <p>Welcome to the department of Electrical and Electronic Engineering at Vaageswari College of Engineering, Karimnagar, 
                                            Telangana. The department works with the objective of addressing critical challenges faced by the Industry, society 
                                            and the academia. Perhaps even more important is our unceasing commitment to our students, helping them to learn,
                                            grow, develop, and achieve their goals in their pursuit to excel in their professional career.</p>
                                            <p> Department of Electrical and Electronic Engineering is one of the largest department in Vaageswari College of Engineering with
                                                 nearly 18 faculty members and more than 500 undergraduate and master’s students. The department’s graduate programs continue 
                                                 to draw from a very strong application pool. The department was established in the year 2005 and since its inception 
                                                 the department has evolved from offering only undergraduate courses to offer post graduate in key areas of electrical and Electronic
                                                  engineering.</p>
                                                  <p></p></p>

                                                 <div class="cse-hod2">
                                    <h4>Contact</h4>
                                    
                                    <p><b>Mobile Number:</b>9848744424</p>
                                    <p><b>Email:</b>hod.eee@vgsek.ac.in</p>
                                 </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade animate__animated animate__fadeInUp " id="v-pills-co" role="tabpanel" aria-labelledby="v-pills-co-tab" tabindex="0">
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


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
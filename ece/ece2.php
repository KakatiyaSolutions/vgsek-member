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

                                        <button class="nav-link deprmnt_btn_act deprmnt_btn_act" id="v-pills-syllabus1-tab" data-bs-toggle="pill" data-bs-target="#v-pills-syllabus1" type="button" role="tab"
                                            aria-controls="v-pills-syllabus1" aria-selected="false">Syllabus</button>
                                        <button class="nav-link deprmnt_btn_act deprmnt_btn_act" id="v-pills-time1-tab" data-bs-toggle="pill" data-bs-target="#v-pills-time1" type="button" role="tab"
                                            aria-controls="v-pills-time1" aria-selected="false">Timetables</button>
                                        <button class="nav-link deprmnt_btn_act deprmnt_btn_act" id="v-pills-academic1-tab" data-bs-toggle="pill" data-bs-target="#v-pills-academic1" type="button" role="tab"
                                            aria-controls="v-pills-academic1" aria-selected="false">Academic Calendar</button>
                                        <button class="nav-link deprmnt_btn_act deprmnt_btn_act" id="v-pills-lab1-tab" data-bs-toggle="pill" data-bs-target="#v-pills-lab1" type="button" role="tab"
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
                                        <p>To emerge as a leading centre for students and faculty in their pursuits of professional excellence in the fields of Electronics
                                            and Communication Engineering by making use of current Scientific and Technological advancements, with focus on human values,
                                            professional ethics and social responsibility.</p>
                                    </div>
                                    <img src="http://kakatiyasolutions.in/vageshwari_clg/assets/images/logo/vision.png" class="img-fluid order-lg-2" loading="lazy" alt="mission-logo">
                                </div>
                                <div class="mission-total">

                                    <img src="http://kakatiyasolutions.in/vageshwari_clg/assets/images/logo/mission.png" class="img-fluid" loading="lazy" alt="mission-logo">
                                    <div class="mission">
                                        <h1>Mission</h1>


                                        <div class="vns_depart_img">
                                            <img src="http://kakatiyasolutions.in/vageshwari_clg/assets/images/department/list_type_red1.webp" alt="list type image" class="img-fluid" loading="lazy">
                                            <li>Training students in the basic core and application oriented subjects of Electronics and Communication Engineering with due focus on multi-disciplinary areas.</li>
                                        </div>
                                        <div class="vns_depart_img">
                                            <img src="http://kakatiyasolutions.in/vageshwari_clg/assets/images/department/list_type_red1.webp" alt="list type image" class="img-fluid" loading="lazy">
                                            <li>Establishing liaison with relevant industries, R&D organizations and renowned academia for exposure to practical R&D aspects of technology. </li>
                                        </div>
                                        <div class="vns_depart_img">
                                            <img src="http://kakatiyasolutions.in/vageshwari_clg/assets/images/department/list_type_red1.webp" alt="list type image" class="img-fluid" loading="lazy">
                                            <li>Inculcating team work, leadership, professional ethics and other skills such as effective communication, logical reasoning, career goal setting,
                                                liberal use of modern tools, and familiarity with IPR to make students globally competent in employment as well as entrepreneurship</li>
                                        </div>
                                        <div class="vns_depart_img">
                                            <img src="http://kakatiyasolutions.in/vageshwari_clg/assets/images/department/list_type_red1.webp" alt="list type image" class="img-fluid" loading="lazy">
                                            <li>Promoting scientific temper and research culture in the graduate towards lifelong learning to produce useful research outcomes.</li>
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
                                                        <td>To provide extensive engineering knowledge and skill to understand,
                                                            analyze, design and create novel products and solutions in the field of Electronics and Communication Engineering.</td>

                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Program Educational Objectives – 2</td>
                                                        <td>Capability to pursue career in industry or higher studies with continuous learning.

                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Program Educational Objectives – 3</td>
                                                        <td>Leadership qualities, team spirit, multi-disciplinary approach, character molding and lifelong learning for a successful professional career</td>

                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Program Educational Objectives – 4</td>
                                                        <td>Professional and ethical attitude, effective communication skills, and sense of responsibility towards society.</td>

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
                                                                    <td>Engineering knowledge:</td>
                                                                    <td>Apply the knowledge of mathematics, science, engineering fundamentals, and an engineering specialization
                                                                        to the solution of complex engineering problems.</td>

                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Problem analysis:</td>
                                                                    <td>Identify, formulate, review research literature, and analyze complex engineering problems reaching substantiated
                                                                        conclusions using first principles of mathematics, natural sciences, and engineering sciences.</td>

                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Design/development of solutions</td>
                                                                    <td>Design solutions for complex engineering problems and design system components or processes that meet the specified needs
                                                                        with appropriate consideration for the public health and safety, and the cultural, societal, and environmental considerations</td>

                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Conduct investigations of complex problems:</td>
                                                                    <td>Use research-based knowledge and research methods including design of experiments, analysis and interpretation of data,
                                                                        and synthesis of the information to provide valid conclusions.</td>

                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Modern tool usage:</td>
                                                                    <td>Create, select, and apply appropriate techniques, resources, and modern engineering and IT tools including prediction
                                                                        and modelling to complex engineering activities with an understanding of the limitations.</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>The engineer and society:</td>
                                                                    <td> Apply reasoning informed by the contextual knowledge to assess societal, health, safety, legal and cultural issues and the consequent
                                                                        responsibilities relevant to the professional engineering practice.</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Environment sustainability:</td>
                                                                    <td>Understand the impact of the professional engineering solutions in societal and environmental contexts,
                                                                        and demonstrate the knowledge of, and need for sustainable development</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Ethics:</td>
                                                                    <td>Apply ethical principles and commit to professional ethics and responsibilities and norms of the engineering practice</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Individual and team work:</td>
                                                                    <td>Function effectively as an individual, and as a member or leader in diverse teams, and in multidisciplinary settings.</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Communication</td>
                                                                    <td>Communicate effectively on complex engineering activities with the engineering community and with society at large,
                                                                        such as, being able to comprehend and write effective reports and design documentation, make effective presentations,
                                                                        and give and receive clear instructions.</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Project management and finance:</td>
                                                                    <td>Demonstrate knowledge and understanding of the engineering and management principles and apply these to one’s own work, as a
                                                                        member and leader in a team, to manage projects and in multidisciplinary environments.</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Lifelong learning</td>
                                                                    <td>Recognize the need for, and have the preparation and ability to engage in independent and life-long learning in the broadest context
                                                                        of technological change.</td>
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
                                                                    <td>Design and implementation of complex systems by applying basic concepts in Electronics & Communication Engineeringto Electronics,
                                                                        Communications, Signal processing, VLSI, Embedded Systems.</td>

                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Program Specific Outcomes -2</td>
                                                                    <td>Solve complex Electronics and Communication Engineering problems, using hardware and software tools,<br>
                                                                        along with analytical skills to arrive cost effective and appropriate solutions relevant to the society.</td>

                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Program Specific Outcomes -3</td>
                                                                    <td>Quality in technical subjects for successful higher studies and employment.</td>

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
                                                       <td>Dr.A. Venkat Reddy</td> 
                                                      <td>Professor & HoD</td>
                                                      <td>Chairperson</td>

                                                   </tr>
                                                   <tr>
                                                       <td></td>
                                                       <td>Dr. D. Surendhar</td>
                                                       <td>Assistant Professor</td>
                                                       <td>Member Secretary</td>
                                                      

                                                   </tr>
                                                   <tr>
                                                       <td></td>
                                                       <td>Mr.Md. Khursheed</td>
                                                       <td>Assistant Professor</td>
                                                       <td>Member</td>
                                                      

                                                   </tr>
                                                   <tr>
                                                       <td></td>
                                                       <td>Dr. U. Rajendhar</td>
                                                       <td>Assistant Professor</td>
                                                       <td>Member</td>
                                                      

                                                   </tr>
                                                   <tr>
                                                       <td></td>
                                                       <td>Mr. A. Arunkumar</td>
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
                                                        <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/pdfs/R18B.Tech.ECESyllabus.pdf" target="_blank" rel="noopener">View</a></td>

                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>R22</td>
                                                        <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/pdfs/R22B.Tech.ECECourseStructureSyllabus1.pdf" target="_blank" rel="noopener">View</a></td>

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
                                                        <!-- <th>Semester</th> -->
                                                        <th>Link</th>

                                                    </tr>
                                                </thead>


                                                <tbody>

                                                    <tr>
                                                        <td></td>
                                                        <td>2023-2024</td>
                                                        <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/pdfs/Time_Tables_ece.pdf" target="_blank" rel="noopener">View</a></td>
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
                                                        <th>Academic Year</th>
                                                        <th>Year</th>
                                                        <th>Link</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td rowspan="4">1</td>
                                                        <td rowspan="4">2023-24</td>
                                                        <td>I st Year</td>
                                                        <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/pdfs/AcademicCalenderofB.Tech.IYEARI_IISEMESTERS.pdf" target="_blank" rel="noopener">View</a></td>

                                                    </tr>
                                                    <tr>

                                                        <td>II nd Year</td>
                                                        <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/pdfs/B.TechIIYEARIIISEMESTERS.pdf" target="_blank" rel="noopener">View</a></td>

                                                    </tr>
                                                    <tr>

                                                        <td>III rd Year</td>
                                                        <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/pdfs/B.Tech.B.Pharm.IIIYEARIIISEMESTERS 23-24.pdf" target="_blank" rel="noopener">View</a></td>

                                                    </tr>
                                                    <tr>

                                                        <td>IV th Year</td>
                                                        <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/pdfs/Revised_B._Tech_.B_._Pharm_._IV_YEAR_I_II_Semesters_Academic_Calendar_for_2023-24_.pdf" target="_blank" rel="noopener">View</a></td>

                                                    </tr>

                                                    <tr>
                                                        <td rowspan="4">2</td>
                                                        <td rowspan="4">2022-2023</td>
                                                        <td>I st Year </td>
                                                        <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/pdfs/Academic_Calendar_of_B.Tech_._I_Year_I_II_Semesters_page-0001_.pdf" target="_blank" rel="noopener">View</a>
                                                            <br><br>
                                                            <a href="http://kakatiyasolutions.in/vageshwari_clg/assets/pdfs/B.Tech_._I_Year_II_Semester_Revised_Academic_Calendar_for_AY_2022-23_.pdf" target="_blank" rel="noopener">View</a>
                                                        </td>
                                                    </tr>
                                                    <tr>

                                                        <td>II nd Year</td>
                                                        <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/pdfs/Academic_Calendar_for_B.Tech_.-B_.Pharm_._II_Year_I_II_Semesters_1.pdf" target="_blank" rel="noopener">View</a></td>

                                                    </tr>
                                                    <tr>

                                                        <td>III rd Year</td>
                                                        <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/pdfs/B.Tech_B_.Pharm_III_YEAR_I_II_SEMESTERS_.pdf" target="_blank" rel="noopener">View</a></td>

                                                    </tr>
                                                    <tr>

                                                        <td>IV th Year</td>
                                                        <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/pdfs/B.Tech_B_.Pharm_IV_YEAR_I_II_SEMESTERS_.pdf" target="_blank" rel="noopener">View</a></td>

                                                    </tr>

                                                    <tr>
                                                        <td rowspan="4">3</td>
                                                        <td rowspan="4">2021-2022</td>
                                                        <td>Ist Year</td>
                                                        <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/pdfs/ACADEMIC_CALENDAR_2021-22_FOR_B._TECH_.-B_.PHARM_._I_YEAR_I_II_SEMESTERS_.pdf" target="_blank" rel="noopener">View</a>
                                                            <br><br>
                                                            <a href="http://kakatiyasolutions.in/vageshwari_clg/assets/pdfs/Academic_Calenders-2021.pdf" target="_blank" rel="noopener">View</a>
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
                                                        <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/pdfs/REVISED_ACADEMIC_CALENDAR_2021-22_B._Tech_._B_.Pharm_._IV_YEAR_II_SEMESTER_.pdf" target="_blank" rel="noopener">View</a></td>

                                                    </tr>



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
                                            ECE LAB-1
                                        </button>
                                    </h2>
                                    <div id="collapseOne1" class="accordion-collapse collapse" aria-labelledby="headingOne1" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <div class="lab-full">


                                                <div class="committee_head">
                                                    <h3>ECE LAB-1</h3>
                                                </div>
                                                <div class="lab-min">
                                                    <h6>Electronic Devices and Circuits Laboratory:-</h6>
                                                </div>
                                                <p>The Electronic Devices and Circuits Laboratory is a state-of-the-art facility designed for hands-on experimentation and practical learning in electronics.
                                                    This lab provides students and researchers with the opportunity to explore and understand the principles of electronic devices and circuits
                                                    through direct experimentation and troubleshooting.</p>
                                                <p>The Electronic Devices and Circuits Laboratory is a vital component of electronics education, providing a platform for experiential learning and
                                                    skill development. Through hands-on experiments and practical applications, students gain a deeper appreciation and understanding of electronic
                                                    systems and their components.</p>

                                                <div class="lab-min">
                                                    <h6>Analog Circuits Laboratory:-</h6>
                                                </div>
                                                <p>The Analog Circuits Laboratory is a dedicated space for exploring and experimenting with analog electronic circuits and systems.
                                                    This lab offers students and researchers the opportunity to engage in practical learning, focusing on the design, analysis,
                                                    and implementation of analog circuits. Through hands-on experimentation, participants gain a deep understanding of analog signal
                                                    processing, amplification, and filtering.</p>
                                                <p>The Analog Circuits Laboratory is a dedicated space for exploring and experimenting with analog electronic circuits and systems.
                                                    This lab offers students and researchers the opportunity to engage in practical learning, focusing on the design, analysis,
                                                    and implementation of analog circuits. Through hands-on experimentation, participants gain a deep understanding
                                                    of analog signal processing, amplification, and filtering.</p>



                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                            ECE LAB-2
                                        </button>
                                    </h2>
                                    <div id="collapseTwo2" class="accordion-collapse collapse" aria-labelledby="headingTwo2" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <div class="lab-full">


                                                <div class="committee_head">
                                                    <h3>ECE LAB-2</h3>
                                                </div>
                                                <div class="lab-min">
                                                    <h6>Electronic Circuit Analysis Laboratory:-</h6>
                                                </div>
                                                <p>The Electronic Circuit Analysis Laboratory offers a practical and educational environment for mastering the analysis and design of electronic circuits.
                                                    By engaging in hands-on experiments and utilizing advanced tools, participants develop essential skills in circuit analysis, troubleshooting,
                                                    and optimization, preparing them for advanced study and professional work in electronics and electrical engineering.</p>
                                                <p>The Electronic Circuit Analysis Laboratory is a specialized facility designed to provide in-depth understanding and hands-on experience
                                                    with the analysis and design of electronic circuits. This lab focuses on the principles, techniques, and tools required to analyze
                                                    both analog and digital electronic circuits, emphasizing practical problem-solving and circuit performance evaluation.</p>

                                                <div class="lab-min">
                                                    <h6>IoT Architectures and Protocols Laboratory:-</h6>
                                                </div>
                                                <p>The IoT Architectures and Protocols Laboratory is a cutting-edge facility dedicated to exploring the intricacies of Internet of Things (IoT) systems.
                                                    This lab provides students and researchers with the tools and environment needed to design, develop, and test IoT solutions,
                                                    focusing on various IoT architectures, communication protocols, and real-world applications.</p>
                                                <p>The IoT Architectures and Protocols Laboratory offers a comprehensive platform for exploring and mastering the complexities of IoT systems.
                                                    By engaging in hands-on experiments and projects, participants gain valuable experience in designing, developing, and managing IoT solutions,
                                                    preparing them for advanced study and professional careers in the growing field of Internet of Things.</p>




                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            ECE LAB-3
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <div class="lab-full">


                                                <div class="committee_head">
                                                    <h3>ECE LAB-3</h3>
                                                </div>
                                                <div class="lab-min">
                                                    <h6>Microwave and Optical Communications Laboratory:-</h6>
                                                </div>
                                                <p>The Microwave and Optical Communications Laboratory is a specialized facility focused on the study and experimentation of high-frequency
                                                    communication systems, including microwave and optical technologies. This lab is equipped with advanced tools and instruments to
                                                    support hands-on learning and research in the field of communication technologies, addressing both theoretical concepts and practical applications.</p>

                                                <p>The Microwave and Optical Communications Laboratory provides a comprehensive environment for exploring the advanced field of high-frequency
                                                    communication systems. Through practical experiments and research, participants gain valuable insights and skills in microwave and optical
                                                    technologies, preparing them for further study and professional work in the communications industry.</p>

                                                <div class="lab-min">
                                                    <h6>Advanced Communication Laboratory:-</h6>
                                                </div>
                                                <p>The Advanced Communication Laboratory is a cutting-edge facility dedicated to exploring and experimenting with advanced communication technologies
                                                    and systems. This lab provides students and researchers with hands-on experience in the design, implementation, and analysis of modern
                                                    communication techniques, including wireless communication, signal processing, and network technologies.</p>
                                                <p>The Advanced Communication Laboratory provides a dynamic and comprehensive environment for exploring the forefront of communication technologies.
                                                    Through hands-on experiments and advanced tools, participants gain valuable skills in designing, implementing, and analyzing modern communication
                                                    systems, preparing them for careers and research in the rapidly evolving field of communications.</p>



                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            ECE LAB-4
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <div class="lab-full">


                                                <div class="committee_head">
                                                    <h3>ECE LAB-4</h3>
                                                </div>
                                                <div class="lab-min">
                                                    <h6>Digital logic Design Laboratory:-</h6>
                                                </div>
                                                <p>The Digital Logic Design Laboratory is a hands-on facility focused on the study and experimentation of digital logic circuits and systems.
                                                    This lab provides students and researchers with practical experience in designing, implementing, and testing digital logic circuits,
                                                    fundamental to modern computing and electronic systems.</p>
                                                <p>The Digital Logic Design Laboratory offers a practical learning environment for exploring the fundamentals of digital logic and circuit design.
                                                    By engaging in hands-on experiments and using advanced design tools, participants develop essential skills in digital electronics,
                                                    preparing them for further study and professional careers in electronics and computer engineering.</p>


                                                <div class="lab-min">
                                                    <h6>Linear and Digital IC Applications Laboratory:-</h6>
                                                </div>
                                                <p>The Linear and Digital IC Applications Laboratory is a specialized facility dedicated to the study and experimentation of integrated circuits (ICs)
                                                    used in both linear and digital applications. This lab provides students and researchers with hands-on experience in designing, implementing,
                                                    and analyzing circuits using linear ICs (such as operational amplifiers) and digital ICs (such as microcontrollers and logic gates).</p>
                                                <p>
                                                    The Linear and Digital IC Applications Laboratory provides a comprehensive environment for exploring the functionality and applications
                                                    of integrated circuits in both linear and digital domains. Through hands-on experiments and advanced tools, participants develop essential
                                                    skills in circuit design, implementation, and analysis, preparing them for advanced studies and careers in electronics and integrated circuit technology.
                                                </p>




                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            ECE LAB-5
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <div class="lab-full">


                                                <div class="committee_head">
                                                    <h3>ECE LAB-5</h3>
                                                </div>
                                                <div class="lab-min">
                                                    <h6>Analog and Digital Communications Laboratory:-</h6>
                                                </div>
                                                <p>The Analog and Digital Communications Laboratory is a sophisticated facility designed to provide hands-on experience with both analog and digital
                                                    communication systems. This lab offers students and researchers the opportunity to explore the principles, techniques, and technologies
                                                    used in modern communication systems, focusing on both analog and digital signal processing and transmission.</p>
                                                <p>The Analog and Digital Communications Laboratory offers a practical and educational environment for exploring the essential concepts
                                                    and technologies of communication systems. Through hands-on experiments and advanced tools, participants develop valuable skills
                                                    in both analog and digital communications, preparing them for further study and careers in the field of telecommunications and signal processing.</p>



                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSix">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            ECE LAB-6
                                        </button>
                                    </h2>
                                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <div class="lab-full">


                                                <div class="committee_head">
                                                    <h3>ECE LAB-6</h3>
                                                </div>
                                                <div class="lab-min">
                                                    <h6>Basic Simulation Laboratory:-</h6>
                                                </div>
                                                <p>The Basic Simulation Laboratory is a foundational facility designed to introduce students and researchers to the principles and practices
                                                    of simulation across various fields of engineering and science. This lab focuses on providing hands-on experience with simulation
                                                    tools and techniques, allowing participants to model, analyze, and visualize complex systems and processes.</p>
                                                <p>The Basic Simulation Laboratory provides a critical foundation for learning and applying simulation techniques across different fields of study.
                                                    By engaging in hands-on experiments and using simulation tools, participants develop essential skills in modeling, analysis,
                                                    and data interpretation, preparing them for more advanced studies and professional applications in simulation and analysis.</p>




                                                <div class="lab-min">
                                                    <h6>Digital Signal Processing Laboratory:-</h6>
                                                </div>
                                                <p>The Digital Signal Processing (DSP) Laboratory is a dedicated facility designed for exploring and implementing digital signal processing
                                                    techniques and algorithms. This lab provides students and researchers with hands-on experience in analyzing, designing, and optimizing
                                                    digital systems for processing signals, including audio, video, and communication signals.</p>
                                                <p>The Digital Signal Processing Laboratory provides an advanced environment for exploring the fundamentals and applications of DSP techniques.
                                                    Through hands-on experiments and the use of state-of-the-art tools, participants develop essential skills in signal processing,
                                                    preparing them for careers and research in fields such as communications, audio engineering, and image processing.</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSeven">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                            ECE LAB-7
                                        </button>
                                    </h2>
                                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <div class="lab-full">


                                                <div class="committee_head">
                                                    <h3>ECE LAB-7</h3>
                                                </div>

                                                <div class="lab-min">
                                                    <h6>CMOS VLSI Design Laboratory:-</h6>
                                                </div>
                                                <p>The CMOS VLSI (Complementary Metal-Oxide-Semiconductor Very-Large-Scale Integration) Design Laboratory is a specialized facility focused on the
                                                    design, analysis, and implementation of VLSI circuits using CMOS technology. This lab provides students and researchers with hands-on experience
                                                    in designing and testing integrated circuits at the VLSI level, crucial for modern electronics and computing systems</p>
                                                <p>The CMOS VLSI Design Laboratory offers a cutting-edge environment for mastering the design and analysis of integrated circuits using CMOS technology.
                                                    Through hands-on experiments and advanced tools, participants develop critical skills in CMOS VLSI design, preparing them for careers
                                                    and research in semiconductor technology and integrated circuit design.</p>
                                                <div class="lab-min">
                                                    <h6>Microcontrollers Laboratory:-</h6>
                                                </div>
                                                <p>The Microcontrollers Laboratory is a specialized facility designed for the exploration, development, and testing of microcontroller-based systems.
                                                    This lab provides students and researchers with hands-on experience in programming and interfacing microcontrollers, essential for embedded systems
                                                    development and automation applications</p>
                                                <p>The Microcontrollers Laboratory offers a hands-on environment for learning and applying microcontroller technology in embedded systems.
                                                    Through practical experiments and projects, participants develop essential skills in microcontroller programming, interfacing,
                                                    and system integration, preparing them for further studies and careers in embedded systems and electronics.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingEight">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                            ECE LAB-8
                                        </button>
                                    </h2>
                                    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <div class="lab-full">


                                                <div class="committee_head">
                                                    <h3>ECE LAB-8</h3>
                                                </div>

                                                <div class="lab-min">
                                                    <h6>Analog Electronic Circuits Laboratory:-</h6>
                                                </div>
                                                <p>The Analog Electronic Circuits Laboratory is a dedicated space for exploring and experimenting with analog electronics. This lab provides a comprehensive
                                                    environment for understanding the design, analysis, and application of analog electronic circuits, which are foundational
                                                    to numerous electronic systems and devices.</p>
                                                <p>The Analog Electronic Circuits Laboratory offers a hands-on learning environment for mastering the fundamentals of analog electronics.
                                                    By engaging in practical experiments and using advanced tools, participants gain valuable skills in circuit design, analysis,
                                                    and application, preparing them for further study and careers in electronics and electrical engineering.</p>
                                                <div class="lab-min">
                                                    <h6>Digital Electronics Laboratory:-</h6>
                                                </div>
                                                <p>The Digital Electronics Laboratory is a specialized facility dedicated to exploring the principles, design, and implementation of digital electronic circuits.
                                                    This lab offers students and researchers practical experience with digital logic, combinational and sequential circuits,
                                                    and advanced digital systems used in modern electronics.</p>
                                                <p>The Digital Electronics Laboratory offers a practical and educational environment for mastering digital circuit design and implementation.
                                                    Through hands-on experiments and advanced tools, participants develop essential skills in digital electronics, preparing them for
                                                    careers and research in fields such as embedded systems, digital design, and computer engineering..</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
<td>Internet of ThingsFundamentals</td>
<td>Add on/certificationprogram</td>
<td>21/09/2022</td>
<td>Dr.D.Surender
Associate Professor in ECE
</td>
<td>127 </td>


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
<td>Signal processingusing Mat lab</td>
<td>Add on/certificationprogram</td>
<td>01/12/2021</td>
<td>P.AJAY KUMAR
Asst.prof in ECE
</td>
<td>125</td>


</tr>
<tr>
<td></td>
<td>WirelessCommunication</td>
<td>Webinar</td>
<td>09/11/2021 </td>
<td>VENKATA REDDY ADAMA
Associate Professor in ECE

</td>
<td>64 </td>


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
<td>PCB Design</td>
<td>Add on/certificationprogram</td>
<td>02/11/2020</td>
<td>B.BHARGVENDRA
Asst prof in ECE 

</td>
<td>454</td>


</tr>
<tr>
<td></td>
<td>Rasberry Pi</td>
<td>workshop</td>
<td>29/06/2021</td>
<td>GS.ARUN KUMAR
Asst prof in ECE

</td>
<td>61</td>


</tr>
<tr>
<td></td>
<td>Arduino and ItsApplications</td>
<td>Webinar</td>
<td>28/08/2020</td>
<td>M.KRANTHI KUMAR
Asst prof in ECE
</td>
<td>61</td>


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
                                            Academic Year 2022-23
                                        </button>
                                    </h2>
                                    <div id="collapsefacultypublication" class="accordion-collapse collapse show" data-bs-parent="#faculty_list">
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
                                                                    <td>Analysis of Facet-Loaded Rectangular DR-Rectenna Designs for Multi-Source RF Energy Harvesting Applications</td>
                                                                    <td>Daasari Surender, Md. Ahsan Halimi, Taimoor Khan, Fazal A. Talukdar, Binod Kumar Kanaujia, Karumudi Rambabu, and Ahmed A. Kishk</td>
                                                                    <td>IEEE Transactions on Antennas and Propagation
(Vol. 71, No. 2, Feb, pp. 1273-1284)
</td>
                                                                    <td>Feb, 2023</td>
                                                                    <td>0018-926X</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>5G/mmWave Rectenna Systems for RFEH/WPT Applications: An Overview</td>
                                                                    <td>Daasari Surender, Md. Ahsan Halimi, Taimoor Khan, Fazal A. Talukdar, Nasimuddin, Sembiam R. Rengarajan</td>
                                                                    <td>IEEE Antennas and Propagation Magazine, (Vol. 65, no. 3, June, pp. 57-76)</td>
                                                                    <td> June, 2023</td>
                                                                    <td>1045-9243</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Designing of Synthetic Aperture Radar Based Control Algorithms for the Autonomous Vehicles</td>
                                                                    <td>Dr. Udutha Rajender</td>
                                                                    <td>International Journal of Scientific Research in Engineering and Management (IJSREM), Vol. 07, No. 01</td>
                                                                    <td>Jan. 2023</td>
                                                                    <td>2582-3930</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>LoRa enabled Real-time Monitoring of Workers in Building
Construction Site
</td>
                                                                    <td>G S Arun Kumar, Rajesh Singh, Anita Gehlot, Shaik Vaseem
Akram
</td>
                                                                    <td>International Journal of
Electrical and Electronics Research (IJEER)
</td>
                                                                    <td>Oct, 2022</td>
                                                                    <td>2347-470X</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Designing of Delay Approximation Model forPrime Speed Interconnects in Current Mode</td>
                                                                    <td>Dr. Udutha Rajender</td>
                                                                    <td>Gradiva Review Journal, Vol. 9, no. 6, pp. 124-130.</td>
                                                                    <td>June, 2023</td>
                                                                    <td> 2278-3075</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Dual-Facet Loaded Dual-Polarized Quad-band Dielectric Resonator-Rectenna for RF Energy Harvesting in Smart City Applications</td>
                                                                    <td>Daasari Surender, Venkata Reddy Adama, Taimoor Khan, Fazal A. Talukdar, Rama Krishna and G. Amarnath</td>
                                                                    <td>IEEE Wireless, Antenna & Microwave Symposium</td>
                                                                    <td>June, 2023</td>
                                                                    <td>979-8-3503-1243-0</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Dual-Band Terahertz Metamaterial Absorber for a Sensor Application</td>
                                                                    <td>Laxmi Narayana Deekonda, Sanjay Kumar Sahu, and Asit Kumar Panda</td>
                                                                    <td>Computer Aided Constellation Management and Communication Satellites, pp. 39-45</td>
                                                                    <td>Mar. 2023</td>
                                                                    <td>978-981-19-8555-3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>An Efficient Dielectric Resonator Antenna for Dual-Band and Dual-Polarized RFEH Applications in Smart City Environments</td>
                                                                    <td>Daasari Surender, Md. Ahsan Halimi, Taimoor Khan, and Fazal A. Talukdar</td>
                                                                    <td>2022 IEEE Silchar Subsection Conference (IEEE SILCON-2022, NIT Silchar, Assam, India, pp. 1-4, 4-6)</td>
                                                                    <td>Nov. 2022</td>
                                                                    <td>978-1-6654-7100-8</td>
                                                                </tr>
                                                               
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Application of Synthetic Aperture Radar (SAR) based Control Algorithms for the Autonomous Vehicles Simulation Environment</td>
                                                                    <td>Udutha Rajender; Sowjanya Nagulapati; Anuradha T; Hemavathi S; Anandbabu Gopatoti; Logeswaran T</td>
                                                                    <td>2022 International Conference on Edge Computing and Applications (ICECAA), Tamilnadu, India. </td>
                                                                    <td>13-15, Oct. 2022</td>
                                                                    <td>978-1-6654-8232-5</td>
                                                                </tr>
                                                               
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Internet of Personal Protective Equipment: Automation for Workers Safety at Construction Sites</td>
                                                                    <td>GS Arun Kumar, Rajesh Singh, Anita Gehlot</td>
                                                                    <td>Futuristic Sustainable Energy & Technology</td>
                                                                    <td>May, 2022</td>
                                                                    <td>9781003272328</td>
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
                                            Academic Year 2021-22
                                        </button>
                                    </h2>
                                    <div id="collapsefacultypublicationone" class="accordion-collapse collapse" data-bs-parent="#faculty_list">
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
                                                                    <td>Hybrid Architecture Based System for the Establishment of Sustainable Environment in a Construction Site with 433 MHz LoRa and 2.4 GHz Zigbee</td>
                                                                    <td>Gangishetty Arun Kumar, Ajay Roy, Rajesh Singh, Anita Gehlot, Mamoon Rashid, Shaik Vaseem Akram, Sultan S Alshamrani, Abdullah Alshehri, Ahmed Saeed AlGhamdi</td>
                                                                    <td>Sustainability 2022, 14(10), 6280</td>
                                                                    <td>May, 2022</td>
                                                                    <td>2071-1050</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>LoRa enabled Real-time Monitoring of Workers in Building
Construction Site
</td>
                                                                    <td>G S Arun Kumar, Rajesh Singh, Anita Gehlot, Shaik Vaseem
Akram
</td>
                                                                    <td>International Journal of Electrical and Electronics Research (IJEER)</td>
                                                                    <td>Apr,
2022
</td>
                                                                    <td>2347-470X</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>A Graphene-Based Broadband Metamaterial Absorber</td>
                                                                    <td>Laxmi Narayana Deekonda, Sanjay Kumar Sahu; Asit Kumar Panda</td>
                                                                    <td>2021 Advanced Communication Technologies and Signal Processing (ACTS), Rourkela, India</td>
                                                                    <td>15-17 December 2021</td>
                                                                    <td>978-1-6654-2338-0</td>
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
                                            Academic Year 2020-21
                                        </button>
                                    </h2>
                                    <div id="collapsefaculty_publication_two" class="accordion-collapse collapse" data-bs-parent="#faculty_list">
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
                                                                    <td>Localization of Wireless Sensor Nodes using Arduino</td>
                                                                    <td>Venkata Reddy Adama, GM Asutkar</td>
                                                                    <td>International Research Journal of Engineering and Technology (IRJET)</td>
                                                                    <td>July, 2020</td>
                                                                    <td>2395-0072</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Tunable Sub Threshold Logic Design Through Adaptive Feedback Equalization</td>
                                                                    <td>Rajender Udutha, Dr. A A Ansari and Dr. S.Sreenath Kashyap</td>
                                                                    <td>Turkish Journal of Computer and Mathematics Education, Vol.12, No.2, pp. 1540 -1545.</td>
                                                                    <td>April, 2021</td>
                                                                    <td>2320-2882</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Improved localization with RSSI and DTN algorithms in wireless sensor networks</td>
                                                                    <td>Venkata Reddy Adama, G. M. Asutkar</td>
                                                                    <td>International Journal of Information Technology (Springer), Vol.13, pp. 603–607. https://link.springer.com/article/10.1007/s41870-020-00590-x</td>
                                                                    <td>Jan, 2021</td>
                                                                    <td>2511-2104</td>
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
                                        Academic Year: 2022-23
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
        <td>E. Jyothi</td>
        <td>III-II</td>
        <td>AWP</td>
        <td>Radiation Pattern</td>
        <td>Experimental Demonstration of Antenna Trainer</td>
        
        
    </tr>
    <tr>
        <td></td>
        <td>Dr. D. Surender</td>
        <td>II-II</td>
        <td>EMTL</td>
        <td>Electromagnetic Fields</td>
        <td>Slip Tests</td>
      
        
    </tr>
    <tr>
        <td></td>
        <td>Dr. K. Keerthi Kumar</td>
        <td>III-II</td>
        <td>VLSI Design</td>
        <td>CMOS fabrication</td>
        <td>Animation Video</td>
        
       
    </tr>

    <tr>
        <td></td>
        <td>D. Laxminarayana</td>
        <td>IV-I</td>
        <td>MWE</td>
        <td>Waveguides, MicrowaveTues</td>
        <td>Quiz</td>
        
        
    </tr>
    <tr>
        <td></td>
        <td>G S Arun Kumar</td>
        <td>IV-II</td>
        <td>Project</td>
        <td>Arduino UNO</td>
        <td>Hardware Demonstration and Performance</td>
       
       
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
        <td>Dr. A. Venkata Reddy</td>
        <td>II-II</td>
        <td>ADC</td>
        <td>Analog and Digital Communication</td>
        <td>Discussion</td>
        
        
    </tr>
    <tr>
        <td></td>
        <td>E. Jyothi</td>
        <td>II-I</td>
        <td>DLD</td>
        <td>Combinational circuits</td>
        <td>Quiz</td>
      
        
    </tr>
    <tr>
        <td></td>
        <td>B. Bharghavendra</td>
        <td>III-II</td>
        <td>CS</td>
        <td>Block Diagram Reduction, Bode Plots</td>
        <td>Problem solving and exercises</td>
        
       
    </tr>

    <tr>
        <td></td>
        <td>B. Thirupathi</td>
        <td>III-II</td>
        <td>DSP</td>
        <td>DSP processors</td>
        <td>Think pair share</td>
        
        
    </tr>
    <tr>
        <td></td>
        <td>D. Laxminarayana</td>
        <td>II-II</td>
        <td>ADC</td>
        <td>Analog and Digital Modulation Schemes</td>
        <td>Lab based</td>
       
       
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
        <td>K. Jyothsna</td>
        <td>II-I</td>
        <td>STLD</td>
        <td>Combinational circuits</td>
        <td>Quiz</td>
        
        
    </tr>
    <tr>
        <td></td>
        <td>E. Jyothi</td>
        <td>III-1</td>
        <td>MPMC</td>
        <td>Intel 8051 Micro Controller</td>
        <td>Flipped class room</td>
      
        
    </tr>
    <tr>
        <td></td>
        <td>Dr. Bonala Satyam</td>
        <td>II-I</td>
        <td>Network Theory</td>
        <td>Superposition Theorem, Thevenin’s and Norton’s Theorems, etc</td>
        <td>Problem Solving and Exercises </td>
        
       
    </tr>

    <tr>
        <td></td>
        <td>B. Bharghavendra/td>
        <td>II-II</td>
        <td>EMTL</td>
        <td>Electromagnetic Fields</td>
        <td>Animation Video</td>
        
        
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
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsestudentseventsfive" 
                                        aria-expanded="false" aria-controls="collapsestudentseventsfive">
                                        List of Pedagogical Initiatives by the Faculty Members
                                        </button>
                                    </h2>
                                    <div id="collapsestudentseventsfive" class="accordion-collapse collapse" data-bs-parent="#student-events">
                                        <div class="accordion-body">

                                        <div class="committee_table">
                                                <div class="committee_head">
                                                    <h3>List of Pedagogical Initiatives by the Faculty Members</h3>
                                                </div>
                                                <div class="committee_table_inn">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered table-striped">
                                                            <thead>
                                                                <tr class="tableizer-firstrow">
                                                                    <th>Sl. No.</th>
                                                                    <th>Faculty Name</th>
                                                                    <th>No.of Teaching Learning methodologies used</th>
                                                                    <th>Link of webpage/blog/Google classroom/LMS etc.</th>
                                                                    
                                                                   
                                                                </tr>
                                                            </thead>
                                                         
                                                           <tbody>
    
    <tr>
        <td></td>
        <td>Dr. D. Laxminarayana</td>
        <td>1</td>
        <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/pdfs/faculty-innovations/Microwave_Notes.pdf" target="_blank">
        View</a></td>
       
        
        
    </tr>
    <tr>
        <td></td>
        <td>Dr. D. Surender</td>
        <td>1</td>
        <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/pdfs/faculty-innovations/EMTL_Complete.pdf" target="_blank">
        View</a></td>
      
      
        
    </tr>
    <tr>
        <td></td>
        <td>Mr. B. Ram Mohan</td>
        <td>1</td>
        <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/pdfs/faculty-innovations/EDC_Notes.pdf" target="_blank">
        View</a></td>
      
        
       
    </tr>

    <tr>
        <td></td>
        <td>Mr. T. Nageshwar Rao</td>
        <td>1</td>
        <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/pdfs/faculty-innovations/Optical_Communication_Complete.pdf" target="_blank">
        View</a></td>
       
        
        
    </tr>
    <tr>
        <td></td>
        <td>Mr. B. Bharghavendra</td>
        <td>1</td>
        <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/pdfs/faculty-innovations/NAS_Complete.pdf" target="_blank">
        View</a></td>
        
       
       
    </tr>
    <tr>
        <td></td>
        <td>Mr. P. Ajay Kumar</td>
        <td>1</td>
        <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/pdfs/faculty-innovations/Control_Systems_Notes.pdf" target="_blank">
        View</a></td>
        
       
       
    </tr>
    <tr>
        <td></td>
        <td>Mrs. E. Jyothi</td>
        <td>1</td>
        <td><a href="http://kakatiyasolutions.in/vageshwari_clg/assets/pdfs/faculty-innovations/AWP_Notes_1_2.pdf" target="_blank">
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
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
                                        data-bs-target="#collapsestudentseventsthree" aria-expanded="false" aria-controls="collapsestudentseventsthree">
                                        ECE Faculty YouTube Lecture Videos
                                        </button>
                                    </h2>
                                    <div id="collapsestudentseventsthree" class="accordion-collapse collapse" data-bs-parent="#student-events">
                                        <div class="accordion-body">

                                        <div class="committee_table">
                                                <div class="committee_head">
                                                    <h3>ECE Faculty YouTube Lecture Videos</h3>
                                                </div>
                                                <div class="committee_table_inn">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered table-striped" id="no-counter-table">
                                                            <thead>
                                                                <tr class="tableizer-firstrow">
                                                                    <th>Sl. No.</th>
                                                                    <th colspan="2">ECE Faculty YouTube Lecture Videos</th>
                                                                  
                                                                   
                                                                </tr>
                                                            </thead>
                                                         
                                                           <tbody>
    
    <tr>
        <td rowspan="2">1</td>
        <td rowspan="2">Electromagnetic Theory and Transmission Lines</td>
       
        <td><a href="https://www.youtube.com/watch?v=Z-B4LmlJBq8" target="_blank">
        View</a></td>
        
        
    </tr>
    <tr>

    <td><a href="https://www.youtube.com/watch?v=Mxm9I-qQL38" target="_blank">
        View</a></td>
    </tr>
   
    <tr>
        <td>2</td>
        <td>Control Systems</td>
      
        <td><a href="https://www.youtube.com/watch?v=LQbPuRl6_1E" target="_blank">
        View</a></td>
        
       
    </tr>

    <tr>
        <td>3</td>
        <td>Antennas and Wave Propagation</td>
       
        <td><a href="https://www.youtube.com/watch?v=ybrHBijn6_U" target="_blank">
        View</a></td>
        
        
    </tr>
    <tr>
        <td>4</td>
        <td>VLSI</td>
       
        <td><a href="https://www.youtube.com/watch?v=EcW3mAQStHc" target="_blank">
        View</a></td>
       
       
    </tr>
    <tr>
        <td>5</td>
        <td>Signals and Systems</td>
       
        <td><a href="https://www.youtube.com/watch?v=95V4RBHfK1Q" target="_blank">
        View</a></td>
       
       
    </tr>
    <tr>
        <td>6</td>
        <td>Computer Organization and Architecture</td>
       
        <td><a href="https://www.youtube.com/watch?v=txlZ90-bHmc" target="_blank">
        View</a></td>
       
       
    </tr>
    <tr>
        <td  rowspan="2">7</td>
        <td  rowspan="2">Microprocessor and Micro-controller</td>
       
        <td><a href="https://www.youtube.com/watch?v=G49blG8TuWU" target="_blank">
        View</a></td>
    
       
       
       
    </tr>
    <tr>
    <td><a href="https://www.youtube.com/watch?v=eFt8Wzw4cd8" target="_blank">
    View</a></td>
    </tr>
    <tr>
        <td>8</td>
        <td>Digital Logic Design</td>
       
        <td><a href="https://www.youtube.com/watch?v=GWmqAg9yM6M" target="_blank">
        View</a></td>
       
       
    </tr>
    <tr>
        <td>9</td>
        <td>Switching Theory and Logic Design</td>
       
        <td><a href="https://www.youtube.com/watch?v=D-pVdTJJ3Mg" target="_blank">
        View</a></td>
       
       
    </tr>
    <tr>
        <td>10</td>
        <td>Analog and Digital Circuits</td>
       
        <td><a href="https://www.youtube.com/watch?v=IsfW2mfeJS8" target="_blank">
        View</a></td>
       
       
    </tr>
    <tr>
        <td>11</td>
        <td>Communication Systems</td>
       
        <td><a href="https://www.youtube.com/watch?v=0oBMpxaKl8A" target="_blank">
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
        <td>Internet of Things Fundamentals</td>
        <td>Add on/ certification program</td>
       
        <td>21-09-2022</td>
        <td>Dr.D.Surender Associate Professor in ECE</td>
       
        <td>127</td>
       
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
        <td>Signal processing using Mat lab</td>
       
        <td>Add on/ certification program</td>
        <td>01-12-2021</td>
        <td>P.AJAY KUMAR Asst.prof in ECE</td>
        <td>125</td>
       
    </tr>
    <tr>
        <td></td>
        <td>Wireless</td>
       
        <td>Webinar</td>
        <td>09-11-2021</td>
        <td>VENKATA</td>
        <td>64</td>
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
        <td>PCB Design</td>
        <td>Add on/ certification program</td>
       
        <td>02-11-2020</td>
       
        <td>B.BHARGVENDRA Asst prof in ECE</td>
        
        <td>454</td>
       
    </tr>
    <tr>
        <td></td>
        <td>Rasberry Pi</td>
        <td>workshop</td>
      
        <td>29-06-2021</td>
       
        <td>GS.ARUN KUMAR Asst prof in ECE</td>
        
        <td>61</td>
       
    </tr>
    <tr>
        <td></td>
        <td>Arduino and Its Applications</td>
        <td>Webinar</td>
      
        <td>28-08-2020</td>
      
        <td>M.KRANTHI KUMAR Asst prof in ECE</td>
        
        <td>61</td>
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
                                                                    <td>MANTHRI ROHITH</td>
                                                                    <td>20S45A0445</td>
                                                                    <td>HIKE EDU</td>
                                                                    <td>vgse/2023/ECE/001</td>
                                                                   
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>SHRIMAN RYAKAM</td>
                                                                    <td>20S45A0463</td>
                                                                    <td>TCS</td>
                                                                    <td>vgse/2023/ECE/002</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>ASHWINI SUVIDHA PEDDAPETA</td>
                                                                    <td>19S41A0481</td>
                                                                    <td>TCS</td>
                                                                    <td>vgse/2023/ECE/004</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>K.ESHWAR </td>
                                                                    <td>20S45A0436</td>
                                                                    <td>SONATA</td>
                                                                    <td>vgse/2023/ECE/005</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>T.SHASHI KUMAR</td>
                                                                    <td>19S41A04A6</td>
                                                                    <td>SONATA</td>
                                                                    <td>vgse/2023/ECE/006</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>CHILUVERU NITHIN</td>
                                                                    <td>19S41A0418</td>
                                                                    <td>VITA TECHNOLOGIES</td>
                                                                    <td>vgse/2023/ECE/007</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>BHASHAVENA RAJKUMAR</td>
                                                                    <td>19S41A0409</td>
                                                                    <td>VITA TECHNOLOGIES</td>
                                                                    <td>vgse/2023/ECE/008</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>GADDAM KEERTHANA</td>
                                                                    <td>19S41A0430</td>
                                                                    <td>VITA TECHNOLOGIES</td>
                                                                    <td>vgse/2023/ECE/009</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>CHALLA PRAVEENA</td>
                                                                    <td>19S41A0416</td>
                                                                    <td>VITA TECHNOLOGIES</td>
                                                                    <td>vgse/2023/ECE/010</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>GUNTUKU DEEPTHI</td>
                                                                    <td>19S41A0442</td>
                                                                    <td>Ethon Health care solutions</td>
                                                                    <td>vgse/2023/ECE/011</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>DARAVENI AJAY KUMAR</td>
                                                                    <td>19S41A0421</td>
                                                                    <td>Ethon Health care solutions</td>
                                                                    <td>vgse/2023/ECE/012</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>BOLLI RAVINDHAR</td>
                                                                    <td>19S41A0412</td>
                                                                    <td>Ethon Health care solutions</td>
                                                                    <td>vgse/2023/ECE/013</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>KONDA JAGAN</td>
                                                                    <td>19S41A0459</td>
                                                                    <td>Ethon Health care solutions</td>
                                                                    <td>vgse/2023/ECE/014</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>UPPULA SAITEJA</td>
                                                                    <td>19S41A04A8</td>
                                                                    <td>Ethon Health care solutions</td>
                                                                    <td>vgse/2023/ECE/015</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>NARAHARI SAI PRASANNA</td>
                                                                    <td>19S41A0475</td>
                                                                    <td>Ethon Health care solutions</td>
                                                                    <td>vgse/2023/ECE/016</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>GURRALA KAVEESHWAR </td>
                                                                    <td>19S41A0443</td>
                                                                    <td>Ethon Health care solutions</td>
                                                                    <td>vgse/2023/ECE/017</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>GADE SRUTHI</td>
                                                                    <td>19S41A04329</td>
                                                                    <td>Ethon Health care solutions</td>
                                                                    <td>vgse/2023/ECE/018</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>MARKA NITHISH GOUD </td>
                                                                    <td>20S45A0448</td>
                                                                    <td>Ethon Health care solutions</td>
                                                                    <td>vgse/2023/ECE/019</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>BADDAM KEERTHANA</td>
                                                                    <td>19S41A0406</td>
                                                                    <td>Ethon Health care solutions</td>
                                                                    <td>vgse/2023/ECE/020</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>BANDARI SUHAS</td>
                                                                    <td>19S41A0407</td>
                                                                    <td>AMAZON</td>
                                                                    <td>vgse/2023/ECE/021</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>BUCHALA SRIHARSHA</td>
                                                                    <td>19S41A0413</td>
                                                                    <td>AMAZON</td>
                                                                    <td>vgse/2023/ECE/022</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>CHENNOJI VARSHA</td>
                                                                    <td>19S41A0417</td>
                                                                    <td>AMAZON</td>
                                                                    <td>vgse/2023/ECE/023</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>CHIPPA RAMYA</td>
                                                                    <td>19S41A0420</td>
                                                                    <td>AMAZON</td>
                                                                    <td>vgse/2023/ECE/024</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>DUBBAKA THARUN</td>
                                                                    <td>19S41A0424</td>
                                                                    <td>AMAZON</td>
                                                                    <td>vgse/2023/ECE/025</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>GADDE SHIVA SATHWIK</td>
                                                                    <td>19S41A0431</td>
                                                                    <td>CAPGEMINI</td>
                                                                    <td>vgse/2023/ECE/026</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>KANKANALA ADHARSH</td>
                                                                    <td>19S41A0540</td>
                                                                    <td>CAPGEMINI</td>
                                                                    <td>vgse/2023/ECE/027</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>THIRUMALA JAYADEVA SAI</td>
                                                                    <td>19S41A0593</td>
                                                                    <td>CAPGEMINI</td>
                                                                    <td>vgse/2023/ECE/028</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>MOHAMMED SUFIYAN</td>
                                                                    <td>19S41A0559</td>
                                                                    <td>CAPGEMINI</td>
                                                                    <td>vgse/2023/ECE/029</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>JALAGAM SAIKRISHNA</td>
                                                                    <td>19S41A0445</td>
                                                                    <td>GENPACT</td>
                                                                    <td>vgse/2023/ECE/030</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>JANGILI RACHANA</td>
                                                                    <td>19S41A0449</td>
                                                                    <td>GENPACT</td>
                                                                    <td>vgse/2023/ECE/031</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>KALYANAPU MOUNIKA</td>
                                                                    <td>19S41A0452</td>
                                                                    <td>GENPACT</td>
                                                                    <td>vgse/2023/ECE/032</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>KOLA SANGEETHA</td>
                                                                    <td>19S41A0457</td>
                                                                    <td>GENPACT</td>
                                                                    <td>vgse/2023/ECE/033</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>KOPPULA ARUN</td>
                                                                    <td>19S41A0460</td>
                                                                    <td>GENPACT</td>
                                                                    <td>vgse/2023/ECE/034</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>KUSA KEERTHI</td>
                                                                    <td>19S41A0465</td>
                                                                    <td>NJOY</td>
                                                                    <td>vgse/2023/ECE/035</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>MUTHYAMPELL I SHRUTHI</td>
                                                                    <td>19S41A0473</td>
                                                                    <td>NJOY</td>
                                                                    <td>vgse/2023/ECE/036</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>NERELLA KAVYA</td>
                                                                    <td>19S41A0478</td>
                                                                    <td>NJOY</td>
                                                                    <td>vgse/2023/ECE/037</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>PENCHALA SAI VISHWAK RAO</td>
                                                                    <td>19S41A0483</td>
                                                                    <td>NJOY</td>
                                                                    <td>vgse/2023/ECE/038</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>PITTALA SRAVANI</td>
                                                                    <td>19S41A0486</td>
                                                                    <td>NJOY</td>
                                                                    <td>vgse/2023/ECE/039</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>PUDARI RUCHITHA GOUD</td>
                                                                    <td>19S41A0489</td>
                                                                    <td>SLV</td>
                                                                    <td>vgse/2023/ECE/040</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>ROUTHU ANUSAI</td>
                                                                    <td>19S41A0493</td>
                                                                    <td>SLV</td>
                                                                    <td>vgse/2023/ECE/041</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>SAMMETA DEEPAK</td>
                                                                    <td>19S41A0496</td>
                                                                    <td>SLV</td>
                                                                    <td>vgse/2023/ECE/042</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>SUNCHU AKHILA</td>
                                                                    <td>19S41A04A1</td>
                                                                    <td>SLV</td>
                                                                    <td>vgse/2023/ECE/043</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>THANGALLAPE LLI SANDEEP KUMAR</td>
                                                                    <td>19S41A04A4</td>
                                                                    <td>SLV</td>
                                                                    <td>vgse/2023/ECE/044</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>VELISHALA RAVITEJA</td>
                                                                    <td>19S41A04B1</td>
                                                                    <td>SLV</td>
                                                                    <td>vgse/2023/ECE/045</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>KANDULA YASHWANTH</td>
                                                                    <td>19S41A04B7</td>
                                                                    <td>SLV</td>
                                                                    <td>vgse/2023/ECE/046</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>ANKALAPU PRASHANTH</td>
                                                                    <td>20S45A0406</td>
                                                                    <td>SLV</td>
                                                                    <td>vgse/2023/ECE/047</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>BATTHULA RAVALI</td>
                                                                    <td>20S45A0412</td>
                                                                    <td>SLV</td>
                                                                    <td>vgse/2023/ECE/048</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>CHIGURLA SAGAR</td>
                                                                    <td>20S45A0418</td>
                                                                    <td>SLV</td>
                                                                    <td>vgse/2023/ECE/049</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>GODISHALA SAI CHANDANA</td>
                                                                    <td>20S45A0425</td>
                                                                    <td>INCLINE INVENTIONS</td>
                                                                    <td>vgse/2023/ECE/050</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>KAMSANI MANOJ</td>
                                                                    <td>20S45A0431</td>
                                                                    <td>INCLINE INVENTIONS</td>
                                                                    <td>vgse/2023/ECE/051</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>KOYADA SRIVANI</td>
                                                                    <td>20S45A0439</td>
                                                                    <td>INCLINE INVENTIONS</td>
                                                                    <td>vgse/2023/ECE/052</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>MARAM RENUKA</td>
                                                                    <td>20S45A0446</td>
                                                                    <td>INCLINE INVENTIONS</td>
                                                                    <td>vgse/2023/ECE/053</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>MOHAMMED SANIYA SULTHANA </td>
                                                                    <td>20S45A0453</td>
                                                                    <td>INCLINE INVENTIONS</td>
                                                                    <td>vgse/2023/ECE/054</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>PONNAM PRAVALIKA </td>
                                                                    <td>20S45A0461</td>
                                                                    <td>INCLINE INVENTIONS</td>
                                                                    <td>vgse/2023/ECE/055</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>UPARAPU PUSHPALATHA </td>
                                                                    <td>20S45A0467</td>
                                                                    <td>INCLINE INVENTIONS</td>
                                                                    <td>vgse/2023/ECE/056</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>ADEPU SHRAVYA </td>
                                                                    <td>19S41A0402</td>
                                                                    <td>PIKE SOLUTIONS</td>
                                                                    <td>vgse/2023/ECE/057</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>EKKALADEVI VAMSHI </td>
                                                                    <td>19S41A0427</td>
                                                                    <td>PIKE SOLUTIONS</td>
                                                                    <td>vgse/2023/ECE/058</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>HANUMANDLA SAI PRASAD REDDY </td>
                                                                    <td>19S41A0444</td>
                                                                    <td>PIKE SOLUTIONS</td>
                                                                    <td>vgse/2023/ECE/059</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>KOTTE SUJEETH</td>
                                                                    <td>19S41A0463</td>
                                                                    <td>PIKE SOLUTIONS</td>
                                                                    <td>vgse/2023/ECE/060</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>POCHAMPALLI RAJU </td>
                                                                    <td>19S41A0487</td>
                                                                    <td>PIKE SOLUTIONS</td>
                                                                    <td>vgse/2023/ECE/061</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>MAMATHA GUDIKANDULA </td>
                                                                    <td>19S41A0438</td>
                                                                    <td>TCS</td>
                                                                    <td>vgse/2023/ECE/003</td>
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
                                                                    <td>AILENI RANADEEP</td>
                                                                    <td>18S41A0401</td>
                                                                    <td>MPHASIS,PACTERAEDGE</td>
                                                                    <td>vgse/2022/ECE/001</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>AMEREDDY MANJULA</td>
                                                                    <td>18S41A0403</td>
                                                                    <td>Wipro</td>
                                                                    <td>vgse/2022/ECE/002</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>ANANTHOJU SAIKIRAN</td>
                                                                    <td>18S41A0404</td>
                                                                    <td>Citius Tech,wipro</td>
                                                                    <td>vgse/2022/ECE/003</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>ANNAPURNA YEKKALI	</td>
                                                                    <td>18S41A0405</td>
                                                                    <td>MPHASIS	</td>
                                                                    <td>vgse/2022/ECE/004</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>ATIKETI SWATHI	</td>
                                                                    <td>18S41A0406</td>
                                                                    <td>Wipro</td>
                                                                    <td>vgse/2022/ECE/005</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>BOBBILI SUSHMITHA	</td>
                                                                    <td>18S41A0413</td>
                                                                    <td>Wipro	</td>
                                                                    <td>vgse/2022/ECE/006</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>CHEVULA RAJANIKANTH</td>
                                                                    <td>18S41A0420</td>
                                                                    <td>MPHASIS	</td>
                                                                    <td>vgse/2022/ECE/007</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>CHOPPARI SANDHYA	</td>
                                                                    <td>18S41A0422</td>
                                                                    <td>Wipro</td>
                                                                    <td>vgse/2022/ECE/008</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>DYAVANAPELLY MANASA	</td>
                                                                    <td>18S41A0425</td>
                                                                    <td>Wipro</td>
                                                                    <td>vgse/2022/ECE/009</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>FURQANIA ARSHI</td>
                                                                    <td>18S41A0429</td>
                                                                    <td>Wipro</td>
                                                                    <td>vgse/2022/ECE/010</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>GADDAM SOUMYA	</td>
                                                                    <td>18S41A0430</td>
                                                                    <td>Wipro</td>
                                                                    <td>vgse/2022/ECE/011</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>GANGADHARI ANUSHA</td>
                                                                    <td>18S41A0432</td>
                                                                    <td>Wipro</td>
                                                                    <td>vgse/2022/ECE/012</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>GOLLE SANDHYA	</td>
                                                                    <td>18S41A04368</td>
                                                                    <td>	MPHASIS	</td>
                                                                    <td>vgse/2022/ECE/013</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>GONE SUPRAJA</td>
                                                                    <td>18S41A0437</td>
                                                                    <td>Wipro</td>
                                                                    <td>vgse/2022/ECE/014</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>GUDISE ESHWAR</td>
                                                                    <td>18S41A0439</td>
                                                                    <td>MPHASIS</td>
                                                                    <td>vgse/2022/ECE/015</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>ITHAM ARCHANA	</td>
                                                                    <td>18S41A0445</td>
                                                                    <td>Minfy,Wipro - P2	</td>
                                                                    <td>vgse/2022/ECE/016</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>JUHI FATHEEN	</td>
                                                                    <td>18S41A0448</td>
                                                                    <td>Wipro</td>
                                                                    <td>vgse/2022/ECE/017</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>KANKANALA PRATHIMA</td>
                                                                    <td>18S41A0451</td>
                                                                    <td>Wipro</td>
                                                                    <td>vgse/2022/ECE/018</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>KASARLA PREETHI	</td>
                                                                    <td>18S41A0455</td>
                                                                    <td>	NTT Data	</td>
                                                                    <td>vgse/2022/ECE/019</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>KOLIPAKA HARIKA	</td>
                                                                    <td>18S41A0457</td>
                                                                    <td>Wipro</td>
                                                                    <td>vgse/2022/ECE/020</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>KOMMU VAISHNAVI	</td>
                                                                    <td>18S41A0458</td>
                                                                    <td>Wipro</td>
                                                                    <td>vgse/2022/ECE/021</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>KONDAMEEDI ANUSARIKA</td>
                                                                    <td>18S41A0459</td>
                                                                    <td>SONATA</td>
                                                                    <td>vgse/2022/ECE/022</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>MOHAMMAD WAHED ALI</td>
                                                                    <td>18S41A0472</td>
                                                                    <td>Citius Tech,GLOBAL QUEST</td>
                                                                    <td>	vgse/2022/ECE/023</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>NARSINGOJU AISHWARYA</td>
                                                                    <td>18S41A0480</td>
                                                                    <td>NTT Data</td>
                                                                    <td>vgse/2022/ECE/024</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>NUCHU SAI SRUJANA	</td>
                                                                    <td>18S41A0483</td>
                                                                    <td>MPHASIS</td>
                                                                    <td>vgse/2022/ECE/025</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>PADALA MADHURI	</td>
                                                                    <td>18S41A0485</td>
                                                                    <td>Wipro</td>
                                                                    <td>vgse/2022/ECE/026</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>PAKALA HARITHA</td>
                                                                    <td>18S41A0486</td>
                                                                    <td>Wipro</td>
                                                                    <td>vgse/2022/ECE/027</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>PASHAM VARSHA	</td>
                                                                    <td>18S41A0488</td>
                                                                    <td>	Pactera Edge	</td>
                                                                    <td>vgse/2022/ECE/028</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>PONNAM MEGHANA	</td>
                                                                    <td>18S41A0495</td>
                                                                    <td>MPHASIS</td>
                                                                    <td>vgse/2022/ECE/029</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>PORANDLA SINDHUPRIYA</td>
                                                                    <td>18S41A0497</td>
                                                                    <td>Pactera Edge	</td>
                                                                    <td>vgse/2022/ECE/030</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>PULISHETTI RAMYA	</td>
                                                                    <td>18S41A0498</td>
                                                                    <td>Wipro</td>
                                                                    <td>vgse/2022/ECE/031</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>RAMADUGU SANTHOSH</td>
                                                                    <td>18S41A04A1</td>
                                                                    <td>Wipro</td>
                                                                    <td>vgse/2022/ECE/032</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>THIRUNAHARI SHOBITH</td>
                                                                    <td>18S41A04A8</td>
                                                                    <td>Wipro</td>
                                                                    <td>vgse/2022/ECE/033</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>VARI RENUSRI	</td>
                                                                    <td>18S41A04B3</td>
                                                                    <td>	NTT Data	</td>
                                                                    <td>vgse/2022/ECE/034</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>VELDANDI ANJALI	</td>
                                                                    <td>18S41A04B4</td>
                                                                    <td>	TCS	</td>
                                                                    <td>vgse/2022/ECE/035</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>VENGALA RAMYA	</td>
                                                                    <td>18S41A04B5</td>
                                                                    <td>Wipro</td>
                                                                    <td>vgse/2022/ECE/036</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>VODNALA VAMSHI KRISHNA	</td>
                                                                    <td>18S41A04B6</td>
                                                                    <td>	Infosys	</td>
                                                                    <td>vgse/2022/ECE/037</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>VURADI ADITYA	</td>
                                                                    <td>18S41A04B8</td>
                                                                    <td>MPHASIS	</td>
                                                                    <td>vgse/2022/ECE/038</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>BHIMANATHINI SANDEEPA	</td>
                                                                    <td>18S41A0408</td>
                                                                    <td>AMAZON</td>
                                                                    <td>vgse/2022/ECE/039</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>BHUPATHI AKSHITHA</td>
                                                                    <td>18S41A0410</td>
                                                                    <td>AMAZON</td>
                                                                    <td>vgse/2022/ECE/040</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>BITUKU VILAS	</td>
                                                                    <td>18S41A0412</td>
                                                                    <td>AMAZON</td>
                                                                    <td>vgse/2022/ECE/041</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>BUDAMGUNTLA SANATH KUMAR	</td>
                                                                    <td>18S41A0415</td>
                                                                    <td>AMAZON</td>
                                                                    <td>vgse/2022/ECE/042</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>CHENNOJWALA SANNIHITHA	</td>
                                                                    <td>18S41A0418</td>
                                                                    <td>AMAZON</td>
                                                                    <td>vgse/2022/ECE/043</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>DEVARAKONDA SHIVANI	</td>
                                                                    <td>18S41A0424</td>
                                                                    <td>AMAZON</td>
                                                                    <td>vgse/2022/ECE/044</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>ERUMALLA MAMATHA	 </td>
                                                                    <td>18S41A0428</td>
                                                                    <td>EXCERS</td>
                                                                    <td>vgse/2022/ECE/045</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>GEEKURU SAI KRISHNA</td>
                                                                    <td>18S41A0434</td>
                                                                    
                                                                    <td>EXCERS</td>
                                                                    <td>vgse/2022/ECE/046</td>
                                                                    
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>GODALA CHANDRA TEJA	</td>
                                                                    <td>18S41A0435</td>
                                                                    <td>EXCERS</td>
                                                                    <td>vgse/2022/ECE/047</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>GUNDELLI DEEPTHI	</td>
                                                                    <td>18S41A0440</td>
                                                                    <td>EXCERS</td>
                                                                    <td>vgse/2022/ECE/048</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>GUNDETI KAVYA	</td>
                                                                    <td>18S41A0442</td>
                                                                    <td>EXCERS</td>
                                                                    <td>	vgse/2022/ECE/049</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>JUNNUTHALA DAMODHAR REDDY	</td>
                                                                    <td>18S41A0449</td>
                                                                    <td>LETSGETTIN</td>
                                                                    <td>vgse/2022/ECE/050</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>KARIVEDA AKHILA	</td>
                                                                    <td>18S41A0452</td>
                                                                    <td>LETSGETTIN</td>
                                                                    <td>vgse/2022/ECE/051</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>KARUMALLA MOUNIKA	</td>
                                                                    <td>18S41A0454</td>
                                                                    <td>LETSGETTIN</td>
                                                                    <td>vgse/2022/ECE/052</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>KOREPU AKHILA	</td>
                                                                    <td>18S41A0461</td>
                                                                    <td>	UBER	</td>
                                                                    <td>vgse/2022/ECE/055</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>LOKURTHI SWAPNA		</td>
                                                                    <td>18S41A0463</td>
                                                                    <td>	UBER	</td>
                                                                    <td>vgse/2022/ECE/056</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>MEDHINI KEERTHANA	</td>
                                                                    <td>18S41A0470</td>
                                                                    <td>	UBER	</td>
                                                                    <td>vgse/2022/ECE/057</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>MOSARLA PRAHARSHA</td>
                                                                    <td>18S41A0474</td>
                                                                    <td>	UBER	</td>
                                                                    <td>vgse/2022/ECE/058</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>NEELAM ALEKHYA	</td>
                                                                    <td>18S41A0481</td>
                                                                    <td>	UBER	</td>
                                                                    <td>vgse/2022/ECE/059</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>PASULA JAYASREE	</td>
                                                                    <td>18S41A0489</td>
                                                                    <td>	UBER	</td>
                                                                    <td>vgse/2022/ECE/060</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>PENCHALA RAMYA	</td>
                                                                    <td>18S41A0492</td>
                                                                    <td>	UBER	</td>
                                                                    <td>vgse/2022/ECE/061</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>RACHAKONDA SAI KUMAR	</td>
                                                                    <td>18S41A0499</td>
                                                                    <td>	UBER	</td>
                                                                    <td>vgse/2022/ECE/062</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>RATNA DIVYASAI	</td>
                                                                    <td>18S41A04A2</td>
                                                                    <td>	UBER	</td>
                                                                    <td>vgse/2022/ECE/063</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>SOOROJU CHANDRIKA</td>
                                                                    <td>18S41A04A5</td>
                                                                    <td>	UBER	</td>
                                                                    <td>vgse/2022/ECE/064</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>THUMMANAPELI NAVEEN	</td>
                                                                    <td>18S41A04B0</td>
                                                                    <td>Minfy</td>
                                                                    <td>vgse/2022/ECE/065</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>GODISHALA SUNAYANA	</td>
                                                                    <td>19S45A0402</td>
                                                                    <td>LETSGETTIN</td>
                                                                    <td>vgse/2022/ECE/053</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>MAADUGULA SAHITHYA</td>
                                                                    <td>19S45A0405</td>
                                                                    <td>LETSGETTIN	</td>
                                                                    <td>vgse/2022/ECE/054</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>GUDA SRAVIKA	</td>
                                                                    <td>18S41A04C0</td>
                                                                    <td>UBER</td>
                                                                    <td>vgse/2022/ECE/066</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>NUNAVATH SUMALATHA</td>
                                                                    <td>19S45A0408</td>
                                                                    <td>UBER</td>
                                                                    <td>vgse/2022/ECE/067</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>VARIKOLLA RUCHITHA</td>
                                                                    <td>19S45A0412</td>
                                                                    <td>UBER</td>
                                                                    <td>vgse/2022/ECE/068</td>
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
                                                                    <td>ALLENKI RAMYA	</td>
                                                                    <td>17S41A0401</td>
                                                                    <td>	TCS	</td>
                                                                    <td>vgse/2021/ECE/001</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>BODA MAHESH	</td>
                                                                    <td>17S41A0403</td>
                                                                    <td>	EDGEVERVE	</td>
                                                                    <td>vgse/2021/ECE/002</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>BODIGE PRAVALIKA	</td>
                                                                    <td>17S41A0404</td>
                                                                    <td>	BROADBRIDGE	</td>
                                                                    <td>vgse/2021/ECE/003</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>CHIPPA ANNAPOORNA	</td>
                                                                    <td>17S41A0408</td>
                                                                    <td>SAVANTIS SOLUTION	</td>
                                                                    <td>vgse/2021/ECE/004</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>ERUMALLA ANIL	</td>
                                                                    <td>17S41A0413</td>
                                                                    <td>TCS</td>
                                                                    <td>vgse/2021/ECE/005</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>FARKHANDA TANIYA NAJAM	</td>
                                                                    <td>17S41A0415</td>
                                                                    <td>	SAVANTIS SOLUTION	</td>
                                                                    <td>vgse/2021/ECE/006</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>GANDLA SANGEETHA	</td>
                                                                    <td>17S41A0417</td>
                                                                    <td>	veta technologies	</td>
                                                                    <td>vgse/2021/ECE/007</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>GUJJULA SHRAVANI	</td>
                                                                    <td>17S41A0421</td>
                                                                    <td>	AGGNE	</td>
                                                                    <td>vgse/2021/ECE/008</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>GYAJANGI NARMADA</td>
                                                                    <td>17S41A0423</td>
                                                                    <td>TCS</td>
                                                                    <td>vgse/2021/ECE/009</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>HAFSA NISHAD	</td>
                                                                    <td>17S41A0424</td>
                                                                    <td>VETA TECHNOLOGIES</td>
                                                                    <td>vgse/2021/ECE/010</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>KACHAM VAISHNAVI	</td>
                                                                    <td>17S41A0426</td>
                                                                    <td>	vihawk teck solutions pvt ltd 	</td>
                                                                    <td>vgse/2021/ECE/011</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>KASARLA RAMYA	</td>
                                                                    <td>17S41A0429</td>
                                                                    <td>	vihawk teck solutions pvt ltd 	</td>
                                                                    <td>vgse/2021/ECE/012</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>KATAKAM VYSHNAVI	</td>
                                                                    <td>17S41A0430</td>
                                                                    <td>TCS</td>
                                                                    <td>vgse/2021/ECE/013</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>KOKKULA RAMYA	</td>
                                                                    <td>17S41A0431</td>
                                                                    <td>TCS</td>
                                                                    <td>vgse/2021/ECE/014</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>ATHE RAJU	</td>
                                                                    <td>18S45A0401</td>
                                                                    <td>WIPRO</td>
                                                                    <td>vgse/2021/ECE/015</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>CHETTUKINDI SHIVANI	</td>
                                                                    <td>18S45A0402</td>
                                                                    <td>HCL</td>
                                                                    <td>	vgse/2021/ECE/016</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>DUDAM SRIKARUNYA</td>
                                                                    <td>18S45A0403</td>
                                                                    <td>peopleLink unified communications Pvt .Ltd </td>
                                                                    <td>vgse/2021/ECE/017</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>GOWDA PAVANKUMAR	</td>
                                                                    <td>18S45A0404</td>
                                                                    <td>TCS</td>
                                                                    <td>vgse/2021/ECE/018</td>
                                                                    
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>KARNE RANGAMMA	</td>
                                                                    <td>18S45A0407</td>
                                                                    <td>	LTI	</td>
                                                                    <td>vgse/2021/ECE/019</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>MADDI MADHURI	</td>
                                                                    <td>18S45A0409</td>
                                                                    <td>vihawk teck solutions pvt ltd 	</td>
                                                                    <td>vgse/2021/ECE/020</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>MOHD ABDUL SAMAD</td>
                                                                    <td>18S45A0410</td>
                                                                    <td>	SAVANTIS SOLUTION</td>
                                                                    <td>	vgse/2021/ECE/021</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>MUSKU ABHINAY REDDY</td>
                                                                    <td>18S45A0411</td>
                                                                    <td>TCS</td>
                                                                    <td>vgse/2021/ECE/022</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>SYEDA KHANSA ATIF	</td>
                                                                    <td>16S41A0476</td>
                                                                    <td>	vihawk teck solutions pvt ltd 	</td>
                                                                    <td>vgse/2021/ECE/023</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>UPPULURI LIKITHSAI	</td>
                                                                    <td>16S41A0481</td>
                                                                    <td>	veta technologies	</td>
                                                                    <td>vgse/2021/ECE/024</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>MACHA RAMYA	</td>
                                                                    <td>17S41A0439</td>
                                                                    <td>TCS</td>
                                                                    <td>vgse/2021/ECE/025</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>MACHA SUSMITHA	</td>
                                                                    <td>17S41A0440</td>
                                                                    <td>	SAVANTIS SOLUTION</td>
                                                                    <td>	vgse/2021/ECE/026</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>MADIREDDY LAHARI	</td>
                                                                    <td>17S41A0441</td>
                                                                    <td>	SAVANTIS SOLUTION</td>
                                                                    <td>	vgse/2021/ECE/027</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>MEHRAJ FATHIMA	</td>
                                                                    <td>17S41A0444</td>
                                                                    <td>SAVANTIS SOLUTION	</td>
                                                                    <td>vgse/2021/ECE/028</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>NAGA SHARANYA SHETTI	</td>
                                                                    <td>17S41A0446</td>
                                                                    <td>	SAVANTIS SOLUTION	</td>
                                                                    <td>vgse/2021/ECE/029</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>PENDYALA HARIKA	</td>
                                                                    <td>17S41A0450</td>
                                                                    <td>SAVANTIS SOLUTION	</td>
                                                                    <td>vgse/2021/ECE/030</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>RODDA GANESH KUMAR</td>
                                                                    <td>17S41A0453</td>
                                                                    <td>vihawk teck solutions pvt ltd </td>
                                                                    <td>vgse/2021/ECE/031</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>SANGEM RUCHITHA	</td>
                                                                    <td>17S41A0454</td>
                                                                    <td>TCS</td>
                                                                    <td>vgse/2021/ECE/032</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>THODETI ALEKYA	</td>
                                                                    <td>17S41A0458</td>
                                                                    <td>veta technologies	</td>
                                                                    <td>vgse/2021/ECE/033</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>VEMULA ANIL	</td>
                                                                    <td>17S41A0459</td>
                                                                    <td>ZENSAR	</td>
                                                                    <td>vgse/2021/ECE/034</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>KUMBALA SPANDANA</td>
                                                                    <td>17S45A0413</td>
                                                                    <td>	peopleLink unified communications Pvt .Ltd 	</td>
                                                                    <td>vgse/2021/ECE/035</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>RANGU SRUJANA	</td>
                                                                    <td>18S45A0421</td>
                                                                    <td>LTI</td>
                                                                    <td>vgse/2021/ECE/036</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>RAGULA SHIVANI	</td>
                                                                    <td>18S45A0422</td>
                                                                    <td>	vihawk teck solutions pvt ltd 	</td>
                                                                    <td>vgse/2021/ECE/037</td>
                                                                </tr>

                                                                <tr>
                                                                    <td></td>
                                                                    <td>KOYYADA SONY	</td>
                                                                    <td>18S45A0427</td>
                                                                    <td>vihawk teck solutions pvt ltd </td>
                                                                    <td>vgse/2021/ECE/038</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>VANGALA MADHAVI	</td>
                                                                    <td>18S45A0431</td>
                                                                    <td>vihawk teck solutions pvt ltd 	</td>
                                                                    <td>vgse/2021/ECE/039</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>VELPULA SRAVANTHI</td>
                                                                    <td>18S45A0432</td>
                                                                    <td>TCS</td>
                                                                    <td>vgse/2021/ECE/040</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>SAMALA SAI KRISHNA</td>
                                                                    <td>18S45A0435</td>
                                                                    <td>VETA TECHNOLOGIES</td>
                                                                    <td>vgse/2021/ECE/041</td>
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

                        <!-- <div class="tab-pane fade animate__animated animate__fadeInUp " id="v-pills-contact" role="tabpanel" aria-labelledby="v-pills-contact-tab" tabindex="0">
        <div class="committee_head">
                    <h3>Contact Information</h3>
                </div>
                <h5>Coming Soon</h5>
        </div> -->
                        <div class="tab-pane fade animate__animated animate__fadeInUp " id="v-pills-hod" role="tabpanel" aria-labelledby="v-pills-hod-tab" tabindex="0">
                            <div class="committee_head">
                                <h3>Contact HOD</h3>
                            </div>
                            <div class="row hod-start">
                                <div class="col-lg-4">
                                   <div class="hod-img">
                                   <img src="<?php echo $base_url; ?>/assets/images/ece/Venkata_Reddy_Adama.webp" alt="contact_hod_img" class="img-fluid" loading="lazy" decoding="async">
                             
                                 <div class="cse-hod">
                                    <h4>Mr. Venkata Reddy Adama</h4>
                                    <p>Associate Professor & HOD</p>
                                   
                                 </div>
                                
</div>
                                </div>
                                <div class="col-lg-8">
                                    <div id="contact-info" >
                                        <p>Mr. Venkata Reddy Adama is an Associate Professor and HOD in the Department of Electronics and Communication Engineering.
                                             He is having 20 years of experience in Teaching. He is pursing Ph.D from Nagpur University (RTMNU- Rashtrasant Tukadoji 
                                             Maharaj Nagpur University) Nagpur, Maharashtra. He has received M.Tech (Embedded Systems) from Jawaharlal Nehru Technological
                                              University Hyderabad and B.Tech Degree from Jawaharlal Nehru Technological University Hyderabad. His Teaching and 
                                              Research interests include Communication Systems, Wireless Sensor Networks and Cognitive Radio. He has 16 publications
                                               in reputed International Journals and Conferences.</p>

                                                 <div class="cse-hod2">
                                    <h4>Contact</h4>
                                    
                                    <p><b>Mobile Number:</b>8121860999</p>
                                    <p><b>Email:</b>vgse.ecehod@gmail.com</p>
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
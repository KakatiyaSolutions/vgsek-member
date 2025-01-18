<!doctype html>
<html lang="en">

<head>
    <?php include('../head_links.php') ?>
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/dist/css/placement.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/dist/css/academic.css">
</head>
<style>
    @media (max-width: 1440px) {
    /* .plmnt_inn_img {
    margin-bottom: -101px;
    border-bottom: solid 2px #000;
    width: 100%;
} */
.placemnt_toppers .container-fluid {
    padding: 0 70px;
}
.plcmnt_inn_sec_text p {
    font-size: 25px;
}
.plcmnt_inn_sec_text h3 {
    font-size: 35px;
}
.plmnt_lpa h3 {
    font-size: 80px;
    }
    .plmnt_lpa span {
    font-size: 50px;
    margin-left: -9px;
}
.plcmnt_inn_sec_text h4 {
    font-size: 30px;
    margin-top: 0px;
}
.plcmnt_inn_sec_text img {
    width: 177px;
}

.plmnt_testi_video img {
    width: 100%;
    height: 400px;
}
    }
    @media (max-width: 1366px) {
    footer {
    margin-top: 322px;
}
.recruiter_head h2 {
    font-size: 35px;
}
.tp_inn_text h3 {
    font-size: 50px;
}
.tp_inn_text p {
    font-size: 25px;
}
.content {
    font-size: 25px;
    }
    .plmnt_testi_video img {
        width: 100%;
        height: auto;
    }
}

@media (max-width: 1024px) {
.placemnt_toppers .container-fluid {
        padding: 0 40px;
    }
    .plcmnt_inn_sec_text h3 {
        font-size: 30px;
    }
    .plmnt_lpa h3 {
        font-size: 50px;
    }
    .plcmnt_inn_sec_text img {
        width: 150px;
    }
    footer {
        margin-top: 210px;
    }
}
@media (max-width:991px) {
.tp_inn_text {
    border-right:none;
}
.tp_sec .row {
    align-items: center;
    row-gap: 20px;
}
.tp_main {
  
    background: linear-gradient(to bottom, var(--blue) 79%, var(--white) 20%);
}
.plmnt_testi_video .paly-button {
    width: 90px;
    height: 90px;
    top: 34%;
    left: 38%;
}
.order-lg-1{
    order:2;

}
.order-lg-2{
    order:1;
    
}
.plmnt_inn_st::before {
    
        height: 89%;
}
.plmnt_inn_st::after {
    height: 85%;
}
/* .plmnt_inn_st::before {
    position: absolute;
    content: "";
    left: 0px;
    top: 80px;
    width: 100%;
    height: 83%;
} */
.plmnt_inn_st {
    position: relative;
    z-index: 1;
    width: 58%;
    margin-right: 10px;
}
.plcmnt_inn_sec_text h3 {
        font-size: 40px;
    }
.plmnt_lpa h3 {
        font-size: 80px;
    }
    .plcmnt_inn_sec_text h4 {
        font-size: 40px;
        margin-top: 7px;
    }
    .testi_plmnt_sec {
    padding: 0 100px 50px 100px;
    margin-top: 50px;
}
    
}
@media (max-width:767px) {
    .plmnt_inn_st::before {
        height: 84%;
    }
    .testi_plmnt_sec {
        padding: 0 0px 50px 0px;
        margin-top: 50px;
    }
}
@media (max-width:600px) {
    .plcmnt_inn_sec_text h3 {
        font-size: 35px;
    }
.plmnt_lpa h3 {
        font-size: 64px;
    }
    .plcmnt_inn_sec_text h4 {
        font-size: 34px;
        margin-top: 7px;
    }
    .plmnt_inn_st {
    
        width: 51%;
    }
    .plmnt_inn_st::before {
        height: 79%;
    }
    .plmnt_inn_st::after {
        height: 80%;
    }
}
@media (max-width:540px) {
.placemnt_toppers  .row{
 row-gap:20px;
}
.plcmnt_inn_sec_text h3 {
        font-size: 32px;
    }
.plmnt_lpa h3 {
        font-size: 55px;
    }
    footer {
        margin-top: 126px !important;
    }
   
}
@media (max-width:492px) {
.plmnt_inn_st {
        width: 45%;
    }
    .placemnt_toppers .container-fluid {
        padding: 0 10px;
    }
}
@media (max-width:432px) {
.plcmnt_inn_sec_text h3 {
        font-size: 28px;
    }
    .plmnt_lpa h3 {
        font-size: 45px;
    }
    .plmnt_inn_st::before {

    top: 60px;
    }
    .plmnt_inn_st::after {
        top: 60px;
    }
    .plcmnt_inn_sec_text p {
        font-size: 20px;
    }
    .plmnt_lpa span {
        font-size: 40px;
        margin-left: -7px;
    }
    .plcmnt_inn_sec_text h4 {
        font-size: 30px;
        margin-top: 2px;
    }
    .plcmnt_inn_sec_text img {
        width: 120px;
    }
    .content {
        font-size: 20px;
    }
    .content_left {
        padding: 10px 20px;
    }
    .tp_inn_text h3 {
        font-size: 40px;
    }
    .tp_inn_text p {
        font-size: 20px;
    }
}
@media (max-width:425px) {
.plcmnt_inn_sec_text h3 {
        font-size: 25px;
    }
    .plmnt_lpa h3 {
        font-size:40px;
    }
    .plcmnt_inn_sec_text h4 {
        font-size: 26px;
    }
    .plmnt_inn_st::before {
        top: 52px;
    }
    .plmnt_inn_st::after {
        top: 52px;
    }
    footer {
        margin-top: 80px !important;
    }
    .plmnt_testi_video .paly-button {
        width: 75px;
        height: 75px;
        top: 31%;
        left: 39%;
    }
}
@media (max-width:375px) {
.plcmnt_inn_sec_text h3 {
    font-size: 23px;
}
.plmnt_lpa h3 {
        font-size:35px;
    }
    .plmnt_lpa span {
        font-size: 30px;
    }
}
@media (max-width:360px) {
.plmnt_inn_st::before {
        top: 49px;
    }
    .plmnt_inn_st::after {
        top: 49px;
    }
    .plcmnt_inn_sec_text h3 {
        font-size: 21px;
    }
    .plmnt_lpa h3 {
        font-size:35px;
    }
    .plcmnt_inn_sec_text h4 {
        font-size: 22px;
    }
    .plcmnt_inn_sec_text img {
        width: 100px;
    }
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
                    <h4>Placement</h4>
                </div>

                <div class="bnr_bredcrumb">
                    <div class="container">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index">Home</a></li>
                                <!-- <li class="breadcrumb-item"><a href="#">Programs</a></li> -->
                                <li class="breadcrumb-item active" aria-current="page">Placement</li>
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


    <!-- <section class="placement_head_main">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="placent_head">
                        <h2><b>Placements</b> <br> Highlights 2023</h2>
                        <p>Vaageswari Engineering College is one of the best Engineering
                            college in the Karimnagar district, popularly Known as VEC, it was established by LOrem Educational Society in 2008</p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="placement_list">
                        <div class="placement_list_text">
                            <h4>100%</h4>
                            <hr>
                            <p>Campus Placement Record</p>
                        </div>
                        <div class="placement_list_text">
                            <h4>10L</h4>
                            <hr>
                            <p>Highest Salary <br> Per Annum for 2023</p>
                        </div>
                        <div class="placement_list_text">
                            <h4>100+</h4>
                            <hr>
                            <p>Associated Companies</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="internshala_main">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="intership_text_sec">
                        <h3>Interships</h3>
                        <hr>
                        <p>Many industries and startups provide internship opportunities to our students.
                            The interns are thus exposed to latest technologies. Students of VEC will do their
                            internships in Internshala
                            which is India’s No.1 internship and training platform where students get a feel of
                            corporate working culture.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="intership_sec_img">
                        <figure>
                            <img src="<?php echo $base_url; ?>assets/images/index/interns.png" alt="intership image" loading="lazy" decoding="async" class="img-fluid">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pl_vm_main">
        <div class="container">
            <div class="pl_vm_text_sec pl_vm_text_sec1">
                <h3>Training &amp; Placement Cell</h3>
                <hr>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">

                    <div class="pl_vm_sec_img">
                        <div class="pl_tpc_sec">
                            <div class="vision_bet">
                                <img src="<?php echo $base_url; ?>assets/images/icons/vision.png" class="img-fluid" alt="vision" loading="lazy" decoding="async">
                                <h5>Vision</h5>
                            </div>
                            <ul>
                                <div class="vns_depart_img">
                                    <img src="<?php echo $base_url; ?>assets/images/icons/list_type.webp" alt="list type image" class="img-fluid" loading="lazy">
                                    <li>Equipping the students with appropriate and conceptualized employable skills and
                                        steering them
                                        towards a value based promising career all around the world.</li>
                                </div>
                            </ul>
                        </div>
                        <div class="pl_tpc_sec">
                            <div class="vision_bet">
                                <img src="<?php echo $base_url; ?>assets/images/icons/mission.png" class="img-fluid" alt="mission" loading="lazy" decoding="async">
                                <h5>Mission</h5>
                            </div>
                            <ul>
                                <div class="vns_depart_img">
                                    <img src="<?php echo $base_url; ?>assets/images/icons/list_type.webp" alt="list type image" class="img-fluid" loading="lazy">
                                    <li>To attain cent percent placement for our students through accurate planning and
                                        absolute participation of students.</li>
                                </div>
                            </ul>
                        </div>

                    </div>

                    <div class="pl_vm_text_sec">
                        <h5>Objectives</h5>
                        <ul>
                            <div class="vns_depart_img">
                                <img src="<?php echo $base_url; ?>assets/images/icons/list_type.webp" alt="list type image" class="img-fluid" loading="lazy">
                                <li>Arranging off Campus, Pool Campus and exclusive Campus Recruitment Drives.</li>
                            </div>
                            <div class="vns_depart_img">
                                <img src="<?php echo $base_url; ?>assets/images/icons/list_type.webp" alt="list type image" class="img-fluid" loading="lazy">
                                <li>Organizing Aptitude &amp; Soft skills Training Programs to prepare our students to
                                    face Campus Recruitment process.</li>
                            </div>
                            <div class="vns_depart_img">
                                <img src="<?php echo $base_url; ?>assets/images/icons/list_type.webp" alt="list type image" class="img-fluid" loading="lazy">
                                <li>Organizing Mock Group discussion sessions and also Mock Tests to improve their
                                    communications skills &amp; interview facing as per the Company specific.</li>
                            </div>
                            <div class="vns_depart_img">
                                <img src="<?php echo $base_url; ?>assets/images/icons/list_type.webp" alt="list type image" class="img-fluid" loading="lazy">
                                <li>Communicate with HR Personnel, furnishing Institute profile and resume of the
                                    students for the sake of placements.</li>
                            </div>
                            <div class="vns_depart_img">
                                <img src="<?php echo $base_url; ?>assets/images/icons/list_type.webp" alt="list type image" class="img-fluid" loading="lazy">
                                <li>Interface between Industries – Institute interactions.</li>
                            </div>
                            <div class="vns_depart_img">
                                <img src="<?php echo $base_url; ?>assets/images/icons/list_type.webp" alt="list type image" class="img-fluid" loading="lazy">
                                <li>Arranging periodical aptitude tests for final year &amp; pre final year students.
                                </li>
                            </div>
                            <div class="vns_depart_img">
                                <img src="<?php echo $base_url; ?>assets/images/icons/list_type.webp" alt="list type image" class="img-fluid" loading="lazy">
                                <li>Arranging guest lecture of eminent personalities from Industry &amp; Career
                                    Counseling.</li>
                            </div>
                            <div class="vns_depart_img">
                                <img src="<?php echo $base_url; ?>assets/images/icons/list_type.webp" alt="list type image" class="img-fluid" loading="lazy">
                                <li>To motivate students aspire for higher studies and guiding them to take
                                    competitive exams such as CAT, GATE, TOEFL, GRE, IES,UPSC etc.</li>
                            </div>
                            <div class="vns_depart_img">
                                <img src="<?php echo $base_url; ?>assets/images/icons/list_type.webp" alt="list type image" class="img-fluid" loading="lazy">
                                <li>Organizing various activities to improve skills of students for competitive
                                    examinations.</li>
                            </div>
                            <div class="vns_depart_img">
                                <img src="<?php echo $base_url; ?>assets/images/icons/list_type.webp" alt="list type image" class="img-fluid" loading="lazy">
                                <li>Organizing Faculty Development Workshops.</li>
                            </div>
                            <div class="vns_depart_img">
                                <img src="<?php echo $base_url; ?>assets/images/icons/list_type.webp" alt="list type image" class="img-fluid" loading="lazy">
                                <li>Arranging Industrial visits for various departments.</li>
                            </div>
                            <div class="vns_depart_img">
                                <img src="<?php echo $base_url; ?>assets/images/icons/list_type.webp" alt="list type image" class="img-fluid" loading="lazy">
                                <li>Arranging Mentor Talks from industry experts.</li>
                            </div>
                        </ul>

                    </div>

                </div>

            </div>
        </div>
    </section>

    <section class="recruiter_main">
        <div class="container">
            <div class="plcmnt_head_top">
                <h2>Our Top Recruiters</h2>
                <hr>
            </div>
            <div class="row">
                <div class="col-lg-2">
                    <div class="recruiter_sec">
                        <img src="<?php echo $base_url; ?>assets/images/logo/Amazon.png" class="img-fluid" alt="logo" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="recruiter_sec">
                        <img src="<?php echo $base_url; ?>assets/images/logo/mphasis.webp" class="img-fluid" alt="logo" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="recruiter_sec">
                        <img src="<?php echo $base_url; ?>assets/images/logo/infosys.webp" class="img-fluid" alt="logo" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="recruiter_sec">
                        <img src="<?php echo $base_url; ?>assets/images/logo/minfy.webp" class="img-fluid" alt="logo" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="recruiter_sec">
                        <img src="<?php echo $base_url; ?>assets/images/logo/quest.webp" class="img-fluid" alt="logo" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="recruiter_sec">
                        <img src="<?php echo $base_url; ?>assets/images/logo/mindtree.webp" class="img-fluid" alt="logo" loading="lazy" decoding="async">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                    <div class="recruiter_sec">
                        <img src="<?php echo $base_url; ?>assets/images/logo/WIPRO.png" class="img-fluid" alt="logo" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="recruiter_sec">
                        <img src="<?php echo $base_url; ?>assets/images/logo/Capgemini.png" class="img-fluid" alt="logo" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="recruiter_sec">
                        <img src="<?php echo $base_url; ?>assets/images/logo/COGN.png" class="img-fluid" alt="logo" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="recruiter_sec">
                        <img src="<?php echo $base_url; ?>assets/images/logo/GENPACT.png" class="img-fluid" alt="logo" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="recruiter_sec">
                        <img src="<?php echo $base_url; ?>assets/images/logo/HCL.png" class="img-fluid" alt="logo" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="recruiter_sec">
                        <img src="<?php echo $base_url; ?>assets/images/logo/infosys.webp" class="img-fluid" alt="logo" loading="lazy" decoding="async">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                    <div class="recruiter_sec">
                        <img src="<?php echo $base_url; ?>assets/images/logo/mindtree.webp" class="img-fluid" alt="logo" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="recruiter_sec">
                        <img src="<?php echo $base_url; ?>assets/images/logo/minfy.webp" class="img-fluid" alt="logo" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="recruiter_sec">
                        <img src="<?php echo $base_url; ?>assets/images/logo/mphasis.webp" class="img-fluid" alt="logo" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="recruiter_sec">
                        <img src="<?php echo $base_url; ?>assets/images/logo/tm.png" class="img-fluid" alt="logo" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="recruiter_sec">
                        <img src="<?php echo $base_url; ?>assets/images/logo/tcs.webp" class="img-fluid" alt="logo" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="recruiter_sec">
                        <img src="<?php echo $base_url; ?>assets/images/logo/quest.webp" class="img-fluid" alt="logo" loading="lazy" decoding="async">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="placement_student">
        <div class="container">
            <div class="plcmnt_head_top">
                <h2>Student Placement</h2>
                <hr>
            </div>
            <div class="row">
                <div class="col-lg-2">
                    <div class="student_list">
                        <div class="student_img">
                            <img src="<?php echo $base_url; ?>assets/images/index/student_placement.webp" class="img-fluid" alt="student" loading="lazy" decoding="async">
                        </div>
                        <div class="student_text">
                            <h4>G. Sahitya</h4>
                            <p>18S41A0275</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="student_list">
                        <div class="student_img">
                            <img src="<?php echo $base_url; ?>assets/images/index/student_placement.webp" class="img-fluid" alt="student" loading="lazy" decoding="async">
                        </div>
                        <div class="student_text">
                            <h4>G. Sahitya</h4>
                            <p>18S41A0275</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="student_list">
                        <div class="student_img">
                            <img src="<?php echo $base_url; ?>assets/images/index/student_placement.webp" class="img-fluid" alt="student" loading="lazy" decoding="async">
                        </div>
                        <div class="student_text">
                            <h4>G. Sahitya</h4>
                            <p>18S41A0275</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="student_list">
                        <div class="student_img">
                            <img src="<?php echo $base_url; ?>assets/images/index/student_placement.webp" class="img-fluid" alt="student" loading="lazy" decoding="async">
                        </div>
                        <div class="student_text">
                            <h4>G. Sahitya</h4>
                            <p>18S41A0275</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="student_list">
                        <div class="student_img">
                            <img src="<?php echo $base_url; ?>assets/images/index/student_placement.webp" class="img-fluid" alt="student" loading="lazy" decoding="async">
                        </div>
                        <div class="student_text">
                            <h4>G. Sahitya</h4>
                            <p>18S41A0275</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="student_list">
                        <div class="student_img">
                            <img src="<?php echo $base_url; ?>assets/images/index/student_placement.webp" class="img-fluid" alt="student" loading="lazy" decoding="async">
                        </div>
                        <div class="student_text">
                            <h4>G. Sahitya</h4>
                            <p>18S41A0275</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section class="placemnt_toppers">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12  col-sm-12">
                    <div class="plcmnt_inn_sec">
                        <div class="plmnt_inn_st">
                            <img src="<?php echo $base_url; ?>assets/images/index/placement_st.png" class="img-fluid plmnt_inn_img" alt="profile" loading="lazy" decoding="async">
                        </div>
                        <div class="plcmnt_inn_sec_text">
                            <div class="content_left">
                                <h6 class="content">Batch 2024</h6>
                            </div>
                            <p>CSE Student</p>
                            <h3>PLaced with</h3>
                            <div class="plmnt_lpa">
                                <h3>7.5 <span>LPA</span></h3>
                            </div>
                            <h4>G. Sahitya</h4>
                            <img src="<?php echo $base_url; ?>assets/images/logo/infosys.webp" class="img-fluid" alt="tech mahindra" loading="lazy" decoding="async">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="plcmnt_inn_sec">
                        <div class="plmnt_inn_st order-lg-1" >
                            <img src="<?php echo $base_url; ?>assets/images/index/placement_st1.png" class="img-fluid plmnt_inn_img" alt="profile" loading="lazy" decoding="async">
                        </div>
                        <div class="plcmnt_inn_sec_text order-lg-2">
                            <div class="content_left">
                                <h6 class="content">Batch 2024</h6>
                            </div>
                            <p>CSE Student</p>
                            <h3>PLaced with</h3>
                            <div class="plmnt_lpa">
                                <h3>7.5 <span>LPA</span></h3>
                            </div>
                            <h4>G. Sahitya</h4>
                            <img src="<?php echo $base_url; ?>assets/images/logo/infosys.webp" class="img-fluid" alt="tech mahindra" loading="lazy" decoding="async">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tp_main">
        <div class="container">
            <div class="tp_sec">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="tp_inn_text">
                            <h3>7.5 <span>LPA</span></h3>
                            <P>Highest Package</P>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="tp_inn_text">
                            <h3>5 <span>LPA</span></h3>
                            <P>Avarage Package</P>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="tp_inn_text">
                            <h3>100 <span>+</span></h3>
                            <P>Top Recruiters</P>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="recruiter_head recruiter_head1">
                <h2>Student Testimonial</h2>
            </div>
            <div class="testi_plmnt_sec">
                <div class="row">
                    <div class="col-lg-10">
                        <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <!-- <div class="plmnt_testi_sec">
                                        <img src="<?php echo $base_url; ?>assets/images/about/quote.svg" class="img-fluid" alt="qoute" loading="lazy" decoding="async">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit mollitia animi
                                            nesciunt blanditiis nobis eos dolorum, doloribus provident veritatis quisquam esse neque
                                            ad minima tempora ipsum. Itaque explicabo natus quasi blanditiis nobis eos dolorum, doloribus
                                            provident veritatis quisquam esse neque ad minima tempora ipsum. Itaque explicabo natus.</p>
                                        <div class="stdnt_detls">
                                            <h4>G. Sahitya</h4>
                                            <p>- B. Tech. (CSE Department) - (2024)</p>
                                        </div>
                                    </div> -->
                                    <div class="plmnt_testi_video">
                                        <img src="<?php echo $base_url; ?>assets/images/about/tp.png" class="figure-img img-fluid" alt="testimonial">
                                        <div class="paly-button">
                                            <a href="https://www.youtube.com/watch?v=2e1enPnKNZU" data-lity>
                                                <i class="fa-solid fa-play"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <!-- <div class="plmnt_testi_sec">
                                        <img src="<?php echo $base_url; ?>assets/images/about/quote.svg" class="img-fluid" alt="qoute" loading="lazy" decoding="async">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit mollitia animi
                                            nesciunt blanditiis nobis eos dolorum, doloribus provident veritatis quisquam esse neque
                                            ad minima tempora ipsum. Itaque explicabo natus quasi blanditiis nobis eos dolorum, doloribus
                                            provident veritatis quisquam esse neque ad minima tempora ipsum. Itaque explicabo natus.</p>
                                        <div class="stdnt_detls">
                                            <h4>G. Sahitya</h4>
                                            <p>- B. Tech. (CSE Department) - (2024)</p>
                                        </div>
                                    </div> -->
                                    <div class="plmnt_testi_video">
                                        <img src="<?php echo $base_url; ?>assets/images/about/tp.png" class="figure-img img-fluid" alt="testimonial">
                                        <div class="paly-button">
                                            <a href="https://www.youtube.com/watch?v=2e1enPnKNZU" data-lity>
                                                <i class="fa-solid fa-play"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <!-- <div class="plmnt_testi_sec">
                                        <img src="<?php echo $base_url; ?>assets/images/about/quote.svg" class="img-fluid" alt="qoute" loading="lazy" decoding="async">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit mollitia animi
                                            nesciunt blanditiis nobis eos dolorum, doloribus provident veritatis quisquam esse neque
                                            ad minima tempora ipsum. Itaque explicabo natus quasi blanditiis nobis eos dolorum, doloribus
                                            provident veritatis quisquam esse neque ad minima tempora ipsum. Itaque explicabo natus.</p>
                                        <div class="stdnt_detls">
                                            <h4>G. Sahitya</h4>
                                            <p>- B. Tech. (CSE Department) - (2024)</p>
                                        </div>
                                    </div> -->
                                    <div class="plmnt_testi_video">
                                        <img src="<?php echo $base_url; ?>assets/images/about/tp.png" class="figure-img img-fluid" alt="testimonial">
                                        <div class="paly-button">
                                            <a href="https://www.youtube.com/watch?v=2e1enPnKNZU" data-lity>
                                                <i class="fa-solid fa-play"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="recruiter_main">
        <div class="container">
            <div class="recruiter_head">
                <h2>Top Recruiters</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="mnc_list">
                        <div class="count_nbr">
                            <p>110</p>
                        </div>
                        <div class="pl_list">
                        <img src="<?php echo $base_url; ?>assets/images/logo/WIPRO.png" class="figure-img img-fluid" alt="testimonial">
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="mnc_list">
                        <div class="count_nbr">
                            <p>60</p>
                        </div>
                        <div class="pl_list">
                        <img src="<?php echo $base_url; ?>assets/images/logo/tcs.webp" class="figure-img img-fluid" alt="testimonial">
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="mnc_list">
                        <div class="count_nbr">
                            <p>40</p>
                        </div>
                        <div class="pl_list">
                        <img src="<?php echo $base_url; ?>assets/images/logo/GENPACT.png" class="figure-img img-fluid" alt="testimonial">
                         
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="mnc_list">
                        <div class="count_nbr">
                            <p>30</p>
                        </div>
                        <div class="pl_list">
                        <img src="<?php echo $base_url; ?>assets/images/logo/infosys.webp" class="figure-img img-fluid" alt="testimonial">
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="mnc_list">
                        <div class="count_nbr">
                            <p>30</p>
                        </div>
                        <div class="pl_list">
                        <img src="<?php echo $base_url; ?>assets/images/logo/HCL.png" class="figure-img img-fluid" alt="testimonial">
                          
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="mnc_list">
                        <div class="count_nbr">
                            <p>30</p>
                        </div>
                        <div class="pl_list">
                        <img src="<?php echo $base_url; ?>assets/images/logo/Amazon.png" class="figure-img img-fluid" alt="testimonial">
                          
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="mnc_list">
                        <div class="count_nbr">
                            <p>30</p>
                        </div>
                        <div class="pl_list">
                        <img src="<?php echo $base_url; ?>assets/images/logo/Amazon.png" class="figure-img img-fluid" alt="testimonial">
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="mnc_list">
                        <div class="count_nbr">
                            <p>30</p>
                        </div>
                        <div class="pl_list">
                        <img src="<?php echo $base_url; ?>assets/images/logo/Amazon.png" class="figure-img img-fluid" alt="testimonial">
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="mnc_list">
                        <div class="count_nbr">
                            <p>30</p>
                        </div>
                        <div class="pl_list">
                        <img src="<?php echo $base_url; ?>assets/images/logo/Amazon.png" class="figure-img img-fluid" alt="testimonial">
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="mnc_list">
                        <div class="count_nbr">
                            <p>30</p>
                        </div>
                        <div class="pl_list">
                        <img src="<?php echo $base_url; ?>assets/images/logo/Amazon.png" class="figure-img img-fluid" alt="testimonial">
                          
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="mnc_list">
                        <div class="count_nbr">
                            <p>30</p>
                        </div>
                        <div class="pl_list">
                        <img src="<?php echo $base_url; ?>assets/images/logo/Amazon.png" class="figure-img img-fluid" alt="testimonial">
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="mnc_list">
                        <div class="count_nbr">
                            <p>30</p>
                        </div>
                        <div class="pl_list">
                        <img src="<?php echo $base_url; ?>assets/images/logo/Amazon.png" class="figure-img img-fluid" alt="testimonial">
                            
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <?php include('../footer.php') ?>
</body>

</html>
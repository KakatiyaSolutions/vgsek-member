<!doctype html>
<html lang="en">

<head>
    <?php include('head_links.php') ?>
    <link rel="stylesheet" href="<?php echo $base_url;?>assets/dist/css/department.css">
</head>
<style>
    .depart_vm_sec {
    background-color: var(--orange);
    padding: 20px;
    position: relative;
    margin-top: 20px;
    height: 430px;
}
</style>

<body>

    <?php include('head.php') ?>

    <!-- banner section -->
    <section id="department_bnr_main">
        <div class="bnr_img">
            <img src="<?php echo $base_url;?>assets/images/department/department_banner_bg.webp" class="img-fluid" alt="banner" loading="lazy" decoding="async">
        </div>

        <div class="bnr_sec_df">
            <div class="bnr_sec_tt">
                <div class="head_tit">
                    <h4>COMPUTER SCIENCE AND <br> ENGINEERING (CSE)</h4>
                </div>

                <div class="bnr_bredcrumb">
                    <div class="container">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Programs</a></li>
                                <li class="breadcrumb-item active" aria-current="page">CSE</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="bnr_scnd_img">
                <img src="<?php echo $base_url;?>assets/images/department/department_banner.webp" class="img-fluid" alt="banner" loading="lazy" decoding="async">
            </div>
        </div>

    </section>

    <!-- about inn -->

    <section class="department_about_main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="depart_abt_text">
                        <h3>Programme Overview</h3>
                        <p>The Department of Computer Science and Engineering was established
                            in the year 2005. with an intake of 60 students in B.Tech. it has become
                            one of the most strongest and dynamic departments in the college and the
                            computer science field with the distinguished and committed faculty members.
                            The Computer Science and Engineering (CSE) department is dedicated in imparting
                            quality education through well-designed and periodically upgraded curriculum
                            in tune with the challenging software needs of the industry.</p>

                        <p>The intake currently is 180 in B.Tech. (CSE) Programme.
                            The department is also successfully running post graduate
                            programme M. Tech. (Computer Science and Engineering) with an
                            intake of 36. There are eighteen Computer Laboratories in the department
                            well and figured computer systems. The computer laboratories are equipped with state
                            of the art facilities meeting the standards and well
                            maintained by dedicated and competent teaching and non-teaching staff.</p>

                        <p>Computer Science and Engineering department is now home to several eminent
                            and new faculty members, having rich experience in quads, industry and R&D.
                            The department has grown to good number of faculty members who provide leadership
                            and expertise in several areas of computer science and engineering.</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    
                        <div class="row">
                            <div class="col-lg-6">

                        <div class="depart_vm_text">
                        <div class="depart_vm_sec">
                            <h4>Vision</h4>
                            <div class="vns_depart_img">
                                <img src="<?php echo $base_url;?>assets/images/department/list_type_red1.webp" alt="list type image" class="img-fluid" loading="lazy">
                                <li>To acknowledge quality education and instill high
                                    patterns of discipline making the students technologically superior
                                    and ethically strong which involves the improvement in the quality of life in human race.</li>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="depart_vm_text">
                        <div class="depart_vm_sec">
                            <h4>Mission</h4>
                            <div class="vns_depart_img">
                                <img src="<?php echo $base_url;?>assets/images/department/list_type_red1.webp" alt="list type image" class="img-fluid" loading="lazy">
                                <li>To prepare Computer Science and Engineering graduates to be a lifelong learner
                                    with competence in basic science & engineering and professional core, multidisciplinary
                                    areas, with continuous update of the syllabus, so that they can succeed in industry as
                                    an individual and as a team or to pursue higher studies or to become an entrepreneur.</li>
                            </div>

                            <div class="vns_depart_img">
                                <img src="<?php echo $base_url;?>assets/images/department/list_type_red1.webp" alt="list type image" class="img-fluid" loading="lazy">
                                <li>To enable the graduates to use modern tools, design and create novelty
                                    based products required for the society and communicate effectively with professional ethics.
                                </li>
                            </div>

                            <div class="vns_depart_img">
                                <img src="<?php echo $base_url;?>assets/images/department/list_type_red1.webp" alt="list type image" class="img-fluid" loading="lazy">
                                <li>To achieve and impart holistic technical education using the best of infrastructure,
                                    outstanding technical and teaching expertise to
                                    establish the students into competent and confident engineers</li>
                                    </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <?php include('footer.php') ?>
    </body>
    </html>
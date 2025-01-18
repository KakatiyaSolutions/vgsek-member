<!doctype html>
<html lang="en">

<head>
    <?php include('head_links.php') ?>
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/dist/css/about.css">
</head>
<style>
.grp_img {
    position: relative;
}
    .grp_img::after {
    position: absolute;
    content: " ";
    background-color: #4b5c785e;
    width: 100%;
    height: 100%;
    z-index: 0;
    top: 0;
    left: 0;
    opacity: 0.7;
}
</style>

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
                    <h4>ABOUT US</h4>
                </div>

                <div class="bnr_bredcrumb">
                    <div class="container">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index">Home</a></li>
                                <!-- <li class="breadcrumb-item"><a href="#">Programs</a></li> -->
                                <li class="breadcrumb-item active" aria-current="page">About us</li>
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

    <section id="about_two">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about_two_text_sec">
                        <h5>About</h5>
                        <h2>VAAGESWARI COLLEGE <br> OF ENGINEERING</h2>
                        <hr>
                        <p>The society was established by an eminent and educated personalities
                            in the name of Goddess Saraswathi Devi, Sree Vaageswari Educational
                            Society during the year 2003 under the leader ship of General Secretary
                            Dr. G. Sreenivas Reddy Garu, who is a doctor in Ayurveda and a dedicated
                            missionary and crusader in the field of education, is the spirit and force
                            behind this reputed organization. The society was established with a crystal
                            vision to produce professionals having scientific intellect, innovation and imagination.</p>
                        <p>To be among the best of the institutions for engineers and technologists
                            with attitudes, skills and knowledge and to become an epicentre of creative
                            solutions. To achieve and impart quality education with an emphasis on practical skills and social relevance.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="abt_inn_img">
                        <img src="<?php echo $base_url; ?>assets/images/about/about_svek_video.webp" alt="about_college_image" clss="img-fluid" loading="lazy" decoding="sync">
                    </div>
                </div>
            </div>
            <div class="legacy_sec">
                <h3>A Legacy of Educational Excellence</h3>
                <div class="row legacy_row">
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="legacy_inn_sec legacy_inn_sec2">
                            <h4>22 <span>Years of</span></h4>
                            <p>Academic <br> Excellence</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="legacy_inn_sec">
                            <h4>1000 <span>+</span></h4>
                            <p>Student Alumni</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="legacy_inn_sec">
                            <h4>500 <span>+</span></h4>
                            <p>Faculty</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="legacy_inn_sec">
                            <h4>10 <span>LPA</span></h4>
                            <p>Highest Package</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="legacy_inn_sec legacy_inn_sec1">
                            <h4>100 <span>+</span></h4>
                            <p>Top Recruiters</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="vm_main">
        <div class="container-fluid">
            <div class="vm_head">
                <h3>What Vaageswari Believes in</h3>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="vm_sec">
                        <img src="assets/images/about/vision.webp" class="img-fluid" alt="vission" loading="lazy" decoding="async">
                        <div class="vm_inn_sec">
                            <h4>Our Vision</h4>
                            <p>To establish an institute which promote emerging technical skills for
                                rural students and thereby transforming them into globally competent personalities.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="vm_sec">
                        <img src="assets/images/about/vision.webp" class="img-fluid" alt="vission" loading="lazy" decoding="async">
                        <div class="vm_inn_sec">
                            <h4>Our Mission</h4>
                            <ul>
                                <li>
                                    <img src="assets/images/about/list_type.webp" class="img-fluid" alt="list" loading="lazy" decoding="async">
                                    To educate students towards excellence in cutting edge technologies
                                </li>
                                <li>
                                    <img src="assets/images/about/list_type.webp" class="img-fluid" alt="list" loading="lazy" decoding="async">
                                    To work in association with industry and making the students productive and industry ready
                                </li>
                                <li>
                                    <img src="assets/images/about/list_type.webp" class="img-fluid" alt="list" loading="lazy" decoding="async">
                                    To instill students learn ethical and moral values towards society.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="administration_main">
        <div class="container-fluid">
            <div class="administration_head">
                <h4>Leadership</h4>
                <h3>ADMINISTRATION</h3>
            </div>

            <div class="row admin_row">

                <div class="tab-content" id="leadership">
                    <div class="tab-pane fade active show" id="admin" role="tabpanel" aria-labelledby="admin-tab">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="admi_tab_text">
                                    <div class="about_img1">
                                        <img src="<?php echo $base_url; ?>assets/images/about/president.png" alt="VICE PRESIDENT" class="img-fluid" loading="lazy" decoding="async">
                                    </div>
                                    <div>
                                        <h4>Sri. G. Samba Reddy</h4>
                                        <p><b>PRESIDENT</b></p>
                                        <p class="admin_clg_name">SREE VAAGESWARI <br> EDUCATIONAL SOCIETY</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-6">
                                <div class="admin_tab_text">
                                    <p>It gives me an immense pleasure to welcome the new entrants to this Temple of Technological Education Institution Vaageswari College of Engineering which is proven in pursuing outcome-based education for developing the overall personality of the students.In the present socio-economic scenario of globalization, the technical education has come to occupy the center stage.In our institution we are very much concerned to bring in well admired, illustrious, friendly accessible faculty with commitment who have the integrity and dedication in building up the young technocrats. The college has made enormous improvements since its inception and is rated as a one of the best engineering college in Karimnagar Dist. Incubation center in our institution is providing facilities to all the students to design, analysis and fabricate innovative products. The incubation center strives and aims at discovering the potentials and possibilities amongst our students, promoting innovation and entrepreneurial capabilities.Telangana State Govt. officials has appreciated the products developed by our students. The placement scenario is quite laudable as many reputed companies visit our campus to recruit the students. I am confident that our achievements will make feel everyone of us proud. Our alumni here in India and abroad will feel proud of our achievements..</p>
                                    <h5>With best wishes.</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="admin1" role="tabpanel" aria-labelledby="admin1-tab">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="admi_tab_text">
                                    <div class="about_img1">
                                        <img src="<?php echo $base_url; ?>assets/images/about/balakishan.jpeg" alt="VICE PRESIDENT" class="img-fluid" loading="lazy" decoding="async">
                                    </div>
                                    <div>
                                        <h4>Sri. V. Balakishan</h4>
                                        <p><b>VICE PRESIDENT</b></p>
                                        <p class="admin_clg_name">SREE VAAGESWARI <br> EDUCATIONAL SOCIETY</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-6">
                                <div class="admin_tab_text">
                                    <p>I welcome all aspirants to Vaageswari College of Engineering, is a destination for researchers innovators and professionals. 
                                    Vaageswari College of Engineering was established to develop the technical professionals, irrespective of their backgrounds, to get a better
                                    education in engineering at a reasonable cost. Our efforts in innovative curriculum to encourage the research activities to fulfill Industry
                                    requirements. We are training the students in technology in a proper manner around the villages by providing forefront workers to the society.
                                    We are also providing facilities such as co-curricular and extracurricular activities apart from their academics. All the stake holders have
                                    acknowledged the excellence of our institution as it is truly reflected in our endeavors to provide value based outcome education.</p>
                                    <h5>With best wishes.</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="admin2" role="tabpanel" aria-labelledby="admin2-tab">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="admi_tab_text">
                                    <div class="about_img1">
                                        <img src="<?php echo $base_url; ?>assets/images/about/General Secretary.jpg" alt="VICE PRESIDENT" class="img-fluid" loading="lazy" decoding="async">
                                    </div>
                                    <div>
                                        <h4>Dr. G. Sreenivas Reddy</h4>
                                        <p><b>GENERAL SECRETARY</b></p>
                                        <p class="admin_clg_name">SREE VAAGESWARI <br> EDUCATIONAL SOCIETY</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-6">
                                <div class="admin_tab_text">
                                    <h5>Transforming Dreams into professional Success.</h5>
                                    <p>As you enter the world of professional education, I am sure there is great expectation and apprehension about the future. You are confronted with many life-touching questions. The decisions you make today are so formative that we shape a substantial part of your whole life ahead and assured, the students are groomed carefully. The virtues of hard work, discipline and ethical practices in their profession are imbibed in them constantly during their campus life.We constantly upgrade our resources to ensure that our students are well versed with the latest advancements. Moreover, the students extensively participate in various tech events to showcase the technical skills they have instilled over the years. The college maintains the immaculate placement records it has catered to for all these years, thus ensuring the quality and demand which invokes students from far and wide to become a part of this institution.The prime goal of quality education is to mould promising individuals into substantial personalities, ready to face today’s expeditious corporate world. I welcome to an exciting Bachelors and Postgraduate program in Engineering, Pharmacy and Management.</p>
                                    <h5>With best wishes.</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="admin3" role="tabpanel" aria-labelledby="admin3-tab">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="admi_tab_text">
                                    <div class="about_img1">
                                        <img src="<?php echo $base_url; ?>assets/images/about/Joint Secretary.jpg" alt="VICE PRESIDENT" class="img-fluid" loading="lazy" decoding="async">
                                    </div>
                                    <div>
                                        <h4>Dr. D. Srinivas Reddy</h4>
                                        <p><b>JOINT SECRETARY</b></p>
                                        <p class="admin_clg_name">SREE VAAGESWARI <br> EDUCATIONAL SOCIETY</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-6">
                                <div class="admin_tab_text">
                                    <p>The Joint-Secretary, Sree Vaageswari Educational Society, Mr.D.Srinivas reddy has been one of the main driving forces behind the establishment & development of Vaageswari group of colleges. He firmly believes that, the success of the Institution always reflects the success of its Students. As an active Administrator, he holds a very good communication with students and is engaged in guiding them with regard to their progress in career development. Besides, he also actively involves in solving the issues faced by the students on day-to-day basis. He strongly belives that, these students are going to be the future leaders, who can transform this society into a better shape. In this process, he assures that, vaageswari Instutions provides a best platform to mould them themselves into a great success; to realize their dreams and aspirations and thereby shine in their realistic world.</p>
                                    <h5>With best wishes.</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="admin4" role="tabpanel" aria-labelledby="admin4-tab">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="admi_tab_text">
                                    <div class="about_img1">
                                        <img src="<?php echo $base_url; ?>assets/images/about/Ch_Srinivas.jpeg" alt="VICE PRESIDENT" class="img-fluid" loading="lazy" decoding="async">
                                    </div>
                                    <div>
                                        <h4>Dr. Ch. Srinivas</h4>
                                        <p><b>PRINCIPAL</b></p>
                                        <p class="admin_clg_name">SREE VAAGESWARI <br> EDUCATIONAL SOCIETY</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-6">
                                <div class="admin_tab_text">
                                    <h5>The strength of Vaageswari College of Engineering is reflecting in the success of our students.</h5>
                                    <p>Vaageswari College of Engineering welcome you to world class infrastructure, eminent teaching faculty, committed management and the promise of excellence in engineering education. Vaageswari College of Engineering is established in the year 2005 by Sree Vaageswari Educational Society to cater the needs of the nation in the development of technocrats and to provide facilities for educating and training aspirant to meet the entrepreneurial and management needs. Vaageswari College of Engineering being one of the premiere institute and well recognized by the students and parents.As principal of this Institution, I proudly say that our institution imparting process based quality of education to the students and training them to get professionally placed on successful completion of the program to solve the challenges in their world of future. Our students have performed exceedingly well in placements of National and Globally competent Multinational companies and for higher education in the premier institutions in India and abroad.We offer an array of opportunities for all our students to achieve excellence in academic, creative, social, cultural, sporting and ethical endeavors. We encourage students to attend workshops and conferences for the purpose of the interaction with eminent professionals. The startup established in our institution has produced many innovative products. Our institution is having professional memberships in organizations like; Intershala, TASK, ISTE, IEEE, CSI, HMA, NPTEL, IETE, ISECE, SWAYAM, MOOCs for the purpose to increase innovative skills and knowledge.The College is spread over a sprawling campus abutting Rajiv Gandhi Rahadari National Highway Karimnagar to Hyderabad. The Institution is situated 6 kms from Alugunoor Junction and 10 kms from Karimnagar bus stand and 15 kms from Karimnagar railway station.
</p>
                                    <h5>Warm regards and Good wishes.</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <!-- <div class="row depart_list nav nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <button class="col-lg-2 nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
                    <div class="admin_img_sec_main">
                        <div class="admin_img_sec">
                            <img src="<?php echo $base_url; ?>assets/images/about/president.png" alt="president" class="img-fluid" loading="lazy" decoding="async">
                        </div>
                        <div>
                            <h4>Sri. G. Samba Reddy</h4>
                            <p>President SVEK</p>
                        </div>
                    </div>
                </button>
                <button class="col-lg-2 nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                    <div class="admin_img_sec_main">
                        <div class="admin_img_sec">
                            <img src="<?php echo $base_url; ?>assets/images/about/president.png" alt="president" class="img-fluid" loading="lazy" decoding="async">
                        </div>
                        <div>
                            <h4>Sri. G. Samba Reddy</h4>
                            <p>President SVEK</p>
                        </div>
                    </div>
                </button>
                <button class="col-lg-2 nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                    <div class="admin_img_sec_main">
                        <div class="admin_img_sec">
                            <img src="<?php echo $base_url; ?>assets/images/about/president.png" alt="president" class="img-fluid" loading="lazy" decoding="async">
                        </div>
                        <div>
                            <h4>Sri. G. Samba Reddy</h4>
                            <p>President SVEK</p>
                        </div>
                    </div>
                </button>
                <button class="col-lg-2 nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                    <div class="admin_img_sec_main">
                        <div class="admin_img_sec">
                            <img src="<?php echo $base_url; ?>assets/images/about/president.png" alt="president" class="img-fluid" loading="lazy" decoding="async">
                        </div>
                        <div>
                            <h4>Sri. G. Samba Reddy</h4>
                            <p>President SVEK</p>
                        </div>
                    </div>
                </button>
            </div> -->
            <ul class="nav" id="leadershipTab" role="tablist">
                <li>
                    <a class="nav-link active" id="admin-tab" data-bs-toggle="tab" data-bs-target="#admin" role="tab" aria-controls="admin" aria-selected="true">
                        <div class="admin_img_sec_main">
                            <div class="admin_img_sec">
                                <img src="<?php echo $base_url; ?>assets/images/about/president.png" alt="president" class="img-fluid" loading="lazy" decoding="async">
                            </div>
                            <div class="educat_clg_list">
                                <h4>Sri. G. Samba Reddy</h4>
                                <p>President SVES</p>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a class="nav-link" id="admin1-tab" data-bs-toggle="tab" data-bs-target="#admin1" role="tab" aria-controls="admin1" aria-selected="true">
                        <div class="admin_img_sec_main">
                            <div class="admin_img_sec">
                                <img src="<?php echo $base_url; ?>assets/images/about/balakishan.jpeg" alt="president" class="img-fluid" loading="lazy" decoding="async">
                            </div>
                            <div class="educat_clg_list">
                                <h4>Sri. V. Balakishan</h4>
                                <p>Vice President SVES</p>
                            </div>
                        </div>
                    </a>
                </li>

              

                <li>
                    <a class="nav-link" id="admin2-tab" data-bs-toggle="tab" data-bs-target="#admin2" role="tab" aria-controls="admin3" aria-selected="true">
                        <div class="admin_img_sec_main">
                            <div class="admin_img_sec">
                                <img src="<?php echo $base_url; ?>assets/images/about/General Secretary.jpg" alt="president" class="img-fluid" loading="lazy" decoding="async">
                            </div>
                            <div class="educat_clg_list">
                                <h4>Dr. G. Sreenivas Reddy</h4>
                                <p>General Secretary SVES</p>
                            </div>
                        </div>
                    </a>
                </li>

                <li>
                    <a class="nav-link" id="admin3-tab" data-bs-toggle="tab" data-bs-target="#admin3" role="tab" aria-controls="admin4" aria-selected="true">
                        <div class="admin_img_sec_main">
                            <div class="admin_img_sec">
                                <img src="<?php echo $base_url; ?>assets/images/about/Joint Secretary.jpg" alt="president" class="img-fluid" loading="lazy" decoding="async">
                            </div>
                            <div class="educat_clg_list">
                                <h4>Dr. D. Srinivas Reddy</h4>
                                <p>Joint Secretary SVES</p>
                            </div>
                        </div>
                    </a>
                </li>
                  <li>
                    <a class="nav-link" id="admin4-tab" data-bs-toggle="tab" data-bs-target="#admin4" role="tab" aria-controls="admin2" aria-selected="true">
                        <div class="admin_img_sec_main">
                            <div class="admin_img_sec">
                                <img src="<?php echo $base_url; ?>assets/images/about/Ch_Srinivas.jpeg" alt="president" class="img-fluid" loading="lazy" decoding="async">
                            </div>
                            <div class="educat_clg_list">
                                <h4>Dr. Ch. Srinivas</h4>
                                <p>Pricipal, SVES</p>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>

        </div>
    </section>

    <section class="governing_main">
        <div class="container">
            <div class="administration_head">
                <h3>GOVERNING <span>BODY</span></h3>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                    <div class="managing_img">
                        <div class="ma_img">
                            <img src="<?php echo $base_url; ?>assets/images/about/president.png" alt="President of the SVES" class="img-fluid" loading="lazy" decoding=async>
                        </div>
                        <div class="info">
                            <p>Sri. G. Samba Reddy</p>
                            <p>President of the SVES</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                    <div class="managing_img">
                        <div class="ma_img">
                            <img src="<?php echo $base_url; ?>assets/images/about/balakishan.jpeg" alt="Vice President of the SVES" class="img-fluid" loading="lazy" decoding=async>
                        </div>
                        <div class="info">
                            <p>Sri. V. Balakishan</p>
                            <p>Vice President of the SVES</p>
                        </div>
                    </div>
                </div> 
                <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                    <div class="managing_img">
                        <div class="ma_img">
                            <img src="<?php echo $base_url; ?>assets/images/about/General Secretary.jpg" alt="General Secretary of the SVES" class="img-fluid" loading="lazy" decoding=async>
                        </div>
                        <div class="info">
                            <p>Dr. G. Sreenivas Reddy</p>
                            <p>General Secretary of the SVES</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                    <div class="managing_img">
                        <div class="ma_img">
                            <img src="<?php echo $base_url; ?>assets/images/about/Joint Secretary.jpg" alt="Joint Secretary of the SVES" class="img-fluid" loading="lazy" decoding=async>
                        </div>
                        <div class="info">
                            <p>Dr. D. Srinivas Reddy</p>
                            <p>Joint Secretary of the SVES</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                    <div class="managing_img">
                        <div class="ma_img">
                            <img src="<?php echo $base_url; ?>assets/images/about/Treasurer.jpg" alt="Treasurer of the SVES" class="img-fluid" loading="lazy" decoding="async">
                        </div>
                        <div class="info">
                            <p>Smt. G. Shoba Devi</p>
                            <p>Treasurer of the SVES</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                    <div class="managing_img">
                        <div class="ma_img">
                            <img src="<?php echo $base_url; ?>assets/images/about/Prakash Reddy.jpg" alt="Member of the SVES" class="img-fluid" loading="lazy" decoding="async">
                        </div>
                        <div class="info">
                            <p>Sri. Ch. Prakash Reddy</p>
                            <p>Member of the SVES</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                    <div class="managing_img">
                        <div class="ma_img">
                            <img src="<?php echo $base_url; ?>assets/images/about/Vinod.jpg" alt="Member of the SVES" class="img-fluid" loading="lazy" decoding="async">
                        </div>
                        <div class="info">
                            <p>Sri. V. Vinod</p>
                            <p>Member of the SVES</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                    <div class="managing_img">
                        <div class="ma_img">
                            <img src="<?php echo $base_url; ?>assets/images/about/Chennakesava.jpg" alt="University Nominee" class="img-fluid" loading="lazy" decoding="async">
                        </div>
                        <div class="info">
                            <p>Dr. A. Chennakesava Reddy</p>
                            <p>University Nominee</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                    <div class="managing_img">
                        <div class="ma_img">
                            <img src="<?php echo $base_url; ?>assets/images/about/M_Srinivas_Reddy.jpg" alt="Principal VCP" class="img-fluid" loading="lazy" decoding="async">
                        </div>
                        <div class="info">
                            <p>Dr. M. Srinivas Reddy</p>
                            <p>Principal VCP</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                    <div class="managing_img">
                        <div class="ma_img">
                            <img src="<?php echo $base_url; ?>assets/images/about/Chandramouli.jpeg" alt="HOD" class="img-fluid" loading="lazy" decoding="async">
                        </div>
                        <div class="info">
                            <p>Dr. N. Chandramouli</p>
                            <p>HOD ( Computer Science and Engineering)</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                    <div class="managing_img">
                        <div class="ma_img">
                            <img src="<?php echo $base_url; ?>assets/images/about/Venkata_Reddy.jpeg" alt="HOD" class="img-fluid" loading="lazy" decoding="async">
                        </div>
                        <div class="info">
                            <p>Dr. A. Venkata Reddy</p>
                            <p>HOD (Electronics and Communication Engineering)</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                    <div class="managing_img">
                        <div class="ma_img">
                            <img src="<?php echo $base_url; ?>assets/images/about/Ch_Srinivas.jpeg" alt="Principal VCE" class="img-fluid" loading="lazy" decoding="async">
                        </div>
                        <div class="info">
                            <p>Dr. Ch. Srinivas</p>
                            <p>Principal VCE</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="administration_head OmbudsPerson_head">
                <h3>OMBUDSPERSON</h3>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                    <div class="managing_img">
                        <div class="ma_img">
                            <img src="<?php echo $base_url; ?>assets/images/about/Jagannath_Jetty.jpg" alt="Vice President of the SVES" class="img-fluid" loading="lazy" decoding=async>
                        </div>
                        <div class="info">
                            <p>Sri. Dr. Jagannath Jetty</p>
                            <p>PROFESSOR OF GEOLOGY <br> (RETIRED) OSMANIA UNIVERSITY</p>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section id="college_group">
        <div class="container">
            <div class="administration_head">
                <h3>GROUP OF <span>INSTITUTION</span></h3>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="grp_text">
                        <h3>Vaageswari College of Pharmacy</h3>
                        <p>Pharmacy is the branch of health sciences that deals with the preparation
                            and dispensing of drugs. Its aim is to ensure the safe and effective use of
                            pharmaceutical drugs”. Pharmacy is commonly considered as a shop (also known
                            as Medical Store or Chemist) where medicines are being sold or prepared. In the
                            academic or professional world, Pharmacy is defined as the branch of science
                            that deals with the preparation, doses, dispensing and effects (including safety)
                            of medicines (or medicinal drugs or simply drugs). In the broad sense, Pharmacy
                            is a marriage between Health Sciences and Chemistry. You could also term it as
                            a Love Triangle that involves Medicine, Biology and Chemistry. Yes, it is as
                            overlapping and inter-related as Bio-Medical Sciences.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="grp_img">
                        <img src="<?php echo $base_url; ?>assets/images/about/Pharmacy.jpg" class="iumg-fluid" alt="Pharmacy College" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="grp_img">
                        <img src="<?php echo $base_url; ?>assets/images/about/vaageshwari-pharmacy-img.jpg" class="iumg-fluid" alt="Pharmacy College" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="grp_text grp_text1">
                        <h3>Vaageswari Institute Of Pharmaceutical Science</h3>
                        <p>The pharmaceutical sciences is a dynamic and rapidly changing
                            field that combines a broad range of scientific disciplines
                            critical to the discovery and development of new drugs and therapies.
                            Everyday, pharmaceutical scientists are improving our society’s
                            health and wellbeing in health care, academia, research, and government.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <?php include('footer.php') ?>
</body>

</html>
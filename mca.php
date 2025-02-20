<!doctype html>
<html lang="en">

<head>
    <?php include('head_links.php') ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />



    <!--<link rel="stylesheet" href="<?php echo $base_url; ?>assets/dist/css/cse2.css">-->
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/dist/css/academic.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/dist/css/department.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
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
.widget-title {
    background: var(--blue) none repeat scroll 0 0;
    border-bottom: 0 solid;
    border-left: 5px solid var(--orange);
    color: #ffffff;
    font-size: 16px;
    font-weight: normal;
    line-height: 1.5;
    padding: 5px 15px;
    position: relative;
    margin-bottom: 20px;
}
.committee_sec .nav-pills {
    background-color: var(--blue);
    padding: 45px 20px;
    width: 100%;
}
.committee_sec .tab-pane {
    padding-top: 80px;
    padding-left: 20px;
}
.tab-content p{
    text-align: justify;
    margin-bottom: 10px;
    line-height: 28px;
    font-size: 16px;
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
                    <h4>MCA</h4>
                </div>

                <div class="bnr_bredcrumb">
                    <div class="container">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Departments</a></li>
                                <li class="breadcrumb-item active" aria-current="page">MCA</li>
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

     <section id="committe_main">
        <div class="container">
           
                
          
          
             
            <div class="committee_sec">
                  <div class="row">
                   <div class=col-lg-3>
                         <div class="academic_reg_head">
                <h2 class="widget-title">MCA Department</h2>
                    <!--<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">-->
            </div>
                <div class="d-flex align-items-start">
                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link active" id="v-Academic-Committee-tab" data-bs-toggle="pill" data-bs-target="#v-Academic-Committee" type="button" role="tab" aria-controls="v-Academic-Committee" aria-selected="true" onclick="updateHeading('Courses Offered')">About</button>
                        <button class="nav-link" id="v-Anti-Ragging-Committee-tab" data-bs-toggle="pill" data-bs-target="#v-Anti-Ragging-Committee" type="button" role="tab" aria-controls="v-Anti-Ragging-Committee" aria-selected="false" onclick="updateHeading('Admission Procedure')"> HOD Message</button> 
                        <!--<button class="nav-link" id="v-Grievance-tab" data-bs-toggle="pill" data-bs-target="#v-Grievance" type="button" role="tab" -->
                        <!--aria-controls="v-Grievance" aria-selected="false"  onclick="updateHeading('Fee Structure')">Faculty</button>-->
                         <button class="nav-link" id="v-profile-tab" data-bs-toggle="pill" data-bs-target="#v-profile" type="button" role="tab" 
                        aria-controls="v-profile" aria-selected="false"  onclick="updateHeading('Fee Structure')">Faculty Profile</button>
                         <button class="nav-link" id="v-event-tab" data-bs-toggle="pill" data-bs-target="#v-event" type="button" role="tab" 
                        aria-controls="v-event" aria-selected="false"  onclick="updateHeading('Fee Structure')">Faculty Events</button>
                          <button class="nav-link" id="v-Publications-tab" data-bs-toggle="pill" data-bs-target="#v-Publications" type="button" role="tab" 
                        aria-controls="v-Publications" aria-selected="false"  onclick="updateHeading('Fee Structure')">Publications</button>
                          <button class="nav-link" id="v-News-tab" data-bs-toggle="pill" data-bs-target="#v-News" type="button" role="tab" 
                        aria-controls="v-News" aria-selected="false"  onclick="updateHeading('Fee Structure')">Newsletter</button>
                             <button class="nav-link" id="v-Inno-tab" data-bs-toggle="pill" data-bs-target="#v-Inno" type="button" role="tab" 
                        aria-controls="v-Inno" aria-selected="false"  onclick="updateHeading('Fee Structure')">Faculty Innovations</button>
                            <button class="nav-link" id="v-lab-tab" data-bs-toggle="pill" data-bs-target="#v-lab" type="button" role="tab" 
                        aria-controls="v-lab" aria-selected="false"  onclick="updateHeading('Fee Structure')">Laboratories</button>
                            <button class="nav-link" id="v-syllabus-tab" data-bs-toggle="pill" data-bs-target="#v-syllabus" type="button" role="tab" 
                        aria-controls="v-syllabus" aria-selected="false"  onclick="updateHeading('Fee Structure')">Syllabus</button>
                            <button class="nav-link" id="v-e-resources-tab" data-bs-toggle="pill" data-bs-target="#v-e-resources" type="button" role="tab" 
                        aria-controls="v-e-resources" aria-selected="false"  onclick="updateHeading('Fee Structure')">E- Resources</button>
                            <button class="nav-link" id="v-faculty-tab" data-bs-toggle="pill" data-bs-target="#v-faculty" type="button" role="tab" 
                        aria-controls="v-faculty" aria-selected="false"  onclick="updateHeading('Fee Structure')">Faculty Achievements</button>
                            <button class="nav-link" id="v-student-tab" data-bs-toggle="pill" data-bs-target="#v-student" type="button" role="tab" 
                        aria-controls="v-student" aria-selected="false"  onclick="updateHeading('Fee Structure')">Student Achievements</button>
                        
                      
                    </div>
                    </div>
                    </div>
                    <div class="col-lg-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane animate__animated animate__fadeInUp show active" id="v-Academic-Committee" role="tabpanel" aria-labelledby="v-Academic-Committee-tab" tabindex="0">
                           <div class="committee_head">
                                    <h3>About</h3>
                                </div>
                                
                                <p>The Department of Computer Applications was started in the year 2006. The Department offers MCA 2 Years (4 Semesters) with intake of 60. The course offered by the department focuses on preparing students for a global career in computing by enriching the curriculum with the blend of theory and practice. In this era of technological explosion, the department is dedicated to maintaining a high standard of excellence through quality, technology and innovation. The MCA program seeks to prepare students for high level careers in the ever expanding field of Computer Applications.</p>

                           
                        </div>

                        <div class="tab-pane animate__animated animate__fadeInUp" id="v-Anti-Ragging-Committee" role="tabpanel" aria-labelledby="v-Anti-Ragging-Committee-tab" tabindex="0">
                             <div class="committee_head">
                                    <h3>HOD Message</h3>
                                </div>
<!--                            <div class="committee_table">-->
<!--                                <div class="committee_head">-->
<!--                                    <h3>Required Documents for B. Tech Admissions</h3>-->
<!--                                </div>-->
<!--                                <div class="committee_table_inn">-->
<!--                                    <div class="table-responsive">-->
<!--                                        <table class="table table-bordered table-striped">-->
<!--                                            <thead>-->
<!--                                                <tr>-->
<!--                                                    <th>S.NO</th>-->
<!--                                                    <th>PARTICULARS</th>-->
                                                    
<!--                                                </tr>-->
<!--                                            </thead>-->
<!--                                            <tbody>-->
<!--                                                <tr>-->
<!--                                                    <td></td>-->
<!--                                                    <td>SSC(ORIGINAL)</td>-->
                                                    
<!--                                                </tr>-->
<!--                                                <tr>-->
<!--                                                    <td></td>-->
<!--                                                    <td>INTERMEDIATE/ EQUIVALENT FROM TS-INTERMEDIATE BOARD (IF STUDY IN OTHER STATE)</td>-->
                                                   
<!--                                                </tr>-->
<!--                                                <tr>-->
<!--                                                    <td></td>-->
<!--                                                    <td>TRANSFER CERTIFICATE</td>-->
                                                   
<!--                                                </tr>-->
<!--                                                <tr>-->
<!--                                                    <td></td>-->
<!--                                                    <td>EAMCET / ECET (HALL TICKET &amp; RANK CARD)</td>-->
                                                  
<!--                                                </tr>-->
<!--                                                <tr>-->
<!--                                                    <td></td>-->
<!--                                                    <td>BONAFIDE / STUDY CERTIFICATE (ORIGINAL)</td>-->
                                                    
<!--                                                </tr>-->
<!--                                                <tr>-->
<!--                                                    <td></td>-->
<!--                                                    <td>MIGRATION CERTIFICATE (IF STUDY IN OTHER STATE)</td>-->
                                                    
<!--                                                </tr>-->
<!--                                                <tr>-->
<!--                                                    <td></td>-->
<!--                                                    <td>SIX PASSPORT SIZE PHOTOS</td>-->
                                                   
<!--                                                </tr>-->
<!--                                                <tr>-->
<!--                                                    <td></td>-->
<!--                                                    <td>THREE SETS OF XEROX COPIES OF ALL CERTIFICATES</td>-->
                                                    
<!--                                                </tr>-->
<!--                                                <tr>-->
<!--                                                    <td></td>-->
<!--                                                    <td>AADHAR CARD XEROX (THREE COPIES)</td>-->
                                                   
<!--                                                </tr>-->
                                              
<!--                                            </tbody>-->
<!--                                        </table>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="eligible">-->
<!--                                <h2>ELIGIBILITY CRITERIA FOR ADMISSIONS INTO B-Tech</h2>-->
<!--                                <h5>Convener Quota:</h5>-->
<!--                                <h6>70% of Admissions are carried out under Convener Quota.</h6>-->
<!--                                <p>To seek admission under this Quota into the First Year of 4-year B.Tech course in any branch, he/she must satisfy the following requirements:</p>-->
<!--                                <p>A student must have passed the Intermediate Examination of the Board ofIntermediate Education, Government of Telangana with Mathematics, Physics and Chemistry as optional subjects, or any other examination recognized by theGovernment of Telangana as its equivalent</p>-->
<!--                                <p>All the eligible candidates for admission into First Year shall have to qualify in the EAMCET Examination conducted by the Govt. of TS.</p>-->
<!--                                <p>The candidates will be admitted by EAMCET Convener strictly in accordance with the rank secured at the Entrance Examination and keeping the rules applicable in view, regarding the reservation of seats of various categories of candidates.</p>-->
                                
<!--                                <h5>Management Quota:</h5>-->
<!--                                <h6>30% of the total seats will be considered under Management Quota.</h6>-->
<!--                                <p>To seek admission under Management Quota, he/she must satisfy the following requirements:</p>-->
<!--                                <p>A student should either have obtained a rank or should have secured a minimum aggregate percentage of 50% in group subjects (Mathematics, Physics and Chemistry) in the Intermediate Examination of the Board of Intermediate Education, Government of Telangana or any other examination recognized by the Government of Telangana as its equivalent.</p>-->
                                
<!--                                <h5>ECET (For lateral admission into 2nd year regular B.E. / B.Tech.)- Eligibility Requirements:</h5>-->
<!--                                <p>The student will be ranked (Integrated Merit Rank) based on the marks obtained by him / her in the TS ECET [FDH &amp; B.Sc. (Mathematics)] -Examination.</p>-->
<!--                                <h6>Candidates should satisfy the following requirements :</h6>-->
<!--                                <p>i. They should be of Indian Nationality.</p>-->
<!--                                <p>ii. They should belong to the State of Telangana / Andhra Pradesh. The candidates should satisfy local / nonlocal status requirements as laid down in the Andhra Pradesh Educational Institutions (Regulation of Admission) Order, 1974 as subsequently amended. The same is adapted to the State of Telangana G.O.Ms. No. 33 dated 31.12.2014.</p>-->
<!--                                <p>iii. They should have obtained a Diploma in Engineering and Technology / Pharmacy from the State Board of Technical Education of Telangana / Andhra Pradesh or any other Diploma recognized by the Government of Telangana / Andhra Pradesh as equivalent there to for admission into the relevant B.E. / B. Tech./ B. Pharmacy Courses corresponding to the Diploma as given in the Instruction Booklet.</p>-->
<!--<br>-->
<!--                                 <p>They should have passed the 3 - year B.Sc. Degree examination with Mathematics as one of the subjects in the group combination from a recognized University in the Telangana / Andhra Pradesh State or its equivalent for entry into relevant courses as given in the Instruction Booklet.</p>-->
<!--                                      <p>iv. As per G.O. Ms. No. 58 dated 12.05.2008, for admission into B.E / B.Tech in Computer Science and Engineering, first preference will be given to candidates who have obtained the diploma in Computer Science Engineering. Any seats still vacant shall be filled with candidates who have obtained their Diploma in any branch of Engineering / Technology on the basis of their integrated merit rank obtained in TS ECET [FDH &amp; B.Sc. (Mathematics)] - 2021. The Integrated Merit Rank is based on the total marks obtained in TS ECET [FDH &amp; B.Sc. (Mathematics)] - 2021 by candidates with Diploma in any branch of Engineering / Technology.</p>-->
                                      
<!--                                      <br>-->
<!--                                      <h2>ELIGIBILITY CRITERIA FOR ADMISSIONS INTO MASTERS DEGREE</h2>-->
<!--                                      <h5>M.Tech – Eligibility Requirements:</h5>-->
<!--                                      <p>The Convener admits 70% of the intake to the M.Tech program based on the GATE/TS-PGECET rank.</p>-->
<!--                                      <p>The Management admits the remaining 30% under Management quota.</p>-->
<!--                                      <p>Admission for Category-A students will be made through GATE. When GATE Candidates are not available, admission will be given to Non-GATE Candidates on TS-PGECET merit. Admission for Category-B will be made based on merit.</p>-->
<!--                                       <h5>MBA – Eligibility Requirements:</h5>-->
<!--                                       <p>The Convener admits 70% of the intake to the MBA program based on the ICET rank.</p>-->
<!--                                                     <p>The Management admits the remaining 30% under Management quota.</p>-->
<!--                                                     <h6>A candidate seeking admission into Two years MBA programmes must satisfy the following criteria:</h6>-->
<!--                                                     <p>1. A pass in a bachelor’s degree in any field with 45% marks in aggregate.</p>-->
<!--                                                     <p>2. Must have qualified in Integrated Common Entrance Test (ICET) conducted by Telangana State Council of Higher Education, Govt of TS.</p>-->
<!--                                                     <p>3. The candidates will be admitted strictly in accordance with the merit secured at the ICET.</p>-->
<!--                                                     <p>4. The candidates should satisfy local/non-local status requirement as laid down in the TS Educational institutions (Regulation of Admissions) Order 1974 as amended from time to time.</p>-->
<!--                                                     <h5>MCA – Eligibility Requirements:</h5>-->
<!--                                                             <p>The Convener admits 70% of the intake to the MCA program based on the ICET rank.</p>-->
<!--                                                      <p>The Management admits the remaining 30% under Management quota.</p>-->
<!--                                                      <h6>A candidate seeking admission into Two years MCA programmes must satisfy the following criteria:</h6>-->
<!--                                                      <p>1. Should have passed recognized Bachelors Degree examination of minimum three years duration with at least 50% marks (45% marks in case of reserved (SC and ST) categories) in the qualifying examination with Mathematics at 10+2 level or at Graduation level.</p>-->
<!--                                                      <p>2. Must have qualified in Integrated Common Entrance Test (ICET) conducted by Telangana State Council of Higher Education, Govt of TS.</p>-->
<!--                                                      <p>3. The candidates will be admitted strictly in accordance with the merit secured at the ICET.</p>-->
<!--                                                      <p>4. The candidates should satisfy local/non-local status requirement as laid down in the TS Educational institutions (Regulation of Admissions) Order 1974 as amended from time to time.</p>-->
<!--                            </div>-->

                            </div>

                        <div class="tab-pane animate__animated animate__fadeInUp" id="v-Grievance" role="tabpanel" aria-labelledby="v-Grievance-tab" tabindex="0">
                             <div class="committee_head">
                                    <h3>Faculty</h3>
                                </div>
                            
                        </div>
                          <div class="tab-pane animate__animated animate__fadeInUp" id="v-lab" role="tabpanel" aria-labelledby="v-lab-tab" tabindex="0">
                               <div class="committee_head">
                                    <h3>Laboratories</h3>
                                </div>
                            
                        </div>
                          <div class="tab-pane animate__animated animate__fadeInUp" id="v-syllabus" role="tabpanel" aria-labelledby="v-syllabus-tab" tabindex="0">
                               <div class="committee_head">
                                    <h3>Syllabus</h3>
                                </div>
                            
                        </div>
                          <div class="tab-pane animate__animated animate__fadeInUp" id="v-e-resources" role="tabpanel" aria-labelledby="v-e-resources-tab" tabindex="0">
                                <div class="committee_head">
                                    <h3>E- Resources</h3>
                                </div>
                            
                        </div>
                          <div class="tab-pane animate__animated animate__fadeInUp" id="v-faculty" role="tabpanel" aria-labelledby="v-faculty-tab" tabindex="0">
                                <div class="committee_head">
                                    <h3>Faculty Achievements</h3>
                                </div>
                                
                            
                        </div>
                          <div class="tab-pane animate__animated animate__fadeInUp" id="v-student" role="tabpanel" aria-labelledby="v-studente-tab" tabindex="0">
                                <div class="committee_head">
                                    <h3>Student Achievements</h3>
                                </div>
                            
                        </div>
                         <div class="tab-pane animate__animated animate__fadeInUp" id="v-profile" role="tabpanel" aria-labelledby="v-profile-tab" tabindex="0">
                               <div class="committee_head">
                                    <h3>Faculty Profile</h3>
                                </div>
                            
                        </div>
                         <div class="tab-pane animate__animated animate__fadeInUp" id="v-event" role="tabpanel" aria-labelledby="v-event-tab" tabindex="0">
                               <div class="committee_head">
                                    <h3>Faculty Events</h3>
                                </div>
                            
                        </div>
                         <div class="tab-pane animate__animated animate__fadeInUp" id="v-Publications" role="tabpanel" aria-labelledby="v-Publications-tab" tabindex="0">
                               <div class="committee_head">
                                    <h3>Publications</h3>
                                </div>
                            
                        </div>
                         <div class="tab-pane animate__animated animate__fadeInUp" id="v-News" role="tabpanel" aria-labelledby="v-News-tab" tabindex="0">
                               <div class="committee_head">
                                    <h3>Newsletter</h3>
                                </div>
                            
                        </div>
                         <div class="tab-pane animate__animated animate__fadeInUp" id="v-Inno" role="tabpanel" aria-labelledby="v-Inno-tab" tabindex="0">
                               <div class="committee_head">
                                    <h3>Faculty Innovations</h3>
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
    </section>




    <?php include('footer.php') ?>


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


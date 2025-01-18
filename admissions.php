<!doctype html>
<html lang="en">

<head>
    <?php include('head_links.php') ?>
    <link rel="stylesheet" href="<?php echo $base_url;?>assets/dist/css/academic.css">
    <!--<link rel="stylesheet" href="<?php echo $base_url;?>assets/dist/css/about.css">-->
</head>
<style>
    .committee_head h3 {
    margin: 25px 0px;
    }
    .eligible{
        padding:20px 0px;
    }
    .eligible h2{
        font-size:25px;
        color:var(--blue);
        line-height:28px;
        margin-bottom:20px;
    }
     .eligible h5{
        font-size:23px;
        line-height:28px;
    margin-bottom:20px;
    color:#f15e2e;
    }
    .eligible h6{
        font-size:20px;
        line-height:28px;
    margin-bottom:20px;
  
    }
    .eligible p{
        text-align: justify;
    margin-bottom: 10px;
    line-height: 28px;
    font-size: 15px;
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
                    <h4>Admissions</h4>
                </div>

                <div class="bnr_bredcrumb">
                    <div class="container">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index">Home</a></li>
                                <!-- <li class="breadcrumb-item"><a href="#">Programs</a></li> -->
                                <li class="breadcrumb-item active" aria-current="page">Admissions</li>
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

   

    <section id="committe_main">
        <div class="container">
           
                
            <div class="academic_reg_head">
                <h3 id="section-heading" >Courses Offered</h3>
            </div>
          
             
            <div class="committee_sec">
                  <div class="row">
                   <div class=col-lg-3>
                <div class="d-flex align-items-start">
                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link active" id="v-Academic-Committee-tab" data-bs-toggle="pill" data-bs-target="#v-Academic-Committee" type="button" role="tab" aria-controls="v-Academic-Committee" aria-selected="true" onclick="updateHeading('Courses Offered')">Courses Offered</button>
                        <button class="nav-link" id="v-Anti-Ragging-Committee-tab" data-bs-toggle="pill" data-bs-target="#v-Anti-Ragging-Committee" type="button" role="tab" aria-controls="v-Anti-Ragging-Committee" aria-selected="false" onclick="updateHeading('Admission Procedure')"> Admission Procedure</button> 
                        <button class="nav-link" id="v-Grievance-tab" data-bs-toggle="pill" data-bs-target="#v-Grievance" type="button" role="tab" aria-controls="v-Grievance" aria-selected="false"  onclick="updateHeading('Fee Structure')">Fee Structure</button>
                      
                    </div>
                    </div>
                    </div>
                    <div class="col-lg-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane animate__animated animate__fadeInUp show active" id="v-Academic-Committee" role="tabpanel" aria-labelledby="v-Academic-Committee-tab" tabindex="0">
                            <div class="committee_table">
                                <div class="committee_head">
                                    <h3>BACHELOR DEGREE – B.Tech DURATION – FOUR YEARS</h3>
                                </div>
                                <div class="committee_table_inn">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>S.NO</th>
                                                    <th>Branch</th>
                                                    <th>Intake</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td>Computer Science &amp; Engineering</td>
                                                    <td>300</td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Electronics and Communication Engineering</td>
                                                    <td>150</td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Electrical &amp; Electronics Engineering</td>
                                                    <td>30</td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Mechanical Engineering</td>
                                                    <td>30</td>
                                                   
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Computer Science and Engineering (Artificial Intelligence and Machine Learning)</td>
                                                    <td>180</td>
                                                   
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Computer Science and Engineering (Data Science)</td>
                                                    <td>60</td>
                                                    
                                                </tr>
                                             
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                             <div class="committee_table">
                                <div class="committee_head">
                                    <h3>MASTERS DEGREE DURATION – TWO YEARS</h3>
                                </div>
                                <div class="committee_table_inn">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>S.NO</th>
                                                    <th>Branch</th>
                                                    <th>Intake</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td>M-Tech (CSE)</td>
                                                    <td>30</td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>M-Tech (PE)</td>
                                                    <td>18</td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>MBA</td>
                                                    <td>180</td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>MCA</td>
                                                    <td>120</td>
                                                   
                                                </tr>
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane animate__animated animate__fadeInUp" id="v-Anti-Ragging-Committee" role="tabpanel" aria-labelledby="v-Anti-Ragging-Committee-tab" tabindex="0">
                            <div class="committee_table">
                                <div class="committee_head">
                                    <h3>Required Documents for B. Tech Admissions</h3>
                                </div>
                                <div class="committee_table_inn">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>S.NO</th>
                                                    <th>PARTICULARS</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td>SSC(ORIGINAL)</td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>INTERMEDIATE/ EQUIVALENT FROM TS-INTERMEDIATE BOARD (IF STUDY IN OTHER STATE)</td>
                                                   
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>TRANSFER CERTIFICATE</td>
                                                   
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>EAMCET / ECET (HALL TICKET &amp; RANK CARD)</td>
                                                  
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>BONAFIDE / STUDY CERTIFICATE (ORIGINAL)</td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>MIGRATION CERTIFICATE (IF STUDY IN OTHER STATE)</td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>SIX PASSPORT SIZE PHOTOS</td>
                                                   
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>THREE SETS OF XEROX COPIES OF ALL CERTIFICATES</td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>AADHAR CARD XEROX (THREE COPIES)</td>
                                                   
                                                </tr>
                                              
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="eligible">
                                <h2>ELIGIBILITY CRITERIA FOR ADMISSIONS INTO B-Tech</h2>
                                <h5>Convener Quota:</h5>
                                <h6>70% of Admissions are carried out under Convener Quota.</h6>
                                <p>To seek admission under this Quota into the First Year of 4-year B.Tech course in any branch, he/she must satisfy the following requirements:</p>
                                <p>A student must have passed the Intermediate Examination of the Board ofIntermediate Education, Government of Telangana with Mathematics, Physics and Chemistry as optional subjects, or any other examination recognized by theGovernment of Telangana as its equivalent</p>
                                <p>All the eligible candidates for admission into First Year shall have to qualify in the EAMCET Examination conducted by the Govt. of TS.</p>
                                <p>The candidates will be admitted by EAMCET Convener strictly in accordance with the rank secured at the Entrance Examination and keeping the rules applicable in view, regarding the reservation of seats of various categories of candidates.</p>
                                
                                <h5>Management Quota:</h5>
                                <h6>30% of the total seats will be considered under Management Quota.</h6>
                                <p>To seek admission under Management Quota, he/she must satisfy the following requirements:</p>
                                <p>A student should either have obtained a rank or should have secured a minimum aggregate percentage of 50% in group subjects (Mathematics, Physics and Chemistry) in the Intermediate Examination of the Board of Intermediate Education, Government of Telangana or any other examination recognized by the Government of Telangana as its equivalent.</p>
                                
                                <h5>ECET (For lateral admission into 2nd year regular B.E. / B.Tech.)- Eligibility Requirements:</h5>
                                <p>The student will be ranked (Integrated Merit Rank) based on the marks obtained by him / her in the TS ECET [FDH &amp; B.Sc. (Mathematics)] -Examination.</p>
                                <h6>Candidates should satisfy the following requirements :</h6>
                                <p>i. They should be of Indian Nationality.</p>
                                <p>ii. They should belong to the State of Telangana / Andhra Pradesh. The candidates should satisfy local / nonlocal status requirements as laid down in the Andhra Pradesh Educational Institutions (Regulation of Admission) Order, 1974 as subsequently amended. The same is adapted to the State of Telangana G.O.Ms. No. 33 dated 31.12.2014.</p>
                                <p>iii. They should have obtained a Diploma in Engineering and Technology / Pharmacy from the State Board of Technical Education of Telangana / Andhra Pradesh or any other Diploma recognized by the Government of Telangana / Andhra Pradesh as equivalent there to for admission into the relevant B.E. / B. Tech./ B. Pharmacy Courses corresponding to the Diploma as given in the Instruction Booklet.</p>
<br>
                                 <p>They should have passed the 3 - year B.Sc. Degree examination with Mathematics as one of the subjects in the group combination from a recognized University in the Telangana / Andhra Pradesh State or its equivalent for entry into relevant courses as given in the Instruction Booklet.</p>
                                      <p>iv. As per G.O. Ms. No. 58 dated 12.05.2008, for admission into B.E / B.Tech in Computer Science and Engineering, first preference will be given to candidates who have obtained the diploma in Computer Science Engineering. Any seats still vacant shall be filled with candidates who have obtained their Diploma in any branch of Engineering / Technology on the basis of their integrated merit rank obtained in TS ECET [FDH &amp; B.Sc. (Mathematics)] - 2021. The Integrated Merit Rank is based on the total marks obtained in TS ECET [FDH &amp; B.Sc. (Mathematics)] - 2021 by candidates with Diploma in any branch of Engineering / Technology.</p>
                                      
                                      <br>
                                      <h2>ELIGIBILITY CRITERIA FOR ADMISSIONS INTO MASTERS DEGREE</h2>
                                      <h5>M.Tech – Eligibility Requirements:</h5>
                                      <p>The Convener admits 70% of the intake to the M.Tech program based on the GATE/TS-PGECET rank.</p>
                                      <p>The Management admits the remaining 30% under Management quota.</p>
                                      <p>Admission for Category-A students will be made through GATE. When GATE Candidates are not available, admission will be given to Non-GATE Candidates on TS-PGECET merit. Admission for Category-B will be made based on merit.</p>
                                       <h5>MBA – Eligibility Requirements:</h5>
                                       <p>The Convener admits 70% of the intake to the MBA program based on the ICET rank.</p>
                                                     <p>The Management admits the remaining 30% under Management quota.</p>
                                                     <h6>A candidate seeking admission into Two years MBA programmes must satisfy the following criteria:</h6>
                                                     <p>1. A pass in a bachelor’s degree in any field with 45% marks in aggregate.</p>
                                                     <p>2. Must have qualified in Integrated Common Entrance Test (ICET) conducted by Telangana State Council of Higher Education, Govt of TS.</p>
                                                     <p>3. The candidates will be admitted strictly in accordance with the merit secured at the ICET.</p>
                                                     <p>4. The candidates should satisfy local/non-local status requirement as laid down in the TS Educational institutions (Regulation of Admissions) Order 1974 as amended from time to time.</p>
                                                     <h5>MCA – Eligibility Requirements:</h5>
                                                             <p>The Convener admits 70% of the intake to the MCA program based on the ICET rank.</p>
                                                      <p>The Management admits the remaining 30% under Management quota.</p>
                                                      <h6>A candidate seeking admission into Two years MCA programmes must satisfy the following criteria:</h6>
                                                      <p>1. Should have passed recognized Bachelors Degree examination of minimum three years duration with at least 50% marks (45% marks in case of reserved (SC and ST) categories) in the qualifying examination with Mathematics at 10+2 level or at Graduation level.</p>
                                                      <p>2. Must have qualified in Integrated Common Entrance Test (ICET) conducted by Telangana State Council of Higher Education, Govt of TS.</p>
                                                      <p>3. The candidates will be admitted strictly in accordance with the merit secured at the ICET.</p>
                                                      <p>4. The candidates should satisfy local/non-local status requirement as laid down in the TS Educational institutions (Regulation of Admissions) Order 1974 as amended from time to time.</p>
                            </div>
                            </div>

                        <div class="tab-pane animate__animated animate__fadeInUp" id="v-Grievance" role="tabpanel" aria-labelledby="v-Grievance-tab" tabindex="0">
                            <div class="committee_table">
                                <div class="committee_head">
                                    <h3>BACHELOR DEGREE – B.Tech</h3>
                                </div>
                                <div class="committee_table_inn">
                                    <div class="table-responsive">
                                        
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>S.NO</th>
                                                    <th>Branch</th>
                                                    <th>Tuition Fee</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td>Computer Science &amp; Engineering</td>
                                                    <td>Rs. 55000/-</td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Electronics and Communication Engineering</td>
                                                    <td>Rs. 55000/-</td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Electrical &amp; Electronics Engineering</td>
                                                    <td>Rs. 55000/-</td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Mechanical Engineering</td>
                                                    <td>Rs. 55000/-</td>
                                                   
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Civil Engineering</td>
                                                    <td>Rs. 55000/-</td>
                                                  
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Computer Science and Engineering (Artificial Intelligence and Machine Learning)</td>
                                                    <td>Rs. 55000/-</td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Computer Science and Engineering (Data Science)</td>
                                                    <td>Rs. 55000/-</td>
                                                   
                                                </tr>
                                             
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="committee_table">
                                <div class="committee_head">
                                    <h3>MASTERS DEGREE DURATION – TWO YEARS</h3>
                                </div>
                                <div class="committee_table_inn">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>S.NO</th>
                                                    <th>Specialization</th>
                                                    <th>Tuition Fee</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td>M-Tech (CSE)</td>
                                                    <td>Rs. 57000/-</td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>M-Tech (PE)</td>
                                                    <td>Rs. 57000/-</td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>MBA</td>
                                                    <td>Rs. 35000/-</td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>MCA</td>
                                                    <td>Rs. 35000/-</td>
                                                   
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
            </div>
        </div>
    </section>
  <script>
    function updateHeading(headingText) {
       
        document.getElementById("section-heading").textContent = headingText;
    }
</script>


    <?php include('footer.php') ?>
</body>

</html>
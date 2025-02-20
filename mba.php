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
                // for query Btech syllabus
                $query01 = "SELECT * FROM dep_btech_syllabus WHERE branch = 'CSE'";

                $result01 = mysqli_query($con, $query01);
                // for query btech timetable
                $query02 = "SELECT * FROM dep_btech_timetable WHERE branch = 'CSE'";

                $result02 = mysqli_query($con, $query02);

                // for query btech academic calendar

                $query03 = "SELECT * FROM dep_btech_academic_calendar WHERE branch = 'CSE'";

                $result03 = mysqli_query($con, $query03);

                // for query btech lab configurations

                $query04 = "SELECT * FROM laboratories_config WHERE department_name = 'CSE'";

                $result04 = mysqli_query($con, $query04);

                // for query btech lab details

                $query05 = "SELECT * FROM  labdetails WHERE department LIKE 'CSE' ORDER BY 	date_of_creation ASC";

                $result05 = mysqli_query($con, $query05);

                // for Mtech Tab impleementatios

                // for mtech Syllabus
                $query06 = "SELECT * FROM  mtech_syllabus WHERE department_name LIKE 'CSE'";

                $result06 = mysqli_query($con, $query06);

                // for mtech Timetable
                $query07 = "SELECT * FROM  mtech_timetable WHERE department_name LIKE 'CSE'";

                $result07 = mysqli_query($con, $query07);

                // for mtech Academic Calendar
                $query08 = "SELECT * FROM  mtech_academic_calendar WHERE department_name LIKE 'CSE'";

                $result08 = mysqli_query($con, $query08);
                // for mtech Academic Laboratories
                $query09 = "SELECT * FROM  mtech_laboratories WHERE department_name LIKE 'CSE'";

                $result09 = mysqli_query($con, $query09);






                $result2 = mysqli_query($con, $query1);

                $query2 = "SELECT lab_name, lab_details FROM dep_btech WHERE branch_name = 'CSE'";
                $result3 = mysqli_query($con, $query2);
                // Close the database connection
                // mysqli_close($con);
                $query3 = "SELECT id, branch_name, lab_name, number_of_systems, lab_details, laboratories, syllabus, timetable, academic_calendar FROM dep_mtech WHERE branch_name = 'CSE'";
                $result4 = mysqli_query($con, $query3);


                $query4 = "SELECT * FROM faculty_event2 WHERE department = 'CSE' ORDER BY date_of_creation DESC";
                $result5 = mysqli_query($con, $query4);


                $query5 = "SELECT * FROM dep_faculty_publications2 WHERE department LIKE 'CSE' ORDER BY date_of_creation DESC";
                $result6 = mysqli_query($con, $query5);

                $query6 = "SELECT * FROM dep_faculty_innovations2 WHERE department = 'CSE' ORDER BY date_of_creation DESC";
                $result7 = mysqli_query($con, $query6);
                // mysqli_close($con);
                // for student events
                $query7 = "SELECT * FROM student_events2 WHERE department = 'CSE' ORDER BY date_of_creation DESC";
                $result8 = mysqli_query($con, $query7);

                // for student placement

                $query8 = "SELECT * FROM student_placements2 WHERE department = 'CSE' ORDER BY date_of_creation DESC";
                $result9 = mysqli_query($con, $query8);

                // for contcat Hod Dynamic 


                $query9 = "SELECT * FROM contact_hod WHERE department = 'CSE' ORDER BY id ASC LIMIT 1";
                $result10 = mysqli_query($con, $query9);

                // for Co's Po's

                $query10 = "SELECT * FROM contact_hod WHERE department = 'CSE'";
                $result11 = mysqli_query($con, $query10);

                ?>


<!doctype html>
<html lang="en">

<head>
    <?php include('head_links.php') ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />



    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/dist/css/cse2.css">
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
.nav-link.active::before {
  content: "";
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  transform: scaleX(1);
  transform-origin: left center;
  background-color: var(--orange) !important;
  z-index: -1;
  transition: transform 0.8s;
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
                    <h4>MBA</h4>
                </div>

                <div class="bnr_bredcrumb">
                    <div class="container">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Departments</a></li>
                                <li class="breadcrumb-item active" aria-current="page">MBA</li>
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
                <h2 class="widget-title">MBA Department</h2>
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
                                
                                <p>The Department of Business management is a leading business management school in North Telangana offering High-class education through a student-focused culture of excellence, entrepreneurial thinking and industry alignment. As a part of offering Technical and professional courses, in order to meet the increasing demands from national and international enterprises for efficient managers, in the recent times, Vaageswari College of Engineering, has started the Department of Business Management (MBA) in the year 2006 with an intake of 60 students. Till the date 720 students were graduated from the department.
A high quality expertise team of faculty is appointed to teach students. The team of MBA faculty is highly talented and they can explain the complicated concepts in a very simple manner, so that the students understand and memorize well.</p>
<p>Specializations in the areas of Finance, Marketing and Human Resource Management are offered, which are essential for any sector, with an aim to develop students’ knowledge in domain area and improve the business strategies and then they able to engage their business or take up a responsible position in other corporate companies.</p>
<p>To enhance soft skills and life skills to our students, we organize various skill development programs, which offer them a realistic experience; they are familiarized with the role they have to play, to handle the tough situation in the future. The department has separate and well equipped library and business lab facilities. We have secured 90 per cent of result this year.</p>
                            <!--<div class="committee_table">-->
                            <!--    <div class="committee_head">-->
                            <!--        <h3>BACHELOR DEGREE – B.Tech DURATION – FOUR YEARS</h3>-->
                            <!--    </div>-->
                                <!--<div class="committee_table_inn">-->
                                <!--    <div class="table-responsive">-->
                                <!--        <table class="table table-bordered table-striped">-->
                                <!--            <thead>-->
                                <!--                <tr>-->
                                <!--                    <th>S.NO</th>-->
                                <!--                    <th>Branch</th>-->
                                <!--                    <th>Intake</th>-->
                                                    
                                <!--                </tr>-->
                                <!--            </thead>-->
                                <!--            <tbody>-->
                                <!--                <tr>-->
                                <!--                    <td></td>-->
                                <!--                    <td>Computer Science &amp; Engineering</td>-->
                                <!--                    <td>300</td>-->
                                                    
                                <!--                </tr>-->
                                <!--                <tr>-->
                                <!--                    <td></td>-->
                                <!--                    <td>Electronics and Communication Engineering</td>-->
                                <!--                    <td>150</td>-->
                                                    
                                <!--                </tr>-->
                                <!--                <tr>-->
                                <!--                    <td></td>-->
                                <!--                    <td>Electrical &amp; Electronics Engineering</td>-->
                                <!--                    <td>30</td>-->
                                                    
                                <!--                </tr>-->
                                <!--                <tr>-->
                                <!--                    <td></td>-->
                                <!--                    <td>Mechanical Engineering</td>-->
                                <!--                    <td>30</td>-->
                                                   
                                <!--                </tr>-->
                                <!--                <tr>-->
                                <!--                    <td></td>-->
                                <!--                    <td>Computer Science and Engineering (Artificial Intelligence and Machine Learning)</td>-->
                                <!--                    <td>180</td>-->
                                                   
                                <!--                </tr>-->
                                <!--                <tr>-->
                                <!--                    <td></td>-->
                                <!--                    <td>Computer Science and Engineering (Data Science)</td>-->
                                <!--                    <td>60</td>-->
                                                    
                                <!--                </tr>-->
                                             
                                <!--            </tbody>-->
                                <!--        </table>-->
                                <!--    </div>-->
                                <!--</div>-->
                            <!--</div>-->
                            <!-- <div class="committee_table">-->
                            <!--    <div class="committee_head">-->
                            <!--        <h3>MASTERS DEGREE DURATION – TWO YEARS</h3>-->
                            <!--    </div>-->
                            <!--    <div class="committee_table_inn">-->
                            <!--        <div class="table-responsive">-->
                            <!--            <table class="table table-bordered table-striped">-->
                            <!--                <thead>-->
                            <!--                    <tr>-->
                            <!--                        <th>S.NO</th>-->
                            <!--                        <th>Branch</th>-->
                            <!--                        <th>Intake</th>-->
                                                    
                            <!--                    </tr>-->
                            <!--                </thead>-->
                            <!--                <tbody>-->
                            <!--                    <tr>-->
                            <!--                        <td></td>-->
                            <!--                        <td>M-Tech (CSE)</td>-->
                            <!--                        <td>30</td>-->
                                                    
                            <!--                    </tr>-->
                            <!--                    <tr>-->
                            <!--                        <td></td>-->
                            <!--                        <td>M-Tech (PE)</td>-->
                            <!--                        <td>18</td>-->
                                                    
                            <!--                    </tr>-->
                            <!--                    <tr>-->
                            <!--                        <td></td>-->
                            <!--                        <td>MBA</td>-->
                            <!--                        <td>180</td>-->
                                                    
                            <!--                    </tr>-->
                            <!--                    <tr>-->
                            <!--                        <td></td>-->
                            <!--                        <td>MCA</td>-->
                            <!--                        <td>120</td>-->
                                                   
                            <!--                    </tr>-->
                                               
                            <!--                </tbody>-->
                            <!--            </table>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                        </div>

                        <div class="tab-pane animate__animated animate__fadeInUp" id="v-Anti-Ragging-Committee" role="tabpanel" aria-labelledby="v-Anti-Ragging-Committee-tab" tabindex="0">
                             <div class="committee_head">
                                    <h3>HOD Message</h3>
                                </div>
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

                                  <?php
                        if (mysqli_num_rows($result04) > 0) {
                            while ($row5 = mysqli_fetch_assoc($result04)) {
                                $laboratories = $row5['description'];
                        ?>
                                <div class="table-responsive">
                                    <p> <?php echo $laboratories; ?></p>

                                </div>
                                <?php 
                            }
                        } else {
                            echo "nothing found";
                        }   

                         if (mysqli_num_rows($result01) > 0) {
                                                                    while ($row2 = mysqli_fetch_assoc($result01)) {
                                                                        // Extract department data
                                                                        $syllabus = $row2['syllabus'];

                                ?>
                          
                        </div>
                          <div class="tab-pane animate__animated animate__fadeInUp" id="v-syllabus" role="tabpanel" aria-labelledby="v-syllabus-tab" tabindex="0">
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
                                    <?php
     
                            }
                        } else {
                            echo "nothing found";
                        } 

                                        ?>
                        </div>
                          <div class="tab-pane animate__animated animate__fadeInUp" id="v-e-resources" role="tabpanel" aria-labelledby="v-e-resources-tab" tabindex="0">
                                <div class="committee_head">
                                    <h3>E- Resources</h3>
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
                          <div class="tab-pane animate__animated animate__fadeInUp" id="v-faculty" role="tabpanel" aria-labelledby="v-faculty-tab" tabindex="0">
                                <div class="committee_head">
                                    <h3>Faculty Achievements</h3>
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
                          <div class="tab-pane animate__animated animate__fadeInUp" id="v-student" role="tabpanel" aria-labelledby="v-studente-tab" tabindex="0">
                                <div class="committee_head">
                                    <h3>Student Achievements</h3>
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
                        
                <?php

                $query = "SELECT * FROM dep_faculty_profile WHERE department = 'MEC' ORDER BY id ASC";
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
                         <div class="tab-pane animate__animated animate__fadeInUp" id="v-profile" role="tabpanel" aria-labelledby="v-profile-tab" tabindex="0">
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
                                                            alt="faculty_img" width="50" class="img-fluid faculty-img-sec" style="border-radius: 50%; max-width: 25% !important" >
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
                         <div class="tab-pane animate__animated animate__fadeInUp" id="v-event" role="tabpanel" aria-labelledby="v-event-tab" tabindex="0">
                               <div class="committee_head">
                                    <h3>Faculty Events</h3>
                                </div>
                              
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
                                <div class="tab-pane animate__animated animate__fadeInUp" id="v-Publications" role="tabpanel" aria-labelledby="v-Publications-tab" tabindex="0">
                               <div class="committee_head">
                                    <h3>Publications</h3>
                                </div>
                            

                                <!-- tatic publicationss -->

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
                         <div class="tab-pane animate__animated animate__fadeInUp" id="v-News" role="tabpanel" aria-labelledby="v-News-tab" tabindex="0">
                               <div class="committee_head">
                                    <h3>Newsletter</h3>
                                </div>
                             <h5>Coming Soon</h5>
                        </div>
                         <div class="tab-pane animate__animated animate__fadeInUp" id="v-Inno" role="tabpanel" aria-labelledby="v-Inno-tab" tabindex="0">
                               <div class="committee_head">
                                    <h3>Faculty Innovations</h3>
                                </div>
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


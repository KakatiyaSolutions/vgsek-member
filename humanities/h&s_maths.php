 <?php
    //     if (session_status() == PHP_SESSION_NONE) {
    //     session_start();
    // }
    // Connect to the database
    $con = mysqli_connect('srv1328.hstgr.io', 'u629694569_vcpkacin_web', 'Kakatiya@1243', 'u629694569_vcpkacin_web');
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    ini_set('display_errors', 1); // Display errors
    error_reporting(E_ALL); // Report all errors

    $query10 = "SELECT * FROM contact_hod WHERE department = 'MATHS'";
    $result11 = mysqli_query($con, $query10);

    $sql = "SELECT * FROM dep_faculty_profile WHERE department LIKE 'MATHS'"; // Change the query if needed to match your table structure
    $result = mysqli_query($con, $sql);

    ?>


 <!doctype html>
 <html lang="en">

 <head>
     <?php include('../head_links.php') ?>
     <link rel="stylesheet" href="<?php echo $base_url; ?>assets/dist/css/about.css">
     <link rel="stylesheet" href="<?php echo $base_url; ?>assets/dist/css/humanities.css">
       <style>
        .useful_links_main {
  padding: 80px 0 !important;
  background-color: var(--blue) !important;
}

.links_department {
  display: flex !important;
  align-items: center !important;
  justify-content: center !important;
}

.links_department .depart_lin_inn {
  width: 100% !important;
}

.links_department .depart_lin_inn a {
  color: black !important;
  background-color: var(--white) !important;
  transition: 0.5s all !important;
}

.depart_lin_inn a {
  font-size: 18px !important;
  font-weight: 600 !important;
  color: var(--white) !important;
  text-align: center !important;
  background-color: var(--blue) !important;
  padding: 15px 15px !important;
  transition: 0.5s all !important;
  display: flex !important;
  align-items: baseline !important;
  justify-content: space-between !important;
}

.depart_lin_inn {
  margin-left: 20px !important;
  margin-bottom: 20px !important;
}

.links_department .depart_lin_inn a:hover {
  color: var(--white) !important;
  background-color: var(--orange) !important;
}

    </style>
 </head>

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
                     <h4>H&S MATHS</h4>
                 </div>

                 <div class="bnr_bredcrumb">
                     <div class="container">
                         <nav aria-label="breadcrumb">
                             <ol class="breadcrumb">
                                 <li class="breadcrumb-item"><a href="<?php echo $base_url; ?>index.php">Home</a></li>
                                 <!-- <li class="breadcrumb-item"><a href="#">Programs</a></li> -->
                                 <li class="breadcrumb-item active" aria-current="page">H&S MATHS</li>
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
                         <h2>H&S MATHS</h2>
                         <hr>
                         <p>The Department Of Mathematics was established in the year 2005 and has always shared the vision of the institute in striving for excellence in teaching and learning activities Mathematics is an indispensable subject in the study of Science and Technology. The importance of Mathematics in engineering is known to everybody without having a sound knowledge of Mathematics, it is not possible to become a good engineer or any discipline. The Department of Mathematics strives to instil a conceptual understanding of the subject which would go along was in the study of their respective branches of engineering.</p>
                     </div>
                 </div>
                 <div class="col-lg-6">
                     <div class="abt_inn_img">
                         <img src="<?php echo $base_url; ?>assets/images/about/about_svek_video.webp" alt="about_college_image" clss="img-fluid" loading="lazy" decoding="sync">
                     </div>
                 </div>
             </div>

         </div>
     </section>

     <section class="humanities_fclty_sec">
         <div class="container">
             <div class="humanities_main_head">
                 <h3>HOD MESSAGE</h3>
             </div>
             <!-- <div class="row">
                 <div class="col-lg-3">
                     <div class="admi_tab_text">
                         <div class="hod_sec">
                             <img src="<?php echo $base_url; ?>/assets/images/humanities/vidyasagar.jpg" alt="user" class="img-fluid" loading="lazy" decoding="async">
                         </div>
                         <div class="hod_img_text">
                             <div class="hod_hod_name">
                                 <h4>Mr. K.RAJKUMAR</h4>
                                 <p>Associate Professor & HOD</p>
                             </div>
                             <ul>
                                 <li><a href="tell: 9133245888"><i class="fa-solid fa-phone"></i> 9133398999</a></li>
                                 <li><a href="mailto: vgse.civilhod@gmail.com"><i class="fa-solid fa-envelope"></i>vgse.mathshod@gmail.com</a></li>
                             </ul>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-9">
                     <div class="hod_sec_text">
                         <p>The Department of Mathematics at Vaageswari College of Engineering was established in 2005 and provides the students with the mathematical foundation required to analyse all engineering courses.It has been extensively engaged in teaching of engineering students.</p>

                         <p>The Department offers Engineering Mathematics -I, Mathematics -II ,Probability& Statistics,Discrete Mathematics,Computer Oriented Statistical methods , Laplacetransforms ,Numerical methods &Complexvariables for U.G students of B.Tech courses, and Probability &Statstics ,Discrete Mathematics & Operational Research for P.G courses. The Department also help to the students in mini and major projects for various engineering branches..</p>

                         <p>The objective of the department is to provide the young students into professionals with the mathematical foundation required to analyse all engineering courses.</p>
                         <p>The Department provides services to the entire institute for UG / PG studentsin engineering.The aim of the department is to pursue excellence in mathematics through teaching.we are achieving our objectives with the help of significantly experienced faculty.</p>
                     </div>
                 </div>
             </div> -->
             <?php
                // Assuming you have already fetched the $result10 with your query

                if (mysqli_num_rows($result11) > 0) {
                    // Loop through the fetched data
                    while ($row = mysqli_fetch_assoc($result11)) {
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
                            $imageSrc = "/path/to/default/image.jpg"; // Update with your default image path
                        }

                        $message = $row['message'];
                        $phone = $row['phone'];
                        $email = $row['email'];

                        // Output each HOD section with dynamic data
                        echo '<div class="row">
                <div class="col-lg-3">
                    <div class="admi_tab_text">
                        <div class="hod_sec">
                            <img src="' . $imageSrc . '" alt="user" class="img-fluid" loading="lazy" decoding="async">
                        </div>
                        <div class="hod_img_text">
                            <div class="hod_hod_name">
                                <h4>' . htmlspecialchars($name) . '</h4>
                                <p>' . htmlspecialchars($designation) . '</p>
                            </div>
                            <ul>
                                <li><a href="tel:' . htmlspecialchars($phone) . '"><i class="fa-solid fa-phone"></i> ' . htmlspecialchars($phone) . '</a></li>
                                <li><a href="mailto:' . htmlspecialchars($email) . '"><i class="fa-solid fa-envelope"></i>' . htmlspecialchars($email) . '</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hod_sec_text">
                        <p>' . nl2br(htmlspecialchars($message)) . '</p>
                    </div>
                </div>
            </div>';
                    }
                }
                ?>

         </div>
     </section>


     <!-- <section class="governing_main humanities_faculty_main">
         <div class="container">
             <div class="administration_head">
                 <h3>FACULTY</h3>
             </div>
             <div class="row">
                 <div class="col-lg-2">
                     <div class="managing_img">
                         <div class="ma_img">
                             <img src="http://kakatiyasolutions.in/vageshwari_clg/assets/images/humanities/MADHU.jpg2" alt="HOD" class="img-fluid" loading="lazy" decoding="async">
                         </div>
                         <div class="info">
                             <p>Mr. K. Rajkumar</p>
                             <p>HOD</p>
                             <p>15 Years</p>
                             <p>M.SC, B.Ed</p>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-2">
                     <div class="managing_img">
                         <div class="ma_img">
                             <img src="http://kakatiyasolutions.in/vageshwari_clg/assets/images/humanities/Mr_B_Ramanareddy.webp" alt="HOD" class="img-fluid" loading="lazy" decoding="async">
                         </div>
                         <div class="info">
                             <p>Mr. B. Ramanareddy</p>
                             <p>Associate Professor</p>
                             <p>18 Years</p>
                             <p>M.SC,B.Ed</p>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-2">
                     <div class="managing_img">
                         <div class="ma_img">
                             <img src="http://kakatiyasolutions.in/vageshwari_clg/assets/images/humanities/Mr_A_Srinivas.webp" alt="HOD" class="img-fluid" loading="lazy" decoding="async">
                         </div>
                         <div class="info">
                             <p>Mr. A. Srinivas</p>
                             <p>Associate Professor</p>
                             <p>17 Years</p>
                             <p>M.SC,B.Ed</p>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-2">
                     <div class="managing_img">
                         <div class="ma_img">
                             <img src="http://kakatiyasolutions.in/vageshwari_clg/assets/images/humanities/Mrs_G_Sunithareddy.webp" alt="HOD" class="img-fluid" loading="lazy" decoding="async">
                         </div>
                         <div class="info">
                             <p>Mrs. G. Sunithareddy</p>
                             <p>Assistant Professor</p>
                             <p>12 Years</p>
                             <p>M.SC,B.Ed</p>
                         </div>
                     </div>
                 </div>

                 <div class="col-lg-2">
                     <div class="managing_img">
                         <div class="ma_img">
                             <img src="http://kakatiyasolutions.in/vageshwari_clg/assets/images/humanities/D_P_Manideep.webp" alt="HOD" class="img-fluid" loading="lazy" decoding="async">
                         </div>
                         <div class="info">
                             <p> Dr. P. Manideep</p>
                             <p>Assistant Professor</p>
                             <p>12 Years</p>
                             <p>M.SC,B.Ed,PhD.</p>
                         </div>
                     </div>
                 </div>

                 <div class="col-lg-2">
                     <div class="managing_img">
                         <div class="ma_img">
                             <img src="http://kakatiyasolutions.in/vageshwari_clg/assets/images/humanities/Mrs_G_Snehalatha.webp" alt="HOD" class="img-fluid" loading="lazy" decoding="async">
                         </div>
                         <div class="info">
                             <p>Mrs.G. Snehalatha</p>
                             <p>Assistant Professor</p>
                             <p>8 Years</p>
                             <p>M.SC,B.Ed</p>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-2">
                     <div class="managing_img">
                         <div class="ma_img">
                             <img src="http://kakatiyasolutions.in/vageshwari_clg/assets/images/humanities/Mrs_K._Dhanalaxmi.webp" alt="HOD" class="img-fluid" loading="lazy" decoding="async">
                         </div>
                         <div class="info">
                             <p>Mrs.K. Dhanalaxmi</p>
                             <p>Assistant Professor</p>
                             <p>7 Years</p>
                             <p>M.SC,B.Ed</p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section> -->

      <section class="governing_main humanities_faculty_main">
         <div class="container">
             <div class="administration_head">
                 <h3>FACULTY</h3>
             </div>
             <div class="row">
                 <?php
                    // Check if there are any rows returned
                    if (mysqli_num_rows($result) > 0) {
                        // Loop through each row and display the faculty information
                        while ($row = mysqli_fetch_assoc($result)) {
                            // Fetch individual data fields
                            $name = $row['name'];
                            $designation = $row['designation'];
                            $experience = $row['experience_in_year'];
                            $degree = $row['qualification'];
                            //$image = $row['image']; // Assume image column holds the image URL
                            if (!empty($row['image'])) {
                                // If the image is stored as BLOB, base64_encode it
                                $imageData = base64_encode($row['image']);
                                $imageSrc = "data:image/jpeg;base64," . $imageData;
                            } else {
                                // If no image, provide a default image or null
                                $imageSrc = "/path/to/default/image.jpg"; // Update with your default image path
                            }

                            // If no image is available, use a default image
                            if (empty($image)) {
                                $image = "http://localhost/vageshwari_clg/assets/images/default.jpg"; // Default image URL
                            }

                            // Dynamically generate HTML for each faculty member
                            echo '
                    <div class="col-lg-2">
                        <div class="managing_img">
                            <div class="ma_img">
                                <img src="' . $imageSrc . '" alt="Faculty" class="img-fluid" loading="lazy" decoding="async">
                            </div>
                            <div class="info">
                                <p>' . $name . '</p>
                                <p>' . $designation . '</p>
                                <p>' . $experience . ' Years</p>
                                <p>' . $degree . '</p>
                            </div>
                        </div>
                    </div>';
                        }
                    } else {
                        echo '<p>No faculty data available.</p>';
                    }
                    ?>
             </div>
         </div>
     </section>

     <section class="useful_links_main">
         <div class="container">
             <div class="links_department">
                 <div class="depart_lin_inn">
                     <a href="#">Publications<i class="fa-solid fa-arrow-right"></i></a>
                 </div>

                 <div class="depart_lin_inn">
                     <a href="#">Syllabus <i class="fa-solid fa-arrow-right"></i></a>
                 </div>
             </div>
             <div class="links_department">
                 <div class="depart_lin_inn">
                     <a href="#">E-Resources<i class="fa-solid fa-arrow-right"></i></a>
                 </div>

                 <div class="depart_lin_inn">
                     <a href="#">Faculty Achievements <i class="fa-solid fa-arrow-right"></i></a>
                 </div>
             </div>
         </div>
     </section>

     <?php include('../footer.php') ?>
 </body>

 </html>
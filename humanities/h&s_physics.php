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

    $query10 = "SELECT * FROM contact_hod WHERE department = 'PHYSICS'";
    $result11 = mysqli_query($con, $query10);

    $sql = "SELECT * FROM dep_faculty_profile WHERE department LIKE 'PHYSICS'"; // Change the query if needed to match your table structure
    $result = mysqli_query($con, $sql);

    ?>


 <!doctype html>
 <html lang="en">

 <head>
     <?php include('../head_links.php') ?>
     <link rel="stylesheet" href="<?php echo $base_url; ?>assets/dist/css/about.css">
     <link rel="stylesheet" href="<?php echo $base_url; ?>assets/dist/css/humanities.css">
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
                     <h4>H&S PHYSICS</h4>
                 </div>

                 <div class="bnr_bredcrumb">
                     <div class="container">
                         <nav aria-label="breadcrumb">
                             <ol class="breadcrumb">
                                 <li class="breadcrumb-item"><a href="<?php echo $base_url; ?>index.php">Home</a></li>
                                 <!-- <li class="breadcrumb-item"><a href="#">Programs</a></li> -->
                                 <li class="breadcrumb-item active" aria-current="page">H&S PHYSICS</li>
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
                         <h2>H&S PHYSICS</h2>
                         <hr>
                         <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                             Necessitatibus porro assumenda similique aspernatur delectus,
                             aperiam nemo excepturi. Nostrum, enim ipsam. Illum similique
                             quo possimus totam, voluptate nesciunt in aliquam quis
                             ipsum dolor, sit amet consectetur adipisicing elit.
                             Necessitatibus porro assumenda similique aspernatur delectus,
                             aperiam nemo
                             ipsum dolor, sit amet consectetur adipisicing elit.
                             Necessitatibus porro assumenda similique aspernatur delectus,
                             aperiam nemo excepturi. Nostrum, enim ipsam. Illum similique
                             quo possimus totam, voluptate nesciunt in aliquam quis
                             ipsum dolor, sit amet consectetur adipisicing elit.
                             Necessitatibus porro assumenda similique aspernatur delectus,
                             aperiam nemo quo possimus totam, voluptate nesciunt in aliquam quis
                             ipsum dolor, sit amet consectetur adipisicing elit.
                             Necessitatibus porro assumenda similique aspernatur delectus,
                             aperiam nemo?</p>
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

     <section id="about-vision-main">
         <div class="container">
             <div class="row">
                 <div class="col-lg-4 vision-class">
                     <div class="abot-vision">
                         <h3>
                             <img src="<?php echo $base_url; ?>assets/images/humanities/eye.png" class="img-fluid" alt="vision" loading="lazy" decoding="async">
                             Vision
                         </h3>
                         <li> <img src="<?php echo $base_url; ?>assets/images/about/list_type.webp" class="img-fluid" alt="list" loading="lazy" decoding="async">
                             To build a foundation for excellence and encourage
                             the development of the institution as a premier institution
                             by igniting and promoting enthusiasm, interests and passion,
                             in the study of physics, in professional courses as the part of curriculum.
                         </li>
                     </div>
                 </div>
                 <div class="col-lg-8">
                     <div class="abot-vision abot-mision">
                         <h3>
                             <img src="<?php echo $base_url; ?>assets/images/humanities/mission.png" class="img-fluid" alt="vision" loading="lazy" decoding="async">
                             Mission
                         </h3>
                         <li> <img src="<?php echo $base_url; ?>assets/images/about/list_type.webp" class="img-fluid" alt="list" loading="lazy" decoding="async">
                             To awaken the young minds and discover their talents both in theory and
                             in practical physics through dedication to teach, commitment towards
                             students and innovate instructional methods like PPT & visual aids.
                         </li>
                         <li> <img src="<?php echo $base_url; ?>assets/images/about/list_type.webp" class="img-fluid" alt="list" loading="lazy" decoding="async">
                             To support the developmental activities of the college and make the department vibrant.
                         </li>
                         <li> <img src="<?php echo $base_url; ?>assets/images/about/list_type.webp" class="img-fluid" alt="list" loading="lazy" decoding="async">
                             To make vital contributions in areas such as faculty, modern labs,
                             and demonstrate a high level of competence in the study of Engineering Physics / Applied Physics.
                         </li>
                         <li> <img src="<?php echo $base_url; ?>assets/images/about/list_type.webp" class="img-fluid" alt="list" loading="lazy" decoding="async">
                             To organize and sustain efficient operating methods in the department for realization of our objectives as Institution of eminence.
                         </li>
                         <li> <img src="<?php echo $base_url; ?>assets/images/about/list_type.webp" class="img-fluid" alt="list" loading="lazy" decoding="async">
                             To develop a strategy in the department for continuous improvement.
                         </li>
                     </div>
                 </div>
             </div>
         </div>
     </section>

     <section class="humanities_fclty_sec">
         <div class="container">
             <!-- <div class="humanities_main_head">
                <h3>HOD MESSAGE</h3>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <div class="admi_tab_text">
                        <div class="hod_sec">
                            <img src="<?php echo $base_url; ?>/assets/images/humanities/satish.jpg" alt="user" class="img-fluid" loading="lazy" decoding="async">
                        </div>
                        <div class="hod_img_text">
                            <div class="hod_hod_name">
                                <h4>Mr. M. SATISH</h4>
                                <p>Assistant Professor & HOD</p>
                            </div>
                            <ul>
                                <li><a href="tell: 9948020378"><i class="fa-solid fa-phone"></i> 9948020378</a></li>
                                <li><a href="mailto: vgse.physicshod@gmail.com"><i class="fa-solid fa-envelope"></i>vgse.physicshod@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12">
                    <div class="hod_sec_text">
                        <p>On behalf of Management, all our faculty, staff and students, I would
                            like to welcome you to the Physics Department at Vaageswari College of
                            Engineering. Our primary goal at the Department of Physics for Newcomers
                            Engineering is to prepare dynamic professionals for innovation and to
                            awaken their hidden talents in basic sciences, leadership qualities
                            with the resources required to be successful during the first year
                            of engineering on the campus. The department is well-equipped with
                            laboratory facilities for Applied Physics and Engineering Physics
                            subjects and supported by well qualified, highly dedicated faculty
                            with utmost level of proficiency. The college provides a variety
                            of required activities to the students that leads to grooming,
                            holistic development and helps in the successful completion of
                            their graduation with enthusiasm and passion.</p>
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
         </div>
     </section>


     <!-- <section class="governing_main humanities_faculty_main">
        <div class="container">   
            <div class="administration_head">
                <h3>FACULTY</h3>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="managing_img">
                        <div class="ma_img">
                        <img src="<?php echo $base_url; ?>/assets/images/humanities/MAHESH.jpg" alt="user" class="img-fluid" loading="lazy" decoding="async">
                         
                        </div>
                        <div class="info">
                            <p>U. MAHESH</p>
                            <p>Assistant Professor</p>
                            <p>7 Years</p>
                            <p>M.Sc., B.Ed</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="managing_img">
                        <div class="ma_img">
                        <img src="<?php echo $base_url; ?>/assets/images/humanities/ANJAMMA.jpg" alt="user" class="img-fluid" loading="lazy" decoding="async">
                           
                        </div>
                        <div class="info">
                            <p>DT. ANJAMMA </p>
                            <p>Assistant Professor</p>
                            <p>4 Years</p>
                            <p>M.Sc., B.Ed</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="managing_img">
                        <div class="ma_img">
                        <img src="<?php echo $base_url; ?>/assets/images/humanities/Raju Gonela.jpeg" alt="user" class="img-fluid" loading="lazy" decoding="async">
                         
                        </div>
                        <div class="info">
                            <p>Mr. Raju Gonela</p>
                            <p>Assistant Professor</p>
                            <p>3 Years</p>
                            <p>M.Sc., B.Ed</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="managing_img">
                        <div class="ma_img">
                        <img src="<?php echo $base_url; ?>/assets/images/humanities/Kalpana.jpeg" alt="user" class="img-fluid" loading="lazy" decoding="async">
                          
                        </div>
                        <div class="info">
                            <p>Mrs. N. Kalpana</p>
                            <p>Assistant Professor</p>
                            <p>5 Years</p>
                            <p>M.Sc., B.Ed</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="managing_img">
                        <div class="ma_img">
                        <img src="<?php echo $base_url; ?>/assets/images/humanities/JYOTHI.jpg" alt="user" class="img-fluid" loading="lazy" decoding="async">
                           
                        </div>
                        <div class="info">
                            <p>M. JYOTHI</p>
                            <p>Assistant Professor</p>
                            <p>4 Years</p>
                            <p>M.Sc. (Physics)</p>
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
     <?php include('../footer.php') ?>
 </body>

 </html>
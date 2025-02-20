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

                  $query10 = "SELECT * FROM contact_hod WHERE department = 'CHEMISTRY'";
                    $result11 = mysqli_query($con, $query10);

                 $sql = "SELECT * FROM dep_faculty_profile WHERE department LIKE 'CHEMISTRY'"; // Change the query if needed to match your table structure
                    $result = mysqli_query($con, $sql);

?>



<!doctype html>
<html lang="en">

<head>
    <?php include('../head_links.php') ?>
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/dist/css/about.css">
    <link rel="stylesheet" href="../assets/dist/css/humanities.css">

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
                    <h4>H&S CHEMISTRY</h4>
                </div>

                <div class="bnr_bredcrumb">
                    <div class="container">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo $base_url; ?>index.php">Home</a></li>
                                <!-- <li class="breadcrumb-item"><a href="#">Programs</a></li> -->
                                <li class="breadcrumb-item active" aria-current="page">H&S CHEMISTRY</li>
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
                        <h2>H&S CHEMISTRY</h2>
                        <hr>
                        <p>Department of Chemistry at Vaageswari college of Engineering has been offering First year B.Tech Program right from its inception with excellent laboratory facilities. It is a part of Humanities and Sciences Department. The Chemistry department serves the purpose of imparting knowledge in the core science subject, along with innovative ideas to achieve their goals keeping concern about the present environmental needs which is a fundamental building block for most engineering disciplines. The department has highly qualified faculty who have knowledge in research and vast experience in the teaching field. The faculty has contributed many research papers which are published in distinguished international and national journals.</p>
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
                            <img src="<?php echo $base_url; ?>/assets/images/humanities/Dr_J_SANDHYA_REDDY.webp" alt="user" class="img-fluid" loading="lazy" decoding="async">
                        </div>
                        <div class="hod_img_text">
                            <div class="hod_hod_name">
                                <h4>Dr.J. Sandhya Reddy</h4>
                                <p>Associate Professor & HOD</p>
                            </div>
                            <ul>
                                <li><a href="tell: 9133245888"><i class="fa-solid fa-phone"></i>  9502343953</a></li>
                                <li><a href="mailto: vgse.civilhod@gmail.com"><i class="fa-solid fa-envelope"></i>vgse.chemistryhod@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hod_sec_text">
                        <p>The department of Chemistry providing the academic excellence also holds a wide range of intellectual and creative discussions through the platform of conferences, seminars. The faculty members of the department are actively involved in research also. Our course topics are designed to provide students the knowledge of Engineering Chemistry, and also introduce them to various experimental skills. The subject has become as an essential part of the curriculum for all the branches of Engineering..</p>

                        <p>The department is quite successfully offering quality education with the future perspective.</p>

                        <p>Students are encouraged to communicate only in English while on campus. The students are-->
                        <!--    exposed to practical real time studies there by training them to analyze and provide solution-->
                        <!--    for the same. Along with curricular, students are trained in all dimensions by means of seminar,-->
                        <!--    workshops, Hands on work, technical talks and many more. This provides a well built platform to-->
                        <!--    enhance their enthusiasm and practical knowledge, which makes them to be confident to tackle any-->
                        <!--    challenges to face employability skills and be advanced and innovative with the growing technology.</p>-->
                    <!-- </div> -->
                <!-- </div> -->
            <!-- </div> --> 

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
                            <img src="https://kakatiyasolutions.in/vageshwari_clg/assets/images/humanities/Dr_J_SANDHYA_REDDY.webp" alt="HOD" class="img-fluid" loading="lazy" decoding="async">
                        </div>
                        <div class="info">
                            <p>Dr.J.SANDHYA REDDY</p>
                            <p>HOD & Associate Professor</p>
                            <p>11 Years</p>
                            <p>M.Sc., B.Ed., PhD(Org. Chemistry)</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="managing_img">
                        <div class="ma_img">
                            <img src="https://kakatiyasolutions.in/vageshwari_clg/assets/images/humanities/Mrs_Asreen.webp" alt="HOD" class="img-fluid" loading="lazy" decoding="async">
                        </div>
                        <div class="info">
                            <p>Mrs.Asreen</p>
                            <p>Assistant Professor</p>
                            <p>3 Years</p>
                            <p>M.Sc (Org. Chemistry)</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="managing_img">
                        <div class="ma_img">
                            <img src="https://kakatiyasolutions.in/vageshwari_clg/assets/images/humanities/Mrs_D_Saritha.webp" alt="HOD" class="img-fluid" loading="lazy" decoding="async">
                        </div>
                        <div class="info">
                            <p>	Mrs. D. Sarithas</p>
                            <p>Assistant Professor</p>
                            <p>3 Years</p>
                            <p>M.Sc (Org. Chemistry)</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="managing_img">
                        <div class="ma_img">
                            <img src="https://kakatiyasolutions.in/vageshwari_clg/assets/images/humanities/Mrs_V_Thirumala.webp" alt="HOD" class="img-fluid" loading="lazy" decoding="async">
                        </div>
                        <div class="info">
                            <p>Mrs.V. Thirumala</p>
                            <p>Assistant Professor</p>
                            <p>2 Years</p>
                            <p>M.Sc (Org. Chemistry)</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="managing_img">
                        <div class="ma_img">
                            <img src="https://kakatiyasolutions.in/vageshwari_clg/assets/images/humanities/DR_E_JAYANTHI RANI.webp" alt="HOD" class="img-fluid" loading="lazy" decoding="async">
                        </div>
                        <div class="info">
                            <p>DR.E.JAYANTHI RANI</p>
                            <p>Assistant Professor</p>
                            <p>12 Years</p>
                            <p>M.Sc , Ph.d</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="managing_img">
                        <div class="ma_img">
                            <img src="https://kakatiyasolutions.in/vageshwari_clg/assets/images/humanities/DR_M_VENKATESWARA.webp" alt="HOD" class="img-fluid" loading="lazy" decoding="async">
                        </div>
                        <div class="info">
                            <p>DR.M.VENKATESWARA REDDY</p>
                            <p>Assistant Professor</p>
                            <p>12 Years</p>
                            <p>M.Sc, Ph.d (Organic Chemistry)</p>
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
                        <a href="#">Laboratories<i class="fa-solid fa-arrow-right"></i></a>
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
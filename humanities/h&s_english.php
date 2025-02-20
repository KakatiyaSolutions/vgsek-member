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

                  $query10 = "SELECT * FROM contact_hod WHERE department = 'ENGLISH'";
                    $result11 = mysqli_query($con, $query10);

                 $sql = "SELECT * FROM dep_faculty_profile WHERE department LIKE 'ENGLISH'"; // Change the query if needed to match your table structure
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
                    <h4>H&S ENGLISH</h4>
                </div>

                <div class="bnr_bredcrumb">
                    <div class="container">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo $base_url; ?>index.php">Home</a></li>
                                <!-- <li class="breadcrumb-item"><a href="#">Programs</a></li> -->
                                <li class="breadcrumb-item active" aria-current="page">H&S ENGLISH</li>
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
                        <h2>H&S ENGLISH</h2>
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
                                <h4>Mr. M. Vidyasagar</h4>
                                <p>Associate Professor & HOD</p>
                            </div>
                            <ul>
                                <li><a href="tell: 9133245888"><i class="fa-solid fa-phone"></i> 9133245888</a></li>
                                <li><a href="mailto: vgse.civilhod@gmail.com"><i class="fa-solid fa-envelope"></i>vgse.civilhod@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hod_sec_text">
                        <p>On behalf of all our faculty members, staff and students, I feel it is a great
                            privilege for me to share my message with you and I welcome you to our Vaageswari
                            College of Engineering. The department is forecasting the vision of the college
                            and striving hard for making students sure to prepare them compatible for ‘industry ready’.</p>

                        <p>Students are participating in various co-curricular activities throughout the year.
                            Our teaching and learning process is based on the Outcome Based Education (OBE). English
                            reigns supreme among all the other languages in the world. It plays a pivotal role in
                            determining the future of any engineer and has become the part and parcel of the engineering
                            curriculum. The department places a strong emphasis on imparting practical education by
                            carefully administering proper lab work for imparting communication skills and employability skills.</p>

                        <p>Students are encouraged to communicate only in English while on campus. The students are
                            exposed to practical real time studies there by training them to analyze and provide solution
                            for the same. Along with curricular, students are trained in all dimensions by means of seminar,
                            workshops, Hands on work, technical talks and many more. This provides a well built platform to
                            enhance their enthusiasm and practical knowledge, which makes them to be confident to tackle any
                            challenges to face employability skills and be advanced and innovative with the growing technology.</p>
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
                            <img src="http://localhost/vageshwari_clg/assets/images/humanities/MADHU.jpg" alt="HOD" class="img-fluid" loading="lazy" decoding="async">
                        </div>
                        <div class="info">
                            <p>Mr. M. MADHU KUMAR</p>
                            <p>Assistant Professor</p>
                            <p>34 Years</p>
                            <p>M.A</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="managing_img">
                        <div class="ma_img">
                            <img src="http://localhost/vageshwari_clg/assets/images/humanities/Ramesh.jpg" alt="HOD" class="img-fluid" loading="lazy" decoding="async">
                        </div>
                        <div class="info">
                            <p>Mr. K. Ramesh</p>
                            <p>Assistant Professor</p>
                            <p>13 Years</p>
                            <p>M.A., B.Ed</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="managing_img">
                        <div class="ma_img">
                            <img src="http://localhost/vageshwari_clg/assets/images/humanities/Devadas.jpg" alt="HOD" class="img-fluid" loading="lazy" decoding="async">
                        </div>
                        <div class="info">
                            <p>Mr K. Devadas</p>
                            <p>Assistant Professor</p>
                            <p>16 Years</p>
                            <p>M.A., B.Ed.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="managing_img">
                        <div class="ma_img">
                            <img src="http://localhost/vageshwari_clg/assets/images/humanities/Krishna.jpg" alt="HOD" class="img-fluid" loading="lazy" decoding="async">
                        </div>
                        <div class="info">
                            <p>Mr D. Krishna Prasad</p>
                            <p>Assistant Professor</p>
                            <p>10 Years</p>
                            <p>M.A.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="managing_img">
                        <div class="ma_img">
                            <img src="http://localhost/vageshwari_clg/assets/images/humanities/Anjavva.jpg" alt="HOD" class="img-fluid" loading="lazy" decoding="async">
                        </div>
                        <div class="info">
                            <p>Mrs. Anjavva</p>
                            <p>Assistant Professor</p>
                            <p>5 Years</p>
                            <p>M.A.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="managing_img">
                        <div class="ma_img">
                            <img src="http://localhost/vageshwari_clg/assets/images/humanities/Amala.jpg" alt="HOD" class="img-fluid" loading="lazy" decoding="async">
                        </div>
                        <div class="info">
                            <p>Mrs. L. Amala</p>
                            <p>Assistant Professor</p>
                            <p>6 Years</p>
                            <p>M.A.</p>
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
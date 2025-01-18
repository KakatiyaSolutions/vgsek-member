<!doctype html>
<html lang="en">

<head>
    <?php include('head_links.php') ?>
    <link rel="stylesheet" href="<?php echo $base_url;?>assets/dist/css/about.css">
</head>

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
                    <h4>Contact us</h4>
                </div>

                <div class="bnr_bredcrumb">
                    <div class="container">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index">Home</a></li>
                                <!-- <li class="breadcrumb-item"><a href="#">Programs</a></li> -->
                                <li class="breadcrumb-item active" aria-current="page">Contact us</li>
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

    <section class="contact_1">
        <div class="container">
            <div class="contact_head">
                <h4>Get in <span>Touch</span></h4>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <ul>
                        <li>
                            <div class="card">
                                <div class="icon">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="add">
                                    <h4>Phone Number</h4>
                                    <a href="tel: +91 9502588609">+91 9502588609</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="card">
                                <div class="icon">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div class="add">
                                    <h4>Email Address</h4>
                                    <a href="mailto: principal@vgsek.ac.in">principal@vgsek.ac.in</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="card">
                                <div class="icon">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="add">

                                    <h4>Location</h4>
                                    <p>Vaageswari College Of Engineering, <br>
                                        Beside LMD Police Station <br> Ramakrishna Colony, Karimnagar,
                                        Telangana - 505 527

                                    </p>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
                <div class="col-lg-8">
                    <form action="" method="POST">
                        <h3>Send Message</h3>
                        <div class="line"></div>
                        <div class="row contact_inputs">
                            <div class="col-lg-6 col-md-6">
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="name" placeholder="Your name" required="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="mb-3">
                                    <input type="email" class="form-control" name="email" placeholder="Email Address" required="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="phone" placeholder="Phone number" required="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" name="message" rows="3" placeholder="Message"></textarea>
                        </div>
                        <input type="submit" name="submit" class="btn btn-lg" value="Send Message">
                    </form>
                </div>
            </div>

        </div>

    </section>

    <section>
        <div class="container map">
            <h4>Find us on Google Maps</h4>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d30295.409072109334!2d79.162899!3d18.350654000000002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bccdaf9f56aaf43%3A0xff9136139341d5dd!2sVaageswari%20College%20of%20Engineering!5e0!3m2!1sen!2sin!4v1719642269893!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>




    <?php include('footer.php') ?>
</body>

</html>
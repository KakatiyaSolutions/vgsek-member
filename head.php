<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo $base_url; ?>index.php">
            <img src="<?php echo $base_url; ?>assets/images/logo/LOGO.png" class="img-fluid" alt="logo" loading="lazy" decoding="async">
        </a>
        <div class="nav_naac">
            <a href="<?php echo $base_url; ?>">
                <img src="<?php echo $base_url; ?>assets/images/logo/naac-a+-grade.png" class="img-fluid" alt="naac" loading="lazy" decoding="async">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">

            <div class="scnd_nav_list">
                <ul>
                    <li>
                        <a href="<?php echo $base_url; ?>">Online Grievances</a>
                    </li>
                    <li>
                        <a href="<?php echo $base_url; ?>committees.php">Committees</a>
                    </li>
                    <li>
                        <a href="<?php echo $base_url; ?>alumni.php">Alumni</a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="<?php echo $base_url; ?>naac.php">NAAC</a>
                    </li>
                    <li>
                        <a href="<?php echo $base_url; ?>">AQAR</a>
                    </li>
                    <li>
                        <a href="<?php echo $base_url; ?>iqac.php">IQAC</a>
                    </li>
                    <li>
                        <a href="<?php echo $base_url; ?>">NIRF</a>
                    </li>
                    <div class="blink_code">
                        <p>COUNSELLING CODE :</p>
                        <h5>VGSE</h5>
                    </div>
                </ul>
            </div>

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $base_url; ?>index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $base_url; ?>about.php">About Us</a>
                </li>
                <!--<li class="nav-item">-->
                <!--    <a class="nav-link" href="<?php echo $base_url; ?>academic.php">Academics</a>-->
                <!--</li>-->
                
                  <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Academics
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?php echo $base_url; ?>academic.php"> Academic Regulations</a></li>
                <li><a class="dropdown-item" href="<?php echo $base_url; ?>admissions.php">Admissions</a></li>
              
              </ul>
            </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="<?php echo $base_url; ?>cse/cse.php">Departments</a>
                </li> -->
                <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Departments
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?php echo $base_url; ?>cse/cse2.php"> Computer Science & Engineering</a></li>
                <li><a class="dropdown-item" href="<?php echo $base_url; ?>ece/ece2.php">Electronics and Communication Engineering</a></li>
                
                <li><a class="dropdown-item" href="<?php echo $base_url; ?>eee/eee2.php">Electrical and Electronics Engineering</a></li>
                <li><a class="dropdown-item" href="<?php echo $base_url; ?>civil/civil.php">Civil Engineering</a></li>
                <li><a class="dropdown-item" href="<?php echo $base_url; ?>me/me.php"> Mechanical Engineering</a></li>
                 <li><a class="dropdown-item" href="<?php echo $base_url; ?>ai&ml/ai&ml.php">Computer Science & Engineering ( AI & ML)</a></li>
                  <li><a class="dropdown-item" href="<?php echo $base_url; ?>data/data.php">Computer Science & Engineering (Data Science)</a></li>
                  <li><a class="dropdown-item" href="<?php echo $base_url; ?>mba.php">MBA</a></li>
                  <li><a class="dropdown-item" href="<?php echo $base_url; ?>mca.php">MCA</a></li>

              </ul>
            </li>
                <li class="nav-item dropdown">

                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Humanities</a>

                <ul class="dropdown-menu"> 
                    <li> <a class="dropdown-item" href="<?php echo $base_url; ?>humanities/h&s_english.php">ENGLISH</a></li>
                    <li> <a class="dropdown-item" href="<?php echo $base_url; ?>humanities/h&s_physics.php">PHYSICS</a></li>
                    <li> <a class="dropdown-item" href="<?php echo $base_url; ?>humanities/h&s_chemistry.php">CHEMISTRY</a></li>
                     <li> <a class="dropdown-item" href="<?php echo $base_url; ?>humanities/h&s_maths.php">MATHS</a></li>
                </ul>
                   
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $base_url; ?>placement/placement.php">Placements</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $base_url; ?>facilities/facilities.php">Facilities</a>
                </li>
            </ul>
        </div>
        <div class="nav_call_toggle">
            <!--<img src="<?php echo $base_url; ?>assets/images/icons/telephone.webp" class="img-fluid" alt="phone" loading="lazy" decoding="async">-->
            <!--<div class="toggle_text">-->
            <!--    <p>Admission Helpline</p>-->
            <!--    <a href="">+91 9876543210</a>-->
            <!--</div>-->

            <div class="gov_logo">
                <img src="<?php echo $base_url; ?>assets/images/logo/aicte.webp" class="img-fluid" alt="naac" loading="lazy" decoding="async">
            </div>

            <div class="gov_logo">
                <img src="<?php echo $base_url; ?>assets/images/logo/ugc.png" class="img-fluid" alt="naac" loading="lazy" decoding="async">
            </div>

            <div class="menu-wrap">
                <input type="checkbox" class="toggler">
                <div class="hamburger">
                    <div></div>
                </div>
                <div class="menu">
                    <div>
                        <div>
                            <ul>
                                <li><a href="<?php echo $base_url; ?>index.php">Home</a></li>
                                <li><a href="<?php echo $base_url; ?>about.php">About Us</a></li>
                                <li><a href="<?php echo $base_url; ?>academic.php">Academics</a></li>
                                <li><a href="<?php echo $base_url; ?>cse/cse.php">Programs</a></li>
                                <li><a href="<?php echo $base_url; ?>humanities/h&s_physics.php">Humanities</a></li>
                                <li><a href="<?php echo $base_url; ?>placement/placement.php">Placements</a></li>
                                <li><a href="<?php echo $base_url; ?>facilities/facilities.php">Facilities</a></li>
                                <li><a href="<?php echo $base_url; ?>contact.php">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
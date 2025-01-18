<!doctype html>
<html lang="en">

<head>
    <?php include('head_links.php') ?>
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/dist/css/about.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/dist/css/academic.php">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/dist/css/department.css">
</head>
<style>
    .alumni-sec{
        display:flex;
        align-items: center;
        justify-content: center;
        padding:0px 0px 60px;
        background-color: #f2f2f2;
    }
    .form-gap{
        display:flex;
        align-items: center;
        justify-content: center;
        padding:50px 50px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        row-gap:30px;
    }
     /* .form-gap img{
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    } */
    .form-control:focus {
    box-shadow: none;
    border-color: transparent;
}
    #submit {
    background-color: var(--blue);
    color: white;
    padding: 13px 20px;
    border: 1px solid transparent;
}
#submit:hover{
    border:1px solid var(--blue);
    background-color: transparent;
    color:var(--blue);
}
.table>:not(caption)>*>* {
    background-color: transparent;
   
}
.committee_table_inn .tab-head {
    background: linear-gradient(135deg, var(--orange) 42%, var(--black) 122%) !important;
    color:white !important;
}
.committee_table_inn th{
    color:white !important;
}
 @media (max-width: 1710px) {
.alumni-sec {
    padding: 0px 0px 100px;
}
.scnd_tab1 {
    margin-top: 40px;
}
}
 @media (max-width: 991px) {
    .alumni-sec {
        padding: 0px 0px 80px;
    }
 }
  @media (max-width:432px) {
 .scnd_tab .nav-tabs .nav-item button {
     margin-bottom:20px;
 }
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
                    <h4>Alumni</h4>
                </div>

                <div class="bnr_bredcrumb">
                    <div class="container">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index">Home</a></li>
                                <!-- <li class="breadcrumb-item"><a href="#">Programs</a></li> -->
                                <li class="breadcrumb-item active" aria-current="page">Alumni</li>
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

    <section class="alumni-sec">
        <div class="container">
        <div class="tab-container container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="quad_camp">
                        <!-- <ul class="nav nav-tabs row" id="myTab" role="tablist">
                           
                            <li class="nav-item col-lg-3 col-md-6 col-sm-6 col-6" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false" tabindex="-1">Events/Workshops</button>
                            </li>
                            <li class="nav-item col-lg-3 col-md-6 col-sm-6 col-6" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false" tabindex="-1">Placements/Internship</button>
                            </li>
                          
                        </ul> -->
                        <div class="tab-content scnd_tab" id="myTabContent">

                            <div class="tab-pane fade active show" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">

                                <ul class="nav nav-tabs row" id="myTab" role="tablist">
                                    <li class="nav-item col-lg-3 col-md-6 col-sm-6 col-6" role="presentation">
                                        <button class="nav-link active" id="home-tab1" data-bs-toggle="tab" data-bs-target="#home-tab-pane1" 
                                        type="button" role="tab" aria-controls="home-tab-pane1" aria-selected="true">Alumni List</button>
                                    </li>
                                    <li class="nav-item col-lg-3 col-md-6 col-sm-6 col-6" role="presentation">
                                        <button class="nav-link" id="profile-tab1" data-bs-toggle="tab" data-bs-target="#profile-tab-pane1"
                                         type="button" role="tab" aria-controls="profile-tab-pane1" aria-selected="false" tabindex="-1">Registration Form</button>
                                    </li>
                                </ul>

                                <div class="tab-content scnd_tab1" id="myTabContent">

                                    <div class="tab-pane fade active show" id="home-tab-pane1" role="tabpanel1" aria-labelledby="home-tab1" tabindex="0">
                                    <!-- <div class="table-responsive">
                                   
                                    <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Sno</th>
                                    <th>Name</th>
                                    <th>Course</th>
                                    <th>Year of Pass</th>
                                    <th>Company</th>
                                    <th>Designation</th>
                                    <th>Photo</th>
                                </tr>
                            </thead>
                            <tbody>
                                                                <tr>
                                    <td></td>
                                    <td>Student Name</td>
                                    <td>Diploma</td>
                                    <td>2020</td>
                                    <td>Infosys</td>
                                    <td>Software Consultant</td>
                                    <td><img src="" class="img-responsive"></td>
                                </tr>
                                                            </tbody>
                            
                        </table>
                        </div> -->

                        <div class="committee_table_inn">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped">
                                        <thead class="tab-head">
                                <tr>
                                    <th>Sno</th>
                                    <th>Name</th>
                                    <th>Course</th>
                                    <th>Year of Pass</th>
                                    <th>Company</th>
                                    <th>Designation</th>
                                    <th>Photo</th>
                                </tr>
                            </thead>
                            <tbody>
                                                                <tr>
                                    <td></td>
                                    <td>Student Name</td>
                                    <td>Diploma</td>
                                    <td>2020</td>
                                    <td>Infosys</td>
                                    <td>Software Consultant</td>
                                    <td><img src="assets/images/icons/" width="50px;" class="img-responsive"></td>
                                </tr>
                                                            </tbody>
                                            
                                        </table>
                                    </div>
                                </div>
                                    </div>

                                    <div class="tab-pane fade" id="profile-tab-pane1" role="tabpanel1" aria-labelledby="profile-tab1" tabindex="0">
                                    <div class="row form-gap">
                <div class="col-lg-7 col-md-12 form-head">
                 
                    <form action="" id="adm-start">
                      <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-12 ">
                        <div class="mb-4 contact-input">

                            <label for="exampleFormControlInput1" class="form-label">Full Name</label>

                            <input type="text" class="form-control" name="fname" id="exampleFormControlInput1" placeholder="Enter Full Name" required="" oninput="this.value = this.value.replace(/[^a-zA-Z]/g, '')">

                        </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 ">
                     
                        <div class="mb-4 contact-input">

                            <label for="exampleFormControlInput1" class="form-label">Father Name</label>

                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Father Name" required="" name="email">
                        </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 ">
                        <div class="mb-4 contact-input">
<!-- 
                            <label for="exampleFormControlInput1" class="form-label">Phone Number</label>

                             <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Enter PhoneNumber"> -->
                            <!-- <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Enter PhoneNumber" maxlength="10>   -->
                            <label for="mobileNumber" class="form-label">Hall Ticket Number</label>
                           <input type="text" class="form-control" id="mobileNumber" name="mobile" placeholder="Hall Ticket Number" required="">
                                  <span id="error" style="color: red;"></span>
                        </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 ">
                        <div class="mb-4 contact-input">
                            <label for="exampleFormControlTextarea1" class="form-label">Phone Number</label>
                            <input class="form-control" id="exampleFormControlTextarea1" name="comments" placeholder="Phone Number" required="" oninput="this.value = this.value.replace(/\D/g, '').slice(0, 10)">
                        </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 ">
                        <div class="mb-4 contact-input">
                            <label for="exampleFormControlTextarea1" class="form-label">Your Email</label>
                            <input type="email" class="form-control" id="exampleFormControlTextarea1" name="comments" placeholder="Your Email" required="">
                        </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="mb-4 contact-input">
                            <label for="exampleFormControlTextarea1" class="form-label">Photo</label>
                            <input type="file" name="photo" accept="image/*" class="form-control" id="exampleFormControlTextarea1" placeholder="Photo" required="">
                        </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="mb-4 contact-input">
<!-- 
                            <label for="exampleFormControlInput1" class="form-label">Phone Number</label>

                             <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Enter PhoneNumber"> -->
                            <!-- <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Enter PhoneNumber" maxlength="10>   -->
                            <label for="mobileNumber" class="form-label">Education</label>
                           <input type="text" class="form-control" id="mobileNumber" name="mobile" placeholder="Ex:Diploma/UG/PG" required="">
                                  <span id="error" style="color: red;"></span>
                        </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 ">
                        <div class="mb-4 contact-input">
<!-- 
                            <label for="exampleFormControlInput1" class="form-label">Phone Number</label>

                             <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Enter PhoneNumber"> -->
                            <!-- <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Enter PhoneNumber" maxlength="10>   -->
                            <label for="mobileNumber" class="form-label">Year of Pass</label>
                            <input type="number" name="pass" value="" min="1990" size="20" class="form-control" max="2024" placeholder="Ex: 2023">
                                  <span id="error" style="color: red;"></span>
                        </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 ">
                        <div class="mb-4 contact-input">
<!-- 
                            <label for="exampleFormControlInput1" class="form-label">Phone Number</label>

                             <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Enter PhoneNumber"> -->
                            <!-- <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Enter PhoneNumber" maxlength="10>   -->
                            <label for="mobileNumber" class="form-label">Company</label>
                           <input type="text" class="form-control" id="mobileNumber" name="mobile" placeholder="Company" required="">
                                  <span id="error" style="color: red;"></span>
                        </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 ">
                        <div class="mb-4 contact-input">
<!-- 
                            <label for="exampleFormControlInput1" class="form-label">Phone Number</label>

                             <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Enter PhoneNumber"> -->
                            <!-- <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Enter PhoneNumber" maxlength="10>   -->
                            <label for="mobileNumber" class="form-label">Designation</label>
                           <input type="text" class="form-control" id="mobileNumber" name="mobile" placeholder="Designation" required="">
                                  <span id="error" style="color: red;"></span>
                        </div>
                        </div>

                        <div class="cont-sub">
                                <button class="btn submit" id="submit" type="submit" value="Submit">Submit&nbsp;
                                    <i aria-hidden="true" class="fas fa-arrow-right"></i>
                                </button>
                               
                            </div>
                       
                        </div>
                    </form>
                </div>
              
                <!-- map -->
                <div class="col-lg-5 col-md-12">
                  <img src="assets/images/about/alumni-img.webp" class="img-fluid" alt="student-img" loading="lazy" decoding="async">
                   
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

    
    <?php include('footer.php') ?>
</body>

</html>
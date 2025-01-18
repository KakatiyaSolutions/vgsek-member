<!doctype html>
<html lang="en">

<head>
    <?php include('head_links.php') ?>
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/dist/css/commitee.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/dist/css/about.css">

    <style>
        .committee-sec{
    display:flex;
    align-items: center;
    justify-content: center;
    padding:100px 0px;
}

.cards-commitee{
    padding: 20px 50px;
    text-align: center;
    position: relative;
    overflow: hidden;
    transition: color 0.5s ease-in-out;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    background-image: linear-gradient(165deg, var(--white) 90%, var(--blue) 90%);
}
.cards-commitee a{
    color:black;
}
.cards-commitee:hover a{
    color:white;
    position: relative;
    z-index:1;
}
.cards-commitee h2{
    font-size: 20px;
    text-align: center;

}
.cards-commitee:hover h2{
    color:white;
    position: relative;
    z-index: 1;
}
.committee-sec .row{
row-gap: 20px;
}

.cards-commitee::before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-image: linear-gradient(165deg, var(--white) 0%, var(--blue) 0%);
    transform: scaleX(0) scaleY(0);
    transform-origin: bottom right;
    transition: transform 0.5s ease-in-out;
    z-index: 1;
}
.cards-commitee:hover::before {
    transform: scaleX(1) scaleY(1);
}

.an_line {
    position: relative;
}
hr {
    margin: 1rem 0;
    color: inherit;
    border: 0;
    border-top: 1px solid;
    opacity: .25;
}
.cards-commitee:hover .an_line {
    background-color:white;
    position: relative;
    z-index:1;
}
.cards-commitee:hover .an_line::after {
    background-color:white;
    position: relative;
    z-index:1;
}
.an_line::after {
    position: absolute;
    content: '';
    height: 2px;
    width: 50px;
    background-color:var(--blue);
    left: 0;
    top: 0;
    bottom: 0;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
    z-index:1;
}
.academic_reg_head h3 {
    font-size: 25px;
    color: var(--orange);
    font-weight: bold;
    border-bottom: solid 2px var(--orange);
    padding-bottom: 5px;
    margin-bottom:30px;
}
@media (max-width:1366px) {
.cards-commitee {
    padding: 20px 25px
}
}
@media (max-width:1199px) {
.cards-commitee h2 {
    font-size: 18px;
}
    .cards-commitee {
        padding: 20px 10px;
    }
}
@media (max-width:1024px) {
.committee-sec {
    padding: 50px 0px 0px;;
}
}
@media (max-width:992px) {
 .committee-sec {
        padding: 50px 0px 80px;
    }
}
@media (max-width: 991px) {
.cards-commitee {
    padding: 20px 30px
}
.cards-commitee h2{
    font-size: 18px;
}

   
}

@media (max-width:767px) {
    .committee-sec {
    padding: 50px 0px 100px;
} 
}
@media (max-width:540px) {
    .committee-sec {
        padding: 50px 0px 80px;
    }
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
                    <h4>Committees</h4>
                </div>

                <div class="bnr_bredcrumb">
                    <div class="container">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index">Home</a></li>
                                <!-- <li class="breadcrumb-item"><a href="#">Programs</a></li> -->
                                <li class="breadcrumb-item active" aria-current="page">Committees</li>
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

    <section class="committee-sec">
        <div class="container">
        <div class="academic_reg_head">
                <h3>Committees</h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="cards-commitee">
                        <h2>Anti-Ragging Committee</h2>
                        <div class="an_line">
                            <hr>
                        </div>
                        <a href="assets/pdfs/Anti-Ragging_Committee.pdf" target="_blank">View/Download</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="cards-commitee">
                        <h2>Internal Complaint Committee</h2>
                        <div class="an_line">
                            <hr>
                        </div>
                        <a href="assets/pdfs/Internal_Complaint_Committee.pdf" target="_blank">View/Download</a>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="cards-commitee">
                        <h2>Grievance & Redressal Committee</h2>
                        <div class="an_line">
                            <hr>
                        </div>
                        <a href="assets/pdfs/Grievance_Redressal_Committee.pdf" target="_blank">View/Download</a>
                        </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="cards-commitee">
                        <h2>OBC Cell</h2>
                        <div class="an_line">
                            <hr>
                        </div>
                        <a href="assets/pdfs/OBC_Cell.pdf" target="_blank">View/Download</a>
                        </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="cards-commitee">
                        <h2>Committee for SC/ST</h2>
                        <div class="an_line">
                            <hr>
                        </div>
                        <a href="assets/pdfs/Committee_for_SCST.pdf" target="_blank">View/Download</a>
                        </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="cards-commitee">
                        <h2>Minority Cell</h2>
                        <div class="an_line">
                            <hr>
                        </div>
                        <a href="assets/pdfs/Minority_Cell.pdf" target="_blank">View/Download</a>
                        </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="cards-commitee">
                        <h2>OMBUDSPERSON</h2>
                        <div class="an_line">
                            <hr>
                        </div>
                        <a href="assets/pdfs/Ombudsman.pdf" target="_blank">View/Download</a>
                        </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="cards-commitee">
                        <h2>Women Protection Committee</h2>
                        <div class="an_line">
                            <hr>
                        </div>
                        <a href="assets/pdfs/Women_Protection_Committee.pdf" target="_blank">View/Download</a>
                        </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="cards-commitee">
                        <h2>RTI</h2>
                        <div class="an_line">
                            <hr>
                        </div>
                        <a href="assets/pdfs/RTI.pdf" target="_blank">View/Download</a>
                        </div>
                </div>
            </div>
        </div>
    </section>

    
    <?php include('footer.php') ?>
</body>

</html>
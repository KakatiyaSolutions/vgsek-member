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
.vns_depart_img img {
    margin-right: 15px;
    width: 25px;
    height: 19px;
    object-fit: contain;
    margin-top: 5px;
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

.iqac-sec, .stra-sec, .fun-sec{
    display:flex;
    align-items: center;
    justify-content: center;
    padding:50px 0px;
    background-color:#0000000f;
}
.fun-sec{
    /* background: linear-gradient(90deg, #eee 96%, var(--blue) 94%); */
    padding-bottom:80px;
}
.stra-sec{
    background-color: var(--blue);
    color:white;
}
.iqac-sec h2, .stra-sec h2, .fun-sec h2{
    line-height: 28px;
    color: var(--blue);
    font-size: 35px;
    margin-bottom: 30px;
}
.stra-sec h2{
    color:white;
}
.iqac-sec p{
    text-align: justify;
    line-height: 33px;
    font-size: 16px;
}
.vns_depart_img{
    display:flex;
}
.stra-sec h5, .fun-sec h5{
    margin-bottom: 14px;
    line-height: 31px;
    font-size: 20px;
}
.stra-sec ul li,  .fun-sec ul li{
    text-align: justify;
    margin-left: 30px;
    width: 540px;
    list-style-type: circle;
    font-size: 15px;
    line-height: 35px;
}
.fun-sec ul li{
    color:black;
    width:auto;
}

@media (max-width:1366px) {
.cards-commitee {
    padding: 20px 25px
}
.iqac-sec h2, .stra-sec h2, .fun-sec h2 {
    font-size: 28px;
}
}
@media (max-width:1199px) {
.cards-commitee h2 {
    font-size: 18px;
}
.stra-sec ul li, .fun-sec ul li {
    width: auto;
    margin-left:20px;
}
.stra-sec h5, .fun-sec h5 {
    font-size: 18px;
}

}
@media (max-width:1024px) {
.committee-sec {
    padding: 50px 0px 50px;;
}
footer {
    margin-top: 184px;
}
.fun-sec {
    padding-bottom: 50px;
}
}
@media (max-width: 991px) {
.cards-commitee {
    padding: 20px 30px
}
.cards-commitee h2{
    font-size: 18px;
}
.committee-sec {
    padding: 50px 0px 50px;;
}
.row{
    row-gap:30px;
}
}

@media (max-width:767px) {
    /* .committee-sec {
    padding: 50px 0px 50px;
}  */
footer {
        margin-top: 122px;
    }
}
@media (max-width:492px) {
.iqac-sec h2, .stra-sec h2, .fun-sec h2 {
        font-size: 25px;
    }
    .stra-sec h5, .fun-sec h5 {
        font-size: 16px;
    }
}
@media (max-width:395px) {
.stra-sec ul li, .fun-sec ul li {
    line-height: 31px;
}
footer {
        margin-top: 82px;
    }
    .vns_depart_img img {
    margin-right: 6px;
    width: 17px;
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
                    <h4>IQAC</h4>
                </div>

                <div class="bnr_bredcrumb">
                    <div class="container">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index">Home</a></li>
                                <!-- <li class="breadcrumb-item"><a href="#">Programs</a></li> -->
                                <li class="breadcrumb-item active" aria-current="page">IQAC</li>
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
                <h3>IQAC</h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="cards-commitee">
                        <h2>IQAC Committee</h2>
                        <div class="an_line">
                            <hr>
                        </div>
                        <a href="" target="_blank">View/Download</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="cards-commitee">
                        <h2>IQAC Chart</h2>
                        <div class="an_line">
                            <hr>
                        </div>
                        <a href="" target="_blank">View/Download</a>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="cards-commitee">
                        <h2>Activities</h2>
                        <div class="an_line">
                            <hr>
                        </div>
                        <a href="" target="_blank">View/Download</a>
                        </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="cards-commitee">
                        <h2>Minutes of Meeting</h2>
                        <div class="an_line">
                            <hr>
                        </div>
                        <a href="" target="_blank">View/Download</a>
                        </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="cards-commitee">
                        <h2>Annual Reports</h2>
                        <div class="an_line">
                            <hr>
                        </div>
                        <a href="" target="_blank">View/Download</a>
                        </div>
                </div>
               
            </div>
        </div>
    </section>

    <section class="iqac-sec">
        <div class="container">
            <h2>Internal Quality Assurance Cell (IQAC)</h2>
            <div class="row">
            <div class="col-lg-12">
                <p>IQAC at Vaageswari College of Engineering is an important organizational body that is responsible for all quality matters. It is the prime responsibility of IQAC
                     to initiate, plan and supervise various activities that are necessary to increase the quality of the education imparted in an institution or college.
                      The role of IQAC is maintaining the quality standards in teaching, learning and evaluation becomes crucial, and the present research is therefore
                       undertaken on a smaller scale to determine the exact status and functioning of IQAC and its outcome. The establishment of Internal Quality Assurance 
                       Cell (IQAC) by accredited institutions (after the first cycle) is a major step in pushing long-term quality standards making VGSE best engineering 
                       colleges in Telangana.</p>
            </div>
            </div>
        </div>
    </section>
    <section class="stra-sec">
        <div class="container">
            
            <div class="row">
            <div class="col-lg-6">
            <h2>STRATEGIES</h2>
            <div class="vns_depart_img">
                                <img src="https://kakatiyasolutions.in/vageshwari_clg/assets/images/department/list_type_red1.webp" alt="list type image" class="img-fluid" loading="lazy">
                                <h5>IQAC shall evolve mechanisms and procedures for:</h5>
                            </div>
          
                <ul>
                    <li>Ensuring timely, efficient and progressive performance of academic activities.</li>
                    <li>To assure the quality of academic and research programmes.</li>
                    <li>Equitable access to and affordability of academic programmes for various sections of society</li>
                    <li>Optimization and integration of modern methods of teaching and learning</li>
                    <li>The credibility of evaluation procedures</li>
                    <li>Ensuring the adequacy, maintenance and functioning of the support structure and services</li>
                    <li>Research sharing and networking with other institutions in India and abroad</li>
                </ul>
            </div>
            <div class="col-lg-6">
            <h2>BENEFITS</h2>
            <div class="vns_depart_img">
                                <img src="https://kakatiyasolutions.in/vageshwari_clg/assets/images/department/list_type_red1.webp" alt="list type image" class="img-fluid" loading="lazy">
                                <h5>IQAC will facilitate/contribute:</h5>
                            </div>
            
                <ul>
                    <li>Ensure heightened level of clarity and focus in institutional functioning towards quality enhancement</li>
                    <li>Ensure internalization of the quality culture</li>
                    <li>Ensure enhancement and coordination among various activities of the institution and institutionalize all good practices</li>
                    <li>Provide a sound basis for decision-making to improve institutional functioning</li>
                    <li>Act as a dynamic system for quality changes in HEIs</li>
                    <li>Build an organised methodology of documentation and internal communication</li>
                  
                </ul>
            </div>
            </div>
        </div>
    </section>

    <section class="fun-sec">
        <div class="container">
            
            <div class="row">
            <div class="col-lg-7">
            <h2>Functions:</h2>
            <div class="vns_depart_img">
                                <img src="https://kakatiyasolutions.in/vageshwari_clg/assets/images/department/list_type_red1.webp" alt="list type image" class="img-fluid" loading="lazy" style="filter: grayscale(100%) brightness(0%);">
                                <h5>Some of the functions expected of the IQAC are:</h5>
                            </div>
          
                <ul>
                <li>Organization of inter and intra institutional workshops, seminars on quality related themes and promotion of quality circles;</li>
                    
                    <li>Acting as a nodal agency of the Institution for coordinating quality-related activities, including adoption and dissemination of best practices;</li>
                    <li>Development and maintenance of institutional database through MIS for the purpose of maintaining /enhancing the institutional quality;</li>
                    <li>Facilitating the creation of a learner-centric environment conducive to quality education and faculty maturation to adopt the required knowledge and 
                        technology for participatory teaching and learning process;</li>
                    <li>Development and application of quality benchmarks</li>
                    <li>Periodical conduct of Academic and Administrative Audit and its follow-up</li>
                    <li>Dissemination of information on various quality parameters to all stakeholders;</li>
                    <li>Parameters for various academic and administrative activities of the institution;</li>
                    <li>Documentation of the various programmes/activities leading to quality improvement;</li>
                    <li>Collection and analysis of feedback from all stakeholders on quality-related institutional processes;</li>
                    
                    
                   
                    
                    
                   
                </ul>
            </div>
            <div class="col-lg-5">
            <h2>Goals:</h2>
            <div class="vns_depart_img">
                                <img src="https://kakatiyasolutions.in/vageshwari_clg/assets/images/department/list_type_red1.webp" alt="list type image" class="img-fluid" loading="lazy" style="filter: grayscale(100%) brightness(0%);">
                                <h5>Goals</h5>
                            </div>
            
                <ul>
                    <li>To develop a quality system for conscious, consistent and catalytic programmed action to improve the academic and administrative performance of the College</li>
                    <li>To promote measures for institutional functioning towards quality enhancement through internationalization of quality culture and institutionalization of best practices</li>
                   
                  
                </ul>
            </div>
            </div>
        </div>
    </section>
    
    <?php include('footer.php') ?>
</body>

</html>
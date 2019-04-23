<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/css/login.css'); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body>
    <?php
    include "header.php";
    ?>
    <div id="blockpadding ">
        <div class="block-hd txt1">
            Get unlimited access on Medscape.
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">

                </div>
                <div class="col-md-6">
                    <div id="medscape_login">
                        <div id="login_box">
                            <div class="tab-wrap">
                                <ul>
                                    <li class="tabs tab-login">LOG IN</li>
                                    <a href="<?php echo base_url(); ?>medscape/register">
                                        <li class="tabs tab-reg">REGISTER FOR FREE</li>
                                    </a>
                                </ul>
                            </div>
                            <form id="loginRequest" action="<?php echo base_url(); ?>medscape/login" method="post">
                                <div class="inputrow">
                                    <input id="regularEmail" name="userId" tabindex="1" type="text" size="25" maxlength="50" autocomplete="off" autocorrect="off" class="fld empty" />
                                    <div class="floating-label">Email or Username <?php echo form_error('userId', '<small><font color="red">', '</font></small>'); ?></div>
                                </div>
                                <div class="inputrow">
                                    <input id="password" name="password" tabindex="2" type="password" size="25" maxlength="40" autocomplete="off" autocorrect="off" class="fld empty" />
                                    <a class="togglePassword">Show</a>
                                    <span id="hideText">Hide</span>
                                    <div class="floating-label">Password <?php echo form_error('password', '<small><font color="red">', '</font></small>'); ?></div>
                                </div>
                                <div class="btn-wrap loginBtn">
                                    <input type="submit" value="Log In" id="loginBtn" name="loginbtn" tabindex="4" />
                                </div>
                                <div class="link-wrapper">
                                    <span id="login_temp_link"><a href="">Log in without password</a></span><span class="newsign">NEW!</span>
                                </div>
                                <div id="forgot_password_or_u"><a href="">Forgot password or username?</a></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">

                </div>
            </div>
        </div>
    </div>
    <div id="blockpadding2" class="msp-origin">
        <div class="block-hd txt3">
            Not a medscpae member?
        </div>
        <div class="div_regisbtn">
            <a href=""><span class="registerbtn">Register for FREE now</span></a>
        </div>
        <div class="block-hd txt4">
            Get free unlimited access to
        </div>
    </div>
    <section class="news-perspective" id="news-perspective">
        <div class="about-section">
            <div class="section-header">
                News & Perspective
            </div>
            <div class="section-subheader">
                The pulse of medicine
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-8">
                        <div class="tab-bar">
                            <ul class="tab-tittle-container">
                                <li class="tab-title active-tittle" id="js-tab0">
                                    Breaking News
                                </li>
                                <li class="tab-title" id="js-tab1">
                                    Bussiness of Medicine
                                </li>
                                <li class="tab-title" id="js-tab2">
                                    Expeert Pervective
                                </li>
                            </ul>
                        </div>
                        <div class="news-container">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4 news">
                                        <p class="news-title">Breaking News</p>
                                        <div class="news-description">
                                            Stay informed on the latest advances in medical literature,
                                            by regulatory agencies like the FDA,
                                            and from 200+ medical conferences worldwide.
                                        </div>
                                    </div>
                                    <div class="col-md-8 news-layer-container">
                                        <div class="news-layer-1">
                                            <img class="news-layer" src="<?php echo base_url('assets/news.png'); ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="drug-diseases" id="drug-diseases">
        <div class="about-section">
            <div class="section-header">
                Drugs & Diseases
            </div>
            <div class="section-subheader">
                Your clinical knowledge base
            </div>
        </div>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="item-title">Drug Monographs</div>
                                <div class="item-description">8000+ prescription and over-the-counter drug monographs, including herbals and supplements</div>
                            </div>
                            <div class="col-md-6">
                                <img class="d-block w-100" src="<?php echo base_url('assets/drug1.png'); ?>" alt="First slide">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="item-title">Disease and Condition Articles</div>
                                <div class="item-description">7600+ diseases, conditions, and procedures articles enhanced with images and step-by-step videos</div>
                            </div>
                            <div class="col-md-6">
                                <img class="d-block w-100" src="<?php echo base_url('assets/drug2.png'); ?>" alt="Second slide">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="item-title">Disease and Condition Articles</div>
                                <div class="item-description">7600+ diseases, conditions, and procedures articles enhanced with images and step-by-step videos</div>
                            </div>
                            <div class="col-md-6">
                                <img class="d-block w-100" src="<?php echo base_url('assets/drug3.png'); ?>" alt="Third slide">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color:royalblue"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true" style="background-color:royalblue"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <section class="cme-and-education" id="cme-and-education">
        <div class="about-section">
            <div class="section-header">
                CME & Education
            </div>
            <div class="section-subheader">
                Improving healthcare one provider and one patient at a time
            </div>
            <div class="cme-img-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">

                        </div>
                        <div class="col-md-6">
                            <div class="cme-img1">
                                <img src="<?php echo base_url('assets/cme.png'); ?>" alt="cme-img">
                            </div>
                        </div>
                        <div class="col-md-3">

                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">

                        </div>
                        <div class="col-md-8">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="cme-item">
                                            <div class="cme-description">
                                                A personalized CME tool to track progress and log completed CME activities
                                                <div class="cme-number-container">
                                                    <p class="cme-number" id="js-count-up"></p>
                                                </div>
                                                <p class="cme-credit">Credits Earned</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="cme-item">
                                            <div class="cme-description">
                                                Joint Accredited with multiple accreditations, including:
                                            </div>
                                            <ul class="acreditation">
                                                <li>Accreditation Council for Continuing Medical Education (with commendation)</li>
                                                <br>
                                                <li>American Nurses Credentialing Center’s Commission on Accreditation</li>
                                                <br>
                                                <li>Accreditation Council for Pharmacy Education</li>
                                                <br>
                                            </ul>
                                            <div class="cme-description">A personalized Activity Tracker to monitor progress and log completed CME activities</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="consult" id="consult">
        <div class="about-section">
            <div class="section-header">
                Consult
            </div>
            <div class="section-subheader">
                Ask. Share. Discuss.
            </div>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="item-title consult-title">
                                        Ask.
                                    </div>
                                    <div class="item-description">
                                        Get helpful advice on your cases from a community of physicians.
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <img class="d-block w-100" src="<?php echo base_url('assets/consult1.png'); ?>" alt="First slide">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="item-title consult-title">
                                        Share.
                                    </div>
                                    <div class="item-description">
                                        Inform other physicians about interesting clinical encounters.
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <img class="d-block w-100" src="<?php echo base_url('assets/consult2.png'); ?>" alt="Second slide">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3">

                                </div>
                                <div class="col-md-6">
                                    <img class="d-block w-100" src="<?php echo base_url('assets/consult3.png');?>" alt="Third slide">
                                    <div class="item-wrapper discuss-details">
                                        <div class="item-title consult-title">Discuss.</div>
                                        <div class="item-description u-no-margin">Showcase your clinical expertise.</div>
                                    </div>
                                </div>
                                <div class="col-md-3">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color:royalblue"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true" style="background-color:royalblue"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    <section class="pba" id="pba">
        <div class="about-section">
            <div class="section-header">
                CME & Education
            </div>
            <div class="section-subheader">
                Improving healthcare one provider and one patient at a time
            </div>
        </div>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="item-title">Gain Essential Business Knowledge</div>
                                <div class="item-description">Better navigate the business aspects of medicine and stay on top of the changing healthcare landscape.</div>
                                <p class="look-description">*Medscape Business of Medicine Academy Survey, September 2015</p>
                            </div>
                            <div class="col-md-6">
                                <img class="d-block w-100" src="<?php echo base_url('assets/academy1.png'); ?>" alt="First slide">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="item-title">Learn from Experienced Professionals</div>
                                <div class="item-description">Courses were developed especially for physicians by business health experts and experienced physicians.</div>
                            </div>
                            <div class="col-md-6">
                                <img class="d-block w-100" src="<?php echo base_url('assets/adacemy2.png'); ?>" alt="Second slide">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="item-title">Develop Your Own Curriculum</div>
                                <div class="item-description">Choose courses based on your needs. Earn course certificates and optional CME.</div>
                            </div>
                            <div class="col-md-6">
                                <img class="d-block w-100" src="<?php echo base_url('assets/academy3.png'); ?>" alt="Third slide">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color:royalblue"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true" style="background-color:royalblue"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <section class="apps-at-your-fingertips" id="apps-at-your-fingertips">
        <div class="about-section-wrapper">
            <div class="section-header apps-header">Apps At Your Fingertips</div>
            <div class="section-subheader">Anytime, anywhere</div>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="app-detil">
                                    <p class="item-title">Medscape App</p>
                                    <p class="item-description">Get fast, accurate answers for point-of-care decision making.</p>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <img class="d-block w-100" src="<?php echo base_url('assets/app1.png'); ?>" alt="First slide">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="app-detil">
                                    <p class="item-title">MedPulse News App</p>
                                    <p class="item-description">Stay on top of breaking news in your specialty and across medicine.</p>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <img class="d-block w-100" src="<?php echo base_url('assets/app2.png') ?>" alt="Second slide">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="app-detil">
                                    <p class="item-title">CME and Education App</p>
                                    <p class="item-description">Continue your professional development – anytime, anywhere.</p>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <img class="d-block w-100" src="<?php echo base_url('assets/app3.png'); ?>" alt="Third slide">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="global-resource" id="global-resource">
        <div class="about-section">
            <div class="section-header global-resource-header">
                <div class="global-resource-header-content">
                    Global Resource for Healthcare Professionals
                </div>
            </div>
            <div class="section-subheader global-resource-subheader">
                With localized medical news and in-language editions
            </div>
            <div class="animated-tab">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">

                        </div>
                        <div class="col-md-6">
                            <ul class="tab-title-container">
                                <li class="tab-title active-title" data-target="tab3">Deutsch</li>
                                <li class="tab-title" data-target="tab4">Español</li>
                                <li class="tab-title" data-target="tab5">Français</li>
                                <li class="tab-title" data-target="tab6">Português</li>
                            </ul>
                        </div>
                        <div class="col-md-3">

                        </div>
                    </div>
                </div>
                <div class="tab-item-container">
                    <div class="tab-item active-tab" id="tab3">
                        <div class="ipad-mask"></div>
                        <img class="global-img" src="<?php echo base_url('assets/global1.png'); ?>" alt="global-resource=for-hp">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="what-clinicians-say" id="what-clinicians-say">
        <div class="about-section">
            <div class="section-header">What Clinicians Say</div>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-1">

                            </div>
                            <div class="col-md-10">
                                <img class="d-block w-100" src="<?php echo base_url('assets/clinisian1.png'); ?>" alt="First slide">
                            </div>
                            <div class="col-md-1">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-1">

                            </div>
                            <div class="col-md-10">
                                <img class="d-block w-100" src="<?php echo base_url('assets/clinisian2.png'); ?>" alt="Second slide">
                            </div>
                            <div class="col-md-1">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-1">

                            </div>
                            <div class="col-md-10">
                                <img class="d-block w-100" src="<?php echo base_url('assets/clinisian3.png'); ?>" alt="Third slide">
                            </div>
                            <div class="col-md-1">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="info-contact" id="info-contact">
        <div class="about-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="policy info-item">
                            <p class="info-header">Information and Policies</p>
                            <ul class="link">
                                <li><a class="corporate-link" href="">Terms of Service Agreement and Disclaimer</a></li>
                                <li><a class="corporate-link" href="">Medscape Permissions</a></li>
                                <li><a class="corporate-link" href="">Medscape Privacy Policy</a></li>
                                <li><a class="corporate-link" href="">Medscape Cookie Policy</a></li>
                                <li><a class="corporate-link" href="">Medscape Advertising Policy</a></li>
                                <li><a class="corporate-link" href="">Medscape Editorial Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info-item">
                            <p class="info-header">Contact WebMD LLC</p>
                            <ul>
                                <li><a class="corporate-link" href="">Contact the Editors</a> <br></li>
                                <li><a class="corporate-link" href="">Contact the Grants Department</a> <br></li>
                                <li><a class="corporate-link" href="">Contact Customer Support</a> <br> <br> </li>
                                <li>
                                    <div class="email-guide">To contact other staff members of WebMD LLC, use the following email template as a guide:</div>
                                    <br>
                                    <div class="regular email">
                                        <strong class="email-address">FirstInitialLastName@webmd.net</strong> <span class="email-ignore">(ignore middle initials and degrees)</span>
                                    </div>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info-item">
                            <p class="info-header empty-info-header">&nbsp;</p>
                            <ul>
                                <li><strong>By regular mail:</strong>
                                    <div class="regular">
                                        Medscape, LLC
                                        <br> 395 Hudson Street, 3rd Floor
                                        <br> New York, NY 10014
                                        <br>
                                    </div>
                                </li>
                                <br>
                                <li><strong>By phone:</strong>
                                    <br><span class="regular">212-301-6700</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
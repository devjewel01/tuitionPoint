<!-- Include Header -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="facebook-domain-verification" content="sailogmvwng1tz2vl26qk63fh8gkbn" />
    <title>Tuition Point</title>


    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-MCX2SQR');
    </script>
    <!-- End Google Tag Manager -->


    <!-- GOOGLE FONT -->

    <!-- CSS FILES -->
    <!-- CSS only -->
    <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->

    <!-- <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"> -->
    <link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .btn-custom.active {
            background: #50AB1D;
            border: 1px solid #50AB1D;
            color: #fff;
        }

        a.active>div>i {
            background: #50AB1D;
            border: 1px solid #50AB1D !important;
            color: #fff;
        }
    </style>
</head>


<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MCX2SQR" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->








    <!-- Navbar Start -->
    <header class="header-area">
        <nav class="navbar bg-white navbar-expand-lg fixed-top py-3">
            <div class="container">
                <a class="navbar-brand " href="#" style="height: 40px;">
                    <img src="assets/img/logoo.png" alt="" style="height: 50px; width: 80%;">
                </a>
                <button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#myNavbar">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link ">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a href="tutors/" class="nav-link">TUITION OFFER</a>
                        </li>
                        <li class="nav-item">
                            <a href="course/" class="nav-link">COURSES</a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="signUpIn/" class="nav-link">
                            <?php
                                if (isset($_SESSION["login"]) === "yes") {
                                    echo "LOG OUT";
                                  }
                                else
                                {
                                    echo "SIGN IN";
                                    //echo $_SESSION['user_id'];
                                }
                            ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="signUpIn/logout.php" class="nav-link">
                                LOG OUT</a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="#" class="nav-link" id="navSlideBox">
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Navbar End -->












    <!-- Sidenav area start -->
    <div id="mySidenav" class="sidenav">

        <div class="sidenav-header" style="background-color: #FF1493; color: white; ">
            <div class="row">
                <div class="col-sm-4">
                    <i class="fa fa-question-circle" aria-hidden="true"></i>
                </div>
                <div class="col-sm-4">
                    <p>More Info</p>
                </div>
                <div class="col-sm-4">
                    <a href="#" class="closebtn" id="sideNavClose">&times;</a>
                </div>
            </div>
        </div>
        <div class="help-content text-center">
            <div class="row">
                <div class="col-md-4">
                    <a href="#">
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                        <p>Help Center</p>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#">
                        <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                        <p>Aritical</p>
                    </a>

                </div>
                <div class="col-md-4">
                    <a href="#">
                        <i class="fa fa-compress" aria-hidden="true"></i>
                        <p>Contact</p>
                    </a>

                </div>
            </div>
        </div>
        <div class="aritical-suggetion">
            <div class="row">
                <div class="col-sm-12">
                    <span>Suggested articles</span>

                    <p><a href="https://w...content-available-to-author-only...h.gov/pmc/articles/PMC3292071/">What
                            makes a successful tutor?</a></p><br>
                    <p> <a href="https://w...content-available-to-author-only...h.gov/pmc/articles/PMC4771005/">What is
                            the big deal?</a></p><br>

                    <p> <a href="https://w...content-available-to-author-only...g.com/english-article/">Long and short
                            articles for students</a></p>
                </div>
            </div>

        </div>
        <div class="help-faq">
            <div class="row">
                <div class="col-sm-12">
                    <h5>Is Tuition Point helpful for you?</h5>
                    <div class="bs-example">
                        <div class="accordion" id="accordionExample">
                            <div class="card sidenav-card">
                                <div class="card-header sidenav-card-header" id="newUser">

                                    <button type="button" class="btn btn-link" data-toggle="collapse"
                                        data-target="#collapseOne"><i class="fa fa-plus"></i>New in tutors?</button>

                                </div>
                                <div id="collapseOne" class="collapse" aria-labelledby="newUser"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p><a href="#">Registration/a></p>
                                        <p><a href="#">Rules Violation and Penalties</a></p>
                                        <p><a href="#">Connect With Tutors</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="card sidenav-card">
                                <div class="card-header sidenav-card-header" id="studentHelp">

                                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseTwo"><i class="fa fa-plus"></i>Tutor Help</button>

                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="studentHelp"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p><a href="#">Registration and Rules</a></p>
                                        <p><a href="#How to Find students"></a></p>
                                        <p><a href="#">Profile</a></p>
                                        <p><a href="#">My Request</a></p>
                                        <p><a href="#">Setting</a></p>
                                        <p><a href="#">Tutor profile Guidelines</a></p>
                                        <p><a href="#">Top ranked tutors</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="card sidenav-card">
                                <div class="card-header sidenav-card-header" id="teacherHelp">

                                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseThree"><i class="fa fa-plus"></i>Student Help</button>

                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="teacherHelp"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p><a href="">Registration</a></p>
                                        <p><a href=""> Student Profile </a></p>
                                        <p><a href="">How to find a tutor</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!----Header sidenav Area End----->







    <!-- /Include Header -->
    <style>
        .hireTutor {
            color: white;
        }

        .hf-btn button.btn:hover a {
            color: black;
        }
    </style>








    <!-- Hero Section Start -->
    <div class="hero-area">
        <div class="hero-slider">
            <div class="hero-carousel owl-carousel owl-theme">
                <div class="item">
                    <section id="hero-section" class="hero-section">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="hero-content text-center">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hero-footer text-center py-4 mt-4">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="hf-btn">
                                            <button class="btn btn-custom-a mr-4"><a class="hireTutor" href="#">Hire a
                                                    Tutor</a></button>
                                            <button class="btn btn-custom-a"><a class="hireTutor"
                                                    href="tutors/registration.html">Become a
                                                    Tutor</a></button>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h1 class="">Your Learning Assistant</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->









    <!-- Opinion Section Start -->
    <section id="opinion-section" class="opinion-section">
        <div class="container">
            <h2 class="text-center">Tutor`s <span class="opinion-span">Opinion</span></h2>
            <div class="row">
                <div class="col-md-12">
                    <div class="tutor-opinion-slider">
                        <div class="opinion-carousel owl-carousel owl-theme">
                            <div class="item">
                                <div class="single-info">
                                    <div class="single-info-top">
                                        <h3 class="text-custom font-weight-bold mb-0">Md Easir Arafat</h3>
                                        <p class="lead text-custom-p">Ruet</p>
                                    </div>
                                    <div class="single-info-content">
                                        <img class="" src="img/male-tutor.png" alt="">
                                        <div class="single-info-text">
                                            Thanks to the “Tuition Point” family for giving me tuition in a very
                                            short time. When I had come to Dhaka, I was very disappointed to not get any
                                            tuition. After some days, I acquainted with the Tuition point. They
                                            provide more facilities to live
                                            in this city in this pandemic situation. It is the best tuition &amp;
                                            learning service platform I have ever seen.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-info">
                                    <div class="single-info-top">
                                        <h3 class="text-custom font-weight-bold mb-0">Tahmid Shahriar</h3>
                                        <p class="lead text-custom-p">DU</p>
                                    </div>
                                    <div class="single-info-content">
                                        <img class="" src="img/male-tutor.png" alt="">
                                        <div class="single-info-text">
                                            “Tuition point” is a great platform. It is really fantastic how the whole
                                            communication has been done very much smoothly and elegantly. Guardians to
                                            Teachers, are getting what they need with authenticity.

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-info">
                                    <div class="single-info-top">
                                        <h3 class="text-custom font-weight-bold mb-0">Zabin Tithi</h3>
                                        <p class="lead text-custom-p">JU</p>
                                    </div>
                                    <div class="single-info-content">
                                        <img class="" src="img/female-tutor.png" alt="">
                                        <div class="single-info-text">
                                            In this pandemic situation, It&#039;s been quite hard to find suitable
                                            tuitions in my area. Fortunately, I came across this website and found
                                            really good tuition jobs with a handsome salary. Amazing thing about this
                                            platform is that the representatives
                                            are very helpful.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-info">
                                    <div class="single-info-top">
                                        <h3 class="text-custom font-weight-bold mb-0">Umme Rumman</h3>
                                        <p class="lead text-custom-p">Private University</p>
                                    </div>
                                    <div class="single-info-content">
                                        <img class="" src="img/female-tutor.png" alt="">
                                        <div class="single-info-text">
                                            I am getting tuitions from “Tuition Point” since 2019.Their behavior and
                                            communication skills are so great. It is really tough to get tuition while
                                            studying on a private varsity which is not even famous enough. But you have
                                            to wait a little. I had
                                            done only one tuition for one year then kept looking on the site every day.
                                            After getting not available messages for so long I got 4 new tuitions with
                                            pretty much handsome salary this year, Alhamdulillah. Thank
                                            you Tuition Point.

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </section>
    <!-- Opinion Section End -->
















    <!----Counter Area Start----->
    <section class="counter-area-strat">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h3>Quick & Convenient</h3>
                    </div>
                </div>
            </div>
            <div class="counter-content">
                <div class="row">

                    <div class="col-md-3 col-sm-12">
                        <div class="counters">
                            <img src="img/sicon-1.png" class="counter-icon">
                            <h3 style="cursor: pointer"><span class="counter"><b>51497</b></span><br> Registered Tutors
                            </h3>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="counters">
                            <img src="img/sicon-2.png" class="counter-icon">
                            <h3 style="cursor: pointer"><span class="counter"><b>
                                        53749</b></span><br> Total Applied </h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="counters">
                            <img src="img/sicon-3.png" class="counter-icon">
                            <h3><span class="counter"><b> 1124</b></span><br> Live Tution Jobs</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="counters">
                            <img src="img/sicon-4.png" class="counter-icon">
                            <h3 style="cursor: pointer"><span class="counter"><b>
                                        58878</b></span><br> Stake Holders </h3>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!----Counter Area End----->








    <!----Enroll Now ----->
    <section class="popular-category-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="img/enrolimg.png" width="100%">
                    <span style="width: 100%;
    height: 13px;
    background: #89c240!important;
    border-radius: 5px;
    display: block;"></span>
                </div>
                <div class="col-md-6 home-subject-mob wow fadeInLeft text-justify mt-5" data-wow-duration="2s">

                    <h4 class="wow rollIn" style="margin-top:10px;" data-wow-duration="2s">Enroll our courses & live
                        classes</h4>
                    <p style="margin-top:45px;">
                        Join the trendsetter, be the mastermind of your interested fields. Make your learning process
                        comprehensive, Vivid & interesting. Here you can find out a bulk of categories & bunches which
                        can boost your skills & expertise up to stand out from the clouds.
                        With the help of our versatile instructors you can achieve your goals. Fix the routine for your
                        interested field to join our vivid live class along with recorded secondary collaborative
                        resources. Don’t be late, pick it up right
                        now & start learning from the best learning gateway.

                    </p>
                    <a href="#" class="btn" style="    float: left;
    margin-top: 15px;
    background: #89c240;
    display: block;
    padding: 10px 17px;
    color: #ffff;">Enroll Now<i class="fas fa-angle-right" style="margin-left:15px;"></i></a>

                </div>
            </div>
        </div>
    </section>
    <!-- Enroll Now -->











    <!-- Popoler Categories -->
    <section class="popular-category-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center section-title">
                        <h4 class="wow rollIn" data-wow-duration="2s">Popular Categories</h4>
                        <p class="wow rollIn" data-wow-duration="2s">Hire your tutor with a single click from these
                            categories</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 home-subject-mob wow fadeInLeft" data-wow-duration="2s">
                    <div class="subject-bg-wrap home-subject-1 default-width"><a href="#"><img class="img-fluid"
                                src="img/category/category_1.jpg" alt="Bangla-English-Medium"> </a>
                        <div class="subject-bg-tag home-subject-1">Subject</div>
                        <div class="subject-bg-course"><i class="fas fa-language"></i>
                            <h5>Bangla & English Medium</h5>
                        </div>
                        <div class="sub-cat-hover">
                            <p>Get higher grades with the guidance of trained and skilled tutors nearby you</p>
                            <a href="#" class="sch-btn">Hire A
                                Tutor</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 home-subject-mob wow fadeInLeft" data-wow-duration="2s">
                    <div class="subject-bg-wrap home-subject-1 default-width"><a href="#"><img class="img-fluid"
                                src="img/category/category_2.jpg" alt="Bangla-English-Medium"> </a>
                        <div class="subject-bg-tag home-subject-1">Subject</div>
                        <div class="subject-bg-course"><i class="fas fa-book-reader"></i>
                            <h5>Version & Madrasha Medium</h5>
                        </div>
                        <div class="sub-cat-hover">
                            <p>Get higher grades with the guidance of trained and skilled tutors nearby you.</p>
                            <a href="#" class="sch-btn">Hire A
                                Tutor</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 home-subject-mob  wow fadeInLeft" data-wow-duration="2s">
                    <div class="subject-bg-wrap home-subject-1 default-width"><a href="#"><img class="img-fluid"
                                src="img/category/category_3.jpg" alt="Bangla-English-Medium"> </a>
                        <div class="subject-bg-tag home-subject-1">Subject</div>
                        <div class="subject-bg-course"><i class="far fa-window-restore"></i>
                            <h5>Language Proficiency </h5>
                        </div>
                        <div class="sub-cat-hover">
                            <p>Learn the language you need from language specialists near you for your personal, exam or
                                work purposes.</p>
                            <a href="#" class="sch-btn">Hire A
                                Tutor</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 home-subject-mob wow fadeInLeft" data-wow-duration="2s">
                    <div class="subject-bg-wrap home-subject-1 default-width"><a href="#"><img class="img-fluid"
                                src="img/category/category_4.jpg" alt="Bangla-English-Medium"> </a>
                        <div class="subject-bg-tag home-subject-1">Subject</div>
                        <div class="subject-bg-course"><i class="fas fa-window-restore"></i>
                            <h5>Professional Skills Mastery </h5>
                        </div>
                        <div class="sub-cat-hover">
                            <p>Grow your professional skills for a successful career with a skilled professional close
                                to you.</p>
                            <a href="#" class="sch-btn">Hire A
                                Tutor</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 home-subject-mob wow fadeInRight" data-wow-duration="2s">
                    <div class="subject-bg-wrap home-subject-1 default-width"><a href="#"><img class="img-fluid"
                                src="img/category/category_5.jpg" alt="Bangla-English-Medium"> </a>
                        <div class="subject-bg-tag home-subject-1">Subject</div>
                        <div class="subject-bg-course"><i class="fas fa-school"></i>
                            <h5>Special skills Mastery </h5>
                        </div>
                        <div class="sub-cat-hover">
                            <p>Build your talents in driving, cooking, photography, Kung Fu, etc. from an professional
                                next to you.</p>
                            <a href="#" class="sch-btn">Hire A
                                Tutor</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 home-subject-mob wow fadeInRight" data-wow-duration="2s">
                    <div class="subject-bg-wrap home-subject-1 default-width"><a href="#"><img class="img-fluid"
                                src="img/category/category_6.jpg" alt="Bangla-English-Medium"> </a>
                        <div class="subject-bg-tag home-subject-1">Subject</div>
                        <div class="subject-bg-course"><i class="fas fa-stamp"></i>
                            <h5>Religious & Moral Studies</h5>
                        </div>
                        <div class="sub-cat-hover">
                            <p>Boost your knowledge and meet your target with a religious tutor nearby you.</p>
                            <a href="#" class="sch-btn">Hire A
                                Tutor</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 home-subject-mob wow fadeInRight" data-wow-duration="2s">
                    <div class="subject-bg-wrap home-subject-1 default-width"><a href="#"><img class="img-fluid"
                                src="img/category/category_7.jpg" alt="Bangla-English-Medium"> </a>
                        <div class="subject-bg-tag home-subject-1">Subject</div>
                        <div class="subject-bg-course"><i class="fas fa-business-time"></i>
                            <h5> Dance and Singing Expertise</h5>
                        </div>
                        <div class="sub-cat-hover">
                            <p>Improve your expertise and skills in singing and Dancing etc. from an expert and skilled
                                tutor nearby to you.</p>
                            <a href="#" class="sch-btn">Hire A
                                Tutor</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 home-subject-mob wow fadeInRight" data-wow-duration="2s">
                    <div class="subject-bg-wrap home-subject-1 default-width"><a href="#"><img class="img-fluid"
                                src="img/category/category_8.jpg" alt="Bangla-English-Medium"> </a>
                        <div class="subject-bg-tag home-subject-1">Subject</div>
                        <div class="subject-bg-course"><i class="fas fa-user-graduate"></i>
                            <h5>International Exam Preparations </h5>
                        </div>
                        <div class="sub-cat-hover">
                            <p>Get professional support & pass the GRE, GMAT, IELTS and TOEFL exams in one of the
                                sessions of a professional tutor.</p>
                            <a href="#" class="sch-btn">Hire A
                                Tutor</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="rm-btn">
                        <a href="#" class="mrd-btn">All Categories<i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----Popular Category Area End----->












    <!-- Parents Opinion Section Start -->
    <section id="parents_opinion-section" class="opinion-section">
        <div class="container">
            <h2 class="text-center">Parent`s <span class="opinion-span">Opinion</span></h2>

            <div class="row">
                <div class="col-md-12">
                    <div class="tutor-opinion-slider">
                        <div class="opinion-carousel owl-carousel owl-theme">
                            <div class="item">
                                <div class="single-info">
                                    <div class="single-info-top">
                                        <h3 class="text-custom font-weight-bold mb-0">Md. Sarafat Ahmed</h3>
                                        <p class="lead text-custom-p">Senior Executive, Union Pharmaceuticals Pvt. Ltd
                                        </p>
                                    </div>
                                    <div class="single-info-content">
                                        <img class="" src="img/male-tutor.png" alt="">
                                        <div class="single-info-text">
                                            Thanks to Tution Point as a best tutors provider and learning gateway
                                            platform. I as a job holder its very tough to give time and efforts to my
                                            child. Thus I am searching for experienced and sensible tutors nearby my
                                            location. Fortunately, I found
                                            this unique platform and fulfilled my needs. Great wishes for “Tuition
                                            Point”
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-info">
                                    <div class="single-info-top">
                                        <h3 class="text-custom font-weight-bold mb-0">Abdul Majid Khan</h3>
                                        <p class="lead text-custom-p">DGM, Sonali Bank Ltd</p>
                                    </div>
                                    <div class="single-info-content">
                                        <img class="" src="img/male-tutor.png" alt="">
                                        <div class="single-info-text">
                                            To fix a problem is a hassle if there are no options to assist on it. My kid
                                            is a Grade-8 school going who is always absent minded about his studies. For
                                            a long time, I am seeking for someone who can have the possessions of being
                                            the master guide of my
                                            child. Finally, I hired a tutor from Tuition Point, took some trial
                                            classes then confirm to take the responsibilities of him. Yes, I found my
                                            expected one.

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-info">
                                    <div class="single-info-top">
                                        <h3 class="text-custom font-weight-bold mb-0">Mahmuda Begum</h3>
                                        <p class="lead text-custom-p">Housewife</p>
                                    </div>
                                    <div class="single-info-content">
                                        <img class="" src="img/female-tutor.png" alt="">
                                        <div class="single-info-text">
                                            Here goes the statement about this platform. This is Mahmuda Begum, I took
                                            four tutors from Tuition Point. Their behavior and service is pretty much
                                            good. Within very short time they provide my requested tutors. I am much
                                            satisfied with their service.
                                            Thank you.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-info">
                                    <div class="single-info-top">
                                        <h3 class="text-custom font-weight-bold mb-0">Tahmina Khanam</h3>
                                        <p class="lead text-custom-p">School Teacher</p>
                                    </div>
                                    <div class="single-info-content">
                                        <img class="" src="img/female-tutor.png" alt="">
                                        <div class="single-info-text">
                                            Hello, Assalamualaikum. As a sincere guardian, I, am always worried about my
                                            children’s betterment. Since I am a school teacher hence I know the pitfalls
                                            where we should focus to improve the qualities. Its all about the approach
                                            and styles by which a
                                            responsible tutor can conquer the student’s performance. Tuition Point is
                                            the platform which can make sure about the tutoring qualities of teachers.
                                            Best wishes “ Tuition Point ” Teams.

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </section>
    <!--Parents Opinion Section End -->








    <!-- Android App Section Start -->
    <section id="app-section" class="app-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="app-content">
                        <div class="app-content-top">
                            <h2>Tution Point </h2>
                            <h2><span class="">Android App</span></h2>
                            <p class="text-custom-p w-75 mt-4">With tution point official app, Make your profile in
                                minutes. Apply to your preferred tutoring jobs that match your skills</p>
                        </div>
                        <div class="app-footer mt-4">
                            <a href="#">
                                <img src="assets/img/playStore.png" alt="" class="img img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <img src="assets/img/app.png" alt="" class="img img-fluid">
                </div>
            </div>
        </div>
        <img class="app-bottom-bg" src="assets/img/grassOld.png" alt="">
    </section>
    <!-- Android App Section End -->






    <!-- Include Footer -->
    <!-- Footer Start -->
    <section id="footer-section" class="footer-section pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="text-custom mb-5 text-bold">COMING SOON</h4>
                            <p class="text-custom-p">With Good Tutor official app, Make your profile in minutes. Apply
                                to your
                                preferred tutoring jobs and tutors that match your passions.</p>
                            <img src="assets/img/playStore.png" alt="Play Store" class="img img-fluid pt-3">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 useful-content mt-3 text-center">
                    <h4 class="text-custom mb-5 text-bold">USEFUL LINKS</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="">
                                <li class="d-block mb-3">
                                    <a href="tutors/" class="text-custom-p">Become A
                                        Tutor</a>
                                </li>
                                <li class="d-block mb-3">
                                    <a href="blog/" class="text-custom-p">Our Blog</a>
                                </li>

                                <li class="d-block mb-3">
                                    <a href="FAQ/" class="text-custom-p">FAQ</a>
                                </li>
                                <li class="d-block mb-3">
                                    <a href="privacy-policy/" class="text-custom-p">Privacy
                                        Policy</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="#">
                                <li class="d-block mb-3">
                                    <a href="" class="text-custom-p">Hire A
                                        Tutor</a>
                                </li>

                                <li class="d-block mb-3">
                                    <a href="review/" class="text-custom-p">Review</a>
                                </li>

                                <li class="d-block mb-3">
                                    <a href="#" class="text-custom-p">Our Team</a>
                                </li>
                                <li class="d-block mb-3">
                                    <a href="terms-condition/" class="text-custom-p">Terms &
                                        Conditions</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="text-custom mb-5 text-bold">CONTACT US</h4>
                            <ul class="text-custom-p text-left p-0">
                                <li class="d-block mb-3">
                                    <p>We are here for your help!</p>
                                    <hr>
                                </li>
                                <li class="d-block mb-3 footer-contact">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <a href="#" class="text-custom-p ml-2">info@tutionPoint</a>
                                    <hr>
                                </li>
                                <li class="d-block mb-3 footer-contact">
                                    <i class="fa fa-phone-square" aria-hidden="true"></i>
                                    <a href="#" class="text-custom-p ml-2">09678-444477</a>
                                    <hr>
                                </li>
                                <li class="d-block mb-3 footer-contact">
                                    <i class="fa fa-street-view" aria-hidden="true"></i>
                                    <a href="#" class="text-custom-p ml-2">315A1,Kandirpar-2,Cumilla-3502,Bangladesh</a>
                                </li>
                            </ul>
                            <div class="social-icon text-custom-p pt-3">
                                <a target="_blank" href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                                <a target="_blank" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a target="_blank" href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                                <a target="_blank" href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                                <a target="_blank" href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                                <a target="_blank" href="#"><i class="fa fa-pinterest-square"
                                        aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="text-center">

            <p class="text-center">Copyright &copy; 2021-2025 <a href="#">Tuition Point</a>
                All
                Rights Reserved</p>

        </div>
    </section>
    <!-- Footer End -->



    <!-- JS FILES -->
    <!-- JavaScript Bundle with Popper -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        var BotStar = {
            appId: "sbb423ad5-d775-4802-b1b7-62156a107577",
            mode: "livechat"
        };
        ! function (t, a) {
            var e = function () {
                (e.q = e.q || []).push(arguments)
            };
            e.q = e.q || [], t.BotStarApi = e;
            ! function () {
                var t = a.createElement("script");
                t.type = "text/javascript", t.async = 1, t.src = "https://widget.botstar.com/static/js/widget.js";
                var e = a.getElementsByTagName("script")[0];
                e.parentNode.insertBefore(t, e)
            }();
        }(window, document)
    </script>

</body>

</html>
<!-- /Include Footer -->
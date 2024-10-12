<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lighthouse Academy</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/onos9/eduweb@main/assets/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/onos9/eduweb@main/assets/css/animate.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/onos9/eduweb@main/assets/css/themewar-font.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/onos9/eduweb@main/assets/css/quera-icon.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/onos9/eduweb@main/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/onos9/eduweb@main/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/onos9/eduweb@main/assets/css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/onos9/eduweb@main/assets/css/nice-select.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/onos9/eduweb@main/assets/css/lightcase.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/onos9/eduweb@main/assets/css/settings.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/onos9/eduweb@main/assets/css/preset.css" />
    <link rel="stylesheet" href="assets/css/ignore_for_wp.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/onos9/eduweb@main/assets/css/theme.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/onos9/eduweb@main/assets/css/responsive.css" />
    
    <?php include "patials/prefetch.php"; ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var areaOfInterest = document.getElementsByName('sponsor_interest')[0];
            var amountField = document.querySelector('.input-field.col-lg-12 textarea[name="sponsor_message"]');
            var button = document.querySelector('.input-field.col-lg-12 button.qu_btn');
            console.log(areaOfInterest)
            areaOfInterest.addEventListener('change', function() {
                console.log(areaOfInterest.value)
                if (areaOfInterest.value === 'Donation') {
                    amountField.setAttribute('placeholder', 'Enter Donation Amount');
                    amountField.setAttribute('type', 'number');
                    button.textContent = 'Donate Now';
                    console.log("donation")
                } else {
                    amountField.setAttribute('placeholder', 'Tell Us How You Would Like to Contribute...');
                    amountField.setAttribute('type', 'text');
                    button.textContent = 'Connect with Us';
                    console.log("connect")
                }
            });
        });
    </script>
</head>

<body>
    <div class="preloader clock text-center">
        <div class="queraLoader">
            <div class="loaderO">
                <span>L</span>
                <span>I</span>
                <span>G</span>
                <span>H</span>
                <span>T</span> <BR>
                <span>H</span>
                <span>O</span>
                <span>U</span>
                <span>S</span>
                <span>E</span>
            </div>
        </div>
    </div>

    <?php include "header.php"; ?>
    <section class="slider_03">
        <?php include "patials/slider.php"; ?>
    </section>

    <section class="aboutSection03">
        <div class="container largeContainer">
            <div class="row">
                <div class="col-lg-6">
                    <div class="subTitle">
                        <span class="bleft"></span>DiscoverThe Leading Academy
                    </div>
                    <h2 class="secTitle">The Director</h2>
                    <p class="secDesc">
                        Welcome to Lighthouse Leading Academy, the epitome of Christian Education in Africa. I'm thrilled to share the news that you've made a wise decision by choosing to be a part of this institution. It truly reflects an informed and intelligent choice. The school boasts a rich blend of spiritual and academic heritage, offering abundant opportunities for the maximization of your potential.
                    </p>
                    <p><a class="qu_btn" href="about.php">About Us</a></p>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="fact_01">
                                <h2><span class="counter completed" data-count="2500">2.5</span><i>k</i></h2>
                                <p>Successfull Kids</p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="fact_01">
                                <h2><span class="counter completed" data-count="95">95</span><i>%</i></h2>
                                <p>Happy Parents</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="absThumb">
                        <img src="assets/images/home3/1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="serviceSection03">
        <div class="marqueeText runRight stokeText">
            <h2>Lighthouse leading Academy.</h2>
        </div>
        <div class="container largeContainer">
            <div class="row">
                <div class="col-lg-12 text-center">

                    <h2 class="secTitle">Students' Connect</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="icon_box_09 text-center">

                        <div class="ib_box"><i class=" icon-local_1"></i></div>
                        <div class="srThumb"><img src="assets/images/home3/s1.jpg" alt=""></div>
                        <h3><a href="https://llacademy.ng/parent-dashboard">e-Portal</a></h3>
                        <p>Access the e-Portal for a seamless connection to academic and administrative resources.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon_box_09 text-center">

                        <div class="ib_box"><i class="icon-local_3-1"></i></div>
                        <div class="srThumb"><img src="assets/images/home3/s2.jpg" alt=""></div>
                        <h3><a href="single-service.html">Admission</a></h3>
                        <p>Explore admission procedures and requirements to join our esteemed educational community.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon_box_09 text-center">

                        <div class="ib_box"><i class="icon-local_1-1"></i></div>
                        <div class="srThumb"><img src="assets/images/home3/s3.jpg" alt=""></div>
                        <h3><a href="single-service.html">News & Events </a>
                        </h3>
                        <p>Stay updated on the latest news and events shaping the vibrant Lighthouse Leading Academy community.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="secDesc">Have a question? check our guide</p>
                    <h4>Get answers in a few minutes</h4>
                    <div class="clearfix"></div>
                    <a class="qu_btn" href="contact.php">Contact Us</a>
                </div>
            </div>
        </div>
        <div class="marqueeText btMr runLeft">
            <h2>Lighthouse Leading Academy</h2>
        </div>
    </section>

    <section id="sponsor" class="chooseSection chooseSection02">
        <div class="container largeContainer">
            <div class="row">
                <div class="col-xl-5">
                    <div class="subTitle"><span class="bleft"></span>Empower Change Through Your Support</div>
                    <h2 class="secTitle white">Sponsorship, Projects, and Donations</h2>
                    <p class="secDesc">
                        Join us on a meaningful journey of impact. Your sponsorship, project funding, or donation plays a crucial role in advancing our initiatives. Together, we can make a positive and lasting difference in the lives of our students and the community.
                    </p>
                </div>
                <div class="col-xl-7 mt8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="icon_box_05">
                                <div class="ib_box">
                                    <div class="pin1"></div><i class="icon-local_1"></i>
                                    <div class="pin2"></div>
                                </div>
                                <h3>Sponsor a Pupil</h3>
                                <p>Your sponsorship empowers students' by providing them with access to quality education, resources, and opportunities for a brighter future.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="icon_box_05">
                                <div class="ib_box">
                                    <div class="pin1"></div><i class="icon-local_3"></i>
                                    <div class="pin2"></div>
                                </div>
                                <h3>Fund Projects</h3>
                                <p>Contribute to innovative projects that drive positive changes within our academy and community, fostering growth and development.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="icon_box_05">
                                <div class="ib_box">
                                    <div class="pin1"></div><i class="icon-XjxC7N01"></i>
                                    <div class="pin2"></div>
                                </div>
                                <h3>Make a Donation</h3>
                                <p>Your generous donation supports our mission thereby enabling us to engage in meaningful collaborations and address the needs of our students and community.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="icon_box_05">
                                <div class="ib_box">
                                    <div class="pin1"></div><i class="icon-local_11"></i>
                                    <div class="pin2"></div>
                                </div>
                                <h3>Impactful Giving</h3>
                                <p>Partner with us in building a successful and impactful educational environment by contributing positively to the lives of our students and the community.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="appoinmentSection03">
        <div class="container largeContainer">
            <div class="row">
                <div class="col-xl-7">
                    <div class="appointment_form">
                        <p>Become a Sponsor</p>
                        <h3>Explore Sponsorship Opportunities</h3>
                        <form action="#" method="post" class="row" id="sponsorship_form">
                            <div class="input-field col-lg-6">
                                <input class="required" type="text" name="sponsor_name" placeholder="Your Name">
                            </div>
                            <div class="input-field col-lg-6">
                                <input class="required" type="email" name="sponsor_email" placeholder="Email Address">
                            </div>
                            <div class="input-field icRight col-lg-12 select-area">
                                <select class="required" name="sponsor_interest" style="display: none;">
                                    <option selected="selected">Area of Interest</option>
                                    <option>Project Funding</option>
                                    <option>Donation</option>
                                    <option>Sponsorship</option>
                                </select>
                                <div class="nice-select required" tabindex="0"><span class="current">Area of Interest</span>
                                    <ul class="list">
                                        <li data-value="Area of Interest" class="option selected">Project Funding</li>
                                        <li data-value="Sponsorship Opportunities" class="option">Donation</li>
                                        <li data-value="Donation Options" class="option">Sponsorship</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="input-field col-lg-6">
                                <i class="twi-calendar2"></i>
                                <input class="required" type="text" name="sponsor_date" placeholder="Date of Interest">
                            </div>
                            <div class="input-field col-lg-6">
                                <i class="twi-clock2"></i>
                                <input class="required" type="text" name="sponsor_time" placeholder="Time of Interest">
                            </div>
                            <div class="input-field col-lg-12">
                                <textarea class="required" name="sponsor_message" placeholder="Tell Us How You Would Like to Contribute..."></textarea>
                            </div>
                            <div class="input-field col-lg-12">
                                <button type="submit" class="qu_btn">Connect with Us</button>
                                <div class="sponsorship_message"></div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="reviewArea">
                        <h2 class="secTitle">Support Our Cause</h2>
                        <p class="secDesc">
                            Your contribution makes a difference in our mission to empower and uplift. Join us in creating a positive impact on our community.
                        </p>
                        <div class="cusRating">
                            <i class="twi-star"></i><i class="twi-star"></i><i class="twi-star"></i><i class="twi-star"></i><i class="twi-star"></i>
                        </div>
                        <p class="customers"><span>Thank You to Our Generous Donors</span> for their support towards our initiatives.</p>
                        <div class="single_skill" data-parcent="70">
                            <p>Projects Funded</p>
                            <div class="ss_parent">
                                <div class="ss_child" style="width: 70.0635%; overflow: hidden;"></div><span style="left: 69.9996%;">70%</span>
                            </div>
                        </div>
                        <div class="single_skill" data-parcent="80">
                            <p>Donor Satisfaction</p>
                            <div class="ss_parent">
                                <div class="ss_child" style="width: 80.1011%; overflow: hidden;"></div><span style="left: 79.9991%;">80%</span>
                            </div>
                        </div>
                        <div class="hpAuthor">
                            <img class="author" src="assets/images/home3/author.png" alt="">
                            <img width="100" src="assets/images/home3/sign_light.webp" alt="">
                            <strong>
                                <div class="">Rev. Dinna Osayi – <span>Founder</span></div>
                            </strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="teamSection02">
        <div class="container largeContainer">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="subTitle"><span class="bleft"></span>Meet Our Exceptional Instructors<span class="bright"></span></div>
                    <h2 class="secTitle">Expert<span>Team</span></h2>
                </div>
            </div>
        </div>
    </section>

    <section class="ctaSection">
        <div class="container largeContainer">
            <div class="row">
                <div class="col-md-7">
                    <div class="ctaText">
                        <i class="twi-exclamation-triangle2"></i>If You Want To Get A Personal Consultant, No Worry!
                        <a href="contact.html">Get A Consultant<i class="twi-arrow-right1"></i></a>
                    </div>
                </div>
                <!-- <div class="col-md-5 text-right">
                    <a class="qu_btn" href="contact.html">Request For Services</a>
                </div> -->
            </div>
        </div>
    </section>

    <section class="chooseSection03">
        <div class="container largeContainer">
            <div class="row">
                <div class="col-xl-6 pdAcc">
                    <div class="subTitle"><span class="bleft"></span>Why Choose Us?</div>
                    <h2 class="secTitle">Get Every Answer</h2>
                    <div class="accordion quAccordion" id="quAccordion01">
                        <div class="card">
                            <div class="card-header" id="ma_ac_01">
                                <h2 class="mb-0">
                                    <button type="button" data-toggle="collapse" data-target="#ma_collapes_01" data-aria-expanded="true" data-aria-controls="ma_collapes_01">
                                        <span></span>
                                        Meet Our Exceptional Instructors
                                    </button>
                                </h2>
                            </div>
                            <div id="ma_collapes_01" class="collapse show" aria-labelledby="ma_ac_01" data-parent="#quAccordion01">
                                <div class="card-body">
                                    Step into a realm of educational excellence with our instructors, meticulously prepared to deliver top-notch content. At our world-class institution, their expertise is not just a service but a commitment to providing an extraordinary learning experience.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="ma_ac_02">
                                <h2 class="mb-0">
                                    <button class="collapsed" type="button" data-toggle="collapse" data-target="#ma_collapes_02" data-aria-expanded="false" data-aria-controls="ma_collapes_02">
                                        <span></span>
                                        Innovative Learning Spaces
                                    </button>
                                </h2>
                            </div>
                            <div id="ma_collapes_02" class="collapse" aria-labelledby="ma_ac_02" data-parent="#quAccordion01">
                                <div class="card-body">
                                    Immerse yourself in our state-of-the-art learning environments designed to spark creativity and foster collaborative exploration. Experience education beyond boundaries, where every space is a canvas for innovative ideas and academic brilliance.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="ma_ac_03">
                                <h2 class="mb-0">
                                    <button class="collapsed" type="button" data-toggle="collapse" data-target="#ma_collapes_03" data-aria-expanded="false" data-aria-controls="ma_collapes_03">
                                        <span></span>
                                        Student-Centric Approach
                                    </button>
                                </h2>
                            </div>
                            <div id="ma_collapes_03" class="collapse" aria-labelledby="ma_ac_03" data-parent="#quAccordion01">
                                <div class="card-body">
                                    Embrace a personalized learning journey where students are at the heart of our educational philosophy. Our student-centric approach ensures that every individual is heard, supported, and empowered to thrive academically and personally.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="ma_ac_04">
                                <h2 class="mb-0">
                                    <button class="collapsed" type="button" data-toggle="collapse" data-target="#ma_collapes_04" data-aria-expanded="false" data-aria-controls="ma_collapes_04">
                                        <span></span>
                                        Dynamic Extracurriculars
                                    </button>
                                </h2>
                            </div>
                            <div id="ma_collapes_04" class="collapse" aria-labelledby="ma_ac_04" data-parent="#quAccordion01">
                                <div class="card-body">
                                    Beyond the classroom, discover a world of dynamic extracurricular activities that complement academic pursuits. Engage in passions, develop new skills, and build lasting connections in an environment where holistic growth is celebrated and encouraged.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="ma_ac_05">
                                <h2 class="mb-0">
                                    <button type="button" data-toggle="collapse" data-target="#ma_collapes_05" data-aria-expanded="true" data-aria-controls="ma_collapes_05">
                                        <span></span>
                                        Community of Excellence
                                    </button>
                                </h2>
                            </div>
                            <div id="ma_collapes_05" class="collapse" aria-labelledby="ma_ac_05" data-parent="#quAccordion01">
                                <div class="card-body">
                                    Join a vibrant community where excellence is not just a goal but a shared value. Our inclusive and supportive atmosphere cultivates a sense of belonging, ensuring that every member contributes to and benefits from the spirit of collective achievement.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="chImage">
                        <img src="assets/images/home3/3.webp" alt="">
                    </div>
                    <div class="chooseSlider owl-carousel owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage" style="transform: translate3d(-378px, 0px, 0px); transition: all 0s ease 0s; width: 1134px;">
                                <div class="owl-item cloned" style="width: 189px;">
                                    <div class="chsItem">
                                        <img src="assets/images/home3/3.png" alt="">
                                        <p>Where we nurture and train the next generation by means of world class education.</p>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 189px;">
                                    <div class="chsItem">
                                        <img src="assets/images/home3/4.png" alt="">
                                        <p>Where young minds are oriented, inspire, imbue and empowered with productive principles and the fear of God.</p>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 189px;">
                                    <div class="chsItem">
                                        <img src="assets/images/home3/4.png" alt="">
                                        <p>Where every child feel listened to, cared for and valued.</p>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 189px;">
                                    <div class="chsItem">
                                        <img src="assets/images/home3/4.png" alt="">
                                        <p>where curiosity is sparked, talents are discovered, and potential is unleashed.</p>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 189px;">
                                    <div class="chsItem">
                                        <img src="assets/images/home3/4.png" alt="">
                                        <p>where diversity is celebrated, and students are prepared to embrace the challenges of a dynamic world.</p>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 189px;">
                                    <div class="chsItem">
                                        <img src="assets/images/home3/4.png" alt="">
                                        <p>Where academic excellence meets character development, our school is a nurturing space where students grow intellectually, emotionally, and ethically.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i class="twi-arrow-left1"></i></button><button type="button" role="presentation" class="owl-next"><i class="twi-arrow-right1"></i></button></div>
                        <div class="owl-dots disabled"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="portfolioSection03">
        <div class="container largeContainer">
            <div class="row">
                <div class="col-lg-3 col-md-4 noPadding">
                    <div class="folioSlider02 owl-carousel owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage" style="transform: translate3d(-626px, 0px, 0px); transition: all 0s ease 0s; width: 1878px;">
                                <div class="owl-item active" style="width: 313px;">
                                    <div class="folioItem03">
                                        <div class="flThumb">
                                            <img loading="lazy" src="assets/images/folio/1.avif" alt="">
                                            <a href="single-folio.html">+</a>
                                        </div>
                                        <div class="folioContent">
                                            <h3><a href="single-folio.html">Growth Instruction</a></h3>
                                            <a class="cat" href="https://themewar.com/html/quera/folio1.html">Business</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 313px;">
                                    <div class="folioItem03">
                                        <div class="flThumb">
                                            <img loading="lazy" src="assets/images/folio/2.avif" alt="">
                                            <a href="single-folio.html">+</a>
                                        </div>
                                        <div class="folioContent">
                                            <h3><a href="single-folio.html">Business Managment</a></h3>
                                            <a class="cat" href="https://themewar.com/html/quera/folio1.html">Consultancy</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 313px;">
                                    <div class="folioItem03">
                                        <div class="flThumb">
                                            <img loading="lazy" src="assets/images/folio/3.avif" alt="">
                                            <a href="single-folio.html">+</a>
                                        </div>
                                        <div class="folioContent">
                                            <h3><a href="single-folio.html">Growth Instruction</a></h3>
                                            <a class="cat" href="https://themewar.com/html/quera/folio1.html">Business</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 313px;">
                                    <div class="folioItem03">
                                        <div class="flThumb">
                                            <img loading="lazy" src="assets/images/folio/4.avif" alt="">
                                            <a href="single-folio.html">+</a>
                                        </div>
                                        <div class="folioContent">
                                            <h3><a href="single-folio.html">Business Managment</a></h3>
                                            <a class="cat" href="https://themewar.com/html/quera/folio1.html">Consultancy</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 313px;">
                                    <div class="folioItem03">
                                        <div class="flThumb">
                                            <img loading="lazy" src="assets/images/folio/5.avif" alt="">
                                            <a href="single-folio.html">+</a>
                                        </div>
                                        <div class="folioContent">
                                            <h3><a href="single-folio.html">Growth Instruction</a></h3>
                                            <a class="cat" href="https://themewar.com/html/quera/folio1.html">Business</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 313px;">
                                    <div class="folioItem03">
                                        <div class="flThumb">
                                            <img loading="lazy" src="assets/images/folio/6.avif" alt="">
                                            <a href="single-folio.html">+</a>
                                        </div>
                                        <div class="folioContent">
                                            <h3><a href="single-folio.html">Business Managment</a></h3>
                                            <a class="cat" href="https://themewar.com/html/quera/folio1.html">Consultancy</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="owl-dots disabled"></div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8">
                    <div class="fThumb">
                        <img loading="lazy" src="assets/images/home3/1.webp" alt="">
                        <a href="https://themewar.com/html/quera/folio1.html">View</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="blogSectiont03">
        <div class="container largeContainer">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="subTitle"><span class="bleft"></span>News<span class="bright"></span></div>
                    <h2 class="secTitle">Latest Posts</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="blogItem03">
                        <div class="blogContent">
                            <div class="bmeta">
                                <span><i class="twi-folder2"></i><a href="blog1.php">Develop</a></span>|<span><i class="twi-user2"></i><a href="blog1.php">David Smith</a></span>
                            </div>
                            <h3><a href="blog1.php">Accounting departments are usually responsible</a></h3>
                        </div>
                        <div class="blogThumb">
                            <img src="assets/images/blog/1.webp" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blogItem03 bborder">
                        <div class="blogThumb">
                            <img src="assets/images/blog/2.webp" alt="">
                        </div>
                        <div class="blogContent">
                            <div class="bmeta">
                                <span><i class="twi-folder2"></i><a href="blog2.php">Marketing</a></span>|<span><i class="twi-user2"></i><a href="blog2.php">David Smith</a></span>
                            </div>
                            <h3><a href="blog2.php">The accounting department also keeps detailed records</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blogItem03">
                        <div class="blogContent">
                            <div class="bmeta">
                                <span><i class="twi-folder2"></i><a href="blog3.php">Develop</a></span>|<span><i class="twi-user2"></i><a href="blog3.php">David Smith</a></span>
                            </div>
                            <h3><a href="blog3.php">Discovering Sydney’s See Attractions line</a></h3>
                        </div>
                        <div class="blogThumb">
                            <img src="assets/images/blog/3.webp" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <?php include "footer.php"; ?>

    <a href="javascript:void(0);" id="backtotop"><i class="twi-arrow-to-top1"></i></a>

    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/gh/onos9/eduweb@main/assets/js/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/onos9/eduweb@main/assets/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/onos9/eduweb@main/assets/js/jquery.appear.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/onos9/eduweb@main/assets/js/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/onos9/eduweb@main/assets/js/shuffle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/onos9/eduweb@main/assets/js/nice-select.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/onos9/eduweb@main/assets/js/lightcase.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/onos9/eduweb@main/assets/js/jquery.datetimepicker.full.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/onos9/eduweb@main/assets/js/circle-progress.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/onos9/eduweb@main/assets/js/gmaps.js"></script>
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyBJtPMZ_LWZKuHTLq5o08KSncQufIhPU3o">
    </script>

    <script src="https://cdn.jsdelivr.net/gh/onos9/eduweb@main/assets/js/jquery.themepunch.tools.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/onos9/eduweb@main/assets/js/jquery.themepunch.revolution.min.js"></script>

    <script src="https://cdn.jsdelivr.net/gh/onos9/eduweb@main/assets/js/extensions/revolution.extension.actions.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/gh/onos9/eduweb@main/assets/js/extensions/revolution.extension.carousel.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/gh/onos9/eduweb@main/assets/js/extensions/revolution.extension.kenburn.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/gh/onos9/eduweb@main/assets/js/extensions/revolution.extension.layeranimation.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/gh/onos9/eduweb@main/assets/js/extensions/revolution.extension.migration.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/gh/onos9/eduweb@main/assets/js/extensions/revolution.extension.navigation.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/gh/onos9/eduweb@main/assets/js/extensions/revolution.extension.parallax.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/gh/onos9/eduweb@main/assets/js/extensions/revolution.extension.slideanims.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/gh/onos9/eduweb@main/assets/js/extensions/revolution.extension.video.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/gh/onos9/eduweb@main/assets/js/theme.js"></script>

</body>

</html>
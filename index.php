<?php
session_start();
if (!isset($_SESSION['user-website'])) {
    header('Location: start.html');
    exit();
}
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Pragma: no-cache');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent A Sound</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"
        integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="responsive.css">
    <style>
        .img-fluid{ 
            height:"600px"; 
            width:"1600px";
        }
    </style>

<link rel="icon" href="pngs/png1.png" type="image/png">
</head>

<body>

    <header id="header">

        <div class="container-fluid ps-0">
            <div class="row nav-row align-items-center">

                <div class="col-lg-3 col-sm-4 col-5">
                    <div class="logo text-md-end text-center">
                        <img src="pngs/png1.png" class="img-fluid" alt="logo" height="90px" width="90px">
                    </div>
                </div>


                <div class="col-md-6 col-5">

                    <div class="nav_icon">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link ms-0" href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa-brands fa-instagram"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa-brands fa-twitter"></i></a>
                            </li>
                        </ul>
                    </div>

                    <div class="nav_bar d-flex justify-content-center">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link active" href="index.php">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./navOptions/About Us.html">ABOUT US</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./navOptions/Rental Services.html">RENTAL SERVICES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./navOptions/Testimonial.html">TESTIMONIAL</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost/website/rent.php">RENT OUT</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-2">

                    <div id="main">
                        <span onclick="openNav()"><i class="burger fa-solid fa-bars text-white"></i></span>
                    </div>
                    <div id="mySidenav" class="sidenav">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <a class="active" href="index.php">HOME</a>
                        <a href="./navOptions/About Us.html">ABOUT US</a>
                        <a href="./navOptions/Rental Services.html">RENTAL SERVICES</a>
                        <a href="./navOptions/Testimonial.html">TESTIMONIAL</a>
                        <a href="./navOptions/Contact Us.html"><button type="button" class="btn">CONTACT US</button></a>
                        <a href="./logout.php"><button type="button" class="btn">LOG OUT</button></a>
                    </div>
                    <div class="wrapper">
                        <div class="button-wrapper">
                            <a href="./navOptions/Contact Us.html"><button type="button">CONTACT US</button></a>
                            <div class="btn2"></div>
                        </div>
                        <div class="button-wrapper">
                            <a href="./logout.php"><button type="button">LOG OUT</button></a>
                            <div class="btn2"></div>
                        </div>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-1">
                    <div class="icon_list">
                        <div class="line"></div>
                        <div class="v_nav">
                            <ul class="nav flex-column align-items-center">
                                <li class="nav-item">
                                    <a class="nav-link" data-tooltip="facebook" href="https://www.facebook.com/"><i
                                            class="fa-brands fa-facebook-f"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-tooltip="linkedin" href="https://in.linkedin.com/"><i
                                            class="fa-brands fa-linkedin-in"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-tooltip="instagram" href="https://www.instagram.com/"><i
                                            class="fa-brands fa-instagram"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-tooltip="twitter" href="https://twitter.com/?lang=en"><i
                                            class="fa-brands fa-twitter"></i></a>
                                </li>
                            </ul>
                        </div>


                    </div>
                </div>

                <div class="col-lg-11 col-12">
                    <div class="row">
                        <div class="col-lg-11 col-12">
                            <div class="overflow-hidden">
                                <div class="text-center">

                                    <h1 class="ml15">
                                        <span class="word"> R</span>
                                        <span class="word"> E</span>
                                        <span class="word"> N</span>
                                        <span class="word"> T</span>
                                        <span class="word">  </span>
                                        <span class="word"> A</span>
                                        <span class="word">  </span>
                                        <span class="word"> S</span>
                                        <span class="word"> O</span>
                                        <span class="word"> U</span>
                                        <span class="word"> N</span>
                                        <span class="word"> D</span>
                                    </h1>
                                </div>

                                <div class="ml25 text-center">
                                    <p class="word">HELPING OTHERS DISCOVER THEIR NEXT SYMPHONY</p>
                                </div>

                                <div class="fade text-center">
                                    <img src="pngs/png2.png" class="img-fluid" alt="png2" height="1200px" width="1200px">
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-1 d-flex justify-content-center align-items-end ps-lg-0">
                            <div data-wow-delay="1s" class="scroll-btn wow fadeInDown animated animated">
                                <a href="#bookmark" class="page-scroll">
                                    <span class="mouse"><span class="weel">
                                            <span></span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                            <a class="text-decoration-none" href="#bookmark">
                                <div class="move_down text-center">
                                    <h6>MOVE DOWN</h6>
                                    <img src="pngs/png3.png" class="img-fluid" alt="png3">

                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>

    <!-- SECTION 1 -->

    <section id="section1">

        <div class="container-fluid ps-0">

            <div class="row wow animate__animated animate__fadeInUp">

                <div class="col-xxl-12 col-12 pe-0">
                    <div>
                        <img src="pngs/png4.png" class="img-fluid" alt="" height="600px" width="1800px">
                    </div>
                </div>
            </div>


            <div class="row line">

                <div class="col-3 pe-0">
                    <div class="about wow animate__animated animate__fadeInLeft">
                        <div>

                            <div class="img">
                                <img src="images/img1.jpg" class="img-fluid" alt="image 1" height="10%" width="500px">
                            </div>
                            <div class="mission text-white">
                                <h5 class="mb-3">OUR MISSION</h5>
                                <P>Empowering musicians with easy access to high-quality instruments.</P>
                            </div>
                        </div>


                        <div>

                            <div class="img">
                                <img src="images/img2.jpg" class="img-fluid" alt="image 1">
                            </div>
                            <div class="mission text-white">
                                <h5 class="mb-3">OUR VISION</h5>
                                <P>To inspire a world where everyone can make music.</P>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="col-1 arrowLines pe-4 ps-0 wow animate__animated animate__fadeIn">
                    <div class="d-flex align-items-center flex-column arrows">
                        <div class="arrows-right ms-5 d-inline">→</div>
                        <div class="arrows-left d-inline">←</div>
                    </div>

                </div>

                <div class="col-lg-7">
                    <div id="bookmark" class="about-us ps-lg-5 wow animate__animated animate__fadeInRight">

                        <div>

                            <h1 class="mb-0">ABOUT US</h1>

                        </div>

                        <div class="para">

                            <p class="mb-4">
                                Welcome to Rent a Sound, your premier destination for renting high-quality musical instruments. With a passion for music and a commitment to customer satisfaction, we offer a wide selection of guitars, keyboards, and drums for musicians of all levels.

</p>
                            <p>
                                At Rent a Sound, we understand that every musician is unique, which is why we strive to provide a diverse range of instruments to suit your individual needs. Whether you're a beginner looking to explore the world of music or a seasoned professional in need of top-notch gear, we've got you covered.

Our rental process is simple and convenient, allowing you to focus on what matters most – making music. With flexible rental periods and competitive rates, Rent a Sound makes it easy to access the instruments you need, when you need them.
                            </p>
                        </div>
                    </div>
                </div>

            </div>


            <div class="row justify-content-sm-start justify-content-center">
                <div class="col-5 col-sm-3 col-md-2 col-xxl-1 px-0 offset-lg-3 offset-sm-1">
                    <div class="d-grid read_more  wow animate__animated animate__fadeInLeftBig">
                        <a class="text-decoration-none" href="C:\Users\Lenovo\Desktop\Car-Rental-Website-main\navOptions\About Us.html"><button type="button" class="btn">READ
                                MORE</button></a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- SECTION 2 -->

    <section id="section2">

        <div class="container-fluid">
            <div class="row about_header wow animate__animated animate__fadeInUp">
                <div class="col-12">
                    <div class="section_title">
                        <h2 class="mb-0">RENTAL SERVICES</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row align-items-center position-relative">

                <div class="img-wrapper position-absolute">
                    <img src="pngs/png9.png" class="img-fluid">

                </div>
                <div class="col-12 wow animate__animated animate__fadeInUp">

                    <div class="reviews-slider slider-nav">
                        <div class="sin-testiImage">
                            <img src="pngs/png7.png" alt="">
                        </div>
                        <div class="sin-testiImage">
                            <img src="pngs/png8.png" height="400px" width="500px">
                        </div>
                        <div class="sin-testiImage">
                            <img src="pngs/pngxx.png">
                        </div>

                        <div class="sin-testiImage">
                            <img src="pngs/png6.png">
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6">
                            <div class="words-slider position-relative d-flex justify-content-center">
                                <div class="name-slide">
                                    <p>Guitars</p>
                                </div>
                                <div class="name-slide">
                                    <p>Drums</p>
                                </div>
                                <div class="name-slide">
                                    <p>Accessories</p>
                                </div>
                                <div class="name-slide">
                                    <p>Keyboard</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="row justify-content-center ps-4 ps-sm-0">
                    <div class="col-sm-8 col-md-6 col-lg-5 col-xl-4">
                        <div class="slider-for reviews-text-slider">
                            <div class="sin-testiText text-center">

                                <p>Experience the joy of music with our easy and affordable guitar rental service. Choose from our wide selection of high-quality guitars, perfect for beginners and seasoned players alike. 
                                </p>
                                <div class="per-day d-flex align-items-center justify-content-around">
                                    <div>

                                        <h6><span>STARTING</span></h6>
                                    </div>
                                    <div class="dollar">

                                        <h6>₹100/Day</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="sin-testiText">

                                <p>Unlock your musical talent with our hassle-free keyboard rental service. Whether you're just starting or a seasoned pro, renting with us is easy, affordable, and convenient. 
                                </p>
                                <div class="per-day d-flex align-items-center justify-content-around">

                                    <div>

                                        <h6><span>STARTING</span></h6>
                                    </div>
                                    <div class="dollar">

                                        <h6>₹300/Day</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="sin-testiText">

                                <p>Discover the beat within you with our convenient drum rental service. Whether you're a beginner or a seasoned pro, renting drums with us is simple, affordable, and hassle-free.
                                </p>
                                <div class="per-day d-flex align-items-center justify-content-around">
                                    <div>

                                        <h6><span>STARTING</span></h6>
                                    </div>
                                    <div class="dollar">

                                        <h6>₹150/Day</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="sin-testiText">

                                <p>It's been a blast learning some new tunes. The sound quality is great, and the keys feel really nice to play. 
                                </p>
                                <div class="per-day d-flex align-items-center justify-content-around">
                                    <div>
                                        <h6><span>STARTING</span></h6>
                                    </div>
                                    <div class="dollar">

                                        <h6>₹200/Day</h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-8 col-sm-5 col-md-4 col-lg-3 col-xl-2">
                        <div class="rent_now">
                            <p class="mb-0 fw-bold"><a href="./navOptions/plans.html" style="text-decoration: none; color: white;">
                                SEE OUR PLANS</a>
                            </p>
                            <div class="rent-wrap">
                                <img src="pngs/png11.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-8 col-sm-5 col-md-4 col-lg-3 col-xl-2">
                        <div class="rent_now">
                            <p class="mb-0 fw-bold"><a href="./navOptions/PrivacyPolicy.html" style="text-decoration: none; color: white;">
                                PRIVACY POLICY</a>
                            </p>
                            <div class="rent-wrap">
                                <img src="pngs/png11.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-8 col-sm-5 col-md-4 col-lg-3 col-xl-2">
                        <div class="rent_now">
                            <p class="mb-0 fw-bold"><a href="./navOptions/Rules&Regulations.html" style="text-decoration: none; color: white;">
                                RULES AND REGULATIONS</a>
                            </p>
                            <div class="rent-wrap">
                                <img src="pngs/png11.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </section>

    <!-- SECTION 3 -->

    <section id="section3">

        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-5 col-md-4 px-0">
                    <div class="booking_now d-flex align-items-center position-relative">

                        <h1 class="mb-0">FEEDBACK</h1>
                        <div class="position-absolute racer wow animate__animated animate__zoomIn">
                            <img src="pngs/png10.png" alt="" height="600px" width="800px">
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-md-8 col-sm-10 offset-sm-1 offset-md-0">

                    <div class="form">

                        <h2>FEEDBACK</h2>

                        <div class="form_page">
                            <form action="/action_page.php">
                                <div class="row gap-xxl-5 mb-4 gap-2">
                                    <div class="col-lg mb-4 mb-lg-0">
                                        <input type="text" class="form-control" placeholder="Your Name">
                                    </div>
                                    <div class="col-lg">
                                        <input type="tel" class="form-control" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="row gap-xxl-5 mb-4 gap-2">
                                    <div class="col-lg mb-4 mb-lg-0">
                                        <input type="datetime" class="form-control" placeholder="Pick-up Date">
                                    </div>
                                    <div class="col-lg">
                                        <input type="datetime" class="form-control" placeholder="Return Date">
                                    </div>
                                </div>
                                <div class="mb-5"><textarea class="form-control" rows="10" id="comment"
                                        placeholder="Your Message" name="text"></textarea></div>

                                <div class="book-your-ride">
                                    <button type="button" class="btn">Submit Your Feedback</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 4 -->

    <section id="section4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 ps-md-0 wow animate__animated animate__lightSpeedInLeft">

                    <div class="text-center mb-lg-5 mb-3">

                        <h1>WHY CHOSE US</h1>
                    </div>
                    <div>
                        <img src="images/img2.jpg" class="img-fluid">
                    </div>
                    <div class="chose">

                        <h3 class="text-uppercase">Quality Instruments</h3>
                        <p class="mb-lg-4 mb-2">We offer a range of high-quality guitars, keyboards, and drums from top brands, ensuring you get the best sound for your music.</p>

                        <button class="hover-border-5 btn-3 btn">
                            <span>READ MORE</span>
                        </button>
                    </div>
                </div>
                <div class="col-xl-5 col-md-6 pe-md-0 pe-xl-2 wow animate__animated animate__lightSpeedInRight">
                    <div class="text-md-start text-center">
                        <img src="images/img3.jpg" class="img-fluid">
                    </div>
                    <div class="chose2">

                        <h3 class="text-uppercase">Hassle-Free Rentals</h3>
                        <p class="mb-lg-4 mb-2">Our straightforward rental process and flexible options make it easy for you to access the instruments you need without any hassle.</p>
                        <button class="hover-border-5 btn-3 btn">
                            <span>READ MORE</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- SECTION 5 -->

    <section id="section5">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="text-center testimonial">
                        <h1>TESTIMONIAL</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row align-items-center justify-content-center">
                <div class="col-12">

                    <div class="cascade-slider">.

                        <div class="whole-box position-relative">

                            <div class="first-box">

                                <div class="d-flex mb-4 gap-5">
                                    <div><img src="pngs/png12.jpg" height="150px" width="150px" class="img-fluid"></div>
                                    <i class="fa-solid fa-quote-left"></i>

                                </div>

                                <div>
                                    <h3>Aayan Ghazi</h3>
                                    <h5>Customer</h5>
                                </div>

                            </div>
                            <div class="second-box">
                                <div>
                                    <div class="text-center mb-4"><img src="pngs/png12.jpg" height="1px" width="1px" class="img-fluid"></div>
                                    <h2>Stage-Ready Performance</h2>
                                    <p>Rent a Sound made my gig unforgettable! The quality of the instruments was exceptional, and the rental process was so easy. I was able to focus on my performance without worrying about my gear. I'll definitely be using Rent a Sound for all my future gigs!</p>
                                    <div
                                        class="d-flex justify-content-sm-start justify-content-center align-items-center gap-3">

                                        <span>
                                            <p>followers</p>
                                        </span>
                                        <p><span>(5.7k)</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="whole-box position-relative">
                            <div class="first-box ">
                                <div class="d-flex justify-content-around mb-4 gap-5">
                                    <div><img src="pngs/png14.png" class="img-fluid" height="100px" width="100px"></div>

                                    <i class="fa-solid fa-quote-left"></i>

                                </div>
                                <div>
                                    <h3>Utkarsh Chaudhary</h3>
                                    <h5>Customer</h5>
                                </div>

                            </div>
                            <div class="second-box">
                                <div>
                                    <div class="text-center mb-4"><img src="pngs/png14.png" class="img-fluid"></div>
                                    <h2>Studio-Ready Sound</h2>
                                    <p>"Recording with Rent a Sound was a breeze! The keyboard I rented was in perfect condition and sounded amazing. The team at Rent a Sound was also incredibly helpful in assisting me with choosing the right keyboard for my recording session. I highly recommend Rent a Sound to any musician looking for top-quality instruments."</p>
                                    <div
                                        class="d-flex justify-content-sm-start justify-content-center align-items-center gap-3">

                                        <span>
                                            <p>followers</p>
                                        </span>
                                        <p><span>(4.9k)</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="whole-box position-relative">
                            <div class="first-box ">
                                <div class="d-flex justify-content-around mb-4 gap-5">
                                    <div><img src="pngs/png16.png" class="img-fluid" height="100px" width="100px"></div>
                                    <i class="fa-solid fa-quote-left"></i>

                                </div>
                                <div>
                                    <h3>Parthiv Issar</h3>
                                    <h5>Customer</h5>
                                </div>

                            </div>
                            <div class="second-box">
                                <div>
                                    <div class="text-center mb-4"><img src="pngs/png16.jpg" class="img-fluid"></div>
                                    <h2>Beats On Demand</h2>
                                    <p>"Drumming up fun with Rent a Sound! I'm a drum enthusiast, and Rent a Sound has one of the best selections of drum kits I've seen. The rental process is so convenient, and the drums are always in great condition. Whether I need a kit for a gig or just to practice at home, Rent a Sound is my go-to!"</p>
                                    <div
                                        class="d-flex justify-content-sm-start justify-content-center align-items-center gap-3">

                                        <span>
                                            <p>followers</p>
                                        </span>
                                        <p><span>(3.4k)</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="whole-box position-relative">
                            <div class="first-box">
                                <div class="d-flex justify-content-around mb-4 gap-5">
                                    <div><img src="pngs/png13.png" class="img-fluid" height="100px" width="100px"></div>
                                    <i class="fa-solid fa-quote-left"></i>

                                </div>
                                <div>
                                    <h3>Abrez Rizvi</h3>
                                    <h5>Customer</h5>
                                </div>

                            </div>
                            <div class="second-box">
                                <div>
                                    <div class="text-center mb-4"><img src="pngs/png13.png" class="img-fluid"></div>
                                    <h2>Rock Solid Service</h2>
                                    <p>"Rent a Sound rocks! Not only do they have top-notch instruments, but their customer service is also excellent. The team is friendly, knowledgeable, and always willing to help. I've recommended Rent a Sound to all my musician friends, and they've all had great experiences too. Renting from Rent a Sound is always a pleasure!"</p>
                                    <div
                                        class="d-flex justify-content-sm-start justify-content-center align-items-center gap-3">

                                        <span>
                                            <p>followers</p>
                                        </span>
                                        <p><span>(5.1k)</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>


                </div>
            </div>

        </div>

    </section>

    <!-- FOOTER -->

    <footer id="footer">

        <div class="container-fluid">

            <div class="row align-items-center">

                <div class="col-12 col-lg-11 col-xl-10">
                    <div class="row navFoot align-items-center">

                        <div class="col-sm-4 col-lg-5 px-0">
                            <div class="footer-logo text-center">
                                <img src="pngs/png15.png" alt="logo" height="80px" width="80px">
                            </div>

                        </div>
                        <div class="col-sm-8 col-lg-7 px-0 navLine">
                            <div class="nav_bar d-flex justify-content-center align-items-center">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php">HOME</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="./navOptions/About Us.html">ABOUT US</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="./navOptions/Rental Services.html">RENTAL SERVICES</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="./navOptions/Testimonial.html">TESTIMONIAL</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="./navOptions/Contact Us.html">CONTACT US</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-1 px-0">
                    <div class="nav_icon">

                        <ul class="nav flex-lg-column justify-content-center align-items-center">
                            <li class="nav-item">
                                <a class="nav-link linkedin" href="https://www.linkedin.in"><i class="fa-brands fa-linkedin-in"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link instagram" href="https://www.instagram.com"><i class="fa-brands fa-instagram"></i></a>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link twitter" href="#"><i class="fa-brands fa-twitter"></i></a>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link facebook ms-0" href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            </li>
                        </ul>

                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-lg-5">
                    <div class="touch">
                        <h1>GET IN TOUCH</h1>
                        <h2 class="display-5 my-2"></h2>
                        <p>beyosman770@gmail.com</p>

                        <a href="#" class="btn-1 text-white">
                            <svg>
                                <rect x="0" y="0" fill="none" width="100%" height="100%" />
                            </svg>
                            Request With Online Form
                        </a>

                    </div>
                </div>

                <div class="col-lg-7 col-xl-6 news">

                    <div class="subscribe d-flex justify-content-center flex-column">

                        <h1 class="mb-3">SUBSCRIBE TO OUR NEWSLETTER</h1>
                        <div class="input">
                            <input type="email" class="form-control" placeholder="Email Address...">
                            <button type="button" class="btn" style="text-decoration: none;"><a style="text-decoration: none; color: white;">Go</a></button>

                        </div>
                    </div>
                </div>

            </div>

            <div class="row mt-5">

                <div class="col-lg-4 col-xl-3 offset-lg-8">
                    <div class="copyright text-center text-lg-end">
                        <p>
                            ©2024 Rent A Sound, All Rights Reserved.
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </footer>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js "
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin=" anonymous " referrerpolicy="no-referrer "></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js "
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz "
        crossorigin="anonymous "></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.0/slick.min.js"
        integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

    <script src="JS/wow.min.js "></script>

    <script src="js/java.js"></script>
    <audio controls autoplay>
        <source src="./SleepAway.mp3">
      </audio>
</body>

</html>
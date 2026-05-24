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
                                <a class="nav-link " href="index.php">HOME</a>
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
                                <a class="active nav-link" href="http://localhost/website/rent.php">RENT OUT</a>
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
                        <a href=""><button type="button" class="btn" src="./navoptions/yourins.html">YOUR INSTRUMENT</button></a>
                    </div>
                    <div class="wrapper">
                        <div class="button-wrapper">
                            <a href="./navOptions/Contact Us.html"><button type="button">CONTACT US</button></a>
                            <div class="btn2"></div>
                        </div>
                        <div class="button-wrapper">
                            <a href="./navoptions/yourins.html"><button type="button">YOUR INSTRUMENT</button></a>
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
                        <div class="col-lg-11 col-12 pe-0">
                            <div class="overflow-hidden">
                                <div class="justify-content-center align-items-center d-flex gap-5">

                                    <h1 class="ml15">
                                        <span class="word text-center">RENT OUT</span>

                                    </h1>
                                </div>

                                <div class="ml25 text-center">
                                    <p class="word">HELPING OTHERS DISCOVER THEIR NEXT SYMPHONY</p>
                                </div>

                                <div class="fade text-center">
                                    <a href="./navoptions/uploadsuccessful.html"><img src="pngs/png2.png" class="img-fluid" alt="png2" height="1200px" width="1200px"></a>
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

    <section id="section3">

        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-5 col-md-4 px-0">
                    <div class="booking_now d-flex align-items-center position-relative">

                        <h1 class="mb-0">Rent Your Instrument</h1>
                        <div class="position-absolute racer wow animate_animated animate_zoomIn">
                            <img src="pngs/png10.png" alt="" height="600px" width="800px">
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-md-8 col-sm-10 offset-sm-1 offset-md-0">

                    <div class="form">

                        <h2>Rent Your Instrument</h2>

                        <div class="form_page">
                        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" enctype="multipart/form-data">
                                <div class="row gap-xxl-5 mb-4 gap-2">
                                    <div class="col-lg mb-4 mb-lg-0">
                                        <input type="text" id="iname" name="iname" class="form-control" placeholder="Instrument Name">
                                    </div>
                                    <div class="col-lg">
                                        <input type="tel" id="pnumber" name="pnumber" class="form-control" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="row gap-xxl-5 mb-4 gap-2">
                                    <div class="col-lg mb-4 mb-lg-0">
                                        <input type="datetime" id="icondition" name="icondition" class="form-control" placeholder="Instrument Condition">
                                    </div>
                                    <div class="col-lg">
                                        <input type="datetime" id="price"  name="price" class="form-control" placeholder="Price">
                                    </div>
                                </div>
                                <div class="mb-5"><textarea class="form-control " rows="10" id="address" placeholder="Address" name="address"></textarea>
                                </div>
                                
                                    <label style="color:whitesmoke">Select Image File:</label>
                                    <input type="file" name="image" id="image">
                                    <input type="button" name="submit" value="Upload" onclick="alert('Your Image has been uploaded.')">

                                    <br>
                                <div class="book-your-ride">
                                    <button type="submit" class="btn" name="submit1">Submit</button>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
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
                            <button type="button" class="btn">SUBSCRIBE</button>
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

    <?php
$count = 0;
$count1 = 0;
if (isset($_POST['submit1'])){
    $iname = $_POST['iname'];
    $phone = $_POST['pnumber'];
    $icond = $_POST['icondition'];
    $price = $_POST['price'];
    $adres = $_POST['address'];

    if (empty($iname) || empty($phone) || empty($icond) || empty($price) || empty($adres)) {
        echo "<script>";
        echo "alert('Please fill in all the fields');";
        echo "</script>";
    } else {
        $conn = mysqli_connect("localhost", "root", "", "rentasound",4306);


        if (!$conn) {
            echo "<script>";
            echo "alert('Couldn't Connect to database')";
            echo "</script>";
            die("Failed to connect: " . mysqli_connect_error());
        } else {
            $select_e = $conn->prepare("SELECT * FROM rent WHERE PhoneNo = ?");
            $select_e->bind_param("s", $phone);
            $select_e->execute();
            $select_e_result = $select_e->get_result();
            $data_e = $select_e_result->fetch_all(MYSQLI_ASSOC);
            $select_u = $conn->prepare("SELECT * FROM rent WHERE Iname = ?");
            $select_u->bind_param("s", $iname);
            $select_u->execute();
            $select_u_result = $select_u->get_result();
            $data_u = $select_u_result->fetch_all(MYSQLI_ASSOC);
            if (!empty($data_e) || !empty($data_u)){
                echo "<script>";
                echo "alert('This PhoneNo or Instrument Name is already taken');";
                echo "</script>";
            } 
            else {
                $insert = $conn->prepare("INSERT INTO rent (Iname, PhoneNo, Icondition, Price, Address) VALUES (?, ?, ?, ?, ?)");
                $insert->bind_param("sssss", $iname, $phone, $icond, $price, $adres);
                if ($insert->execute()) {
                    $conn->commit();
                    echo "<script>";
                    echo "alert('Instrument Details Uploaded');";
                    echo "</script>";
                } else {
                    echo "<script>";
                    echo "alert('Error, Try again');";
                    echo "</script>";
                }
            }
        }
    }
}
?>
</body>
</html>
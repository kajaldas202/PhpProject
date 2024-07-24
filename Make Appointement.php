<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Kider - Preschool Website</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap" rel="stylesheet"> -->
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<style>
    h2{
        margin-left:500px;
    }
    .thirdcontainer{
        /* border:1px solid; */
        height:370px;
    }
    .rows{
        /* border:1px solid purple; */
        height:340px;
        display:flex;
    }
    .rows1,.rows2,.rows3{
        width: 460px;
        height:100%;
        /* border:1px solid yellow; */
        margin-left:6px;
        margin-right:6px;
        border-radius: 25px;

        }
        .rows1{
            background-color:#FF8835;
        }
        .rows2{
            background-color:#6EC1E4;
        }
        .rows3{
            background-color:#9b51e0;
        }
        .rows1 h1{
            margin-left:40px;
            text-decoration: underline;
        }
    .rows2 h1{
        margin-top:20px;
        margin-left:30px;
        text-decoration: underline;
    }
    .rows3 h1{
            margin-left:120px;
            text-decoration: underline;
        }
    h1{
        color:white;
    }
    .rows1 p,.rows2 p,.rows3 p{
        color:white;
        margin-left:20px;
    }
    .logo{
        /* border:1px solid; */
        width: 260px;
        /* margin-left:160px; */
    }
    .gallery{
        /* border:1px solid; */
        margin-right:10px;
    }
    .logo1{
        /* border:1px solid; */
        margin-left:10px;
    }
    .navbar-brand{
        /* border:1px solid; */
        width: 340px;
    }
    .text-primary i{
        margin-left:60px;
    }

</style>
<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
            <a href="index.html" class="navbar-brand">
                <h1 class="m-0 text-primary"><i class="fa fa-book-reader me-3"></i>Kider</h1>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">w
                <div class="navbar-nav mx-auto">
                <a href="demo.html" class="nav-item nav-link">Home</a>
                    <a href="about.php" class="nav-item nav-link">About Us</a>
                    <a href="class.php" class="nav-item nav-link">Class</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                        <a href="school Facilities.php" class="dropdown-item">School Facilities</a>
                            <a href="popular Teachers.php" class="dropdown-item">Popular Teachers</a>
                            <a href="Become A Teachers.php" class="dropdown-item">Become A Teachers</a>
                            <a href="Make Appointement.php" class="dropdown-item">Make Appointment</a>
                            <a href="Testimonial.php" class="dropdown-item">Testimonial</a>
                        </div>
                    </div>
                    <a href="contact.php" class="nav-item nav-link">Contact Us</a>
                </div>
                
            </div>
        </nav>
        <!-- Navbar End -->


        <!-- Page Header End -->
        <div class="container-xxl py-5 page-header position-relative mb-5">
            <div class="container py-5">
                <h1 class="display-2 text-white animated slideInDown mb-4">Appointment</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Appointment</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Appointment Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="bg-light rounded">
                    <div class="row g-0">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="h-100 d-flex flex-column justify-content-center p-5">
                                <h1 class="mb-4 text-dark">Make Appointment</h1>
                                <form method="post" action="connect.php">
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="gname" placeholder="Gurdian Name" name="gname">
                                                <label for="gname">Gurdian Name</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="email" class="form-control border-0" id="gmail" placeholder="Gurdian Email" name="gemail">
                                                <label for="gmail">Gurdian Email</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="cname" placeholder="Child Name" name="cname">
                                                <label for="cname">Child Name</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="cage" placeholder="Child Age" name="cage">
                                                <label for="cage">Child Age</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <textarea class="form-control border-0" placeholder="Leave a message here" id="message" style="height: 100px" name="message"></textarea>
                                                <label for="message">Message</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute w-100 h-100 rounded" src="img/appointment.jpg" style="object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Appointment End -->
        <h2>Admission Eligibility & Process</h2>
        <div class="container-xxl py-5">
            <div class="thirdcontainer">
                <div class="bg-light rounded">
                    <div class="row g-0">
                        <div class="col-lg-12 wow fadeIn" data-wow-delay="0.1s" style="min-height: 380px;">
                            <div class="position-relative h-100 mt-3">
                               <div class="rows border-primary">
                                <div class="rows1">
                                    <h1>Admission Eligibility</h1>
                                    <p>Play group: 2 to 3 years</p>
                                    <p>Nursery: 3 to 4 years</p>
                                    <p>Kidzo Junior: 4 to 5 years</p>
                                    <p>Kidzo Senior: 5 to 6 years</p>
                                    <p>Day Care: 9 months to 3 years</p>
                                </div>
                                <div class="rows2">
                                    <h1>Admission Procedure</h1>
                                    <p>Submission of Enquiry Form:</p>
                                    <p>Interaction with the Center Head</p>
                                    <p>Confirmation of Admission</p>
                                    <p>Admission Form Collection Payment of the Confirmation Fee and Form Submission </p>
                                </div>
                                <div class="rows3">
                                    <h1>Documents</h1>
                                    <p>Completed Application Form Certified true copy of the child's birth certificate issued by the relevant</p>
                                    <p>Municipal Corporation or Passport copy for date of birth proof<p>
                                    <p>Five passport size colour photographs of the child</p>
                                    <p>Three stamp size colour photographs of the child</p>
                                    <p>Three passport size colour photographs of father and mother along with ld proof and Address proof.</p>
                                </div>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                    <a href="index.html" class="navbar-brand">
                    <h1 class="m-0 text-primary"><i class="fa fa-book-reader me-3"></i>Kider</h1>
                    </a>
                    At Kider Preschool,Our dedicated team of experienced educators 
                    creates a warm and stimulating environment where children can explore, discover, and grow.
                    Join us at Kider Preschool,
                     where the journey of lifelong learning begins with joy and excitement! 
                    </div>
                    <div class="col-lg-3 col-md-6 logo1">  
                        <h3 class="text-white mb-4">Get In Touch</h3>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Bandra West,
                            Mumbai, Maharashtra 400050,
                            India</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+91 40 2355 4389</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>kider@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 logo">
                        <h3 class="text-white mb-4">Quick Links</h3>
                        <a class="btn btn-link text-white-50" href="">About Us</a>
                        <a class="btn btn-link text-white-50" href="">Contact Us</a>
                        <a class="btn btn-link text-white-50" href="">Our Services</a>
                        <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                        <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6 gallery">
                        <h3 class="text-white mb-4">Photo Gallery</h3>
                        <div class="row g-2 pt-2">
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="https://tse1.mm.bing.net/th?id=OIP.bB9WJk3ovhN1tO7S7Re7ggHaE8&pid=Api&P=0&h=180" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="https://www.motherspridepreschool.com/images/photo-gallery/co-curricular-activities/best-of-co-curricular-activities/best-of-co-curricular-activities-0015.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="https://media.istockphoto.com/id/1151224308/photo/teachers-with-children-learning-at-preschool.jpg?s=612x612&w=0&k=20&c=8DTKc4VYvTuPddcrgoCYBH9hjKQdV5qzkgg0nOEhuoo=" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="https://www.shutterstock.com/image-photo/cute-little-indian-asian-girl-260nw-1538555270.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="https://admin.mykinderbridge.com/uploads/gdfgdgdgdgdgdgf_4ccd519eed.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="https://www.educationworld.in/wp-content/uploads/2020/01/PRESCHOOL.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-3 col-md-6">
                        <h3 class="text-white mb-4">Newsletter</h3>
                        <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Kider</a>, All Right Reserved. 
							Designed By Kider</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
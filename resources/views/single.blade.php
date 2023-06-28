<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>STEM ZONE | Courses</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('img/favicon.ico')}}" rel="icon">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('img/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('img/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('img/site.webmanifest')}}">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Roboto:wght@400;500;700&display=swap"
          rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>

<body>
<div class="container-xxl bg-white p-0">
    <!-- Spinner Start -->
    <div id="spinner"
         class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar & Hero Start -->
    <div class="container-xxl position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light m-auto text-center px-4 px-lg-5 py-3 py-lg-0">
            <a href="{{route('home')}}" class="navbar-brand p-0 px-5">
                <!-- <h1 class="m-0">STEM Zone<span class="fs-5"></span></h1> -->
                <img class="px-5" src="{{asset('img/Asset 4 (1).png')}}" width="" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="https://stemzone.online" class="nav-item nav-link">Home</a>
                    <a href="{{route("about")}}" class="nav-item nav-link">About</a>
                    <a href="{{route("courses")}}" class="nav-item nav-link active">Courses</a>
                    <a href="{{route("events")}}" class="nav-item nav-link">Camp</a>
                    <a href="{{route("team")}}" class="nav-item nav-link">Our Team</a>
                    <a href="{{route("contact")}}" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </nav>

        <div class="container-xxl py-5 bg-primary hero-header mb-5">
            <div class="container my-5 py-5 px-lg-5">
                <div class="row g-5 py-5">
                    <div class="col-12 text-center">
                        <h1 class="text-white animated zoomIn">{{$course->course}}</h1>
                        <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a class="text-white"
                                                               href="https://stemzone.online">Home</a></li>
                                <li class="breadcrumb-item"><a class="text-white"
                                                               href="{{route("courses")}}">Courses</a>
                                </li>
                                <li class="breadcrumb-item text-white active"
                                    aria-current="page">{{$course->course}}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="row">
                <div class="col-lg-8">
                    <div class="wow fadeInLeft">
                        <img class="img-fluid rounded" src="{{asset($course->image_2)}}" alt="">
                    </div>
                    <div class="">
                        <div class="section-title position-relative mb-2 pt-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                            <h3>COURSE INFORMATION</h3>
                        </div>
                        <div class="content wow fadeInUp my-3" data-wow-delay="0.2s">
                            {{$course->long_desc}}
                        </div>
                    </div>
                    @if($course->course === "Lego Robotics")

                        <div class="">
                            <div class="section-title position-relative mb-2 pt-5 pb-2 wow fadeInUp"
                                 data-wow-delay="0.1s">
                                <h3>COURSE CONTENT</h3>
                            </div>
                            <div class="content position-relative mt-5 pb-2 wow fadeInUp" data-wow-delay="0.3s">
                                <h6 class="position-relative text-primary ps-4">Beginner</h6>
                                <div class="px-5">
                                    <p>These lessons will teach you to move and turn the robot, use the sensors,
                                        and use loops and switches.</p>
                                </div>
                            </div>
                            <div class="content position-relative pb-2 wow fadeInUp" data-wow-delay="0.5s">
                                <h6 class="position-relative text-primary ps-4">Intermediate</h6>
                                <div class="px-5">
                                    <p>These lessons introduce more advanced programming techniques such
                                        as My Blocks, variables, parallel beams, calibration and math/logic blocks.</p>
                                </div>
                            </div>
                            <div class="content position-relative pb-2 wow fadeInUp" data-wow-delay="0.7s">
                                <h6 class="position-relative text-primary ps-4">Advanced</h6>
                                <div class="px-5">
                                    <p>These lessons assume that you are comfortable using all the blocks in the
                                        EV3 environment. The advanced lessons teach you to more sophisticated programs
                                        such as menu systems, proportional line followers, squaring on lines and stall
                                        detection techniques.</p>
                                </div>
                            </div>
                            <div class="content position-relative pb-2 wow fadeInUp" data-wow-delay="0.9s">
                                <h6 class="position-relative text-primary ps-4">Beyond</h6>
                                <div class="px-5">
                                    <p>These lessons are for students who have completed all our other lessons and
                                        interested in learning about third-party sensors and using the EV3 with other
                                        platforms such as the Raspberry Pi.</p>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if($course->course === "Arduino")
                        <div class="">
                            <div class="section-title position-relative mb-2 pt-5 pb-2 wow fadeInUp"
                                 data-wow-delay="0.1s">
                                <h3>COURSE CONTENT</h3>
                            </div>
                            <div class="content position-relative mt-5 pb-2 wow fadeInUp" data-wow-delay="0.3s">
                                <h6 class="position-relative text-primary ps-4">Beginner</h6>
                                <div class="px-5">
                                    <p>This level focuses on teaching kids the basics of electricity and
                                        how to build an electric circuit with proteus software. It can be
                                        an introduction about controllers like Arduino and its
                                        peripherals.</p>
                                </div>
                            </div>
                            <div class="content position-relative pb-2 wow fadeInUp" data-wow-delay="0.5s">
                                <h6 class="position-relative text-primary ps-4">Intermediate</h6>
                                <div class="px-5">
                                    <p>This level is an application for electronic components on the first
                                        level. it Focuses on Arduino C syntax, sensors, and how to
                                        connect them with Arduino and coding.</p>
                                </div>
                            </div>
                            <div class="content position-relative pb-2 wow fadeInUp" data-wow-delay="0.7s">
                                <h6 class="position-relative text-primary ps-4">Advanced</h6>
                                <div class="px-5">
                                    <p>In this course, kid will learn different types of motors, drivers,
                                        and control motors with PWM. Then build integrated systems
                                        using sensors, motors, and Arduino.</p>
                                </div>
                            </div>
                            <div class="content position-relative pb-2 wow fadeInUp" data-wow-delay="0.9s">
                                <h6 class="position-relative text-primary ps-4">Beyond</h6>
                                <div class="px-5">
                                    <p>These lessons are for students who have completed all our other lessons and
                                        interested in learning about third-party sensors and using the EV3 with other
                                        platforms such as the Raspberry Pi.</p>
                                </div>
                            </div>
                        </div>
                    @endif

                    <div class="row col-lg-4 wow fadeInUp d-none d-md-block" data-wow-delay="0.9s">
                        <a href="{{route("payment.form",$course->id)}}">
                            <button class="btn btn-primary rounded py-3 px-5">
                                Enroll the course
                            </button>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 wow fadeInRight">
                    <div class="row right-contents">
                        <ul>
                            <li>
                                <a class="justify-content-between d-flex">
                                    <p>Level</p>
                                    <span class="or">{{$course->level}}
                                        </span>
                                </a>
                            </li>
                            <li>
                                <a class="justify-content-between d-flex">
                                    <p>Weekly Hours </p>
                                    <span>{{$course->weeks_hours}} hours</span>
                                </a>
                            </li>
                            <li>
                                <a class="justify-content-between d-flex">
                                    <p>Age </p>
                                    <span>{{$course->age}}</span>
                                </a>
                            </li>
                            <li>
                                <a class="justify-content-between d-flex">
                                    <p>Language </p>
                                    <span>{{$course->language}}</span>
                                </a>
                            </li>
                            <li>
                                <a class="justify-content-between d-flex">
                                    <p>Course Fee </p>
                                    <span>EGP{{$course->price}}.00</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="row mx-2">
                        <a href="{{route("payment.form",$course->id)}}">
                            <button class="btn btn-primary rounded py-3 px-5">
                                Enroll the course
                            </button>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-primary text-light footer mt-5  wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-2 px-lg-5">
            <div class="row g-5 m-auto">

                <div class="col-md-6 col-lg-5">
                    <h5 class="text-white mb-4">Our Vision</h5>
                    <p class="">Empower kids with coding, No matter what kind of employment a young person wants
                        to
                        pursue, they
                        all need to learn how to code. Coding is a new form of literacy. Our lessons turn
                        tech-addicted
                        children into inventive, engaged creators who express themselves through coding.</p>
                </div>
                <div class="col-md-6 col-lg-3 ">
                    <h5 class="text-white mb-4">Popular Link</h5>
                    <a class="btn btn-link" href="{{route("about")}}">About Us</a>
                    <a class="btn btn-link" href="{{route("contact")}}">Contact Us</a>
                    <a class="btn btn-link" href=".{{route("courses")}}">Courses</a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <h5 class="text-white mb-4">Get In Touch</h5>
                    <p class="fs-6"><i class="fa fa-map-marker-alt me-3"></i>74 Housny Mobarak, Sheraton Al
                        Matar,
                        El Nozha, Cairo
                        Governorate, Egypt</p>
                    <p><i class="fa fa-phone-alt me-3"></i>+20 109 383 8808</p>
                    <p><i class="fa fa-phone-alt me-3"></i>+20 112 571 2666</p>
                    <p><i class="fa fa-envelope me-3"></i><a class="mail" href="mailto:info@stemzone.online">info@stemzone.online</a>
                    </p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social"
                           href="https://api.whatsapp.com/message/6BRILOY7YHMTJ1?autoload=1&app_absent=0"><i
                                class="fab fa-whatsapp"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/Stemzone2022"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social"
                           href="https://instagram.com/stem_zone?igshid=YmMyMTA2M2Y"><i
                                class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social"
                           href="https://www.linkedin.com/company/stem-zone/"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

            </div>
        </div>
        <div class="container px-lg-5">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">STEM Zone</a>, All Right Reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset("lib/wow/wow.min.js")}}"></script>
<script src="{{asset('lib/easing/easing.min.js')}}"></script>
<script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('lib/isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('lib/lightbox/js/lightbox.min.js')}}"></script>

<!-- Template Javascript -->
<script src="{{asset('js/main.js')}}"></script>
<!-- Backend -->
<script src="{{asset('js/payment.js')}}"></script>
</body>

</html>
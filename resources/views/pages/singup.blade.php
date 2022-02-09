<!doctype html>
<html lang="en">


<!-- Mirrored from minia.php.themesbrand.com/auth-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Oct 2021 12:58:27 GMT -->

<head>

    <meta charset="utf-8" />
    <title>Sing Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <!--<link rel="shortcut icon" href="{{-- asset('assets/images/favicon.ico') --}}">-->
    <link rel="icon" href="wp-content/uploads/sites/4/2019/09/cropped-Runcognition-O-Logo-1-32x32.png" sizes="32x32">
    <link rel="icon" href="wp-content/uploads/sites/4/2019/09/cropped-Runcognition-O-Logo-1-192x192.png"
        sizes="192x192">
    <link rel="apple-touch-icon" href="wp-content/uploads/sites/4/2019/09/cropped-Runcognition-O-Logo-1-180x180.png">
    <!-- preloader css -->
    <link rel="stylesheet" href="{{ asset('assets/css/preloader.min.css" type="text/css') }}" />

    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />


    <style>
        .select2-container--bootstrap .select2-selection--multiple .select2-search--inline .select2-search__field {
            background: 0 0;
            padding: 0 !important;
            height: -webkit-calc(2.25rem + 2px);
            height: calc(2.25rem + 2px);
            line-height: 1.5;
            margin: -1px 0;
            min-width: 5em;
        }

    </style>
    <link href="{{ asset('assets/plugin/Select2/select2.min.css') }}" rel="stylesheet" />
</head>

<body>

    <!-- <body data-layout="horizontal"> -->
    <div class="auth-page">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-xxl-3 col-lg-4 col-md-5">
                    <div class="auth-full-page-content d-flex p-sm-5 p-4">
                        <div class="w-100">
                            <div class="d-flex flex-column h-100">
                                <div class="mb-4 mb-md-5 text-center">
                                    <a href="{{ route('index') }}"" class="d-block auth-logo">
                                        <img src="{{ asset('assets/images/logo-sm3.png') }}" alt="" height="90%"
                                            width="300px">
                                    </a>
                                </div>
                                <div class="auth-content my-auto">
                                    <div class="text-center">
                                        <h5 class="mb-0">Register Account</h5>

                                    </div>
                                    <form class="needs-validation mt-4 pt-2" action="{{ route('singup.store') }}"
                                        method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="Name" required>
                                            <div class="invalid-feedback">
                                                Please Name
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Company</label>
                                            <input class="form-control" type="text" name="company" id="company"
                                                placeholder="Company Name" required>
                                            <div class="invalid-feedback">
                                                Please Company Name
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="name" class="form-label">Telephone</label>

                                            <input type="phone" class="form-control" id="phone" name="phone"
                                                placeholder="+90 (000) 000-0000">
                                            <div class="invalid-feedback">
                                                Please Phone
                                            </div>
                                        </div>


                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="Enter Email" required>
                                            <div class="invalid-feedback">
                                                Please Enter Username
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="userpassword" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="password" name="password"
                                                placeholder="Enter password" required>
                                            <div class="invalid-feedback">
                                                Please Enter Password
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <button class="btn btn-primary w-100 waves-effect waves-light"
                                                type="submit">

                                                Register

                                            </button>
                                        </div>
                                    </form>


                                </div>
                                <div class="mt-4 mt-md-5 text-center">
                                    <script>
                                        document.write(new Date().getFullYear())
                                    </script> Radio Monitor Network </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end auth full page content -->
                </div>
                <!-- end col -->
                <div class="col-xxl-9 col-lg-8 col-md-7">
                    <div class="auth-bg pt-md-5 p-4 d-flex">
                        <div class="bg-overlay bg-primary"></div>
                        <ul class="bg-bubbles">
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                        <!-- end bubble effect -->
                        <div class="row justify-content-center align-items-center">
                            <div class="col-xl-7">
                                <div class="p-0 p-sm-4 px-xl-0">
                                    <div id="reviewcarouselIndicators" class="carousel slide" data-bs-ride="carousel">
                                        <div
                                            class="carousel-indicators carousel-indicators-rounded justify-content-start ms-0 mb-0">
                                            <button type="button" data-bs-target="#reviewcarouselIndicators"
                                                data-bs-slide-to="0" class="active" aria-current="true"
                                                aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#reviewcarouselIndicators"
                                                data-bs-slide-to="1" aria-label="Slide 2"></button>
                                            <button type="button" data-bs-target="#reviewcarouselIndicators"
                                                data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        </div>
                                        <!-- end carouselIndicators -->
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="testi-contain text-white">
                                                    <i class="bx bxs-quote-alt-left text-success display-6"></i>

                                                    <h4 class="mt-4 fw-medium lh-base text-white">“I feel confident
                                                        imposing change
                                                        on myself. It's a lot more progressing fun than looking back.
                                                        That's why
                                                        I ultricies enim
                                                        at malesuada nibh diam on tortor neaded to throw curve balls.”
                                                    </h4>
                                                    <div class="mt-4 pt-3 pb-5">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-shrink-0">
                                                                <img src="{{ asset('assets/images/users/avatar-1.jpg') }}"
                                                                    class="avatar-md img-fluid rounded-circle"
                                                                    alt="...">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3 mb-4">
                                                                <h5 class="font-size-18 text-white">Richard Drews
                                                                </h5>
                                                                <p class="mb-0 text-white-50">Web Designer</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="carousel-item">
                                                <div class="testi-contain text-white">
                                                    <i class="bx bxs-quote-alt-left text-success display-6"></i>

                                                    <h4 class="mt-4 fw-medium lh-base text-white">“Our task must be to
                                                        free ourselves by widening our circle of compassion to embrace
                                                        all living
                                                        creatures and
                                                        the whole of quis consectetur nunc sit amet semper justo. nature
                                                        and its beauty.”</h4>
                                                    <div class="mt-4 pt-3 pb-5">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-shrink-0">
                                                                <img src="{{ asset('assets/images/users/avatar-2.jpg') }}"
                                                                    class="avatar-md img-fluid rounded-circle"
                                                                    alt="...">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3 mb-4">
                                                                <h5 class="font-size-18 text-white">Rosanna French
                                                                </h5>
                                                                <p class="mb-0 text-white-50">Web Developer</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="carousel-item">
                                                <div class="testi-contain text-white">
                                                    <i class="bx bxs-quote-alt-left text-success display-6"></i>

                                                    <h4 class="mt-4 fw-medium lh-base text-white">“I've learned that
                                                        people will forget what you said, people will forget what you
                                                        did,
                                                        but people will never forget
                                                        how donec in efficitur lectus, nec lobortis metus you made them
                                                        feel.”</h4>
                                                    <div class="mt-4 pt-3 pb-5">
                                                        <div class="d-flex align-items-start">
                                                            <img src={{ asset('assets/images/users/avatar-3.jpg') }}
                                                                class="avatar-md img-fluid rounded-circle" alt="...">
                                                            <div class="flex-1 ms-3 mb-4">
                                                                <h5 class="font-size-18 text-white">Ilse R. Eaton</h5>
                                                                <p class="mb-0 text-white-50">Manager
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end carousel-inner -->
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>


    <!-- JAVASCRIPT -->
    <script src={{ asset('assets/libs/jquery/jquery.min.js') }}></script>
    <script src={{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}></script>
    <script src={{ asset('assets/libs/metismenu/metisMenu.min.js') }}></script>
    <script src={{ asset('assets/libs/simplebar/simplebar.min.js') }}></script>
    <script src={{ asset('assets/libs/node-waves/waves.min.js') }}></script>
    <script src={{ asset('assets/libs/feather-icons/feather.min.js') }}></script>
    <!-- pace js -->
    <script src={{ asset('assets/libs/pace-js/pace.min.js') }}></script>

    <!-- validation init -->
    <script src={{ asset('assets/js/pages/validation.init.js') }}></script>

    <script src={{ asset('assets/plugin/Select2/select2.min.js') }}></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>


</body>

<!--Telefon Format-->
<script>
    $(document).ready(function() {

        $('#phone').mask('+90 (000) 000-0000');
    });
</script>

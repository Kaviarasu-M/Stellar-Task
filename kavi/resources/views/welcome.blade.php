<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KTM - READY TO RACE</title>
    <link rel="icon" href="{{asset('img/logo.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"
        integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
        #image {
            height: 100px;
            width: 100px;
            margin-top: -30px;

        }

        span {
            content: "\20B9";
        }

        * {
            box-sizing: border-box;
        }

        /* Style the search field */
        .example input[type=text] {
            padding: 8px;
            font-size: 17px;
            border: 1px solid grey;
            float: left;
            width: 80%;
            background: white;
        }

        /* Style the submit button */
        .example button {
            float: left;
            width: 15%;
            padding: 8px;
            background: darkorange;
            color: black;
            font-size: 17px;
            border: 1px solid grey;
            border-left: none;
            cursor: pointer;
        }

        /* Clear floats */
        .example::after {
            content: "";
            clear: both;
            display: table;
        }

        .col-12 {
            padding: 2em;
            border: 1px solid #ccc;
            display: block;
            float: left;
            margin: -1px 0 0 -1px;
            color: black;
            background: linear-gradient(white, white 50%, #333 50%, #333);
            background-size: 100% 202%;
            transition: all 0.2s ease;
            animation: down-bump 0.4s ease;
        }

        .col-12 h2 {
            font-weight: 400;
            letter-spacing: -1.5px;
            line-height: 1.2;
        }

        .col-12 h3 {
            font: 0.8em "Lucida Grande", serif;
        }

        .col-12:hover {
            background-position: 100% 100%;
            animation: up-bump 0.4s ease;
        }

        .col-12:hover h2 {
            color: #48ad26;
        }

        .col-12:hover h2 span {
            color: white;
        }

        .col-12:hover h3 {
            color: #999;
        }

        @keyframes up-bump {
            0% {
                padding-top: 2em;
            }

            50% {
                padding-top: 1.5em;
            }

            100% {
                padding-top: 2em;
            }
        }

        @keyframes upp-bump {
            0% {
                padding-top: 0.3em;
            }

            50% {
                padding-top: 0.3em;
            }

            100% {
                padding-top: 0.3em;
            }
        }

        @keyframes down-bump {
            0% {
                padding-top: 2em;
            }

            50% {
                padding-top: 2.5em;
            }

            100% {
                padding-top: 2em;
            }
        }

        @media all and (max-width: 480px) {
            .card-text {
                display: none;
            }
        }

    </style>
</head>

<body>

    <!-- Top menu -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid common-padding-nav">
            <a class="navbar-brand" href="/"><img src="{{asset('img/ktm.svg')}}" alt='home-logo' class='logo'
                    height="100px" width="100px" style="margin-left: 50px" /></a>
            <button class="navbar-toggler p-3 mb-2 bg-light" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="color: white"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 navigations">
                    <li class="nav-item" id="Home">
                        <a class="nav-link fs-18 fw-bold" href="#" style="color: white">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link fs-18 fw-bold dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white">
                            Models
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#" style="color: black">Duke 200</a>
                            <a class="dropdown-item" href="#" style="color: black">Duke 250</a>
                            <a class="dropdown-item" href="#" style="color: black">Duke 390</a>
                            <a class="dropdown-item" href="#" style="color: black">RC 200</a>
                            <a class="dropdown-item" href="#" style="color: black">RC 390</a>
                            <a class="dropdown-item" href="#" style="color: black">Adventure 390</a>
                        </div>
                    </li>
                    <li class="nav-item" id="Ktm Pro-XP">
                        <a class="nav-link fs-18 fw-bold" href="#" style="color: white">Ktm Pro-XP</a>
                    </li>
                    <li class="nav-item" id="Ktm App">
                        <a class="nav-link fs-18 fw-bold" href="#" style="color: white">Ktm App</a>
                    </li>
                    <li class="nav-item" id="Locate Us">
                        <a class="nav-link fs-18 fw-bold" href="#" style="color: white">Locate Us</a>
                    </li>
                </ul>
                <form class="example" action="action_page.php">
                    <input type="text" placeholder="Search..." name="search" style="background: white;">
                    <button type="submit"><i class="fa fa-search" style="background: darkorange;
  color: black;"></i></button>
                </form>
            </div>
        </div>
    </nav>







    <!-- Product section starts here -->
    <div class="row row-cols-2 p-5 row-cols-md-3 g-4">
        <div class="col-12">
            <div class="card h-100">
                <img src="{{asset('img/duke 200.webp')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">KTM Duke 200</h5>
                    <p class="card-text">The KTM Duke 200 is powered by a 200 cc air-cooled engine which produces 25 PS
                        @ 10,000 rpm of power. It has a fuel tank of 13.4 L and a claimed mileage of 33 kmpl.</p>
                </div>
                <div class="card-footer">
                    <button style="color: black; background-color: darkorange; font-weight: bold" id="eff1"
                        onclick=effect()>Book Now <i class="fa-solid fa-motorcycle"></i></i></button>
                    <a href=# style="font-weight: bold; color:black; text-decoration: none">Price starting from
                        <span>&#8377;</span>229000</a>

                </div>
            </div>
        </div>
        <div class="col-12 ">
            <div class="card h-100">
                <img src="{{asset('img/duke 250.webp')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">KTM Duke 250</h5>
                    <p class="card-text">The KTM Duke 250 is powered by a 249 cc air-cooled engine which produces 31 PS
                        @ 9250 rpm of power. It has a fuel tank of 13.4 L and a claimed mileage of 30 kmpl.</p>
                </div>
                <div class="card-footer">
                    <button style="color: black; background-color: darkorange; font-weight: bold" id="eff2"
                        onclick=effect2()>Book Now <i class="fa-solid fa-motorcycle"></i></i></button>
                    <a href=# style="font-weight: bold; color:black; text-decoration: none">Price starting from
                        <span>&#8377;</span>279000</a>
                </div>
            </div>
        </div>
        <div class="col-12 ">
            <div class="card h-100">
                <img src="{{asset('img/duke 390.webp')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">KTM Duke 390</h5>
                    <p class="card-text">The KTM Duke 390 is powered by a 389 cc air-cooled engine which produces 46 PS
                        @ 7000 rpm of power. It has a fuel tank of 13.4 L and a claimed mileage of 25 kmpl.</p>
                </div>
                <div class="card-footer">
                    <button style="color: black; background-color: darkorange; font-weight: bold" id="eff3"
                        onclick=effect3()>Book Now <i class="fa-solid fa-motorcycle"></i></i></button>
                    <a href=# style="font-weight: bold; color:black; text-decoration: none">Price starting from
                        <span>&#8377;</span>359000</a>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card h-100">
                <img src="{{asset('img/rc 200.webp')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">KTM RC 200</h5>
                    <p class="card-text">The KTM RC 200 is powered by a 200 cc air-cooled engine which produces 25 PS @
                        10,000 rpm of power. It has a fuel tank of 13.7 L and a claimed mileage of 30 kmpl.</p>
                </div>
                <div class="card-footer">
                    <button style="color: black; background-color: darkorange; font-weight: bold" id="eff4"
                        onclick=effect4()>Book Now <i class="fa-solid fa-motorcycle"></i></i></button>
                    <a href=# style="font-weight: bold; color:black; text-decoration: none">Price starting from
                        <span>&#8377;</span>269000</a>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card h-100">
                <img src="{{asset('img/rc 390.webp')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">KTM RC 390</h5>
                    <p class="card-text">The KTM Duke 390 is powered by a 373 cc air-cooled engine which produces 43 PS
                        @ 7000 rpm of power. It has a fuel tank of 13.4 L and a claimed mileage of 25 kmpl.</p>
                </div>
                <div class="card-footer">
                    <button style="color: black; background-color: darkorange; font-weight: bold" id="eff5"
                        onclick=effect5()>Book Now <i class="fa-solid fa-motorcycle"></i></i></button>
                    <a href=# style="font-weight: bold; color:black; text-decoration: none">Price starting from
                        <span>&#8377;</span>379000</a>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card h-100">
                <img src="{{asset('img/Adv 390.webp')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">KTM Adventure 390</h5>
                    <p class="card-text">The KTM Adventure 390 Duke is powered by a 373 cc air-cooled engine which
                        produces 43.5 PS @ 9000 rpm of power. It has a fuel tank of 14.5 L and a claimed mileage of 30
                        kmpl.</p>
                </div>
                <div class="card-footer">
                    <button style="color: black; background-color: darkorange; font-weight: bold" id="eff6"
                        onclick=effect6()>Book Now <i class="fa-solid fa-motorcycle"></i></i></button>
                    <a href=# style="font-weight: bold; color:black; text-decoration: none">Price starting from
                        <span>&#8377;</span>359000</a>
                </div>
            </div>
        </div>
    </div>



    <!-- Footer section starts here -->

    <footer class="text-center text-lg-start bg-dark text-white">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="me-4 text-reset">
                    <img src="{{asset('svc/facebook.svg')}}">
                </a>
                <a href="" class="me-4 text-reset">
                    <img src="{{asset('svc/instagram.svg')}}">
                </a>
                <a href="" class="me-4 text-reset">
                    <img src="{{asset('svc/twitter.svg')}}">
                </a>
                <a href="" class="me-4 text-reset">
                    <img src="{{asset('svc/youtube.svg')}}">
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>THE COMPANY
                        </h6>
                        <p>
                            <a href="#!" class="text-reset" style="text-decoration: none">KTM AG</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset" style="text-decoration: none">Brand Values</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset" style="text-decoration: none">Careers</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset" style="text-decoration: none">Contact</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset" style="text-decoration: none">Become a dealer</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            KTM World
                        </h6>
                        <p>
                            <a href="#!" class="text-reset" style="text-decoration: none">News</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset" style="text-decoration: none">Racing</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset" style="text-decoration: none">Stories</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset" style="text-decoration: none">KTM Motohall</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset" style="text-decoration: none">Book a Testride</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            SERVICE
                        </h6>
                        <p>
                            <a href="#!" class="text-reset" style="text-decoration: none">Warrenty</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset" style="text-decoration: none">Safety</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset" style="text-decoration: none">Manual</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset" style="text-decoration: none">Maintenance</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset" style="text-decoration: none">Spare Parts Finder</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            LEGAL
                        </h6>
                        <p>
                            <a href="#!" class="text-reset" style="text-decoration: none">Imprint</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset" style="text-decoration: none">Privacy Policy</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset" style="text-decoration: none">Legal Notices</a>
                        </p>

                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: black; color: white">
            © 2024 Copyright:
            <a class="text-reset fw-bold" href="http://127.0.0.1:8000/">Ktmindia.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <script src="{{asset('js/javascript.js')}}"></script>
</body>

</html>

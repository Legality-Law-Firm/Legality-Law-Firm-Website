@extends('layouts.app')
@section('page')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4">About Us</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{url('/about')}}">Pages</a></li>
                    <li class="breadcrumb-item active text-white">About Us</li>
                </ol>
            </div>
        </div>
        <!-- Header End -->
<!-- About Start -->
<div class="container-fluid about  py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-xl-5">
                        <div class="h-100">
                            <img src="img/about-1.jpg" class="img-fluid w-100 h-100" alt="Image">
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <h5 class="text-uppercase text-primary">About Us</h5>
                        <h1 class="mb-4">Corporate Society & Government</h1>
                        <p class="fs-5 mb-4">Legality Law Firm is a full-service legal
                            practice dedicated to providing
                            comprehensive legal solutions for
                            corporations, non-profit organizations,
                            and government entities. With a team
                            of experienced attorneys specializing in
                            various legal disciplines, we are
                            committed to delivering exceptional
                            legal counsel and representation
                            tailored to the unique needs of our
                            clients.
                        </p>

                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        <!-- Tab Content-->
        <div class="container-fluid about py-4">
            <div class="container py-4 ">
                <div class="tab-class bg-secondary p-4 d-flex align-items-center" style="flex-direction: column;">
                <h1 class="mb-4 text-center">What Makes Us Different?</h1>
                    <ul class="nav d-flex mb-2 justify-content-center">
                        <li class="nav-item mb-3 me-3">
                            <a class="d-flex py-2 text-center bg-white active" data-bs-toggle="pill" href="#tab-1">
                                <span class="text-dark" style="width: 150px;font-size:15px;">Young and Reliable</span>
                            </a>
                        </li>
                        <li class="nav-item mb-3 me-3">
                            <a class="d-flex py-2 text-center bg-white" data-bs-toggle="pill" href="#tab-2">
                                <span class="text-dark" style="width: 150px;">integrity</span>
                            </a>
                        </li>
                        <li class="nav-item mb-3 me-3">
                            <a class="d-flex py-2 text-center bg-white" data-bs-toggle="pill" href="#tab-3">
                                <span class="text-dark" style="width: 150px;">Loyalty</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="text-start my-auto">
                                            <h5 class="mb-3">Fresh Thinking and Powerful Results</h5>
                                            <p class="mb-4">Legality Law Firm brings a fresh perspective to the legal landscape, unburdened by outdated practices and fueled by a young team's tireless energy and unwavering dedication. We leverage cutting-edge technology, the latest research, and innovative strategies to provide efficient, results-oriented solutions. Our agility allows us to adapt quickly to evolving legal landscapes, embracing challenges with enthusiasm and an unwavering focus on achieving success for our clients.
                                            </p>
                                            <div class="d-flex align-items-center justify-content-start">
                                                <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="/contact">Join With Us</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="text-start my-auto">
                                        <h5 class="mb-3">Transparent and Ethical</h5>
                                            <p class="mb-4">Integrity is the cornerstone of Legality Law Firm's practice. We champion transparency, keeping clients fully informed with clear communication and explanations throughout their case. Our
                                            commitment to ethical practice ensures that client interests are always prioritized, and every action is taken with honesty and
                                            integrity. We offer transparent fee structures with no hidden charges,
                                            guaranteeing fair and reasonable billing. Beyond the courtroom, we
                                            demonstrate our commitment to justice by actively participating in
                                            pro bono work and supporting community initiatives.
                                            </p>
                                            <div class="d-flex align-items-center justify-content-start">
                                                <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="/contact">Join With Us</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="text-start my-auto">
                                        <h5 class="mb-3">Your Trusted Legal Partners</h5>
                                            <p class="mb-4">Loyalty to our clients is paramount at Legality Law Firm. We take a client-centric approach, prioritizing understanding their unique needs and goals to build lasting relationships based on trust. Confidentiality is of utmost importance, and clients can rest assured their sensitive legal matters will be handled with the utmost
                                            discretion. We are fierce advocates, fighting tirelessly to protect client interests and secure the best possible outcomes. Our partnership
                                            approach ensures close collaboration, developing effective legal
                                            strategies together and ensuring that clients' voices are heard
                                            throughout the process.
                                            </p>
                                            <div class="d-flex align-items-center justify-content-start">
                                                <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="/contact">Join With Us</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- Tab End-->
              <!-- Services Start -->
        <div class="container-fluid service py-5 bg-light">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                    <h1 class="mb-0">Our Expertise Industries</h1>
                </div>
                <div class="row g-4">
                    <!--Baris 1 Start-->
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="service-item">
                            <img src="img/service-1.jpg" class="img-fluid w-100" alt="Image">
                            <div class="service-link">
                                <a href="#" class="h4 mb-0">Manufacture & Construction</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="service-item">
                            <img src="img/service-2.jpg" class="img-fluid w-100" alt="Image">
                            <div class="service-link">
                                <a href="#" class="h4 mb-0"> Food & Beverage</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="service-item">
                            <img src="img/service-3.jpg" class="img-fluid w-100" alt="Image">
                            <div class="service-link">
                                <a href="#" class="h4 mb-0">Franchise</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="service-item">
                            <img src="img/service-4.jpg" class="img-fluid w-100" alt="Image">
                            <div class="service-link">
                                <a href="#" class="h4 mb-0">Real Estate</a>
                            </div>
                        </div>
                    </div>
                    <!--Baris 1 End-->

                    <!--Baris 2 Start-->
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="service-item">
                            <img src="img/service-5.jpg" class="img-fluid w-100" alt="Image">
                            <div class="service-link">
                                <a href="#" class="h4 mb-0">Information & Technology</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="service-item">
                            <img src="img/service-6.jpg" class="img-fluid w-100" alt="Image">
                            <div class="service-link">
                                <a href="#" class="h4 mb-0"> Mining, Oil & Gas</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="service-item">
                            <img src="img/service-7.jpg" class="img-fluid w-100" alt="Image">
                            <div class="service-link">
                                <a href="#" class="h4 mb-0">Education</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="service-item">
                            <img src="img/service-8.jpg" class="img-fluid w-100" alt="Image">
                            <div class="service-link">
                                <a href="#" class="h4 mb-0">Media & Entertainment</a>
                            </div>
                        </div>
                    </div>
                    <!--Baris 2 End-->

                    <!--Baris 3 Start-->
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="service-item">
                            <img src="img/service-9.jpg" class="img-fluid w-100" alt="Image">
                            <div class="service-link">
                                <a href="#" class="h4 mb-0">Transportation</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="service-item">
                            <img src="img/service-10.jpg" class="img-fluid w-100" alt="Image">
                            <div class="service-link">
                                <a href="#" class="h4 mb-0"> Outsourcing</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="service-item">
                            <img src="img/service-11.jpg" class="img-fluid w-100" alt="Image">
                            <div class="service-link">
                                <a href="#" class="h4 mb-0">Finance & Banking</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="service-item">
                            <img src="img/service-12.jpg" class="img-fluid w-100" alt="Image">
                            <div class="service-link">
                                <a href="#" class="h4 mb-0">Goverment</a>
                            </div>
                        </div>
                    </div>
                    <!--Baris 3 End-->

                    <!--Baris 4 Start-->
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="service-item">
                            <img src="img/service-13.jpg" class="img-fluid w-100" alt="Image">
                            <div class="service-link">
                                <a href="#" class="h4 mb-0">Intellectual Property</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="service-item">
                            <img src="img/service-14.jpg" class="img-fluid w-100" alt="Image">
                            <div class="service-link">
                                <a href="#" class="h4 mb-0">Constitution</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="service-item">
                            <img src="img/service-15.jpg" class="img-fluid w-100" alt="Image">
                            <div class="service-link">
                                <a href="#" class="h4 mb-0">Administrative Law Family Law</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="service-item">
                            <img src="img/service-16.jpg" class="img-fluid w-100" alt="Image">
                            <div class="service-link">
                                <a href="#" class="h4 mb-0">Criminal Law</a>
                            </div>
                        </div>
                    </div>
                    <!--Baris 4 End-->
                </div>
            </div>
        </div>
        <!-- Services End -->
          <!-- Counter Start -->
        <div class="container-fluid counter py-5" style="background: linear-gradient(rgba(0, 0, 0, .4), rgba(0, 0, 0, 0.4)), url(img/volunteers-bg.jpg) center center; background-size: cover;">
            <div class="container py-4">
                <div class="text-center mx-auto pb-4" style="max-width: 800px;">
                    <h1 class="text-uppercase text-primary">Our Products</h1>
                </div>
                <div class="row g-4">
                    <!--Baris ke 1 Counter Start-->
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="counter-item text-center border p-5">
                            <i class="fas fa-comment fa-4x text-white"></i>
                            <h3 class="text-white my-4">Legal Opinion</h3>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="counter-item text-center border p-5">
                            <i class="fas fa-globe fa-4x text-white"></i>
                            <h4 class="text-white my-4">Legal Due Dilligence Report</h4>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="counter-item text-center border p-5">
                            <i class="fas fa-gavel fa-4x text-white"></i>
                            <h3 class="text-white my-4">Litigation Product</h3>
                        </div>
                    </div>
                    <!--Baris ke 1 Counter End-->

                    <!--Baris ke 2 Counter Start-->
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="counter-item text-center border p-5">
                            <i class="fas fa-file fa-4x text-white"></i>
                            <h3 class="text-white my-4">Agreement</h3>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="counter-item text-center border p-5">
                            <i class="fas fa-comment fa-4x text-white"></i>
                            <h3 class="text-white my-4">Legal Memorandum</h3>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="counter-item text-center border p-5">
                            <i class="fas fa-ellipsis-h fa-4x text-white"></i>
                            <h3 class="text-white my-4">Etc</h3>
                        </div>
                    </div>
                    <!--Baris ke 2 Counter End-->
                </div>
            </div>
        </div>
        <!-- Counter End -->
@endSection()

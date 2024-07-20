@extends('layouts.app')
@section('page')
<!-- Carousel Start -->
<div class="container-fluid carousel-header vh-100 px-0">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="img/carousel-1.jpg" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="p-3" style="max-width: 900px;">
                                <h1 class="display-2 text-capitalize text-white mb-4">We Bridge International and Local Best Practices</h1>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a class="btn-hover-bg btn btn-primary text-white py-3 px-5" href="#">Join With Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/carousel-2.jpg" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="p-3" style="max-width: 900px;">
                                <h1 class="display-5 text-capitalize text-white mb-4">We Understand the Regulators and Navigate the Complexities of Indonesian Laws</h1>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a class="btn-hover-bg btn btn-primary text-white py-3 px-5" href="#">Join With Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/carousel-3.jpg" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="p-3" style="max-width: 900px;">
                                <h1 class="display-2 text-capitalize text-white mb-4">Client-Driven is in our Firm's DNA</h1>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a class="btn-hover-bg btn btn-primary text-white py-3 px-5" href="#">Join With Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->
           <!-- Volunteers Start -->
        <div class="container-fluid volunteer py-5 mt-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-5">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="volunteer-img">
                                    <img src="img/volunteers-1.jpg" class="img-fluid w-100" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <h5 class="text-uppercase text-primary">JOIN OUR LEGAL EXPERTISE</h5>
                        <h1 class="mb-4">Partner with us for seamless corporate governance and legal excellence.</h1>
                        <p class="mb-4">Legality Law Firm is a full-service legal practice dedicated to providing comprehensive legal solutions for corporations, non-profit organizations, and government entities. With a team of experienced attorneys specializing in various legal disciplines, we are committed to delivering exceptional legal counsel and representation tailored to the unique needs of our clients.
                        </p>
                        <p class="text-dark"><i class=" fa fa-check text-primary me-2"></i> Expertise Across Sectors.</p>
                        <p class="text-dark"><i class=" fa fa-check text-primary me-2"></i> Customized Solutions.</p>
                        <p class="text-dark"><i class=" fa fa-check text-primary me-2"></i> Commitment to Excellence.</p>
                        <p class="text-dark"><i class=" fa fa-check text-primary me-2"></i> No goal requirements.</p>
                        <p class="text-dark mb-5"><i class=" fa fa-check text-primary me-2"></i> No Initial Consultation Fees.</p>
                        <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="{{url('/contact')}}">Join With Us</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Volunteers End -->
@endSection()
@extends('layouts.app')
@section('page')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb1">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4">Meet Our Patners</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{url('/contact')}}">Pages</a></li>
                    <li class="breadcrumb-item active text-white">Meet Our Patners</li>
                </ol>
            </div>
        </div>
        <!-- Header End -->
            <!-- Gallery Start -->
        <div class="container-fluid gallery py-5 mt-5">
         <div class="container py-5">
            <div class="row g-3">
                <!--BARIS KE 1 -->
                <div class="col-lg-6">
                    <div class="gallery-item">
                        <img src="img/gallery-5.jpg" class="img-fluid w-100" alt="">
                        <div class="search-icon">
                            <a href="img/gallery-5.jpg" data-lightbox="gallery-5" class="my-auto"><i class="fas fa-search-plus btn-hover-color bg-white text-primary p-3"></i></a>
                        </div>
                        <div class="gallery-content">
                            <div class="gallery-inner pb-5">
                                <a href="#" class="h4 text-white">Muhammad Rezky Panji Perdana Martua
                                Hasibuan, S.H.</a>
                                <a href="#" class="text-white"><p class="mb-0">Licensed to practice law as an advocate by the Indonesian Bar Association (PERADI)</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="gallery-item">
                        <img src="img/gallery-6.jpg" class="img-fluid w-100" alt="">
                        <div class="search-icon">
                            <a href="img/gallery-6.jpg" data-lightbox="gallery-6" class="my-auto"><i class="fas fa-search-plus btn-hover-color bg-white text-primary p-3"></i></a>
                        </div>
                        <div class="gallery-content">
                            <div class="gallery-inner pb-5">
                                <a href="#" class="h4 text-white">Yusuf Agung Purnama, S.H., M.H.</a>
                                <a href="#" class="text-white"><p class="mb-0">Licensed to practice law as an advocate by the Indonesian Bar Association (PERADI)</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--BARIS KE 1 END -->
            </div>
         </div>
        </div>
        <!-- Gallery End -->
@endSection()

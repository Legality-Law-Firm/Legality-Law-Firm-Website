@extends('layouts.app')
@section('page')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb2">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4">Meet Our Associate</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{url('/associate')}}">Pages</a></li>
                    <li class="breadcrumb-item active text-white">Meet Our Associate</li>
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
                        <img src="img/gallery-1.jpg" class="img-fluid w-100" alt="">
                        <div class="search-icon">
                            <a href="img/gallery-1.jpg" data-lightbox="gallery-1" class="my-auto"><i class="fas fa-search-plus btn-hover-color bg-white text-primary p-3"></i></a>
                        </div>
                        <div class="gallery-content">
                            <div class="gallery-inner pb-5">
                                <a href="#" class="h4 text-white">Muhammad Ainul Yaqin, S.H.,C.Med.</a>
                                <a href="#" class="text-white"><p class="mb-0">Bachelor of Laws from the UIN Syarif Hidayatullah Jakarta</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="gallery-item">
                        <img src="img/gallery-2.jpg" class="img-fluid w-100" alt="">
                        <div class="search-icon">
                            <a href="img/gallery-2.jpg" data-lightbox="gallery-2" class="my-auto"><i class="fas fa-search-plus btn-hover-color bg-white text-primary p-3"></i></a>
                        </div>
                        <div class="gallery-content">
                            <div class="gallery-inner pb-5">
                                <a href="#" class="h4 text-white">Galang Bagus, S.H</a>
                                <a href="#" class="text-white"><p class="mb-0">Bachelor of Laws from the UIN Syarif Hidayatullah Jakarta</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--BARIS KE 1 END -->
                <!--BARIS KE 2 -->
                <div class="col-lg-6">
                    <div class="gallery-item">
                        <img src="img/gallery-3.jpg" class="img-fluid w-100" alt="">
                        <div class="search-icon">
                            <a href="img/gallery-3.jpg" data-lightbox="gallery-3" class="my-auto"><i class="fas fa-search-plus btn-hover-color bg-white text-primary p-3"></i></a>
                        </div>
                        <div class="gallery-content">
                            <div class="gallery-inner pb-5">
                                <a href="#" class="h4 text-white">Ahmad Azhar Ramadhan, S.H.</a>
                                <a href="#" class="text-white"><p class="mb-0">Bachelor of Laws from the UIN Syarif Hidayatullah Jakarta</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="gallery-item">
                        <img src="img/gallery-4.jpg" class="img-fluid w-100" alt="">
                        <div class="search-icon">
                            <a href="img/gallery-4.jpg" data-lightbox="gallery-4" class="my-auto"><i class="fas fa-search-plus btn-hover-color bg-white text-primary p-3"></i></a>
                        </div>
                        <div class="gallery-content">
                            <div class="gallery-inner pb-5">
                                <a href="#" class="h4 text-white">Naufal Fadhel, S.H</a>
                                <a href="#" class="text-white"><p class="mb-0">Bachelor of Laws from the UIN Syarif Hidayatullah Jakarta</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--BARIS KE 2 END -->
            </div>
         </div>
        </div>
        <!-- Gallery End -->
@endSection()

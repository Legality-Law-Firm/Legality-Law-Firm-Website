@extends('layouts.app')
@section('page')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb3">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4">Contact Us</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{url('/contact')}}">Pages</a></li>
                    <li class="breadcrumb-item active text-white">Contact Us</li>
                </ol>
            </div>
        </div>
        <!-- Header End -->
<!-- Contact Start -->
                <div class="contact p-5">
                    <div class="row g-4">
                        <div class="col-xl-5">
                            <h1 class="mb-4">Let's Join With Us</h1>
                            <form>
                                <div class="row gx-4 gy-3">
                                    <div class="col-xl-6">
                                        <input type="text" class="form-control bg-white border-0 py-3 px-4" placeholder="Your Name">
                                    </div>
                                    <div class="col-xl-6">
                                        <input type="email" class="form-control bg-white border-0 py-3 px-4" placeholder="Your Email">
                                    </div>
                                    <div class="col-xl-6">
                                        <input type="text" class="form-control bg-white border-0 py-3 px-4" placeholder="Your Phone">
                                    </div>
                                    <div class="col-xl-6">
                                        <input type="text" class="form-control bg-white border-0 py-3 px-4" placeholder="Subject">
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control bg-white border-0 py-3 px-4" rows="7" cols="10" placeholder="Your Message"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn-hover-bg btn btn-primary w-100 py-3 px-5" type="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-xl-7">
                            <div>
                                <div class="row g-4">
                                    <div class="col-lg-4">
                                        <div class="bg-white p-4">
                                            <i class="fas fa-map-marker-alt fa-2x text-primary mb-2"></i>
                                            <h4>Address</h4>
                                            <p class="mb-0">Jl. Tuan Limun No. 13 Pisangan, Ciputat Timur, South Tangerang</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="bg-white p-4">
                                            <i class="fas fa-envelope fa-2x text-primary mb-2"></i>
                                            <h4>Mail Us</h4>
                                            <p class="mb-0">Info.legalitylawfirm@gmail.com </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="bg-white p-4">
                                            <i class="fa fa-phone-alt fa-2x text-primary mb-2"></i>
                                            <h4>Telephone</h4>
                                            <p class="mb-0">+62 897-2412-111</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <iframe class="w-100" style="height: 412px; margin-bottom: -6px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.665192856376!2d106.75432741018075!3d-6.307642793655234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69efda38964aff%3A0x68f7bed837303c7d!2sJl.%20Tn.%20Limun%20No.13%2C%20Pisangan%2C%20Kec.%20Ciputat%20Tim.%2C%20Kota%20Tangerang%20Selatan%2C%20Banten%2015419!5e0!3m2!1sid!2sid!4v1721502158311!5m2!1sid!2sid"
                                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <!-- Contact End -->
@endSection()

 <!-- Navbar start -->
 <div class="container-fluid fixed-top px-0">
            <div class="container px-0">
                <div class="topbar">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-8">
                            <div class="topbar-info d-flex flex-wrap">
                                <a href="mailto:Info.legalitylawfirm@gmail.com" class="text-light me-4"><i class="fas fa-envelope text-white me-2"></i>Info.legalitylawfirm@gmail.com</a>
                                <a href="https://wa.me/08972412111" class="text-light"><i class="fas fa-phone-alt text-white me-2"></i>+62 897-2412-111</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="topbar-icon d-flex align-items-center justify-content-end">
                                <a href="https://www.instagram.com/legalitylawfirm?igsh=MW45ZmI1eWs2aGdlZA==" class="btn-square text-white me-2"><i class="fab fa-instagram"></i></a>
                                <a href="https://www.facebook.com/share/4FtAAcskHAvw1ZaG/?mibextid=qi2Omg" class="btn-square text-white me-2"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.linkedin.com/company/legality-law-firm/" class="btn-square text-white me-0"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-light bg-light navbar-expand-xl">
                    <a href="index.html" class="navbar-brand ms-3">
                        <img  src="img/logo-01.png" height="80px">
                    </a>
                    <button class="navbar-toggler py-2 px-3 me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-light" id="navbarCollapse">
                        <div class="navbar-nav ms-auto">
                            <a href="{{ url('/') }}" class="nav-item nav-link {{ Request::path() == '/' ? 'active' : '' }}">Home</a>
                            <a href="{{ url('/about') }}" class="nav-item nav-link {{ Request::path() == 'about' ? 'active' : '' }}">About Us</a>
                            <a href="{{ url('/patner') }}" class="nav-item nav-link {{ Request::path() == 'patner' ? 'active' : '' }}">Meet Our Partners</a>
                            <a href="{{ url('/associate') }}" class="nav-item nav-link {{ Request::path() == 'associate' ? 'active' : '' }}">Meet Our Associates</a>
                            <a href="{{ url('/contact') }}" class="nav-item nav-link {{ Request::path() == 'contact' ? 'active' : '' }}">Contact Us</a>
                        </div>
                        <div class="d-flex align-items-center flex-nowrap pt-xl-0" style="margin-left: 15px;">
                            <a href="{{url('/contact')}}" class="btn-hover-bg btn btn-primary text-white py-2 px-4 me-3">Join With Us</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->

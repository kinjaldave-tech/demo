@extends('layout.layout')

 @section('content')

 
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container" data-aos="fade-up" data-aos-delay="150">
            <h1>ENTREPRENEURSHIP DEVELOPMENT CENTRE</h1>
            <h2>Ideation - Innovation - Incubation</h2>
            <div class="d-flex">
                <a href="#about" class="btn-get-started scrollto">Get Started</a>  
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row justify-content-end">
                    <div class="col-lg-11">
                        <div class="row justify-content-end">

                            <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                                <div class="count-box">
                                    <i class="bi bi-briefcase"></i>
                                    <span data-purecounter-start="0" data-purecounter-end="110" data-purecounter-duration="1" class="purecounter"></span>
                                    <p>Startup Supported</p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                                <div class="count-box">
                                    <i class="bi bi-gear-wide-connected"></i>
                                    <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="1" class="purecounter"></span>
                                    <p>Industry Connect</p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                                <div class="count-box">
                                    <i class="bi bi-cash-coin"></i>
                                    <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="1" class="purecounter"></span>
                                    <p>Revenue Generated</p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                                <div class="count-box">
                                    <i class="bi bi-person"></i>
                                    <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1" class="purecounter"></span>
                                    <p>Mentors</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-lg-6 video-box align-self-baseline" data-aos="zoom-in" data-aos-delay="100">
                        <img src="{{  asset('src/img/about.jpg') }}" class="img-fluid" alt="">
                        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a>
                    </div>

                    <div class="col-lg-6 pt-3 pt-lg-0 content">
                        <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <ul>
                            <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                            <li><i class="bx bx-check-double"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                            <li><i class="bx bx-check-double"></i> Voluptate repellendus pariatur reprehenderit corporis sint.</li>
                            <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                        </ul>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                            id est laborum
                        </p>
                    </div>

                </div>

            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= About Boxes Section ======= -->
        <section id="about-boxes" class="about-boxes">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="card">
                            <img src="{{  asset('src/img/about-boxes-1.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-icon">
                                <i class="ri-brush-4-line"></i>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><a href="">Our Mission</a></h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="card">
                            <img src="{{  asset('src/img/about-boxes-2.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-icon">
                                <i class="ri-calendar-check-line"></i>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><a href="">Our Plan</a></h5>
                                <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                        <div class="card">
                            <img src="{{  asset('src/img/about-boxes-3.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-icon">
                                <i class="ri-movie-2-line"></i>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><a href="">Our Vision</a></h5>
                                <p class="card-text">Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores eos qui ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet. </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End About Boxes Section -->

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">
            <div class="container" data-aos="zoom-in">

                <div class="row">

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{  asset('src/img/clients/client-1.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{  asset('src/img/clients/client-2.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{  asset('src/img/clients/client-3.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{  asset('src/img/clients/client-4.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{  asset('src/img/clients/client-5.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{  asset('src/img/clients/client-6.png') }}" class="img-fluid" alt="">
                    </div>

                </div>

            </div>
        </section>
        <!-- End Clients Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container" data-aos="fade-up">

                <ul class="nav nav-tabs row d-flex">
                    <li class="nav-item col-2">
                        <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
                            <i class="ri-gps-line"></i>
                            <h4 class="d-none d-lg-block">Vadodara Hackathon</h4>
                        </a>
                    </li>
                    <li class="nav-item col-2">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
                            <i class="ri-body-scan-line"></i>
                            <h4 class="d-none d-lg-block">Women's Startup Meet</h4>
                        </a>
                    </li>
                    <li class="nav-item col-2">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
                            <i class="ri-sun-line"></i>
                            <h4 class="d-none d-lg-block">Vadodara Start-up Festival</h4>
                        </a>
                    </li>
                    <li class="nav-item col-2">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-4">
                            <i class="ri-store-line"></i>
                            <h4 class="d-none d-lg-block">Startup Demo Day</h4>
                        </a>
                    </li>
                    <li class="nav-item col-2">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-5">
                            <i class="ri-store-line"></i>
                            <h4 class="d-none d-lg-block">National Forum on Social Entrepreneurship</h4>
                        </a>
                    </li>
                    <li class="nav-item col-2">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-6">
                            <i class="ri-store-line"></i>
                            <h4 class="d-none d-lg-block">Vadodara Toycathon</h4>
                        </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active show" id="tab-1">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                                
                                <p>A nationwide initiative to provide students a platform to solve some of the pressing problems faced by Industries, Government and Other private players, and thus inculcate a culture of product innovation and a mindset of problem-solving.</p>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="{{  asset('src/img/features-1.png') }}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-2">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <h3>Neque exercitationem debitis soluta quos debitis quo mollitia officia est</h3>
                                <p>
                                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                </p>
                                <p>
                                    Women's Start-up Meet is an initiative by EDC to help aspiring women entrepreneurs gain an edge by building their skills, network and gaining hands-on experience. This event will help female students gain the skills to
                                    come up with an idea which is aligned with their strengths, interest, and passion, and can have some commercial potential.
                                </p>
                            
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="{{  asset('src/img/features-2.png') }}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-3">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <h3>Voluptatibus commodi ut accusamus ea repudiandae ut autem dolor ut assumenda</h3>
                                <p>
                                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                                </p>
                                
                                <p>
                                   Vadodara Start-up Festival is here to achieve just that by providing a platform to network and learn from the leading Entrepreneurs and Mentors. It empower the entrepreneurship qualities as well as knowledge about start-ups in Students and give opportunities to new entrepreneurs.
                                </p>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="{{  asset('src/img/features-3.png') }}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-4">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <h3>Omnis fugiat ea explicabo sunt dolorum asperiores sequi inventore rerum</h3>
                                <p>
                                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                                    id est laborum
                                </p>
                                <p>
                                    Around 10-12 promising startups would be selected and provided an opportunity for pitching their propositions at Vadodara Startup Demo Day, who would be judged by an esteemed panel, which could be a precursor to the primary level screening for Vadodara Startup Studio's Launchpad & Acceleration Program.
                                </p>
                            
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="{{  asset('src/img/features-4.png') }}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-5">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <h3>Neque exercitationem debitis soluta quos debitis quo mollitia officia est</h3>
                                <p>
                                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                </p>
                                <p>
                                    "National Forum on Social Entrepreneurship(NFSE)" will bring together Experts, Policy makers, accomplished Entrepreneurs, Funding agencies under one single platform, to address & solve the pressing issues of the nation
                                    and the social entrepreneurs trying to tackle them.
                                </p>
                            
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="{{  asset('src/img/features-2.png') }}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                     <div class="tab-pane" id="tab-6">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <h3>Neque exercitationem debitis soluta quos debitis quo mollitia officia est</h3>
                                <p>
                                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                </p>
                                <p>
                                    Vadodara Toycathon is a stepping stone of Mind to Market innovation challenge for Toy Industry. This Ideathon cum Hackathon is a propeller of the Atmanirbhar Bharat in Toy Sector.
                                </p>
                            
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="{{  asset('src/img/features-2.png') }}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Features Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Services</h2>
                    <p>Check our Services</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-md-6">
                        <div class="icon-box">
                            <i class="bi bi-briefcase"></i>
                            <h4><a href="#">Business Counselling</a></h4>
                            <p>To ensure that whatever is in the mind of the student, directly meets the needs of the world.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="icon-box">
                            <i class="bi bi-mic"></i>
                            <h4><a href="#">Entrepreneurship Talks</a></h4>
                            <p>We provide our students with the right amount of motivation and inspiration through regular talk sessions.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="icon-box">
                            <i class="bi bi-building"></i>
                            <h4><a href="#">Industrial Exposure</a></h4>
                            <p>We provide the needed industrial exposure necessary to gain practical understanding.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="icon-box">
                            <i class="bi bi-lightbulb"></i>
                            <h4><a href="#">Innovation Challenges</a></h4>
                            <p>Simulated challenges and competitions, help in creating a thought-provoking atmosphere to learn and develop their idea formulation, and implementation abilities.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="icon-box">
                            <i class="bi bi-piggy-bank"></i>
                            <h4><a href="#">Investment Guide</a></h4>
                            <p>The key to every thriving business proposition is a good investment plan to back it up,to provide the relevant guidance to our students,to find the best investors for their start-ups.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="icon-box">
                            <i class="bi bi-cash-stack"></i>
                            <h4><a href="#">Access of Pre-Seed & Seed Grants & Funding Opportunities</a></h4>
                            <p>Government Grants/Schemes, Private Seed, Angle & VC Funding, Short-term & Long-term Loans</p>
                        </div>
                    </div>
                     <div class="col-md-6 mt-4 mt-md-0">
                        <div class="icon-box">
                            <i class="bi bi-arrows-angle-contract"></i>
                            <h4><a href="#">Industry & Academic Mentor Connect</a></h4>
                            <p>Easy Connect of Vast & Experienced Pool of Experts</p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="icon-box">
                            <i class="bi bi-house"></i>
                            <h4><a href="#">Co-working Space & Allied Resources</a></h4>
                            <p>Flexi & Dedicated Work Desk, Meeting Lounges, Seminar Hall & Allied Resources</p>
                        </div>
                    </div>
                </div>

            </div>
             <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>A few people of integrity can go a long way.</h2>
                    <p>Board of Governors</p>
                </div>
        </div>
        </section>
        
       
        <!-- End Services Section -->

        <!-- ======= Testimonials Section ======= -->



        <section id="testimonials" class="testimonials">
         
            <div class="container" data-aos="zoom-in">
           

                <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('src/img/testimonials/devanshusir.jpg') }}" class="testimonial-img" alt="">
                                <h3>Dr. Devanshu J Patel</h3>
                                <h4>President</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>Dr. Devanshu Patel, a dynamic visionary President of Parul University, whose unflinching commitment towards education has made an impact not only in Gujarat but
                                    in all the diversified States of India, and going beyond national boarders.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('src/img/testimonials/parulmaam.jpg') }}" class="testimonial-img" alt="">
                                <h3>Dr. Parul Patel</h3>
                                <h4>Vice President</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>Dr. Parul Patel is a resilient administrator, Managing trustee and Vice President of Parul University whose tenderheartedness has allowed her to maintain close relations
                                    with the students while guiding them through their academic journey.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('src/img/testimonials/gitikamaam.jpg') }}" class="testimonial-img" alt="">
                                <h3>Dr. Geetika Patel</h3>
                                <h4>Medical Director, Trustee</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>Dr Geetika Madan Patel is a proficient doctor and administrator having pursued her MBBS and MD in Community Medicine with Gold Medal from the illustrious Maharaja
                                    Sayajirao University of Baroda. Currently she is the Member of Board of Governance and Medical Director of Parul University.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('src/img/testimonials/komalmaam.jpg') }}" class="testimonial-img" alt="">
                                <h3>Dr. Komal Patel</h3>
                                <h4>Medical Director, Trustee</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>Dr.Komal Patel serves as Member of the Governing Body in the University’s Medical Director. She oversees smooth functioning of the University’s Ayurveda Hospital
                                    along with the Department of Obstetrics and Gynaecology in Parul Sevashram Hospital. She is actively involved developing surgical departments within the Hospital.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('src/img/testimonials/mnsir.jpg') }}" class="testimonial-img" alt="">
                                <h3>Dr. M N Patel</h3>
                                <h4>Vice Chancellor</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>Dr. M N Patel is a passion-driven educationalist and visionary who has made a significant mark in the scope of higher education within the State of Gujarat and the
                                    nation of India and currently stands as the Provost of Parul University.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->


                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('src/img/testimonials/hssir.jpg') }}" class="testimonial-img" alt="">
                                <h3>Dr. H.S. Vijayakumar</h3>
                                <h4>Pro-Vice Chancellor</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>Dr. H.S. Vijayakumar has 37 years of glittering professional experience during which he has held key positions in teaching and administration at University of Agricultural
                                    Sciences, Dharwad. Under his able leadership as Vice Chancellor, University of Agricultural Sciences, Dharwad had scaled new heights.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section>
        <!-- End Testimonials Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Portfolio</h2>
                    <p>Check our Portfolio</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-card">Card</li>
                            <li data-filter=".filter-web">Web</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="{{  asset('src/img/portfolio/portfolio-1.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 1</h4>
                            <p>App</p>
                            <a href="{{  asset('src/img/portfolio/portfolio-1.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="{{  asset('src/img/portfolio/portfolio-2.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <a href="{{  asset('src/img/portfolio/portfolio-2.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="{{  asset('src/img/portfolio/portfolio-3.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 2</h4>
                            <p>App</p>
                            <a href="{{  asset('src/img/portfolio/portfolio-3.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <img src="{{  asset('src/img/portfolio/portfolio-4.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Card 2</h4>
                            <p>Card</p>
                            <a href="{{  asset('src/img/portfolio/portfolio-4.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src=""{{  asset('src/img/portfolio/portfolio-5.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web 2</h4>
                            <p>Web</p>
                            <a href=""{{  asset('src/img/portfolio/portfolio-5.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="{{  asset('src/img/portfolio/portfolio-6.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 3</h4>
                            <p>App</p>
                            <a href="{{  asset('src/img/portfolio/portfolio-6.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <img src="{{  asset('src/img/portfolio/portfolio-7.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Card 1</h4>
                            <p>Card</p>
                            <a href="{{  asset('src/img/portfolio/portfolio-7.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <img src=""{{  asset('src/img/portfolio/portfolio-8.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Card 3</h4>
                            <p>Card</p>
                            <a href=""{{  asset('src/img/portfolio/portfolio-8.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="{{  asset('src/img/portfolio/portfolio-9.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <a href="{{  asset('src/img/portfolio/portfolio-9.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Portfolio Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Team</h2>
                    <p>Check our Team</p>
                </div>

                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="fade-up">
                            <div class="pic"><img src="{{  asset('src/img/team/jaysir.jpg') }}" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Mr. Jay Sudani</h4>
                                <span>Chief Executive Officer</span>
                                <div class="social">
                                    <a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/jaysudani6 "><i class="bi bi-facebook"></i></a>
                                    <a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/jay-sudani-1b655490/"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="150">
                            <div class="pic"><img src="{{  asset('src/img/team/nikhilsutharsir.jpeg') }}" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Mr. Nikhil Suthar</h4>
                                <span>Chieft Operating Officer</span>
                                <div class="social">
                                    <a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/nikhilvsuthar"><i class="bi bi-facebook"></i></a>
                                    <a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/nikhilvsuthar/"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="300">
                            <div class="pic"><img src="{{  asset('src/img/team/rahulsir.jpg') }}" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Mr. Rahul Pareek</h4>
                                <span>Senior Manager-Incubation Business Development</span>
                                <div class="social">
                                    <a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/rahul.pareek.399"><i class="bi bi-facebook"></i></a>
                                    <a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/rahul-pareek-324021186/"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="300">
                            <div class="pic"><img src="{{  asset('src/img/team/tapeshsir.jpg') }}" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Dr. Tapesh Dubey</h4>
                                <span>Senior Manager-Incubation</span>
                                <div class="social">
                                    <a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/DrTapyeshKumar"><i class="bi bi-facebook"></i></a>
                                    <a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/posts/dr-tapesh-kumar-4452021a5"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="300">
                            <div class="pic"><img src="{{  asset('src/img/team/antony.jpg') }}" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Mr. Antony Dinu</h4>
                                <span>Manager-Incubation</span>
                                <div class="social">
                                    <a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/antonycorera/"><i class="bi bi-facebook"></i></a>
                                    <a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/antonydinu.corera.7"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="300">
                            <div class="pic"><img src="{{  asset('src/img/team/nikhilsir.jpg') }}" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Mr. Nikhil Jhumde</h4>
                                <span>Manager-Incubation</span>
                                <div class="social">
                                    <a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/nikhil.j.77736"><i class="bi bi-facebook"></i></a>
                                    <a target="_blank" rel="noopener noreferrer" href=" https://www.linkedin.com/in/nikhil-jumde-945696112/"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="300">
                            <div class="pic"><img src="{{  asset('src/img/team/ajaysir.jpg') }}" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Mr. Ajay Barot</h4>
                                <span>Manager-Incubation and<br> Operations</span>
                                <div class="social">
                                    <a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/barot.ajay"><i class="bi bi-facebook"></i></a>
                                    <a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/ajay-barot-17867a114/"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="300">
                            <div class="pic"><img src="{{  asset('src/img/team/isharsir.jpg') }}" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Mr. Isharahmad Pathan</h4>
                                <span>Manager-Incubation and<br>Operations</span>
                                <div class="social">
                                    <a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/isharahmad.pathan"><i class="bi bi-facebook"></i></a>
                                    <a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/isharahmad-pathan-798b4a159/"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="300">
                            <div class="pic"><img src="{{  asset('/src/img/team/riddhimam.jpg') }}" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Ms. Riddhi Bagha</h4>
                                <span>Manager-Incubation Programs</span>
                                <div class="social">
                                    <a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/profile.php?id=100004555358472"><i class="bi bi-facebook"></i></a>
                                    <a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/riddhi-bagha-01113a17b/"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="300">
                            <div class="pic"><img src="{{  asset('src/img/team/zeelmaam.jpg') }}" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Ms. Zheel Dinger</h4>
                                <span>Program Officer</span>
                                <div class="social">
                                    <a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/zeal.ashu"><i class="bi bi-facebook"></i></a>
                                    <a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/zheel-dinger-59109572/"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                     <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="300">
                            <div class="pic"><img src="{{  asset('src/img/team/kinjal.jpg') }}" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Kinjal Dave</h4>
                                <span>Incubation Associate <br>Web developer</span>
                                <div class="social">
                                    <a target="_blank" rel="noopener noreferrer" href=""><i class="bi bi-facebook"></i></a>
                                    <a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/kinjal-dave-225741192/"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up" ">

    <div class=" section-title ">
        <h2>Contact</h2>
        <p>Contact Us</p>
      </div>

      <div class="row ">

        <div class="col-lg-6 ">

          <div class="row ">
            <div class="col-md-12 ">
              <div class="info-box ">
                <i class="bx bx-map "></i>
                <h3>Our Address</h3>
                <a target="_blank" rel="noopener noreferrer" href="https://www.google.com/maps/dir//paruluniversity+location/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x395fda2400192473:0xc319c9237f2928e8?sa=X&ved=2ahUKEwie8Mizv_7xAhValEsFHQStBNkQ9RcwIHoECDwQBA">Entrepreneurship Development Centre - Parul University<br>P.O.Limda, Ta.Waghodia – 391760 Dist. Vadodara, Gujarat (India)</a>
              </div>
            </div>
            <div class="col-md-6 ">
              <div class="info-box mt-4 ">
                <i class="bx bx-envelope "></i>
                <h3>Email Us</h3>
                <a target="_blank" rel="noopener noreferrer" href="mailto:edc@paruluniversity.ac.in">edc@paruluniversity.ac.in</a>
              </div>
            </div>
            <div class="col-md-6 ">
              <div class="info-box mt-4 ">
                <i class="bx bx-phone-call "></i>
                <h3>Call Us</h3>
                <a target="_blank" rel="noopener noreferrer" href="tel:0266-8260350">0266-8260350</a>
              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-6 mt-4 mt-lg-0 ">
          <form action="forms/contact.php " method="post " role="form " class="php-email-form ">
            <div class="row ">
              <div class="col-md-6 form-group ">
                <input type="text " name="name " class="form-control " id="name " placeholder="Your Name " required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0 ">
                <input type="email " class="form-control " name="email " id="email " placeholder="Your Email " required>
              </div>
            </div>
            <div class="form-group mt-3 ">
              <input type="text " class="form-control " name="subject " id="subject " placeholder="Subject " required>
            </div>
            <div class="form-group mt-3 ">
              <textarea class="form-control " name="message " rows="5 " placeholder="Message " required></textarea>
            </div>
            <div class="my-3 ">
              <div class="loading ">Loading</div>
              <div class="error-message "></div>
              <div class="sent-message ">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center "><button type="submit ">Send Message</button></div>
          </form>
        </div>

      </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  @endsection
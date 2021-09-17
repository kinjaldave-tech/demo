@extends('layout.layout')

@section('sp-css')
<link href="{{ asset('src/css/bene.css') }}" rel="stylesheet">
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> --}}
@endsection

@section('content')
<!-- ======= Hero Section ======= -->
    <section id="hero" class="hero-associationship">
        <div class="hero-container" data-aos="fade-up">
            <h1>STUDENT ASSOCIATIONSHIP PROGRAM</h1>
            <h2>Alone we can do so little, together we can do so much.</h2>
            {{-- <a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a> --}}
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">
        <section class="recent-completed-project section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="projects_inner row" id="lightgallery">
                            <div class="col-lg-6 col-sm-6 web all" data-src="img/project/p1.jpg">
                                <div class="row justify-content-center">
                                    <div class="col-lg-12">
                                        <div class="main-title text-center">
                                            <h2 style="margin-top:120px;">STUDENT ASSOCIATESHIP PROGRAMME 2020-21</h2>
                                            <p style="font-size: 18px;">
                                                Entrepreneurship Development Cell, Parul University has come up with an Exclusive Student Associateship Programme for the Students of Parul University, which will provide a prospect to students to work as associates. Under this Programme, the students
                                                will get the opportunities to enhance their practical skills and contribute for the University and towards the society. The Shortlisted students will get the opportunities to work with the Founder, CEO of
                                                the Various Start-ups and EDC Executives for the tenure of 06 months. After successful completion of the said tenure, a certificate will be awarded to the students.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 brand all creative">
                                <img class="img-fluid w-100" src="{{  asset('src/img/association/main.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="main-title text-center">
                            <h1>We are looking for</h1>
                            <p>Individuals who have excellent Skills in the following areas:
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="projects_inner row" id="lightgallery">
                            <div class="col-lg-3 col-sm-6 web all">
                                <div class="projects_item">
                                    <img class="img-fluid w-100" src="{{  asset('src/img/association/01.jpg') }}" alt="">
                                </div>
                                <div class="projects_text">
                                    <h4>
                                        Website Developer
                                    </h4>
                                    <p>Client Project</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 brand all creative">
                                <div class="projects_item">
                                    <img class="img-fluid w-100" src={{  asset('src/img/association/02.jpg') }} alt="">
                                </div>
                                <div class="projects_text">
                                    <h4>
                                        Android Developer
                                    </h4>
                                    <p>Client Project</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 all">
                                <div class="projects_item">
                                    <img class="img-fluid w-100" src="{{  asset('src/img/association/03.jpg') }}" alt="">
                                </div>
                                <div class="projects_text">
                                    <h4>
                                        iOS Developer
                                    </h4>
                                    <p>Client Project</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 all print-mat">
                                <div class="projects_item">
                                    <img class="img-fluid w-100" src="{{  asset('src/img/association/04.jpg') }}" alt="">
                                </div>
                                <div class="projects_text">
                                    <h4>
                                        Content Writer
                                    </h4>
                                    <p>Client Project</p>
                                </div>
                            </div>
                            <br>
                            <br>
                            <br>
                            <br>
                            <div class="col-lg-3 col-sm-6 brand img-man all">
                                <div class="projects_item">
                                    <img class="img-fluid w-100" src="{{  asset('src/img/association/05.jpg') }}" alt="">
                                </div>
                                <div class="projects_text">
                                    <h4>
                                        Cinematographer
                                    </h4>
                                    <p>Client Project</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 brand work img-man all">
                                <div class="projects_item">
                                    <img class="img-fluid w-100" src="{{  asset('src/img/association/06.jpg') }}" alt="">
                                </div>
                                <div class="projects_text">
                                    <h4>
                                        Branding and Media Promotion
                                    </h4>
                                    <p>Client Project</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 brand work img-man all">
                                <div class="projects_item">
                                    <img class="img-fluid w-100" src="{{  asset('src/img/association/07.jpg') }}" alt="">
                                </div>
                                <div class="projects_text">
                                    <h4>
                                        Graphic Designer
                                    </h4>
                                    <p>Client Project</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 brand work img-man all">
                                <div class="projects_item">
                                    <img class="img-fluid w-100" src="{{  asset('src/img/association/08.jpg') }}" alt="">
                                </div>
                                <div class="projects_text">
                                    <h4>
                                        Student Ambassador
                                    </h4>
                                    <p>Client Project</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ======= Cta Section ======= -->
                <section id="cta" class="cta picture" style="margin-top: 50px;">
                    <div class="container" data-aos="zoom-in">
                        <div class="text-center">
                            <h3>Other Deliverables</h3>
                            <h4 style="color: white;"> Every Month EDC will provide Special appreciation and Reward to Best Student Associate.
                                <br><br> Excellent performers will be rewarded in the form of awards and cash prizes. <br> Best working Associates from different sectors will receive special appreciation by posting their name on various social media and
                                the official website of Parul University.</h4>
                        </div>
                    </div>
                </section>
                <!-- End Cta Section -->
                <div class="y-us-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                                <div class="y-us-head">
                                    <div class="y-us-title">
                                        <div class="main-title text-center"></div>
                                        <h2>Benefits of the Programme:</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim </p>
                                        <span class="y-us-title-border"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="y-us-content">
                                <div class="service-3">
                                    <div class="service-box">
                                        <div class="clearfix">
                                            <div class="iconset">
                                                <span class="glyphicon glyphicon-cog icon"></span>
                                            </div>
                                            <div class="y-us-content">
                                                <h4>CERTIFICATE</h4>
                                                <p> A Certificate of Associate from Parul University</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service-box">
                                        <div class="clearfix">
                                            <div class="iconset">
                                                <span class="glyphicon glyphicon-cog icon"></span>
                                            </div>
                                            <div class="y-us-content">
                                                <h4>LIFETIME MEMBERSHIP</h4>
                                                <p>Lifetime membership of the Entrepreneurship Development Cell with special identity and recognition.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service-box">
                                        <div class="clearfix">
                                            <div class="iconset">
                                                <span class="glyphicon glyphicon-cog icon"></span>
                                            </div>
                                            <div class="y-us-content">
                                                <h4>OPPORTUNITIES</h4>
                                                <p>Continuous Learning opportunities in the area of Entrepreneurship and Innovation.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="why-choose-banner">
                                <img src="{{  asset('src/img/association/try.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="y-us-contentbox">
                                <div class="service-3">
                                    <div class="service-box">
                                        <div class="clearfix">
                                            <div class="iconset">
                                                <span class="glyphicon glyphicon-cog icon"></span>
                                            </div>
                                            <div class="y-us-content">
                                                <h4>RECOGNITION</h4>
                                                <p>Recognition in the form of name integration of all the Associate members on the EDC website
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service-box">
                                        <div class="clearfix">
                                            <div class="iconset">
                                                <span class="glyphicon glyphicon-cog icon"></span>
                                            </div>
                                            <div class="y-us-content">
                                                <h4>IMPROVEMENT</h4>
                                                <p>Improve your creative skills an opportunity to build your own expertise in this era.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service-box">
                                        <div class="clearfix">
                                            <div class="iconset">
                                                <span class="glyphicon glyphicon-cog icon"></span>
                                            </div>
                                            <div class="y-us-content">
                                                <h4>SOCIALIZATION</h4>
                                                <p>Provides great opportunity to visualize your campus Start-Ups in front of audience from across Gujarat
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <!-- End #main -->
@endsection
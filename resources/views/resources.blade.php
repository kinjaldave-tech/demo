@extends('layout.layout')


@section('content')
<!-- ======= Hero Section ======= -->


    <section id="hero" class="hero-resources">
        <div class="hero-container" data-aos="fade-up" data-aos-delay="150">
            <h1>Resources</h1>
            <h2>You don’t learn to walk by following rules. You learn by doing, and by falling over.</h2>
            {{-- <div class="d-flex">
                <a href="#about" class="btn-get-started scrollto">Get Started</a>  
            </div> --}}
        </div>
    </section>
    <!-- End Hero -->

<main id="main">
<section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Resources</h2>
                    <p>Check Our Resources and Startup Support Policies</p>
                </div>
                <div class="row" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-md-6">
                        <div class="icon-box">
                            <i class="bi bi-file-earmark-arrow-down-fill"></i>
                            <h4><a target="_blank" rel="noopener noreferrer" href="{{ asset('src/pdf/pdf1.pdf') }}">Scheme for assistance for Startups/Innovation – Gujarat Industrial Policy 2020</a></h4>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="icon-box">
                            <i class="bi bi-file-earmark-arrow-down-fill"></i>
                            <h4><a target="_blank" rel="noopener noreferrer" href="{{ asset('src/pdf/pdf2.pdf') }}">Extended support for End-to-End IP facilitation</a></h4>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="icon-box">
                            <i class="bi bi-file-earmark-arrow-down-fill"></i>
                            <h4><a target="_blank" rel="noopener noreferrer" href="{{ asset('src/pdf/pdf3.pdf') }}">Scheme of assistance for Incubators and Start ups under Electronics & IT/ITeS Start-up Policy for the State of Gujarat (2016-21)</a></h4>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="icon-box">
                            <i class="bi bi-file-earmark-arrow-down-fill"></i>
                            <h4><a target="_blank" rel="noopener noreferrer" href="{{ asset('src/pdf/pdf4.pdf') }}">Scheme of assistance for Biotechnology (BT) Industry Under Gujarat State Biotechnology Policy (2016-21)</a></h4>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="icon-box">
                            <i class="bi bi-file-earmark-arrow-down-fill"></i>
                            <h4><a target="_blank" rel="noopener noreferrer" href="{{ asset('src/pdf/pdf5.pdf') }}">Intellectual Property Guidelines Academia Gujarat</a></h4>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="icon-box">
                            <i class="bi bi-file-earmark-arrow-down-fill"></i>
                            <h4><a target="_blank" rel="noopener noreferrer" href="{{ asset('src/pdf/pdf6.pdf') }}">SSIP Education Policy</a></h4>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="icon-box">
                            <i class="bi bi-file-earmark-arrow-down-fill"></i>
                            <h4><a target="_blank" rel="noopener noreferrer" href="{{ asset('src/pdf/pdf7.pdf') }}">Start-Up and Innovation Policy 2021</a></h4>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="icon-box">
                            <i class="bi bi-file-earmark-arrow-down-fill"></i>
                            <h4><a target="_blank" rel="noopener noreferrer" href="{{ asset('src/pdf/pdf8.pdf') }}">Policy on Intellectual Property Rights</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container" data-aos="fade-up">
        </div>
        </section>
</main>
@endsection
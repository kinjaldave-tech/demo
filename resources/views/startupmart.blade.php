@extends('layout.layout')

@section('content')
<!-- ======= Hero Section ======= -->


    <section id="hero" class="hero-startup">
        <div class="hero-container" data-aos="fade-up" data-aos-delay="150">
            <h1>Coming Soon</h1>
			<h2>Stay tuned for something amazing!</h2>
            {{-- <h2>In the end, a vision without the ability to execute it is probably a hallucination.</h2> --}}
            {{-- <div class="d-flex">
                <a href="#about" class="btn-get-started scrollto">Get Started</a>  
            </div> --}}
        </div>
    </section>
    <!-- End Hero -->

<main id="main">
<div class="container" data-aos="fade-up">
                <div class="section-title" style="margin-top:20px">
                    <h2>Startups</h2>
                    <p> Our Incubated Startups</p>
                </div>


<section id=timeline>
	
	<div class="demo-card-wrapper">
		<div class="demo-card demo-card--step1">
			<div class="head">
				<div class="number-box">
					<span>01</span>
				</div>
				<h2><span class="small">Subtitle</span> Technology</h2>
			</div>
			<div class="body">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta reiciendis deserunt doloribus consequatur, laudantium odio dolorum laboriosam.</p>
				<img src="{{  asset('src/img/01.jpg') }}" alt="Graphic">
			</div>
		</div>

		<div class="demo-card demo-card--step2">
			<div class="head">
				<div class="number-box">
					<span>02</span>
				</div>
				<h2><span class="small">Subtitle</span> Confidence</h2>
			</div>
			<div class="body">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta reiciendis deserunt doloribus consequatur, laudantium odio dolorum laboriosam.</p>
				<img src="{{  asset('src/img/01.jpg') }}" alt="Graphic">
			</div>
		</div>

		<div class="demo-card demo-card--step3">
			<div class="head">
				<div class="number-box">
					<span>03</span>
				</div>
				<h2><span class="small">Subtitle</span> Adaptation</h2>
			</div>
			<div class="body">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta reiciendis deserunt doloribus consequatur, laudantium odio dolorum laboriosam.</p>
				<img src="{{  asset('src/img/01.jpg') }}" alt="Graphic">
			</div>
		</div>

		<div class="demo-card demo-card--step4">
			<div class="head">
				<div class="number-box">
					<span>04</span>
				</div>
				<h2><span class="small">Subtitle</span> Consistency</h2>
			</div>
			<div class="body">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta reiciendis deserunt doloribus consequatur, laudantium odio dolorum laboriosam.</p>
				<img src="{{  asset('src/img/01.jpg') }}" alt="Graphic">
			</div>
		</div>

		<div class="demo-card demo-card--step5">
			<div class="head">
				<div class="number-box">
					<span>05</span>
				</div>
				<h2><span class="small">Subtitle</span> Conversion</h2>
			</div>
			<div class="body">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta reiciendis deserunt doloribus consequatur, laudantium odio dolorum laboriosam.</p>
				<img src="{{  asset('src/img/01.jpg') }}" alt="Graphic">
			</div>
		</div>

        <div class="demo-card demo-card--step6">
			<div class="head">
				<div class="number-box">
					<span>06</span>
				</div>
				<h2><span class="small">Subtitle</span> Conversion</h2>
			</div>
			<div class="body">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta reiciendis deserunt doloribus consequatur, laudantium odio dolorum laboriosam.</p>
				<img src="{{  asset('src/img/01.jpg') }}" alt="Graphic">
			</div>
		</div>
    
	</div>
</section>

</div>               
</main>
@endsection
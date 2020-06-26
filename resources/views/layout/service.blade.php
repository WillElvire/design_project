@extends('welcome')
@section('container')



		
			  
@include('layout/partials/header')
			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Services				
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="/services"> Services</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- Start service Area -->
			<section class="service-area section-gap" id="service">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-12 pb-50 header-text text-center">

							
							
							<h1 class="mb-10">Ce que nos offrons à nos client</h1>
							
						</div>
					</div>						
					<div class="row">
						<div class="col-lg-4">
							<img src="img/g3.jpg">
							<div>
								<br>
								<br>
								
								<a href="#"><h4>Interior Design</h4></a>
								<p>
									Sony laptops are among the most well known laptops on today’s market. Sony is a name that over time has established itself as creating a solid product.
								</p>
							</div>
						</div>	
						<div class="col-lg-4">
							<img src="img/g2.jpg">
							
							<div>
								<br>
								<br>
								<a href="#"><h4>Architecture Design</h4></a>
								<p>
									Computer users and programmers have become so accustomed to using Windows, even for the changing capabilities and the appearances of the graphical.
								</p>
							</div>
						</div>	
						<div class="col-lg-4">
							<img src="img/g3.jpg">
							<div >
								<br>
								<br>
								<a href="#"><h4>Concept Design</h4></a>
								<p>
									Can you imagine what we will be downloading in another twenty years? I mean who would have ever thought that you could record sound.
								</p>
							</div>
						</div>																													
					</div>
				</div>	
			</section>
			<!-- End service Area -->

	

			<section class="gallery-area pb-120">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-12 pb-40 header-text text-center">
							<h1 class="pb-10">Nos récents Travaux</h1>
							
						</div>
					</div>							
					<div class="row">
						<div class="col-lg-8">
							<div class="single-gallery">
								<div class="content">
								    <a href="#" target="_blank">
								      <div class="content-overlay"></div>
								  		 <img class="content-image img-fluid d-block mx-auto" src="img/g1.jpg" alt="">
								      <div class="content-details fadeIn-bottom">
								        <h3 class="content-title mx-auto">Lavendar ambient interior</h3>
								        <a href="project-details.html" class="primary-btn text-uppercase mt-20">More Details</a>
								      </div>
								    </a>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-gallery">
								<div class="content">
								    <a href="#" target="_blank">
								      <div class="content-overlay"></div>
								  		 <img class="content-image img-fluid d-block mx-auto" src="img/g2.jpg" alt="">
								      <div class="content-details fadeIn-bottom">
								        <h3 class="content-title mx-auto">Ambient interior</h3>
								        <a href="project-details.html" class="primary-btn text-uppercase mt-20">More Details</a>
								      </div>
								    </a>
								</div>
							</div>
						</div>	
						<div class="col-lg-4">
							<div class="single-gallery">
								<div class="content">
								    <a href="#" target="_blank">
								      <div class="content-overlay"></div>
								  		 <img class="content-image img-fluid d-block mx-auto" src="img/g3.jpg" alt="">
								      <div class="content-details fadeIn-bottom">
								        <h3 class="content-title mx-auto">Ambient interior</h3>
								        <a href="project-details.html" class="primary-btn text-uppercase mt-20">More Details</a>
								      </div>
								    </a>
								</div>
							</div>
						</div>

						
						<div class="col-lg-8">
							<div class="single-gallery">
								<div class="content">
								    <a href="#" target="_blank">
								      <div class="content-overlay"></div>
								  		 <img class="content-image img-fluid d-block mx-auto" src="img/g4.jpg" alt="">
								      <div class="content-details fadeIn-bottom">
								        <h3 class="content-title mx-auto">Lavendar ambient interior</h3>
								        <a href="project-details.html" class="primary-btn text-uppercase mt-20">More Details</a>
								      </div>
								    </a>
								</div>
							</div>
						</div>												
					</div>
				</div>	

				
			</section>

			<!-- Start callto-action Area -->
			
			<section class="callto-action-area pt-120">
				<div class="container">
					<div class="row justify-content-center">
						<div class="callto-action-wrap col-lg-12 relative section-gap">
							<div class="content">
								<h1>
									Vous recherchez la qualité <br>
									n'hesitez pas à nous contacter
								</h1>
								
								<a href="#" class="primary-btn text-uppercase"  style="border-radius: 20px;background:rgb(180, 0, 45)">Nous contacter </a>			
							</div>							
						</div>
					</div>
				</div>	
			</section>
			
			<!-- End callto-action Area -->

			<br>
			<br>
			<br>
			<br>
			<br>

			<hr>

			

@include('layout/partials/footer')

			
	


@stop
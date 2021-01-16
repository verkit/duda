@extends('guest.layout')
@section('script')
    <script src="{{asset('Rogan/rogan-c/html/vendor/jquery.2.2.3.min.js')}}"></script>
@stop
@section('content')
<div class="text-inner-banner-one pos-r">
				<div class="shape-wrapper">
					<svg class="img-shape shape-one">
					<path fill-rule="evenodd"  fill="rgb(255, 223, 204)"
					 d="M6.000,12.000 C9.314,12.000 12.000,9.314 12.000,6.000 C12.000,2.686 9.314,-0.000 6.000,-0.000 C2.686,-0.000 -0.000,2.686 -0.000,6.000 C-0.000,9.314 2.686,12.000 6.000,12.000 Z"/>
					</svg>
					<svg class="img-shape shape-two">
					<path fill-rule="evenodd"  fill="rgb(182, 255, 234)"
					 d="M6.000,12.000 C9.314,12.000 12.000,9.314 12.000,6.000 C12.000,2.686 9.314,-0.000 6.000,-0.000 C2.686,-0.000 -0.000,2.686 -0.000,6.000 C-0.000,9.314 2.686,12.000 6.000,12.000 Z"/>
					</svg>
					<svg class="img-shape shape-three">
					<path fill-rule="evenodd"  fill="rgb(181, 198, 255)"
					 d="M12.000,24.000 C18.627,24.000 24.000,18.627 24.000,12.000 C24.000,5.372 18.627,-0.000 12.000,-0.000 C5.372,-0.000 -0.000,5.372 -0.000,12.000 C-0.000,18.627 5.372,24.000 12.000,24.000 Z"/>
					</svg>
					<svg class="img-shape shape-four">
					<path fill-rule="evenodd"  fill="rgb(255, 156, 161)"
					 d="M7.500,15.000 C11.642,15.000 15.000,11.642 15.000,7.500 C15.000,3.358 11.642,-0.000 7.500,-0.000 C3.358,-0.000 -0.000,3.358 -0.000,7.500 C-0.000,11.642 3.358,15.000 7.500,15.000 Z"/>
					</svg>
					<svg class="img-shape shape-five">
					<path fill-rule="evenodd"  fill="rgb(178, 236, 255)"
					 d="M12.500,25.000 C19.403,25.000 25.000,19.403 25.000,12.500 C25.000,5.596 19.403,-0.000 12.500,-0.000 C5.596,-0.000 -0.000,5.596 -0.000,12.500 C-0.000,19.403 5.596,25.000 12.500,25.000 Z"/>
					</svg>
				</div> <!-- /.shape-wrapper -->
				<div class="container">
					<p>Services</p>
					<h2 class="pt-30 pb-15">Provided Services</h2>
					<p class="sub-heading">From a team of passionate creators working side-by-side with our partners to deliver engaging digital and physical campaigns.</p>
				</div>
			</div> <!-- /.text-inner-banner-one -->



			<!-- 
			=============================================
				Intro Text
			============================================== 
			-->
			<div class="intro-text-block pos-r" style="background-color: #FFFBEB;">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 order-lg-last">
							<h5>We offer planty of digital service with our <span>expert with great support.</span></h5>
							<p>Lorem ipsum dolor sit amet, hendrerit omitantur mel, est animal iracundia. Ius te altera essent incorrupte. Id alien accu consettur eam, nibh aliquam iracundia.</p>
							<!-- <h6>Rashed Kabir, <span>CEO CreativeGigs</span></h6> -->
							<!-- <img src="images/home/sign3.png" alt=""> -->
						</div>
						<div class="col-lg-6 order-lg-first">
							<div class="custom-svg-service-v3-2">
                                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                                <lottie-player
                                    src="https://assets9.lottiefiles.com/packages/lf20_fL7avv.json"  background="transparent"  speed="1"  style="width: 1024px; height: 608px;"  loop  autoplay >
                                </lottie-player>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- /.intro-text-block -->










			
			<section class="pricing-table-section pt-125 pb-125 rpt-60 rpb-60">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-12 text-center">
							<div class="section-title">
								<h3>PRICING</h3>
								<h2>Best pricing plan ever, Choose yours</h2>
							</div>
						</div>
					</div>
		
						<!--pricing-table-only mobile button -->
					<div class="pricing-mobile-btn d-block d-lg-none">
						<ul class="filter-btn-wrap nav nav-tabs d-flex justify-content-center">
							<li><a data-toggle="tab" href="#monthly" class="filter-btn monthly active">Monthly</a></li>
							<li><a data-toggle="tab" href="#yearly" class="filter-btn yearly">Yearly</a></li>
						</ul>
					</div>
		
					<div class="pricing-table-wrap d-flex">
		
						<!--single pricing-table-box -->
						<div class="pricing-table-box first d-none d-lg-block">
							
							<!--pricing-table-large device button -->
							<ul class="filter-btn-wrap nav nav-tabs d-flex justify-content-center">
								<li><a data-toggle="tab" href="#monthly" class="filter-btn monthly active">Monthly</a></li>
								<li><a data-toggle="tab" href="#yearly" class="filter-btn yearly">Yearly</a></li>
							</ul>
		
							<div class="text">
								<p>Save 17% on <br>yearly plan</p>
							</div>
							<div class="pricing-table-facilities">
								<ul>
									<li>12 Month support</li>
									<li>100 Connections  </li>
									<li>Analytic reports</li>
									<li>24/7 Support</li>
								</ul>
							</div>
						</div>
		
		
		
						<div class="tab-content">
							<!-- start tab-content-monthly-->
							<div id="monthly" class="tab-pane animated fadeIn active table-tab-content-inner d-flex">
		
								<!--single pricing-table-box -->
								<div class="pricing-table-box second">
									<div class="title">
										<h4>Standard</h4>
									</div>
									<div class="price-wrap d-flex justify-content-center">
										<p class="dollor">$</p>
										<h2 class="d-flex">
											<span class="price">60</span>
										</h2>
										<div class="month d-flex justify-content-center align-items-end">
											<p>/mo</p>
										</div>
									</div>
									<div class="text">
										<p>Sleep after 30 mins of activity</p>
									</div>
									<div class="pricing-table-facilities">
										<ul>
											<li>
												<span class="cancel flaticon-wrong"></i>
												<span class="d-block d-lg-none">12 Month support</span>
											</li>
											<li>
												<span class="cancel flaticon-wrong"></span>
												<span class="d-block d-lg-none">100 Connections</span>
											</li>
											<li>
												<span class="check flaticon-tick"></span>
												<span class="d-block d-lg-none">Analytic reports</span>
											</li>
											<li>
												<span class="cancel flaticon-wrong"></span>
												<span class="d-block d-lg-none">24/7 Support</span>
											</li>
										</ul>
									</div>
									<div class="pricing-table-btn">
										<a href="#" class="choose-button">Get Now</a>
									</div>
								</div>
		
								<!--single pricing-table-box -->
								<div class="pricing-table-box third">
									<div class="title">
										<h4>Standard</h4>
									</div>
									<div class="price-wrap d-flex justify-content-center">
										<p class="dollor d-flex justify-content-center align-items-start">$</p>
										<h2 class="d-flex">
											<span class="price">160</span>
										</h2>
										<div class="month d-flex justify-content-center align-items-end">
											<p>/mo</p>
										</div>
									</div>
									<div class="text">
										<p>Multiple workers for more powerful apps</p>
									</div>
									<div class="pricing-table-facilities">
										<ul>
											<li>
												<span class="check flaticon-tick"></span>
												<span class="d-block d-lg-none">12 Month support</span>
											</li>
											<li>
												<span class="check flaticon-tick"></span>
												<span class="d-block d-lg-none">100 Connections</span>
											</li>
											<li>
												<span class="cancel flaticon-wrong"></span>
												<span class="d-block d-lg-none">Analytic reports</span>
											</li>
											<li>
												<span class="check flaticon-tick"></span>
												<span class="d-block d-lg-none">24/7 Support</span>
											</li>
										</ul>
									</div>
									<div class="pricing-table-btn">
										<a href="#" class="choose-button">Get Now</a>
									</div>
								</div>
		
								<!--single pricing-table-box -->
								<div class="pricing-table-box forth">
									<div class="title">
										<h4>Standard</h4>
									</div>
									<div class="price-wrap d-flex justify-content-center">
										<p class="dollor d-flex justify-content-center align-items-start">$</p>
										<h2 class="d-flex">
											<span class="price">350</span>
										</h2>
										<div class="month d-flex justify-content-center align-items-end">
											<p>/mo</p>
										</div>
									</div>
									<div class="text">
										<p>Simple horizontal scalability</p>
									</div>
									<div class="pricing-table-facilities">
										<ul>
											<li>
												<span class="check flaticon-tick"></span>
												<span class="d-block d-lg-none">12 Month support</span>
											</li>
											<li>
												<span class="check flaticon-tick"></span>
												<span class="d-block d-lg-none">100 Connections</span>
											</li>
											<li>
												<span class="check flaticon-tick"></span>
												<span class="d-block d-lg-none">Analytic reports</span>
											</li>
											<li>
												<span class="check flaticon-tick"></span>
												<span class="d-block d-lg-none">24/7 Support</span>
											</li>
										</ul>
									</div>
									<div class="pricing-table-btn">
										<a href="#" class="choose-button">Get Now</a>
									</div>
								</div>
		
		
		
							</div>
							<!-- end tab-content-monthly-->
		
							<!-- start tab-content-yearly-->
							<div id="yearly" class="tab-pane animated fade table-tab-content-inner d-flex">
		
		
							<!--single pricing-table-box -->
								<div class="pricing-table-box second">
									<div class="title">
										<h4>Standard</h4>
									</div>
									<div class="price-wrap d-flex justify-content-center">
										<p class="dollor">$</p>
										<h2 class="d-flex">
											<span class="price">90</span>
										</h2>
										<div class="month d-flex justify-content-center align-items-end">
											<p>/mo</p>
										</div>
									</div>
									<div class="text">
										<p>Sleep after 30 mins of activity</p>
									</div>
									<div class="pricing-table-facilities">
										<ul>
											<li>
												<span class="cancel flaticon-wrong"></span>
												<span class="d-block d-lg-none">12 Month support</span>
											</li>
											<li>
												<span class="cancel flaticon-wrong"></span>
												<span class="d-block d-lg-none">100 Connections</span>
											</li>
											<li>
												<span class="check flaticon-tick"></span>
												<span class="d-block d-lg-none">Analytic reports</span>
											</li>
											<li>
												<span class="cancel flaticon-wrong"></span>
												<span class="d-block d-lg-none">24/7 Support</span>
											</li>
										</ul>
									</div>
									<div class="pricing-table-btn">
										<a href="#" class="choose-button">Get Now</a>
									</div>
								</div>
		
								<!--single pricing-table-box -->
								<div class="pricing-table-box third">
									<div class="title">
										<h4>Standard</h4>
									</div>
									<div class="price-wrap d-flex justify-content-center">
										<p class="dollor d-flex justify-content-center align-items-start">$</p>
										<h2 class="d-flex">
											<span class="price">560</span>
										</h2>
										<div class="month d-flex justify-content-center align-items-end">
											<p>/mo</p>
										</div>
									</div>
									<div class="text">
										<p>Multiple workers for more powerful apps</p>
									</div>
									<div class="pricing-table-facilities">
										<ul>
											<li>
												<span class="cancel flaticon-wrong"></span>
												<span class="d-block d-lg-none">12 Month support</span>
											</li>
											<li>
												<span class="cancel flaticon-wrong"></span>
												<span class="d-block d-lg-none">100 Connections</span>
											</li>
											<li>
												<span class="check flaticon-tick"></span>
												<span class="d-block d-lg-none">Analytic reports</span>
											</li>
											<li>
												<span class="check flaticon-tick"></span>
												<span class="d-block d-lg-none">24/7 Support</span>
											</li>
										</ul>
									</div>
									<div class="pricing-table-btn">
										<a href="#" class="choose-button">Get Now</a>
									</div>
								</div>
		
								<!--single pricing-table-box -->
								<div class="pricing-table-box forth">
									<div class="title">
										<h4>Standard</h4>
									</div>
									<div class="price-wrap d-flex justify-content-center">
										<p class="dollor d-flex justify-content-center align-items-start">$</p>
										<h2 class="d-flex">
											<span class="price">950</span>
										</h2>
										<div class="month d-flex justify-content-center align-items-end">
											<p>/mo</p>
										</div>
									</div>
									<div class="text">
										<p>Simple horizontal scalability</p>
									</div>
									<div class="pricing-table-facilities">
										<ul>
											<li>
												<span class="cancel flaticon-wrong"></span>
												<span class="d-block d-lg-none">12 Month support</span>
											</li>
											<li>
												<span class="cancel flaticon-wrong"></span>
												<span class="d-block d-lg-none">100 Connections</span>
											</li>
											<li>
												<span class="check flaticon-tick"></span>
												<span class="d-block d-lg-none">Analytic reports</span>
											</li>
											<li>
												<span class="check flaticon-tick"></span>
												<span class="d-block d-lg-none">24/7 Support</span>
											</li>
										</ul>
									</div>
									<div class="pricing-table-btn">
										<a href="#" class="choose-button">Get Now</a>
									</div>
								</div>
		
							</div>
							<!-- end tab-content-yearly-->
		
						</div>
		
					</div>
		
				</div>
				<!-- price table section shape -->
				<div class="big-shape shape15"><img src="../Rogan/rogan-b/html/images/menu-img/pt1.png" alt="shape"></div>
			</section>
		
			<!-- 
			=============================================
				Our Service
			============================================== 
			-->
			
			<div class="agn-our-gallery">
				<img src="../Rogan/rogan-c/html/images/shape/shape-62.svg" alt="" class="shape-one">
				<img src="../Rogan/rogan-c/html/images/shape/shape-55.svg" alt="" class="shape-two">
				<img src="../Rogan/rogan-c/html/images/shape/shape-61.svg" alt="" class="shape-three">
				<div class="container">
					<div class="theme-title-one">
						<h2 class="main-title">Check some of our <br>Recent work.</h2>
						<p class="bottom-title">Click the below button to check all of our work.</p>
					</div> <!-- /.theme-title-one -->
				</div> <!-- /.container -->
				<div class="main-wrapper">
					<a href="product-full-width.html" class="view-gallery">View Gallery</a>
					<div class="gallery-slider lightgallery">
						<div class="item">
							<div class="img-box">
								<img src="../Rogan/rogan-c/html/images/portfolio/1.jpg" alt="">
								<div class="hover-content">
									<a href="images/portfolio/1.jpg" class="icon zoom fancybox" data-fancybox="images" data-caption="My caption">+</a>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="img-box">
								<img src="../Rogan/rogan-c/html/images/portfolio/2.jpg" alt="">
								<div class="hover-content">
									<a href="images/portfolio/2.jpg" class="icon zoom fancybox" data-fancybox="images" data-caption="My caption">+</a>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="img-box">
								<img src="../Rogan/rogan-c/html/images/portfolio/3.jpg" alt="">
								<div class="hover-content">
									<a href="images/portfolio/3.jpg" class="icon zoom fancybox" data-fancybox="images" data-caption="My caption">+</a>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="img-box">
								<img src="../Rogan/rogan-c/html/images/portfolio/4.jpg" alt="">
								<div class="hover-content">
									<a href="images/portfolio/4.jpg" class="icon zoom fancybox" data-fancybox="images" data-caption="My caption">+</a>
								</div>
							</div>
						</div>
					</div> <!-- /.gallery-slider -->
				</div> <!-- /.main-wrapper -->
			</div>
@stop

@section('css')
	<link rel="stylesheet" href="{{asset('Rogan/style-outer/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('Rogan/style-outer/css/responsive.css')}}">
	<!-- <link rel="stylesheet" href="{{asset('Rogan/style-outer/css/flaticon.css')}}"> -->
	<link rel="stylesheet" href="{{asset('Rogan/style-outer/css/global.css')}}">
	<link rel="stylesheet" href="{{asset('Rogan/style-outer/css/mainmenu.css')}}">
	<link rel="stylesheet" href="{{asset('Rogan/style-outer/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('Rogan/style-outer/css/responsive.css')}}">
@stop
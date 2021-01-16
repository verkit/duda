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
			<div class="intro-text-block pos-r" style="background-color: #F4E8FC;">
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
								    src="https://assets7.lottiefiles.com/packages/lf20_G621vj.json"  background="transparent"  speed="1"  style="width: 1024px; height: 608px;"  loop  autoplay >
								</lottie-player>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- /.intro-text-block -->

<!-- Tabs -->
<div class="sass-faq-section">
				<div class="section-shape-one"><img src="../Rogan/rogan-c/html/images/shape/shape-18.svg" alt=""></div>
				<img src="{{asset('Rogan/rogan-c/html/images/shape/shape-26.svg')}}" alt="" class="section-shape-two">
				<img src="{{asset('Rogan/rogan-c/html/images/shape/shape-29.svg')}}" alt="" class="section-shape-three">
				<img src="{{asset('Rogan/rogan-c/html/images/shape/shape-30.svg')}}" alt="" class="section-shape-four">
				<div class="container">
					<div class="theme-title-one text-center hide-pr">
						<div class="icon-box hide-pr">
							<img src="{{asset('Rogan/rogan-c/html/images/shape/bg-shape1.svg')}}" alt="" class="bg-shape">
							<img src="{{asset('Rogan/rogan-c/html/images/icon/icon29.svg')}}" alt="" class="icon">
						</div>
						<h2 class="main-title">Questions? Look here.</h2>
					</div> <!-- /.theme-title-one -->
					<p class="sub-heading">Can’t find answer? call us at <a href="#">+880 1820 788 800</a> or email us <a href="#">xcoinc@gmail.com</a></p>


					<div class="faq-tab-wrapper">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs">
						    <li class="nav-item">
						      <a class="nav-link active" data-toggle="tab" href="#general">Starter</a>
						    </li>
						    <li class="nav-item">
						      <a class="nav-link" data-toggle="tab" href="#payment">Startup</a>
						    </li>
						    <li class="nav-item">
						      <a class="nav-link" data-toggle="tab" href="#feature">Professional</a>
						    </li>
						    <li class="nav-item">
						      <a class="nav-link" data-toggle="tab" href="#billing">Business</a>
						    </li>
						    <li class="nav-item">
						      <a class="nav-link" data-toggle="tab" href="#account">Enterprise</a>
						    </li>
						    <!-- <li class="nav-item">
						      <a class="nav-link" data-toggle="tab" href="#service">Services</a>
						    </li> -->
						</ul>

						<!-- Tab panes -->
						<div class="tab-content">
							<!-- Single Tab -->
						    <div id="general" class="tab-pane fade show active">
							    <div class="container">
									<div class="element-section mb-200">
										<div class="inner-wrapper our-service-sass-custom">
												<div class="row">
													<div class="col-lg-4 single-block" data-aos="fade-up">
														<div class="service-block">
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<div class="hover-content"></div>
															<!-- <i class="flaticon-web icon-s"></i> -->
															<div class="pr-header-custom">
																<h4 class="title">Paket 1</h4>
																<h4 class="title-2" style="font-size: 40px">$39</h4>
																<div class="package">Weekly</div>
															</div>
															<hr class="line-custom">
															<h5 class="title"><a href="#">User Friendly dashboard & Cool Interface.</a></h5>
															<p>Lorem ipsum dolor si amet, an dusino situ  sint pertinacia constituto, mir es dignsius quo great.</p>
															<!-- <a href="#" class="detail-button"><i class="flaticon-next-1"></i></a> -->
															<div class="pr-footer-custom">
																<a href="#" class="btn-custom">Upgrade</a>
																<!-- <a href="#" class="trial-button">Get your 30 day free trial</a> -->
															</div>
														</div> <!-- /.service-block -->
													</div> <!-- /.single-block -->
													<div class="col-lg-4 single-block" data-aos="fade-up">
														<div class="service-block">
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<div class="hover-content"></div>
															<!-- <i class="flaticon-web icon-s"></i> -->
															<div class="pr-header-custom">
																<h4 class="title">Paket 2</h4>
																<h4 class="title-2" style="font-size: 40px">$39</h4>
																<div class="package">Weekly</div>
															</div>
															<hr class="line-custom">
															<h5 class="title"><a href="#">User Friendly dashboard & Cool Interface.</a></h5>
															<p>Lorem ipsum dolor si amet, an dusino situ  sint pertinacia constituto, mir es dignsius quo great.</p>
															<!-- <a href="#" class="detail-button"><i class="flaticon-next-1"></i></a> -->
															<div class="pr-footer-custom">
																<a href="#" class="btn-custom">Upgrade</a>
																<!-- <a href="#" class="trial-button">Get your 30 day free trial</a> -->
															</div>
														</div> <!-- /.service-block -->
													</div>
													<div class="col-lg-4 single-block" data-aos="fade-up">
														<div class="service-block">
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<div class="hover-content"></div>
															<!-- <i class="flaticon-web icon-s"></i> -->
															<div class="pr-header-custom">
																<h4 class="title">Paket 3</h4>
																<h4 class="title-2" style="font-size: 40px">$39</h4>
																<div class="package">Weekly</div>
															</div>
															<hr class="line-custom">
															<h5 class="title"><a href="#">User Friendly dashboard & Cool Interface.</a></h5>
															<p>Lorem ipsum dolor si amet, an dusino situ  sint pertinacia constituto, mir es dignsius quo great.</p>
															<!-- <a href="#" class="detail-button"><i class="flaticon-next-1"></i></a> -->
															<div class="pr-footer-custom">
																<a href="#" class="btn-custom">Upgrade</a>
																<!-- <a href="#" class="trial-button">Get your 30 day free trial</a> -->
															</div>
														</div> <!-- /.service-block -->
													</div>
												</div> <!-- /.row -->
										</div>
									</div>
								</div>
						    </div> 


							<!-- Single Tab -->
						    <div id="payment" class="tab-pane fade">
								<div class="container">
									<div class="element-section mb-200">
										<div class="inner-wrapper our-service-sass-custom">
												<div class="row">
													<div class="col-lg-4 single-block" data-aos="fade-up">
														<div class="service-block">
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<div class="hover-content"></div>
															<!-- <i class="flaticon-web icon-s"></i> -->
															<div class="pr-header-custom">
																<h4 class="title">Paket 1</h4>
																<h4 class="title-2" style="font-size: 40px">$39</h4>
																<div class="package">Weekly</div>
															</div>
															<hr class="line-custom">
															<h5 class="title"><a href="#">User Friendly dashboard & Cool Interface.</a></h5>
															<p>Lorem ipsum dolor si amet, an dusino situ  sint pertinacia constituto, mir es dignsius quo great.</p>
															<!-- <a href="#" class="detail-button"><i class="flaticon-next-1"></i></a> -->
															<div class="pr-footer-custom">
																<a href="#" class="btn-custom">Upgrade</a>
																<!-- <a href="#" class="trial-button">Get your 30 day free trial</a> -->
															</div>
														</div> <!-- /.service-block -->
													</div> <!-- /.single-block -->
													<div class="col-lg-4 single-block" data-aos="fade-up">
														<div class="service-block">
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<div class="hover-content"></div>
															<!-- <i class="flaticon-web icon-s"></i> -->
															<div class="pr-header-custom">
																<h4 class="title">Paket 2</h4>
																<h4 class="title-2" style="font-size: 40px">$39</h4>
																<div class="package">Weekly</div>
															</div>
															<hr class="line-custom">
															<h5 class="title"><a href="#">User Friendly dashboard & Cool Interface.</a></h5>
															<p>Lorem ipsum dolor si amet, an dusino situ  sint pertinacia constituto, mir es dignsius quo great.</p>
															<!-- <a href="#" class="detail-button"><i class="flaticon-next-1"></i></a> -->
															<div class="pr-footer-custom">
																<a href="#" class="btn-custom">Upgrade</a>
																<!-- <a href="#" class="trial-button">Get your 30 day free trial</a> -->
															</div>
														</div> <!-- /.service-block -->
													</div>
													<div class="col-lg-4 single-block" data-aos="fade-up">
														<div class="service-block">
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<div class="hover-content"></div>
															<!-- <i class="flaticon-web icon-s"></i> -->
															<div class="pr-header-custom">
																<h4 class="title">Paket 3</h4>
																<h4 class="title-2" style="font-size: 40px">$39</h4>
																<div class="package">Weekly</div>
															</div>
															<hr class="line-custom">
															<h5 class="title"><a href="#">User Friendly dashboard & Cool Interface.</a></h5>
															<p>Lorem ipsum dolor si amet, an dusino situ  sint pertinacia constituto, mir es dignsius quo great.</p>
															<!-- <a href="#" class="detail-button"><i class="flaticon-next-1"></i></a> -->
															<div class="pr-footer-custom">
																<a href="#" class="btn-custom">Upgrade</a>
																<!-- <a href="#" class="trial-button">Get your 30 day free trial</a> -->
															</div>
														</div> <!-- /.service-block -->
													</div>
												</div> <!-- /.row -->
										</div>
									</div>
								</div>
						    </div>

							<!-- Single Tab -->
						    <div id="feature" class="tab-pane fade">
								<div class="container">
									<div class="element-section mb-200">
										<div class="inner-wrapper our-service-sass-custom">
												<div class="row">
													<div class="col-lg-4 single-block" data-aos="fade-up">
														<div class="service-block">
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<div class="hover-content"></div>
															<!-- <i class="flaticon-web icon-s"></i> -->
															<div class="pr-header-custom">
																<h4 class="title">Paket 1</h4>
																<h4 class="title-2" style="font-size: 40px">$39</h4>
																<div class="package">Weekly</div>
															</div>
															<hr class="line-custom">
															<h5 class="title"><a href="#">User Friendly dashboard & Cool Interface.</a></h5>
															<p>Lorem ipsum dolor si amet, an dusino situ  sint pertinacia constituto, mir es dignsius quo great.</p>
															<!-- <a href="#" class="detail-button"><i class="flaticon-next-1"></i></a> -->
															<div class="pr-footer-custom">
																<a href="#" class="btn-custom">Upgrade</a>
																<!-- <a href="#" class="trial-button">Get your 30 day free trial</a> -->
															</div>
														</div> <!-- /.service-block -->
													</div> <!-- /.single-block -->
													<div class="col-lg-4 single-block" data-aos="fade-up">
														<div class="service-block">
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<div class="hover-content"></div>
															<!-- <i class="flaticon-web icon-s"></i> -->
															<div class="pr-header-custom">
																<h4 class="title">Paket 2</h4>
																<h4 class="title-2" style="font-size: 40px">$39</h4>
																<div class="package">Weekly</div>
															</div>
															<hr class="line-custom">
															<h5 class="title"><a href="#">User Friendly dashboard & Cool Interface.</a></h5>
															<p>Lorem ipsum dolor si amet, an dusino situ  sint pertinacia constituto, mir es dignsius quo great.</p>
															<!-- <a href="#" class="detail-button"><i class="flaticon-next-1"></i></a> -->
															<div class="pr-footer-custom">
																<a href="#" class="btn-custom">Upgrade</a>
																<!-- <a href="#" class="trial-button">Get your 30 day free trial</a> -->
															</div>
														</div> <!-- /.service-block -->
													</div>
													<div class="col-lg-4 single-block" data-aos="fade-up">
														<div class="service-block">
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<div class="hover-content"></div>
															<!-- <i class="flaticon-web icon-s"></i> -->
															<div class="pr-header-custom">
																<h4 class="title">Paket 3</h4>
																<h4 class="title-2" style="font-size: 40px">$39</h4>
																<div class="package">Weekly</div>
															</div>
															<hr class="line-custom">
															<h5 class="title"><a href="#">User Friendly dashboard & Cool Interface.</a></h5>
															<p>Lorem ipsum dolor si amet, an dusino situ  sint pertinacia constituto, mir es dignsius quo great.</p>
															<!-- <a href="#" class="detail-button"><i class="flaticon-next-1"></i></a> -->
															<div class="pr-footer-custom">
																<a href="#" class="btn-custom">Upgrade</a>
																<!-- <a href="#" class="trial-button">Get your 30 day free trial</a> -->
															</div>
														</div> <!-- /.service-block -->
													</div>
												</div> <!-- /.row -->
										</div>
									</div>
								</div>
						    </div>

							<!-- Single Tab -->
						    <div id="billing" class="tab-pane fade">
								<div class="container">
									<div class="element-section mb-200">
										<div class="inner-wrapper our-service-sass-custom">
												<div class="row">
													<div class="col-lg-4 single-block" data-aos="fade-up">
														<div class="service-block">
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<div class="hover-content"></div>
															<!-- <i class="flaticon-web icon-s"></i> -->
															<div class="pr-header-custom">
																<h4 class="title">Paket 1</h4>
																<h4 class="title-2" style="font-size: 40px">$39</h4>
																<div class="package">Weekly</div>
															</div>
															<hr class="line-custom">
															<h5 class="title"><a href="#">User Friendly dashboard & Cool Interface.</a></h5>
															<p>Lorem ipsum dolor si amet, an dusino situ  sint pertinacia constituto, mir es dignsius quo great.</p>
															<!-- <a href="#" class="detail-button"><i class="flaticon-next-1"></i></a> -->
															<div class="pr-footer-custom">
																<a href="#" class="btn-custom">Upgrade</a>
																<!-- <a href="#" class="trial-button">Get your 30 day free trial</a> -->
															</div>
														</div> <!-- /.service-block -->
													</div> <!-- /.single-block -->
													<div class="col-lg-4 single-block" data-aos="fade-up">
														<div class="service-block">
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<div class="hover-content"></div>
															<!-- <i class="flaticon-web icon-s"></i> -->
															<div class="pr-header-custom">
																<h4 class="title">Paket 2</h4>
																<h4 class="title-2" style="font-size: 40px">$39</h4>
																<div class="package">Weekly</div>
															</div>
															<hr class="line-custom">
															<h5 class="title"><a href="#">User Friendly dashboard & Cool Interface.</a></h5>
															<p>Lorem ipsum dolor si amet, an dusino situ  sint pertinacia constituto, mir es dignsius quo great.</p>
															<!-- <a href="#" class="detail-button"><i class="flaticon-next-1"></i></a> -->
															<div class="pr-footer-custom">
																<a href="#" class="btn-custom">Upgrade</a>
																<!-- <a href="#" class="trial-button">Get your 30 day free trial</a> -->
															</div>
														</div> <!-- /.service-block -->
													</div>
													<div class="col-lg-4 single-block" data-aos="fade-up">
														<div class="service-block">
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<div class="hover-content"></div>
															<!-- <i class="flaticon-web icon-s"></i> -->
															<div class="pr-header-custom">
																<h4 class="title">Paket 3</h4>
																<h4 class="title-2" style="font-size: 40px">$39</h4>
																<div class="package">Weekly</div>
															</div>
															<hr class="line-custom">
															<h5 class="title"><a href="#">User Friendly dashboard & Cool Interface.</a></h5>
															<p>Lorem ipsum dolor si amet, an dusino situ  sint pertinacia constituto, mir es dignsius quo great.</p>
															<!-- <a href="#" class="detail-button"><i class="flaticon-next-1"></i></a> -->
															<div class="pr-footer-custom">
																<a href="#" class="btn-custom">Upgrade</a>
																<!-- <a href="#" class="trial-button">Get your 30 day free trial</a> -->
															</div>
														</div> <!-- /.service-block -->
													</div>
												</div> <!-- /.row -->
										</div>
									</div>
								</div>
						    </div>

							<!-- Single Tab -->
						    <div id="account" class="tab-pane fade">
								<div class="container">
									<div class="element-section mb-200">
										<div class="inner-wrapper our-service-sass-custom">
												<div class="row">
													<div class="col-lg-4 single-block" data-aos="fade-up">
														<div class="service-block">
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<div class="hover-content"></div>
															<!-- <i class="flaticon-web icon-s"></i> -->
															<div class="pr-header-custom">
																<h4 class="title">Paket 1</h4>
																<h4 class="title-2" style="font-size: 40px">$39</h4>
																<div class="package">Weekly</div>
															</div>
															<hr class="line-custom">
															<h5 class="title"><a href="#">User Friendly dashboard & Cool Interface.</a></h5>
															<p>Lorem ipsum dolor si amet, an dusino situ  sint pertinacia constituto, mir es dignsius quo great.</p>
															<!-- <a href="#" class="detail-button"><i class="flaticon-next-1"></i></a> -->
															<div class="pr-footer-custom">
																<a href="#" class="btn-custom">Upgrade</a>
																<!-- <a href="#" class="trial-button">Get your 30 day free trial</a> -->
															</div>
														</div> <!-- /.service-block -->
													</div> <!-- /.single-block -->
													<div class="col-lg-4 single-block" data-aos="fade-up">
														<div class="service-block">
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<div class="hover-content"></div>
															<!-- <i class="flaticon-web icon-s"></i> -->
															<div class="pr-header-custom">
																<h4 class="title">Paket 2</h4>
																<h4 class="title-2" style="font-size: 40px">$39</h4>
																<div class="package">Weekly</div>
															</div>
															<hr class="line-custom">
															<h5 class="title"><a href="#">User Friendly dashboard & Cool Interface.</a></h5>
															<p>Lorem ipsum dolor si amet, an dusino situ  sint pertinacia constituto, mir es dignsius quo great.</p>
															<!-- <a href="#" class="detail-button"><i class="flaticon-next-1"></i></a> -->
															<div class="pr-footer-custom">
																<a href="#" class="btn-custom">Upgrade</a>
																<!-- <a href="#" class="trial-button">Get your 30 day free trial</a> -->
															</div>
														</div> <!-- /.service-block -->
													</div>
													<div class="col-lg-4 single-block" data-aos="fade-up">
														<div class="service-block">
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<div class="hover-content"></div>
															<!-- <i class="flaticon-web icon-s"></i> -->
															<div class="pr-header-custom">
																<h4 class="title">Paket 3</h4>
																<h4 class="title-2" style="font-size: 40px">$39</h4>
																<div class="package">Weekly</div>
															</div>
															<hr class="line-custom">
															<h5 class="title"><a href="#">User Friendly dashboard & Cool Interface.</a></h5>
															<p>Lorem ipsum dolor si amet, an dusino situ  sint pertinacia constituto, mir es dignsius quo great.</p>
															<!-- <a href="#" class="detail-button"><i class="flaticon-next-1"></i></a> -->
															<div class="pr-footer-custom">
																<a href="#" class="btn-custom">Upgrade</a>
																<!-- <a href="#" class="trial-button">Get your 30 day free trial</a> -->
															</div>
														</div> <!-- /.service-block -->
													</div>
												</div> <!-- /.row -->
										</div>
									</div>
								</div>
						    </div>

							<!-- Single Tab -->
						    <div id="service" class="tab-pane fade">
								<div class="container">
									<div class="element-section mb-200">
										<div class="inner-wrapper our-service-sass-custom">
												<div class="row">
													<div class="col-lg-4 single-block" data-aos="fade-up">
														<div class="service-block">
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<div class="hover-content"></div>
															<!-- <i class="flaticon-web icon-s"></i> -->
															<div class="pr-header-custom">
																<h4 class="title">Paket 1</h4>
																<h4 class="title-2" style="font-size: 40px">$39</h4>
																<div class="package">Weekly</div>
															</div>
															<hr class="line-custom">
															<h5 class="title"><a href="#">User Friendly dashboard & Cool Interface.</a></h5>
															<p>Lorem ipsum dolor si amet, an dusino situ  sint pertinacia constituto, mir es dignsius quo great.</p>
															<!-- <a href="#" class="detail-button"><i class="flaticon-next-1"></i></a> -->
															<div class="pr-footer-custom">
																<a href="#" class="btn-custom">Upgrade</a>
																<!-- <a href="#" class="trial-button">Get your 30 day free trial</a> -->
															</div>
														</div> <!-- /.service-block -->
													</div> <!-- /.single-block -->
													<div class="col-lg-4 single-block" data-aos="fade-up">
														<div class="service-block">
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<div class="hover-content"></div>
															<!-- <i class="flaticon-web icon-s"></i> -->
															<div class="pr-header-custom">
																<h4 class="title">Paket 2</h4>
																<h4 class="title-2" style="font-size: 40px">$39</h4>
																<div class="package">Weekly</div>
															</div>
															<hr class="line-custom">
															<h5 class="title"><a href="#">User Friendly dashboard & Cool Interface.</a></h5>
															<p>Lorem ipsum dolor si amet, an dusino situ  sint pertinacia constituto, mir es dignsius quo great.</p>
															<!-- <a href="#" class="detail-button"><i class="flaticon-next-1"></i></a> -->
															<div class="pr-footer-custom">
																<a href="#" class="btn-custom">Upgrade</a>
																<!-- <a href="#" class="trial-button">Get your 30 day free trial</a> -->
															</div>
														</div> <!-- /.service-block -->
													</div>
													<div class="col-lg-4 single-block" data-aos="fade-up">
														<div class="service-block">
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<span class="snow-dot"></span>
															<div class="hover-content"></div>
															<!-- <i class="flaticon-web icon-s"></i> -->
															<div class="pr-header-custom">
																<h4 class="title">Paket 3</h4>
																<h4 class="title-2" style="font-size: 40px">$39</h4>
																<div class="package">Weekly</div>
															</div>
															<hr class="line-custom">
															<h5 class="title"><a href="#">User Friendly dashboard & Cool Interface.</a></h5>
															<p>Lorem ipsum dolor si amet, an dusino situ  sint pertinacia constituto, mir es dignsius quo great.</p>
															<!-- <a href="#" class="detail-button"><i class="flaticon-next-1"></i></a> -->
															<div class="pr-footer-custom">
																<a href="#" class="btn-custom">Upgrade</a>
																<!-- <a href="#" class="trial-button">Get your 30 day free trial</a> -->
															</div>
														</div> <!-- /.service-block -->
													</div>
												</div> <!-- /.row -->
										</div>
									</div>
								</div>
						    </div>
						</div> <!-- /.tab-content -->
					</div> <!-- /.faq-tab-wrapper -->


					<a href="#footer" class="down-button scroll-target"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
				</div> <!-- /.container -->
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
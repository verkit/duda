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
		<p>Informasi Kontak Kami</p>
		<h2 class="pt-30 pb-15">Jangan ragu menghubungi kami</h2>
		<p class="sub-heading">untuk informasi apapun</p>
	</div>
</div> <!-- /.text-inner-banner-one -->



			
			
			<!-- 
			=============================================
				Our Portfolio
			============================================== 
			-->
			<div class="contact-address-two">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="address-block">
								<div class="icon-box"><img src="{{asset('Rogan/rogan-b/html/images/icon/icon20.svg')}}" alt=""></div>
								<h5>Our Location</h5>
								<p>Danmondi, 7563 King Meadow <br>Suite 896, USA</p>
							</div> <!-- /.address-block -->
						</div> <!-- /.col- -->
						<div class="col-md-4">
							<div class="address-block">
								<div class="icon-box"><img src="{{asset('Rogan/rogan-b/html/images/icon/icon21.svg')}}" alt=""></div>
								<h5>Email & Phone</h5>
								<p><a href="#">rogan@coname.com</a> <br><a href="#">880 1723801729</a></p>
							</div> <!-- /.address-block -->
						</div> <!-- /.col- -->
						<div class="col-md-4">
							<div class="address-block">
								<div class="icon-box"><img src="{{asset('Rogan/rogan-b/html/images/icon/icon22.svg')}}" alt=""></div>
								<h5>Get In Touch</h5>
								<p>Also find us social media below</p>
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								</ul>
							</div> <!-- /.address-block -->
						</div> <!-- /.col- -->
					</div> <!-- /.row -->
				</div> <!-- /.container -->
			</div> <!-- /.our-portfolio -->

			<div class="contact-us-section pt-80 pb-150">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 order-lg-last">
							<div class="contact-form custom-contact-form">
								<h2 class="custom-bot-margin">Send us message. </h2>
								@if(session('sukses'))
								<div class="alert alert-success" >
								{{session('sukses')}}
								</div>
								@endif
				              	<form class="form theme-form-style-one" method="POST" action="{{url('/contact-us')}}">
				              		@csrf
				                	<div class="messages">
				                		<!-- Send us message. -->
				                	</div>
				                	<div class="controls control-custom">
					                    <div class="form-group form-group-custom">
					                        <input id="form_email" class="sm-input-custom" type="text" name="name" placeholder="Name*" required="required">
					                        <div class="help-block with-errors"></div>
					                    </div>
					                    <div class="form-group form-group-custom">
					                        <input id="form_email" class="sm-input-custom" type="email" name="email" placeholder="Email Address*" required="required">
					                        <div class="help-block with-errors"></div>
					                    </div>

					                    <div class="form-group" style="margin-top: -20px">
					                        <input id="form_sub" type="text" name="subject" placeholder="Subject*" required="required">
					                        <div class="help-block with-errors"></div>
					                    </div>

					                    <div class="form-group" style="margin-top: -20px">
					                    	<textarea id="form_message" name="message" class="form_message" placeholder="Your Message*" required="required"></textarea>
					                    	<div class="help-block with-errors"></div>
					                    </div>
					                    <button type="submit" class="theme-btn solid-button-one radius3" style="margin-top: -20px;">
					                    	Kirim Pesan
				                    	</button>
				                	</div> <!-- /.controls -->
				              	</form>
				            </div> <!-- /.contact-form -->
						</div>
						<div class="col-lg-6 order-lg-first">
							<div class="img-box">
							<img src="{{asset('Rogan/rogan-c/html/images/shape/shape-15.svg')}}" alt="" class="main-shape-custom-1" data-aos="fade-right" data-aos-delay="200" style="">
							<img src="{{asset('Rogan/rogan-c/html/images/shape/shape-16.svg')}}" alt="" class="bg-shape-custom-1" data-aos="fade-right" data-aos-delay="400">
							<!-- <img src="images/home/screen1.png" al > -->
							<div class="screen-four custom-svg-contact-us" data-aos="fade-down" data-aos-delay="200">
								<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
								<lottie-player
								    src="https://assets6.lottiefiles.com/packages/lf20_Wkk3y4.json"  background="transparent"  speed="1"  style="width: 750px; height: 860px;"  loop  autoplay >
								</lottie-player>
							</div>
						</div>
						</div>
					</div> <!-- /.row -->
				</div> <!-- /.container -->
			</div> <!-- /.contact-us-section -->
@stop

@section('script')
		<script src="{{asset('Rogan/rogan-b/html/vendor/jquery.2.2.3.min.js')}}"></script>
		<script src="{{asset('Rogan/rogan-b/html/vendor/popper.js/popper.min.js')}}"></script>
		<script src="{{asset('Rogan/rogan-b/html/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('Rogan/rogan-b/html/vendor/mega-menu/assets/js/custom.js')}}"></script>
		<script src="{{asset('Rogan/rogan-b/html/vendor/aos-next/dist/aos.js')}}"></script>
		<script src="{{asset('Rogan/rogan-b/html/vendor/WOW-master/dist/wow.min.js')}}"></script>
		<script src="{{asset('Rogan/rogan-b/html/vendor/owl-carousel/owl.carousel.min.js')}}"></script>
		<script src="{{asset('Rogan/rogan-b/html/vendor/ajaxchimp/jquery.ajaxchimp.min.js')}}"></script>
		<script src="{{asset('Rogan/rogan-b/html/vendor/tilt.jquery.js')}}"></script>
		<script src="{{asset('Rogan/rogan-b/html/vendor/owl-carousel/owl.carousel.min.js')}}"></script>
		<script src="{{asset('Rogan/rogan-b/html/js/theme.js')}}"></script>
		<script src="{{asset('Rogan/rogan-b/html/vendor/cubeportfolio/js/jquery.cubeportfolio.min.js')}}"></script>

@stop
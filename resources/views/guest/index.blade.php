@extends('guest.layout')
@section('title','Beranda')
@section('notif')
ASau
@stop
@section('notif')
sad
@stop
@section('script')
    <script src="{{asset('Rogan/rogan-c/html/vendor/jquery.2.2.3.min.js')}}"></script>
@stop
@section('preloader')
@stop
@section('content')
<div id="theme-banner-four">
	<div class="custom-svg-c wow fadeInRight animated">
		<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
		<lottie-player
			src="https://assets9.lottiefiles.com/packages/lf20_uJeTxd.json"  background="transparent"  speed="1"  style="width: 700px; height: 800px;"  loop  autoplay >
		</lottie-player>
	</div>
	<img src="{{asset('Rogan/rogan-c/html/images/shape/shape-11.svg')}}" alt="" class="shape-four">
	<div class="round-shape-one"></div>
	<div class="round-shape-two"></div>
	<div class="round-shape-three"></div>
	<div class="round-shape-four"></div>
	<div class="container">
		<div class="main-wrapper">
			<div class="slogan wow fadeInDown animated" data-wow-delay="0.2s"><span>20% Off</span> Bulan Pertama</div>
			<h1 style="font-size: 58px;line-height: 55px;" class="main-title wow fadeInUp animated" data-wow-delay="0.4s">
				Mulai kembangkan <br>
				Bisnis anda <br>
				Bersama kami
			</h1>
			<p class="sub-title wow fadeInUp animated" data-wow-delay="0.9s">Dengan sistem otomatis yang memudahkan <br> proses order dan transaksi anda</p>
			<ul class="button-group lightgallery">
				<li><a data-fancybox href="https://www.youtube.com/embed/aXFSJTjVjw0" class="fancybox video-button video-button-one wow fadeInRight animated" data-wow-delay="1.5s">See live demo. <i class="flaticon-play-button"></i></a></li>
			</ul>
		</div> <!-- /.main-wrapper -->
	</div> <!-- /.container -->
</div> <!-- /#theme-banner-four -->


<!-- 
=============================================
	Trsuted Partners
============================================== 
-->
<div class="trusted-partner">
	<div class="container">
		<h6 class="title">Trusted Over <span>2300+</span> Companies</h6>

		<div class="partner-slider">
			<div class="item"><a href="#"><img src="{{asset('Rogan/rogan-c/html/images/logo/envato.svg')}}" alt=""></a></div>
			<div class="item"><a href="#"><img src="{{asset('Rogan/rogan-c/html/images/logo/envato.svg')}}" alt=""></a></div>
			<div class="item"><a href="#"><img src="{{asset('Rogan/rogan-c/html/images/logo/envato.svg')}}" alt=""></a></div>
			<div class="item"><a href="#"><img src="{{asset('Rogan/rogan-c/html/images/logo/envato.svg')}}" alt=""></a></div>
			<div class="item"><a href="#"><img src="{{asset('Rogan/rogan-c/html/images/logo/envato.svg')}}" alt=""></a></div>
		</div>
	</div>
</div>



<!-- 
=============================================
	Our Service
============================================== 
-->
<div class="our-service-sass hide-pr">
	<div class="container">
		<div class="theme-title-one text-center">
			<div class="icon-box hide-pr">
				<img src="{{asset('Rogan/rogan-c/html/images/shape/bg-shape1.svg')}}" alt="" class="bg-shape">
				<img src="{{asset('Rogan/rogan-c/html/images/icon/icon23.svg')}}" alt="" class="icon">
			</div>
			<h2 class="main-title">Provide awesome customer service <br> with our tools.</h2>
		</div> <!-- /.theme-title-one -->
		
		<div class="inner-wrapper">
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
						<i class="flaticon-web icon-s"></i>
						<h5 class="title"><a href="#">User Friendly dashboard & Cool Interface.</a></h5>
						<p>Lorem ipsum dolor si amet, an dusino situ  sint pertinacia constituto, mir es dignsius quo great.</p>
						<a href="#" class="detail-button"><i class="flaticon-next-1"></i></a>
					</div> <!-- /.service-block -->
				</div> <!-- /.single-block -->
				<div class="col-lg-4 single-block" data-aos="fade-up" data-aos-delay="300">
					<div class="service-block">
						<span class="snow-dot"></span>
						<span class="snow-dot"></span>
						<span class="snow-dot"></span>
						<span class="snow-dot"></span>
						<span class="snow-dot"></span>
						<span class="snow-dot"></span>
						<span class="snow-dot"></span>
						<div class="hover-content"></div>
						<i class="flaticon-value icon-s"></i>
						<h5 class="title"><a href="#">Thousand of features and Custom option.</a></h5>
						<p>Lorem ipsum dolor si amet, an dusino situ  sint pertinacia constituto, mir es dignsius quo great.</p>
						<a href="#" class="detail-button"><i class="flaticon-next-1"></i></a>
					</div> <!-- /.service-block -->
				</div> <!-- /.single-block -->
				<div class="col-lg-4 single-block" data-aos="fade-up" data-aos-delay="500">
					<div class="service-block">
						<span class="snow-dot"></span>
						<span class="snow-dot"></span>
						<span class="snow-dot"></span>
						<span class="snow-dot"></span>
						<span class="snow-dot"></span>
						<span class="snow-dot"></span>
						<span class="snow-dot"></span>
						<div class="hover-content"></div>
						<i class="flaticon-login icon-s"></i>
						<h5 class="title"><a href="#">Strong Managment & Security.</a></h5>
						<p>Lorem ipsum dolor si amet, an dusino situ  sint pertinacia constituto, mir es dignsius quo great.</p>
						<a href="#" class="detail-button"><i class="flaticon-next-1"></i></a>
					</div> <!-- /.service-block -->
				</div> <!-- /.single-block -->
			</div> <!-- /.row -->
		</div> <!-- /.inner-wrapper -->
	</div> <!-- /.container -->
</div> <!-- /.our-service-sass -->





<!-- 
=============================================
	Our Feature
============================================== 
-->
<div class="our-feature-sass">
	<div class="section-shape-one"></div>
	<div class="section-shape-two"><img src="{{asset('Rogan/rogan-c/html/images/shape/shape-18.svg')}}" alt=""></div>
	<img src="{{asset('Rogan/rogan-c/html/images/shape/shape-18.svg')}}" alt="" class="section-shape-three">
	<div class="section-shape-four"></div>
	<img src="{{asset('Rogan/rogan-c/html/images/shape/shape-20.svg')}}" alt="" class="section-shape-five">
	<img src="{{asset('Rogan/rogan-c/html/images/shape/shape-21.svg')}}" alt="" class="section-shape-six">
	<img src="{{asset('Rogan/rogan-c/html/images/shape/shape-22.svg')}}" alt="" class="section-shape-seven">
	<img src="{{asset('Rogan/rogan-c/html/images/shape/shape-19.svg')}}" alt="" class="section-shape-eight">
	<a href="#feature-sass" class="down-arrow scroll-target"><span><i class="flaticon-back"></i></span></a>
	<div class="feature-wrapper" id="feature-sass">
		<div class="single-feature-block">
			<div class="container clearfix">
				<div class="text-box">
					<div class="theme-title-one hide-pr">
						<div class="icon-box hide-pr">
							<img src="{{asset('Rogan/rogan-c/html/images/shape/bg-shape2.svg')}}" alt="" class="bg-shape">
							<img style="height: 40%" src="{{asset('Rogan/rogan-c/html/images/icon/icon24.svg')}}" alt="" class="icon">
						</div>
						<h2 class="main-title">Provide awesome customer service with our tools.</h2>
					</div> <!-- /.theme-title-one -->
					<p style="font-family: sans-serif;
								font-size: 18px;
								line-height: 32px;">
						Lorem ipsum dolor sit amet, hendrerit omittantur mel, es vidit Ius te altera essent incorrupte.</p>
					<ul>
						<li>Lorem ipsum essent alien eam hendrerit mel anil.</li>
						<li>Lorem ipsum essent alien eam hendrerit mel es vidit lus anil.</li>
						<li>hendrerit mel es vidit lus anil nibh due.</li>
					</ul>
					<a href="#" class="read-more">Privasi Pengguna</a>
				</div> <!-- /.text-box -->
			</div> <!-- /.container -->

			<div class="img-box">
				<img src="{{asset('Rogan/rogan-c/html/images/shape/shape-15.svg')}}" alt="" class="main-shape" data-aos="fade-right" data-aos-delay="200">
				<img src="{{asset('Rogan/rogan-c/html/images/shape/shape-16.svg')}}" alt="" class="bg-shape" data-aos="fade-right" data-aos-delay="400">
				<!-- <img src="images/home/screen1.png" al > -->
				<div class="screen-four" data-aos="fade-down" data-aos-delay="200">
					<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
					<lottie-player
						src="https://assets2.lottiefiles.com/packages/lf20_ZywMaj.json"  background="transparent"  speed="1"  style="width: 884.97px; height: 602.48px;"  loop  autoplay >
					</lottie-player>
				</div>
			</div>
		</div> <!-- /.single-feature-block -->


		<div class="single-feature-block">
			<div class="container clearfix">
				<div class="text-box">
					<div class="theme-title-one hide-pr">
						<div class="icon-box hide-pr">
							<img src="../Rogan/rogan-c/html/images/shape/bg-shape3.svg" alt="" class="bg-shape">
							<img src="../Rogan/rogan-c/html/images/icon/icon25.svg" alt="" class="icon">
						</div>
						<h2 class="main-title">Great managment and strong security system. </h2>
					</div> <!-- /.theme-title-one -->
					<p>Lorem ipsum dolor sit amet, hendrerit omittantur mel, es vidit Ius te altera essent incorrupte.</p>
					<ul>
						<li>Lorem ipsum essent alien eam hendrerit mel anil.</li>
						<li>Lorem ipsum essent alien eam hendrerit mel es vidit lus anil.</li>
						<li>hendrerit mel es vidit lus anil nibh due.</li>
					</ul>
					<a href="#" class="read-more">Read More</a>
				</div> <!-- /.text-box -->
			</div> <!-- /.container -->

			<div class="img-box">
				<img src="../Rogan/rogan-c/html/images/shape/shape-17.svg" alt="" class="main-shape" data-aos="fade-left" data-aos-delay="200">
				<div style="top: 20%;">
				<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
				<lottie-player
					src="https://assets10.lottiefiles.com/packages/lf20_p8wLSV.json"  background="transparent"  speed="1"  style="width: 884.97px; height: 602.48px;"  loop  autoplay >
				</lottie-player>
				<!-- <img src="images/home/screen5.png" alt="" class="screen-one" data-aos="fade-down" data-aos-delay="400"> -->
				<!-- <img src="images/home/screen6.png" alt="" class="screen-two" data-aos="zoom-in" data-aos-delay="600"> -->
			</div>
			</div>
		</div> <!-- /.single-feature-block -->
	</div> <!-- /.feature-wrapper -->
</div> <!-- /.our-feature-sass -->


<!--
=====================================================
	Our Pricing
=====================================================
-->
<!-- <div class="element-section mb-150"> -->

<!-- <div class="section-shape-one">
	<img src="images/shape/shape-18.svg" alt=""></div>
	<img src="images/shape/shape-24.svg" alt="" class="section-shape-two" data-aos="fade-right" data-aos-duration="3000">
	<img src="images/shape/shape-25.svg" alt="" class="section-shape-three"> -->
	<div class="section-shape-four"></div>
	<img src="{{asset('Rogan/rogan-c/html/images/shape/shape-26.svg')}}" alt="" class="section-shape-five">
	<img src="{{asset('Rogan/rogan-c/html/images/shape/shape-27.svg')}}" alt="" class="section-shape-six" data-aos="fade-left" data-aos-duration="3000">

<div class="element-section mb-150">
	<div class="pricing-plan-three">
		<div class="container">
			<div class="theme-title-one text-center hide-pr">
				<div class="icon-box hide-pr">
					<img src="{{asset('Rogan/rogan-c/html/images/shape/bg-shape4.svg')}}" alt="" class="bg-shape">
					<img src="{{asset('Rogan/rogan-c/html/images/icon/icon26.svg')}}" alt="" class="icon">
				</div>
				<h2 class="main-title">No Hidden Charges! Choose <br>your Plan.</h2>
			</div> <!-- /.theme-title-one -->

			<div class="row">
				<div class="col-lg-4" data-aos="fade-up">
					<div class="single-pr-table subway">
						<div class="pr-header">
							<h4 class="title">Subway</h4>
							<div class="price">$39.<sup>99</sup></div>
							<div class="package">Weekly</div>
						</div> <!-- /.pr-header -->
						<div class="pr-body">
							<div class="slogan">Quick job, Small Work</div>
							<ul>
								<li>50GB Bandwidth</li>
								<li>Business & Financ Analysing</li>
								<li>24 hour support</li>
								<li>Customer Managemet</li>
							</ul>
						</div> <!-- /.pr-body -->
						<div class="pr-footer">
							<a href="#" class="plan-button theme-btn custom-index-btn">Choose Plan</a>
							<a href="#" class="trial-button">Get your 30 day free trial</a>
						</div> <!-- /.pr-footer -->
					</div> <!-- /.single-pr-table -->
				</div> <!-- /.col- -->

				<div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
					<div class="single-pr-table sandwich">
						<div class="pr-header">
							<h4 class="title">Sandwich</h4>
							<div class="price">$99.<sup>99</sup></div>
							<div class="package">Monthly</div>
						</div> <!-- /.pr-header -->
						<div class="pr-body">
							<div class="slogan">Bigger, Great for Team</div>
							<ul>
								<li>50GB Bandwidth</li>
								<li>Business & Financ Analysing</li>
								<li>24 hour support</li>
								<li>Customer Managemet</li>
							</ul>
						</div> <!-- /.pr-body -->
						<div class="pr-footer">
							<a href="#" class="plan-button theme-btn custom-index-btn">Choose Plan</a>
							<a href="#" class="trial-button">Get your 30 day free trial</a>
						</div> <!-- /.pr-footer -->
					</div> <!-- /.single-pr-table -->
				</div> <!-- /.col- -->

				<div class="col-lg-4" data-aos="fade-up" data-aos-delay="500">
					<div class="single-pr-table burger">
						<div class="pr-header">
							<h4 class="title">Burger</h4>
							<div class="price">$989.<sup>99</sup></div>
							<div class="package">yealry</div>
						</div> <!-- /.pr-header -->
						<div class="pr-body">
							<div class="slogan"> Great for Corporation</div>
							<ul>
								<li>50GB Bandwidth</li>
								<li>Business & Financ Analysing</li>
								<li>24 hour support</li>
								<li>Customer Managemet</li>
							</ul>
						</div> <!-- /.pr-body -->
						<div class="pr-footer">
							<a href="#" class="plan-button theme-btn custom-index-btn">Choose Plan</a>
							<a href="#" class="trial-button">Get your 30 day free trial</a>
						</div> <!-- /.pr-footer -->
					</div> <!-- /.single-pr-table -->
				</div> <!-- /.col- -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</div> <!-- /.pricing-plan-three -->
</div>
<!-- </div> -->
 <!-- /.sass-our-pricing -->





<!--
=====================================================
	Testimonial
=====================================================
-->
<div class="apps-testimonial">
	<div class="d-shape" data-aos="fade-right" data-aos-duration="2000">D</div>
	<div class="u-shape" data-aos="fade-left" data-aos-duration="2000">U</div>
	<img src="{{asset('Rogan/rogan-c/html/images/shape/shape-52.svg')}}" alt="" class="shape-one">
	<img src="{{asset('Rogan/rogan-c/html/images/shape/shape-53.svg')}}" alt="" class="shape-two">
	<img src="{{asset('Rogan/rogan-c/html/images/shape/shape-45.svg')}}" alt="" class="shape-three">
	<img src="{{asset('Rogan/rogan-c/html/images/shape/shape-46.svg')}}" alt="" class="shape-four">
	<div class="container">
		<div class="theme-title-one upper-bar">
			<h2 class="main-title">What’s Our Customer <br>Saying.</h2>
		</div> <!-- /.theme-title-one -->

		<div class="customer-slider">
			<div class="item">
				<div class="customer-block">
					<p>onsectetur adipiscng elit, sed do esmod tempor ut labor  dolor magna aliqua. Ut enomi ad minm veniam, quis nos exercitation.</p>
					<div class="clearfix">
						<img src="{{asset('Rogan/rogan-c/html/images/home/3.jpg')}}" alt="" class="customer-img">
						<div class="customer-info">
							<h5 class="name">Rashed Ka.</h5>
							<span>Manager, Walton</span>
						</div> <!-- /.customer-info -->
					</div>
				</div> <!-- /.customer-block -->
			</div> <!-- /.item -->
			<div class="item">
				<div class="customer-block">
					<p>onsectetur adipiscng elit, sed do esmod tempor ut labor  dolor magna aliqua. Ut enomi ad minm veniam, quis nos exercitation.</p>
					<div class="clearfix">
						<img src="{{asset('Rogan/rogan-c/html/images/home/2.jpg')}}" alt="" class="customer-img">
						<div class="customer-info">
							<h5 class="name">Wilson Herry</h5>
							<span>Product Designer</span>
						</div> <!-- /.customer-info -->
					</div>
				</div> <!-- /.customer-block -->
			</div> <!-- /.item -->
			<div class="item">
				<div class="customer-block">
					<p>onsectetur adipiscng elit, sed do esmod tempor ut labor  dolor magna aliqua. Ut enomi ad minm veniam, quis nos exercitation.</p>
					<div class="clearfix">
						<img src="{{asset('Rogan/rogan-c/html/images/home/7.jpg')}}" alt="" class="customer-img">
						<div class="customer-info">
							<h5 class="name">Zubayer Hasan</h5>
							<span>Manager, Walton</span>
						</div> <!-- /.customer-info -->
					</div>
				</div> <!-- /.customer-block -->
			</div> <!-- /.item -->
		</div>
	</div> <!-- /.container -->
</div> <!-- /.sass-testimonial-section -->





<!--
=====================================================
	FAQ Section
=====================================================
-->
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
			      <a class="nav-link active" data-toggle="tab" href="#general">General</a>
			    </li>
			    <li class="nav-item">
			      <a class="nav-link" data-toggle="tab" href="#payment">Payment Gatway</a>
			    </li>
			    <li class="nav-item">
			      <a class="nav-link" data-toggle="tab" href="#feature">Features</a>
			    </li>
			    <li class="nav-item">
			      <a class="nav-link" data-toggle="tab" href="#billing">Billing Problem</a>
			    </li>
			    <li class="nav-item">
			      <a class="nav-link" data-toggle="tab" href="#account">Account</a>
			    </li>
			    <li class="nav-item">
			      <a class="nav-link" data-toggle="tab" href="#service">Services</a>
			    </li>
			</ul>

			<!-- Tab panes -->
			<div class="tab-content">
				<!-- Single Tab -->
			    <div id="general" class="tab-pane fade show active">
				    <div class="row">
						<div class="col-lg-6">
							<!-- ================== FAQ Panel ================ -->
	        				<div class="faq-panel">
								<div class="panel-group theme-accordion" id="accordion">
								  <div class="panel">
								    <div class="panel-heading active-panel">
								      <h6 class="panel-title">
								        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
								        How to create customer panel?</a>
								      </h6>
								    </div>
								    <div id="collapse1" class="panel-collapse collapse show">
								      <div class="panel-body">
								      	<p>mea case duis tollit et. Etiam nusquam set minium eu sea, ei tale paulo elabo et. Noluisse mnesarch Et ius vero incorrupte, eos deserunt quaeren dum not. Vim elit facete ei sem, maluisset constituam. </p>
								      </div>
								    </div>
								  </div> <!-- /panel 1 -->
								  <div class="panel">
								    <div class="panel-heading">
								      <h6 class="panel-title">
								        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
								        Where is the edit optioon on dashboard?</a>
								      </h6>
								    </div>
								    <div id="collapse2" class="panel-collapse collapse">
								      <div class="panel-body">
								      	<p>Lorem ipsum dolor sit amet, nec praesent conceptam no vis lorem temporibus. Ei vix rebum noluisse voluptatibus, cum in legere intellegebat, ius ad illum aperiri officiis. </p>
								      </div>
								    </div>
								  </div> <!-- /panel 2 -->
								  <div class="panel">
								    <div class="panel-heading">
								      <h6 class="panel-title">
								        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
								       Is there any custome pricing system?</a>
								      </h6>
								    </div>
								    <div id="collapse3" class="panel-collapse collapse">
								      <div class="panel-body">
								      	<p>Lorem ipsum dolor sit amet, nec praesent conceptam no vis lorem temporibus. Ei vix rebum noluisse voluptatibus, cum in legere intellegebat, ius ad illum aperiri officiis. </p>
								      </div>
								    </div>
								  </div> <!-- /panel 3 -->
								</div> <!-- end #accordion -->
							</div> <!-- End of .faq-panel -->
						</div> <!-- /.col- -->
						<div class="col-lg-6">
							<!-- ================== FAQ Panel ================ -->
	        				<div class="faq-panel">
								<div class="panel-group theme-accordion" id="accordion2">
								  <div class="panel">
								    <div class="panel-heading">
								      <h6 class="panel-title">
								        <a data-toggle="collapse" data-parent="#accordion2" href="#collapse11">
								        How to create customer panel?</a>
								      </h6>
								    </div>
								    <div id="collapse11" class="panel-collapse collapse">
								      <div class="panel-body">
								      	<p>mea case duis tollit et. Etiam nusquam set minium eu sea, ei tale paulo elabo et. Noluisse mnesarch Et ius vero incorrupte, eos deserunt quaeren dum not. Vim elit facete ei sem, maluisset constituam. </p>
								      </div>
								    </div>
								  </div> <!-- /panel 1 -->
								  <div class="panel">
								    <div class="panel-heading">
								      <h6 class="panel-title">
								        <a data-toggle="collapse" data-parent="#accordion2" href="#collapse22">
								        Where is the edit optioon on dashboard?</a>
								      </h6>
								    </div>
								    <div id="collapse22" class="panel-collapse collapse">
								      <div class="panel-body">
								      	<p>Lorem ipsum dolor sit amet, nec praesent conceptam no vis lorem temporibus. Ei vix rebum noluisse voluptatibus, cum in legere intellegebat, ius ad illum aperiri officiis. </p>
								      </div>
								    </div>
								  </div> <!-- /panel 2 -->
								  <div class="panel">
								    <div class="panel-heading">
								      <h6 class="panel-title">
								        <a data-toggle="collapse" data-parent="#accordion2" href="#collapse33">
								       How delete my account?</a>
								      </h6>
								    </div>
								    <div id="collapse33" class="panel-collapse collapse">
								      <div class="panel-body">
								      	<p>Lorem ipsum dolor sit amet, nec praesent conceptam no vis lorem temporibus. Ei vix rebum noluisse voluptatibus, cum in legere intellegebat, ius ad illum aperiri officiis. </p>
								      </div>
								    </div>
								  </div> <!-- /panel 3 -->
								  <div class="panel">
								    <div class="panel-heading">
								      <h6 class="panel-title">
								        <a data-toggle="collapse" data-parent="#accordion2" href="#collapse44">
								       How to invite people with refferel link?</a>
								      </h6>
								    </div>
								    <div id="collapse44" class="panel-collapse collapse">
								      <div class="panel-body">
								      	<p>Lorem ipsum dolor sit amet, nec praesent conceptam no vis lorem temporibus. Ei vix rebum noluisse voluptatibus, cum in legere intellegebat, ius ad illum aperiri officiis. </p>
								      </div>
								    </div>
								  </div> <!-- /panel 4 -->
								</div> <!-- end #accordion2 -->
							</div> <!-- End of .faq-panel -->
						</div> <!-- /.col- -->
				    </div> <!-- /.row -->
			    </div> <!-- /.tab-pane -->



				<!-- Single Tab -->
			    <div id="payment" class="tab-pane fade">
					<div class="row">
						<div class="col-lg-6">
							<!-- ================== FAQ Panel ================ -->
	        				<div class="faq-panel">
								<div class="panel-group theme-accordion" id="accordion3">
								  <div class="panel">
								    <div class="panel-heading active-panel">
								      <h6 class="panel-title">
								        <a data-toggle="collapse" data-parent="#accordion3" href="#collapse111">
								        Is there any custome pricing system?</a>
								      </h6>
								    </div>
								    <div id="collapse111" class="panel-collapse collapse show">
								      <div class="panel-body">
								      	<p>mea case duis tollit et. Etiam nusquam set minium eu sea, ei tale paulo elabo et. Noluisse mnesarch Et ius vero incorrupte, eos deserunt quaeren dum not. Vim elit facete ei sem, maluisset constituam. </p>
								      </div>
								    </div>
								  </div> <!-- /panel 1 -->
								  <div class="panel">
								    <div class="panel-heading">
								      <h6 class="panel-title">
								        <a data-toggle="collapse" data-parent="#accordion3" href="#collapse222">
								        Where is the edit optioon on dashboard?</a>
								      </h6>
								    </div>
								    <div id="collapse222" class="panel-collapse collapse">
								      <div class="panel-body">
								      	<p>Lorem ipsum dolor sit amet, nec praesent conceptam no vis lorem temporibus. Ei vix rebum noluisse voluptatibus, cum in legere intellegebat, ius ad illum aperiri officiis. </p>
								      </div>
								    </div>
								  </div> <!-- /panel 2 -->
								  <div class="panel">
								    <div class="panel-heading">
								      <h6 class="panel-title">
								        <a data-toggle="collapse" data-parent="#accordion3" href="#collapse333">
								       How delete my account?</a>
								      </h6>
								    </div>
								    <div id="collapse333" class="panel-collapse collapse">
								      <div class="panel-body">
								      	<p>Lorem ipsum dolor sit amet, nec praesent conceptam no vis lorem temporibus. Ei vix rebum noluisse voluptatibus, cum in legere intellegebat, ius ad illum aperiri officiis. </p>
								      </div>
								    </div>
								  </div> <!-- /panel 3 -->
								</div> <!-- end #accordion3 -->
							</div> <!-- End of .faq-panel -->
						</div> <!-- /.col- -->
						<div class="col-lg-6">
							<!-- ================== FAQ Panel ================ -->
	        				<div class="faq-panel">
								<div class="panel-group theme-accordion" id="accordion4">
								  <div class="panel">
								    <div class="panel-heading">
								      <h6 class="panel-title">
								        <a data-toggle="collapse" data-parent="#accordion4" href="#collapse41">
								        How the affiliate programe works?</a>
								      </h6>
								    </div>
								    <div id="collapse41" class="panel-collapse collapse">
								      <div class="panel-body">
								      	<p>mea case duis tollit et. Etiam nusquam set minium eu sea, ei tale paulo elabo et. Noluisse mnesarch Et ius vero incorrupte, eos deserunt quaeren dum not. Vim elit facete ei sem, maluisset constituam. </p>
								      </div>
								    </div>
								  </div> <!-- /panel 1 -->
								  <div class="panel">
								    <div class="panel-heading">
								      <h6 class="panel-title">
								        <a data-toggle="collapse" data-parent="#accordion4" href="#collapse42">
								        Where is the edit optioon on dashboard? </a>
								      </h6>
								    </div>
								    <div id="collapse42" class="panel-collapse collapse">
								      <div class="panel-body">
								      	<p>Lorem ipsum dolor sit amet, nec praesent conceptam no vis lorem temporibus. Ei vix rebum noluisse voluptatibus, cum in legere intellegebat, ius ad illum aperiri officiis. </p>
								      </div>
								    </div>
								  </div> <!-- /panel 2 -->
								  <div class="panel">
								    <div class="panel-heading">
								      <h6 class="panel-title">
								        <a data-toggle="collapse" data-parent="#accordion4" href="#collapse43">
								       How to invite people with refferel link?</a>
								      </h6>
								    </div>
								    <div id="collapse43" class="panel-collapse collapse">
								      <div class="panel-body">
								      	<p>Lorem ipsum dolor sit amet, nec praesent conceptam no vis lorem temporibus. Ei vix rebum noluisse voluptatibus, cum in legere intellegebat, ius ad illum aperiri officiis. </p>
								      </div>
								    </div>
								  </div> <!-- /panel 3 -->
								  <div class="panel">
								    <div class="panel-heading">
								      <h6 class="panel-title">
								        <a data-toggle="collapse" data-parent="#accordion4" href="#collapse45">
								       How delete my account?</a>
								      </h6>
								    </div>
								    <div id="collapse45" class="panel-collapse collapse">
								      <div class="panel-body">
								      	<p>Lorem ipsum dolor sit amet, nec praesent conceptam no vis lorem temporibus. Ei vix rebum noluisse voluptatibus, cum in legere intellegebat, ius ad illum aperiri officiis. </p>
								      </div>
								    </div>
								  </div> <!-- /panel 4 -->
								</div> <!-- end #accordion4 -->
							</div> <!-- End of .faq-panel -->
						</div> <!-- /.col- -->
				    </div> <!-- /.row -->
			    </div>

				<!-- Single Tab -->
			    <div id="feature" class="tab-pane fade">
					<div class="row">
						<div class="col-lg-6">
							<!-- ================== FAQ Panel ================ -->
	        				<div class="faq-panel">
								<div class="panel-group theme-accordion" id="accordion5">
								  <div class="panel">
								    <div class="panel-heading active-panel">
								      <h6 class="panel-title">
								        <a data-toggle="collapse" data-parent="#accordion5" href="#collapse51">
								        How to create customer panel?</a>
								      </h6>
								    </div>
								    <div id="collapse51" class="panel-collapse collapse show">
								      <div class="panel-body">
								      	<p>mea case duis tollit et. Etiam nusquam set minium eu sea, ei tale paulo elabo et. Noluisse mnesarch Et ius vero incorrupte, eos deserunt quaeren dum not. Vim elit facete ei sem, maluisset constituam. </p>
								      </div>
								    </div>
								  </div> <!-- /panel 1 -->
								  <div class="panel">
								    <div class="panel-heading">
								      <h6 class="panel-title">
								        <a data-toggle="collapse" data-parent="#accordion5" href="#collapse52">
								        Where is the edit optioon on dashboard?</a>
								      </h6>
								    </div>
								    <div id="collapse52" class="panel-collapse collapse">
								      <div class="panel-body">
								      	<p>Lorem ipsum dolor sit amet, nec praesent conceptam no vis lorem temporibus. Ei vix rebum noluisse voluptatibus, cum in legere intellegebat, ius ad illum aperiri officiis. </p>
								      </div>
								    </div>
								  </div> <!-- /panel 2 -->
								  <div class="panel">
								    <div class="panel-heading">
								      <h6 class="panel-title">
								        <a data-toggle="collapse" data-parent="#accordion5" href="#collapse53">
								       Is there any custome pricing system?</a>
								      </h6>
								    </div>
								    <div id="collapse53" class="panel-collapse collapse">
								      <div class="panel-body">
								      	<p>Lorem ipsum dolor sit amet, nec praesent conceptam no vis lorem temporibus. Ei vix rebum noluisse voluptatibus, cum in legere intellegebat, ius ad illum aperiri officiis. </p>
								      </div>
								    </div>
								  </div> <!-- /panel 3 -->
								</div> <!-- end #accordion4 -->
							</div> <!-- End of .faq-panel -->
						</div> <!-- /.col- -->
						<div class="col-lg-6">
							<!-- ================== FAQ Panel ================ -->
	        				<div class="faq-panel">
								<div class="panel-group theme-accordion" id="accordion6">
								  <div class="panel">
								    <div class="panel-heading">
								      <h6 class="panel-title">
								        <a data-toggle="collapse" data-parent="#accordion6" href="#collapse61">
								        How the affiliate programe works?</a>
								      </h6>
								    </div>
								    <div id="collapse61" class="panel-collapse collapse">
								      <div class="panel-body">
								      	<p>mea case duis tollit et. Etiam nusquam set minium eu sea, ei tale paulo elabo et. Noluisse mnesarch Et ius vero incorrupte, eos deserunt quaeren dum not. Vim elit facete ei sem, maluisset constituam. </p>
								      </div>
								    </div>
								  </div> <!-- /panel 1 -->
								  <div class="panel">
								    <div class="panel-heading">
								      <h6 class="panel-title">
								        <a data-toggle="collapse" data-parent="#accordion6" href="#collapse62">
								        Where is the edit optioon on dashboard?</a>
								      </h6>
								    </div>
								    <div id="collapse62" class="panel-collapse collapse">
								      <div class="panel-body">
								      	<p>Lorem ipsum dolor sit amet, nec praesent conceptam no vis lorem temporibus. Ei vix rebum noluisse voluptatibus, cum in legere intellegebat, ius ad illum aperiri officiis. </p>
								      </div>
								    </div>
								  </div> <!-- /panel 2 -->
								  <div class="panel">
								    <div class="panel-heading">
								      <h6 class="panel-title">
								        <a data-toggle="collapse" data-parent="#accordion6" href="#collapse63">
								       Is there any custome pricing system?</a>
								      </h6>
								    </div>
								    <div id="collapse63" class="panel-collapse collapse">
								      <div class="panel-body">
								      	<p>Lorem ipsum dolor sit amet, nec praesent conceptam no vis lorem temporibus. Ei vix rebum noluisse voluptatibus, cum in legere intellegebat, ius ad illum aperiri officiis. </p>
								      </div>
								    </div>
								  </div> <!-- /panel 3 -->
								  <div class="panel">
								    <div class="panel-heading">
								      <h6 class="panel-title">
								        <a data-toggle="collapse" data-parent="#accordion6" href="#collapse64">
								       How to invite people with refferel link?</a>
								      </h6>
								    </div>
								    <div id="collapse64" class="panel-collapse collapse">
								      <div class="panel-body">
								      	<p>Lorem ipsum dolor sit amet, nec praesent conceptam no vis lorem temporibus. Ei vix rebum noluisse voluptatibus, cum in legere intellegebat, ius ad illum aperiri officiis. </p>
								      </div>
								    </div>
								  </div> <!-- /panel 4 -->
								</div> <!-- end #accordion6 -->
							</div> <!-- End of .faq-panel -->
						</div> <!-- /.col- -->
				    </div> <!-- /.row -->
			    </div>

				<!-- Single Tab -->
			    <div id="billing" class="tab-pane fade">
					<div class="row">
						<div class="col-lg-6">
							<!-- ================== FAQ Panel ================ -->
	        				<div class="faq-panel">
								<div class="panel-group theme-accordion" id="accordion7">
								  <div class="panel">
								    <div class="panel-heading active-panel">
								      <h6 class="panel-title">
								        <a data-toggle="collapse" data-parent="#accordion7" href="#collapse71">
								        How to create customer panel?</a>
								      </h6>
								    </div>
								    <div id="collapse71" class="panel-collapse collapse show">
								      <div class="panel-body">
								      	<p>mea case duis tollit et. Etiam nusquam set minium eu sea, ei tale paulo elabo et. Noluisse mnesarch Et ius vero incorrupte, eos deserunt quaeren dum not. Vim elit facete ei sem, maluisset constituam. </p>
								      </div>
								    </div>
								  </div> <!-- /panel 1 -->
								  <div class="panel">
								    <div class="panel-heading">
								      <h6 class="panel-title">
								        <a data-toggle="collapse" data-parent="#accordion7" href="#collapse72">
								        How delete my account?</a>
								      </h6>
								    </div>
								    <div id="collapse72" class="panel-collapse collapse">
								      <div class="panel-body">
								      	<p>Lorem ipsum dolor sit amet, nec praesent conceptam no vis lorem temporibus. Ei vix rebum noluisse voluptatibus, cum in legere intellegebat, ius ad illum aperiri officiis. </p>
								      </div>
								    </div>
								  </div> <!-- /panel 2 -->
								  <div class="panel">
								    <div class="panel-heading">
								      <h6 class="panel-title">
								        <a data-toggle="collapse" data-parent="#accordion7" href="#collapse73">
								       Is there any custome pricing system?</a>
								      </h6>
								    </div>
								    <div id="collapse73" class="panel-collapse collapse">
								      <div class="panel-body">
								      	<p>Lorem ipsum dolor sit amet, nec praesent conceptam no vis lorem temporibus. Ei vix rebum noluisse voluptatibus, cum in legere intellegebat, ius ad illum aperiri officiis. </p>
								      </div>
								    </div>
								  </div> <!-- /panel 3 -->
								</div> <!-- end #accordion7 -->
							</div> <!-- End of .faq-panel -->
						</div> <!-- /.col- -->
						<div class="col-lg-6">
							<!-- ================== FAQ Panel ================ -->
	        				<div class="faq-panel">
								<div class="panel-group theme-accordion" id="accordion8">
								  <div class="panel">
								    <div class="panel-heading">
								      <h6 class="panel-title">
								        <a data-toggle="collapse" data-parent="#accordion8" href="#collapse81">
								        How to invite people with refferel link?</a>
								      </h6>
								    </div>
								    <div id="collapse81" class="panel-collapse collapse">
								      <div class="panel-body">
								      	<p>mea case duis tollit et. Etiam nusquam set minium eu sea, ei tale paulo elabo et. Noluisse mnesarch Et ius vero incorrupte, eos deserunt quaeren dum not. Vim elit facete ei sem, maluisset constituam. </p>
								      </div>
								    </div>
								  </div> <!-- /panel 1 -->
								  <div class="panel">
								    <div class="panel-heading">
								      <h6 class="panel-title">
								        <a data-toggle="collapse" data-parent="#accordion8" href="#collapse82">
								        Where is the edit optioon on dashboard?</a>
								      </h6>
								    </div>
								    <div id="collapse82" class="panel-collapse collapse">
								      <div class="panel-body">
								      	<p>Lorem ipsum dolor sit amet, nec praesent conceptam no vis lorem temporibus. Ei vix rebum noluisse voluptatibus, cum in legere intellegebat, ius ad illum aperiri officiis. </p>
								      </div>
								    </div>
								  </div> <!-- /panel 2 -->
								  <div class="panel">
								    <div class="panel-heading">
								      <h6 class="panel-title">
								        <a data-toggle="collapse" data-parent="#accordion8" href="#collapse83">
								       Is there any custome pricing system?</a>
								      </h6>
								    </div>
								    <div id="collapse83" class="panel-collapse collapse">
								      <div class="panel-body">
								      	<p>Lorem ipsum dolor sit amet, nec praesent conceptam no vis lorem temporibus. Ei vix rebum noluisse voluptatibus, cum in legere intellegebat, ius ad illum aperiri officiis. </p>
								      </div>
								    </div>
								  </div> <!-- /panel 3 -->
								  <div class="panel">
								    <div class="panel-heading">
								      <h6 class="panel-title">
								        <a data-toggle="collapse" data-parent="#accordion8" href="#collapse84">
								       Is there any custome pricing system?</a>
								      </h6>
								    </div>
								    <div id="collapse84" class="panel-collapse collapse">
								      <div class="panel-body">
								      	<p>Lorem ipsum dolor sit amet, nec praesent conceptam no vis lorem temporibus. Ei vix rebum noluisse voluptatibus, cum in legere intellegebat, ius ad illum aperiri officiis. </p>
								      </div>
								    </div>
								  </div> <!-- /panel 4 -->
								</div> <!-- end #accordion8 -->
							</div> <!-- End of .faq-panel -->
						</div> <!-- /.col- -->
				    </div> <!-- /.row -->
			    </div>

				<!-- Single Tab -->
			    <div id="account" class="tab-pane fade">
					<div class="row">
						<div class="col-lg-6">
							<!-- ================== FAQ Panel ================ -->
	        				<div class="faq-panel">
								<div class="panel-group theme-accordion" id="accordion9">
								  <div class="panel">
								    <div class="panel-heading active-panel">
								      <h6 class="panel-title">
								        <a data-toggle="collapse" data-parent="#accordion9" href="#collapse91">
								        How to create customer panel?</a>
								      </h6>
								    </div>
								    <div id="collapse91" class="panel-collapse collapse show">
								      <div class="panel-body">
								      	<p>mea case duis tollit et. Etiam nusquam set minium eu sea, ei tale paulo elabo et. Noluisse mnesarch Et ius vero incorrupte, eos deserunt quaeren dum not. Vim elit facete ei sem, maluisset constituam. </p>
								      </div>
								    </div>
								  </div> <!-- /panel 1 -->
								  <div class="panel">
								    <div class="panel-heading">
								      <h6 class="panel-title">
								        <a data-toggle="collapse" data-parent="#accordion9" href="#collapse92">
								        Where is the edit optioon on dashboard?</a>
								      </h6>
								    </div>
								    <div id="collapse92" class="panel-collapse collapse">
								      <div class="panel-body">
								      	<p>Lorem ipsum dolor sit amet, nec praesent conceptam no vis lorem temporibus. Ei vix rebum noluisse voluptatibus, cum in legere intellegebat, ius ad illum aperiri officiis. </p>
								      </div>
								    </div>
								  </div> <!-- /panel 2 -->
								  <div class="panel">
								    <div class="panel-heading">
								      <h6 class="panel-title">
								        <a data-toggle="collapse" data-parent="#accordion9" href="#collapse93">
								       Is there any custome pricing system?</a>
								      </h6>
								    </div>
								    <div id="collapse93" class="panel-collapse collapse">
								      <div class="panel-body">
								      	<p>Lorem ipsum dolor sit amet, nec praesent conceptam no vis lorem temporibus. Ei vix rebum noluisse voluptatibus, cum in legere intellegebat, ius ad illum aperiri officiis. </p>
								      </div>
								    </div>
								  </div> <!-- /panel 3 -->
								</div> <!-- end #accordion9 -->
							</div> <!-- End of .faq-panel -->
						</div> <!-- /.col- -->
						<div class="col-lg-6">
							<!-- ================== FAQ Panel ================ -->
	        				<div class="faq-panel">
								<div class="panel-group theme-accordion" id="accordion10">
								  <div class="panel">
								    <div class="panel-heading">
								      <h6 class="panel-title">
								        <a data-toggle="collapse" data-parent="#accordion10" href="#collapse101">
								        How to create customer panel?</a>
								      </h6>
								    </div>
								    <div id="collapse101" class="panel-collapse collapse">
								      <div class="panel-body">
								      	<p>mea case duis tollit et. Etiam nusquam set minium eu sea, ei tale paulo elabo et. Noluisse mnesarch Et ius vero incorrupte, eos deserunt quaeren dum not. Vim elit facete ei sem, maluisset constituam. </p>
								      </div>
								    </div>
								  </div> <!-- /panel 1 -->
								  <div class="panel">
								    <div class="panel-heading">
								      <h6 class="panel-title">
								        <a data-toggle="collapse" data-parent="#accordion10" href="#collapse102">
								        Where is the edit optioon on dashboard?</a>
								      </h6>
								    </div>
								    <div id="collapse102" class="panel-collapse collapse">
								      <div class="panel-body">
								      	<p>Lorem ipsum dolor sit amet, nec praesent conceptam no vis lorem temporibus. Ei vix rebum noluisse voluptatibus, cum in legere intellegebat, ius ad illum aperiri officiis. </p>
								      </div>
								    </div>
								  </div> <!-- /panel 2 -->
								  <div class="panel">
								    <div class="panel-heading">
								      <h6 class="panel-title">
								        <a data-toggle="collapse" data-parent="#accordion10" href="#collapse103">
								       Is there any custome pricing system?</a>
								      </h6>
								    </div>
								    <div id="collapse103" class="panel-collapse collapse">
								      <div class="panel-body">
								      	<p>Lorem ipsum dolor sit amet, nec praesent conceptam no vis lorem temporibus. Ei vix rebum noluisse voluptatibus, cum in legere intellegebat, ius ad illum aperiri officiis. </p>
								      </div>
								    </div>
								  </div> <!-- /panel 3 -->
								  <div class="panel">
								    <div class="panel-heading">
								      <h6 class="panel-title">
								        <a data-toggle="collapse" data-parent="#accordion10" href="#collapse104">
								       Is there any custome pricing system?</a>
								      </h6>
								    </div>
								    <div id="collapse104" class="panel-collapse collapse">
								      <div class="panel-body">
								      	<p>Lorem ipsum dolor sit amet, nec praesent conceptam no vis lorem temporibus. Ei vix rebum noluisse voluptatibus, cum in legere intellegebat, ius ad illum aperiri officiis. </p>
								      </div>
								    </div>
								  </div> <!-- /panel 4 -->
								</div> <!-- end #accordion10 -->
							</div> <!-- End of .faq-panel -->
						</div> <!-- /.col- -->
				    </div> <!-- /.row -->
			    </div>

				<!-- Single Tab -->
			    <div id="service" class="tab-pane fade">
					<div class="row">
						<div class="col-lg-6">
							<!-- ================== FAQ Panel ================ -->
	        				<div class="faq-panel">
								<div class="panel-group theme-accordion" id="accordion13">
								  <div class="panel">
								    <div class="panel-heading active-panel">
								      <h6 class="panel-title">
								        <a data-toggle="collapse" data-parent="#accordion13" href="#collapse131">
								        How to create customer panel?</a>
								      </h6>
								    </div>
								    <div id="collapse131" class="panel-collapse collapse show">
								      <div class="panel-body">
								      	<p>mea case duis tollit et. Etiam nusquam set minium eu sea, ei tale paulo elabo et. Noluisse mnesarch Et ius vero incorrupte, eos deserunt quaeren dum not. Vim elit facete ei sem, maluisset constituam. </p>
								      </div>
								    </div>
								  </div> <!-- /panel 1 -->
								  <div class="panel">
								    <div class="panel-heading">
								      <h6 class="panel-title">
								        <a data-toggle="collapse" data-parent="#accordion13" href="#collapse132">
								        How the affiliate programe works?</a>
								      </h6>
								    </div>
								    <div id="collapse132" class="panel-collapse collapse">
								      <div class="panel-body">
								      	<p>Lorem ipsum dolor sit amet, nec praesent conceptam no vis lorem temporibus. Ei vix rebum noluisse voluptatibus, cum in legere intellegebat, ius ad illum aperiri officiis. </p>
								      </div>
								    </div>
								  </div> <!-- /panel 2 -->
								  <div class="panel">
								    <div class="panel-heading">
								      <h6 class="panel-title">
								        <a data-toggle="collapse" data-parent="#accordion13" href="#collapse133">
								       Is there any custome pricing system?</a>
								      </h6>
								    </div>
								    <div id="collapse133" class="panel-collapse collapse">
								      <div class="panel-body">
								      	<p>Lorem ipsum dolor sit amet, nec praesent conceptam no vis lorem temporibus. Ei vix rebum noluisse voluptatibus, cum in legere intellegebat, ius ad illum aperiri officiis. </p>
								      </div>
								    </div>
								  </div> <!-- /panel 3 -->
								</div> <!-- end #accordion13 -->
							</div> <!-- End of .faq-panel -->
						</div> <!-- /.col- -->
						<div class="col-lg-6">
							<!-- ================== FAQ Panel ================ -->
	        				<div class="faq-panel">
								<div class="panel-group theme-accordion" id="accordion14">
								  <div class="panel">
								    <div class="panel-heading">
								      <h6 class="panel-title">
								        <a data-toggle="collapse" data-parent="#accordion14" href="#collapse141">
								        How to create customer panel?</a>
								      </h6>
								    </div>
								    <div id="collapse141" class="panel-collapse collapse">
								      <div class="panel-body">
								      	<p>mea case duis tollit et. Etiam nusquam set minium eu sea, ei tale paulo elabo et. Noluisse mnesarch Et ius vero incorrupte, eos deserunt quaeren dum not. Vim elit facete ei sem, maluisset constituam. </p>
								      </div>
								    </div>
								  </div> <!-- /panel 1 -->
								  <div class="panel">
								    <div class="panel-heading">
								      <h6 class="panel-title">
								        <a data-toggle="collapse" data-parent="#accordion14" href="#collapse142">
								        Where is the edit optioon on dashboard?</a>
								      </h6>
								    </div>
								    <div id="collapse142" class="panel-collapse collapse">
								      <div class="panel-body">
								      	<p>Lorem ipsum dolor sit amet, nec praesent conceptam no vis lorem temporibus. Ei vix rebum noluisse voluptatibus, cum in legere intellegebat, ius ad illum aperiri officiis. </p>
								      </div>
								    </div>
								  </div> <!-- /panel 2 -->
								  <div class="panel">
								    <div class="panel-heading">
								      <h6 class="panel-title">
								        <a data-toggle="collapse" data-parent="#accordion14" href="#collapse143">
								       Is there any custome pricing system?</a>
								      </h6>
								    </div>
								    <div id="collapse143" class="panel-collapse collapse">
								      <div class="panel-body">
								      	<p>Lorem ipsum dolor sit amet, nec praesent conceptam no vis lorem temporibus. Ei vix rebum noluisse voluptatibus, cum in legere intellegebat, ius ad illum aperiri officiis. </p>
								      </div>
								    </div>
								  </div> <!-- /panel 3 -->
								  <div class="panel">
								    <div class="panel-heading">
								      <h6 class="panel-title">
								        <a data-toggle="collapse" data-parent="#accordion14" href="#collapse144">
								       How delete my account?</a>
								      </h6>
								    </div>
								    <div id="collapse144" class="panel-collapse collapse">
								      <div class="panel-body">
								      	<p>Lorem ipsum dolor sit amet, nec praesent conceptam no vis lorem temporibus. Ei vix rebum noluisse voluptatibus, cum in legere intellegebat, ius ad illum aperiri officiis. </p>
								      </div>
								    </div>
								  </div> <!-- /panel 4 -->
								</div> <!-- end #accordion14 -->
							</div> <!-- End of .faq-panel -->
						</div> <!-- /.col- -->
				    </div> <!-- /.row -->
			    </div>
			</div> <!-- /.tab-content -->
		</div> <!-- /.faq-tab-wrapper -->


		<a href="#footer" class="down-button scroll-target"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
	</div> <!-- /.container -->
</div> <!-- /.sass-faq-section -->




<!-- 
=============================================
	Contact Banner
============================================== 
-->
<div class="sass-contact-banner">
	<div class="u-shape">U</div>
	<div class="d-shape">D</div>
	<div class="container">
		<h2 class="title">Getting connected with us & <br>for the update.</h2>
		<a href="#" class="subscribe-button">Subscribe Now!</a>
	</div> <!-- /.contianer -->
</div>
@stop
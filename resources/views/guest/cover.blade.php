@extends('guest.layout')

@section('css')
    <link rel="stylesheet" href="{{asset('CogencyPack/cogency/assets/css/font-awesome.min.css')}}"> 
    <!-- <link rel="stylesheet" href="{{asset('CogencyPack/cogency/assets/css/flaticon.css')}}"> -->
    <link rel="stylesheet" href="{{asset('CogencyPack/cogency/assets/css/global.css')}}">
    <link rel="stylesheet" href="{{asset('CogencyPack/cogency/assets/css/mainmenu.css')}}">
    <link rel="stylesheet" href="{{asset('CogencyPack/cogency/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('CogencyPack/cogency/assets/css/flaticon.css')}}">
    <!-- <link rel="stylesheet" href="assets/css/flaticon.css"> -->
@stop
@section('script')
    <script src="{{asset('Rogan/rogan-c/html/vendor/jquery.2.2.3.min.js')}}"></script>
	<!-- <script src="{{asset('CogencyPack/cogency/assets/js/jquery-3.3.1.min.js')}}"></script> -->
    <script src="{{asset('CogencyPack/cogency/assets/js/bootstrap-v4.1.3.min.js')}}"></script>
    <script src="{{asset('CogencyPack/cogency/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('CogencyPack/cogency/assets/js/smoothscroll.js')}}"></script>
    <script src="{{asset('CogencyPack/cogency/assets/js/main.js')}}"></script>
    <script src="{{asset('Rogan/rogan-c/html/vendor/jquery.2.2.3.min.js')}}"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="{{asset('js-custom/validate.js')}}"></script>
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
		<p>KONFIRMASI PEMBAYARAN</p>
		<h2 class="pt-30 pb-15">Provide wide range of</h2>
		<p class="sub-heading">digital services</p>
	</div>
</div>
<div class="our-service-app">
	<div class="theme-title-one text-center">
		<h2 class="main-title">Cara Mudah Melakukan Order</h2>
	</div> <!-- /.theme-title-one -->

	<div class="main-content hide-pr">
		<div class="row">
			<div class="col-lg-4 single-block">
				<div class="inner-wrapper">
					<div class="illustration-box">
						<img src="{{asset('Rogan/rogan-c/html/images/shape/shape-33.svg')}}" alt="" class="bg-shape">
						<img src="{{asset('Rogan/rogan-c/html/images/shape/shape-34.svg')}}" alt="" class="block-shape-one">
						<img src="{{asset('Rogan/rogan-c/html/images/shape/shape-35.svg')}}" alt="" class="block-shape-two">
						<img src="{{asset('Rogan/rogan-c/html/images/shape/shape-36.svg')}}" alt="" class="block-shape-three">
					</div>
					<h4 class="title"><a href="#">Automate Workflow</a></h4>
					<p>Lorem ipsum dolor sit amet, error insolens reprimique no quo, ea pri verterem phaedr vel ea iisque aliquam</p>
				</div> <!-- /.inner-wrapper -->
			</div> <!-- /.single-block -->

			<div class="col-lg-4 single-block">
				<div class="inner-wrapper">
					<div class="illustration-box">
						<img src="{{asset('Rogan/rogan-c/html/images/shape/shape-37.svg')}}" alt="" class="bg-shape">
						<img src="{{asset('Rogan/rogan-c/html/images/shape/shape-38.svg')}}" alt="" class="block-shape-one">
						<img src="{{asset('Rogan/rogan-c/html/images/shape/shape-39.svg')}}" alt="" class="block-shape-two">
						<img src="{{asset('Rogan/rogan-c/html/images/shape/shape-40.svg')}}" alt="" class="block-shape-three">
						<img src="{{asset('Rogan/rogan-c/html/images/shape/shape-41.svg')}}" alt="" class="block-shape-four">
					</div>
					<h4 class="title"><a href="#">Analyize User Data</a></h4>
					<p>Lorem ipsum dolor sit amet, error insolens reprimique no quo, ea pri verterem phaedr vel ea iisque aliquam</p>
				</div> <!-- /.inner-wrapper -->
			</div> <!-- /.single-block -->

			<div class="col-lg-4 single-block">
				<div class="inner-wrapper">
					<div class="illustration-box">
						<img src="{{asset('Rogan/rogan-c/html/images/shape/shape-42.svg')}}" alt="" class="bg-shape">
						<img src="{{asset('Rogan/rogan-c/html/images/shape/shape-43.svg')}}" alt="" class="block-shape-one">
					</div>
					<h4 class="title"><a href="#">Unbreakable Security</a></h4>
					<p>Lorem ipsum dolor sit amet, error insolens reprimique no quo, ea pri verterem phaedr vel ea iisque aliquam</p>
				</div> <!-- /.inner-wrapper -->
			</div> <!-- /.single-block -->
		</div> <!-- /.row -->

		<a href="#" class="more-button">See More Details</a>
		<a href="#feature" class="down-arrow scroll-target"><span><i class="flaticon-back"></i></span></a>
	</div> <!-- /.main-content -->
</div> 
<div class="theme-counter-two">
	<div class="container pt-200">
		<h2 class="pt-30 pb-15 text-custom-title">
			Order Bulan Ini
		</h2>
		<!-- <p class="sub-heading">From a team of passionate creators working side-by-side with our partners to deliver engaging digital and physical campaigns.</p> -->
	</div>
	<div class="row no-gutters">
		<div class="col-md-4 single-counter-box d-flex align-items-center">
			<div class="icon-box"><img src="{{asset('Rogan/rogan-c/html/images/icon/icon44.svg')}}" alt=""></div>
			<div class="text">
				<h2 class="number"><span class="timer" data-from="0" data-to="1980" data-speed="1200" data-refresh-interval="5">0</span></h2>
				<p>Founded Date</p>
			</div> <!-- /.text -->
		</div> <!-- /.single-counter-box -->
		<div class="col-md-4 single-counter-box d-flex align-items-center">
			<div class="icon-box"><img src="{{asset('Rogan/rogan-c/html/images/icon/icon45.svg')}}" alt=""></div>
			<div class="text">
				<h2 class="number"><span class="timer" data-from="0" data-to="3200" data-speed="1200" data-refresh-interval="5">0</span>+</h2>
				<p>Completed Projects</p>
			</div> <!-- /.text -->
		</div> <!-- /.single-counter-box -->
		<div class="col-md-4 single-counter-box d-flex align-items-center">
			<div class="icon-box"><img src="{{asset('Rogan/rogan-c/html/images/icon/icon46.svg')}}" alt=""></div>
			<div class="text">
				<h2 class="number"><span class="timer" data-from="0" data-to="1500" data-speed="1200" data-refresh-interval="5">0</span>+</h2>
				<p>Worldwide Branches</p>
			</div> <!-- /.text -->
		</div> <!-- /.single-counter-box -->
	</div> <!-- /.d-lg-flex -->
</div>
<section class="contact-page-section pt-70 pb-100 rpb-50">
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-box">
                        <ul class="nav mb-35" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <!-- INI DIA -->
                                <a class="nav-link custom-redirect-1 active" id="tab-one-tab" data-toggle="pill" href="#tab-one" role="tab" aria-controls="tab-one" aria-selected="true">
                                    <i class="flaticon-bag"></i>
                                    <span>Pre-Sales</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link custom-redirect-2" id="tab-two-tab" data-toggle="pill" href="#tab-two" role="tab" aria-controls="tab-two" aria-selected="false">
                                    <i class="flaticon-services-portfolio"></i>
                                    <span>Project Proposal</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link custom-redirect" id="tab-three-tab" data-toggle="pill" href="#tab-three" role="tab" aria-controls="tab-three" aria-selected="false">
                                    <i class="flaticon-information"></i>
                                    <span>Other</span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <!-- INI DIA -->
                            <div class="tab-pane fade custom-body-redirect-1 show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one-tab">

                                <!-- start form style -->
                                <div class="contact-form-wrap">
                                    <form class="form-style" action="#">
                                        <div class="row">
                                            <div class="container">
                                                <div class="form-group your-name mr-3 ml-3">
                                                    <label for="layanan">Layanan</label>
                                                    <select class="form-control" id="layanan">
                                                      <option disabled selected>Pilih Layanan ... </option>
                                                      @foreach($layanan as $layanan)
                                                      <option value="{{$layanan->id}}">{{$layanan->name}}</option>
                                                      @endforeach
                                                    </select>
                                                    <small class="text-danger form-text text-muted" id="errorLayanan"></small>
                                                </div>
                                                <div class="form-group your-name mr-3 ml-3">
                                                    <label for="layanan">Kategori Layanan</label>
                                                    <select class="form-control" id="kategori">
                                                      <option disabled selected>Pilih Kategori Layanan ... </option>
                                                      <!-- <option value="1">STOCK DOWNLOAD</option> -->
                                                    </select>
                                                    <small class="text-danger form-text text-muted" id="errorKategori"></small>
                                                </div>
                                                <div class="form-group your-name mr-3 ml-3">
                                                    <label for="layanan">Produk Layanan</label>
                                                    <select class="form-control" id="produk" disabled>
                                                      <option disabled selected class="disable-class">Pilih Produk Layanan ... </option>
                                                    </select>
                                                    <small class="text-danger form-text text-muted" id="errorProduk"></small>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="your-name">
                                                        <input type="text" placeholder="Input Link*">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6" id="tujuan">
                                                    
                                                </div>
                                            </div>

                                            <div class="col-xl-12 nav-item" id="pills-tab" role="tablist">
                                                <button class="btn-bg" id="next1" type="button">Next</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- end form style -->
                              
                            </div>
                            <div class="tab-pane fade custom-body-redirect-2" id="tab-two" role="tabpanel" aria-labelledby="tab-two-tab">

                                <!-- start form style -->
                                <div class="contact-form-wrap rmb-30">
                                    <form class="form-style" action="#">
                                        <div class="row">
                                            
                                            <div class="col-xl-12">
                                                <div class="your-name">
                                                    <input type="text" placeholder="KE 2*">
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="your-email">
                                                    <input type="email" placeholder="Email*">
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="your-website">
                                                    <input type="text" placeholder="Subject*">
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="your-message">
                                                    <textarea name="comments" cols="30" rows="10" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <button class="btn-bg" id="next2" type="submit">Next</button>
                                            </div>
                                            <div class="col-xl-12">
                                                <button class="btn-bg" id="prev1" type="submit">Previous</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- end form style -->

                            </div>
                            <div class="tab-pane fade custom-redirect" id="tab-three" role="tabpanel" aria-labelledby="tab-three-tab">

                                <!-- start form style -->
                                <div class="contact-form-wrap rmb-30">
                                    <form class="form-style" action="#">
                                        <div class="row">
                                            
                                            <div class="col-xl-6">
                                                <div class="your-name">
                                                    <input type="text" placeholder="First Name*">
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="your-name">
                                                    <input type="text" placeholder="Last Name*">
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="your-email">
                                                    <input type="email" placeholder="Email*">
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="your-message">
                                                    <textarea name="comments" cols="30" rows="10" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                           <div class="col-xl-12">
                                                <button class="btn-bg" id="next3" type="submit">Next</button>
                                            </div>
                                            <div class="col-xl-12">
                                                <button class="btn-bg" id="prev2" type="submit">Previous</button>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                                <!-- end form style -->

                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
        <div class="col-lg-4">

            <div class="sidebar contact-sidebar ml-20 rmt-50 rml-0">

                <div class="widget contact-widget">
                    <h5>Don’t Hesitate to contact with us for any kind of information</h5>
                    <p>Call us for imidiate support to this number</p>
                    <span class="number">+12 120 650 6913</span>
                    <ul class="social-icon-one">
                        <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                    <h5>Office Address</h5>
                    <p>4392 Highland View Drive Dunnigan, CA 95937</p>
                </div>

                <div class="widget contact-widget">
                    <h5>Available Hours</h5>
                    <table>
                        <tr>
                            <td>Weekdays</td>
                            <td><span>  </span></td>
                            <td>9:00-17:00</td>
                        </tr>
                        <tr>
                            <td>Saturday</td>
                            <td><span>  </span></td>
                            <td>10:00-15:00</td>
                        </tr>
                        <tr>
                            <td>Sunday</td>
                            <td><span>  </span></td>
                            <td>Closed</td>
                        </tr>
                        <tr>
                            <td>Holidays</td>
                            <td><span>  </span></td>
                            <td>10:00-13:00</td>
                        </tr>

                    </table>
                </div>

            </div>

        </div>
    </div>
</div>
</section>








<div class="container">
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
</div>
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
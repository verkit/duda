@extends('guest.layout')
@section('script')
	<script src="{{asset('Rogan/rogan-c/html/vendor/tabs/tabs.js')}}"></script>
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
		<h2 class="pt-30 pb-15">Provide wide range of</h2>
		<p class="sub-heading">digital services</p>
	</div>
</div> <!-- /.text-inner-banner-one -->

<!-- Element Style -->
<div class="container with-custom-shadows mb-150 mt-100">
	<div class="element-section">
		<div class="container">
			<!-- <div class="element-tile-two">Basic Vertical tab</div> -->
			<div class="row">
				<div class="col-lg-10 m-auto">
					<!-- The value of data-role should be z-tabs, data-options is optional to set options -->
					<div id='theme-tab-three' class="theme-tab-basic theme-tab" data-role='z-tabs' data-options='{"theme": "silver", "orientation": "vertical", "animation": {"duration": 400, "effects": "slideV"}}'>
			            <!-- Tab Navigation Menu -->
			            <ul class="tabs-menu clearfix">
			                <li><a>Graphics</a></li>
			                <li><a>Design</a></li>
			                <li><a>Vectors</a></li>
			                <li><a>Themes</a></li>
			            </ul>
			            <!-- Content container -->
			            <div class="tab-container">
			                <!-- Graphics -->
			                <div>
			                    <h4>Graphics</h4>
			                    <p>Duis sed sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus. Proin gravida nibh vel velit auctor aliquet de saitis nicius. em quis bibendum auctor.</p>
			                    <ul class="list-item">
									<li>Lorem ipsum best lightweight bras cool rejection quickly avoid dummy text.</li>
									<li>Lightweight bras cool rejection quickly avoid dummy text.</li>
									<li>We quickly learn to fear and thus automatically avoid potentially</li>
									<li>Lorem ipsum best lightweight bras cool rejection quickly avoid dummy text.</li>
								</ul>
			                </div>

			                <!-- Design -->
			                <div>
			                    <h4>Design</h4>
			                    <p>Duis sed sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
			                    <div class="img-gallery row">
			                    	<div class="col-lg-6"><img src="images/gallery/1.jpg" alt=""></div>
			                    	<div class="col-lg-6"><img src="images/gallery/2.jpg" alt=""></div>
			                    </div>
			                </div>

			                <!-- Vectors -->
			                <div>
			                    <h4>Vectors</h4>
			                    <p>Duis sed sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus. Proin gravida nibh vel velit auctor aliquet de saitis nicius. em quis bibendum auctor.</p>
			                </div>

			                <!-- Themes -->
			                <div>
			                    <h4>Themes</h4>
			                    <p>Duis sed sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus. Proin gravida nibh vel velit auctor aliquet de saitis nicius. em quis bibendum auctor.</p>
			                    <ul class="list-item">
									<li>Lorem ipsum best lightweight bras cool rejection quickly avoid dummy text.</li>
									<li>Lightweight bras cool rejection quickly avoid dummy text.</li>
									<li>We quickly learn to fear and thus automatically avoid potentially</li>
									<li>Lorem ipsum best lightweight bras cool rejection quickly avoid dummy text.</li>
								</ul>
			                </div>
			            </div> <!-- /.tab-container -->
			        </div> <!-- /.theme-tab -->
				</div>
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
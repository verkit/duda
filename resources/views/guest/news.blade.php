@extends('guest.layout')

@section('content')
<div class="text-inner-banner-one pos-r">
    <div class="shape-wrapper">
        <svg class="img-shape shape-one">
            <path fill-rule="evenodd" fill="rgb(255, 223, 204)"
                d="M6.000,12.000 C9.314,12.000 12.000,9.314 12.000,6.000 C12.000,2.686 9.314,-0.000 6.000,-0.000 C2.686,-0.000 -0.000,2.686 -0.000,6.000 C-0.000,9.314 2.686,12.000 6.000,12.000 Z" />
        </svg>
        <svg class="img-shape shape-two">
            <path fill-rule="evenodd" fill="rgb(182, 255, 234)"
                d="M6.000,12.000 C9.314,12.000 12.000,9.314 12.000,6.000 C12.000,2.686 9.314,-0.000 6.000,-0.000 C2.686,-0.000 -0.000,2.686 -0.000,6.000 C-0.000,9.314 2.686,12.000 6.000,12.000 Z" />
        </svg>
        <svg class="img-shape shape-three">
            <path fill-rule="evenodd" fill="rgb(181, 198, 255)"
                d="M12.000,24.000 C18.627,24.000 24.000,18.627 24.000,12.000 C24.000,5.372 18.627,-0.000 12.000,-0.000 C5.372,-0.000 -0.000,5.372 -0.000,12.000 C-0.000,18.627 5.372,24.000 12.000,24.000 Z" />
        </svg>
        <svg class="img-shape shape-four">
            <path fill-rule="evenodd" fill="rgb(255, 156, 161)"
                d="M7.500,15.000 C11.642,15.000 15.000,11.642 15.000,7.500 C15.000,3.358 11.642,-0.000 7.500,-0.000 C3.358,-0.000 -0.000,3.358 -0.000,7.500 C-0.000,11.642 3.358,15.000 7.500,15.000 Z" />
        </svg>
        <svg class="img-shape shape-five">
            <path fill-rule="evenodd" fill="rgb(178, 236, 255)"
                d="M12.500,25.000 C19.403,25.000 25.000,19.403 25.000,12.500 C25.000,5.596 19.403,-0.000 12.500,-0.000 C5.596,-0.000 -0.000,5.596 -0.000,12.500 C-0.000,19.403 5.596,25.000 12.500,25.000 Z" />
        </svg>
    </div> <!-- /.shape-wrapper -->
    <div class="container">
        <p>Portfolio</p>
        <h2 class="pt-30 pb-15">Strong Portfolio</h2>
        <p class="sub-heading">From a team of passionate creators working side-by-side with our partners to deliver
            engaging digital and physical campaigns.</p>
    </div>
</div> <!-- /.text-inner-banner-one -->





<!--
=============================================
	Our Portfolio
==============================================
-->
<div class="our-portfolio">
    <div class="container">
        <!-- <div id="filter-for-classic" class="cbp-l-filters-alignCenter filter-menu">
	        <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">
	            ALL <div class="cbp-filter-counter"></div>
	        </div>
	        <div data-filter=".marketing" class="cbp-filter-item">
	            Marketing <div class="cbp-filter-counter"></div>
	        </div>
	        <div data-filter=".application" class="cbp-filter-item">
	            Application <div class="cbp-filter-counter"></div>
	        </div>
	        <div data-filter=".design" class="cbp-filter-item">
	            Design <div class="cbp-filter-counter"></div>
	        </div>
	        <div data-filter=".developement" class="cbp-filter-item">
	            Development <div class="cbp-filter-counter"></div>
	        </div>
	    </div> -->

        @foreach($news as $item)
        <div id="style-grid-one" class="cbp cube-port">
            <div class="cbp-item graphic marketing design">
                <div class="cbp-item-wrapper">
                    <div class="cbp-caption">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{{"storage/images/$item->cover"}}" alt="{{$item->title}}">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <a href="{{url("/ajax-pages/$item->id")}}"
                                        class="cbp-singlePage cbp-l-caption-buttonLeft" rel="nofollow">more info
                                        {{$item->id}}</a>
                                    <a href="{{"storage/images/$item->cover"}}"
                                        class="cbp-lightbox cbp-l-caption-buttonRight"
                                        data-title="{{$item->title}}<br>by Admin">view larger</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div> <!-- /.our-portfolio -->



<!--
=====================================================
	Contact Banner
=====================================================
-->
<div class="action-banner-one bg-white">
    <div class="theme-title-one">
        <h2 class="main-title">Do you have any projects?<br><i>Contact us.</i></h2>
    </div> <!-- /.theme-title-one -->
    <a href="#" class="theme-btn line-button-one button-rose">Contact us</a>
</div> <!-- /.action-banner-one -->
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

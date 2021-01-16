@extends('guest.layout')

@section('css')
  
@stop
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
    <p>Testimonial</p>
    <h2 class="pt-30 pb-15">Our Customer</h2>
    <p class="sub-heading">feedback</p>
  </div>
</div> <!-- /.text-inner-banner-one -->

<!-- Element Style -->
<div class="team-standard pb-250 sm-pb-90" style="margin-top: 101px">
  <div class="agn-about-us">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 custom-svg-bl">
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lottie-player
            src="https://assets6.lottiefiles.com/packages/lf20_SVVYwo.json"  background="transparent"  speed="1"  style="width: 884px; height: 602px;"  loop  autoplay >
        </lottie-player>
      </div>
      <div class="col-lg-6">
        <div class="text-wrapper text-wrapper-custom">
          <div class="theme-title-one">
            <h2 class="main-title title-custom">Leading Digital Agency for Business Solution.</h2>
          </div>
          <p>Lorem ipsum dolor sit amet, hendrerit omittantur mel, es vidit animal iracundia. Ius te altera essent incorrupte. Id alien accu consetetur eam, nibh aliquam iracundia.</p>
        
        </div>
      </div>
    </div>
  </div>
  </div> 
</div> 
<div class="container">	
  <div class="theme-title-one text-center pb-50 md-pb-30">
    {{-- <h2 class="main-title">Our Provided <br><i>Services.</i></h2> --}}
  </div> <!-- /.theme-title-one -->

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
</div> 
</div>
<style type="text/css">
</style>
@stop
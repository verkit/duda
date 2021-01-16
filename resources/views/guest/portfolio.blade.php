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
    <p>Portfolio</p>
    <h2 class="pt-30 pb-15">Our Work</h2>
    <p class="sub-heading">From customers</p>
  </div>
</div> <!-- /.text-inner-banner-one -->

<!-- Element Style -->
<div class="rogan-hero-section rogan-hero-one pt-50 pb-350 md-pt-200 md-pb-130 pos-r">
        <div class="shape-wrapper">
          <img src="{{asset('Rogan/rogan-b/html/images/shape/1.svg')}}" alt="" class="shape-one wow fadeInRight animated" data-wow-duration="2s">
          <div class="main-illustration">
            <!-- <iframe src="{{asset('Rogan/rogan-b/html/images/svg-animi/1/SVG/demo.html')}}" class="wow zoomIn animated" data-wow-duration="2s" data-wow-delay="0.9s"></iframe> -->
          <div class="wow zoomIn animated custom-loc" data-wow-duration="1s" data-wow-delay="0.9s">
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player
                src="https://assets2.lottiefiles.com/packages/lf20_9R82eg.json"  background="transparent"  speed="1"  style="width: 928px; height: 1024px;"  loop  autoplay >
            </lottie-player>
          </div>
          </div>
          <img src="{{asset('Rogan/rogan-b/html/images/shape/2.svg')}}" alt="" class="line-shape-one img-shape wow fadeInRight animated" data-wow-duration="3s">
          <img src="{{asset('Rogan/rogan-b/html/images/shape/3.svg')}}" alt="" class="line-shape-two img-shape wow fadeInLeft animated" data-wow-duration="3s">
          <img src="{{asset('Rogan/rogan-b/html/images/shape/15.svg')}}" alt="" class="light-lamp img-shape wow fadeInDown animated" data-wow-duration="2s" data-wow-delay="1.7s">
          <img src="{{asset('Rogan/rogan-b/html/images/shape/4.svg')}}" alt="" class="shape-two img-shape">
          <img src="{{asset('Rogan/rogan-b/html/images/shape/5.svg')}}" alt="" class="shape-three img-shape">
          <img src="{{asset('Rogan/rogan-b/html/images/shape/6.svg')}}" alt="" class="shape-four img-shape">
          <img src="{{asset('Rogan/rogan-b/html/images/shape/7.svg')}}" alt="" class="shape-five img-shape">
          <img src="{{asset('Rogan/rogan-b/html/images/shape/8.svg')}}" alt="" class="shape-six img-shape">
          <img src="{{asset('Rogan/rogan-b/html/images/shape/9.svg')}}" alt="" class="shape-seven img-shape">
          <img src="{{asset('Rogan/rogan-b/html/images/shape/10.svg')}}" alt="" class="shape-eight img-shape">
          <img src="{{asset('Rogan/rogan-b/html/images/shape/11.svg')}}" alt="" class="shape-nine img-shape">
          <img src="{{asset('Rogan/rogan-b/html/images/shape/12.svg')}}" alt="" class="shape-ten img-shape">
          <img src="{{asset('Rogan/rogan-b/html/images/shape/13.svg')}}" alt="" class="shape-eleven img-shape">
          <img src="{{asset('Rogan/rogan-b/html/images/shape/14.svg')}}" alt="" class="shape-twelve img-shape">
        </div>
        <div class="container">
          <div class="main-wrapper pos-r">
            <h1 class="banner-main-title underline pt-15 pb-45 md-pt-10 md-pb-30 wow fadeInUp animated" data-wow-delay="0.4s"><span>Great managment </span> 
              <br> 
              <span>and strong security</span>
              <br>
              <span> system.</span>
            </h1>
            <p class="banner-sub-title-top  wow fadeInUp animated">Lorem ipsum dolor sit amet, hendrerit omittantur mel.</p>
              <p class="banner-sub-title pb-45 md-pb-30 wow fadeInUp animated" data-wow-delay="0.9s">Lorem ipsum dolor sit amet, hendrerit omittantur mel, es vidit animal iracundia. Ius te altera essent incorrupte. Id alien accu consetetur eam aliquam iracundia.
            </p>
          
          </div> <!-- /.main-wrapper -->
        </div> <!-- /.container -->
      </div>



  <div class="our-project pt-150">
        <ul class="isotop-menu-wrapper pb-100">
          <li class="is-checked" data-filter="*">All</li>
          <li data-filter=".marketing">Marketing</li>
          <li data-filter=".application">Application</li>
          <li data-filter=".design">Design</li>
          <li data-filter=".development">Development</li>
        </ul>

        <!-- Project Image -->
        <div id="isotop-gallery-wrapper">
          <div class="grid-sizer"></div>
          <div class="isotop-item marketing design">
            <div class="project-item">
              <div class="img-box"><img src="images/gallery/1.jpg" alt=""></div>
              <div class="hover-jojo">
                <div>
                  <h4 class="title"><a href="#">Lonely <span>Steve</span></a></h4>
                  <div>
                    <p>Rogan dances in the deep dark</p>
                    <p>She loves the smell of the ocean</p>
                    <p>And dives into the morning light</p>
                  </div>
                  <ul>
                    <li><a href="project-details-standard.html"><span>+</span></a></li>
                    <li><a href="images/gallery/1.jpg" class="zoom fancybox" data-fancybox="gallery"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </div> <!-- /.hover-jojo -->
            </div> <!-- /.project-item -->
          </div> <!-- /.isotop-item -->
          <div class="isotop-item marketing design">
            <div class="project-item">
              <div class="img-box"><img src="images/gallery/2.jpg" alt=""></div>
              <div class="hover-jojo">
                <div>
                  <h4 class="title"><a href="#">Lonely <span>Steve</span></a></h4>
                  <div>
                    <p>Rogan dances in the deep dark</p>
                    <p>She loves the smell of the ocean</p>
                    <p>And dives into the morning light</p>
                  </div>
                  <ul>
                    <li><a href="project-details-standard.html"><span>+</span></a></li>
                    <li><a href="images/gallery/2.jpg" class="zoom fancybox" data-fancybox="gallery"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </div> <!-- /.hover-jojo -->
            </div> <!-- /.project-item -->
          </div> <!-- /.isotop-item -->
          <div class="isotop-item application development">
            <div class="project-item">
              <div class="img-box"><img src="images/gallery/3.jpg" alt=""></div>
              <div class="hover-jojo">
                <div>
                  <h4 class="title"><a href="#">Lonely <span>Steve</span></a></h4>
                  <div>
                    <p>Rogan dances in the deep dark</p>
                    <p>She loves the smell of the ocean</p>
                    <p>And dives into the morning light</p>
                  </div>
                  <ul>
                    <li><a href="project-details-standard.html"><span>+</span></a></li>
                    <li><a href="images/gallery/3.jpg" class="zoom fancybox" data-fancybox="gallery"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </div> <!-- /.hover-jojo -->
            </div> <!-- /.project-item -->
          </div> <!-- /.isotop-item -->
          <div class="isotop-item application development">
            <div class="project-item">
              <div class="img-box"><img src="images/gallery/4.jpg" alt=""></div>
              <div class="hover-jojo">
                <div>
                  <h4 class="title"><a href="#">Lonely <span>Steve</span></a></h4>
                  <div>
                    <p>Rogan dances in the deep dark</p>
                    <p>She loves the smell of the ocean</p>
                    <p>And dives into the morning light</p>
                  </div>
                  <ul>
                    <li><a href="project-details-standard.html"><span>+</span></a></li>
                    <li><a href="images/gallery/4.jpg" class="zoom fancybox" data-fancybox="gallery"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </div> <!-- /.hover-jojo -->
            </div> <!-- /.project-item -->
          </div> <!-- /.isotop-item -->
          <div class="isotop-item marketing design">
            <div class="project-item">
              <div class="img-box"><img src="images/gallery/5.jpg" alt=""></div>
              <div class="hover-jojo">
                <div>
                  <h4 class="title"><a href="#">Lonely <span>Steve</span></a></h4>
                  <div>
                    <p>Rogan dances in the deep dark</p>
                    <p>She loves the smell of the ocean</p>
                    <p>And dives into the morning light</p>
                  </div>
                  <ul>
                    <li><a href="project-details-standard.html"><span>+</span></a></li>
                    <li><a href="images/gallery/5.jpg" class="zoom fancybox" data-fancybox="gallery"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </div> <!-- /.hover-jojo -->
            </div> <!-- /.project-item -->
          </div> <!-- /.isotop-item -->
          <div class="isotop-item application marketing">
            <div class="project-item">
              <div class="img-box"><img src="images/gallery/6.jpg" alt=""></div>
              <div class="hover-jojo">
                <div>
                  <h4 class="title"><a href="#">Lonely <span>Steve</span></a></h4>
                  <div>
                    <p>Rogan dances in the deep dark</p>
                    <p>She loves the smell of the ocean</p>
                    <p>And dives into the morning light</p>
                  </div>
                  <ul>
                    <li><a href="project-details-standard.html"><span>+</span></a></li>
                    <li><a href="images/gallery/6.jpg" class="zoom fancybox" data-fancybox="gallery"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </div> <!-- /.hover-jojo -->
            </div> <!-- /.project-item -->    
          </div> <!-- /.isotop-item -->
          <div class="isotop-item marketing design development">
            <div class="project-item">
              <div class="img-box"><img src="images/gallery/7.jpg" alt=""></div>
              <div class="hover-jojo">
                <div>
                  <h4 class="title"><a href="#">Lonely <span>Steve</span></a></h4>
                  <div>
                    <p>Rogan dances in the deep dark</p>
                    <p>She loves the smell of the ocean</p>
                    <p>And dives into the morning light</p>
                  </div>
                  <ul>
                    <li><a href="project-details-standard.html"><span>+</span></a></li>
                    <li><a href="images/gallery/7.jpg" class="zoom fancybox" data-fancybox="gallery"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </div> <!-- /.hover-jojo -->
            </div> <!-- /.project-item -->
          </div> <!-- /.isotop-item -->
          <div class="isotop-item application">
            <div class="project-item">
              <div class="img-box"><img src="images/gallery/8.jpg" alt=""></div>
              <div class="hover-jojo">
                <div>
                  <h4 class="title"><a href="#">Lonely <span>Steve</span></a></h4>
                  <div>
                    <p>Rogan dances in the deep dark</p>
                    <p>She loves the smell of the ocean</p>
                    <p>And dives into the morning light</p>
                  </div>
                  <ul>
                    <li><a href="project-details-standard.html"><span>+</span></a></li>
                    <li><a href="images/gallery/8.jpg" class="zoom fancybox" data-fancybox="gallery"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </div> <!-- /.hover-jojo -->
            </div> <!-- /.project-item -->
          </div> <!-- /.isotop-item -->
          <div class="isotop-item application development">
            <div class="project-item">
              <div class="img-box"><img src="images/gallery/9.jpg" alt=""></div>
              <div class="hover-jojo">
                <div>
                  <h4 class="title"><a href="#">Lonely <span>Steve</span></a></h4>
                  <div>
                    <p>Rogan dances in the deep dark</p>
                    <p>She loves the smell of the ocean</p>
                    <p>And dives into the morning light</p>
                  </div>
                  <ul>
                    <li><a href="project-details-standard.html"><span>+</span></a></li>
                    <li><a href="images/gallery/9.jpg" class="zoom fancybox" data-fancybox="gallery"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </div> <!-- /.hover-jojo -->
            </div> <!-- /.project-item -->
          </div> <!-- /.isotop-item -->
        </div> <!-- /#isotop-gallery-wrapper -->
      </div>
<style type="text/css">
</style>
@stop
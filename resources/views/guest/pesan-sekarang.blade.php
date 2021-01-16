@extends('guest.layout')

@section('css')
<link rel="stylesheet" href="{{asset('CogencyPack/cogency/assets/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('CogencyPack/cogency/assets/css/global.css')}}">
<link rel="stylesheet" href="{{asset('CogencyPack/cogency/assets/css/mainmenu.css')}}">
<link rel="stylesheet" href="{{asset('CogencyPack/cogency/assets/css/style.css')}}">
<link rel="stylesheet" href="{{asset('CogencyPack/cogency/assets/css/flaticon.css')}}">
<link rel="stylesheet" href="{{asset('custom/custom.css')}}">
@stop
@section('script')
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
<script type="text/javascript"></script>
<script src="{{asset('Rogan/rogan-c/html/vendor/jquery.2.2.3.min.js')}}"></script>
<script src="{{asset('CogencyPack/cogency/assets/js/bootstrap-v4.1.3.min.js')}}"></script>
<script src="{{asset('CogencyPack/cogency/assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('CogencyPack/cogency/assets/js/smoothscroll.js')}}"></script>
<script src="{{asset('Rogan/rogan-c/html/vendor/jquery.2.2.3.min.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="{{asset('custom/validate.js')}}"></script>
<script src="{{asset('custom/layanan.js')}}"></script>
<script src="{{asset('custom/cek-kupon.js')}}"></script>
<script src="{{asset('custom/onTag.js')}}"></script>
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
<div class="modal fade" id="alert-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-message">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="alert alert-warning" id="error-body">

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light border-secondary" data-dismiss="modal">Oke</button>
      </div>
    </div>
  </div>
</div>
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
                <div class="row">
                    <div class="container ml-4">
                        <div id="tujuan">
                        <div class="form-group your-name">
                           <div class="col-xl-12 row pt-25 pb-100 custom-ln-border">
                            <h3 class="text-center text-custom mb-3">Silahkan Pilih Layanan</h3>
                          <div class="row col-md-12 align-content-center">
                          @foreach($layanan as $layanan)
                          <div class="col-md-2 d-flex mx-auto">
                            <input type="radio" name="layanan" id="{{$layanan->id}}" class="custom-ln-radio" value="{{$layanan->id}}">
                            <label for="{{$layanan->id}}" class="custom-ln-label">
                                <i class="custom-ln-icon {{$layanan->icon}}" aria-hidden="true"></i>
                                <span class="custom-ln-span">{{$layanan->service_name}}</span>
                            </label>
                            </div>
                          @endforeach
                        </div>
                        </div>
                        </div>
                    </div>

        </div>
        <div id="keyword" class="col-xl-12"></div>
        <div class="col-xl-12" id="tagged">
            <div class="form-group">
            <input type="text" id="pickedLayanan" style="display: none;">                
            <input type="text" id="pickedCategory" style="display: none;">                
            <input type="text" id="t1" style="display: none;">
            <input type="text" id="t2" style="display: none;">
            <input type="text" id="t3" style="display: none;">
            <input type="text" id="t4" style="display: none;">
            <input type="text" id="t5" style="display: none;">
            <label for="exampleInputEmail1">URL Keyword</label>
            <div class="tag-container" id="inputan_field">
            <input class="" id="inputan" />
          </div>
            <!-- <div id="urlXZ" class="form-text text-muted">
                <p id="cekExists"> CEK</p>
            </div> -->
          </div>
        </div>

        <div class="col-xl-12">
          <div class="form-group">
                <label for="exampleInputEmail1">URL Link</label>
                <input type="text" class="form-control border-bg-d" id="thisURLLink" placeholder="Enter URL Link">
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
        </div>
            <div class="col-xl-12 text-right mt-4">
                <button class="btn-bg" id="next1" type="button">Next</button>
            </div>
        </div>
        </div>
    </div>
    <div class="tab-pane fade custom-body-redirect-2" id="tab-two" role="tabpanel" aria-labelledby="tab-two-tab">
        <!-- start form style -->
        <div class="contact-form-wrap rmb-30">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Lengkap</label>
                        <input type="text" class="form-control border-bg-d" id="thisNamaLengkap" aria-describedby="emailHelp" placeholder="Enter email">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control border-bg-d" id="thisEmail" aria-describedby="emailHelp" placeholder="Enter email">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nomor HP</label>
                        <input type="text" class="form-control border-bg-d" id="thisNoHp" placeholder="Enter email">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Catatan</label>
                        <textarea class="form-control border-bg-d" id="exampleFormControlTextarea1" rows="3"></textarea>
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="row d-flex justify-content-between">
                        <div class="ml-3">
                            <button class="btn-bg" id="prev1" type="submit">Previous</button>
                        </div>
                        <div class="mr-3">
                            <button class="btn-bg " id="next2" type="submit">Next</button>
                        </div>
                    </div>
        </div>
        <!-- end form style -->

    </div>
<div class="tab-pane fade custom-redirect-3" id="tab-three" role="tabpanel" aria-labelledby="tab-three-tab">

    <!-- start form style -->
    <div class="contact-form-wrap rmb-30">
        <div class="row align-items-center ">
            <div class="col-lg-12 m-xl-auto">
                <div class="order-confirm-sheet  p-3">
                    <div class="order-review pl-3 pr-3">
                    <h2 class="main-title text-center mt-2">Checkout</h2>
                    <div class="">
                        <div class="mt-5">
                            <div class="row justify-content-between">
                                <h5 id="txt_layanan">
                                  Bluetooth Speaker
                                </h5>
                                <p class=" text-right ">
                                  
                                </p>
                            </div>
                        </div>
                        <div class="mt-1">
                            <div class="row justify-content-between">
                                <h5 id="txt_kat_layanan">
                                  Bluetooth Speaker
                                </h5>
                                <p class=" text-right ">
                                  
                                </p>
                            </div>
                        </div>
                        <div class="mt-1">
                            <div class="row justify-content-between">
                                <h5 id="txt_produk">
                                  Bluetooth Speaker
                                </h5>
                                <p class=" text-right " id="txt-harga-produk">
                                  $ 123.342
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="mt-1">
                            <div class="row justify-content-between">
                                <h5>
                                  Total
                                </h5>
                                <h3 class=" text-right" id="txt-total-normal" style="display: none">
                                  $ 123.342
                                </h3>
                                <h3 class=" text-right" id="txt-total" style="display: none">
                                  $ 123.342
                                </h3>
                            </div>
                        </div>
                        <div class="mt-1">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="alert alert-info" id="alertKupon" style="display: none;">
                                          <h4 class="alert-heading">Kupon Berhasil Digunakan</h4>
                                          <hr>
                                          <p>Anda berhasil menggunakan kupon <strong id="namaKUPON"></strong>, harga pembelian total adalah Rp. <strong id="hargaAWAL"></strong> setelah diskon <strong id="diskonTOTAL"></strong>% menjadi Rp. <strong id="hargaAKHIR"></strong></p>
                                        </div>
                                    <label for="inputKupon" id="cnt">Kode Kupon (opsional)</label>
                                        <div class="row">
                                        <div class="col-md-9">
                                            <input type="hidden" id="idProduk">
                                            <input type="hidden" id="idProdukFIX">
                                            <input type="hidden" id="kuponFIX">
                                            <input type="text" class="form-control" id="inputKupon" aria-describedby="emailHelp" placeholder="Masukkan Kode Kupon">

                                        </div>
                                        <div class="col-md-3" id="appendedBTN">
                                            <button type="button" class="btn btn-danger btn-lg" id="btnGantiKupon" style="display: none">Ganti Kupon</button>
                                            <button type="button" class="btn btn-primary btn-lg" id="btnCekKupon">Cek Kupon</button>
                                        </div>
                                        </div>
                                    </div>    
                                </div>
                                <small id="msgKupon" class="form-text text-muted"></small>
                            </div>
                        </div>
                        <style>
                            .cc{
                                box-shadow: 0 5px 11px 0 rgba(0,0,0,0.01),0 4px 15px 0 rgba(0,0,0,0.09) !important;
                                /* border-radius: 5px; */
                            }
                            .ff{
                                width: 125px; object-fit: cover;
                                /*height: 45px;*/
                            }
                        </style>
                        <div class="pt-4">
                            <div class="row justify-content-between">
                                <div class="card col-3">
                                  <div class="row">
                                  <img class="card-img-top  pt-4" src="{{asset('bri-logo.png')}}" alt="Card image cap">
                                  </div>
                                  
                                </div>
                                <div class="card col-3">
                                <div class="row">
                                  <img class="card-img-top  pt-4" src="{{asset('bca-logo.png')}}" alt="Card image cap">
                                </div>
                                  
                                </div>
                                <div class="card col-3">
                                    <div class="row">
                                      <img class="card-img-top  pt-4" src="{{asset('mandiri-logo.png')}}" alt="Card image cap" style="">
                                    </div>
                                  
                                </div>
                            </div>
                        </div>
                        <!-- <div class="mt-1">
                            <div class="row justify-content-between">
                                <p class="policy-text">Your personal data will be use for your order, support your experience through this website & for other purpose described in our privacy policy</p>
                        <div class="agreement-checkbox">
                            <input type="checkbox" id="agreement" class="custom-checkbox">
                            <label for="agreement">I have read and agree to the website terms and conditions*</label>
                        </div>
                            </div>
                        </div> -->
                       <div class="row justify-content-start mt-4">

                        <!-- <p class="col-12">Captcha</p> -->
                        <div class="col-12" style="border: 1px solid rgba(0, 0, 0, 0.1); padding: 10px">
                            <div id="captcha"></div>
                        </div>

                       <div class="row justify-content-start mt-2 ">
                       <div class="form-group mt-2 col-12">
                           <input type="text" id="cpatchaTextBox" class="form-control col-12" aria-describedby="emailHelp" placeholder="Masukkan Captcha" id="cpatchaTextBox"/>
                        </div>
                       </div>
                    </div>
                    <div class="row">
                        <button type="submit" onclick="validateCaptcha()">Submit</button>
                    </div>
                 </div>
                </div> <!-- /.order-confirm-sheet -->
            </div>
        </div>
    </div>
           <div class="row d-flex justify-content-between">
                <div class="ml-3">
                    <button class="btn-bg" id="prev1" type="submit">Previous</button>
                </div>
                <div class="mr-3">
                    <button class="btn-bg " id="btnSelesai" type="submit">Selesai</button>
                </div>
            </div>
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



<style type="text/css">
    @import url('https://fonts.googleapis.com/icon?family=Material+Icons');

.tag-container {
  /*border: 2px solid #ccc;*/
  /*border-radius: 3px;*/
  /*background: #fff;*/
  display: flex;
  flex-wrap: wrap;
  align-content: flex-start;
  padding: 6px;
  /*overflow-x: scroll;*/
  border: 1px solid rgba(255, 87, 132, 0.3);
  border-radius: 10px;
}
.tag-container .tag {
    background-color: #ffd5dd;
    font-size: 10px;
    width: auto;
    text-align: center;
    position: relative;
    font-family: "Poppins",sans-serif;
    color: red;
    border-radius: 30px;
  height: 30px;
  margin: 5px;
  padding: 5px 6px;
  border-radius: 3px;
  background-color: #ffd5dd;
  display: flex;
  align-items: center;
  cursor: default;
}
.tag i {
  font-size: 16px;
  color: #666;
  margin-left: 5px;
}
.tag-container input {
  padding: 5px;
  font-size: 16px;
  border: 0;
  outline: none;
  font-family: 'Rubik';
  color: #333;
  flex: 1;
}
</style>
<script type="text/javascript">


</script>
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

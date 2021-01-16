@extends('guest.layout')

@section('css')
<meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{asset('Agile/assets/css/i-con.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{asset('Agile/assets/css/theme.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{asset('Agile/assets/css/style.css')}}" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@stop
@section('script')
<script src="{{asset('Rogan/rogan-c/html/vendor/jquery.2.2.3.min.js')}}"></script>
<script src="{{asset('custom-javascript.js')}}"></script>
<link rel="stylesheet" href="{{asset('custom-css.css')}}">
<script type="text/javascript" src="{{asset('datepicker/bootstrap-datepicker.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{asset('datepicker/bootstrap-datepicker.css')}}" >
<script>
    $(function() {
    $('.dates #usr1').datepicker({
      'format': 'yyyy-mm-dd',
      'autoclose': true
    });
  });
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $("#fuorm").on('submit', function(e){
      e.preventDefault();
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
          }
      });
      $.ajax({
          type: 'POST',
          url: '{{url("/konfirmasi-pembayaran")}}',
          data: new FormData(this),
          dataType: 'json',
          contentType: false,
          cache: false,
          processData: false,
          success: function(data){
            if (data=="fail"){
                var errormsg = 'Warning';
                var errorbody = 'Invoice ID anda tidak ada !!!'; 
                $('#alert-modal').modal('show');
                $('#modal-message').html(errormsg);
                $('#error-body').html(errorbody);
            }else if(data=="ok"){
                $('#ok-modal').modal({backdrop: 'static', keyboard: false});
            }
          }
      });
    })
  });
</script>
@stop

@section('content')

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

  <div class="modal fade" id="ok-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal-message">Sukses</h5>
          <a class="close" href="{{url('/konfirmasi-pembayaran')}}">
            <span aria-hidden="true">&times;</span>
          </a>
        </div>
        <div class="modal-body">
          <div class="alert alert-warning">
            "Berhasil melakukan konfirmasi pembayaran"
          </div>
        </div>
        <div class="modal-footer">
          <a href="{{url('/konfirmasi-pembayaran')}}" class="btn btn-light border-secondary">Oke</a>
        </div>
      </div>
    </div>
  </div>
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
    <p>Konfirmasi Pembayaran</p>
    <h2 class="pt-30 pb-15">Provide wide range of</h2>
    <p class="sub-heading">digital services</p>
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
            src="https://assets9.lottiefiles.com/packages/lf20_FOP8fR.json"  background="transparent"  speed="1"  style="width: 884px; height: 602px;" loop  autoplay >
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
<style type="text/css">
</style>
<div class="container">
  @if(session('sukses'))
  <div class="alert alert-success" >
  {{session('sukses')}}
  </div>
  @endif
  <form data-plugin="parsley" id="fuorm" action="{{url('/konfirmasi-pembayaran')}}" enctype="multipart/form-data" method="POST">
    @csrf
    <div class="card border-custom">
      <div class="card-header">
        <strong>Konfirmasi Pemabayaran</strong>
      </div>
      <div class="card-body">   
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">No. Invoice</label>
          <div class="col-sm-9">
            <input type="number" id="invoice" class="form-control" required placeholder="No. Invoice" name="invoice">    
            <small id="InvoiceMessage" class="danger-sm"></small>
          </div>
        </div>        

        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Nama Pengirim</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" required placeholder="Nama Pengirim" name="sender">    
          </div>
        </div>           
        <!-- <div class="form-group row dates">
          <label class="col-sm-3 col-form-label">Tanggal Pembayaran</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="usr1" name="deadline" placeholder="YYYY-MM-DD" autocomplete="off" >
            <small id="EmailMessage" class="danger-sm"></small>
          </div>
        </div> -->
        
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Bank Tujuan</label>
          <div class="col-sm-9">
            <select class="form-control" id="tujuanBank" name="idBank">
            </select>
          </div>
        </div>
        
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Pesan (Note)</label>
          <div class="col-sm-9">
            <textarea class="form-control" name="note"></textarea>
          </div>
        </div>
       <div class="form-group row">
        <label class="col-sm-3 col-form-label">Upload Bukti Bayar</label>
        <div class="col-sm-9">
          <div class="custom-file">
            <input type="file" class="custom-file-input-css" name="inpFile" id="inpFile" onchange="preview(event)" accept="image/x-png,image/jpg,image/jpeg">
            <div class="image-preview">
              <img src="{{asset('noimage.png')}}" class="" id="img" >
            </div>
            <span id="name_image"></span>
          </div>
        </div>
      </div>
        <div class="container pt-50">
          <div class="text-right">
          <button type="submit" class="btn btn-primary float-left btnKirim" style="width: 100px;">Kirim</button>
        </div>
        </div>
      </div>
    </div>
  </form>
  
</div>
@stop
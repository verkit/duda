@extends('guest.layout')
@section('title','Cek Status Order')
@section('css')
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="{{asset('Agile/assets/css/i-con.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('Agile/assets/css/theme.css')}}" type="text/css" />
@stop
@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="{{asset('Rogan/rogan-c/html/vendor/tabs/tabs.js')}}"></script>
    <script src="{{asset('Rogan/rogan-c/html/vendor/jquery.2.2.3.min.js')}}"></script>
    <script src="{{asset('custom/cek-status.js')}}"></script>
@stop
@section('content')
<div id="roller">
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
		<p>Cek Status Order</p>
		<h2 class="pt-30 pb-15">Provide wide range of</h2>
		<p class="sub-heading">digital services</p>
	</div>
</div> <!-- /.text-inner-banner-one -->

<!-- Element Style -->
<div class="rogan-hero-section rogan-hero-one pt-300 md-pt-200 md-pb-130 pos-r">
	<div class="shape-wrapper">
		<img src="{{asset('Rogan/rogan-b/html/images/shape/1.svg')}}" alt="" class="shape-one wow fadeInRight animated" data-wow-duration="2s">
		<div class="custom-svg-d wow fadeInRight animated">
		<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
		<lottie-player
		    src="https://assets9.lottiefiles.com/packages/lf20_MFXbtJ.json"  background="transparent"  speed="1"  style="width: 700px; height: 800px;"  loop  autoplay >
		</lottie-player>
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
			<div class="banner-heading wow fadeInDown animated text-custom">
				Great managment and strong security system.
			</div>
			
			<p class="banner-sub-title pb-45 md-pb-30 wow fadeInUp animated custom-subtext" data-wow-delay="0.9s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae sequi nihil aut molestiae quibusdam odio repellat veniam dicta.</p>
		
		</div> <!-- /.main-wrapper -->
	</div> <!-- /.container -->
</div>	


<!-- Checker -->
<!-- Modal -->
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
<div class="container col-md-10 mt-5" id="formInputan" style="">
	<div class="card">
		<h3 class="text-center mb-2 mt-5">
			*Informasi tentang order anda juga sudah kami kirimkan melalui e-mail yang anda isikan saat melakukan pemesanan
		</h3>
		<div class="container mt-4 ml-4 mr-4 pt-50">
			<div class="form-group input-custom">
			    <label for="inputID">Masukkan ID.Trx / No.Invoice</label>
			    <input class="form-control" id="inputID" name="id" placeholder="ex : 11302">
		    </div>
		    <div class="form-group input-custom">
			    <label for="inputUser">Masukkan link post atau username akun : </label>
			    <input class="form-control" id="inputUser" id="username" aria-describedby="emailHelp" placeholder="ex : https://instagram.com">
		    </div>
		    <div class="form-group input-custom align-content-center mb-5">
			    <button class="btn btn-success" id="cekNow">Cek Status Order</button>
		    </div>	
	    </div>

	</div>
</div>

<!-- Checker -->

<div id="tujuan">
	<div class="container custom-section pb-100 card-custom pt-50">
	<div class="page-container" id="page-container">
		<div class="padding">
		    <div class="d-flex align-items-center py-4">
		      <div>
		        <div class="d-flex align-items-center">
		        <span class="text-md mx-2">Agile Corp</span>
		        </div>
		      </div>
		      <div class="flex"></div>
		      <div class="text-right">
		      	<h3 class="mr-3" id="contohTarget">www.duda.co.id</h3>
		        <div class="text-md"></div>
		      </div>
		    </div>
		    <div class="row py-3">
		      <div class="col-md-4 py-2">
		        <div class="text-muted font-weight-bold">Billed From :</div>
		        <div>Surabaya</div>
		        <div>Jawa Timur</div>
		        <div>Contact (+62) 821 3700 3300</div>
		      </div>
		      <div class="col-md-4 py-2">
		        <div class="text-muted font-weight-bold">Billed to</div>
		        <div id="senderName">Arya S</div>
		        <div>aryas@gmail.com</div>
		        <div>0812345678</div>
		      </div>
		      <div class="col-md-4">
		        <div class="col-12 d-flex">
		        	<div class="col-7 p-2">
				        <div class="text-muted">Pembuatan Order :</div>
				    </div>
				    <div class="col-5 ml-auto p-2">
				        <div class="text-right">Website	</div>
			        </div>
		        </div>
		        <div class="col-12 d-flex">
		        	<div class="col-7 p-2">
				        <div class="text-muted">Order ID :</div>
				    </div>
				    <div class="col-5 ml-auto p-2">
				        <div class="text-right" id="noTrx">#D0D1</div>
			        </div>
		        </div>
		        <div class="col-12 d-flex">
		        	<div class="col-7 p-2">
				        <div class="text-muted">Tanggal Order :</div>
				    </div>
				    <div class="col-5 ml-auto p-2">
				        <div class="text-right">1 Mei 2020</div>
			        </div>
		        </div>
				<div class="col-12 d-flex">
		        	<div class="col-7 p-2">
				        <div class="text-muted">Batas Pembayaran :</div>
				    </div>
				    <div class="col-5 ml-auto p-2">
				        <div class="text-right" id="batasBayar">2 Mei 2020</div>
			        </div>
		        </div>
		        <div class="col-12 d-flex">
		        	<div class="col-7 p-2">
				        <div class="text-muted">
				        	COUNTDOWN Timer 24 jam
							"Menunggu Pembayaran"
				        </div>
				    </div>
		        </div>
				    

		        <div class="col-12">
		        	<div class="col-10">
				    	<div class="text-muted">
				        	**Perubahan Status Terakhir 1 Mei Pukul 12.00
				        </div>
				    </div>
		        </div>
		        
		      </div>
		    </div>
		    <table class="table table-theme table-rows v-middle mt-5">
		      <thead>
		      	<style>
		      		th{
		      			font-size: 14px;
		      		}
		      	</style>
		        <tr>
		          <th class="text-muted">Layanan</th>
		          <th class="text-muted">Deskripsi</th>
		          <th class="text-muted">Harga</th>
		          <th class="text-muted text-right">Total</th>
		        </tr>
		      </thead>
		      <tbody>
		        <tr>
		          <td>SEO Starter / Paket 1- Rp.100.000,~</td>
		          <td>Link/Url:www.duda.co.id</td>
		          <td>$500.00</td>
		          <td class="text-right">Rp.100.000,~</td>
		      </tbody>
		    </table>
		    <div class="row py-3">
		      <div class="col-md-8 py-2">
		        <div class="text-muted font-weight-bold">Info Pembayaran :</div>
		        <div class="row ml-0 mt-2"><img src="{{asset('bri-logo.png')}}" style="height: 30px;"></div>
		        <div class="row ml-0 mt-2"><img src="{{asset('bca-logo.png')}}" style="height: 30px;"></div>
		        <div class="row ml-0 mt-2"><img src="{{asset('mandiri-logo.png')}}" style="height: 30px;"></div>
		        <div class="mt-3">*Atas Nama:_</div>
				<div class="text-muted col-10">**Segera hubungi admin jika ada permasalahan terkait order anda melalui kontak yang tersedia (paling bawah atau footer)</div>
		      </div>
		      <div class="col-md-4 py-4">
		        <div class="row">
			        <div class="text-muted col-8">Sub - Total</div>
					<div class="col-3 mr-1">Rp.100.000,-</div>
				</div>
				<div class="row">
			        <div class="text-muted col-8  mt-3">Kode Bayar</div>
					<div class="col-3 mr-1  mt-3">123</div>
				</div>
				<div class="row">
			        <div class="text-muted col-8  mt-3">Diskon</div>
					<div class="col-3 mr-1  mt-3">Rp.50.000,-</div>
				</div>
				<div class="row font-weight-bold">
			        <div class="text-muted col-8  mt-3">Total</div>
					<div class="col-3 mr-1  mt-3">Rp.50.123,-</div>
				</div>
				<button class="btn btn-primary col-12 mt-5">
					Konfirmasi Pembayaran
				</button>
		      </div>
		    </div>  
		</div>
	</div>
	</div>	
</div>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<!-- IF EXISTS -->

<!-- IF EXISTS -->
<div class="pb-120"></div>
@stop




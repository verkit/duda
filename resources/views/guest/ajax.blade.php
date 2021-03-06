
		<div class="main-page-wrapper">


			<!--
			=============================================
				Our Portfolio
			==============================================
			-->
			<div class="project-details version-one pos-r pt-150 pb-130 md-pt-60 md-pb-70">
				<div class="shape-wrapper">
					<svg class="img-shape shape-one">
						<path fill-rule="evenodd"  fill="rgb(255, 223, 204)"
						 d="M6.000,12.000 C9.314,12.000 12.000,9.313 12.000,6.000 C12.000,2.686 9.314,-0.000 6.000,-0.000 C2.686,-0.000 -0.000,2.686 -0.000,6.000 C-0.000,9.313 2.686,12.000 6.000,12.000 Z"/>
					</svg>
					<svg class="img-shape shape-two">
						<path fill-rule="evenodd"  fill="rgb(212, 231, 255)"
						 d="M6.000,12.000 C9.314,12.000 12.000,9.314 12.000,6.000 C12.000,2.686 9.314,-0.000 6.000,-0.000 C2.686,-0.000 -0.000,2.686 -0.000,6.000 C-0.000,9.314 2.686,12.000 6.000,12.000 Z"/>
					</svg>
					<svg class="img-shape shape-three">
						<path fill-rule="evenodd"  fill="rgb(255, 198, 214)"
						 d="M12.000,24.000 C18.627,24.000 24.000,18.627 24.000,12.000 C24.000,5.373 18.627,-0.000 12.000,-0.000 C5.373,-0.000 -0.000,5.373 -0.000,12.000 C-0.000,18.627 5.373,24.000 12.000,24.000 Z"/>
					</svg>
					<svg class="img-shape shape-four">
						<path fill-rule="evenodd"  fill="rgb(171, 247, 242)"
						 d="M12.500,25.000 C19.404,25.000 25.000,19.403 25.000,12.500 C25.000,5.596 19.404,-0.000 12.500,-0.000 C5.596,-0.000 -0.000,5.596 -0.000,12.500 C-0.000,19.403 5.596,25.000 12.500,25.000 Z"/>
					</svg>
					<svg class="img-shape shape-five">
						<path fill-rule="evenodd"  opacity="0.835" fill="rgb(155, 238, 255)"
						 d="M8.000,16.000 C12.418,16.000 16.000,12.418 16.000,8.000 C16.000,3.582 12.418,-0.000 8.000,-0.000 C3.582,-0.000 -0.000,3.582 -0.000,8.000 C-0.000,12.418 3.582,16.000 8.000,16.000 Z"/>
					</svg>
				</div> <!-- /.shape-wrapper -->
				<div class="project-container">
					<div class="d-md-flex align-items-end justify-content-between">
						<div class="project-title-one sm-mb-20">
							<h2>{{$res->title}}</h2>
						</div> <!-- /.project-title-one -->
						<div class="info-text-list">
							<h6>Created At</h6>
							<p>{{$res->created_at->diffForHumans()}}</p>
						</div> <!-- /.info-text-list -->
						<ul class="social-icon-two sm-mt-40">
							<li><a href="#" style="background: #3b5998; color: #fff"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" style="background: #26a6d1; color: #fff"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#" style="background: #007ab9; color: #fff"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							<li><a href="#" style="background: #cb2027; color: #fff"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
						</ul> <!-- /.social-icon-two -->
					</div>
					<div class="img-box mt-85 mb-100 sm-mt-50 sm-mb-60"><img src="{{"storage/images/$res->cover"}}" alt=""></div>
					<div class="img-description">
						<div class="row align-items-center pb-120 sm-pb-70">
							<div class="col-md-9">
								<div class="description-text">
									{!! $res->content !!}
								</div> <!-- /.description-text -->
							</div> <!-- /.col- -->
						</div> <!-- /.row --><!-- /.row -->
					</div> <!-- /.img-description -->

					{{-- <div class="theme-pagination-two d-flex justify-content-between align-items-center mt-65 sm-mt-40">
						<a href="#" class="theme-pager prev">
							<span class="flaticon-back"></span>
							<i>Previous</i>
							<strong>Uber App Redesign.</strong>
						</a>
						<a href="#" class="theme-pager next">
							<span class="flaticon-next"></span>
							<i>Next</i>
							<strong>Rentloop Branding</strong>
						</a>
					</div> --}}
				</div> <!-- /.project-container -->
			</div> <!-- /.prpject-details -->

		</div> <!-- /.main-page-wrapper -->

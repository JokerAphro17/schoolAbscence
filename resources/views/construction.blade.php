@extends('layouts.master3')
@section('css')
		<!-- INTERNAL  JQUERY-COUNTDOWN CSS -->
		<link href="{{URL::asset('assets/plugins/jquery-countdown/jquery.countdown.css')}}" rel="stylesheet" type="text/css">
@endsection
@section('content')
			<!-- CONTAINER OPEN -->
			<div class="container">
				<div class="row">
					<div class="col-md-7 d-block mx-auto">
						<div class="card">
							<div class="card-body">
								<div class="row text-center mx-auto">
									<div class="col-lg-12 col-sm-12 align-items-center construction">
										<div class="card-body">
											<h1 class="display-3 mb-0 font-weight-semibold">Coming Soon</h1>
											<div id="launch_date"></div>
											<p>we apologize for your in-convenience....any quaries contact me </p>
											<h4><strong>Contact:</strong> Yoha@demo.com</h4>
											<div class="mt-5">
												<button class="btn btn-facebook" type="button">
													<span class="btn-inner-icon"><i class="fa fa-facebook-f"></i></span>
												</button>
												<button class="btn btn-google" type="button">
													<span class="btn-inner-icon"><i class="fa fa-google"></i></span>
												</button>
												<button class="btn btn-twitter" type="button">
													<span class="btn-inner-icon"><i class="fa fa-twitter"></i></span>
												</button>
												<button class="btn btn-pinterest" type="button">
													<span class="btn-inner-icon"><i class="fa fa-pinterest-p"></i></span>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- CONTAINER CLOSED -->
@endsection
@section('js')
		<!-- INTERNAL  JQUERY-COUNTDOWN JS -->
		<script src="{{URL::asset('assets/plugins/jquery-countdown/jquery.plugin.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/jquery-countdown/jquery.countdown.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/jquery-countdown/countdown.js')}}"></script>
@endsection
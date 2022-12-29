@extends('layouts.master4')
@section('css')
		<!-- INTERNAL SINGLE-PAGE CSS -->
		<link href="{{URL::asset('assets/plugins/single-page/css/main.css')}}" rel="stylesheet" type="text/css">
@endsection
@section('content')
			<!-- CONTAINER OPEN -->
			<div class="container-login100">
				<div class="row">
					<div class="col col-login mx-auto">
						<form class="card" method="post">
							<div class="card-body p-6">
								<h3 class="text-center card-title">Forgot password</h3>
								<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
									<input class="input100" type="text" name="email" placeholder="Email">
									<span class="focus-input100"></span>
									<span class="symbol-input100">
										<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
											<path d="M0 0h24v24H0V0z" fill="none" />
											<path d="M20 8l-8 5-8-5v10h16zm0-2H4l8 4.99z" opacity=".3" />
											<path d="M4 20h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2zM20 6l-8 4.99L4 6h16zM4 8l8 5 8-5v10H4V8z" /></svg>
									</span>
								</div>
								<div class="form-footer">
									<a href="#" class="btn btn-primary btn-block">Send</a>
								</div>
								<div class="text-center text-muted mt-3 ">
									Forget it, <a href="{{url('/' . $page='login')}}">send me back</a> to the sign in screen.
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- CONTAINER CLOSED -->
@endsection
@section('js')
		<!-- INPUT MASK JS-->
		<script src="{{URL::asset('assets/plugins/input-mask/jquery.mask.min.js')}}"></script>
@endsection
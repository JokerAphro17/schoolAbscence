@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
			<!-- PAGE-HEADER -->
			<div class="page-header">
				<div>
					<h1 class="page-title">Counters</h1>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Components</a></li>
						<li class="breadcrumb-item active" aria-current="page">Counters</li>
					</ol>
				</div>
				<div class="ml-auto pageheader-btn">
					<a href="#" class="btn btn-primary btn-icon text-white mr-2">
						<span>
							<i class="fe fe-shopping-cart"></i>
						</span> Add Order
					</a>
					<a href="#" class="btn btn-secondary btn-icon text-white">
						<span>
							<i class="fe fe-plus"></i>
						</span> Add User
					</a>
				</div>
			</div>
			<!-- PAGE-HEADER END -->
@endsection
@section('content')
			<!-- ROW-1 OPEN -->
			<div class="row row-cards">
				<div class="col-md-12 col-xl-4">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">
								Time Counting From 0
							</h3>
						</div>
						<div class="card-body text-center">
							<div class="example">
								<span id="timer-countup" class="h3 text-orange"></span>
							</div>
						</div>
					</div>
				</div><!-- COL-END -->
				<div class="col-md-12 col-xl-4">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">
								Time Counting From 60 to 20
							</h3>
						</div>
						<div class="card-body text-center">
							<div class="example">
								<span id="timer-countinbetween" class="h3 text-secondary"></span>
							</div>
						</div>
					</div>
				</div><!-- COL-END -->
				<div class="col-md-12 col-xl-4">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">
								Time 1 minute counter
							</h3>
						</div>
						<div class="card-body text-center">
							<div class="example">
								<span id="timer-countercallback" class="h3 text-warning"></span>
							</div>
						</div>
					</div>
				</div><!-- COL-END -->
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">
								Time Counting days Limit
							</h3>
						</div>
						<div class="card-body text-center">
							<div class="example">
								<span id="timer-outputpattern" class="h3 text-primary"></span>
							</div>
						</div>
					</div>
				</div><!-- COL-END -->
				<div class="col-md-12 col-lg-4 col-xl-4">
					<div class="card statistics-info">
						<div class="card-header">
							<h3 class="card-title">
								Numbers counter
							</h3>
						</div>
						<div class="card-body text-center">
							<div class="counter-icon bg-orange text-center">
								<i class="fe fe-users text-white"></i>
							</div>
							<h5>Employess</h5>
							<h2 class="counter number-font1">2569</h2>
						</div>
					</div>
				</div><!-- COL-END -->
				<div class="col-md-12 col-lg-4 col-xl-4">
					<div class="card statistics-info">
						<div class="card-header">
							<h3 class="card-title">
								Numbers counter
							</h3>
						</div>
						<div class="card-body text-center">
							<div class="counter-icon bg-secondary text-center">
								<i class="fe fe-dollar-sign text-white"></i>
							</div>
							<h5>Profit</h5>
							<h2 class="counter number-font1"> 2,56989.32</h2>
						</div>
					</div>
				</div><!-- COL-END -->
				<div class="col-md-12 col-lg-4 col-xl-4">
					<div class="card statistics-info">
						<div class="card-header">
							<h3 class="card-title">
								Numbers counter
							</h3>
						</div>
						<div class="card-body text-center">
							<div class="counter-icon bg-secondary1 text-center">
								<i class="fe fe-alert-triangle text-white"></i>
							</div>
							<h5>Errors</h5>
							<h2 class="counter number-font1">0.8998</h2>
						</div>
					</div>
				</div><!-- COL-END -->
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">
								Day Counter
							</h3>
						</div>
						<div class="card-body text-center">
							<div class="count-down row">
								<div class="col-6 col-sm-2 col-md-12 col-xl-2 countdown">
									<span class="days number-font1">35</span>
									<span class="text-dark">Days</span>
								</div>
								<div class="col-6 col-sm-2 col-md-12 col-xl-2 countdown">
									<span class="hours number-font1">17</span>
									<span class="text-dark">Hours</span>
								</div>

								<div class="col-6 col-sm-2 col-md-12 col-xl-2 countdown">
									<span class="minutes number-font1">50</span>
									<span class="text-dark">Minutes</span>
								</div>
								<div class="col-6 col-sm-2 col-md-12 col-xl-2 countdown">
									<span class="seconds number-font1">39</span>
									<span class="text-dark">Seconds</span>
								</div>
							</div>
						</div>
					</div>
				</div><!-- COL-END -->
			</div>
			<!-- ROW-1 CLOSED CLOSED -->
@endsection
@section('js')

		<!-- INTERNAL TIME COUNTER JS-->
		<script src="{{URL::asset('assets/plugins/counters/jquery.missofis-countdown.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/counters/counter.js')}}"></script>

		<!-- INTERNAL COUNT-DOWN JS-->
		<script src="{{URL::asset('assets/plugins/counters/count-down.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/countdown/moment.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/countdown/moment-timezone.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/countdown/moment-timezone-with-data.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/countdown/countdowntime.js')}}"></script>

		<!-- INTERNAL COUNTERS JS-->
		<script src="{{URL::asset('assets/plugins/counters/counterup.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/counters/waypoints.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/counters/counters-1.js')}}"></script>
@endsection
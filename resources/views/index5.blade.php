@extends('layouts.master')
@section('page-header')
			<!-- PAGE-HEADER -->
			<div class="page-header">
				<div>
					<h1 class="page-title">Analytics Dashboard</h1>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Analytics Dashboard</li>
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
			<!-- ROW-1 -->
			<div class="row">
				<div class="col-md-12">
					<div class="card  banner">
						<div class="card-body">
							<div class="row">
								<div class="col-xl-3 col-lg-2 text-center">
									<img src="{{URL::asset('assets/images/pngs/dash5.png')}}" alt="img" class="w-95">
								</div>
								<div class="col-xl-9 col-lg-10 pl-lg-0">
									<div class="row">
										<div class="col-xl-7 col-lg-6">
											<div class="text-left text-white mt-xl-4">
												<h3 class="font-weight-semibold">Congratulations Steven</h3>
												<h4 class="font-weight-normal">You are Reached your targeted milestone</h4>
												<p class="mb-lg-0 text-white-50">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
											</div>
										</div>
										<div class="col-xl-5 col-lg-6 text-lg-center mt-xl-4">
											<h5 class="font-weight-semibold mb-1 text-white">Total Revenue Today</h5>
											<h2 class="display-2 mb-3 number-font text-white">10M</h2>
											<div class="btn-list mb-xl-0">
												<a href="#" class="btn btn-dark mb-xl-0">Check Details</a>
												<a href="#" class="btn btn-white mb-xl-0" id="skip">No, Thanks</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- ROW-1 End-->

			<!-- Row1 -->
			<div class="row">
				<div class="col-xl-3 col-sm-6">
					<div class="card">
						<div class="card-body text-center">
							<div class="d-flex mb-0">
								<span class="brround align-self-center avatar-lg br-3 cover-image bg-orange">
									<i class="fe fe-refresh-ccw"></i>
								</span>
								<div class="svg-icons text-right ml-auto">
									<p class="text-muted mb-2">Total Sessions</p>
									<h2 class="mb-0 number-font">7,896</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-sm-6">
					<div class="card overflow-hidden">
						<div class="card-body text-center">
							<div class="d-flex mb-0">
								<span class="brround align-self-center avatar-lg br-3 cover-image bg-secondary">
									<i class="fe fe-bar-chart text-white"></i>
								</span>
								<div class="svg-icons text-right ml-auto">
									<p class="text-muted mb-2">Total Bounce Rate</p>
									<h2 class="mb-0 number-font">56%</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-sm-6">
					<div class="card overflow-hidden">
						<div class="card-body text-center">
							<div class="d-flex mb-0">
								<span class="brround align-self-center avatar-lg br-3 cover-image bg-secondary1">
									<i class="fe fe-dollar-sign text-white"></i>
								</span>
								<div class="svg-icons text-right ml-auto">
									<p class="text-muted mb-2">Total Revenues</p>
									<h2 class="mb-0 number-font">$14,675</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-sm-6">
					<div class="card overflow-hidden">
						<div class="card-body text-center">
							<div class="d-flex mb-0">
								<span class="brround align-self-center avatar-lg br-3 cover-image bg-warning">
									<i class="fe fe-eye text-white"></i>
								</span>
								<div class="svg-icons text-right ml-auto">
									<p class="text-muted mb-2">Total Pageviews</p>
									<h2 class="mb-0 number-font">3,768</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Row1 CLOSED -->

			<!-- Row2 -->
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-8">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Wesite Aduience Overview</h3>
						</div>
						<div class="card-body">
							<div id="echart" class="chartwidget "></div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-4">
					<div class="card overflow-hidden">
						<div class="card-header">
							<h3 class="card-title">Sessions By Channel</h3>
						</div>
						<div class="card-body">
							<div class="mb-5">
								<p class="mb-2">Organic Search<span class="float-right"><b>12,897</b><span class="text-muted ml-1">(80%)</span></span></p>
								<div class="progress h-2">
									<div class="progress-bar bg-primary w-80 " role="progressbar"></div>
								</div>
							</div>
							<div class="mb-5">
								<p class="mb-2">Email<span class="float-right"><b>6,321</b><span class="text-muted ml-1">(60%)</span></span></p>
								<div class="progress h-2">
									<div class="progress-bar bg-secondary w-60 " role="progressbar"></div>
								</div>
							</div>
							<div class="mb-5">
								<p class="mb-2">Referral<span class="float-right"><b>9,760</b><span class="text-muted ml-1">(70%)</span></span></p>
								<div class="progress h-2">
									<div class="progress-bar bg-secondary1 w-70 " role="progressbar"></div>
								</div>
							</div>
							<div class="mb-5">
								<p class="mb-2">Social<span class="float-right"><b>1,768</b><span class="text-muted ml-1">(50%)</span></span></p>
								<div class="progress h-2">
									<div class="progress-bar bg-danger w-50 " role="progressbar"></div>
								</div>
							</div>
							<div class="mb-0">
								<p class="mb-2">Other<span class="float-right"><b>6,187</b><span class="text-muted ml-1">(40%)</span></span></p>
								<div class="progress h-2">
									<div class="progress-bar bg-warning w-40 " role="progressbar"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Row2 CLOSED -->

			<!-- ROW-3 OPEN -->
			<div class="row">
				<div class="col-lg-4 col-sm-12 col-xl-4">
					<div class="card ">
						<div class="card-header">
							<h3 class="card-title">Traffic Source</h3>
						</div>
						<div class="card-body">
							<div class="row text-center mb-6">
								<div class="col dash-1">
									<p class="mb-0"><span class="dot-label bg-orange mr-2"></span>Organic</p>
									<h2 class="mb-0 number-font1">50<span class="fs-16 ml-1">%</span></h2>
								</div>
								<div class="col dash-1">
									<p class="mb-0"><span class="dot-label bg-secondary mr-2"></span>Direct</p>
									<h2 class="mb-0 number-font1">30<span class="fs-16 ml-1">%</span></h2>
								</div>
								<div class="col">
									<p class="mb-0"><span class="dot-label bg-secondary1 mr-2"></span>Campagin</p>
									<h2 class="mb-0 number-font1">20<span class="fs-16 ml-1">%</span></h2>
								</div>
							</div>
							<div class="">
								<canvas id="canvasDoughnut" class="h-230"></canvas>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-12 col-xl-4">
					<div class="card overflow-hidden">
						<div class="card-header">
							<h3 class="card-title">Sessions By Devices</h3>
						</div>
						<div class="card-body">
							<div class="mb-5">
								<div class="d-flex">
									<span class="avatar br-3 avatar bg-orange brround mr-4">
										<i class="fe fe-airplay"></i>
									</span>
									<div class="w-90">
										<p class="mb-1">Desktop<span class="float-right"><b>51,234</b><span class="text-muted ml-1">(80%)</span></span></p>
										<div class="progress h-1">
											<div class="progress-bar bg-orange w-80 " role="progressbar"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="mb-5">
								<div class="d-flex">
									<span class="avatar br-3 avatar bg-primary brround mr-4">
										<i class="fe fe-tablet"></i>
									</span>
									<div class="w-90">
										<p class="mb-1">Tablet<span class="float-right"><b>12,786</b><span class="text-muted ml-1">(50%)</span></span></p>
										<div class="progress h-1">
											<div class="progress-bar bg-primary w-50 " role="progressbar"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="mb-0">
								<div class="d-flex">
									<span class="avatar br-3 avatar bg-warning brround mr-4">
										<i class="fe fe-smartphone"></i>
									</span>
									<div class="w-90">
										<p class="mb-1">Mobile<span class="float-right"><b>32,167</b><span class="text-muted ml-1">(60%)</span></span></p>
										<div class="progress h-1">
											<div class="progress-bar bg-warning w-60 " role="progressbar"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="row">
							<div class="col-md-6 border-right">
								<div class="card-body text-center">
									<h6 class="mb-0">Total Sales</h6>
									<h2 class="mb-1 mt-2 number-font"><span class="counter">12,456</span></h2>
									<p class="mb-0 text-muted">Analytics for Last month</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card-body text-center">
									<h6 class="mb-0">Time on Site</h6>
									<h2 class="mb-1 mt-2 number-font"><span class="counter">35m:2s</span></h2>
									<p class="mb-0 text-muted">Analytics for Last month</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-12 col-xl-4">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Browser Usages</h3>
						</div>
						<div class="card-body p-0">
							<div class="list-group list-lg-group list-group-flush">
								<div class="list-group-item list-group-item-action border-left-0 border-right-0 d-flex align-items-center item  border-bottom">
									<div class="d-flex">
										<img src="{{URL::asset('assets/images/svgs/chrome.svg')}}" alt="img" class="h-5 w-5 mr-3">
										<div class="">
											<h6 class="mb-0 text-dark font-weight-semibold">Chrome</h6>
											<span class="sub-text">Mozilla Foundation, Inc.</span>
										</div>
									</div>
									<div class="ml-auto my-auto">
										<div class="d-flex">
											<span class="mr-4 my-auto text-dark font-weight-semibold">35,502</span>
											<span class="text-success mt-1"><i class="fe fe-arrow-up"></i>12.75%</span>
										</div>
									</div>
								</div>
								<div class="list-group-item list-group-item-action border-left-0 border-right-0 d-flex align-items-center item  border-bottom">
									<div class="d-flex">
										<img src="{{URL::asset('assets/images/svgs/opera.svg')}}" alt="img" class="h-5 w-5 mr-3">
										<div class="">
											<h6 class="mb-0 text-dark font-weight-semibold">Opera</h6>
											<span class="sub-text">Mozilla Foundation, Inc.</span>
										</div>
									</div>
									<div class="ml-auto my-auto">
										<div class="d-flex">
											<span class="mr-4 my-auto text-dark font-weight-semibold">12,563</span>
											<span class="text-danger mt-1"><i class="fe fe-arrow-down"></i>15.12%</span>
										</div>
									</div>
								</div>
								<div class="list-group-item list-group-item-action border-left-0 border-right-0 d-flex align-items-center item  border-bottom">
									<div class="d-flex">
										<img src="{{URL::asset('assets/images/svgs/edge.svg')}}" alt="img" class="h-5 w-5 mr-3">
										<div class="">
											<h6 class="mb-0 text-dark font-weight-semibold">Edge</h6>
											<span class="sub-text">Mozilla Foundation, Inc.</span>
										</div>
									</div>
									<div class="ml-auto my-auto">
										<div class="d-flex">
											<span class="mr-4 mt-1 text-dark font-weight-semibold">25,364</span>
											<span class="text-success mt-1"><i class="fe fe-arrow-up"></i>24.37%</span>
										</div>
									</div>
								</div>
								<div class="list-group-item list-group-item-action border-left-0 border-right-0 d-flex align-items-center item  border-bottom">
									<div class="d-flex">
										<img src="{{URL::asset('assets/images/svgs/firefox.svg')}}" alt="img" class="h-5 w-5 mr-3">
										<div class="">
											<h6 class="mb-0 text-dark font-weight-semibold">Firefox</h6>
											<span class="sub-text">Mozilla Foundation, Inc.</span>
										</div>
									</div>
									<div class="ml-auto my-auto">
										<div class="d-flex">
											<span class="mr-4 mt-1 text-dark font-weight-semibold">14,635</span>
											<span class="text-success mt-1"><i class="fe fe-arrow-up"></i>15,63%</span>
										</div>
									</div>
								</div>
								<div class="list-group-item list-group-item-action border-left-0 border-right-0 d-flex align-items-center item border-bottom">
									<div class="d-flex">
										<img src="{{URL::asset('assets/images/svgs/uc-browser.svg')}}" alt="img" class="h-5 w-5 mr-3">
										<div class="">
											<h6 class="mb-0 text-dark font-weight-semibold">Ucbrowser</h6>
											<span class="sub-text">Mozilla Foundation, Inc.</span>
										</div>
									</div>
									<div class="ml-auto my-auto">
										<div class="d-flex">
											<span class="mr-4 mt-1 text-dark font-weight-semibold">15,453</span>
											<span class="text-danger mt-1"><i class="fe fe-arrow-down"></i>23.70%</span>
										</div>
									</div>
								</div>
								<div class="list-group-item list-group-item-action border-left-0 border-right-0 d-flex align-items-center item br-bl-5 br-br-5">
									<div class="d-flex">
										<img src="{{URL::asset('assets/images/svgs/safari.svg')}}" alt="img" class="h-6 w-6 mr-3">
										<div class="">
											<h6 class="mb-0 text-dark font-weight-semibold">Safari</h6>
											<span class="sub-text">Mozilla Foundation, Inc.</span>
										</div>
									</div>
									<div class="ml-auto my-auto">
										<div class="d-flex">
											<span class="mr-4 mt-1 text-dark font-weight-semibold">35,657</span>
											<span class="text-danger mt-1"><i class="fe fe-arrow-down"></i>12.54%</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- ROW-3 CLOSED -->

			<!-- ROW-4 OPEN -->
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<div class="card">
						<div class="card-header ">
							<h3 class="card-title ">Google Analytics traffic Channels & Goals</h3>
						</div>
						<div class="card-body">
							<div class="table-responsive mb-0">
								<table class="table table-bordered text-nowrap mb-0">
									<thead>
										<tr>
											<th>Channel &amp; Goals</th>
											<th>Sessions</th>
											<th>Bounce Rate</th>
											<th>Traffic</th>
											<th>Change</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Organic Search</td>
											<td>123,879</td>
											<td>45.9%</td>
											<td>7.5%</td>
											<td><span><i class="fa fa-arrow-up text-success mr-1"></i>56%</span></td>
										</tr>
										<tr>
											<td>Direct</td>
											<td>45,789</td>
											<td>32.1%</td>
											<td>3.5%</td>
											<td><span><i class="fa fa-arrow-up text-success mr-1"></i>12%</span></td>
										</tr>
										<tr>
											<td>Email</td>
											<td>67,892</td>
											<td>26.3%</td>
											<td>8.1%</td>
											<td><span><i class="fa fa-arrow-down text-danger mr-1"></i>33%</span></td>
										</tr>
										<tr>
											<td>Paid Search</td>
											<td>628,567</td>
											<td>9.3%</td>
											<td>6.0%</td>
											<td><span><i class="fa fa-arrow-up text-success mr-1"></i>45%</span></td>
										</tr>
										<tr>
											<td>Referral</td>
											<td>123,879</td>
											<td>78.6%</td>
											<td>6.8%</td>
											<td><span><i class="fa fa-arrow-down text-danger mr-1"></i>76%</span></td>
										</tr>
										<tr>
											<td>Call In</td>
											<td>89,298</td>
											<td>49.2%</td>
											<td>1.5%</td>
											<td><span><i class="fa fa-arrow-up text-success mr-1"></i>29%</span></td>
										</tr>
										<tr>
											<td>Contact Us</td>
											<td>397,268</td>
											<td>85.4%</td>
											<td>8.3%</td>
											<td><span><i class="fa fa-arrow-down text-danger mr-1"></i>12%</span></td>
										</tr>
										<tr>
											<td>Proposal</td>
											<td>924,179</td>
											<td>48.2%</td>
											<td>4.2%</td>
											<td><span><i class="fa fa-arrow-up text-success mr-1"></i>56%</span></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div><!-- COL END -->
			</div>
			<!-- ROW-4 CLOSED -->
@endsection
@section('js')

		<!-- INTERNAL CHARTJS CHART JS -->
		<script src="{{URL::asset('assets/plugins/chart/Chart.bundle.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/chart/utils.js')}}"></script>
		<!-- INTERNAL  ECHART JS-->
		<script src="{{URL::asset('assets/plugins/echarts/echarts.js')}}"></script>
		<!-- INTERNAL INDEX-SCRIPTS -->
		<script src="{{URL::asset('assets/js/index5.js')}}"></script>
@endsection
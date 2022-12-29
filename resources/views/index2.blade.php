@extends('layouts.master')
@section('page-header')
			<!-- PAGE-HEADER -->
			<div class="page-header">
				<div>
					<h1 class="page-title">Marketing Dashboard</h1>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Marketing Dashboard</li>
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
									<img src="{{URL::asset('assets/images/pngs/dash2.png')}}" alt="img" class="w-95">
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
											<h5 class="font-weight-semibold mb-1 text-white">Clicks & Conversions Today</h5>
											<h2 class="display-2 mb-3 number-font text-white">90%</h2>
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

			<!-- ROW-1 OPEN -->
			<div class="row row-cards">
				<div class="col-xl-3 col-sm-6">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col">
									<h6 class="mb-2">Clicks</h6>
									<h2 class="mb-0 number-font">67,543</h2>
								</div>
								<div class="col">
									<span class="sparkline_bar1 text-right float-right"></span>
								</div>
							</div>
						</div>
						<div class="card-footer">
							<div class="float-left">
								<p class="mb-0"><span class=""><i class="fa fa-arrow-circle-o-down ml-1 text-muted"></i> 4%</span> last month</p>
							</div>
							<div class="float-right">
								<i class="fe fe-target fs-16"></i>
							</div>
						</div>
					</div>
				</div><!-- COL END -->
				<div class="col-xl-3 col-sm-6">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col">
									<h6 class="mb-2">Impressions</h6>
									<h2 class="mb-0  number-font">83,267</h2>
								</div>
								<div class="col">
									<span class="sparkline_bar2 text-right float-right"></span>
								</div>
							</div>
						</div>
						<div class="card-footer">
							<div class="float-left">
								<p class="mb-0"><span class=""><i class="fa fa-arrow-circle-o-down ml-1 text-muted"></i> 4%</span> last month</p>
							</div>
							<div class="float-right">
								<i class="fe fe-crosshair fs-16"></i>
							</div>
						</div>
					</div>
				</div><!-- COL END -->
				<div class="col-xl-3 col-sm-6">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col">
									<h6 class="mb-2">Audience</h6>
									<h2 class="mb-0 number-font">78,654</h2>
								</div>
								<div class="col">
									<span class="sparkline_bar3 text-right float-right"></span>
								</div>
							</div>
						</div>
						<div class="card-footer">
							<div class="float-left">
								<p class="mb-0"><span class=""><i class="fa fa-arrow-circle-o-down ml-1 text-muted"></i> 4%</span> last month</p>
							</div>
							<div class="float-right">
								<i class="fe fe-users fs-16"></i>
							</div>
						</div>
					</div>
				</div><!-- COL END -->
				<div class="col-xl-3 col-sm-6">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col">
									<h6 class="mb-2">Conversions</h6>
									<h2 class="mb-0 number-font">7.6%</h2>
								</div>
								<div class="col">
									<span class="sparkline_bar4 text-right float-right"></span>
								</div>
							</div>
						</div>
						<div class="card-footer">
							<div class="float-left">
								<p class="mb-0"><span class=""><i class="fa fa-arrow-circle-o-down ml-1 text-muted"></i> 4%</span> last month</p>
							</div>
							<div class="float-right">
								<i class="fe fe-refresh-cw fs-16"></i>
							</div>
						</div>
					</div>
				</div><!-- COL END -->
			</div>
			<!-- ROW-1 CLOSED -->

			<!-- ROW-2 OPEN -->
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
					<div class="card overflow-hidden">
						<div class="card-body">
							<h3 class="card-title">Lead Break Down(This month)</h3>
							<div class="row text-center mb-6">
								<div class="col dash-1">
									<p class="mb-1"><span class="dot-label bg-pink mr-2"></span>Trails</p>
									<h3 class="mb-0 number-font1 font-weight-semibold">17.89<span class="fs-16 ml-1">%</span></h3>
								</div>
								<div class="col dash-1">
									<p class="mb-1"><span class="dot-label bg-primary mr-2"></span>Non Trails</p>
									<h3 class="mb-0 number-font1 font-weight-semibold">48.65<span class="fs-16 ml-1">%</span></h3>
								</div>
							</div>
							<div class="chart-wrapper">
								<canvas id="pieChart" class=""></canvas>
							</div>
						</div>
					</div>
				</div><!-- COL END -->
				<div class="col-lg-8 col-md-12 col-sm-12 col-xl-8">
					<div class="card overflow-hidden">
						<div class="card-header">
							<h3 class="card-title">Bounce Rate by Week </h3>
						</div>
						<div class="card-body">
							<div class="flot-wrapper">
								<div class="bounce-widget">
									<p class="mb-1">Bounce Rate</p>
									<h2 class="mb-1  number-font fs-30">55%</h2>
									<p class="text-muted  mb-0"><span class="text-muted fs-13 mr-2">(-0.9%)</span> than Last week</p>
								</div>
								<div class="h-300" id="flotChart08"></div>
							</div>
						</div>
					</div>
				</div><!-- COL END -->
			</div>
			<!-- ROW-2 CLOSED -->

			<!-- ROW-3 OPEN -->
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xl-4">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col">
									<h6 class="">New Sessions(Avg)</h6>
									<h3 class="mb-2 number-font">67.96%</h3>
									<p class="text-muted">
										<span class="text-muted"><i class="fa fa-chevron-circle-up text-muted ml-1"></i> 3%</span>
										last month
									</p>
									<div class="progress h-2">
										<div class="progress-bar bg-orange w-50" role="progressbar"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xl-4">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col">
									<h6 class="">Time On site(Avg)</h6>
									<h3 class="mb-2 number-font">5m:45s</h3>
									<p class="text-muted">
										<span class="text-muted"><i class="fa fa-chevron-circle-down text-muted ml-1"></i> 0.15%</span>
										last month
									</p>
									<div class="progress h-2">
										<div class="progress-bar bg-secondary w-50" role="progressbar"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xl-4">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col">
									<h6 class="">Page Views(Avg)</h6>
									<h3 class="mb-2 number-font">8.14</h3>
									<p class="text-muted">
										<span class="text-muted"><i class="fa fa-chevron-circle-down text-muted ml-1"></i> 0.15%</span>
										last month
									</p>
									<div class="progress h-2">
										<div class="progress-bar bg-secondary1 w-50" role="progressbar"></div>
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
				<div class="col-lg-8 col-sm-12 col-xl-8">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Countrywise Traffics</h3>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered table-hover  mb-0 text-nowrap">
									<thead>
										<tr>
											<th>Country</th>
											<th>Sessions</th>
											<th>Bounce Rate</th>
											<th>Time On site(Avg)</th>
											<th>Status</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><img src="{{URL::asset('assets/images/flags/us.svg')}}" class="w-5 h-5 mr-2" alt="">United State</td>
											<td>13,786</td>
											<td>56.8%</td>
											<td>2m:56s</td>
											<td>
												<div class="progress h-1 mt-2">
													<div class="progress-bar bg-primary w-50" role="progressbar"></div>
												</div>
											</td>
										</tr>
										<tr>
											<td><img src="{{URL::asset('assets/images/flags/in.svg')}}" class="w-5 h-5 mr-2" alt="">India</td>
											<td>16,876</td>
											<td>34.5%</td>
											<td>1m:43s</td>
											<td>
												<div class="progress h-1 mt-2">
													<div class="progress-bar bg-orange  w-20" role="progressbar"></div>
												</div>
											</td>
										</tr>
										<tr>
											<td><img src="{{URL::asset('assets/images/flags/ru.svg')}}" class="w-5 h-5 mr-2" alt="">Russia</td>
											<td>45,863</td>
											<td>93.76%</td>
											<td>8m:16s</td>
											<td>
												<div class="progress h-1 mt-2">
													<div class="progress-bar bg-secondary1 w-60" role="progressbar"></div>
												</div>
											</td>
										</tr>
										<tr>
											<td><img src="{{URL::asset('assets/images/flags/ca.svg')}}" class="w-5 h-5 mr-2" alt="">Canada</td>
											<td>37,917</td>
											<td>46.76%</td>
											<td>5m:76s</td>
											<td>
												<div class="progress h-1 mt-2">
													<div class="progress-bar bg-secondary w-40" role="progressbar"></div>
												</div>
											</td>
										</tr>
										<tr>
											<td><img src="{{URL::asset('assets/images/flags/ge.svg')}}" class="w-5 h-5 mr-2" alt="">Germany</td>
											<td>67,967</td>
											<td>34.876%</td>
											<td>5m:34s</td>
											<td>
												<div class="progress h-1 mt-2">
													<div class="progress-bar bg-warning w-30" role="progressbar"></div>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div><!-- COL END -->
				<div class="col-lg-4 col-md-12 col-xl-4">
					<div class="card overflow-hidden">
						<div class="card-header">
							<h3 class="card-title">Traffic by Site</h3>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-6">
									<div class="card shadow-none">
										<div class="card-body p-4">
											<div class="text-center">
												<i class="bx bxl-facebook fs-40 text-primary"></i>
												<h4 class="mt-3 mb-0 number-font fs-20">8,209</h4>
												<p class="text-muted mb-0">FaceBook</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-6">
									<div class="card shadow-none">
										<div class="card-body p-4">
											<div class="text-center">
												<i class="bx bxl-google-plus fs-40 text-danger"></i>
												<h4 class="mt-3 mb-0 number-font fs-20">7,210</h4>
												<p class="text-muted mb-0">Google</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-6">
									<div class="card shadow-none mb-lg-0">
										<div class="card-body p-4">
											<div class="text-center">
												<i class="bx bxl-youtube fs-40 text-orange"></i>
												<h4 class="mt-3 mb-0 number-font fs-20">6,234</h4>
												<p class="text-muted mb-0">Youtube</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-6">
									<div class="card shadow-none mb-0">
										<div class="card-body p-4">
											<div class="text-center">
												<i class="bx bxl-twitter fs-40 text-info"></i>
												<h4 class="mt-3 mb-0 number-font fs-20">4,567</h4>
												<p class="text-muted mb-0">Twitter</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- ROW-4 CLOSED -->

			<!-- ROW-4 OPEN -->
			<div class="row">
				<div class="col-lg-4 col-md-12 col-sm-12 col-xl-4">
					<div class="card">
						<div class="card-body">
							<h3 class="card-title">Followers by Gender</h3>
							<p class="text-muted mb-1">Total Followers</p>
							<h3 class="font-weight-semibold number-font mb-3">69,453</h3>
							<div class="progress grouped h-2">
								<div class="progress-bar w-25 bg-primary " role="progressbar"></div>
								<div class="progress-bar w-30 bg-danger" role="progressbar"></div>
							</div>
							<div class="row mt-3">
								<div class="col text-left">
									<p class=" number-font1 mb-0"><span class="dot-label bg-primary"></span>Males</p>
									<h5 class="mt-2 font-weight-semibold mb-0 number-font1">4,678</h5>
								</div>
								<div class="col text-left">
									<p class=" number-font1 mb-0"><span class="dot-label bg-danger"></span>Females</p>
									<h5 class="mt-2 font-weight-semibold mb-0 number-font1">2,784</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-8 col-md-12 col-sm-12 col-xl-8">
					<div class="card">
						<div class="row">
							<div class="col-lg-7 border-right">
								<div class="card-body">
									<h3 class="card-title">Live Interactions</h3>
									<div class="d-flex">
										<p class="data-attributes mb-0 mr-4">
											<span data-peity='{ "fill": ["#447cec", "#e3e8f7"],   "innerRadius": 20, "radius": 24 }'>5/7</span>
										</p>
										<div>
											<p class="text-muted mb-1">Total Followers</p>
											<h3 class="font-weight-semibold number-font mb-2">69,453</h3>
										</div>
									</div>
									<div class="row mt-3 pt-3">
										<div class="col text-left">
											<p class=" mb-0">PageViews</p>
											<h5 class="mt-2 font-weight-semibold mb-0 number-font1">6,432</h5>
										</div>
										<div class="col text-left">
											<p class="  mb-0">VideoViews</p>
											<h5 class="mt-2 font-weight-semibold mb-0 number-font1">1,543</h5>
										</div>
										<div class="col text-left">
											<p class=" mb-0">E-mail Views</p>
											<h5 class="mt-2 font-weight-semibold mb-0 number-font1">3,643</h5>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-5">
								<div class="card-body">
									<h3 class="card-title">Live Campaigns</h3>
									<div class="d-flex">
										<p class="data-attributes mb-0 mr-4">
											<span data-peity='{ "fill": ["#1cc5ef", "#e3e8f7"],   "innerRadius": 20, "radius": 24 }'>3/7</span>
										</p>
										<div>
											<p class="text-muted mb-1">Total Completed</p>
											<h3 class="font-weight-semibold number-font mb-0">85%</h3>
										</div>
									</div>
									<div class="row mt-3 pt-3">
										<div class="col text-left">
											<p class=" mb-0">Expenditure</p>
											<h5 class="mt-2 font-weight-semibold mb-0 number-font1">$1,765</h5>
										</div>
										<div class="col text-left">
											<p class="  mb-0">Remaining</p>
											<h5 class="mt-2 font-weight-semibold mb-0 number-font1">$2,463</h5>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- ROW-4 CLOSED -->
@endsection
@section('js')
		<!-- CHARTJS CHART JS -->
		<script src="{{URL::asset('assets/plugins/chart/Chart.bundle.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/chart/utils.js')}}"></script>

		<!-- PIETY CHART JS -->
		<script src="{{URL::asset('assets/plugins/peitychart/jquery.peity.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/peitychart/peitychart.init.js')}}"></script>
		<!-- INTERNAL FLOT JS -->
		<script src="{{URL::asset('assets/plugins/flot/jquery.flot.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/flot/jquery.flot.fillbetween.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/flot/jquery.flot.pie.js')}}"></script>

		<!-- INTERNAL MORRIS CHART JS -->
		<script src="{{URL::asset('assets/plugins/morris/morris.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/morris/raphael-min.js')}}"></script>

		<!-- INTERNAL CHARTS JS -->
		<script src="{{URL::asset('assets/js/index2.js')}}"></script>
@endsection
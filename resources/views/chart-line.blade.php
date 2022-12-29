@extends('layouts.master')
@section('css')
		<!-- INTERNAL C3 CHARTS CSS -->
		<link href="{{URL::asset('assets/plugins/charts-c3/c3-chart.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
			<!-- PAGE-HEADER -->
			<div class="page-header">
				<div>
					<h1 class="page-title">Chart-Line</h1>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Charts</a></li>
						<li class="breadcrumb-item active" aria-current="page">Chart-Line</li>
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
				<div class="col-lg-6 col-md-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Sales Growth in every Month</h3>
						</div>
						<div class="card-body">
							<div id="chart-employment" class="chartsh"></div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Line Chart 1</h3>
						</div>
						<div class="card-body">
							<div id="chart-sracked" class="chartsh"></div>
						</div>
					</div>
				</div>
			</div>
			<!-- ROW-1 CLOSED -->

			<!-- ROW-2 -->
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Line chart 2</h3>
						</div>
						<div class="card-body">
							<div id="chart-spline-rotated" class="chartsh"></div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Line Chart 3</h3>
						</div>
						<div class="card-body">
							<div id="chart-temperature" class="chartsh"></div>
						</div>
					</div>
				</div>
			</div>
			<!-- ROW-2 CLOSED -->

			<!-- ROW-3 -->
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Line Chart 4</h3>
						</div>
						<div class="card-body">
							<div id="chart-area-spline-sracked" class="chartsh"></div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Line Chart 5 </h3>
						</div>
						<div class="card-body">
							<div id="chart-spline" class="chartsh"></div>
						</div>
					</div>
				</div>
			</div>
			<!-- ROW-3 CLOSED -->

			<!-- ROW-4 -->
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Line Chart 6</h3>
						</div>
						<div class="card-body">
							<div id="chart-area" class="chartsh"></div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Line Chart 7</h3>
						</div>
						<div class="card-body">
							<div id="chart-area-spline" class="chartsh"></div>
						</div>
					</div>
				</div>
			</div>
			<!-- ROW-4 CLOSED -->

			<!-- ROW-5 -->
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Line Chart with step</h3>
						</div>
						<div class="card-body">
							<div id="chart-area-step" class="chartsh"></div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Line Chart 8</h3>
						</div>
						<div class="card-body">
							<div id="chart-step" class="chartsh"></div>
						</div>
					</div>
				</div>
			</div>
			<!-- ROW-5 CLOSED -->
@endsection
@section('js')
		<!-- C3CHART JS -->
		<script src="{{URL::asset('assets/plugins/charts-c3/d3.v5.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/charts-c3/c3-chart.js')}}"></script>

		<!-- C3 LINE-CHART JS -->
		<script src="{{URL::asset('assets/js/charts.js')}}"></script>
@endsection
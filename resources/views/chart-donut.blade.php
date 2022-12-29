@extends('layouts.master')
@section('css')
		<!-- INTERNAL C3 CHARTS CSS -->
		<link href="{{URL::asset('assets/plugins/charts-c3/c3-chart.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
			<!-- PAGE-HEADER -->
			<div class="page-header">
				<div>
					<h1 class="page-title">C3 Dount Charts</h1>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Charts</a></li>
						<li class="breadcrumb-item active" aria-current="page">C3 Dount Charts</li>
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
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Donut Chart</h3>
						</div>
						<div class="card-body">
							<div id="chart-donut" class="chartsh"></div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Donut Chart2</h3>
						</div>
						<div class="card-body">
							<div id="chart-donut2" class="chartsh"></div>
						</div>
					</div>
				</div>
			</div>
			<!-- ROW-1 CLOSED -->

			<!-- ROW-2 OPEN -->
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Donut Chart3</h3>
						</div>
						<div class="card-body">
							<div id="chart-donut3" class="chartsh"></div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Donut Chart4</h3>
						</div>
						<div class="card-body">
							<div id="chart-donut4" class="chartsh"></div>
						</div>
					</div>
				</div>
			</div>
			<!-- ROW-2 CLOSED -->
@endsection
@section('js')
		<!-- INTERNAL C3 CHART JS -->
		<script src="{{URL::asset('assets/plugins/charts-c3/d3.v5.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/charts-c3/c3-chart.js')}}"></script>
		<!-- CHART-DONUT JS -->
		<script src="{{URL::asset('assets/js/charts.js')}}"></script>
@endsection
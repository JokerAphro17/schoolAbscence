@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
			<!-- PAGE-HEADER -->
			<div class="page-header">
				<div>
					<h1 class="page-title">ChartJS</h1>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Charts</a></li>
						<li class="breadcrumb-item active" aria-current="page">ChartJS</li>
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
							<h3 class="card-title">Top label chart</h3>
						</div>
						<div class="card-body">
							<div class="chart-container">
								<canvas id="chart-legend-top" class="h-400"></canvas>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Right label chart</h3>
						</div>
						<div class="card-body">
							<div class="chart-container">
								<canvas id="chart-legend-right" class="h-400"></canvas>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Bottom label chart</h3>
						</div>
						<div class="card-body">
							<div class="chart-container">
								<canvas id="chart-legend-bottom" class="h-400"></canvas>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Left label chart</h3>
						</div>
						<div class="card-body">
							<div class="chart-container">
								<canvas id="chart-legend-left" class="h-400"></canvas>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- ROW-1 CLOSE -->
@endsection
@section('js')
		<!-- INTERNAL CHARTJS JS -->
		<script src="{{URL::asset('assets/plugins/chart/Chart.bundle.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/chart/utils.js')}}"></script>
		<script src="{{URL::asset('assets/js/chart.js')}}"></script>
@endsection
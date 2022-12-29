@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
			<!-- PAGE-HEADER -->
			<div class="page-header">
				<div>
					<h1 class="page-title">Echart</h1>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Charts</a></li>
						<li class="breadcrumb-item active" aria-current="page">Echart</li>
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
							<h3 class="card-title">Line chart</h3>
						</div>
						<div class="card-body">
							<div id="echart1" class="chartsh"></div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Combination of Line & Bar Chart</h3>
						</div>
						<div class="card-body">
							<div id="echart2" class="chartsh"></div>
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
							<h3 class="card-title">Vertical Line chart</h3>
						</div>
						<div class="card-body">
							<div id="echart3" class="chartsh"></div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Vertical Combination of Line & Bar Chart</h3>
						</div>
						<div class="card-body">
							<div id="echart4" class="chartsh"></div>
						</div>
					</div>
				</div>
			</div>
			<!-- ROW-2 CLOSE -->

			<!-- ROW-3 OPEN -->
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Bar Chart</h3>
						</div>
						<div class="card-body">
							<div id="echart5" class="chartsh"></div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Horizontal Bar Chart</h3>
						</div>
						<div class="card-body">
							<div id="echart6" class="chartsh"></div>
						</div>
					</div>
				</div>
			</div>
			<!-- ROW-3 CLOSE -->

			<!-- ROW-4 OPEN -->
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Single line chart</h3>
						</div>
						<div class="card-body">
							<div id="echart7" class="chartsh"></div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Single smooth line chart</h3>
						</div>
						<div class="card-body">
							<div id="echart8" class="chartsh"></div>
						</div>
					</div>
				</div>
			</div>
			<!-- ROW-4 CLOSED -->
@endsection
@section('js')
		<!-- INTERNAL ECHART JS -->
		<script src="{{URL::asset('assets/js/echarts.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/echarts/echarts.js')}}"></script>
@endsection
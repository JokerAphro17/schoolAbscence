@extends('layouts.master')
@section('css')
		<!-- INTERNAL  CALENDAR CSS -->
		<link href="{{URL::asset('assets/plugins/calendar/clndr.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
			<!-- PAGE-HEADER -->
			<div class="page-header">
				<div>
					<h1 class="page-title">Calender</h1>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Components</a></li>
						<li class="breadcrumb-item active" aria-current="page">Calender</li>
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
			<!-- ROW OPEN-->
			<div class="">
				<div class="card">
					<div class="card-body">
						<div class="cal1"></div>
					</div>
				</div>
			</div>
			<!-- ROW CLOSE-->
@endsection
@section('js')
		<!-- INTERNAL  DEFAULT CALENDAR JS -->
		<script src="{{URL::asset('assets/plugins/calendar/underscore-min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/calendar/moment.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/calendar/clndr.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/calendar/demo.js')}}"></script>
@endsection
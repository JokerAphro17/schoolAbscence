@extends('layouts.master')
@section('page-header')
			<!-- PAGE-HEADER -->
			<div class="page-header">
				
				<div class="ml-auto pageheader-btn">
					<div class="btn-list">
						<a href="#" class="btn btn-primary btn-icon text-white" data-toggle="tooltip" title="Add order" data-placement="top">
							<span>
								<i class="fe fe-shopping-cart"></i>
							</span>
						</a>
						<a href="#" class="btn btn-orange btn-icon text-white" data-toggle="tooltip" title="Download" data-placement="top">
							<span>
								<i class="fe fe-download"></i>
							</span>
						</a>
						<a href="#" class="btn btn-info btn-icon text-white" data-toggle="tooltip" title="Add User" data-placement="top">
							<span>
								<i class="fe fe-plus"></i>
							</span>
						</a>
						<a href="#" class="btn btn-secondary btn-icon text-white dropdown-toggle" data-toggle="dropdown">
							<span>
								<i class="fe fe-external-link"></i>
							</span> Export <span class="caret"></span>
						</a>
						<div class="dropdown-menu" role="menu">
							<a href="#" class="dropdown-item"><i class="bx bxs-file-pdf mr-2"></i>Export as Pdf</a>
							<a href="#" class="dropdown-item"><i class="bx bxs-file-image mr-2"></i>Export as Image</a>
							<a href="#" class="dropdown-item"><i class="bx bxs-file mr-2"></i>Export as Excel</a>
						</div>
					</div>
				</div>
			</div>
			<!-- PAGE-HEADER END -->
@endsection
@section('content')
			<!-- ROW-1 -->

        

            <!-- ROW-1 CLOSED -->
@endsection
@section('js')
		<!-- INTERNAL CHARTJS CHART JS -->
		<script src="{{URL::asset('assets/plugins/chart/Chart.bundle.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/chart/utils.js')}}"></script>

		<!-- INTERNAL PIETY CHART JS -->
		<script src="{{URL::asset('assets/plugins/peitychart/jquery.peity.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/peitychart/peitychart.init.js')}}"></script>
		<!-- INTERNAL APEXCHART JS -->
		<script src="{{URL::asset('assets/js/apexcharts.js')}}"></script>

		<!--INTERNAL  INDEX JS -->
		<script src="{{URL::asset('assets/js/index1.js')}}"></script>
@endsection
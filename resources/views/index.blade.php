@extends('layouts.master')
@section('page-header')
			<!-- PAGE-HEADER -->
			
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
									<img src="{{URL::asset('assets/images/pngs/profit.png')}}" alt="img" class="w-95">
								</div>
								<div class="col-xl-9 col-lg-10 pl-lg-0">
									<div class="row">
										<div class="col-xl-7 col-lg-6">
											<div class="text-left text-white mt-xl-4">
												<h3 class="font-weight-semibold">Gestion des Absences</h3>
												<h4 class="font-weight-normal">
													Gerer les absences des etudiants avec une interface simple et intuitive
												</h4>
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

			<!-- Row -->
			<div class="row">
				<div class="col-xl-3 col-sm-6">
					<div class="card">
						<div class="card-body">
							<div class="row mb-1">
								<div class="col">
									<p class="mb-1">Filieres</p>
									<h3 class="mb-0 number-font">
										{{$filieres}}
									</h3>
								</div>
								<div class="col-auto mb-0">
									<div class="dash-icon text-orange">
										<i class="bx bxs-shopping-bags"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-sm-6">
					<div class="card">
						<div class="card-body">
							<div class="row mb-1">
								<div class="col">
									<p class="mb-1">Classes</p>
									<h3 class="mb-0 number-font">
										{{$classes}}
									</h3>
								</div>
								<div class="col-auto mb-0">
									<div class="dash-icon text-secondary1">
										<i class="bx bxs-building-house"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-sm-6">
					<div class="card">
						<div class="card-body">
							<div class="row mb-1">
								<div class="col">
									<p class="mb-1">Modules</p>
									<h3 class="mb-0 number-font">
										{{$modules}}
									</h3>
								</div>
								<div class="col-auto mb-0">
									<div class="dash-icon text-secondary">
										<i class="bx bxs-book"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-sm-6">
					<div class="card">
						<div class="card-body">
							<div class="row mb-1">
								<div class="col">
									<p class="mb-1">Absences</p>
									<h3 class="mb-0 number-font">
										{{$absences}}
									</h3>
								</div>
								<div class="col-auto mb-0">
									<div class="dash-icon text-warning">
										<i class="bx bxs-timer"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Row-1 End -->

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
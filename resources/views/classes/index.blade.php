@extends('layouts.master')
@section('page-header')
			<!-- PAGE-HEADER -->
			<div class="page-header">
				<div>
					<h1 class="page-title">Salut! Bienvenu dans notre application de Gestion des Absences</h1>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Sales Dashboard</li>
					</ol>
				</div>
				<div class="ml-auto pageheader-btn">
					<div class="btn-list">
						<a href="{{route('classes.create')}}" class="btn btn-primary btn-icon text-white" data-toggle="tooltip" title="Add order" data-placement="top">
							<span>
								<i class="fe fe-plus">
                                </i>
                                Nouveau classe
							</span>
						</a>
					</div>
				</div>
			</div>
			<!-- PAGE-HEADER END -->
@endsection
@section('content')
			<!-- ROW-1 -->
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Les classes</h3>
						</div>
						<div class="card-body">
						   
							@if($classes->count() == 0)
								<h5 class="text-muted text-center">
									Aucun classe trouvé
								</h5>
							@else
							<div class="table-responsive">
								<table id="data-table1" class="table table-striped table-bordered text-nowrap w-100">
									<thead>
										<tr>
											<th class="wd-15p">Nom du classe</th>
											<th class="wd-15p">Filiere</th>
											<th class="wd-15p">Action</th>
										</tr>
									</thead>
									<tbody>
										
										@foreach ($classes as $classe )
										<tr>
											<td>
												{{
													$classe->nom
												}}
											</td>
											<td>
												{{
													$classe->filiere->nom
												}}
											</td>
											<td>
												<a href="{{route('classes.edit', $classe->id)}}" class="btn btn-outline-primary">
													<i class="fa fa-edit    
													"></i> Modifier
												</a>
												{{-- <a href="{{route('filieres.destroy', $filiere)}}" class="btn btn-danger btn-sm">
													<i class="fa fa-trash"></i>
												</a> --}}
											</td>

											
										</tr>
											@endforeach
										
									</tbody>
								</table>
							</div>
							@endif
						</div>
					</div>
				</div>
			</div>
        

            <!-- ROW-1 CLOSED -->
			<div class="row justify-content-end">
				<div class="col-4">
				  <div class="pagination">
					 {{$classes->links()}}
				  </div>
				</div>
			</div>
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
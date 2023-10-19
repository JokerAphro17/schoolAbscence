@extends('layouts.master')
@section('page-header')
			<!-- PAGE-HEADER -->
			<div class="page-header">
				<div class="ml-auto pageheader-btn">
					<div class="btn-list">
						<a href="{{route('modules.create')}}" class="btn btn-primary btn-icon text-white" data-toggle="tooltip" title="Add order" data-placement="top">
							<span>
								<i class="fe fe-plus">
                                </i>
                                Nouveau Module
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
							<h3 class="card-title">Les modules</h3>
						</div>
						<div class="card-body">
						   
							@if($modules->count() == 0)
								<h5 class="text-muted text-center">
									Aucun module trouvé
								</h5>
							@else
							<div class="table-responsive">
								<table class="table table-striped table-bordered text-nowrap w-100" id="table">
									<thead>
										<tr>
											<th class="wd-15p">Code du module</th>
											<th class="wd-15p">Nom du module</th>
											<th class="wd-15p">Action</th>
										</tr>
									</thead>
									<tbody>
										
										@foreach ($modules as $module )
										<tr>
											<td>
												{{
													$module->code
												}}
											</td>
											<td>
												{{
													$module->nom
												}}
											</td>
											<td>
												<a href="{{route('modules.edit', $module)}}" class="btn btn-outline-primary">
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
				</div>
			</div>
@endsection
@section('js')
<script>
	$(document).ready(function() {
		$('#table').DataTable({
			"language": {
				"lengthMenu": "Afficher _MENU_ enregistrements par page",
				"zeroRecords": "Aucun enregistrement trouvé",
				"info": "Affichage de la page _PAGE_ sur _PAGES_",
				"infoEmpty": "Aucun enregistrement disponible",
				"infoFiltered": "(filtré à partir de _MAX_ enregistrements au total)",
				"search": "Rechercher",
				"paginate": {
					"first": "Premier",
					"last": "Dernier",
					"next": "Suivant",
					"previous": "Précédent"
				},
			}
		});
	});
</script>
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
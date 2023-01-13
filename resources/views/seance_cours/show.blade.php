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

        <div class="card">
			<div class="card-body">

				<div class="row">
					<div class="col-6">
						Information 1
					</div>
					<div class="col-6">
						Information 2
					</div>
				</div>
			</div>
		</div>
		<form action="{{ route("abscences.store") }}" method="POST">
			@csrf
			<input type="hidden" name="sceance_cour_id" value="{{ $sceanceCour->id }}">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-12">
						<h4>Liste de présence</h4>
						{{-- @forelse ($sceanceCour->classe->eleves	 as $eleve) --}}
						
						<table 
							class="table table-bordered table-striped table-hover table-sm"
							id="table"
						>

							<thead>
								<tr>
									<th>INE</th>
									<th>Nom</th>
									<th>Prénom</th>
									<th>Date de naissance</th>
									<th>Abscence</th>
								</tr>
							</thead>
							<tbody>
								@forelse ($sceanceCour->classe->eleves as $eleve)
									<tr>
										<td>{{ $eleve->ine }}</td>
										
										<td>{{ $eleve->nom }}</td>
										<td>{{ $eleve->prenom }}</td>
										<td>{{ $eleve->date_naissance }}</td>
										
										<td>
											<input type="checkbox" name="abscences[]" value="{{ $eleve->id }}">
										</td>
									</tr>
								@empty
									<tr>
										<td colspan="3" class="text-center">Aucun élève dans cette classe</td>
									</tr>
								@endforelse
							</tbody>
						</table>

					</div>
				</div>
				<div class="row justify-content-end p-3">
					<div class="col-md-4 offset-8 justify-content-end d-flex">
						<button type="submit" class="btn btn-primary">Enregistrer</button>
					</div>
				</div>
			</div>
		</div>
		</form>

            <!-- ROW-1 CLOSED -->
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
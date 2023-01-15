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

			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-6">
							<dl class="row">
								<dt class="col-sm-3">Nom :</dt>
								<dd class="col-sm-9">{{$classe->nom}}</dd>
								<dt class="col-sm-3">Filiere :</dt>
								<dd class="col-sm-9">{{$classe->filiere->nom}}</dd>
								<dt class="col-sm-3">Nb d'eleves:</dt>
								<dd class="col-sm-9">{{$classe->eleves->count()}}</dd>
							</dl>
						</div>						
					</div>
				</div>
			</div>

			<div class="card">
				<div class="card-body">
						<h3>Les modules de la classe</h3>
							@foreach($modules as $module)
								  <div class="card-header d-flex .data0{{$module->id}} justify-content-between"  id="headingOne{{$module->id}}">
									<h5 class="mb-0">
									  
										{{$module->nom}}
									</h5>
									<div>
										<button class="btn  btn-tab btn-primary btn-sm"
										id="{{$module->id}}"
										>
										<i class="fa fa-eye"></i>
										Voir les absences
									</button>
									<button class="btn  btn-auth btn-danger btn-sm"
										id="a{{$module->id}}"
									>
										<i class="fa fa-eye"></i>
										Eleves non autorisés 
									</button>
								</div>
								</div>

										@php
											$abscence = $module->absences;
											$eleves=[];
										foreach ($abscence as $absence) {
											if(!in_array($absence->eleve,$eleves))
											{$eleves[] = $absence->eleve;}
										}
							
										@endphp
										
										<table id="table" class="table table-bordered d-none table-hover" 
										id="tab{{$module->id}}"
										>
											<thead>
												<tr>
													<th>INE</th>
													<th>Nom</th>
													<th>Prénom</th>
													<th>Nombre d'absence</th>
												</tr>
											</thead>
											<tbody>
												@foreach($eleves as $eleve)
													<tr>
														<td>{{$eleve->ine}}
														<td>{{$eleve->nom}}</td>
														<td>{{$eleve->prenom}}</td>
														@php
														$nb_absence = 0;
															$absences = $eleve->absences;
															$seances = [];
															foreach ($absences as $absence) {
																$seances[] = App\Models\SceanceCour::find($absence->sceance_cour_id);
															}
															
															foreach ($seances as $seance) {
																if($seance->module->id == $module->id){
																	$nb_absence++;
																}
															}
														@endphp
														<td>{{$nb_absence}}</td>
														
													</tr>
												@endforeach
											</tbody>
										</table>
										<table class="table table-bordered d-none table-hover" 
										id="taba{{$module->id}}"
										>
											<thead>
												<tr>
													<th>INE</th>
													<th>Nom</th>
													<th>Prénom</th>
												</tr>
											</thead>
											<tbody>
											
												@foreach($eleves as $eleve)
												@php
												$nb_absence = 0;
													$absences = $eleve->absences;
													$seances = [];
													foreach ($absences as $absence) {
														$seances[] = App\Models\SceanceCour::find($absence->sceance_cour_id);
													}
													
													foreach ($seances as $seance) {
														if($seance->module->id == $module->id){
															$nb_absence++;
														}
													}
												@endphp
												@if($nb_absence >= 3)
													<tr>
														<td>{{$eleve->ine}}
														<td>{{$eleve->nom}}</td>
														<td>{{$eleve->prenom}}</td>														
													</tr>
												@endif
												@endforeach
											</tbody>
										</table>
								
							@endforeach
				</div>
			</div>


								

            <!-- ROW-1 CLOSED -->
@endsection
@section('js')
			<script>
				var btns = document.querySelectorAll('.btn-tab');
				btns.forEach(btn => {
					btn.addEventListener('click', function() {
						$btnId = this.id;
						$tabId = 'tab'+$btnId;
						$tab = document.getElementById($tabId);
						$tab.classList.toggle('show');
						$tab.classList.toggle('d-none');
						$data = document.getElementById('taba'+$btnId);
						$data.classList.add('d-none');
					});
				});
				var btns_auth = document.querySelectorAll('.btn-auth');
				btns_auth.forEach(btn => {
					btn.addEventListener('click', function() {
						$btnId = this.id;
						$tabId = 'tab'+$btnId;
						$tab = document.getElementById($tabId);
						$tab.classList.toggle('show');
						$tab.classList.toggle('d-none');
						$btn_id = $btnId.slice(1, $btnId.length);
						$data = document.getElementById('tab'+$btn_id);
						$data.classList.add('d-none');
						
						
					});
				});

			</script>

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
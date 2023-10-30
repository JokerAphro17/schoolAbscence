@extends('layouts.master')
@section('page-header')
			<!-- PAGE-HEADER -->
			<div class="page-header">
				<div class="ml-auto pageheader-btn">
					<div class="btn-list">
						<a href="{{route('eleves.create', ['classe_id' => $classe_id])}}"
						
						class="btn btn-primary btn-icon text-white" data-toggle="tooltip" title="Add order" data-placement="top">
							<span>
								<i class="fe fe-plus">
                                </i>
                                Nouvel élève
							</span>
						</a>
						<a href="#"  id="excel" class="btn btn-success btn-icon text-white" data-toggle="tooltip" title="Download" data-placement="top">
							<span  >
								importer des élèves
							</span>
							
						</a>
						<a class="" data-toggle="tooltip" title="Download" data-placement="top">
							<form action="{{route('eleves.import')}}" method="POST" enctype="multipart/form-data" id="import">
								@csrf
								<input type="file" name="file" id="file" style="display: none">
								<input type="hidden" name="classe_id" value="{{$classe_id}}">
								<button type="submit"  id="submit" class="btn btn-success btn-icon text-white" style="display: none" data-toggle="tooltip" title="Download" data-placement="top">
									<span>
										
										Valider
									</span>
								</button>
							</form>
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
							<h3 class="card-title">Les eleves</h3>
						</div>
						<div class="card-body">
						  
							@if($eleves->count() == 0)
								<h5 class="text-muted text-center">
									Aucun eleve trouvé
								</h5>
							@else
							<div class="table-responsive">
								<table id="table" class="table table-striped table-bordered text-nowrap w-100">
									<thead>
										<tr><th class="wd-15p">N*</th>
											<th class="wd-15p">INE</th>
											<th class="wd-15p">Nom</th>
											<th class="wd-15p">Prénom</th>
											<th class="wd-15p">Sexe</th>
											<th class="wd-15p">Classe</th>
											<th class="wd-15p">Date de naissance</th>
											<th class="wd-15p">Lieu de naissance</th>
										</tr>
									</thead>
									<tbody>
										
										@foreach ($eleves as $key => $eleve )
										<tr>
											<td>
												{{
													$key + 1
												}}
											</td>
											<td>
												{{
													$eleve->ine
												}}
											</td>
											<td>
												{{
													$eleve->nom
												}}
											</td>
											<td>
												{{
													$eleve->prenom
												}}
											</td>
											<td>
												{{
													$eleve->sexe
												}}
											</td>
											<td>
												{{
													$eleve->classe->nom
												}}
											</td>

											<td>
												{{
													$eleve->date_naissance
												}}
											</td>
											<td>
												{{
													$eleve->lieu_naissance
												}}
											</td>

											
										
											<td>
												<a href="{{route('eleves.edit', $eleve)}}" class="btn btn-outline-primary">
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
			
			
			<div class="row justify-content-end">
			 <div class="col-4">
				{{
					$eleves->links()
				}}
			 </div>

		    </div>
		  		

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

		<script>
			$(document).ready(function() {
				$('#excel').click(function() {
					// create a file input and click on it
					var excel = document.getElementById("file");
					excel.click();


				});

				$('#file').change(function() {
					
					if($('#file').val() != '') {
						$('#submit').css('display', 'block');
						$('#excel').css('display', 'none');
					}
					else {
						$('#submit').css('display', 'none');
						$('#excel').css('display', 'block');
					}

				});
			});

		</script>
		<script>
			$(document).ready(function() {
				$('#d').DataTable({d
					"language": {
						"lengthMenu": "Afficher _MENU_ enregistrements par page",
						"zeroRecords": "Aucun enregistrement trouvé",
						"info": "Affichage de la page _PAGE_ sur _PAGES_",
						"infoEmpty": "Aucun enregistrement disponible",
						"infoFiltered": "(filtré à partir de _MAX_ enregistrements au total)",
						"search": "Rechercher",
						"paginate": {
							"first": "Premier",
							"last": "Dernier",d
							"next": "Suivant",
							"previous": "Précédent"d
						},
					}
				});
			});
		</script>
@endsection 
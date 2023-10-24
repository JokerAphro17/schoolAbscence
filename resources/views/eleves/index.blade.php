@extends('layouts.master')
@section('page-header')
			<!-- PAGE-HEADER -->
			<div class="page-header">
				<div class="ml-auto pageheader-btn">
					<div class="btn-list">
						<a href="{{route('eleves.create')}}" class="btn btn-primary btn-icon text-white" data-toggle="tooltip" title="Add order" data-placement="top">
							<span>
								<i class="fe fe-plus">
                                </i>
                                Nouvel élève
							</span>
						</a>
						<a href="#"  id="excel" class="btn btn-orange btn-icon text-white" data-toggle="tooltip" title="Download" data-placement="top">
							<span>
								<i class="fe fe-excel"></i>	
								Importer une liste
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
							<h3 class="card-title">Les eleves</h3>
						</div>
						<div class="card-body">
						   
							@if($eleves->count() == 0)
								<h5 class="text-muted text-center">
									Aucun eleve trouvé
								</h5>
							@else
							<div class="table-responsive">
								<table id="data-table1" class="table table-striped table-bordered text-nowrap w-100">
									<thead>
										<tr>
											<th class="wd-15p">INE</th>
											<th class="wd-15p">Nom</th>
											<th class="wd-15p">Prénom</th>
											<th class="wd-15p">Date de naissance</th>
											<th class="wd-15p">Lieu de naissance</th>
											<th class="wd-15p">Sexe</th>
											<th class="wd-15p">Classe</th>
										</tr>
									</thead>
									<tbody>
										
										@foreach ($eleves as $eleve )
										<tr>
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
													$eleve->date_naissance
												}}
											</td>
											<td>
												{{
													$eleve->lieu_naissance
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
					var excel = document.createElement("input");
					excel.type = "file";
					excel.accept = ".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel";
					excel.click();
					// listen to the file upload change event and get the file
					excel.addEventListener("change", function() {
						var file = excel.files[0];
						if (file) {
							// send the file to the server via XHR and FormData
							var formData = new FormData();
							formData.append("file", file);
							formData.append("_token", "{{ csrf_token() }}");
							fetch("{{ route('eleves.import') }}", {
								method: "POST",
								body: formData
							}).then(response => {
								if (response.ok) {
									return response.json();
								} else {
									return Promise.reject("something went wrong!");
								}
							}).then(data => {
								console.log(data);
								if (data.success) {
									alert(data.success);
									window.location.reload();
								} else if (data.error) {
									alert(data.error);
								}
							}).catch(error => {
								console.error(error);
							});
						}
					});
				});
			});

		</script>
@endsection 
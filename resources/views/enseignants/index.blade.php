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
					
						<a href="{{route('enseignants.create')}}" class="btn btn-info btn-icon text-white" data-toggle="tooltip" title="Add User" data-placement="top">
							<span>
								<i class="fe fe-plus">
                                </i>
                                Nouveau enseignant
							</span>
						</a>
						
					</div>
				</div>
			</div>
			<!-- PAGE-HEADER END -->
@endsection
@section('content')
				<!-- ROW-1 OPEN -->
				<div class="row">
					<div class="col-md-12 col-lg-12">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Les enseignants</h3>
							</div>
							<div class="card-body">
                               
                                @if($enseignants->count() == 0)
                                    <h5 class="text-muted text-center">
                                        Aucun Enseignant trouvé
                                    </h5>
                                @else
								<div class="table-responsive">
									<table id="data-table1" class="table table-striped table-bordered text-nowrap w-100">
										<thead>
											<tr>
												<th class="wd-15p">Nom</th>
												<th class="wd-15p">Prenom</th>
												<th class="wd-15p">Email</th>
												<th class="wd-15p">Telephone</th>
												<th class="wd-15p">Adresse</th>
                                                <th class="wd-15p">Action</th>
											</tr>
										</thead>
										<tbody>
                                            
                                            @foreach ($enseignants as $enseignant )
											<tr>
                                                <td>
                                                    {{
                                                        $enseignant->nom
                                                    }}
                                                </td>
												<td>
                                                    {{
                                                        $enseignant->prenom
                                                    }}
                                                </td>
												<td>
                                                    {{
                                                        $enseignant->email
                                                    }}
                                                </td>
												<td>
                                                    {{
                                                        $enseignant->telephone
                                                    }}
                                                </td>
												<td>
                                                    {{
                                                        $enseignant->adresse
                                                    }}
                                                </td>
                                                <td>
                                                    <a href="{{route('enseignants.edit', $enseignant)}}" class="btn btn-outline-primary">
                                                        <i class="fa fa-edit    
                                                        "></i> Modifier
                                                    </a>
                                                    {{-- <a href="{{route('enseignants.destroy', $enseignant)}}" class="btn btn-danger btn-sm">
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
				<!-- ROW-3 CLOSED-->

				<!-- ROW-4 -->
			
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
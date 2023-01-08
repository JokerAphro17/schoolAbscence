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
					
						<a href="{{route('filieres.index')}}" class="btn btn-info btn-icon text-white" data-toggle="tooltip" title="Add User" data-placement="top">
							<span>
								<i class="fe fe-arrow-left">
                                </i>
                                Retour à la liste
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
                <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                @if(isset($filiere))
                                    Modifier la filière
                                @else
                                    Nouvelle une filière
                                @endif
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                                    <form 
                                    @if(isset($filiere))
                                        action="{{route('filieres.update',$filiere->id)}}"
                                    @else
                                        action="{{route('filieres.store')}}"
                                    @endif
                                    method="POST">

                                        @if(isset($filiere))
                                            @method('PUT')
                                        @endif
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6 col-xl-6 col-md-6 col-sm-12">
                                        
                                                <div class="form-group">
                                                    <label class="form-label
                                                        ">Nom de la filière</label>
                                                    <input type="text" class="form-control"
                                                    value="{{$filiere->nom ?? old('nom')}}"
                                                    name="nom" placeholder="Nom de la filière">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group
                                        ">
                                            <label class="form-label
                                            ">Description</label>
                                            <textarea class="form-control" 
                                            
                                            name="description" placeholder="Description de la filière"></textarea>
                                        </div>
                                        <div class="row justify-content-between">
                                            <div class=" col-md-6 ">
                                                <button type="submit" class="btn btn-outline-primary">Enregistrer   </button>
                                            </div>
                                            <div class=" d-flex  justify-content-right ">
                                                <a
                                                href="{{route('filieres.index')}}"
                                                class="btn btn-outline-danger">Annuler</a>
                                            </div>
                                        </div>
                                                
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
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
@endsection
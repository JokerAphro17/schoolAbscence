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
						<a href="{{route('classes.index')}}" class="btn btn-primary btn-icon text-white" data-toggle="tooltip" title="Add order" data-placement="top">
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
                                @if(isset($classe))
                                    Modifier la classe
                                @else
                                    Nouvelle classe
                                @endif
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                                    <form 
                                    @if(isset($classe))
                                        action="{{route('classes.update',$classe->id)}}"
                                    @else
                                        action="{{route('classes.store')}}"
                                    @endif 
                                    method="post">
                                        @if(isset($classe))
                                            @method('PUT')
                                        @endif
                                        @csrf
                                        <input type="hidden" name="class" value="{{ $classe->id ?? '' }}">
                                        <div class="row">
                                            <div class="col-lg-6 col-xl-6 col-md-6 col-sm-12">
                                        
                                                <div class="form-group">
                                                    <label class="form-label">
													Entrer la Classe
													</label>
                                                    <input type="text" class="form-control" 
                                                    value="{{$classe->nom ?? old('nom')}}"
                                                     name="nom" placeholder="Renseignez le code du module">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-xl-6 col-md-6 col-sm-12">
												<div class="form-group">
                                                    <label class="form-label">
														Filiere
													</label>
                                                    <select class="select2 form-control custum-select " name="filiere_id">
                                                        <option value="">...</option>
                                                        @foreach ($filieres as $filiere )
                                                            <option
                                                            @if(isset($classe))
                                                                @if($classe->filiere_id == $filiere->id)
                                                                    selected
                                                                @endif
                                                            @endif
                                                            value="{{$filiere->id}}">
                                                                {{$filiere->nom}}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-between">
                                            <div class=" col-md-6 ">
                                                <button type="submit" class="btn btn-outline-primary">Enregistrer</button>
                                            </div>
                                            <div class=" d-flex  justify-content-right ">
                                                <a
                                                href="{{route('classes.index')}}"
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
@extends('layouts.master')
@section('page-header')
			<!-- PAGE-HEADER -->
			<div class="page-header">
				<div class="ml-auto pageheader-btn">
					<div class="btn-list">
						<a href="{{route('seance_cours.index')}}" class="btn btn-primary btn-icon text-white" data-toggle="tooltip" title="Add order" data-placement="top">
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
                                @if(isset($sceanceCour))
                                    Modifier les infos de la sceance 
                                @else
                                    Nouvelle sceance
                                @endif
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                                    <form 
                                    @if(isset($sceanceCour))
                                        action="{{route('seance_cours.update',$sceanceCour->id)}}"
                                    @else
                                        action="{{route('seance_cours.store')}}"
                                    @endif 
                                    method="post">
                                        @if(isset($module))
                                            @method('PUT')
                                        @endif
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6 col-xl-6 col-md-6 col-sm-12">
												<div class="form-group">
                                                    <label class="form-label">
														Module
													</label>
                                                    <select class="select2 form-control custum-select " name="module_id">
                                                        <option value="">...</option>
                                                        @foreach ($modules as $module )
                                                            <option value="{{$module->id}}">
                                                                {{$module->nom}}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-xl-6 col-md-6 col-sm-12">
												<div class="form-group">
                                                    <label class="form-label">
														Classe
													</label>
                                                    <select class="select2 form-control custum-select " name="classe_id">
                                                        <option value="">...</option>
                                                        @foreach ($classes as $classe )
                                                            <option value="{{$classe->id}}">
                                                                {{$classe->nom}}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-xl-6 col-md-6 col-sm-12">
                                                
                                                <div class="form-group">
                                                    <label class="form-label">
                                                        Entrer la durée
													</label>
                                                    <input type="text" class="form-control" 
                                                    value="{{$sceanceCour->duree ?? old('duree')}}"
                                                    name="duree" placeholder="Renseignez la durée">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-xl-6 col-md-6 col-sm-12">
                                                
                                                <div class="form-group">
                                                    <label class="form-label">
                                                        Entrer la date
													</label>
                                                    <input type="date" class="form-control" 
                                                    value="{{$sceanceCour->date ?? old('date')}}"
                                                     name="date" placeholder="Renseignez la date">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-xl-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label class="form-label">
                                                    Heure de debut
                                                </label>
                                                <input type="text" id="example" class="form-control" name="heure_debut" autocomplete="off" />                                                
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-xl-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">
                                                    Enseignant
                                                </label>
                                                <select class="select2 form-control custum-select " name="enseignant_id">
                                                    <option value="">...</option>
                                                    @foreach ($enseignants as $enseignant )
                                                    <option value="{{$enseignant->id}}">
                                                        {{$enseignant->nom}}
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
                                                href="{{route('seance_cours.index')}}"
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
        <script>
            jQuery('#example').timepicker({
            
            


                });

        </script>
                
@endsection
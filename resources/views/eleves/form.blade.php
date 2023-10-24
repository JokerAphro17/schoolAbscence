@extends('layouts.master')
@section('page-header')
			<!-- PAGE-HEADER -->
			<div class="page-header">
				<div class="ml-auto pageheader-btn">
					<div class="btn-list">
						<a href="{{route('eleves.index')}}" class="btn btn-primary btn-icon text-white" data-toggle="tooltip" title="Add order" data-placement="top">
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
                                @if(isset($eleve))
                                    Modifier l'élève
                                @else
                                    Nouvel élève
                                @endif
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                                    <form 
                                    @if(isset($eleve))
                                        action="{{route('eleves.update',$eleve)}}"
                                    @else
                                        action="{{route('eleves.store')}}"
                                    @endif 
                                    method="post">
                                        @if(isset($eleve))
                                            @method('PUT')
                                        @endif
                                        @csrf
                                        <input type="hidden" name="class" value="{{ $eleve->id ?? '' }}">
                                        <div class="row">
                                            <div class="col-lg-6 col-xl-6 col-md-6 col-sm-12">
                                        
                                                <div class="form-group">
                                                    <label class="form-label">
														INE
													</label>
                                                    <input type="text" class="form-control" 
                                                    value="{{$eleve->ine ?? old('ine')}}"
                                                     name="ine" placeholder="Renseignez l'INE de l'élève">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-xl-6 col-md-6 col-sm-12">
                                        
                                                <div class="form-group">
                                                    <label class="form-label">
														Nom
													</label>
                                                    <input type="text" class="form-control" 
                                                    value="{{$eleve->nom ?? old('nom')}}"
                                                     name="nom" placeholder="Renseignez le nom de l'élève">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-xl-6 col-md-6 col-sm-12">
												<div class="form-group">
                                                    <label class="form-label">
                                                        Prenom
                                                    </label>
                                                    <input type="text" class="form-control"
                                                    value="{{$eleve->prenom ?? old('prenom')}}"
                                                     name="prenom" placeholder="Renseignez le prenom de l'élève">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-xl-6 col-md-6 col-sm-12">
                                        
                                                <div class="form-group
                                                ">
                                                    <label class="form-label
                                                    ">
                                                        Sexe
                                                    </label>
                                                    <select name="sexe" class="form-control">
                                                        <option value="M" @if(isset($eleve) && $eleve->sexe == 'M') selected @endif>Masculin</option>
                                                        <option value="F" @if(isset($eleve) && $eleve->sexe == 'F') selected @endif>Féminin</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-xl-6 col-md-6 col-sm-12">
                                                <div class="form-group
                                                ">
                                                    <label class="form-label
                                                    ">
                                                        Classe
                                                    </label>
                                                    <select name="classe_id" class="form-control">
                                                        @foreach($classes as $classe)
                                                            <option value="{{$classe->id}}" @if(isset($eleve) && $eleve->classe_id == $classe->id) selected @endif>{{$classe->nom}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6 col-xl-6 col-md-6 col-sm-12">
                                        
                                                <div class="form-group">
                                                    <label class="form-label">
                                                        Date de naissance
                                                    </label>
                                                    <input type="date" class="form-control"
                                                    value="{{$eleve->date_naissance ?? old('date_naissance')}}"
                                                     name="date_naissance" placeholder="Renseigne la date de naissance">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-xl-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label class="form-label
                                                    ">
                                                        Lieu de naissance
                                                    </label>
                                                    <input type="text" class="form-control"
                                                    value="{{$eleve->lieu_naissance ?? old('lieu_naissance')}}"
                                                     name="lieu_naissance" placeholder="Renseignez le lieu de naissance">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row justify-content-between">
                                            <div class=" col-md-6 ">
                                                <button type="submit" class="btn btn-outline-primary">Enregistrer</button>
                                            </div>
                                            <div class=" d-flex  justify-content-right ">
                                                <a
                                                href="{{route('eleves.index')}}"
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

            // show all errors
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        

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
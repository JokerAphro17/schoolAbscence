@extends('layouts.master')
@section('page-header')
			<!-- PAGE-HEADER -->
			<div class="page-header">
				<div class="ml-auto pageheader-btn">
					<div class="btn-list">
						<a href="{{route('modules.index')}}" class="btn btn-primary btn-icon text-white" data-toggle="tooltip" title="Add order" data-placement="top">
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
                                @if(isset($module))
                                    Modifier le module
                                @else
                                    Nouveau module
                                @endif
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                                    <form 
                                    @if(isset($module))
                                        action="{{route('modules.update',$module->id)}}"
                                    @else
                                        action="{{route('modules.store')}}"
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
														Code du module
													</label>
                                                    <input type="text" class="form-control" 
                                                    value="{{$module->code ?? old('code')}}"
                                                     name="code" placeholder="Renseignez le code du module">
                                                </div>
                                                @error('code')
                                                    <div class="alert alert-danger">{{$message}}</div>
                                                @enderror
                                            </div>
                                            <div class="col-lg-6 col-xl-6 col-md-6 col-sm-12">
												<div class="form-group">
                                                    <label class="form-label">
														Nom du module
													</label>
                                                    <input type="text" class="form-control"
                                                    value="{{$module->nom ?? old('nom')}}"
                                                    name="nom" placeholder="Renseignez le nom du module">
                                                </div>
                                                @error('nom')
                                                    <div class="alert alert-danger">{{$message}}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row justify-content-between">
                                            <div class=" col-md-6 ">
                                                <button type="submit" class="btn btn-outline-primary">Enregistrer</button>
                                            </div>
                                            <div class=" d-flex  justify-content-right ">
                                                <a
                                                href="{{route('modules.index')}}"
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
@extends('layouts.master')
@section('css')
        <!-- INTERNAL  WYSIWYG EDITOR CSS -->
        <link href="{{URL::asset('assets/plugins/wysiwyag/richtext.css')}}" rel="stylesheet" />

        <!-- INTERNAL SUMMERNOTE CSS -->
        <link rel="stylesheet" href="{{URL::asset('assets/plugins/summernote/summernote-bs4.css')}}">

        <!-- INTERNAL FORM WIZARD CSS -->
        <link rel="stylesheet" href="{{URL::asset('assets/plugins/formwizard/smart_wizard.css')}}">
        <link rel="stylesheet" href="{{URL::asset('assets/plugins/formwizard/smart_wizard_theme_arrows.css')}}">
        <link rel="stylesheet" href="{{URL::asset('assets/plugins/formwizard/smart_wizard_theme_circles.css')}}">
        <link rel="stylesheet" href="{{URL::asset('assets/plugins/formwizard/smart_wizard_theme_dots.css')}}">
@endsection
@section('page-header')
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <div>
                    <h1 class="page-title">Form Editor</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Forms</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Form Editor</li>
                    </ol>
                </div>
                <div class="ml-auto pageheader-btn">
                    <a href="#" class="btn btn-primary btn-icon text-white mr-2">
                        <span>
                            <i class="fe fe-shopping-cart"></i>
                        </span> Add Order
                    </a>
                    <a href="#" class="btn btn-secondary btn-icon text-white">
                        <span>
                            <i class="fe fe-plus"></i>
                        </span> Add User
                    </a>
                </div>
            </div>
            <!-- PAGE-HEADER END -->
@endsection
@section('content')
            <!-- ROW-1 OPEN -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">WYSIWYG Editor style1</div>
                        </div>
                        <div class="card-body">
                            <textarea class="content" name="example"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ROW-1 CLOSED -->

            <!-- ROW-2 OPEN -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Summernote</h3>
                        </div>
                        <div class="card-body">
                            <div id="summernote"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ROW-2 CLOSED -->
@endsection
@section('js')
        <!-- INTERNAL   WYSIWYG Editor JS -->
        <script src="{{URL::asset('assets/plugins/wysiwyag/jquery.richtext.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/wysiwyag/wysiwyag.js')}}"></script>

        <!-- INTERNAL SUMMERNOTE JS -->
        <script src="{{URL::asset('assets/plugins/summernote/summernote-bs4.js')}}"></script>

        <!-- INTERNAL FORMEDITOR JS -->
        <script src="{{URL::asset('assets/js/summernote.js')}}"></script>
        <script src="{{URL::asset('assets/js/formeditor.js')}}"></script>
@endsection
@extends('layouts.master')
@section('css')
        <!-- INTERNAL PRISM CSS -->
        <link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
@endsection
@section('page-header')
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <div>
                    <h1 class="page-title">Progress</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Advanced Elements</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Progress</li>
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
                <div class="col-xl-6 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Basic Progress</h3>
                        </div>
                        <div class="card-body">
                            <div class="example">
                                <div class="progress progress-md mb-3">
                                    <div class="progress-bar bg-default w-10"></div>
                                </div>
                                <div class="progress progress-md mb-3">
                                    <div class="progress-bar bg-primary w-20"></div>
                                </div>
                                <div class="progress progress-md mb-3 ">
                                    <div class="progress-bar bg-primary w-40"></div>
                                </div>
                                <div class="progress progress-md mb-3">
                                    <div class="progress-bar bg-primary  w-60"></div>
                                </div>
                                <div class="progress progress-md">
                                    <div class="progress-bar bg-primary  w-80"></div>
                                </div>
                            </div>
                <!-- Prism Code-->
                <figure class="highlight clip-widget" id="progress1">
                    <pre><code class="language-markup"><script type="html-Yoha/script"><div class="progress progress-md mb-3">
    <div class="progress-bar bg-default w-10"></div>
</div>
<div class="progress progress-md mb-3">
    <div class="progress-bar bg-primary w-20"></div>
</div>
<div class="progress progress-md mb-3 ">
    <div class="progress-bar bg-primary w-40"></div>
</div>
<div class="progress progress-md mb-3">
    <div class="progress-bar bg-primary  w-60" ></div>
</div>
<div class="progress progress-md">
    <div class="progress-bar bg-primary  w-80"></div>
</div></script></code></pre>
                    <div class="clipboard-icon" data-clipboard-target="#progress1"><i class="fa fa-clipboard"></i></div>
                </figure>
                <!-- End Prism Code-->
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-xl-6 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Contextual Progress</h3>
                        </div>
                        <div class="card-body">
                            <div class="example">
                                <div class="progress progress-md mb-3">
                                    <div class="progress-bar bg-pink w-10"></div>
                                </div>
                                <div class="progress progress-md mb-3">
                                    <div class="progress-bar bg-green w-20"></div>
                                </div>
                                <div class="progress progress-md mb-3">
                                    <div class="progress-bar bg-yellow w-40"></div>
                                </div>
                                <div class="progress progress-md mb-3">
                                    <div class="progress-bar bg-blue w-60"></div>
                                </div>
                                <div class="progress progress-md">
                                    <div class="progress-bar bg-orange w-80"></div>
                                </div>
                            </div>
                <!-- Prism Code-->
                <figure class="highlight clip-widget" id="progress2">
                    <pre><code class="language-markup"><script type="html-Yoha/script"><div class="progress progress-md mb-3">
    <div class="progress-bar bg-pink w-10"></div>
</div>
<div class="progress progress-md mb-3">
    <div class="progress-bar bg-green w-20"></div>
</div>
<div class="progress progress-md mb-3">
    <div class="progress-bar bg-yellow w-40"></div>
</div>
<div class="progress progress-md mb-3">
    <div class="progress-bar bg-blue w-60"></div>
</div>
<div class="progress progress-md">
    <div class="progress-bar bg-orange w-80"></div>
</div></script></code></pre>
                    <div class="clipboard-icon" data-clipboard-target="#progress2"><i class="fa fa-clipboard"></i></div>
                </figure>
                <!-- End Prism Code-->
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-xl-6 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Basic Progress with label</h3>
                        </div>
                        <div class="card-body">
                            <div class="example">
                                <div class="progress progress-md mb-3">
                                    <div class="progress-bar bg-default w-10">10%</div>
                                </div>
                                <div class="progress progress-md mb-3">
                                    <div class="progress-bar bg-secondary w-20"> 20%</div>
                                </div>
                                <div class="progress progress-md mb-3">
                                    <div class="progress-bar bg-success w-40"> 40%</div>
                                </div>
                                <div class="progress progress-md mb-3">
                                    <div class="progress-bar bg-warning  w-60"> 60%</div>
                                </div>
                                <div class="progress progress-md">
                                    <div class="progress-bar bg-info w-80"> 80%</div>
                                </div>
                            </div>
                <!-- Prism Code-->
                <figure class="highlight clip-widget" id="progress3">
                    <pre><code class="language-markup"><script type="html-Yoha/script"><div class="progress progress-md mb-3">
    <div class="progress-bar bg-default w-10">10%</div>
</div>
<div class="progress progress-md mb-3">
    <div class="progress-bar bg-secondary w-20"> 20%</div>
</div>
<div class="progress progress-md mb-3">
    <div class="progress-bar bg-success w-40"> 40%</div>
</div>
<div class="progress progress-md mb-3">
    <div class="progress-bar bg-warning  w-60"> 60%</div>
</div>
<div class="progress progress-md">
    <div class="progress-bar bg-info w-80"> 80%</div>
</div></script></code></pre>
                    <div class="clipboard-icon" data-clipboard-target="#progress3"><i class="fa fa-clipboard"></i></div>
                </figure>
                <!-- End Prism Code-->
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-xl-6 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Contextual Progress with label</h3>
                        </div>
                        <div class="card-body">
                            <div class="example">
                                <div class="progress progress-md mb-3">
                                    <div class="progress-bar bg-pink w-10"> 7%</div>
                                </div>
                                <div class="progress progress-md mb-3">
                                    <div class="progress-bar bg-green w-20">20%</div>
                                </div>
                                <div class="progress progress-md mb-3">
                                    <div class="progress-bar bg-yellow w-40">40%</div>
                                </div>
                                <div class="progress progress-md mb-3">
                                    <div class="progress-bar bg-blue w-60">60%</div>
                                </div>
                                <div class="progress progress-md ">
                                    <div class="progress-bar bg-orange w-80"> 80%</div>
                                </div>
                            </div>
                <!-- Prism Code-->
                <figure class="highlight clip-widget" id="progress4">
                    <pre><code class="language-markup"><script type="html-Yoha/script"><div class="progress progress-md mb-3">
    <div class="progress-bar bg-pink w-10"> 7%</div>
</div>
<div class="progress progress-md mb-3">
    <div class="progress-bar bg-green w-20">20%</div>
</div>
<div class="progress progress-md mb-3">
    <div class="progress-bar bg-yellow w-40" >40%</div>
</div>
<div class="progress progress-md mb-3">
    <div class="progress-bar bg-blue w-60">60%</div>
</div>
<div class="progress progress-md ">
    <div class="progress-bar bg-orange w-80"> 80%</div>
</div></script></code></pre>
                    <div class="clipboard-icon" data-clipboard-target="#progress4"><i class="fa fa-clipboard"></i></div>
                </figure>
                <!-- End Prism Code-->
                        </div>
                    </div>
                </div><!-- COL-END -->
            </div>
            <!-- ROW-1 OPEN -->

            <!-- ROW-2 OPEN -->
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Progress Sizes</h3>
                        </div>
                        <div class="card-body">
                            <div class="example">
                                <div class="progress progress-xs mb-3">
                                    <div class="progress-bar bg-blue w-30"></div>
                                </div>
                                <div class="progress progress-sm mb-3">
                                    <div class="progress-bar bg-blue w-60"></div>
                                </div>
                                <div class="progress progress-md mb-3">
                                    <div class="progress-bar bg-blue w-70"></div>
                                </div>
                                <div class="progress progress-lg">
                                    <div class="progress-bar bg-blue w-80"></div>
                                </div>
                            </div>
                <!-- Prism Code-->
                <figure class="highlight clip-widget" id="progress5">
                    <pre><code class="language-markup"><script type="html-Yoha/script"><div class="progress progress-xs mb-3">
    <div class="progress-bar bg-blue w-30"></div>
</div>
<div class="progress progress-sm mb-3">
    <div class="progress-bar bg-blue w-60"></div>
</div>
<div class="progress progress-md mb-3">
    <div class="progress-bar bg-blue w-70"></div>
</div>
<div class="progress progress-lg">
    <div class="progress-bar bg-blue w-80"></div>
</div></script></code></pre>
                    <div class="clipboard-icon" data-clipboard-target="#progress5"><i class="fa fa-clipboard"></i></div>
                </figure>
                <!-- End Prism Code-->
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Mixed color Progress with Sizes</h3>
                        </div>
                        <div class="card-body">
                            <div class="example">
                                <div class="progress progress-xs mb-3">
                                    <div class="progress-bar bg-orange w-5"></div>
                                    <div class="progress-bar bg-warning w-5"></div>
                                    <div class="progress-bar bg-info w-5"></div>
                                </div>
                                <div class="progress progress-sm mb-3">
                                    <div class="progress-bar bg-pink w-10"></div>
                                    <div class="progress-bar bg-yellow w-15"></div>
                                    <div class="progress-bar bg-teal w-15"></div>
                                </div>
                                <div class="progress progress-md mb-3">
                                    <div class="progress-bar bg-pink w-15"></div>
                                    <div class="progress-bar bg-blue w-20"></div>
                                    <div class="progress-bar bg-cyan w-30"></div>
                                </div>

                                <div class="progress progress-lg">
                                    <div class="progress-bar bg-green w-30"></div>
                                    <div class="progress-bar bg-pink w-20"></div>
                                    <div class="progress-bar bg-orange w-40"></div>
                                </div>
                            </div>
                <!-- Prism Code-->
                <figure class="highlight clip-widget" id="progress6">
                    <pre><code class="language-markup"><script type="html-Yoha/script"><div class="progress progress-xs mb-3">
    <div class="progress-bar bg-orange w-5"></div>
    <div class="progress-bar bg-warning w-5"></div>
    <div class="progress-bar bg-info w-5"></div>
</div>
<div class="progress progress-sm mb-3">
    <div class="progress-bar bg-pink w-10"></div>
    <div class="progress-bar bg-yellow w-15"></div>
    <div class="progress-bar bg-teal w-15"></div>
</div>
<div class="progress progress-md mb-3">
    <div class="progress-bar bg-pink w-15"></div>
    <div class="progress-bar bg-blue w-20"></div>
    <div class="progress-bar bg-cyan w-30"></div>
</div>

<div class="progress progress-lg">
    <div class="progress-bar bg-green w-30"></div>
    <div class="progress-bar bg-pink w-20"></div>
    <div class="progress-bar bg-orange w-40"></div>
</div></script></code></pre>
                    <div class="clipboard-icon" data-clipboard-target="#progress6"><i class="fa fa-clipboard"></i></div>
                </figure>
                <!-- End Prism Code-->
                        </div>
                    </div>
                </div><!-- COL-END -->
            </div>
            <!-- ROW-2 CLOSED -->

            <!-- ROW-3 OPEN -->
            <div class="row">
                <div class="col-xl-6 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Striped Progress</h3>
                        </div>
                        <div class="card-body">
                            <div class="example">
                                <div class="progress progress-md mb-3">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-pink w-10"></div>
                                </div>
                                <div class="progress progress-md mb-3">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-blue-1 w-20"></div>
                                </div>
                                <div class="progress progress-md mb-3">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-yellow-1 w-40">50%</div>
                                </div>
                                <div class="progress progress-md">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-green-1 w-60">40%</div>
                                </div>
                            </div>
                <!-- Prism Code-->
                <figure class="highlight clip-widget" id="progress7">
                    <pre><code class="language-markup"><script type="html-Yoha/script"><div class="progress progress-md mb-3">
    <div class="progress-bar progress-bar-striped progress-bar-animated bg-pink w-10"></div>
</div>
<div class="progress progress-md mb-3">
    <div class="progress-bar progress-bar-striped progress-bar-animated bg-blue-1 w-20"></div>
</div>
<div class="progress progress-md mb-3">
    <div class="progress-bar progress-bar-striped progress-bar-animated bg-yellow-1 w-40">50%</div>
</div>
<div class="progress progress-md">
    <div class="progress-bar progress-bar-striped progress-bar-animated bg-green-1 w-60">40%</div>
</div></script></code></pre>
                    <div class="clipboard-icon" data-clipboard-target="#progress7"><i class="fa fa-clipboard"></i></div>
                </figure>
                <!-- End Prism Code-->
                        </div>
                    </div>
                </div><!-- COL-END -->
                <div class="col-xl-6 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Animated Progress</h3>
                        </div>
                        <div class="card-body">
                            <div class="example">
                                <div class="progress progress-md mb-3">
                                    <div class="progress-bar progress-bar-indeterminate bg-pink"></div>
                                </div>
                                <div class="progress progress-md mb-3">
                                    <div class="progress-bar progress-bar-indeterminate bg-yellow-1"></div>
                                </div>
                                <div class="progress progress-md mb-3">
                                    <div class="progress-bar progress-bar-indeterminate bg-blue-1"></div>
                                </div>
                                <div class="progress progress-md">
                                    <div class="progress-bar progress-bar-indeterminate bg-purple-1"></div>
                                </div>
                            </div>
                <!-- Prism Code-->
                <figure class="highlight clip-widget" id="progress8">
                    <pre><code class="language-markup"><script type="html-Yoha/script"><div class="progress progress-md mb-3">
    <div class="progress-bar progress-bar-indeterminate bg-pink" ></div>
</div>
<div class="progress progress-md mb-3">
    <div class="progress-bar progress-bar-indeterminate bg-yellow-1"></div>
</div>
<div class="progress progress-md mb-3">
    <div class="progress-bar progress-bar-indeterminate bg-blue-1"></div>
</div>
<div class="progress progress-md">
    <div class="progress-bar progress-bar-indeterminate bg-purple-1"></div>
</div></script></code></pre>
                    <div class="clipboard-icon" data-clipboard-target="#progress8"><i class="fa fa-clipboard"></i></div>
                </figure>
                <!-- End Prism Code-->
                        </div>
                    </div>
                </div><!-- COL-END -->
            </div>
            <!-- ROW-3 CLOSED -->
@endsection
@section('js')
        <!-- INTERNAL  CLIPBOARD JS -->
        <script src="{{URL::asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/clipboard/clipboard.js')}}"></script>

        <!-- INTERNALPRISM JS -->
        <script src="{{URL::asset('assets/plugins/prism/prism.js')}}"></script>
@endsection
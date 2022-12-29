@extends('layouts.master')
@section('css')
        <!-- INTERNAL PRISM CSS -->
        <link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
@endsection
@section('page-header')
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <div>
                    <h1 class="page-title">Navigation</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Elements</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Navigation</li>
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
                            <h3 class="card-title">Basic Nav</h3>
                        </div>
                        <div class="card-body">
                            <div class="example">
                                <ul class="nav1 br-5">
                                    <li class="nav-item1">
                                        <a class="nav-link active" href="#">Active</a>
                                    </li>
                                    <li class="nav-item1">
                                        <a class="nav-link" href="#">Link</a>
                                    </li>
                                    <li class="nav-item1">
                                        <a class="nav-link" href="#">Link</a>
                                    </li>
                                    <li class="nav-item1">
                                        <a class="nav-link disabled" href="#">Disabled</a>
                                    </li>
                                </ul>
                            </div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="navg1">
    <pre><code class="language-markup"><script type="html-Yoha/script"><ul class="nav1">
    <li class="nav-item1">
        <a class="nav-link active" href="#">Active</a>
    </li>
    <li class="nav-item1">
        <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item1">
        <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item1">
        <a class="nav-link disabled" href="#">Disabled</a>
    </li>
</ul></script></code></pre>
    <div class="clipboard-icon" data-clipboard-target="#navg1"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
                    </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Nav Vertical</h3>
                        </div>
                        <div class="card-body">
                            <div class="example">
                                <ul class="nav1 flex-column br-5">
                                    <li class="nav-item1">
                                        <a class="nav-link active" href="#">Active</a>
                                    </li>
                                    <li class="nav-item1">
                                        <a class="nav-link" href="#">Link</a>
                                    </li>
                                    <li class="nav-item1">
                                        <a class="nav-link" href="#">Link</a>
                                    </li>
                                    <li class="nav-item1">
                                        <a class="nav-link disabled" href="#">Disabled</a>
                                    </li>
                                </ul>
                            </div>
                <!-- Prism Precode -->
                <figure class="highlight clip-widget" id="navg2">
                    <pre><code class="language-markup"><script type="html-Yoha/script"><ul class="nav1 flex-column">
    <li class="nav-item1">
        <a class="nav-link active" href="#">Active</a>
    </li>
    <li class="nav-item1">
        <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item1">
        <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item1">
        <a class="nav-link disabled" href="#">Disabled</a>
    </li>
</ul></script></code></pre>
                    <div class="clipboard-icon" data-clipboard-target="#navg2"><i class="fa fa-clipboard"></i></div>
                </figure>
                <!-- End Prism Precode -->
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Dropdown Nav</h3>
                        </div>
                        <div class="card-body">
                            <div class="example">
                                <nav class="navbar navbar-expand-lg navbar-light bg-light br-5">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Link</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Link</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Dropdown link
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link disabled" href="#">Disabled</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                <!-- Prism Precode -->
                <figure class="highlight clip-widget" id="navg3">
                    <pre><code class="language-markup"><script type="html-Yoha/script"><nav class="navbar navbar-expand-lg navbar-light bg-light br-5">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link active" href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown link
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
        </li>
    </ul>
</nav></script></code></pre>
                    <div class="clipboard-icon" data-clipboard-target="#navg3"><i class="fa fa-clipboard"></i></div>
                </figure>
                <!-- End Prism Precode -->
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Nav Tabs</h3>
                        </div>
                        <div class="card-body">
                            <div class="example">
                                <ul class="nav nav-pills flex-column flex-sm-row" id="tabs-text" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link border pt-3 pb-3 pl-5 pr-5 m-2" id="tabs-text-1-tab" data-toggle="tab" href="#tabs-text-1" role="tab" aria-selected="false">UI/UX Design</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link border pt-3 pb-3 pl-5 pr-5 m-2" id="tabs-text-2-tab" data-toggle="tab" href="#tabs-text-2" role="tab" aria-selected="false">Programming</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link border active show pt-3 pb-3 pl-5 pr-5 m-2" id="tabs-text-3-tab" data-toggle="tab" href="#tabs-text-3" role="tab" aria-selected="true">Graphic</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link border pt-3 pb-3 pl-5 pr-5 m-2" id="tabs-text-4-tab" data-toggle="tab" href="#tabs-text-4" role="tab" aria-selected="false">Developing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link border pt-3 pb-3 pl-5 pr-5 m-2" id="tabs-text-5-tab" data-toggle="tab" href="#tabs-text-5" role="tab" aria-selected="false">Photoshop</a>
                                    </li>
                                </ul>
                            </div>
                <!-- Prism Precode -->
                <figure class="highlight clip-widget" id="navg4">
                    <pre><code class="language-markup"><script type="html-Yoha/script"><ul class="nav nav-pills flex-column flex-sm-row" id="tabs-text" role="tablist">
    <li class="nav-item">
        <a class="nav-link border pt-3 pb-3 pl-5 pr-5 m-2" id="tabs-text-1-tab" data-toggle="tab" href="#tabs-text-1" role="tab"  aria-selected="false">UI/UX Design</a>
    </li>
    <li class="nav-item">
        <a class="nav-link border pt-3 pb-3 pl-5 pr-5 m-2" id="tabs-text-2-tab" data-toggle="tab" href="#tabs-text-2" role="tab" aria-selected="false">Programming</a>
    </li>
    <li class="nav-item">
        <a class="nav-link border active show pt-3 pb-3 pl-5 pr-5 m-2" id="tabs-text-3-tab" data-toggle="tab" href="#tabs-text-3" role="tab"  aria-selected="true">Graphic</a>
    </li>
    <li class="nav-item">
        <a class="nav-link border pt-3 pb-3 pl-5 pr-5 m-2" id="tabs-text-4-tab" data-toggle="tab" href="#tabs-text-4" role="tab" aria-selected="false">Developing</a>
    </li>
    <li class="nav-item">
        <a class="nav-link border pt-3 pb-3 pl-5 pr-5 m-2" id="tabs-text-5-tab" data-toggle="tab" href="#tabs-text-5" role="tab" aria-selected="false">Photoshop</a>
    </li>
</ul></script></code></pre>
                    <div class="clipboard-icon" data-clipboard-target="#navg4"><i class="fa fa-clipboard"></i></div>
                </figure>
                <!-- End Prism Precode -->
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Icon With Title</h3>
                        </div>
                        <div class="card-body">
                            <div class="example">
                                <ul class="nav nav-pills nav-pills-circle" id="tabs_2" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link border pt-3 pb-3 pl-5 pr-5 m-2" id="tab1" data-toggle="tab" href="#tabs_2_1" role="tab" aria-selected="false">
                                            <span class="nav-link-icon d-block"><i class="fe fe-home"></i> Home</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link border pt-3 pb-3 pl-5 pr-5 m-2" id="tab2" data-toggle="tab" href="#tabs_2_2" role="tab" aria-selected="false">
                                            <span class="nav-link-icon d-block"><i class="fe fe-unlock"></i> Lock </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link pt-3 pb-3 pl-5 pr-5 border active show m-2" id="tab3" data-toggle="tab" href="#tabs_2_3" role="tab" aria-selected="true">
                                            <span class="nav-link-icon d-block"><i class="fe fe-play"></i> Videos</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link border pt-3 pb-3 pl-5 pr-5 m-2" id="tab4" data-toggle="tab" href="#tabs_2_3" role="tab" aria-selected="false">
                                            <span class="nav-link-icon d-block"><i class="fe fe-layers"></i> Severs</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link border pt-3 pb-3 pl-5 pr-5 m-2" id="tab5" data-toggle="tab" href="#tabs_2_4" role="tab" aria-selected="false">
                                            <span class="nav-link-icon d-block"><i class="fe fe-image"></i> Gallery </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                <!-- Prism Precode -->
                <figure class="highlight clip-widget" id="navg5">
                    <pre><code class="language-markup"><script type="html-Yoha/script"><ul class="nav nav-pills nav-pills-circle" id="tabs_2" role="tablist">
    <li class="nav-item">
        <a class="nav-link border pt-3 pb-3 pl-5 pr-5 m-2" id="tab1" data-toggle="tab" href="#tabs_2_1" role="tab" aria-selected="false">
            <span class="nav-link-icon d-block"><i class="fe fe-home"></i> Home</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link border pt-3 pb-3 pl-5 pr-5 m-2" id="tab2" data-toggle="tab" href="#tabs_2_2" role="tab"  aria-selected="false">
            <span class="nav-link-icon d-block"><i class="fe fe-unlock"></i> Lock </span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link pt-3 pb-3 pl-5 pr-5 border active show m-2" id="tab3" data-toggle="tab" href="#tabs_2_3" role="tab" aria-selected="true">
            <span class="nav-link-icon d-block"><i class="fe fe-play"></i> Videos</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link border pt-3 pb-3 pl-5 pr-5 m-2" id="tab4" data-toggle="tab" href="#tabs_2_3" role="tab" aria-selected="false">
            <span class="nav-link-icon d-block"><i class="fe fe-layers"></i> Severs</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link border pt-3 pb-3 pl-5 pr-5 m-2" id="tab5" data-toggle="tab" href="#tabs_2_4" role="tab" aria-selected="false">
            <span class="nav-link-icon d-block"><i class="fe fe-image"></i> Gallery </span>
        </a>
    </li>
</ul></script></code></pre>
                    <div class="clipboard-icon" data-clipboard-target="#navg5"><i class="fa fa-clipboard"></i></div>
                </figure>
                <!-- End Prism Precode -->
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Icon Nav Bar</h3>
                        </div>
                        <div class="card-body">
                            <div class="example">
                                <ul class="nav nav-pills nav-pills-circle" id="tabs_3" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link border w-8 h-8 text-center br-100 m-2" id="tab21" data-toggle="tab" href="#tabs_2_1" role="tab" aria-controls="tab1" aria-selected="false">
                                            <span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-home"></i></span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link border w-8 h-8 br-100 m-2" id="tab22" data-toggle="tab" href="#tabs_2_2" role="tab" aria-controls="tab2" aria-selected="false">
                                            <span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-unlock"></i></span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link border active show w-8 h-8 br-100 m-2" id="tab23" data-toggle="tab" href="#tabs_2_3" role="tab" aria-controls="tab3" aria-selected="true">
                                            <span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-play"></i></span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link border w-8 h-8 br-100 m-2" id="tab24" data-toggle="tab" href="#tabs_2_3" role="tab" aria-controls="tab4" aria-selected="false">
                                            <span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-layers"></i></span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link border  w-8 h-8 br-100 m-2" id="tab25" data-toggle="tab" href="#tabs_2_4" role="tab" aria-controls="tab5" aria-selected="false">
                                            <span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-image"></i> </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
            <!-- Prism Precode -->
            <figure class="highlight clip-widget" id="navg6">
                <pre><code class="language-markup"><script type="html-Yoha/script"><ul class="nav nav-pills nav-pills-circle" id="tabs_3" role="tablist">
<li class="nav-item">
    <a class="nav-link border w-8 h-8 text-center br-100 m-2" id="tab21" data-toggle="tab" href="#tabs_2_1" role="tab" aria-controls="tab1" aria-selected="false">
        <span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-home"></i></span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link border w-8 h-8 br-100 m-2" id="tab22" data-toggle="tab" href="#tabs_2_2" role="tab" aria-controls="tab2" aria-selected="false">
        <span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-unlock"></i></span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link border active show w-8 h-8 br-100 m-2" id="tab23" data-toggle="tab" href="#tabs_2_3" role="tab" aria-controls="tab3" aria-selected="true">
        <span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-play"></i></span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link border w-8 h-8 br-100 m-2" id="tab24" data-toggle="tab" href="#tabs_2_3" role="tab" aria-controls="tab4" aria-selected="false">
        <span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-layers"></i></span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link border  w-8 h-8 br-100 m-2" id="tab25" data-toggle="tab" href="#tabs_2_4" role="tab" aria-controls="tab5" aria-selected="false">
        <span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-image"></i> </span>
    </a>
</li>
</ul></script></code></pre>
                <div class="clipboard-icon" data-clipboard-target="#navg6"><i class="fa fa-clipboard"></i></div>
            </figure>
            <!--End Prism Precode -->
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Color Nav</h3>
                        </div>
                        <div class="card-body">
                            <div class="example">
                                <ul class="nav1 bg-primary br-5">
                                    <li class="nav-item1">
                                        <a class="nav-link text-white active" href="#">Active</a>
                                    </li>
                                    <li class="nav-item1">
                                        <a class="nav-link text-white" href="#">Link</a>
                                    </li>
                                    <li class="nav-item1">
                                        <a class="nav-link text-white" href="#">Link</a>
                                    </li>
                                    <li class="nav-item1">
                                        <a class="nav-link disabled text-white-50" href="#">Disabled</a>
                                    </li>
                                </ul>
                                <ul class="nav1 bg-info mt-4 br-5">
                                    <li class="nav-item1">
                                        <a class="nav-link text-white active" href="#">Active</a>
                                    </li>
                                    <li class="nav-item1">
                                        <a class="nav-link text-white" href="#">Link</a>
                                    </li>
                                    <li class="nav-item1">
                                        <a class="nav-link text-white" href="#">Link</a>
                                    </li>
                                    <li class="nav-item1">
                                        <a class="nav-link disabled text-white-50" href="#">Disabled</a>
                                    </li>
                                </ul>
                                <ul class="nav1 bg-success mt-4 br-5">
                                    <li class="nav-item1">
                                        <a class="nav-link text-white active" href="#">Active</a>
                                    </li>
                                    <li class="nav-item1">
                                        <a class="nav-link text-white" href="#">Link</a>
                                    </li>
                                    <li class="nav-item1">
                                        <a class="nav-link text-white" href="#">Link</a>
                                    </li>
                                    <li class="nav-item1">
                                        <a class="nav-link disabled text-white-50" href="#">Disabled</a>
                                    </li>
                                </ul>
                                <ul class="nav1 bg-danger mt-4 br-5">
                                    <li class="nav-item1">
                                        <a class="nav-link text-white active" href="#">Active</a>
                                    </li>
                                    <li class="nav-item1">
                                        <a class="nav-link text-white" href="#">Link</a>
                                    </li>
                                    <li class="nav-item1">
                                        <a class="nav-link text-white" href="#">Link</a>
                                    </li>
                                    <li class="nav-item1">
                                        <a class="nav-link disabled text-white-50" href="#">Disabled</a>
                                    </li>
                                </ul>
                                <ul class="nav1 bg-secondary mt-4 br-5">
                                    <li class="nav-item1">
                                        <a class="nav-link text-white active" href="#">Active</a>
                                    </li>
                                    <li class="nav-item1">
                                        <a class="nav-link text-white" href="#">Link</a>
                                    </li>
                                    <li class="nav-item1">
                                        <a class="nav-link text-white" href="#">Link</a>
                                    </li>
                                    <li class="nav-item1">
                                        <a class="nav-link disabled text-white-50" href="#">Disabled</a>
                                    </li>
                                </ul>
                                <ul class="nav1 bg-yellow mt-4 br-5">
                                    <li class="nav-item1">
                                        <a class="nav-link text-white active" href="#">Active</a>
                                    </li>
                                    <li class="nav-item1">
                                        <a class="nav-link text-white" href="#">Link</a>
                                    </li>
                                    <li class="nav-item1">
                                        <a class="nav-link text-white" href="#">Link</a>
                                    </li>
                                    <li class="nav-item1">
                                        <a class="nav-link disabled text-white-50" href="#">Disabled</a>
                                    </li>
                                </ul>
                            </div>
                <!-- Prism Precode -->
                <figure class="highlight clip-widget" id="navg7">
                    <pre><code class="language-markup"><script type="html-Yoha/script"><ul class="nav1 bg-primary br-5">
    <li class="nav-item1">
        <a class="nav-link text-white active" href="#">Active</a>
    </li>
    <li class="nav-item1">
        <a class="nav-link text-white" href="#">Link</a>
    </li>
    <li class="nav-item1">
        <a class="nav-link text-white" href="#">Link</a>
    </li>
    <li class="nav-item1">
        <a class="nav-link disabled text-white-50" href="#">Disabled</a>
    </li>
</ul>
<ul class="nav1 bg-info mt-4 br-5">
    <li class="nav-item1">
        <a class="nav-link text-white active" href="#">Active</a>
    </li>
    <li class="nav-item1">
        <a class="nav-link text-white" href="#">Link</a>
    </li>
    <li class="nav-item1">
        <a class="nav-link text-white" href="#">Link</a>
    </li>
    <li class="nav-item1">
        <a class="nav-link disabled text-white-50" href="#">Disabled</a>
    </li>
</ul>
<ul class="nav1 bg-success mt-4 br-5">
    <li class="nav-item1">
        <a class="nav-link text-white active" href="#">Active</a>
    </li>
    <li class="nav-item1">
        <a class="nav-link text-white" href="#">Link</a>
    </li>
    <li class="nav-item1">
        <a class="nav-link text-white" href="#">Link</a>
    </li>
    <li class="nav-item1">
        <a class="nav-link disabled text-white-50" href="#">Disabled</a>
    </li>
</ul>
<ul class="nav1 bg-danger mt-4 br-5">
    <li class="nav-item1">
        <a class="nav-link text-white active" href="#">Active</a>
    </li>
    <li class="nav-item1">
        <a class="nav-link text-white" href="#">Link</a>
    </li>
    <li class="nav-item1">
        <a class="nav-link text-white" href="#">Link</a>
    </li>
    <li class="nav-item1">
        <a class="nav-link disabled text-white-50" href="#">Disabled</a>
    </li>
</ul>
<ul class="nav1 bg-secondary mt-4 br-5">
    <li class="nav-item1">
        <a class="nav-link text-white active" href="#">Active</a>
    </li>
    <li class="nav-item1">
        <a class="nav-link text-white" href="#">Link</a>
    </li>
    <li class="nav-item1">
        <a class="nav-link text-white" href="#">Link</a>
    </li>
    <li class="nav-item1">
        <a class="nav-link disabled text-white-50" href="#">Disabled</a>
    </li>
</ul>
<ul class="nav1 bg-yellow mt-4 br-5">
    <li class="nav-item1">
        <a class="nav-link text-white active" href="#">Active</a>
    </li>
    <li class="nav-item1">
        <a class="nav-link text-white" href="#">Link</a>
    </li>
    <li class="nav-item1">
        <a class="nav-link text-white" href="#">Link</a>
    </li>
    <li class="nav-item1">
        <a class="nav-link disabled text-white-50" href="#">Disabled</a>
    </li>
</ul></script></code></pre>
                    <div class="clipboard-icon" data-clipboard-target="#navg7"><i class="fa fa-clipboard"></i></div>
                </figure>
                <!-- End Prism Precode -->
                        </div>
                    </div>
                </div><!-- COL-END -->
            </div>
            <!-- ROW CLOSED-->
@endsection
@section('js')
        <!-- INTERNAL  CLIPBOARD JS -->
        <script src="{{URL::asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/clipboard/clipboard.js')}}"></script>

        <!-- INTERNALPRISM JS -->
        <script src="{{URL::asset('assets/plugins/prism/prism.js')}}"></script>
@endsection
@extends('layouts.master')
@section('css')
		<!-- INTERNAL PRISM CSS -->
		<link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
@endsection
@section('page-header')
			<!-- PAGE-HEADER -->
			<div class="page-header">
				<div>
					<h1 class="page-title">Avatar-Radius</h1>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Elements</a></li>
						<li class="breadcrumb-item active" aria-current="page">Avatar-Radius</li>
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
			<div class="row row-deck">
				<div class="col-md-12 col-lg-6">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Simple avatar</h3>
						</div>
						<div class="card-body">
							<div class="text-wrap">
								<div class="example">
									<div class="avatar-list">
										<span class="avatar bradius cover-image" data-image-src="{{URL::asset('assets/images/users/1.jpg')}}"></span>
										<span class="avatar bradius cover-image" data-image-src="{{URL::asset('assets/images/users/2.jpg')}}"></span>
										<span class="avatar bradius cover-image" data-image-src="{{URL::asset('assets/images/users/1.jpg')}}"></span>
										<span class="avatar bradius cover-image" data-image-src="{{URL::asset('assets/images/users/2.jpg')}}"></span>
										<span class="avatar bradius cover-image" data-image-src="{{URL::asset('assets/images/users/3.jpg')}}"></span>
									</div>
								</div>
								<!-- Prism Precode -->
								<figure class="highlight clip-widget" id="avatarradius1">
									<pre><code class="language-markup"><script type="html-Yoha/script"><div class="avatar-list">
	<span class="avatar bradius cover-image" data-image-src="{{URL::asset('assets/images/users/1.jpg')}}"></span>
	<span class="avatar bradius cover-image" data-image-src= "{{URL::asset('assets/images/users/2.jpg')}}"></span>
	<span class="avatar bradius cover-image" data-image-src= "{{URL::asset('assets/images/users/1.jpg')}}"></span>
	<span class="avatar bradius cover-image" data-image-src= "{{URL::asset('assets/images/users/2.jpg')}}"></span>
	<span class="avatar bradius cover-image" data-image-src= "{{URL::asset('assets/images/users/3.jpg')}}"></span>
</div></script></code></pre>
									<div class="clipboard-icon" data-clipboard-target="#avatarradius1"><i class="fa fa-clipboard"></i></div>
								</figure>
								<!-- End Prism Precode -->
							</div>
						</div>
					</div>
				</div><!-- COL END -->
				<div class="col-md-12 col-lg-6">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Avatar size</h3>
						</div>
						<div class="card-body">
							<div class="text-wrap">
								<div class="example">
									<div class="avatar-list">
										<span class="avatar avatar-sm bradius cover-image" data-image-src="{{URL::asset('assets/images/users/4.jpg')}}"></span>
										<span class="avatar bradius cover-image" data-image-src="{{URL::asset('assets/images/users/3.jpg')}}"></span>
										<span class="avatar avatar-md bradius cover-image" data-image-src="{{URL::asset('assets/images/users/5.jpg')}}"></span>
										<span class="avatar avatar-lg bradius cover-image" data-image-src="{{URL::asset('assets/images/users/6.jpg')}}"></span>
										<span class="avatar avatar-xl bradius cover-image" data-image-src="{{URL::asset('assets/images/users/4.jpg')}}"></span>
										<span class="avatar avatar-xxl bradius cover-image" data-image-src="{{URL::asset('assets/images/users/7.jpg')}}"></span>
									</div>
								</div>
								<!-- Prism Precode -->
								<figure class="highlight clip-widget" id="avatarradius2">
									<pre><code class="language-markup"><script type="html-Yoha/script"><div class="avatar-list">
	<span class="avatar avatar-sm bradius cover-image" data-image-src= "{{URL::asset('assets/images/users/4.jpg')}}"></span>
	<span class="avatar bradius cover-image" data-image-src= "{{URL::asset('assets/images/users/3.jpg')}}"></span>
	<span class="avatar avatar-md bradius cover-image" data-image-src= "{{URL::asset('assets/images/users/5.jpg')}}"></span>
	<span class="avatar avatar-lg bradius cover-image" data-image-src= "{{URL::asset('assets/images/users/6.jpg')}}"></span>
	<span class="avatar avatar-xl bradius cover-image" data-image-src= "{{URL::asset('assets/images/users/4.jpg')}}"></span>
	<span class="avatar avatar-xxl bradius cover-image" data-image-src= "{{URL::asset('assets/images/users/7.jpg')}}"></span>
</div></script></code></pre>
									<div class="clipboard-icon" data-clipboard-target="#avatarradius2"><i class="fa fa-clipboard"></i></div>
								</figure>
								<!-- End Prism Precode -->
							</div>
						</div>
					</div>
				</div><!-- COL END -->
			</div>
			<!-- ROW-1 CLOSED -->

			<!-- ROW-2 OPEN -->
			<div class="row">
				<div class="col-md-12 col-lg-6">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Avatar status</h3>
						</div>
						<div class="card-body">
							<div class="text-wrap">
								<div class="example">
									<div class="avatar-list">
										<span class="avatar bradius cover-image" data-image-src="{{URL::asset('assets/images/users/8.jpg')}}"></span>
										<span class="avatar bradius cover-image" data-image-src="{{URL::asset('assets/images/users/5.jpg')}}">
											<span class="avatar-status bg-secondary"></span>
										</span>
										<span class="avatar bradius cover-image" data-image-src="{{URL::asset('assets/images/users/9.jpg')}}">
											<span class="avatar-status bg-red"></span>
										</span>
										<span class="avatar bradius cover-image" data-image-src="{{URL::asset('assets/images/users/6.jpg')}}">
											<span class="avatar-status bg-green"></span>
										</span>
										<span class="avatar bradius cover-image" data-image-src="{{URL::asset('assets/images/users/7.jpg')}}">
											<span class="avatar-status bg-yellow"></span>
										</span>
									</div>
								</div>
								<!-- Prism Precode -->
								<figure class="highlight clip-widget" id="avatarradius3">
									<pre><code class="language-markup"><script type="html-Yoha/script"><div class="avatar-list">
	<span class="avatar bradius cover-image" data-image-src= "{{URL::asset('assets/images/users/8.jpg')}}"></span>
	<span class="avatar bradius cover-image" data-image-src= "{{URL::asset('assets/images/users/5.jpg')}}">
		<span class="avatar-status bg-secondary"></span>
	</span>
	<span class="avatar bradius cover-image" data-image-src= "{{URL::asset('assets/images/users/9.jpg')}}">
		<span class="avatar-status bg-red"></span>
	</span>
	<span class="avatar bradius cover-image" data-image-src= "{{URL::asset('assets/images/users/6.jpg')}}">
		<span class="avatar-status bg-green"></span>
	</span>
	<span class="avatar bradius cover-image" data-image-src= "{{URL::asset('assets/images/users/7.jpg')}}">
		<span class="avatar-status bg-yellow"></span>
	</span>
</div></script></code></pre>
									<div class="clipboard-icon" data-clipboard-target="#avatarradius3"><i class="fa fa-clipboard"></i></div>
								</figure>
								<!-- End Prism Precode -->
							</div>
						</div>
					</div>
				</div><!-- COL END -->
				<div class="col-md-12 col-lg-6">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Avatars list</h3>
						</div>
						<div class="card-body">
							<div class="text-wrap ">
								<div class="example">
									<div class="avatar-list avatar-list-stacked">
										<span class="avatar bradius cover-image" data-image-src="{{URL::asset('assets/images/users/10.jpg')}}"></span>
										<span class="avatar bradius cover-image" data-image-src="{{URL::asset('assets/images/users/8.jpg')}}"></span>
										<span class="avatar bradius cover-image" data-image-src="{{URL::asset('assets/images/users/9.jpg')}}"></span>
										<span class="avatar bradius cover-image" data-image-src="{{URL::asset('assets/images/users/10.jpg')}}"></span>
										<span class="avatar bradius cover-image" data-image-src="{{URL::asset('assets/images/users/11.jpg')}}"></span>
										<span class="avatar bradius">+8</span>
									</div>
								</div>
								<!-- Prism Precode -->
								<figure class="highlight clip-widget" id="avatarradius4">
									<pre><code class="language-markup"><script type="html-Yoha/script"><div class="avatar-list avatar-list-stacked">
	<span class="avatar bradius cover-image" data-image-src= "{{URL::asset('assets/images/users/10.jpg')}}"></span>
	<span class="avatar bradius cover-image" data-image-src= "{{URL::asset('assets/images/users/8.jpg')}}"></span>
	<span class="avatar bradius cover-image" data-image-src= "{{URL::asset('assets/images/users/9.jpg')}}"></span>
	<span class="avatar bradius cover-image" data-image-src= "{{URL::asset('assets/images/users/10.jpg')}}"></span>
	<span class="avatar bradius cover-image" data-image-src= "{{URL::asset('assets/images/users/11.jpg')}}"></span>
	<span class="avatar bradius">+8</span>
</div></script></code></pre>
									<div class="clipboard-icon" data-clipboard-target="#avatarradius4"><i class="fa fa-clipboard"></i></div>
								</figure>
								<!-- End Prism Precode -->
							</div>
						</div>
					</div>
				</div><!-- COL END -->
			</div><!-- COL END -->
			<!-- ROW-2 CLOSED -->
@endsection
@section('js')
		<!-- INTERNAL  CLIPBOARD JS -->
		<script src="{{URL::asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/clipboard/clipboard.js')}}"></script>

		<!-- INTERNALPRISM JS -->
		<script src="{{URL::asset('assets/plugins/prism/prism.js')}}"></script>
@endsection
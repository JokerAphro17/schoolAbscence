@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
			<!-- PAGE-HEADER -->
			<div class="page-header">
				<div>
					<h1 class="page-title">View-Mail</h1>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Mail</a></li>
						<li class="breadcrumb-item active" aria-current="page">View-Mail</li>
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
				<div class="col-lg-3 col-md-12 col-sm-12">
					<div class="card">
						<div class="list-group list-group-transparent mb-0 mail-inbox">
							<div class="mt-4 mb-4 ml-4 mr-4 text-center">
								<a href="{{url('/' . $page='email-compose')}}" class="btn btn-primary btn-lg btn-block">Compose</a>
							</div>
							<a href="#" class="list-group-item list-group-item-action d-flex align-items-center active">
								<span class="icon mr-3"><i class="bx bxs-inbox"></i></span>Inbox <span class="ml-auto badge badge-success">14</span>
							</a>
							<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
								<span class="icon mr-3"><i class="bx bxs-paper-plane"></i></span>Sent Mail
							</a>
							<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
								<span class="icon mr-3"><i class="bx bxs-error-circle"></i></span>Important <span class="ml-auto badge badge-danger">3</span>
							</a>
							<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
								<span class="icon mr-3"><i class="bx bxs-star"></i></span>Starred
							</a>
							<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
								<span class="icon mr-3"><i class="bx bxs-file-blank"></i></span>Drafts
							</a>
							<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
								<span class="icon mr-3"><i class="bx bxs-purchase-tag"></i></span>Tags
							</a>
							<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
								<span class="icon mr-3"><i class="bx bxs-trash"></i></span>Trash
							</a>
						</div>
					</div>
					<div class="card">
						<div class="online-status d-flex justify-content-between align-items-center mt-4 mb-2 ml-2">
							<h5 class="card-title chat ml-3">Chats</h5>
							<div class="status offline online">
								<h6 class="online text-right">online</h6>
							</div>
						</div>
						<ul class="mail-chats p-0">
							<li class="chat-persons p-3">
								<a href="#">
									<span class="pro-pic"><img src="{{URL::asset('assets/images/users/4.jpg')}}" alt=""></span>
									<div class="user">
										<p class="u-name">David</p>
										<p class="u-designation">Python Developer</p>
									</div>
								</a>
							</li>
							<!-- LIST PERSON -->
							<li class="chat-persons p-3 border-top">
								<a href="#">
									<span class="pro-pic"><img src="{{URL::asset('assets/images/users/1.jpg')}}" alt=""></span>
									<div class="user">
										<p class="u-name">Stella Johnson</p>
										<p class="u-designation">SEO Expert</p>
									</div>
								</a>
							</li>
							<!-- LIST PERSON -->
							<li class="chat-persons p-3 border-top">
								<a href="#">
									<span class="pro-pic"><img src="{{URL::asset('assets/images/users/15.jpg')}}" alt=""></span>
									<div class="user">
										<p class="u-name">Marina Michel</p>
										<p class="u-designation">Business Development</p>
									</div>
								</a>
							</li>
							<!-- LIST PERSON -->
							<li class="chat-persons p-3 border-top">
								<a href="#">
									<span class="pro-pic"><img src="{{URL::asset('assets/images/users/2.jpg')}}" alt=""></span>
									<div class="user">
										<p class="u-name">Edward Fletcher</p>
										<p class="u-designation">UI/UX Designer</p>
									</div>
								</a>
							</li>
							<!-- LIST PERSON -->
						</ul>
						<!-- CHAT -->
					</div>
				</div>
				<div class="col-lg-9 col-md-12 col-sm-12">
					<div class="card">
						<div class="card-body">
							<div class="media mt-0">
								<div class="mr-3">
									<img alt="avatar" class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/10.jpg')}}">
								</div>
								<div class="media-body tx-inverse">
									<div class="float-right d-none d-md-flex fs-15 mt-4">
										<small class="mr-2"><i class="fe fe-paperclip mr-2"></i>May 2, 2020 12:45 pm</small>
										<small class="mr-2"><i class="fe fe-star" data-toggle="tooltip" title="" data-original-title="Rated"></i></small>
										<small class="mr-2"><i class="fa fa-reply" data-toggle="tooltip" title="" data-original-title="Reply"></i></small>
										<div class="mr-2">
											<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
												<i class="fe fe-more-horizontal text-dark" data-toggle="tooltip" title="" data-original-title="View more"></i></a>
											<div class="dropdown-menu dropdown-menu-right shadow">
												<a class="dropdown-item" href="#">Reply</a>
												<a class="dropdown-item" href="#">Report Spam</a>
												<a class="dropdown-item" href="#">Delete</a>
												<a class="dropdown-item" href="#">Show Original</a>
												<a class="dropdown-item" href="#">Print</a>
												<a class="dropdown-item" href="#">Filter</a>
											</div>
										</div>
									</div>
									<div class="media-title font-weight-semiblod mt-2">Jacob Fisher
										<p class="mb-0 text-muted">jacob@gmail.com </p>
										<small class="mr-2 d-md-none">May 2, 2020 12:45 pm</small>
										<small class="mr-2 d-md-none"><i class="fe fe-star" data-toggle="tooltip" title="" data-original-title="Rated"></i></small>
										<small class="mr-2 d-md-none"><i class="fa fa-reply" data-toggle="tooltip" title="" data-original-title="Reply"></i></small>
									</div>
								</div>
							</div>
						</div>
						<div class="card-body">
							<div class="eamil-body">
								<h6 class="mb-3">Hi Sir/Madam</h6>
								<p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
								<div class="email-attch mb-5 mt-5">
									<div class="float-right">
										<a href="#"><i class="fa fa-download text-dark" data-toggle="tooltip" title="" data-original-title="Download"></i></a>
									</div>
									<p>3 Attachments<a href="#"> View All Images</a></p>
									<div class="emai-img">
										<div class="row">
											<div class="col-3">
												<a href="#"><img class="w-100" src="{{URL::asset('assets/images/media/3.jpg')}}" alt="Generic placeholder image"></a>
												<p class="mb-3 mb-lg-0 mt-1">img_01.jpg <small class="text-muted">12kb</small></p>
											</div>
											<div class="col-3">
												<a href="#"><img class="w-100" src="{{URL::asset('assets/images/media/18.jpg')}}" alt="Generic placeholder image"></a>
												<p class="mb-3 mb-lg-0 mt-1">img_02.jpg <small class="text-muted">18kb</small></p>
											</div>
											<div class="col-3">
												<a href="#"><img class="w-100" src="{{URL::asset('assets/images/media/26.jpg')}}" alt="Generic placeholder image"></a>
												<p class="mb-3 mb-lg-0 mt-1">img_03.jpg <small class="text-muted">21kb</small></p>
											</div>
										</div>
									</div>
								</div>
								<p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
								<p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
								<p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
								<p> Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it?</p>
								<p class="mb-0">Thanking you Sir/Madam</p>
							</div>
						</div>
						<div class="card-footer">
							<div class="btn-list text-right">
								<a class="btn btn-primary mt-1 mb-1" href="#"><i class="fa fa-reply"></i> Reply</a>
								<a class="btn btn-secondary mt-1 mb-1" href="#"><i class="fa fa-share"></i> Forward</a>
							</div>
						</div>
					</div>
				</div><!-- COL-END -->
			</div>
			<!-- ROW-1 CLOSED -->
@endsection
@section('js')
@endsection
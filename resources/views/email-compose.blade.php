@extends('layouts.master')
@section('css')
		<!-- INTERNAL  WYSIWYG EDITOR CSS -->
		<link href="{{URL::asset('assets/plugins/wysiwyag/richtext.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
				<!-- PAGE-HEADER -->
				<div class="page-header">
					<div>
						<h1 class="page-title">Email-Compose</h1>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Mail</a></li>
							<li class="breadcrumb-item active" aria-current="page">Email-Compose</li>
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
							<div class="inbox card-body">
								<form>
									<div class="form-row mb-4">
										<label class="col-3 col-sm-2 col-md-3 col-lg-2 col-form-label">To:</label>
										<div class="col-9 col-sm-10 col-md-9 col-lg-10">
											<input type="email" class="form-control" id="to2" placeholder="Type email">
										</div>
									</div>
									<div class="form-row mb-4">
										<label class="col-3 col-sm-2 col-md-3 col-lg-2 col-form-label">CC:</label>
										<div class="col-9 col-sm-10 col-md-9 col-lg-10">
											<input type="email" class="form-control" id="cc" placeholder="Type email">
										</div>
									</div>
									<div class="form-row mb-4">
										<label class="col-3 col-sm-2 col-md-3 col-lg-2 col-form-label">Subject</label>
										<div class="col-9 col-sm-10 col-md-9 col-lg-10">
											<input type="email" class="form-control" id="subject" placeholder="Type Subject">
										</div>
									</div>
								</form>
								<div class="row">
									<div class="col-sm-10 ml-auto col-md-12 col-lg-10">
										<textarea class="content" name="example"></textarea>
										<div class="mt-3">
											<div class="row">
												<div class="col-lg-6 col-md-6 col-sm-12 mb-0 ">
													<span>
														<button type="button" class="btn btn-icon btn-primary mt-2"><i class="fa fa-paperclip text-white"></i></button>
														<button type="button" class="btn btn-icon btn-secondary mt-2"><i class="fa fa-picture-o text-white"></i></button>
														<button type="button" class="btn btn-icon btn-info mt-2"><i class="fa fa-link text-white"></i></button>
														<button type="button" class="btn btn-icon btn-success mt-2"><i class="fa fa-smile-o text-white"></i></button>
														<button type="button" class="btn btn-icon btn-warning mt-2"><i class="fa fa-trash-o text-white"></i></button>
														<button type="button" class="btn btn-icon btn-teal mt-2"><i class="fa fa-file text-white"></i></button>
													</span>
												</div>
												<div class="col-lg-6 mb-0 col-md-6 col-sm-12 text-right">
													<button type="button" class="btn btn-secondary btn-space mt-2 mr-2">Cancel</button>
													<button type="submit" class="btn btn-primary btn-space mt-2">Send message</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div><!-- COL-END -->
				</div>
				<!-- ROW-1 CLOSED -->
@endsection
@section('js')
		<!-- INTERNAL   WYSIWYG Editor JS -->
		<script src="{{URL::asset('assets/plugins/wysiwyag/jquery.richtext.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/wysiwyag/wysiwyag.js')}}"></script>
@endsection
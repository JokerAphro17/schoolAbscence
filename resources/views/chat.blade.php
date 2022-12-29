@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
			<!-- PAGE-HEADER -->
			<div class="page-header">
				<div>
					<h1 class="page-title">Chat</h1>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Components</a></li>
						<li class="breadcrumb-item active" aria-current="page">Chat</li>
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
			<div class="chatbox">
				<div class="card overflow-hidden">
					<div class="row">
						<div class="col-md-12 col-lg-5 col-xl-4 pr-lg-0 pl-lg-1 border-right">
							<div class="chat-search">
								<div class="input-group">
									<input type="text" class="form-control  bg-white" placeholder="Search">
									<div class="input-group-append ">
										<button type="button" class="btn btn-primary ">
											<i class="fa fa-search" aria-hidden="true"></i>
										</button>
									</div>
								</div>
							</div>
							<div class="contacts_body p-0">
								<ul class="contacts mb-0">
									<li class="active">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="{{URL::asset('assets/images/users/3.jpg')}}" class="rounded-circle user_img" alt="img">
											</div>
											<div class="user_info">
												<h6 class="mt-1 mb-0 ">Maryam Naz<span class="dot-label bg-success ml-2"></span></h6>
												<span class="">Hi How r you ?</span>
											</div>
											<div class="float-right text-right ml-auto mt-auto mb-auto text-center">
												<small>01-02-2019</small><br>
												<span class="badge badge-success badge-pill">3</span>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="{{URL::asset('assets/images/users/1.jpg')}}" class="rounded-circle user_img" alt="img">
											</div>
											<div class="user_info">
												<h6 class="mt-1 mb-0 ">Sahar Darya<span class="dot-label bg-danger ml-2"></span></h6>
												<span class="">Maec enas tempus, tellus eget</span>
											</div>
											<div class="float-right text-right ml-auto mt-auto mb-auto"><small>01-02-2019</small></div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="{{URL::asset('assets/images/users/12.jpg')}}" class="rounded-circle user_img" alt="img">
											</div>
											<div class="user_info">
												<h6 class="mt-1 mb-0 ">Yolduz Rafi<span class="dot-label bg-success ml-2"></span></h6>
												<span class="">Plz check the mail</span>
											</div>
											<div class="float-right text-right ml-auto mt-auto mb-auto text-center">
												<small>02-02-2019</small><br>
												<span class="badge badge-success badge-pill">2</span>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="{{URL::asset('assets/images/users/15.jpg')}}" class="rounded-circle user_img" alt="img">
											</div>
											<div class="user_info">
												<h6 class="mt-1 mb-0 ">Nargis Hawa<span class="dot-label bg-danger ml-2"></span></h6>
												<span class="">Nam quam nunc, bl ndit vel...</span>
											</div>
											<div class="float-right text-right ml-auto mt-auto mb-auto"><small>02-02-2019</small></div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="{{URL::asset('assets/images/users/17.jpg')}}" class="rounded-circle user_img" alt="img">
											</div>
											<div class="user_info">
												<h6 class="mt-1 mb-0 ">Khadija Mehr<span class="dot-label bg-danger ml-2"></span></h6>
												<span class="">dimen tum rhoncus, sem quam</span>
											</div>
											<div class="float-right text-right ml-auto mt-auto mb-auto"><small>03-02-2019</small></div>
										</div>
									</li>
									<li class="border-bottom">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="{{URL::asset('assets/images/users/7.jpg')}}" class="rounded-circle user_img" alt="img">
											</div>
											<div class="user_info">
												<h6 class="mt-1 mb-0 ">Angela Allan <span class="dot-label bg-danger ml-2"></span></h6>
												<span class="">ndimen tum rhoncus, sem quam</span>
											</div>
											<div class="float-right text-right ml-auto mt-auto mb-auto"><small>19-03-2019</small></div>
										</div>
									</li>
									<li class="border-bottom">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="{{URL::asset('assets/images/users/20.jpg')}}" class="rounded-circle user_img" alt="img">
											</div>
											<div class="user_info">
												<h6 class="mt-1 mb-0 ">Matt Lee<span class="dot-label bg-danger ml-2"></span></h6>
												<span class="">ndimen tum rhoncus, sem quam</span>
											</div>
											<div class="float-right text-right ml-auto mt-auto mb-auto"><small>13-03-2019</small></div>
										</div>
									</li>
									<li class="border-bottom">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="{{URL::asset('assets/images/users/19.jpg')}}" class="rounded-circle user_img" alt="img">
											</div>
											<div class="user_info">
												<h6 class="mt-1 mb-0 ">Anna Carr<span class="dot-label bg-danger ml-2"></span></h6>
												<span class="">ndimen tum rhoncus, sem quam</span>
											</div>
											<div class="float-right text-right ml-auto mt-auto mb-auto"><small>03-03-2019</small></div>
										</div>
									</li>

									<li class="border-bottom-0">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="{{URL::asset('assets/images/users/18.jpg')}}" class="rounded-circle user_img" alt="img">
											</div>
											<div class="user_info">
												<h6 class="mt-1 mb-0 ">Joyce Stewart <span class="dot-label bg-danger ml-2"></span></h6>
												<span class="">Nam quam nunc aecenas tincid</span>
											</div>
											<div class="float-right text-right ml-auto mt-auto mb-auto"><small>04-04-2019</small></div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-12 col-lg-7 col-xl-8 chat pr-lg-0 pl-lg-0">
							<div class="card shadow-none  mb-0 border-0">
								<div class="action-header clearfix">
									<div class="float-left hidden-xs d-flex ml-2">
										<div class="img_cont mr-3">
											<img src="{{URL::asset('assets/images/users/10.jpg')}}" class="rounded-circle user_img" alt="img">
										</div>
										<div class="align-items-center mt-2">
											<h4 class="mb-0 font-weight-semibold">Jacob Fisher</h4>
											<span class="dot-label bg-success"></span><span class="mr-3">online</span>
										</div>
									</div>
									<ul class="ah-actions actions align-items-center">
										<li class="call-icon">
											<a href="" class="d-done d-md-flex">
												<i class="icon icon-phone"></i>
											</a>
										</li>
										<li class="video-icon">
											<a href="" class="d-done d-md-flex">
												<i class="icon icon-camrecorder"></i>
											</a>
										</li>
										<li class="video-icon">
											<a href="" class="d-done d-md-flex">
												<i class="icon icon-user-follow"></i>
											</a>
										</li>
										<li class="dropdown">
											<a href="" data-toggle="dropdown" aria-expanded="true">
												<i class="icon icon-options-vertical"></i>
											</a>
											<ul class="dropdown-menu dropdown-menu-right">
												<li><i class="fa fa-user-circle"></i> View profile</li>
												<li><i class="fa fa-users"></i> Add to close friends</li>
												<li><i class="fa fa-plus"></i> Add to group</li>
												<li><i class="fa fa-ban"></i> Block</li>
											</ul>
										</li>
									</ul>
								</div>
								<!-- ACTION HEADER END -->
								<!-- MSG CARD-BODY OPEN -->
								<div class="card-body msg_card_body">
									<div class="chat-box-single-line">
										<abbr class="timestamp">February 1st, 2020</abbr>
									</div>
									<div class="d-flex justify-content-start">
										<div class="img_cont_msg">
											<img src="{{URL::asset('assets/images/users/10.jpg')}}" class="rounded-circle user_img_msg" alt="img">
										</div>
										<div class="msg_cotainer">
											Hi, how are you Jenna Side?
											<span class="msg_time">8:40 AM, Today</span>
										</div>
									</div>
									<div class="d-flex justify-content-end">
										<div class="msg_cotainer_send">
											Hi Jacob Fisher i am good tnx how about you?
											<span class="msg_time_send">8:55 AM, Today</span>
										</div>
										<div class="img_cont_msg">
											<img src="{{URL::asset('assets/images/users/15.jpg')}}" class="rounded-circle user_img_msg" alt="img">
										</div>
									</div>
									<div class="d-flex justify-content-start">
										<div class="img_cont_msg">
											<img src="{{URL::asset('assets/images/users/10.jpg')}}" class="rounded-circle user_img_msg" alt="img">
										</div>
										<div class="msg_cotainer">
											I am good too, thank you for your chat template
											<span class="msg_time">9:00 AM, Today</span>
										</div>
									</div>
									<div class="d-flex justify-content-end">
										<div class="msg_cotainer_send">
											You welcome Jacob Fisher
											<span class="msg_time_send">9:05 AM, Today</span>
										</div>
										<div class="img_cont_msg">
											<img src="{{URL::asset('assets/images/users/15.jpg')}}" class="rounded-circle user_img_msg" alt="img">
										</div>
									</div>
									<div class="d-flex justify-content-start">
										<div class="img_cont_msg">
											<img src="{{URL::asset('assets/images/users/10.jpg')}}" class="rounded-circle user_img_msg" alt="img">
										</div>
										<div class="msg_cotainer">
											Yo, Can you update Views?
											<span class="msg_time">9:07 AM, Today</span>
										</div>
									</div>
									<div class="d-flex justify-content-end">
										<div class="msg_cotainer_send">
											But I must explain to you how all this mistaken born and I will give some images below
											<span class="msg_time_send">9:10 AM, Today</span>
											<div class="row mt-2">
												<div class="col-4">
													<img class="img-fluid rounded" src="{{URL::asset('assets/images/media/8.jpg')}} " alt="banner image">
												</div>
												<div class="col-4">
													<img class="img-fluid rounded" src="{{URL::asset('assets/images/media/9.jpg')}} " alt="banner image">
												</div>
												<div class="col-4">
													<img class="img-fluid rounded" src="{{URL::asset('assets/images/media/10.jpg')}} " alt="banner image">
												</div>
											</div>
										</div>
										<div class="img_cont_msg">
											<img src="{{URL::asset('assets/images/users/15.jpg')}}" class="rounded-circle user_img_msg" alt="img">
										</div>
									</div>
									<div class="d-flex justify-content-start">
										<div class="img_cont_msg">
											<img src="{{URL::asset('assets/images/users/10.jpg')}}" class="rounded-circle user_img_msg" alt="img">
										</div>
										<div class="msg_cotainer">
											Okay Bye, text you later..
											<span class="msg_time">9:12 AM, Today</span>
										</div>
									</div>
								</div>
								<!-- MSG CARD-BODY END -->
								<!-- CARD-FOOTER OPEN -->
								<div class="card-footer">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Typing a message here...">
										<span class="input-group-append">
											<button class="btn btn-primary" type="button"><i class="fa fa-paper-plane-o"></i></button>
										</span>
									</div>
								</div><!-- CARD FOOTER END -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- ROW-1 CLOSED -->
@endsection
@section('js')
@endsection
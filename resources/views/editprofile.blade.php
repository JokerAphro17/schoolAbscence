@extends('layouts.master')
@section('css')
		<!-- INTERNAL SELECT2 CSS -->
		<link href="{{URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
			<!-- PAGE-HEADER -->
			<div class="page-header">
				<div>
					<h1 class="page-title">Edit Profile</h1>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Pages</a></li>
						<li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
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
				<div class="col-lg-4 col-xl-4 col-md-12 col-sm-12">
					<div class="card">
						<div class="card-body">
							<div class="text-center">
								<div class="userprofile">
									<div class="userpic  brround"> <img src="{{URL::asset('assets/images/users/10.jpg')}}" alt="" class="userpicimg"> </div>
									<h3 class="username text-dark mb-2">Jacob Fisher</h3>
									<p class="mb-1 text-muted">Web Developer, USA</p>
									<div class="text-center mb-4">
										<span><i class="fa fa-star text-warning"></i></span>
										<span><i class="fa fa-star text-warning"></i></span>
										<span><i class="fa fa-star text-warning"></i></span>
										<span><i class="fa fa-star-half-o text-warning"></i></span>
										<span><i class="fa fa-star-o text-warning"></i></span>
									</div>
									<div class="socials text-center mt-3">
										<a href="" class="btn btn-circle btn-primary ">
											<i class="fa fa-facebook"></i></a> <a href="" class="btn btn-circle btn-danger ">
											<i class="fa fa-google-plus"></i></a> <a href="" class="btn btn-circle btn-info ">
											<i class="fa fa-twitter"></i></a> <a href="" class="btn btn-circle btn-warning "><i class="fa fa-envelope"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header">
							<div class="card-title">Edit Password</div>
						</div>
						<div class="card-body">
							<div class="d-flex mb-3">
								<img alt="User Avatar" class="rounded-circle avatar-lg mr-2" src="{{URL::asset('assets/images/users/10.jpg')}}">
								<div class="ml-auto mt-xl-2 mt-lg-0 ml-lg-2">
									<a href="#" class="btn btn-primary btn-sm mt-1 mb-1"><i class="fe fe-camera mr-1"></i>Edit profile</a>
									<a href="#" class="btn btn-danger btn-sm mt-1 mb-1"><i class="fe fe-camera-off mr-1"></i>Delete profile</a>
								</div>
							</div>
							<div class="form-group">
								<label class="form-label">Change Password</label>
								<input type="password" class="form-control" value="password">
							</div>
							<div class="form-group">
								<label class="form-label">New Password</label>
								<input type="password" class="form-control" value="password">
							</div>
							<div class="form-group">
								<label class="form-label">Confirm Password</label>
								<input type="password" class="form-control" value="password">
							</div>
						</div>
						<div class="card-footer text-right">
							<a href="#" class="btn btn-primary">Updated</a>
							<a href="#" class="btn btn-danger">Cancle</a>
						</div>
					</div>
					<div class="card">
						<div class="card-header">
							<div class="float-left">
								<h3 class="card-title">Contact</h3>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="card-body wideget-user-contact">
							<div class="media mb-5 mt-0">
								<div class="d-flex mr-3">
									<span class="user-contact-icon bg-primary"><i class="fa fa-envelope text-white"></i></span>
								</div>
								<div class="media-body">
									<a href="#" class="text-dark">Support</a>
									<div class="text-muted fs-14">support@demo.com</div>
								</div>
							</div>
							<div class="media mb-5 mt-0">
								<div class="d-flex mr-3">
									<span class="user-contact-icon bg-secondary"><i class="fa fa-globe text-white"></i></span>
								</div>
								<div class="media-body">
									<a href="#" class="text-dark">Address</a>
									<div class="text-muted fs-14">San Francisco, CA</div>
								</div>
							</div>
							<div class="media mb-0 mt-0">
								<div class="d-flex mr-3">
									<span class="user-contact-icon bg-warning"><i class="fa fa-phone text-white"></i></span>
								</div>
								<div class="media-body">
									<a href="#" class="text-dark">Contact</a>
									<div class="text-muted fs-14">+125 5826 3658</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-8 col-xl-8 col-md-12 col-sm-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Edit Profile</h3>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-lg-6 col-md-12">
									<div class="form-group">
										<label for="exampleInputname">First Name</label>
										<input type="text" class="form-control" id="exampleInputname" placeholder="First Name">
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="form-group">
										<label for="exampleInputname1">Last Name</label>
										<input type="text" class="form-control" id="exampleInputname1" placeholder="Enter Last Name">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Email address</label>
								<input type="email" class="form-control" id="exampleInputEmail1" placeholder="email address">
							</div>
							<div class="form-group">
								<label for="exampleInputnumber">Conatct Number</label>
								<input type="number" class="form-control" id="exampleInputnumber" placeholder="ph number">
							</div>
							<div class="form-group">
								<label class="form-label">About Me</label>
								<textarea class="form-control" rows="6">My bio.........</textarea>
							</div>
							<div class="form-group">
								<label class="form-label">Website</label>
								<input class="form-control" placeholder="http://splink.com">
							</div>
							<div class="form-group">
								<label class="form-label">Date Of Birth</label>
								<div class="row">
									<div class="col-md-4">
										<select class="form-control select2">
											<option value="0">Date</option>
											<option value="1">01</option>
											<option value="2">02</option>
											<option value="3">03</option>
											<option value="4">04</option>
											<option value="5">05</option>
											<option value="6">06</option>
											<option value="7">07</option>
											<option value="8">08</option>
											<option value="9">09</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
											<option value="13">13</option>
											<option value="14">14</option>
											<option value="15">15</option>
											<option value="16">16</option>
											<option value="17">17</option>
											<option value="18">18</option>
											<option value="19">19</option>
											<option value="20">20</option>
											<option value="21">21</option>
											<option value="22">22</option>
											<option value="23">23</option>
											<option value="24">24</option>
											<option value="25">25</option>
											<option value="26">26</option>
											<option value="27">27</option>
											<option value="28">28</option>
											<option value="29">29</option>
											<option value="30">30</option>
											<option value="31">31</option>
										</select>
									</div>
									<div class="col-md-4">
										<select class="form-control select2">
											<option value="0">Mon</option>
											<option value="1">Jan</option>
											<option value="2">Feb</option>
											<option value="3">Mar</option>
											<option value="4">Apr</option>
											<option value="5">May</option>
											<option value="6">June</option>
											<option value="7">July</option>
											<option value="8">Aug</option>
											<option value="9">Sep</option>
											<option value="10">Oct</option>
											<option value="11">Nov</option>
											<option value="12">Dec</option>
										</select>
									</div>
									<div class="col-md-4">
										<select class="form-control select2">
											<option value="0">Year</option>
											<option value="1">2018</option>
											<option value="2">2017</option>
											<option value="3">2016</option>
											<option value="4">2015</option>
											<option value="5">2014</option>
											<option value="6">2013</option>
											<option value="7">2102</option>
											<option value="8">2012</option>
											<option value="9">2011</option>
											<option value="10">2010</option>
											<option value="11">2009</option>
											<option value="12">2008</option>
											<option value="13">2007</option>
											<option value="14">2006</option>
											<option value="15">2005</option>
											<option value="16">2004</option>
											<option value="17">2003</option>
											<option value="18">2002</option>
											<option value="19">2001</option>
											<option value="20">1999</option>
											<option value="21">1998</option>
											<option value="22">1997</option>
											<option value="23">1996</option>
											<option value="24">1995</option>
											<option value="25">1994</option>
											<option value="26">1993</option>
											<option value="27">1992</option>
											<option value="28">1991</option>
											<option value="29">1990</option>
											<option value="30">1989</option>
											<option value="31">1988</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="card-footer">
							<a href="#" class="btn btn-success mt-1">Save</a>
							<a href="#" class="btn btn-danger mt-1">Cancel</a>
						</div>
					</div>
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Recently Connected</h3>
						</div>
						<div class="card-body p-5">
							<div class="memberblock mb-0">
								<div class="row ">
									<div class="col-lg-2 col-md-3 col-sm-4 col-xs-4 pl-1 pr-1 m-t-5 m-b-5">
										<a href="" class="member"><img src="{{URL::asset('assets/images/users/13.jpg')}}" alt="">
											<div class="memmbername">Ajay Sriram</div>
										</a>
									</div>
									<div class="col-lg-2 col-md-3 col-sm-4 col-xs-4 pl-1 pr-1 m-t-5 m-b-5">
										<a href="" class="member"><img src="{{URL::asset('assets/images/users/8.jpg')}}" alt="">
											<div class="memmbername">Samantha</div>
										</a>
									</div>
									<div class="col-lg-2 col-md-3 col-sm-4 pl-1 pr-1 m-t-5 m-b-5">
										<a href="" class="member"><img src="{{URL::asset('assets/images/users/14.jpg')}}" alt="">
											<div class="memmbername">Stella</div>
										</a>
									</div>
									<div class="col-lg-2 col-md-3 col-sm-4 pl-1 pr-1 m-t-5 m-b-5">
										<a href="" class="member"><img src="{{URL::asset('assets/images/users/11.jpg')}}" alt="">
											<div class="memmbername">James Thomas</div>
										</a>
									</div>
									<div class="col-lg-2 col-md-3 col-sm-4 pl-1 pr-1 m-t-5 m-b-5">
										<a href="" class="member"><img src="{{URL::asset('assets/images/users/2.jpg')}}" alt="">
											<div class="memmbername">Christopher</div>
										</a>
									</div>
									<div class="col-lg-2 col-md-3 col-sm-4 pl-1 pr-1 m-t-5 m-b-5">
										<a href="" class="member"><img src="{{URL::asset('assets/images/users/15.jpg')}}" alt="">
											<div class="memmbername">Manish Sriram</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- ROW-1 CLOSED -->
@endsection
@section('js')
		<!-- INTERNAL SELECT2 JS -->
		<script src="{{URL::asset('assets/plugins/select2/select2.full.min.js')}}"></script>
		<script src="{{URL::asset('assets/js/select2.js')}}"></script>
@endsection
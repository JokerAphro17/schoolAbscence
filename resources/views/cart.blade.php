@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
			<!-- PAGE-HEADER -->
			<div class="page-header">
				<div>
					<h1 class="page-title">Shopping Cart</h1>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">E-Commerce</a></li>
						<li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
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
				<div class="col-md-8">
					<div class="card cart">
						<div class="card-header">
							<h3 class="card-title">Shopping Cart</h3>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered table-vcenter text-nowrap">
									<thead>
										<tr>
											<th>Product</th>
											<th>Title</th>
											<th>Price</th>
											<th class="w-25">Quantity</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<img src="{{URL::asset('assets/images/pngs/1.png')}}" alt="" class="h-8">
											</td>
											<td>Chair</td>
											<td class="number-font1">$568</td>
											<td>
												<div class="input-group">
													<span class="input-group-btn">
														<button type="button" class="btn btn-light border-0 br-0 minus">
															<i class="fa fa-minus"></i>
														</button>
													</span>
													<input type="text" name="quantity" class="form-control text-center qty" value="1">
													<span class="input-group-btn">
														<button type="button" class="btn btn-light border-0 br-0 add">
															<i class="fa fa-plus"></i>
														</button>
													</span>
												</div>
											</td>
											<td>
												<a href="javascript:void(0)" class="btn btn-danger btn-sm mr-2" data-toggle="tooltip" data-placement="top" title="Save for Washlist"><i class="icon icon-heart"></i></a>
												<a href="javascript:void(0)" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="Remove"><i class="icon icon-trash"></i></a>
											</td>
										</tr>
										<tr>
											<td>
												<img src="{{URL::asset('assets/images/pngs/4.png')}}" alt="" class="h-8">
											</td>
											<td>HandBag</td>
											<td class="number-font1">$1,027</td>
											<td>
												<div class="input-group">
													<span class="input-group-btn">
														<button type="button" class="btn btn-light border-0 br-0 minus">
															<i class="fa fa-minus"></i>
														</button>
													</span>
													<input type="text" name="quantity" class="form-control text-center qty" value="1">
													<span class="input-group-btn">
														<button type="button" class="btn btn-light border-0 br-0 add">
															<i class="fa fa-plus"></i>
														</button>
													</span>
												</div>
											</td>
											<td>
												<a href="javascript:void(0)" class="btn btn-danger btn-sm mr-2" data-toggle="tooltip" data-placement="top" title="Save for Washlist"><i class="icon icon-heart"></i></a>
												<a href="javascript:void(0)" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="Remove"><i class="icon icon-trash"></i></a>
											</td>
										</tr>
										<tr>
											<td>
												<img src="{{URL::asset('assets/images/pngs/8.png')}}" alt="" class="h-8">
											</td>
											<td>Sports Shooes</td>
											<td class="number-font1">$1,589</td>
											<td>
												<div class="input-group">
													<span class="input-group-btn">
														<button type="button" class="btn btn-light br-0 minus border-0">
															<i class="fa fa-minus"></i>
														</button>
													</span>
													<input type="text" name="quantity" class="form-control  text-center qty" value="1">
													<span class="input-group-btn">
														<button type="button" class="btn btn-light br-0 add border-0">
															<i class="fa fa-plus"></i>
														</button>
													</span>
												</div>
											</td>
											<td>
												<a href="javascript:void(0)" class="btn btn-danger btn-sm  mr-2" data-toggle="tooltip" data-placement="top" title="Save for Washlist"><i class="fe fe-heart"></i></a>
												<a href="javascript:void(0)" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="Remove"><i class="fe fe-trash"></i></a>
											</td>
										</tr>
									</tbody>
								</table>
							</div><br>
							<div class="row">
								<div class="col-6"><input class="productcart form-control" type="text" placeholder="Coupon Code"></div>
								<div class="col-6"><a href="#" class="btn btn-primary btn-md">Apply Coupon</a></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card cart">
						<div class="card-body">
							<ul class="list-group">
								<li class="list-group-item">
									Sub Total
									<span class="badgetext h4  mb-0 number-font1">$4,360</span>
								</li>
								<li class="list-group-item">
									Discount
									<span class="badgetext h4  mb-0 number-font1">5%</span>
								</li>
								<li class="list-group-item">
									Shipping
									<span class="badgetext h4  mb-0">Free</span>
								</li>
								<li class="list-group-item">
									Total
									<span class="badgetext h4 font-weight-bold mb-0 number-font1">$3,976</span>
								</li>
							</ul>
						</div>
						<div class="card-footer text-right">
							<a href="#" class="btn btn-warning"><i class="fa fa-arrow-left mr-1"></i>Continue Shopping</a>
							<a href="#" class="btn btn-secondary">Check out<i class="fa fa-arrow-right ml-1"></i></a>
						</div>
					</div>
				</div>
			</div><!-- COL-END -->
			<!-- ROW-1 CLOSED -->
@endsection
@section('js')
		<!-- CHARTJS JS -->
		<script src="{{URL::asset('assets/plugins/chart/Chart.bundle.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/chart/utils.js')}}"></script>
@endsection
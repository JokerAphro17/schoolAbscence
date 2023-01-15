				<!-- App-Header -->
				<div class="app-header header">
					<div class="container-fluid">
						<div class="d-flex">
							<a class="header-brand d-md-none" href="{{url('/' . $page='index')}}">
								<img src="{{URL::asset('assets/images/brand/logo-3.png')}}" class="header-brand-img mobile-icon" alt="logo">
								<img src="{{URL::asset('assets/images/brand/logo.png')}}" class="header-brand-img desktop-logo mobile-logo" alt="logo">
							</a>
							<a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#">
								<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
									<path d="M0 0h24v24H0V0z" fill="none" />
									<path d="M21 11.01L3 11v2h18zM3 16h12v2H3zM21 6H3v2.01L21 8z" /></svg>
							</a><!-- sidebar-toggle-->
							<div class="d-flex ml-auto header-right-icons header-search-icon">
								
								<div class="dropdown profile-1">
									<a href="#" data-toggle="dropdown" class="nav-link pl-2 pr-2  leading-none d-flex">
										<span>
											<img src="{{URL::asset('assets/images/users/10.jpg')}}" alt="profile-user" class="avatar  mr-xl-3 profile-user brround cover-image">
										</span>
										<div class="text-center mt-1 d-none d-xl-block">
											<h6 class="text-dark mb-0 fs-13 font-weight-semibold">{{Auth::user()->nom }}</h6>
										</div>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<a class="dropdown-item" href="{{url('logout')}}">
											<i class="dropdown-icon mdi  mdi-logout-variant"></i> Deconnexion
										</a>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
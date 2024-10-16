<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
	id="layout-navbar">
	<div class="layout-menu-toggle navbar-nav align-items-xl-center me-4 me-xl-0 d-xl-none">
		<a class="nav-item nav-link px-0 me-xl-6" href="javascript:void(0)">
			<i class="bx bx-menu bx-md"></i>
		</a>
	</div>

	<div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
		<!-- Search -->
		<div class="navbar-nav align-items-center">
			
			<div class="nav-item d-flex align-items-center">
				Contact Management Information System
			</div>
		</div>

		<ul class="navbar-nav flex-row align-items-center ms-auto">
			
			{{-- User --}}
			<li class="nav-item navbar-dropdown dropdown-user dropdown">
				<a class="nav-link dropdown-toggle hide-arrow p-0" href="javascript:void(0);" data-bs-toggle="dropdown">
					<div class="avatar avatar-online">
						<img src="{{ asset('img/avatars/1.png') }}" alt class="w-px-40 h-auto rounded-circle" />
					</div>
				</a>
				<ul class="dropdown-menu dropdown-menu-end">
					<li>
						<a class="dropdown-item" href="#">
							<div class="d-flex">
								<div class="flex-shrink-0 me-3">
									<div class="avatar avatar-online">
										<img src="{{ asset('img/avatars/1.png') }}" alt class="w-px-40 h-auto rounded-circle" />
									</div>
								</div>
								<div class="flex-grow-1">
									<h6 class="mb-0">John Doe</h6>
									<small class="text-muted">Admin</small>
								</div>
							</div>
						</a>
					</li>
					<li>
						<div class="dropdown-divider my-1"></div>
					</li>
					<li>
						<a class="dropdown-item" href="{{ route('profile.edit') }}">
							<i class="bx bx-user bx-md me-3"></i><span>My Profile</span>
						</a>
					</li>
					<li>
						<div class="dropdown-divider my-1"></div>
					</li>
					<li>
        		<form id="logout-form" action="{{ route('logout') }}" method="POST">
							@csrf
							<a class="logout dropdown-item" href="javascript:void(0);">
								<i class="bx bx-power-off bx-md me-3"></i><span>Log Out</span>
							</a>
						</form>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</nav>

{{-- push script --}}
@push('scripts')
	<script type="text/javascript" src="{{ asset('js/page/navbar/navbar.js') }}"></script>
@endpush
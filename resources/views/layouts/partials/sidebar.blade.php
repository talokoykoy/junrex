<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
	<div class="app-brand demo">
		<a href="index.html" class="app-brand-link">
			<img src="C:\laragon\www\junrex\public\img"
			alt="junrex">
			<span class="app-brand-text demo menu-text fw-bold ms-2">JUNREX</span>
		</a>

		<a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
			<i class="bx bx-chevron-left bx-sm d-flex align-items-center justify-content-center"></i>
		</a>
	</div>

	<div class="menu-inner-shadow"></div>

	<ul class="menu-inner py-1">

		{{-- Dashboard --}}
		<li class="menu-item active">
			<a href="{{ route('dashboard') }}" class="menu-link">
				<i class="menu-icon tf-icons bx bx-home-smile"></i>
				<div class="text-truncate" data-i18n="Basic">Dashboard</div>
			</a>
		</li>

		{{-- Features --}}
		<li class="menu-header small text-uppercase">
			<span class="menu-header-text">Features</span>
		</li>
		<li class="menu-item">
			<a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-email.html"
				target="_blank" class="menu-link">
				<i class="menu-icon tf-icons bx bx-envelope"></i>
				<div class="text-truncate" data-i18n="Email">User Management</div>
			</a>
		</li>
		<li class="menu-item">
			<a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-email.html"
				target="_blank" class="menu-link">
				<i class="menu-icon tf-icons bx bx-envelope"></i>
				<div class="text-truncate" data-i18n="Email">Junrex</div>
			</a>
		</li>
	</ul>
</aside>
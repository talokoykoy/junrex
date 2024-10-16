<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

	<head>
		<meta charset="utf-8" />
		<meta 
			name="viewport"
			content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<title>{{ config('app.name', 'Laravel') }}</title>

    {{-- Favicon --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon/favicon.ico') }}" />

		{{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('vendor/boxicons/boxicons.css') }}" />

    {{-- Core CSS --}}
    <link rel="stylesheet" href="{{ asset('css/theme/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('css/theme/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('css/theme/custom.css') }}" />

    {{-- Vendors CSS --}}
    <link rel="stylesheet" href="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.css') }}" />

	</head>

	<body>
		
		{{-- layout wrapper --}}
		<div class="layout-wrapper layout-content-navbar">

			<div class="layout-container">

				{{-- menu --}}
				@include('layouts.partials.sidebar')
				{{-- menu --}}

				{{-- layout container --}}
				<div class="layout-page">

					{{-- navbar --}}
					@include('layouts.partials.navbar')
					{{-- navbar --}}

					{{-- content wrapper --}}
					<div class="content-wrapper">

						{{-- page content --}}
						{{ $slot }}
						{{-- page content --}}

						{{-- footer --}}
						@include('layouts.partials.footer')
						{{-- footer --}}

            <div class="content-backdrop fade"></div>

					</div>
					{{-- content wrapper --}}


				</div>
				{{-- layout container --}}

			</div>

			{{-- overlay --}}
      <div class="layout-overlay layout-menu-toggle"></div>

		</div>
		{{-- layout wrapper --}}

		{{-- Helpers --}}
    <script src="{{ asset('js/theme/helpers.js') }}"></script>
    <script src="{{ asset('js/theme/config.js') }}"></script>

		{{-- Vendor JS --}}
    <script src="{{ asset('vendor/jquery/jquery.js') }}"></script>
    <script src="{{ asset('vendor/popper/popper.js') }}"></script>
    <script src="{{ asset('js/theme/bootstrap.js') }}"></script>
    <script src="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('js/theme/menu.js') }}"></script>

    {{-- Main JS --}}
    <script src="{{ asset('js/theme/main.js') }}"></script>

		{{-- Page JS --}}
		@stack('scripts')

	</body>

</html>
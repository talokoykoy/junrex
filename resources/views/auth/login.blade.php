<x-guest-layout>

	<div class="card px-sm-6 px-0">
		<div class="card-body">

			{{-- logo --}}
			<x-auth-logo />

			<h4 class="mb-1">Welcome to {{ config('app.name') }}! 👋</h4>
			<p class="mb-6">Please sign-in to your account and start the adventure</p>

			<form id="formAuthentication" class="mb-6" action="{{ route('login') }}" method="POST">

				{{-- Session Status --}}
				<x-auth-session-status class="mb-4" :status="session('status')" />

				@csrf

				<div class="mb-6">
					<label for="email" class="form-label">Email</label>
					<input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}"
						placeholder="Enter your email" autofocus />
					@error('email')
						<x-input-error message="{{ $message }}" />
					@enderror
				</div>
				<div class="mb-6 form-password-toggle">
					<label class="form-label" for="password">Password</label>
					<div class="input-group input-group-merge">
						<input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password"
							placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
							aria-describedby="password" />
						<span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
						@error('password')
							<x-input-error message="{{ $message }}" />
						@enderror
					</div>
				</div>
				<div class="mb-6">
					<button class="btn btn-primary d-grid w-100" type="submit">Login</button>
				</div>
			</form>

		</div>
	</div>

</x-guest-layout>
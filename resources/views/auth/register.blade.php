<x-guest-layout>

	<div class="card px-sm-6 px-0">
		<div class="card-body">

			{{-- logo --}}
			<x-auth-logo />

			<h4 class="mb-1">Welcome to {{ config('app.name') }}! 👋</h4>
			<p class="mb-6">Please sign-up and start the adventure</p>

			<form id="formAuthentication" class="mb-6" action="{{ route('register') }}" method="POST">

				@csrf

				<div class="mb-6">
					<label for="name" class="form-label">Name</label>
					<input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}"
						placeholder="Enter your name" autofocus />
					@error('name')
						<x-input-error message="{{ $message }}" />
					@enderror
				</div>

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

				<div class="mb-6 form-password-toggle">
					<label class="form-label" for="password_confirmation">Confirm Password</label>
					<div class="input-group input-group-merge">
						<input type="password" id="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation"
							placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
							aria-describedby="password_confirmation" />
						<span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
						@error('password_confirmation')
							<x-input-error message="{{ $message }}" />
						@enderror
					</div>
				</div>

				<div class="mb-6">
					<button class="btn btn-primary d-grid w-100" type="submit">Register</button>
				</div>
			</form>
		</div>
	</div>

</x-guest-layout>
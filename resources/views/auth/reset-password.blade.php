<x-guest-layout>

	<div class="card px-sm-6 px-0">
		<div class="card-body">

			{{-- logo --}}
			<x-auth-logo />

			<h4 class="mb-1">Reset Password 🔒</h4>
			<p class="mb-6">Add your new password</p>
			<form id="formAuthentication" class="mb-6" method="POST" action="{{ route('password.store') }}">

				@csrf

        {{-- Password Reset Token --}}
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

				<div class="mb-6">
					<label for="email" class="form-label">Email</label>
					<input
						type="text"
						class="form-control @error('email') is-invalid @enderror"
						id="email"
						name="email"
						placeholder="Enter your email"
						required
						autofocus
						value="{{ old('email', $request->email) }}" />
						@error('email')
							<x-input-error message="{{ $message }}" />
						@enderror
				</div>

				<div class="mb-6 form-password-toggle">
					<label for="password" class="form-label">Password</label>
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
					<label for="password_confirmation" class="form-label">Confirm New Password</label>
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

				<button class="btn btn-primary d-grid w-100">Reset Password</button>
			</form>
		</div>
	</div>

</x-guest-layout>
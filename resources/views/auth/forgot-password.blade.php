<x-guest-layout>

	<div class="card px-sm-6 px-0">
		<div class="card-body">

			{{-- logo --}}
			<x-auth-logo />

			<h4 class="mb-1">Forgot Password? 🔒</h4>
			<p class="mb-6">Enter your email and we'll send you instructions to reset your password</p>
			<form id="formAuthentication" class="mb-6" method="POST" action="{{ route('password.email') }}">

				{{-- Session Status --}}
				<x-auth-session-status class="mb-4" :status="session('status')" />

				@csrf

				<div class="mb-6">
					<label for="email" class="form-label">Email</label>
					<input
						type="text"
						class="form-control @error('email') is-invalid @enderror"
						id="email"
						name="email"
						placeholder="Enter your email"
						required
						autofocus />
						@error('email')
							<x-input-error message="{{ $message }}" />
						@enderror
				</div>
				<button class="btn btn-primary d-grid w-100">Send Reset Link</button>
			</form>
		</div>
	</div>

</x-guest-layout>
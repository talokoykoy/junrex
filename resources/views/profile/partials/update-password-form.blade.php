<div class="card">
	<div class="card-header">
		<h5 class="mb-1">Update Password</h5>
		<span class="card-subtitle mb-5" >Ensure your account is using a long, random password to stay secure.</span>
	</div>
	<div class="card-body">
		<form method="POST" action="{{ route('password.update') }}">

			@csrf
			@method('PUT')

			{{-- Session Status --}}
			<x-auth-session-status class="mb-4" :status="session('password-update-status')" />

			<div class="row col-md-4">

				<div class="mb-6 form-password-toggle">
					<label class="form-label" for="current_password">Current Password</label>
					<div class="input-group input-group-merge">
						<input 
							type="password" 
							id="current_password" 
							class="form-control @error('current_password') is-invalid @enderror" 
							name="current_password"
							placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
							required
							autofocus />
						<span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
						@error('current_password')
							<x-input-error message="{{ $message }}" />
						@enderror
					</div>
				</div>

				<div class="mb-6 form-password-toggle">
					<label class="form-label" for="password">Password</label>
					<div class="input-group input-group-merge">
						<input 
							type="password" 
							id="password" 
							class="form-control @error('password') is-invalid @enderror" 
							name="password"
							placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
							required
							autofocus />
						<span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
						@error('password')
							<x-input-error message="{{ $message }}" />
						@enderror
					</div>
				</div>

				<div class="mb-6 form-password-toggle">
					<label class="form-label" for="password_confirmation">Confirm New Password</label>
					<div class="input-group input-group-merge">
						<input 
							type="password" 
							id="password_confirmation" 
							class="form-control" 
							name="password_confirmation"
							placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
							required
							autofocus />
						<span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
					</div>
				</div>

			</div>

			<div class="mt-6">
				<button type="submit" class="btn btn-primary me-3">Save changes</button>
			</div>
		</form>
	</div>
</div>
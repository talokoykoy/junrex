<div class="card mb-6">
	<div class="card-header">
		<h5 class="mb-1">Profile Information</h5>
		<span class="card-subtitle mb-5" >Update your account's profile information and email address.</span>
	</div>
	<div class="card-body pt-4">
		<form method="POST" action="{{ route('profile.update') }}">

			@csrf
			@method('patch')

			{{-- Session Status --}}
			<x-auth-session-status class="mb-4" :status="session('profile-update-status')" />

			<div class="row g-6">
				<div class="col-md-6">
					<label for="name" class="form-label">Name</label>
					<input
						class="form-control @error('name') is-invalid @enderror"
						type="text"
						id="name"
						name="name"
						required
						value="{{ old('name', $user->name) }}"
						autofocus />
					@error('name')
						<x-input-error message="{{ $message }}" />
					@enderror
				</div>
				<div class="col-md-6">
					<label for="email" class="form-label">E-mail</label>
					<input
						class="form-control @error('email') is-invalid @enderror"
						type="text"
						id="email"
						name="email"
						required
						value="{{ old('email', $user->email) }}" />
					@error('email')
						<x-input-error message="{{ $message }}" />
					@enderror
				</div>
			</div>
			<div class="mt-6">
				<button type="submit" class="btn btn-primary me-3">Save changes</button>
			</div>
		</form>
	</div>
</div>
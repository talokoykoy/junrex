<x-app-layout>

	<div class="container-xxl flex-grow-1 container-p-y">
		<div class="row">

			<div class="col-md-12">

				{{-- profile --}}
				@include('profile.partials.update-profile-information-form')

				{{-- password --}}
				@include('profile.partials.update-password-form')

			</div>
			
		</div>
	</div>

</x-app-layout>
<x-FrontendLayout>
	@section('style')
	<style>
    .input-group /deep/ input {
            width: 190px;
        }
    </style>
	@endsection
	
	@section('sub-header')
		<div class="d-flex flex-column flex-center w-100 min-h-350px min-h-lg-500px px-9">
			<!--begin::Heading-->
			<div class="text-center py-10 py-lg-10">
				<!--begin::Title-->
				<h1 class="text-white lh-base fw-bolder fs-2x fs-lg-3x mb-15">Schedule your </br>
    				<span style="background: linear-gradient(to right, #12CE5D 0%, #FFD80C 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">
    					<span id="kt_landing_hero_text">Appointment</span>
    				</span>
				</h1>
			</div>
			<!--end::Heading-->
			<!--begin::Clients-->
			<div class="d-flex flex-center flex-wrap position-relative px-5">
				<!--begin::Client-->
				<div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="" data-bs-original-title="Schedule your Estimate">
						<div class='row'>
		                  <!--begin::Modal body-->
                    		<div class="scroll-y px-10 px-lg-15 pt-0 pb-15">
                    			<!--begin:Form-->
                    				@livewire('frontend.appointment.appointment-form') 
                    			<!--end:Form-->
                    		</div>
		                  <!--end::Modal body-->
						</div>
				</div>
				<!--end::Client-->
			</div>
			<!--end::Clients-->
		</div>
	@endsection
	
  @livewire('frontend.service.list-services')
</x-FrontendLayout>



<div class='form'>
	<!--begin::Input group-->
	<div class="row g-9 mb-8">
		<div class='col-md-6 fv-row'>
			<input type="text" class="form-control form-control-solid @error('name') is-invalid @enderror" placeholder="Your Full Name" wire:model="name" required="required" />
		</div>
		<div  class='col-md-6 fv-row'>
			<input type="text" class="phone_number form-control form-control-solid @error('phone_number') is-invalid @enderror" 
			data-inputmask-mask="(999) 999-9999"
			placeholder="Phone Number" wire:model="phone_number" required="required" />
		</div>
	</div>
	<!--end::Input group-->
	<!--begin::Input group-->
	<div class="row g-9 mb-8">
		<!--begin::Col-->
		<div wire:ignore class="col-md-6 fv-row">
			<select class="form-select form-select-solid service_id" data-control="select2"
				data-hide-search="true" data-placeholder="Select a Service"
				id='service_id'
				wire:model="service_id" >
				<option value="">Select service</option>
				@foreach($services as $service)
					<option value="{{ $service->id }}">{{$service->name}}</option>
				@endforeach
				<option value="0">Other</option>
			</select>
		</div>
		<!--end::Col-->
		<!--begin::Col-->
		<div class="col-md-6 fv-row">
			<!--begin::Input-->
			<div  class="position-relative d-flex align-items-center">
				<!--begin::Icon-->
				<div class="symbol symbol-20px me-4 position-absolute ms-4">
					<span class="symbol-label bg-secondary"> <!--begin::Svg Icon | path: icons/duotone/Layout/Layout-grid.svg-->
						<span class="svg-icon"> <svg xmlns="http://www.w3.org/2000/svg"
								xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
								height="24px" viewBox="0 0 24 24" version="1.1">
                    											<g stroke="none" stroke-width="1"
									fill="none" fill-rule="evenodd">
                    												<rect x="0" y="0" width="24" height="24" />
                    												<rect fill="#000000" opacity="0.3" x="4"
									y="4" width="4" height="4" rx="1" />
                    												<path
									d="M5,10 L7,10 C7.55228475,10 8,10.4477153 8,11 L8,13 C8,13.5522847 7.55228475,14 7,14 L5,14 C4.44771525,14 4,13.5522847 4,13 L4,11 C4,10.4477153 4.44771525,10 5,10 Z M11,4 L13,4 C13.5522847,4 14,4.44771525 14,5 L14,7 C14,7.55228475 13.5522847,8 13,8 L11,8 C10.4477153,8 10,7.55228475 10,7 L10,5 C10,4.44771525 10.4477153,4 11,4 Z M11,10 L13,10 C13.5522847,10 14,10.4477153 14,11 L14,13 C14,13.5522847 13.5522847,14 13,14 L11,14 C10.4477153,14 10,13.5522847 10,13 L10,11 C10,10.4477153 10.4477153,10 11,10 Z M17,4 L19,4 C19.5522847,4 20,4.44771525 20,5 L20,7 C20,7.55228475 19.5522847,8 19,8 L17,8 C16.4477153,8 16,7.55228475 16,7 L16,5 C16,4.44771525 16.4477153,4 17,4 Z M17,10 L19,10 C19.5522847,10 20,10.4477153 20,11 L20,13 C20,13.5522847 19.5522847,14 19,14 L17,14 C16.4477153,14 16,13.5522847 16,13 L16,11 C16,10.4477153 16.4477153,10 17,10 Z M5,16 L7,16 C7.55228475,16 8,16.4477153 8,17 L8,19 C8,19.5522847 7.55228475,20 7,20 L5,20 C4.44771525,20 4,19.5522847 4,19 L4,17 C4,16.4477153 4.44771525,16 5,16 Z M11,16 L13,16 C13.5522847,16 14,16.4477153 14,17 L14,19 C14,19.5522847 13.5522847,20 13,20 L11,20 C10.4477153,20 10,19.5522847 10,19 L10,17 C10,16.4477153 10.4477153,16 11,16 Z M17,16 L19,16 C19.5522847,16 20,16.4477153 20,17 L20,19 C20,19.5522847 19.5522847,20 19,20 L17,20 C16.4477153,20 16,19.5522847 16,19 L16,17 C16,16.4477153 16.4477153,16 17,16 Z"
									fill="#000000" />
                    											</g>
                    										</svg>
					</span> <!--end::Svg Icon-->
					</span>
				</div>
				<!--end::Icon-->
				<div>
				<!--begin::Datepicker-->
				<input class="@error('schedule_date') is-invalid @enderror form-control form-control-solid ps-12 w-100 schedule_date" placeholder="Select a date" wire:model.debounce.500ms='schedule_date' />
				<!--end::Datepicker-->
				</div>
			</div>
			<!--end::Input-->
		</div>
		
		<!--end::Col-->
	</div>
	<!--end::Input group-->
	<!--begin::Input group-->
	<div class="d-flex flex-column mb-8">
		<textarea class="form-control form-control-solid @error('msg') is-invalid @enderror" rows="3" wire:model="msg" placeholder="Type Details"></textarea>
		@error('msg')
        <div class="invalid-feedback">
            <strong>{{ $message }}</strong>
        </div>
        @enderror
	</div>
	<!--end::Input group-->

	<!--begin::Actions-->
	<div class="text-center">
		<button wire:click='scheduleApp()' type="button" class="btn btn-primary">Submit</button>
	</div>
	<!--end::Actions-->
	@section('scripts')
	<script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
    <script type="text/javascript">
    		$(function(){
    			$(".phone_number").inputmask();

        		$('.phone_number').on('blur', function (e) {
                    @this.set('phone_number', $(this).val());
                });
            	
        		$('.service_id').on('change', function (e) {
                    @this.set('service_id', $(this).val());
                });
        		
        		$(".schedule_date").flatpickr({
    				minDate: new Date().fp_incr(2),
    			    enableTime: true,
    			    dateFormat: "F, d Y H:i",
    			   /* onChange: function(selectedDates, dateStr, instance) {
    			   *- 	 selectedDates.forEach(function (date){
    			    		 this.set('schedule_date', date);
    			    		 
    			    	 });
    			    }*/
    			});
    		});
	</script>
    @endsection
</div>

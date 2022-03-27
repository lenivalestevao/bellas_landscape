<div class='form mb-15'>
	<h1 class="fw-bolder text-dark mb-9">Send Us Email</h1>
	<!--begin::Input group-->
	<div class="row mb-5">
		<!--begin::Col-->
		<div class="col-md-6 fv-row">
			<!--begin::Label-->
			<label class="fs-5 fw-bold mb-2">Name</label>
			<!--end::Label-->
			<!--begin::Input-->
			<input type="text" class="form-control form-control-solid contact_name @error('contact_name') is-invalid @enderror" wire:model="contact_name" />
			@error('contact_name')
            <div class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </div>
            @enderror
			<!--end::Input-->
		</div>
		<!--end::Col-->
		<!--begin::Col-->
		<div class="col-md-6 fv-row">
			<!--end::Label-->
			<label class="fs-5 fw-bold mb-2">Phone Number</label>
			<!--end::Label-->
			<!--end::Input-->
			<input autocapitalize="off" required="required" type="text" class="form-control form-control-solid contact_phone @error('contact_phone') is-invalid @enderror" data-inputmask-mask="(999) 999-9999" wire:model="contact_phone" />
			@error('contact_phone')
            <div class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </div>
            @enderror
			<!--end::Input-->
		</div>
		<!--end::Col-->
	</div>
	<!--end::Input group-->
<!--begin::Input group-->
	<div class="row mb-5">
		<!--begin::Col-->
		<div class="col-md-6 fv-row">
			<!--begin::Label-->
			<label class="fs-5 fw-bold mb-2">E-Mail</label>
			<!--end::Label-->
			<!--begin::Input-->
			<input type="email" class="form-control form-control-solid contact_email contact_phone @error('contact_email') is-invalid @enderror" wire:model="contact_email" />
			@error('contact_email')
            <div class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </div>
            @enderror
			<!--end::Input-->
		</div>
		<!--end::Col-->
		<!--begin::Col-->
		<div class="col-md-6 fv-row">
			<!--end::Label-->
			<label class="fs-5 fw-bold mb-2">Subject</label>
			<!--end::Label-->
			<!--end::Input-->
			<div wire:ignore>
				<select wire:model="contact_subject" data-control="select2" data-hide-search="true" data-placeholder="Subject" class='contact_subject form-control form-control-solid'>
    				<option value="0">Contact</option>
    				@foreach($services as $service)
    					<option value="{{ $service->id }}">{{ $service->name }}</option>
    				@endforeach
    			</select>
			</div>
			<!--end::Input-->
		</div>
		<!--end::Col-->
	</div>
	<!--begin::Input group-->
	<div class="d-flex flex-column mb-10 fv-row">
		<label class="fs-6 fw-bold mb-2">Message</label>
		<textarea class="form-control form-control-solid @error('contact_msg') is-invalid @enderror" rows="6" wire:model="contact_msg"></textarea>
		@error('contact_msg')
        <div class="invalid-feedback">
            <strong>{{ $message }}</strong>
        </div>
        @enderror
	</div>
	<!--end::Input group-->
	<!--begin::Submit-->
	<button wire:click='SendContact()' type="submit" class="btn btn-primary">Send Feedback</button>
	<!--end::Submit-->
	
	@section('scripts')
	<script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
    <script type="text/javascript">
    		$(function(){
    			$(".contact_name").focus();
    			$(".contact_phone").inputmask();

        		$('.contact_phone').on('blur change', function (e) {
                    @this.set('contact_phone', $(this).val());
                });

            	$('.contact_subject').select2();
        		$('.contact_subject').on('change', function (e) {
                    @this.set('contact_subject', $(this).val());
                });
    		});
	</script>
    @endsection
</div>

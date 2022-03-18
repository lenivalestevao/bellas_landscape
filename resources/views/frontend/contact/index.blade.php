<x-FrontendLayout>
   	<!--begin::Body-->
	<div class="card-body">
		<!--begin::Row-->
		<div class="row mb-3">
			<!--begin::Col-->
			<div class="col-md-12 pe-lg-10">
				<!--begin::Form-->
				<form class="form mb-15">
					<h1 class="fw-bolder text-dark mb-9">Send Us Email</h1>
					<!--begin::Input group-->
					<div class="row mb-5">
						<!--begin::Col-->
						<div class="col-md-6 fv-row">
							<!--begin::Label-->
							<label class="fs-5 fw-bold mb-2">Name</label>
							<!--end::Label-->
							<!--begin::Input-->
							<input type="text" class="form-control form-control-solid" placeholder="" name="name" />
							<!--end::Input-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-md-6 fv-row">
							<!--end::Label-->
							<label class="fs-5 fw-bold mb-2">Email</label>
							<!--end::Label-->
							<!--end::Input-->
							<input type="text" class="form-control form-control-solid" placeholder="" name="email" />
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
							<input type="text" class="form-control form-control-solid" placeholder="" name="name" />
							<!--end::Input-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-md-6 fv-row">
							<!--end::Label-->
							<label class="fs-5 fw-bold mb-2">Subject</label>
							<!--end::Label-->
							<!--end::Input-->
							<select class='form-control form-control-solid'>
								<option>...</option>
								<option>Estimate</option>
								<option>Appontment</option>
								<option>Contact</option>
							</select>
							<!--end::Input-->
						</div>
						<!--end::Col-->
					</div>
					<!--begin::Input group-->
					<div class="d-flex flex-column mb-10 fv-row">
						<label class="fs-6 fw-bold mb-2">Message</label>
						<textarea class="form-control form-control-solid" rows="6" name="message" placeholder=""></textarea>
					</div>
					<!--end::Input group-->
					<!--begin::Submit-->
					<button type="submit" class="btn btn-primary" id="kt_contact_submit_button">
						<!--begin::Indicator-->
						<span class="indicator-label">Send Feedback</span>
						<span class="indicator-progress">Please wait...
						<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
						<!--end::Indicator-->
					</button>
					<!--end::Submit-->
				</form>
				<!--end::Form-->
			</div>
			<!--end::Col-->
		</div>
		<!--end::Row-->
		<!--begin::Row-->
		<div class="row g-5 mb-5 mb-lg-15">
			<!--begin::Col-->
			<div class="col-sm-6 pe-lg-10">
				<!--begin::Phone-->
				<div class="text-center bg-light card-rounded d-flex flex-column justify-content-center p-10 h-lg-100">
					<!--begin::Icon-->
					<!--begin::Svg Icon | path: icons/duotone/Interface/Phone.svg-->
					<span class="svg-icon svg-icon-3tx svg-icon-primary">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<g clip-path="url(#clip0)">
								<path opacity="0.25" d="M21.3902 19.5804L19.4852 21.4853C19.4852 21.4853 14.5355 23.6066 7.46441 16.5356C0.39334 9.46451 2.51466 4.51476 2.51466 4.51476L4.41959 2.60983C5.28021 1.74921 6.70355 1.85036 7.43381 2.82404L9.25208 5.24841C9.84926 6.04465 9.77008 7.15884 9.06629 7.86262L7.46441 9.46451C7.46441 9.46451 7.46441 10.8787 10.2928 13.7071C13.1213 16.5356 14.5355 16.5356 14.5355 16.5356L16.1374 14.9337C16.8411 14.2299 17.9553 14.1507 18.7516 14.7479L21.1759 16.5662C22.1496 17.2964 22.2508 18.7198 21.3902 19.5804Z" fill="#191213" />
								<path d="M4.41959 2.60987L3.92887 3.10059L8.17151 8.75745L9.06629 7.86267C9.77007 7.15888 9.84926 6.0447 9.25208 5.24846L7.4338 2.82409C6.70354 1.85041 5.28021 1.74926 4.41959 2.60987Z" fill="#121319" />
								<path d="M21.3901 19.5804L20.8994 20.0711L15.2426 15.8285L16.1373 14.9337C16.8411 14.2299 17.9553 14.1507 18.7515 14.7479L21.1759 16.5662C22.1496 17.2965 22.2507 18.7198 21.3901 19.5804Z" fill="#121319" />
							</g>
						</svg>
					</span>
					<!--end::Svg Icon-->
					<!--end::Icon-->
					<!--begin::Subtitle-->
					<h1 class="text-dark fw-bolder my-5">Let’s Speak</h1>
					<!--end::Subtitle-->
					<!--begin::Number-->
					<div class="text-gray-700 fw-bold fs-2">{{ $wb_setting->whatsapp }}</div>
					<div class="text-gray-700 fw-bold fs-2">{{ $wb_setting->email }}</div>
					<!--end::Number-->
				</div>
				<!--end::Phone-->
			</div>
			<!--end::Col-->
			<!--begin::Col-->
			<div class="col-sm-6 ps-lg-10">
				<!--begin::Address-->
				<div class="text-center bg-light card-rounded d-flex flex-column justify-content-center p-10 h-lg-100">
					<!--begin::Icon-->
					<!--begin::Svg Icon | path: icons/duotone/Interface/Map-Marker.svg-->
					<span class="svg-icon svg-icon-3tx svg-icon-primary">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<path opacity="0.25" d="M21 10C21 15.4917 16.1746 20.1791 13.5904 22.2957C12.6534 23.0631 11.3466 23.0631 10.4096 22.2957C7.82537 20.1791 3 15.4917 3 10C3 5.02944 7.02944 1 12 1C16.9706 1 21 5.02944 21 10Z" fill="#191213" />
							<path d="M15 9C15 10.6569 13.6569 12 12 12C10.3431 12 9 10.6569 9 9C9 7.34315 10.3431 6 12 6C13.6569 6 15 7.34315 15 9Z" fill="#121319" />
						</svg>
					</span>
					<!--end::Svg Icon-->
					<!--end::Icon-->
					<!--begin::Subtitle-->
					<h1 class="text-dark fw-bolder my-5">Our Head Office</h1>
					<!--end::Subtitle-->
					<!--begin::Description-->
					<div class="text-gray-700 fs-3 fw-bold">
					@if($wb_setting->address)
						{{ $wb_setting->address }}</br>
						{{ $wb_setting->city->name }},&nbsp;{{$wb_setting->city->state->code}},&nbsp;{{ $wb_setting->zip_code }}
					@elseif($wb_setting->city_id)
						{{ $wb_setting->city->name }},&nbsp;{{$wb_setting->city->state->code}},&nbsp;{{ $wb_setting->zip_code }}
					@endif
					</div>
					<!--end::Description-->
				</div>
				<!--end::Address-->
			</div>
			<!--end::Col-->
		</div>
		<!--end::Row-->
		<!--begin::Card-->
		<div class="card mb-4 bg-light text-center">
			<!--begin::Body-->
			<div class="card-body py-12">
				@if($wb_setting->whatsapp)
				<!--begin::Icon-->
				<a href="https://wa.me/1{{ preg_replace('/[^0-9]/', '',$wb_setting->whatsapp) }}?text={{ urlencode('can i have a estimate please?') }}" class="mx-4">
					<i class='fab fa-whatsapp fs-2hx'></i>
				</a>
				<!--end::Icon-->
				@endif
				
				@if($wb_setting->facebook)
				<!--begin::Icon-->
				<a href="{{ $wb_setting->facebook }}" class="mx-4">
					<i class='fab fa-facebook fs-2hx'></i>
				</a>
				<!--end::Icon-->
				@endif
				
				@if($wb_setting->twitter)
				<!--begin::Icon-->
				<a href="{{ $wb_setting->twitter }}" class="mx-4">
					<i class='fab fa-twitter fs-2hx'></i>
				</a>
				<!--end::Icon-->
				@endif
				
				
				@if($wb_setting->instagram)
				<!--begin::Icon-->
				<a href="{{ $wb_setting->instagram }}" class="mx-4">
					<i class='fab fa-instagram fs-2hx'></i>
				</a>
				<!--end::Icon-->
				@endif
				
				
				@if($wb_setting->youtube)
				<!--begin::Icon-->
				<a href="{{ $wb_setting->youtube }}" class="mx-4">
					<i class='fab fa-youtube fs-2hx'></i>
				</a>
				<!--end::Icon-->
				@endif
				
				@if($wb_setting->tiktok)
				<!--begin::Icon-->
				<a href="{{ $wb_setting->tiktok }}" class="mx-4">
					<i class='fab fa-tiktok fs-2hx'></i>
				</a>
				<!--end::Icon-->
				@endif
				
				@if($wb_setting->email)
				<!--begin::Icon-->
				<a href="mailto:{{ $wb_setting->email }}" class="mx-4">
					<i class='fas fa-mail-bulk fs-2hx'></i>
				</a>
				<!--end::Icon-->
				@endif
				
			</div>
			<!--end::Body-->
		</div>
		<!--end::Card-->
	</div>
	<!--end::Body-->
</x-FrontendLayout>

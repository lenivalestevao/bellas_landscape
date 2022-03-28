<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--begin::Head-->
	<head><base href="">
		<meta charset="utf-8" />
		<title>Admin | {{ $wb_setting->title }}</title>
		<meta name="description" content="Metronic admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
		<meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular 11, VueJs, React, Laravel, admin themes, web design, figma, web development, ree admin themes, bootstrap admin, bootstrap dashboard" />
		<link rel="canonical" href="" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		<link href="{{asset('images/favicon.png')}}" rel="shortcut icon">
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="{{ asset('assets/admin/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/admin/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
				
		<!--end::Global Stylesheets Bundle-->
		<style>
		  .sorting:hover{cursor: pointer;}
		</style>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed toolbar-tablet-and-mobile-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				
				@include('includes.admin.header')
				
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" style="" class="header align-items-stretch">
						<!--begin::Container-->
						<div class="container-fluid d-flex align-items-stretch justify-content-between">
							<!--begin::Aside mobile toggle-->
							<div class="d-flex align-items-center d-lg-none ms-n3 me-1" title="Show aside menu">
								<div class="btn btn-icon btn-active-light-primary" id="kt_aside_mobile_toggle">
									<!--begin::Svg Icon | path: icons/duotone/Text/Menu.svg-->
									<span class="svg-icon svg-icon-2x mt-1">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<rect fill="#000000" x="4" y="5" width="16" height="3" rx="1.5" />
												<path d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L18.5,10 C19.3284271,10 20,10.6715729 20,11.5 C20,12.3284271 19.3284271,13 18.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z" fill="#000000" opacity="0.3" />
											</g>
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
							</div>
							<!--end::Aside mobile toggle-->
							<!--begin::Mobile logo-->
							<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
								<a href="{{ route('admin.dashboard') }}" class="d-lg-none">
									<img alt="Logo" src="{{ route('images', ['width' => '120','height' => '60', 'type' => 'logo', 'image'=> $wb_setting->logo]) }}" class="h-30px" />
								</a>
							</div>
							<!--end::Mobile logo-->
							
							@include('includes.admin.toolbar')
							
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						{{ $slot }}
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
					<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
							<!--begin::Copyright-->
							<div class="text-dark order-2 order-md-1">
								<span class="text-muted fw-bold me-1">&copy;&nbsp;{{ date('Y') }}</span>
								<a href="" target="_blank" class="text-gray-800 text-hover-primary">{{ $wb_setting->title }}</a>
							</div>
							<!--end::Copyright-->
							{{--
							<!--begin::Menu-->
							<ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
								<li class="menu-item">
									<a href="https://keenthemes.com/faqs" target="_blank" class="menu-link px-2">About</a>
								</li>
								<li class="menu-item">
									<a href="https://keenthemes.com/support" target="_blank" class="menu-link px-2">Support</a>
								</li>
								<li class="menu-item">
									<a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
								</li>
							</ul>
							<!--end::Menu-->
							--}}
						</div>
						<!--end::Container-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
		<!--begin::Drawers-->
		
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<!--begin::Svg Icon | path: icons/duotone/Navigation/Up-2.svg-->
			<span class="svg-icon">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<polygon points="0 0 24 0 24 24 0 24" />
						<rect fill="#000000" opacity="0.5" x="11" y="10" width="2" height="10" rx="1" />
						<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
					</g>
				</svg>
			</span>
			<!--end::Svg Icon-->
		</div>
		<!--end::Scrolltop-->
		<!--end::Main-->
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{ asset('assets/admin/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{ asset('assets/admin/js/scripts.bundle.js')}}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="{{ asset('assets/admin/js/custom/widgets.js')}}"></script>
		<script src="{{ asset('assets/admin/js/custom/apps/chat/chat.js')}}"></script>
		<script src="{{ asset('assets/admin/js/custom/modals/create-app.js')}}"></script>
		<script src="{{ asset('assets/admin/js/custom/modals/upgrade-plan.js')}}"></script>
		
		
		
		<!--end::Page Custom Javascript-->
		@yield('scripts')
		@stack('scripts')
		@livewireScripts
		
		<script type="text/javascript">
			$(function(){

				 @if(Session::has('message'))
			        toastr.options = {
			            "closeButton": false,
			            "debug": false,
			            "newestOnTop": false,
			            "progressBar": false,
			            "positionClass": "toast-bottom-right",
			            "preventDuplicates": false,
			            "onclick": null,
			            "showDuration": "300",
			            "hideDuration": "1000",
			            "timeOut": "5000",
			            "extendedTimeOut": "1000",
			            "showEasing": "swing",
			            "hideEasing": "linear",
			            "showMethod": "fadeIn",
			            "hideMethod": "fadeOut"
			        };

			        toastr.success("{{ session('message') }}");
		        @endif

		        @if(Session::has('error'))
			        toastr.options = {
			            "closeButton": false,
			            "debug": false,
			            "newestOnTop": false,
			            "progressBar": false,
			            "positionClass": "toast-bottom-right",
			            "preventDuplicates": false,
			            "onclick": null,
			            "showDuration": "300",
			            "hideDuration": "1000",
			            "timeOut": "5000",
			            "extendedTimeOut": "1000",
			            "showEasing": "swing",
			            "hideEasing": "linear",
			            "showMethod": "fadeIn",
			            "hideMethod": "fadeOut"
			        };

			        toastr.error("{{ session('error') }}");
			        @endif
		        
			});
		</script>
		
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    	<meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

         @if(View::hasSection('meta_name'))
            <title>@yield('meta_name')</title>
            <meta name="description" content="@yield('meta_description')">
            <meta name="image" content="@yield('meta_image')">
            <!-- Schema.org for Google -->
            <meta itemprop="name" content="@yield('meta_name')">
            <meta itemprop="description" content="@yield('meta_description')">
            <meta itemprop="image" content="@yield('meta_image')">
            <!-- Open Graph general (Facebook, Pinterest & Google+) -->
            <meta property="og:title" content="@yield('meta_name')">
            <meta property="og:description" content="@yield('meta_description')">
            <meta property="og:image" content="@yield('meta_image')">

            <meta property="og:site_name" content="@yield('meta_name')">
            <meta property="og:locale" content="en_US">
            <meta property="og:type" content="website">
            <!-- Twitter -->
            <meta property="twitter:card" content="summary">
            <meta property="twitter:title" content="@yield('meta_name')">
            <meta property="twitter:description" content="@yield('meta_description')">
            <meta property="twitter:image:src" content="@yield('meta_image')">
        @else
        	<title>{{ $wb_setting->title }}</title>
            <meta name="description" content="{{ $wb_setting->description }}">
            <meta name="image" content="">
            <!-- Schema.org for Google -->
            <meta itemprop="name" content="{{ $wb_setting->title }}">
            <meta itemprop="description" content="{{ $wb_setting->description }}">
            <meta itemprop="image" content="">
            <!-- Open Graph general (Facebook, Pinterest & Google+) -->
            <meta property="og:title" content="{{ $wb_setting->title }}">
            <meta property="og:description" content="{{ $wb_setting->description }}">
            <meta property="og:image" content="">
            
            <meta property="og:site_name" content="{{ $wb_setting->title }}">
            <meta property="og:locale" content="en_US">
            <meta property="og:type" content="website">
            <!-- Twitter -->
            <meta property="twitter:card" content="summary">
            <meta property="twitter:title" content="{{ $wb_setting->title }}">
            <meta property="twitter:description" content="{{ $wb_setting->description }}">
            <meta property="twitter:image:src" content="">
        @endif


		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		
		<link href="{{ asset('assets/frontend/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/frontend/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />

        @livewireStyles
        @yield('style')
       
    </head>

    <body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" data-bs-offset="200" class="bg-white position-relative">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Header Section-->
			<div class="mb-0" id="home">
				<!--begin::Wrapper-->
				<div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg" style="background-image: url({{ asset('assets/frontend/media/svg/illustrations/landing.svg') }})">
					<!--begin::Header-->
					<div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
						<!--begin::Container-->
						<div class="container">
							<!--begin::Wrapper-->
							<div class="d-flex align-items-center justify-content-between">
								<!--begin::Logo-->
								<div class="d-flex align-items-center flex-equal">
									<!--begin::Mobile menu toggle-->
									<button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none" id="kt_landing_menu_toggle">
										<!--begin::Svg Icon | path: icons/duotone/Text/Menu.svg-->
										<span class="svg-icon svg-icon-2hx">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<rect fill="#000000" x="4" y="5" width="16" height="3" rx="1.5" />
													<path d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L18.5,10 C19.3284271,10 20,10.6715729 20,11.5 C20,12.3284271 19.3284271,13 18.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z" fill="#000000" opacity="0.3" />
												</g>
											</svg>
										</span>
										<!--end::Svg Icon-->
									</button>
									<!--end::Mobile menu toggle-->
									<!--begin::Logo image-->
									<a href="{{ route('frontend.home') }}">
										<img alt="Logo" src="{{ route('images', ['width' => '160','height' => '100', 'type' => 'logo', 'image'=> $wb_setting->logo]) }}" class="logo-default  " />
										<img alt="Logo" src="{{ route('images', ['width' => '110','height' => '60', 'type' => 'logo', 'image'=> $wb_setting->logo]) }}" class="logo-sticky  " />
									</a>
									<!--end::Logo image-->
								</div>
								<!--end::Logo-->
								<!--begin::Menu wrapper-->
								<div class="d-lg-block" id="kt_header_nav_wrapper">
									<div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true" data-kt-drawer-name="landing-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="200px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-place="true" data-kt-place-mode="prepend" data-kt-place-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
										<!--begin::Menu-->
										<div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-500 menu-state-title-primary nav nav-flush fs-5 fw-bold" id="kt_landing_menu">
											<!--begin::Menu item-->
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link {{request()->route()->getName() == 'frontend.home' ? 'active' : ''}} py-3 px-4 px-xxl-6" href="{{ route('frontend.home') }}" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Home</a>
												<!--end::Menu link-->
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link {{request()->route()->getName() == 'frontend.our_services' ? 'active' : ''}} py-3 px-4 px-xxl-6" href="{{ route('frontend.our_services') }}" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Our Services</a>
												<!--end::Menu link-->
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link {{request()->route()->getName() == 'frontend.portfolio' ? 'active' : ''}} py-3 px-4 px-xxl-6" href="{{ route('frontend.portfolio') }}" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Porfifolio</a>
												<!--end::Menu link-->
											</div>
											<!--end::Menu item-->
											
											@if($show_about_us)
											<!--begin::Menu item-->
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link {{request()->route()->getName() == 'frontend.about_us' ? 'active' : ''}} py-3 px-4 px-xxl-6" href="{{ route('frontend.about_us') }}" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">About US</a>
												<!--end::Menu link-->
											</div>
											<!--end::Menu item-->
											@endif
											
											@if($show_terms_of_service)
											<!--begin::Menu item-->
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link {{request()->route()->getName() == 'frontend.terms_of_service' ? 'active' : ''}} py-3 px-4 px-xxl-6" href="{{ route('frontend.terms_of_service') }}" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Terms of Service</a>
												<!--end::Menu link-->
											</div>
											<!--end::Menu item-->
											@endif
											
											@if($show_privacy_policy)
											<!--begin::Menu item-->
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link {{request()->route()->getName() == 'frontend.privacy_policy' ? 'active' : ''}} py-3 px-4 px-xxl-6" href="{{ route('frontend.privacy_policy') }}" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Privacy & Policy</a>
												<!--end::Menu link-->
											</div>
											<!--end::Menu item-->
											@endif
											
											<!--begin::Menu item-->
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link {{request()->route()->getName() == 'frontend.contact_us' ? 'active' : ''}} py-3 px-4 px-xxl-6" href="{{ route('frontend.contact_us') }}" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Contact</a>
												<!--end::Menu link-->
											</div>
											<!--end::Menu item-->
											
											
										
										</div>
										<!--end::Menu-->
									</div>
								</div>
								<!--end::Menu wrapper-->
								<!--begin::Toolbar-->
								<div class="flex-equal text-end ms-1">
									<a href="{{ route('login') }}" class="btn btn-success">Login</a>
								</div>
								<!--end::Toolbar-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
					@yield('sub-header')
				</div>
				<!--end::Wrapper-->
				<!--begin::Curve bottom-->
				<div class="landing-curve landing-dark-color mb-10 mb-lg-20">
					<svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
					</svg>
				</div>
				<!--end::Curve bottom-->
			</div>
			<!--end::Header Section-->
			
			<!--begin::How It Works Section-->
			<div class="mb-n10 z-index-2 pb-20">
				<!--begin::Container-->
				<div class="container">
					{{ $slot }}
				</div>
			</div>
			
			<!--begin::Footer Section-->
			<div class="mb-0">
				<!--begin::Curve top-->
				
				<div class="landing-curve landing-dark-color mt-10 mt-lg-20">
					<svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
					</svg>
				</div>
				<!--end::Curve top-->
				<!--begin::Wrapper-->
				<div class="landing-dark-bg pt-20">
					<!--begin::Container-->
					<div class="container">
						<!--begin::Row-->
						<div class="row py-10 py-lg-20">
							<!--begin::Col-->
							<div class="col-lg-6 pe-lg-16 mb-10 mb-lg-0">
								<!--begin::Block-->
								<div class="rounded landing-dark-border p-9 mb-10">
									<!--begin::Title-->
									<h2 class="text-white">Would you need a Custom License?</h2>
									<!--end::Title-->
									<!--begin::Text-->
									<span class="fw-normal fs-4 text-gray-700">Email us to
									<a href="mailto:{{ $wb_setting->email }}" class="text-white opacity-50 text-hover-primary">{{ $wb_setting->email }}</a></span>
									<!--end::Text-->
								</div>
								<!--end::Block-->
								<!--begin::Block-->
								<div class="rounded landing-dark-border p-9">
									<!--begin::Title-->
									<h2 class="text-white">How About a Custom Project?</h2>
									<!--end::Title-->
									<!--begin::Text-->
									<span class="fw-normal fs-4 text-gray-700">Use Our Custom Development Service.
									<a href="{{ route('frontend.contact_us') }}" class="text-white opacity-50 text-hover-primary">Click to Get a Quote</a></span>
									<!--end::Text-->
								</div>
								<!--end::Block-->
							</div>
							<!--end::Col-->
							<!--begin::Col-->
							<div class="col-lg-6 ps-lg-16">
								<!--begin::Navs-->
								<div class="d-flex justify-content-center">
						
									<!--begin::Links-->
									<div class="d-flex fw-bold flex-column ms-lg-20">
										<!--begin::Subtitle-->
										<h4 class="fw-bolder text-gray-400 mb-6">Stay Connected</h4>
										<!--end::Subtitle-->
										
										
										@if($wb_setting->whatsapp)
    										<!--begin::Link-->
    										<a href="https://wa.me/1{{ preg_replace('/[^0-9]/', '',$wb_setting->whatsapp) }}?text={{ urlencode('can i have a estimate please?') }}" class="mb-6">
    											<span class="text-white opacity-50 text-hover-primary fs-5 mb-6"><i class='fab fa-whatsapp'></i>&nbsp;WhatsApp</span>
    										</a>
    										<!--end::Link-->
										@endif
										
										@if($wb_setting->facebook)
										<!--begin::Link-->
										<a href="{{ $wb_setting->facebook }}" class="mb-6">
											<span class="text-white opacity-50 text-hover-primary fs-5 mb-6"><i class='fab fa-facebook'></i>&nbsp;Facebook</span>
										</a>
										<!--end::Link-->
										@endif
										
										@if($wb_setting->twitter)
										<!--begin::Link-->
										<a href="{{ $wb_setting->twitter }}" class="mb-6">
											<span class="text-white opacity-50 text-hover-primary fs-5 mb-6"><i class='fab fa-twitter'></i>&nbsp;Twitter</span>
										</a>
										<!--end::Link-->
										@endif
										
										@if($wb_setting->instagram)
										<!--begin::Link-->
										<a href="{{ $wb_setting->instagram }}" class="mb-6">
											<span class="text-white opacity-50 text-hover-primary fs-5 mb-6"><i class='fab fa-instagram'></i>&nbsp;Instagram</span>
										</a>
										<!--end::Link-->
										@endif
										
										@if($wb_setting->youtube)
										<!--begin::Link-->
										<a href="{{ $wb_setting->youtube }}" class="mb-6">
											<span class="text-white opacity-50 text-hover-primary fs-5 mb-6"><i class='fab fa-youtube'></i>&nbsp;Youtube</span>
										</a>
										<!--end::Link-->
										@endif
										
										@if($wb_setting->tiktok)
										<!--begin::Link-->
										<a href="{{ $wb_setting->tiktok }}" class="mb-6">
											<span class="text-white opacity-50 text-hover-primary fs-5 mb-6"><i class='fab fa-tiktok'></i>&nbsp;TikTok</span>
										</a>
										<!--end::Link-->
										@endif
										
										@if($wb_setting->email)
										<!--begin::Link-->
										<a href="mailto:{{ $wb_setting->email }}" class="mb-6">
											<span class="text-white opacity-50 text-hover-primary fs-5 mb-6"><i class='fas fa-mail-bulk'></i>&nbsp;E-Mail</span>
										</a>
										<!--end::Link-->
										@endif
										
									</div>
									<!--end::Links-->
								</div>
								<!--end::Navs-->
							</div>
							<!--end::Col-->
						</div>
						<!--end::Row-->
					</div>
					<!--end::Container-->
					<!--begin::Separator-->
					<div class="landing-dark-separator"></div>
					<!--end::Separator-->
					<!--begin::Container-->
					<div class="container">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column flex-md-row flex-stack py-7 py-lg-10">
							<!--begin::Copyright-->
							<div class="d-flex align-items-center order-2 order-md-1">
								<!--begin::Logo-->
								<a href="{{ route('frontend.home') }}">
									<img alt="Logo" src="{{ route('images', ['width' => '120','height' => '65','type' => 'logo', 'image'=> $wb_setting->logo]) }}" class="" />
								</a>
								<!--end::Logo image-->
								<!--begin::Logo image-->
								<span class="mx-5 fs-6 fw-bold text-gray-600 pt-1" href="{{ route('frontend.home') }}">&copy;&nbsp;{{ date('Y') }}&nbsp;{{ $wb_setting->title }}</span>
								<!--end::Logo image-->
							</div>
							<!--end::Copyright-->
							<!--begin::Menu-->
							<ul class="menu menu-gray-600 menu-hover-primary fw-bold fs-6 fs-md-5 order-1 mb-5 mb-md-0">
								<li class="menu-item mx-5">
									<a href="{{ route('frontend.contact_us') }}" target="_blank" class="menu-link px-2">Contact Us</a>
								</li>
							</ul>
							<!--end::Menu-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Footer Section-->
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
		</div>
		<!--end::Main-->
		
		
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{asset('assets/frontend/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{asset('assets/frontend/js/scripts.bundle.js') }}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="{{asset('assets/frontend/plugins/custom/fslightbox/fslightbox.bundle.js') }}"></script>
		<script src="{{asset('assets/frontend/plugins/custom/typedjs/typedjs.bundle.js') }}"></script>
		<!--end::Page Vendors Javascript-->
		
		
		<!--end::Javascript-->
		
        @yield('javascript')
        @yield('script')
        @yield('scripts')
        @livewireScripts
    </body>
</html>

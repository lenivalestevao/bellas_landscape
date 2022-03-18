<!--begin::Aside-->
<div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
	<!--begin::Brand-->
	<div class="aside-logo flex-column-auto" id="kt_aside_logo">
		<!--begin::Logo-->
		<a href="{{ route('admin.dashboard') }}">
			<img alt="Logo" src="{{ route('images', ['width' => '120','height' => '65', 'type' => 'logo', 'image'=> $wb_setting->logo]) }}" class=" logo" />
		</a>
		<!--end::Logo-->
		<!--begin::Aside toggler-->
		<div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize">
			<!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-double-left.svg-->
			<span class="svg-icon svg-icon-1 rotate-180">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<polygon points="0 0 24 0 24 24 0 24" />
						<path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
						<path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.5" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
					</g>
				</svg>
			</span>
			<!--end::Svg Icon-->
		</div>
		<!--end::Aside toggler-->
	</div>
	<!--end::Brand-->
	<!--begin::Aside menu-->
	<div class="aside-menu flex-column-fluid">
		<!--begin::Aside Menu-->
		<div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
			<!--begin::Menu-->
			<div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">
				<div class="menu-item">
					<a class="menu-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
						<span class="menu-icon">
							<span class="svg-icon svg-icon-2">
                                <!--begin::Svg Icon | path: icons/duotone/Design/PenAndRuller.svg-->
                       			<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
            						<path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero"></path>
            						<path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3"></path>
            					</svg>
                                <!--end::Svg Icon-->
                            </span>
						</span>
						<span class="menu-title">Dashboard</span>
					</a>
				</div>
				<div class="menu-item">
					<a class="menu-link" href="{{ route('frontend.home') }}" target="_blank">
						<span class="menu-icon">
							<!--begin::Svg Icon | path: icons/duotone/Design/Sketch.svg-->
							<span class="svg-icon svg-icon-2">
								<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<polygon fill="#000000" opacity="0.3" points="5 3 19 3 23 8 1 8" />
									<polygon fill="#000000" points="23 8 12 20 1 8" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</span>
						<span class="menu-title">Landing</span>
					</a>
				</div>
				
				<div class="menu-item">
					<div class="menu-content pt-8 pb-2">
						<span class="menu-section text-muted text-uppercase fs-8 ls-1">Apps</span>
					</div>
				</div>
				
				<div data-kt-menu-trigger="click" class="menu-item menu-accordion show">
					<span class="menu-link">
						<span class="menu-icon">
							<i class='bi bi-columns fs-2'></i>
						</span>
						<span class="menu-title">Pages</span>
						<span class="menu-arrow"></span>
					</span>
					<div class="menu-sub menu-sub-accordion menu-active-bg">
						@foreach($wb_menu as $menu)
    						<div class="menu-item">
    							<a class='menu-link {{ request()->routeIs("{$menu->route}*") ? "active" : "" }}' href="{{ route($menu->route) }}">
    								<span class="menu-bullet">
    									<span class="bullet bullet-dot"></span>
    								</span>
    								<span class="menu-title">{{ $menu->title }}</span>
    							</a>
    						</div>
						@endforeach
					</div>
					<div class="menu-item">
    					<div class="menu-content pt-8 pb-2">
    						<span class="menu-section text-muted text-uppercase fs-8 ls-1">Website Settings</span>
    					</div>
    				</div>
    				<div class="menu-item">
    					<a class="menu-link {{ request()->routeIs('admin.settings') ? 'active' : '' }}" href="" >
    						<span class="menu-icon">
    							<i class='bi bi-gear fs-2'></i>
    						</span>
    						<span class="menu-title">Settings</span>
    					</a>
					</div>
				</div>
				
				
				
				<div class="menu-item">
					<div class="menu-content">
						<div class="separator mx-1 my-4"></div>
					</div>
				</div>
				<div class="menu-item">
					<span class="menu-link" >
						<span class="menu-icon">
							<!--begin::Svg Icon | path: icons/duotone/Files/File.svg-->
							<span class="svg-icon svg-icon-2">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<polygon points="0 0 24 0 24 24 0 24" />
										<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
										<rect fill="#000000" x="6" y="11" width="9" height="2" rx="1" />
										<rect fill="#000000" x="6" y="15" width="5" height="2" rx="1" />
									</g>
								</svg>
							</span>
							<!--end::Svg Icon-->
						</span>
						<span class="menu-title">Changelog v1.0.1</span>
					</span>
				</div>
				
			</div>
			<!--end::Menu-->
		
				
				
		
		</div>
	</div>
	<!--end::Aside menu-->
	
	<!--begin::Footer-->
	<div class="aside-footer flex-column-auto pt-5 pb-7 px-5" id="kt_aside_footer">
		<span class="btn btn-custom btn-primary w-100" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-delay-show="8000" title="Check out the complete documentation with over 100 components">
			<span class="btn-label">Kratus Agency</span>
			<!--begin::Svg Icon | path: icons/duotone/General/Clipboard.svg-->
			<span class="svg-icon btn-icon svg-icon-2">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<rect x="0" y="0" width="24" height="24" />
						<path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3" />
						<path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000" />
						<rect fill="#000000" opacity="0.3" x="7" y="10" width="5" height="2" rx="1" />
						<rect fill="#000000" opacity="0.3" x="7" y="14" width="9" height="2" rx="1" />
					</g>
				</svg>
			</span>
			<!--end::Svg Icon-->
		</span>
	</div>
	<!--end::Footer-->
</div>
<!--end::Aside-->
<x-FrontendLayout>
<!--begin::About card-->
	<div class="card">
		<!--begin::Body-->
		<div class="card-body">
			<!--begin::About-->
			<div class="mb-18">
				<!--begin::Wrapper-->
				<div class="mb-10">
					<!--begin::Top-->
					<div class="text-center mb-15">
						<!--begin::Title-->
						<h3 class="fs-2hx text-dark mb-5">{{ Str::title($page->name) }}</h3>
						<!--end::Title-->
						<!--begin::Text-->
						<div class="fs-5 text-muted fw-bold">{{ $wb_setting->description }}</div>
						<!--end::Text-->
					</div>
					<!--end::Top-->
					<!--begin::Overlay-->
					<div class="text-center px-4">
						<!--begin::Image-->
						
						<!--end::Image-->
						@if($page->images()->exists())
						@php $image = $page->images->first() @endphp
                    		<img alt="{{ $page->name }}"  src="{{ route('images', ['width' => '1000', 'height' => '600', 'f' => 'page', 'image'=> $image->id]) }}">
                        @endif
						<!--end::Links-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Wrapper-->
				<!--begin::Description-->
				<div class="fs-5 fw-bold text-gray-600">
					{!! $page->html !!}
			</div>
			<!--end::About-->
			
			<!--begin::Team-->
			<div class="mb-18 pt-10">
				<!--begin::Heading-->
				<div class="text-center mb-12">
					<!--begin::Title-->
					<h3 class="fs-2hx text-dark mb-5">Our Team</h3>
				</div>
				<!--end::Heading-->
				<!--begin::Slider-->
				<div class="tns tns-default mb-10 tns-initiazlied">
					<!--begin::Wrapper-->
					<div class="tns-outer" id="tns1-ow">
						<div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true"></div>
						<div id="tns1-mw" class="tns-ovh">
							<div class="tns-inner" id="tns1-iw">
								<div data-tns="true" data-tns-loop="true"
									data-tns-swipe-angle="false" data-tns-speed="2000"
									data-tns-autoplay="true" data-tns-autoplay-timeout="18000"
									data-tns-controls="true" data-tns-nav="false"
									data-tns-items="1" data-tns-center="false"
									data-tns-dots="false"
									data-tns-prev-button="#kt_team_slider_prev"
									data-tns-next-button="#kt_team_slider_next"
									data-tns-responsive="{1200: {items: 3}, 992: {items: 2}}"
									class="  tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal"
									id="tns1" style="transform: translate3d(-46.6667%, 0px, 0px);">
									
									@foreach($teams as $team)
										<!--begin::Item-->
										<div class="text-center tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
											<!--begin::Photo-->
											@php
												$im = "https://ui-avatars.com/api/?name={{ $team->name }}&size=250";
												if($team->images()->exists())
													$im = route('images', ['size'=> 200, 'f' => 'team', 'image'=> $team->images->first()->id]);
											@endphp
											<div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image: url('{{ $im }}')"></div>
											<!--end::Photo-->
											<!--begin::Person-->
											<div class="mb-0">
												<!--begin::Name-->
												<a href="#"
													class="text-dark fw-bolder text-hover-primary fs-3">{{ $team->name }}</a>
												<!--end::Name-->
												<!--begin::Position-->
												<div class="text-muted fs-6 fw-bold mt-1">{{ $team->job_title }}</div>
												<!--begin::Position-->
											</div>
											<!--end::Person-->
										</div>
										<!--end::Item-->
									
									@endforeach
									
									
								</div>
							</div>
						</div>
					</div>
					<!--end::Wrapper-->
					<!--begin::Button-->
					<button class="btn btn-icon btn-active-color-primary"
						id="kt_team_slider_prev" aria-controls="tns1" tabindex="-1"
						data-controls="prev">
						<!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-left.svg-->
						<span class="svg-icon svg-icon-3x"> <svg
								xmlns="http://www.w3.org/2000/svg"
								xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
								height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none"
									fill-rule="evenodd">
															<polygon points="0 0 24 0 24 24 0 24"></polygon>
															<path
									d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z"
									fill="#000000" fill-rule="nonzero"
									transform="translate(12.000003, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-12.000003, -11.999999)"></path>
														</g>
													</svg>
						</span>
						<!--end::Svg Icon-->
					</button>
					<!--end::Button-->
					<!--begin::Button-->
					<button class="btn btn-icon btn-active-color-primary"
						id="kt_team_slider_next" aria-controls="tns1" tabindex="-1"
						data-controls="next">
						<!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-right.svg-->
						<span class="svg-icon svg-icon-3x"> <svg
								xmlns="http://www.w3.org/2000/svg"
								xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
								height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none"
									fill-rule="evenodd">
															<polygon points="0 0 24 0 24 24 0 24"></polygon>
															<path
									d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z"
									fill="#000000" fill-rule="nonzero"
									transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)"></path>
														</g>
													</svg>
						</span>
						<!--end::Svg Icon-->
					</button>
					<!--end::Button-->
				</div>
				<!--end::Slider-->
			</div>
			<!--end::Team-->
		
		</div>
		<!--end::Body-->
	</div>
	<!--end::About card-->

</x-FrontendLayout>

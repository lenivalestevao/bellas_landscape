<x-FrontendLayout>
	<!--begin::Navbar-->
	<div class="card mb-6" style="background-color: #f5f8fa;">
		<div class="card-body pt-9 pb-0">
			<!--begin::Details-->
			<div class="d-flex flex-wrap flex-sm-nowrap">
				<!--begin: Pic-->
				<div class="me-7 mb-4">
					<div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
						@if($service->images()->exists())
							<img src="{{ route('images', ['size' => '160', 'f' => 'service', 'image'=> $service->images->first()->id]) }}" alt="image">
						@else
							<img src="https://ui-avatars.com/api/?name={{ $service->name }}&size=160" alt="image">
						@endif
					</div>
				</div>
				<!--end::Pic-->
				<!--begin::Info-->
				<div class="flex-grow-1">
					<!--begin::Title-->
					<div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
						<!--begin::User-->
						<div class="d-flex flex-column">
							<!--begin::Name-->
							<div class="d-flex align-items-center mb-2">
								<a href="#">
									<!--begin::Svg Icon | path: icons/duotune/general/gen026.svg-->
									<span class="svg-icon svg-icon-1 svg-icon-primary">
										<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
											<path d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z" fill="#00A3FF"></path>
											<path class="permanent" d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z" fill="white"></path>
										</svg>
									</span>
									<!--end::Svg Icon-->
								</a>
								<a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bolder me-1">{{ Str::Title($service->name) }}</a>
							</div>
							<!--end::Name-->
						</div>
						<!--end::User-->
					</div>
					<!--end::Title-->
					<!--begin::Stats-->
					<div class="d-flex flex-wrap flex-stack pt-10">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column flex-grow-1 pe-8">
							<!--begin::Stats-->
							<div class="d-flex flex-wrap">
								<div class="fw-bold fs-6 text-gray-400">{{ $service->description }}</div>
							</div>
							<!--end::Stats-->
						</div>
						<!--end::Wrapper-->
						
					</div>
					<!--end::Stats-->
				</div>
				<!--end::Info-->
			</div>
			<!--end::Details-->
			
			<!--begin::Navs-->			
			<ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder">
				<!--begin::Nav item-->
				@if($service->html)
				<li class="nav-item mt-2">
					<a class="nav-link text-active-primary ms-0 me-10 py-5" href="#" data-bs-toggle="tab" 
        					data-bs-target="#pane_about">About</a>
				</li>
				@endif
				<!--end::Nav item-->
				<!--begin::Nav item-->
				<li class="nav-item mt-2">
					<a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="#" data-bs-toggle="tab" 
        					data-bs-target="#pane_projects">Projects</a>
				</li>
			</ul>
			<!--begin::Navs-->
		</div>
	</div>
	<!--end::Navbar-->
	
	<div class="tab-content">
		@if($service->html)
    		<div class="tab-pane fade" id="pane_about">
    			<div class='card'>
    				<div class='card-body p-5 px-lg-19 py-lg-16'>
    					<div class='fs-4 fw-bold text-gray-700 mb-13'>
    					{!! $service->html !!}
    					</div>
    				</div>
    			</div>
    		</div>
		@endif
		<div class="tab-pane fade show active" id="pane_projects">
			<!--begin::Row-->
    			<div class="row g-10">
    				    					
    				<!--begin::Col-->
    				<div class="col-lg-12">
    					<!--begin::Row-->
    					<div class="row g-10 mb-10">
    						@foreach($service->portfolios as $p)
    							@php
    								if(!$p->images()->exists()){
    									continue;
    								}
    							@endphp
    							
    							@foreach($p->images as $im)
        							<!--begin::Col-->
        							<div class="col-lg-3">
        								<!--begin::Item-->        								
        								<a class="d-block card-rounded overlay"
        									data-fslightbox="lightbox-projects"
        									href="{{ route('images', ['size' => '600', 'f' => 'portfolio', 'image'=> $im->id]) }}"> <!--begin::Image-->
        									<div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
        										style="background-image: url('{{ route('images', ['size' => '250', 'f' => 'portfolio', 'image'=> $im->id]) }}')"></div>
        									<!--end::Image--> <!--begin::Action-->
        									<div class="overlay-layer card-rounded bg-dark bg-opacity-25">
        										<i class="bi bi-eye-fill fs-3x text-white"></i>
        									</div> <!--end::Action-->
        								</a>
        								<!--end::Item-->
        							</div>
        							<!--end::Col-->
    							@endforeach
    						
    						@endforeach
    						
    					</div>
    					<!--end::Row-->
    					
    				</div>
    				<!--end::Col-->
    			</div>
    			<!--end::Row-->
		</div>
	</div>
	
</x-FrontendLayout>

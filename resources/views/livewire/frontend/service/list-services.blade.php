<div>
     <!--begin::Heading-->
    <div class="text-center mb-17">
    	<!--begin::Title-->
    	<h3 class="fs-2hx text-dark mb-5" id="our-service" data-kt-scroll-offset="{default: 100, lg: 150}">Our Services</h3>
    	<!--end::Title-->
    	<!--begin::Text-->
    	<div class="fs-5 text-muted fw-bold"></div>
    	<!--end::Text-->
    </div>
    <!--end::Heading-->
    
    <!--begin::Row-->
	<div class="row w-100 gy-10 mb-md-20">
	
		@foreach($list_services as $service)
    		<!--begin::Col-->
    		<div class="col-md-4 px-5">
    			<!--begin::Story-->
    			<div class="text-center mb-10 mb-md-0">
    				<!--begin::Illustration-->
    				@if($service->images()->exists())
    					<img src="{{ route('images', ['size' => '300', 'f' => 'service', 'image'=> $service->images->first()->id]) }}" class="mh-225px mb-9 circle" alt="" />
    				@endif
    				<!--end::Illustration-->
    				<!--begin::Heading-->
    				<div class="d-flex flex-center mb-5">
    					
    					<!--begin::Title-->
    					<div class="fs-5 fs-lg-3 fw-bolder text-dark">{{ $service->name }}</div>
    					<!--end::Title-->
    				</div>
    				<!--end::Heading-->
    				<!--begin::Description-->
    				<div class="fw-bold text-muted"><a href="{{ route('frontend.service.show', $service->slug) }}" class='btn btn-light-success'>View More</a></div>
    				<!--end::Description-->
    			</div>
    			<!--end::Story-->
    		</div>
    		<!--end::Col-->
		@endforeach		
	</div>
	<!--end::Row-->
	
</div>

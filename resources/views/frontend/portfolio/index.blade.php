<x-FrontendLayout>
    <div class="card" style="filter: drop-shadow(0px 0px 40px rgba(68, 81, 96, 0.08))">
    	<!--begin::Card body-->
    	<div class="card-body p-lg-20">
    		<!--begin::Heading-->
    		<div class="text-center mb-5 mb-lg-10">
    			<!--begin::Title-->
    			<h3 class="fs-2hx text-dark mb-5" id="portfolio"
    				data-kt-scroll-offset="{default: 100, lg: 150}">Portfolio</h3>
    			<!--end::Title-->
    		</div>
    		<!--end::Heading-->
    		<!--begin::Tabs wrapper-->
    		<div class="d-flex flex-center mb-5 mb-lg-15">
    			<!--begin::Tabs-->
    			<ul class="nav border-transparent flex-center fs-5 fw-bold">
    				@foreach($services as $s)
    					<li class="nav-item">
        					<a class="nav-link text-gray-500 text-active-primary px-3 px-lg-6 @if($loop->first) active @endif" href="#" data-bs-toggle="tab" 
        					data-bs-target="#pane_{{ Str::slug($s->name) }}">{{ Str::Title($s->name) }}</a>
        				</li>
    				@endforeach
    			</ul>
    			<!--end::Tabs-->
    		</div>
    		<!--end::Tabs wrapper-->
    		<!--begin::Tabs content-->
    		<div class="tab-content">
    			@foreach($services as $s)
    			    <!--begin::Tab pane-->
    				<div class="tab-pane fade @if($loop->first) show active @endif" id="pane_{{ Str::slug($s->name) }}">
    					<!--begin::Row-->
        				<div class="row g-10">
        					    					
        					<!--begin::Col-->
        					<div class="col-lg-12">
        						<!--begin::Row-->
        						<div class="row g-10 mb-10">
        							@foreach($portfolios as $p)
            							@php
            								if($p->service_id != $s->id){
            									continue;
        									}
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
    				<!--end::Tab pane-->
    			@endforeach
    		</div>
    		<!--end::Tabs content-->
    	</div>
    	<!--end::Card body-->
    </div>
</x-FrontendLayout>

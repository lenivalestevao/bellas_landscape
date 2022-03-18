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
		</div>
		<!--end::Body-->
	</div>
	<!--end::About card-->
</x-FrontendLayout>

<x-adminLayout> 
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
    	<!--begin::Container-->
    	<div id="kt_toolbar_container"
    		class="container-fluid d-flex flex-stack">
    		<!--begin::Page title-->
    		<div data-kt-place="true" data-kt-place-mode="prepend"
    			data-kt-place-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
    			class="flex-wrap mb-5 page-title d-flex align-items-center me-3 mb-lg-0 lh-1">
    			<!--begin::Title-->
    			<h1 class="my-1 d-flex align-items-center text-dark fw-bolder fs-3">
    				New Portfolio
    				<!--begin::Separator-->
    				<span class="mx-2 border-gray-200 h-20px border-start ms-3"></span>
    				<!--end::Separator-->
    				<!--begin::Description-->
    				<!--                      <small class="my-1 text-muted fs-7 fw-bold ms-1">#XRS-45670</small>  -->
    				<!--end::Description-->
    			</h1>
    			<!--end::Title-->
    		</div>
    		<!--end::Page title-->
    
    	</div>
    	<!--end::Container-->
    </div>
    <!--end::Toolbar--> 
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
    	<div class="container">
    		<div class='row'>
    			@livewire('admin.portfolios.portfolio',['_id' => null])
    		</div>
    	</div>
    </div>
</x-adminLayout>
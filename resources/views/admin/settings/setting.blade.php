<x-adminLayout>
	<!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
    	<!--begin::Container-->
    	<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
    		<!--begin::Page title-->
    		<div data-kt-place="true" data-kt-place-mode="prepend" data-kt-place-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center me-3 flex-wrap mb-5 mb-lg-0 lh-1">
    			<!--begin::Title-->
    			<h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Website Settings
    			<!--begin::Separator-->
    			<span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
    			<!--end::Separator-->
    			<!--begin::Description-->
    			<small class="text-muted fs-7 fw-bold my-1 ms-1"></small>
    			<!--end::Description--></h1>
    			<!--end::Title-->
    		</div>
    		<!--end::Page title-->
    	
    	</div>
    	<!--end::Container-->
    </div>
    <!--end::Toolbar-->
    
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div class="container">
            <div class='row'>
        		@livewire('admin.settings.admin-setting')
            </div>
        </div>
    </div>
</x-adminLayout>
<x-adminLayout>
        <!--begin::Toolbar-->
        <div class="toolbar" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div data-kt-place="true" data-kt-place-mode="prepend" data-kt-place-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="flex-wrap mb-5 page-title d-flex align-items-center me-3 mb-lg-0 lh-1">
                    <!--begin::Title-->
                    <h1 class="my-1 d-flex align-items-center text-dark fw-bolder fs-3">Colors View
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
            <!--begin::Container-->
            <div class="container">
                <div class='row'>
                    <div class="card">
                        <!--begin::Card header-->
                        <div class="card-header border-0 pt-6">
                            <!--begin::Card title-->
                            <div class="card-title">
                                    @livewire('admin.generic.search', [
                                   		'page' => $current_page, 
                                   		'search' => $search, 
                                   		'column' => $column,
                                   		'is_asc' => $is_asc,
                                   		'route_name' => $url
                               		])
                            </div>
                            <!--begin::Card title-->
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Toolbar-->
                                <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                 
                                    <!--begin::Add user-->
                                    <a href='{{ route("admin.colors.create") }}' class="btn btn-light-primary">
                                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Plus.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"></rect>
                                                <rect fill="#000000" opacity="0.5" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000)" x="4" y="11" width="16" height="2" rx="1"></rect>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->Add Color
                                    </a>
                                    
                                    
                                </div>
                                <!--end::Toolbar-->
                                
                                
                                
                            </div>
                            <!--end::Card toolbar-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                        	
                       		@livewire('admin.generic.tablegeneric', [
                           		'columns_table' => $columns_table, 
                           		'table_name' => $table_name, 
                           		'page' => $current_page,
                           		'column' => $column,
                           		'is_asc' => $is_asc,
                           		'search' => $search,
                           		'route_name' => $url,
                           		'current_page' => $current_page
                       		])
                        </div>
                        <!--end::Card body-->
                    </div>
                </div>
            </div>
        </div>
    	 
</x-adminLayout>
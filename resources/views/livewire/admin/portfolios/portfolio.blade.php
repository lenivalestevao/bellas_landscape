<div class="card">
    <!--begin::Header-->
    <div class="card-header card-header-stretch overflow-auto">
    	<!--begin::Tabs-->
    	<ul class="nav nav-stretch nav-line-tabs fw-bold border-transparent flex-nowrap" role="tablist" id="kt_layout_builder_tabs">
    		<li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#tab_portfolio" role="tab">Portfolio</a></li>
    		@if($_id)<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab_images" role="tab">Images</a></li>@endif
    	</ul>
    	<!--end::Tabs-->
    </div>
    <!--end::Header-->
    <!--begin::Form-->
    @php
    	$form_name_generic =  "frm-product-create";  
    	$form_name_generic = Str::slug($form_name_generic, '_');  
    @endphp
    <form class="form" id='{{ $form_name_generic}}' wire:submit.prevent="savePortfolio" enctype="multipart/form-data">
    	<!--begin::Body-->
    	<div class="card-body">
    		<div class="tab-content pt-3">
    			<!--begin::Tab pane-->
    			<div class="tab-pane active" id="tab_portfolio">
    				
    				 <div class="row mb-6">
                        <!--begin::Label-->
                        <label for='name' class="col-lg-4 col-form-label required fw-bold fs-6">Title</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <!--begin::Row-->
                            <div class="row">
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input wire:model="title" id='title' name='title' required="required" type="text" class="form-control mb-3" placeholder="Title" value="{{ old('name') }}" />
                                    <div class="fv-plugins-message-container invalid-feedback">
                                        @error('title')
                                        	<span class="error">{{ $message }}</span> 
                                        @enderror
                                	</div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Col-->
                    </div>
                    
                   <div class="row mb-6">
            			<!--begin::Label-->
            			<label for='service_id' class="col-lg-4 col-form-label fw-bold fs-6 required">Service</label>
            			<!--end::Label-->
            			<!--begin::Col-->
            			<div class="col-lg-8">
            				<!--begin::Row-->
            				<div class="row">
            					<!--begin::Col-->
            					<div wire:ignore class="col-lg-8 fv-row" >
            						<select wire:model="service_id" id='service_id' class="form-select mb-3 fw-bold @error('service_id') is-invalid @enderror"
            							data-width='100%'
            							data-control="select2" 
            							data-allow-clear="true"
            							data-dropdown-parent='#{{ $form_name_generic }}' 
            							data-placeholder='Service' 
            							name="service_id" 
            							tabindex="-1">
            							<option value="" data-select2-id="4">...</option>
            							@foreach($services as $c)
            								<option value="{{ $c->id }}">{{ $c->name }}</option>
            							@endforeach
            						</select>
        							
            						<div class="fv-plugins-message-container invalid-feedback">
            							@error('service_id')
                							<span class="invalid-feedback" role="alert">
                								<strong>{{ $message }}</strong>
                							</span> 
            							@enderror
            						</div>
            					</div>
            					<div class='col-lg-2 fv-row'>
            						<a target="_blank" href="{{ route('admin.services.create') }}" class="btn btn-sm btn-icon btn-light-success">
										<span class="svg-icon svg-icon-primary svg-icon-1x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Navigation/Plus.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/>
                                            <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/>
                                        </g>
                                    	</svg><!--end::Svg Icon--></span>
									</a>
            					</div>
            					<!--end::Col-->
            				</div>
            				<!--end::Row-->
            			</div>
            			<!--end::Col-->
            		</div>
                    
    				<!--begin::Input group-->
                    <div class="row mb-0">
                        <!--begin::Label-->
                        <label for='is_active' class="col-lg-4 col-form-label fw-bold fs-6">
                        	<span class='required'>Active</span>
                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Allow to use it"></i>
                        </label>
                        <!--begin::Label-->
                        <!--begin::Label-->
                        <div class="col-lg-8 d-flex align-items-center">
                            <div class="form-check form-check-solid form-switch fv-row">
                                <input wire:model="is_active" value="1" class="form-check-input w-45px h-30px" type="checkbox" id="is_active" name="is_active" checked="checked" />
                                <label class="form-check-label" for="allowmarketing"></label>
                            </div>
                        </div>
                        <!--begin::Label-->
                    </div>
                    <!--end::Input group-->
    				
    			</div>
    			<!--end::Tab pane-->
    			<!--begin::Tab pane-->
    			<div class="tab-pane" id="tab_images">
        			<div class='d-flex flex-column flex-lg-row-fluid gap-7 gap-lg-10'>
        				
        			</div>
    			</div>
    			<!--end::Tab pane-->
    		</div>
    	</div>
    	<!--end::Body-->
    
    	<!--begin::Footer-->
    	<div class="card-footer py-8 d-flex justify-content-end px-9">
    		<div class="row">
    			<div class="col-lg-12">
    				@csrf
    				<input type="hidden" wire:model="services_image" id='services_image' />
    				<a href="{{ route('admin.portfolio') }}" class="btn btn-light-danger btn-light me-2">Cancel</a>
    				<button type="submit" class="btn btn-light-success btn-light me-2">Save</button>
    			</div>
    		</div>
    	</div>
    	<!--end::Footer-->
    
    </form>
    <!--end::Form-->
    @push('scripts')
    <script type="text/javascript">
    var services_image;
    
	function createLet(value_string){
		var string = "[{"+value_string+"}]";
		var j = string.replace(/'/g,'"')
		services_image = JSON.parse(j)[0];
	}
    
	 function formatState (state) {
		 createLet($('#services_image').val());
		      		 
    	  if (!state.id) { return state.text; }
    	  var $state = $(
			  `
			    <div style="display: flex; align-items: center;">
			       <div><img sytle="display: inline-block;" src="${services_image[state.id]}" style="height: 30px;width: atuto;" /></div>
			       <div style="margin-left: 10px;">
			          ${state.text}
			       </div>
			    </div>
			    `
    	  );
    	  return $state;
    	 }
        
		$(function(){
			$("#service_id").select2({
    		   templateResult: formatState
			});

			$('#service_id').on('change', function(){
				@this.service_id = $(this).val();
			});
		});
    </script>
    @endpush
    
</div>
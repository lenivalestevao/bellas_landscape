<div class="card">
    <!--begin::Header-->
    <div class="card-header card-header-stretch overflow-auto">
    	<!--begin::Tabs-->
    	<ul class="nav nav-stretch nav-line-tabs fw-bold border-transparent flex-nowrap" role="tablist" id="kt_layout_builder_tabs">
    		<li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#tab_product" role="tab">Product</a></li>
    		@if($product_id)<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab_product_item" role="tab">Items</a></li>@endif
    	</ul>
    	<!--end::Tabs-->
    </div>
    <!--end::Header-->
    <!--begin::Form-->
    @php
    	$form_name_generic =  "frm-product-create";  
    	$form_name_generic = Str::slug($form_name_generic, '_');  
    @endphp
    <form class="form" id='{{ $form_name_generic}}' wire:submit.prevent="saveProduct" enctype="multipart/form-data">
    	<!--begin::Body-->
    	<div class="card-body">
    		<div class="tab-content pt-3">
    			<!--begin::Tab pane-->
    			<div class="tab-pane active" id="tab_product">
    				
    				<div class="row mb-6">
                    <!--begin::Label-->
                    <label for='image' class="col-lg-4 col-form-label fw-bold fs-6 required">Image</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <!--begin::Image input-->
                        <div class="image-input image-input-outline  @if(!$model_image && !$image) image-input-empty @endif" data-kt-image-input="true" style="background-image: url({{ asset('assets/admin/media/avatars/blank.png') }})">
                            <!--begin::Preview existing avatar-->
                            																													
                            <div class="image-input-wrapper w-125px h-125px" style="@if($model_image) background-image: url({{ route('images', ['size' => '150', 'f' => 'product', 'image'=> $model_image->id]) }}) @elseif($image) background-image: url({{ $image->temporaryUrl() }}) @else background-image: none; @endif"></div>
                            <!--end::Preview existing avatar-->
                            <!--begin::Label-->
                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                <i class="bi bi-pencil-fill fs-7"></i>
                                <!--begin::Inputs-->
                                <input type="file" wire:model="image" id="image" name="image" accept=".png, .jpg, .jpeg" />
                                <input type="hidden" wire:model="image_remove" name="image_remove" value='' />
                                <!--end::Inputs-->
                            </label>
                            <!--end::Label-->
                            <!--begin::Cancel-->
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
    							<i class="bi bi-x fs-2"></i>
    						</span>
                            <!--end::Cancel-->
                            <!--begin::Remove-->
                            <span @if($model_image)wire:click='removeImage({{ $model_image->id }})'@endif class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
    							<i class="bi bi-x fs-2"></i>
    						</span>
                            <!--end::Remove-->
                        </div>
                        <!--end::Image input-->
                        <!--begin::Hint-->
                        <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                        <div class="fv-plugins-message-container invalid-feedback">
                        @error('image')
                        	<span class="error">{{ $message }}</span> 
                    	@enderror
                    	</div>
                        <!--end::Hint-->
                    </div>
                    <!--end::Col-->
                </div>
    				
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
            			<label for='category_id' class="col-lg-4 col-form-label fw-bold fs-6 required">Category</label>
            			<!--end::Label-->
            			<!--begin::Col-->
            			<div class="col-lg-8">
            				<!--begin::Row-->
            				<div class="row">
            					<!--begin::Col-->
            					<div wire:ignore class="col-lg-8 fv-row" >
            						<select wire:model="category_id" id='category_id' class="form-select mb-3 fw-bold @error('category_id') is-invalid @enderror"
            							data-width='100%'
            							data-control="select2" 
            							data-allow-clear="true"
            							data-dropdown-parent='#{{ $form_name_generic }}' 
            							data-placeholder='Category' 
            							name="category_id" 
            							tabindex="-1">
            							<option value="" data-select2-id="4">...</option>
            							@foreach($categories as $c)
            								<option value="{{ $c->id }}">{{ $c->title }}</option>
            							@endforeach
            						</select>
        							
            						<div class="fv-plugins-message-container invalid-feedback">
            							@error('category_id')
                							<span class="invalid-feedback" role="alert">
                								<strong>{{ $message }}</strong>
                							</span> 
            							@enderror
            						</div>
            					</div>
            					<div class='col-lg-2 fv-row'>
            						<a target="_blank" href="{{ route('admin.categories.create') }}" class="btn btn-sm btn-icon btn-light-success">
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
                    
                    
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label for='link_page' class="col-lg-4 col-form-label required fw-bold fs-6">Link</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <!--begin::Row-->
                            <div class="row">
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input wire:model="link_page" id='link_page' name='link_page' required="required" type="text" class="form-control mb-3" placeholder="Link" value="{{ old('link_page') }}" />
                                    <div class="fv-plugins-message-container invalid-feedback">
                                        @error('link_page')
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
                        <label for='slug' class="col-lg-4 col-form-label fw-bold fs-6">Slug</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <!--begin::Row-->
                            <div class="row">
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input wire:model="slug" id='slug' name='slug' type="text" class="form-control mb-3" placeholder="Slug" value="{{ old('name') }}" />
                                    <div class="fv-plugins-message-container invalid-feedback">
                                        @error('slug')
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
                        <label for='description' class="col-lg-4 col-form-label required fw-bold fs-6">Description</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <!--begin::Row-->
                            <div class="row">
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <textarea wire:model="description" id="description" style="height: 150px;" required="required" name="description" class="form-control mb-3" placeholder="Description" >{{ old('description') }}</textarea>
                                    <div class="fv-plugins-message-container invalid-feedback">
                                        @error('name')
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
    			<div class="tab-pane" id="tab_product_item">
        			<div class='d-flex flex-column flex-lg-row-fluid gap-7 gap-lg-10'>
        				@livewire('admin.products.item',['product_id' => $product_id, 'item_id' => null])
        				@if($_product)
            				@foreach($_product->items as $i)
            					@livewire('admin.products.item',['product_id' => $product_id,'item_id' => $i->id])
            				@endforeach
        				@endif
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
    				<input type="hidden" wire:model="categories_image" id='categories_image' />
    				<a href="{{ route('admin.products') }}" class="btn btn-light-danger btn-light me-2">Cancel</a>
    				<button type="submit" class="btn btn-light-success btn-light me-2">Save</button>
    			</div>
    		</div>
    	</div>
    	<!--end::Footer-->
    
    </form>
    <!--end::Form-->
    @push('scripts')
    <script type="text/javascript">
    var categories_image;
    
	function createLet(value_string){
		var string = "[{"+value_string+"}]";
		var j = string.replace(/'/g,'"')
		categories_image = JSON.parse(j)[0];
	}
    
	 function formatState (state) {
		 createLet($('#categories_image').val());
		      		 
    	  if (!state.id) { return state.text; }
    	  var $state = $(
			  `
			    <div style="display: flex; align-items: center;">
			       <div><img sytle="display: inline-block;" src="${categories_image[state.id]}" style="height: 30px;width: atuto;" /></div>
			       <div style="margin-left: 10px;">
			          ${state.text}
			       </div>
			    </div>
			    `
    	  );
    	  return $state;
    	 }
        
		$(function(){
			$("#category_id").select2({
    		   templateResult: formatState
			});

			$('#category_id').on('change', function(){
				@this.category_id = $(this).val();
			});
		});
    </script>
    @endpush
    
</div>
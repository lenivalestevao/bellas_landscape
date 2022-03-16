<div class="card card-flush py-4">
    <!--begin::Card body-->
    <div class="card-body pt-0">
    	<!--begin::Billing address-->
    	<div class="d-flex flex-column gap-5 gap-md-7">
    		<!--begin::Title-->
    		<div class="fs-3 fw-bolder mb-n2">Item @if($item_id)#{{ $item_id }} @endif</div>
    		<!--end::Title-->
			<!--begin::Input group-->
    		<div class="d-flex flex-column flex-md-row gap-5">
    			<div class="fv-row flex-row-fluid fv-plugins-icon-container">
    				<!--begin::Label-->
    				<label class="form-label">Color</label>
    				<!--end::Label-->
    				<!--begin::Input-->
    				<select wire:model="color_id" id='color_id_{{ $item_id }}'   class="form-select mb-3 fw-bold @error('color_id') is-invalid @enderror"
    					data-width='100%'
    					data-control="select2" 
    					data-allow-clear="true" 
    					data-placeholder='Product Item Color'  
    					tabindex="-1">
    					<option value="" data-select2-id="">...</option>
    					@foreach($_colors as $_c)
    						<option @if($color_id ==  $_c->id)selected="selected"@endif value='{{ $_c->id }}'>{{ $_c->name }}</option>
    					@endforeach
    				</select>
    				<!--end::Input-->
        			<div class="fv-plugins-message-container invalid-feedback">
        				@error('color_id')
                        	<span class="error">{{ $message }}</span> 
                        @enderror
        			</div>
    			</div>
    			<div class="flex-row-fluid">
    				<!--begin::Label-->
    				<label class="form-label">Size</label>
    				<!--end::Label-->
    				<!--begin::Input-->
    				<select wire:model="size_id" id='size_id_{{ $item_id }}' class="form-select mb-3 fw-bold @error('size_id') is-invalid @enderror"
    					data-width='100%'
    					data-control="select2" 
    					data-allow-clear="true" 
    					data-placeholder='Product Item Size'
    					tabindex="-1">
    					<option value="" data-select2-id="">...</option>
    					@foreach($_sizes as $_s)
    						<option @if($size_id ==  $_c->id)selected="selected"@endif   value='{{ $_s->id }}'>{{ $_s->name }}</option>
    					@endforeach
    				</select>
    				<!--end::Input-->
        			<div class="fv-plugins-message-container invalid-feedback">
        				@error('size_id')
                        	<span class="error">{{ $message }}</span> 
                        @enderror
        			</div>
    				<!--end::Input-->
    			</div>
    		</div>
    		<!--end::Input group-->
    		<!--begin::Input group-->
    		<div class="d-flex flex-column flex-md-row gap-5">
    			<div class="flex-row-fluid">
    				<!--begin::Label-->
    				<label class="form-label">Title</label>
    				<!--end::Label-->
    				<!--begin::Input-->
    				<input class="form-control" wire:model='title' placeholder="" value="">
    				<!--end::Input-->
    				<div class="fv-plugins-message-container invalid-feedback">
        				@error('title')
                        	<span class="error">{{ $message }}</span> 
                        @enderror
        			</div>
    			</div>
    			<div class="fv-row flex-row-fluid fv-plugins-icon-container">
    				<!--begin::Label-->
    				<label class="form-label">Slug</label>
    				<!--end::Label-->
    				<!--begin::Input-->
    				<input class="form-control" wire:model="slug">
    				<!--end::Input-->
    				<div class="fv-plugins-message-container invalid-feedback">
        				@error('slug')
                        	<span class="error">{{ $message }}</span> 
                        @enderror
        			</div>
    			</div>
    			<div class="fv-row flex-row-fluid fv-plugins-icon-container">
    				<!--begin::Label-->
    				<label class="required form-label">Price</label>
    				<!--end::Label-->
    				<!--begin::Input-->
    				<input class="form-control" wire:model="price" placeholder="Item Price Ex: 1.50">
    				<!--end::Input-->
        			<div class="fv-plugins-message-container invalid-feedback">
        				@error('price')
                        	<span class="error">{{ $message }}</span> 
                        @enderror
        			</div>
    			</div>
    		</div>
    		<!--end::Input group-->
    		@if($item_id)
    		<div class="py-5">
        		<div class="rounded border p-10">
        		
        			<div class="image-input image-input-outline image-input-empty" data-kt-image-input="true" style="background-image: url({{ asset('assets/admin/media/avatars/blank.png') }})">
                        <!--begin::Preview existing avatar-->
                        																													
                        <div class="image-input-wrapper w-125px h-125px" style="background-image: none;"></div>
                        <!--end::Preview existing avatar-->
                        <!--begin::Label-->
                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                            <i class="bi bi-pencil-fill fs-7"></i>
                            <!--begin::Inputs-->
                            <input wire:model='imageItem' type="file" name="imageItem" accept=".png, .jpg, .jpeg" />
                            <input type="hidden" id="imageItemRemove" value='' />
                            <!--end::Inputs-->
                        </label>
                        <!--end::Label-->
                        <!--begin::Cancel-->
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                    		<i class="bi bi-x fs-2"></i>
                    	</span>
                        <!--end::Cancel-->
                        <!--begin::Remove-->
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                    		<i class="bi bi-x fs-2"></i>
                    	</span>
                        <!--end::Remove-->
                    </div>
        				@foreach($_item->images as $iii)
        					<div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url({{ asset('assets/admin/media/avatars/blank.png') }})">
                                <!--begin::Preview existing avatar-->
                                																													
                                <div class="image-input-wrapper w-125px h-125px" style="background-image: url({{ route('images', ['size' => '150', 'f' => 'product', 'image'=> $iii->id]) }})"></div>
                                <!--end::Preview existing avatar-->
                                <!--begin::Label-->
                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                    <i class="bi bi-pencil-fill fs-7"></i>
                                    <!--begin::Inputs-->
                                    <input id="image_{{ $iii->id }}" name="image" type="file"  accept=".png, .jpg, .jpeg" />
                                    <!--end::Inputs-->
                                </label>
                                <!--end::Label-->
                                <!--begin::Cancel-->
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                            		<i class="bi bi-x fs-2"></i>
                            	</span>
                                <!--end::Cancel-->
                                <!--begin::Remove-->
                                <span wire:click='removeImage({{ $iii->id }})' class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                            		<i class="bi bi-x fs-2"></i>
                            	</span>
                                <!--end::Remove-->
                            </div>
        					
        				@endforeach
        		</div>
        	</div>
    		@endif
    		
    		 @php
        		$btn_name_generic =  "btnSave-".Str::uuid()->toString();  
        		$btn_name_generic = Str::slug($btn_name_generic, '_');  
            @endphp
    		
    		<div class="row">
    			<div class="col-lg-12">
    				@csrf
    				<input readonly="readonly" type="hidden" wire:model="item_id" />
    				<button name="{{ $btn_name_generic }}" data-item='{{ $item_id }}' wire:click='save_item' type="button" class=" btn btn-light-success btn-light me-2">Save</button>
    				@if($item_id)<button wire:click='delete_item' type="button" class=" btn btn-light-danger btn-light me-2">Delete</button>@endif
    			</div>
    		</div>
    		
    		 @push('scripts')
            	<script type="text/javascript">
            		$(function(){
            			$("[id='size_id_{{ $item_id }}']").on('change',function(e){            				
            				@this.size_id = $(this).val();
            			});

            			$("[id='color_id_{{ $item_id }}']").on('change',function(e){            				
            				@this.color_id = $(this).val();
            			});
            		});
            	</script>
            	@endpush
    		
    	</div>
    	<!--end::Billing address-->
    </div>
    <!--end::Card body-->
</div>
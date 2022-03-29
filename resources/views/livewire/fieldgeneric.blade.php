<div>
    @php
		$form_name_generic =  "frm-".Str::uuid()->toString()."-generic";  
		$form_name_generic = Str::slug($form_name_generic, '_');  
    @endphp
	<form id='{{ $form_name_generic}}' method="post" action="{{ str_contains($action, '.update') ? route($action, $obj->id) : route($action) }}" enctype="multipart/form-data">
    	<span>
    		@csrf
    	</span>  
    	@php $print_ckeditor = false; @endphp     
        @foreach($my_fields as $f)
        	@if(isset($f->is_id))
        		<span>
        			<input type="hidden" name='{{ $f->name }}' value="{{ $obj ? $obj->{$f->name} : old($f->name) }}" />
        		</span>
        	@elseif(isset($f->is_image))
        		<!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label for='{{ $f->name }}' class="col-lg-4 col-form-label fw-bold fs-6 @if(isset($f->is_required)) required @endif">{{ $f->title }}</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <!--begin::Image input-->
                        @php
                    		$image = $obj ? $obj->{$f->name}->first() : null;
                        @endphp	                 
                        <div class="image-input image-input-outline  @if(!$image) image-input-empty @endif" data-kt-image-input="true" style="background-image: url({{ asset('assets/admin/media/avatars/blank.png') }})">
                            <!--begin::Preview existing avatar-->
                            																													
                            <div class="image-input-wrapper w-125px h-125px" style="@if($image) background-image: url({{ route('images', ['size' => '150', 'f' => class_basename($obj), 'image'=> $image->id]) }}) @else background-image: none; @endif"></div>
                            <!--end::Preview existing avatar-->
                            <!--begin::Label-->
                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                <i class="bi bi-pencil-fill fs-7"></i>
                                <!--begin::Inputs-->
                                <input @if(isset($f->is_required)) required="required" @endif type="file" id="{{ $f->name }}" name="{{ $f->name }}" accept=".png, .jpg, .jpeg" />
                                <input type="hidden" name="{{ $f->name }}_remove" value='' />
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
                        <!--end::Image input-->
                        <!--begin::Hint-->
                        <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                        <div class="fv-plugins-message-container invalid-feedback">@error($f->name)<span class="error">{{ $message }}</span> @enderror</div>
                        <!--end::Hint-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
            @elseif(isset($f->is_bool))
                 <!--begin::Input group-->
                    <div class="row mb-0">
                        <!--begin::Label-->
                        <label for='{{ $f->name }}' class="col-lg-4 col-form-label fw-bold fs-6">
                        	<span class='@if(isset($f->is_required)) required @endif'>{{ $f->title }}</span>
                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Allow to use it"></i>
                        </label>
                        <!--begin::Label-->
                        <!--begin::Label-->
                        <div class="col-lg-8 d-flex align-items-center">
                            <div class="form-check form-check-solid form-switch fv-row">
                                <input value="1" class="form-check-input w-45px h-30px" type="checkbox" id="{{ $f->name }}" name="{{ $f->name }}" @if($obj) {{ $obj->{$f->name} ? 'checked="checked"' : null }} @else checked="checked" @endif />
                                <label class="form-check-label" for="allowmarketing"></label>
                            </div>
                        </div>
                        <!--begin::Label-->
                    </div>
                    <!--end::Input group-->
            @elseif(isset($f->is_password))
            	<!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label for='{{ $f->name }}' class="col-lg-4 col-form-label @if(isset($f->is_required)) required @endif fw-bold fs-6">{{ $f->title }}</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <!--begin::Row-->
                        <div class="row">
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input autocapitalize="off" @if(isset($f->is_required)) required="required" @endif type="password" id="{{ $f->name }}" name="{{ $f->name }}" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ $f->title }}" value="" />
                                <div class="fv-plugins-message-container invalid-feedback">@error($f->name.'_confirmation')<span class="error">{{ $message }}</span> @enderror</div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->   
                
                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label for='{{ $f->name }}_confirmation' class="col-lg-4 col-form-label @if(isset($f->is_required)) required @endif fw-bold fs-6">{{ $f->title }} Confirmation</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <!--begin::Row-->
                        <div class="row">
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input autocapitalize="off" @if(isset($f->is_required)) required="required" @endif type="password" id="{{ $f->name }}_confirmation" name="{{ $f->name }}_confirmation" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ $f->title }} Confirmation" value="" />
                                <div class="fv-plugins-message-container invalid-feedback">@error($f->name.'_confirmation')<span class="error">{{ $message }}</span> @enderror</div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->   
            @elseif(isset($f->is_text))
            	  <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label for='{{ $f->name }}' class="col-lg-4 col-form-label @if(isset($f->is_required)) required @endif fw-bold fs-6">{{ $f->title }}</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <!--begin::Row-->
                            <div class="row">
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <textarea id="{{ $f->name }}" style="height: 150px;" @if(isset($f->is_required)) required="required" @endif name="{{ $f->name }}" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ $f->title }}" >{{ $obj ? $obj->{$f->name} : old($f->name) }}</textarea>
                                    <div class="fv-plugins-message-container invalid-feedback">@error($f->name)<span class="error">{{ $message }}</span> @enderror</div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
            @elseif(isset($f->is_html))        
            	@php $print_ckeditor = true; @endphp
             <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label for='{{ $f->name }}' class="col-lg-12 col-form-label @if(isset($f->is_required)) required @endif fw-bold fs-6">{{ $f->title }}</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-12">
                            <!--begin::Row-->
                            <div class="row">
                                <!--begin::Col-->
                                <div class="col-lg-12 fv-row">
                                    <textarea id='source_html' style="height: 300px!important;"  @if(isset($f->is_required)) required="required" @endif name="{{ $f->name }}" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ $f->title }}" >{{ $obj ? $obj->{$f->name} : old($f->name) }}</textarea>
                                    <div class="fv-plugins-message-container invalid-feedback">@error($f->name)<span class="error">{{ $message }}</span> @enderror</div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Col-->
                    </div>
            @elseif(isset($f->use_role))
            
            		<!--begin::Input group-->
            		<div class="row mb-6">
            			<!--begin::Label-->
            			<label for='{{ $f->name }}' class="col-lg-4 col-form-label fw-bold fs-6 @if(isset($f->is_required)) required @endif">Role</label>
            			<!--end::Label-->
            			<!--begin::Col-->
            			<div class="col-lg-8">
            				<!--begin::Row-->
            				<div class="row">
            					<!--begin::Col-->
            					<div class="col-lg-8 fv-row" >
            						<select id='{{ $f->name }}' class="makeSelect2 form-select form-select-solid form-select-lg fw-bold @error('role') is-invalid @enderror"
            							data-width='100%'
            							data-control="select2" 
            							data-allow-clear="true"
            							data-dropdown-parent='#{{ $form_name_generic }}' 
            							data-placeholder='Select a Role' 
            							name="{{ $f->name }}" 
            							tabindex="-1">
            							<option value="" data-select2-id="4">...</option>
            							<option @if(($obj && $obj->hasRole('user')) || old($f->name) == 'user') selected="selected" @endif value="user">User</option>
            							<option @if(($obj && $obj->hasRole('super')) || old($f->name) == 'super') selected="selected" @endif value="super">Super/Admin</option>
            						</select>
            
            						<div class="fv-plugins-message-container invalid-feedback">
            							@error($f->name )
                							<span class="invalid-feedback" role="alert">
                								<strong>{{ $message }}</strong>
                							</span> 
            							@enderror
            						</div>
            					</div>
            					<!--end::Col-->
            				</div>
            				<!--end::Row-->
            			</div>
            			<!--end::Col-->
            		</div>
            		<!--end::Input group-->
    		@elseif(isset($f->use_types))
    
    		<!--begin::Input group-->
    		<div class="row mb-6">
    			<!--begin::Label-->
    			<label for='{{ $f->name }}' class="col-lg-4 col-form-label fw-bold fs-6 @if(isset($f->is_required)) required @endif">{{ $f->title }}</label>
    			<!--end::Label-->
    			<!--begin::Col-->
    			<div class="col-lg-8">
    				<!--begin::Row-->
    				<div class="row">
    					<!--begin::Col-->
    					<div class="col-lg-8 fv-row" >
    						<select id='{{ $f->name }}' class="makeSelect22 form-select form-select-solid form-select-lg fw-bold @error($f->name) is-invalid @enderror"
    							data-width='100%'
    							data-control="select2" 
    							data-allow-clear="true"
    							data-dropdown-parent='#{{ $form_name_generic }}' 
    							data-placeholder='Select a Type' 
    							name="{{ $f->name }}" 
    							tabindex="-1">
    							<option value="" data-select2-id="4">...</option>
    							<option @if($obj && $obj->{ $f->name } == 1) selected="selected" @endif value="1">Blue</option>
    							<option @if($obj && $obj->{ $f->name } == 2) selected="selected" @endif value="2">Yellow</option>
    							<option @if($obj && $obj->{ $f->name } == 3) selected="selected" @endif value="3">Red</option>
    							<option @if($obj && $obj->{ $f->name } == 4) selected="selected" @endif value="4">Green</option>
    						</select>
    
    						<div class="fv-plugins-message-container invalid-feedback">
    							@error($f->name )
        							<span class="invalid-feedback" role="alert">
        								<strong>{{ $message }}</strong>
        							</span> 
    							@enderror
    						</div>
    					</div>
    					<!--end::Col-->
    				</div>
    				<!--end::Row-->
    			</div>
    			<!--end::Col-->
    		</div>
    		<!--end::Input group-->
		@else
               <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label for='{{ $f->name }}' class="col-lg-4 col-form-label @if(isset($f->is_required)) required @endif fw-bold fs-6">{{ $f->title }}</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <!--begin::Row-->
                            <div class="row">
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input @if(isset($f->is_required)) required="required" @endif type="text" id="{{ $f->name }}" name="{{ $f->name }}" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ $f->title }}" value="{{ $obj ? $obj->{$f->name} : old($f->name) }}" />
                                    <div class="fv-plugins-message-container invalid-feedback">@error($f->name)<span class="error">{{ $message }}</span> @enderror</div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->    
        	@endif
        @endforeach
        
        <!--begin::Actions-->
            <div class="card-footer d-flex justify-content-end py-6 px-9">
                <a href='{{ url()->previous() }}' class="btn btn-white btn-active-light-danger me-2">Back</a>
                <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save Changes</button>
            </div>
            <!--end::Actions-->
    </form>
    @push('scripts')
    
        
        @if($print_ckeditor)
        	<script src="//cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>
        @endif
        <script>

        @if($print_ckeditor)
            CKEDITOR.replace('source_html', {width: '100%', height: 650, disableAutoInline: true});
		@endif

        function formatState(state) {
            if (!state.id) {
            	return state.text;
            }
            
            var badge = '';
            if(state.element.value =='4'){
            	badge = "success";
            }else if(state.element.value =='3'){
            	badge = "danger";
            }else if(state.element.value == '2'){
            	badge = "warning";
            }else{
            	badge = "primary";
            }
            
            
            var $state = $('<span class="badge badge-'+badge+'">'+state.element.text+'</span>');
            return $state;
        }
		
    	$(function(){
    		$('.makeSelect2').select2({
				placeholder: $(this).attr('data-placeholder'), 
				allowClear: true, 
				dropdownParent: $('#{{ $form_name_generic }}'),
				width: '100%', 
				
			});

    		$('.makeSelect22').select2({
    			templateResult: formatState,
				placeholder: $(this).attr('data-placeholder'), 
				allowClear: true, 
				dropdownParent: $('#{{ $form_name_generic }}'),
				width: '100%', 
				
			});

			
    	});
    	</script>
    	@endpush
</div>




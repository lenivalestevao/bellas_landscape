 <div class="card">
     <!--begin::Card body-->
    <div class="card-body pt-0">
        <div class='tab-content pt-3'>
        	<!--begin::Input group-->
            <div class="row mb-6">
                <!--begin::Label-->
                <label for='logo' class="col-lg-4 col-form-label fw-bold fs-6">Logo</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8">
                    <div class="image-input image-input-outline  @if(!$_logo) image-input-empty @endif" data-kt-image-input="true" style="background-image: url({{ asset('assets/admin/media/avatars/blank.png') }})">
                        <!--begin::Preview existing avatar-->
                        																													
                        <div class="image-input-wrapper w-125px h-125px" style="@if($_logo) background-image: url({{ route('images', ['width' => '140','height' => '80', 'type' => 'logo', 'image'=> $_logo]) }}) @else background-image: none; @endif"></div>
                        <!--end::Preview existing avatar-->
                        <!--begin::Label-->
                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                            <i class="bi bi-pencil-fill fs-7"></i>
                            <!--begin::Inputs-->
                            <input wire:model='imageUpload' type="file" name="imageUpload" accept=".png, .jpg, .jpeg" />
                            <input type="hidden" id="imageUploadRemove" value='' />
                            <!--end::Inputs-->
                        </label>
                        <!--end::Label-->
                        <!--begin::Cancel-->
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
							<i class="bi bi-x fs-2"></i>
						</span>
                        <!--end::Cancel-->
                        <!--begin::Remove-->
                        <span wire:click='removeAvatar' class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
							<i class="bi bi-x fs-2"></i>
						</span>
                        <!--end::Remove-->
                    </div>
                    <!--end::Hint-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->
            
            <!--begin::Input group-->
            <div class="row mb-6">
                <!--begin::Label-->
                <label for='title' class="col-lg-4 col-form-label fw-bold fs-6">Website Title</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8">
                    <!--begin::Row-->
                    <div class="row">
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input wire:model='_title' type="text" id="title" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" />
                            <div class="fv-plugins-message-container invalid-feedback">@error('_title')<span class="error">{{ $message }}</span> @enderror</div>
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
                <label for='keywords' class="col-lg-4 col-form-label fw-bold fs-6">Keywords</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8">
                    <!--begin::Row-->
                    <div class="row">
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input wire:model='_keywords' type="text" id="keywords" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" />
                            <div class="fv-plugins-message-container invalid-feedback">@error('_keywords')<span class="error">{{ $message }}</span> @enderror</div>
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
                <label for='description' class="col-lg-4 col-form-label fw-bold fs-6">Description</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8">
                    <!--begin::Row-->
                    <div class="row">
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <textarea wire:model='_description' id="description" rows='3' class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" ></textarea>
                            <div class="fv-plugins-message-container invalid-feedback">@error('_description')<span class="error">{{ $message }}</span> @enderror</div>
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
                <label for='email' class="col-lg-4 col-form-label fw-bold fs-6">E-mail</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8">
                    <!--begin::Row-->
                    <div class="row">
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input wire:model='_email' type="email" id="email" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"/>
                            <div class="fv-plugins-message-container invalid-feedback">@error('_email')<span class="error">{{ $message }}</span> @enderror</div>
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
                <label for='whatsapp' class="col-lg-4 col-form-label fw-bold fs-6">Phone Number/WhatsApp</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8">
                    <!--begin::Row-->
                    <div class="row">
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input wire:model='_whatsapp' type="tel" id="whatsapp" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"/>
                            <div class="fv-plugins-message-container invalid-feedback">@error('_whatsapp')<span class="error">{{ $message }}</span> @enderror</div>
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
                <label for='address' class="col-lg-4 col-form-label fw-bold fs-6">Address</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8">
                    <!--begin::Row-->
                    <div class="row">
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input wire:model='_address' type="text" id="address" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"/>
                            <div class="fv-plugins-message-container invalid-feedback">@error('_address')<span class="error">{{ $message }}</span> @enderror</div>
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
                <label for='state_id' class="col-lg-4 col-form-label fw-bold fs-6">State</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8">
                    <!--begin::Row-->
                    <div class="row">
                        <!--begin::Col-->
                        <div wire:ignore class="col-lg-8 fv-row">
                        	<select wire:model='_state_id' id='state_id' class="form-control form-control-lg mb-3 mb-lg-0 " data-control="select2" data-hide-search="true">
                            	@foreach($states as $_s)
                            		<option value="{{ $_s->id }}" @if($_s->id == $_state_id) selected="selected" @endif >{{ $_s->name }}</option>
                            	@endforeach
                        	</select>
                            <div class="fv-plugins-message-container invalid-feedback">@error('_state_id')<span class="error">{{ $message }}</span> @enderror</div>
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
                <label class="col-lg-4 col-form-label fw-bold fs-6">City</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8">
                    <!--begin::Row-->
                    <div class="row">
                        <!--begin::Col-->
                        <div wire:ignore class="col-lg-8 fv-row">
                        	<select wire:model='_city_id' class="form-control form-control-lg mb-3 mb-lg-0 city_id">
                            	@foreach($_CITIES as $_s)
                            		<option value="{{ $_s->id }}" @if($_s->id == $_city_id) selected="selected" @endif >{{ $_s->name }}</option>
                            	@endforeach
                        	</select>
                            <div class="fv-plugins-message-container invalid-feedback">@error('_city_id')<span class="error">{{ $message }}</span> @enderror</div>
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
                <label for='zipcode' class="col-lg-4 col-form-label fw-bold fs-6">Zipcode</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8">
                    <!--begin::Row-->
                    <div class="row">
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input wire:model='_zipcode' type="number" id="zipcode" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"/>
                            <div class="fv-plugins-message-container invalid-feedback">@error('_zipcode')<span class="error">{{ $message }}</span> @enderror</div>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->  
            
            
             <!--begin::Input group-->
            <div class="row mb-6 pt-10">
                <!--begin::Label-->
                <label for='twitter' class="col-lg-4 col-form-label fw-bold fs-6">Twitter</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8">
                    <!--begin::Row-->
                    <div class="row">
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input wire:model='_twitter' type="text" id="twitter" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"/>
                            <div class="fv-plugins-message-container invalid-feedback">@error('_twitter')<span class="error">{{ $message }}</span> @enderror</div>
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
                <label for='instagram' class="col-lg-4 col-form-label fw-bold fs-6">Instagram</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8">
                    <!--begin::Row-->
                    <div class="row">
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input wire:model='_instagram' type="text" id="instagram" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"/>
                            <div class="fv-plugins-message-container invalid-feedback">@error('_instagram')<span class="error">{{ $message }}</span> @enderror</div>
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
                <label for='youtube' class="col-lg-4 col-form-label fw-bold fs-6">YouTube</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8">
                    <!--begin::Row-->
                    <div class="row">
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input wire:model='_youtube' type="text" id="youtube" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"/>
                            <div class="fv-plugins-message-container invalid-feedback">@error('_youtube')<span class="error">{{ $message }}</span> @enderror</div>
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
                <label for='facebook' class="col-lg-4 col-form-label fw-bold fs-6">Facebook</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8">
                    <!--begin::Row-->
                    <div class="row">
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input  wire:model='_facebook' type="text" id="facebook" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"/>
                            <div class="fv-plugins-message-container invalid-feedback">@error('_facebook')<span class="error">{{ $message }}</span> @enderror</div>
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
                <label for='tiktok' class="col-lg-4 col-form-label fw-bold fs-6">TikTok</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8">
                    <!--begin::Row-->
                    <div class="row">
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input wire:model='_tiktok' type="text" id="tiktok" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"/>
                            <div class="fv-plugins-message-container invalid-feedback">@error('_tiktok')<span class="error">{{ $message }}</span> @enderror</div>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->  
            
        </div>
    </div>
    <!--end::Card body-->
    
    <!--begin::Footer-->
    <div class="card-footer py-8 d-flex justify-content-end px-9">
    	<div class="row">
    		<div class="col-lg-12">
    			<input type="hidden" wire:model="categories_image" id='categories_image' />
    			<a href="{{ route('admin.settings') }}" class="btn btn-light-danger btn-light me-2">Cancel</a>
    			<button wire:click='saveSetting' class="btn btn-light-success btn-light me-2">Save</button>
    		</div>
    	</div>
    </div>
    <!--end::Footer-->
    
    @section('scripts')
	<script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
    <script type="text/javascript">
    		$(function(){

    			$("#whatsapp").inputmask();

        		$('#whatsapp').on('blur change', function (e) {
                    @this.set('whatsapp', $(this).val());
                });
            	
        		$('#state_id').on('change', function (e) {
                    @this.set('_state_id', $(this).val());
                    
                    $('.city_id').val('').trigger('change').trigger('select2:select');
                });

        		$('.city_id').on('change blur', function (e) {
                    @this.set('_city_id', $(this).val());
                });
        		
    			$('#state_id').select2({widht: '100%'});
    			
    			$('.city_id').select2({
            		width: '100%',
            		minimumInputLength: 3,
            		ajax: {
            			type: "POST",
            		    url: "{{ route('admin.cities.search') }}",
            		    dataType: 'json',
            		    headers: {
                        	'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        data: function (params) {
              		      var data_fild = {
              		    		search: $.trim(params.term),
              		    		state_id: $('#state_id').val(),
              		      }

              		      return data_fild;
              		    },
            		    processResults: function (data) {
        		    		return {
        		              results:  $.map(data, function (item) {
        		                return {
        		                		id: $.trim(item.id),
        		                        text: $.trim(item.name)
        		                    }
        		                })
        		            };
                      },
                        cache: true
                        
            		  }
            	});
        		
    			
        		
    		});
	</script>
    @endsection
 </div>
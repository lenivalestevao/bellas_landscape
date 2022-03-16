<div>
  <!--begin::Table-->
    <div id="kt_table_generic_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
        <div class="table-responsive">
            <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer min-w-1000px min-w-lg-auto" id="kt_table_generic" role="grid">
                <!--begin::Table head-->
                <thead>
                    <!--begin::Table row-->
                    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0" role="row">
                    
                    	@foreach($columns_table as $c)
                    		
                    		<th class="min-w-125px sorting @if($column == $c->name) @if($is_asc == 'ASC') SORT_ASC @else SORT_DESC @endif @endif" data-column='{{ $c->name }}' tabindex="0" rowspan="1" colspan="1" aria-label="{{ $c->title }}" >
                    			@if($column == $c->name)
                    				@if($is_asc == 'ASC') 
                    					{!! $icon_asc !!} 
                					@else 
                						{!! $icon_desc !!} 
            						@endif 
        						@endif 
        						{{ $c->title }}
                    		</th>
                    	@endforeach
                    	
                        <th class="text-end min-w-100px" rowspan="1" colspan="1" aria-label="Actions">Actions</th>
                    </tr>
                    <!--end::Table row-->
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody class="text-gray-600 fw-bold">
                	
                	@foreach($table_temp as $key => $t)
                	
                		<tr data-key='{{ $t->id }}' class="{{ $key % 2 == 0 ? 'odd' : 'even'}}">
                          
                           	
                           	@foreach($columns_table as $c)
                           	
                           		@if(isset($c->is_date))
                           			<td>{{ \Carbon\Carbon::parse($t->{$c->name})->diffForHumans() }}</td>
                           		@elseif(isset($c->is_bool))
                           			<td>@if($t->{$c->name} == 1) <span class="badge badge-success">Active</span> @else <span class="badge badge-danger">Deactivate</span> @endif</td>
                       			@else
                       				
                       				@if(isset($c->image))
                       					@php $image =  $t->{$c->image}->first();  @endphp
                       					<td class='d-flex align-items-center'>
                       						 <!--begin:: Avatar -->
                                            <div class="symbol symbol-50px overflow-hidden me-3">
                                                <a class='edit_user' href="#">
                                                    <div class="symbol-label">
                                                    	@if($image)
                                                    		<img alt="{{ $t->{$c->name} }}"  src="{{ route('images', ['size' => '50', 'f' => class_basename($t), 'image'=> $image->id]) }}">
                                                    	@else
                                                        	<img src="{{ asset('assets/admin/media/avatars/blank.png') }}" alt="{{ $t->{$c->name} }}" class="w-100">
                                                        @endif
                                                    </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::User details-->
                                            <div class="d-flex flex-column">
                                                <span class="text-gray-800 text-hover-primary mb-1">{{ $t->{$c->name} }}</span>
                                                <span>&nbsp;</span>
                                            </div>
                                            <!--begin::User details-->
                       					</td>
                       				@else
                       					<td>{{ $t->{$c->name} }}</td>
                   					@endif
                           		@endif
                           	@endforeach
                           	
                            <!--begin::Joined-->
                            
                            <!--begin::Joined-->
                            
                            <!--begin::Action=-->
                            <td class='text-end'>
                            	<a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
                                	<span class="svg-icon svg-icon-5 m-0">
                                		<!--begin::Svg Icon | path: assets/media/icons/duotone/Code/Settings4.svg-->
                                        <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                 <path d="M18.6225,9.75 L18.75,9.75 C19.9926407,9.75 21,10.7573593 21,12 C21,13.2426407 19.9926407,14.25 18.75,14.25 L18.6854912,14.249994 C18.4911876,14.250769 18.3158978,14.366855 18.2393549,14.5454486 C18.1556809,14.7351461 18.1942911,14.948087 18.3278301,15.0846699 L18.372535,15.129375 C18.7950334,15.5514036 19.03243,16.1240792 19.03243,16.72125 C19.03243,17.3184208 18.7950334,17.8910964 18.373125,18.312535 C17.9510964,18.7350334 17.3784208,18.97243 16.78125,18.97243 C16.1840792,18.97243 15.6114036,18.7350334 15.1896699,18.3128301 L15.1505513,18.2736469 C15.008087,18.1342911 14.7951461,18.0956809 14.6054486,18.1793549 C14.426855,18.2558978 14.310769,18.4311876 14.31,18.6225 L14.31,18.75 C14.31,19.9926407 13.3026407,21 12.06,21 C10.8173593,21 9.81,19.9926407 9.81,18.75 C9.80552409,18.4999185 9.67898539,18.3229986 9.44717599,18.2361469 C9.26485393,18.1556809 9.05191298,18.1942911 8.91533009,18.3278301 L8.870625,18.372535 C8.44859642,18.7950334 7.87592081,19.03243 7.27875,19.03243 C6.68157919,19.03243 6.10890358,18.7950334 5.68746499,18.373125 C5.26496665,17.9510964 5.02757002,17.3784208 5.02757002,16.78125 C5.02757002,16.1840792 5.26496665,15.6114036 5.68716991,15.1896699 L5.72635306,15.1505513 C5.86570889,15.008087 5.90431906,14.7951461 5.82064513,14.6054486 C5.74410223,14.426855 5.56881236,14.310769 5.3775,14.31 L5.25,14.31 C4.00735931,14.31 3,13.3026407 3,12.06 C3,10.8173593 4.00735931,9.81 5.25,9.81 C5.50008154,9.80552409 5.67700139,9.67898539 5.76385306,9.44717599 C5.84431906,9.26485393 5.80570889,9.05191298 5.67216991,8.91533009 L5.62746499,8.870625 C5.20496665,8.44859642 4.96757002,7.87592081 4.96757002,7.27875 C4.96757002,6.68157919 5.20496665,6.10890358 5.626875,5.68746499 C6.04890358,5.26496665 6.62157919,5.02757002 7.21875,5.02757002 C7.81592081,5.02757002 8.38859642,5.26496665 8.81033009,5.68716991 L8.84944872,5.72635306 C8.99191298,5.86570889 9.20485393,5.90431906 9.38717599,5.82385306 L9.49484664,5.80114977 C9.65041313,5.71688974 9.7492905,5.55401473 9.75,5.3775 L9.75,5.25 C9.75,4.00735931 10.7573593,3 12,3 C13.2426407,3 14.25,4.00735931 14.25,5.25 L14.249994,5.31450877 C14.250769,5.50881236 14.366855,5.68410223 14.552824,5.76385306 C14.7351461,5.84431906 14.948087,5.80570889 15.0846699,5.67216991 L15.129375,5.62746499 C15.5514036,5.20496665 16.1240792,4.96757002 16.72125,4.96757002 C17.3184208,4.96757002 17.8910964,5.20496665 18.312535,5.626875 C18.7350334,6.04890358 18.97243,6.62157919 18.97243,7.21875 C18.97243,7.81592081 18.7350334,8.38859642 18.3128301,8.81033009 L18.2736469,8.84944872 C18.1342911,8.99191298 18.0956809,9.20485393 18.1761469,9.38717599 L18.1988502,9.49484664 C18.2831103,9.65041313 18.4459853,9.7492905 18.6225,9.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                <path d="M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" fill="#000000"/>
                                        </svg></span>
                                        <!--end::Svg Icon-->
                                        
                                	</span>
                                </a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-80px py-4" data-kt-menu="true">
                                    <div class="menu-item px-3">
                                        <a href='{{ route($route_name.".edit", $t->id )}}' class="btn btn-light-warning btn-icon mb-2">
                                            <i class="far fa-edit"></i>
                                        </a>
                                    </div>
                                    @if(Auth::user()->hasRole('super'))
                                        <div class="menu-item px-3">
                                        	<form class='form_generic_delete' method="post" action="{{ route($route_name.'.destroy', $t->id) }}">
                                        		@csrf
                                        		@method('delete')
                                                <button type="button" class="btn btn-light-danger btn-icon btnRemoveGeneric mb-2">
                                                	<i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </div>
                                    @endif
                                    
                                </div>
                                <!--end::Menu-->
                                
                            </td>
                            <!--end::Action=-->
                            
                            
                            
                        </tr>
                	@endforeach
                
                </tbody>
                <!--end::Table body-->
            </table>
        </div>
        <div class="row">
<!--                                 <div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start"></div> -->
            <div class="col-sm-12 col-md-12 d-flex align-items-center justify-content-center justify-content-md-end">
                <div class="dataTables_paginate paging_simple_numbers" id="kt_table_generic_paginate">
                    <ul class="pagination">
                    
                    	<li class="paginate_button page-item previous @if($table_temp->currentPage() == 1) disabled @endif" id="kt_table_generic_previous">
                    		<a href="@if($table_temp->currentPage() != 1) {{ route($route_name) }}?page=1&column={{ $column }}&order={{ $is_asc }}{{ $search != '' ? "&search={$search}" : ""}} @else # @endif" aria-controls="kt_table_generic" data-dt-idx="0" tabindex="0" class="page-link"><i class="previous"></i></a>
                		</li>
                   	
                   		@foreach($elements_links as $element)
                    		@if(is_array($element))
                    			@foreach($element as $k => $page_link)
                    				<li class="paginate_button page-item @if($k == $table_temp->currentPage()) active @endif">
                                		<a href="{{ route($route_name) }}?page={{ $k }}&column={{ $column }}&order={{ $is_asc }}{{ $search != '' ? "&search={$search}" : ""}}" aria-controls="kt_table_generic" data-dt-idx="{{$k}}" tabindex="{{$k}}" class="page-link">{{ $k }}</a>
                            		</li>
                    			@endforeach
                    		@else
                    			<li class="paginate_button page-item">
                            		<a href="#" aria-controls="kt_table_generic" class="page-link">{{ $element }}</a>
                        		</li>
                    		@endif
                    	@endforeach
                    
                        
                        <li class="paginate_button page-item next @if($table_temp->currentPage() == $table_temp->lastPage()) disabled @endif" id="kt_table_generic_next">
                        	<a href="@if($table_temp->currentPage() != $table_temp->lastPage()) {{ route($route_name) }}?page={{$table_temp->lastPage()}}&column={{ $column }}&order={{ $is_asc }}{{ $search != '' ? "&search={$search}" : ""}} @else # @endif" aria-controls="kt_table_generic" data-dt-idx="4" tabindex="0" class="page-link"><i class="next"></i></a>
                    	</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--end::Table-->
    @push('scripts')
    	<script>
    		var asc = "{!! $icon_asc !!}";
    		var desc = "{!! $icon_desc !!}";
    		$(function(){

				$('.btnRemoveGeneric').on('click',function(){
					var $form = $(this).parents('.form_generic_delete');
					Swal.fire({
			              title: "Are you sure?",
			              text: "You won't be able to revert this!",
			              icon: "warning",
			              showCancelButton: true,
			              confirmButtonText: "Yes, remove it!",
			              cancelButtonText: "No, cancel!",
			              reverseButtons: true
			          }).then(function(result) {
			              if (result.value) {
			            	  $($form).submit();
			              } else if (result.dismiss === "cancel") {
			                  Swal.fire(
			                      "Cancelled",
			                      "Your action has been canceled",
			                      "error"
			                  )
			              }
			          });
				});
    			
    			$(".sorting").on('click',function(){
    				var column = $(this).attr('data-column');
    				var is_asc = 'DESC';
    				
    				if($('.desc_icon').is('*'))
    					$('.desc_icon').remove();
    				
    				if($('.asc_icon').is('*'))
    					$('.asc_icon').remove();
    				
    				if($(this).hasClass('SORT_ASC')){
    					$(this).html(desc+' '+$(this).attr('aria-label'));
    					$(this).addClass('SORT_DESC');
    					$(this).removeClass('SORT_ASC');
    					is_asc = 'DESC';
    					
    				}else if($(this).hasClass('SORT_DESC')){
    					$(this).html(asc+' '+$(this).attr('aria-label'));
    					$(this).addClass('SORT_ASC');
    					$(this).removeClass('SORT_DESC');
    					is_asc = 'ASC';
    					
    				}else{
    					$('.sorting').removeClass('SORT_ASC');
    					$('.sorting').removeClass('SORT_DESC');
    					
    					$(this).html(asc+' '+$(this).attr('aria-label'));
    					$(this).addClass('SORT_ASC');
    					is_asc = 'ASC';
    				}
    
    				window.livewire.emit('columnSorteBy',column, is_asc);
    			});
    		});
    	</script>
    @endpush
</div>

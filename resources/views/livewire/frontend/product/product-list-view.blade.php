<div class="col-lg-9 col-md-8">
	<div class="category-search-filter">
		<div class="row">
			<div class="col-md-6">
				<strong>Short</strong> <select>
					<option>Most Recent</option>
					<option value="1">Most Popular</option>
					<option value="2">Lowest Price</option>
					<option value="4">Highest Price</option>
				</select>
			</div>
			<div class="col-md-6">
				<div class="view">
					<strong>Views</strong>
					<ul class="list-inline view-switcher">
						<li class="list-inline-item"><a href="{{ route('frontend.shop', ['view'=>'grid', 'category'=>$category]) }}" class=""><i class="fa fa-th-large"></i></a></li>
						<li class="list-inline-item"><a href="{{ route('frontend.shop', ['view'=>'list', 'category'=>$category]) }}" class="text-info"><i class="fa fa-reorder"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	@foreach($products as $p)
    	<div class="ad-listing-list mt-20">
    		<div class="row p-lg-3 p-sm-5 p-4">
    			<div class="col-lg-4 align-self-center">
    				<a href="single.html">
    					@php
    					
    					
        					if(!is_array($p)){
        						$images_arr = $p->images->toArray();    						
        					}else{
        						$images_arr = $p['images'];
        					}
        					
    					@endphp
    					@foreach($images_arr as $i)
    						<img src="{{ route('images', ['size' => '180', 'f' => 'products', 'image' => $i['id']]) }}" class="img-fluid" alt="{{ $i['alt'] }}">
						@endforeach
    				</a>
    			</div>
    			<div class="col-lg-8">
    				<div class="row">
    					<div class="col-lg-6 col-md-10">
    						<div class="ad-listing-content">
    							<div>
    								<a href="single.html" class="font-weight-bold">11inch Macbook
    									Air</a>
    							</div>
    							<ul class="list-inline mt-2 mb-3">
    								@php
    									if(!is_array($p)){
                    						$pcategory = $p->category->toArray();    						
                    					}else{
                    						$pcategory = $p['category'];
                    					}
    								
    								@endphp
    							
    								<li class="list-inline-item"><a href="{{ route('frontend.shop.categories', ['category'=> $pcategory['slug'] ])}}"><i class="fa fa-chevron-right"></i> {{ $pcategory['title'] }}</a></li>
    							</ul>
    							<p class="pr-5">{{ is_array($p) ? $p['description'] : $p->description }}</p>
    						</div>
    					</div>
    					<div class="col-lg-6 align-self-center">
    						<div class="product-ratings float-lg-right pb-3">
    							<button class='btn btn-icon btn-light-success btn-circle'><i class='fa fa-eye'></i></button>
    							<button class='btn btn-icon btn-light-danger btn-circle'><i class='fa fa-shopping-bag' aria-hidden="true"></i></button>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
	@endforeach
</div>

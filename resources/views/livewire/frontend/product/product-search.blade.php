<div>

	@section('search-bar')
    	<section class="page-search">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-8 offset-lg-3 offset-md-2 advance-search">
                        <div class="form-group">
                            <input type="text" class="form-control" id="search" name="search" wire:model='search' placeholder="What are you looking for?">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-25px w-25px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
   		</section>
	@endsection
	
    <section class="section-sm">
        <div class="container">
            @if($category)
            <div class="search-result bg-gray">
                @foreach($categories as $c)
                    @php
                        if($c->slug != $category){
                            continue;
                        }
                    @endphp
                    <h2>Results For "{{ $c->title }}"</h2>
                    @php
                        break;
                    @endphp
                @endforeach

                <p>{{ $total }} Results</p>
            </div>
            @endif
            <div class="row">
                <div class="col-md-3">
                    <div class="category-sidebar">
                        <div class="widget filter">
                            <div class="filter-box">
                                <h4 class="widget-header">Show Produts</h4>
                                <select>
                                    <option selected>Popularity</option>
                                    <option value="1">Top rated</option>
                                    <option value="2">Lowest Price</option>
                                    <option value="4">Highest Price</option>
                                </select>
                            </div>

                            <div class="filter-box">
                                <h4 class="widget-header">All Category</h4>
                                <ul class="category-list">
                                    @foreach($categories as $c)
                                        <li><a href="{{ route('frontend.shop', ['view'=> $view, 'category'=>$c->slug])}}">{{ $c->title }} <span>{{ count($c->products) }}</span></a></li>
                                    @endforeach
                                    <li><a href="{{ route('frontend.shop', ['view'=> $view]) }}">All Categories <span>{{ $total_products }}</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @livewire('frontend.product.product-view', ['products' => $products, 'view' => $view, 'category' => $category])
            </div>
        </div>
    </section>
</div>

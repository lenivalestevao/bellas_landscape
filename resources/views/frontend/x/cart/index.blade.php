<x-FrontendLayout>
    <section class="dashboard section">
    	<!-- Container Start -->
    	<div class="container">
    		<!-- Row Start -->
    		<div class="row">
    			<div class="col-md-10 offset-md-1 col-lg-4 offset-lg-0">
    				@livewire('frontend.user.user-profile-thumb')
    			</div>
    			
    			@livewire('frontend.cart.cart-view')
    		</div>
    		<!-- Row End -->
    	</div>
    	<!-- Container End -->
    </section>
</x-FrontendLayout>
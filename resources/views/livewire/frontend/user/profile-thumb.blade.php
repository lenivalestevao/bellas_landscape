<div class="sidebar">
	<!-- User Widget -->
	@if (Auth::check())
	<div class="widget user-dashboard-profile">
		
    		<!-- User Image -->
    		<div class="profile-thumb">
    			<img src="images/user/user-thumb.jpg" alt="" class="rounded-circle">
    		</div>
    		<!-- User Name -->
    		<h5 class="text-center">{{ Auth::user()->full_name }}</h5>
    		<p>Joined {{ Auth::user()->joined }}</p>
    		<a href="{{ '#' }}" class="btn btn-main-sm">Edit Profile</a>
	</div>
	@endif
	<!-- Dashboard Links -->
	<div class="widget user-dashboard-menu">
		<ul>
			@if (Auth::check())<li class="{{ request()->routeIs('frontend.my-account.profile') ? 'active' : '' }}"><a href="{{ route('frontend.my-account.profile') }}"><iclass="fa fa-user-circle-o"></i>My Profile</a></li>@endif
			<li class="{{ request()->routeIs('frontend.cart') ? 'active' : '' }}"><a href="{{ route('frontend.cart') }}"><iclass="fa fa-shopping-cart"></i> Cart <span>{{ $cart }}</span></a></li>
			@if (Auth::check())<li class="{{ request()->routeIs('frontend.my-account.orders') ? 'active' : '' }}"><a href=""><i class="fa fa-history"></i>My Orders <span>{{ $orders }}</span></a></li>@endif
			@if (Auth::check())<li class="{{ request()->routeIs('frontend.my-account.favorite') ? 'active' : '' }}"><a href=""><i class="fa fa-heart"></i>Favorites<span>{{ $favorites }}</span></a></li>@endif
			@if (Auth::check())
				<li style="padding-top: 5px;padding-bottom: 50px;">
        			<form method="POST" action="{{ route('logout') }}">
                          @csrf
                         <button class='btn' type="submit"><i class="fa fa-power-off"></i> Logout</button>
                    </form>
                </li>
            @endif
			@if (Auth::check())<li class=""><a href="" data-toggle="modal" data-target="#deleteaccount"><i class="fa fa-trash"></i>Delete Account</a></li>@endif
		</ul>
	</div>

	<!-- delete-account modal -->
	<!-- delete account popup modal start-->
	<!-- Modal -->
	<div class="modal fade" id="deleteaccount" tabindex="-1" role="dialog"
		aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header border-bottom-0">
					<button type="button" class="close" data-dismiss="modal"
						aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-center">
					<img src="images/account/Account1.png" class="img-fluid mb-2"
						alt="">
					<h6 class="py-2">Are you sure you want to delete your account?</h6>
					<p>Do you really want to delete these records? This process cannot
						be undone.</p>
					<textarea name="message" id="" cols="40" rows="4"
						class="w-100 rounded"></textarea>
				</div>
				<div
					class="modal-footer border-top-0 mb-3 mx-5 justify-content-lg-between justify-content-center">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
					<button type="button" class="btn btn-danger">Delete</button>
				</div>
			</div>
		</div>
	</div>
	<!-- delete account popup modal end-->
	<!-- delete-account modal -->

</div>
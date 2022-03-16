<x-FrontendLayout>
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
        		<div class="col-md-5">
        			<div class="card">
        				<div class="card-header">Login</div>
        				<div class="card-body">
        					<form class='form' method="POST" action="{{ route('login') }}" >
        						<span>
        							@csrf
        						</span>
        						<div class="form-group row">
        							<label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
        							<div class="col-md-6">
        								<input type="text" class="mb-3 form-control @error('email') is-invalid @enderror" name="email" id="email" required='required' autofocus>
        								 @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
        						</div>
        
        						<div class="form-group row">
        							<label for="password"
        								class="col-md-4 col-form-label text-md-right @error('password') is-invalid @enderror">Password</label>
        							<div class="col-md-6">
        								<input type="password" id="password" class="mb-3 form-control" name="password" required="required">
        								 @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
        							</div>
        						</div>
        						<div class="col-md-6 offset-md-4">
        							<button type="submit" class="mb-2 btn btn-primary">Login</button>
        							<a href="{{ route('password.email') }}" class="btn btn-link"> Forgot Your Password? </a>
        						</div>
        					</form>
        				</div>
        			</div>
        		</div>
        	</div>
    	</div>
	</section>
</x-FrontendLayout>


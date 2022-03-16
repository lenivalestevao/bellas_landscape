<x-FrontendLayout>
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
        		<div class="col-md-5">
        			<div class="card">
        				<div class="card-header">Register</div>
        				<div class="card-body">
        					<form class='form' method="POST" action="{{ route('register') }}" >
        						<span>
        							@csrf
        						</span>
        						<div class="form-group row">
        							<label for="email_address" class="col-md-4 col-form-label text-md-right required">First Name</label>
        							<div class="col-md-6">
        								<input value="{{old('first_name')}}" type="text" class="mb-3 form-control @error('first_name') is-invalid @enderror" name="first_name" id="first_name" required='required' autofocus>
        								 @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
        						</div>
        						<div class="form-group row">
        							<label for="email_address" class="col-md-4 col-form-label text-md-right required">Last Name</label>
        							<div class="col-md-6">
        								<input value="{{old('last_name')}}" type="text" class="mb-3 form-control @error('last_name') is-invalid @enderror" name="last_name" id="last_name" required='required' >
        								 @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
        						</div>
        						<div class="form-group row">
        							<label for="email_address" class="col-md-4 col-form-label text-md-right required">E-Mail Address</label>
        							<div class="col-md-6">
        								<input value="{{old('email')}}" type="text" class="mb-3 form-control @error('email') is-invalid @enderror" name="email" id="email" required='required'>
        								 @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
        						</div>
        						
        						<div class="form-group row">
        							<label for="password"
        								class="col-md-4 col-form-label text-md-right @error('password') is-invalid @enderror required">Password</label>
        							<div class="col-md-6">
        								<input type="password" id="password" class="mb-3 form-control" name="password" required="required">
        								 @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
        							</div>
        						</div>
        						
        						<div class="form-group row">
        							<label for="password"
        								class="col-md-4 col-form-label text-md-right @error('password_confirmation') is-invalid @enderror required">password Confirmation</label>
        							<div class="col-md-6">
        								<input type="password" id="password_confirmation" class="mb-3 form-control" name="password_confirmation" required="required">
        								 @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
        							</div>
        						</div>
        						
        						<div class="form-group row pt-5 pb-5">
        							<label for="password"class="col-md-4 col-form-label text-md-right">&nbsp;</label>
        							<div class="col-md-6">
        								 <div class="captcha">
                                        <span class='span_captcha'>{!! captcha_img('flat') !!}</span>
                                        <center>
                                        	<button type="button" class="mb-2 mt-2 btn btn-danger" class="refresh-captcha"
                                            id="refresh-captcha">
                                            &#x21bb;
                                        </button>
                                        </center>
                                    </div>
        							</div>
        							<label for="password"class="col-md-4 col-form-label text-md-right @error('captcha') is-invalid @enderror required">Captcha</label>
        							<div class="col-md-6">
        								<input type="text" id="captcha" class="mb-3 form-control" name="captcha" required="required">
        								 @error('captcha')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
        							</div>
        						</div>
        						
        						<div class="col-md-6 offset-md-4">
        							<button type="submit" class="mb-2 btn btn-primary">Create my Account</button>
        							<a href="{{ route('login') }}" class="btn btn-link"> have accout with us? </a>
        						</div>
        					</form>
        				</div>
        			</div>
        		</div>
        	</div>
    	</div>
	</section>
	
	
	@section('javascript')
		<script type="text/javascript">
			$(function(){
				 $('#refresh-captcha').click(function () {
				        $.ajax({
				        	url: '{{ route("api.refresh.captcha") }}',
				        	async: false,
				        	headers: {
				                'X-CSRF-TOKEN': "{{ csrf_token() }}"
				            },
				            datatype: "json",
				            type: 'GET',
				            success: function (data) {
				                $(".span_captcha").html(data.captcha);
				            }
				        });
				    });
			});
    	</script>
	@endSection
	
</x-FrontendLayout>


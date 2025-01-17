<!doctype html>
<html lang="en">
  <head>
  	<title>Login System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">

	</head>
	<body class="img js-fullheight" style="background-image:url({{ asset('assets/img/pexels-tom-fisk-3057960.jpg') }});">
        @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Have an account?</h3>
		      	<form action="{{ route('admin.login') }}" method="POST" class="signin-form">
                    @csrf
            
		      		<div class="form-group">
		      			<input type="text" class="form-control" name="email" placeholder="Enter Email" required>
                        @error('email')
                            <span>{{ $message }}</span>
                        @enderror
                        
		      		</div>
                    <div class="form-group">
                    <input id="password-field" type="password" name="password" class="form-control" placeholder="Password" required>
                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                    </div>
                    <div class="form-group">
                        <select name="is_admin" id="is_admin" class="form-control">
                            <option value="1">admin</option>
                            <option value="2">employee</option>
                            <option value="3">company</option>
                        </select>
                        
                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
                    </div>
                    <div class="form-group d-md-flex">
                        <div class="w-50">
                            <label class="checkbox-wrap checkbox-primary">Remember Me
                                        <input type="checkbox" checked>
                                        <span class="checkmark"></span>
                            </label>
                        </div>           
	                </div>
	           </form>
              <div class="w-100 text-md-right forget">
                <a href="#" style="color: #fff;">Forgot Password</a><br>
                <!-- register company-->
                <a href="{{ route('register.company') }}" style="color: #fff">Register Company</a>
               
                            
             </div>
	           
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{asset('assets/js/jquery.min.js')}}js/jquery.min.js"></script>
    <script src="{{ asset('assets/js/popper.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
	</body>
</html>


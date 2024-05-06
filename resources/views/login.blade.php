<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<section>
		<div class="login-box">
			<h2>Login Dengan Alamat Email Anda
			</h2>
			@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
			<form action="#">
				<div class="user-box">
					<input type="text" name="" required="">
					<label for="email" class="login-box">Email Anda</label>
					<input type="email" value="{{ old('email') }}" name="email" class="login-box"> 
				</div>
				<div class="user-box">
					<input type="password" name="password" required="" class="">
					<label>Password</label>
				</div>
				<input type="submit" value="Login">
		
			</form>
		</div>
	</section>
	
</body>
</html>
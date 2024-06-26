<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Login</title>
	  <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <style>
    </style>
</head>
<body class="body-login">
	<section >
		<div class="login-box" style="border-radius:10px;">
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
			<form action="" method="POST">
        @csrf
				<div class="user-box">
          <input type="email" value="{{ old('email') }}" name="email" required=""> 
					<label for="email">Email Anda</label>
				</div>
				<div class="user-box">
					<input type="password" name="password" required="">
					<label>Password</label>
				</div>
				<input type="submit" value="Login" style="border-radius:10px;">
		
			</form>
		</div>
	</section>
	
</body>
</html>
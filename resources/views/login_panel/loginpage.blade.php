<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Login</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/stylelogin.css')}}" media="screen" />
</head>
<body>
<div class="container">
	<section id="content">
		<form action="" method="post">
			<h1>Admin Login</h1>
			<div>
				 <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
			</div>
			<div>
				<input id="password" type="password" class="form-control" name="password" required>
			</div>
			<div>
				<input type="submit" value="Log in" />
			</div>
		</form><!-- form -->
		<div class="button">
			<a href="#">Training with live project</a>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>
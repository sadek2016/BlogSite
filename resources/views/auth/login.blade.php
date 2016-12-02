<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Login</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/stylelogin.css')}}" media="screen" />
</head>
<body>
<div class="container">
    <section id="content">
       <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
       {{csrf_field()}}
            <h1>Admin Login</h1>
            <div>
                <input type="text" placeholder="Email" required="" name="email"/>
            </div>
            <div>
                <input type="password" placeholder="Password" required="" name="password"/>
            </div>
            <div>
                <input type="submit" value="Log in" />
            </div>
        </form><!-- form -->
        <div class="button">
            <a href="#">Programmin Skill for Web</a>
        </div><!-- button -->
    </section><!-- content -->
</div><!-- container -->
</body>
</html>
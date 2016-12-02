<!DOCTYPE html>
<html dir='ltr' lang='en-US' xmlns='http://www.w3.org/1999/xhtml' xmlns:b='http://www.google.com/2005/gml/b' xmlns:data='http://www.google.com/2005/gml/data' xmlns:expr='http://www.google.com/2005/gml/expr'>

<head>
	<meta charset='UTF-8'/>
	<link href='{{ asset('css/font-awesome.min.css')}}' rel='stylesheet'/>
	<title>@yield('title')</title>
	<link type='text/css' rel='stylesheet' href='{{ asset('css/Frist.css')}}' />
	<link type='text/css' rel='stylesheet' href='{{ asset('css/authorization9923.css')}}' />
	<link type='text/css' rel='stylesheet' href='{{ asset('css/style.css')}}' />
	<link type='text/css' rel='stylesheet' href='{{ asset('css/bootstrap.css')}}' />
	<link type='text/css' rel='stylesheet' href='{{ asset('css/bootstrap.min.css')}}' />
	<link type='text/css' rel='stylesheet' href='{{ asset('css/bootstrap-theme.css')}}' />
	<link type='text/css' rel='stylesheet' href='{{ asset('css/bootstrap-theme.min.css')}}' />
	<script src='{{ asset('js/bootstrap.js')}}' type='text/javascript'></script>
	<script src='{{ asset('js/bootstrap.min.js')}}' type='text/javascript'></script>
	<script src='{{ asset('js/jquery.min.js')}}' type='text/javascript'></script>
</head>




<body>
	<div id='pagepbt'>
		<header class='site-headerpbt' id='mastheadpbt' role='banner'>
			<div class='site-brandingpbt'>
				<div class='headersec section' id='headersec'>
					<div class='widget Header' data-version='1' id='Header1'>
						<div id='header-inner'>
							<div class='' style="text-decoration: none;">
									<h1 class=''>
										<?php 
										$website=$websitename->title;
										$firstname=substr($website, 0,1);
										$lastname=substr($website, 1);
										  ?>
										<small><h1 class="bold" style="color: #23527C; font-size: 40px; margin-left: 20px"><strong style="font-size: 70px">{{$firstname}}</strong>{{$lastname}}</h1></small>

									</h1>
									<p style="margin-left: 50px;">{{$websitename->slogan}}</p>
							</div>

							
						</div>
					</div>
				</div>
			</div>


			<div class='site-socialpbt'>
					<div class='socialLinepbt'>
						<a href='http://{{$sociallink->facebook}}' rel='nofollow' target='_blank' title='Facebook'><i class='fa spaceLeftDouble fa-facebook'></i></a>
						<a href='http://{{$sociallink->twitter}}' rel='nofollow' target='_blank' title='Twitter'><i class='fa spaceLeftDouble fa-twitter'></i></a>
						<a href='http://{{$sociallink->googleplus}}' rel='nofollow' target='_blank' title='Google Plus'><i class='fa spaceLeftDouble fa-google-plus'></i></a>
						<a href='http://{{$sociallink->linkedin}}' rel='nofollow' target='_blank' title='Linkedin'><i class='fa spaceLeftDouble fa-linkedin'></i></a>
						
						<a href='http://{{$sociallink->youtube}}' rel='nofollow' target='_blank' title='YouTube'><i class='fa spaceLeftDouble fa-youtube'></i></a>
						<a class='top-search' href='#' id="search_click"><i class='fa spaceLeftDouble fa-search'></i></a>
					</div>
<script>

$(document).ready(function(){
    $("#search_click").click(function(){

        $("#from_show_check").toggle(1000);
    });
});
</script>
					<div class='topSearchFormpbt' id="from_show_check"  >
						<form>
							<div class="form-group" style="padding: 15px">
								<input style="padding: 10px;" type="text" class="form-control" id="" placeholder="Search">
							</div>
						</form>
							
					</div>
			</div>



		<nav class='main-navigationpbt' id='site-navigationpbt' role='navigation'>
		<button class='menu-togglepbt'>Menu<i class='fa fa-align-justify'></i></button>
		<div class='menu-pbt-container'>
			<ul class='menupbt'>
				<li><a href='/'>Home</a></li>
				<li><a href='#'>Categorys</a>
				<ul class='sub-menu'>
				@foreach($cat_all_data as $catdata)
					<li><a href='/catpost/{{$catdata->id}}'>{{$catdata->category}}</a></li>
				@endforeach
					
				</ul>
				</li>
				<li><a href="/contactpage">Contact Us</a></li>
				@foreach($pagelist as $page)
				<li><a href='/createdpage/{{$page->id}}'>{{$page->name}}</a></li>
				@endforeach
				
				<!--
				<li><a href='#'>Parent Category</a>
				<ul class='sub-menu'>
					<li><a href='#'>Child Category 1</a>
					<ul class='sub-menu'>
					<li><a href='#'>Sub Child Category 1</a></li>
					<li><a href='#'>Sub Child Category 2</a></li>
					<li><a href='#'>Sub Child Category 3</a></li>
					</ul>
					</li>
					<li><a href='#'>Child Category 2</a></li>
					<li><a href='#'>Child Category 3</a></li>
					<li><a href='#'>Child Category 4</a></li>
				</ul>
				</li>
				-->
				
			</ul>
		</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->





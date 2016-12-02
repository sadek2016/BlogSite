@extends('user_layouts.default')
@section('title','home Page')
@section('Content')


<div class='site-contentpbt' id='contentpbt'>
	<div class='content-areapbt' id='primarypbt'>

		<!-- start conternt-->
	
  <p style="color: green;">{{Session::get('message')}}</p>

<form action="/contactpage" method="post">
  <div class="form-group">
    <label for="name">First Name :</label>
    <input style="border: 1px solid #c7c7c7;"  type="text" class="form-control" id="fname" name="fname">
    <p style="color: red;"> {{$errors->has('fname')? $errors->first('fname'):''}} </p>
  </div>
  <div class="form-group">
    <label for="name">Last Name :</label>
    <input style="border: 1px solid #c7c7c7;"   type="text" class="form-control" id="lname" name="lname">
    <p style="color: red;"> {{$errors->has('lname')? $errors->first('lname'):''}} </p>
  </div>
 <div class="form-group">
    <label for="pwd">Email :</label>
    <input style="border: 1px solid #c7c7c7;"  type="email" class="form-control" id="email" name="email">
    <p style="color: red;"> {{$errors->has('email')? $errors->first('email'):''}} </p>
  </div>
  <div class="form-group">
  <label for="comment">Message :</label>
  <textarea class="form-control" rows="5" id="comment" name="message"></textarea>
  <p style="color: red;"> {{$errors->has('message')? $errors->first('message'):''}} </p>
</div>
	{{csrf_field()}}
  <input type="submit" value="Sent Message" name="submit">
</form>


<!-- end createpage--!>


<!-- end Conternt -->
<!-- pagination start -->
 	<div class="text-center">
		
 	</div>


	
<!-- pagination start -->

</div><!-- #primary -->
@stop
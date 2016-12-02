@extends('user_layouts.default')
@section('title','Post Page')
@section('Content')
<?php $coutn_comment=count($commentlist) ?>
<div class='site-contentpbt' id='contentpbt'>
	<div class='content-areapbt' id='primarypbt'>

	<!--Start leftsite bar -->
		<div class='site-mainpbt' id='mainpbt' role='main'>
			<div class='mainblogsec section' id='mainblogsec'><div class='widget Blog' data-version='1' id='Blog1'>
				<div class='blog-posts hfeed'>

          			<div class="date-outer">
        				<h2 class='date-header'><span>Wednesday, April 23, 2014</span></h2>
							<div class="date-posts">
        						<div class='post-outer'>
								<article class='post hentry' itemprop='blogPost' itemscope='itemscope'>
								
								<a name='8261437882122457741'></a>

									<header class='entry-header'>
										<h1 class='post-title entry-title' itemprop='name'>
											<a  id="header_text2" href='#'>{{$post_get_by_id->title}}</a>
										</h1>
										<div class='entry-metapbt'>

									<span class='post-author vcard'><i class='fa fa-user'></i>
										<span class='fn' itemprop='author' itemscope='itemscope' itemtype='http://schema.org/Person'
											<meta content='#' itemprop='url'/>
												<a class='g-profile' href='#' rel='author' title='author profile'>
													<span itemprop='name'>{{$post_get_by_id->author}}</span>
												</a>
										</span>
									</span>



									<i class='fa fa-calendar'></i>
									<meta content='#' itemprop='url'/>
										<a class='timestamp-link' href='#' rel='bookmark' title='permanent link'>
											<span class='published updated' itemprop='datePublished' title=''>{{$post_get_by_id->updated_at}}</span>
										</a>

									<i class='fa fa-comments'></i>
									<a href='#' onclick=''>{{$coutn_comment}} comment</a>
								<span class='item-control blog-admin pid-69806099'>
								<a href='#' title='Edit Post'>
									<img alt='' class='icon-action' height='18' src='image/icon18_edit_allbkg.gif' width='18'/>
								</a>
							</span>
</div>
</header>


<div class='post-header-line-1'></div>
<div class='post-body entry-content' id='post-body-8261437882122457741' itemprop='articleBody'>
	<div id='summary8261437882122457741'>
		<div class="separator" style="clear: both; text-align: center;">
			<a href="#" imageanchor="1" style="clear: left; float: left; margin-bottom: 1em; margin-right: 1em;">
				<img src='{{asset("$post_get_by_id->image")}}' width="300px" height="100px">
			</a>
		</div>
				<div class="text-justify">
					{{$post_get_by_id->body}}
				</div>
		</div>

<script type='text/javascript'>createSummaryAndThumb("summary8261437882122457741");</script>

<div style='clear: both;'></div>
<div class='pbtsharethisbutt'>
	<ul class='pbt-social-icons'>
		<li class='Share-this-arti'>Share This:&nbsp;&nbsp;</li>
		<li class='pbtfacebook'>
			<a href='http://{{$sociallink->facebook}}' onclick='window.open(this.href,"sharer","toolbar=0,status=0,width=626,height=436"); return false;' rel='nofollow' target='_blank' title='Share this on Facebook'>
			<i class='fa fa-facebook-square'></i>
			Facebook
			</a>
		</li>
		<li class='pbttwitter'>
			<a href='http://{{$sociallink->twitter}}' rel='nofollow' target='_blank' title='Tweet This!'>
				<i class='fa fa-twitter-square'></i>
				Twitter
			</a>
		</li>
		<li class='pbtgoogle'>
			<a href='http://{{$sociallink->googleplus}}' onclick='javascript:window.open(this.href,   "", "menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600");return false;' rel='nofollow' target='_blank' title='Share this on Google+'>
			<i class='fa fa-google-plus-square'></i>
			Google+
			</a>
		</li>
		<li class='pbtstumbleupon'>
			<a href='http://{{$sociallink->linkedin}}' rel='nofollow' target='_blank' title='Open Link In'>
			<i class='fa fa-stumbleupon-circle'></i>

			Linked In
			</a>
		</li>

		
</ul>
</div>



<div style='clear: both;'></div>
</div>
<footer class='entry-footerpbt'>
	<h3><strong>Related Posts:</strong></h3>	
		<?php// print_r($limitallpost) ?>
	@foreach($limitallpost as $limitpost)
		<div class="row">
			<div class="col-md-2">
				<img src='{{asset("$limitpost->image")}}' width="100px">
				
				<!--<img border="0" src="image/{{$limitpost->image}}" height="100" width="320" />-->
			</div>
			<div class="col-md-10">
				<p style="color:#c7c7c7;">
					<?php  echo substr($limitpost->body,0,200); ?>
				<a href="/post/{{$limitpost->cat}}/{{$limitpost->id}}">Read More</a>.</p>
			</div>
		</div><hr>
	@endforeach


		

</footer>

<div style='clear: both;'></div>
</div>

        </div></div>
      
</div>
<div style='clear: both;'></div>


</div>
</div>
</div><!-- #main -->



<!-- Comment Start -->
		<div class='site-mainpbt' id='mainpbt' role='main'>
			<div class='mainblogsec section' id='mainblogsec'><div class='widget Blog' data-version='1' id='Blog1'>
				<div class='blog-posts hfeed'>
          			<div class="date-outer">
						<div class="date-posts">
        					<div class='post-outer'>
								<article class='post hentry' itemprop='blogPost' itemscope='itemscope'>

								

  <h4 style="margin-left: 20px;">{{$coutn_comment}} comments: </h4>
  <h4 style="margin-left: 20px;">Post a Comment </h4><br>
@foreach($commentlist as $comment)
	 <div class="row" style="margin-bottom: 30px;">
		  <div class="col-sm-2">
		  <img id="comment_image" class="img-circle" src='{{"https://www.gravatar.com/avatar/". md5(strtolower(trim($comment->email)))}}' alt="">
		  </div>
		  <div class="col-sm-10">
		  	<div class="">
  		<div class="comment_name"><h3><strong>{{$comment->name}}</strong></h3></span>
  		</div>
  		<p style="color: #c7c7c7;">{{$comment->updated_at}}</p>	
  	
  	<div class="comment_body">
  		<p style="color: #c7c7c7; ">{{$comment->comment}}</p></div>
  	</div>
		  </div>
	</div>

@endforeach
  	


  <div class="embed-responsive embed-responsive-16by9">
		
    <form action="/comment" method="post">

   <div class="form-group" style="margin: 15px;">
      <label for="usr">Name:</label>
      <input style="border: 1px solid #c7c7c7;" type="text" name="name" class="form-control" id="usr">
      <label for="pwd">Email:</label>
      <input style="border: 1px solid #c7c7c7;" type="email" name="email" class="form-control border" id="email">
    </div>
    <div class="form-group" style="padding: 10px;">
      <label for="comment">Comment:</label>
      <textarea class="form-control" name="comment" rows="5" id="comment"></textarea>
    </div>
    <div class="well">
    {{csrf_field()}}
    <input type="hidden" name="single_comment" value="{{$post_get_by_id->id}}">
    <input style="margin-left: 10px;" type="submit" name="submit" value="Sent ">
  </div>
  </form>

  </div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- Comment end -->









</div><!-- #primary -->
@stop
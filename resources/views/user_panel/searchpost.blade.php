@extends('user_layouts.default')
@section('title','home Page')
@section('Content')


<div class='site-contentpbt' id='contentpbt'>
	<div class='content-areapbt' id='primarypbt'>

		<!-- start conternt-->
	
@foreach($sercchalldata as $serchdata)

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
											<a  id="header_text2" href='#'>{{$serchdata->title}}</a>
										</h1>
										<div class='entry-metapbt'>

									<span class='post-author vcard'><i class='fa fa-user'></i>
										<span class='fn' itemprop='author' itemscope='itemscope' itemtype='http://schema.org/Person'
											<meta content='#' itemprop='url'/>
												<a class='g-profile' href='#' rel='author' title='author profile'>
													<span itemprop='name'>{{$serchdata->author}}</span>
												</a>
										</span>
									</span>



									<i class='fa fa-calendar'></i>
									<meta content='#' itemprop='url'/>
										<a class='timestamp-link' href='#' rel='bookmark' title='permanent link'>
											<span class='published updated' itemprop='datePublished' title=''>{{$serchdata->updated_at}}</span>
										</a>

									<i class='fa fa-comments'></i>
									<a href='#' onclick=''>1 comment</a>
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
		<div class="" style="clear: both; text-align: center;">
			<a href="#" imageanchor="1" style="clear: left; float: left; margin-bottom: 1em; margin-right: 1em;">
				<img src='{{asset("$serchdata->image")}}' width="250px" height="100px">
			</a>
		</div>
		<?php  echo substr($serchdata->body,0,900); ?>

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
			<a href='http://{{$sociallink->linkedin}}' rel='nofollow' target='_blank' title='Open Linked In'>
			<i class='fa fa-stumbleupon-circle'></i>

			Linked In
			</a>
		</li>
</ul>
</div>



<div style='clear: both;'></div>
</div>
<footer class='entry-footerpbt'>
	<div class='readMoreLinkpbt'>
		<a href='/post/{{$serchdata->id}}'>Read More<i class='fa spaceLeft fa-angle-double-right'></i></a>
	</div>
</footer>

<div style='clear: both;'></div>
</div>

        </div></div>
      
</div>
<div style='clear: both;'></div>


</div>
</div>
</div><!-- #main -->

@endforeach


<!-- end Conternt -->
<!-- pagination start -->
 	<div class="text-center">
		 {{ $sercchalldata->links() }}
 	</div>

	
<!-- pagination start -->

</div><!-- #primary -->
@stop
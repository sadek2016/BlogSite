
<div class='widget-areapbt' id='secondarypbt' role='complementary'>
<div class='widget widget_search'>
	<form class="form-inline" action="/searchpost" method="post">

		<div class="form-group">
			<label for="inputPassword2" class="sr-only">Search</label>
			<input style="padding: 5px auto; border: 1px solid #c7c7c7;" type="text" name="search" class="form-control">
			{{csrf_field()}}
			<input type="submit" name="submit" value="Search">

		</div>
		
		
	</form>
</div>
	<div class='sidebarrightsec section' id='sidebarrightsec'><div class='widget PopularPosts' data-version='1' id='PopularPosts1'>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#popular").click(function(){
        $("#POPULAR").show(300);
        $("#RECENT").hide();
        $("#ALL").hide();
    });

    $("#recent").click(function(){
        $("#POPULAR").hide();
        $("#RECENT").show(300);
        $("#ALL").hide();
    });

    $("#all").click(function(){
        $("#POPULAR").hide();
        $("#RECENT").hide();
        $("#ALL").show(300);
    });
    
});
</script>

		<button id="popular" >Popular</button> <button id="recent">Recent</button> <button id="all"> All</button>
		
		<div id="POPULAR">
			@foreach($popular_all_post as $popularpost)
			<div class='widget-content popular-posts'>

			<ul>
			<li>
			<div class='item-content'>
			<div class='item-thumbnail'>
				<a href='/post/{{$popularpost->cat}}/{{$popularpost->id}}' target='_blank'>
					<img src='{{asset("$popularpost->image")}}' width="100px" height="">
				</a>
			</div>
			<div class='item-title'>
				<?php  echo substr($popularpost->body,0,100); ?>
			</div>
			</div>
			<div style='clear: both;'></div>
			</li>

			</ul>

			<div class='clear'></div>

		</div>
		@endforeach
		<div class="pagination pagination-sm " >
				 {{ $popular_all_post->links() }}
	 			</div>
			
		</div>


			<div id="RECENT" hidden="hidden">
					@foreach($recentallpost as $recentpost)
					<div class='widget-content popular-posts'>
					<ul>
					<li>
					<div class='item-content'>
					<div class='item-thumbnail'>
					<a href='/post/{{$recentpost->cat}}/{{$recentpost->id}}' target='_blank'>
					<img src='{{asset("$recentpost->image")}}' width="100px" height="">
					</a>
					</div>
					<div class='item-title'></div>
					<div class='item-snippet'>
					<?php  echo substr($recentpost->body,0,100); ?>
					</div>
					</div>
					<div style='clear: both;'></div>
					</li>

					</ul>

					<div class='clear'></div>
				</div>

				@endforeach
				<div class="pagination pagination-sm " >
				 {{ $recentallpost->links() }}
	 			</div>
		</div>
			
		<div id="ALL" hidden="hidden">
			@foreach($postalldata as $postdata)
			<div class='widget-content popular-posts'>
			<ul>
			<li>
			<div class='item-content'>
			<div class='item-thumbnail'>
			<a href='/post/{{$postdata->cat}}/{{$postdata->id}}' target='_blank'>
			<img src='{{asset("$postdata->image")}}' width="100px" height="">
			</a>
			</div>
			<div class='item-title'></div>
			<div class='item-snippet'>
			<?php  echo substr($postdata->body,0,100); ?>
			</div>
			</div>
			<div style='clear: both;'></div>
			</li>

			</ul>

			<div class='clear'></div>
		</div>

		@endforeach
		<div class="pagination pagination-sm " >
		 {{ $postalldata->links() }}
 	</div>
		</div>



		</div>

		<div class='widget Label' data-version='1' id='Label1'>
		<h2>Categories</h2>
		
			<div class='widget-content list-label-widget-content'>
				<ul>
				
				@foreach($cat_all_data as $catdata)
				<li>
				<a dir='ltr' href='/catpost/{{$catdata->id}}'>{{$catdata->category}}</a>
				<span dir='ltr'></span>
				</li>
				@endforeach
				
				</ul>
			<div class='clear'></div>
			</div>
		</div>

		<div class='widget PageList' data-version='1' id='PageList1'>
			<h2>Pages</h2>
			<div class='widget-content'>
				<ul>
				<li><a href='#'>Contact Us</a></li>
				@foreach($pagelist as $page)
				<li><a href='#'>{{$page->name}}</a></li>
				@endforeach
				</ul>
				<div class='clear'></div>
			</div>

		</div>

		
	</div>
	</div><!-- #secondary -->
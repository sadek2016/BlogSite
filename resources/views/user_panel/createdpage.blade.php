@extends('user_layouts.default')
@section('title','home Page')
@section('Content')


<div class='site-contentpbt' id='contentpbt'>
	<div class='content-areapbt' id='primarypbt'>

		<!-- start conternt-->
	


		<div class='site-mainpbt' id='mainpbt' role='main'>
			<div class='mainblogsec section' id='mainblogsec'><div class='widget Blog' data-version='1' id='Blog1'>
				<div class='blog-posts hfeed'>

          			<div class="date-outer">
        				<h2 class='date-header'><span>Wednesday, April 23, 2014</span></h2>
							<div class="date-posts">
        						<div class='post-outer'>
        						<!--  Start create page -->
								<article class='post hentry' itemprop='blogPost' itemscope='itemscope'>
								
								<a name='8261437882122457741'></a>

									<header class='entry-header'>
										<h1 class='post-title entry-title' itemprop='name'>
											<a  id="header_text2" href='#'>{{$createdpage->name}}</a>
										</h1>
										
									</header>


							<div class='post-header-line-1'></div>
						<div class='post-body entry-content' id='post-body-8261437882122457741' itemprop='articleBody'>
					<div id='summary8261437882122457741'>
				{{$createdpage->body}}
		<?php  //echo substr($createdpage->body); ?>

		</div>

<script type='text/javascript'>createSummaryAndThumb("summary8261437882122457741");</script>


	</div>
</div>
</div>
</div>  
</div>
<div style='clear: both;'></div>


</div>
</div>
</div><!-- #main -->

<!-- end createpage--!>


<!-- end Conternt -->
<!-- pagination start -->
 	<div class="text-center">
		
 	</div>


	
<!-- pagination start -->

</div><!-- #primary -->
@stop
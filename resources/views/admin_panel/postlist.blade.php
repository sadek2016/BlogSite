@extends('admin_layouts.default')
@section('contern1')
<?php $role=Auth::user()->user_role;?>

         <div class="grid_10">
            <div class="box round first grid">
                <h2>Post List</h2>
                <div class="block">  
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th width="5%">S.No</th>
							<th width="10%">Post Title</th>
							<th width="10%%">Category</th>
							<th width="20%">Description</th>
							<th width="10%">Image</th>
							<th width="10%">author</th>
							<th width="10%">tage</th>
							<th width="15%">Action</th>
						</tr>
					</thead>
					<tbody>
					<?php $i=0;?>

					@foreach($alldata as $postdata)
						<?php $i++; ?>
						<tr class="odd gradeX">
							<td>{{$i}}</td>
							<td>{{$postdata->title}}</td>
							<td>{{$postdata->category}}</td>
							<td><?php echo substr("$postdata->body",0,60); ?></td>
							<td><img src='{{asset("$postdata->image")}}' width="100px"></td>
							<td>{{$postdata->author}}</td>
							<td>{{$postdata->tag}}</td>
							<td>
							<a href="/postview/{{$postdata->id}}">View</a>
							@if($role==1 || $role==2) 
								||<a href="/postedit/{{$postdata->id}}">Edit</a> 
							@endif
							@if($role==1)
								||<a href="/postdelete/{{$postdata->id}}" onclick="return confirm('Are you sure Delete Data?');" >Delete</a> 
							@endif
							</td>
						</tr>

					@endforeach

						
						
						
					</tbody>
				</table>
	
               </div>
            </div>
        </div>

        
	<script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
            $('.datatable').dataTable();
			setSidebarHeight();
        });
    </script>
@stop

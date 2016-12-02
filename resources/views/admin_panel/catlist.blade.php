@extends('admin_layouts.default')
@section('contern1')
<?php $role=Auth::user()->user_role;?>
<script type="text/javascript">

        $(document).ready(function () {
            setupLeftMenu();

            $('.datatable').dataTable();
			setSidebarHeight();


        });
    </script>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Category List</h2>
                <div class="block">     

                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th>Category Name</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					@foreach($alldata as $data)
						<tr class="odd gradeX">
							<td>{{$data->id}}</td>
							<td>{{$data->category}}</td>
							<td>
						@if($role==1 && $role==2)
								<a href="/catedit/{{$data->id}}">Edit</a>
						@endif
						@if($role==1)
							 || <a href="/catdel/{{$data->id}}">Delete</a>
						@endif
							</td>
						</tr>
					
					@endforeach	
						
					</tbody>
				</table>
               </div>
            </div>
        </div>
@stop

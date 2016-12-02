@extends('admin_layouts.default')
@section('contern1')

<script type="text/javascript">

        $(document).ready(function () {
            setupLeftMenu();
            $('.datatable').dataTable();
			setSidebarHeight();
        });
    </script>

         <div class="grid_10">
            <div class="box round first grid">
                <h2>Inbox</h2>
                <div class="block">        
                    <table class="data display datatable" id="example">
                   
                   
					<thead>
						<tr>
							<th width="10%">Serial No.</th>
							<th width="15%">Name</th>
							<th width="20%">Email</th>
							<th width="35%">Message</th>
							<th width="20%">Action</th>
						</tr>
					</thead>
					<tbody>
				<?php $i=0;?>
				 @foreach($contactseenlist as $contactseen)
				 		<?php 
				 		$name= $contactseen->fname." ".$contactseen->lname ;
				 			$i++;
				 		?>
						<tr class="odd gradeX">
							<td>{{$i}}</td>
							<td>{{$name}}</td>
							<td>{{$contactseen->email}}</td>
							<td><?php echo substr("$contactseen->message",0,70); ?></td>
							<td>
								<a href="/contactview/{{$contactseen->id}}">View</a> ||
								<a href="replymessage/{{$contactseen->id}}">reply </a> ||
								<a href="/sennupdate/{{$contactseen->id}}">seen</a> 
								
							 </td>
						</tr>
				 @endforeach
						
					</tbody>
				</table>
               </div>
            </div>
        </div>

        <div class="grid_10">
            <div class="box round first grid">
                <h2>Seen Message</h2>
                <div class="block">        
                    <table class="data display datatable" id="example">
                   
                   
					<thead>
						<tr>
							<th width="10%">Serial No.</th>
							<th width="15%">Name</th>
							<th width="20%">Email</th>
							<th width="35%">Message</th>
							<th width="20%">Action</th>
						</tr>
					</thead>
					<tbody>
				<?php $i=0;?>
				 @foreach($contactunseenlist as $contactunseen)
				 		<?php 
				 		$name= $contactunseen->fname." ".$contactunseen->lname ;
				 			$i++;
				 		?>
						<tr class="odd gradeX">
							<td>{{$i}}</td>
							<td>{{$name}}</td>
							<td>{{$contactunseen->email}}</td>
							<td><?php echo substr("$contactunseen->message",0,70); ?></td>
							<td>
								<a href="/contactdelete/{{$contactunseen->id}}">Delete</a> ||
								<a href="/unseenupdate/{{$contactunseen->id}}">Unseen</a> 
								
							 </td>
						</tr>
				 @endforeach
						
					</tbody>
				</table>L
               </div>
            </div>
        </div>

@stop

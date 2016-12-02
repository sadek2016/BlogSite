@extends('admin_layouts.default')
@section('contern1')
<?php $role=Auth::user()->user_role;?>
        <div class="grid_10">
		
            <div class="box round first grid">
        @if($role==1)
                <h2>Add New User</h2>
               <div class="block copyblock"> 

                 <form  method="POST" action="/registeruser">
                    <table class="form" >	
                        <tr>
                        	<td><strong>Name</strong></td>
                            <td>
                                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
                            </td>
                        </tr>

                        <tr>
                        	<td><strong>E-Mail Address</strong></td>
                            <td>
                                <input id="email" type="email"  name="email" value="{{ old('email') }}" required>
                            </td>
                        </tr>

                        <tr>
                        	<td><strong>Password</strong></td>
                            <td>
                                <input id="password" type="password" class="form-control" name="password" required>
                            </td>
                        </tr>
                       <tr>
                        	<td><strong>User Role</strong></td>
                            <td>
                                <select name="user_role">
                                	<option>Select User Role</option>
                                	<option value="1">Admin</option>
                                	<option value="2">Editor</option>
                                	<option value="3">Author</option>
                                </select>
                            </td>
                        </tr>

						<tr> 
						<td></td>
                            <td>
                                <input type="submit" name="submit" Value="Register" />
                                {{ csrf_field() }}  
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            @endif
            </div>
        </div>
@stop

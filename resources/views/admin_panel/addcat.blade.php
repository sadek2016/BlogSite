@extends('admin_layouts.default')
@section('contern1')
<?php $role=Auth::user()->user_role;?>
        <div class="grid_10">
		


            <div class="box round first grid">
            @if($role==1 && $role==3)
                <h2>Add New Category</h2>
               <div class="block copyblock"> 

                 <form action="/addcat" method="post" name="">
                    <table class="form" >	
                    <p style="color: green;">{{Session::get('message')}}</p>
                        <tr>
                            <td>
                                <input type="text" name="category" placeholder="Enter Category Name..." class="medium" /><br>
                                <p style="color: red;"> {{ ($errors->has('category'))? $errors->first('category'):''}}</p>
                            </td>
                        </tr>
						<tr> 
                            <td>
                                
                                <input type="submit" name="submit" Value="Save" />
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

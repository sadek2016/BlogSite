@extends('admin_layouts.default')
@section('contern1')
<?php $role=Auth::user()->user_role;?>
        <div class="grid_10">
        
            <div class="box round first grid">
            @if($role==1)
                <h2>Update Copyright Text</h2>
                <div class="block copyblock"> 
                <p style="color: green; "> {{Session::get('message')}} </p>  
                 <form action="/copyright" method="post">
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" value="{{$copyright->copyright}}" name="copyright" class="large" />
                                 <p style="color: red;"> {{ ($errors->has('copyright'))? $errors->first('copyright'):''}}</p>
                            </td>
                        </tr>
						
						 <tr> 
                            <td>
                                <input type="submit" name="submit" Value="Update" />
                                {{csrf_field()}}
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
                @endif
            </div>
        </div>
@stop









  
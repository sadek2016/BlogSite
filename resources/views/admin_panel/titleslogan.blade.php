@extends('admin_layouts.default')
@section('contern1')
<?php $role=Auth::user()->user_role;?>
        <div class="grid_10">

            <div class="box round first grid">
            @if($role==1)
                <h2>Update Site Title and Description</h2>
                <div class="block sloginblock">    
                <p style="color: green; margin-left: 350px;"> {{Session::get('message')}} </p>            
                 <form action="/titleslogan" method="post">
                    <table class="form">					
                        <tr>
                            <td>
                                <label>Website Title</label>
                            </td>
                            <td>
                                <input type="text"  name="title"  value="{{$website->title}}" class="medium" />
                                <p style="color: red;"> {{ ($errors->has('title'))? $errors->first('title'):''}}</p>
                            </td>
                        </tr>
						 <tr>
                            <td>
                                <label>Website Slogan</label>
                            </td>
                            <td>
                                <input type="text"  name="slogan" value="{{$website->slogan}}" class="medium" />
                                <p style="color: red;"> {{ ($errors->has('slogan'))? $errors->first('slogan'):''}}</p>
                            </td>
                        </tr>
						 
						
						 <tr>
                            <td>
                            </td>
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

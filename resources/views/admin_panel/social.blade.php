@extends('admin_layouts.default')
@section('contern1')
<?php $role=Auth::user()->user_role;?>

        <div class="grid_10">
		
            <div class="box round first grid">
        @if($role==1)
                <h2>Update Social Media</h2>
                <div class="block">    
                <p style="color: green; margin-left: 310px;">{{Session::get('message')}}</p>           
                 <form action="/social" method="post"> 
                    <table class="form">					
                        <tr>
                            <td>
                                <label>Facebook</label>
                            </td>
                            <td>
                                <input type="text" name="facebook" value="{{$sociallink->facebook}}"  class="medium" />
                                <p style="color: red;"> {{ ($errors->has('facebook'))? $errors->first('facebook'):''}}</p>
                            </td>
                        </tr>
						 <tr>
                            <td>
                                <label>Twitter</label>
                            </td>
                            <td>
                                <input type="text" name="twitter" value="{{$sociallink->twitter}}" class="medium" />
                                <p style="color: red;"> {{ ($errors->has('twitter'))? $errors->first('twitter'):''}}</p>
                            </td>
                        </tr>
						
						 <tr>
                            <td>
                                <label>LinkedIn</label>
                            </td>
                            <td>
                                <input type="text" name="linkedin" value="{{$sociallink->linkedin}}" class="medium" />
                                <p style="color: red;"> {{ ($errors->has('linkedin'))? $errors->first('linkedin'):''}}</p>
                            </td>
                        </tr>
						
						 <tr>
                            <td>
                                <label>Google Plus</label>
                            </td>
                            <td>
                                <input type="text" name="googleplus" value="{{$sociallink->googleplus}}" class="medium" />
                                <p style="color: red;"> {{ ($errors->has('googleplus'))? $errors->first('googleplus'):''}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>YouTube</label>
                            </td>
                            <td>
                                <input type="text" name="youtube" value="{{$sociallink->youtube}}" class="medium" />
                                <p style="color: red;"> {{ ($errors->has('youtube'))? $errors->first('youtube'):''}}</p>
                            </td>
                        </tr>
						
						 <tr>
                            <td></td>
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

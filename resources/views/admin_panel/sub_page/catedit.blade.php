@extends('admin_layouts.default')
@section('contern1')
        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Update Category</h2>
               <div class="block copyblock"> 
               <p style="color: green; ">{{Session::get('message')}}</p> 
                 <form action="/catedit" method="post" name="">
                    <table class="form" >	

                        <tr>
                            <td>
                                <input type="text" name="category" value="{{$catdata->category}}" class="medium" />
                                <p style="color: red;"> {{$errors->has('category')? $errors->first('category'):''}} </p>
                                <input type="hidden" name="id" value="{{$catdata->id}}" class="medium" />
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
            </div>
        </div>
@stop

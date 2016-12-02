@extends('admin_layouts.default')
@section('contern1')
<?php $role=Auth::user()->user_role;?> 
        <script type="text/javascript">
        $(document).ready(function () {
            setupTinyMCE();
            setDatePicker('date-picker');
            $('input[type="checkbox"]').fancybutton();
            $('input[type="radio"]').fancybutton();
        });
    </script>
        <script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
            setSidebarHeight();
        });
    </script>
    <!-- /TinyMCE -->
    <style type="text/css">
        #tinymce{font-size:15px !important;}
    </style>

    <div class="grid_10">
        
            <div class="box round first grid">
                <h2>Update Page</h2>
                <div class="block">  
                <p style="color: green; margin-left: 70px;"> {{Session::get('message')}} </p>             
                 <form action="/updatepage" method="post" enctype="multipart/form-data">
                
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label>Name</label>
                            </td>
                            <td>
                                <input type="text" name="name" value="{{$pagetext->name}}" class="medium" />
                                <p style="color: red"> {{$errors->has('name')?$errors->first('name'):''}} </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Body:</label>
                            </td>
                            <td>
                                <textarea name="body" id="" cols="80" rows="10" style="text-align: justify; padding: 15px;" >{{$pagetext->body}}</textarea>
                                <p style="color: red;"> {{$errors->has('body')?$errors->first('body'):''}} </p>
                                <input type="hidden" name="id" value="{{$pagetext->id}}">
                            </td>
                        </tr>

                         
                        <tr>
                            <td></td>
                            <td>
                             {{csrf_field()}}
                        @if($role==1 || $role==2)
                                <input type="submit" name="" Value="Update" />
                        @endif
                         @if($role==1)
                                <button style="padding: 8px; border: none; font-size: 15px"><a style="text-decoration: none; color: #000" href="/pagedelete/{{$pagetext->id}}" onclick="return confirm('are you sure Deleted Page?')">Delete</a></button>
                         @endif
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>

@stop









@extends('admin_layouts.default')
@section('contern1')
        
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
                <h2>Add New Post</h2>
                <div class="block">      
                 @foreach($viewalldata as $data)
                    <table class="form">
                    
                        <tr>
                            <td>
                                <label>Title</label>
                            </td>
                            <td>
                                <input readonly type="text" name="title" value=" {{$data->title}}" class="medium" />
                            </td>
                        </tr>
                     
                        <tr>
                            <td>
                                <label>Category</label>
                            </td>
                            <td>
                                <input readonly type="text" value="{{$data->category}}">
                            </td>
                        </tr>
                        
                    
                    

                        <tr>
                            <td>
                                <label>Image</label>
                            </td>
                            <td>
                                <img src='{{asset("$data->image")}}' width="100px">
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Content</label>
                            </td>
                            <td>
                                <textarea name="body" id="" cols="80" rows="10" readonly="" style="text-align: justify; padding: 10px;" >{{$data->body}} </textarea>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Tege</label>
                            </td>
                            <td>
                                <input readonly="" type="text" name="tag" value=" {{$data->tag}}" class="medium" />
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <label>Author</label>
                            </td>
                            <td>
                                <input type="text" readonly name="author" value=" {{$data->author}}" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <button  style="width: 100px; padding: 8px" ><a href="/postlist">Back..</a></button>
                            </td>
                        </tr>
                    </table>

                    @endforeach
                  
                </div>
            </div>
        </div>

@stop









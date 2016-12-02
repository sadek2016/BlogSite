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
<!-- @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color: red;">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->
                <div class="block">    
                <p style="color: green; margin-left: 160px;">{{Session::get('message')}}</p>           
                 <form action="/addpost" method="post" enctype="multipart/form-data">
                 {{csrf_field()}}
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label>Title</label>
                            </td>
                            <td>
                                <input type="text" name="title" placeholder="Enter Post Title..." class="medium" /><br>
                                <p style="color: red;"> {{ ($errors->has('title'))? $errors->first('title'):''}}</p>

                            </td>
                        </tr>
                     
                        <tr>
                            <td>
                                <label>Category</label>
                            </td>
                            <td>
                                <select id="select" name="cat">
                                    <option value="1">Category One</option>
                                    @foreach($categoryall as $category)
                                    <option value="{{$category->id}}">{{$category->category}}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        
                    
                    

                        <tr>
                            <td>
                                <label>Upload Image</label>
                            </td>
                            <td>
                                <input type="file" name="image" /><br>
                                <p style="color: red;"> {{ ($errors->has('image'))? $errors->first('image'):''}}</p>
                            </td>
                             
                        </tr>
                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Content</label>
                            </td>
                            <td>
                                <textarea name="body" id="" cols="80" rows="10" style="padding: 10px;" > </textarea><br>
                                 <p style="color: red;"> {{ ($errors->has('body'))? $errors->first('body'):''}}</p>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Tege</label>
                            </td>
                            <td>
                                <input type="text" name="tag" placeholder="Enter Post Tage..." class="medium" /><br>
                                 <p style="color: red;"> {{ ($errors->has('tag'))? $errors->first('tag'):''}}</p>
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <label>Author</label>
                            </td>
                            <td>
                                <input type="text" name="author" placeholder="Enter author name..." class="medium" /><br>
                                 <p style="color: red;"> {{ ($errors->has('author'))? $errors->first('author'):''}}</p>

                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>

@stop









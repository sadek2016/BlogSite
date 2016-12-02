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
   <!-- <script>tinymce.init({
    selector:'textarea',
    plugins:'link code',
    menu:{ 
       view: {title:'Edit',items: 'cut','copy','paste' }
    }
     });
    -->
   </script>
    <!-- /TinyMCE -->
    <style type="text/css">
        #tinymce{font-size:15px !important;}
    </style>

	<div class="grid_10">
        
            <div class="box round first grid">
                <h2>Update Post</h2>
                <div class="block">   
                <p style="color: green; margin-left: 160px;">{{Session::get('message')}}</p>             
                 <form action="/postlist" method="post" enctype="multipart/form-data">
                 {{csrf_field()}}
                
                    <table class="form">
                        <tr>
                            <td>
                                <label>Title</label>
                            </td>
                            <td>
                                <input  type="text" name="title" value=" {{$data->title}}" class="medium" /><input  type="hidden" name="Hidden_id" value=" {{$data->id}}" class="medium" /><br>
                                <p style="color: red;"> {{ ($errors->has('title'))? $errors->first('title'):''}}</p>
                            </td>
                        </tr>
                     
                        <tr>
                            <td>
                                <label>Category</label>
                            </td>
                            <td>
                                <select id="select" name="cat">
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
                                <input type="file" name="image"  value="{{$data->image}} " /><br>
                                <p style="color: red;"> {{ ($errors->has('image'))? $errors->first('image'):''}}</p>
                            </td>
                        </tr>

                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Content</label>
                            </td>
                            <td>
                                <textarea name="body" id="" cols="80" rows="10"  style="text-align: justify; padding: 10px; " >{{$data->body}}</textarea><br>
                                <p style="color: red;"> {{ ($errors->has('body'))? $errors->first('body'):''}}</p>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Tege</label>
                            </td>
                            <td>
                                <input  type="text" name="tag" value=" {{$data->tag}}" class="medium" />
                                <p style="color: red;"> {{ ($errors->has('teg'))? $errors->first('teg'):''}}</p>
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <label>Author</label>
                            </td>
                            <td>
                                <input type="text"  name="author" value=" {{$data->author}}" class="medium" />
                                <p style="color: red;"> {{ ($errors->has('author'))? $errors->first('author'):''}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                            <input type="hidden" name="id" value="{{$data->id}}">
                               <input type="submit" name="submit" Value="Update" />

                            </td>
                        </tr>
                    </table>

                   
                    </form>
                </div>
            </div>
        </div>

@stop









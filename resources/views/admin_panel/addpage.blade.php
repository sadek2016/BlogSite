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
        $(document).ready(function (){
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
                <h2>Add New Page</h2>
                <div class="block">     
               <p style="color: green; margin-left: 70px;">{{Session::get('message')}}</p> 
               
                 <form action="/addpage" method="post" enctype="multipart/form-data">
                
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label>Name</label>
                            </td>
                            <td>
                                <input type="text" name="name" placeholder="Enter User Name..." class="medium" /><br>
                                <p style="color: red;"> {{ ($errors->has('name'))? $errors->first('name'):''}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Body:</label>
                            </td>
                            <td>
                                <textarea name="body" id="" cols="80" rows="10" style="padding: 10px;" ></textarea>
                               <p style="color: red;"> {{ ($errors->has('body'))? $errors->first('body'):''}}</p>
                            </td>
                        </tr>

                         
                        <tr>
                            <td></td>
                            <td>
                             {{csrf_field()}}
                                <input type="submit" name="" Value="Sent" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>

@stop









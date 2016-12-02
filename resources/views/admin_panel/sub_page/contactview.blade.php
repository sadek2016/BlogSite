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
                <h2>View Message</h2>
                <div class="block">             
                
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label>Name</label>
                            </td>
                            <td>
                           <?php  $name= $contactview->fname." ".$contactview->lname ; ?>
                                <input readonly="" type="text" name="uname" value="{{$name}}" class="medium" />
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Email</label>
                            </td>
                            <td>
                                <input readonly="" type="text" name="uname" value="{{$contactview->email}}"  class="medium" />
                            </td>
                        </tr>

                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Message:</label>
                            </td>
                            <td>
                                <textarea name="body" id="" cols="80" rows="10" readonly="" style="text-align: justify; padding: 15px;" >{{$contactview->message}}</textarea>
                            </td>
                        </tr>

                         
                        <tr>
                            <td></td>
                            <td>
                             {{csrf_field()}}
                                <button><a  style="padding: 15px 25px; font-size: 15px;" href="/inbox">Back..</a></button>
                            </td>
                        </tr>
                    </table>
                  
                </div>
            </div>
        </div>

@stop









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
                <h2>Reply Message</h2>
                <div class="block">             
                
                    <form action="/replymessage" method="post">
                    	<table class="form">
                        <tr>
                            <td>
                                <label>To</label>
                            </td>
                            <td>
                                <input readonly="" type="text" name="toemail" value="{{$contactview->email}}"  class="medium" />
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>From</label>
                            </td>
                            <td>
                                <input  type="text" name="femail" value=""  class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Subject</label>
                            </td>
                            <td>
                                <input  type="text" name="subject" value=""  class="medium" />
                            </td>
                        </tr>

                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Message:</label>
                            </td>
                            <td>
                                <textarea name="message" id="" cols="80" rows="10" style="padding: 10px; text-align: justify;"></textarea>
                            </td>
                        </tr>

                         
                        <tr>
                            <td></td>
                            <td>
                             {{csrf_field()}}
                             <input type="hidden" value="{{$contactview->id}}" name="id">
                              <input type="submit" value="Sent" name="">
                            </td>
                        </tr>
                    </table>
                    </form>
                  
                </div>
            </div>
        </div>

@stop









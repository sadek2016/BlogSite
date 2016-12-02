<?php $role=Auth::user()->user_role;?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title> Admin</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/reset.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/text.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/grid.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/layout.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/nav.css')}}" media="screen" />
    <link href="{{ asset('admin/css/table/demo_page.css')}}" rel="stylesheet" type="text/css" />

   
    <!-- BEGIN: load jquery -->
    <script src="{{ asset('admin/js/jquery-1.6.4.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('admin/js/jquery-ui/jquery.ui.core.min.js')}}"></script>
    <script src="{{ asset('admin/js/jquery-ui/jquery.ui.widget.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/js/jquery-ui/jquery.ui.accordion.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/js/jquery-ui/jquery.effects.core.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/js/jquery-ui/jquery.effects.slide.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/js/jquery-ui/jquery.ui.mouse.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/js/jquery-ui/jquery.ui.sortable.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/js/table/jquery.dataTables.min.js')}}" type="text/javascript"></script>
    <!-- END: load jquery -->
    <script type="text/javascript" src="{{ asset('admin/js/table/table.js')}}"></script>
    <script src="{{ asset('admin/js/setup.js')}}" type="text/javascript"></script>
     <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  

            
     <script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
            setSidebarHeight();
        });
    </script>

</head>
<body>
    <div class="container_12">
        <div class="grid_12 header-repeat">
            <div id="branding">
                <div class="floatleft logo">
                    <img src="{{ asset('admin/img/weblogo.png')}}" alt="Logo" />
                </div>
                <div class="floatleft middle">
                    <h1>Programming Skill for Web</h1>
                    <p>www.programmingskill.com</p>
                </div>
                <div class="floatright">
                    <div class="floatleft">
                        <img src="img/img-profile.jpg" alt="Profile Pic" /></div>
                    <div class="floatleft marginleft10">
                        <ul class="inline-ul floatleft">
                                <form id="logout-form" action="{{ url('/logout') }}" method="POST">
                                    <li>Hello {{ Auth::user()->name }}
                                            <a href="{{ url('/logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout
                                            </a>{{csrf_field()}}
                                    </li>
                                </form>
                           
                           
                        </ul>
                    </div>
                </div>
                <div class="clear">
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
        <div class="grid_12">
            <ul class="nav main">
                <li class="ic-dashboard"><a href="/adminpage"><span>Dashboard</span></a> </li>
                <li class="ic-form-style"><a href=""><span>User Profile</span></a></li>
                <li class="ic-typography"><a href="/changepassword"><span>Change Password</span></a></li>
                <?php $message=count($inboxmessage); ?>
                <li class="ic-grid-tables"><a href="/inbox"><span>Inbox ({{$message}})</span></a></li>
                <li class="ic-charts"><a href="/postlist"><span>Visit Website</span></a></li>
            @if($role==1)
                <li class="ic-charts"><a href="/adduser"><span>Add User</span></a></li>
            @endif
                <li class="ic-charts"><a href="/postlist"><span>User List</span></a></li>
            </ul>
        </div>
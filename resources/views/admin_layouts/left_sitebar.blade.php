<?php $role=Auth::user()->user_role;?>

        <div class="clear">
        </div>
        <div class="grid_2">
            <div class="box sidemenu">
                <div class="block" id="section-menu">
                    <ul class="section menu">
                       <li><a class="menuitem">Site Option</a>
                            <ul class="submenu">
                                <li><a href="/titleslogan">Title & Slogan</a></li>
                                <li><a href="/social">Social Media</a></li>
                                <li><a href="/copyright">Copyright</a></li>
                                
                            </ul>
                        </li>
                        
                         <li><a class="menuitem">Pages</a>
                            <ul class="submenu">
                        @if($role==1)
                                <li><a href="/addpage" >Add page</a></li>
                        @endif
                            @foreach($pagelist as $page)
                                <li><a href="/updatepage/{{$page->id}}" >{{$page->name}}</a></li>
                            @endforeach
                            </ul>
                        </li>
                        <li><a class="menuitem">Category Option</a>
                            <ul class="submenu">
                                <li><a href="/addcat">Add Category</a> </li>
                                <li><a href="/catlist">Category List</a> </li>
                            </ul>
                        </li>
                        <li><a class="menuitem">Post Option</a>
                            <ul class="submenu">
                                <li><a href="/addpost">Add Post</a> </li>
                                <li><a href="/postlist">Post List</a> </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
<div class="headerbar">
    <a class="menutoggle"><i class="fa fa-bars"></i></a>
    <div class="header-right">
        <ul class="headermenu">
            <li>
                <div class="btn-group">
                    <button class="btn btn-default dropdown-toggle tp-icon" data-toggle="dropdown">
                        <i class="glyphicon glyphicon-envelope"></i>
                        <span class="badge">1</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-head pull-right">
                        <h5 class="title">You Have 1 New Message</h5>
                        <ul class="dropdown-list gen-list">
                            <li class="new">
                                <a href="">
                                    <span class="thumb"><img src="{{ asset('images') }}/photos/user1.png" alt="" /></span>
                                  <span class="desc">
                                    <span class="name">Draniem Daamul <span class="badge badge-success">new</span></span>
                                    <span class="msg">Lorem ipsum dolor sit amet...</span>
                                  </span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="thumb"><img src="{{ asset('images') }}/photos/user2.png" alt="" /></span>
                                  <span class="desc">
                                    <span class="name">Nusja Nawancali</span>
                                    <span class="msg">Lorem ipsum dolor sit amet...</span>
                                  </span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="thumb"><img src="{{ asset('images') }}/photos/user3.png" alt="" /></span>
                                  <span class="desc">
                                    <span class="name">Weno Carasbong</span>
                                    <span class="msg">Lorem ipsum dolor sit amet...</span>
                                  </span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="thumb"><img src="{{ asset('images') }}/photos/user4.png" alt="" /></span>
                                  <span class="desc">
                                    <span class="name">Zaham Sindilmaca</span>
                                    <span class="msg">Lorem ipsum dolor sit amet...</span>
                                  </span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="thumb"><img src="{{ asset('images') }}/photos/user5.png" alt="" /></span>
                                  <span class="desc">
                                    <span class="name">Veno Leongal</span>
                                    <span class="msg">Lorem ipsum dolor sit amet...</span>
                                  </span>
                                </a>
                            </li>
                            <li class="new"><a href="">Read All Messages</a></li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <div class="btn-group">
                    <button class="btn btn-default dropdown-toggle tp-icon" data-toggle="dropdown">
                        <i class="glyphicon glyphicon-globe"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-usermenu pull-right" id="language-switch">
                        <li type="cn"><a href="javascript:void(0)"><i class="fa fa-language mr10"></i><span set-lan="html:CHINESE">简体中文</span></a></li>
                        <li type="en"><a href="javascript:void(0)"><i class="fa fa-language mr10"></i><span set-lan="html:ENGLISH">英文</span></a></li>
                    </ul>
                </div>
            </li>
            <li>
                <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ asset('images') }}/photos/loggeduser.png" alt="" />
                        John Doe
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                        <li><a href="javascript:void(0)"><i class="glyphicon glyphicon-user"></i> 个人信息</a></li>
                        <li><a href="javascript:void(0)"><i class="glyphicon glyphicon-cog"></i> 设置</a></li>
                        <li><a href="javascript:void(0)"><i class="glyphicon glyphicon-question-sign"></i> 帮助</a></li>
                        <li onclick="CacheCookie()"><a href="{{ url('users/logout') }}"><i class="glyphicon glyphicon-log-out"></i> 退出登录</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div><!-- header-right -->
</div><!-- headerbar -->
<script>
    function CacheCookie(){
        $.cookie('lan','');
    }
</script>
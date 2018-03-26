<div class="leftpanel">
    <div class="logopanel">
        <h1><span>[</span> <strong set-lan="html:HEADER">荔枝租房</strong> <span>]</span></h1>
    </div><!-- logopanel -->
    <div class="leftpanelinner">
        <!-- This is only visible to small devices -->
        <div class="visible-xs hidden-sm hidden-md hidden-lg">
            <div class="media userlogged">
                <img alt="" src="{{ asset('images') }}/photos/loggeduser.png" class="media-object">
                <div class="media-body">
                    <h4>{{ $__user_info__['user_nickname'] }}</h4>
                    <span>{{ $__user_info__['role_id'] }}</span>
                </div>
            </div>
            <h5 class="sidebartitle actitle">Account</h5>
            <ul class="nav nav-pills nav-stacked nav-bracket mb30">
                <li><a href="profile.html"><i class="fa fa-user"></i> <span>个人信息</span></a></li>
                <li><a href=""><i class="fa fa-cog"></i> <span>设置</span></a></li>
                <li><a href=""><i class="fa fa-question-circle"></i> <span>帮助</span></a></li>
                <li><a href="signout.html"><i class="fa fa-sign-out"></i> <span>退出登录</span></a></li>
            </ul>
        </div>
        <h5 class="sidebartitle" set-lan="html:NAVIGATION">导航</h5>
        <ul class="nav nav-pills nav-stacked nav-bracket" id="NavMeau">
            <li class="active"><a href="index.html"><i class="fa fa-home"></i> <span set-lan="html:HOME">首页</span></a></li>
            <li class="nav-parent"><a href=""><i class="fa fa-laptop"></i> <span set-lan="html:USER">账号管理</span></a>
                <ul class="children">
                    <li><a href="" target="_self"><i class="fa fa-caret-right"></i><span set-lan="html:USER">账号管理</span></a></li>
                    <li><a href=""><i class="fa fa-caret-right"></i><span set-lan="html:ROLE">角色列表</span></a></li>
                </ul>
            </li>

            <li class="nav-parent"><a href=""><i class="fa fa-reorder"></i> <span set-lan="html:MENUMANAGE">菜单管理</span></a>
                <ul class="children">
                    <li><a href="menu.html"><i class="fa fa-caret-right"></i><span set-lan="html:MENU">菜单列表</span></a></li>
                </ul>
            </li>
            <li class="nav-parent"><a href=""><i class="fa fa-building"></i> <span set-lan="html:HOUSEMANAGE">房源管理</span></a>
                <ul class="children">
                    <li><a href="housing-type.html"><i class="fa fa-caret-right"></i><span set-lan="html:HOUSETYPE">房源类型</span></a></li>
                    <li><a href="housing-add.html"><i class="fa fa-caret-right"></i><span set-lan="html:HOUSEADD">房源添加</span></a></li>
                    <li><a href="housing-list.html"><i class="fa fa-caret-right"></i><span set-lan="html:HOUSELIST">房源列表</span></a></li>
                    <li><a href="housing-audit.html"><i class="fa fa-caret-right"></i><span set-lan="html:HOUSEAUDIT">房源审核</span></a></li>
                </ul>
            </li>
            <li class="nav-parent"><a href=""><i class="fa fa-tasks"></i> <span set-lan="html:ORDERMANAGE">订单管理</span></a>
                <ul class="children">
                    <li><a href="order.html"><i class="fa fa-caret-right"></i><span set-lan="html:ORDER">订单列表</span></a></li>
                </ul>
            </li>
            <li class="nav-parent"><a href=""><i class="fa fa-bar-chart"></i> <span set-lan="html:DATAREPORT">数据报表</span></a>
                <ul class="children">
                    <li><a href="bar.html"><i class="fa fa-caret-right"></i><span set-lan="html:BAR">销售增长率柱状图</span></a></li>
                    <li><a href="line.html"><i class="fa fa-caret-right"></i><span set-lan="html:LINE">销售增长率折线图</span></a></li>
                </ul>
            </li>
            <li class="nav-parent"><a href=""><i class="fa fa-file-code-o"></i> <span set-lan="html:USERFEEKBACK">用户反馈</span></a>
                <ul class="children">
                    <li><a href="feedback.html"><i class="fa fa-caret-right"></i><span set-lan="html:FEEDBACK">用户反馈</span></a></li>
                    <li><a href="comment.html"><i class="fa fa-caret-right"></i><span set-lan="html:COMMENT">用户评论</span></a></li>
                </ul>
            </li>
            <li><a href="help.html"><i class="fa fa-question-circle-o"></i> <span set-lan="html:HELPHANDBOOK">帮助手册</span></a></li>
            <li><a href="log.html"><i class="fa fa-paw"></i> <span set-lan="html:LOG">操作日志</span></a></li>
            <li><a href="news.html"><span class="pull-right badge badge-success">2</span><i class="fa fa-envelope-o"></i> <span set-lan="html:NEWS">消息</span></a></li>
        </ul>
        <div class="infosummary">
            <h5 class="sidebartitle" set-lan="html:SUMMARY">Information Summary</h5>
            <ul>
                <li>
                    <div class="datainfo">
                        <span class="text-muted" set-lan="html:DAILY">Daily Traffic</span>
                        <h4>630, 201</h4>
                    </div>
                    <div id="sidebar-chart" class="chart"></div>
                </li>
                <li>
                    <div class="datainfo">
                        <span class="text-muted" set-lan="html:AVERAGE">Average Users</span>
                        <h4>1, 332, 801</h4>
                    </div>
                    <div id="sidebar-chart2" class="chart"></div>
                </li>
                <li>
                    <div class="datainfo">
                        <span class="text-muted" set-lan="html:DISK">Disk Usage</span>
                        <h4>82.2%</h4>
                    </div>
                    <div id="sidebar-chart3" class="chart"></div>
                </li>
                <li>
                    <div class="datainfo">
                        <span class="text-muted" set-lan="html:CPU">CPU Usage</span>
                        <h4>140.05 - 32</h4>
                    </div>
                    <div id="sidebar-chart4" class="chart"></div>
                </li>
                <li>
                    <div class="datainfo">
                        <span class="text-muted" set-lan="html:MEMORY">Memory Usage</span>
                        <h4>32.2%</h4>
                    </div>
                    <div id="sidebar-chart5" class="chart"></div>
                </li>
            </ul>
        </div><!-- infosummary -->
    </div><!-- leftpanelinner -->
</div><!-- leftpanel -->
<script type="text/html" id="menu">
    @{{each data}}
    <li class="nav-parent"><a href="javascript:void(0)"><i class="fa @{{$value.icon}}"></i> <span>@{{$value.name}}</span></a>
        <ul class="children">
            @{{each $value.child as child index}}
            <li><a href="@{{child.url}}" target="_self"><i class="fa fa-caret-right"></i><span>@{{child.name}}</span></a></li>
            @{{/each}}
        </ul>
    </li>
    @{{/each}}
</script>
<script type="text/javascript">
    $.ajax({
        url:"{{url('getMenu')}}",
        type:'POST', //GET
        async:false,    //或false,是否异步
        timeout:5000,    //超时时间
        data:{"_token":"{{csrf_token()}}"},
        dataType:'json',    //返回的数据格式：json/xml/html/script/jsonp/text
        success:function(data){
            console.log(data);
            if(data.status=="1"){
                var tableHTML = template('menu', data);
                $("#NavMeau").html(tableHTML);
            }
        },
        error:function(){
            console.log('错误')
        }
    });
</script>
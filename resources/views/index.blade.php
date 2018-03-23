<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="/images/favicon.png" type="image/png">
        <title>Ulzz.com</title>
        <link href="/css/style.default.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="/js/html5shiv.js"></script>
        <script src="/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- Preloader -->
        <div id="preloader">
            <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
        </div>
        <section>
            <div class="leftpanel">
                <div class="logopanel">
                    <h1><span>[</span> <strong set-lan="html:HEADER">荔枝租房</strong> <span>]</span></h1>
                </div><!-- logopanel -->
                <div class="leftpanelinner">
                    <!-- This is only visible to small devices -->
                    <div class="visible-xs hidden-sm hidden-md hidden-lg">
                        <div class="media userlogged">
                            <img alt="" src="images/photos/loggeduser.png" class="media-object">
                            <div class="media-body">
                                <h4>John Doe</h4>
                                <span>"Life is so..."</span>
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
                    <h5 class="sidebartitle" set-lan="html:Navigation">Navigation</h5>
                    <ul class="nav nav-pills nav-stacked nav-bracket">
                        <li class="active"><a href="index.html"><i class="fa fa-home"></i> <span set-lan="html:HOME">首页</span></a></li>
                        <li class="nav-parent"><a href=""><i class="fa fa-laptop"></i> <span set-lan="html:USER">账号管理</span></a>
                            <ul class="children">
                                <li><a href="user.html"><i class="fa fa-caret-right"></i><span set-lan="html:USER">账号管理</span></a></li>
                                <li><a href="role.html"><i class="fa fa-caret-right"></i><span set-lan="html:ROLE">角色列表</span></a></li>
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
            <div class="mainpanel">
                <div class="headerbar">
                    <a class="menutoggle"><i class="fa fa-bars"></i></a>
                    <form class="searchform" action="index.html" method="post">
                      <input type="text" class="form-control" name="keyword" placeholder="Search here..." />
                    </form>
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
                                  <span class="thumb"><img src="images/photos/user1.png" alt="" /></span>
                                  <span class="desc">
                                    <span class="name">Draniem Daamul <span class="badge badge-success">new</span></span>
                                    <span class="msg">Lorem ipsum dolor sit amet...</span>
                                  </span>
                                  </a>
                                </li>
                                <li>
                                  <a href="">
                                  <span class="thumb"><img src="images/photos/user2.png" alt="" /></span>
                                  <span class="desc">
                                    <span class="name">Nusja Nawancali</span>
                                    <span class="msg">Lorem ipsum dolor sit amet...</span>
                                  </span>
                                  </a>
                                </li>
                                <li>
                                  <a href="">
                                  <span class="thumb"><img src="images/photos/user3.png" alt="" /></span>
                                  <span class="desc">
                                    <span class="name">Weno Carasbong</span>
                                    <span class="msg">Lorem ipsum dolor sit amet...</span>
                                  </span>
                                  </a>
                                </li>
                                <li>
                                  <a href="">
                                  <span class="thumb"><img src="images/photos/user4.png" alt="" /></span>
                                  <span class="desc">
                                    <span class="name">Zaham Sindilmaca</span>
                                    <span class="msg">Lorem ipsum dolor sit amet...</span>
                                  </span>
                                  </a>
                                </li>
                                <li>
                                  <a href="">
                                  <span class="thumb"><img src="images/photos/user5.png" alt="" /></span>
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
                              <li type="cn"><a href="#"><i class="fa fa-language mr10"></i><span set-lan="html:CHINESE">简体中文</span></a></li>
                              <li type="en"><a href="#"><i class="fa fa-language mr10"></i><span set-lan="html:ENGLISH">英文</span></a></li>
                            </ul>
                          </div>
                        </li>
                        <li>
                          <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                              <img src="images/photos/loggeduser.png" alt="" />
                              John Doe
                              <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                              <li><a href="javascript:void(0)"><i class="glyphicon glyphicon-user"></i> 个人信息</a></li>
                              <li><a href="javascript:void(0)"><i class="glyphicon glyphicon-cog"></i> 设置</a></li>
                              <li><a href="javascript:void(0)"><i class="glyphicon glyphicon-question-sign"></i> 帮助</a></li>
                              <li class="signout"><a href="javascript:void(0)"><i class="glyphicon glyphicon-log-out"></i> 退出登录</a></li>
                            </ul>
                          </div>
                        </li>
                      </ul>
                    </div><!-- header-right -->
                </div><!-- headerbar -->
                <div class="pageheader">
                    <h2>
                        <i class="fa fa-home"></i>
                        <strong set-lan="html:HOME">首页</strong>
                        <span set-lan="html:COMPANY">华世恒通</span>
                    </h2>
                    <div class="breadcrumb-wrapper">
                          <ol class="breadcrumb">
                        <li><a href="index.html" set-lan="html:HEADER">荔枝租房</a></li>
                        <li class="active" set-lan="html:HOME">首页</li>
                      </ol>
                    </div>
                </div>
                <div class="contentpanel">
                    <div class="row">
                      <div class="col-sm-6 col-md-3">
                        <div class="panel panel-success panel-stat">
                          <div class="panel-heading">
                            <div class="stat">
                              <div class="row">
                                <div class="col-xs-4">
                                  <img src="images/is-user.png" alt="" />
                                </div>
                                <div class="col-xs-8">
                                  <small class="stat-label">Visits Today</small>
                                  <h1>900k+</h1>
                                </div>
                              </div><!-- row -->

                              <div class="mb15"></div>

                              <div class="row">
                                <div class="col-xs-6">
                                  <small class="stat-label">Pages / Visit</small>
                                  <h4>7.80</h4>
                                </div>

                                <div class="col-xs-6">
                                  <small class="stat-label">% New Visits</small>
                                  <h4>76.43%</h4>
                                </div>
                              </div><!-- row -->
                            </div><!-- stat -->
                          </div><!-- panel-heading -->
                        </div><!-- panel -->
                      </div><!-- col-sm-6 -->
                      <div class="col-sm-6 col-md-3">
                        <div class="panel panel-danger panel-stat">
                          <div class="panel-heading">
                            <div class="stat">
                              <div class="row">
                                <div class="col-xs-4">
                                  <img src="images/is-document.png" alt="" />
                                </div>
                                <div class="col-xs-8">
                                  <small class="stat-label">% Unique Visitors</small>
                                  <h1>54.40%</h1>
                                </div>
                              </div><!-- row -->
                              <div class="mb15"></div>
                              <small class="stat-label">Avg. Visit Duration</small>
                              <h4>01:80:22</h4>
                            </div><!-- stat -->
                          </div><!-- panel-heading -->
                        </div><!-- panel -->
                      </div><!-- col-sm-6 -->
                      <div class="col-sm-6 col-md-3">
                        <div class="panel panel-primary panel-stat">
                          <div class="panel-heading">
                            <div class="stat">
                              <div class="row">
                                <div class="col-xs-4">
                                  <img src="images/is-document.png" alt="" />
                                </div>
                                <div class="col-xs-8">
                                  <small class="stat-label">Page Views</small>
                                  <h1>300k+</h1>
                                </div>
                              </div><!-- row -->
                              <div class="mb15"></div>
                              <small class="stat-label">% Bounce Rate</small>
                              <h4>34.23%</h4>
                            </div><!-- stat -->
                          </div><!-- panel-heading -->
                        </div><!-- panel -->
                      </div><!-- col-sm-6 -->
                      <div class="col-sm-6 col-md-3">
                        <div class="panel panel-dark panel-stat">
                          <div class="panel-heading">
                            <div class="stat">
                              <div class="row">
                                <div class="col-xs-4">
                                  <img src="images/is-money.png" alt="" />
                                </div>
                                <div class="col-xs-8">
                                  <small class="stat-label">Today's Earnings</small>
                                  <h1>$655</h1>
                                </div>
                              </div><!-- row -->
                              <div class="mb15"></div>
                              <div class="row">
                                <div class="col-xs-6">
                                  <small class="stat-label">Last Week</small>
                                  <h4>$32,322</h4>
                                </div>
                                <div class="col-xs-6">
                                  <small class="stat-label">Last Month</small>
                                  <h4>$503,000</h4>
                                </div>
                              </div><!-- row -->
                            </div><!-- stat -->
                          </div><!-- panel-heading -->
                        </div><!-- panel -->
                      </div><!-- col-sm-6 -->
                    </div><!-- row -->
                    <div class="row">
                      <div class="col-sm-8 col-md-9">
                        <div class="panel panel-default">
                          <div class="panel-body">
                            <div class="row">
                              <div class="col-sm-8">
                                <h5 class="subtitle mb5">Network Performance</h5>
                                <p class="mb15">Duis autem vel eum iriure dolor in hendrerit in vulputate...</p>
                                <div id="basicflot" style="width: 100%; height: 300px; margin-bottom: 20px"></div>
                              </div><!-- col-sm-8 -->
                              <div class="col-sm-4">
                                <h5 class="subtitle mb5">Server Status</h5>
                                <p class="mb15">Summary of the status of your server.</p>
                                <span class="sublabel">CPU Usage (40.05 - 32 cpus)</span>
                                <div class="progress progress-sm">
                                  <div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-primary"></div>
                                </div><!-- progress -->
                                <span class="sublabel">Memory Usage (32.2%)</span>
                                <div class="progress progress-sm">
                                  <div style="width: 32%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-success"></div>
                                </div><!-- progress -->
                                <span class="sublabel">Disk Usage (82.2%)</span>
                                <div class="progress progress-sm">
                                  <div style="width: 82%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-danger"></div>
                                </div><!-- progress -->
                                <span class="sublabel">Databases (63/100)</span>
                                <div class="progress progress-sm">
                                  <div style="width: 63%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-warning"></div>
                                </div><!-- progress -->
                                <span class="sublabel">Domains (2/10)</span>
                                <div class="progress progress-sm">
                                  <div style="width: 20%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-success"></div>
                                </div><!-- progress -->
                                <span class="sublabel">Email Account (13/50)</span>
                                <div class="progress progress-sm">
                                  <div style="width: 26%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-success"></div>
                                </div><!-- progress -->
                              </div><!-- col-sm-4 -->
                            </div><!-- row -->
                          </div><!-- panel-body -->
                        </div><!-- panel -->
                      </div><!-- col-sm-9 -->
                      <div class="col-sm-4 col-md-3">
                        <div class="panel panel-default">
                          <div class="panel-body">
                          <h5 class="subtitle mb5">Most Browser Used</h5>
                          <p class="mb15">Duis autem vel eum iriure dolor in hendrerit in vulputate...</p>
                          <div id="donut-chart2" class="ex-donut-chart"></div>
                          </div><!-- panel-body -->
                        </div><!-- panel -->
                      </div><!-- col-sm-3 -->
                    </div><!-- row -->
                    <div class="row">
                      <div class="col-sm-7">
                        <div class="table-responsive">
                          <table class="table table-bordered mb30">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>Username</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td>Larry</td>
                              <td>the Bird</td>
                              <td>@twitter</td>
                            </tr>
                            <tr>
                              <td>4</td>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                            </tr>
                            <tr>
                              <td>5</td>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                            </tr>
                            <tr>
                              <td>6</td>
                              <td>Larry</td>
                              <td>the Bird</td>
                              <td>@twitter</td>
                            </tr>
                            <tr>
                              <td>7</td>
                              <td>Larry</td>
                              <td>the Bird</td>
                              <td>@twitter</td>
                            </tr>
                          </tbody>
                        </table>
                        </div><!-- table-responsive -->
                      </div><!-- col-sm-7 -->
                      <div class="col-sm-5">
                        <div class="panel panel-success">
                          <div class="panel-heading padding5">
                            <div id="line-chart" class="ex-line-chart"></div>
                          </div>
                          <div class="panel-body">
                            <div class="tinystat pull-left">
                              <div id="sparkline" class="chart mt5"></div>
                              <div class="datainfo">
                                <span class="text-muted">Average Sales</span>
                                <h4>$630,201</h4>
                              </div>
                            </div><!-- tinystat -->
                            <div class="tinystat pull-right">
                              <div id="sparkline2" class="chart mt5"></div>
                              <div class="datainfo">
                                <span class="text-muted">Total Sales</span>
                                <h4>$139,201</h4>
                              </div>
                            </div><!-- tinystat -->
                          </div>
                        </div><!-- panel -->
                      </div><!-- col-sm-6 -->
                    </div><!-- row -->
                    <div class="row">
                      <div class="col-sm-6 col-md-4">
                        <div class="panel panel-default widget-photoday">
                          <div class="panel-body">
                            <a href="" class="photoday"><img src="images/photos/photo1.png" alt="" /></a>
                            <div class="photo-details">
                              <h4 class="photo-title">Strawhat In The Beach</h4>
                              <small class="text-muted"><i class="fa fa-map-marker"></i> San Franciso, California, USA</small>
                              <small>By: <a href="">ThemePixels</a></small>
                            </div><!-- photo-details -->
                            <ul class="photo-meta">
                              <li><span><i class="fa fa-eye"></i> 32,102</span></li>
                              <li><a href="#"><i class="fa fa-heart"></i> 1,003</a></li>
                              <li><a href="#"><i class="fa fa-comments"></i> 52</a></li>
                            </ul>
                          </div><!-- panel-body -->
                        </div><!-- panel -->
                      </div><!-- col-sm-6 -->
                      <div class="col-sm-6 col-md-4">
                        <div class="panel panel-default panel-alt widget-messaging">
                        <div class="panel-heading">
                            <div class="panel-btns">
                              <a href="" class="panel-edit"><i class="fa fa-edit"></i></a>
                            </div><!-- panel-btns -->
                            <h3 class="panel-title">Messaging</h3>
                          </div>
                          <div class="panel-body">
                            <ul>
                              <li>
                                <small class="pull-right">Dec 10</small>
                                <h4 class="sender">Jennier Lawrence</h4>
                                <small>Lorem ipsum dolor sit amet...</small>
                              </li>
                              <li>
                                <small class="pull-right">Dec 9</small>
                                <h4 class="sender">Marsha Mellow</h4>
                                <small>Lorem ipsum dolor sit amet...</small>
                              </li>
                              <li>
                                <small class="pull-right">Dec 9</small>
                                <h4 class="sender">Holly Golightly</h4>
                                <small>Lorem ipsum dolor sit amet...</small>
                              </li>
                              <li>
                                <small class="pull-right">Dec 10</small>
                                <h4 class="sender">Jennier Lawrence</h4>
                                <small>Lorem ipsum dolor sit amet...</small>
                              </li>
                              <li>
                                <small class="pull-right">Dec 9</small>
                                <h4 class="sender">Marsha Mellow</h4>
                                <small>Lorem ipsum dolor sit amet...</small>
                              </li>
                            </ul>
                          </div><!-- panel-body -->
                        </div><!-- panel -->
                      </div><!-- col-sm-6 -->
                      <div class="col-sm-6 col-md-4">
                        <div class="panel panel-dark panel-alt widget-quick-status-post">
                        <div class="panel-heading">
                            <div class="panel-btns">
                              <a href="" class="panel-close">&times;</a>
                              <a href="" class="minimize">&minus;</a>
                            </div><!-- panel-btns -->
                            <h3 class="panel-title">Quick Status Post</h3>
                          </div>
                          <div class="panel-body">
                            <ul class="nav nav-tabs nav-justified">
                              <li class="active"><a href="#post-status" data-toggle="tab"><i class="fa fa-pencil"></i> <strong>Status</strong></a></li>
                              <li><a href="#post-photo" data-toggle="tab"><i class="fa fa-picture-o"></i> <strong>Photo</strong></a></li>
                              <li><a href="#post-checkin" data-toggle="tab"><i class="fa fa-map-marker"></i> <strong>Check-In</strong></a></li>
                            </ul>
                            <div class="tab-content">
                              <div id="post-status" class="tab-pane active">
                                <input type="text" class="form-control" placeholder="What's your status?" />
                              </div>
                              <div id="post-photo" class="tab-pane">
                                <input type="text" class="form-control" placeholder="Choose photo" />
                              </div>
                              <div id="post-checkin" class="tab-pane">
                                <input type="text" class="form-control" placeholder="Search location" />
                              </div>
                              <button class="btn btn-primary btn-block mt10">Submit Post</button>
                            </div><!-- tab-content -->
                          </div><!-- panel-body -->
                        </div><!-- panel -->
                        <div class="mb20"></div>
                        <div class="row">
                          <div class="col-xs-6">
                            <div class="panel panel-warning panel-alt widget-today">
                              <div class="panel-heading text-center">
                                <i class="fa fa-calendar-o"></i>
                              </div>
                              <div class="panel-body text-center">
                                <h3 class="today">Fri, Dec 13</h3>
                              </div><!-- panel-body -->
                            </div><!-- panel -->
                          </div>
                          <div class="col-xs-6">
                            <div class="panel panel-danger panel-alt widget-time">
                              <div class="panel-heading text-center">
                                <i class="glyphicon glyphicon-time"></i>
                              </div>
                              <div class="panel-body text-center">
                                <h3 class="today">4:50AM PST</h3>
                              </div><!-- panel-body -->
                            </div><!-- panel -->
                          </div>
                        </div>
                      </div><!-- col-sm-6 -->
                    </div>
                </div><!-- contentpanel -->
            </div><!-- mainpanel -->
        </section>
        <script src="/js/jquery-1.11.1.min.js"></script>
        <script src="/js/jquery-migrate-1.2.1.min.js"></script>
        <script src="/js/jquery-ui-1.10.3.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/modernizr.min.js"></script>
        <script src="/js/jquery.sparkline.min.js"></script>
        <script src="/js/toggles.min.js"></script>
        <script src="/js/retina.min.js"></script>
        <script src="/js/jquery.cookies.js"></script>
        <script src="/js/judge-cookie.js?v=1.01"></script>
        <script src="/js/flot/jquery.flot.min.js"></script>
        <script src="/js/flot/jquery.flot.resize.min.js"></script>
        <script src="/js/flot/jquery.flot.spline.min.js"></script>
        <script src="/js/morris.min.js"></script>
        <script src="/js/raphael-2.1.0.min.js"></script>
        <script src="/js/custom.js"></script>
        <script src="/js/dashboard.js"></script>
        <script src="/js/language.js"></script>
        <script type="text/javascript">
            function GetCookie() {
                var uname = "{{session('user_id')}}";
                if(uname == "" || uname == undefined || uname == null){
                    location.href = "{{ url('users/login') }}";
                }
            }
            GetCookie();
            function SignOut() {
              $(".signout").click(function(){
                location.href = "{{ url('users/login') }}";
              });
            }
            SignOut();
        </script>
    </body>
</html>

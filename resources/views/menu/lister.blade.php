<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="{{ asset('images') }}/favicon.png" type="image/png">
        <title>Ulzz.com</title>  
        @include('tpl.CommonJs')      
    </head>
    <body>
        <!-- Preloader -->
        <div id="preloader">
            <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
        </div>
        <section>
            @include('tpl.leftpanel')
            <div class="mainpanel">
                @include('tpl.header')
                @include('tpl.bread')
                <div class="contentpanel">
                    <div class="operation">
                        <button class="btn btn-success btn-fold">全部折叠</button>
                        <button class="btn btn-success btn-open">全部打开</button>
                        <button class="btn btn-success btn-add">添加菜单</button>
                    </div>
                    <div class="menu-content">
                        <div class="menu-list">
                            <div class="menu-list-item menu-list-header">
                                <div class="menu-list-parent">
                                    <div class="fold">折叠</div>
                                    <div class="order">ID</div>
                                    <div class="order">排序</div>
                                    <div class="width-lg">名称</div>
                                    <div class="width-lg">URL</div>
                                    <div class="fold"></div>
                                </div>
                            </div>
                            <div class="menu-list-item">
                                <div class="menu-list-parent">
                                    <div class="fold"></div>
                                    <div class="order">1</div>
                                    <div class="order"><input type="text" class="form-control text-center" value="0"></div>
                                    <div class="width-lg"><input type="text" class="form-control" value="首页"></div>
                                    <div class="width-lg"><input type="text" class="form-control" value="/"></div>
                                    <div class="fold"><i class="fa fa-plus-circle fa-big"></i></div>
                                    <div class="fold pull-right">
                                        <span>删除</span>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-list-item">
                                <div class="menu-list-parent">
                                    <div class="fold"><i class="fa fa-plus-square-o icon-btn"></i></div>
                                    <div class="order">3</div>
                                    <div class="order"><input type="text" class="form-control text-center" value="1"></div>
                                    <div class="width-lg"><input type="text" class="form-control" value="账号管理"></div>
                                    <div class="width-lg"><input type="text" class="form-control" value=""></div>
                                    <div class="fold"><i class="fa fa-plus-circle fa-big"></i></div>
                                    <div class="fold pull-right">
                                        <span>删除</span>
                                    </div>
                                </div>
                                <div class="menu-list-child">
                                    <div class="menu-list-parent">
                                        <div class="fold"></div>
                                        <div class="order">4</div>
                                        <div class="order"><input type="text" class="form-control text-center" value="0"></div>
                                        <div class="fold fold-line"></div>
                                        <div class="width-lg"><input type="text" class="form-control" value="账号管理"></div>
                                        <div class="width-lg"><input type="text" class="form-control" value="/account/user"></div>
                                        <div class="fold pull-right">
                                            <span>删除</span>
                                        </div>
                                    </div>
                                    <div class="menu-list-parent">
                                        <div class="fold"></div>
                                        <div class="order">5</div>
                                        <div class="order"><input type="text" class="form-control text-center" value="1"></div>
                                        <div class="fold fold-line"></div>
                                        <div class="width-lg"><input type="text" class="form-control" value="角色列表"></div>
                                        <div class="width-lg"><input type="text" class="form-control" value="/account/role"></div>
                                        <div class="fold pull-right">
                                            <span>删除</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-list-item">
                                <div class="menu-list-parent">
                                    <div class="fold"><i class="fa fa-plus-square-o icon-btn"></i></div>
                                    <div class="order">3</div>
                                    <div class="order"><input type="text" class="form-control text-center" value="1"></div>
                                    <div class="width-lg"><input type="text" class="form-control" value="菜单管理"></div>
                                    <div class="width-lg"><input type="text" class="form-control" value=""></div>
                                    <div class="fold"><i class="fa fa-plus-circle fa-big"></i></div>
                                    <div class="fold pull-right">
                                        <span>删除</span>
                                    </div>
                                </div>
                                <div class="menu-list-child">
                                    <div class="menu-list-parent">
                                        <div class="fold"></div>
                                        <div class="order">4</div>
                                        <div class="order"><input type="text" class="form-control text-center" value="0"></div>
                                        <div class="fold fold-line"></div>
                                        <div class="width-lg"><input type="text" class="form-control" value="菜单列表"></div>
                                        <div class="width-lg"><input type="text" class="form-control" value="/account/user"></div>
                                        <div class="fold pull-right">
                                            <span>删除</span>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- contentpanel -->
            </div><!-- mainpanel -->
        </section>
        @include('tpl.CommonBottom')
        <!-- 添加菜单弹框容器 -->
        <div class="modal fade bs-example-modal-static" id="AddMenuModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">&times;</button>
                        <h4 class="modal-title" set-lan="html:MODALTITLE">新增菜单</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-3 control-label" set-lan="html:TABLENAME">状态:</label>
                                <div class="col-sm-8">
                                    <input type="text" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" set-lan="html:ACCOUNT">菜单排序:</label>
                                <div class="col-sm-8">
                                    <input type="text" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" set-lan="html:MODALPASSWORD">菜单名称:</label>
                                <div class="col-sm-8">
                                    <input type="text" placeholder=""  class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" set-lan="html:CONTACT">菜单URL:</label>
                                <div class="col-sm-8">
                                    <input type="text" placeholder="" class="form-control">
                                </div>
                            </div>                         
                        </form>
                        <div class="add_btn">
                            <span id="AddMeanuSave" type="add">保存</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 添加子菜单弹框容器 -->
        <div class="modal fade bs-example-modal-static" id="AddMenuChildModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">&times;</button>
                        <h4 class="modal-title" set-lan="html:MODALTITLE">新增菜单</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-3 control-label" set-lan="html:TABLENAME">上一级菜单:</label>
                                <div class="col-sm-8">
                                    <input type="text" placeholder="" class="form-control" disabled="disabled">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" set-lan="html:TABLENAME">状态:</label>
                                <div class="col-sm-8">
                                    <input type="text" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" set-lan="html:ACCOUNT">菜单排序:</label>
                                <div class="col-sm-8">
                                    <input type="text" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" set-lan="html:MODALPASSWORD">菜单名称:</label>
                                <div class="col-sm-8">
                                    <input type="text" placeholder=""  class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" set-lan="html:CONTACT">菜单URL:</label>
                                <div class="col-sm-8">
                                    <input type="text" placeholder="" class="form-control">
                                </div>
                            </div>                         
                        </form>
                        <div class="add_btn">
                            <span id="AddMeanuChildSave" type="add">保存</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script>
        $(document).on('click','.fold>.icon-btn',function () {
            var child=$(this).parents(".menu-list-item").find(".menu-list-child");
            if(child.is(":hidden")){
                child.slideDown('fast');
                $(this).removeClass("fa-plus-square-o");
                $(this).addClass("fa-minus-square-o");
            }else{
                child.slideUp('fast');
                $(this).removeClass("fa-minus-square-o");
                $(this).addClass("fa-plus-square-o");
            }
        });
        $(".btn-fold").click(function(){
            $(".menu-list-child").hide();
        });
        $(".btn-open").click(function(){
            $(".menu-list-child").show();
        });
        $(".btn-add").click(function(){
            $("#AddMenuModal").modal();
        });
        $(document).on('click','.fa-big',function(){
            $("#AddMenuChildModal").modal();
        });
    </script>
    <script src="{{ asset('js') }}/language.js"></script>
</html>

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
                        <button class="btn btn-success btn-fold" set-lan="html:ALLFOLD">全部折叠</button>
                        <button class="btn btn-success btn-open" set-lan="html:ALLOPEN">全部打开</button>
                        <button class="btn btn-success btn-add" set-lan="html:ADDMENU">添加菜单</button>
                    </div>
                    <div class="menu-content">
                        <div class="menu-list">
                            <div class="menu-list-item menu-list-header">
                                <div class="menu-list-parent">
                                    <div class="fold" set-lan="html:FOLD">折叠</div>
                                    <div class="order">ID</div>
                                    <div class="order" set-lan="html:SORT">排序</div>
                                    <div class="width-lg" set-lan="html:NAME">名称</div>
                                    <div class="width-lg">ICON</div>
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
                                    <div class="width-lg"><input type="text" class="form-control" value="fa-home"></div>
                                    <div class="width-lg"><input type="text" class="form-control" value="/"></div>
                                    <div class="fold"><i class="fa fa-plus-circle fa-big"></i></div>
                                    <div class="fold pull-right">
                                        <span set-lan="html:DELETE">删除</span>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-list-item">
                                <div class="menu-list-parent">
                                    <div class="fold"><i class="fa fa-plus-square-o icon-btn"></i></div>
                                    <div class="order">3</div>
                                    <div class="order"><input type="text" class="form-control text-center" value="1"></div>
                                    <div class="width-lg"><input type="text" class="form-control" value="账号管理"></div>
                                    <div class="width-lg"><input type="text" class="form-control" value="fa-laptop"></div>
                                    <div class="width-lg"><input type="text" class="form-control" value=""></div>
                                    <div class="fold"><i class="fa fa-plus-circle fa-big"></i></div>
                                    <div class="fold pull-right">
                                        <span set-lan="html:DELETE">删除</span>
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
                                            <span set-lan="html:DELETE">删除</span>
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
                                            <span set-lan="html:DELETE">删除</span>
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
                                    <div class="width-lg"><input type="text" class="form-control" value="fa-reorder"></div>
                                    <div class="width-lg"><input type="text" class="form-control" value=""></div>
                                    <div class="fold"><i class="fa fa-plus-circle fa-big"></i></div>
                                    <div class="fold pull-right">
                                        <span set-lan="html:DELETE">删除</span>
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
                                            <span set-lan="html:DELETE">删除</span>
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
                        <h4 class="modal-title">添加菜单</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-3 control-label" set-lan="html:State">状态:</label>
                                <div class="col-sm-8">
                                    <select class="form-control">
                                        <option value="">请选择状态</option>
                                        <option value="1">显示</option>
                                        <option value="0">隐藏</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" set-lan="html:MenuURL">菜单URL:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" set-lan="html:MenuName">菜单名称:</label>
                                <div class="col-sm-8">
                                    <input type="text" placeholder=""  class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">APP:</label>
                                <div class="col-sm-8">
                                    <input type="text" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Controller:</label>
                                <div class="col-sm-8">
                                    <input type="text" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Action:</label>
                                <div class="col-sm-8">
                                    <input type="text" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">菜单Icon:</label>
                                <div class="col-sm-8">
                                    <input type="text" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" set-lan="html:MenuSort">菜单排序:</label>
                                <div class="col-sm-8">
                                    <input type="text" placeholder="" class="form-control">
                                </div>
                            </div>
                        </form>
                        <div class="add_btn">
                            <span id="AddMeanuSave" set-lan="html:Save">保存</span>
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
                        <h4 class="modal-title">添加子菜单</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-3 control-label" set-lan="html:Upper">上一级菜单:</label>
                                <div class="col-sm-8">
                                    <input type="text" placeholder="" class="form-control" disabled="disabled">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" set-lan="html:State">状态:</label>
                                <div class="col-sm-8">
                                    <select class="form-control">
                                        <option value="">请选择状态</option>
                                        <option value="1">显示</option>
                                        <option value="0">隐藏</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" set-lan="html:MenuURL">菜单URL:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" set-lan="html:MenuName">菜单名称:</label>
                                <div class="col-sm-8">
                                    <input type="text" placeholder=""  class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">APP:</label>
                                <div class="col-sm-8">
                                    <input type="text" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Controller:</label>
                                <div class="col-sm-8">
                                    <input type="text" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Action:</label>
                                <div class="col-sm-8">
                                    <input type="text" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">菜单Icon:</label>
                                <div class="col-sm-8">
                                    <input type="text" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" set-lan="html:MenuSort">菜单排序:</label>
                                <div class="col-sm-8">
                                    <input type="text" placeholder="" class="form-control">
                                </div>
                            </div>
                        </form>
                        <div class="add_btn">
                            <span id="AddMeanuChildSave" set-lan="html:Save">保存</span>
                        </div>
                    </div>
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
            $(".fold>.icon-btn").removeClass("fa-minus-square-o");
            $(".fold>.icon-btn").addClass("fa-plus-square-o");
        });
        $(".btn-open").click(function(){
            $(".menu-list-child").show();
            $(".fold>.icon-btn").removeClass("fa-plus-square-o");
            $(".fold>.icon-btn").addClass("fa-minus-square-o");
        });
        $(".btn-add").click(function(){
            $("#AddMenuModal").modal();
        });
        $(document).on('click','.fa-big',function(){
            $("#AddMenuChildModal").modal();
        });
        function MenuList(){
            $.ajax({
                url:"{{url('menu/lister')}}",
                type:'POST', //GET
                async:false,    //或false,是否异步
                timeout:5000,    //超时时间
                data:{"_token":"{{csrf_token()}}"},
                dataType:'json',    //返回的数据格式：json/xml/html/script/jsonp/text
                success:function(res){
                    console.log(res);
                    if(res.status=="1"){

                    }
                },
                error:function(){
                    console.log('错误');
                }
            });
        }
        MenuList();
    </script>
    <script src="{{ asset('js') }}/language.js"></script>
</html>

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
        <input type="hidden" id="ParentId">
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
                        <div class="menu-list" id="MenuList">
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
                                    <select class="form-control FormStatus">
                                        <option value="">请选择状态</option>
                                        <option value="1">显示</option>
                                        <option value="0">隐藏</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" set-lan="html:MenuURL">菜单URL:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control FormUrl">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" set-lan="html:MenuName">菜单名称:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control FormName">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">APP:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control FormApp">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Controller:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control FormController">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Action:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control FormAction">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">菜单Icon:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control FormIcon">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" set-lan="html:MenuSort">菜单排序:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control FormSort">
                                </div>
                            </div>
                        </form>
                        <div class="add_btn">
                            <span id="AddMenuSave" onclick="MenuSave('0','AddMenuModal')" set-lan="html:Save">保存</span>
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
                                    <input type="text" placeholder="" class="form-control prev-menu" disabled="disabled">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" set-lan="html:State">状态:</label>
                                <div class="col-sm-8">
                                    <select class="form-control FormStatus">
                                        <option value="">请选择状态</option>
                                        <option value="1">显示</option>
                                        <option value="0">隐藏</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" set-lan="html:MenuURL">菜单URL:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control FormUrl">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" set-lan="html:MenuName">菜单名称:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control FormName">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">APP:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control FormApp">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Controller:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control FormController">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Action:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control FormAction">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">菜单Icon:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control FormIcon">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" set-lan="html:MenuSort">菜单排序:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control FormSort">
                                </div>
                            </div>     
                        </form>
                        <div class="add_btn">
                            <span id="AddMenuChildSave" set-lan="html:Save">保存</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script type="text/html" id="MenuHtml">
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
        @{{each data}}
        @{{if $value.child==""}}
        <div class="menu-list-item">
            <div class="menu-list-parent" ItemId="@{{$value.id}}">
                <div class="fold"></div>
                <div class="order">@{{$value.id}}</div>
                <div class="order"><input type="text" class="form-control text-center" value="@{{$value.list_order}}" ItemId="@{{$value.id}}"></div>
                <div class="width-lg"><input type="text" class="form-control" value="@{{$value.name}}" ItemId="@{{$value.id}}"></div>
                <div class="width-lg"><input type="text" class="form-control" value="@{{$value.icon}}" ItemId="@{{$value.id}}"></div>
                <div class="width-lg"><input type="text" class="form-control" value="@{{$value.url}}" ItemId="@{{$value.id}}"></div>
                <div class="fold"><i class="fa fa-plus-circle fa-big" ThisName="@{{$value.name}}"></i></div>
                <div class="fold pull-right">
                    <span set-lan="html:DELETE" class="fold-delete" ItemId="@{{$value.id}}">删除</span>
                </div>
            </div>
        </div>
        @{{else}}
        <div class="menu-list-item">
            <div class="menu-list-parent" ItemId="@{{$value.id}}">
                <div class="fold"><i class="fa fa-plus-square-o icon-btn"></i></div>
                <div class="order">@{{$value.id}}</div>
                <div class="order">
                    <input type="text" class="form-control text-center" value="@{{$value.list_order}}" ItemType="list_order" ItemId="@{{$value.id}}">
                </div>
                <div class="width-lg">
                    <input type="text" class="form-control" value="@{{$value.name}}" ItemType="name" ItemId="@{{$value.id}}">
                </div>
                <div class="width-lg">
                    <input type="text" class="form-control" value="@{{$value.icon}}" ItemType="icon" ItemId="@{{$value.id}}">
                </div>
                <div class="width-lg">
                    <input type="text" class="form-control" value="" ItemType="url" ItemId="@{{$value.id}}">
                </div>
                <div class="fold"><i class="fa fa-plus-circle fa-big" ThisName="@{{$value.name}}"></i></div>
                <div class="fold pull-right">
                    <span set-lan="html:DELETE" class="fold-delete" ItemId="@{{$value.id}}">删除</span>
                </div>
            </div>
            <div class="menu-list-child">
                @{{each $value.child as child index}}
                <div class="menu-list-parent" ItemId="@{{$value.id}}">
                    <div class="fold"></div>
                    <div class="order">@{{child.id}}</div>
                    <div class="order">
                        <input type="text" class="form-control text-center"  value="@{{child.list_order}}" ItemType="list_order" ItemId="@{{child.id}}">
                    </div>
                    <div class="fold fold-line"></div>
                    <div class="width-lg">
                        <input type="text" class="form-control" value="@{{child.name}}" ItemType="name" ItemId="@{{child.id}}">
                    </div>
                    <div class="width-lg">
                        <input type="text" class="form-control" value="@{{child.url}}" ItemType="url" ItemId="@{{child.id}}">
                    </div>
                    <div class="fold pull-right">
                        <span set-lan="html:DELETE" class="fold-delete" ItemId="@{{child.id}}">删除</span>
                    </div>
                </div>
                @{{/each}}                 
            </div>
        </div>
        @{{/if}}
        @{{/each}}           
    </script>
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
            $("#AddMenuModal .form-control").val("");
            $("#AddMenuModal").modal();
        });
        $(document).on('click','.fa-big',function(){
            $("#AddMenuChildModal .form-control:not(.prev-menu)").val("");
            var ParentId=$(this).parents(".menu-list-parent").attr("ItemId");
            $("#ParentId").val(ParentId);
            var ThisName=$(this).attr("ThisName");
            $(".prev-menu").val(ThisName);
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
                    //console.log(res);
                    if(res.status=="1"){
                        var MenuHtml = template('MenuHtml', res);
                        $("#MenuList").html(MenuHtml);
                    }
                },
                error:function(){
                    console.log('错误');
                }
            });  
        }
        MenuList();
        function CacheClass() {
            $(".modal .form-control").focus(function () {
                $(this).removeClass("SOGWarming");
            });
        }
        CacheClass();
        function MenuSave(parent_id,this_modal){
           console.log("#"+this_modal+" .FormUrl");
           var url=$("#"+this_modal+" .FormUrl").val();
           var status=$("#"+this_modal+" .FormStatus").val();
           var list_order=$("#"+this_modal+" .FormSort").val();
           var app=$("#"+this_modal+" .FormApp").val();
           var controller=$("#"+this_modal+" .FormController").val();
           var action=$("#"+this_modal+" .FormAction").val();
           var icon=$("#"+this_modal+" .FormIcon").val();
           var name=$("#"+this_modal+" .FormName").val();
           if(status==""){
                $.toast({
                    heading: 'Error',
                    text: '请选择状态',
                    showHideTransition: 'slide',
                    position: 'top-right',
                    icon: 'error',
                    hideAfter: 1500
                });
                $("#"+this_modal+" .FormStatus").addClass("SOGWarming");
           }else if(name==""){
                $.toast({
                    heading: 'Error',
                    text: '请填写菜单名称',
                    showHideTransition: 'slide',
                    position: 'top-right',
                    icon: 'error',
                    hideAfter: 1500
                });
                $("#"+this_modal+" .FormName").addClass("SOGWarming");
           }else if(controller==""){
                $.toast({
                    heading: 'Error',
                    text: '请填写Controller',
                    showHideTransition: 'slide',
                    position: 'top-right',
                    icon: 'error',
                    hideAfter: 1500
                });
                $("#"+this_modal+" .FormController").addClass("SOGWarming");
           }else if(list_order==""){
                $.toast({
                    heading: 'Error',
                    text: '请填写菜单排序',
                    showHideTransition: 'slide',
                    position: 'top-right',
                    icon: 'error',
                    hideAfter: 1500
                });
                $("#"+this_modal+" .FormSort").addClass("SOGWarming");
           }else{
                $.ajax({
                    url:"{{url('menu/add')}}",
                    type:'POST', //GET
                    async:false,    //或false,是否异步
                    timeout:5000,    //超时时间
                    data:{
                        "_token":"{{csrf_token()}}",
                        "parent_id":parent_id,
                        "url":url,
                        "status":status,
                        "list_order":list_order,
                        "app":app,
                        "controller":controller,
                        "action":action,
                        "icon":icon,
                        "name":name,
                        "en_name":""
                    },
                    dataType:'json',    //返回的数据格式：json/xml/html/script/jsonp/text
                    success:function(res){     
                        //console.log(res);
                        if(res.status=="1"){
                            $.toast({
                                heading: 'Success',
                                text: res.info,
                                showHideTransition: 'slide',
                                position: 'top-right',
                                icon: 'success',
                                hideAfter: 1500
                            });
                            $("#"+this_modal).modal('hide');
                            MenuList();
                        }else{
                            $.toast({
                                heading: 'Error',
                                text: res.info,
                                showHideTransition: 'slide',
                                position: 'top-right',
                                icon: 'error',
                                hideAfter: 1500
                            });
                        }
                    },
                    error:function(){
                        console.log('错误');
                    }
                });  
           }
        }
        $("#AddMenuChildSave").click(function(){
            var parent_id=$("#ParentId").val();
            MenuSave(parent_id,"AddMenuChildModal");
        });
        $(document).on('click','.fold-delete',function(){
            if(confirm("确定要删除吗？")){   
                var ItemId=$(this).attr("ItemId");
                $.ajax({
                    url:"{{url('menu/del')}}",
                    type:'POST', //GET
                    async:false,    //或false,是否异步
                    timeout:5000,    //超时时间
                    data:{"_token":"{{csrf_token()}}","id":ItemId},
                    dataType:'json',    //返回的数据格式：json/xml/html/script/jsonp/text
                    success:function(res){     
                        //console.log(res);
                        if(res.status=="1"){
                            $.toast({
                                heading: 'Success',
                                text: res.info,
                                showHideTransition: 'slide',
                                position: 'top-right',
                                icon: 'success',
                                hideAfter: 1500
                            });
                            MenuList();
                        }else{
                            $.toast({
                                heading: 'Error',
                                text: res.info,
                                showHideTransition: 'slide',
                                position: 'top-right',
                                icon: 'error',
                                hideAfter: 1500
                            });
                        }
                    },
                    error:function(){
                        console.log('错误');
                    }
                });                
            }             
        });
        $(document).on('focus','.menu-list-parent .form-control',function(){
            $(this).attr("this-key",$(this).val());
        });
        $(document).on('blur','.menu-list-parent .form-control',function(){
            var self=$(this);
            var thisKey=self.attr("this-key");
            var thisValue=self.val();
            if(thisKey!=thisValue){
                var DataKey=self.attr("ItemType");
                var ItemId=self.attr("ItemId");
                var DataObj={
                    "_token":"{{csrf_token()}}",
                    "id":ItemId,
                }
                DataObj[DataKey]=thisValue;
                $.ajax({
                    url:"{{url('menu/edit')}}",
                    type:'POST', //GET
                    async:false,    //或false,是否异步
                    timeout:5000,    //超时时间
                    data:DataObj,
                    dataType:'json',    //返回的数据格式：json/xml/html/script/jsonp/text
                    success:function(res){     
                        //console.log(res);
                        if(res.status=="1"){
                            $.toast({
                                heading: 'Success',
                                text: res.info,
                                showHideTransition: 'slide',
                                position: 'top-right',
                                icon: 'success',
                                hideAfter: 1500
                            });
                        }else{
                            $.toast({
                                heading: 'Error',
                                text: res.info,
                                showHideTransition: 'slide',
                                position: 'top-right',
                                icon: 'error',
                                hideAfter: 1500
                            });
                        }
                    },
                    error:function(){
                        console.log('错误');
                    }
                });  
            }                    
        });
    </script>
    <script src="{{ asset('js') }}/language.js"></script>
</html>

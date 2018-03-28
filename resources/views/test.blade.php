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
    {{--@include('tpl.leftpanel')--}}
    <div class="mainpanel">
        {{--@include('tpl.header')
        @include('tpl.bread')--}}
        <div class="contentpanel">
            <div class="the-content">
                <div class="the-control mb10">
                    <select class="form-control leftoption">
                        <option set-lan="html:NAME">名称</option>
                    </select>
                    <input type="text" name="name" class="form-control centerinput" id="NameSearch">
                    <button class="btn btn-info rightbutton" set-lan="html:SEARCH" id="SearchBtn">搜索</button>
                </div>
                <div class="the-header mb10">
                    <span set-lan="html:HEADERLIST">业务人员列表</span>
                    <small class="common_add"></small>
                </div>
                <div class="table-responsive">
                    <table class="table table-primary table-striped mb30">
                        <thead>
                        <tr>
                            <th><input type="checkbox"></th>
                            <th set-lan="html:TABLENAME">名称</th>
                            <th set-lan="html:ACCOUNT">账号</th>
                            <th set-lan="html:USERROLES">用户角色</th>
                            <th set-lan="html:AREA">区域</th>
                            <th set-lan="html:CONTACT">联系方式</th>
                            <th set-lan="html:ENABLED">启用状态</th>
                            <th set-lan="html:CREATE">创建时间</th>
                            <th set-lan="html:OPERATION">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>admin</td>
                            <td>root</td>
                            <td>管理员</td>
                            <td>广东</td>
                            <td>18025330961</td>
                            <td set-lan="html:ENABLEDOPTION">启用</td>
                            <td>2017-12-15 12:29:45</td>
                            <td class="operation">
                                <span class="edit" set-lan="html:EDIT">编辑</span>
                                <em class="item-action-split"></em>
                                <span class="delete" set-lan="html:DELETE">删除</span>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>张三</td>
                            <td>zhangsan</td>
                            <td>业务员</td>
                            <td>广东</td>
                            <td>18025330961</td>
                            <td set-lan="html:ENABLEDOPTION">启用</td>
                            <td>2017-12-15 12:29:45</td>
                            <td class="operation">
                                <span class="edit" set-lan="html:EDIT">编辑</span>
                                <em class="item-action-split"></em>
                                <span class="delete" set-lan="html:DELETE">删除</span>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>lisi</td>
                            <td>root</td>
                            <td>管理员</td>
                            <td>广东</td>
                            <td>18025330961</td>
                            <td set-lan="html:ENABLEDOPTION">启用</td>
                            <td>2017-12-15 12:29:45</td>
                            <td class="operation">
                                <span class="edit" set-lan="html:EDIT">编辑</span>
                                <em class="item-action-split"></em>
                                <span class="delete" set-lan="html:DELETE">删除</span>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>admin</td>
                            <td>root</td>
                            <td>管理员</td>
                            <td>广东</td>
                            <td>18025330961</td>
                            <td set-lan="html:ENABLEDOPTION">启用</td>
                            <td>2017-12-15 12:29:45</td>
                            <td class="operation">
                                <span class="edit" set-lan="html:EDIT">编辑</span>
                                <em class="item-action-split"></em>
                                <span class="delete" set-lan="html:DELETE">删除</span>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>张三</td>
                            <td>zhangsan</td>
                            <td>业务员</td>
                            <td>广东</td>
                            <td>18025330961</td>
                            <td set-lan="html:ENABLEDOPTION">启用</td>
                            <td>2017-12-15 12:29:45</td>
                            <td class="operation">
                                <span class="edit" set-lan="html:EDIT">编辑</span>
                                <em class="item-action-split"></em>
                                <span class="delete" set-lan="html:DELETE">删除</span>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>lisi</td>
                            <td>root</td>
                            <td>管理员</td>
                            <td>广东</td>
                            <td>18025330961</td>
                            <td set-lan="html:ENABLEDOPTION">启用</td>
                            <td>2017-12-15 12:29:45</td>
                            <td class="operation">
                                <span class="edit" set-lan="html:EDIT">编辑</span>
                                <em class="item-action-split"></em>
                                <span class="delete" set-lan="html:DELETE">删除</span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div><!-- table-responsive -->
            </div>
        </div><!-- contentpanel -->
    </div><!-- mainpanel -->
</section>
@include('tpl.CommonBottom')
        <!-- 添加以及编辑弹框容器 -->
<div class="modal fade bs-example-modal-static" id="AddModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">&times;</button>
                <h4 class="modal-title" set-lan="html:MODALTITLE">用户维护</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label class="col-sm-3 control-label" set-lan="html:TABLENAME">名称:</label>
                        <div class="col-sm-8">
                            <input type="text" placeholder="" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" set-lan="html:ACCOUNT">账号:</label>
                        <div class="col-sm-8">
                            <input type="text" placeholder="" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" set-lan="html:MODALPASSWORD">密码:</label>
                        <div class="col-sm-8">
                            <input type="text" placeholder=""  class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" set-lan="html:ENABLED">启用状态:</label>
                        <div class="col-sm-8">
                            <select class="form-control">
                                <option value="1" set-lan="html:ENABLEDOPTION">启用</option>
                                <option value="0" set-lan="html:DISABLEDOPTION">停用</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" set-lan="html:CONTACT">联系方式:</label>
                        <div class="col-sm-8">
                            <input type="text" placeholder="" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" set-lan="html:EMAIL">邮箱:</label>
                        <div class="col-sm-8">
                            <input type="text" placeholder="" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" set-lan="html:AREA">区域:</label>
                        <div class="col-sm-8">
                            <select class="form-control">
                                <option value="">广东</option>
                                <option value="">浙江</option>
                                <option value="">江苏</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" set-lan="html:USERROLES">用户角色:</label>
                        <div class="col-sm-8">
                            <select class="form-control">
                                <option value="">管理员</option>
                                <option value="">业务员</option>
                            </select>
                        </div>
                    </div>
                </form>
                <div class="add_btn">
                    <span id="AddSave" type="add">保存</span>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var name=$("#NameSearch").val();
    $.ajax({

        url:"{{url('getMenu')}}",

        type:'POST', //GET
        async:false,    //或false,是否异步
        timeout:5000,    //超时时间
        data:{
            "_token":"{{csrf_token()}}",
        },
        dataType:'json',    //返回的数据格式：json/xml/html/script/jsonp/text
        success:function(data){
            console.log(data);
        },
        error:function(){
            console.log('错误');
        }
    });
    $("#SearchBtn").click(function(){
        LoadList();
    });

    $(".common_add,.edit").click(function () {
        $("#AddModal").modal();
    });
</script>
</body>
</html>

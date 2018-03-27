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
<input type="hidden" id="EditID">
<!-- Preloader -->
<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>
<section>

    <div class="mainpanel">

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
                    <small class="common_delete"></small>
                    <small class="common_add"></small>
                </div>
                <div class="table-responsive">
                    <table class="table table-primary table-striped mb30" id="UserTable">
                        <thead>
                        <tr>
                            <th><input type="checkbox" class="check-control"></th>
                            <th set-lan="html:TABLENAME">名称</th>
                            <th set-lan="html:ACCOUNT">账号</th>
                            <th set-lan="html:USERROLES">用户角色</th>
                            <th set-lan="html:SEX">性别</th>
                            <th set-lan="html:CONTACT">联系方式</th>
                            <th set-lan="html:ENABLED">启用状态</th>
                            <th set-lan="html:CREATE">创建时间</th>
                            <th set-lan="html:OPERATION">操作</th>
                        </tr>
                        </thead>
                        <tbody id="UserList">
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
                            <input type="text" placeholder="" class="form-control" id="user_nickname">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" set-lan="html:ACCOUNT">账号:</label>
                        <div class="col-sm-8">
                            <input type="text" placeholder="" class="form-control" id="user_login">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" set-lan="html:ENABLED">启用状态:</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="user_status">
                                <option value="1" set-lan="html:ENABLEDOPTION">启用</option>
                                <option value="0" set-lan="html:DISABLEDOPTION">停用</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" set-lan="html:CONTACT">联系方式:</label>
                        <div class="col-sm-8">
                            <input type="text" placeholder="" class="form-control" id="phone">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" set-lan="html:EMAIL">邮箱:</label>
                        <div class="col-sm-8">
                            <input type="text" placeholder="" class="form-control" id="user_email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" set-lan="html:SEX">性别:</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="sex">
                                <option value="3" set-lan="html:SECRECY">保密</option>
                                <option value="1" set-lan="html:MAN">男</option>
                                <option value="0" set-lan="html:WOMAN">女</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" set-lan="html:USERROLES">用户角色:</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="getRole">
                                <option value="">业务员</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" set-lan="html:Remarks">备注:</label>
                        <div class="col-sm-8">
                            <input type="text" placeholder="" class="form-control" id="remarks">
                        </div>
                    </div>
                </form>
                <div class="add_btn">
                    <span id="AddSave" set-lan="html:Save">保存</span>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/html" id="UserHtml">

</script>
<script src="{{ asset('js') }}/language.js"></script>
<script type="text/javascript">
    $.ajax({
        url:"{{url('currentMenu')}}",
        type:'POST', //GET
        async:false,    //或false,是否异步
        timeout:5000,    //超时时间
        data:{"_token":"{{csrf_token()}}","id":"10","lan":"cn"},
        dataType:'json',    //返回的数据格式：json/xml/html/script/jsonp/text
        success:function(data){
            console.log(data);
            if(data.status=="1"){
                var UserHtml = template('UserHtml', data);
                $("#UserList").html(UserHtml);
            }
        },
        error:function(){
            console.log('错误');
        }
    });
</script>
</body>
</html>

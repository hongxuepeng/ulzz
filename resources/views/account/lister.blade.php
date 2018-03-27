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
                        <label class="col-sm-3 control-label" set-lan="html:MODALPASSWORD">密码:</label>
                        <div class="col-sm-8">
                            <input type="text" placeholder=""  class="form-control" id="user_pwd">
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
    @{{each data}}
    <tr>
        <td><input type="checkbox"></td>
        <td>@{{$value.user_nickname}}</td>
        <td>@{{$value.user_login}}</td>
        <td>@{{$value.parse_role_id}}</td>
        <td>@{{if $value.sex=='1'}}男@{{else if $value.sex=='0'}}女@{{else}}保密@{{/if}}</td>
        <td>@{{$value.phone}}</td>
        <td set-lan="@{{if $value.user_status=='1'}}html:ENABLEDOPTION@{{else $value.user_status=='0'}}html:DISABLEDOPTION@{{/if}}"></td>
        <td>@{{$value.update_time}}</td>
        <td class="operation">
            <span class="edit" set-lan="html:EDIT" EditId="@{{$value.id}}">编辑</span>
            <em class="item-action-split"></em>
            <span class="delete" set-lan="html:DELETE" EditId="@{{$value.id}}">删除</span>
        </td>
    </tr>
    @{{/each}}
</script>
<script type="text/javascript">
    //人员列表绑定
    function LoadList(){
        var name=$("#NameSearch").val();
        $.ajax({
            url:"{{url('account/lister')}}",
            type:'POST', //GET
            async:false,    //或false,是否异步
            timeout:5000,    //超时时间
            data:{"_token":"{{csrf_token()}}","name":name},
            dataType:'json',    //返回的数据格式：json/xml/html/script/jsonp/text
            success:function(data){
                //console.log(data);
                if(data.status=="1"){
                    var UserHtml = template('UserHtml', data);
                    $("#UserList").html(UserHtml);
                }
            },
            error:function(){
                console.log('错误');
            }
        });  
    }
    LoadList();
    //绑定角色列表
    function RoleList(){
        $.ajax({
            url:"{{url('getRole')}}",
            type:'POST', //GET
            async:false,    //或false,是否异步
            timeout:5000,    //超时时间
            data:{"_token":"{{csrf_token()}}"},
            dataType:'json',    //返回的数据格式：json/xml/html/script/jsonp/text
            success:function(result){               
                if(result.status=="1"){
                    var html='';
                    var data=result.data;                    
                    for(var i=0;i<data.length;i++){
                        html+='<option value="'+data[i].id+'">'+data[i].name+'</option>';
                    }
                    $("#getRole").html(html);
                }
            },
            error:function(){
                console.log('错误');
            }
        });  
    }
    RoleList();
    //添加用户
    function AddUser(){
        var user_nickname=$("#user_nickname").val();
        var user_login=$("#user_login").val();
        var user_pwd=$("#user_pwd").val();
        var user_status=$("#user_status").val();
        var phone=$("#phone").val();
        var user_email=$("#user_email").val();
        var sex=$("#sex").val();
        var role_id=$("#getRole").val();
        var remarks=$("#remarks").val();
        if(user_nickname==""){
            $.toast({
                heading: 'Error',
                text: '请输入用户名称',
                showHideTransition: 'slide',
                position: 'top-right',
                icon: 'error',
                hideAfter: 1500
            });
            $("#user_nickname").addClass("SOGWarming");
        }else if(user_login==""){
            $.toast({
                heading: 'Error',
                text: '请输入用户账号',
                showHideTransition: 'slide',
                position: 'top-right',
                icon: 'error',
                hideAfter: 1500
            });
            $("#user_login").addClass("SOGWarming");
        }else if(user_pwd==""){
            $.toast({
                heading: 'Error',
                text: '请输入用户密码',
                showHideTransition: 'slide',
                position: 'top-right',
                icon: 'error',
                hideAfter: 1500
            });
            $("#user_pwd").addClass("SOGWarming");
        }else if(phone==""){
            $.toast({
                heading: 'Error',
                text: '请输入联系方式',
                showHideTransition: 'slide',
                position: 'top-right',
                icon: 'error',
                hideAfter: 1500
            });
            $("#phone").addClass("SOGWarming");
        }else if(user_email==""){
            $.toast({
                heading: 'Error',
                text: '请输入邮箱',
                showHideTransition: 'slide',
                position: 'top-right',
                icon: 'error',
                hideAfter: 1500
            });
            $("#user_email").addClass("SOGWarming");
        }else if(user_login==""){
            $.toast({
                heading: 'Error',
                text: '请输入用户账号',
                showHideTransition: 'slide',
                position: 'top-right',
                icon: 'error',
                hideAfter: 1500
            });
            $("#user_login").addClass("SOGWarming");
        }else{
            $.ajax({
                url:"{{url('account/add')}}",
                type:'POST', //GET
                async:false,    //或false,是否异步
                timeout:5000,    //超时时间
                data:{
                    "_token":"{{csrf_token()}}",
                    "sex":sex,
                    "user_status":user_status,
                    "user_login":user_login,
                    "user_pwd":user_pwd,
                    "user_email":user_email,
                    "user_nickname":user_nickname,
                    "remarks":remarks,
                    "phone":phone,
                    "role_id":role_id
                },
                dataType:'json',    //返回的数据格式：json/xml/html/script/jsonp/text
                success:function(res){
                    console.log(res);
                    if(res.status=="1"){
                        $.toast({
                            heading: 'Success',
                            text: res.info,
                            showHideTransition: 'slide',
                            position: 'top-right',
                            icon: 'success',
                            hideAfter: 1500
                        });  
                        LoadList();                      
                        $("#AddModal").modal('hide');
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
                    console.log('错误')
                }
            });
        }        
    }
    $("#AddSave").click(AddUser);
    //点击搜素按钮时触发的事件
    $("#SearchBtn").click(function(){
        LoadList();
    });    
    //点击添加按钮时触发的事件
    $(".common_add").click(function () {
        $("#AddModal .form-control").val("");
        $("#AddModal").modal();
    });
    //点击编辑按钮时触发的事件
    $(".edit").click(function () {
        $("#AddModal").modal();
    });
    function CacheClass() {
        $(".form-control").focus(function () {
            $(this).removeClass("SOGWarming");
        });
    }
    CacheClass();
</script>
<script src="{{ asset('js') }}/language.js"></script>
</body>
</html>

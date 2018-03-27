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
    @{{each data}}
    <tr user-id="@{{$value.id}}">
        <td><input type="checkbox"></td>
        <td>@{{$value.user_nickname}}</td>
        <td>@{{$value.user_login}}</td>
        <td>@{{$value.parse_role_id}}</td>
        <td set-lan="@{{if $value.sex=='1'}}html:MAN@{{else if $value.sex=='0'}}html:WOMAN@{{else}}html:SECRECY@{{/if}}"></td>
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
<script src="{{ asset('js') }}/language.js"></script>
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
        BindLanguage();  
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
    //添加以及编辑用户信息
    function AddUser(){
        var user_nickname=$("#user_nickname").val();
        var user_login=$("#user_login").val();
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
        }else if(user_status==""||user_status==undefined||user_status==null){
            $.toast({
                heading: 'Error',
                text: '请选择启用状态',
                showHideTransition: 'slide',
                position: 'top-right',
                icon: 'error',
                hideAfter: 1500
            });
            $("#user_status").addClass("SOGWarming");
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
        }else if(sex==""||sex==undefined||sex==null){
            $.toast({
                heading: 'Error',
                text: '请选择性别',
                showHideTransition: 'slide',
                position: 'top-right',
                icon: 'error',
                hideAfter: 1500
            });
            $("#sex").addClass("SOGWarming");
        }else if(role_id==""||role_id==undefined||role_id==null){
            $.toast({
                heading: 'Error',
                text: '请选择用户角色',
                showHideTransition: 'slide',
                position: 'top-right',
                icon: 'error',
                hideAfter: 1500
            });
            $("#getRole").addClass("SOGWarming");
        }else{
            var type=$("#AddSave").attr("type");
            if(type=="add"){
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
                        "user_email":user_email,
                        "user_nickname":user_nickname,
                        "remarks":remarks,
                        "phone":phone,
                        "role_id":role_id
                    },
                    dataType:'json',    //返回的数据格式：json/xml/html/script/jsonp/text
                    success:function(res){
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
            }else{
                $.ajax({
                    url:"{{url('account/edit')}}",
                    type:'POST', //GET
                    async:false,    //或false,是否异步
                    timeout:5000,    //超时时间
                    data:{
                        "_token":"{{csrf_token()}}",
                        "sex":sex,
                        "user_status":user_status,
                        "user_login":user_login,
                        "user_email":user_email,
                        "user_nickname":user_nickname,
                        "remarks":remarks,
                        "phone":phone,
                        "role_id":role_id,
                        "id":$("#EditID").val()
                    },
                    dataType:'json',    //返回的数据格式：json/xml/html/script/jsonp/text
                    success:function(res){
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
    }
    $("#AddSave").click(AddUser);
    //点击搜素按钮时触发的事件
    $("#SearchBtn").click(function(){
        LoadList();
    });    
    //点击添加按钮时触发的事件
    $(".common_add").click(function () {
        $("#AddSave").attr("type","add");
        $("#AddModal .form-control").val("");
        $("#AddModal").modal();
    });
    //点击编辑按钮时触发的事件
    $(document).on('click','.edit',function () {
        var ListID=$(this).attr("editid");
        $("#EditID").val(ListID);
        $("#AddSave").attr("type","edit");
        $.ajax({
            url:"{{url('account/edit')}}",
            type:'GET', //GET
            async:false,    //或false,是否异步
            timeout:5000,    //超时时间
            data:{"_token":"{{csrf_token()}}","id":ListID},
            dataType:'json',    //返回的数据格式：json/xml/html/script/jsonp/text
            success:function(res){               
                if(res.status=="1"){
                    //console.log(res);
                    var data=res.data;
                    $("#user_nickname").val(data.user_nickname);
                    $("#user_login").val(data.user_login);
                    $("#user_status").val(data.user_status);
                    $("#phone").val(data.phone);
                    $("#user_email").val(data.user_email);
                    $("#sex").val(data.sex);
                    $("#getRole").val(data.role_id);
                    $("#remarks").val(data.remarks);
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
        $("#AddModal").modal();
    });
    function CacheClass() {
        $(".form-control").focus(function () {
            $(this).removeClass("SOGWarming");
        });
    }
    CacheClass();
    function CheckControl(){
        $(".check-control").on('change',function(){
            if ($(this).is(":checked")) {
                $("#UserTable tbody input[type=checkbox]").prop('checked', true);
            } else {
                $("#UserTable tbody input[type=checkbox]").prop('checked', false);
            }
        });
    }
    CheckControl();
    //批量删除人员
    function Batch(ids){
        $.ajax({
            url:"{{url('account/batch')}}",
            type:'GET', //GET
            async:false,    //或false,是否异步
            timeout:5000,    //超时时间
            data:{
                "_token":"{{csrf_token()}}",
                "ids":ids
            },
            dataType:'json',    //返回的数据格式：json/xml/html/script/jsonp/text
            success:function(res){
                if(res.status=="1"){
                    $.toast({
                        heading: 'Success',
                        text: res.info,
                        showHideTransition: 'slide',
                        position: 'top-right',
                        icon: 'success',
                        hideAfter: 2000
                    });
                    LoadList();
                }else{
                    $.toast({
                        heading: 'Error',
                        text: res.info,
                        showHideTransition: 'slide',
                        position: 'top-right',
                        icon: 'error',
                        hideAfter: 2000
                    });
                }
            },
            error:function(){
                console.log('错误');
            }
        });
    }
    $(".common_delete").click(function(){
        var length = $("#UserList").find("input[type='checkbox']:checked").length;         
        if(length<1){
            $.toast({
                heading: 'Error',
                text: "请选择要删除的人员",
                showHideTransition: 'slide',
                position: 'top-right',
                icon: 'error',
                hideAfter: 2000
            });
        }else{
            if(confirm("确定要删除吗？")){   
                var ids = new Array();
                $("#UserList").find("input[type='checkbox']:checked").each(function () {
                    ids.push($(this).parents("tr").attr("user-id"));               
                });
                ids=ids.join();
                Batch(ids); 
            }            
        }
    });
    $(document).on('click','.operation>.delete',function(){
        if(confirm("确定要删除吗？")){  
            var ids=$(this).attr("editid");
            Batch(ids);
        }
    });
</script>
</body>
</html>

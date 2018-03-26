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
                                <option>名称</option>
                            </select>
                            <input type="text" class="form-control centerinput">
                            <button class="btn btn-info rightbutton">搜索</button>
                        </div>
                        <div class="the-header mb10">
                            角色列表
                            <small class="common_add"></small>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-primary table-striped mb30">
                                <thead>
                                <tr>
                                    <th><input type="checkbox"></th>
                                    <th>角色名称</th>
                                    <th>角色状态</th>
                                    <th>角色所属部门</th>
                                    <th>上一级角色</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td>管理员</td>
                                        <td>启用</td>
                                        <td>开发部</td>
                                        <td>无</td>
                                        <td class="operation">
                                            <span class="edit">编辑</span>
                                            <em class="item-action-split"></em>
                                            <span class="delete">删除</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td>业务员</td>
                                        <td>启用</td>
                                        <td>开发部</td>
                                        <td>管理员</td>
                                        <td class="operation">
                                            <span class="edit">编辑</span>
                                            <em class="item-action-split"></em>
                                            <span class="delete">删除</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><!-- table-responsive -->
                    </div>
                </div><!-- contentpanel -->
            </div><!-- mainpanel -->
        </section>
        <div class="modal fade bs-example-modal-static" id="AddModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">&times;</button>
                        <h4 class="modal-title">用户维护</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">名称:</label>
                                <div class="col-sm-8">
                                    <input type="text" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">账号:</label>
                                <div class="col-sm-8">
                                    <input type="text" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">密码:</label>
                                <div class="col-sm-8">
                                    <input type="text" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">启用状态:</label>
                                <div class="col-sm-8">
                                    <select class="form-control">
                                        <option value="1">启用</option>
                                        <option value="0">停用</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">联系方式:</label>
                                <div class="col-sm-8">
                                    <input type="text" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">邮箱:</label>
                                <div class="col-sm-8">
                                    <input type="text" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">区域:</label>
                                <div class="col-sm-8">
                                    <select class="form-control">
                                        <option value="">广东</option>
                                        <option value="">浙江</option>
                                        <option value="">江苏</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">选择角色:</label>
                                <div class="col-sm-8">
                                    <select class="form-control">
                                        <option value="">管理员</option>
                                        <option value="">业务员</option>
                                    </select>
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
        @include('tpl.CommonBottom')
        <script>
            $(".common_add,.edit").click(function () {
                $("#AddModal").modal();
            });
        </script>
        <script src="{{ asset('js') }}/language.js"></script>
    </body>
</html>

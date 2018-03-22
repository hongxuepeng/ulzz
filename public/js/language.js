var cn = {
    "HEADER" : "荔枝租房",
    "NAVIGATION" : "导航",
    "SUMMARY" : "信息汇总",
    "DAILY" : "日流量",
    "AVERAGE" : "普通用户",
    "DISK" : "磁盘用量",
    "CPU" : "CPU用量",
    "MEMORY" : "内存用量",
    "HOME" : "首页",
    "USER" : "账号管理",
    "ROLE" : "角色列表",
    "MENU" : "菜单列表",
    "HOUSETYPE" : "房源类型",
    "HOUSEADD" : "房源添加",
    "HOUSELIST" : "房源列表",
    "HOUSEAUDIT" : "房源审核",
    "ORDER" : "订单列表",
    "BAR" : "销售增长率柱状图",
    "LINE" : "销售增长率折线图",
    "FEEDBACK" : "用户反馈",
    "COMMENT" : "用户评论",
    "LOG" : "操作日志",
    "NEWS" : "消息",
    "COMPANY" : "华世恒通",
    "CHINESE" : "简体中文",
    "ENGLISH" : "英文",
    "NAME" : "名称",
    "SEARCH" : "搜索",
    "HEADERLIST" : "业务人员列表",
    "TABLENAME" : "名称",
    "ACCOUNT" : "账号",
    "USERROLES" : "用户角色",
    "AREA" : "区域",
    "CONTACT" : "联系方式",
    "ENABLED" : "启用状态",
    "CREATE" : "创建时间",
    "OPERATION" : "操作",
    "EDIT" : "编辑",
    "DELETE" : "删除",
    "MODALTITLE" : "用户维护",
    "MODALPASSWORD" : "密码",
    "ENABLEDOPTION" : "启用",
    "DISABLEDOPTION" : "停用",
    "EMAIL" : "邮箱",
    "MENUMANAGE" : "菜单管理",
    "HOUSEMANAGE" : "房源管理",
    "ORDERMANAGE" : "订单管理",
    "DATAREPORT" : "数据报表",
    "USERFEEKBACK" : "用户反馈",
    "HELPHANDBOOK" : "帮助手册"
};
var en = {
    "HEADER" : "Ulzz Rental",
    "NAVIGATION" : "Navigation",
    "SUMMARY" : "INFORMATION SUMMARY",
    "DAILY" : "DAILY TRAFFIC",
    "AVERAGE" : "AVERAGE USERS",
    "DISK" : "DISK USAGE",
    "CPU" : "CPU USAGE",
    "MEMORY" : "MEMORY USAGE",
    "HOME" : "HOME",
    "USER" : "Account management",
    "ROLE" : "The role list",
    "MENU" : "Menu list",
    "HOUSETYPE" : "Housing types",
    "HOUSEADD" : "Housing add",
    "HOUSELIST" : "Housing list",
    "HOUSEAUDIT" : "Housing audit",
    "ORDER" : "The order list",
    "BAR" : "Sales growth rate bar chart",
    "LINE" : "Sales growth rate line chart",
    "FEEDBACK" : "User feedback",
    "COMMENT" : "User comment",
    "LOG" : "Operation log",
    "NEWS" : "News",
    "COMPANY" : "HuaShiHengTong",
    "CHINESE" : "CHINESE",
    "ENGLISH" : "ENGLISH",
    "NAME" : "Name",
    "SEARCH" : "Search",
    "HEADERLIST" : "List of business people",
    "TABLENAME" : "Name",
    "ACCOUNT" : "Account",
    "USERROLES" : "User roles",
    "AREA" : "Area",
    "CONTACT" : "Contact",
    "ENABLED" : "Enabled state",
    "CREATE" : "Creation time",
    "OPERATION" : "Operation",
    "EDIT" : "Editor",
    "DELETE" : "Delete",
    "MODALTITLE" : "User maintenance",
    "MODALPASSWORD" : "Password",
    "ENABLEDOPTION" : "Enable",
    "DISABLEDOPTION" : "Disable",
    "EMAIL" : "Email",
    "MENUMANAGE" : "Menu management",
    "HOUSEMANAGE" : "Housing management",
    "ORDERMANAGE" : "Order management",
    "DATAREPORT" : "Data report",
    "USERFEEKBACK" : "User feedback",
    "HELPHANDBOOK" : "Help Handbook"
};
function BindLanguage() {
    $('[set-lan]').each(function(){
        var me = $(this);
        var a = me.attr('set-lan').split(':');
        var p = a[0];   //文字放置位置
        var m = a[1];   //文字的标识

        //用户选择语言后保存在cookie中，这里读取cookie中的语言版本
        var lan = $.cookie('lan');
        //选取语言文字
        switch(lan){
            case 'cn':
                var t = cn[m];  //这里cn[m]中的cn是上面定义的json字符串的变量名，m是json中的键，用此方式读取到json中的值
                break;
            case 'en':
                var t = en[m];
                break;
            default:
                var t = hk[m];
        }

        //如果所选语言的json中没有此内容就选取其他语言显示
        if(t==undefined) t = cn[m];
        if(t==undefined) t = en[m];

        if(t==undefined) return true;   //如果还是没有就跳出

        //文字放置位置有（html,val等，可以自己添加）
        switch(p){
            case 'html':
                me.html(t);
                break;
            case 'val':
            case 'value':
                me.val(t);
                break;
            default:
                me.html(t);
        }

    });
}
BindLanguage();
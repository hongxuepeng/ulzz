<div class="pageheader">
    <h2>
        <i class="fa fa-home"></i>
        <strong set-lan="">{{ $__parent_menu__->name or '' }}</strong>{{--PHP语法--}}
        <b><span>{{ $__current_menu__->name or '' }}</span></b>{{--PHP语法--}}
    </h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li><a href="index.html" set-lan="html:HEADER">荔枝租房</a></li>
            <li class="active" set-lan="">{{ $__current_menu__->name or '' }}</li>
        </ol>
    </div>
</div>
<script type="text/javascript">
    function GetBread(){
        var lan = $.session.get('lan');
        var MenuId=$(".GetMenuId").attr("menuid");
        $.ajax({
            url:"{{url('currentMenu')}}",
            type:'POST', //GET
            async:false,    //或false,是否异步
            timeout:5000,    //超时时间
            data:{"_token":"{{csrf_token()}}","lan":lan,"MenuId":MenuId},
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
    GetBread();
</script>
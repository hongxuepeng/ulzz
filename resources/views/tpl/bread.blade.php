<div class="pageheader">
    <h2>
        <i class="fa fa-home"></i>
        <strong class="cName"></strong>
        <b><span class="pName"></span></b>
    </h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li><a href="index.html" set-lan="html:HEADER">荔枝租房</a></li>
            <li class="active cName"></li>
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
            data:{"_token":"{{csrf_token()}}","lan":lan,"id":MenuId},
            dataType:'json',    //返回的数据格式：json/xml/html/script/jsonp/text
            success:function(res){     
                //console.log(res);
                if(res.status=="1"){
                    var pName=res.data.pName;
                    var cName=res.data.name;
                    if(pName==null&&lan=="cn"){
                        pName="荔枝租房";
                    }else if(pName==null&&lan=="en"){
                        pName="Ulzz Rental";
                    }
                    $(".pName").text(pName);
                    $(".cName").text(cName);
                }
            },
            error:function(){
                console.log('错误');
            }
        });  
    }
    GetBread();
</script>
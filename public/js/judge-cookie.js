function language() {
    $("#language-switch>li").click(function () {
        var lan = $.cookie('lan');
        var type = $(this).attr("type");
        if(lan != type){
            $.cookie('lan',type);
            location.reload();
        }
    })
}
language();

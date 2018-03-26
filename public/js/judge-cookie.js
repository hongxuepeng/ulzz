function language() {
    $("#language-switch>li").click(function () {
        var lan = $.session.get('lan');
        var type = $(this).attr("type");
        if(lan != type){
             $.session.set('lan',type);
            location.reload();
        }
    })
}
language();

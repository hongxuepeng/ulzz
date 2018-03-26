<div class="pageheader">
    <h2>
        <i class="fa fa-home"></i>
        <strong set-lan="">{{ $__parent_menu__->name or '' }}</strong>{{--PHP语法--}}
        <b><span>{{ $__current_menu__->name or '' }}</span></b>{{--PHP语法--}}
        <span set-lan="html:COMPANY">华世恒通</span>
    </h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li><a href="index.html" set-lan="html:HEADER">荔枝租房</a></li>
            <li class="active" set-lan="">{{ $__current_menu__->name or '' }}</li>
        </ol>
    </div>
</div>
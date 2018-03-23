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
                </div><!-- contentpanel -->
            </div><!-- mainpanel -->
        </section>
        @include('tpl.CommonBottom')
        <h1>111</h1>
    </body>
</html>

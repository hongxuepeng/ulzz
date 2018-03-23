<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="{{ asset('images') }}/favicon.png" type="image/png">
        <title>Ulzz.com</title>
        <link href="{{ asset('css') }}/style.default.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="{{ asset('js') }}/html5shiv.js"></script>
        <script src="{{ asset('js') }}/respond.min.js"></script>
        <![endif]-->
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
        <script src="{{ asset('js') }}/jquery-1.11.1.min.js"></script>
        <script src="{{ asset('js') }}/jquery-migrate-1.2.1.min.js"></script>
        <script src="{{ asset('js') }}/jquery-ui-1.10.3.min.js"></script>
        <script src="{{ asset('js') }}/bootstrap.min.js"></script>
        <script src="{{ asset('js') }}/modernizr.min.js"></script>
        <script src="{{ asset('js') }}/jquery.sparkline.min.js"></script>
        <script src="{{ asset('js') }}/toggles.min.js"></script>
        <script src="{{ asset('js') }}/retina.min.js"></script>
        <script src="{{ asset('js') }}/jquery.cookies.js"></script>
        <script src="{{ asset('js') }}/judge-cookie.js?v=1.01"></script>
        <script src="{{ asset('js') }}/flot/jquery.flot.min.js"></script>
        <script src="{{ asset('js') }}/flot/jquery.flot.resize.min.js"></script>
        <script src="{{ asset('js') }}/flot/jquery.flot.spline.min.js"></script>
        <script src="{{ asset('js') }}/morris.min.js"></script>
        <script src="{{ asset('js') }}/raphael-2.1.0.min.js"></script>
        <script src="{{ asset('js') }}/custom.js"></script>
        <script src="{{ asset('js') }}/language.js"></script>
        <script type="text/javascript">
            function GetCookie() {
                var uname = "{{session('user_id')}}";
                if(uname == "" || uname == undefined || uname == null){
                    location.href = "{{ url('users/login') }}";
                }
            }
            GetCookie();
            $.get("{{ url('getMenu') }}", function(result){
                console.log(result);
            });
        </script>
    </body>
</html>

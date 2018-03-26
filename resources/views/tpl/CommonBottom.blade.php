<script src="{{ asset('js') }}/judge-cookie.js?v=1.01"></script>
<script src="{{ asset('js') }}/custom.js"></script>
<script type="text/javascript">
    function GetCookie() {
        var uname = "{{session('user_id')}}";
        if(uname == "" || uname == undefined || uname == null){
            location.href = "{{ url('users/login') }}";
        }
    }
    GetCookie();        
</script>
@include('partials._admin_head')
<body>
@include('partials._admin_navbar')
@include('partials._message')
@yield('content')
<?php //@include('partials._footer')?>
</body>
<script type="text/javascript" src="{{asset('js/jquery-1.8.2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/request.js')}}"></script>
</html>
@include('partials._head')
<body>
@include('partials._navbar')
@include('partials._message')
@yield('content')
@include('partials._footer')
</body>
<script type="text/javascript" src="{{asset('js/jquery-1.10.2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/request.js')}}"></script>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Welcome to Hayroyal Consult | ICT Consultants | Training and Research | Project Assistance</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('prettyPhoto/css/prettyPhoto.css')}}">
    <link rel="stylesheet" href="{{asset('css/flexslider.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Favicon and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('ico/apple-touch-icon-57-precomposed.png')}}">

</head>
<body>
    <div class="container row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <div class="contact-us container">
                <div class="row">
                    <div class="contact-form span7 form_container">
                        @include('partials._message')
                        <p>Please Signin</p>
                        {{Form::open()}}
                            {{csrf_field()}}
                            <label for="username" class="nameLabel">Username</label>
                            <input id="username" type="text" name="username" placeholder="Enter your username..." required/>
                            <label for="password" class="emailLabel">Password</label>
                            <input id="password" type="password" name="password" placeholder="Enter your password..." required/>
                            <button type="submit">Send</button>
                        {{Form::close()}}
                        <ul class="hidden errorTab">
                            <li class="list_error"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4"></div>
    </div>
</body>
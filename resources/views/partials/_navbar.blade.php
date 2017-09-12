<div class="container">
    <div class="header row">
        <div class="span12">
            <div class="navbar">
                <div class="navbar-inner">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <h1>
                        <a class="brand" href="/">Hayroyal Consult</a>
                    </h1>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="{{Request::is('/') ? "current-page" : ""}}">
                                <a href="/"><i class="icon-home"></i><br />Home</a>
                            </li>
                            <li class="{{Request::is('portfolio') ? "current-page" : ""}}">
                                <a href="portfolio"><i class="icon-camera"></i><br />Portfolio</a>
                            </li>
                            <li class="{{Request::is('services') ? "current-page" : ""}}">
                                <a href="{{route('services')}}"><i class="icon-tasks"></i><br />Services</a>
                            </li>
                            <li class="{{Request::is('about') ? "current-page" : ""}}">
                                <a href="{{route('about')}}"><i class="icon-user"></i><br />About</a>
                            </li>
                            <li class="{{Request::is('contact') ? "current-page" : ""}}">
                                <a href="{{route('contact')}}"><i class="icon-envelope-alt"></i><br />Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
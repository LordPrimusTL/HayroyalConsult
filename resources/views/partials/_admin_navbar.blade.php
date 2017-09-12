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
                    @if(\Illuminate\Support\Facades\Auth::check())
                        <div class="nav-collapse collapse">
                            <ul class="nav pull-right">
                                <li class="{{Request::is('admin/home') ? "current-page" : ""}}">
                                    <a href="/admin/home"><i class="icon-home"></i><br />Home</a>
                                </li>
                                <li class="{{Request::is('admin/portfolio') ? "current-page" : ""}}">
                                    <a href="/admin/portfolio"><i class="icon-camera"></i><br />Portfolio</a>
                                </li>
                                <li class="{{Request::is('admin/services') ? "current-page" : ""}}">
                                    <a href="/admin/services"><i class="icon-tasks"></i><br />Services</a>
                                </li>
                                <li class="{{Request::is('admin/about') ? "current-page" : ""}}">
                                    <a href="/admin/about"><i class="icon-user"></i><br />About</a>
                                </li>
                                <li class="{{Request::is('admin/contact') ? "current-page" : ""}}">
                                    <a href="/admin/contact"><i class="icon-envelope-alt"></i><br />Contact</a>
                                </li>
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
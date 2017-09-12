@extends('master')
@section('content')
    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <i class="icon-tasks page-title-icon"></i>
                    <h2>Services /</h2>
                    <p>Here are the services we offer</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Services Full Width Text -->
    <div class="portfolio container">
        <div class="portfolio-title">
            <h3>Services We Offer</h3>
        </div>
        <div class="row">
            @foreach($wwd as $ww)
                <div class="work span3">
                    <a href="http://{{$ww->link}}"><img src="{{asset('images/wwd/'. $ww->img)}}" width="1000" height="460"></a>
                    <h4>{{$ww->title}}</h4>
                    <p>{{$ww->caption}}</p>
                    <div class="icon-awesome">
                        <a href="{{asset('images/wwd/'. $ww->img)}}" rel="prettyPhoto"><i class="icon-search"></i></a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

@endsection


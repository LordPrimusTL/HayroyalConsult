@extends('master')
@section('content')
    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <i class="icon-camera page-title-icon"></i>
                    <h2>Portfolio /</h2>
                    <p>Here is the work we've done so far</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio -->
    <div class="portfolio portfolio-page container">

        <div class="row">
            <ul class="portfolio-img">
                @for($i = 1; $i < 13 ;$i++)
                <li data-id="{{'p'.$i}}" data-type="web-design" class="span3">
                    <div class="work">
                        <a href="{{asset('img/portfolio/work'. $i .'.jpg')}}" rel="prettyPhoto">
                            <img src="{{asset('img/portfolio/work'. $i .'.jpg')}}" alt="">
                        </a>
                        <h4>Lorem Website</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                    </div>
                </li>
                @endfor
            </ul>
        </div>
    </div>

@endsection
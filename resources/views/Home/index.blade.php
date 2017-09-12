@extends('master')
@section('content')
    <!-- Slider -->
    <div class="slider">
        <div class="container">
            <div class="row">
                <div class="span10 offset1">
                    <div class="flexslider">
                        <ul class="slides">
                            @foreach($imgs as $img)
                                <li>
                                    <img src="{{asset('images/slider/'. $img->image_link)}}" width="1000" height="460">
                                    <p class="flex-caption">{{$img->caption}}</p>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Site Description -->
    <div class="presentation container">
        <h2>At <span class="violet">Hayroyal</span>, we create perfect websites and native applications.</h2>
        <p>We welcome you to our digital world of professional ICT services. We are one of the best ICT consultants company in Nigeria,
            our success story is increasing by the day and we will be happy to work with you on your new project.</p>
        <p>
            Our undisputable excellently branded training culture and increasingly growing project portfolio has made us renowned as one of the top ICT practitioners. Our training culture prepares our clients to become ICT icons, doing well professionally, improving their performances at their fields of choice.
            We render ICT services in such a way that clients will always leave happy and satisfied. Looking forward for your esteemed patronage.
        </p>
    </div>

    <!-- Services -->
    <div class="what-we-do container">
        <div class="row">
            <div class="service span4">
                <div class="icon-awesome">
                    <i class="icon-asterisk"></i>
                </div>
                <h4>ICT Consultants</h4>
                <p>
                    provides expert consultancy that covers the full lifecycle of the design and implementation of these systems. We bring our expertise to ensuring that the ICT strategy is comprehensive, the design is robust, the implementation is successful and the ongoing management delivers the benefit.
                </p>
                <a href="{{route('services')}}">Read more</a>
            </div>
            <div class="service span4">
                <div class="icon-awesome">
                    <i class="icon-calendar"></i>
                </div>
                <h4>Trainings &amp; Research</h4>
                <p>
                    Our ICT Computer Training is renowned nationwide for the high quality of its education and training courses. Many of our clients took their first computer training course with us at introductory and beginner level and have progressed with us to advanced and expert levels.
                </p>
                <a href="{{route('services')}}">Read more</a>
            </div>
            <div class="service span4">
                <div class="icon-awesome">
                    <i class="icon-briefcase"></i>
                </div>
                <h4>Project Assistance</h4>
                <p>
                    Research and innovation activities on generic ICT technologies either driven by industrial roadmaps or through a bottom up approach are addressed in the 'Industrial Leadership' pillar, more specifically in the 'Leadership in enabling and industrial technologies' (LEIT) part of the work programme</p>
                <a href="{{route('services')}}">Read more</a>
            </div>
        </div>
    </div>

    <!-- Latest Work -->
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

    <!-- Testimonials -->
    <div class="testimonials container">
        <div class="testimonials-title">
            <h3>Testimonials</h3>
        </div>
        <div class="row">
            <div class="testimonial-list span12">
                <div class="tabbable tabs-below">
                    <div class="tab-content">
                        <div class="tab-pane active" id="A">
                            <img src="assets/img/testimonials/1.jpg" title="" alt="">
                            <p>
                                "I’ve worked with Hayroyal and his team for over a decade. Put simply, they are the only primary ICT technology organisation that I will affiliate with. They offer my workforce the best in responsive support, adaptability and professional courtesy. This team has next generation thinking, visionary web design and the consistency to make teachers feel empowered and safe in their application of technology. Importantly, they have never let me down and continue to be an integral and essential part of my organisation."
                                <br /><span class="violet">Abiola Micheal Akinwonmi</span>
                            </p>
                        </div>
                        <div class="tab-pane" id="B">
                            <img src="assets/img/testimonials/2.jpg" title="" alt="">
                            <p>
                                "Hayroyal Consult have been providing us with great IT support for several years. They deliver an excellent service and any issues are dealt with quickly and effectively. Their technincians are knowledgeable, polite and friendly and no question is too ridiculous! I would not hesitate in recommending them to other schools."
                                <br /><span class="violet">Oladejo Oladapo</span></p>
                            </p>
                        </div>
                        <!--<div class="tab-pane" id="C">
                            <img src="assets/img/testimonials/3.jpg" title="" alt="">
                            <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur..."<br /><span class="violet">Lorem Ipsum, dolor.co.uk</span></p>
                        </div>
                        <div class="tab-pane" id="D">
                            <img src="assets/img/testimonials/1.jpg" title="" alt="">
                            <p>"Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat..."<br /><span class="violet">Minim Veniam, nostrud.com</span></p>
                        </div>-->
                    </div>
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#A" data-toggle="tab"></a></li>
                        <li class=""><a href="#B" data-toggle="tab"></a></li>
                        <li class=""><a href="#C" data-toggle="tab"></a></li>
                        <li class=""><a href="#D" data-toggle="tab"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
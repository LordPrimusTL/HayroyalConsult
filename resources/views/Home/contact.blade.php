@extends('master')
@section('content')
    <!-- Page Title -->
    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <i class="icon-envelope-alt page-title-icon"></i>
                    <h2>Contact Us /</h2>
                    <p>Here is how you can contact us</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Us -->
    <div class="contact-us container">
        <div class="row">
            <div class="contact-form span7">
                <p>Fill the form below if you need any assistance from us regarding our services or if you wish to make inquires. We will get back to you in a very short time.</p>
                <form>
                    {{csrf_field()}}
                    <label for="name" class="nameLabel">Name</label>
                    <input id="name" type="text" name="name" placeholder="Enter your name..." required>
                    <label for="email" class="emailLabel">Email</label>
                    <input id="email" type="text" name="email" placeholder="Enter your email..." required>
                    <label for="subject">Subject</label>
                    <input id="subject" type="text" name="subject" placeholder="Your subject...">
                    <label for="message" class="messageLabel">Message</label>
                    <textarea id="message" name="message" placeholder="Your message..." required></textarea>
                    <button type="button" id="sendmailbtn">Send</button><img style="margin-top: 20px; margin-left: 20px; display: none" id="loader" src="{{asset('img/loader.gif')}}"/>
                </form>
                <ul class="hidden errorTab">
                    <li class="list_error"></li>
                </ul>
            </div>
            <div class="contact-address span5">
                <h4>We Are Here</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3949.491581486108!2d4.253597!3d8.153125000000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10370d752c353ad3%3A0xcb2d280bd75f0591!2sLadoke+Akintola+University+of+Technology!5e0!3m2!1sen!2sng!4v1412814559401" width="300" height="250" frameborder="0" style="border:0"></iframe>
                <h4>Address</h4>
                <p>Crystal Springs, The Glasshouse beside Nurudeen Grammar School, along LAUTECH-Stadium road, Ogbomoso.</p>
                <p>Phone: 07062314387, 07038606638, 0815101303</p>
            </div>
        </div>
    </div>
@endsection
@extends('admin_master')
@section('content')
    <div class="row">
        <div class="span1"></div>
        <div class="span11">
            <ul class="nav nav-tabs" role="tablist">
                <li class="active"><a href="#user" data-toggle="tab" role="tab">User</a></li>
                <li><a href="#slider" data-toggle="tab" role="tab">Slider</a></li>
                <li><a href="#work_we_do" data-toggle="tab" role="tab">Work We Do</a></li>
                <li class="dropdown" role="tab">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        Dropdown <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#dropdown1" data-toggle="tab">Action</a></li>
                        <li class="divider"></li>
                        <li><a href="#dropdown2" data-toggle="tab">Another action</a></li>
                    </ul>
                </li>
            </ul>
            <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade active in" id="user">
                    <table class="table table-responsive">
                        <thead>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <td>{{$user->username}}</td>
                                <td>{{$user->username}}</td>
                                <td>
                                    <a href="#" class="btn btn-primary">Edit</a>
                                    <a href="#" class="btn btn-primary"><span class="glyphicon glyphicon-trash"></span> &nbsp; Delete</a>
                                </td>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="slider">
                    <div class="pull-left">
                        <form method="POST"  action={{ url('admin/post/slider_image') }} enctype="multipart/form-data">
                            {{csrf_field()}}
                            <label for="sliderImage">Upload Slider Image: </label>
                            <input type="file" accept="image/*" class="input-lg form-control" id="sliderImage" name="sliderImage" placeholder="Upload Slider picture"/>
                            <input type="text" class="form-control" id="caption" name="caption" placeholder="Caption">
                            <button class="btn btn-primary" type="submit">Upload</button>
                        </form>
                    </div>
                    <table class="table table-responsive">
                        <thead>
                        <th>S/N</th>
                        <th>Image</th>
                        <th>Actions</th>
                        </thead>
                        <?php $i=1?>
                        <tbody>
                        @foreach($slidImag as $img)
                            <tr>
                                <td>{{$i++}}</td>
                                <td><img src="{{asset('images/slider/'.$img->image_link)}}" height="150" width="200"/></td>
                                <td>
                                    <a href="{{url('/admin/slider/delete/'.$img->id)}}" class="btn btn-primary"><span class="glyphicon glyphicon-trash"></span> &nbsp; Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="work_we_do">
                    <div class="pull-left">
                        <form method="POST"  action={{ url('admin/post/wwd') }} enctype="multipart/form-data">
                            {{csrf_field()}}
                            <label for="wwdImage">Upload Image: </label>
                            <input type="file" accept="image/*" class="input-lg form-control" id="wwdImage" name="wwdImage" placeholder="Upload Slider picture"/>
                            <input type="text" class="form-control" id="wwdtitle" name="wwdtitle" placeholder="Work We Do Title">
                            <input type="text" class="form-control" id="wwdcaption" name="wwdcaption" placeholder="Work We Do Caption">
                            <input type="text" class="form-control" id="wwdlink" name="wwdlink" placeholder="Website Link">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </form>
                    </div>
                    <table class="table table-responsive">
                        <thead>
                        <th>S/N</th>
                        <th>Title</th>
                        <th>Link</th>
                        <th>Caption</th>
                        <th>Image</th>
                        <th>Action</th>
                        </thead>
                        <?php $i=1?>
                        <tbody>
                            @foreach($wwd as $ww)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$ww->title}}</td>
                                    <td><a href="http://{{$ww->link}}">{{$ww->link}}</a> </td>
                                    <td>{{$ww->caption}}</td>
                                    <td><img src="{{asset('images/wwd/'.$ww->img)}}" height="150" width="200"/></td>
                                    <td><a href="{{url('/admin/wwd/delete/'.$ww->id)}}" class="btn btn-primary"><span class="glyphicon glyphicon-trash"></span> &nbsp; Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="dropdown1">
                    <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.</p>
                </div>
                <div class="tab-pane fade" id="dropdown2">
                    <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
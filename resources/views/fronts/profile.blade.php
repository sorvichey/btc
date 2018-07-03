@extends('layouts.front')
@section('content')
    <link href="{{asset('front/css/page.css')}}" rel="stylesheet">
    <!-- ***** Contact Us Area Start ***** -->
    <section class="footer-contact-area section_padding_100 clearfix" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- Heading Text  -->
                    <div class="wellcome-heading">
                        <h2>{{$profile->first_name}} {{$profile->last_name}}</h2>
                        <div class="line-shape"></div><br>
                    </div>
                    <div class="address-text">
                        <p><span>Email :</span> {{$profile->email}}</p>
                    </div>
                    <div class="phone-text">
                        <p><span>Gender :</span> {{$profile->gender}}</p>
                    </div> 
                    <a href="{{url('profile/edit/'.$profile->id)}}">
                        <button type="submit" class="btn submit-btn  btn-success-c">Edit Profile</button>
                    </a>
                    <a href="{{url('membership/reset-password')}}">
                        <button type="submit" class="btn submit-btn btn-danger-c">Reset Password</button>
                    </a>
                </div>
                <div class="col-md-6">
                    <!-- Form Start-->
                    <div class="contact_from">
                        <form action="{{url('profile/upload')}}" 
                            method="post"
                            enctype="multipart/form-data"  
                        >
                            {{csrf_field()}}
                            <!-- Message Input Area Start -->
                            <div class="contact_input_area">
                                <div class="row">
                                    <input type="hidden" name="id" value="{{session('membership')->id}}">
                                    <!-- Single Input Area Start -->
                                    <div class="col-md-12">
                                        @if($profile->photo != null)
                                            <img src="{{asset('/uploads/profiles/small/'.$profile->photo)}}" id="img" alt="" width="120">
                                        @else
                                            <img src="{{asset('uploads/profiles/member.png')}}" id="img" alt="" width="120"> 
                                        @endif
                                        <button type="submit" class="btn submit-btn float-right">Save Profile</button>
                                    </div>
                                    <div class="col-md-12"> <br>
                                        <input type="file" name="photo" accept="image/*" onchange="loadFile(event)" id="photo" class="form-control"><span class="text-danger">(120 x 120)</span><br>
                                    </div>
                                    <div class="col-md-12">
                                        @if(Session::has('sms'))
                                            <div class="alert alert-success" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <div>
                                                    {{session('sms')}}
                                                </div>
                                            </div>
                                        @endif
                                        @if(Session::has('sms1'))
                                            <div class="alert alert-danger" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <div>
                                                    {{session('sms1')}}
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!-- Message Input Area End -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        function loadFile(e){
            var output = document.getElementById('img');
            output.width = 120;
            output.src = URL.createObjectURL(e.target.files[0]);
        }
    </script>
@endsection
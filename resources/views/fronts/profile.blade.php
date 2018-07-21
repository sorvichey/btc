@extends('layouts.front')
@section('content')
    <link href="{{asset('front/css/page.css')}}" rel="stylesheet">
    <section class="pricing-plane-area page-plan section_padding_100_90 clearfix" id="pricing">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2 class="text-plan text-white">Profile</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sup sup2">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                        <h2>{{$profile->first_name}} {{$profile->last_name}}</h2>
                        <hr>
                        <div>
                            Email: {{$profile->email}}
                        </div>
                        <div>
                            Gender: {{$profile->gender}}
                        </div>
                        <div>
                            Username: {{$profile->username}}
                        </div>
                        <div>
                            Country: {{$profile->country}}
                        </div>
                        <div>
                            City: {{$profile->city}}
                        </div>
                        <div>
                            Postal Code: {{$profile->postal_code}}
                        </div>
                        <p></p>
                   
                    <a href="{{url('profile/edit/'.$profile->id)}}">
                        <button type="submit" class="btn submit-btn  btn-success">Edit Profile</button>
                    </a>
                    <a href="{{url('membership/reset-password')}}">
                        <button type="submit" class="btn submit-btn btn-danger">Reset Password</button>
                    </a>
                </div>
                <div class="col-md-6">
                  <h4 class="text-success">Referal Link</h4>
                 
                  <input type="text" class="form-control" readonly value="{{url('/')}}?ref={{md5($profile->id)}}">
                    <p></p>
                  <h4 class="text-success">My Score</h4>
                    <strong>
                        {{$profile->score}} BTs
                    </strong>
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
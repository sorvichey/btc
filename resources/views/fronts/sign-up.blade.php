@extends('layouts.front')
@section('content')
    <link href="{{asset('front/css/page.css')}}" rel="stylesheet">
    <!-- ***** Contact Us Area Start ***** -->
    <section class="footer-contact-area section_padding_100 clearfix" id="contact">
        <div class="container">
            <div class="row">
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
                <div class="col-md-6">
                    <!-- Heading Text  -->
                    <div class="wellcome-heading">
                        <h2>Sign Up</h2>
                        <div class="line-shape"></div><br>
                        <p>Register a new member here!</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact_from">
                        <form action="{{url('sign-up/save')}}" method="post" onsubmit="check_password()">
                        {{csrf_field()}}
                            <div class="contact_input_area">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <h3 class="text-white">Full Name: </h3>
                                            <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Full Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <h3 class="text-white">Email: </h3>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <h3 class="text-white">Password: </h3>
                                            <input type="password" class="form-control" name="password" id="password" placeholder="***" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <h3 class="text-white">Confirm Password: </h3>
                                            <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="***" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn submit-btn  btn-success-c">Sign Up</button>
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
        function check_password() {
            var pass = document.getElementById("password").value;
            var cpass = document.getElementById("cpassword").value;
            if(pass==cpass)
            {
                return true;
            }
            else{
                document.getElementById("cpassword").style.border = "2px solid #FF1493";
                return false;
            }
        }
    </script>    
@endsection
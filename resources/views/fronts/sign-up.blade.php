@extends('layouts.front')
@section('content')
    <link href="{{asset('front/css/page.css')}}" rel="stylesheet">
    <!-- ***** Contact Us Area Start ***** -->
    <section class="footer-contact-area section_padding_100 " id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- Heading Text  -->
                    <div class="wellcome-heading">
                        <h2>Sign Up</h2>
                        <div class="line-shape"></div><br>
                        <p>Register a new member here!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sup">
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
             
                    <div class="contact_from">
                        <form action="{{url('sign-up/save')}}" method="post" id="form_provider" accept-charset="UTF-8" onsubmit="check(event)">
                        {{csrf_field()}}
                            <div class="contact_input_area">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h4>First Name <span class="text-danger">*</span> </h4>
                                                    <input type="text" class="form-control" name="first_name" id="first_name" value="{{old('first_name')}}" placeholder="First Name" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h4>Last Name <span class="text-danger">*</span></h4>
                                                    <input type="text" class="form-control" name="last_name" id="last_name"  value="{{old('last_name')}}"  placeholder="Last Name" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <h4>Gender</h4>
                                            <select name="gender" class="form-control" id="gender">
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <h4>Country</h4>
                                            <select name="country" class="form-control" id="country">
                                                @foreach($countries as $c)
                                                <option value="{{$c->name}}">{{$c->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <h4>City <span class="text-danger">*</span> </h4>
                                            <input type="text" class="form-control" name="city" id="city"  value="{{old('city')}}" placeholder="City" required>
                                        </div>
                                        <div class="form-group">
                                            <h4>Postal Code <span class="text-danger">*</span> </h4>
                                            <input type="text" class="form-control" name="postal_code" id="postal_code"  value="{{old('postal_code')}}" placeholder="Postal Code" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h4>Email <span class="text-danger">*</span></h4>
                                            <input type="email" class="form-control" name="email" id="email"  value="{{old('email')}}" placeholder="E-mail" required>
                                        </div>
                                        <div class="form-group">
                                            <h4>Repeat Email <span class="text-danger">*</span> </h4>
                                            <input type="email" class="form-control" name="remail" id="remail"  value="{{old('remail')}}" placeholder="Repeat E-mail" required>
                                        </div>
                                        <div class="form-group">
                                            <h4>Username <span class="text-danger">*</span> </h4>
                                            <input type="text" class="form-control" name="username" id="username"  value="{{old('username')}}" placeholder="Username" required>
                                        </div>
                                        <div class="form-group">
                                            <h4>Password <span class="text-danger">*</span> <small class="text-secondary">Your password should be equal or max than 6 characters</small></h4>
                                            <input type="password" class="form-control" name="password" id="password" placeholder="******" required>
                                        </div>
                                        <div class="form-group">
                                            <h4 >Confirm Password <span class="text-danger">*</span></h4>
                                            <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="******" required>
                                        </div>
                                        <div class="form-group">
                                            <p class="text-dark" id="text-white"> 
                                                <label>
                                                <input type="checkbox" id="term" > 
                                                I accept the terms and conditions of Bil-Trade.
                                                <a href="{{asset(url('/page/3'))}}" target="_blank">View terms and conditions</a>
                                                </label>
                                            </p>
                                        </div>
                                        <button type="submit" class="btn submit-btn  btn-success-c">Sign Up</button>
                                </div>
                            </div>
                            <!-- Message Input Area End -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <script charset="utf-8" type="text/javascript">
            function check(event)
            {
                var password = document.getElementById("password").value;
                var confirm_password = document.getElementById("cpassword").value;
                var term = document.getElementById("term").checked;
                var m = document.getElementById("email").value;
                var m1 = document.getElementById('remail').value;
                 
                if(m!=m1)
                {
                    document.getElementById("remail").style.border = "4px solid red";
                    alert("Email and repeat email is not mached!");
                    event.preventDefault();
                }
                    if( password != confirm_password) {
                       
                        document.getElementById("cpassword").style.border="4px solid red";
                        alert("Your password and confirm password is not matched!")
                        event.preventDefault();
                    } 
                    if (password == confirm_password && term === false){
                        alert("Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy!")
                        event.preventDefault();
                    }
                    
                    if( password === confirm_password && term === true){
                        if(password.length < 6 ){
                            alert("Your password should be equal or max than 6 characters");
                            document.getElementById("password").style.border="4px solid red";
                            event.preventDefault();
                        } else {
                            document.getElementById("form_provider").submit();
                        }
                    }  
            }
        </script>
    </section>
 
    @endsection

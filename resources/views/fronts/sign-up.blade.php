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
                        <h2>Sign Up</h2>
                        <div class="line-shape"></div><br>
                        <p>Register a new member here!</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact_from">
                        <form action="#" method="post">
                            <div class="contact_input_area">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <h3 class="text-white">Full Name: </h3>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Full Name" required>
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
                                            <input type="password" class="form-control" name="email" id="email" placeholder="***" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <h3 class="text-white">Confirm Password: </h3>
                                            <input type="password" class="form-control" name="email" id="email" placeholder="***" required>
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
    @endsection
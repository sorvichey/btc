@extends('layouts.front')
@section('content')
    <link href="{{asset('front/css/page.css')}}" rel="stylesheet">
    <!-- ***** Contact Us Area Start ***** -->
    <section class="pricing-plane-area page-plan section_padding_100_90 clearfix" id="pricing">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center">
                    <h2 class="text-plan text-white">My Downline</h2>
                    <div class="line-shape"></div>
                </div>
            </div>
        </div>
    </div>
</section>
    <section class="sup sup2">
        <div class="container">
          
            <table class="table">
                <thead>
                    <tr>
                        <th>&numero;</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Register Date</th>
                    </tr>
                </thead>
                <tbody>
                    @php($i=1)
                    @foreach($lines as $l)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$l->first_name}}</td>
                            <td>{{$l->last_name}}</td>
                            <td>{{$l->gender}}</td>
                            <td>{{$l->email}}</td>
                            <td>{{$l->create_at}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <p>&nbsp;</p>
        <hr>
        <p>&nbsp;</p>
    </section>
@endsection
@extends('layouts.front')
@section('content')
    <link href="{{asset('front/css/page.css')}}" rel="stylesheet">
    <!-- ***** Contact Us Area Start ***** -->
    <section class="pricing-plane-area page-plan section_padding_100_90 clearfix" id="pricing">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2 class="text-plan text-white">My Order</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sup sup2">
        <div class="container">
            <p>
                <a href="{{url('/plan')}}">New Order</a>
            </p>
            <table class="table">
                <thead>
                    <tr>
                        <th>&numero;</th>
                        <th>Order Date</th>
                        <th>Plan Name</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Payment Type</th>
                    </tr>
                </thead>
                <tbody>
                    @php($i=1)
                    @foreach($orders as $order)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$order->order_date}}</td>
                            <td>{{$order->name}}</td>
                            <td>$ {{$order->price}}</td>
                            <td>{{$order->status==1?'Approved':'Pending'}}</td>
                            <td>{{$order->payment_type}}</td>
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
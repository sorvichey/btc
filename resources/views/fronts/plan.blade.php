@extends('layouts.front')
@section('content')
<section class="pricing-plane-area section_padding_100_90 clearfix" id="pricing">
<div class="container">
    <div class="row">
        <div class="col-12">
            <!-- Heading Text  -->
            <div class="section-heading text-center">
                <h2>Pricing Plan</h2>
                <div class="line-shape"></div>
            </div>
        </div>
    </div>
      <div class="row text-center">
      @foreach($plans as $plan)
          <div class="col-md-3 col-lg-3">
              <div class="single-price-plan text-center">
                  <div class="package-plan">
                      <h5>{{$plan->name}}</h5>
                      <div class="ca-price d-flex justify-content-center">
                          <span>$</span><h4>{{$plan->price}}</h4>
                      </div>
                  </div>
                  <div class="package-description">
                      {!! $plan->description !!}
                  </div>
                  <div class="plan-button">
                      <a href="#">Select Plan</a>
                  </div>
              </div>
          </div>
      @endforeach
      </div>
    </div>
</section>
@endsection
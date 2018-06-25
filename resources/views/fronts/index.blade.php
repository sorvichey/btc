@extends('layouts.front')
@section('content')
<?php 
    $slides = DB::table('slides')->where('active',1)->orderBy('order','asc')->get(); 
    $i = 1; 
    $c = 0;
?>
  
<div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
        @foreach($slides as $s1)
            @if($c++ == 0)
            <li data-target="#demo" data-slide-to="$c" class="active"></li>
            @else 
            <li data-target="#demo" data-slide-to="$c"></li>
            @endif
        @endforeach
    </ul>
    <div class="carousel-inner">
        @foreach($slides as $slide)
            @if($i==1)
                <div class="carousel-item active">
                    <img src="{{asset('front/slides/'.$slide->photo)}}" width="100%">
                    <div class="carousel-caption slide-text">
                    <h3 class="text-white">{{$slide->name}}</h3>
                    </div>   
                </div>
            @else
                <div class="carousel-item">
                    <img src="{{asset('front/slides/'.$slide->photo)}}" width="100%">
                    <div class="carousel-caption slide-text" >
                    <h3 class="text-white">{{$slide->name}}</h3>
                    </div>   
                </div>
            @endif
            <?php $i++; ?>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>

<section>
<div class="special_description_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">

                <div class="special_description_content">
                    <h2 class="text-center text-white">
                        <img src="{{asset('front/img/bitcoin-icon.png')}}" width="90" alt="">Cryptocurrency</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="more wow bounceInDown" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: bounceInDown;">
                <a href="https://coinmarketcap.com/" target="_blank">View All</a>
  
            </div>
        </div>
    </div>
</div>
</section>
<!-- ***** Special Area End ***** -->
<section class="video-section">
<div class="container">
       <div class="row">
           <div class="col-sm-6">
                <script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/currency.js"></script><div class="coinmarketcap-currency-widget" data-currencyid="1" data-base="USD" data-secondary="" data-ticker="true" data-rank="true" data-marketcap="true" data-volume="true" data-stats="USD" data-statsticker="false"></div>
           </div>
           <div class="col-sm-6">
                <script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/currency.js"></script><div class="coinmarketcap-currency-widget" data-currencyid="2083" data-base="USD" data-secondary="" data-ticker="true" data-rank="true" data-marketcap="true" data-volume="true" data-stats="USD" data-statsticker="false"></div>
           </div>
       </div>
    </div>
</section>
  <!-- ***** Special Area End ***** -->

  <!-- ***** Video Area Start ***** -->
  <div class="video-section">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <h2 class="text-center text-video ">Spectre.ai Trading Platform</h2>
                  <!-- Video Area Start -->
                  <div class="video-area">
                   
                      <iframe width="100%" height="600" src="{{$video->url}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
              
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- ***** Video Area End ***** -->
 

  <!-- ***** Pricing Plane Area Start *****==== -->
  <section class="pricing-plane-area section_padding_100_70 clearfix" id="pricing">
      <div class="container container-c">
          <div class="row">
              <div class="col-12">
                  <!-- Heading Text  -->
                  <div class="section-heading text-center">
                      <h2>Pricing Plan</h2>
                      <div class="line-shape"></div>
                  </div>
              </div>
          </div>
          <div class="row text-center no-gutters">
              <div class="col-12 col-md-4 col-lg-4">
                  <!-- Package Price  -->
                  <div class="single-price-plan text-center">
                      <!-- Package Text  -->
                      <div class="package-plan">
                          <h5>Starter Plan</h5>
                          <div class="ca-price d-flex justify-content-center">
                              <span>$</span>
                              <h4>29</h4>
                          </div>
                      </div>
                      <div class="package-description">
                          <p><i class="fa fa-check text-success"></i> Up to 10 users monthly</p>
                          <p><i class="fa fa-check text-success"></i>  Unlimited updates</p>
                          <p><i class="fa fa-check text-success"></i>  Free host &amp; domain</p>
                      </div>
                      <!-- Plan Button  -->
                      <div class="plan-button">
                          <a href="#">Select Plan</a>
                      </div>
                  </div>
              </div>
              <div class="col-12 col-md-4 col-lg-4">
                  <!-- Package Price  -->
                  <div class="single-price-plan text-center">
                      <!-- Package Text  -->
                      <div class="package-plan">
                          <h5>Basic Plan</h5>
                          <div class="ca-price d-flex justify-content-center">
                              <span>$</span>
                              <h4>49</h4>
                          </div>
                      </div>
                      <div class="package-description">
                          <p><i class="fa fa-check text-success"></i>  Up to 10 users monthly</p>
                          <p><i class="fa fa-check text-success"></i>  Unlimited updates</p>
                          <p><i class="fa fa-check text-success"></i> Free host &amp; domain</p>
                          <p><i class="fa fa-check text-success"></i> 24/7 Support</p>
                      </div>
                      <!-- Plan Button  -->
                      <div class="plan-button">
                          <a href="#">Select Plan</a>
                      </div>
                  </div>
              </div>
              <div class="col-12 col-md-4 col-lg-4">
                  <!-- Package Price  -->
                  <div class="single-price-plan active text-center">
                      <!-- Package Text  -->
                      <div class="package-plan">
                          <h5>Advenced Plan</h5>
                          <div class="ca-price d-flex justify-content-center">
                              <span>$</span>
                              <h4>69</h4>
                          </div>
                      </div>
                      <div class="package-description">
                          <p><i class="fa fa-check text-success"></i> Up to 10 users monthly</p>
                          <p><i class="fa fa-check text-success"></i>  Unlimited updates</p>
                          <p><i class="fa fa-check text-success"></i>  Free host &amp; domain</p>
                          <p><i class="fa fa-check text-success"></i>  24/7 Support</p>
                          <p><i class="fa fa-check text-success"></i> 10 Unique Users</p>
                      </div>
                      <!-- Plan Button  -->
                      <div class="plan-button">
                          <a href="#">Select Plan</a>
                      </div>
                  </div>
              </div>
            
          </div>
      </div>
  </section>
  <!-- ***** Pricing Plane Area End ***** -->

  <!-- ***** CTA Area Start ***** -->
  <section class="our-monthly-membership section_padding_50 clearfix">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-md-8">
                  <div class="membership-description">
                      <h2>Sign Up</h2>
                      <p>Find the perfect plan for you — 100% satisfaction guaranteed.</p>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="get-started-button wow bounceInDown" data-wow-delay="0.5s">
                      <a href="#">Get Started</a>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- ***** CTA Area End ***** -->
@endsection

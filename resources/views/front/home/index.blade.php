@extends('layouts.front')

@section('content')

<div class="offset2"></div>

<div class="light-wrapper">
 <div class="container inner tp40 bp0">
  <div class="tp-banner-container">
   <div class="tp-banner">
    <ul>
     <li data-transition="fade" data-delay="9000" data-saveperformance="on" data-title="Ken Burns Slide"> <img
       src="{{ asset('app/style/images/dummy.png') }}" alt=""
       data-lazyload="{{ asset('app/style/images/art/slider-bg1.jpg') }}" data-bgposition="right top" data-kenburns="on"
       data-duration="12000" data-ease="Power0.easeInOut" data-bgfit="115" data-bgfitend="100"
       data-bgpositionend="center bottom">
      <div class="caption sfr title light-layer" data-x="745" data-y="400" data-speed="700" data-start="2300"
       data-easing="Sine.easeOut">Nature Photography</div>
      <div class="caption sfr lead light-layer" data-x="745" data-y="454" data-speed="700" data-start="2800"
       data-easing="Sine.easeOut">Pellentesque ornare sem lacinia quam</div>
     </li>
     <li data-transition="fade" data-delay="9000" data-saveperformance="on" data-title="Ken Burns Slide"> <img
       src="{{ asset('app/style/images/dummy.png') }}" alt=""
       data-lazyload="{{ asset('app/style/images/art/slider-bg2.jpg') }}" data-bgposition="right top" data-kenburns="on"
       data-duration="12000" data-ease="Power0.easeInOut" data-bgfit="115" data-bgfitend="100"
       data-bgpositionend="center bottom">
      <div class="caption sfr title light-layer" data-x="745" data-y="400" data-speed="700" data-start="2300"
       data-easing="Sine.easeOut">Nature Photography</div>
      <div class="caption sfr lead light-layer" data-x="745" data-y="454" data-speed="700" data-start="2800"
       data-easing="Sine.easeOut">Pellentesque ornare sem lacinia quam</div>
     </li>
     <li data-transition="fade" data-delay="9000" data-saveperformance="on" data-title="Ken Burns Slide"> <img
       src="{{ asset('app/style/images/dummy.png') }}" alt=""
       data-lazyload="{{ asset('app/style/images/art/slider-bg3.jpg') }}" data-bgposition="right top" data-kenburns="on"
       data-duration="12000" data-ease="Power0.easeInOut" data-bgfit="115" data-bgfitend="100"
       data-bgpositionend="center bottom">
      <div class="caption sfr title light-layer" data-x="745" data-y="400" data-speed="700" data-start="2300"
       data-easing="Sine.easeOut">Nature Photography</div>
      <div class="caption sfr lead light-layer" data-x="745" data-y="454" data-speed="700" data-start="2800"
       data-easing="Sine.easeOut">Pellentesque ornare sem lacinia quam</div>
     </li>
     <li data-transition="fade" data-delay="5000"> <img src="{{ asset('app/style/images/art/slider-bg3.jpg') }}" alt=""
       data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat" />
      <div class="caption sfb title light-layer" data-x="center" data-y="250" data-speed="700" data-start="800"
       data-easing="Sine.easeOut">Urban Photography</div>
      <div class="caption sfb lead light-layer" data-x="center" data-y="305" data-speed="700" data-start="1300"
       data-easing="Sine.easeOut">Fusce Pharetra Cras Mattis Elit</div>
     </li>
    </ul>
    <div class="tp-bannertimer tp-bottom"></div>
   </div>
  </div>
 </div>
</div>
<!-- /.light-wrapper -->
<div class="light-wrapper">
 <div class="container inner">
  <h1 class="intro text-center">Hello! We are Fashion Studio</h1>
  <p class="lead main text-center">Lorem ipsum dolor sit amet faucibus mattis rhoncus placerat donec condimentum
   libero eu nibh sagittis fames molestie dui lectus ligula congue fringilla himenaeos odio ac eleifend nullam
   sociosqu posuere tellus.</p>
  <h3 class="section-title pull-left">Our Awesome Collection</h3>
  <div class="portfolio fix-portfolio">
   <div id="filters" class="button-group pull-right">
    <button class="button is-checked" data-filter="*">All</button>
    <button class="button" data-filter=".web">Watches</button>
    <button class="button" data-filter=".graphic">Jeaulary</button>
    <button class="button" data-filter=".video">Shoes</button>
    <button class="button" data-filter=".photography">Hats</button>
   </div>
   <div class="clearfix"></div>
   <div class="isotope items">
    <div class="item graphic">
     <figure><a href="portfolio-post2.html">
       <div class="text-overlay">
        <div class="info"><span>Vestibulum Tellus</span></div>
       </div>
       <img src="{{ asset('app/style/images/art/p2.jpg') }}" alt="" />
      </a></figure>
    </div>
    <div class="item height2">
     <figure><a href="portfolio-post3.html">
       <div class="text-overlay">
        <div class="info"><span>Vehicula Amet</span></div>
       </div>
       <img src="{{ asset('app/style/images/art/p3.jpg') }}" alt="" />
      </a></figure>
    </div>
    <div class="item video">
     <figure><a href="portfolio-post4.html">
       <div class="text-overlay">
        <div class="info"><span>Consectetur Justo</span></div>
       </div>
       <img src="{{ asset('app/style/images/art/p4.jpg') }}" alt="" />
      </a></figure>
    </div>
    <div class="item web">
     <figure><a href="portfolio-post2.html">
       <div class="text-overlay">
        <div class="info"><span>Sit Amet Ridiculus</span></div>
       </div>
       <img src="{{ asset('app/style/images/art/p7.jpg') }}" alt="" />
      </a></figure>
    </div>
    <div class="item height2 graphic">
     <figure><a href="portfolio-post3.html">
       <div class="text-overlay">
        <div class="info"><span>Malesuada Dolor Nibh</span></div>
       </div>
       <img src="{{ asset('app/style/images/art/p8.jpg') }}" alt="" />
      </a></figure>
    </div>
    <div class="item photography">
     <figure><a href="portfolio-post.html">
       <div class="text-overlay">
        <div class="info"><span>Pellentesque Etiam Egestas</span></div>
       </div>
       <img src="{{ asset('app/style/images/art/p11.jpg') }}" alt="" />
      </a></figure>
    </div>
   </div>
  </div>
  <!-- /.portfolio -->
 </div>
 <!-- /.container -->
</div>

<div class="light-wrapper">
 <div class="divide70"></div>
 <h3 class="section-title text-center">Check Out Our Latest Products</h3>
 <div class="text-center"> <a href="#" class="btn btn-large fixed-width">More Products</a> <a href="#"
   class="btn btn-large btn-maroon fixed-width">Contact Us</a> </div>
</div>

<!-- /.light-wrapper -->

@endsection
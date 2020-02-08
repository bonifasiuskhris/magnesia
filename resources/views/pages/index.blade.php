@extends('layout.master')

{{-- custom head section --}}
@section('content_head')

@endsection

{{-- custom footer js section --}}
@section('content_footer')

<script>
    $(document).ready(function() {
      $('.a-horizontal').pagepiling({
        scrollingSpeed: 280,
        menu: '#menu',
        direction: 'horizontal',
        loopTop: true,
        loopBottom: true,
        anchors: ['Home', 'Service', 'Project', 'Contact', 'Client'],
        navigation: false,
        afterLoad: function(anchorLink, index){
          if(index == 3 || index == 5){ // Section with dark bacgkrounds
            $('body').addClass('dark-horizontal');
          }
          else{
            $('body').removeClass('dark-horizontal');
          }
        }
      });

      $('.a-pp-prev').on('click', function(){
        $.fn.pagepiling.moveSectionUp();
      });
      $('.a-pp-next').on('click', function(){
        $.fn.pagepiling.moveSectionDown();
      });
    });
  </script>

@endsection

{{-- content section --}}
@section('content')

<div class="home-horizontal a-horizontal full-height">
    
<div class="section pp-scrollable slide slide1">
    <div class="slide-container">
        <div class="slide-bg">
            <div class="inside"></div>
        </div>
        <div class="container">
            <div class="row slide-content">
                <div class="col-sm-4">
                    <div class="slide-num num">01</div>
                    <h1 class="slide-stitle font-custom fw-bolder wow fadeInRight" data-wow-duration="1.2s"
                        style="visibility: visible; animation-duration: 1.2s; animation-name: fadeInRight;font-size:7vmin">
                        <span class="text-primary">Magnesia</span><br>ready to fit your <br><span class="text-primary">feeds</span></h1>
                    <h3 class="slide-title-susb font-open fw-bold fs20">Social Media &amp; Advertising</h3>
                    <div class="slide-descr text-dark">become a <i>magnetic content</i>for your social media</div>
                    {{-- <div class="slide-title">
                        <div class="horizontal-top-title">Featured project</div>
                        <h2 class="font-teko h1">Social<br /> Media</h2>
                    </div> --}}
                    {{-- <div class="slide-body">
                        <h3 class="slide-title-sub font-teko">branding</h3>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="section pp-scrollable slide slide2">
      <div class="slide-container">
        <div class="container">
          <div class="slide-num num">02</div>
          <div class="media-title">
            <div class="align-self-center">
              <h2 class="slide-title font-custom fw-bolder mb-0">Services</h2>
            </div>
            <div class="align-self-center mb-2">
              <div class="slide-descr slide-note text-dark">What’s the first thing people do when they're waking up?<br>yes, they checked their social media network why not try one of our services.</div>
            </div>
          </div>
          <div class="slide-body">
            <div class="row horizontal-service-list">
              <div class="col-lg-4">
                <div class="horizontal-service-item">
                  <div class="num">A.</div>
                <div class="horizontal-service-item-photo"><img src="{{asset('assets/img/social-media.png')}}" alt="social media like icon" class="photo-position" /></div>
                  <div class="horizontal-service-item-title">Social Media <br> Management</div>
                  <div class="horizontal-service-item-descr text-grey">Don't have people to manage your social media account? <br> why not try this services, we help you to develop from planning to excecution.</div>
                  {{-- <div class="horizontal-service-item-more"><a class="btn btn-primary btn-sm" href="service.html">Learn more <i class="icon ion-ios-arrow-right"></i></a></div> --}}
                </div>
              </div>
              <div class="col-lg-4">
                <div class="horizontal-service-item">
                  <div class="num">B.</div>
                  <div class="horizontal-service-item-photo photo3"><img src="{{asset('assets/img/design-creation.png')}}" alt="" class="photo-position" /></div>
                  <div class="horizontal-service-item-title">Creative &amp; <br>Content Creation</div>
                  <div class="horizontal-service-item-descr text-grey">Have an idea but don't have time to create the design? We going to help you to create contents that matter to your audience & business growth.</div>
                  {{-- <div class="horizontal-service-item-more"><a class="btn btn-primary btn-sm" href="service.html">Learn more <i class="icon ion-ios-arrow-right"></i></a></div> --}}
                </div>
              </div>
              <div class="col-lg-4">
                <div class="horizontal-service-item">
                  <div class="num">C.</div>
                  <div class="horizontal-service-item-photo"><img src="{{asset('assets/img/paid-ads.png')}}" alt="" class="photo-position" /></div>
                  <div class="horizontal-service-item-title">Paid<br /> Advertising</div>
                  <div class="horizontal-service-item-descr text-grey">We help you to promote your brand through CPC (cost per click) & CPA (cost  per acquisition).</div>
                  {{-- <div class="horizontal-service-item-more"><a class="btn btn-primary btn-sm" href="service.html">Learn more <i class="icon ion-ios-arrow-right"></i></a></div> --}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section pp-scrollable slide slide3 slide-dark">
      <div class="slide-container">
        <div class="slide-bg"><div class="inside"></div></div>
        <div class="container">
          <div class="row slide-content">
            <div class="col-sm-4">
              <div class="slide-num num">03</div>
              <div class="slide-title">
                <div class="horizontal-top-title">Featured Portfolio</div>
                <h2 class="font-custom fw-bolder h2 mb-5">Gameloop<br /> Project</h2>
              </div>
              <div class="slide-body">
                <h3 class="slide-title-sub font-custom fs14" style="text-transform:lower-case">
                  <a href="https://www.instagram.com/gameloop.indonesia/" target="_blank"><u> @gameloopindonesia</u></a>
                </h3>
              </div>
            </div>
          </div>
          <a class="btn btn-primary mr-4" href="{{url('#Contact')}}">Ask for credential <i class="icon ion-ios-arrow-right"></i></a>
          {{-- <a href="work-grid.html" class="horizontal-more-total">all project</a> --}}
        </div>
      </div>
    </div>

    <div class="section pp-scrollable slide slide4">
      <div class="slide-container">
        <div class="slide-bg"><div class="inside"></div></div>
        <div class="container">
          <div class="row slide-content">
            <div class="col-sm-6">
              <div class="slide-num num">04</div>
              <h2 class="slide-title font-custom fw-bolder h2 "><span class="text-primary">Jakarta,</span> Indonesia</h2>
              <div class="slide-body">
                <div class="slide-contact-address text-dark">Ruko Prominence Blok 38F No 69, Kota Tangerang.</div>
                <div class="slide-contact-mail"><a href="mailto:hello.magnesia@gmail.com" target="_blank" class="underline text-dark">hello.magnesia@gmail.com</a></div>
                {{-- <div class="slide-contact-phone"><a href="tel:+6281211090020" class="phone-link">0812-1109-0020</a></div> --}}
              </div>
            </div>
          </div>
          {{-- <a class="btn btn-primary mr-4" href="contact.html">Contact us <i class="icon ion-ios-arrow-right"></i></a> --}}
        </div>
      </div>
    </div>
{{-- 
    <div class="section pp-scrollable slide slide4">
      <div class="slide-container">
        <div class="container">
          <div class="slide-num num">04</div>
          <div class="media-title">
            <div class="align-self-center">
              <h2 class="slide-title font-teko mb-0">Our Clients</h2>
            </div>
            <div class="align-self-center mb-2">
              <div class="slide-descr slide-note">Help business can be optimized profit and improve value<br /> of brand is our vision.</div>
            </div>
          </div>

          <div class="slide-body">
            <div class="row no-gutters partner-list partner-bordered">
              <div class="col partner-item"><span class="inside"><img src="img/pic12.png" alt="" /></span></div>
              <div class="col partner-item"><a href="#" class="inside"><img src="img/pic13.png" alt="" /></a></div>
              <div class="col partner-item"><a href="#" class="inside"><img src="img/pic14.png" alt="" /></a></div>
              <div class="col partner-item"><a href="#" class="inside"><img src="img/pic15.png" alt="" /></a></div>
              <div class="col partner-item"><a href="#" class="inside"><img src="img/pic16.png" alt="" /></a></div>
              <div class="col partner-item"><a href="#" class="inside"><img src="img/pic17.png" alt="" /></a></div>
              <div class="col partner-item"><a href="#" class="inside"><img src="img/pic18.png" alt="" /></a></div>
              <div class="col partner-item"><a href="#" class="inside"><img src="img/pic20.png" alt="" /></a></div>
              <div class="col partner-item"><a href="#" class="inside"><img src="img/pic21.png" alt="" /></a></div>
              <div class="col partner-item"><a href="#" class="inside"><img src="img/pic22.png" alt="" /></a></div>
              <div class="col partner-item"><a href="#" class="inside"><img src="img/pic23.png" alt="" /></a></div>
              <div class="col partner-item"><a href="#" class="inside"><img src="img/pic24.png" alt="" /></a></div>
              <div class="col partner-item"><a href="#" class="inside"><img src="img/pic25.png" alt="" /></a></div>
              <div class="col partner-item"><a href="#" class="inside"><img src="img/pic26.png" alt="" /></a></div>
              <div class="col partner-item"><a href="#" class="inside"><img src="img/pic27.png" alt="" /></a></div>
            </div>
          </div>
        </div>
      </div>
    </div> 
--}}

{{-- 
    <div class="section pp-scrollable slide slide5 slide-dark">
      <div class="slide-container">
        <div class="slide-bg"><div class="inside"></div></div>
        <div class="container">
          <div class="row slide-content">
            <div class="col-sm-6">
              <div class="slide-num num">05</div>
              <h2 class="slide-title font-teko h1"><span class="text-primary">New York,</span> USA</h2>
              <div class="slide-body">
                <div class="slide-contact-address">166 Main Street, Beverly Hills, CA 90210</div>
                <div class="slide-contact-mail"><a href="#" class="underline">hello@lewisstudio.co</a></div>
                <div class="slide-contact-phone"><a href="tel:+00853462188" class="phone-link">+0085 346 2188</a></div>
              </div>
            </div>
          </div>
          <a class="btn btn-primary mr-4" href="contact.html">Contact us <i class="icon ion-ios-arrow-right"></i></a>
        </div>
      </div>
    </div> 
--}}

  </div>

@endsection

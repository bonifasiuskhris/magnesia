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
        anchors: ['Home', 'Service', 'Project', 'Client', 'Contact'],
        navigation: false,
        afterLoad: function(anchorLink, index){
          if(index == 1 || index == 3 || index == 5){ // Section with dark bacgkrounds
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
    
<div class="section pp-scrollable slide slide1 slide-dark">
    <div class="slide-container">
        <div class="slide-bg">
            <div class="inside"></div>
        </div>
        <div class="container">
            <div class="row slide-content">
                <div class="col-sm-4">
                    <div class="slide-num num">01</div>
                    <h1 class="slide-title font-teko wow fadeInRight" data-wow-duration="1.2s"
                        style="visibility: visible; animation-duration: 1.2s; animation-name: fadeInRight;">
                        <span class="text-primary">Magnesia <br>Make it</span><br> Better</h1>
                    <h3 class="slide-title-sub font-teko">Social Media &amp; interaction</h3>
                    <div class="slide-descr">We create high quality products to help the life interested &amp; better</div>
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
              <h2 class="slide-title font-teko mb-0">Our Services</h2>
            </div>
            <div class="align-self-center mb-2">
              <div class="slide-descr slide-note">When unknow printer took a galley of type and scrambled it<br /> to make a type specimen book.</div>
            </div>
          </div>
          <div class="slide-body">
            <div class="row horizontal-service-list">
              <div class="col-lg-4">
                <div class="horizontal-service-item">
                  <div class="num">1.</div>
                  <div class="horizontal-service-item-photo"><img src="img/horizontal-pic2.png" alt="" class="photo-position" /></div>
                  <div class="horizontal-service-item-title">Social Media <br> Management</div>
                  <div class="horizontal-service-item-descr text-grey">We build and activate brands throung cultural insight, strategic vision, and the power of emotion..</div>
                  <div class="horizontal-service-item-more"><a class="btn btn-primary btn-sm" href="service.html">Learn more <i class="icon ion-ios-arrow-right"></i></a></div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="horizontal-service-item">
                  <div class="num">2.</div>
                  <div class="horizontal-service-item-photo"><img src="img/horizontal-pic3.png" alt="" class="photo-position" /></div>
                  <div class="horizontal-service-item-title">Social Media<br /> Marketing</div>
                  <div class="horizontal-service-item-descr text-grey">We help you to promote your brand on Facebook, Twitter, Instagram with best social strategies..</div>
                  <div class="horizontal-service-item-more"><a class="btn btn-primary btn-sm" href="service.html">Learn more <i class="icon ion-ios-arrow-right"></i></a></div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="horizontal-service-item">
                  <div class="num">3.</div>
                  <div class="horizontal-service-item-photo photo3"><img src="img/horizontal-pic4.png" alt="" class="photo-position" /></div>
                  <div class="horizontal-service-item-title">Creative &amp; <br>Content Creation</div>
                  <div class="horizontal-service-item-descr text-grey">We think out of the box to create contents that matter to your audience & business growth..</div>
                  <div class="horizontal-service-item-more"><a class="btn btn-primary btn-sm" href="service.html">Learn more <i class="icon ion-ios-arrow-right"></i></a></div>
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
                <div class="horizontal-top-title">Featured project</div>
                <h2 class="font-teko h1">Dark<br /> Bottle</h2>
              </div>
              <div class="slide-body">
                <h3 class="slide-title-sub font-teko">branding</h3>
              </div>
            </div>
          </div>
          <a class="btn btn-primary mr-4" href="single-project-branding.html">See project <i class="icon ion-ios-arrow-right"></i></a>
          <a href="work-grid.html" class="horizontal-more-total">all project</a>
        </div>
      </div>
    </div>

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

  </div>

@endsection

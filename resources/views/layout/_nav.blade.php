<header id="header" class="header header-fixed">
  <div class="container-fluid clearfix">
    <div class="brand">
      <a href="#">
        <div class="brand-magnesia"></div>
      {{-- <div class="brand-magnesia"><img src="{{asset('assets/brand/logo-text.svg')}}" width="95px"  alt=""></div> --}}
        <div class="brand-text">Digital Media<br /> Solution</div>
      </a>
    </div>

    <button class="nav-toggle-btn a-nav-toggle">
      <span class="nav-toggle-title">Menu</span>
      <span class="nav-toggle nav-toggle-sm">
        <span class="stick stick-1"></span>
        <span class="stick stick-2"></span>
        <span class="stick stick-3"></span>
      </span>
    </button>

    <div class="header-content d-none d-md-block">
      <div class="header-contacts">
        <div class="header-contact-item"><a href="tel:+00853462188" class="phone-link">+62 1234 123 1234</a></div>
        <div class="header-contact-divider">/</div>
        <div class="header-contact-item"><a href="mailto:contact@magnesia.com" class="mail-link">contact@magnesia.com</a></div>
      </div>
    </div>
  </div>

  <div class="hide-menu a-nav-toggle"></div>

  <div class="menu">
   
    <div class="menu-main" id="accordion">
      <ul>
        <li class="active"><a data-text="Home" data-toggle="collapse" href="#menuHome" role="button" aria-expanded="true" aria-controls="menuHome">Home</a>
          <div class="collapse show" id="menuHome" data-parent="#accordion">
            <ul>
              <li><a href="home-flash.html" class="animsition-link" data-animsition-out-class="fade-out" data-text="Flash">Flash</a></li>
              <li class="active"><a href="home-horizontal.html" class="animsition-link" data-animsition-out-class="fade-out" data-text="Parallax Horizontal">Parallax Horizontal</a></li>
              <li><a href="home-minimal.html" class="animsition-link" data-animsition-out-class="fade-out" data-text="Minimal">Minimal</a></li>
            </ul>
          </div>
        </li>
        <li><a data-text="Works" data-toggle="collapse" href="#menuWorks" role="button" aria-expanded="false" aria-controls="menuWorks">Works</a>
          <div class="collapse" id="menuWorks" data-parent="#accordion">
            <ul>
              <li><a href="work-grid.html" class="animsition-link" data-animsition-out-class="fade-out" data-text="Grid">Grid</a></li>
              <li><a href="work-masonry.html" class="animsition-link" data-animsition-out-class="fade-out" data-text="Masonry">Masonry</a></li>
              <li><a href="work-metro.html" class="animsition-link" data-animsition-out-class="fade-out" data-text="Metro">Metro</a></li>
            </ul>
          </div>
        </li>
        <li><a data-text="News" data-toggle="collapse" href="#menuNews" role="button" aria-expanded="false" aria-controls="menuNews">News</a>
          <div class="collapse" id="menuNews" data-parent="#accordion">
            <ul>
              <li><a href="news-grid.html" class="animsition-link" data-animsition-out-class="fade-out" data-text="Grid">Grid</a></li>
              <li><a href="news-masonry.html" class="animsition-link" data-animsition-out-class="fade-out" data-text="Masonry">Masonry</a></li>
            </ul>
          </div>
        </li>
        <li><a data-text="Studio" data-toggle="collapse" href="#menuStudio" role="button" aria-expanded="false" aria-controls="menuStudio">Studio</a>
          <div class="collapse" id="menuStudio" data-parent="#accordion">
            <ul>
              <li><a href="about-us.html" class="animsition-link" data-animsition-out-class="fade-out" data-text="About Us">About Us</a></li>
              <li><a href="about-me.html" class="animsition-link" data-animsition-out-class="fade-out" data-text="About Me">About Me</a></li>
            </ul>
          </div>
        </li>
        <li><a href="contact.html" class="animsition-link" data-animsition-out-class="fade-out" data-text="Contact">Contact</a></li>
      </ul>
    </div>

    <div class="menu-footer">
        <ul class="social social-rounded">
          <li><a href="#"><i class="socicon-instagram"></i></a></li>
        </ul>
      <div class="menu-copyright">&copy; 2019 <strong>LEWIS</strong>. All Rights Reserved.<br /> design by <strong>Logancee</strong></div>
    </div>
  </div>
</header>


<ul class="social social-fixed">
  <li><a href="#"><i class="socicon-instagram"></i></a></li>
</ul>


<div class="horizontal-nav">
    <div class="container">
        <ul id="menu">
          <li data-menuanchor="Home" class="active"></li>
          <li data-menuanchor="Services"></li>
          <li data-menuanchor="Projects"></li>
          <li data-menuanchor="Clients"></li>
          <li data-menuanchor="Contacts"></li>
        </ul>
    </div>
    <div class="horizontal-controls">
        <button class="a-pp-prev">prev</button>
        <span class="divider">|</span>
        <button class="a-pp-next">next</button>
    </div>
</div>

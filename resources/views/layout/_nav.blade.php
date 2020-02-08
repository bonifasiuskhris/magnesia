<header id="header" class="header header-fixed">
  <div class="container-fluid clearfix">
    <div class="brand">
      <a href="#">
        <div class="brand-magnesia"></div>
      {{-- <div class="brand-magnesia"><img src="{{asset('assets/brand/logo-text.svg')}}" width="95px"  alt=""></div> --}}
        <div class="brand-text">Social Media<br /> Management</div>
      </a>
    </div>

    <button class="nav-toggle-btn da-nav-toggle">
      <div class="header-contact-divider">/</div>
      <div class="header-contact-item font-custom"><a href="mailto:hello.magnesia@gmail.com"  target="_blank" class="mail-link">hello.magnesia@gmail.com</a></div>
    </button>

    {{-- <button class="nav-toggle-btn a-nav-toggle">
      <span class="nav-toggle-title">Menu</span>
      <span class="nav-toggle nav-toggle-sm">
        <span class="stick stick-1"></span>
        <span class="stick stick-2"></span>
        <span class="stick stick-3"></span>
      </span>
    </button> --}}

    {{-- <div class="header-content d-none d-md-block">
      <div class="header-contacts"> --}}
        {{-- <div class="header-contact-item"><a href="tel:+6281211090020" class="phone-link">0812-1109-0020</a></div> --}}
        {{-- <div class="header-contact-divider">/</div>
        <div class="header-contact-item"><a href="mailto:hello.magnesia@gmail.com"  target="_blank" class="mail-link">hello.magnesia@gmail.com</a></div>
      </div>
    </div> --}}
  </div>

  <div class="hide-menu a-nav-toggle"></div>

  {{-- <div class="menu"> --}}
   
    {{-- <div class="menu-main" id="accordion"> --}}
      {{-- <ul> --}}
        {{-- <li><a data-text="Works" data-toggle="collapse" href="#menuWorks" role="button" aria-expanded="false" aria-controls="menuWorks">Works</a>
          <div class="collapse" id="menuWorks" data-parent="#accordion">
            <ul>
              <li><a href="work-grid.html" class="animsition-link" data-animsition-out-class="fade-out" data-text="Grid">Grid</a></li>
              <li><a href="work-masonry.html" class="animsition-link" data-animsition-out-class="fade-out" data-text="Masonry">Masonry</a></li>
              <li><a href="work-metro.html" class="animsition-link" data-animsition-out-class="fade-out" data-text="Metro">Metro</a></li>
            </ul>
          </div>
        </li> --}}
        {{-- <li><a href="" data-menuanchor="Service" class="animsition-link" data-animsition-out-class="fade-out" data-text="Home">Home</a></li>
        <li><a href="{{url('#Service')}}" class="animsition-link" data-animsition-out-class="fade-out" data-text="Services">Services</a></li>
        <li><a href="{{url('#Project')}}" class="animsition-link" data-animsition-out-class="fade-out" data-text="Project">Project</a></li>
        <li><a href="{{url('#Contact')}}" class="animsition-link" data-animsition-out-class="fade-out" data-text="Contact">Contact</a></li> --}}
      {{-- </ul> --}}
    {{-- </div> --}}

    {{-- <div class="menu-footer"> --}}
        {{-- <ul class="social social-rounded">
          <li><a href="https://instagram.com/magnesia" target="_blank"><i class="socicon-instagram"></i></a></li>
        </ul> --}}
      {{-- <div class="menu-copyright">&copy; 2020 <strong>PT Putra Tekno Asia</strong>. All Rights Reserved.<br /> </div> --}}
    {{-- </div> --}}
  </div>
</header>


<ul class="social social-fixed">
  <li><a href="https://instagram.com/magnesia" target="_blank"><i class="socicon-instagram"></i></a></li>
</ul>


<div class="horizontal-nav">
    <div class="container">
        <ul id="menu">
          <li data-menuanchor="Home" class="active"></li>
          <li data-menuanchor="Service"></li>
          <li data-menuanchor="Project"></li>
          <li data-menuanchor="Client"></li>
          <li data-menuanchor="Contact"></li>
        </ul>
    </div>
    <div class="horizontal-controls">
        <button class="a-pp-prev">prev</button>
        <span class="divider">|</span>
        <button class="a-pp-next">next</button>
    </div>
</div>

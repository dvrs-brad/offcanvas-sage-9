<div id="mySidenav" class="sidenav">
  <div>
    <?php
    the_custom_logo();
    if (!has_custom_logo()) {
      ?>
      <a class="navbar-brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
      <?php
    }
    ?>
  </div>
  <hr>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  @if (has_nav_menu('primary_navigation'))
    {!! wp_nav_menu($primarymenu) !!}
  @endif
  <div class="mt-5 text-center social-links">
    <h3 class="text-white">We Are Social</h3>
    <ul class="list-inline">
      <li class="list-inline-item">
        <a href="https://plus.google.com/+DavrosITLLCCumming">
          <span class="fa-layers dvrs-social-icons">
            <i class="fa fa-circle text-dvrs-link"></i>
            <i class="fab fa-google-plus-g fa-inverse" data-fa-transform="shrink-6 down-.25 left-1.25"></i>
          </span>
        </a>
      </li>
      <li class="list-inline-item">
        <a href="https://www.facebook.com/Davros-Web-Design-971819972936669">
          <span class="fa-layers dvrs-social-icons">
            <i class="fa fa-circle text-dvrs-link"></i>
            <i class="fab fa-facebook-f fa-inverse" data-fa-transform="shrink-3.5 down-1.6 right-1.25"></i>
          </span>
        </a>
      </li>
      <li class="list-inline-item">
        <a href="https://twitter.com/DavrosWebDesign">
          <span class="fa-layers dvrs-social-icons">
            <i class="fa fa-circle text-dvrs-link"></i>
            <i class="fab fa-twitter fa-inverse" data-fa-transform="shrink-6 down-.25 right-.25"></i>
          </span>
        </a>
      </li>
    </ul>
  </div>
</div>

<header class="banner">
  <nav class="navbar navbar-expand-md navbar-transparent">
    {{-- <div class="">
      <div class="row"> --}}
        {{-- <div class="col"> --}}
          <?php
          the_custom_logo();
          if (!has_custom_logo()) {
            ?>
            <a class="navbar-brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
            <?php
          }
          ?>
        {{-- </div>
        <div class="col-3"> --}}
          <button class="navbar-toggler hamburger hamburger--spring" type="button" data-target="#defaultNavbar" aria-controls="defaultNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="hamburger-box">
              {{-- <span class="hamburger-inner"></span> --}}
              <span class="mobile-menu navbar-toggler-icon" style="font-size:30px;cursor:pointer">&#9776;</span>
            </span>
          </button>
        {{-- </div>
      </div> --}}
      <div class="collapse navbar-collapse" id="defaultNavbar">
        <div class="d-flex flex-column ml-auto">
          @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu($primarymenu) !!}
          @endif
        </div>
      </div>
    </div>
  </nav>
</header>

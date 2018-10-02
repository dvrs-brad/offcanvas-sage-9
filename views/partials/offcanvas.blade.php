<div id="offcanvas" class="sidenav">
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
</div>

<header class="banner">
  <nav class="navbar navbar-expand-md navbar-transparent">
    <?php
    the_custom_logo();
    if (!has_custom_logo()) {
      ?>
      <a class="navbar-brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
      <?php
    }
    ?>
    <button class="navbar-toggler hamburger hamburger--spring" type="button" data-target="#defaultNavbar" aria-controls="defaultNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="hamburger-box">
        {{-- <span class="hamburger-inner"></span> --}}
        <span class="mobile-menu navbar-toggler-icon" style="font-size:30px;cursor:pointer">&#9776;</span>
      </span>
    </button>
    <div class="collapse navbar-collapse" id="defaultNavbar">
      <div class="d-flex flex-column ml-auto">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu($primarymenu) !!}
        @endif
      </div>
    </div>
  </nav>
</header>

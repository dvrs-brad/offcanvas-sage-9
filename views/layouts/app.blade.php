<!doctype html>
<html @php language_attributes() @endphp>
  @include('partials.head')
  <body @php body_class() @endphp>
  <?php if( get_field( 'gtm-body-code', 'options' ) ) : ?>
    {!!get_field('gtm-body-code', 'options')!!}
  <?php endif; ?>
    @php do_action('get_header') @endphp

    {{-- Add offcanvas header partial here --}}
    @include('partials.offcanvas')

    <div class="wrap" role="document">
      <div class="content">

        {{-- make sure the .main class wraps your content --}}
        <main class="main">
          @yield('content')
        </main>

        @if (App\display_sidebar())
          <aside class="sidebar">
            @include('partials.sidebar')
          </aside>
        @endif
      </div>
    </div>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>

<header id="header" class="banner">
  <nav class="navbar navbar-expand-md">
  <a class="navbar-brand" href="{{get_home_url()}}">
    {!! wp_get_attachment_image(get_field('page_logo','options'),'full', '', ['class' => 'style-svg']) !!}
  </a>
    <button id="navbar-toggler" class="navbar-toggler hamburger hamburger--collapse" type="button"
      data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="hamburger-box">
        <span class="hamburger-inner"></span>
      </span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">

      @php
      wp_nav_menu( array(
      'theme_location' => 'primary_navigation-2',
      'container_class' => 'navbar-nav' ) );
      @endphp

    </div>
  </nav>
</header>

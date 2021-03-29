<footer class="content-info">
  <div class="container">
    <div class="copyrighttext">
      <p>{!! get_field("copyright_footer",'options') !!}</p>
    </div>
    <div class="social-links">
      <p>{!! get_field("phonenumber",'options') !!}</p>
      <p>{!! get_field("email",'options') !!}</p>
    </div>
    <div class="menu"> @php
      wp_nav_menu( array(
      'theme_location' => 'footer_menu',
      'container_class' => 'navbar-nav' ) );
      @endphp</div>
  </div>
</footer>

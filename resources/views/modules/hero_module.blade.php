<div class="main-slider">
  <div class="swiper-container-main">
    <div class="swiper-wrapper">
     @foreach ($block->background_image_repeater as $slide)
     <div class="swiper-slide">
      @php
          echo wp_get_attachment_image($slide['background_image'], 'full')
      @endphp
      <div class="opacity-gradient"></div>
      <div class="inner-content container">
        <div class="tag-box">
          <div class="date">
            <div class="white-opacity-1"></div><p>{{ $slide['tag_one'] }}</p>
          </div>
          <div class="tag">
            <div class="white-opacity-2"></div><p>{{ $slide['tag_two'] }}</p>
          </div>
        </div>
        <div class="text-content">
          {!! $slide['textbox'] !!}
        </div>
      </div>
    </div>
     @endforeach
  </div>
  <div class="swiper-button-prev">
  </div>
  <div class="swiper-button-next">
  </div>
</div>
</div>
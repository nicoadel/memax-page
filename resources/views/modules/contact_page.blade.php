<div class="contactPage section container">
  <div class="titleContent">{!! $block->title !!}</div>
  <div class="row">
    <div class="imageText col-12 col-md-6">
      <div class="image">{!! wp_get_attachment_image($block->image,'full') !!}</div>
      <div class="textContent">{!! $block->textcontent !!}</div>
    </div>
    <div class="contactForm col-12 col-md-6">
      @php
      echo do_shortcode('[contact-form-7 id="81" title="Contact form 1"]')
      @endphp
    </div>
  </div>
</div>

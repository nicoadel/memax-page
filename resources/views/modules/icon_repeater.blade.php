<div class="iconRepeater container animate__fadeInDown">
  <div class="container-wrapper">
    @foreach ($block->repeater_module as $item)
    <div class="icon-box col-6 col-md-3">
      <div class="icon">{!! wp_get_attachment_image($item['icon_image']['id'],'full') !!}</div>
      <div class="text" data-aos="zoom-in"><p>{!! $item['text_below_icon'] !!}</p></div>
    </div>
    @endforeach
  </div>
</div>

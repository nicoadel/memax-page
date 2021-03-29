<div class="pictureBesideTextcontent container">
  <div class="row">
  <div class="col-3 image" data-aos="fade-right">{!! wp_get_attachment_image($block->picture, 'full') !!}</div>
    <div class="col-12 col-lg-5 textcontent">
    <div class="text">{!! $block->textcontent !!}</div>
    <div class="link"><a href="{{$block->pagelink['url']}}">{{$block->pagelink['title']}}</a></div>
    </div>
  </div>
</div>

@php
$id = get_the_ID();
$post = get_post($id);
$bilder_slider = get_field('bilder_slider', $id);
$textcontent = get_field('textcontent',$id);
$immo_icon = get_field('immo_icon',$id);
$immo_place = get_field('ortschaft',$id);
$immo_size = get_field('immobiliengroße',$id);
$preview_pic = get_field('preview_bild',$id);
$price = get_field('preis_in_euro',$id);
$zimmeranzahl = get_field('zimmeranzahl',$id);
$preview_text = get_field('preview_text',$id);
$text_repeater = get_field('textcontent_repeater', $id);


@endphp


<!doctype html>
<html {!! get_language_attributes() !!}>
@include('partials.head')

<body @php body_class() @endphp>
  @php do_action('get_header') @endphp
  @include('partials.header')
  <div class="container-fluid immocontent">
    <div class="title col-12">
      <h1>{!! $post->post_title !!}</h1>
    </div>
    <div class="imagerepeater">
      <div class="swiper-container-immo">
        <div class="swiper-wrapper">
          @foreach ($bilder_slider as $slide)
          <div class="swiper-slide">
            @php
            echo wp_get_attachment_image($slide['bild'], 'full')
            @endphp
          </div>
          @endforeach
        </div>
        <!-- Add Pagination -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
    </div>
    <div class="textcontent container">
      <div class="place">
        <div class="icon">{!! wp_get_attachment_image($immo_icon, 'full') !!}</div>
        <div class="icontext">
          <p>{!!$immo_place !!}</p>
        </div>
      </div>
      <div class="textcontent-inside">
        {!! $textcontent !!}
      </div>
      <div class="line-repeater">
        @if ($text_repeater)
        @foreach ($text_repeater as $textline)
        <div class="lineblock">
          <div class="title">
            <h3>{!! $textline['Title'] !!}</h3>
          </div>
          <div class="linecontent">
            @foreach ($textline['textcontent_inner_repeater'] as $line)
            <div class="line">
              <p>{!! $line['linecontent'] !!}</p>
            </div>
            @endforeach
          </div>
        </div>
        @endforeach
        @endif

      </div>
    </div>
  </div>

  @php do_action('get_footer') @endphp
  @include('partials.footer')
  @php wp_footer() @endphp
</body>

</html>

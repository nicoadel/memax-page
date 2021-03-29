<!doctype html>
<html {!! get_language_attributes() !!}>
@include('partials.head')

<body @php body_class() @endphp>
  @php do_action('get_header') @endphp
  @include('partials.header')
  @if(get_field('sticky_icons','options'))
  @php
  $icons = get_field('sticky_icons','options');
  @endphp
  <div class="social_icons">
    @foreach ($icons as $icon)
    <div class="icon">
      <a href="{!!$icon["icon_link"]!!}">
        {!! wp_get_attachment_image($icon["icon"],'full') !!}
      </a>
    </div>
    @endforeach
  </div>
  @endif
  @if ($page_builder)
  @foreach ($page_builder as $block)

  @if ($block->block_type == 'hero_module')
  @include('modules.hero_module')
  @elseif ($block->block_type == 'basic_text')
  @include('modules.basic_text')
  @elseif ($block->block_type == 'icon_repeater')
  @include('modules.icon_repeater')
  @elseif ($block->block_type == 'example_exposes')
  @include('modules.example_exposes')
  @elseif ($block->block_type == 'picture_beside_textcontent')
  @include('modules.picture_beside_textcontent')
  @elseif ($block->block_type == 'contact_page')
  @include('modules.contact_page')
  @elseif ($block->block_type == 'immobilien_page')
  @include('modules.immobilien_page')
  @elseif ($block->block_type == 'immobilien_page_relation_home')
  @include('modules.immobilien_relation')
  @elseif ($block->block_type == 'static_page')
  @include('modules.static_page')
  @endif
  @endforeach
  @endif
  @php do_action('get_footer') @endphp
  @include('partials.footer')
  @php wp_footer() @endphp
</body>

</html>

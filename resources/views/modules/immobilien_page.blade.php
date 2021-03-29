<div class="immobilien-page container">
  <div class="pagetitle">{!! $block->title !!}</div>
  <div class="row immos">
    @foreach ($block->immo_relations as $immo)
    @php
    $id = $immo->ID;
    $immo_icon = get_field('immo_icon',$id);
    $immo_place = get_field('ortschaft',$id);
    $immo_size = get_field('immobiliengroße',$id);
    $preview_pic = get_field('preview_bild',$id);
    $price = get_field('preis_in_euro',$id);
    $zimmeranzahl = get_field('zimmeranzahl',$id);
    $preview_text = get_field('preview_text',$id);
    @endphp
    <div class="immocard col-12 col-md-4">
      <div class="immocard-content">
        <a href="{!! $immo->guid !!}"></a>
        <div class="image">{!! wp_get_attachment_image($preview_pic, 'full') !!}</div>
        <div class="card-innertextcontent">
          <div class="place">
            <div class="placeicon">{!! wp_get_attachment_image($immo_icon, 'full') !!}</div>
            <div class="placetext">
              <p>{!! $immo_place !!}</p>
            </div>
          </div>
          <div class="card-title">
            <h3>{!! $immo->post_title !!}</h3>
          </div>
          <div class="card-text">{!! $preview_text !!}</div>
          <div class="additional-content">
            <div class="immo-size">
              <p>{!! $immo_size !!}</p>
            </div>
            <div class="zimmeranzahl">
              <p>{!! $zimmeranzahl !!} </p>
            </div>
            <div class="preis">
              <p>{!! $price !!}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

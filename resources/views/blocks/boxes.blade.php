{{--
  Title: Boxy
  Description: Boxy z tekstem
  Category: text
  Icon: admin-comments
  Keywords: boxy
  Mode: edit
  Align: left
  PostTypes: page
  SupportsAlign: left right
  SupportsMode: false
  SupportsMultiple: true
--}}

<div class="team__boxes">
  @foreach(get_field('boxes') as $item)
    <div class="team__box">
      <h3 class="title title--smedium">
        {!! $item['title'] !!}
      </h3>
      <div class="text text--small">
        {!! $item['desc'] !!}
      </div>
    </div>
  @endforeach
</div>
{{--
  Title: Cennik
  Description: Tabelka z cennikiem
  Category: text
  Icon: admin-comments
  Keywords: prices
  Mode: edit
  Align: left
  PostTypes: page
  SupportsAlign: left right
  SupportsMode: false
  SupportsMultiple: true
--}}

<div class="prices__table">
  @include("components.prices-table")
</div>
<div class="prices__list">
  @include("components.prices-list")
</div>
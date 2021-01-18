<table class="prices-table text text--small">
  <thead>
    <tr>
      <th class="title">
        {{ get_option_field('prices_title') }}
      </th>
      <th>
        <span class="title title--smedium">
          {{ get_option_field('ptitle1') }}
        </span>
        <p class="text text--small prices-table__desc">
          {!! get_option_field('pdesc1') !!}
        </p>
      </th>
      <th>
        <span class="title title--smedium">
          {{ get_option_field('ptitle2') }}
        </span>
        <p class="text text--small prices-table__desc">
          {!! get_option_field('pdesc2') !!}
        </p>
      </th>
      <th>
        <span class="title title--smedium">
          {{ get_option_field('ptitle3') }}
        </span>
        <p class="text text--small prices-table__desc">
          {!! get_option_field('pdesc3') !!}
        </p>
      </th>
    </tr>
  </thead>
  <tbody>
    @foreach(get_option_field('prices_body') as $item)
      <tr>
        <td class="prices-table__options">
          {{ $item['title'] }}
        </td>
        <td>
          {{ $item['option1'] }}
        </td>
        <td>
          {{ $item['option2'] }}
        </td>
        <td>
          {{ $item['option3'] }}
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
<div class="lot" data-id="lot-{{ $lot_id }}" data-status="{{ $status }}" data-style="{{ $style }}">
  <a href="#" class="close-lot">x</a>
  <table>
    <tr>
      <th colspan="3">{{ $title }}</th>
    </tr>
    @if ($style)
      <tr class="style">
        <td colspan="1" class="attribute">Style</td>
        <td colspan="2">{{ $style }}</td>
      </tr>
    @endif
    <tr class="status">
      <td colspan="1" class="attribute">Status</td>
      <td colspan="2">{{ $status }}</td>
    </tr>
    @if ($builder)
      <tr class="builder">
        <td colspan="1" class="attribute">Builder</td>
        <td colspan="2">{{ $builder }}</td>
      </tr>
    @endif
    <tr>
      <td colspan="3" class="thumb">
        <div style="background-image:url({{ $featured_image_url }});"></div>
      </td>
    </tr>
  </table>
</div>
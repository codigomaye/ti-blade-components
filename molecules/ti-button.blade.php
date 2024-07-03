@props([
    'text' => null,
    'icon' => null,
    'icon_size' => [30, 30],
    'url' => null,
    'variant' => null,
])

<a href="{{ $url }}" @class([
    'ti-button',
    'ti-button--success',
    'ti-button--big' => $variant == 'big',
])>
    @unless (empty($icon))
        <span class="d-inline-block me-2 bg-transparent"
            style="width: $icon[0]px; height: $icon[1]px">{!! $icon !!}</span>
    @endunless
    {{ $text }}
</a>

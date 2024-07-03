@props([
    'title' => null,
    'subtitle' => null,
    'variant' => null,
    'url' => null,
    'url_text' => null,
])

<div @class([
    'ti-card',
    'ti-card--light',
    'ti-card--auto-size' => $variant,
])>
    <div class="ti-card__body">
        <x-atoms.ti-h3-card title="{{ $title }}" />
        <x-atoms.ti-subtitle-card subtitle="{{ $subtitle }}" />
            <x-molecules.ti-button :text="$url_text" :url="$url" />
    </div>
</div>

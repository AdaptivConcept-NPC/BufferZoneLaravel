@props(['class' => '', 'color' => '#D31111', 'style' => ''])

<svg
  viewBox="0 0 168 32"
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  style="display: block; width: 160px; height: 30px; overflow: visible; flex-shrink: 0; {{ $style }}"
  class="{{ $class }}"
>
  <polyline
    points="0,18 14,18 17,12 20,24 23,18 40,18 43,7 46,25 49,18 66,18 69,1 72,28 75,18 92,18 95,5 98,26 101,18 118,18 121,10 124,23 127,18 168,18"
    fill="none"
    stroke="{{ $color }}"
    stroke-width="2"
    stroke-linecap="round"
    stroke-linejoin="round"
  />
</svg>

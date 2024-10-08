@props(['employer', 'width' => 90])
<img src="{{ asset($employer->logo) }}" class="rounded-xl" alt="company_img" width="{{ $width }}">

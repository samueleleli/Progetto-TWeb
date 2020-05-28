@php
        if (empty($imgFile)) {
            $imgFile = 'img_non_disponibile.jpg';
        }

@endphp
<img src="{{ asset('images/products/' . $imgFile) }}" alt="">
@php
if($type ==='shops'){
    $path = 'storage/shops/';
}
if($type ==='shops'){
    $path = 'storage/products/';
}

@endphp

<div>
    @if(empty($filename))
        <img src="{{ asset('images/no_image.jpg')}}">
    @else
        <img src="{{assert($path . $filename)}}"
    @endif
</div>

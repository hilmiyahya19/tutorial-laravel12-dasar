@props(['active' => ''])

<a {{ $attributes }}>{{ $slot }} {{ $active }}</a>

@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block'
            : 'hidden';
@endphp




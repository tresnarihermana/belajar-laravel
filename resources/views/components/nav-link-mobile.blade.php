@props(['active' => false])
<a {{ $attributes }} class="{{
    $active ? 'block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white' : 'block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white'
}}" aria-current="page">{{ $slot }}</a>
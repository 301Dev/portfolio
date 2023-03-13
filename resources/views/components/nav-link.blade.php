@props(['active'])

@php
$classes = ($active ?? false)
            ? 'group flex justify-start items-end relative text-lg font-semibold'
            : 'group flex justify-start items-end text-glight relative text-lg font-normal';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    <span class="text-yellow-400">#</span>
    {{ $slot }}
    <span class="absolute -right-4 bottom-0 text-yellow-300 animate-pulse hidden group-hover:block transition-all duration-1.5">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
            <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" /></svg>
    </span>
</a>

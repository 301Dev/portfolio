@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'group flex justify-start items-end relative text-3xl font-normal font-semibold'
                : 'group flex justify-start items-end text-glight relative text-3xl font-normal font-normal';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    <span class="text-yellow-400">#</span>
    {{ $slot }}
    <span class="absolute -right-6 -bottom-1 text-yellow-300 animate-pulse hidden group-hover:block transition-all duration-1.5 w-6">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-full">
            <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" /></svg>
    </span>
</a>

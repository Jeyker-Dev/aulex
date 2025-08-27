@props(['href' => ''])

<a href="{{ $href }}" {{ $attributes->merge(['class' => 'px-6 py-3 rounded-md text-white bg-blue-500 hover:bg-blue-600 transition ease-in-out']) }}>
    {{ $slot }}
</a>

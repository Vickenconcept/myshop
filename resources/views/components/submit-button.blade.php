@props(['rounded' => 'md'])
<button
    {{ $attributes->merge(['type' => 'submit', 'class' => "inline-flex items-center px-4 py-2 bg-blue-500 border border-blue-500 uppercase rounded-$rounded font-medium text-sm text-white tracking-widest shadow-sm hover:bg-blue-600 focus:outline-none disabled:opacity-25 transition ease-in-out duration-150"]) }}>
    {{ $slot }}
</button>

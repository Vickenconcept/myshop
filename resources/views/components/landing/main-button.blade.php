<button {{ $attributes->merge(['class' => 'bg-black text-white py-3 px-10 hover:border-[0.6px] hover:border-black hover:bg-transparent hover:text-black transition-transform duration-400 transform hover:-translate-y-1']) }}>
    {{ $slot }}
</button>

<a
    {{
        $attributes->merge([
            'class' => 'btn rounded-lg px-5 py-4 font-bold text-white transition duration-200 hover:drop-shadow-md
                            ring-transparent focus:ring-transparent',
            'style' => '--tw-ring-color: #ff0000;',
        ])
    }}
>
    {{ $slot }}
</a>

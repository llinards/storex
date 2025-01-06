<a {{ $attributes }} style="--tw-ring-color: #ff0000">
    <button
        {{
            $attributes->merge([
                'class' => 'btn rounded-lg px-5 py-3 font-bold text-white transition duration-200 hover:drop-shadow-md
                                                                                                                                            ring-transparent focus:ring-transparent',
                'style' => '--tw-ring-color: #ff0000;',
            ])
        }}
    >
        {{ $slot }}
    </button>
</a>

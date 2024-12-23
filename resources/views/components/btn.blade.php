<a {{ $attributes }}>
    <button
        {{
            $attributes->merge([
                'class' => 'btn rounded-lg px-5 py-3 font-bold text-white transition duration-200 hover:drop-shadow-md',
            ])
        }}
    >
        {{ $slot }}
    </button>
</a>

@props(['type' => 'link'])

@if ($type === 'button')
<button {{ $attributes->merge([
    'type' => 'submit',
    'class' => 'btn rounded-lg px-4 py-2 text-white transition duration-200 hover:drop-shadow-md
    ring-transparent focus:ring-transparent',
    'style' => '--tw-ring-color: #ff0000;',
    ])
    }}
    >
    {{ $slot }}
</button>
@else
<a {{ $attributes->merge([
    'class' => 'btn rounded-lg px-4 py-2 text-white transition duration-200 hover:drop-shadow-md
    ring-transparent focus:ring-transparent',
    'style' => '--tw-ring-color: #ff0000;',
    ])
    }}
    >
    {{ $slot }}
</a>
@endif
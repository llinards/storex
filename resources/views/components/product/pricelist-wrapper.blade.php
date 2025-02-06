<div {{ $attributes->merge(['class' => 'relative overflow-x-auto custom-scrollbar']) }}>
    <table class="w-full text-left rtl:text-right">
        <thead>
        <tr class="border-y-1 border-storex-inactive-grey text-center">
            <th class="text-left">@lang('Modelis')</th>
            @isset($length)
                <th>@lang('Garums') (m)</th>
            @endisset
            @isset($width)
                <th>@lang('Platums') (m)</th>
            @endisset
            @isset($height)
                <th>@lang('Augstums') (m)</th>
            @endisset
            @isset($space_between_arches)
                <th>@lang('Attālums starp arkām') (m)</th>
            @endisset
            @isset($gate_size)
                <th>@lang('Vārtu izmērs PxA') (m)</th>
            @endisset
            @isset($area)
                <th>@lang('Platība') (m<sup>2</sup>)</th>
            @endisset
            @isset($pvc_tent)
                <th>@lang('PVC materiāls') (g/m<sup>2</sup>)</th>
            @endisset
            @isset($frame_tube)
                <th>@lang('Rāmja caurule')</th>
            @endisset
            @isset($attachment)
                <th>@lang('Tehniskais rasējums')</th>
            @endisset
            <th class="text-storex-red">@lang('Cena bez PVN')</th>
        </tr>
        </thead>
        <tbody>
        <tr class="border-b-1 border-storex-grey text-center">
            <td class="text-left text-storex-red">{{ $title }}</td>
            @isset($length)
                <td>{{ $length }}</td>
            @endisset
            @isset($width)
                <td>{{ $width }}</td>
            @endisset
            @isset($height)
                <td>{{ $height }}</td>
            @endisset
            @isset($space_between_arches)
                <td class="space-between-arches">{{ $space_between_arches }}</td>
            @endisset
            @isset($gate_size)
                <td>{{ $gate_size }}</td>
            @endisset
            @isset($area)
                <td>{{ $area }}</td>
            @endisset
            @isset($pvc_tent)
                <td>{{ $pvc_tent }}</td>
            @endisset
            @isset($frame_tube)
                <td>{{ $frame_tube }}</td>
            @endisset
            @isset($attachment)
                <td>
                    <a
                        target="_blank"
                        class="flex font-bold transition duration-200 hover:text-storex-red"
                        href="{{ asset('storage/attachments/' . $attachment) }}"
                    >
                        <svg
                            class="text-grey mr-2 h-6 w-6"
                            aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            fill="none"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M4 15v2a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3v-2m-8 1V4m0 12-4-4m4 4 4-4"
                            />
                        </svg>
                        @lang('Lejupielādēt')
                    </a>
                </td>
            @endisset
            <td>{{ $price }}</td>
        </tr>
        </tbody>
    </table>
</div>

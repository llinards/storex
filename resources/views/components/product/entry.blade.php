<tr class="border-b-1 border-storex-grey text-center">
    <td class="text-left text-storex-red">{{ $title }}</td>
    <td>{{ $length }}</td>
    <td>{{ $width }}</td>
    <td>{{ $height }}</td>
    <td class="space-between-arches">{{ $space_between_arches }}</td>
    <td>{{ $gate_size }}</td>
    <td>{{ $area }}</td>
    <td class="pvc-tent">{{ $pvc_tent }}</td>
    <td class="frame-tube">{{ $frame_tube }}</td>
    <td class="attachment">
        <a class="flex font-bold transition duration-200 hover:text-storex-red" href="{{ $attachment }}">
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
    <td>{{ $price }}</td>
</tr>

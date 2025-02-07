<div {{ $attributes->merge(['class' => 'relative overflow-x-auto custom-scrollbar']) }}>
    <table class="w-full text-left rtl:text-right">
        <thead>
        <tr class="border-y-1 border-storex-inactive-grey text-center">
            <th class="text-left">@lang('Modelis')</th>
            <th class="length">
                @lang('Garums') (m)
            </th>
            <th class="width">
                @lang('Platums')
                (m)
            </th>
            <th class="height">
                @lang('Augstums')
                (m)
            </th>
            <th class="space-between-arches">
                @lang('Attālums starp arkām')
                (m)
            </th>
            <th class="gate-size">
                @lang('Vārtu izmērs PxA')
                (m)
            </th>
            <th class="area ">
                @lang('Platība')
                (m<sup>2</sup>)
            </th>
            <th class="pvc-tent">
                @lang('PVC materiāls')
                (g/m<sup>2</sup>)
            </th>
            <th class="frame-tube">@lang('Rāmja caurule')</th>
            <th class="attachment">@lang('Tehniskais rasējums')</th>
            <th class="text-storex-red">@lang('Cena bez PVN')</th>
        </tr>
        </thead>
        <tbody>
        {{ $slot }}
        </tbody>
    </table>
</div>

<div {{ $attributes->merge(['class' => 'relative overflow-x-auto custom-scrollbar']) }}>
    <table class="w-full text-left rtl:text-right">
        <thead>
            <tr class="border-y-1 border-storex-inactive-grey text-center">
                <th class="text-left">@lang('Modelis')</th>
                <th>@lang('Garums, m')</th>
                <th>@lang('Platums, m')</th>
                <th>@lang('Augstums, m')</th>
                <th>@lang('Attālums starp arkām, m')</th>
                <th>@lang('Vārtu izmērs PxA, m')</th>
                <th>@lang('Laukums, m2')</th>
                <th>@lang('PVC materiāls g/m2')</th>
                <th>@lang('Tehniskais rasējums')</th>
                <th class="text-storex-red">@lang('Cena bez PVN')</th>
            </tr>
        </thead>
        <tbody>
            {{ $slot }}
        </tbody>
    </table>
</div>

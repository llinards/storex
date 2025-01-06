<table class="hidden w-full lg:table">
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
        <x-product.entry>
            <x-slot name="productName">NORDA 55</x-slot>
            <x-slot name="productLength">10</x-slot>
            <x-slot name="productWidth">5,5</x-slot>
            <x-slot name="productHeight">5,3</x-slot>
            <x-slot name="productArchDistance">2</x-slot>
            <x-slot name="productGateDimension">3,4* x 4,1</x-slot>
            <x-slot name="productArea">55</x-slot>
            <x-slot name="productPvc">650</x-slot>
            <x-slot name="productBlueprint">product/1</x-slot>
            <x-slot name="productPrice">3100€</x-slot>
        </x-product.entry>

        <x-product.entry>
            <x-slot name="productName">NORDA 110</x-slot>
            <x-slot name="productLength">20</x-slot>
            <x-slot name="productWidth">5,5</x-slot>
            <x-slot name="productHeight">5,3</x-slot>
            <x-slot name="productArchDistance">2</x-slot>
            <x-slot name="productGateDimension">3,4* x 4,1</x-slot>
            <x-slot name="productArea">110</x-slot>
            <x-slot name="productPvc">650</x-slot>
            <x-slot name="productBlueprint">product/2</x-slot>
            <x-slot name="productPrice">6200€</x-slot>
        </x-product.entry>
    </tbody>
</table>

<table class="w-full text-left lg:hidden">
    <tr class="border-b-1 border-storex-grey">
        <th>@lang('Modelis')</th>
        <td class="text-storex-red">NORDA 55</td>
        <td class="text-storex-red">NORDA 110</td>
    </tr>
    <tr class="border-b-1 border-storex-grey">
        <th class="text-storex-red">@lang('Cena bez PVN')</th>
        <td>3100€</td>
        <td>6200€</td>
    </tr>
    <tr class="border-b-1 border-storex-grey">
        <th>@lang('Garums, m')</th>
        <td>10</td>
        <td>20</td>
    </tr>
    <tr class="border-b-1 border-storex-grey">
        <th>@lang('Platums, m')</th>
        <td>5,5</td>
        <td>5,5</td>
    </tr>
    <tr class="border-b-1 border-storex-grey">
        <th>@lang('Augstums, m')</th>
        <td>5,3</td>
        <td>5,3</td>
    </tr>
    <tr class="border-b-1 border-storex-grey">
        <th>@lang('Attālums starp arkām, m')</th>
        <td>2</td>
        <td>2</td>
    </tr>
    <tr class="border-b-1 border-storex-grey">
        <th>@lang('Vārtu izmērs PxA, m')</th>
        <td>3,4* x 4,1</td>
        <td>3,4* x 4,1</td>
    </tr>
    <tr class="border-b-1 border-storex-grey">
        <th>@lang('Laukums, m2')</th>
        <td>55</td>
        <td>110</td>
    </tr>
    <tr class="border-b-1 border-storex-grey">
        <th>@lang('PVC materiālsg/m2')</th>
        <td>650</td>
        <td>650</td>
    </tr>
    <tr class="border-b-1 border-storex-grey">
        <th>@lang('Tehniskais rasējums')</th>
        <td>
            <x-product.download href="#"></x-product.download>
        </td>
        <td>
            <x-product.download href="#"></x-product.download>
        </td>
    </tr>
</table>

<x-product.pricelist-wrapper class="hidden lg:table">
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
</x-product.pricelist-wrapper>

<table class="w-full text-left lg:hidden">
    <tr class="border-b-1 border-storex-grey">
        <th>@lang('Modelis')</th>
        <x-slot name="productName">NORDA 55</x-slot>
        <x-slot name="productName">NORDA 110</x-slot>
    </tr>
    <tr class="border-b-1 border-storex-grey">
        <th class="text-storex-red">@lang('Cena bez PVN')</th>
        <x-slot name="productPrice">3100€</x-slot>
        <x-slot name="productPrice">6200€</x-slot>
    </tr>
    <tr class="border-b-1 border-storex-grey">
        <th>@lang('Garums, m')</th>
        <x-slot name="productLength">10</x-slot>
        <x-slot name="productLength">20</x-slot>
    </tr>
    <tr class="border-b-1 border-storex-grey">
        <th>@lang('Platums, m')</th>
        <x-slot name="productWidth">5,5</x-slot>
        <x-slot name="productWidth">5,5</x-slot>
    </tr>
    <tr class="border-b-1 border-storex-grey">
        <th>@lang('Augstums, m')</th>
        <x-slot name="productHeight">5,3</x-slot>
        <x-slot name="productHeight">5,3</x-slot>
    </tr>
    <tr class="border-b-1 border-storex-grey">
        <th>@lang('Attālums starp arkām, m')</th>
        <x-slot name="productArchDistance">2</x-slot>
        <x-slot name="productArchDistance">2</x-slot>
    </tr>
    <tr class="border-b-1 border-storex-grey">
        <th>@lang('Vārtu izmērs PxA, m')</th>
        <x-slot name="productGateDimension">3,4* x 4,1</x-slot>
        <x-slot name="productGateDimension">3,4* x 4,1</x-slot>
    </tr>
    <tr class="border-b-1 border-storex-grey">
        <th>@lang('Laukums, m2')</th>
        <x-slot name="productArea">55</x-slot>
        <x-slot name="productArea">110</x-slot>
    </tr>
    <tr class="border-b-1 border-storex-grey">
        <th>@lang('PVC materiālsg/m2')</th>
        <x-slot name="productPvc">650</x-slot>
        <x-slot name="productPvc">650</x-slot>
    </tr>
    <tr class="border-b-1 border-storex-grey">
        <th>@lang('Tehniskais rasējums')</th>
        <td>
            <x-slot name="productBlueprint">product/1</x-slot>
        </td>
        <td>
            <x-slot name="productBlueprint">product/2</x-slot>
        </td>
    </tr>
</table>

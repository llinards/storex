<x-layout.app>
    <div class="container mx-auto px-4 sm:py-12 lg:px-6 xl:px-8">
        <div class="pt-28 sm:pt-0">
            <h1 class="leading-none">@lang('Par STOREX')</h1>
        </div>
    </div>
    <div class="container sm:mx-auto">
        <div class="lg:px-6 xl:px-8">
            <x-why-choose-us.owners></x-why-choose-us.owners>
        </div>
    </div>

    <div class="container mx-auto px-4 lg:px-6 xl:px-8">
        <div class="py-8 sm:py-12">
            <div class="grid items-center lg:grid-cols-2 lg:gap-20">
                <img
                    class="order-2 pt-4 lg:order-1 lg:pt-0"
                    src="{{ asset('images/storex-facilities.jpg') }}"
                    alt="Storex Owners"
                    class="max-h-full"
                />
                <div class="order-1 lg:order-2">
                    <h2 class="pb-2 text-center sm:text-left">
                        @lang('Gandrīz 10 gadi tirgū!')
                    </h2>
                    <p class="py-2">
                        @lang('Mūsu galvenais mērķis ir apmierināts un laimīgs klients,
                        iegādājoties labu tenta angāru par pievilcīgu cenu, kas kalpos ļoti
                        ilgi. Mēs saviem klientiem piedāvājam ļoti labas kvalitātes tenta
                        angārus.')
                    </p>
                    <p class="py-2">
                        @lang('Mūsu uzņēmums UAB STOREX STRUCTURES LIETUVA
                        darbojas jau vairāk nekā 7 gadus, un pa to laiku mēs esam uzcēluši
                        1000 angārus Lietuvā un citās ES valstīs. Mums uzticas Somijas,
                        Latvijas, Polijas klienti, iespējams, tāpēc, ka mēs varam piedāvāt
                        vislabāko cenas un kvalitātes attiecību. Mūsu produkti ir sertificēti
                        un atbilst ES prasībām.')
                    </p>
                    <p class="pb-4 pt-2">
                        @lang('Angāri ir aprīkoti ar augstas kvalitātes tentu,
                        kas ir lieliski piemērots dažādiem laikapstākļiem. Tos ir ļoti viegli
                        uzstādīt un pēc tam izjaukt, kā arī nomaksas iespējas ir ļoti plašas.
                        Mēs arī piedāvājam konsultācijas jebkādu neskaidrību gadījumā.
                        Mēs uzklausām klienta vajadzības un iesakām tikai to, kas viņam ir
                        visnoderīgākais.')
                    </p>
                </div>
            </div>
        </div>
        <div class="pb-8 sm:pb-12">
            <div class="grid items-center lg:grid-cols-2 lg:gap-20">
                <img
                    class="order-2 pt-4 lg:pt-0"
                    src="{{ asset('images/storex-facilities.jpg') }}"
                    alt="Storex Owners"
                    class="max-h-full"
                />
                <div class="order-1">
                    <h2 class="pb-2 text-center sm:text-left">
                        @lang('Kādiem nolūkiem tiek izmantoti tenta
                        angāri?')
                    </h2>
                    <p class="pb-4 pt-2">
                        @lang('Vairāk nekā 700 uzņēmumi un privātpersonas izmanto mūsu tenta
                        angārus visdažādākajiem pielietojumiemm: uzglabāšanai, dzīvnieku
                        un putnu turēšanai, dārzeņu audzēšanai. Tiem ir vienkārša
                        konstrukcija, kuru vajadzības gadījumā var izjaukt, padarot to par
                        perfektu risinājumu gan nepārtrauktai uzglabāšanai, gan sezonālai
                        lietošanai.')
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white py-8 sm:py-12">
        <div class="container px-4 sm:mx-auto lg:px-6 xl:px-8">
            <x-reviews.wrapper></x-reviews.wrapper>
        </div>
    </div>
</x-layout.app>

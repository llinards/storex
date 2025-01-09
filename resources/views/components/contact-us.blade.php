<div id="contact-us" class="gap-10 lg:grid lg:grid-cols-2">
    <div class="grid grid-cols-1 content-center lg:px-16">
        <div class="pb-4">
            <p class="text-storex-inactive-grey">@lang('Nepieciešama papildus informācija?')</p>
            <h2>@lang('Sazinies ar mums!')</h2>
        </div>
        <div class="pb-4 lg:pb-0">
            <p>
                @lang('Aizpildi visus nepieciešamos laukus un STOREX speciālists ar Jums
                sazināsies pēc iespējas ātrāk!')
            </p>
        </div>
    </div>

    <div class="lg:px-16">
        <form action="" class="flex flex-col">
            <label for="email">
                <span class="text-storex-red">*</span>
                @lang('E-pasts')
            </label>
            <input
                class="rounded-lg border-2 border-storex-outline-grey transition-all duration-200 focus:border-storex-red focus:ring-storex-red"
                id="email"
                type="email"
                required
            />

            <label class="pt-4" for="tel">
                <span class="text-storex-red">*</span>
                @lang('Telefona nummurs')
            </label>
            <input
                class="rounded-lg border-2 border-storex-outline-grey transition-all duration-200 focus:border-storex-red focus:ring-storex-red"
                id="tel"
                type="tel"
                required
            />

            <label class="pt-4" for="fullname">
                <span class="text-storex-red">*</span>
                @lang('Vārds, Uzvārds')
            </label>
            <input
                class="rounded-lg border-2 border-storex-outline-grey transition-all duration-200 focus:border-storex-red focus:ring-storex-red"
                id="fullname"
                type="text"
                required
            />

            <label class="pt-4" for="message">@lang('Jūsu ziņa')</label>
            <textarea
                name=""
                class="rounded-lg border-2 border-storex-outline-grey transition-all duration-200 focus:border-storex-red focus:ring-storex-red"
                id="message"
                cols="20"
                rows="6"
            ></textarea>

            <div class="mt-8 border-t-2 border-storex-grey pt-8">
                <x-btn :type="'button'" class="w-full">@lang('Nosūtīt')</x-btn>
            </div>
        </form>
    </div>
</div>

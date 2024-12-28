<div class="gap-10 lg:grid lg:grid-cols-2">
    <div class="grid grid-cols-1 content-center">
        <p class="text-storex-inactive-grey">@lang('Nepieciešama papildus informācija?')</p>
        <h2>@lang('Sazinies ar mums!')</h2>
        <p>
            @lang('Aizpildi visus nepieciešamos laukus un STOREX speciālists ar Jums
            sazināsies pēc iespējas ātrāk!')
        </p>
    </div>

    <div>
        <form action="" class="flex flex-col">
            <label for="email">@lang('E-pasts')</label>
            <input
                class="rounded-lg border-2 border-storex-outline-grey transition-all duration-200 focus:border-storex-red focus:ring-storex-red"
                id="email"
                type="email"
                required
            />

            <label class="pt-4" for="tel">@lang('Telefona nummurs')</label>
            <input
                class="rounded-lg border-2 border-storex-outline-grey transition-all duration-200 focus:border-storex-red focus:ring-storex-red"
                id="tel"
                type="tel"
                required
            />

            <label class="pt-4" for="fullname">@lang('Vārds, Uzvārds')</label>
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
                cols="30"
                rows="10"
            ></textarea>

            <x-btn type="submit" class="w-full pt-4">@lang('Nosūtīt')</x-btn>
        </form>
    </div>
</div>

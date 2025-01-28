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

    <div id="contact-us-form" class="lg:px-16">
        <x-admin.status-message/>
        <form action="{{route('contact-us')}}" method="POST" class="flex flex-col mt-2">
            @csrf
            @method('POST')
            <label for="email">
                <span class="text-storex-red">*</span>
                @lang('E-pasts')
            </label>
            <input
                class="rounded-lg border-2 border-storex-outline-grey transition-all duration-200 focus:border-storex-red focus:ring-storex-red"
                id="email"
                name="email"
                type="email"
                value="{{ old('email') }}"
            />
            <x-input-error field="email"/>
            <label class="pt-4" for="phone">
                <span class="text-storex-red">*</span>
                @lang('Telefona nummurs')
            </label>
            <input
                class="rounded-lg border-2 border-storex-outline-grey transition-all duration-200 focus:border-storex-red focus:ring-storex-red"
                id="phone"
                name="phone"
                type="tel"
                value="{{ old('phone') }}"
            />
            <x-input-error field="phone"/>

            <label class="pt-4" for="fullname">
                <span class="text-storex-red">*</span>
                @lang('Vārds, Uzvārds')
            </label>
            <input
                class="rounded-lg border-2 border-storex-outline-grey transition-all duration-200 focus:border-storex-red focus:ring-storex-red"
                id="fullname"
                name="fullname"
                type="text"
                value="{{ old('fullname') }}"
            />
            <x-input-error field="fullname"/>

            <label class="pt-4" for="company">
                @lang('Uzņēmums')
            </label>
            <input
                class="rounded-lg border-2 border-storex-outline-grey transition-all duration-200 focus:border-storex-red focus:ring-storex-red"
                id="company"
                name="company"
                type="text"
                value="{{ old('company') }}"
            />

            <label class="pt-4" for="message">@lang('Jūsu ziņa')</label>
            <textarea
                name="message"
                class="rounded-lg border-2 border-storex-outline-grey transition-all duration-200 focus:border-storex-red focus:ring-storex-red"
                id="message"
                cols="20"
                rows="6"
            >{{old('message')}}</textarea>

            <div class="pt-4">
                <input
                    class="input-radio"
                    type="checkbox"
                    id="agrees-for-data-processing"
                    name="agrees-for-data-processing"

                />
                <label for="agrees-for-data-processing"
                       class="input-radio-label">@lang('Piekrītu, ka mani iesniegtie dati tiek apstrādāti un uzglabāti.')</label>
            </div>
            <x-input-error field="agrees-for-data-processing"/>

            <div class="mt-8 border-t-2 border-storex-grey pt-8">
                <x-btn :type="'button'" id="submit" class="invisible w-full">@lang('Nosūtīt')</x-btn>
            </div>
        </form>
    </div>
    <script>
        let isConsentToProcessData = false;
        const consentToProcessDataCheckbox = document.getElementById('agrees-for-data-processing');
        const submitBtn = document.getElementById('submit');
        consentToProcessDataCheckbox.checked = false;

        submitBtn.addEventListener('click', () => {
            submitBtn.classList.add('invisible');
        });

        consentToProcessDataCheckbox.addEventListener('change', (e) => {
            isConsentToProcessData = e.srcElement.checked;
            isConsentToProcessData ? submitBtn.classList.remove('invisible') : submitBtn.classList.add('invisible');
        });
    </script>
</div>


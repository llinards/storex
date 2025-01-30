<form class="mx-auto" role="form" aria-labelledby="newsletter-heading">
    <h5 id="newsletter-heading" class="uppercase">@lang('Jaunumi')</h5>

    <div class="mb-5">
        <label for="email" class="mb-2 block text-white">
            @lang('Saņem ziņas par aktualitātēm savā e-pastā')
        </label>
        <input type="email" id="email"
            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-storex-grey focus:ring-2 focus:ring-storex-red"
            placeholder="E-mail" required aria-required="true" aria-describedby="email-description" />
        <p id="email-description" class="sr-only">
            @lang('Lūdzu, ievadiet savu e-pasta adresi, lai saņemtu jaunumu paziņojumus.')
        </p>
    </div>

    <button type="submit"
        class="w-full rounded-lg bg-storex-red px-5 py-2.5 text-center font-medium text-white hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-storex-red sm:w-full">
        @lang('Saņemt jaunumus')
    </button>
</form>
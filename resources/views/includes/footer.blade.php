<footer class="bg-storex-grey">
    <div class="container mx-auto px-4 lg:px-6 xl:px-8">
        <div class="border-b-1 border-white">
            <a href="/" class="flex items-center">
                <img src="{{ asset('images/storex-logo-white.png') }}" class="w-32 py-4 sm:w-48 md:py-8"
                     alt="Storex Logo"/>
            </a>
            <div
                class="flex flex-col py-4 md:grid md:grid-cols-2 md:gap-12 md:pb-8 md:pt-4 lg:flex-none lg:grid-cols-3 lg:gap-20">
                <div class="order-1 md:order-none">
                    <h5 class="md:pb-3">@lang('Mūsu prioritāte ir apmierināts klients!')</h5>
                    <p class="py-2 leading-none">
                        @lang('Pirms angāra iegādes Jums ir iespēja to apskatīt reālajā vidē – mēs nodrošināsim Jūsu reģionā esošo klientu kontaktus, lai varētu aplūkot uzstādītos angārus un pārliecināties par to kvalitāti. Mēs ticam, ka arī Jūs pēc savas pieredzes, būsiet gatavi palīdzēt citiem interesentiem ar savu atsauksmi un pirkuma demonstrāciju.')
                    </p>
                    <p class="py-2 leading-none">
                        @lang('Kopš 2019. gada mēs esam daļa no STOREX STRUCTURES grupas, kas garantē mūsu produktu augstos kvalitātes standartus un uzticamību.')
                    </p>
                </div>
                <div class="order-4 md:order-none">
                    <h5 class="ml-4 py-3 uppercase">@lang('Produkcija')</h5>
                    @if (! $categories->isEmpty())
                        @foreach ($categories as $category)
                            <x-footer-link href="{{ route('category.show', $category->slug) }}">
                                {{ $category->title }}
                            </x-footer-link>
                        @endforeach
                    @endif
                </div>
                {{--
                <div class="order-5 md:order-none">
                    <h5 class="ml-4 py-3 uppercase">Raksti</h5>
                    <x-footer-link href="#">@lang('Par tenta angāriem')</x-footer-link>
                    <x-footer-link href="#">@lang('Tenta angāri - noliktavas')</x-footer-link>
                    <x-footer-link href="#">@lang('Tenta angāri pasākumiem')</x-footer-link>
                    <x-footer-link href="#">@lang('Tenta angāri siena glabāšanai')</x-footer-link>
                    <x-footer-link href="#">@lang('Tenta angāri sporta pasākumiem')</x-footer-link>
                    <x-footer-link href="#">@lang('Tenta paviljoni')</x-footer-link>
                    <x-footer-link href="#">@lang('Tenta vārti')</x-footer-link>
                </div>
                --}}
                <div class="order-6 md:order-none">
                    <h5 class="ml-4 py-3 uppercase">Sadaļas</h5>
                    <x-footer-link href="{{ route('about') }}">@lang('Par mums')</x-footer-link>
                    <x-footer-link href="{{ route('contacts') }}">@lang('Kontakti')</x-footer-link>
                    {{-- <x-footer-link href="#">@lang('Galerija')</x-footer-link> --}}
                    <x-footer-link href="{{ route('faq') }}">@lang('BUJ')</x-footer-link>
                    <x-footer-link href="{{route('privacy-policy')}}">@lang('Privātuma politika')</x-footer-link>
                    {{-- <x-footer-link href="#">@lang('Noteikumi un nosacījumi')</x-footer-link> --}}
                </div>
                <div class="order-2 grid content-between md:order-none">
                    <ul class="py-2 md:py-0">
                        <li>
                            <a href="https://maps.app.goo.gl/E9EtPST5AXgxRduN8" class="flex items-center text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" class="icon mr-2"
                                     viewBox="0 0 256 256">
                                    <path
                                        d="M128,64a40,40,0,1,0,40,40A40,40,0,0,0,128,64Zm0,64a24,24,0,1,1,24-24A24,24,0,0,1,128,128Zm0-112a88.1,88.1,0,0,0-88,88c0,31.4,14.51,64.68,42,96.25a254.19,254.19,0,0,0,41.45,38.3,8,8,0,0,0,9.18,0A254.19,254.19,0,0,0,174,200.25c27.45-31.57,42-64.85,42-96.25A88.1,88.1,0,0,0,128,16Zm0,206c-16.53-13-72-60.75-72-118a72,72,0,0,1,144,0C200,161.23,144.53,209,128,222Z">
                                    </path>
                                </svg>
                                "Rožulejas", Plācis, Straupes pag.,
                                <br class="md:hidden"/>
                                Pārgaujas nov., LV-4152
                            </a>
                        </li>
                        <li>
                            <a href="tel:+37122338346" class="flex items-center text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" class="icon mr-2"
                                     viewBox="0 0 256 256">
                                    <path
                                        d="M222.37,158.46l-47.11-21.11-.13-.06a16,16,0,0,0-15.17,1.4,8.12,8.12,0,0,0-.75.56L134.87,160c-15.42-7.49-31.34-23.29-38.83-38.51l20.78-24.71c.2-.25.39-.5.57-.77a16,16,0,0,0,1.32-15.06l0-.12L97.54,33.64a16,16,0,0,0-16.62-9.52A56.26,56.26,0,0,0,32,80c0,79.4,64.6,144,144,144a56.26,56.26,0,0,0,55.88-48.92A16,16,0,0,0,222.37,158.46ZM176,208A128.14,128.14,0,0,1,48,80,40.2,40.2,0,0,1,82.87,40a.61.61,0,0,0,0,.12l21,47L83.2,111.86a6.13,6.13,0,0,0-.57.77,16,16,0,0,0-1,15.7c9.06,18.53,27.73,37.06,46.46,46.11a16,16,0,0,0,15.75-1.14,8.44,8.44,0,0,0,.74-.56L168.89,152l47,21.05h0s.08,0,.11,0A40.21,40.21,0,0,1,176,208Z">
                                    </path>
                                </svg>
                                +371 22338346
                            </a>
                        </li>
                        <li>
                            <a href="mailto:info@storex.lv" class="flex items-center text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" class="icon mr-2"
                                     viewBox="0 0 256 256">
                                    <path
                                        d="M224,48H32a8,8,0,0,0-8,8V192a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A8,8,0,0,0,224,48Zm-96,85.15L52.57,64H203.43ZM98.71,128,40,181.81V74.19Zm11.84,10.85,12,11.05a8,8,0,0,0,10.82,0l12-11.05,58,53.15H52.57ZM157.29,128,216,74.18V181.82Z">
                                    </path>
                                </svg>
                                info@storex.lv
                            </a>
                        </li>
                    </ul>
                    <div class="flex items-end py-2 md:py-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" class="icon mr-4"
                             viewBox="0 0 256 256">
                            <path
                                d="M164.44,121.34l-48-32A8,8,0,0,0,104,96v64a8,8,0,0,0,12.44,6.66l48-32a8,8,0,0,0,0-13.32ZM120,145.05V111l25.58,17ZM234.33,69.52a24,24,0,0,0-14.49-16.4C185.56,39.88,131,40,128,40s-57.56-.12-91.84,13.12a24,24,0,0,0-14.49,16.4C19.08,79.5,16,97.74,16,128s3.08,48.5,5.67,58.48a24,24,0,0,0,14.49,16.41C69,215.56,120.4,216,127.34,216h1.32c6.94,0,58.37-.44,91.18-13.11a24,24,0,0,0,14.49-16.41c2.59-10,5.67-28.22,5.67-58.48S236.92,79.5,234.33,69.52Zm-15.49,113a8,8,0,0,1-4.77,5.49c-31.65,12.22-85.48,12-86,12H128c-.54,0-54.33.2-86-12a8,8,0,0,1-4.77-5.49C34.8,173.39,32,156.57,32,128s2.8-45.39,5.16-54.47A8,8,0,0,1,41.93,68c30.52-11.79,81.66-12,85.85-12h.27c.54,0,54.38-.18,86,12a8,8,0,0,1,4.77,5.49C221.2,82.61,224,99.43,224,128S221.2,173.39,218.84,182.47Z">
                            </path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" class="icon"
                             viewBox="0 0 256 256">
                            <path
                                d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm8,191.63V152h24a8,8,0,0,0,0-16H136V112a16,16,0,0,1,16-16h16a8,8,0,0,0,0-16H152a32,32,0,0,0-32,32v24H96a8,8,0,0,0,0,16h24v63.63a88,88,0,1,1,16,0Z">
                            </path>
                        </svg>
                    </div>
                </div>
                {{--
                <div class="order-3 col-span-2 flex justify-end md:order-none">
                    <div class="w-full border-y-2 py-4 md:border-y-0 md:py-0 lg:w-2/3">
                        <x-forms.newsletter></x-forms.newsletter>
                    </div>
                </div>
                --}}
            </div>
        </div>

        <div class="order-3 py-4 text-center md:order-none md:py-8">
            <p class="text-small">© SIA "AE Constructions" {{ now()->year }}</p>
            <p class="text-small">
                @lang('Visas tiesības aizsargātas').
            </p>
            <p class="text-small">
                @lang('Mājaslapu izstrādāja')
                <a class="text-small underline" target="_blank" href="https://slmedia.lv">S&L Media SIA</a>.
            </p>
        </div>
    </div>
</footer>

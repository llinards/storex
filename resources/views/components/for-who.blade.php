<div class="bg-storex-medium-grey-bg py-8 sm:px-12 md:px-20 lg:py-12">
    <ul class="flex justify-center border-t-1 border-storex-grey pb-4 pt-8 text-center sm:border-none sm:pt-0"
        data-tabs-toggle="#default-tab" role="tablist"
        data-tabs-active-classes="text-storex-red border-b-1 border-storex-red"
        data-tabs-inactive-classes="text-storex-inactive-grey">
        <li class="mx-4">
            <button id="business-tab" data-tabs-target="#business" type="button" role="tab" aria-controls="business"
                    aria-selected="false" aria-selected="true"
                    class="text-wrap pb-1 font-bold transition duration-200 hover:text-storex-red sm:py-0 sm:text-lg">
                @lang('Tenta angāri biznesam')
            </button>
        </li>
        <li class="mx-4">
            <button id="agriculture-tab" data-tabs-target="#agriculture" type="button" role="tab"
                    aria-controls="agriculture"
                    class="text-wrap pb-1 font-bold transition duration-200 hover:text-storex-red sm:py-0 sm:text-lg">
                @lang('Tenta angāri lauksaimniekiem')
            </button>
        </li>
    </ul>
    <div id="default-tab">
        <div class="hidden px-4 lg:px-6 xl:px-8" id="agriculture" role="tabpanel" aria-labelledby="agriculture-tab">
            <div class="items-center gap-2 py-2 text-center sm:gap-6 sm:py-4 md:flex md:text-left">
                <div class="pb-4 md:pb-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" class="icon mx-auto md:h-12 md:w-12"
                         viewBox="0 0 256 256">
                        <path
                            d="M223.68,66.15,135.68,18a15.88,15.88,0,0,0-15.36,0l-88,48.17a16,16,0,0,0-8.32,14v95.64a16,16,0,0,0,8.32,14l88,48.17a15.88,15.88,0,0,0,15.36,0l88-48.17a16,16,0,0,0,8.32-14V80.18A16,16,0,0,0,223.68,66.15ZM128,32l80.34,44-29.77,16.3-80.35-44ZM128,120,47.66,76l33.9-18.56,80.34,44ZM40,90l80,43.78v85.79L40,175.82Zm176,85.78h0l-80,43.79V133.82l32-17.51V152a8,8,0,0,0,16,0V107.55L216,90v85.77Z">
                        </path>
                    </svg>
                </div>
                <div>
                    <h3>@lang('Lauksaimniecības produktu uzglabāšana')</h3>
                    <p>
                        @lang('Mūsu angārus jau ir iecienījuši zemnieki Latvijā, Lietuvā, Polijā un citās valstīs. Lauksaimnieki tos bieži izmanto lauksaimniecības produkcijas, siena, salmu, labības un tehnikas glabāšanai.')
                    </p>
                </div>
            </div>
            <div class="items-center gap-2 py-2 text-center sm:gap-6 sm:py-4 md:flex md:text-left">
                <div class="pb-4 md:pb-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" class="icon mx-auto md:h-12 md:w-12"
                         viewBox="120 -840 720 720" fill="undefined">
                        <path
                            d="M380.77-120q-58.08 0-99.42-40.19Q240-200.38 240-256.92q0-28.85 13.54-53.73 13.54-24.89 43.38-50.89 18.31-15.23 31.5-32.11 13.2-16.89 28.35-33.27-44.85-68.77-68.12-142.73-23.27-73.97-23.27-146.5 0-44.16 11-65.54 11-21.39 32.85-21.39 33.15 0 69.31 41.54Q414.69-720 440-664.77q16.69 36.92 26.5 77.04 9.81 40.11 13.5 79.81 3.69-39.7 13.88-79.81 10.2-40.12 26.35-77.04 24.31-55.23 60.85-96.77 36.54-41.54 69.69-41.54 21.85 0 32.85 21.39 11 21.38 11 65.54 0 72.53-23.27 146.5-23.27 73.96-68.12 142.73 15.15 16.38 28.35 33.27 13.19 16.88 31.5 32.11 29.84 26 43.38 50.89Q720-285.77 720-256.92q0 56.54-41.35 96.73Q637.31-120 579.23-120q-37.31 0-68.27-12.31L480-144.62l-30.96 12.31Q418.08-120 380.77-120Zm3.08-40q20.69 0 43.69-5.88 23-5.89 43-16.89-9.46-5-17.31-15.08-7.85-10.07-7.85-17.53 0-8 9.97-12.85 9.96-4.85 24.65-4.85 13.92 0 23.5 5.23t9.58 12.47q0 7.46-7.85 17.53-7.85 10.08-17.31 15.08 20 11 43 16.89 23 5.88 43.7 5.88 43.53 0 73.69-28.23 30.15-28.23 30.15-68.69 0-21.08-11.15-38.85-11.16-17.77-34.23-37.08-12.46-10.46-19.16-17.92-6.69-7.46-16.69-20.15-34.38-45-55.69-57.04Q520.23-440 479.23-440t-62.42 12.04q-21.43 12.04-55.58 57.04-10 12.69-16.69 20.15-6.69 7.46-19.16 17.92-23.07 19.31-34.23 37.08Q280-278 280-256.92q0 40.46 30.15 68.69Q340.31-160 383.85-160ZM420-290q-8 0-14-9t-6-21q0-12 6-21t14-9q8 0 14 9t6 21q0 12-6 21t-14 9Zm120 0q-8 0-14-9t-6-21q0-12 6-21t14-9q8 0 14 9t6 21q0 12-6 21t-14 9ZM386.08-455.92q12.54-9.54 26.92-14.77 14.38-5.23 31.38-7.16-2-43.38-12.96-87.8-10.96-44.43-29.19-84.97-19.77-44.61-44.31-74.03-24.54-29.43-47.54-37.43-2 7.54-3.5 18.2-1.5 10.65-1.5 25.42 0 64.15 21.12 132.61 21.12 68.47 59.58 129.93Zm187.84 0q38.46-61.46 59.58-129.93 21.12-68.46 21.12-132.61 0-14.77-1.5-25.42-1.5-10.66-3.5-18.2-23 8-47.54 37.43-24.54 29.42-44.31 74.03-18 40.54-28.96 84.97-10.96 44.42-13.19 87.8 16.53 1.7 30.92 7.04 14.38 5.35 27.38 14.89Z"/>
                    </svg>
                </div>
                <div>
                    <h3>@lang('Dzīvnieku un putnu turēšana')</h3>
                    <p>
                        @lang('Angāri ir lieliski piemēroti pastāvīgai liellopu turēšanai. Tenta angāros veiksmīgi audzē arī citus mazos liellopus, fazānus, cāļus un aitas.')
                    </p>
                </div>
            </div>
            <div class="items-center gap-2 py-2 text-center sm:gap-6 sm:py-4 md:flex md:text-left">
                <div class="pb-4 md:pb-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" class="icon mx-auto md:h-12 md:w-12"
                         viewBox="0 0 256 256">
                        <path
                            d="M219.31,108.68l-80-80a16,16,0,0,0-22.62,0l-80,80A15.87,15.87,0,0,0,32,120v96a8,8,0,0,0,8,8h64a8,8,0,0,0,8-8V160h32v56a8,8,0,0,0,8,8h64a8,8,0,0,0,8-8V120A15.87,15.87,0,0,0,219.31,108.68ZM208,208H160V152a8,8,0,0,0-8-8H104a8,8,0,0,0-8,8v56H48V120l80-80,80,80Z">
                        </path>
                    </svg>
                </div>
                <div>
                    <h3>@lang('Lauksaimniecības tehnikas uzglabāšanai un remontam')</h3>
                    <p>
                        @lang('Uzglabātā lauksaimniecības tehnika angāros nolietojas mazāk, jo tā tiek pasargāta no dažādiem laika apstākļiem. Daudziem lauksaimniekiem tenta angāros ir ierīkota arī lauksaimniecības tehnikas remontdarbnīca.')
                    </p>
                </div>
            </div>
        </div>
        <div class="hidden text-wrap px-4 lg:px-6 xl:px-8" id="business" role="tabpanel" aria-labelledby="business-tab">
            <div class="items-center gap-2 py-2 text-center sm:gap-6 sm:py-4 md:flex md:text-left">
                <div class="pb-4 md:pb-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" class="icon mx-auto md:h-12 md:w-12"
                         viewBox="0 0 256 256">
                        <path
                            d="M223.68,66.15,135.68,18a15.88,15.88,0,0,0-15.36,0l-88,48.17a16,16,0,0,0-8.32,14v95.64a16,16,0,0,0,8.32,14l88,48.17a15.88,15.88,0,0,0,15.36,0l88-48.17a16,16,0,0,0,8.32-14V80.18A16,16,0,0,0,223.68,66.15ZM128,32l80.34,44-29.77,16.3-80.35-44ZM128,120,47.66,76l33.9-18.56,80.34,44ZM40,90l80,43.78v85.79L40,175.82Zm176,85.78h0l-80,43.79V133.82l32-17.51V152a8,8,0,0,0,16,0V107.55L216,90v85.77Z">
                        </path>
                    </svg>
                </div>
                <div>
                    <h3>@lang('Glabāšanai')</h3>
                    <p>
                        @lang('Uzņēmumi iegādājas mūsu angārus koksnes uzglabāšanai, izstrādājumu, preču un tehnikas glabāšanai. Tos savām vajadzībām izmanto jau vairāki autoservisi.')
                    </p>
                </div>
            </div>
            <div class="items-center gap-2 py-2 text-center sm:gap-6 sm:py-4 md:flex md:text-left">
                <div class="pb-4 md:pb-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" class="icon mx-auto md:h-12 md:w-12"
                         viewBox="0 0 256 256">
                        <path
                            d="M168,16A72.07,72.07,0,0,0,96,88a73.29,73.29,0,0,0,.63,9.42L27.12,192.22A15.93,15.93,0,0,0,28.71,213L43,227.29a15.93,15.93,0,0,0,20.78,1.59l94.81-69.53A73.29,73.29,0,0,0,168,160a72,72,0,1,0,0-144Zm56,72a55.72,55.72,0,0,1-11.16,33.52L134.49,43.16A56,56,0,0,1,224,88ZM54.32,216,40,201.68,102.14,117A72.37,72.37,0,0,0,139,153.86ZM112,88a55.67,55.67,0,0,1,11.16-33.51l78.34,78.34A56,56,0,0,1,112,88Zm-2.35,58.34a8,8,0,0,1,0,11.31l-8,8a8,8,0,1,1-11.31-11.31l8-8A8,8,0,0,1,109.67,146.33Z">
                        </path>
                    </svg>
                </div>
                <div>
                    <h3>@lang('Pasākumiem un ekspozīcijām')</h3>
                    <p>
                        @lang('Angāriem, kas ir mazāki par 340 m2 nav nepieciešami īpaši pamati, un tos var uzstādīt praktiski visur, izņemot smiltīs vai kūdrā. Tāpēc tā var būt pagaidu nojume pasākumu un izstāžu laikā, aizsardzībai no lietus vai speciālu preču, materiālu un mehānismu uzglabāšanai.')
                    </p>
                </div>
            </div>
            <div class="items-center gap-2 py-2 text-center sm:gap-6 sm:py-4 md:flex md:text-left">
                <div class="pb-4 md:pb-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" class="icon mx-auto md:h-12 md:w-12"
                         viewBox="0 0 256 256">
                        <path
                            d="M219.31,108.68l-80-80a16,16,0,0,0-22.62,0l-80,80A15.87,15.87,0,0,0,32,120v96a8,8,0,0,0,8,8h64a8,8,0,0,0,8-8V160h32v56a8,8,0,0,0,8,8h64a8,8,0,0,0,8-8V120A15.87,15.87,0,0,0,219.31,108.68ZM208,208H160V152a8,8,0,0,0-8-8H104a8,8,0,0,0-8,8v56H48V120l80-80,80,80Z">
                        </path>
                    </svg>
                </div>
                <div>
                    <h3>@lang('Tirgus vai izstāžu paviljoniem')</h3>
                    <p>
                        @lang('Vairākas pašvaldības un iestādes ir jau iegādājušās mūsu angārus un izmanto tos kā tirgus vai izstāžu paviljonus.')
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

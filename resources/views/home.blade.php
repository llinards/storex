<x-layout.app>
    <div class="bg-storex-light-grey">
        <div class="container sm:m-12 sm:mx-auto">
            @include('includes.header')
            <x-why-choose-us class="pb-8 pt-4"></x-why-choose-us>
        </div>
    </div>
    <div class="container sm:m-12 sm:mx-auto">
        <x-products></x-products>
    </div>
    <div class="bg-storex-light-grey py-4">
        <div class="container my-8 sm:m-12 sm:mx-auto">
            <x-why-choose-us-text></x-why-choose-us-text>
            <div class="py-16">
                @include('includes.mid-banner')
            </div>
            <x-for-who></x-for-who>
        </div>
    </div>
    {{--
    <div class="d-block d-sm-none container mt-5 px-0">
        <x-why-choose-us-mob></x-why-choose-us-mob>
    </div>
    --}}

    {{--
    </div>
    {{--
    <div class="d-none d-sm-block container p-4" id="third-section">
    </div>

    <div class="p-4" id="fifth-section">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="accordion col-sm-8" id="faq">
                    <h3 class="text-center">@lang('Biežāk uzdotie jautājumi')</h3>
                    <div class="accordion-item">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-one" aria-expanded="true" aria-controls="collapse-one">
                            <h4 class="m-0">@lang('Kāda garantija ir Jūsu produkcijai?')</h4>
                        </button>
                        <div id="collapse-one" class="accordion-collapse show collapse" data-bs-parent="#faq">
                            <div class="accordion-body"></div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-two" aria-expanded="false" aria-controls="collapse-two">
                            <h4 class="m-0">@lang('Vai iespējams salabot tenta angāru?')</h4>
                        </button>
                        <div id="collapse-two" class="accordion-collapse collapse" data-bs-parent="#faq">
                            <div class="accordion-body"></div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-three" aria-expanded="false" aria-controls="collapse-three">
                            <h4 class="m-0">@lang('Kāds ir tenta kalpošanas laiks?')</h4>
                        </button>

                        <div id="collapse-three" class="accordion-collapse collapse" data-bs-parent="#faq">
                            <div class="accordion-body"></div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-four" aria-expanded="false" aria-controls="collapse-four">
                            <h4 class="m-0">@lang('No kāda materiāla ir taisīts angāra rāmis?')</h4>
                        </button>

                        <div id="collapse-four" class="accordion-collapse collapse" data-bs-parent="#faq">
                            <div class="accordion-body">
                                @lang('Angāra rāmis ir veidots no cinkotas metāla trubas (diametrs ir 60cm)')
                                .
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-five" aria-expanded="false" aria-controls="collapse-five">
                            <h4 class="m-0">@lang('Vai vajag nostiprināt angāru pie zemes?')</h4>
                        </button>

                        <div id="collapse-five" class="accordion-collapse collapse" data-bs-parent="#faq">
                            <div class="accordion-body"></div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-six" aria-expanded="false" aria-controls="collapse-six">
                            <h4 class="m-0">@lang('Kāds ir augstums angāru sāna malai?')</h4>
                        </button>

                        <div id="collapse-six" class="accordion-collapse collapse" data-bs-parent="#faq">
                            <div class="accordion-body"></div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-seven" aria-expanded="false" aria-controls="collapse-seven">
                            <h4 class="m-0">@lang('Vai ir iespējams savienot divus angārus kopā?')</h4>
                        </button>

                        <div id="collapse-seven" class="accordion-collapse collapse" data-bs-parent="#faq">
                            <div class="accordion-body"></div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-eight" aria-expanded="false" aria-controls="collapse-eight">
                            <h4 class="m-0">@lang('Vai ir iespējams nosiltināt tikai angāru?')</h4>
                        </button>

                        <div id="collapse-eight" class="accordion-collapse collapse" data-bs-parent="#faq">
                            <div class="accordion-body"></div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-nine" aria-expanded="false" aria-controls="collapse-nine">
                            <h4 class="m-0">@lang('Vai ir iespējams iemontēt citus vārtus tenta angāros?')</h4>
                        </button>

                        <div id="collapse-nine" class="accordion-collapse collapse" data-bs-parent="#faq">
                            <div class="accordion-body"></div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-ten" aria-expanded="false" aria-controls="collapse-ten">
                            <h4 class="m-0">@lang('Vai ir iespējams iemontēt papildus mazās durvis?')</h4>
                        </button>

                        <div id="collapse-ten" class="accordion-collapse collapse" data-bs-parent="#faq">
                            <div class="accordion-body"></div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-eleven" aria-expanded="false" aria-controls="collapse-eleven">
                            <h4 class="m-0">@lang('Vai Jūsu angāriem ir ventilācija?')</h4>
                        </button>

                        <div id="collapse-eleven" class="accordion-collapse collapse" data-bs-parent="#faq">
                            <div class="accordion-body"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    --}}
</x-layout.app>
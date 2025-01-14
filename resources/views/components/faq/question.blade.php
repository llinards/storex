<div class="py-2">
    <button
        class="faq-accordion flex w-full items-center justify-between transition-all duration-200"
        aria-expanded="false"
        aria-controls="faq-panel-{{ $question }}"
    >
        <h4 class="m-0 text-left transition-all duration-200">
            {{ $question }}
        </h4>
        <svg
            data-accordion-icon
            class="acc-svg h-3 w-3 shrink-0 rotate-180 transition-all duration-200"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 10 6"
        >
            <path
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M9 5 5 1 1 5"
            />
        </svg>
    </button>
    <div
        id="faq-panel-{{ $question }}"
        class="faq-panel mt-4 border-b-1 border-storex-grey transition-all duration-200"
        aria-hidden="true"
        {{ $attributes }}
    >
        <p class="mb-4">{{ $answer }}</p>
    </div>
</div>

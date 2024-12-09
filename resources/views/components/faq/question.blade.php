<div class="py-2">
    <button class="faq-accordion flex w-full items-center justify-between">
        <h4 class="m-0 text-left">
            {{ $question }}
        </h4>
        <svg
            data-accordion-icon
            class="h-3 w-3 shrink-0 rotate-180"
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
    <div class="faq-panel mt-4 border-b-1 border-storex-grey" {{ $attributes }}>
        <p>{{ $answer }}</p>
    </div>
</div>

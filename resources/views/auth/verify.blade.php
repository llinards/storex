<x-layout.guest>
    <div class="container mx-auto">
        <div class="flex justify-center">
            <div class="w-full max-w-md">
                <div class="rounded-lg bg-white shadow-md">
                    <div class="bg-gray-200 px-6 py-4 text-lg font-semibold">
                        {{ __('Verify Your Email Address') }}
                    </div>

                    <div class="px-6 py-4">
                        @if (session('resent'))
                            <div
                                class="relative rounded border border-green-400 bg-green-100 px-4 py-3 text-green-700"
                                role="alert"
                            >
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif

                        <p class="text-gray-700">
                            {{ __('Before proceeding, please check your email for a verification link.') }}
                        </p>
                        <p class="text-gray-700">{{ __('If you did not receive the email') }},</p>
                        <form class="inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <x-honeypot/>
                            <x-btn :type="'button'">
                                {{ __('click here to request another') }}
                            </x-btn>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout.guest>

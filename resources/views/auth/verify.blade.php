<x-layout.admin>
    <div class="container mx-auto">
        <div class="flex justify-center">
            <div class="w-full max-w-md">
                <div class="bg-white shadow-md rounded-lg">
                    <div class="bg-gray-200 px-6 py-4 font-semibold text-lg">{{ __('Verify Your Email Address') }}</div>

                    <div class="px-6 py-4">
                        @if (session('resent'))
                            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
                                 role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif

                        <p class="text-gray-700">{{ __('Before proceeding, please check your email for a verification link.') }}</p>
                        <p class="text-gray-700">{{ __('If you did not receive the email') }},</p>
                        <form class="inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit" class="text-blue-500 hover:text-blue-800">
                                {{ __('click here to request another') }}
                            </button>
                            .
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout.admin>

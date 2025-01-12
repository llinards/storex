<div class="mt-4">
    @if (Session::has('success'))
        <div class="rounded-md bg-green-100 p-4">
            <div class="flex">
                <div class="flex-shrink-0">
                    <i class="bi bi-check2"></i>
                </div>
                <div class="ml-3">
                    <p class="text-sm font-medium text-green-800">{{ Session::get('success') }}</p>
                </div>
            </div>
        </div>
    @elseif (Session::has('error'))
        <div class="rounded-md bg-red-100 p-4">
            <div class="flex">
                <div class="flex-shrink-0">
                    <i class="bi bi-exclamation-lg"></i>
                </div>
                <div class="ml-3">
                    <p class="text-sm font-medium text-red-800">{{ Session::get('error') }}</p>
                </div>
            </div>
        </div>
    @endif
</div>

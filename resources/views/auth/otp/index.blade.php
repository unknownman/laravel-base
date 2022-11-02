<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('auth.otp.create') }}">
            @csrf

            <!-- Mobile Number -->
            <div>
                <x-input-label for="mobile_number" :value="__('Mobile')" />

                <x-text-input id="mobile_number" class="block mt-1 w-full" type="phone" name="mobile_number"
                    :value="old('mobile_number')" required autofocus />

                <x-input-error :messages="$errors->get('mobile_number')" class="mt-2" />
            </div>


            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Login with email?') }}
                    </a>
                @endif

                <x-primary-button class="ml-3">
                    {{ __('Send OTP') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

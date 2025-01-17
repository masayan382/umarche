<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <div class="w-64">
                <a href="/">
                    <x-application-logo class="h-20 w-20 fill-current text-gray-500" />
                </a>
            </div>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('user.login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="mt-1 block w-full" type="email" name="email" :value="old('email')" required
                    autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="mt-1 block w-full" type="password" name="password" required
                    autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="mt-4 block">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <!-- Gest Mode -->
            <div class="mt-4 block">
                <label for="user" class="inline-flex items-center">
                    <input id="user" type="checkbox"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        name="user" onClick="testUser(this.id);">
                    <span class="ml-2 text-sm text-gray-600">{{ __('テストアカウントでログインする') }}</span>
                </label>
            </div>

            <div class="mt-4 flex items-center justify-between">
                <div
                    class="mt-6 flex justify-around text-xs text-indigo-600 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <a class="text-sm text-gray-600 underline hover:text-gray-900"
                        href="{{ route('user.password.request') }}">
                        パスワードを忘れた
                    </a>
                </div>
                <div
                    class="mt-6 flex justify-around text-xs text-indigo-600 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <a class="text-sm text-gray-600 underline hover:text-gray-900"
                        href="{{ route('user.register') }}">
                        アカウントを登録する
                    </a>
                </div>
                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>

            <div
                class="mt-6 flex justify-around text-xs text-indigo-600 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <a href="{{ url('owner/login') }}">オーナーのログインページへ</a>
                <a href="{{ url('admin/login') }}">管理者のログインページへ</a>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

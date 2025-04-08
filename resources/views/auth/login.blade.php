<x-guest-layout>
    <style>
        body {
            background: linear-gradient(135deg, #ffe6f0, #fff5fa);
            font-family: 'Quicksand', sans-serif;
        }

        form {
            background-color: #fff;
            padding: 2rem;
            border-radius: 1.5rem;
            box-shadow: 0 10px 25px rgba(255, 192, 203, 0.3);
            max-width: 400px;
            margin: 2rem auto;
        }

        .form-label {
            color: #b14578;
            font-weight: 600;
        }

        input[type="email"],
        input[type="password"] {
            border: 1px solid #f5c6d6;
            border-radius: 1rem;
            padding: 0.75rem;
        }

        input[type="email"]:focus,
        input[type="password"]:focus {
            outline: none;
            border-color: #f7a1c4;
            box-shadow: 0 0 0 2px #f9dce6;
        }

        input[type="checkbox"] {
            accent-color: #f7a1c4;
        }

        .remember-label {
            color: #a35d85;
        }

        .login-button {
            background-color: #f7a1c4;
            color: white;
            font-weight: bold;
            padding: 0.5rem 1.5rem;
            border-radius: 1rem;
            transition: background-color 0.3s ease;
        }

        .login-button:hover {
            background-color: #e58cb5;
        }

        .forgot-link {
            color: #b14578;
            font-size: 0.875rem;
        }

        .forgot-link:hover {
            text-decoration: underline;
        }
    </style>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label class="form-label" for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                          :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label class="form-label" for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full"
                          type="password"
                          name="password"
                          required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                       class="rounded border-gray-300 text-pink-500 shadow-sm focus:ring-pink-300"
                       name="remember">
                <span class="ms-2 text-sm remember-label">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-between mt-4">
            @if (Route::has('password.request'))
                <a class="forgot-link" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="login-button ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

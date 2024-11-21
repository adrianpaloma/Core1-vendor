
<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-validation-errors class="mb-4" />
        <div class="splash-container">
            <div class="card">
                <div class="card-header text-center"><img class="logo-img" src="home/assets/images/logo.png" alt="logo"><span class="splash-description">Please enter your user information.</span></div>
                <div class="card-body">
                    <form method="POST" action="{{ route('password.email') }}>
                        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                        <div class="form-group">
                            <input class="form-control form-control-lg" type="email" name="email" required="" placeholder="Your Email" autocomplete="off">
                        </div>
                        <div class="form-group pt-1"><a class="btn btn-block btn-primary btn-xl" href="../index.html">Reset Password</a></div>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <span>Don't have an account? <a href="pages-sign-up.html">Sign Up</a></span>
                </div>
            </div>
        </div>
        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>

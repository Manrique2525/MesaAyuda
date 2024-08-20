<x-guest-layout>
    <!-- Estructura del contenedor -->
    <main>
        <div class="container">
            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                            <div class="d-flex justify-content-center py-4">
                                <a href="/" class="logo d-flex align-items-center w-auto">
                                    <span class="d-none d-lg-block">NiceAdmin</span>
                                </a>
                            </div><!-- End Logo -->

                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                                        <p class="text-center small">Enter your username & password to login</p>
                                    </div>

                                    <!-- Aquí empieza el formulario -->
                                    <form method="POST" action="{{ route('login') }}" class="row g-3 needs-validation" novalidate>
                                        @csrf

                                        <!-- Email Address -->
                                        <div class="col-12">
                                            <label for="email" class="form-label">{{ __('Email') }}</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                <input type="email" name="email" class="form-control" id="email" :value="old('email')" required autofocus autocomplete="username">
                                                <div class="invalid-feedback">
                                                    Please enter your username.
                                                </div>
                                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                            </div>
                                        </div>

                                        <!-- Password -->
                                        <div class="col-12">
                                            <label for="password" class="form-label">{{ __('Password') }}</label>
                                            <input type="password" name="password" class="form-control" id="password" required autocomplete="current-password">
                                            <div class="invalid-feedback">
                                                Please enter your password!
                                            </div>
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>

                                        <!-- Remember Me -->
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" value="true" id="remember_me">
                                                <label class="form-check-label" for="remember_me">
                                                    {{ __('Remember me') }}
                                                </label>
                                            </div>
                                        </div>

                                        <!-- Submit Button -->
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">{{ __('Log in') }}</button>
                                        </div>

                                        <!-- Forgot Password -->
                                        <div class="col-12">
                                            <p class="small mb-0">
                                                @if (Route::has('password.request'))
                                                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                                    {{ __('Forgot your password?') }}
                                                </a>
                                                @endif
                                            </p>
                                        </div>
                                    </form>
                                    <!-- Aquí termina el formulario -->
                                </div>
                            </div>

                            <div class="col-12">
                                <p class="small mb-0">Don't have an account? <a href="{{ route('register') }}">Create an account</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
</x-guest-layout>

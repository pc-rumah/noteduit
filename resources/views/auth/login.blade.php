<x-guest-layout title="Login">
    <div class="row h-100">
        <div class="col-lg-5 col-12">
            <div id="auth-left">
                <h1 class="auth-title">Log in.</h1>
                <p class="auth-subtitle mb-5">Log in with your data that you entered during registration.</p>

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="email" class="form-control form-control-xl" placeholder="Email" name="email"
                            :value="old('email')" required autofocus>
                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="password" class="form-control form-control-xl" placeholder="Password"
                            name="password" required>
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                    </div>
                    <div class="form-check form-check-lg d-flex align-items-end">
                        <input class="form-check-input me-2" type="checkbox" name="remember" value=""
                            id="flexCheckDefault">
                        <label class="form-check-label text-gray-600" for="flexCheckDefault">
                            Keep me logged in
                        </label>
                    </div>
                    <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>

                    <div class="mt-5">
                        <a href="{{ route('google.redirect') }}"
                            class="flex w-full items-center justify-center gap-2
               rounded-md border border-gray-300 px-4 py-2
               text-sm font-medium text-gray-700
               hover:bg-gray-50">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="20" height="20"
                                aria-hidden="true">
                                <path fill="#4285F4" d="M43.6 24.5c0-1.4-.1-2.8-.4-4.1H24v7.8h11
                c-.5 2.5-1.9 4.6-4.1 6v5h6.6c3.9-3.6 6.1-8.8
                6.1-14.7z" />
                                <path fill="#34A853" d="M24 44c5.5 0 10.1-1.8 13.5-4.8l-6.6-5
                c-1.8 1.2-4.1 2-6.9 2-5.3 0-9.8-3.6-11.4-8.4H5.8
                v5.2C9.2 37.5 16 44 24 44z" />
                                <path fill="#FBBC05" d="M12.6 26.8a12 12 0 0 1 0-7.6V14H5.8
                a20 20 0 0 0 0 18z" />
                                <path fill="#EA4335" d="M24 10.8c3 0 5.7 1 7.8 3.1l5.8-5.8
                C34.1 4.8 29.5 3 24 3 16 3 9.2 9.5 5.8 14
                l6.8 5.2c1.6-4.8 6.1-8.4 11.4-8.4z" />
                            </svg>

                            Login dengan Google
                        </a>
                    </div>
                </form>
                <div class="text-center mt-5 text-lg fs-4">
                    <p class="text-gray-600">Don't have an account? <a href="/register" class="font-bold">Sign
                            up</a>.</p>
                    <p><a class="font-bold" href="{{ route('password.request') }}">Forgot password?</a></p>
                </div>
            </div>
        </div>
        <div class="col-lg-7 d-none d-lg-block">
            <div id="auth-right">

            </div>
        </div>
    </div>
</x-guest-layout>

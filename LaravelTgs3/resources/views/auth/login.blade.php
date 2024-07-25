@extends('layouts.apps')
<main>
    <div class="container">

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 d-flex flex-column align-items-center justify-content-center">

                        <div class="d-flex justify-content-center py-4">
                            <a href="index.html" class="logo d-flex align-items-center w-auto">
                                <img src="assets/img/logo.png" alt="">
                                <span class="d-none d-lg-block">Admin</span>
                            </a>
                        </div>

                        <div class="card mb-3">

                            <div class="card-body">

                                <div class="pt-4 pb-2 ps-5 pe-5">
                                    <h5 class="card-title text-center pb-0 fs-4">Login</h5>
                                    <p class="text-center small">Enter your Email & password to login</p>
                                </div>

                                <form action="{{ route('login') }}" method="POST">
                                    @csrf

                                    <div class="col-12">
                                        <label for="yourEmail" class="form-label">Username</label>
                                        <div class="input-group has-validation">
                                            <input type="text" name="username" :value="old('username')"
                                                class="form-control @error('username') is-invalid @enderror"
                                                id="yourEmail" required>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="yourPassword" class="form-label">Password</label>
                                        <input type="password" name="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            id="yourPassword" required>
                                    </div>

                                    <div class="row">
                                        <div class="col-6 mt-2 mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    value="true" wire:model.defer="remember" id="rememberMe">
                                                <label class="form-check-label" for="rememberMe">Remember me</label>
                                            </div>
                                        </div>
                                        <div class="col-6 mt-2 mb-2">
                                            <a href="{{ route('password.request') }}">Forget
                                                password</a>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit">Login</button>
                                    </div>
                                    <div class="col-12 mt-2">
                                        <p class="small mb-0">Don't have account? <a
                                                href="{{ route('register') }}">Create
                                                an
                                                account</a></p>
                                    </div>

                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>

    </div>
</main>
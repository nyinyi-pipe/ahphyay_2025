@extends('landing')

@section('title')
    - Login
@endsection

@section('content')
    @include('components.bread-crumb-landing', ['title' => 'Login', 'route' => 'login'])
    <x-login-reg-layout>

        <div class="tab-pane fade show active" id="login" role="tabpanel">
            <div class="login-reg-form-wrap">
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="single-input-item">
                        <x-text-input id="email" placeholder="Email" class="block mt-1 w-full" type="email"
                            name="email" :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2 alert-danger" />
                    </div>

                    <div class="single-input-item">
                        <x-text-input id="password" placeholder="Password" class="block mt-1 w-full" type="password"
                            name="password" required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2 alert-danger" />
                    </div>

                    <div class="single-input-item">
                        <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                            <div class="remember-meta">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="rememberMe">
                                    <label class="custom-control-label" for="rememberMe">Remember
                                        Me</label>
                                </div>
                            </div>

                            <a href="{{ route('password.request') }}" class="forget-pwd">Forget Password?</a>
                        </div>
                    </div>

                    <div class="single-input-item">
                        <button class="btn-login">Login</button>
                    </div>
                </form>
            </div>
        </div>


    </x-login-reg-layout>
@endsection

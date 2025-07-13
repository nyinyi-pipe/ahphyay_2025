@extends('landing')

@section('title')
    - Register
@endsection

@section('content')
    @include('components.bread-crumb-landing', ['title' => 'Register', 'route' => 'register'])
    <x-login-reg-layout>

        <div class="tab-pane fade show active" id="login" role="tabpanel">
            <div class="login-reg-form-wrap">
                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="single-input-item">
                        <x-text-input id="username" class="" placeholder="Username" type="text" name="username" :value="old('username')" 
                            autofocus autocomplete="username" required />
                        <x-input-error :messages="$errors->get('username')" class="mt-2 alert-danger" />
                    </div>

                    <div class="single-input-item">
                        <x-text-input id="email" class="" placeholder="Email" type="email" name="email" :value="old('email')" 
                            autocomplete="email" required />
                        <x-input-error :messages="$errors->get('email')" class="mt-2 alert-danger" />
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="single-input-item">
                                <x-text-input id="password" class="" placeholder="Password" type="password" name="password" 
                                    autocomplete="new-password" required />

                                <x-input-error :messages="$errors->get('password')" class="mt-2 alert-danger" />
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="single-input-item">
                                <x-text-input id="password_confirmation" class="" placeholder="Confirm Password" type="password"
                                    name="password_confirmation"  autocomplete="new-password" required />

                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 alert-danger" />
                            </div>
                        </div>
                    </div>

                    {{-- <div class="single-input-item">
                        <div class="login-reg-form-meta">
                            <div class="remember-meta">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="subnewsletter">
                                    <label class="custom-control-label" for="subnewsletter">Subscribe
                                        Our Newsletter</label>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    <div class="single-input-item">
                        <button class="btn-login">Register</button>
                    </div>
                </form>
            </div>
        </div>



    </x-login-reg-layout>
@endsection

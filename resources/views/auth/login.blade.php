@extends('layouts.app')

@section('content')

<div class ="container-login100 font-custom">
    <div class="wrap-login100">
        <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
            @csrf
            <span class="login100-form-title p-b-43">
                 Login to continue
            </span>

            <div class="box-error">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>* {{ $message }}</strong>
                    </span>
                @enderror 

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>* {{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class ="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                <input id="email" type="email" class="input100 form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email" autofocus>
                <span class="focus-input100"></span>
                <span class ="label-input100">Email</span>

                   
            </div>

            <div class="wrap-input100 validate-input" data-validate="Password is required">
                <input id="password" type="password" class="input100 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                <span class="focus-input100"></span>
                <span class ="label-input100">Password</span>

                
            </div>

            <div class="flex-sb-m w-full p-t-3 p-b-32">
                <div class="contact100-form-checkbox">
                    <input class="form-check-input input-checkbox100" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class ="label-checkbox100" id="remember">
                        Remember me
                    </label>
                </div>

                <div class="">
                    @if (Route::has('password.request'))
                    <a class="txt1" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
                </div>
            </div>


            <div class="container-login100-form-btn">
                <button class="login100-form-btn" type="submit">{{ __('Login') }}</button>
            </div>

            <div class="text-center p-t-46 p-b-20">
                <span class="txt2">
                    or sign up using
                </span>
            </div>

            <div class="login100-form-social flex-c-m">
                <a class="login100-form-social-item flex-c-m bg1 m-r-5" href="#">
                    <i class="fa fa-facebook-f" aria-hidden="true"></i>
                </a>
            </div>
        </form>

        <div class="login100-more" style=""></div>
    </div>

    
    
</div>
@endsection

                                
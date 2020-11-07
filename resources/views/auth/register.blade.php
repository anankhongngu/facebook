@extends('layouts.app')

@section('content')

<div class ="container-login100 font-custom">
    <div class="wrap-login100">
        <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
            @csrf
            <span class="login100-form-title p-b-43">
                 Register to continue
            </span>

            <div class="box-error">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>* {{ $message }}</strong>
                    </span>
                @enderror 

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

                @error('password-confirm')
                    <span class="invalid-feedback" role="alert">
                        <strong>* {{ $message }}</strong>
                    </span>
                @enderror 

            </div>

            <div class ="wrap-input100 validate-input" data-validate="Name is required">
                <input id="name" type="text" class="input100 form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                <span class="focus-input100"></span>
                <span class ="label-input100">Name</span>
                   
            </div>


            <div class ="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                <input id="email" type="email" class="input100 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                <span class="focus-input100"></span>
                <span class ="label-input100">Email</span>
                   
            </div>

            <div class="wrap-input100 validate-input" data-validate="Password is required">
                <input id="password" type="password" class="input100 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                <span class="focus-input100"></span>
                <span class ="label-input100">Password</span>

                
            </div>

            <div class="wrap-input100 validate-input" data-validate="Password is required">
                <input id="password-confirm" type="password" class="input100 form-control" name="password_confirmation" required autocomplete="new-password">

                <span class="focus-input100"></span>
                <span class ="label-input100">Password</span>

                
            </div>            

            
            <div class="container-login100-form-btn">
                <button type="submit" class="login100-form-btn my-4">
                    {{ __('Register') }}
                </button>
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

                                
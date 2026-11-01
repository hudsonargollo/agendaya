@extends('layouts.auth')
@section('page-title')
    {{__('Login')}}
@endsection
@section('language-bar')
<div class="lang-dropdown-only-desk ms-2">
    <li class="dropdown dash-h-item drp-language">
        <a class="dash-head-link dropdown-toggle btn" href="#" data-bs-toggle="dropdown" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-globe h-4 w-4"><circle cx="12" cy="12" r="10"></circle><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path><path d="M2 12h20"></path></svg>
            <span class="drp-text"> {{Str::upper($lang)}}
            </span>
        </a>
        <div class="dropdown-menu dash-h-dropdown dropdown-menu-end">
            @foreach (languages() as $key => $language)
                <a href="{{ route('login',$key) }}"
                    class="dropdown-item @if ($lang == $key) text-primary  @endif">
                    <span>{{Str::ucfirst($language)}}</span>
                </a>
            @endforeach
        </div>
    </li>
</div>
@endsection
@php
    $admin_settings = getAdminAllSetting();
@endphp

@section('content')
<div class="card">
    <div class="card-body">
        <div class="text-center">
            <h2 class="mb-2 h3 f-w-600">{{ __('Log in to your account') }}</h2>
            <div class="text-border-bottom"></div>
            <p>Enter your email and password below to log in</p>
        </div>
        <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="" id="form_data">
            @csrf
            <div>
                <div class="form-group mb-3">
                    <label class="form-label">{{ __('Email') }}</label>
                    <input id="email" type="email" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="{{ __('E-Mail Address') }}" required autofocus>
                    @error('email')
                        <span class="error invalid-email text-danger" role="alert">
                            <small>{{ $message }}</small>
                        </span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <label class="form-label mb-0">{{ __('Password') }}</label>
                         @if (Route::has('password.request'))
                        <div>
                            <a href="{{ route('password.request') }}" class="text-primary text-underline--dashed border-primar">{{ __('Forgot Your Password?') }}</a>
                        </div>
                        @endif
                    </div>
                    <input id="password" type="password" class="form-control  @error('password') is-invalid @enderror" name="password" placeholder="{{ __('Password') }}" required>
                    @error('password')
                    <span class="error invalid-password text-danger" role="alert">
                        <small>{{ $message }}</small>
                    </span>
                    @enderror
                   
                </div>
                @if(module_is_active('GoogleCaptcha') && (isset($admin_settings['google_recaptcha_is_on']) ? $admin_settings['google_recaptcha_is_on'] : 'off') == 'on' )
                    @if (isset($admin_settings['google_recaptcha_version']) && $admin_settings['google_recaptcha_version'] == 'v2')
                        <div class="form-group col-lg-12 col-md-12 mt-3">
                            {!! NoCaptcha::display() !!}
                            @error('g-recaptcha-response')
                            <span class="error small text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    @else
                        @if (isset($admin_settings['google_recaptcha_version']) && $admin_settings['google_recaptcha_version'] == 'v3')
                            <div class="form-group mb-4">
                                <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response" class="form-control">
                                @error('g-recaptcha-response')
                                    <span class="error small text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        @endif
                    @endif
                @endif

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-block mt-2 login_button" tabindex="4">{{ __('Login') }}</button>
                </div>
                @if (empty( $admin_settings['signup']) ||  (isset($admin_settings['signup']) ? $admin_settings['signup'] : 'off') == "on")
                    <p class="mt-4 mb-0 text-center">{{ __("Don't have an account?") }}
                        <a href="{{route('register')}}" class="my-4 text-primary">{{__('Register')}}</a>
                    </p>
                @endif
            </div>
        </form>
    </div>
</div>
@endsection
@push('script')
<script>
    "use strict";
    $(document).on('submit', '#form_data', function(e) {
            $(".login_button").prop("disabled", true);
            return true;
        });
    </script>
    @if(module_is_active('GoogleCaptcha') && (isset($admin_settings['google_recaptcha_is_on']) ? $admin_settings['google_recaptcha_is_on'] : 'off') == 'on' )
        @if (isset($admin_settings['google_recaptcha_version']) && $admin_settings['google_recaptcha_version'] == 'v2')
            {!! NoCaptcha::renderJs() !!}
        @else
            @if (isset($admin_settings['google_recaptcha_version']) && $admin_settings['google_recaptcha_version'] == 'v3')
                <script src="https://www.google.com/recaptcha/api.js?render={{ $admin_settings['google_recaptcha_key'] }}"></script>
                <script>
                    $(document).ready(function() {
                        grecaptcha.ready(function() {
                            grecaptcha.execute('{{ $admin_settings['google_recaptcha_key'] }}', {
                                action: 'submit'
                            }).then(function(token) {

                                $('#g-recaptcha-response').val(token);
                            });
                        });
                    });
                </script>
            @endif
        @endif
    @endif
@endpush

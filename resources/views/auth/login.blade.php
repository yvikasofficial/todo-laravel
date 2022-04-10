@extends('layouts.app')

@section('content')
   <div class="h-screen w-full flex items-center justify-center">
       <div class="bg-cGrey p-16 rounded-lg shadow-lg">
            <div class="text-4xl text-center font-bold uppercase mb-6 text-primary">{{ __('Login') }}</div>
            <div class="w-80">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="email" >{{ __('Email Address') }}</label>
                        <div class="col-md-6">
                            <input id="email" type="email" class="w-full rounded border-primary @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="text-red-500 text-sm">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="password">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="w-full rounded border-primary @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="text-red-500 text-sm">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="flex justify-center items-center mb-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>

                    <div>
                        <div class="flex flex-col items-center justify-center gap-4">
                            <button type="submit" class="bg-primary px-12 py-3 rounded text-white">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
       </div>
   </div>
@endsection

@extends('site.layouts.index')
@section('content')
    <div class="container">
        <form class="form-control" method="POST" action="{{ route('login') }}">
            @csrf
            <div>
                <label for="email">ایمیل:</label>
                <input id="email" class="form-control" type="email" name="email" value="{{old('email')}}" required
                       autofocus/>
            </div>
            <div class="mt-4">
                <label for="password">رمزورود:</label>
                <input id="password" class="form-control"
                       type="password"
                       name="password"
                       required autocomplete="current-password"/>
            </div>
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                           name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>
            <div class="flex items-center justify-end mt-4">
                {{--                @if (Route::has('password.request'))--}}
                {{--                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">--}}
                {{--                        {{ __('Forgot your password?') }}--}}
                {{--                    </a>--}}
                {{--                @endif--}}
                <button type="submit" class="btn btn-outline-success">
                    {{ __('Log in') }}
                </button>
            </div>
        </form>
    </div>
@endsection
